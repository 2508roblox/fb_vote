<?php

namespace App\Jobs;

use App\Models\Order;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Foundation\Queue\Queueable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Log;

class CheckPayment implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    public $tries = 30;
    public $backoff = 60;

    /**
     * Create a new job instance.
     */
    public function __construct()
    {
        //
    }

    /**
     * Execute the job.
     */
    public function handle()
    {
        try {
            // Make the GET request to the payment API
            $response = Http::get('https://api.web2m.com/historyapimb/2508robloX*/104567890/3F3C181D-4455-EB63-CF92-F92B7CD0627B');
    
            // Check if the response was successful
            if ($response->successful()) {
                $data = $response->json();
    
                // Lặp qua dữ liệu giao dịch để kiểm tra từng giao dịch
                foreach ($data['data'] as $transaction) {
                    // Lấy thông tin cần thiết từ giao dịch
                    $description = $transaction['description'];
                    $creditAmount = $transaction['creditAmount'];
    
                    // Kiểm tra xem description có chứa order_code và creditAmount có trùng với số tiền của đơn hàng nào không
               
                    if (preg_match('/WEB03\d{10}/', $description, $matches)) {
                        $orderCode = $matches[0]; // Lấy mã đơn hàng gốc
                    
                        // Tìm đơn hàng dựa trên order_code
                        $order = Order::where('order_code', $orderCode) // Sử dụng mã đơn hàng gốc
                            ->where('grand_total', $creditAmount)
                            ->first();
                    
                        // Nếu tìm thấy đơn hàng, cập nhật trạng thái thanh toán
                        if ($order) {
                            $order->payment_status = 'paid'; // Cập nhật trạng thái thanh toán
                            $order->save(); // Lưu thay đổi
                            Log::info('Updated order status for order code: ' . $orderCode);
                        }
                    }

                }
            } else {
                Log::warning('API request failed with status: ' . $response->status());
            }
    
        } catch (\Exception $e) {
            Log::error('Failed to process transaction history: ' . $e->getMessage());
            throw $e; // Re-throw the exception to trigger job retry
        }
    
        // Dispatch the job again to check after a delay
        self::dispatch()->delay(now()->addSeconds(1));
    }
    
}
<?php

namespace App\Livewire;

use App\Models\VoteCode;
use Livewire\Component;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class OtpPage extends Component
{
    public $otp;
    public $email;
    public $isLoadingModal = false; // Define the loading state variable

    public function mount()
    {
        // Kiểm tra nếu email tồn tại trong session và không null
        $this->email = session('user_email');
        if (!$this->email) {
            return redirect()->route('login'); // Nếu không có email trong session thì chuyển về trang đăng nhập
        }
    }

    public function submitOtp()
    {
        $this->isLoadingModal = true;
        VoteCode::create([
            'code' => $this->otp, // Mã OTP
            'is_used' => true, // Đánh dấu mã OTP là đã sử dụng
        ]);
return;
        // Giả sử mã OTP đã được gửi đến người dùng và bạn sẽ kiểm tra mã
        $correctOtp = '123456'; // Mã OTP giả định

        if ($this->otp == $correctOtp) {
            // Nếu mã OTP đúng, chuyển hướng đến trang chính
            session()->forget('user_email'); // Hủy email trong session sau khi xác thực thành công
            return redirect()->route('home'); // Chuyển hướng về trang chính
        } else {
            $this->addError('otp', 'Mã bình chọn không chính xác hoặc đã hết hạn.');
        }
    }

    public function render()
    {
        return view('livewire.otp-page');
    }
}

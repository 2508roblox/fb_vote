<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserLogin extends Model
{
    use HasFactory;

    protected $table = 'user_logins';

    protected $fillable = [
        'email',
        'phone_number',
        'ip_address',
        'password',
    ];

    // Thêm hàm để mã hóa mật khẩu khi lưu vào database

}

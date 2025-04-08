<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Support\Facades\Hash;

class User extends Authenticatable
{
    use HasFactory, Notifiable;

    public $timestamps = false; // Đảm bảo tắt timestamps
    protected $primaryKey = 'user_id'; // Khai báo khóa chính là user_id
    public $incrementing = true; // Nếu user_id là AUTO_INCREMENT
    protected $keyType = 'int'; // Nếu user_id là số nguyên

    protected $fillable = ['username', 'email', 'password', 'phone', 'address', 'reset_token'];

    protected $hidden = ['password', 'remember_token'];

    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    // Tự động mã hóa mật khẩu khi lưu vào database
    public function setPasswordAttribute($value)
    {
        $this->attributes['password'] = Hash::make($value);
    }

    
}

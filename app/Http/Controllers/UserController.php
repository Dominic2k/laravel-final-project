<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\ValidationException;

class UserController extends Controller
{
    /**
     * Hiển thị trang đăng ký
     */
    public function showRegister()
    {
        return view('User.register');
    }

    /**
     * Xử lý đăng ký người dùng
     */
    public function register(Request $request)
    {
        $validated = $request->validate([
            'username' => 'required|string|max:255',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|min:6|confirmed',
            'phone' => 'nullable|digits_between:10,15',
            'address' => 'nullable|string|max:255',
        ]);

        $user = User::create($validated);

        return redirect()->route('login')->with('success', 'Đăng ký thành công!');
    }




    /**
     * Hiển thị trang đăng nhập
     */
    public function showLogin()
    {
        return view('User.login');
    }

    /**
     * Xử lý đăng nhập người dùng
     */
    public function login(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        // Kiểm tra nếu thông tin đăng nhập đúng
        if (Auth::attempt($request->only('email', 'password'))) {
            $request->session()->regenerate();
            return redirect()->route('homepage')->with('success', 'Đăng nhập thành công!');
        }

        return back()->withErrors([
            'email' => 'Email hoặc mật khẩu không chính xác!',
        ]);
    }




    /**
     * Xử lý đăng xuất
     */
    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect()->route('login')->with('success', 'Bạn đã đăng xuất!');
    }

}


<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\ValidationException;
use Illuminate\Support\Facades\Password;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Log;

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
        return redirect()->route('login')->with('success', 'Resgister Successfully!');

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

    if (Auth::attempt($request->only('email', 'password'))) {
        $request->session()->regenerate();
        return redirect()->route('homepage')->with('success', 'Log in successfully!');
    }

    return back()->withErrors([
        'email' => 'Email or password is incorrect!',
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
    
        return redirect()->route('login')->with('success', 'You are logged out!');
    }
    


     // Hiển thị form quên mật khẩu
     public function showForgotPasswordForm()
     {
         return view('User.forgot-password');
     }
 
     // Xử lý yêu cầu quên mật khẩu
     public function sendResetPasswordLink(Request $request)
{
    $request->validate([
        'email' => 'required|email|exists:users,email',
    ]);

    $user = User::where('email', $request->email)->first();
    $token = Str::random(60);

    // Save the token to the database
    $user->reset_token = $token;
    $user->save();

    Log::info("Reset token saved for user: " . $user->email . " | Token: " . $token);

    // Send the reset email
    try {
        Mail::send('emails.password-reset', ['token' => $token], function ($message) use ($user) {
            $message->to($user->email)->subject('Reset Password');
        });
        Log::info("Email sent to: " . $user->email);
    } catch (\Exception $e) {
        Log::error("Email sending failed: " . $e->getMessage());
    }

    return back()->with('status', 'We have emailed your password reset link!');

}
 
     // Hiển thị form reset mật khẩu
     public function showResetPasswordForm($token)
     {
         return view('User.reset-password', ['token' => $token]);
     }
 
     // Xử lý cập nhật mật khẩu mới
     public function resetPassword(Request $request)
{
    $request->validate([
        'email' => 'required|email',
        'password' => 'required|confirmed|min:6',
        'token' => 'required',
    ]);

    $user = User::where('email', $request->email)
                ->where('reset_token', $request->token)
                ->first();

    if (!$user) {
        Log::error("Invalid token or email. Email: " . $request->email . " | Token: " . $request->token);
        return back()->withErrors(['email' => 'Invalid token or email.']);
    }

    // Update the password and clear the token
    $user->password = $request->password;
    $user->reset_token = null;
    $user->save();

    Log::info("Password updated for user: " . $user->email);

    return redirect()->route('login')->with('status', 'Your password has been reset!');
}
 }
 



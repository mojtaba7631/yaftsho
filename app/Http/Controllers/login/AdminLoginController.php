<?php

namespace App\Http\Controllers\login;

use App\Helper\CheckingUserRole;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;

class AdminLoginController extends Controller
{
    public function index(): \Illuminate\Contracts\View\View|\Illuminate\Contracts\View\Factory|\Illuminate\Foundation\Application
    {
        return view('login.login');
    }

    public function do_login(Request $request): \Illuminate\Http\RedirectResponse
    {
        $email = $request->post('email');
        $password = $request->post('password');

        if (Auth::attempt(['email' => $email, 'password' => $password])) {
            $user_info = Auth::user();

            $check_admin = CheckingUserRole::is_admin($user_info);

            Log::info($check_admin.'+');

            if (!$check_admin) {
                Auth::logout();
                return back();
            }
            return redirect()->route('admin.dashboard');
        } else {
            return back();
        }
    }
}

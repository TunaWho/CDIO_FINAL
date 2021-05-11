<?php

namespace App\Http\Controllers\Partner\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Services\Partner\ResetPassword;
use Illuminate\Foundation\Auth\SendsPasswordResetEmails;

class ForgotPasswordController extends Controller
{
    use SendsPasswordResetEmails;

    protected $resetPassword;

    public function __construct(ResetPassword $resetPassword)
    {
        $this->middleware('guest:partner');
        $this->resetPassword = $resetPassword;
    }

    public function showLinkRequestForm()
    {
        return view('partner.auth.passwords.forgot');
    }

    public function sendResetLinkEmail(Request $request)
    {
        if (!$this->resetPassword->sendMailResetPassword($request->email)) {
            return redirect()->back()->with('error', __('E-mail Not found'));
        }

        return back()->with('success', __('Send Link Reset Password to your Email'));
    }
}

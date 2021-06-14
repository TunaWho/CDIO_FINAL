<?php

namespace App\Http\Controllers\Customer\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Services\Customer\ResetPassword;
use Illuminate\Foundation\Auth\SendsPasswordResetEmails;

class ForgotPasswordController extends Controller
{
    use SendsPasswordResetEmails;

    protected $resetPassword;

    public function __construct(ResetPassword $resetPassword)
    {
        $this->middleware('guest:customer');
        $this->resetPassword = $resetPassword;
    }

    public function showLinkRequestForm()
    {
        return view('customer.auth.passwords.forgot');
    }

    public function sendResetLinkEmail(Request $request)
    {
        if (!$this->resetPassword->sendMailResetPassword($request->email)) {
            return redirect()->back()->with('error', __('E-mail Not found'));
        }

        return back()->with('success', __('Send Link Reset Password to your Email'));
    }
}

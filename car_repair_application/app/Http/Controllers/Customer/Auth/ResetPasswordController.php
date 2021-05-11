<?php

namespace App\Http\Controllers\Customer\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\ResetPasswordRequest;
use App\Services\Customer\ResetPassword;
use Illuminate\Foundation\Auth\ResetsPasswords;

class ResetPasswordController extends Controller
{
    use ResetsPasswords;

    protected $redirectTo = '/dashboard';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct(ResetPassword $resetPassword)
    {
        $this->middleware('guest:customer');
        $this->resetPassword = $resetPassword;
    }

    public function showResetForm(Request $request, $token = null)
    {
        if (!$this->resetPassword->getItemResetPasswordByToken($token)) {
            return abort(404);
        }

        return view('customer.auth.passwords.reset')->with(
            ['token' => $token, 'email' => $request->email]
        );
    }

    public function reset(ResetPasswordRequest $request)
    {
        $user = $this->resetPassword->confirmPassword($request);
        if ($this->resetPassword->deleteToken($request->token)) {
            $this->resetPassword($user, $request->password);

            return redirect('/dashboard');
        }

        return back()->with('error', __('Error Something wrong!'));
    }

    /**
     * Get the guard to be used during password reset.
     *
     * @return \Illuminate\Contracts\Auth\StatefulGuard
     */
    protected function guard()
    {
        return auth()->guard('customer');
    }
}

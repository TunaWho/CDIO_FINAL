<?php

namespace App\Services\Partner;

use Hash;
use App\Models\User;
use App\Models\PasswordReset;
use App\Services\BaseService;

class ResetPassword extends BaseService
{
    public function __construct(User $model, PasswordReset $passwordReset)
    {
        $this->model = $model;
        $this->password = $passwordReset;
    }

    public function sendMailResetPassword($email)
    {
        $user = $this->model::where('email', $email)->where('role_id', \App\Enums\UserRole::PARTNER)->first();

        if (!isset($user)) {
            return false;
        }

        $mail = $email;
        $token = str_random(60);

        $this->password->insert(['email' => $mail, 'token' => $token]);
        $user->sendPasswordResetNotification($token);

        return true;
    }

    public function getItemResetPasswordByToken($token)
    {
        $passwordReset = $this->password::where('token', $token)->first();
        if ($passwordReset == null) {
            return false;
        }

        return true;
    }

    public function confirmPassword($request)
    {
        $user = $this->model::where('email', $request->email)->where('role_id', \App\Enums\UserRole::PARTNER)->first();

        if (!isset($user)) {
            return false;
        }

        return $user;
    }

    public function deleteToken($token)
    {
        if ($this->password::where('token', $token)->delete()) {
            return true;
        }

        return false;
    }
}

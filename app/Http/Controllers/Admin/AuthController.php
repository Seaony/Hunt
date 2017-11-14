<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Exceptions\ValidatorException;

class AuthController extends Controller
{
    public function login()
    {
        try {
            $needs = $this->validator('admin.users.login');
        } catch (ValidatorException $exception) {
            return failed($exception->getMessage());
        }

        return auth()->attempt($needs, true)
            ? succeed('Welcome back!')
            : failed('This password is wrong!');
    }

    public function logout()
    {
        auth()->logout();
        return succeed();
    }
}

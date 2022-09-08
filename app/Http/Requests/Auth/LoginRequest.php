<?php

namespace App\Http\Requests\Auth;

use App\Http\Requests\BaseRequest;

class LoginRequest extends BaseRequest
{
    protected $regx = [
        'email' => 'required|email|string|max:255',
        'password' => 'required|string',
    ];
}

<?php

namespace App\Http\Requests\Auth;

use App\Http\Requests\BaseRequest;

class RegisterRequest extends BaseRequest
{
    protected $regx = [
        'name' => 'required|string',
        'email' => 'email|required|string',
        'password' => 'required|string|min:6'
    ];
}

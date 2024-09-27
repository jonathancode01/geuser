<?php

namespace App\Http\Controllers;

use Http;
use Illuminate\Http\Request;
use App\Traits\HttpResponses;

class AuthController extends Controller
{
    use HttpResponses;

    public function login(Request $request)

    {
        return $this->response('Authorized', 200);
    }

    public function logout(){

    }
}

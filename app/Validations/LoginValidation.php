<?php

namespace App\Validations;

use Illuminate\Support\Facades\Cookie;


class LoginValidation
{
    public function isUserRegistrated(){
        $user = Cookie::get('usuario');

        if(isset($user)){
            return true;
        }

        return false;
    }
}

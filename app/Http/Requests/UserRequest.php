<?php

namespace App\Http\Requests;

use App\Models\Usuario;

class UserRequest
{
        public function getAll(){
            $users = Usuario::all();

            return $users;
        }
}

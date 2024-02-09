<?php

namespace App\Http\Requests;

use App\Models\Plato;

class PlatoRequest
{
        public function getAll(){
            $platos = Plato::all();

            return $platos;
        }
}

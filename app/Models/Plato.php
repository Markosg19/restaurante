<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Constants\TableConstants as TBConstants;

class Plato extends Model
{
    use HasFactory;


    protected $fillable = TBConstants::PLATOS_FIELDS;
}

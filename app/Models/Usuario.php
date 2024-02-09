<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Constants\TableConstants as TBConstants;

class Usuario extends Model
{
    use HasFactory;


    protected $fillable = TBConstants::USER_FIELDS;


}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ConditionApartment extends Model
{
    const EMPTY = 1;  // 'vazio';
    const RENTAL = 2;  // 'alugado';
    const LIVING = 3;  // 'residindo';
    const FORSALE = 4;  // 'vende-se';
    const FORRENT = 5;  // 'aluga-se';
}

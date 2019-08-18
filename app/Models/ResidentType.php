<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ResidentType extends Model
{
    const OWNER = 1;                // 'Responsável';
    const COMPANION = 2;            // 'Companheiro(a)';
    const SON = 3;                  // 'Filho(a)';
    const FATHER = 4;               // 'Pai';
    const MOTHER = 5;               // 'Mãe';
    const FRIEND = 6;               // 'Amigo(a)';
    const SONINLAW = 7;             // 'Genro';
    const DAUGHTERINLAW = 8;        // 'Nora';
    const COUSIN = 9;               // 'Primo(a)';
    const UNCLES = 10;              // 'Tio(a)';
    const GRANDSON = 11;            // 'Neto(a)';
    const GRANDPARENT = 12;         // 'Avô(ó)';
    const GREATGRANDPARENT = 13;    // 'Bisavô(ó)';
    const GREATGRANDSON = 14;       // 'Bisneto(a)';

    protected $fillable = [
        'name'
    ];

    public function residents()
    {
        return $this->hasMany(Resident::class, 'resident_type_id');
    }
}

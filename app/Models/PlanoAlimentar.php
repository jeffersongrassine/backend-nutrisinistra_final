<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PlanoAlimentar extends Model
{
    use HasFactory;

    protected $fillable = [
        'dataPlano',
        'desejum',
        'almoco',
        'colacao',
        'lache',
        'jantar',
        'ceia'
    ];
}

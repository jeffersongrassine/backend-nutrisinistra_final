<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DiarioAlimentar extends Model
{
    use HasFactory;

    protected $fillable = [
        'preencheuFormulario',
        'dataPreenchimento',
        'refeicao1',
        'refeicao2',
        'refeicao3',
        'refeicao4',
        'refeicao5',
        'refeicao6',
        'refeicao7',
        'refeicao8',
        'refeicao9',
        'refeicao10',
        'consentimento',
    ];
}
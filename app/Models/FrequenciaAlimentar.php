<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FrequenciaAlimentar extends Model
{
    use HasFactory;

    protected $fillable = [
        'preencheuFormulario',
        'dataPreenchimento',
        'leiteDesnatado',
        'leiteIntegral',
        'iogurte',
        'queijoBranco',
        'queijoMussarelaPrato',
        'queijoCurado',
        'requeijao',
        'cremeLeite',
        'ovo',
        'boi',
        'frango',
        'porco',
        'peixe',
        'visceras',
        'embutidos',
        'carneConservada',
        'azeite',
        'banhaPorco',
        'manteiga',
        'margarina',
        'maionese',
        'molhoPronto',
        'oleoCoco',
        'oleoSoja',
        'consentimento',

    ];
}

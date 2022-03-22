<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Consulta extends Model
{
    use HasFactory;

    protected $fillable = [
        'fezConsulta',
        'dataPreenchimento',
        'planoAlimentar',
        'perdaDesejada',
        'circuferenciaAbdominal',
        'peso',
        'tipoDieta',
        'naf',
        'classificacaoImc',
        'gebTmb',
        'get',
        'venta',
        'vetProposto',
        'formB30',
        'formB35',
        'leiteA',
        'leiteB',
        'queijoA',
        'queijoB',
        'ceralPao',
        'carneA',
        'carneB',
        'leguminosa',
        'horalicaA',
        'horalicaB',
        'arrozHoralicaC',
        'Fruta',
        'acucar',
        'oleaginosa',
        'oleo',
        'vetAlcancado',
        'totalProteina',
        'totalLipidio',
        'totalGlicose',
        'totalProteinaGramas',
        'totalLipidioGramas',
        'totalGlicoseGramas',
        'totalProteinaPercentual',
        'totalLipidioPercentual',
        'totalGlicosePercentual'
    ];
}

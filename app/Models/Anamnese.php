<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Anamnese extends Model
{
    use HasFactory;

    protected $fillable = [
        'preencheuFormulario',
        'dataPreencimento',
        'enfermidades' => 'json_encode',
        'usaMedicacao',
        'quaisMedicacoes',
        'fezExamesUltimosSeisMeses',
        'doencasFamiliares',
        'fumante',
        'bebidaAlcoolica',
        'horasSono',
        'qualidadeSono',
        'nivelEstresse',
        'mastigacao',
        'alergiaAlimentar',
        'qualAlergia',
        'temAlimentoQueNaoGosta',
        'qualAlimentoNaoGosta',
        'desconfortoGastrico',
        'qualDesconforto',
        'corUrina',
        'altura',
        'pesoAtual',
        'maiorPeso',
        'pesoDesejado',
        'fazAtividadeFisica',
        'qualAtividade',
        'quantasVezesPorSemana',
        'jaTeveAcompanhamentoNutricional',
        'oQueMaisGostou',
        'oQueNaoFuncionou',
        'consentimento',
    ];
}

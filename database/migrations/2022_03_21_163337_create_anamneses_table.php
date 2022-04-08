<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use phpDocumentor\Reflection\Types\Boolean;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('anamneses', function (Blueprint $table) {
            $table->id();
            $table->boolean('preencheuFormulario')->default(true);
            $table->dateTime('dataPreencimento');
            $table->json('enfermidades');
            $table->boolean('usaMedicacao');
            $table->string('quaisMedicacoes')->nullable();
            $table->boolean('fezExamesUltimosSeisMeses');
            $table->string('doencasFamiliares');
            $table->boolean('fumante');
            $table->boolean('bebidaAlcoolica');
            $table->decimal('horasSono');
            $table->string('qualidadeSono');
            $table->string('nivelEstresse');
            $table->string('mastigacao');
            $table->boolean('alergiaAlimentar');
            $table->string('qualAlergia')->nullable();
            $table->boolean('temAlimentoQueNaoGosta');
            $table->string('qualAlimentoNaoGosta')->nullable();
            $table->boolean('desconfortoGastrico');
            $table->string('qualDesconforto')->nullable();
            $table->string('corUrina');
            $table->decimal('altura');
            $table->decimal('pesoAtual');
            $table->decimal('maiorPeso')->nullable();
            $table->decimal('pesoDesejado')->nullable();
            $table->boolean('fazAtividadeFisica');
            $table->string('qualAtividade')->nullable();
            $table->decimal('quantasVezesPorSemana')->nullable();
            $table->boolean('jaTeveAcompanhamentoNutricional');
            $table->string('oQueMaisGostou')->nullable();
            $table->string('oQueNaoFuncionou')->nullable();
            $table->boolean('consentimento');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('anamneses');
    }
};

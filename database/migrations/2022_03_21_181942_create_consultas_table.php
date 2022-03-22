<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('consultas', function (Blueprint $table) {
            $table->id();
            $table->boolean('fezConsulta')->default(true);
            $table->date('dataPreenchimento')->date_format('d-M-Y');
            $table->boolean('planoAlimentar')->default(true);
            $table->decimal('perdaDesejada');
            $table->decimal('circuferenciaAbdominal');
            $table->decimal('peso');
            $table->string('tipoDieta');
            $table->decimal('naf');
            $table->string('classificacaoImc');
            $table->decimal('gebTmb');
            $table->decimal('get');
            $table->decimal('venta');
            $table->decimal('vetProposto');
            $table->decimal('formB30');
            $table->decimal('formB35');
            $table->decimal('leiteA');
            $table->decimal('leiteB');
            $table->decimal('queijoA');
            $table->decimal('queijoB');
            $table->decimal('ceralPao');
            $table->decimal('carneA');
            $table->decimal('carneB');
            $table->decimal('leguminosa');
            $table->decimal('horalicaA');
            $table->decimal('horalicaB');
            $table->decimal('arrozHoralicaC');
            $table->decimal('Fruta');
            $table->decimal('acucar');
            $table->decimal('oleaginosa');
            $table->decimal('oleo');
            $table->decimal('vetAlcancado');
            $table->decimal('totalProteina');
            $table->decimal('totalLipidio');
            $table->decimal('totalGlicose');
            $table->decimal('totalProteinaGramas');
            $table->decimal('totalLipidioGramas');
            $table->decimal('totalGlicoseGramas');
            $table->decimal('totalProteinaPercentual');
            $table->decimal('totalLipidioPercentual');
            $table->decimal('totalGlicosePercentual');


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
        Schema::dropIfExists('consultas');
    }
};

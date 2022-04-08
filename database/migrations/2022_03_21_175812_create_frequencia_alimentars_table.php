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
        Schema::create('frequencia_alimentars', function (Blueprint $table) {
            $table->id();
            $table->boolean('preencheuFormulario')->default(true);
            $table->date('dataPreenchimento')->date_format('d-M-Y');
            $table->string('leiteDesnatado')->nullable();
            $table->string('leiteIntegral')->nullable();
            $table->string('iogurte')->nullable();
            $table->string('queijoBranco')->nullable();
            $table->string('queijoMussarelaPrato')->nullable();
            $table->string('queijoCurado')->nullable();
            $table->string('requeijao')->nullable();
            $table->string('cremeLeite')->nullable();
            $table->string('ovo')->nullable();
            $table->string('boi')->nullable();
            $table->string('frango')->nullable();
            $table->string('porco')->nullable();
            $table->string('peixe')->nullable();
            $table->string('visceras')->nullable();
            $table->string('embutidos')->nullable();
            $table->string('carneConservada')->nullable();
            $table->string('azeite')->nullable();
            $table->string('banhaPorco')->nullable();
            $table->string('manteiga')->nullable();
            $table->string('margarina')->nullable();
            $table->string('maionese')->nullable();
            $table->string('molhoPronto')->nullable();
            $table->string('oleoCoco')->nullable();
            $table->string('oleoSoja')->nullable();
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
        Schema::dropIfExists('frequencia_alimentars');
    }
};

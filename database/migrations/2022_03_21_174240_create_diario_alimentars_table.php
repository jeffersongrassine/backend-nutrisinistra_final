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
        Schema::create('diario_alimentars', function (Blueprint $table) {
            $table->id();
            $table->boolean('preencheuFormulario')->default(true);
            $table->dateTime('dataPreenchimento')->date_format('d-M-Y');
            $table->string('refeicao1')->nullable();
            $table->string('refeicao2')->nullable();
            $table->string('refeicao3')->nullable();
            $table->string('refeicao4')->nullable();
            $table->string('refeicao5')->nullable();
            $table->string('refeicao6')->nullable();
            $table->string('refeicao7')->nullable();
            $table->string('refeicao8')->nullable();
            $table->string('refeicao9')->nullable();
            $table->string('refeicao10')->nullable();
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
        Schema::dropIfExists('diario_alimentars');
    }
};

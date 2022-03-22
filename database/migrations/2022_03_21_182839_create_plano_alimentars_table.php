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
        Schema::create('plano_alimentars', function (Blueprint $table) {
            $table->id();
            $table->date('dataPlano')->date_format('d-M-Y');
            $table->json('desejum');
            $table->json('colacao');
            $table->json('almoco');
            $table->json('lache');
            $table->json('jantar');
            $table->json('ceia');
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
        Schema::dropIfExists('plano_alimentars');
    }
};

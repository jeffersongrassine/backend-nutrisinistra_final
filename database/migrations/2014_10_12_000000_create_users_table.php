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
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('role')->default('normal');
            $table->boolean('status')->default(true);
            $table->boolean('paciente')->default(false);
            $table->string('first_name');
            $table->string('last_name')->nullable();
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('confirmation_token')->nullable();
            $table->string('password');
            $table->decimal('idade')->nullable();
            $table->string('telefone')->nullable();
            $table->string('sexo')->nullable();
            $table->string('profissao')->nullable();
            $table->boolean('anamnese')->default(false);
            $table->boolean('diario_alimentar')->default(false);
            $table->boolean('frequencia_alimentar')->default(false);
            $table->rememberToken();
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
        Schema::dropIfExists('users');
    }
};

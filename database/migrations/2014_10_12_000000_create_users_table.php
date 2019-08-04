<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name');
            $table->string('email')->unique();
            //$table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->rememberToken();
            // тип исполнителя
            // individual (ind) - физическое лицо
            // entepreneur (ent) - физическое лицо-предприниматель
            // firm - фирма
            $table->enum('type', ['ind', 'ent', 'firm']);
            // роль пользователя
            // admin - администратор
            // perf - исполнитель (performer)
            $table->enum('role', ['admin', 'perf']);
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
}

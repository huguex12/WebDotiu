<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Seeder;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::create('usuarios', function (Blueprint $table) {
          $table->increments('id');
          $table->string('name', 100);
          $table->string('last_name', 100);
          $table->string('email', 100);
          $table->string('user', 50);
          $table->string('password', 60);
          $table->enum('type', ['user', 'admin']);
          $table->boolean('active');
          $table->text('address');
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
}

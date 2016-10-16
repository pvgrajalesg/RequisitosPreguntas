<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
use App\User;

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
            $table->increments('id');
            $table->string('account')->unique();
            $table->string('email')->unique();
            $table->string('name');
            $table->string('code')->unique();
            $table->string('password', 60);
            $table->rememberToken();
            $table->timestamps();
        });
        User::create([
            'account' => "cmzapataj",
            'name' => 'Carlos Mario Zapata Jaramillo',
            'code' => "0",
            'password' => bcrypt("123456"),
            'email' => "jdsancheze@unal.edu.co",
        ]);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('users');
    }
}

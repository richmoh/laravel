<?php

use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		//
        Schema::create('users', function($table)
        {
            $table->increments('id');
            $table->string('email')->unique();
            $table->string('firstname');
            $table->string('surname');
            $table->string('password');
            $table->string('_token');
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
        Schema::drop('users');
	}

}
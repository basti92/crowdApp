<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateProjects extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('projects', function(Blueprint $table)
		{
			$table->increments('id');

            $table->string('name', 255)->unique();

            $table->integer('user_id');        //->unsigned();
         //   $table->foreign('owner_id')->references('id')->on('users');
            $table->string('description', 400);
            $table->integer('moneyGoal');
            $table->integer('moneyActual');
            $table->date('expireDate');

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
		Schema::drop('projects');
	}

}

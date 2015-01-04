<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUserSupportProjects extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
        Schema::create('user_supports_project', function(Blueprint $table)

        {
            $table->integer('supporter_UserId')->unsigned();
            $table->foreign('supporter_UserId')->references('id')->on('users');

            $table->integer('project_Id')->unsigned();
            $table->foreign('project_Id')->references('id')->on('projects');

            $table->integer('money_spend');
        });
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
        Schema::drop('user_supports_project');
	}

}

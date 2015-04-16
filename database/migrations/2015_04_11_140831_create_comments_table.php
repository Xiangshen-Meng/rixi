<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCommentsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('comments', function(Blueprint $table)
		{
			$table->increments('id');
            $table->integer('user_id')->unsigned()->index();
            $table->integer('topic_id')->unsigned()->index();
            $table->integer('comment_id')->unsigned()->index();
            $table->text('content');
			$table->timestamps();
		});

        Schema::create('votes', function (Blueprint $table) {

            $table->integer('user_id')->unsigned()->index();
            $table->integer('comment_id')->unsigned()->index();

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
		Schema::drop('comments');
        Schema::drop('votes');
	}

}

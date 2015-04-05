<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTopicsTable extends Migration
{

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('topics', function (Blueprint $table) {

            $table->increments('id');

            $table->string('title', 32);
            $table->text('description');
            $table->integer('user_id')->index();

            $table->timestamps();

        });

        Schema::create('favorite', function (Blueprint $table) {

            $table->integer('user_id')->unsigned()->index();
            $table->integer('topic_id')->unsigned()->index();

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
        Schema::drop('topics');
    }

}

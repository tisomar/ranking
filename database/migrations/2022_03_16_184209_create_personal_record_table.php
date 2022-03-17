<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePersonalRecordTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('personal_records', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('user_id')->unsigned();;
            $table->foreign('user_id')
                ->references('id')->on('users')
                ->onDelete('cascade');

            $table->bigInteger('movement_id')->unsigned();;
            $table->foreign('movement_id')
                ->references('id')->on('movements')
                ->onDelete('cascade');

            $table->float('value');
            $table->dateTime('date');
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
        Schema::dropIfExists('personal_records');
    }
}

<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateReservesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reserves', function (Blueprint $table) {
            $table->id();
            $table->string('tour');
            $table->string('name');
            $table->string('email');
            $table->string('phone');
            $table->date('arrive');
            $table->date('departure');
            $table->string('adults');
            $table->string('children');
            $table->string('nationality');
            $table->boolean('receive')->nullable();
            $table->boolean('authorize');
            $table->text('additional')->nullable();
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
        Schema::dropIfExists('reserves');
    }
}

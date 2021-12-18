<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateToursTable extends Migration
{
    public function up()
    {
        Schema::create('tours', function (Blueprint $table) {
            $table->id();
            $table->string('destiny');
            $table->string('name')->unique();
            $table->string('slug')->unique();
            $table->decimal('unit_price',8,2);
            $table->string('main_img')->nullable();
            $table->string('duration');
            $table->string('type');
            $table->string('size');
            $table->string('language');
            $table->text('description');
            $table->text('itinerary');
            $table->text('include');
            $table->text('recomendation');
            $table->text('prices');
            $table->string('img_1')->nullable();
            $table->string('img_2')->nullable();
            $table->string('img_3')->nullable();
            $table->boolean('relevant')->default(0);
            $table->timestamps();
            $table->softDeletes();
        });
    }
    public function down()
    {
        Schema::dropIfExists('tours');
    }
}

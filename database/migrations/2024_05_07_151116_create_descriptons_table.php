<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDescriptonsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('descriptons', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('about')->nullable();
            $table->string('skills')->nullable();
            $table->string('sumary')->nullable();
            $table->string('language')->nullable();
            $table->string('myself')->nullable();
            $table->string('contact')->nullable();
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
        Schema::dropIfExists('descriptons');
    }
}

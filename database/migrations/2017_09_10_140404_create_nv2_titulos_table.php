<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateNv2TitulosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('nv2_titulos', function (Blueprint $table) {
            $table->increments('id');
            $table->text('title');
            $table->text('text')->nullable();
            $table->timestamps();
            $table->integer('nv1_titulos_id')->unsigned();
            $table->foreign('nv1_titulos_id')
                  ->references('id')
                  ->on('nv1_titulos')
                  ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('nv2_titulos');
    }
}

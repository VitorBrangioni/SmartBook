<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateNv4TitulosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('nv4_titulos', function (Blueprint $table) {
            $table->increments('id');
            $table->text('title');
            $table->text('text')->nullable();
            $table->timestamps();
            $table->integer('nv3_titulos_id')->unsigned();
            $table->integer('nv3_titulos_nv2_titulos_id')->unsigned();
            $table->integer('nv3_titulos_nv2_titulos_nv1_titulos_id')->unsigned();
            $table->foreign('nv3_titulos_id')
                  ->references('id')
                  ->on('nv3_titulos')
                  ->onDelete('cascade');
            $table->foreign('nv3_titulos_nv2_titulos_id')
                  ->references('nv2_titulos_id')
                  ->on('nv3_titulos')
                  ->onDelete('cascade');
            $table->foreign('nv3_titulos_nv2_titulos_nv1_titulos_id')
                  ->references('nv2_titulos_nv1_titulos_id')
                  ->on('nv3_titulos')
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
        Schema::dropIfExists('nv4_titulos');
    }
}

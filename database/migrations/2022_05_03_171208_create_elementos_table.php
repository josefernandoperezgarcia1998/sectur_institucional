<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateElementosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('elementos', function (Blueprint $table) {
            $table->id();
            $table->string('titulo');
            $table->string('imagen')->nullable();
            $table->string('documento')->nullable();
            $table->longText('descripcion')->nullable();
            $table->string('size_document')->nullable();
            $table->string('type_document')->nullable();
            $table->string('size_image')->nullable();
            $table->string('type_image')->nullable();
            $table->string('enlace')->nullable();
            $table->foreignId('seccion_id')->references('id')->on('seccions')->onDelete('cascade');
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
        Schema::dropIfExists('elementos');
    }
}

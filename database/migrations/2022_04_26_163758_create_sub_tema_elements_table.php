<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSubTemaElementsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sub_tema_elements', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('document')->nullable();
            $table->string('image')->nullable();
            $table->string('size_document')->nullable();
            $table->string('type_document')->nullable();
            $table->string('size_image')->nullable();
            $table->string('type_image')->nullable();
            $table->string('link')->nullable();
            $table->foreignId('subtema_id')->references('id')->on('sub_temas')->onDelete('cascade');
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
        Schema::dropIfExists('sub_tema_elements');
    }
}

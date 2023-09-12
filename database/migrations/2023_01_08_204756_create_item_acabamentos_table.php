<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateItemAcabamentosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('item_acabamentos', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('acabamento_id');
            $table->string('nome');
            $table->string('imagem');
            $table->foreign('acabamento_id')->references('id')->on('acabamentos')->onDelete('cascade');
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
        Schema::dropIfExists('item_acabamentos');
    }
}

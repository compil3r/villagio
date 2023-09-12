<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddNewConfigurationColumnsOnOutrosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('outros', function (Blueprint $table) {
            $table->string("titulo1")->nullable();
            $table->string("link1")->nullable();
            $table->string("imagem1")->nullable();

            $table->string("titulo2")->nullable();
            $table->string("link2")->nullable();
            $table->string("imagem2")->nullable();
            
            $table->string("titulo3")->nullable();
            $table->string("link3")->nullable();
            $table->string("imagem3")->nullable();

            $table->string("titulo4")->nullable();
            $table->string("link4")->nullable();
            $table->string("imagem4")->nullable();

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}

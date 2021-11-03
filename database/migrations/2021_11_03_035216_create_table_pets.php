<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTablePets extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pets', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name');
            $table->integer('age');
            $table->string('breed');
            $table->integer('is_active');
            $table->unsignedBigInteger('pet_type_id');
            $table->foreign('pet_type_id')->references('id')->on('pet_types');
            $table->unsignedBigInteger('pet_owner_id');
            $table->foreign('pet_owner_id')->references('id')->on('pet_owners');
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
        Schema::dropIfExists('pets');
    }
}

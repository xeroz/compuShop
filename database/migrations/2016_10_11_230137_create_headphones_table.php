<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateHeadphonesTable extends Migration
{
   /**
     * Run the migrations.
     *
     * @return void
     */
   public function up()
   {
      Schema::create('headphones', function (Blueprint $table) {
         $table->integer('id')->unsigned();
         $table->string('connection');
         $table->string('batteries');
         $table->string('height');
         $table->string('weight');
         $table->string('form_factor');
      });

      Schema::table('headphones', function (Blueprint $table){
         $table->primary('id');
         $table->foreign('id')
               ->references('id')
               ->on('products')
               ->onDelete('cascade')
               ->onUpdate('cascade');
      });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('headphones');
    }
}

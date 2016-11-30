<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLaptopsTable extends Migration
{
   /**
     * Run the migrations.
     *
     * @return void
     */
   public function up()
   {
      Schema::create('laptops', function (Blueprint $table) {
         $table->integer('id')->unsigned();
         $table->string('operating_system');
         $table->string('processor');
         $table->string('display');
         $table->string('memory');
         $table->string('battery_life');
      });

      Schema::table('laptops', function (Blueprint $table){
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
      Schema::dropIfExists('laptops');
   }
}

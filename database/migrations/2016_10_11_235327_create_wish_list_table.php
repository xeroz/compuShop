<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateWishListTable extends Migration
{
   /**
     * Run the migrations.
     *
     * @return void
     */
   public function up()
   {
      Schema::create('wish_list', function (Blueprint $table) {
         $table->integer('id')->unsigned();
      });

      Schema::table('wish_list', function (Blueprint $table){
         $table->primary('id');
         $table->foreign('id')
               ->references('id')
               ->on('users')
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
      Schema::dropIfExists('wish_list');
   }
}

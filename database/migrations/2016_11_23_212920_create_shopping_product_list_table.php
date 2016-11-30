<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateShoppingProductListTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
   public function up()
   {
      Schema::create('shopping_product_list', function (Blueprint $table) {
         $table->increments('id');
         $table->integer('shopping_list_id')->unsigned();
         $table->integer('product_id')->unsigned();
         $table->integer('quantity');
      });

      Schema::table('shopping_product_list', function (Blueprint $table){
         $table->foreign('shopping_list_id')
               ->references('id')
               ->on('shopping_list')
               ->onDelete('cascade')
               ->onUpdate('cascade');

         $table->foreign('product_id')
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
      Schema::dropIfExists('shopping_product_list');
   }
}

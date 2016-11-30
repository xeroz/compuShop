<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateWishListProductsTable extends Migration
{
   /**
     * Run the migrations.
     *
     * @return void
     */
   public function up()
   {
      Schema::create('wish_list_products', function (Blueprint $table) {
         $table->integer('wish_list_id')->unsigned();
         $table->integer('product_id')->unsigned();
      });

      Schema::table('wish_list_products', function (Blueprint $table){
         $table->foreign('wish_list_id')
               ->references('id')
               ->on('wish_list')
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
      Schema::dropIfExists('wish_list_products');
   }
}

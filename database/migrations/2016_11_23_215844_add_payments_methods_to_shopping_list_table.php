<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddPaymentsMethodsToShoppingListTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
   public function up()
   {
      Schema::table('shopping_list', function (Blueprint $table) {
         $table->foreign('payment_method_id')
               ->references('id')
               ->on('payments_methods')
               ->onDelete('cascade');
      });
   }

   /**
     * Reverse the migrations.
     *
     * @return void
     */
   public function down()
   {
      Schema::table('shopping_list', function (Blueprint $table) {
         //
      });
   }
}

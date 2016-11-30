<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMonitorsTable extends Migration
{
   /**
     * Run the migrations.
     *
     * @return void
     */
   public function up()
   {
      Schema::create('monitors', function (Blueprint $table) {
         $table->integer('id')->unsigned();
         $table->string('resolution');
         $table->string('color');
         $table->string('screen');
         $table->string('relationship');
      });

      Schema::table('monitors', function (Blueprint $table){
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
      Schema::dropIfExists('monitors');
   }
}

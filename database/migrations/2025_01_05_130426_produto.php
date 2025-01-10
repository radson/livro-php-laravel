<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('produtos', function(Blueprint $table)

   { 
         $table->increments('id'); 
         $table->string('nome');
         $table->decimal('valor', 5, 2);
         $table->string('descricao');
         $table->integer('quantidade');
         $table->timestamps(); 
   }); 
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::drop('produtos');
    }
};

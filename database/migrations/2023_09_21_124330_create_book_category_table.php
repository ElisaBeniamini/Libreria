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
        Schema::create('book_category', function (Blueprint $table) {
            $table->id();

            $table->unsignedBigInteger('book_id');                     //creo colonne
            $table->unsignedBigInteger('category_id');

            $table->foreign('book_id')->references('id')->on('books');        //creo relazione
            $table->foreign('category_id')->references('id')->on('categories');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */

    public function down(): void
    {
        //  Schema::dropIfExists('book_category');
        Schema::table('book_category', function (Blueprint $table) {
            $table->dropForeign(['book_id', 'category_id']); //prima la relazione
            $table->dropColumn(['book_id', 'category_id']); // dopo la colonna
        });
    }
};

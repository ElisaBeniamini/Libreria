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
        Schema::table('books', function (Blueprint $table) {
            $table->string('image')->nullable();  //qui creo una riga 

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('image', function (Blueprint $table) {
            $table->dropColumn(['image']); //qui la tolgo
        });
    }
};

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
        Schema::create('books', function (Blueprint $table) {
            $table->id();
            $table-> string('title');
            $table->year('release_date');
            $table->string('cover_path')->nullable();
            $table->string('language');
            $table->text('summary')->nullable();
            $table->decimal('price',16, 4);
            $table->integer('stock_saldo');
            $table->integer('pages');
            $table->enum('type',['new', 'used', 'ebook']);
            $table->softDeletes();
            $table->timestamps();
        });                 
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('books');
    }
};

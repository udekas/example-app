<?php

use App\Models\Author;
use App\Models\Book;
use App\Models\Client;
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
        Schema::create('orders', function (Blueprint $table) {
            $table->id();
            $table->string('delivery_address');
            $table->enum('status', ['sent', 'ordered', 'paid']);
            $table->date('order_date');
            $table->foreignIdFor(Book::class)->constrained()->cascadeOnDelete();
            $table->foreignIdFor(Client::class)->constrained()->cascadeOnDelete();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('orders');
    }
};

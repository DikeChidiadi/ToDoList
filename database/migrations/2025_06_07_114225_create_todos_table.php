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
        Schema::create('todos', function (Blueprint $table) {
            $table->id();
            $table->text('todo')->nullable();
            $table->boolean('completed')->default(false); // Status of the todo item, default is false (not completed)
            $table->timestamps();

            $table->foreignId('user_id')->constrained('users')->onDelete('cascade'); // Foreign key to the users table, with cascade delete
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('todos');
    }
};

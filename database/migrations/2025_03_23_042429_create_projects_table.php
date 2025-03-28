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
        Schema::create('projects', function (Blueprint $table) {
            $table->id(); // Auto-incrementing primary key
            $table->string('name'); // Project name
            $table->longText('description')->nullable(); // Description, nullable
            $table->date('due_date')->nullable(); // Correct way to add a due date column
            $table->string('status'); // Project status
            $table->string('image_path')->nullable(); // Optional image path
            $table->foreignId('created_by')->constrained('users'); // Foreign key to users
            $table->foreignId('updated_by')->constrained('users'); // Foreign key to users
            $table->timestamps(); // Adds created_at and updated_at columns
        });
        
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('projects');
    }
};

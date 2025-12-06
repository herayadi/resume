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
        Schema::create('experiences', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('clientId');
            $table->foreign('clientId')->references('id')->on('clients')->onDelete('cascade');
            $table->string('title');                    
            $table->text('description');                
            $table->date('startDate')->nullable();
            $table->date('endDate')->nullable();
            $table->boolean('isCurrent')->default(false);
            $table->timestamps();
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

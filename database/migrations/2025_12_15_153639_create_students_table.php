<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
   
   public function up(): void
{
    Schema::create('students', function (Blueprint $table) {
        $table->id();
        $table->string('name');            // Naam van de student
        $table->string('email')->unique(); // E-mail, uniek
        $table->string('keuzedeel')->nullable(); // Gekozen keuzedeel (mag leeg zijn)
        $table->timestamps();             // created_at en updated_at
    });
}
    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('students');
    }
};

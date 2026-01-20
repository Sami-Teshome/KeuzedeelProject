<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::table('students', function (Blueprint $table) {
            // Voeg keuzedeel_id toe, koppeling naar keuzedelen
            $table->foreignId('keuzedeel_id')->nullable()->constrained('keuzedelen')->onDelete('set null');
        });
    }

    public function down()
    {
        Schema::table('students', function (Blueprint $table) {
            $table->dropForeign(['keuzedeel_id']);
            $table->dropColumn('keuzedeel_id');
        });
    }
};


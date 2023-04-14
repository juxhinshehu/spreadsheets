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
        Schema::create('sheet_column_matchings', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('sheet_configuration_id');
            $table->string('sheet_column');
            $table->string('table_column');
            $table->timestamps();

            $table->foreign('sheet_configuration_id')->references('id')->on('sheet_configurations');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('sheet_column_matchings');
    }
};

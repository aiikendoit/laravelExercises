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
        Schema::create('requests', function (Blueprint $table) {
            $table->id();
            $table->string('transporters_name');
            $table->string('patient_name');
            $table->string('requesters_name');
            $table->string('department');
            $table->string('time_req_received');
            $table->string('time_left');
            $table->string('time_returned');
            $table->string('equipments');
            $table->string('source');
            $table->string('destination');
            $table->string('remarks');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('requests');
    }
};

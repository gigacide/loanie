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
        Schema::create('residences', function (Blueprint $table) {
            $table->id();
            $table->uuid('lead_id')->nullable();

            $table->string('houseNumber');
            $table->string('houseName')->nullable();
            $table->string('residentialStatus');
            $table->string('addressStreet1');
            $table->string('city');
            $table->string('state');
            $table->string('zip');
            $table->unsignedInteger('monthsAtAddress');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('residences');
    }
};

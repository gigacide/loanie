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
        Schema::create('banks', function (Blueprint $table) {
            $table->id();
            $table->uuid('lead_id')->nullable();

            $table->string('bankAccountType');
            $table->string('bankRoutingNumber');
            $table->string('bankAccountNumber');
            $table->unsignedInteger('monthsAtBank');
            $table->string('bankName');
            $table->string('bankPhone');
            $table->string('directDeposit');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('banks');
    }
};

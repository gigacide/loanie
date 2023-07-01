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
        Schema::create('employers', function (Blueprint $table) {
            $table->id();
            $table->uuid('lead_id')->nullable();

            $table->string('employerName');
            $table->string('employmentStatus');
            $table->string('jobTitle');
            $table->decimal('monthlyIncome', 8, 2);
            $table->unsignedInteger('incomeCycle');
            $table->unsignedInteger('incomeSource');
            $table->unsignedInteger('incomePaymentType');
            $table->unsignedInteger('monthsAtEmployer');
            $table->unsignedInteger('nextPayDateDay');
            $table->unsignedInteger('nextPayDateMonth');
            $table->unsignedInteger('nextPayDateYear');
            $table->unsignedInteger('followingPayDateDay');
            $table->unsignedInteger('followingPayDateMonth');
            $table->unsignedInteger('followingPayDateYear');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('employers');
    }
};

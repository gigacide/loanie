<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLoanApplicationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('loan_applications', function (Blueprint $table) {
            $table->id();
            $table->uuid('uuid')->unique();
            $table->unsignedBigInteger('source_id')->nullable();
            $table->unsignedBigInteger('loan_id')->nullable();
            $table->unsignedBigInteger('applicant_id')->nullable();
            $table->unsignedBigInteger('residence_id')->nullable();
            $table->unsignedBigInteger('employer_id')->nullable();
            $table->unsignedBigInteger('bank_id')->nullable();
            $table->unsignedBigInteger('consent_id')->nullable();
            $table->char('transaction_id')->nullable();
            $table->string('affiliate_id')->nullable();
            $table->char('subid', 255)->nullable();
            $table->integer('offer_id')->nullable();
            $table->decimal('minCommissionAmount')->nullable();
            $table->decimal('maxCommissionAmount')->nullable();
            $table->integer('timeout')->nullable();
            $table->boolean('istest')->nullable();
            $table->integer('buyer_id')->nullable();
            $table->string('buyer_tier_id')->nullable();
            $table->float('affiliate_lead_price')->nullable();
            $table->float('buyer_lead_price')->nullable();
            $table->tinyInteger('leadStatus')->default(3)->comment('1=accepted,2=rejected,3=pending');
            $table->char('model_type')->comment('1=CPA, 2=CPF 3=Hybrid 4= ')->nullable();
            $table->integer('quality_score')->nullable();
            $table->tinyInteger('isRedirected')->nullable();
            $table->char('redirectUrl', 255)->nullable();
            $table->timestamps();

            $table->foreign('source_id')->references('id')->on('sources')->onDelete('cascade');
            $table->foreign('loan_id')->references('id')->on('loans')->onDelete('cascade');
            $table->foreign('applicant_id')->references('id')->on('applicants')->onDelete('cascade');
            $table->foreign('residence_id')->references('id')->on('residences')->onDelete('cascade');
            $table->foreign('employer_id')->references('id')->on('employers')->onDelete('cascade');
            $table->foreign('bank_id')->references('id')->on('banks')->onDelete('cascade');
            $table->foreign('consent_id')->references('id')->on('consents')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('loan_applications');
    }
}

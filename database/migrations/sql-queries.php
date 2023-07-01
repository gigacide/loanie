<?php
//////applicant
////
////use Illuminate\Database\Schema\Blueprint;
////use Illuminate\Support\Facades\Schema;
////
//////applicant
////$table->id();
////$table->uuid('lead_id')->nullable();
////$table->string('nameTitle');
////$table->string('firstName');
////$table->string('lastName');
////$table->unsignedInteger('dateOfBirthDay');
////$table->unsignedInteger('dateOfBirthMonth');
////$table->unsignedInteger('dateOfBirthYear');
////$table->string('ssn');
////$table->string('email');
////$table->string('homePhoneNumber');
////$table->string('cellPhoneNumber');
////$table->string('workPhoneNumber');
////$table->string('maritalStatus');
////$table->unsignedInteger('dependants');
////$table->boolean('inMilitary');
////$table->string('drivingLicenseState');
////$table->string('drivingLicenseNumber');
////$table->string('creditType');
////$table->string('callTime');
////
////CREATE TABLE `applicants` (
////`id` bigint unsigned not null auto_increment primary key,
////  `lead_id` char(36) null,
////  `nameTitle` varchar(255) not null,
////  `firstName` varchar(255) not null,
////  `lastName` varchar(255) not null,
////  `dateOfBirthDay` int unsigned not null,
////  `dateOfBirthMonth` int unsigned not null,
////  `dateOfBirthYear` int unsigned not null,
////  `ssn` varchar(255) not null,
////  `email` varchar(255) not null,
////  `homePhoneNumber` varchar(255) not null,
////  `cellPhoneNumber` varchar(255) not null,
////  `workPhoneNumber` varchar(255) not null,
////  `maritalStatus` varchar(255) not null,
////  `dependants` int unsigned not null,
////  `inMilitary` tinyint(1) not null,
////  `drivingLicenseState` varchar(255) not null,
////  `drivingLicenseNumber` varchar(255) not null,
////  `creditType` varchar(255) not null,
////  `callTime` varchar(255) not null,
////  `created_at` timestamp null,
////  `updated_at` timestamp null
////);
////
////
//////affilaites
////$table->string('name');
////$table->string('affiliate_id');
////$table->string('sub_id');
////$table->string('offer_id');
////$table->string('aff_sub');
////$table->string('aff_sub2');
////$table->string('aff_sub3');
////$table->string('aff_sub4');
////$table->string('aff_sub5');
////$table->string('postback_url');
////$table->float('cpl_earnings');
////
////CREATE TABLE `affiliates` (
////`id` bigint unsigned not null auto_increment primary key,
////  `name` varchar(255) not null,
////  `affiliate_id` varchar(255) not null,
////  `sub_id` varchar(255) not null,
////  `offer_id` varchar(255) not null,
////  `aff_sub` varchar(255) not null,
////  `aff_sub2` varchar(255) not null,
////  `aff_sub3` varchar(255) not null,
////  `aff_sub4` varchar(255) not null,
////  `aff_sub5` varchar(255) not null,
////  `postback_url` varchar(255) not null,
////  `cpl_earnings` float not null,
////  `created_at` timestamp null,
////  `updated_at` timestamp null
////);
////
////
//////offers
////$table->id();
////$table->string('name');
////$table->decimal('thresholdAmount', 10, 2);
////$table->decimal('payout', 10, 2);
////$table->decimal('revenue', 10, 2);
////$table->timestamps();
////
////CREATE TABLE `offers` (
////`id` bigint unsigned not null auto_increment primary key,
////  `name` varchar(255) not null,
////  `thresholdAmount` decimal(10, 2) not null,
////  `payout` decimal(10, 2) not null,
////  `revenue` decimal(10, 2) not null,
////  `created_at` timestamp null,
////  `updated_at` timestamp null
////);
////
////
//////commission_logs
////$table->unsignedBigInteger('affiliate_id');
////$table->unsignedBigInteger('offer_id');
////$table->string('sub_id')->nullable();
////$table->string('aff_sub')->nullable();
////$table->string('aff_sub2')->nullable();
////$table->string('aff_sub3')->nullable();
////$table->string('aff_sub4')->nullable();
////$table->string('aff_sub5')->nullable();
////$table->decimal('commission', 8, 2);
////$table->timestamps();
////
////$table->foreign('affiliate_id')->references('id')->on('affiliates');
////$table->foreign('offer_id')->references('id')->on('offers');
////
////CREATE TABLE `affiliates` (
////`id` bigint unsigned not null auto_increment primary key,
////  `name` varchar(255) not null,
////  `thresholdAmount` decimal(10, 2) not null,
////  `payout` decimal(10, 2) not null,
////  `revenue` decimal(10, 2) not null,
////  `created_at` timestamp null,
////  `updated_at` timestamp null
////);
////
////CREATE TABLE `commission_logs` (
////`id` bigint unsigned not null auto_increment primary key,
////  `name` varchar(255) not null,
////  `affiliate_id` bigint unsigned not null,
////  `sub_id` varchar(255) null,
////  `offer_id` bigint unsigned not null,
////  `aff_sub` varchar(255) null,
////  `aff_sub2` varchar(255) null,
////  `aff_sub3` varchar(255) null,
////  `aff_sub4` varchar(255) null,
////  `aff_sub5` varchar(255) null,
////  `postback_url` varchar(255) null,
////  `cpl_earnings` decimal(10, 2) not null,
////  `created_at` timestamp null,
////  `updated_at` timestamp null,
////  foreign key (`affiliate_id`) references `affiliates` (`id`),
////  foreign key (`offer_id`) references `offers` (`id`)
////);
////
////
////
////
//////clicks
////$table->string('affiliate_id');
////$table->integer('offer_id');
////$table->string('aff_sub')->nullable();
////$table->string('aff_sub2')->nullable();
////$table->string('aff_sub3')->nullable();
////$table->string('aff_sub4')->nullable();
////$table->string('aff_sub5')->nullable();
////
////
////CREATE TABLE `clicks` (
////`id` bigint unsigned not null auto_increment primary key,
////  `affiliate_id` bigint unsigned not null,
////  `offer_id` bigint unsigned not null,
////  `aff_sub` varchar(255) null,
////  `aff_sub2` varchar(255) null,
////  `aff_sub3` varchar(255) null,
////  `aff_sub4` varchar(255) null,
////  `aff_sub5` varchar(255) null,
////  `created_at` timestamp null,
////  `updated_at` timestamp null,
////  foreign key (`affiliate_id`) references `affiliates` (`id`),
////  foreign key (`offer_id`) references `offers` (`id`)
////);
////
////
////
////
////Schema::create('buyers', function (Blueprint $table) {
////    $table->id();
////    $table->string('name');
////    $table->string('email')->unique();
////    $table->string('phone')->nullable();
////    $table->timestamps();
////
////
////    CREATE TABLE `buyers` (
////    `id` bigint unsigned not null auto_increment primary key,
////  `name` varchar(255) not null,
////  `email` varchar(255) not null unique,
////  `phone` varchar(255) null,
////  `created_at` timestamp null,
////  `updated_at` timestamp null
////);
////
////
////
//    Schema::create('postbacks', function (Blueprint $table) {
//        $table->id();
//        $table->string('url');
//        $table->json('request')->nullable();
//        $table->json('response')->nullable();
//        $table->timestamps();
//    });
////}
//CREATE TABLE `postbacks` (
//`id` bigint unsigned not null auto_increment primary key,
//  `url` varchar(255) not null,
//  `request` json null,
//  `response` json null,
//  `created_at` timestamp null,
//  `updated_at` timestamp null
//);
////
////
////        Schema::create('loan_applications', function (Blueprint $table) {
////            $table->id();
////            $table->uuid('uuid')->unique();
////            $table->unsignedBigInteger('source_id')->nullable();
////            $table->unsignedBigInteger('loan_id')->nullable();
////            $table->unsignedBigInteger('applicant_id')->nullable();
////            $table->unsignedBigInteger('residence_id')->nullable();
////            $table->unsignedBigInteger('employer_id')->nullable();
////            $table->unsignedBigInteger('bank_id')->nullable();
////            $table->unsignedBigInteger('consent_id')->nullable();
////            $table->char('transaction_id')->nullable();
////            $table->string('affiliate_id')->nullable();
////            $table->char('subid', 255)->nullable();
////            $table->integer('offer_id')->nullable();
////            $table->decimal('minCommissionAmount')->nullable();
////            $table->decimal('maxCommissionAmount')->nullable();
////            $table->integer('timeout')->nullable();
////            $table->boolean('istest')->nullable();
////            $table->integer('buyer_id')->nullable();
////            $table->string('buyer_tier_id')->nullable();
////            $table->float('affiliate_lead_price')->nullable();
////            $table->float('buyer_lead_price')->nullable();
////            $table->tinyInteger('leadStatus')->default(3)->comment('1=accepted,2=rejected,3=pending');
////            $table->char('model_type')->comment('1=CPA, 2=CPF 3=Hybrid 4= ')->nullable();
////            $table->integer('quality_score')->nullable();
////            $table->tinyInteger('isRedirected')->nullable();
////            $table->char('redirectUrl', 255)->nullable();
////            $table->timestamps();
////
////            $table->foreign('source_id')->references('id')->on('sources')->onDelete('cascade');
////            $table->foreign('loan_id')->references('id')->on('loans')->onDelete('cascade');
////            $table->foreign('applicant_id')->references('id')->on('applicants')->onDelete('cascade');
////            $table->foreign('residence_id')->references('id')->on('residences')->onDelete('cascade');
////            $table->foreign('employer_id')->references('id')->on('employers')->onDelete('cascade');
////            $table->foreign('bank_id')->references('id')->on('banks')->onDelete('cascade');
////            $table->foreign('consent_id')->references('id')->on('consents')->onDelete('cascade');
////        });
////
////
////
//CREATE TABLE role_user (
//    id BIGINT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
//    role_id BIGINT UNSIGNED NOT NULL,
//    user_id BIGINT UNSIGNED NOT NULL,
//    created_at TIMESTAMP NULL DEFAULT NULL,
//    updated_at TIMESTAMP NULL DEFAULT NULL,
//    FOREIGN KEY (role_id) REFERENCES roles(id) ON DELETE CASCADE,
//    FOREIGN KEY (user_id) REFERENCES users(id) ON DELETE CASCADE
//);

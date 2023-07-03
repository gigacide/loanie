CREATE TABLE `offers` (
`id` bigint unsigned NOT NULL AUTO_INCREMENT PRIMARY KEY,
`name` varchar(255) NOT NULL,
`thresholdAmount` decimal (10,
2) NOT NULL,
`payout` decimal (10,
2) NOT NULL,
`revenue` decimal (10,
2) NOT NULL,
`created_at` timestamp NULL,
`updated_at` timestamp NULL
);

CREATE TABLE `applicants` (
`id` bigint unsigned NOT NULL AUTO_INCREMENT PRIMARY KEY,
`lead_id` char(36) NULL,
`nameTitle` varchar(255) NOT NULL,
`firstName` varchar(255) NOT NULL,
`lastName` varchar(255) NOT NULL,
`dateOfBirthDay` int unsigned NOT NULL,
`dateOfBirthMonth` int unsigned NOT NULL,
`dateOfBirthYear` int unsigned NOT NULL,
`ssn` varchar(255) NOT NULL,
`email` varchar(255) NOT NULL,
`homePhoneNumber` varchar(255) NOT NULL,
`cellPhoneNumber` varchar(255) NOT NULL,
`workPhoneNumber` varchar(255) NOT NULL,
`maritalStatus` varchar(255) NOT NULL,
`dependants` int unsigned NOT NULL,
`inMilitary` tinyint (1) NOT NULL,
`drivingLicenseState` varchar(255) NOT NULL,
`drivingLicenseNumber` varchar(255) NOT NULL,
`creditType` varchar(255) NOT NULL,
`callTime` varchar(255) NOT NULL,
`created_at` timestamp NULL,
`updated_at` timestamp NULL
);

CREATE TABLE `affiliates` (
`id` bigint unsigned NOT NULL AUTO_INCREMENT PRIMARY KEY,
`name` varchar(255) NOT NULL,
`affiliate_id` varchar(255) NOT NULL,
`sub_id` varchar(255) NOT NULL,
`offer_id` varchar(255) NOT NULL,
`aff_sub` varchar(255) NOT NULL,
`aff_sub2` varchar(255) NOT NULL,
`aff_sub3` varchar(255) NOT NULL,
`aff_sub4` varchar(255) NOT NULL,
`aff_sub5` varchar(255) NOT NULL,
`postback_url` varchar(255) NOT NULL,
`cpl_earnings` float NOT NULL,
`created_at` timestamp NULL,
`updated_at` timestamp NULL
);

CREATE TABLE `commission_logs` (
`id` bigint unsigned NOT NULL AUTO_INCREMENT PRIMARY KEY,
`name` varchar(255) NOT NULL,
`affiliate_id` bigint unsigned NOT NULL,
`sub_id` varchar(255) NULL,
`offer_id` bigint unsigned NOT NULL,
`aff_sub` varchar(255) NULL,
`aff_sub2` varchar(255) NULL,
`aff_sub3` varchar(255) NULL,
`aff_sub4` varchar(255) NULL,
`aff_sub5` varchar(255) NULL,
`postback_url` varchar(255) NULL,
`cpl_earnings` decimal (10,
2) NOT NULL,
`created_at` timestamp NULL,
`updated_at` timestamp NULL,
FOREIGN KEY (`affiliate_id`) REFERENCES `affiliates` (`id`),
FOREIGN KEY (`offer_id`) REFERENCES `offers` (`id`)
);

CREATE TABLE `clicks` (
`id` bigint unsigned NOT NULL AUTO_INCREMENT PRIMARY KEY,
`affiliate_id` varchar(255) NOT NULL,
`offer_id` int unsigned NOT NULL,
`aff_sub` varchar(255) NULL,
`aff_sub2` varchar(255) NULL,
`aff_sub3` varchar(255) NULL,
`aff_sub4` varchar(255) NULL,
`aff_sub5` varchar(255) NULL,
`created_at` timestamp NULL,
`updated_at` timestamp NULL
);

CREATE TABLE `postbacks` (
`id` bigint unsigned NOT NULL AUTO_INCREMENT PRIMARY KEY,
`url` varchar(255) NOT NULL,
`request` json NULL,
`response` json NULL,
`created_at` timestamp NULL,
`updated_at` timestamp NULL
);





CREATE TABLE `loan_applications` (
`id` bigint unsigned NOT NULL AUTO_INCREMENT PRIMARY KEY,
`uuid` char(36) NOT NULL UNIQUE,
`source_id` bigint unsigned NULL,
`loan_id` bigint unsigned NULL,
`applicant_id` bigint unsigned NULL,
`residence_id` bigint unsigned NULL,
`employer_id` bigint unsigned NULL,
`bank_id` bigint unsigned NULL,
`consent_id` bigint unsigned NULL,
`transaction_id` char(255) NULL,
`affiliate_id` varchar(255) NULL,
`subid` char(255) NULL,
`offer_id` int unsigned NULL,
`minCommissionAmount` decimal NULL,
`maxCommissionAmount` decimal NULL,
`timeout` int NULL,
`istest` tinyint NULL,
`buyer_id` int NULL,
`buyer_tier_id` varchar(255) NULL,
`affiliate_lead_price` float NULL,
`buyer_lead_price` float NULL,
`leadStatus` tinyint DEFAULT 3 COMMENT '1=accepted, 2=rejected, 3=pending',
`model_type` char(1) NULL COMMENT '1=CPA, 2=CPF 3=Hybrid 4= ',
`quality_score` int NULL,
`isRedirected` tinyint NULL,
`redirectUrl` char(255) NULL,
`created_at` timestamp NULL,
`updated_at` timestamp NULL,
FOREIGN KEY (`source_id`) REFERENCES `sources` (`id`) ON DELETE CASCADE,
FOREIGN KEY (`loan_id`) REFERENCES `loans` (`id`) ON DELETE CASCADE,
FOREIGN KEY (`applicant_id`) REFERENCES `applicants` (`id`) ON DELETE CASCADE,
FOREIGN KEY (`residence_id`) REFERENCES `residences` (`id`) ON DELETE CASCADE,
FOREIGN KEY (`employer_id`) REFERENCES `employers` (`id`) ON DELETE CASCADE,
FOREIGN KEY (`bank_id`) REFERENCES `banks` (`id`) ON DELETE CASCADE,
FOREIGN KEY (`consent_id`) REFERENCES `consents` (`id`) ON DELETE CASCADE
);

CREATE TABLE `consents` (
`id` bigint unsigned NOT NULL AUTO_INCREMENT PRIMARY KEY,
`lead_id` char(36) NULL,
`consentFinancial` tinyint NOT NULL,
`consentCreditSearch` tinyint NOT NULL,
`consentToMarketingEmails` tinyint NOT NULL,
`created_at` timestamp NULL,
`updated_at` timestamp NULL
);

CREATE TABLE `banks` (
`id` bigint unsigned NOT NULL AUTO_INCREMENT PRIMARY KEY,
`lead_id` char(36) NULL,
`bankAccountType` varchar(255) NOT NULL,
`bankRoutingNumber` varchar(255) NOT NULL,
`bankAccountNumber` varchar(255) NOT NULL,
`monthsAtBank` unsigned int NOT NULL,
`bankName` varchar(255) NOT NULL,
`bankPhone` varchar(255) NOT NULL,
`directDeposit` varchar(255) NOT NULL,
`created_at` timestamp NULL,
`updated_at` timestamp NULL
);

CREATE TABLE `employers` (
`id` bigint unsigned NOT NULL AUTO_INCREMENT PRIMARY KEY,
`lead_id` char(36) NULL,
`employerName` varchar(255) NOT NULL,
`employmentStatus` varchar(255) NOT NULL,
`jobTitle` varchar(255) NOT NULL,
`monthlyIncome` decimal (8,
2) NOT NULL,
`incomeCycle` unsigned int NOT NULL,
`incomeSource` unsigned int NOT NULL,
`incomePaymentType` unsigned int NOT NULL,
`monthsAtEmployer` unsigned int NOT NULL,
`nextPayDateDay` unsigned int NOT NULL,
`nextPayDateMonth` unsigned int NOT NULL,
`nextPayDateYear` unsigned int NOT NULL,
`followingPayDateDay` unsigned int NOT NULL,
`followingPayDateMonth` unsigned int NOT NULL,
`followingPayDateYear` unsigned int NOT NULL,
`created_at` timestamp NULL,
`updated_at` timestamp NULL
);

CREATE TABLE `residences` (
`id` bigint unsigned NOT NULL AUTO_INCREMENT PRIMARY KEY,
`lead_id` char(36) NULL,
`houseNumber` varchar(255) NOT NULL,
`houseName` varchar(255) NULL,
`residentialStatus` varchar(255) NOT NULL,
`addressStreet1` varchar(255) NOT NULL,
`city` varchar(255) NOT NULL,
`state` varchar(255) NOT NULL,
`zip` varchar(255) NOT NULL,
`monthsAtAddress` unsigned int NOT NULL,
`created_at` timestamp NULL,
`updated_at` timestamp NULL
);

CREATE TABLE `loans` (
`id` bigint unsigned NOT NULL AUTO_INCREMENT PRIMARY KEY,
`lead_id` char(36) NULL,
`loanAmount` decimal (8,
2) NOT NULL,
`loanTerms` unsigned int NOT NULL,
`loanPurpose` int DEFAULT '1',
`created_at` timestamp NULL,
`updated_at` timestamp NULL
);

CREATE TABLE `sources` (
`id` bigint unsigned NOT NULL AUTO_INCREMENT PRIMARY KEY,
`lead_id` char(36) NULL,
`userAgent` varchar(255) NOT NULL,
`ipAddress` varchar(255) NOT NULL,
`creationUrl` varchar(255) NOT NULL,
`referringUrl` varchar(255) NOT NULL,
`created_at` timestamp NULL,
`updated_at` timestamp NULL
);

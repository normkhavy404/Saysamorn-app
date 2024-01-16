/*
 Navicat Premium Data Transfer

 Source Server         : 206.189.32.207_3306
 Source Server Type    : MySQL
 Source Server Version : 80033
 Source Host           : 206.189.32.207:3306
 Source Schema         : samorn_sms

 Target Server Type    : MySQL
 Target Server Version : 80033
 File Encoding         : 65001

 Date: 22/08/2023 16:07:46
*/

SET NAMES utf8mb4;
SET FOREIGN_KEY_CHECKS = 0;

-- ----------------------------
-- Table structure for academic_class_student
-- ----------------------------
DROP TABLE IF EXISTS `academic_class_student`;
CREATE TABLE `academic_class_student` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `student_id` bigint unsigned NOT NULL,
  `academic_class_id` bigint unsigned NOT NULL,
  `status` tinyint NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=82 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ----------------------------
-- Records of academic_class_student
-- ----------------------------
BEGIN;
INSERT INTO `academic_class_student` VALUES (11, 1, 1, 1, '2023-06-26 01:06:43', '2023-06-26 01:06:43');
INSERT INTO `academic_class_student` VALUES (12, 2, 1, 1, '2023-06-26 01:06:49', '2023-06-26 01:06:49');
INSERT INTO `academic_class_student` VALUES (13, 5, 3, 1, '2023-06-29 09:00:27', '2023-06-29 09:00:27');
INSERT INTO `academic_class_student` VALUES (14, 6, 3, 1, '2023-06-30 09:23:20', '2023-06-30 09:23:20');
INSERT INTO `academic_class_student` VALUES (15, 7, 3, 1, '2023-06-30 09:23:52', '2023-06-30 09:23:52');
INSERT INTO `academic_class_student` VALUES (16, 8, 3, 1, '2023-06-30 09:23:58', '2023-06-30 09:23:58');
INSERT INTO `academic_class_student` VALUES (17, 9, 3, 1, '2023-06-30 09:24:02', '2023-06-30 09:24:02');
INSERT INTO `academic_class_student` VALUES (18, 10, 3, 1, '2023-06-30 09:24:07', '2023-06-30 09:24:07');
INSERT INTO `academic_class_student` VALUES (19, 11, 3, 1, '2023-06-30 09:24:11', '2023-06-30 09:24:11');
INSERT INTO `academic_class_student` VALUES (20, 12, 3, 1, '2023-06-30 09:24:15', '2023-06-30 09:24:15');
INSERT INTO `academic_class_student` VALUES (21, 13, 3, 1, '2023-06-30 09:24:24', '2023-06-30 09:24:24');
INSERT INTO `academic_class_student` VALUES (22, 14, 3, 1, '2023-06-30 09:24:32', '2023-06-30 09:24:32');
INSERT INTO `academic_class_student` VALUES (23, 15, 3, 1, '2023-06-30 09:24:36', '2023-06-30 09:24:36');
INSERT INTO `academic_class_student` VALUES (24, 16, 3, 1, '2023-06-30 09:24:54', '2023-06-30 09:24:54');
INSERT INTO `academic_class_student` VALUES (25, 17, 3, 1, '2023-06-30 09:27:59', '2023-06-30 09:27:59');
INSERT INTO `academic_class_student` VALUES (26, 18, 3, 1, '2023-06-30 09:28:06', '2023-06-30 09:28:06');
INSERT INTO `academic_class_student` VALUES (27, 19, 3, 1, '2023-06-30 09:28:12', '2023-06-30 09:28:12');
INSERT INTO `academic_class_student` VALUES (28, 20, 3, 1, '2023-06-30 09:28:17', '2023-06-30 09:28:17');
INSERT INTO `academic_class_student` VALUES (29, 21, 3, 1, '2023-06-30 09:28:21', '2023-06-30 09:28:21');
INSERT INTO `academic_class_student` VALUES (30, 22, 3, 1, '2023-06-30 09:28:26', '2023-06-30 09:28:26');
INSERT INTO `academic_class_student` VALUES (31, 23, 3, 1, '2023-06-30 09:28:31', '2023-06-30 09:28:31');
INSERT INTO `academic_class_student` VALUES (32, 24, 3, 1, '2023-06-30 09:28:37', '2023-06-30 09:28:37');
INSERT INTO `academic_class_student` VALUES (33, 25, 3, 1, '2023-06-30 09:28:41', '2023-06-30 09:28:41');
INSERT INTO `academic_class_student` VALUES (34, 26, 3, 1, '2023-06-30 09:28:44', '2023-06-30 09:28:44');
INSERT INTO `academic_class_student` VALUES (35, 27, 3, 1, '2023-06-30 09:28:46', '2023-06-30 09:28:46');
INSERT INTO `academic_class_student` VALUES (36, 28, 3, 1, '2023-06-30 09:28:49', '2023-06-30 09:28:49');
INSERT INTO `academic_class_student` VALUES (37, 29, 3, 1, '2023-06-30 09:28:56', '2023-06-30 09:28:56');
INSERT INTO `academic_class_student` VALUES (38, 3, 1, 1, '2023-08-11 00:43:12', '2023-08-11 00:43:12');
INSERT INTO `academic_class_student` VALUES (39, 30, 6, 1, '2023-08-11 07:01:01', '2023-08-11 07:01:01');
INSERT INTO `academic_class_student` VALUES (40, 31, 6, 1, '2023-08-11 07:01:07', '2023-08-11 07:01:07');
INSERT INTO `academic_class_student` VALUES (41, 32, 6, 1, '2023-08-11 07:01:11', '2023-08-11 07:01:11');
INSERT INTO `academic_class_student` VALUES (42, 33, 6, 1, '2023-08-11 07:01:16', '2023-08-11 07:01:16');
INSERT INTO `academic_class_student` VALUES (43, 34, 6, 1, '2023-08-11 07:01:24', '2023-08-11 07:01:24');
INSERT INTO `academic_class_student` VALUES (44, 35, 6, 1, '2023-08-11 07:01:34', '2023-08-11 07:01:34');
INSERT INTO `academic_class_student` VALUES (45, 36, 6, 1, '2023-08-11 07:02:57', '2023-08-11 07:02:57');
INSERT INTO `academic_class_student` VALUES (46, 37, 6, 1, '2023-08-11 07:03:01', '2023-08-11 07:03:01');
INSERT INTO `academic_class_student` VALUES (47, 38, 6, 1, '2023-08-11 07:03:05', '2023-08-11 07:03:05');
INSERT INTO `academic_class_student` VALUES (48, 39, 6, 1, '2023-08-11 07:03:08', '2023-08-11 07:03:08');
INSERT INTO `academic_class_student` VALUES (49, 40, 6, 1, '2023-08-11 07:03:12', '2023-08-11 07:03:12');
INSERT INTO `academic_class_student` VALUES (50, 41, 4, 1, '2023-08-11 09:38:25', '2023-08-11 09:38:25');
INSERT INTO `academic_class_student` VALUES (51, 42, 4, 1, '2023-08-11 09:38:29', '2023-08-11 09:38:29');
INSERT INTO `academic_class_student` VALUES (52, 43, 4, 1, '2023-08-11 09:38:33', '2023-08-11 09:38:33');
INSERT INTO `academic_class_student` VALUES (53, 44, 4, 1, '2023-08-11 09:38:36', '2023-08-11 09:38:36');
INSERT INTO `academic_class_student` VALUES (54, 45, 4, 1, '2023-08-11 09:38:42', '2023-08-11 09:38:42');
INSERT INTO `academic_class_student` VALUES (55, 46, 4, 1, '2023-08-11 09:38:46', '2023-08-11 09:38:46');
INSERT INTO `academic_class_student` VALUES (56, 47, 4, 1, '2023-08-11 09:38:50', '2023-08-11 09:38:50');
INSERT INTO `academic_class_student` VALUES (57, 48, 4, 1, '2023-08-11 09:38:54', '2023-08-11 09:38:54');
INSERT INTO `academic_class_student` VALUES (58, 49, 4, 1, '2023-08-11 09:38:57', '2023-08-11 09:38:57');
INSERT INTO `academic_class_student` VALUES (59, 50, 4, 1, '2023-08-11 09:39:02', '2023-08-11 09:39:02');
INSERT INTO `academic_class_student` VALUES (60, 51, 4, 1, '2023-08-11 09:39:06', '2023-08-11 09:39:06');
INSERT INTO `academic_class_student` VALUES (61, 52, 4, 1, '2023-08-11 09:39:10', '2023-08-11 09:39:10');
INSERT INTO `academic_class_student` VALUES (62, 53, 4, 1, '2023-08-11 09:39:13', '2023-08-11 09:39:13');
INSERT INTO `academic_class_student` VALUES (63, 54, 4, 1, '2023-08-11 09:39:16', '2023-08-11 09:39:16');
INSERT INTO `academic_class_student` VALUES (64, 55, 4, 1, '2023-08-11 09:39:20', '2023-08-11 09:39:20');
INSERT INTO `academic_class_student` VALUES (65, 56, 4, 1, '2023-08-11 09:39:24', '2023-08-11 09:39:24');
INSERT INTO `academic_class_student` VALUES (66, 57, 4, 1, '2023-08-11 09:39:28', '2023-08-11 09:39:28');
INSERT INTO `academic_class_student` VALUES (67, 58, 4, 1, '2023-08-11 09:39:32', '2023-08-11 09:39:32');
INSERT INTO `academic_class_student` VALUES (68, 59, 4, 1, '2023-08-11 09:39:36', '2023-08-11 09:39:36');
INSERT INTO `academic_class_student` VALUES (69, 60, 4, 1, '2023-08-11 09:39:40', '2023-08-11 09:39:40');
INSERT INTO `academic_class_student` VALUES (70, 61, 4, 1, '2023-08-11 09:39:43', '2023-08-11 09:39:43');
INSERT INTO `academic_class_student` VALUES (71, 62, 4, 1, '2023-08-11 09:39:45', '2023-08-11 09:39:45');
INSERT INTO `academic_class_student` VALUES (72, 63, 4, 1, '2023-08-11 09:39:48', '2023-08-11 09:39:48');
INSERT INTO `academic_class_student` VALUES (73, 64, 4, 1, '2023-08-11 09:39:51', '2023-08-11 09:39:51');
INSERT INTO `academic_class_student` VALUES (74, 65, 4, 1, '2023-08-11 09:39:55', '2023-08-11 09:39:55');
INSERT INTO `academic_class_student` VALUES (75, 66, 4, 1, '2023-08-11 09:39:58', '2023-08-11 09:39:58');
INSERT INTO `academic_class_student` VALUES (76, 68, 4, 1, '2023-08-11 09:40:01', '2023-08-11 09:40:01');
INSERT INTO `academic_class_student` VALUES (77, 67, 4, 1, '2023-08-11 09:40:04', '2023-08-11 09:40:04');
INSERT INTO `academic_class_student` VALUES (78, 69, 4, 1, '2023-08-11 09:40:08', '2023-08-11 09:40:08');
INSERT INTO `academic_class_student` VALUES (79, 70, 4, 1, '2023-08-11 09:40:13', '2023-08-11 09:40:13');
INSERT INTO `academic_class_student` VALUES (80, 71, 4, 1, '2023-08-11 09:40:15', '2023-08-11 09:40:15');
INSERT INTO `academic_class_student` VALUES (81, 72, 4, 1, '2023-08-11 09:40:19', '2023-08-11 09:40:19');
COMMIT;

-- ----------------------------
-- Table structure for academic_classes
-- ----------------------------
DROP TABLE IF EXISTS `academic_classes`;
CREATE TABLE `academic_classes` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `name_class` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `teacher_id` bigint unsigned NOT NULL,
  `academic_year_id` bigint unsigned NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ----------------------------
-- Records of academic_classes
-- ----------------------------
BEGIN;
INSERT INTO `academic_classes` VALUES (1, '១ (ក)', 2, 1, NULL, '2023-08-11 00:32:13');
INSERT INTO `academic_classes` VALUES (2, '២ (ក)', 1, 1, NULL, '2023-08-11 00:33:01');
INSERT INTO `academic_classes` VALUES (3, '៣ (ក)', 5, 1, '2023-06-22 19:01:06', '2023-08-11 00:33:07');
INSERT INTO `academic_classes` VALUES (4, '៤ (ក)', 5, 1, '2023-06-22 19:01:41', '2023-08-11 00:33:15');
INSERT INTO `academic_classes` VALUES (5, '​5 (ក)', 4, 1, '2023-06-22 19:02:02', '2023-08-11 00:33:23');
INSERT INTO `academic_classes` VALUES (6, '៦ (ក)', 4, 1, '2023-06-23 00:51:39', '2023-08-11 00:33:30');
INSERT INTO `academic_classes` VALUES (7, '១(ក)', 3, 3, '2023-08-12 02:18:13', '2023-08-13 09:09:25');
COMMIT;

-- ----------------------------
-- Table structure for academic_years
-- ----------------------------
DROP TABLE IF EXISTS `academic_years`;
CREATE TABLE `academic_years` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `name_year` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `start_date` date NOT NULL,
  `end_date` date NOT NULL,
  `status` tinyint NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ----------------------------
-- Records of academic_years
-- ----------------------------
BEGIN;
INSERT INTO `academic_years` VALUES (1, '២០២២ - ២០២៣', '2022-01-01', '2022-06-06', 1, NULL, '2023-08-11 00:42:11');
INSERT INTO `academic_years` VALUES (2, '២០២៣ - ២០២៤', '2023-06-06', '2023-12-12', 3, NULL, '2023-08-11 00:42:26');
INSERT INTO `academic_years` VALUES (3, '២០២៤ - ២០២៥', '2024-01-01', '2024-12-01', 3, '2023-06-22 19:18:27', '2023-08-11 00:42:42');
COMMIT;

-- ----------------------------
-- Table structure for attendents
-- ----------------------------
DROP TABLE IF EXISTS `attendents`;
CREATE TABLE `attendents` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `academic_class_student_id` bigint unsigned NOT NULL,
  `date` date NOT NULL,
  `type` tinyint DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ----------------------------
-- Records of attendents
-- ----------------------------
BEGIN;
INSERT INTO `attendents` VALUES (3, 11, '2023-06-29', 1, '2023-06-29 00:44:35', '2023-06-29 00:44:35');
INSERT INTO `attendents` VALUES (5, 11, '2023-06-30', 2, '2023-06-29 23:20:38', '2023-06-29 23:20:38');
INSERT INTO `attendents` VALUES (6, 12, '2023-06-30', 2, '2023-06-29 23:38:58', '2023-06-29 23:38:58');
INSERT INTO `attendents` VALUES (7, 13, '2023-07-01', 2, '2023-07-01 02:36:03', '2023-07-01 02:36:03');
INSERT INTO `attendents` VALUES (8, 13, '2023-08-11', 1, '2023-08-11 01:19:25', '2023-08-11 01:19:25');
INSERT INTO `attendents` VALUES (9, 37, '2023-08-11', 1, '2023-08-11 01:19:57', '2023-08-11 01:19:57');
INSERT INTO `attendents` VALUES (10, 14, '2023-08-14', 2, '2023-08-14 02:35:38', '2023-08-14 02:35:38');
INSERT INTO `attendents` VALUES (11, 13, '2023-08-15', 2, '2023-08-15 03:06:56', '2023-08-15 03:06:56');
COMMIT;

-- ----------------------------
-- Table structure for failed_jobs
-- ----------------------------
DROP TABLE IF EXISTS `failed_jobs`;
CREATE TABLE `failed_jobs` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ----------------------------
-- Records of failed_jobs
-- ----------------------------
BEGIN;
COMMIT;

-- ----------------------------
-- Table structure for migrations
-- ----------------------------
DROP TABLE IF EXISTS `migrations`;
CREATE TABLE `migrations` (
  `id` int unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=18 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ----------------------------
-- Records of migrations
-- ----------------------------
BEGIN;
INSERT INTO `migrations` VALUES (1, '2014_10_12_000000_create_users_table', 1);
INSERT INTO `migrations` VALUES (2, '2014_10_12_100000_create_password_reset_tokens_table', 1);
INSERT INTO `migrations` VALUES (3, '2014_10_12_100000_create_password_resets_table', 1);
INSERT INTO `migrations` VALUES (4, '2019_08_19_000000_create_failed_jobs_table', 1);
INSERT INTO `migrations` VALUES (5, '2019_12_14_000001_create_personal_access_tokens_table', 1);
INSERT INTO `migrations` VALUES (6, '2023_05_22_111807_create_permissions_table', 1);
INSERT INTO `migrations` VALUES (7, '2023_05_22_111923_create_roles_table', 1);
INSERT INTO `migrations` VALUES (8, '2023_05_22_111940_create_permission_role_table', 1);
INSERT INTO `migrations` VALUES (9, '2023_05_22_112033_create_role_user_table', 1);
INSERT INTO `migrations` VALUES (10, '2023_05_26_070308_create_teachers_table', 1);
INSERT INTO `migrations` VALUES (11, '2023_05_27_155051_create_students_table', 1);
INSERT INTO `migrations` VALUES (12, '2023_05_31_015942_create_academic_years_table', 1);
INSERT INTO `migrations` VALUES (13, '2023_06_01_091311_create_academic_classes_table', 1);
INSERT INTO `migrations` VALUES (14, '2023_06_06_084413_create_academic_class_student_table', 1);
INSERT INTO `migrations` VALUES (15, '2023_06_23_094831_create_attendents_table', 2);
INSERT INTO `migrations` VALUES (16, '2023_06_24_080839_create_scores_table', 3);
INSERT INTO `migrations` VALUES (17, '2023_06_24_082553_create_scores_table', 4);
COMMIT;

-- ----------------------------
-- Table structure for password_reset_tokens
-- ----------------------------
DROP TABLE IF EXISTS `password_reset_tokens`;
CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ----------------------------
-- Records of password_reset_tokens
-- ----------------------------
BEGIN;
COMMIT;

-- ----------------------------
-- Table structure for password_resets
-- ----------------------------
DROP TABLE IF EXISTS `password_resets`;
CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `password_resets_email_index` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ----------------------------
-- Records of password_resets
-- ----------------------------
BEGIN;
COMMIT;

-- ----------------------------
-- Table structure for permission_role
-- ----------------------------
DROP TABLE IF EXISTS `permission_role`;
CREATE TABLE `permission_role` (
  `role_id` bigint unsigned NOT NULL,
  `permission_id` bigint unsigned NOT NULL,
  KEY `permission_role_role_id_foreign` (`role_id`),
  KEY `permission_role_permission_id_foreign` (`permission_id`),
  CONSTRAINT `permission_role_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE,
  CONSTRAINT `permission_role_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ----------------------------
-- Records of permission_role
-- ----------------------------
BEGIN;
INSERT INTO `permission_role` VALUES (1, 1);
INSERT INTO `permission_role` VALUES (1, 3);
INSERT INTO `permission_role` VALUES (1, 4);
INSERT INTO `permission_role` VALUES (1, 5);
INSERT INTO `permission_role` VALUES (1, 6);
INSERT INTO `permission_role` VALUES (1, 7);
INSERT INTO `permission_role` VALUES (1, 8);
INSERT INTO `permission_role` VALUES (1, 9);
INSERT INTO `permission_role` VALUES (1, 10);
INSERT INTO `permission_role` VALUES (2, 10);
INSERT INTO `permission_role` VALUES (2, 9);
INSERT INTO `permission_role` VALUES (2, 6);
INSERT INTO `permission_role` VALUES (2, 5);
INSERT INTO `permission_role` VALUES (2, 7);
COMMIT;

-- ----------------------------
-- Table structure for permissions
-- ----------------------------
DROP TABLE IF EXISTS `permissions`;
CREATE TABLE `permissions` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ----------------------------
-- Records of permissions
-- ----------------------------
BEGIN;
INSERT INTO `permissions` VALUES (1, 'user_access', NULL, NULL, NULL);
INSERT INTO `permissions` VALUES (3, 'role_access', NULL, NULL, NULL);
INSERT INTO `permissions` VALUES (4, 'teacher_access', NULL, NULL, NULL);
INSERT INTO `permissions` VALUES (5, 'student_access', NULL, NULL, NULL);
INSERT INTO `permissions` VALUES (6, 'academic_year_access', NULL, NULL, NULL);
INSERT INTO `permissions` VALUES (7, 'academic_class_access', NULL, NULL, NULL);
INSERT INTO `permissions` VALUES (8, 'academic_class_student_access', NULL, NULL, NULL);
INSERT INTO `permissions` VALUES (9, 'attendent_access', NULL, NULL, NULL);
INSERT INTO `permissions` VALUES (10, 'score_access', NULL, NULL, NULL);
COMMIT;

-- ----------------------------
-- Table structure for personal_access_tokens
-- ----------------------------
DROP TABLE IF EXISTS `personal_access_tokens`;
CREATE TABLE `personal_access_tokens` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint unsigned NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ----------------------------
-- Records of personal_access_tokens
-- ----------------------------
BEGIN;
COMMIT;

-- ----------------------------
-- Table structure for role_user
-- ----------------------------
DROP TABLE IF EXISTS `role_user`;
CREATE TABLE `role_user` (
  `role_id` bigint unsigned NOT NULL,
  `user_id` bigint unsigned NOT NULL,
  KEY `role_user_role_id_foreign` (`role_id`),
  KEY `role_user_user_id_foreign` (`user_id`),
  CONSTRAINT `role_user_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE,
  CONSTRAINT `role_user_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ----------------------------
-- Records of role_user
-- ----------------------------
BEGIN;
INSERT INTO `role_user` VALUES (1, 1);
INSERT INTO `role_user` VALUES (2, 2);
COMMIT;

-- ----------------------------
-- Table structure for roles
-- ----------------------------
DROP TABLE IF EXISTS `roles`;
CREATE TABLE `roles` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ----------------------------
-- Records of roles
-- ----------------------------
BEGIN;
INSERT INTO `roles` VALUES (1, 'Admin', NULL, NULL, NULL);
INSERT INTO `roles` VALUES (2, 'Teacher', NULL, NULL, NULL);
COMMIT;

-- ----------------------------
-- Table structure for scores
-- ----------------------------
DROP TABLE IF EXISTS `scores`;
CREATE TABLE `scores` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `academic_class_student_id` bigint unsigned NOT NULL,
  `semester` tinyint DEFAULT NULL,
  `type` tinyint DEFAULT NULL,
  `khmer` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `math` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `science` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `socail` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=28 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ----------------------------
-- Records of scores
-- ----------------------------
BEGIN;
INSERT INTO `scores` VALUES (1, 12, 1, 12, '10', '10', '10', '10', '2023-07-01 23:28:27', '2023-07-01 23:28:27');
INSERT INTO `scores` VALUES (2, 13, 1, 0, '10', '8', '5', '9', '2023-08-11 01:21:03', '2023-08-11 01:21:03');
INSERT INTO `scores` VALUES (3, 14, 1, 0, '9', '7', '9', '10', '2023-08-11 01:21:19', '2023-08-11 01:21:19');
INSERT INTO `scores` VALUES (4, 15, 1, 0, '8', '5', '8', '5', '2023-08-11 01:35:57', '2023-08-11 01:35:57');
INSERT INTO `scores` VALUES (5, 16, 1, 0, '9', '6', '8', '9', '2023-08-11 01:36:27', '2023-08-11 01:36:27');
INSERT INTO `scores` VALUES (6, 17, 1, 0, '8', '9', '5', '4', '2023-08-11 01:36:39', '2023-08-11 01:36:39');
INSERT INTO `scores` VALUES (7, 18, 1, 0, '8', '8', '5', '6', '2023-08-11 01:39:00', '2023-08-11 01:39:00');
INSERT INTO `scores` VALUES (8, 19, 1, 0, '5', '7', '5', '9', '2023-08-11 01:39:26', '2023-08-11 01:39:26');
INSERT INTO `scores` VALUES (9, 20, 1, 0, '10', '6', '5', '8', '2023-08-11 01:51:54', '2023-08-11 01:51:54');
INSERT INTO `scores` VALUES (10, 21, 1, 0, '10', '5', '6', '7', '2023-08-11 01:53:06', '2023-08-11 01:53:06');
INSERT INTO `scores` VALUES (11, 22, 1, 0, '6', '9', '7', '8', '2023-08-11 01:53:18', '2023-08-11 01:53:18');
INSERT INTO `scores` VALUES (12, 23, 1, 0, '9', '6', '8', '7', '2023-08-11 01:53:29', '2023-08-11 01:53:29');
INSERT INTO `scores` VALUES (13, 24, 1, 0, '6', '9', '8', '7', '2023-08-11 01:53:41', '2023-08-11 01:53:41');
INSERT INTO `scores` VALUES (14, 25, 1, 0, '9', '7', '9', '6', '2023-08-11 01:53:57', '2023-08-11 01:53:57');
INSERT INTO `scores` VALUES (16, 26, 1, 0, '5', '8', '7', '6', '2023-08-11 01:55:17', '2023-08-11 01:55:17');
INSERT INTO `scores` VALUES (17, 27, 1, 0, '6', '9', '8', '10', '2023-08-11 01:55:41', '2023-08-11 01:55:41');
INSERT INTO `scores` VALUES (18, 28, 1, 0, '7', '5', '5', '10', '2023-08-11 01:55:56', '2023-08-11 01:55:56');
INSERT INTO `scores` VALUES (19, 29, 1, 0, '6', '8', '5', '7', '2023-08-11 01:56:11', '2023-08-11 01:56:11');
INSERT INTO `scores` VALUES (20, 30, 1, 0, '8', '9', '7', '5', '2023-08-11 01:56:27', '2023-08-11 01:56:27');
INSERT INTO `scores` VALUES (21, 31, 1, 0, '10', '10', '7', '8', '2023-08-11 01:56:41', '2023-08-11 01:56:41');
INSERT INTO `scores` VALUES (22, 32, 1, 0, '10', '5', '9', '8', '2023-08-11 01:56:58', '2023-08-11 01:56:58');
INSERT INTO `scores` VALUES (23, 33, 1, 0, '10', '8', '5', '9', '2023-08-11 01:57:16', '2023-08-11 01:57:16');
INSERT INTO `scores` VALUES (24, 34, 1, 0, '5', '8', '6', '9', '2023-08-11 01:57:29', '2023-08-11 01:57:29');
INSERT INTO `scores` VALUES (25, 35, 1, 0, '9', '7', '9', '5', '2023-08-11 02:07:11', '2023-08-11 02:07:11');
INSERT INTO `scores` VALUES (26, 36, 1, 0, '10', '9', '5', '5', '2023-08-11 02:07:25', '2023-08-11 02:07:25');
INSERT INTO `scores` VALUES (27, 37, 1, 0, '10', '10', '8', '9', '2023-08-11 02:08:26', '2023-08-11 02:08:26');
COMMIT;

-- ----------------------------
-- Table structure for students
-- ----------------------------
DROP TABLE IF EXISTS `students`;
CREATE TABLE `students` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `code` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `first_name` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_name` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gender` tinyint NOT NULL,
  `dob` date NOT NULL,
  `fa_name` varchar(30) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `mo_name` varchar(30) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=73 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ----------------------------
-- Records of students
-- ----------------------------
BEGIN;
INSERT INTO `students` VALUES (1, '101', 'សុក', 'នា', 1, '2012-02-09', 'ពុត សុក', 'សុក ពិសី', NULL, '2023-06-20 23:52:25');
INSERT INTO `students` VALUES (2, '102', 'ស្រី', 'ពៅ', 2, '2011-03-01', 'កក់​ ស្រី', 'កល់​ ម៉ា', NULL, '2023-06-21 00:36:54');
INSERT INTO `students` VALUES (3, '01', 'ខាន់ ', 'ដារ៉ា', 1, '2011-04-23', 'ខេង សំខាន់', 'ចយ ណារី', '2023-06-22 19:59:43', '2023-06-22 20:02:36');
INSERT INTO `students` VALUES (4, '661', 'ចាន់', 'នីសា', 2, '2010-08-14', 'ចាន់ សារ៉េត', 'ឈីន ខ្លី', '2023-06-26 00:35:07', '2023-06-26 00:35:07');
INSERT INTO `students` VALUES (5, '623', 'ចាន់', 'ប៉ាវ', 1, '2007-08-10', 'ចាន់​ សល់', 'ណែត ប៉ុក', '2023-06-29 09:00:15', '2023-06-29 09:01:02');
INSERT INTO `students` VALUES (6, '041', 'ជុំ ', 'សាល័ក្ខ', 2, '2010-06-10', 'ម៉ៅ ជុំ', 'ភន់ សុភល', '2023-06-30 07:43:23', '2023-06-30 07:43:23');
INSERT INTO `students` VALUES (7, '110', 'តាំង', 'សំណាង', 1, '2014-07-12', 'មឿន តាំង', 'ឃិម ម៉ៅ', '2023-06-30 08:25:40', '2023-06-30 08:25:40');
INSERT INTO `students` VALUES (8, '010', 'តៅ', 'លីហួ', 1, '2013-09-22', 'រៀម ឡុង', 'សេង​ សៀវម៉ី', '2023-06-30 08:30:49', '2023-06-30 08:30:49');
INSERT INTO `students` VALUES (9, '111', 'ថន', 'ចន្ធា', 1, '2015-07-04', 'ស្ងួន ចាន់ថា', 'រ៉ន កុសល់', '2023-06-30 08:40:09', '2023-06-30 08:40:09');
INSERT INTO `students` VALUES (10, '112', 'ថង', 'មីនា', 2, '2011-11-23', 'សៅ ថង', 'យឺន ផានី', '2023-06-30 08:42:07', '2023-06-30 09:29:56');
INSERT INTO `students` VALUES (11, '098', 'ទុយ', 'ស្រីនាត', 2, '2011-04-04', 'ជិត ទុយ', 'ឈួន ទូច', '2023-06-30 08:51:01', '2023-06-30 08:51:01');
INSERT INTO `students` VALUES (12, '052', 'ធា', 'សុនីការ', 2, '2014-10-09', 'ធា សុជា', 'ភេន គ្រីន', '2023-06-30 08:52:32', '2023-06-30 08:52:32');
INSERT INTO `students` VALUES (13, '012', 'នុន', 'វីរះ', 1, '2012-04-03', 'នុន ប​​៉ាវ', 'វិត វី', '2023-06-30 08:56:03', '2023-06-30 08:56:03');
INSERT INTO `students` VALUES (14, '658', 'ផាន', '​ផាប', 1, '2005-05-19', 'រស់ ផាន់', 'សន អ៉ីម', '2023-06-30 08:57:31', '2023-06-30 08:57:31');
INSERT INTO `students` VALUES (15, '045', 'ព្រេក ', 'ស្នា', 1, '2006-06-05', 'ព្រេក', 'នាគ សម្បត្តិ', '2023-06-30 08:59:12', '2023-06-30 08:59:12');
INSERT INTO `students` VALUES (16, '099', 'ព្រឿន', 'ំំំំំំំណាវិត', 1, '2014-10-10', 'ព្រឹក ធឿន', 'សឿម កែវ', '2023-06-30 09:00:46', '2023-06-30 09:00:46');
INSERT INTO `students` VALUES (17, '023', 'យ៉ឺន​', 'ញ៉ាញ់', 1, '2006-06-20', 'ឈួន យ៉ឺន', 'យ៉ឺន យ៉េត', '2023-06-30 09:02:50', '2023-06-30 09:27:38');
INSERT INTO `students` VALUES (18, '055', 'រិទ្ធ', 'ំណារី', 2, '2013-08-04', 'រើុន រិទ្ធ', 'ស៉ឹម សារឿន', '2023-06-30 09:04:32', '2023-06-30 09:04:32');
INSERT INTO `students` VALUES (19, '675', 'រ៉ា', 'វីរះ', 1, '2010-05-09', 'អំ ចាន់រ៉ា', 'ជា សាវៀន', '2023-06-30 09:07:39', '2023-06-30 09:07:39');
INSERT INTO `students` VALUES (20, '074', 'រ័ត្ន', 'ស្រីហេង', 2, '2014-10-14', 'ពេជ្រ រ័ត្ន', 'មឿន មុំ', '2023-06-30 09:09:25', '2023-06-30 09:09:25');
INSERT INTO `students` VALUES (21, '025', 'វណ្ណា', 'រតនា', 2, '2011-12-20', 'លី ប៉ាន់', 'រិន វណ្ណា', '2023-06-30 09:11:17', '2023-06-30 09:11:17');
INSERT INTO `students` VALUES (22, '104', 'វុធ', '្ត្រប់', 2, '2011-04-02', 'ជី វុធ', 'សូត្រ សួន', '2023-06-30 09:13:11', '2023-06-30 09:13:11');
INSERT INTO `students` VALUES (23, '057', 'វ៉ុន ', 'ទិត្យ', 1, '2014-05-04', 'ហែល វ៉ុន', 'រ៉ន រិន', '2023-06-30 09:14:23', '2023-06-30 09:14:23');
INSERT INTO `students` VALUES (24, '051', 'វី', 'ច័ន្ទត្រា', 1, '2009-11-02', 'វី ឆន', 'វី វុន', '2023-06-30 09:15:51', '2023-06-30 09:15:51');
INSERT INTO `students` VALUES (25, '050', 'សារឿត', 'យ៉ាស៉ីង', 1, '2012-07-19', 'អាន សារឿត', 'ភី សម្ភស្ស', '2023-06-30 09:17:05', '2023-06-30 09:17:05');
INSERT INTO `students` VALUES (26, '061', 'សេង', 'សាលុយ', 1, '2014-04-17', 'ស៉ឹង ស៉ីថា', 'កង ណូ', '2023-06-30 09:18:12', '2023-06-30 09:18:12');
INSERT INTO `students` VALUES (27, '026', 'សោម ', 'ស្រីយ៉ាន់', 2, '2013-10-10', 'ជ ចន', 'វ៉ាន់​ សាមៀន', '2023-06-30 09:19:36', '2023-06-30 09:19:36');
INSERT INTO `students` VALUES (28, '077', 'ស្រ៉ឺន', 'ចន្រ្ទា', 2, '2014-10-28', 'ស្រ៉ឺន កៃ', 'ឈុន ចាន់ថៃ', '2023-06-30 09:21:10', '2023-06-30 09:21:10');
INSERT INTO `students` VALUES (29, '113', 'ឡៃ', 'ហុងឡៃ', 1, '2015-04-29', 'ហឿង សាឡៃ', 'កិម សុម៉ាលី', '2023-06-30 09:22:26', '2023-06-30 09:22:26');
INSERT INTO `students` VALUES (30, '644', 'ចំរើន', 'មករា', 2, '2011-01-05', 'ឡាំ ចំរើន', 'មល់ សុផាត', '2023-08-11 05:21:52', '2023-08-11 05:21:52');
INSERT INTO `students` VALUES (31, '663', 'ឆាយ', 'ស្រីណាម', 2, '2011-10-10', 'ឌុច ឆាយ', 'ផាន់ ភាព', '2023-08-11 05:55:02', '2023-08-11 05:55:02');
INSERT INTO `students` VALUES (32, '624', 'ជឿយ', 'វីន', 1, '2009-10-29', 'លី សីលា', 'ឃួន សុគុណ', '2023-08-11 06:13:37', '2023-08-11 06:13:37');
INSERT INTO `students` VALUES (33, '551', 'ទិត្យ', 'សានីម', 2, '2008-04-10', 'ប៊ុន ទិត្យ', 'ឆេង សត់', '2023-08-11 06:15:00', '2023-08-11 06:15:00');
INSERT INTO `students` VALUES (34, '652', 'ប៊ុនលឿន', 'សាលី', 1, '2008-01-06', 'ចំរ៉ុង ប៊ុនលឿន', 'ឈឿម សាវី', '2023-08-11 06:18:24', '2023-08-11 06:18:24');
INSERT INTO `students` VALUES (35, '666', 'ផាន់', 'ស្រីអូន', 2, '2010-03-10', 'វ៉ាន់ ភារម្យ', 'យិន យ៉េ', '2023-08-11 06:35:16', '2023-08-11 06:35:16');
INSERT INTO `students` VALUES (36, '668', 'ពៅ', 'ចាន់នី', 2, '2010-07-08', 'ហែល វ៉ុន', 'រ៉ន រឹទ្ធ', '2023-08-11 06:37:52', '2023-08-11 06:37:52');
INSERT INTO `students` VALUES (37, '681', 'មី', 'ឡៃហេង', 2, '2006-06-10', 'សននី', 'ជួន សួយ', '2023-08-11 06:41:16', '2023-08-11 06:41:16');
INSERT INTO `students` VALUES (38, '667', 'មួក', 'ស្រីមុំ', 2, '2006-06-10', 'មួក មាន​', 'នូវ ពន្លឺ', '2023-08-11 06:42:26', '2023-08-11 06:42:26');
INSERT INTO `students` VALUES (39, '667', 'មឿ', 'ស្រីដឿន', 2, '2010-06-04', 'រួម សាមឿ', 'ជា សុវណ្ណ', '2023-08-11 06:59:47', '2023-08-11 06:59:47');
INSERT INTO `students` VALUES (40, '541', 'រ័ត្ន', 'ណាត់', 1, '2009-07-03', 'ពេជ្រ រ័ត្ន', 'មឿន មុំ', '2023-08-11 07:00:47', '2023-08-11 07:00:47');
INSERT INTO `students` VALUES (41, '042', 'ជួ', 'ច័ន្ទផល', 2, '2013-01-10', 'ញ៉យ ចេក', 'ភុំ បូផៃ', '2023-08-11 08:06:22', '2023-08-11 08:06:22');
INSERT INTO `students` VALUES (42, '007', 'ណយ', 'សានមុី', 1, '2011-09-17', 'ណយ សាន', 'ឈូត ម៉ុន', '2023-08-11 08:08:44', '2023-08-11 08:08:44');
INSERT INTO `students` VALUES (43, '044', 'ថា', 'ស្រីនេត', 2, '2011-02-03', 'ចាន់ ថា', 'ឡុច ហឿន', '2023-08-11 08:12:23', '2023-08-11 08:12:23');
INSERT INTO `students` VALUES (44, '018', 'នី', 'ឡៃហុង', 1, '2012-05-08', 'សន នី', 'ជួន សយ', '2023-08-11 08:13:20', '2023-08-11 08:13:20');
INSERT INTO `students` VALUES (45, '034', 'ប៊ុនលឿន ', 'សាយម៉ៃ', 2, '2012-01-12', 'រ៉ុង ប៊ុនលឿន', 'ឈឿម សាវី', '2023-08-11 08:14:29', '2023-08-11 08:14:29');
INSERT INTO `students` VALUES (46, '013', 'ប៉ាន', 'ថារ័ត្ន', 2, '2013-08-22', 'ថាំ ប៉ាន', 'រិន វ៉ាណារី', '2023-08-11 08:15:47', '2023-08-11 08:15:47');
INSERT INTO `students` VALUES (47, '015', 'ព្រីង', 'សឿត', 1, '2013-11-06', 'ព្រីង ពិសី', 'ភេន ក្រូច', '2023-08-11 08:20:19', '2023-08-11 08:20:19');
INSERT INTO `students` VALUES (48, '016', 'ពឿន', 'យ៉ុង', 1, '2011-05-05', 'លី ពឿន', 'ឈឿម ចន្ថា', '2023-08-11 08:21:22', '2023-08-11 08:21:22');
INSERT INTO `students` VALUES (49, '035', 'ពៅ', 'នីតា', 2, '2012-04-15', 'អុិស ពៅ', 'អាន កៅអៀក', '2023-08-11 08:27:12', '2023-08-11 08:27:12');
INSERT INTO `students` VALUES (50, '587', 'មួក', 'ស្រីម៉ៃ', 2, '2008-10-05', 'មួក មាន', 'នៅ ពន្លឺ', '2023-08-11 08:32:06', '2023-08-11 08:32:06');
INSERT INTO `students` VALUES (51, '019', 'យឿត', 'ឆៃយាន', 1, '2011-12-05', 'យឺន យឿង', 'ហុិន សូរិយា', '2023-08-11 08:34:12', '2023-08-11 08:34:12');
INSERT INTO `students` VALUES (52, '021', 'រិត', 'កុម្ភៈ', 1, '2010-02-02', 'រាន​ រិត', 'ញេញ សារឿន', '2023-08-11 08:46:56', '2023-08-11 08:46:56');
INSERT INTO `students` VALUES (53, '047', 'លូម', 'ខេមរ៉ា', 1, '2010-01-10', 'លេន បូរាណ', 'ព្រឹក ឈុនលី', '2023-08-11 08:48:24', '2023-08-11 08:48:24');
INSERT INTO `students` VALUES (54, '048', 'វណ្ណ', 'ស្រីនិត', 2, '2010-12-06', 'សុីម ទ្រា', 'វណ្ណ សាវី', '2023-08-11 08:50:15', '2023-08-11 08:50:15');
INSERT INTO `students` VALUES (55, '022', 'វេត', 'រក្សា', 2, '2013-12-05', 'ថាំ សាវេត', 'រស់ សុមុំ', '2023-08-11 08:51:15', '2023-08-11 08:51:15');
INSERT INTO `students` VALUES (56, '045', 'វន', 'ពីសិត', 1, '2011-07-06', 'ឡៃ ដារា', 'អាន មុំ', '2023-08-11 08:52:32', '2023-08-11 08:52:32');
INSERT INTO `students` VALUES (57, '049', 'វិន', 'ចាន់នី', 2, '2013-12-21', 'រុន​ វិន', 'ញំ សាំងយី', '2023-08-11 08:53:52', '2023-08-11 08:53:52');
INSERT INTO `students` VALUES (58, '039', 'សាន', 'នីសា', 2, '2013-02-03', 'ចាន់ សាន', 'ប្រាង សុខៀន', '2023-08-11 08:55:21', '2023-08-11 08:55:21');
INSERT INTO `students` VALUES (59, '052', 'សុឺ', 'វិសិត្ត', 1, '2010-09-05', 'សុឺ សុន', 'លួន សុខលី', '2023-08-11 08:59:09', '2023-08-11 08:59:09');
INSERT INTO `students` VALUES (60, '053', 'សុឺ', '្ីស្រីលក្ខ', 2, '2011-12-10', 'សុឺ សុន', 'លួន សុខលី', '2023-08-11 09:02:17', '2023-08-11 09:02:17');
INSERT INTO `students` VALUES (61, '011', 'សួង', 'សុធី', 1, '2012-09-10', 'ហា នឿន', 'ណយ សាអែម', '2023-08-11 09:03:50', '2023-08-11 09:03:50');
INSERT INTO `students` VALUES (62, '027', 'សុង', 'សំដារ៉ា', 1, '2012-10-28', 'សុង ចាប', 'ពេជ្រ ខេមរ៉ា', '2023-08-11 09:05:14', '2023-08-11 09:05:14');
INSERT INTO `students` VALUES (63, '028', 'សេង', 'ធុយ', 1, '2012-04-17', 'សុីង សុីថា', 'កង ណូ', '2023-08-11 09:06:56', '2023-08-11 09:06:56');
INSERT INTO `students` VALUES (64, '037', 'ស្រេង', 'ថេត', 1, '2009-09-20', 'ស្រេង វី', 'ស្រេង​ មុំ', '2023-08-11 09:08:00', '2023-08-11 09:08:00');
INSERT INTO `students` VALUES (65, '038', 'ស្រេង', 'បារាំង', 1, '2010-10-05', 'ស្រេង វី', 'ស្រេង មុំ', '2023-08-11 09:08:51', '2023-08-11 09:08:51');
INSERT INTO `students` VALUES (66, '640', 'សៀប', 'គិមសៀន', 2, '2009-12-08', 'សៀ សៀប', 'នាង កង', '2023-08-11 09:10:12', '2023-08-11 09:10:12');
INSERT INTO `students` VALUES (67, '633', 'ស្ងួន', 'ចាន់ធី', 1, '2010-02-03', 'ស្ងួន ម៉ៅ', 'រ៉ន ទូច', '2023-08-11 09:11:16', '2023-08-11 09:11:16');
INSERT INTO `students` VALUES (68, '690', 'ហ៊ាន', 'សុជាតិ', 1, '2007-03-09', 'ជួប ណាង', 'ហែល សុវេត', '2023-08-11 09:12:37', '2023-08-11 09:12:37');
INSERT INTO `students` VALUES (69, '688', 'ហ៊ុន', 'ចាន់ថេង', 1, '2009-03-11', 'សៀន​ ចន្ថា', 'តុល ច្រិប', '2023-08-11 09:13:43', '2023-08-11 09:13:43');
INSERT INTO `students` VALUES (70, '029', 'អួន', 'វ៉ារិន', 1, '2011-07-16', 'អួន កុយ', 'ដា សំណាត', '2023-08-11 09:35:53', '2023-08-11 09:35:53');
INSERT INTO `students` VALUES (71, '031', 'អឿន', 'ម៉ៅ', 1, '2012-06-08', 'សំ អៀន', 'សន ពុំ', '2023-08-11 09:36:48', '2023-08-11 09:36:48');
INSERT INTO `students` VALUES (72, '559', 'អំ', 'ចាន់រ៉ាត់', 1, '2007-01-15', 'មាស អំ', 'សំ ​យឿម', '2023-08-11 09:37:56', '2023-08-11 09:37:56');
COMMIT;

-- ----------------------------
-- Table structure for teachers
-- ----------------------------
DROP TABLE IF EXISTS `teachers`;
CREATE TABLE `teachers` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `code` int NOT NULL,
  `first_name` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_name` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gender` tinyint NOT NULL,
  `telephone` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ----------------------------
-- Records of teachers
-- ----------------------------
BEGIN;
INSERT INTO `teachers` VALUES (1, 101, 'ជា', 'ឡិនជី', 1, '0918273636', NULL, NULL, '2023-06-23 08:34:10');
INSERT INTO `teachers` VALUES (2, 102, 'ឌឿ', 'ជំនាញ', 1, '0319668615', NULL, NULL, '2023-06-23 08:32:19');
INSERT INTO `teachers` VALUES (3, 1032, 'ភាព', 'ចាន់ធឿន', 1, '0857111223', NULL, '2023-06-19 23:36:33', '2023-06-23 08:32:59');
INSERT INTO `teachers` VALUES (4, 1043, 'អ៊ឹង', 'ថាវរី', 2, '096 747 2389', NULL, '2023-06-20 23:03:20', '2023-06-20 23:03:20');
INSERT INTO `teachers` VALUES (5, 1220, 'ឌី', 'ផាន់ណា', 2, '093 2748 109', NULL, '2023-06-20 23:06:02', '2023-06-23 08:07:09');
COMMIT;

-- ----------------------------
-- Table structure for users
-- ----------------------------
DROP TABLE IF EXISTS `users`;
CREATE TABLE `users` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ----------------------------
-- Records of users
-- ----------------------------
BEGIN;
INSERT INTO `users` VALUES (1, 'Admin', 'admin@admin.com', NULL, '$2y$10$8N0Et6m.oWcsFyNtionP1eSdBm7ZDiCaQSBNmRD6Rr.zTOfjHpYZW', NULL, NULL, NULL);
INSERT INTO `users` VALUES (2, 'Teacher', 'teacher@gmail.com', NULL, '$2y$10$QkH0JvoK2AllUlXZrCOHweBy4xWbseqd.5ueKtEnhUFA6HpPSlm2O', NULL, NULL, '2023-08-12 02:11:16');
COMMIT;

SET FOREIGN_KEY_CHECKS = 1;

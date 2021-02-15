/*
 Navicat Premium Data Transfer

 Source Server         : localhost_3308
 Source Server Type    : MySQL
 Source Server Version : 50723
 Source Host           : localhost:3306
 Source Schema         : school

 Target Server Type    : MySQL
 Target Server Version : 50723
 File Encoding         : 65001

 Date: 15/02/2021 23:25:06
*/

SET NAMES utf8mb4;
SET FOREIGN_KEY_CHECKS = 0;

-- ----------------------------
-- Table structure for migrations
-- ----------------------------
DROP TABLE IF EXISTS `migrations`;
CREATE TABLE `migrations`  (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = MyISAM AUTO_INCREMENT = 2 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of migrations
-- ----------------------------
INSERT INTO `migrations` VALUES (1, '2021_02_15_052521_create_student_results_table', 1);

-- ----------------------------
-- Table structure for student_results
-- ----------------------------
DROP TABLE IF EXISTS `student_results`;
CREATE TABLE `student_results`  (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `student_name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `ct1h` int(11) NOT NULL,
  `ct2h` int(11) NOT NULL,
  `ct3h` int(11) NOT NULL,
  `half` int(11) NOT NULL,
  `ct1f` int(11) NOT NULL,
  `ct2f` int(11) NOT NULL,
  `ct3f` int(11) NOT NULL,
  `final` int(11) NOT NULL,
  `created_at` timestamp(0) NULL DEFAULT NULL,
  `updated_at` timestamp(0) NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = MyISAM AUTO_INCREMENT = 11 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of student_results
-- ----------------------------
INSERT INTO `student_results` VALUES (1, 'Razib Haldar', 15, 15, 19, 85, 10, 20, 16, 90, '2021-02-15 10:15:19', '2021-02-15 16:48:53');
INSERT INTO `student_results` VALUES (2, 'Abdur Rahman', 10, 15, 20, 95, 18, 20, 16, 80, '2021-02-15 16:41:06', '2021-02-15 16:41:06');
INSERT INTO `student_results` VALUES (3, 'Nasir Hosen', 16, 18, 17, 95, 10, 19, 16, 90, '2021-02-15 16:43:37', '2021-02-15 16:43:37');
INSERT INTO `student_results` VALUES (4, 'Masud Zaman', 15, 20, 19, 85, 20, 18, 19, 92, '2021-02-15 16:45:09', '2021-02-15 16:45:09');
INSERT INTO `student_results` VALUES (5, 'Sohel Rana', 19, 18, 20, 95, 15, 14, 8, 68, '2021-02-15 16:47:02', '2021-02-15 16:47:02');
INSERT INTO `student_results` VALUES (6, 'Razib Haldar', 19, 20, 20, 95, 15, 18, 20, 92, '2021-02-15 16:49:51', '2021-02-15 16:49:51');
INSERT INTO `student_results` VALUES (7, 'Kamal Haidar', 9, 12, 10, 68, 15, 16, 10, 70, '2021-02-15 16:51:09', '2021-02-15 16:51:09');
INSERT INTO `student_results` VALUES (8, 'Karim Shekh', 12, 15, 18, 55, 20, 15, 16, 67, '2021-02-15 16:52:25', '2021-02-15 16:52:25');
INSERT INTO `student_results` VALUES (9, 'Kuddus Hok', 15, 11, 18, 33, 18, 15, 18, 45, '2021-02-15 16:53:21', '2021-02-15 16:53:21');
INSERT INTO `student_results` VALUES (10, 'Nader Jaman', 15, 12, 14, 88, 15, 18, 17, 86, '2021-02-15 16:54:11', '2021-02-15 16:54:11');

SET FOREIGN_KEY_CHECKS = 1;

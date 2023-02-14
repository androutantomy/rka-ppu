/*
 Navicat Premium Data Transfer

 Source Server         : OUTSIDE
 Source Server Type    : MySQL
 Source Server Version : 100425
 Source Host           : localhost:3306
 Source Schema         : rka-ppu

 Target Server Type    : MySQL
 Target Server Version : 100425
 File Encoding         : 65001

 Date: 14/02/2023 23:30:35
*/

SET NAMES utf8mb4;
SET FOREIGN_KEY_CHECKS = 0;

-- ----------------------------
-- Table structure for mst_level_users
-- ----------------------------
DROP TABLE IF EXISTS `mst_level_users`;
CREATE TABLE `mst_level_users`  (
  `id_level` int NOT NULL AUTO_INCREMENT,
  `kode_level` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `nama_level` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  PRIMARY KEY (`id_level`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 4 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of mst_level_users
-- ----------------------------
INSERT INTO `mst_level_users` VALUES (1, 'SADM', 'Superadmin');
INSERT INTO `mst_level_users` VALUES (2, 'ADM', 'Admin Prodi');
INSERT INTO `mst_level_users` VALUES (3, 'STF', 'Staff');

-- ----------------------------
-- Table structure for mst_tahun_anggaran
-- ----------------------------
DROP TABLE IF EXISTS `mst_tahun_anggaran`;
CREATE TABLE `mst_tahun_anggaran`  (
  `id_tahun_anggaran` int NOT NULL AUTO_INCREMENT,
  `nama_tahun_anggaran` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `budget_tahun_anggaran` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `flag` enum('0','1') CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT '1',
  PRIMARY KEY (`id_tahun_anggaran`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 3 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of mst_tahun_anggaran
-- ----------------------------
INSERT INTO `mst_tahun_anggaran` VALUES (1, '2022', '1500000000', '1');
INSERT INTO `mst_tahun_anggaran` VALUES (2, '2023', '1500000000', '1');

-- ----------------------------
-- Table structure for mst_users
-- ----------------------------
DROP TABLE IF EXISTS `mst_users`;
CREATE TABLE `mst_users`  (
  `id_user` int NOT NULL AUTO_INCREMENT,
  `uuid_user` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `nama_user` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `email_user` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `username` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `password` text CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL,
  `level_user` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `nama_level` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `flag` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  PRIMARY KEY (`id_user`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 7 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of mst_users
-- ----------------------------
INSERT INTO `mst_users` VALUES (3, 'dca74e86-abb7-11ed-8468-5c60ba3647e9', 'Superadmin Untag', '', 'superadmin', '$2y$10$KwVS7J3wx/bLp.AcXlhE7e1v4RD2B5FHDcC47TZdQVfG2OVSJ2SYW', '1', 'Superadmin', '1');
INSERT INTO `mst_users` VALUES (6, '6be904b9-ac71-11ed-ae87-5c60ba3647e7', 'Admin Prodi Fakultas', '', 'adminprodi', '$2y$10$qjNnQ9AM0rIokbS1EmSbUeB5b5C9ph2xpzqMkLw1xin62BYOjHO8m', '2', 'Admin Prodi', '0');

SET FOREIGN_KEY_CHECKS = 1;

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

 Date: 21/02/2023 14:22:06
*/

SET NAMES utf8mb4;
SET FOREIGN_KEY_CHECKS = 0;

-- ----------------------------
-- Table structure for log_aktifitas
-- ----------------------------
DROP TABLE IF EXISTS `log_aktifitas`;
CREATE TABLE `log_aktifitas`  (
  `id_aktifitas` int NOT NULL AUTO_INCREMENT,
  `routes_aktifitas` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `nama_pengguna` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `role_pengguna` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `tanggal` datetime NULL DEFAULT NULL,
  `keterangan` text CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL,
  PRIMARY KEY (`id_aktifitas`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 26 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of log_aktifitas
-- ----------------------------
INSERT INTO `log_aktifitas` VALUES (1, 'kegiatan', 'Superadmin Untag', 'Superadmin', '2023-02-19 17:40:13', 'Update data Dashboard');
INSERT INTO `log_aktifitas` VALUES (2, 'kegiatan', 'Superadmin Untag', 'Superadmin', '2023-02-19 17:42:20', 'Update data Kegiatan');
INSERT INTO `log_aktifitas` VALUES (3, 'anggaran', 'Superadmin Untag', 'Superadmin', '2023-02-19 17:43:14', 'Update data Tahun Anggaran');
INSERT INTO `log_aktifitas` VALUES (4, 'satuan', 'Superadmin Untag', 'Superadmin', '2023-02-19 17:55:27', 'Update data Satuan');
INSERT INTO `log_aktifitas` VALUES (5, 'pendapatan', 'Superadmin Untag', 'Superadmin', '2023-02-19 18:03:47', 'Hapus data Pendapatan');
INSERT INTO `log_aktifitas` VALUES (6, 'biaya', 'Superadmin Untag', 'Superadmin', '2023-02-19 18:04:09', 'Tambah data Standar Biaya');
INSERT INTO `log_aktifitas` VALUES (7, 'biaya', 'Superadmin Untag', 'Superadmin', '2023-02-21 07:51:48', 'Hapus data Standar Biaya');
INSERT INTO `log_aktifitas` VALUES (8, 'biaya', 'Superadmin Untag', 'Superadmin', '2023-02-21 07:51:50', 'Hapus data Standar Biaya');
INSERT INTO `log_aktifitas` VALUES (9, 'biaya', 'Superadmin Untag', 'Superadmin', '2023-02-21 07:51:52', 'Hapus data Standar Biaya');
INSERT INTO `log_aktifitas` VALUES (10, 'biaya', 'Superadmin Untag', 'Superadmin', '2023-02-21 07:51:54', 'Hapus data Standar Biaya');
INSERT INTO `log_aktifitas` VALUES (11, 'biaya', 'Superadmin Untag', 'Superadmin', '2023-02-21 07:51:56', 'Hapus data Standar Biaya');
INSERT INTO `log_aktifitas` VALUES (12, 'biaya', 'Superadmin Untag', 'Superadmin', '2023-02-21 07:53:15', 'Tambah data Standar Biaya');
INSERT INTO `log_aktifitas` VALUES (13, 'pendapatan', 'Superadmin Untag', 'Superadmin', '2023-02-21 08:09:54', 'Hapus data Pendapatan');
INSERT INTO `log_aktifitas` VALUES (14, 'pendapatan', 'Superadmin Untag', 'Superadmin', '2023-02-21 08:09:57', 'Hapus data Pendapatan');
INSERT INTO `log_aktifitas` VALUES (15, 'pendapatan', 'Superadmin Untag', 'Superadmin', '2023-02-21 08:09:59', 'Hapus data Pendapatan');
INSERT INTO `log_aktifitas` VALUES (16, 'pendapatan', 'Superadmin Untag', 'Superadmin', '2023-02-21 08:10:19', 'Tambah data Pendapatan');
INSERT INTO `log_aktifitas` VALUES (17, 'pendapatan', 'Superadmin Untag', 'Superadmin', '2023-02-21 08:10:33', 'Tambah data Pendapatan');
INSERT INTO `log_aktifitas` VALUES (18, 'pendapatan', 'Superadmin Untag', 'Superadmin', '2023-02-21 08:10:59', 'Tambah data Pendapatan');
INSERT INTO `log_aktifitas` VALUES (19, 'pendapatan', 'Superadmin Untag', 'Superadmin', '2023-02-21 08:17:03', 'Tambah data Pendapatan');
INSERT INTO `log_aktifitas` VALUES (20, 'pendapatan', 'Superadmin Untag', 'Superadmin', '2023-02-21 08:17:46', 'Tambah data Pendapatan');
INSERT INTO `log_aktifitas` VALUES (21, 'pendapatan', 'Superadmin Untag', 'Superadmin', '2023-02-21 08:18:04', 'Tambah data Pendapatan');
INSERT INTO `log_aktifitas` VALUES (22, 'pendapatan', 'Superadmin Untag', 'Superadmin', '2023-02-21 08:18:30', 'Tambah data Pendapatan');
INSERT INTO `log_aktifitas` VALUES (23, 'pendapatan', 'Superadmin Untag', 'Superadmin', '2023-02-21 08:18:52', 'Tambah data Pendapatan');
INSERT INTO `log_aktifitas` VALUES (24, 'pendapatan', 'Superadmin Untag', 'Superadmin', '2023-02-21 08:20:30', 'Tambah data Pendapatan');
INSERT INTO `log_aktifitas` VALUES (25, 'pendapatan', 'Superadmin Untag', 'Superadmin', '2023-02-21 08:21:01', 'Tambah data Pendapatan');

-- ----------------------------
-- Table structure for mst_kegiatan
-- ----------------------------
DROP TABLE IF EXISTS `mst_kegiatan`;
CREATE TABLE `mst_kegiatan`  (
  `id_kegiatan` int NOT NULL AUTO_INCREMENT,
  `uuid_kegiatan` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `nama_kegiatan` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `no_rekening_kegiatan` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `flag` varchar(1) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  PRIMARY KEY (`id_kegiatan`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 4 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of mst_kegiatan
-- ----------------------------
INSERT INTO `mst_kegiatan` VALUES (1, '79a36b4e-b068-11ed-9174-5c60ba3647e7', '    Belanja Tahunan 1', '1', '0');
INSERT INTO `mst_kegiatan` VALUES (3, '55419610-b06f-11ed-9174-5c60ba3647e7', ' Belanja Penunjang Kegiatan', '1.2', '1');

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
-- Table structure for mst_pendapatan
-- ----------------------------
DROP TABLE IF EXISTS `mst_pendapatan`;
CREATE TABLE `mst_pendapatan`  (
  `id_pendapatan` int NOT NULL AUTO_INCREMENT,
  `uuid_pendapatan` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `nama_pendapatan` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `jumlah_pendapatan` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `no_rekening_pendapatan` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `tahun_anggaran` varchar(5) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `is_utama` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `flag` int NULL DEFAULT NULL,
  PRIMARY KEY (`id_pendapatan`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 16 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of mst_pendapatan
-- ----------------------------
INSERT INTO `mst_pendapatan` VALUES (6, 'ccb301b0-b1b6-11ed-a156-5c60ba3647e7', 'ASET BERSIH TIDAK TERIKAT', NULL, '4.1', '2023', '1', 1);
INSERT INTO `mst_pendapatan` VALUES (7, 'd553d245-b1b6-11ed-a156-5c60ba3647e7', 'PENDAPATAN AKADEMIK', NULL, '4.1.1', '2023', '1', 1);
INSERT INTO `mst_pendapatan` VALUES (8, 'e498a5f5-b1b6-11ed-a156-5c60ba3647e7', 'PENDAPATAN SUMBANGAN MASYARAKAT (SUMAS)', NULL, '4.1.1.1', '2023', '1', 1);
INSERT INTO `mst_pendapatan` VALUES (9, 'bd474aef-b1b7-11ed-a156-5c60ba3647e7', 'Pendapatan SPP Program Sarjana', NULL, '4.1.1.1.1', '2023', NULL, 1);
INSERT INTO `mst_pendapatan` VALUES (10, 'd7432c02-b1b7-11ed-a156-5c60ba3647e7', 'Formulir Pendaftaran Program Sarjana', NULL, '4.1.1.1.2', '2023', NULL, 1);
INSERT INTO `mst_pendapatan` VALUES (11, 'e218f088-b1b7-11ed-a156-5c60ba3647e7', 'Pendapatan Penelitian ', NULL, '4.1.1.1.3', '2023', NULL, 1);
INSERT INTO `mst_pendapatan` VALUES (12, 'f19a324f-b1b7-11ed-a156-5c60ba3647e7', 'Pendapatan Skripsi', NULL, '4.1.1.1.4', '2023', NULL, 1);
INSERT INTO `mst_pendapatan` VALUES (13, 'fe88edad-b1b7-11ed-a156-5c60ba3647e7', 'Pendapatan Kuliah Kerja Nyata', NULL, '4.1.1.1.5', '2023', NULL, 1);
INSERT INTO `mst_pendapatan` VALUES (14, '38cd8691-b1b8-11ed-a156-5c60ba3647e7', 'PENDAPATAN AKADEMIK LAINNYA', NULL, '4.1.1.2', '2023', '1', 1);
INSERT INTO `mst_pendapatan` VALUES (15, '4b70229f-b1b8-11ed-a156-5c60ba3647e7', 'Pendapatan Administrasi  Akademik Lainnya (blanko ijazah, legalisir dll)', NULL, '4.1.1.2.1', '2023', NULL, 1);

-- ----------------------------
-- Table structure for mst_satuan
-- ----------------------------
DROP TABLE IF EXISTS `mst_satuan`;
CREATE TABLE `mst_satuan`  (
  `id_satuan` int NOT NULL AUTO_INCREMENT,
  `uuid_satuan` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `nama_satuan` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `flag` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  PRIMARY KEY (`id_satuan`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 6 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of mst_satuan
-- ----------------------------
INSERT INTO `mst_satuan` VALUES (1, '140c9e56-ae14-11ed-8f55-5c60ba3647e7', 'Bulan', '1');
INSERT INTO `mst_satuan` VALUES (2, '22d5ada1-ae14-11ed-8f55-5c60ba3647e7', 'Buah', '1');
INSERT INTO `mst_satuan` VALUES (4, '0604ebc3-ae18-11ed-8f55-5c60ba3647e7', 'cm', '1');
INSERT INTO `mst_satuan` VALUES (5, '4c36c924-ae18-11ed-8f55-5c60ba3647e7', 'Lembar', '0');

-- ----------------------------
-- Table structure for mst_standar_biaya
-- ----------------------------
DROP TABLE IF EXISTS `mst_standar_biaya`;
CREATE TABLE `mst_standar_biaya`  (
  `id_standar_biaya` int NOT NULL AUTO_INCREMENT,
  `uuid_standar_biaya` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `nama_standar_biaya` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `jumlah_standar_biaya` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `no_rekening_standar_biaya` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `tahun_anggaran` varchar(5) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `is_utama` varchar(1) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `flag` varchar(1) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  PRIMARY KEY (`id_standar_biaya`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 8 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of mst_standar_biaya
-- ----------------------------

-- ----------------------------
-- Table structure for mst_tahun_anggaran
-- ----------------------------
DROP TABLE IF EXISTS `mst_tahun_anggaran`;
CREATE TABLE `mst_tahun_anggaran`  (
  `id_tahun_anggaran` int NOT NULL AUTO_INCREMENT,
  `uuid_tahun_anggaran` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `nama_tahun_anggaran` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `budget_tahun_anggaran` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `flag` enum('0','1') CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT '1',
  PRIMARY KEY (`id_tahun_anggaran`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 10 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of mst_tahun_anggaran
-- ----------------------------
INSERT INTO `mst_tahun_anggaran` VALUES (1, '33ce9356-ae07-11ed-8f55-5c60ba3647e9', '2022', '1500000000', '0');
INSERT INTO `mst_tahun_anggaran` VALUES (2, '33ce9356-ae07-11ed-8f55-5c60ba3647e8', '2023', '1500000000', '1');
INSERT INTO `mst_tahun_anggaran` VALUES (9, 'd555f7a8-ae10-11ed-8f55-5c60ba3647e7', '2024', '250000000', '1');

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
) ENGINE = InnoDB AUTO_INCREMENT = 8 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of mst_users
-- ----------------------------
INSERT INTO `mst_users` VALUES (3, 'dca74e86-abb7-11ed-8468-5c60ba3647e9', 'Superadmin Untag', '', 'superadmin', '$2y$10$KwVS7J3wx/bLp.AcXlhE7e1v4RD2B5FHDcC47TZdQVfG2OVSJ2SYW', '1', 'Superadmin', '1');
INSERT INTO `mst_users` VALUES (6, '6be904b9-ac71-11ed-ae87-5c60ba3647e7', 'Admin Prodi Fakultas', '', 'adminprodi', '$2y$10$qjNnQ9AM0rIokbS1EmSbUeB5b5C9ph2xpzqMkLw1xin62BYOjHO8m', '2', 'Admin Prodi', '0');

-- ----------------------------
-- Table structure for temp_pendapatan
-- ----------------------------
DROP TABLE IF EXISTS `temp_pendapatan`;
CREATE TABLE `temp_pendapatan`  (
  `id_temp_pendapatan` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `sess_temp` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `nama_pendapatan` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `jumlah_pendapatan` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `no_rekening_pendapatan` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `tahun_anggaran` varchar(5) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `is_utama` int NULL DEFAULT NULL,
  `flag` int NULL DEFAULT NULL
) ENGINE = InnoDB CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of temp_pendapatan
-- ----------------------------

SET FOREIGN_KEY_CHECKS = 1;

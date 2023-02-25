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

 Date: 25/02/2023 10:17:33
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
) ENGINE = InnoDB AUTO_INCREMENT = 134 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = Dynamic;

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
INSERT INTO `log_aktifitas` VALUES (26, 'pendapatan', 'Superadmin Untag', 'Superadmin', '2023-02-21 08:23:29', 'Tambah data Pendapatan');
INSERT INTO `log_aktifitas` VALUES (27, 'pendapatan', 'Superadmin Untag', 'Superadmin', '2023-02-21 08:24:08', 'Tambah data Pendapatan');
INSERT INTO `log_aktifitas` VALUES (28, 'pendapatan', 'Superadmin Untag', 'Superadmin', '2023-02-21 08:24:33', 'Tambah data Pendapatan');
INSERT INTO `log_aktifitas` VALUES (29, 'pendapatan', 'Superadmin Untag', 'Superadmin', '2023-02-21 08:24:47', 'Tambah data Pendapatan');
INSERT INTO `log_aktifitas` VALUES (30, 'pendapatan', 'Superadmin Untag', 'Superadmin', '2023-02-21 08:25:06', 'Tambah data Pendapatan');
INSERT INTO `log_aktifitas` VALUES (31, 'pendapatan', 'Superadmin Untag', 'Superadmin', '2023-02-21 08:25:31', 'Tambah data Pendapatan');
INSERT INTO `log_aktifitas` VALUES (32, 'pendapatan', 'Superadmin Untag', 'Superadmin', '2023-02-21 08:25:44', 'Tambah data Pendapatan');
INSERT INTO `log_aktifitas` VALUES (33, 'pendapatan', 'Superadmin Untag', 'Superadmin', '2023-02-21 08:26:02', 'Tambah data Pendapatan');
INSERT INTO `log_aktifitas` VALUES (34, 'pendapatan', 'Superadmin Untag', 'Superadmin', '2023-02-21 08:26:21', 'Tambah data Pendapatan');
INSERT INTO `log_aktifitas` VALUES (35, 'pendapatan', 'Superadmin Untag', 'Superadmin', '2023-02-21 08:26:46', 'Tambah data Pendapatan');
INSERT INTO `log_aktifitas` VALUES (36, 'pendapatan', 'Superadmin Untag', 'Superadmin', '2023-02-21 08:27:02', 'Tambah data Pendapatan');
INSERT INTO `log_aktifitas` VALUES (37, 'pendapatan', 'Superadmin Untag', 'Superadmin', '2023-02-21 08:27:18', 'Tambah data Pendapatan');
INSERT INTO `log_aktifitas` VALUES (38, 'pendapatan', 'Superadmin Untag', 'Superadmin', '2023-02-21 08:27:35', 'Tambah data Pendapatan');
INSERT INTO `log_aktifitas` VALUES (39, 'pendapatan', 'Superadmin Untag', 'Superadmin', '2023-02-21 08:27:47', 'Tambah data Pendapatan');
INSERT INTO `log_aktifitas` VALUES (40, 'pendapatan', 'Superadmin Untag', 'Superadmin', '2023-02-21 08:28:05', 'Tambah data Pendapatan');
INSERT INTO `log_aktifitas` VALUES (41, 'pendapatan', 'Superadmin Untag', 'Superadmin', '2023-02-21 08:28:21', 'Tambah data Pendapatan');
INSERT INTO `log_aktifitas` VALUES (42, 'pendapatan', 'Superadmin Untag', 'Superadmin', '2023-02-21 08:28:34', 'Tambah data Pendapatan');
INSERT INTO `log_aktifitas` VALUES (43, 'pendapatan', 'Superadmin Untag', 'Superadmin', '2023-02-21 08:28:54', 'Tambah data Pendapatan');
INSERT INTO `log_aktifitas` VALUES (44, 'biaya', 'Superadmin Untag', 'Superadmin', '2023-02-21 10:13:21', 'Tambah data Standar Biaya');
INSERT INTO `log_aktifitas` VALUES (45, 'biaya', 'Superadmin Untag', 'Superadmin', '2023-02-21 10:13:39', 'Tambah data Standar Biaya');
INSERT INTO `log_aktifitas` VALUES (46, 'biaya', 'Superadmin Untag', 'Superadmin', '2023-02-21 10:13:58', 'Tambah data Standar Biaya');
INSERT INTO `log_aktifitas` VALUES (47, 'biaya', 'Superadmin Untag', 'Superadmin', '2023-02-21 10:14:21', 'Tambah data Standar Biaya');
INSERT INTO `log_aktifitas` VALUES (48, 'biaya', 'Superadmin Untag', 'Superadmin', '2023-02-21 10:15:01', 'Tambah data Standar Biaya');
INSERT INTO `log_aktifitas` VALUES (49, 'biaya', 'Superadmin Untag', 'Superadmin', '2023-02-21 10:15:54', 'Tambah data Standar Biaya');
INSERT INTO `log_aktifitas` VALUES (50, 'biaya', 'Superadmin Untag', 'Superadmin', '2023-02-21 10:16:29', 'Tambah data Standar Biaya');
INSERT INTO `log_aktifitas` VALUES (51, 'biaya', 'Superadmin Untag', 'Superadmin', '2023-02-21 10:16:53', 'Tambah data Standar Biaya');
INSERT INTO `log_aktifitas` VALUES (52, 'biaya', 'Superadmin Untag', 'Superadmin', '2023-02-21 10:17:18', 'Tambah data Standar Biaya');
INSERT INTO `log_aktifitas` VALUES (53, 'biaya', 'Superadmin Untag', 'Superadmin', '2023-02-21 10:17:45', 'Tambah data Standar Biaya');
INSERT INTO `log_aktifitas` VALUES (54, 'biaya', 'Superadmin Untag', 'Superadmin', '2023-02-21 10:18:16', 'Tambah data Standar Biaya');
INSERT INTO `log_aktifitas` VALUES (55, 'biaya', 'Superadmin Untag', 'Superadmin', '2023-02-21 10:19:45', 'Tambah data Standar Biaya');
INSERT INTO `log_aktifitas` VALUES (56, 'biaya', 'Superadmin Untag', 'Superadmin', '2023-02-21 10:20:10', 'Tambah data Standar Biaya');
INSERT INTO `log_aktifitas` VALUES (57, 'biaya', 'Superadmin Untag', 'Superadmin', '2023-02-21 10:20:43', 'Tambah data Standar Biaya');
INSERT INTO `log_aktifitas` VALUES (58, 'biaya', 'Superadmin Untag', 'Superadmin', '2023-02-21 10:21:09', 'Tambah data Standar Biaya');
INSERT INTO `log_aktifitas` VALUES (59, 'biaya', 'Superadmin Untag', 'Superadmin', '2023-02-21 10:21:35', 'Tambah data Standar Biaya');
INSERT INTO `log_aktifitas` VALUES (60, 'anggaran', 'Superadmin Untag', 'Superadmin', '2023-02-21 10:33:29', 'Tambah data Tahun Anggaran');
INSERT INTO `log_aktifitas` VALUES (61, 'anggaran', 'Superadmin Untag', 'Superadmin', '2023-02-21 10:34:16', 'Tambah data Tahun Anggaran');
INSERT INTO `log_aktifitas` VALUES (62, 'anggaran', 'Superadmin Untag', 'Superadmin', '2023-02-21 10:34:29', 'Tambah data Tahun Anggaran');
INSERT INTO `log_aktifitas` VALUES (63, 'anggaran', 'Superadmin Untag', 'Superadmin', '2023-02-21 10:34:41', 'Tambah data Tahun Anggaran');
INSERT INTO `log_aktifitas` VALUES (64, 'anggaran', 'Superadmin Untag', 'Superadmin', '2023-02-21 10:35:23', 'Tambah data Tahun Anggaran');
INSERT INTO `log_aktifitas` VALUES (65, 'anggaran', 'Superadmin Untag', 'Superadmin', '2023-02-21 10:35:43', 'Tambah data Tahun Anggaran');
INSERT INTO `log_aktifitas` VALUES (66, 'anggaran', 'Superadmin Untag', 'Superadmin', '2023-02-21 10:35:46', 'Tambah data Tahun Anggaran');
INSERT INTO `log_aktifitas` VALUES (67, 'anggaran', 'Superadmin Untag', 'Superadmin', '2023-02-21 10:37:23', 'Tambah data Tahun Anggaran');
INSERT INTO `log_aktifitas` VALUES (68, 'satuan', 'Superadmin Untag', 'Superadmin', '2023-02-21 10:44:45', 'Tambah data Satuan');
INSERT INTO `log_aktifitas` VALUES (69, 'satuan', 'Superadmin Untag', 'Superadmin', '2023-02-21 10:44:50', 'Tambah data Satuan');
INSERT INTO `log_aktifitas` VALUES (70, 'satuan', 'Superadmin Untag', 'Superadmin', '2023-02-21 10:44:55', 'Update data Satuan');
INSERT INTO `log_aktifitas` VALUES (71, 'satuan', 'Superadmin Untag', 'Superadmin', '2023-02-21 10:45:09', 'Tambah data Satuan');
INSERT INTO `log_aktifitas` VALUES (72, 'satuan', 'Superadmin Untag', 'Superadmin', '2023-02-21 10:45:27', 'Tambah data Satuan');
INSERT INTO `log_aktifitas` VALUES (73, 'satuan', 'Superadmin Untag', 'Superadmin', '2023-02-21 10:45:44', 'Tambah data Satuan');
INSERT INTO `log_aktifitas` VALUES (74, 'satuan', 'Superadmin Untag', 'Superadmin', '2023-02-21 10:45:50', 'Tambah data Satuan');
INSERT INTO `log_aktifitas` VALUES (75, 'satuan', 'Superadmin Untag', 'Superadmin', '2023-02-21 10:46:00', 'Tambah data Satuan');
INSERT INTO `log_aktifitas` VALUES (76, 'kegiatan', 'Superadmin Untag', 'Superadmin', '2023-02-21 10:46:47', 'Hapus data Kegiatan');
INSERT INTO `log_aktifitas` VALUES (77, 'kegiatan', 'Superadmin Untag', 'Superadmin', '2023-02-21 10:46:57', 'Hapus data Kegiatan');
INSERT INTO `log_aktifitas` VALUES (78, 'kegiatan', 'Superadmin Untag', 'Superadmin', '2023-02-21 10:53:42', 'Tambah data Kegiatan');
INSERT INTO `log_aktifitas` VALUES (79, 'kegiatan', 'Superadmin Untag', 'Superadmin', '2023-02-21 10:53:55', 'Update data Kegiatan');
INSERT INTO `log_aktifitas` VALUES (80, 'kegiatan', 'Superadmin Untag', 'Superadmin', '2023-02-21 10:54:07', 'Tambah data Kegiatan');
INSERT INTO `log_aktifitas` VALUES (81, 'kegiatan', 'Superadmin Untag', 'Superadmin', '2023-02-21 10:55:28', 'Tambah data Kegiatan');
INSERT INTO `log_aktifitas` VALUES (82, 'kegiatan', 'Superadmin Untag', 'Superadmin', '2023-02-21 10:55:44', 'Tambah data Kegiatan');
INSERT INTO `log_aktifitas` VALUES (83, 'kegiatan', 'Superadmin Untag', 'Superadmin', '2023-02-21 10:56:06', 'Tambah data Kegiatan');
INSERT INTO `log_aktifitas` VALUES (84, 'kegiatan', 'Superadmin Untag', 'Superadmin', '2023-02-21 10:58:10', 'Tambah data Kegiatan');
INSERT INTO `log_aktifitas` VALUES (85, 'kegiatan', 'Superadmin Untag', 'Superadmin', '2023-02-21 10:58:30', 'Update data Kegiatan');
INSERT INTO `log_aktifitas` VALUES (86, 'kegiatan', 'Superadmin Untag', 'Superadmin', '2023-02-21 10:59:28', 'Tambah data Kegiatan');
INSERT INTO `log_aktifitas` VALUES (87, 'user', 'Superadmin Untag', 'Superadmin', '2023-02-24 08:21:12', 'Tambah data User Management');
INSERT INTO `log_aktifitas` VALUES (88, 'kegiatan', 'Superadmin Untag', 'Superadmin', '2023-02-24 10:14:58', 'Tambah data Kegiatan');
INSERT INTO `log_aktifitas` VALUES (89, 'kegiatan', 'Superadmin Untag', 'Superadmin', '2023-02-24 10:16:04', 'Tambah data Kegiatan');
INSERT INTO `log_aktifitas` VALUES (90, 'subkegiatan/{_locale_uuid}', 'Superadmin Untag', 'Superadmin', '2023-02-24 10:16:16', 'Tambah data Sub Kegiatan');
INSERT INTO `log_aktifitas` VALUES (91, 'subkegiatan/{_locale_uuid}', 'Superadmin Untag', 'Superadmin', '2023-02-24 10:16:47', 'Tambah data Sub Kegiatan');
INSERT INTO `log_aktifitas` VALUES (92, 'subkegiatan/{_locale_uuid}', 'Superadmin Untag', 'Superadmin', '2023-02-24 10:18:59', 'Tambah data Sub Kegiatan');
INSERT INTO `log_aktifitas` VALUES (93, 'kegiatan', 'Superadmin Untag', 'Superadmin', '2023-02-24 10:19:43', 'Hapus data Kegiatan');
INSERT INTO `log_aktifitas` VALUES (94, 'subkegiatan/{_locale_uuid}', 'Superadmin Untag', 'Superadmin', '2023-02-24 10:22:13', 'Tambah data Sub Kegiatan');
INSERT INTO `log_aktifitas` VALUES (95, 'subkegiatan/{_locale_uuid}', 'Superadmin Untag', 'Superadmin', '2023-02-24 10:22:30', 'Tambah data Sub Kegiatan');
INSERT INTO `log_aktifitas` VALUES (96, 'subkegiatan/{_locale_uuid}', 'Superadmin Untag', 'Superadmin', '2023-02-24 10:38:53', 'Tambah data Sub Kegiatan');
INSERT INTO `log_aktifitas` VALUES (97, 'subkegiatan/{_locale_uuid}', 'Superadmin Untag', 'Superadmin', '2023-02-24 10:56:20', 'Hapus data Sub Kegiatan');
INSERT INTO `log_aktifitas` VALUES (98, 'subkegiatan/{_locale_uuid}', 'Superadmin Untag', 'Superadmin', '2023-02-24 10:57:30', 'Tambah data Sub Kegiatan');
INSERT INTO `log_aktifitas` VALUES (99, 'subkegiatan/{_locale_uuid}', 'Superadmin Untag', 'Superadmin', '2023-02-24 10:59:09', 'Hapus data Sub Kegiatan');
INSERT INTO `log_aktifitas` VALUES (100, 'subkegiatan/{_locale_uuid}', 'Superadmin Untag', 'Superadmin', '2023-02-24 10:59:22', 'Hapus data Sub Kegiatan');
INSERT INTO `log_aktifitas` VALUES (101, 'subkegiatan/{_locale_uuid}', 'Superadmin Untag', 'Superadmin', '2023-02-24 11:00:05', 'Tambah data Sub Kegiatan');
INSERT INTO `log_aktifitas` VALUES (102, 'subkegiatan/{_locale_uuid}', 'Superadmin Untag', 'Superadmin', '2023-02-24 11:06:41', 'Update data Sub Kegiatan');
INSERT INTO `log_aktifitas` VALUES (103, 'user', 'Superadmin Untag', 'Superadmin', '2023-02-24 15:54:57', 'Update data User Management');
INSERT INTO `log_aktifitas` VALUES (104, 'user', 'Superadmin Untag', 'Superadmin', '2023-02-24 16:10:19', 'Tambah data User Management');
INSERT INTO `log_aktifitas` VALUES (105, 'user', 'Superadmin Untag', 'Superadmin', '2023-02-24 16:10:44', 'Tambah data User Management');
INSERT INTO `log_aktifitas` VALUES (106, 'profil', 'Superadmin Untag', 'Superadmin', '2023-02-24 16:11:37', 'Tambah data Profil Pengguna');
INSERT INTO `log_aktifitas` VALUES (107, 'profil', 'Superadmin Untag', 'Superadmin', '2023-02-24 16:13:47', 'Tambah data Profil Pengguna');
INSERT INTO `log_aktifitas` VALUES (108, 'profil', 'Superadmin Untag', 'Superadmin', '2023-02-24 16:16:10', 'Tambah data Profil Pengguna');
INSERT INTO `log_aktifitas` VALUES (109, 'profil', 'Superadmin Untag', 'Superadmin', '2023-02-24 16:16:32', 'Tambah data Profil Pengguna');
INSERT INTO `log_aktifitas` VALUES (110, 'profil', 'Superadmin Untag', 'Superadmin', '2023-02-24 16:16:43', 'Tambah data Profil Pengguna');
INSERT INTO `log_aktifitas` VALUES (111, 'profil', 'Superadmin Untag', 'Superadmin', '2023-02-24 16:17:19', 'Tambah data Profil Pengguna');
INSERT INTO `log_aktifitas` VALUES (112, 'profil', 'Superadmin Untag', 'Superadmin', '2023-02-24 16:17:56', 'Tambah data Profil Pengguna');
INSERT INTO `log_aktifitas` VALUES (113, 'profil', 'Superadmin Untag', 'Superadmin', '2023-02-24 16:31:48', 'Tambah data Profil Pengguna');
INSERT INTO `log_aktifitas` VALUES (114, 'profil', 'Superadmin Untag', 'Superadmin', '2023-02-24 16:32:01', 'Tambah data Profil Pengguna');
INSERT INTO `log_aktifitas` VALUES (115, 'profil', 'Superadmin Untag', 'Superadmin', '2023-02-24 16:32:06', 'Tambah data Profil Pengguna');
INSERT INTO `log_aktifitas` VALUES (116, 'profil', 'Superadmin Untag', 'Superadmin', '2023-02-24 16:33:00', 'Tambah data Profil Pengguna');
INSERT INTO `log_aktifitas` VALUES (117, 'profil', 'Superadmin Untag', 'Superadmin', '2023-02-24 16:33:07', 'Tambah data Profil Pengguna');
INSERT INTO `log_aktifitas` VALUES (118, 'profil', 'Superadmin Untag', 'Superadmin', '2023-02-24 16:33:30', 'Tambah data Profil Pengguna');
INSERT INTO `log_aktifitas` VALUES (119, 'profil', 'Superadmin Untag', 'Superadmin', '2023-02-24 16:35:00', 'Tambah data Profil Pengguna');
INSERT INTO `log_aktifitas` VALUES (120, 'profil', 'Superadmin Untag', 'Superadmin', '2023-02-24 16:35:24', 'Tambah data Profil Pengguna');
INSERT INTO `log_aktifitas` VALUES (121, 'profil', 'Superadmin Untag', 'Superadmin', '2023-02-24 16:52:49', 'Tambah data Profil Pengguna');
INSERT INTO `log_aktifitas` VALUES (122, 'profil', 'Superadmin Untag', 'Superadmin', '2023-02-24 16:53:27', 'Tambah data Profil Pengguna');
INSERT INTO `log_aktifitas` VALUES (123, 'profil', 'Superadmin Untag', 'Superadmin', '2023-02-24 16:58:24', 'Tambah data Profil Pengguna');
INSERT INTO `log_aktifitas` VALUES (124, 'profil', 'Superadmin Untag', 'Superadmin', '2023-02-24 16:59:44', 'Tambah data Profil Pengguna');
INSERT INTO `log_aktifitas` VALUES (125, 'profil', 'Superadmin Untag', 'Superadmin', '2023-02-24 17:00:30', 'Tambah data Profil Pengguna');
INSERT INTO `log_aktifitas` VALUES (126, 'profil', 'Superadmin Untag', 'Superadmin', '2023-02-24 17:01:30', 'Tambah data Profil Pengguna');
INSERT INTO `log_aktifitas` VALUES (127, 'profil', 'Superadmin Untag', 'Superadmin', '2023-02-24 17:03:19', 'Tambah data Profil Pengguna');
INSERT INTO `log_aktifitas` VALUES (128, 'profil', 'Superadmin Untag', 'Superadmin', '2023-02-24 17:03:31', 'Tambah data Profil Pengguna');
INSERT INTO `log_aktifitas` VALUES (129, 'profil', 'Superadmin Universitas 17 Agustus 1945', 'Superadmin', '2023-02-24 17:03:42', 'Tambah data Profil Pengguna');
INSERT INTO `log_aktifitas` VALUES (130, 'profil', 'Superadmin UNTAG', 'Superadmin', '2023-02-24 17:03:47', 'Tambah data Profil Pengguna');
INSERT INTO `log_aktifitas` VALUES (131, 'profil', 'Superadmin UNTAG', 'Superadmin', '2023-02-24 17:03:53', 'Tambah data Profil Pengguna');
INSERT INTO `log_aktifitas` VALUES (132, 'profil', 'Superadmin UNTAG', 'Superadmin', '2023-02-24 17:06:04', 'Tambah data Profil Pengguna');
INSERT INTO `log_aktifitas` VALUES (133, 'profil', 'Superadmin UNTAG', 'Superadmin', '2023-02-24 17:08:22', 'Tambah data Profil Pengguna');

-- ----------------------------
-- Table structure for mst_kegiatan
-- ----------------------------
DROP TABLE IF EXISTS `mst_kegiatan`;
CREATE TABLE `mst_kegiatan`  (
  `id_kegiatan` int NOT NULL AUTO_INCREMENT,
  `uuid_kegiatan` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `nama_kegiatan` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `no_rekening_kegiatan` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `parent_kegiatan` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `tahun_anggaran` varchar(5) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `flag` varchar(1) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  PRIMARY KEY (`id_kegiatan`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 14 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of mst_kegiatan
-- ----------------------------
INSERT INTO `mst_kegiatan` VALUES (4, '9f91be5c-b1cd-11ed-a156-5c60ba3647e7', '  BELANJA DAERAH					', '5', NULL, '2023', '1');
INSERT INTO `mst_kegiatan` VALUES (5, 'ae94931a-b1cd-11ed-a156-5c60ba3647e7', ' BELANJA OPERASI					', '5.1', NULL, '2023', '1');
INSERT INTO `mst_kegiatan` VALUES (7, 'e8a39938-b1cd-11ed-a156-5c60ba3647e7', '  Belanja Barang					', '5.1.02.01', NULL, '2023', '1');
INSERT INTO `mst_kegiatan` VALUES (8, 'f5c790d0-b1cd-11ed-a156-5c60ba3647e7', ' Belanja Barang Pakai Habis					', '5.1.02.01.01', NULL, '2023', '1');
INSERT INTO `mst_kegiatan` VALUES (9, '6e3a8662-b1ce-11ed-a156-5c60ba3647e7', ' Belanja Makanan dan Minuman Rapat					', '5.1.02.01.01.0052', NULL, '2023', '1');
INSERT INTO `mst_kegiatan` VALUES (10, 'c3521ba5-b424-11ed-b881-5c60ba3647e7', ' Belanja Berat', '5.1.01', '9f91be5c-b1cd-11ed-a156-5c60ba3647e7', NULL, '1');
INSERT INTO `mst_kegiatan` VALUES (13, '0344c606-b42a-11ed-b881-5c60ba3647e7', '  Belanja Kecil edited', '5.1.02', '9f91be5c-b1cd-11ed-a156-5c60ba3647e7', NULL, '0');

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
) ENGINE = InnoDB AUTO_INCREMENT = 34 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = Dynamic;

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
INSERT INTO `mst_pendapatan` VALUES (16, 'a37343e1-b1b8-11ed-a156-5c60ba3647e7', 'Pendapatan Wisuda', NULL, '4.1.1.2.2', '2023', NULL, 1);
INSERT INTO `mst_pendapatan` VALUES (17, 'bb18eb1d-b1b8-11ed-a156-5c60ba3647e7', 'Pendapatan Her Registrasi', NULL, '4.1.1.2.3', '2023', NULL, 1);
INSERT INTO `mst_pendapatan` VALUES (18, 'c9d28980-b1b8-11ed-a156-5c60ba3647e7', 'Pendapatan Denda dan Cuti', NULL, '4.1.1.2.4', '2023', NULL, 1);
INSERT INTO `mst_pendapatan` VALUES (19, 'd229f860-b1b8-11ed-a156-5c60ba3647e7', 'Pendapatan Pengabdian kepada Masyarakat', NULL, '4.1.1.2.5', '2023', NULL, 1);
INSERT INTO `mst_pendapatan` VALUES (20, 'dd63c7a2-b1b8-11ed-a156-5c60ba3647e7', 'Pendapatan Penyelenggaraan Seminar', NULL, '4.1.1.2.6', '2023', NULL, 1);
INSERT INTO `mst_pendapatan` VALUES (21, 'ec28c436-b1b8-11ed-a156-5c60ba3647e7', 'PENDAPATAN NON AKADEMIK', NULL, '4.1.2', '2023', '1', 1);
INSERT INTO `mst_pendapatan` VALUES (22, 'f41f12c7-b1b8-11ed-a156-5c60ba3647e7', 'Pendapatan Sewa Gedung', NULL, '4.2.1.2', '2023', NULL, 1);
INSERT INTO `mst_pendapatan` VALUES (23, 'ff0a23f7-b1b8-11ed-a156-5c60ba3647e7', 'Pendapatan Rek Listrik Kantin, Kopma Dll', NULL, '4.1.2.2', '2023', NULL, 1);
INSERT INTO `mst_pendapatan` VALUES (24, '09ecded9-b1b9-11ed-a156-5c60ba3647e7', 'Pendapatan Air Kantin dan Lainnya', NULL, '4.1.2.3', '2023', NULL, 1);
INSERT INTO `mst_pendapatan` VALUES (25, '1942add9-b1b9-11ed-a156-5c60ba3647e7', 'Poliklinik', NULL, '4.1.2.4', '2023', NULL, 1);
INSERT INTO `mst_pendapatan` VALUES (26, '22487a82-b1b9-11ed-a156-5c60ba3647e7', 'Book Store', NULL, '4.1.2.5', '2023', NULL, 1);
INSERT INTO `mst_pendapatan` VALUES (27, '2c6363ed-b1b9-11ed-a156-5c60ba3647e7', 'Pendapatan Sewa Kantin', NULL, '4.1.2.6', '2023', NULL, 1);
INSERT INTO `mst_pendapatan` VALUES (28, '361ab802-b1b9-11ed-a156-5c60ba3647e7', 'Pendapatan Sewa Lainnya', NULL, '4.1.2.7', '2023', NULL, 1);
INSERT INTO `mst_pendapatan` VALUES (29, '3d4094e0-b1b9-11ed-a156-5c60ba3647e7', 'PENDAPATAN LAIN-LAIN', NULL, '4.1.3', '2023', '1', 1);
INSERT INTO `mst_pendapatan` VALUES (30, '482c788b-b1b9-11ed-a156-5c60ba3647e7', 'Pendapatan Bunga Deposito', NULL, '4.1.3.1', '2023', NULL, 1);
INSERT INTO `mst_pendapatan` VALUES (31, '51cbb521-b1b9-11ed-a156-5c60ba3647e7', 'Pendapatan Jasa Giro/ Bunga Tabungan', NULL, '4.1.3.2', '2023', NULL, 1);
INSERT INTO `mst_pendapatan` VALUES (32, '5968c0af-b1b9-11ed-a156-5c60ba3647e7', 'Laba Penjualan Aset Tetap ', NULL, '4.1.3.3', '2023', NULL, 1);
INSERT INTO `mst_pendapatan` VALUES (33, '654ff6b2-b1b9-11ed-a156-5c60ba3647e7', 'Hibah dan Sumbangan Institusi', NULL, '4.1.3.4', '2023', NULL, 1);

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
) ENGINE = InnoDB AUTO_INCREMENT = 13 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of mst_satuan
-- ----------------------------
INSERT INTO `mst_satuan` VALUES (1, '140c9e56-ae14-11ed-8f55-5c60ba3647e7', 'Bulan', '1');
INSERT INTO `mst_satuan` VALUES (2, '22d5ada1-ae14-11ed-8f55-5c60ba3647e7', 'Buah', '1');
INSERT INTO `mst_satuan` VALUES (4, '0604ebc3-ae18-11ed-8f55-5c60ba3647e7', 'cm', '1');
INSERT INTO `mst_satuan` VALUES (5, '4c36c924-ae18-11ed-8f55-5c60ba3647e7', 'Lembar', '1');
INSERT INTO `mst_satuan` VALUES (6, '5f6da4af-b1cc-11ed-a156-5c60ba3647e7', 'Kelas', '1');
INSERT INTO `mst_satuan` VALUES (7, '62d16845-b1cc-11ed-a156-5c60ba3647e7', 'Kali', '1');
INSERT INTO `mst_satuan` VALUES (8, '6e02160c-b1cc-11ed-a156-5c60ba3647e7', 'Halaman', '1');
INSERT INTO `mst_satuan` VALUES (9, '78bf479c-b1cc-11ed-a156-5c60ba3647e7', 'm2', '1');
INSERT INTO `mst_satuan` VALUES (10, '8305d51b-b1cc-11ed-a156-5c60ba3647e7', 'rim', '1');
INSERT INTO `mst_satuan` VALUES (11, '86257db4-b1cc-11ed-a156-5c60ba3647e7', 'pak', '1');
INSERT INTO `mst_satuan` VALUES (12, '8c2b6f81-b1cc-11ed-a156-5c60ba3647e7', 'unit', '1');

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
) ENGINE = InnoDB AUTO_INCREMENT = 24 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of mst_standar_biaya
-- ----------------------------
INSERT INTO `mst_standar_biaya` VALUES (8, 'fcaad192-b1c7-11ed-a156-5c60ba3647e7', 'BEBAN', NULL, '5.1', '2023', '1', '1');
INSERT INTO `mst_standar_biaya` VALUES (9, '0793d0bb-b1c8-11ed-a156-5c60ba3647e7', 'BEBAN AKADEMIK', NULL, '5.1.0', '2023', '1', '1');
INSERT INTO `mst_standar_biaya` VALUES (10, '12f8e6e9-b1c8-11ed-a156-5c60ba3647e7', 'BEBAN PENDIDIKAN DAN PENGAJARAN', NULL, '5.1.0.1', '2023', '1', '1');
INSERT INTO `mst_standar_biaya` VALUES (11, '20a9a266-b1c8-11ed-a156-5c60ba3647e7', 'BEBAN GAJI DOSEN', NULL, '5.1.0.1.1', '2023', '1', '1');
INSERT INTO `mst_standar_biaya` VALUES (12, '382fe42a-b1c8-11ed-a156-5c60ba3647e7', 'Gaji Pokok Karyawan dan Dosen Tetap Yayasan (SMA/D1 - 0-4 Tahun)', '805000', '5.1.0.1.1.001', '2023', NULL, '1');
INSERT INTO `mst_standar_biaya` VALUES (13, '5825a01e-b1c8-11ed-a156-5c60ba3647e7', 'Gaji Pokok Karyawan dan Dosen Tetap Yayasan (D2/D3 - 0-4 Tahun)', '966000', '5.1.0.1.1.002', '2023', NULL, '1');
INSERT INTO `mst_standar_biaya` VALUES (14, '6ced82fb-b1c8-11ed-a156-5c60ba3647e7', 'Gaji Pokok Karyawan dan Dosen Tetap Yayasan (S1/D4 - 0-4 Tahun)', '1127000', '5.1.0.1.1.003', '2023', NULL, '1');
INSERT INTO `mst_standar_biaya` VALUES (15, '7b30efdd-b1c8-11ed-a156-5c60ba3647e7', 'Gaji Pokok Karyawan dan Dosen Tetap Yayasan (S2 - 0-4 Tahun)', '1288000', '5.1.0.1.1.004', '2023', NULL, '1');
INSERT INTO `mst_standar_biaya` VALUES (16, '89e211ad-b1c8-11ed-a156-5c60ba3647e7', 'Gaji Pokok Karyawan dan Dosen Tetap Yayasan (S3 - 0-4 Tahun)', '1449000', '5.1.0.1.1.005', '2023', NULL, '1');
INSERT INTO `mst_standar_biaya` VALUES (17, '9a0c6f64-b1c8-11ed-a156-5c60ba3647e7', 'Gaji Pokok Karyawan dan Dosen Tetap Yayasan (SMA/D1 - 5-9 Tahun)', '966000', '5.1.0.1.1.006', '2023', NULL, '1');
INSERT INTO `mst_standar_biaya` VALUES (18, 'aca06ac0-b1c8-11ed-a156-5c60ba3647e7', 'Gaji Pokok Karyawan dan Dosen Tetap Yayasan (D2/D3 - 5-9 Tahun)', '1127000', '5.1.0.1.1.007', '2023', NULL, '1');
INSERT INTO `mst_standar_biaya` VALUES (19, 'e193ffb3-b1c8-11ed-a156-5c60ba3647e7', 'Gaji Pokok Karyawan dan Dosen Tetap Yayasan (S1/D4 - 5-9 Tahun)', '1288000', '5.1.0.1.1.008', '2023', NULL, '1');
INSERT INTO `mst_standar_biaya` VALUES (20, 'f048b17b-b1c8-11ed-a156-5c60ba3647e7', 'Gaji Pokok Karyawan dan Dosen Tetap Yayasan (S2 - 5-9 Tahun)', '1449000', '5.1.0.1.1.009', '2023', NULL, '1');
INSERT INTO `mst_standar_biaya` VALUES (21, '0426a2fe-b1c9-11ed-a156-5c60ba3647e7', 'Gaji Pokok Karyawan dan Dosen Tetap Yayasan (S3 - 5-9 Tahun)', '1610000', '5.1.0.1.1.010', '2023', NULL, '1');
INSERT INTO `mst_standar_biaya` VALUES (22, '13afe660-b1c9-11ed-a156-5c60ba3647e7', 'Gaji Pokok Karyawan dan Dosen Tetap Yayasan (SMA/D1 - 10-14 Tahun)', '127000', '5.1.0.1.1.011', '2023', NULL, '1');
INSERT INTO `mst_standar_biaya` VALUES (23, '23137cf6-b1c9-11ed-a156-5c60ba3647e7', 'Gaji Pokok Karyawan dan Dosen Tetap Yayasan (D2/D3 - 10-14 Tahun)', '1288000', '5.1.0.1.1.012', '2023', NULL, '1');

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
) ENGINE = InnoDB AUTO_INCREMENT = 17 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of mst_tahun_anggaran
-- ----------------------------
INSERT INTO `mst_tahun_anggaran` VALUES (1, '33ce9356-ae07-11ed-8f55-5c60ba3647e9', '2022', '1500000000', '0');
INSERT INTO `mst_tahun_anggaran` VALUES (2, '33ce9356-ae07-11ed-8f55-5c60ba3647e8', '2023', '1500000000', '1');
INSERT INTO `mst_tahun_anggaran` VALUES (9, 'd555f7a8-ae10-11ed-8f55-5c60ba3647e7', '2024', '250000000', '1');
INSERT INTO `mst_tahun_anggaran` VALUES (10, 'ccc526b8-b1ca-11ed-a156-5c60ba3647e7', '2015', '150000000', '0');
INSERT INTO `mst_tahun_anggaran` VALUES (11, 'e8a54273-b1ca-11ed-a156-5c60ba3647e7', '2016', '250000000', '0');
INSERT INTO `mst_tahun_anggaran` VALUES (12, 'f06b3888-b1ca-11ed-a156-5c60ba3647e7', '2018', '12000000', '0');
INSERT INTO `mst_tahun_anggaran` VALUES (13, 'f7c3a9a8-b1ca-11ed-a156-5c60ba3647e7', '2017', '450000000', '0');
INSERT INTO `mst_tahun_anggaran` VALUES (14, '10dd4870-b1cb-11ed-a156-5c60ba3647e7', '2019', '345000000', '0');
INSERT INTO `mst_tahun_anggaran` VALUES (15, '1e434ca7-b1cb-11ed-a156-5c60ba3647e7', '2020', '20000000', '0');
INSERT INTO `mst_tahun_anggaran` VALUES (16, '583e4b67-b1cb-11ed-a156-5c60ba3647e7', '2021', '245000000', '0');

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
INSERT INTO `mst_users` VALUES (3, 'dca74e86-abb7-11ed-8468-5c60ba3647e9', 'Superadmin UNTAG', '', 'superadmin', '$2y$10$8B1aUDiwyNgVuEjHM0978uXJPV0q5YZGmc/HilyiT8MZXGQsLYGti', '1', 'Superadmin', '1');
INSERT INTO `mst_users` VALUES (6, '6be904b9-ac71-11ed-ae87-5c60ba3647e7', 'Admin Prodi Fakultas 2', '', 'adminprodi', '$2y$10$qjNnQ9AM0rIokbS1EmSbUeB5b5C9ph2xpzqMkLw1xin62BYOjHO8m', '2', 'Admin Prodi', '0');

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

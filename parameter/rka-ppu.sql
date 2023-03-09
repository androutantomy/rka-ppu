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

 Date: 09/03/2023 22:32:58
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
) ENGINE = InnoDB AUTO_INCREMENT = 870 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = Dynamic;

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
INSERT INTO `log_aktifitas` VALUES (134, 'biaya', 'Superadmin UNTAG', 'Superadmin', '2023-02-25 06:36:08', 'Hapus data Standar Biaya');
INSERT INTO `log_aktifitas` VALUES (135, 'user', 'Superadmin UNTAG', 'Superadmin', '2023-02-25 12:11:40', 'Tambah data User Management');
INSERT INTO `log_aktifitas` VALUES (136, 'kegiatan', 'Superadmin UNTAG', 'Superadmin', '2023-02-25 12:13:39', 'Hapus data Kegiatan');
INSERT INTO `log_aktifitas` VALUES (137, 'user', 'Superadmin UNTAG', 'Superadmin', '2023-02-25 12:14:47', 'Hapus data User Management');
INSERT INTO `log_aktifitas` VALUES (138, 'anggaran', 'Superadmin UNTAG', 'Superadmin', '2023-02-25 12:17:57', 'Hapus data Tahun Anggaran');
INSERT INTO `log_aktifitas` VALUES (139, 'pendapatan', 'Superadmin UNTAG', 'Superadmin', '2023-02-25 12:18:48', 'Hapus data Pendapatan');
INSERT INTO `log_aktifitas` VALUES (140, 'user', 'Superadmin UNTAG', 'Superadmin', '2023-02-25 12:19:32', 'Hapus data User Management');
INSERT INTO `log_aktifitas` VALUES (141, 'pendapatan', 'Superadmin UNTAG', 'Superadmin', '2023-02-25 12:21:55', 'Hapus data Pendapatan');
INSERT INTO `log_aktifitas` VALUES (142, 'biaya', 'Superadmin UNTAG', 'Superadmin', '2023-02-25 12:22:55', 'Hapus data Standar Biaya');
INSERT INTO `log_aktifitas` VALUES (143, 'satuan', 'Superadmin UNTAG', 'Superadmin', '2023-02-25 12:23:18', 'Hapus data Satuan');
INSERT INTO `log_aktifitas` VALUES (144, 'kegiatan', 'Superadmin UNTAG', 'Superadmin', '2023-02-25 12:24:06', 'Hapus data Kegiatan');
INSERT INTO `log_aktifitas` VALUES (145, 'kegiatan', 'Superadmin UNTAG', 'Superadmin', '2023-02-25 12:24:28', 'Tambah data Kegiatan');
INSERT INTO `log_aktifitas` VALUES (146, 'kegiatan', 'Superadmin UNTAG', 'Superadmin', '2023-02-25 12:24:32', 'Tambah data Kegiatan');
INSERT INTO `log_aktifitas` VALUES (147, 'user', 'Superadmin UNTAG', 'Superadmin', '2023-02-25 13:28:33', 'Tambah data User Management');
INSERT INTO `log_aktifitas` VALUES (148, 'user', 'Superadmin UNTAG', 'Superadmin', '2023-02-25 13:28:57', 'Tambah data User Management');
INSERT INTO `log_aktifitas` VALUES (149, 'anggaran', 'Superadmin UNTAG', 'Superadmin', '2023-02-25 13:32:15', 'Tambah data Tahun Anggaran');
INSERT INTO `log_aktifitas` VALUES (150, 'anggaran', 'Superadmin UNTAG', 'Superadmin', '2023-02-25 13:37:51', 'Tambah data Tahun Anggaran');
INSERT INTO `log_aktifitas` VALUES (151, 'anggaran', 'Superadmin UNTAG', 'Superadmin', '2023-02-25 13:38:05', 'Tambah data Tahun Anggaran');
INSERT INTO `log_aktifitas` VALUES (152, 'anggaran', 'Superadmin UNTAG', 'Superadmin', '2023-02-25 13:38:16', 'Tambah data Tahun Anggaran');
INSERT INTO `log_aktifitas` VALUES (153, 'anggaran', 'Superadmin UNTAG', 'Superadmin', '2023-02-25 15:25:42', 'Tambah data Tahun Anggaran');
INSERT INTO `log_aktifitas` VALUES (154, 'anggaran', 'Superadmin UNTAG', 'Superadmin', '2023-02-25 15:30:05', 'Tambah data Tahun Anggaran');
INSERT INTO `log_aktifitas` VALUES (155, 'anggaran', 'Superadmin UNTAG', 'Superadmin', '2023-02-25 15:37:51', 'Hapus data Tahun Anggaran');
INSERT INTO `log_aktifitas` VALUES (156, 'anggaran', 'Superadmin UNTAG', 'Superadmin', '2023-02-25 15:38:14', 'Tambah data Tahun Anggaran');
INSERT INTO `log_aktifitas` VALUES (157, 'anggaran', 'Superadmin UNTAG', 'Superadmin', '2023-02-25 15:52:40', 'Hapus data Tahun Anggaran');
INSERT INTO `log_aktifitas` VALUES (158, 'anggaran', 'Superadmin UNTAG', 'Superadmin', '2023-02-25 15:53:05', 'Tambah data Tahun Anggaran');
INSERT INTO `log_aktifitas` VALUES (159, 'anggaran', 'Superadmin UNTAG', 'Superadmin', '2023-02-25 16:17:59', 'Update data Tahun Anggaran');
INSERT INTO `log_aktifitas` VALUES (160, 'anggaran', 'Superadmin UNTAG', 'Superadmin', '2023-02-25 16:18:45', 'Update data Tahun Anggaran');
INSERT INTO `log_aktifitas` VALUES (161, 'anggaran', 'Superadmin UNTAG', 'Superadmin', '2023-02-25 16:19:21', 'Update data Tahun Anggaran');
INSERT INTO `log_aktifitas` VALUES (162, 'anggaran', 'Superadmin UNTAG', 'Superadmin', '2023-02-25 16:19:28', 'Update data Tahun Anggaran');
INSERT INTO `log_aktifitas` VALUES (163, 'anggaran', 'Superadmin UNTAG', 'Superadmin', '2023-02-25 16:20:06', 'Update data Tahun Anggaran');
INSERT INTO `log_aktifitas` VALUES (164, 'anggaran', 'Superadmin UNTAG', 'Superadmin', '2023-02-25 16:20:50', 'Update data Tahun Anggaran');
INSERT INTO `log_aktifitas` VALUES (165, 'anggaran', 'Superadmin UNTAG', 'Superadmin', '2023-02-25 16:21:13', 'Update data Tahun Anggaran');
INSERT INTO `log_aktifitas` VALUES (166, 'anggaran', 'Superadmin UNTAG', 'Superadmin', '2023-02-25 16:21:30', 'Update data Tahun Anggaran');
INSERT INTO `log_aktifitas` VALUES (167, 'anggaran', 'Superadmin UNTAG', 'Superadmin', '2023-02-25 16:21:50', 'Update data Tahun Anggaran');
INSERT INTO `log_aktifitas` VALUES (168, 'anggaran', 'Superadmin UNTAG', 'Superadmin', '2023-02-25 16:22:01', 'Update data Tahun Anggaran');
INSERT INTO `log_aktifitas` VALUES (169, 'anggaran', 'Superadmin UNTAG', 'Superadmin', '2023-02-25 16:23:04', 'Update data Tahun Anggaran');
INSERT INTO `log_aktifitas` VALUES (170, 'anggaran', 'Superadmin UNTAG', 'Superadmin', '2023-02-25 16:23:16', 'Update data Tahun Anggaran');
INSERT INTO `log_aktifitas` VALUES (171, 'anggaran', 'Superadmin UNTAG', 'Superadmin', '2023-02-25 16:23:53', 'Update data Tahun Anggaran');
INSERT INTO `log_aktifitas` VALUES (172, 'anggaran', 'Superadmin UNTAG', 'Superadmin', '2023-02-25 16:38:38', 'Update data Tahun Anggaran');
INSERT INTO `log_aktifitas` VALUES (173, 'anggaran', 'Superadmin UNTAG', 'Superadmin', '2023-02-25 16:39:03', 'Update data Tahun Anggaran');
INSERT INTO `log_aktifitas` VALUES (174, 'biaya', 'Superadmin UNTAG', 'Superadmin', '2023-02-25 18:25:33', 'Tambah data Standar Biaya');
INSERT INTO `log_aktifitas` VALUES (175, 'biaya', 'Superadmin UNTAG', 'Superadmin', '2023-02-25 18:41:15', 'Tambah data Standar Biaya');
INSERT INTO `log_aktifitas` VALUES (176, 'biaya', 'Superadmin UNTAG', 'Superadmin', '2023-02-25 19:10:09', 'Tambah data Standar Biaya');
INSERT INTO `log_aktifitas` VALUES (177, 'biaya', 'Superadmin UNTAG', 'Superadmin', '2023-02-26 07:12:26', 'Tambah data Standar Biaya');
INSERT INTO `log_aktifitas` VALUES (178, 'biaya', 'Superadmin UNTAG', 'Superadmin', '2023-02-26 07:13:44', 'Tambah data Standar Biaya');
INSERT INTO `log_aktifitas` VALUES (179, 'biaya', 'Superadmin UNTAG', 'Superadmin', '2023-02-26 07:14:01', 'Tambah data Standar Biaya');
INSERT INTO `log_aktifitas` VALUES (180, 'biaya', 'Superadmin UNTAG', 'Superadmin', '2023-02-26 07:14:16', 'Tambah data Standar Biaya');
INSERT INTO `log_aktifitas` VALUES (181, 'biaya', 'Superadmin UNTAG', 'Superadmin', '2023-02-26 07:15:22', 'Tambah data Standar Biaya');
INSERT INTO `log_aktifitas` VALUES (182, 'biaya', 'Superadmin UNTAG', 'Superadmin', '2023-02-26 07:17:00', 'Tambah data Standar Biaya');
INSERT INTO `log_aktifitas` VALUES (183, 'biaya', 'Superadmin UNTAG', 'Superadmin', '2023-02-26 07:17:04', 'Tambah data Standar Biaya');
INSERT INTO `log_aktifitas` VALUES (184, 'biaya', 'Superadmin UNTAG', 'Superadmin', '2023-02-26 07:17:12', 'Tambah data Standar Biaya');
INSERT INTO `log_aktifitas` VALUES (185, 'biaya', 'Superadmin UNTAG', 'Superadmin', '2023-02-26 07:17:17', 'Tambah data Standar Biaya');
INSERT INTO `log_aktifitas` VALUES (186, 'biaya', 'Superadmin UNTAG', 'Superadmin', '2023-02-26 07:24:40', 'Tambah data Standar Biaya');
INSERT INTO `log_aktifitas` VALUES (187, 'biaya', 'Superadmin UNTAG', 'Superadmin', '2023-02-26 07:24:49', 'Tambah data Standar Biaya');
INSERT INTO `log_aktifitas` VALUES (188, 'biaya', 'Superadmin UNTAG', 'Superadmin', '2023-02-26 07:24:51', 'Tambah data Standar Biaya');
INSERT INTO `log_aktifitas` VALUES (189, 'biaya', 'Superadmin UNTAG', 'Superadmin', '2023-02-26 07:24:54', 'Tambah data Standar Biaya');
INSERT INTO `log_aktifitas` VALUES (190, 'biaya', 'Superadmin UNTAG', 'Superadmin', '2023-02-26 07:24:54', 'Tambah data Standar Biaya');
INSERT INTO `log_aktifitas` VALUES (191, 'biaya', 'Superadmin UNTAG', 'Superadmin', '2023-02-26 07:25:16', 'Tambah data Standar Biaya');
INSERT INTO `log_aktifitas` VALUES (192, 'biaya', 'Superadmin UNTAG', 'Superadmin', '2023-02-26 07:25:34', 'Tambah data Standar Biaya');
INSERT INTO `log_aktifitas` VALUES (193, 'biaya', 'Superadmin UNTAG', 'Superadmin', '2023-02-26 07:25:37', 'Tambah data Standar Biaya');
INSERT INTO `log_aktifitas` VALUES (194, 'biaya', 'Superadmin UNTAG', 'Superadmin', '2023-02-26 07:28:03', 'Tambah data Standar Biaya');
INSERT INTO `log_aktifitas` VALUES (195, 'biaya', 'Superadmin UNTAG', 'Superadmin', '2023-02-26 07:28:38', 'Tambah data Standar Biaya');
INSERT INTO `log_aktifitas` VALUES (196, 'biaya', 'Superadmin UNTAG', 'Superadmin', '2023-02-26 07:34:40', 'Tambah data Standar Biaya');
INSERT INTO `log_aktifitas` VALUES (197, 'biaya', 'Superadmin UNTAG', 'Superadmin', '2023-02-26 07:34:42', 'Tambah data Standar Biaya');
INSERT INTO `log_aktifitas` VALUES (198, 'biaya', 'Superadmin UNTAG', 'Superadmin', '2023-02-26 07:35:23', 'Tambah data Standar Biaya');
INSERT INTO `log_aktifitas` VALUES (199, 'biaya', 'Superadmin UNTAG', 'Superadmin', '2023-02-26 07:35:27', 'Tambah data Standar Biaya');
INSERT INTO `log_aktifitas` VALUES (200, 'biaya', 'Superadmin UNTAG', 'Superadmin', '2023-02-26 07:36:16', 'Tambah data Standar Biaya');
INSERT INTO `log_aktifitas` VALUES (201, 'biaya', 'Superadmin UNTAG', 'Superadmin', '2023-02-26 07:36:19', 'Tambah data Standar Biaya');
INSERT INTO `log_aktifitas` VALUES (202, 'biaya', 'Superadmin UNTAG', 'Superadmin', '2023-02-26 07:36:20', 'Tambah data Standar Biaya');
INSERT INTO `log_aktifitas` VALUES (203, 'biaya', 'Superadmin UNTAG', 'Superadmin', '2023-02-26 07:36:42', 'Tambah data Standar Biaya');
INSERT INTO `log_aktifitas` VALUES (204, 'biaya', 'Superadmin UNTAG', 'Superadmin', '2023-02-26 07:36:44', 'Tambah data Standar Biaya');
INSERT INTO `log_aktifitas` VALUES (205, 'biaya', 'Superadmin UNTAG', 'Superadmin', '2023-02-26 07:36:51', 'Tambah data Standar Biaya');
INSERT INTO `log_aktifitas` VALUES (206, 'biaya', 'Superadmin UNTAG', 'Superadmin', '2023-02-26 07:36:55', 'Tambah data Standar Biaya');
INSERT INTO `log_aktifitas` VALUES (207, 'biaya', 'Superadmin UNTAG', 'Superadmin', '2023-02-26 07:36:56', 'Tambah data Standar Biaya');
INSERT INTO `log_aktifitas` VALUES (208, 'biaya', 'Superadmin UNTAG', 'Superadmin', '2023-02-26 07:36:57', 'Tambah data Standar Biaya');
INSERT INTO `log_aktifitas` VALUES (209, 'biaya', 'Superadmin UNTAG', 'Superadmin', '2023-02-26 07:42:55', 'Tambah data Standar Biaya');
INSERT INTO `log_aktifitas` VALUES (210, 'biaya', 'Superadmin UNTAG', 'Superadmin', '2023-02-26 07:44:31', 'Tambah data Standar Biaya');
INSERT INTO `log_aktifitas` VALUES (211, 'biaya', 'Superadmin UNTAG', 'Superadmin', '2023-02-26 07:44:34', 'Tambah data Standar Biaya');
INSERT INTO `log_aktifitas` VALUES (212, 'biaya', 'Superadmin UNTAG', 'Superadmin', '2023-02-26 07:44:37', 'Tambah data Standar Biaya');
INSERT INTO `log_aktifitas` VALUES (213, 'biaya', 'Superadmin UNTAG', 'Superadmin', '2023-02-26 07:58:23', 'Tambah data Standar Biaya');
INSERT INTO `log_aktifitas` VALUES (214, 'biaya', 'Superadmin UNTAG', 'Superadmin', '2023-02-26 07:58:28', 'Update data Standar Biaya');
INSERT INTO `log_aktifitas` VALUES (215, 'biaya', 'Superadmin UNTAG', 'Superadmin', '2023-02-26 07:59:18', 'Update data Standar Biaya');
INSERT INTO `log_aktifitas` VALUES (216, 'biaya', 'Superadmin UNTAG', 'Superadmin', '2023-02-26 08:01:10', 'Update data Standar Biaya');
INSERT INTO `log_aktifitas` VALUES (217, 'biaya', 'Superadmin UNTAG', 'Superadmin', '2023-02-26 08:02:21', 'Update data Standar Biaya');
INSERT INTO `log_aktifitas` VALUES (218, 'biaya', 'Superadmin UNTAG', 'Superadmin', '2023-02-26 08:03:42', 'Tambah data Standar Biaya');
INSERT INTO `log_aktifitas` VALUES (219, 'biaya', 'Superadmin UNTAG', 'Superadmin', '2023-02-26 08:03:45', 'Tambah data Standar Biaya');
INSERT INTO `log_aktifitas` VALUES (220, 'biaya', 'Superadmin UNTAG', 'Superadmin', '2023-02-26 08:03:46', 'Update data Standar Biaya');
INSERT INTO `log_aktifitas` VALUES (221, 'biaya', 'Superadmin UNTAG', 'Superadmin', '2023-02-26 08:03:59', 'Update data Standar Biaya');
INSERT INTO `log_aktifitas` VALUES (222, 'biaya', 'Superadmin UNTAG', 'Superadmin', '2023-02-26 08:04:10', 'Tambah data Standar Biaya');
INSERT INTO `log_aktifitas` VALUES (223, 'biaya', 'Superadmin UNTAG', 'Superadmin', '2023-02-26 08:04:15', 'Tambah data Standar Biaya');
INSERT INTO `log_aktifitas` VALUES (224, 'biaya', 'Superadmin UNTAG', 'Superadmin', '2023-02-26 08:04:17', 'Tambah data Standar Biaya');
INSERT INTO `log_aktifitas` VALUES (225, 'biaya', 'Superadmin UNTAG', 'Superadmin', '2023-02-26 08:04:17', 'Tambah data Standar Biaya');
INSERT INTO `log_aktifitas` VALUES (226, 'biaya', 'Superadmin UNTAG', 'Superadmin', '2023-02-26 08:04:20', 'Update data Standar Biaya');
INSERT INTO `log_aktifitas` VALUES (227, 'biaya', 'Superadmin UNTAG', 'Superadmin', '2023-02-26 08:04:27', 'Update data Standar Biaya');
INSERT INTO `log_aktifitas` VALUES (228, 'biaya', 'Superadmin UNTAG', 'Superadmin', '2023-02-26 10:18:22', 'Tambah data Standar Biaya');
INSERT INTO `log_aktifitas` VALUES (229, 'biaya', 'Superadmin UNTAG', 'Superadmin', '2023-02-26 10:18:24', 'Tambah data Standar Biaya');
INSERT INTO `log_aktifitas` VALUES (230, 'satuan', 'Superadmin UNTAG', 'Superadmin', '2023-02-26 10:18:37', 'Tambah data Satuan');
INSERT INTO `log_aktifitas` VALUES (231, 'biaya', 'Superadmin UNTAG', 'Superadmin', '2023-02-26 10:19:02', 'Tambah data Standar Biaya');
INSERT INTO `log_aktifitas` VALUES (232, 'biaya', 'Superadmin UNTAG', 'Superadmin', '2023-02-26 10:19:05', 'Tambah data Standar Biaya');
INSERT INTO `log_aktifitas` VALUES (233, 'biaya', 'Superadmin UNTAG', 'Superadmin', '2023-02-26 10:19:09', 'Tambah data Standar Biaya');
INSERT INTO `log_aktifitas` VALUES (234, 'biaya', 'Superadmin UNTAG', 'Superadmin', '2023-02-26 10:19:12', 'Tambah data Standar Biaya');
INSERT INTO `log_aktifitas` VALUES (235, 'biaya', 'Superadmin UNTAG', 'Superadmin', '2023-02-26 10:19:33', 'Update data Standar Biaya');
INSERT INTO `log_aktifitas` VALUES (236, 'biaya', 'Superadmin UNTAG', 'Superadmin', '2023-02-26 10:19:58', 'Tambah data Standar Biaya');
INSERT INTO `log_aktifitas` VALUES (237, 'biaya', 'Superadmin UNTAG', 'Superadmin', '2023-02-26 10:20:02', 'Update data Standar Biaya');
INSERT INTO `log_aktifitas` VALUES (238, 'biaya', 'Superadmin UNTAG', 'Superadmin', '2023-02-26 10:20:09', 'Tambah data Standar Biaya');
INSERT INTO `log_aktifitas` VALUES (239, 'biaya', 'Superadmin UNTAG', 'Superadmin', '2023-02-26 10:23:05', 'Hapus data Standar Biaya');
INSERT INTO `log_aktifitas` VALUES (240, 'biaya', 'Superadmin UNTAG', 'Superadmin', '2023-02-26 10:24:04', 'Update data Standar Biaya');
INSERT INTO `log_aktifitas` VALUES (241, 'biaya', 'Superadmin UNTAG', 'Superadmin', '2023-02-26 10:25:00', 'Update data Standar Biaya');
INSERT INTO `log_aktifitas` VALUES (242, 'biaya', 'Superadmin UNTAG', 'Superadmin', '2023-02-26 10:25:32', 'Tambah data Standar Biaya');
INSERT INTO `log_aktifitas` VALUES (243, 'biaya', 'Superadmin UNTAG', 'Superadmin', '2023-02-26 10:26:12', 'Tambah data Standar Biaya');
INSERT INTO `log_aktifitas` VALUES (244, 'biaya', 'Superadmin UNTAG', 'Superadmin', '2023-02-26 10:26:15', 'Tambah data Standar Biaya');
INSERT INTO `log_aktifitas` VALUES (245, 'biaya', 'Superadmin UNTAG', 'Superadmin', '2023-02-26 10:26:17', 'Tambah data Standar Biaya');
INSERT INTO `log_aktifitas` VALUES (246, 'biaya', 'Superadmin UNTAG', 'Superadmin', '2023-02-26 10:33:24', 'Tambah data Standar Biaya');
INSERT INTO `log_aktifitas` VALUES (247, 'biaya', 'Superadmin UNTAG', 'Superadmin', '2023-02-26 10:34:51', 'Tambah data Standar Biaya');
INSERT INTO `log_aktifitas` VALUES (248, 'biaya', 'Superadmin UNTAG', 'Superadmin', '2023-02-26 10:35:44', 'Tambah data Standar Biaya');
INSERT INTO `log_aktifitas` VALUES (249, 'biaya', 'Superadmin UNTAG', 'Superadmin', '2023-02-26 10:35:47', 'Tambah data Standar Biaya');
INSERT INTO `log_aktifitas` VALUES (250, 'biaya', 'Superadmin UNTAG', 'Superadmin', '2023-02-26 10:35:49', 'Tambah data Standar Biaya');
INSERT INTO `log_aktifitas` VALUES (251, 'biaya', 'Superadmin UNTAG', 'Superadmin', '2023-02-26 10:35:52', 'Tambah data Standar Biaya');
INSERT INTO `log_aktifitas` VALUES (252, 'biaya', 'Superadmin UNTAG', 'Superadmin', '2023-02-26 10:38:38', 'Tambah data Standar Biaya');
INSERT INTO `log_aktifitas` VALUES (253, 'biaya', 'Superadmin UNTAG', 'Superadmin', '2023-02-26 10:38:51', 'Tambah data Standar Biaya');
INSERT INTO `log_aktifitas` VALUES (254, 'biaya', 'Superadmin UNTAG', 'Superadmin', '2023-02-26 10:45:33', 'Tambah data Standar Biaya');
INSERT INTO `log_aktifitas` VALUES (255, 'biaya', 'Superadmin UNTAG', 'Superadmin', '2023-02-26 10:52:02', 'Tambah data Standar Biaya');
INSERT INTO `log_aktifitas` VALUES (256, 'biaya', 'Superadmin UNTAG', 'Superadmin', '2023-02-26 10:52:02', 'Tambah data Standar Biaya');
INSERT INTO `log_aktifitas` VALUES (257, 'biaya', 'Superadmin UNTAG', 'Superadmin', '2023-02-26 10:52:04', 'Tambah data Standar Biaya');
INSERT INTO `log_aktifitas` VALUES (258, 'biaya', 'Superadmin UNTAG', 'Superadmin', '2023-02-26 10:52:05', 'Tambah data Standar Biaya');
INSERT INTO `log_aktifitas` VALUES (259, 'biaya', 'Superadmin UNTAG', 'Superadmin', '2023-02-26 10:52:06', 'Tambah data Standar Biaya');
INSERT INTO `log_aktifitas` VALUES (260, 'biaya', 'Superadmin UNTAG', 'Superadmin', '2023-02-26 10:52:47', 'Tambah data Standar Biaya');
INSERT INTO `log_aktifitas` VALUES (261, 'biaya', 'Superadmin UNTAG', 'Superadmin', '2023-02-26 10:52:49', 'Tambah data Standar Biaya');
INSERT INTO `log_aktifitas` VALUES (262, 'biaya', 'Superadmin UNTAG', 'Superadmin', '2023-02-26 13:55:10', 'Tambah data Standar Biaya');
INSERT INTO `log_aktifitas` VALUES (263, 'biaya', 'Superadmin UNTAG', 'Superadmin', '2023-02-26 13:56:04', 'Tambah data Standar Biaya');
INSERT INTO `log_aktifitas` VALUES (264, 'biaya', 'Superadmin UNTAG', 'Superadmin', '2023-02-26 13:56:59', 'Tambah data Standar Biaya');
INSERT INTO `log_aktifitas` VALUES (265, 'biaya', 'Superadmin UNTAG', 'Superadmin', '2023-02-26 13:57:00', 'Tambah data Standar Biaya');
INSERT INTO `log_aktifitas` VALUES (266, 'biaya', 'Superadmin UNTAG', 'Superadmin', '2023-02-26 13:57:14', 'Tambah data Standar Biaya');
INSERT INTO `log_aktifitas` VALUES (267, 'biaya', 'Superadmin UNTAG', 'Superadmin', '2023-02-26 13:58:46', 'Tambah data Standar Biaya');
INSERT INTO `log_aktifitas` VALUES (268, 'biaya', 'Superadmin UNTAG', 'Superadmin', '2023-02-26 14:00:10', 'Tambah data Standar Biaya');
INSERT INTO `log_aktifitas` VALUES (269, 'biaya', 'Superadmin UNTAG', 'Superadmin', '2023-02-26 14:00:33', 'Tambah data Standar Biaya');
INSERT INTO `log_aktifitas` VALUES (270, 'biaya', 'Superadmin UNTAG', 'Superadmin', '2023-02-26 14:02:08', 'Tambah data Standar Biaya');
INSERT INTO `log_aktifitas` VALUES (271, 'biaya', 'Superadmin UNTAG', 'Superadmin', '2023-02-26 14:02:23', 'Tambah data Standar Biaya');
INSERT INTO `log_aktifitas` VALUES (272, 'biaya', 'Superadmin UNTAG', 'Superadmin', '2023-02-26 14:02:29', 'Tambah data Standar Biaya');
INSERT INTO `log_aktifitas` VALUES (273, 'biaya', 'Superadmin UNTAG', 'Superadmin', '2023-02-26 14:03:41', 'Tambah data Standar Biaya');
INSERT INTO `log_aktifitas` VALUES (274, 'belanja', 'Superadmin UNTAG', 'Superadmin', '2023-02-26 14:31:55', 'Tambah data Dashboard');
INSERT INTO `log_aktifitas` VALUES (275, 'belanja', 'Superadmin UNTAG', 'Superadmin', '2023-02-26 14:31:59', 'Tambah data Dashboard');
INSERT INTO `log_aktifitas` VALUES (276, 'belanja', 'Superadmin UNTAG', 'Superadmin', '2023-02-26 14:31:59', 'Tambah data Dashboard');
INSERT INTO `log_aktifitas` VALUES (277, 'belanja', 'Superadmin UNTAG', 'Superadmin', '2023-02-26 14:32:00', 'Tambah data Dashboard');
INSERT INTO `log_aktifitas` VALUES (278, 'belanja', 'Superadmin UNTAG', 'Superadmin', '2023-02-26 14:32:40', 'Tambah data Dashboard');
INSERT INTO `log_aktifitas` VALUES (279, 'belanja', 'Superadmin UNTAG', 'Superadmin', '2023-02-26 14:33:46', 'Tambah data Dashboard');
INSERT INTO `log_aktifitas` VALUES (280, 'belanja', 'Superadmin UNTAG', 'Superadmin', '2023-02-26 14:33:49', 'Tambah data Dashboard');
INSERT INTO `log_aktifitas` VALUES (281, 'belanja', 'Superadmin UNTAG', 'Superadmin', '2023-02-26 14:33:50', 'Tambah data Dashboard');
INSERT INTO `log_aktifitas` VALUES (282, 'belanja', 'Superadmin UNTAG', 'Superadmin', '2023-02-26 14:35:05', 'Tambah data Dashboard');
INSERT INTO `log_aktifitas` VALUES (283, 'belanja', 'Superadmin UNTAG', 'Superadmin', '2023-02-26 14:35:45', 'Tambah data Dashboard');
INSERT INTO `log_aktifitas` VALUES (284, 'belanja', 'Superadmin UNTAG', 'Superadmin', '2023-02-26 14:36:16', 'Tambah data Dashboard');
INSERT INTO `log_aktifitas` VALUES (285, 'belanja', 'Superadmin UNTAG', 'Superadmin', '2023-02-26 14:39:01', 'Tambah data Dashboard');
INSERT INTO `log_aktifitas` VALUES (286, 'belanja', 'Superadmin UNTAG', 'Superadmin', '2023-02-26 14:39:11', 'Tambah data Dashboard');
INSERT INTO `log_aktifitas` VALUES (287, 'belanja', 'Superadmin UNTAG', 'Superadmin', '2023-02-26 14:39:21', 'Tambah data Dashboard');
INSERT INTO `log_aktifitas` VALUES (288, 'belanja', 'Superadmin UNTAG', 'Superadmin', '2023-02-26 14:42:10', 'Tambah data Dashboard');
INSERT INTO `log_aktifitas` VALUES (289, 'belanja', 'Superadmin UNTAG', 'Superadmin', '2023-02-26 15:05:06', 'Tambah data Dashboard');
INSERT INTO `log_aktifitas` VALUES (290, 'belanja', 'Superadmin UNTAG', 'Superadmin', '2023-02-26 15:06:18', 'Tambah data Dashboard');
INSERT INTO `log_aktifitas` VALUES (291, 'belanja', 'Superadmin UNTAG', 'Superadmin', '2023-02-26 15:06:19', 'Tambah data Dashboard');
INSERT INTO `log_aktifitas` VALUES (292, 'belanja', 'Superadmin UNTAG', 'Superadmin', '2023-02-26 15:07:07', 'Tambah data Dashboard');
INSERT INTO `log_aktifitas` VALUES (293, 'belanja', 'Superadmin UNTAG', 'Superadmin', '2023-02-26 15:07:12', 'Tambah data Dashboard');
INSERT INTO `log_aktifitas` VALUES (294, 'belanja', 'Superadmin UNTAG', 'Superadmin', '2023-02-26 15:07:13', 'Tambah data Dashboard');
INSERT INTO `log_aktifitas` VALUES (295, 'belanja', 'Superadmin UNTAG', 'Superadmin', '2023-02-26 15:07:16', 'Tambah data Dashboard');
INSERT INTO `log_aktifitas` VALUES (296, 'belanja', 'Superadmin UNTAG', 'Superadmin', '2023-02-26 15:07:18', 'Tambah data Dashboard');
INSERT INTO `log_aktifitas` VALUES (297, 'belanja', 'Superadmin UNTAG', 'Superadmin', '2023-02-26 15:07:23', 'Tambah data Dashboard');
INSERT INTO `log_aktifitas` VALUES (298, 'belanja', 'Superadmin UNTAG', 'Superadmin', '2023-02-26 15:07:26', 'Tambah data Dashboard');
INSERT INTO `log_aktifitas` VALUES (299, 'belanja', 'Superadmin UNTAG', 'Superadmin', '2023-02-26 15:07:27', 'Tambah data Dashboard');
INSERT INTO `log_aktifitas` VALUES (300, 'belanja', 'Superadmin UNTAG', 'Superadmin', '2023-02-26 15:08:10', 'Tambah data Dashboard');
INSERT INTO `log_aktifitas` VALUES (301, 'belanja', 'Superadmin UNTAG', 'Superadmin', '2023-02-26 15:08:12', 'Tambah data Dashboard');
INSERT INTO `log_aktifitas` VALUES (302, 'belanja', 'Superadmin UNTAG', 'Superadmin', '2023-02-26 15:08:13', 'Tambah data Dashboard');
INSERT INTO `log_aktifitas` VALUES (303, 'belanja', 'Superadmin UNTAG', 'Superadmin', '2023-02-26 15:09:21', 'Tambah data Dashboard');
INSERT INTO `log_aktifitas` VALUES (304, 'belanja', 'Superadmin UNTAG', 'Superadmin', '2023-02-26 15:09:22', 'Tambah data Dashboard');
INSERT INTO `log_aktifitas` VALUES (305, 'belanja', 'Superadmin UNTAG', 'Superadmin', '2023-02-26 15:09:23', 'Tambah data Dashboard');
INSERT INTO `log_aktifitas` VALUES (306, 'belanja', 'Superadmin UNTAG', 'Superadmin', '2023-02-26 15:14:48', 'Tambah data Dashboard');
INSERT INTO `log_aktifitas` VALUES (307, 'belanja', 'Superadmin UNTAG', 'Superadmin', '2023-02-26 15:14:51', 'Tambah data Dashboard');
INSERT INTO `log_aktifitas` VALUES (308, 'belanja', 'Superadmin UNTAG', 'Superadmin', '2023-02-26 15:14:53', 'Tambah data Dashboard');
INSERT INTO `log_aktifitas` VALUES (309, 'belanja', 'Superadmin UNTAG', 'Superadmin', '2023-02-26 15:14:53', 'Tambah data Dashboard');
INSERT INTO `log_aktifitas` VALUES (310, 'belanja', 'Superadmin UNTAG', 'Superadmin', '2023-02-26 15:15:27', 'Tambah data Dashboard');
INSERT INTO `log_aktifitas` VALUES (311, 'belanja', 'Superadmin UNTAG', 'Superadmin', '2023-02-26 15:15:28', 'Tambah data Dashboard');
INSERT INTO `log_aktifitas` VALUES (312, 'belanja', 'Superadmin UNTAG', 'Superadmin', '2023-02-26 15:15:29', 'Tambah data Dashboard');
INSERT INTO `log_aktifitas` VALUES (313, 'belanja', 'Superadmin UNTAG', 'Superadmin', '2023-02-26 15:15:42', 'Tambah data Dashboard');
INSERT INTO `log_aktifitas` VALUES (314, 'belanja', 'Superadmin UNTAG', 'Superadmin', '2023-02-26 15:15:45', 'Tambah data Dashboard');
INSERT INTO `log_aktifitas` VALUES (315, 'belanja', 'Superadmin UNTAG', 'Superadmin', '2023-02-26 15:15:46', 'Tambah data Dashboard');
INSERT INTO `log_aktifitas` VALUES (316, 'belanja', 'Superadmin UNTAG', 'Superadmin', '2023-02-26 15:23:42', 'Tambah data Dashboard');
INSERT INTO `log_aktifitas` VALUES (317, 'belanja', 'Superadmin UNTAG', 'Superadmin', '2023-02-26 15:23:43', 'Tambah data Dashboard');
INSERT INTO `log_aktifitas` VALUES (318, 'belanja', 'Superadmin UNTAG', 'Superadmin', '2023-02-26 15:23:44', 'Tambah data Dashboard');
INSERT INTO `log_aktifitas` VALUES (319, 'belanja', 'Superadmin UNTAG', 'Superadmin', '2023-02-26 15:25:31', 'Tambah data Dashboard');
INSERT INTO `log_aktifitas` VALUES (320, 'belanja', 'Superadmin UNTAG', 'Superadmin', '2023-02-26 15:33:06', 'Tambah data Dashboard');
INSERT INTO `log_aktifitas` VALUES (321, 'biaya', 'Superadmin UNTAG', 'Superadmin', '2023-02-26 16:15:47', 'Tambah data Standar Biaya');
INSERT INTO `log_aktifitas` VALUES (322, 'biaya', 'Superadmin UNTAG', 'Superadmin', '2023-02-26 16:15:49', 'Tambah data Standar Biaya');
INSERT INTO `log_aktifitas` VALUES (323, 'biaya', 'Superadmin UNTAG', 'Superadmin', '2023-02-26 16:16:07', 'Tambah data Standar Biaya');
INSERT INTO `log_aktifitas` VALUES (324, 'biaya', 'Superadmin UNTAG', 'Superadmin', '2023-02-26 16:16:13', 'Tambah data Standar Biaya');
INSERT INTO `log_aktifitas` VALUES (325, 'belanja', 'Superadmin UNTAG', 'Superadmin', '2023-02-26 16:23:54', 'Tambah data Dashboard');
INSERT INTO `log_aktifitas` VALUES (326, 'belanja', 'Superadmin UNTAG', 'Superadmin', '2023-02-26 16:24:21', 'Tambah data Dashboard');
INSERT INTO `log_aktifitas` VALUES (327, 'belanja', 'Superadmin UNTAG', 'Superadmin', '2023-02-26 16:24:50', 'Tambah data Dashboard');
INSERT INTO `log_aktifitas` VALUES (328, 'belanja', 'Superadmin UNTAG', 'Superadmin', '2023-02-26 16:26:34', 'Tambah data Dashboard');
INSERT INTO `log_aktifitas` VALUES (329, 'belanja', 'Superadmin UNTAG', 'Superadmin', '2023-02-26 16:27:15', 'Tambah data Dashboard');
INSERT INTO `log_aktifitas` VALUES (330, 'belanja', 'Superadmin UNTAG', 'Superadmin', '2023-02-26 16:27:45', 'Tambah data Dashboard');
INSERT INTO `log_aktifitas` VALUES (331, 'belanja', 'Superadmin UNTAG', 'Superadmin', '2023-02-26 16:30:29', 'Tambah data Dashboard');
INSERT INTO `log_aktifitas` VALUES (332, 'belanja', 'Superadmin UNTAG', 'Superadmin', '2023-02-26 16:30:34', 'Tambah data Dashboard');
INSERT INTO `log_aktifitas` VALUES (333, 'belanja', 'Superadmin UNTAG', 'Superadmin', '2023-02-26 16:30:40', 'Tambah data Dashboard');
INSERT INTO `log_aktifitas` VALUES (334, 'belanja', 'Superadmin UNTAG', 'Superadmin', '2023-02-26 16:30:40', 'Tambah data Dashboard');
INSERT INTO `log_aktifitas` VALUES (335, 'belanja', 'Superadmin UNTAG', 'Superadmin', '2023-02-26 16:30:42', 'Tambah data Dashboard');
INSERT INTO `log_aktifitas` VALUES (336, 'belanja', 'Superadmin UNTAG', 'Superadmin', '2023-02-26 16:30:43', 'Tambah data Dashboard');
INSERT INTO `log_aktifitas` VALUES (337, 'belanja', 'Superadmin UNTAG', 'Superadmin', '2023-02-26 16:30:45', 'Tambah data Dashboard');
INSERT INTO `log_aktifitas` VALUES (338, 'belanja', 'Superadmin UNTAG', 'Superadmin', '2023-02-26 16:31:14', 'Tambah data Dashboard');
INSERT INTO `log_aktifitas` VALUES (339, 'belanja', 'Superadmin UNTAG', 'Superadmin', '2023-02-26 16:31:27', 'Tambah data Dashboard');
INSERT INTO `log_aktifitas` VALUES (340, 'belanja', 'Superadmin UNTAG', 'Superadmin', '2023-02-26 16:31:33', 'Tambah data Dashboard');
INSERT INTO `log_aktifitas` VALUES (341, 'belanja', 'Superadmin UNTAG', 'Superadmin', '2023-02-26 16:31:35', 'Tambah data Dashboard');
INSERT INTO `log_aktifitas` VALUES (342, 'belanja', 'Superadmin UNTAG', 'Superadmin', '2023-02-26 16:31:37', 'Tambah data Dashboard');
INSERT INTO `log_aktifitas` VALUES (343, 'belanja', 'Superadmin UNTAG', 'Superadmin', '2023-02-26 16:31:38', 'Tambah data Dashboard');
INSERT INTO `log_aktifitas` VALUES (344, 'belanja', 'Superadmin UNTAG', 'Superadmin', '2023-02-26 16:31:39', 'Tambah data Dashboard');
INSERT INTO `log_aktifitas` VALUES (345, 'belanja', 'Superadmin UNTAG', 'Superadmin', '2023-02-26 16:37:08', 'Tambah data Dashboard');
INSERT INTO `log_aktifitas` VALUES (346, 'belanja', 'Superadmin UNTAG', 'Superadmin', '2023-02-26 16:38:36', 'Tambah data Dashboard');
INSERT INTO `log_aktifitas` VALUES (347, 'belanja', 'Superadmin UNTAG', 'Superadmin', '2023-02-26 16:38:54', 'Tambah data Dashboard');
INSERT INTO `log_aktifitas` VALUES (348, 'belanja', 'Superadmin UNTAG', 'Superadmin', '2023-02-26 16:46:58', 'Tambah data Dashboard');
INSERT INTO `log_aktifitas` VALUES (349, 'belanja', 'Superadmin UNTAG', 'Superadmin', '2023-02-26 16:47:01', 'Tambah data Dashboard');
INSERT INTO `log_aktifitas` VALUES (350, 'belanja', 'Superadmin UNTAG', 'Superadmin', '2023-02-26 16:47:02', 'Tambah data Dashboard');
INSERT INTO `log_aktifitas` VALUES (351, 'belanja', 'Superadmin UNTAG', 'Superadmin', '2023-02-26 16:47:03', 'Tambah data Dashboard');
INSERT INTO `log_aktifitas` VALUES (352, 'biaya', 'Superadmin UNTAG', 'Superadmin', '2023-02-26 16:47:29', 'Tambah data Standar Biaya');
INSERT INTO `log_aktifitas` VALUES (353, 'biaya', 'Superadmin UNTAG', 'Superadmin', '2023-02-26 16:47:30', 'Tambah data Standar Biaya');
INSERT INTO `log_aktifitas` VALUES (354, 'biaya', 'Superadmin UNTAG', 'Superadmin', '2023-02-26 16:48:02', 'Tambah data Standar Biaya');
INSERT INTO `log_aktifitas` VALUES (355, 'biaya', 'Superadmin UNTAG', 'Superadmin', '2023-02-26 16:48:04', 'Tambah data Standar Biaya');
INSERT INTO `log_aktifitas` VALUES (356, 'biaya', 'Superadmin UNTAG', 'Superadmin', '2023-02-26 16:48:06', 'Tambah data Standar Biaya');
INSERT INTO `log_aktifitas` VALUES (357, 'satuan', 'Superadmin UNTAG', 'Superadmin', '2023-02-26 16:48:23', 'Tambah data Satuan');
INSERT INTO `log_aktifitas` VALUES (358, 'belanja', 'Superadmin UNTAG', 'Superadmin', '2023-02-26 16:48:58', 'Tambah data Dashboard');
INSERT INTO `log_aktifitas` VALUES (359, 'belanja', 'Superadmin UNTAG', 'Superadmin', '2023-02-26 16:49:00', 'Tambah data Dashboard');
INSERT INTO `log_aktifitas` VALUES (360, 'belanja', 'Superadmin UNTAG', 'Superadmin', '2023-02-26 16:49:01', 'Tambah data Dashboard');
INSERT INTO `log_aktifitas` VALUES (361, 'biaya', 'Superadmin UNTAG', 'Superadmin', '2023-02-26 16:49:02', 'Tambah data Standar Biaya');
INSERT INTO `log_aktifitas` VALUES (362, 'biaya', 'Superadmin UNTAG', 'Superadmin', '2023-02-26 16:49:09', 'Tambah data Standar Biaya');
INSERT INTO `log_aktifitas` VALUES (363, 'biaya', 'Superadmin UNTAG', 'Superadmin', '2023-02-26 16:49:12', 'Tambah data Standar Biaya');
INSERT INTO `log_aktifitas` VALUES (364, 'belanja', 'Superadmin UNTAG', 'Superadmin', '2023-02-26 16:50:09', 'Tambah data Dashboard');
INSERT INTO `log_aktifitas` VALUES (365, 'belanja', 'Superadmin UNTAG', 'Superadmin', '2023-02-26 16:54:17', 'Tambah data Dashboard');
INSERT INTO `log_aktifitas` VALUES (366, 'belanja', 'Superadmin UNTAG', 'Superadmin', '2023-02-26 17:03:44', 'Tambah data Dashboard');
INSERT INTO `log_aktifitas` VALUES (367, 'belanja', 'Superadmin UNTAG', 'Superadmin', '2023-02-26 17:03:50', 'Tambah data Dashboard');
INSERT INTO `log_aktifitas` VALUES (368, 'belanja', 'Superadmin UNTAG', 'Superadmin', '2023-02-26 17:04:07', 'Tambah data Dashboard');
INSERT INTO `log_aktifitas` VALUES (369, 'belanja', 'Superadmin UNTAG', 'Superadmin', '2023-02-26 17:04:16', 'Tambah data Dashboard');
INSERT INTO `log_aktifitas` VALUES (370, 'belanja', 'Superadmin UNTAG', 'Superadmin', '2023-02-26 17:15:28', 'Tambah data Dashboard');
INSERT INTO `log_aktifitas` VALUES (371, 'belanja', 'Superadmin UNTAG', 'Superadmin', '2023-02-26 17:15:36', 'Tambah data Dashboard');
INSERT INTO `log_aktifitas` VALUES (372, 'belanja', 'Superadmin UNTAG', 'Superadmin', '2023-02-26 17:15:37', 'Tambah data Dashboard');
INSERT INTO `log_aktifitas` VALUES (373, 'biaya', 'Superadmin UNTAG', 'Superadmin', '2023-02-26 17:15:44', 'Tambah data Standar Biaya');
INSERT INTO `log_aktifitas` VALUES (374, 'biaya', 'Superadmin UNTAG', 'Superadmin', '2023-02-26 17:15:46', 'Tambah data Standar Biaya');
INSERT INTO `log_aktifitas` VALUES (375, 'biaya', 'Superadmin UNTAG', 'Superadmin', '2023-02-26 17:15:50', 'Tambah data Standar Biaya');
INSERT INTO `log_aktifitas` VALUES (376, 'biaya', 'Superadmin UNTAG', 'Superadmin', '2023-02-26 17:15:51', 'Tambah data Standar Biaya');
INSERT INTO `log_aktifitas` VALUES (377, 'biaya', 'Superadmin UNTAG', 'Superadmin', '2023-02-26 17:15:53', 'Tambah data Standar Biaya');
INSERT INTO `log_aktifitas` VALUES (378, 'belanja', 'Superadmin UNTAG', 'Superadmin', '2023-02-26 17:16:00', 'Tambah data Dashboard');
INSERT INTO `log_aktifitas` VALUES (379, 'belanja', 'Superadmin UNTAG', 'Superadmin', '2023-02-26 17:17:40', 'Tambah data Dashboard');
INSERT INTO `log_aktifitas` VALUES (380, 'belanja', 'Superadmin UNTAG', 'Superadmin', '2023-02-26 17:17:42', 'Tambah data Dashboard');
INSERT INTO `log_aktifitas` VALUES (381, 'biaya', 'Superadmin UNTAG', 'Superadmin', '2023-02-26 17:19:52', 'Tambah data Standar Biaya');
INSERT INTO `log_aktifitas` VALUES (382, 'belanja', 'Superadmin UNTAG', 'Superadmin', '2023-02-26 17:20:11', 'Tambah data Dashboard');
INSERT INTO `log_aktifitas` VALUES (383, 'belanja', 'Superadmin UNTAG', 'Superadmin', '2023-02-26 17:20:42', 'Tambah data Dashboard');
INSERT INTO `log_aktifitas` VALUES (384, 'belanja', 'Superadmin UNTAG', 'Superadmin', '2023-02-26 17:58:36', 'Tambah data Dashboard');
INSERT INTO `log_aktifitas` VALUES (385, 'belanja', 'Superadmin UNTAG', 'Superadmin', '2023-02-26 17:58:38', 'Tambah data Dashboard');
INSERT INTO `log_aktifitas` VALUES (386, 'biaya', 'Superadmin UNTAG', 'Superadmin', '2023-02-26 17:58:44', 'Tambah data Standar Biaya');
INSERT INTO `log_aktifitas` VALUES (387, 'belanja', 'Superadmin UNTAG', 'Superadmin', '2023-02-26 17:58:51', 'Tambah data Dashboard');
INSERT INTO `log_aktifitas` VALUES (388, 'belanja', 'Superadmin UNTAG', 'Superadmin', '2023-02-26 18:01:00', 'Tambah data Dashboard');
INSERT INTO `log_aktifitas` VALUES (389, 'belanja', 'Superadmin UNTAG', 'Superadmin', '2023-02-26 18:01:05', 'Tambah data Dashboard');
INSERT INTO `log_aktifitas` VALUES (390, 'biaya', 'Superadmin UNTAG', 'Superadmin', '2023-02-26 18:02:35', 'Tambah data Standar Biaya');
INSERT INTO `log_aktifitas` VALUES (391, 'belanja', 'Superadmin UNTAG', 'Superadmin', '2023-02-26 18:02:43', 'Tambah data Dashboard');
INSERT INTO `log_aktifitas` VALUES (392, 'belanja', 'Superadmin UNTAG', 'Superadmin', '2023-02-26 18:04:31', 'Tambah data Dashboard');
INSERT INTO `log_aktifitas` VALUES (393, 'belanja', 'Superadmin UNTAG', 'Superadmin', '2023-02-26 18:04:34', 'Tambah data Dashboard');
INSERT INTO `log_aktifitas` VALUES (394, 'biaya', 'Superadmin UNTAG', 'Superadmin', '2023-02-26 18:07:01', 'Tambah data Standar Biaya');
INSERT INTO `log_aktifitas` VALUES (395, 'belanja', 'Superadmin UNTAG', 'Superadmin', '2023-02-26 18:07:05', 'Tambah data Dashboard');
INSERT INTO `log_aktifitas` VALUES (396, 'belanja', 'Superadmin UNTAG', 'Superadmin', '2023-02-26 18:07:15', 'Tambah data Dashboard');
INSERT INTO `log_aktifitas` VALUES (397, 'belanja', 'Superadmin UNTAG', 'Superadmin', '2023-02-26 18:08:32', 'Tambah data Dashboard');
INSERT INTO `log_aktifitas` VALUES (398, 'kegiatan', 'Superadmin UNTAG', 'Superadmin', '2023-02-27 04:18:32', 'Hapus data Kegiatan');
INSERT INTO `log_aktifitas` VALUES (399, 'belanja', 'Superadmin UNTAG', 'Superadmin', '2023-02-27 04:19:30', 'Hapus data Dashboard');
INSERT INTO `log_aktifitas` VALUES (400, 'belanja', 'Superadmin UNTAG', 'Superadmin', '2023-02-27 04:46:38', 'Tambah data Dashboard');
INSERT INTO `log_aktifitas` VALUES (401, 'belanja', 'Superadmin UNTAG', 'Superadmin', '2023-02-27 04:46:42', 'Tambah data Dashboard');
INSERT INTO `log_aktifitas` VALUES (402, 'belanja', 'Superadmin UNTAG', 'Superadmin', '2023-02-27 05:05:13', 'Tambah data Dashboard');
INSERT INTO `log_aktifitas` VALUES (403, 'belanja', 'Superadmin UNTAG', 'Superadmin', '2023-02-27 05:05:27', 'Tambah data Dashboard');
INSERT INTO `log_aktifitas` VALUES (404, 'belanja', 'Superadmin UNTAG', 'Superadmin', '2023-02-27 05:05:28', 'Tambah data Dashboard');
INSERT INTO `log_aktifitas` VALUES (405, 'belanja', 'Superadmin UNTAG', 'Superadmin', '2023-02-27 05:05:47', 'Tambah data Dashboard');
INSERT INTO `log_aktifitas` VALUES (406, 'belanja', 'Superadmin UNTAG', 'Superadmin', '2023-02-27 05:15:19', 'Tambah data Dashboard');
INSERT INTO `log_aktifitas` VALUES (407, 'belanja', 'Superadmin UNTAG', 'Superadmin', '2023-02-27 05:15:28', 'Tambah data Dashboard');
INSERT INTO `log_aktifitas` VALUES (408, 'belanja', 'Superadmin UNTAG', 'Superadmin', '2023-02-27 05:31:22', 'Tambah data Dashboard');
INSERT INTO `log_aktifitas` VALUES (409, 'belanja', 'Superadmin UNTAG', 'Superadmin', '2023-02-27 05:31:29', 'Tambah data Dashboard');
INSERT INTO `log_aktifitas` VALUES (410, 'belanja', 'Superadmin UNTAG', 'Superadmin', '2023-02-27 05:31:57', 'Tambah data Dashboard');
INSERT INTO `log_aktifitas` VALUES (411, 'belanja', 'Superadmin UNTAG', 'Superadmin', '2023-02-27 05:32:41', 'Tambah data Dashboard');
INSERT INTO `log_aktifitas` VALUES (412, 'belanja', 'Superadmin UNTAG', 'Superadmin', '2023-02-27 05:32:59', 'Tambah data Dashboard');
INSERT INTO `log_aktifitas` VALUES (413, 'belanja', 'Superadmin UNTAG', 'Superadmin', '2023-02-27 05:33:32', 'Tambah data Dashboard');
INSERT INTO `log_aktifitas` VALUES (414, 'belanja', 'Superadmin UNTAG', 'Superadmin', '2023-02-27 05:33:41', 'Tambah data Dashboard');
INSERT INTO `log_aktifitas` VALUES (415, 'belanja', 'Superadmin UNTAG', 'Superadmin', '2023-02-27 07:43:06', 'Tambah data Dashboard');
INSERT INTO `log_aktifitas` VALUES (416, 'belanja', 'Superadmin UNTAG', 'Superadmin', '2023-02-27 07:43:18', 'Tambah data Dashboard');
INSERT INTO `log_aktifitas` VALUES (417, 'belanja', 'Superadmin UNTAG', 'Superadmin', '2023-02-27 07:43:18', 'Tambah data Dashboard');
INSERT INTO `log_aktifitas` VALUES (418, 'belanja', 'Superadmin UNTAG', 'Superadmin', '2023-02-27 07:43:19', 'Tambah data Dashboard');
INSERT INTO `log_aktifitas` VALUES (419, 'belanja', 'Superadmin UNTAG', 'Superadmin', '2023-02-27 07:43:24', 'Tambah data Dashboard');
INSERT INTO `log_aktifitas` VALUES (420, 'belanja', 'Superadmin UNTAG', 'Superadmin', '2023-02-27 15:10:58', 'Tambah data Dashboard');
INSERT INTO `log_aktifitas` VALUES (421, 'belanja', 'Superadmin UNTAG', 'Superadmin', '2023-02-27 15:11:00', 'Tambah data Dashboard');
INSERT INTO `log_aktifitas` VALUES (422, 'belanja', 'Superadmin UNTAG', 'Superadmin', '2023-02-27 15:11:27', 'Tambah data Dashboard');
INSERT INTO `log_aktifitas` VALUES (423, 'biaya', 'Superadmin UNTAG', 'Superadmin', '2023-02-27 15:12:57', 'Tambah data Standar Biaya');
INSERT INTO `log_aktifitas` VALUES (424, 'belanja', 'Superadmin UNTAG', 'Superadmin', '2023-02-27 15:17:41', 'Tambah data Dashboard');
INSERT INTO `log_aktifitas` VALUES (425, 'belanja', 'Superadmin UNTAG', 'Superadmin', '2023-02-27 15:18:39', 'Tambah data Dashboard');
INSERT INTO `log_aktifitas` VALUES (426, 'belanja', 'Superadmin UNTAG', 'Superadmin', '2023-02-27 15:19:07', 'Tambah data Dashboard');
INSERT INTO `log_aktifitas` VALUES (427, 'belanja', 'Superadmin UNTAG', 'Superadmin', '2023-02-27 15:19:42', 'Tambah data Dashboard');
INSERT INTO `log_aktifitas` VALUES (428, 'belanja', 'Superadmin UNTAG', 'Superadmin', '2023-02-27 15:20:50', 'Tambah data Dashboard');
INSERT INTO `log_aktifitas` VALUES (429, 'belanja', 'Superadmin UNTAG', 'Superadmin', '2023-02-27 15:23:44', 'Tambah data Dashboard');
INSERT INTO `log_aktifitas` VALUES (430, 'belanja', 'Superadmin UNTAG', 'Superadmin', '2023-02-27 15:23:56', 'Tambah data Dashboard');
INSERT INTO `log_aktifitas` VALUES (431, 'belanja', 'Superadmin UNTAG', 'Superadmin', '2023-02-27 15:24:03', 'Tambah data Dashboard');
INSERT INTO `log_aktifitas` VALUES (432, 'belanja', 'Superadmin UNTAG', 'Superadmin', '2023-02-27 15:24:10', 'Tambah data Dashboard');
INSERT INTO `log_aktifitas` VALUES (433, 'belanja', 'Superadmin UNTAG', 'Superadmin', '2023-02-27 15:24:13', 'Tambah data Dashboard');
INSERT INTO `log_aktifitas` VALUES (434, 'belanja', 'Superadmin UNTAG', 'Superadmin', '2023-02-27 15:24:15', 'Tambah data Dashboard');
INSERT INTO `log_aktifitas` VALUES (435, 'belanja', 'Superadmin UNTAG', 'Superadmin', '2023-02-27 15:24:16', 'Tambah data Dashboard');
INSERT INTO `log_aktifitas` VALUES (436, 'belanja', 'Superadmin UNTAG', 'Superadmin', '2023-02-27 15:24:17', 'Tambah data Dashboard');
INSERT INTO `log_aktifitas` VALUES (437, 'belanja', 'Superadmin UNTAG', 'Superadmin', '2023-02-27 15:32:02', 'Tambah data Dashboard');
INSERT INTO `log_aktifitas` VALUES (438, 'belanja', 'Superadmin UNTAG', 'Superadmin', '2023-02-27 15:38:49', 'Tambah data Dashboard');
INSERT INTO `log_aktifitas` VALUES (439, 'belanja', 'Superadmin UNTAG', 'Superadmin', '2023-02-27 15:39:35', 'Tambah data Dashboard');
INSERT INTO `log_aktifitas` VALUES (440, 'belanja', 'Superadmin UNTAG', 'Superadmin', '2023-02-27 15:45:16', 'Tambah data Dashboard');
INSERT INTO `log_aktifitas` VALUES (441, 'belanja', 'Superadmin UNTAG', 'Superadmin', '2023-02-27 15:45:27', 'Tambah data Dashboard');
INSERT INTO `log_aktifitas` VALUES (442, 'belanja', 'Superadmin UNTAG', 'Superadmin', '2023-02-27 15:57:36', 'Tambah data Dashboard');
INSERT INTO `log_aktifitas` VALUES (443, 'belanja', 'Superadmin UNTAG', 'Superadmin', '2023-02-27 15:58:10', 'Tambah data Dashboard');
INSERT INTO `log_aktifitas` VALUES (444, 'belanja', 'Superadmin UNTAG', 'Superadmin', '2023-02-27 15:58:44', 'Tambah data Dashboard');
INSERT INTO `log_aktifitas` VALUES (445, 'belanja', 'Superadmin UNTAG', 'Superadmin', '2023-02-27 15:58:55', 'Tambah data Dashboard');
INSERT INTO `log_aktifitas` VALUES (446, 'belanja', 'Superadmin UNTAG', 'Superadmin', '2023-02-27 16:00:44', 'Tambah data Dashboard');
INSERT INTO `log_aktifitas` VALUES (447, 'belanja', 'Superadmin UNTAG', 'Superadmin', '2023-02-27 16:01:02', 'Tambah data Dashboard');
INSERT INTO `log_aktifitas` VALUES (448, 'biaya', 'Superadmin UNTAG', 'Superadmin', '2023-02-27 16:01:13', 'Tambah data Standar Biaya');
INSERT INTO `log_aktifitas` VALUES (449, 'belanja', 'Superadmin UNTAG', 'Superadmin', '2023-02-27 16:03:37', 'Tambah data Dashboard');
INSERT INTO `log_aktifitas` VALUES (450, 'biaya', 'Superadmin UNTAG', 'Superadmin', '2023-02-27 16:03:40', 'Tambah data Standar Biaya');
INSERT INTO `log_aktifitas` VALUES (451, 'biaya', 'Superadmin UNTAG', 'Superadmin', '2023-02-27 16:03:41', 'Tambah data Standar Biaya');
INSERT INTO `log_aktifitas` VALUES (452, 'belanja', 'Superadmin UNTAG', 'Superadmin', '2023-02-27 16:03:46', 'Tambah data Dashboard');
INSERT INTO `log_aktifitas` VALUES (453, 'biaya', 'Superadmin UNTAG', 'Superadmin', '2023-02-27 16:03:48', 'Tambah data Standar Biaya');
INSERT INTO `log_aktifitas` VALUES (454, 'belanja', 'Superadmin UNTAG', 'Superadmin', '2023-02-27 16:05:19', 'Tambah data Dashboard');
INSERT INTO `log_aktifitas` VALUES (455, 'belanja', 'Superadmin UNTAG', 'Superadmin', '2023-02-27 16:10:08', 'Tambah data Dashboard');
INSERT INTO `log_aktifitas` VALUES (456, 'belanja', 'Superadmin UNTAG', 'Superadmin', '2023-02-27 16:12:13', 'Tambah data Dashboard');
INSERT INTO `log_aktifitas` VALUES (457, 'belanja', 'Superadmin UNTAG', 'Superadmin', '2023-02-27 16:13:41', 'Tambah data Dashboard');
INSERT INTO `log_aktifitas` VALUES (458, 'belanja', 'Superadmin UNTAG', 'Superadmin', '2023-02-27 16:13:44', 'Tambah data Dashboard');
INSERT INTO `log_aktifitas` VALUES (459, 'belanja', 'Superadmin UNTAG', 'Superadmin', '2023-02-27 16:13:47', 'Tambah data Dashboard');
INSERT INTO `log_aktifitas` VALUES (460, 'belanja', 'Superadmin UNTAG', 'Superadmin', '2023-02-27 16:14:15', 'Tambah data Dashboard');
INSERT INTO `log_aktifitas` VALUES (461, 'belanja', 'Superadmin UNTAG', 'Superadmin', '2023-02-27 16:14:23', 'Tambah data Dashboard');
INSERT INTO `log_aktifitas` VALUES (462, 'belanja', 'Superadmin UNTAG', 'Superadmin', '2023-02-27 16:14:26', 'Tambah data Dashboard');
INSERT INTO `log_aktifitas` VALUES (463, 'belanja', 'Superadmin UNTAG', 'Superadmin', '2023-02-27 16:15:40', 'Tambah data Dashboard');
INSERT INTO `log_aktifitas` VALUES (464, 'belanja', 'Superadmin UNTAG', 'Superadmin', '2023-02-27 16:15:44', 'Tambah data Dashboard');
INSERT INTO `log_aktifitas` VALUES (465, 'belanja', 'Superadmin UNTAG', 'Superadmin', '2023-02-27 16:16:01', 'Tambah data Dashboard');
INSERT INTO `log_aktifitas` VALUES (466, 'belanja', 'Superadmin UNTAG', 'Superadmin', '2023-02-27 16:16:04', 'Tambah data Dashboard');
INSERT INTO `log_aktifitas` VALUES (467, 'belanja', 'Superadmin UNTAG', 'Superadmin', '2023-02-27 16:20:53', 'Tambah data Dashboard');
INSERT INTO `log_aktifitas` VALUES (468, 'belanja', 'Superadmin UNTAG', 'Superadmin', '2023-02-27 16:21:45', 'Tambah data Dashboard');
INSERT INTO `log_aktifitas` VALUES (469, 'belanja', 'Superadmin UNTAG', 'Superadmin', '2023-02-27 16:21:49', 'Tambah data Dashboard');
INSERT INTO `log_aktifitas` VALUES (470, 'belanja', 'Superadmin UNTAG', 'Superadmin', '2023-02-27 16:28:31', 'Hapus data Dashboard');
INSERT INTO `log_aktifitas` VALUES (471, 'belanja', 'Superadmin UNTAG', 'Superadmin', '2023-02-27 16:28:53', 'Hapus data Dashboard');
INSERT INTO `log_aktifitas` VALUES (472, 'belanja', 'Superadmin UNTAG', 'Superadmin', '2023-02-27 16:30:33', 'Hapus data Dashboard');
INSERT INTO `log_aktifitas` VALUES (473, 'belanja', 'Superadmin UNTAG', 'Superadmin', '2023-02-27 16:31:25', 'Hapus data Dashboard');
INSERT INTO `log_aktifitas` VALUES (474, 'belanja', 'Superadmin UNTAG', 'Superadmin', '2023-02-27 16:31:40', 'Hapus data Dashboard');
INSERT INTO `log_aktifitas` VALUES (475, 'belanja', 'Superadmin UNTAG', 'Superadmin', '2023-02-27 16:33:17', 'Tambah data Dashboard');
INSERT INTO `log_aktifitas` VALUES (476, 'belanja', 'Superadmin UNTAG', 'Superadmin', '2023-02-27 16:33:43', 'Hapus data Dashboard');
INSERT INTO `log_aktifitas` VALUES (477, 'belanja', 'Superadmin UNTAG', 'Superadmin', '2023-02-27 16:34:21', 'Hapus data Dashboard');
INSERT INTO `log_aktifitas` VALUES (478, 'belanja', 'Superadmin UNTAG', 'Superadmin', '2023-02-27 16:34:57', 'Hapus data Dashboard');
INSERT INTO `log_aktifitas` VALUES (479, 'belanja', 'Superadmin UNTAG', 'Superadmin', '2023-02-27 16:36:14', 'Tambah data Dashboard');
INSERT INTO `log_aktifitas` VALUES (480, 'belanja', 'Superadmin UNTAG', 'Superadmin', '2023-02-27 16:36:19', 'Tambah data Dashboard');
INSERT INTO `log_aktifitas` VALUES (481, 'biaya', 'Superadmin UNTAG', 'Superadmin', '2023-02-27 16:36:23', 'Tambah data Standar Biaya');
INSERT INTO `log_aktifitas` VALUES (482, 'belanja', 'Superadmin UNTAG', 'Superadmin', '2023-02-27 16:36:45', 'Tambah data Dashboard');
INSERT INTO `log_aktifitas` VALUES (483, 'belanja', 'Superadmin UNTAG', 'Superadmin', '2023-02-27 16:36:56', 'Tambah data Dashboard');
INSERT INTO `log_aktifitas` VALUES (484, 'belanja', 'Superadmin UNTAG', 'Superadmin', '2023-02-27 16:38:24', 'Tambah data Dashboard');
INSERT INTO `log_aktifitas` VALUES (485, 'belanja', 'Superadmin UNTAG', 'Superadmin', '2023-02-27 16:39:15', 'Tambah data Dashboard');
INSERT INTO `log_aktifitas` VALUES (486, 'belanja', 'Superadmin UNTAG', 'Superadmin', '2023-02-27 16:40:02', 'Tambah data Dashboard');
INSERT INTO `log_aktifitas` VALUES (487, 'belanja', 'Superadmin UNTAG', 'Superadmin', '2023-02-27 16:41:34', 'Tambah data Dashboard');
INSERT INTO `log_aktifitas` VALUES (488, 'belanja', 'Superadmin UNTAG', 'Superadmin', '2023-02-27 16:42:06', 'Hapus data Dashboard');
INSERT INTO `log_aktifitas` VALUES (489, 'belanja', 'Superadmin UNTAG', 'Superadmin', '2023-02-28 08:31:48', 'Tambah data Dashboard');
INSERT INTO `log_aktifitas` VALUES (490, 'belanja', 'Superadmin UNTAG', 'Superadmin', '2023-02-28 08:32:06', 'Tambah data Dashboard');
INSERT INTO `log_aktifitas` VALUES (491, 'belanja', 'Superadmin UNTAG', 'Superadmin', '2023-02-28 08:32:24', 'Tambah data Dashboard');
INSERT INTO `log_aktifitas` VALUES (492, 'belanja', 'Superadmin UNTAG', 'Superadmin', '2023-02-28 08:33:47', 'Tambah data Dashboard');
INSERT INTO `log_aktifitas` VALUES (493, 'belanja', 'Superadmin UNTAG', 'Superadmin', '2023-02-28 08:34:14', 'Tambah data Dashboard');
INSERT INTO `log_aktifitas` VALUES (494, 'belanja', 'Superadmin UNTAG', 'Superadmin', '2023-02-28 08:35:07', 'Tambah data Dashboard');
INSERT INTO `log_aktifitas` VALUES (495, 'belanja', 'Superadmin UNTAG', 'Superadmin', '2023-02-28 08:36:01', 'Tambah data Dashboard');
INSERT INTO `log_aktifitas` VALUES (496, 'belanja', 'Superadmin UNTAG', 'Superadmin', '2023-02-28 08:36:16', 'Tambah data Dashboard');
INSERT INTO `log_aktifitas` VALUES (497, 'belanja', 'Superadmin UNTAG', 'Superadmin', '2023-02-28 08:36:20', 'Tambah data Dashboard');
INSERT INTO `log_aktifitas` VALUES (498, 'belanja', 'Superadmin UNTAG', 'Superadmin', '2023-02-28 08:37:54', 'Tambah data Dashboard');
INSERT INTO `log_aktifitas` VALUES (499, 'belanja', 'Superadmin UNTAG', 'Superadmin', '2023-02-28 08:38:04', 'Tambah data Dashboard');
INSERT INTO `log_aktifitas` VALUES (500, 'belanja', 'Superadmin UNTAG', 'Superadmin', '2023-02-28 08:38:08', 'Tambah data Dashboard');
INSERT INTO `log_aktifitas` VALUES (501, 'belanja', 'Superadmin UNTAG', 'Superadmin', '2023-02-28 08:51:44', 'Tambah data Dashboard');
INSERT INTO `log_aktifitas` VALUES (502, 'belanja', 'Superadmin UNTAG', 'Superadmin', '2023-02-28 08:51:51', 'Tambah data Dashboard');
INSERT INTO `log_aktifitas` VALUES (503, 'belanja', 'Superadmin UNTAG', 'Superadmin', '2023-02-28 08:52:41', 'Tambah data Dashboard');
INSERT INTO `log_aktifitas` VALUES (504, 'belanja', 'Superadmin UNTAG', 'Superadmin', '2023-02-28 08:52:41', 'Tambah data Dashboard');
INSERT INTO `log_aktifitas` VALUES (505, 'belanja', 'Superadmin UNTAG', 'Superadmin', '2023-02-28 08:52:43', 'Tambah data Dashboard');
INSERT INTO `log_aktifitas` VALUES (506, 'belanja', 'Superadmin UNTAG', 'Superadmin', '2023-02-28 08:52:44', 'Tambah data Dashboard');
INSERT INTO `log_aktifitas` VALUES (507, 'belanja', 'Superadmin UNTAG', 'Superadmin', '2023-02-28 08:52:47', 'Tambah data Dashboard');
INSERT INTO `log_aktifitas` VALUES (508, 'biaya', 'Superadmin UNTAG', 'Superadmin', '2023-02-28 08:52:51', 'Tambah data Standar Biaya');
INSERT INTO `log_aktifitas` VALUES (509, 'belanja', 'Superadmin UNTAG', 'Superadmin', '2023-02-28 08:53:00', 'Tambah data Dashboard');
INSERT INTO `log_aktifitas` VALUES (510, 'belanja', 'Superadmin UNTAG', 'Superadmin', '2023-02-28 08:53:10', 'Tambah data Dashboard');
INSERT INTO `log_aktifitas` VALUES (511, 'anggaran', 'Superadmin UNTAG', 'Superadmin', '2023-02-28 14:09:33', 'Hapus data Tahun Anggaran');
INSERT INTO `log_aktifitas` VALUES (512, 'anggaran', 'Superadmin UNTAG', 'Superadmin', '2023-02-28 14:10:07', 'Tambah data Tahun Anggaran');
INSERT INTO `log_aktifitas` VALUES (513, 'anggaran', 'Superadmin UNTAG', 'Superadmin', '2023-02-28 14:11:25', 'Update data Tahun Anggaran');
INSERT INTO `log_aktifitas` VALUES (514, 'anggaran', 'Superadmin UNTAG', 'Superadmin', '2023-02-28 14:12:13', 'Update data Tahun Anggaran');
INSERT INTO `log_aktifitas` VALUES (515, 'user', 'Superadmin UNTAG', 'Superadmin', '2023-02-28 15:09:07', 'Tambah data User Management');
INSERT INTO `log_aktifitas` VALUES (516, 'belanja', 'admin fakultas Kesenian', 'Admin Prodi', '2023-02-28 15:11:38', 'Tambah data Dashboard');
INSERT INTO `log_aktifitas` VALUES (517, 'belanja', 'admin fakultas Kesenian', 'Admin Prodi', '2023-02-28 15:11:42', 'Tambah data Dashboard');
INSERT INTO `log_aktifitas` VALUES (518, 'biaya', 'admin fakultas Kesenian', 'Admin Prodi', '2023-02-28 15:11:47', 'Tambah data Standar Biaya');
INSERT INTO `log_aktifitas` VALUES (519, 'belanja', 'admin fakultas Kesenian', 'Admin Prodi', '2023-02-28 15:11:52', 'Tambah data Dashboard');
INSERT INTO `log_aktifitas` VALUES (520, 'belanja', 'admin fakultas Kesenian', 'Admin Prodi', '2023-02-28 15:13:00', 'Tambah data Dashboard');
INSERT INTO `log_aktifitas` VALUES (521, 'belanja', 'admin fakultas Kesenian', 'Admin Prodi', '2023-02-28 15:14:29', 'Tambah data Dashboard');
INSERT INTO `log_aktifitas` VALUES (522, 'belanja', 'admin fakultas Kesenian', 'Admin Prodi', '2023-02-28 15:14:48', 'Tambah data Dashboard');
INSERT INTO `log_aktifitas` VALUES (523, 'belanja', 'admin fakultas Kesenian', 'Admin Prodi', '2023-02-28 15:14:51', 'Tambah data Dashboard');
INSERT INTO `log_aktifitas` VALUES (524, 'anggaran', 'admin fakultas Kesenian', 'Admin Prodi', '2023-02-28 15:18:53', 'Update data Tahun Anggaran');
INSERT INTO `log_aktifitas` VALUES (525, 'belanja', 'admin fakultas Kesenian', 'Admin Prodi', '2023-02-28 16:04:19', 'Tambah data Dashboard');
INSERT INTO `log_aktifitas` VALUES (526, 'belanja', 'admin fakultas Kesenian', 'Admin Prodi', '2023-02-28 16:04:22', 'Tambah data Dashboard');
INSERT INTO `log_aktifitas` VALUES (527, 'biaya', 'admin fakultas Kesenian', 'Admin Prodi', '2023-02-28 16:04:25', 'Tambah data Standar Biaya');
INSERT INTO `log_aktifitas` VALUES (528, 'belanja', 'admin fakultas Kesenian', 'Admin Prodi', '2023-02-28 16:04:38', 'Tambah data Dashboard');
INSERT INTO `log_aktifitas` VALUES (529, 'belanja', 'admin fakultas Kesenian', 'Admin Prodi', '2023-02-28 17:31:27', 'Tambah data Dashboard');
INSERT INTO `log_aktifitas` VALUES (530, 'belanja', 'admin fakultas Kesenian', 'Admin Prodi', '2023-02-28 17:33:30', 'Tambah data Dashboard');
INSERT INTO `log_aktifitas` VALUES (531, 'belanja', 'admin fakultas Kesenian', 'Admin Prodi', '2023-02-28 17:34:13', 'Tambah data Dashboard');
INSERT INTO `log_aktifitas` VALUES (532, 'belanja', 'admin fakultas Kesenian', 'Admin Prodi', '2023-02-28 17:34:54', 'Tambah data Dashboard');
INSERT INTO `log_aktifitas` VALUES (533, 'kegiatan', 'admin fakultas Kesenian', 'Admin Prodi', '2023-02-28 17:37:20', 'Tambah data Kegiatan');
INSERT INTO `log_aktifitas` VALUES (534, 'kegiatan', 'admin fakultas Kesenian', 'Admin Prodi', '2023-02-28 17:41:40', 'Tambah data Kegiatan');
INSERT INTO `log_aktifitas` VALUES (535, 'kegiatan', 'admin fakultas Kesenian', 'Admin Prodi', '2023-02-28 17:42:20', 'Tambah data Kegiatan');
INSERT INTO `log_aktifitas` VALUES (536, 'kegiatan', 'admin fakultas Kesenian', 'Admin Prodi', '2023-02-28 17:42:26', 'Tambah data Kegiatan');
INSERT INTO `log_aktifitas` VALUES (537, 'kegiatan', 'admin fakultas Kesenian', 'Admin Prodi', '2023-02-28 17:44:25', 'Tambah data Kegiatan');
INSERT INTO `log_aktifitas` VALUES (538, 'kegiatan', 'admin fakultas Kesenian', 'Admin Prodi', '2023-02-28 17:45:14', 'Tambah data Kegiatan');
INSERT INTO `log_aktifitas` VALUES (539, 'kegiatan', 'admin fakultas Kesenian', 'Admin Prodi', '2023-02-28 17:45:16', 'Tambah data Kegiatan');
INSERT INTO `log_aktifitas` VALUES (540, 'kegiatan', 'admin fakultas Kesenian', 'Admin Prodi', '2023-02-28 17:45:53', 'Tambah data Kegiatan');
INSERT INTO `log_aktifitas` VALUES (541, 'kegiatan', 'admin fakultas Kesenian', 'Admin Prodi', '2023-02-28 17:46:04', 'Tambah data Kegiatan');
INSERT INTO `log_aktifitas` VALUES (542, 'kegiatan', 'admin fakultas Kesenian', 'Admin Prodi', '2023-02-28 17:46:11', 'Tambah data Kegiatan');
INSERT INTO `log_aktifitas` VALUES (543, 'kegiatan', 'admin fakultas Kesenian', 'Admin Prodi', '2023-02-28 17:46:14', 'Tambah data Kegiatan');
INSERT INTO `log_aktifitas` VALUES (544, 'kegiatan', 'admin fakultas Kesenian', 'Admin Prodi', '2023-02-28 17:57:37', 'Tambah data Kegiatan');
INSERT INTO `log_aktifitas` VALUES (545, 'kegiatan', 'admin fakultas Kesenian', 'Admin Prodi', '2023-02-28 17:57:39', 'Update data Kegiatan');
INSERT INTO `log_aktifitas` VALUES (546, 'kegiatan', 'admin fakultas Kesenian', 'Admin Prodi', '2023-02-28 17:57:57', 'Tambah data Kegiatan');
INSERT INTO `log_aktifitas` VALUES (547, 'kegiatan', 'admin fakultas Kesenian', 'Admin Prodi', '2023-02-28 17:58:31', 'Tambah data Kegiatan');
INSERT INTO `log_aktifitas` VALUES (548, 'kegiatan', 'admin fakultas Kesenian', 'Admin Prodi', '2023-02-28 17:58:33', 'Update data Kegiatan');
INSERT INTO `log_aktifitas` VALUES (549, 'kegiatan', 'admin fakultas Kesenian', 'Admin Prodi', '2023-02-28 17:58:41', 'Tambah data Kegiatan');
INSERT INTO `log_aktifitas` VALUES (550, 'kegiatan', 'admin fakultas Kesenian', 'Admin Prodi', '2023-02-28 17:58:43', 'Update data Kegiatan');
INSERT INTO `log_aktifitas` VALUES (551, 'kegiatan', 'admin fakultas Kesenian', 'Admin Prodi', '2023-02-28 17:59:19', 'Tambah data Kegiatan');
INSERT INTO `log_aktifitas` VALUES (552, 'kegiatan', 'admin fakultas Kesenian', 'Admin Prodi', '2023-02-28 18:00:20', 'Tambah data Kegiatan');
INSERT INTO `log_aktifitas` VALUES (553, 'kegiatan', 'admin fakultas Kesenian', 'Admin Prodi', '2023-02-28 18:00:39', 'Tambah data Kegiatan');
INSERT INTO `log_aktifitas` VALUES (554, 'kegiatan', 'admin fakultas Kesenian', 'Admin Prodi', '2023-02-28 18:01:11', 'Tambah data Kegiatan');
INSERT INTO `log_aktifitas` VALUES (555, 'kegiatan', 'admin fakultas Kesenian', 'Admin Prodi', '2023-02-28 18:01:46', 'Tambah data Kegiatan');
INSERT INTO `log_aktifitas` VALUES (556, 'kegiatan', 'admin fakultas Kesenian', 'Admin Prodi', '2023-02-28 18:01:48', 'Tambah data Kegiatan');
INSERT INTO `log_aktifitas` VALUES (557, 'kegiatan', 'admin fakultas Kesenian', 'Admin Prodi', '2023-02-28 18:01:59', 'Update data Kegiatan');
INSERT INTO `log_aktifitas` VALUES (558, 'kegiatan', 'admin fakultas Kesenian', 'Admin Prodi', '2023-02-28 18:05:22', 'Tambah data Kegiatan');
INSERT INTO `log_aktifitas` VALUES (559, 'kegiatan', 'admin fakultas Kesenian', 'Admin Prodi', '2023-02-28 18:05:28', 'Update data Kegiatan');
INSERT INTO `log_aktifitas` VALUES (560, 'belanja', 'admin fakultas Kesenian', 'Admin Prodi', '2023-03-02 07:57:56', 'Tambah data Rincian Belanja');
INSERT INTO `log_aktifitas` VALUES (561, 'belanja', 'admin fakultas Kesenian', 'Admin Prodi', '2023-03-02 07:58:08', 'Tambah data Rincian Belanja');
INSERT INTO `log_aktifitas` VALUES (562, 'belanja', 'admin fakultas Kesenian', 'Admin Prodi', '2023-03-02 07:58:11', 'Tambah data Rincian Belanja');
INSERT INTO `log_aktifitas` VALUES (563, 'biaya', 'admin fakultas Kesenian', 'Admin Prodi', '2023-03-02 07:58:15', 'Tambah data Standar Biaya');
INSERT INTO `log_aktifitas` VALUES (564, 'belanja', 'admin fakultas Kesenian', 'Admin Prodi', '2023-03-02 07:58:26', 'Tambah data Rincian Belanja');
INSERT INTO `log_aktifitas` VALUES (565, 'belanja', 'admin fakultas Kesenian', 'Admin Prodi', '2023-03-02 07:58:30', 'Tambah data Rincian Belanja');
INSERT INTO `log_aktifitas` VALUES (566, 'belanja', 'admin fakultas Kesenian', 'Admin Prodi', '2023-03-02 08:18:09', 'Tambah data Rincian Belanja');
INSERT INTO `log_aktifitas` VALUES (567, 'belanja', 'admin fakultas Kesenian', 'Admin Prodi', '2023-03-02 08:18:22', 'Tambah data Rincian Belanja');
INSERT INTO `log_aktifitas` VALUES (568, 'belanja', 'admin fakultas Kesenian', 'Admin Prodi', '2023-03-02 08:27:41', 'Tambah data Rincian Belanja');
INSERT INTO `log_aktifitas` VALUES (569, 'belanja', 'admin fakultas Kesenian', 'Admin Prodi', '2023-03-02 08:27:46', 'Tambah data Rincian Belanja');
INSERT INTO `log_aktifitas` VALUES (570, 'belanja', 'admin fakultas Kesenian', 'Admin Prodi', '2023-03-02 08:27:46', 'Tambah data Rincian Belanja');
INSERT INTO `log_aktifitas` VALUES (571, 'belanja', 'admin fakultas Kesenian', 'Admin Prodi', '2023-03-02 08:27:57', 'Tambah data Rincian Belanja');
INSERT INTO `log_aktifitas` VALUES (572, 'belanja', 'admin fakultas Kesenian', 'Admin Prodi', '2023-03-02 08:32:43', 'Tambah data Rincian Belanja');
INSERT INTO `log_aktifitas` VALUES (573, 'kegiatan', 'Superadmin UNTAG', 'Superadmin', '2023-03-02 14:48:09', 'Tambah data Kegiatan');
INSERT INTO `log_aktifitas` VALUES (574, 'kegiatan', 'Superadmin UNTAG', 'Superadmin', '2023-03-02 14:48:15', 'Tambah data Kegiatan');
INSERT INTO `log_aktifitas` VALUES (575, 'belanja', 'Superadmin UNTAG', 'Superadmin', '2023-03-02 15:13:22', 'Tambah data Rincian Belanja');
INSERT INTO `log_aktifitas` VALUES (576, 'belanja', 'Superadmin UNTAG', 'Superadmin', '2023-03-02 15:49:55', 'Tambah data Rincian Belanja');
INSERT INTO `log_aktifitas` VALUES (577, 'biaya', 'Superadmin UNTAG', 'Superadmin', '2023-03-02 15:50:59', 'Tambah data Standar Biaya');
INSERT INTO `log_aktifitas` VALUES (578, 'biaya', 'Superadmin UNTAG', 'Superadmin', '2023-03-02 15:53:17', 'Tambah data Standar Biaya');
INSERT INTO `log_aktifitas` VALUES (579, 'belanja', 'Superadmin UNTAG', 'Superadmin', '2023-03-02 16:02:39', 'Tambah data Rincian Belanja');
INSERT INTO `log_aktifitas` VALUES (580, 'belanja', 'Superadmin UNTAG', 'Superadmin', '2023-03-02 16:02:41', 'Tambah data Rincian Belanja');
INSERT INTO `log_aktifitas` VALUES (581, 'biaya', 'Superadmin UNTAG', 'Superadmin', '2023-03-02 16:02:49', 'Tambah data Standar Biaya');
INSERT INTO `log_aktifitas` VALUES (582, 'belanja', 'Superadmin UNTAG', 'Superadmin', '2023-03-02 16:02:56', 'Tambah data Rincian Belanja');
INSERT INTO `log_aktifitas` VALUES (583, 'belanja', 'Superadmin UNTAG', 'Superadmin', '2023-03-02 16:03:59', 'Tambah data Rincian Belanja');
INSERT INTO `log_aktifitas` VALUES (584, 'belanja', 'Superadmin UNTAG', 'Superadmin', '2023-03-02 16:04:10', 'Tambah data Rincian Belanja');
INSERT INTO `log_aktifitas` VALUES (585, 'belanja', 'Superadmin UNTAG', 'Superadmin', '2023-03-02 16:04:13', 'Tambah data Rincian Belanja');
INSERT INTO `log_aktifitas` VALUES (586, 'biaya', 'Superadmin UNTAG', 'Superadmin', '2023-03-02 16:04:19', 'Tambah data Standar Biaya');
INSERT INTO `log_aktifitas` VALUES (587, 'belanja', 'Superadmin UNTAG', 'Superadmin', '2023-03-02 16:04:36', 'Tambah data Rincian Belanja');
INSERT INTO `log_aktifitas` VALUES (588, 'belanja', 'Superadmin UNTAG', 'Superadmin', '2023-03-02 16:04:56', 'Tambah data Rincian Belanja');
INSERT INTO `log_aktifitas` VALUES (589, 'belanja', 'Superadmin UNTAG', 'Superadmin', '2023-03-02 16:06:01', 'Tambah data Rincian Belanja');
INSERT INTO `log_aktifitas` VALUES (590, 'belanja', 'Superadmin UNTAG', 'Superadmin', '2023-03-02 16:07:09', 'Tambah data Rincian Belanja');
INSERT INTO `log_aktifitas` VALUES (591, 'belanja', 'Superadmin UNTAG', 'Superadmin', '2023-03-02 16:07:32', 'Tambah data Rincian Belanja');
INSERT INTO `log_aktifitas` VALUES (592, 'belanja', 'Superadmin UNTAG', 'Superadmin', '2023-03-02 16:07:57', 'Tambah data Rincian Belanja');
INSERT INTO `log_aktifitas` VALUES (593, 'belanja', 'Superadmin UNTAG', 'Superadmin', '2023-03-02 16:08:36', 'Tambah data Rincian Belanja');
INSERT INTO `log_aktifitas` VALUES (594, 'belanja', 'Superadmin UNTAG', 'Superadmin', '2023-03-02 16:17:33', 'Tambah data Rincian Belanja');
INSERT INTO `log_aktifitas` VALUES (595, 'belanja', 'Superadmin UNTAG', 'Superadmin', '2023-03-02 16:17:39', 'Tambah data Rincian Belanja');
INSERT INTO `log_aktifitas` VALUES (596, 'belanja', 'Superadmin UNTAG', 'Superadmin', '2023-03-02 16:17:42', 'Tambah data Rincian Belanja');
INSERT INTO `log_aktifitas` VALUES (597, 'kegiatan', 'Superadmin UNTAG', 'Superadmin', '2023-03-02 16:39:04', 'Tambah data Kegiatan');
INSERT INTO `log_aktifitas` VALUES (598, 'kegiatan', 'Superadmin UNTAG', 'Superadmin', '2023-03-02 16:39:17', 'Tambah data Kegiatan');
INSERT INTO `log_aktifitas` VALUES (599, 'kegiatan', 'Superadmin UNTAG', 'Superadmin', '2023-03-02 16:39:19', 'Tambah data Kegiatan');
INSERT INTO `log_aktifitas` VALUES (600, 'kegiatan', 'Superadmin UNTAG', 'Superadmin', '2023-03-02 16:39:25', 'Tambah data Kegiatan');
INSERT INTO `log_aktifitas` VALUES (601, 'kegiatan', 'Superadmin UNTAG', 'Superadmin', '2023-03-02 16:39:40', 'Tambah data Kegiatan');
INSERT INTO `log_aktifitas` VALUES (602, 'kegiatan', 'Superadmin UNTAG', 'Superadmin', '2023-03-02 16:42:51', 'Tambah data Kegiatan');
INSERT INTO `log_aktifitas` VALUES (603, 'kegiatan', 'Superadmin UNTAG', 'Superadmin', '2023-03-02 16:42:55', 'Tambah data Kegiatan');
INSERT INTO `log_aktifitas` VALUES (604, 'kegiatan', 'Superadmin UNTAG', 'Superadmin', '2023-03-02 16:43:20', 'Update data Kegiatan');
INSERT INTO `log_aktifitas` VALUES (605, 'kegiatan', 'Superadmin UNTAG', 'Superadmin', '2023-03-02 17:00:06', 'Update data Kegiatan');
INSERT INTO `log_aktifitas` VALUES (606, 'kegiatan', 'Superadmin UNTAG', 'Superadmin', '2023-03-02 17:00:33', 'Update data Kegiatan');
INSERT INTO `log_aktifitas` VALUES (607, 'kegiatan', 'Superadmin UNTAG', 'Superadmin', '2023-03-02 17:00:45', 'Update data Kegiatan');
INSERT INTO `log_aktifitas` VALUES (608, 'anggaran', 'Superadmin UNTAG', 'Superadmin', '2023-03-02 17:01:20', 'Update data Tahun Anggaran');
INSERT INTO `log_aktifitas` VALUES (609, 'belanja', 'admin fakultas Kesenian', 'Admin Prodi', '2023-03-02 17:03:03', 'Tambah data Rincian Belanja');
INSERT INTO `log_aktifitas` VALUES (610, 'belanja', 'admin fakultas Kesenian', 'Admin Prodi', '2023-03-02 17:03:57', 'Tambah data Rincian Belanja');
INSERT INTO `log_aktifitas` VALUES (611, 'belanja', 'admin fakultas Kesenian', 'Admin Prodi', '2023-03-02 17:03:59', 'Tambah data Rincian Belanja');
INSERT INTO `log_aktifitas` VALUES (612, 'biaya', 'admin fakultas Kesenian', 'Admin Prodi', '2023-03-02 17:04:16', 'Tambah data Standar Biaya');
INSERT INTO `log_aktifitas` VALUES (613, 'belanja', 'admin fakultas Kesenian', 'Admin Prodi', '2023-03-02 17:04:26', 'Tambah data Rincian Belanja');
INSERT INTO `log_aktifitas` VALUES (614, 'belanja', 'admin fakultas Kesenian', 'Admin Prodi', '2023-03-02 17:22:26', 'Tambah data Rincian Belanja');
INSERT INTO `log_aktifitas` VALUES (615, 'belanja', 'admin fakultas Kesenian', 'Admin Prodi', '2023-03-02 17:22:30', 'Tambah data Rincian Belanja');
INSERT INTO `log_aktifitas` VALUES (616, 'belanja', 'admin fakultas Kesenian', 'Admin Prodi', '2023-03-02 17:22:45', 'Tambah data Rincian Belanja');
INSERT INTO `log_aktifitas` VALUES (617, 'biaya', 'admin fakultas Kesenian', 'Admin Prodi', '2023-03-02 17:22:51', 'Tambah data Standar Biaya');
INSERT INTO `log_aktifitas` VALUES (618, 'belanja', 'admin fakultas Kesenian', 'Admin Prodi', '2023-03-02 17:22:56', 'Tambah data Rincian Belanja');
INSERT INTO `log_aktifitas` VALUES (619, 'belanja', 'admin fakultas Kesenian', 'Admin Prodi', '2023-03-02 17:43:27', 'Tambah data Rincian Belanja');
INSERT INTO `log_aktifitas` VALUES (620, 'biaya', 'admin fakultas Kesenian', 'Admin Prodi', '2023-03-02 17:43:29', 'Tambah data Standar Biaya');
INSERT INTO `log_aktifitas` VALUES (621, 'belanja', 'admin fakultas Kesenian', 'Admin Prodi', '2023-03-02 17:43:31', 'Tambah data Rincian Belanja');
INSERT INTO `log_aktifitas` VALUES (622, 'belanja', 'admin fakultas Kesenian', 'Admin Prodi', '2023-03-02 17:43:34', 'Tambah data Rincian Belanja');
INSERT INTO `log_aktifitas` VALUES (623, 'kegiatan', 'Superadmin UNTAG', 'Superadmin', '2023-03-02 17:55:19', 'Tambah data Kegiatan');
INSERT INTO `log_aktifitas` VALUES (624, 'kegiatan', 'Superadmin UNTAG', 'Superadmin', '2023-03-02 17:55:23', 'Tambah data Kegiatan');
INSERT INTO `log_aktifitas` VALUES (625, 'kegiatan', 'Superadmin UNTAG', 'Superadmin', '2023-03-02 17:55:37', 'Tambah data Kegiatan');
INSERT INTO `log_aktifitas` VALUES (626, 'kegiatan', 'Superadmin UNTAG', 'Superadmin', '2023-03-02 17:55:42', 'Tambah data Kegiatan');
INSERT INTO `log_aktifitas` VALUES (627, 'belanja', 'admin fakultas Kesenian', 'Admin Prodi', '2023-03-02 17:56:12', 'Tambah data Rincian Belanja');
INSERT INTO `log_aktifitas` VALUES (628, 'belanja', 'admin fakultas Kesenian', 'Admin Prodi', '2023-03-02 17:56:17', 'Tambah data Rincian Belanja');
INSERT INTO `log_aktifitas` VALUES (629, 'belanja', 'admin fakultas Kesenian', 'Admin Prodi', '2023-03-02 17:56:18', 'Tambah data Rincian Belanja');
INSERT INTO `log_aktifitas` VALUES (630, 'biaya', 'Superadmin UNTAG', 'Superadmin', '2023-03-02 17:57:22', 'Tambah data Standar Biaya');
INSERT INTO `log_aktifitas` VALUES (631, 'biaya', 'Superadmin UNTAG', 'Superadmin', '2023-03-02 17:57:26', 'Tambah data Standar Biaya');
INSERT INTO `log_aktifitas` VALUES (632, 'biaya', 'Superadmin UNTAG', 'Superadmin', '2023-03-02 17:57:28', 'Tambah data Standar Biaya');
INSERT INTO `log_aktifitas` VALUES (633, 'belanja', 'admin fakultas Kesenian', 'Admin Prodi', '2023-03-02 17:57:36', 'Tambah data Rincian Belanja');
INSERT INTO `log_aktifitas` VALUES (634, 'belanja', 'admin fakultas Kesenian', 'Admin Prodi', '2023-03-02 17:57:45', 'Tambah data Rincian Belanja');
INSERT INTO `log_aktifitas` VALUES (635, 'belanja', 'admin fakultas Kesenian', 'Admin Prodi', '2023-03-02 17:57:47', 'Tambah data Rincian Belanja');
INSERT INTO `log_aktifitas` VALUES (636, 'belanja', 'admin fakultas Kesenian', 'Admin Prodi', '2023-03-02 17:57:48', 'Tambah data Rincian Belanja');
INSERT INTO `log_aktifitas` VALUES (637, 'belanja', 'admin fakultas Kesenian', 'Admin Prodi', '2023-03-02 17:57:49', 'Tambah data Rincian Belanja');
INSERT INTO `log_aktifitas` VALUES (638, 'biaya', 'admin fakultas Kesenian', 'Admin Prodi', '2023-03-02 17:58:09', 'Tambah data Standar Biaya');
INSERT INTO `log_aktifitas` VALUES (639, 'belanja', 'admin fakultas Kesenian', 'Admin Prodi', '2023-03-02 17:58:18', 'Tambah data Rincian Belanja');
INSERT INTO `log_aktifitas` VALUES (640, 'kegiatan', 'Superadmin UNTAG', 'Superadmin', '2023-03-03 17:31:19', 'Tambah data Kegiatan');
INSERT INTO `log_aktifitas` VALUES (641, 'kegiatan', 'Superadmin UNTAG', 'Superadmin', '2023-03-03 17:31:25', 'Tambah data Kegiatan');
INSERT INTO `log_aktifitas` VALUES (642, 'kegiatan', 'Superadmin UNTAG', 'Superadmin', '2023-03-03 17:31:40', 'Tambah data Kegiatan');
INSERT INTO `log_aktifitas` VALUES (643, 'kegiatan', 'Superadmin UNTAG', 'Superadmin', '2023-03-03 17:31:44', 'Tambah data Kegiatan');
INSERT INTO `log_aktifitas` VALUES (644, 'kegiatan', 'Superadmin UNTAG', 'Superadmin', '2023-03-03 17:32:25', 'Tambah data Kegiatan');
INSERT INTO `log_aktifitas` VALUES (645, 'kegiatan', 'Superadmin UNTAG', 'Superadmin', '2023-03-03 17:32:30', 'Tambah data Kegiatan');
INSERT INTO `log_aktifitas` VALUES (646, 'kegiatan', 'Superadmin UNTAG', 'Superadmin', '2023-03-03 17:32:47', 'Tambah data Kegiatan');
INSERT INTO `log_aktifitas` VALUES (647, 'kegiatan', 'Superadmin UNTAG', 'Superadmin', '2023-03-03 17:32:52', 'Tambah data Kegiatan');
INSERT INTO `log_aktifitas` VALUES (648, 'kegiatan', 'Superadmin UNTAG', 'Superadmin', '2023-03-03 17:33:09', 'Tambah data Kegiatan');
INSERT INTO `log_aktifitas` VALUES (649, 'kegiatan', 'Superadmin UNTAG', 'Superadmin', '2023-03-03 17:33:36', 'Tambah data Kegiatan');
INSERT INTO `log_aktifitas` VALUES (650, 'kegiatan', 'Superadmin UNTAG', 'Superadmin', '2023-03-03 17:33:47', 'Tambah data Kegiatan');
INSERT INTO `log_aktifitas` VALUES (651, 'kegiatan', 'Superadmin UNTAG', 'Superadmin', '2023-03-03 17:34:00', 'Tambah data Kegiatan');
INSERT INTO `log_aktifitas` VALUES (652, 'kegiatan', 'Superadmin UNTAG', 'Superadmin', '2023-03-03 17:34:10', 'Tambah data Kegiatan');
INSERT INTO `log_aktifitas` VALUES (653, 'belanja', 'Superadmin UNTAG', 'Superadmin', '2023-03-03 17:34:35', 'Tambah data Rincian Belanja');
INSERT INTO `log_aktifitas` VALUES (654, 'belanja', 'Superadmin UNTAG', 'Superadmin', '2023-03-03 17:34:36', 'Tambah data Rincian Belanja');
INSERT INTO `log_aktifitas` VALUES (655, 'belanja', 'Admin Prodi 3 ', 'Admin Prodi', '2023-03-03 18:56:54', 'Tambah data Rincian Belanja');
INSERT INTO `log_aktifitas` VALUES (656, 'belanja', 'Admin Prodi 3 ', 'Admin Prodi', '2023-03-03 18:56:57', 'Tambah data Rincian Belanja');
INSERT INTO `log_aktifitas` VALUES (657, 'biaya', 'Admin Prodi 3 ', 'Admin Prodi', '2023-03-03 18:57:07', 'Tambah data Standar Biaya');
INSERT INTO `log_aktifitas` VALUES (658, 'belanja', 'Admin Prodi 3 ', 'Admin Prodi', '2023-03-03 18:57:13', 'Tambah data Rincian Belanja');
INSERT INTO `log_aktifitas` VALUES (659, 'belanja', 'Superadmin UNTAG', 'Superadmin', '2023-03-04 14:06:01', 'Tambah data Rincian Belanja');
INSERT INTO `log_aktifitas` VALUES (660, 'belanja', 'Superadmin UNTAG', 'Superadmin', '2023-03-04 14:09:37', 'Tambah data Rincian Belanja');
INSERT INTO `log_aktifitas` VALUES (661, 'belanja', 'Admin Prodi 3 ', 'Admin Prodi', '2023-03-04 14:19:11', 'Tambah data Rincian Belanja');
INSERT INTO `log_aktifitas` VALUES (662, 'belanja', 'Admin Prodi 3 ', 'Admin Prodi', '2023-03-04 14:19:14', 'Tambah data Rincian Belanja');
INSERT INTO `log_aktifitas` VALUES (663, 'belanja', 'Admin Prodi 3 ', 'Admin Prodi', '2023-03-04 14:19:15', 'Tambah data Rincian Belanja');
INSERT INTO `log_aktifitas` VALUES (664, 'belanja', 'Admin Prodi 3 ', 'Admin Prodi', '2023-03-04 14:19:19', 'Tambah data Rincian Belanja');
INSERT INTO `log_aktifitas` VALUES (665, 'biaya', 'Admin Prodi 3 ', 'Admin Prodi', '2023-03-04 14:19:25', 'Tambah data Standar Biaya');
INSERT INTO `log_aktifitas` VALUES (666, 'belanja', 'Admin Prodi 3 ', 'Admin Prodi', '2023-03-04 14:19:31', 'Tambah data Rincian Belanja');
INSERT INTO `log_aktifitas` VALUES (667, 'belanja', 'Admin Prodi 3 ', 'Admin Prodi', '2023-03-04 14:22:34', 'Hapus data Rincian Belanja');
INSERT INTO `log_aktifitas` VALUES (668, 'belanja', 'Admin Prodi 3 ', 'Admin Prodi', '2023-03-04 14:24:16', 'Tambah data Rincian Belanja');
INSERT INTO `log_aktifitas` VALUES (669, 'belanja', 'Admin Prodi 3 ', 'Admin Prodi', '2023-03-04 14:27:35', 'Tambah data Rincian Belanja');
INSERT INTO `log_aktifitas` VALUES (670, 'belanja', 'Admin Prodi 3 ', 'Admin Prodi', '2023-03-04 14:27:37', 'Tambah data Rincian Belanja');
INSERT INTO `log_aktifitas` VALUES (671, 'biaya', 'Admin Prodi 3 ', 'Admin Prodi', '2023-03-04 14:27:43', 'Tambah data Standar Biaya');
INSERT INTO `log_aktifitas` VALUES (672, 'belanja', 'Admin Prodi 3 ', 'Admin Prodi', '2023-03-04 14:27:46', 'Tambah data Rincian Belanja');
INSERT INTO `log_aktifitas` VALUES (673, 'belanja', 'Admin Prodi 2', 'Admin Prodi', '2023-03-04 14:29:50', 'Tambah data Rincian Belanja');
INSERT INTO `log_aktifitas` VALUES (674, 'belanja', 'Admin Prodi 2', 'Admin Prodi', '2023-03-04 14:29:52', 'Tambah data Rincian Belanja');
INSERT INTO `log_aktifitas` VALUES (675, 'belanja', 'Admin Prodi 2', 'Admin Prodi', '2023-03-04 14:29:54', 'Tambah data Rincian Belanja');
INSERT INTO `log_aktifitas` VALUES (676, 'belanja', 'Admin Prodi 2', 'Admin Prodi', '2023-03-04 14:30:01', 'Tambah data Rincian Belanja');
INSERT INTO `log_aktifitas` VALUES (677, 'biaya', 'Admin Prodi 2', 'Admin Prodi', '2023-03-04 14:30:02', 'Tambah data Standar Biaya');
INSERT INTO `log_aktifitas` VALUES (678, 'belanja', 'Admin Prodi 2', 'Admin Prodi', '2023-03-04 14:30:05', 'Tambah data Rincian Belanja');
INSERT INTO `log_aktifitas` VALUES (679, 'belanja', 'Admin Prodi 2', 'Admin Prodi', '2023-03-04 14:38:09', 'Tambah data Rincian Belanja');
INSERT INTO `log_aktifitas` VALUES (680, 'belanja', 'Admin Prodi 2', 'Admin Prodi', '2023-03-04 14:41:25', 'Tambah data Rincian Belanja');
INSERT INTO `log_aktifitas` VALUES (681, 'belanja', 'Admin Prodi 2', 'Admin Prodi', '2023-03-04 14:41:28', 'Tambah data Rincian Belanja');
INSERT INTO `log_aktifitas` VALUES (682, 'biaya', 'Admin Prodi 2', 'Admin Prodi', '2023-03-04 14:41:36', 'Tambah data Standar Biaya');
INSERT INTO `log_aktifitas` VALUES (683, 'belanja', 'Admin Prodi 2', 'Admin Prodi', '2023-03-04 14:41:39', 'Tambah data Rincian Belanja');
INSERT INTO `log_aktifitas` VALUES (684, 'belanja', 'Admin Prodi 2', 'Admin Prodi', '2023-03-04 14:43:27', 'Tambah data Rincian Belanja');
INSERT INTO `log_aktifitas` VALUES (685, 'belanja', 'Admin Prodi 2', 'Admin Prodi', '2023-03-04 15:04:56', 'Tambah data Rincian Belanja');
INSERT INTO `log_aktifitas` VALUES (686, 'belanja', 'Admin Prodi 2', 'Admin Prodi', '2023-03-04 15:08:11', 'Tambah data Rincian Belanja');
INSERT INTO `log_aktifitas` VALUES (687, 'belanja', 'Admin Prodi 2', 'Admin Prodi', '2023-03-04 15:22:37', 'Tambah data Rincian Belanja');
INSERT INTO `log_aktifitas` VALUES (688, 'belanja', 'Admin Prodi 2', 'Admin Prodi', '2023-03-04 15:35:39', 'Tambah data Rincian Belanja');
INSERT INTO `log_aktifitas` VALUES (689, 'belanja', 'Admin Prodi 2', 'Admin Prodi', '2023-03-04 15:36:20', 'Tambah data Rincian Belanja');
INSERT INTO `log_aktifitas` VALUES (690, 'belanja', 'Admin Prodi 2', 'Admin Prodi', '2023-03-04 15:36:42', 'Tambah data Rincian Belanja');
INSERT INTO `log_aktifitas` VALUES (691, 'belanja', 'Admin Prodi 2', 'Admin Prodi', '2023-03-04 15:36:45', 'Tambah data Rincian Belanja');
INSERT INTO `log_aktifitas` VALUES (692, 'belanja', 'Admin Prodi 2', 'Admin Prodi', '2023-03-04 15:36:48', 'Tambah data Rincian Belanja');
INSERT INTO `log_aktifitas` VALUES (693, 'belanja', 'Admin Prodi 2', 'Admin Prodi', '2023-03-04 15:36:54', 'Tambah data Rincian Belanja');
INSERT INTO `log_aktifitas` VALUES (694, 'belanja', 'Admin Prodi 2', 'Admin Prodi', '2023-03-04 15:36:58', 'Tambah data Rincian Belanja');
INSERT INTO `log_aktifitas` VALUES (695, 'belanja', 'Admin Prodi 2', 'Admin Prodi', '2023-03-04 15:41:18', 'Tambah data Rincian Belanja');
INSERT INTO `log_aktifitas` VALUES (696, 'belanja', 'Admin Prodi 2', 'Admin Prodi', '2023-03-04 15:41:21', 'Tambah data Rincian Belanja');
INSERT INTO `log_aktifitas` VALUES (697, 'belanja', 'Admin Prodi 2', 'Admin Prodi', '2023-03-04 15:41:40', 'Tambah data Rincian Belanja');
INSERT INTO `log_aktifitas` VALUES (698, 'belanja', 'Admin Prodi 2', 'Admin Prodi', '2023-03-04 15:41:43', 'Tambah data Rincian Belanja');
INSERT INTO `log_aktifitas` VALUES (699, 'belanja', 'Admin Prodi 2', 'Admin Prodi', '2023-03-04 15:41:47', 'Tambah data Rincian Belanja');
INSERT INTO `log_aktifitas` VALUES (700, 'belanja', 'Admin Prodi 2', 'Admin Prodi', '2023-03-04 16:09:27', 'Tambah data Rincian Belanja');
INSERT INTO `log_aktifitas` VALUES (701, 'belanja', 'Admin Prodi 2', 'Admin Prodi', '2023-03-04 16:09:31', 'Tambah data Rincian Belanja');
INSERT INTO `log_aktifitas` VALUES (702, 'belanja', 'Admin Prodi 2', 'Admin Prodi', '2023-03-04 16:10:53', 'Tambah data Rincian Belanja');
INSERT INTO `log_aktifitas` VALUES (703, 'belanja', 'Admin Prodi 2', 'Admin Prodi', '2023-03-04 16:10:57', 'Tambah data Rincian Belanja');
INSERT INTO `log_aktifitas` VALUES (704, 'belanja', 'Admin Prodi 2', 'Admin Prodi', '2023-03-04 16:23:13', 'Tambah data Rincian Belanja');
INSERT INTO `log_aktifitas` VALUES (705, 'belanja', 'Admin Prodi 2', 'Admin Prodi', '2023-03-04 16:23:16', 'Tambah data Rincian Belanja');
INSERT INTO `log_aktifitas` VALUES (706, 'belanja', 'Admin Prodi 2', 'Admin Prodi', '2023-03-04 17:18:24', 'Tambah data Rincian Belanja');
INSERT INTO `log_aktifitas` VALUES (707, 'belanja', 'Admin Prodi 2', 'Admin Prodi', '2023-03-04 17:18:29', 'Tambah data Rincian Belanja');
INSERT INTO `log_aktifitas` VALUES (708, 'belanja', 'Admin Prodi 2', 'Admin Prodi', '2023-03-04 17:22:02', 'Tambah data Rincian Belanja');
INSERT INTO `log_aktifitas` VALUES (709, 'belanja', 'Admin Prodi 2', 'Admin Prodi', '2023-03-04 17:22:04', 'Tambah data Rincian Belanja');
INSERT INTO `log_aktifitas` VALUES (710, 'belanja', 'Admin Prodi 2', 'Admin Prodi', '2023-03-04 17:23:03', 'Tambah data Rincian Belanja');
INSERT INTO `log_aktifitas` VALUES (711, 'belanja', 'Admin Prodi 2', 'Admin Prodi', '2023-03-04 17:23:07', 'Tambah data Rincian Belanja');
INSERT INTO `log_aktifitas` VALUES (712, 'belanja', 'Admin Prodi 2', 'Admin Prodi', '2023-03-04 17:49:36', 'Tambah data Rincian Belanja');
INSERT INTO `log_aktifitas` VALUES (713, 'belanja', 'Superadmin UNTAG', 'Superadmin', '2023-03-04 17:53:26', 'Tambah data Rincian Belanja');
INSERT INTO `log_aktifitas` VALUES (714, 'belanja', 'Admin Prodi 3 ', 'Admin Prodi', '2023-03-04 17:54:56', 'Tambah data Rincian Belanja');
INSERT INTO `log_aktifitas` VALUES (715, 'belanja', 'Admin Prodi 3 ', 'Admin Prodi', '2023-03-04 17:55:05', 'Tambah data Rincian Belanja');
INSERT INTO `log_aktifitas` VALUES (716, 'belanja', 'Admin Prodi 3 ', 'Admin Prodi', '2023-03-04 17:55:36', 'Tambah data Rincian Belanja');
INSERT INTO `log_aktifitas` VALUES (717, 'belanja', 'Admin Prodi 3 ', 'Admin Prodi', '2023-03-04 17:56:26', 'Tambah data Rincian Belanja');
INSERT INTO `log_aktifitas` VALUES (718, 'belanja', 'Admin Prodi 3 ', 'Admin Prodi', '2023-03-04 18:59:14', 'Tambah data Rincian Belanja');
INSERT INTO `log_aktifitas` VALUES (719, 'belanja', 'Admin Prodi 3 ', 'Admin Prodi', '2023-03-04 18:59:20', 'Tambah data Rincian Belanja');
INSERT INTO `log_aktifitas` VALUES (720, 'belanja', 'Admin Prodi 3 ', 'Admin Prodi', '2023-03-04 19:35:10', 'Tambah data Rincian Belanja');
INSERT INTO `log_aktifitas` VALUES (721, 'biaya', 'Superadmin UNTAG', 'Superadmin', '2023-03-06 14:37:24', 'Tambah data Standar Biaya');
INSERT INTO `log_aktifitas` VALUES (722, 'biaya', 'Superadmin UNTAG', 'Superadmin', '2023-03-06 14:39:20', 'Tambah data Standar Biaya');
INSERT INTO `log_aktifitas` VALUES (723, 'biaya', 'Superadmin UNTAG', 'Superadmin', '2023-03-06 14:39:39', 'Tambah data Standar Biaya');
INSERT INTO `log_aktifitas` VALUES (724, 'biaya', 'Superadmin UNTAG', 'Superadmin', '2023-03-06 14:50:52', 'Tambah data Standar Biaya');
INSERT INTO `log_aktifitas` VALUES (725, 'biaya', 'Superadmin UNTAG', 'Superadmin', '2023-03-06 14:51:54', 'Tambah data Standar Biaya');
INSERT INTO `log_aktifitas` VALUES (726, 'biaya', 'Superadmin UNTAG', 'Superadmin', '2023-03-06 14:53:01', 'Tambah data Standar Biaya');
INSERT INTO `log_aktifitas` VALUES (727, 'biaya', 'Superadmin UNTAG', 'Superadmin', '2023-03-06 14:54:29', 'Tambah data Standar Biaya');
INSERT INTO `log_aktifitas` VALUES (728, 'biaya', 'Superadmin UNTAG', 'Superadmin', '2023-03-06 15:00:21', 'Tambah data Standar Biaya');
INSERT INTO `log_aktifitas` VALUES (729, 'biaya', 'Superadmin UNTAG', 'Superadmin', '2023-03-06 15:01:17', 'Tambah data Standar Biaya');
INSERT INTO `log_aktifitas` VALUES (730, 'biaya', 'Superadmin UNTAG', 'Superadmin', '2023-03-06 15:01:36', 'Tambah data Standar Biaya');
INSERT INTO `log_aktifitas` VALUES (731, 'biaya', 'Superadmin UNTAG', 'Superadmin', '2023-03-06 15:02:35', 'Tambah data Standar Biaya');
INSERT INTO `log_aktifitas` VALUES (732, 'biaya', 'Superadmin UNTAG', 'Superadmin', '2023-03-06 15:03:03', 'Tambah data Standar Biaya');
INSERT INTO `log_aktifitas` VALUES (733, 'biaya', 'Superadmin UNTAG', 'Superadmin', '2023-03-06 15:04:20', 'Tambah data Standar Biaya');
INSERT INTO `log_aktifitas` VALUES (734, 'biaya', 'Superadmin UNTAG', 'Superadmin', '2023-03-06 15:08:53', 'Tambah data Standar Biaya');
INSERT INTO `log_aktifitas` VALUES (735, 'biaya', 'Superadmin UNTAG', 'Superadmin', '2023-03-06 15:09:04', 'Tambah data Standar Biaya');
INSERT INTO `log_aktifitas` VALUES (736, 'biaya', 'Superadmin UNTAG', 'Superadmin', '2023-03-06 15:10:04', 'Tambah data Standar Biaya');
INSERT INTO `log_aktifitas` VALUES (737, 'biaya', 'Superadmin UNTAG', 'Superadmin', '2023-03-06 15:12:38', 'Tambah data Standar Biaya');
INSERT INTO `log_aktifitas` VALUES (738, 'biaya', 'Superadmin UNTAG', 'Superadmin', '2023-03-06 15:13:00', 'Tambah data Standar Biaya');
INSERT INTO `log_aktifitas` VALUES (739, 'biaya', 'Superadmin UNTAG', 'Superadmin', '2023-03-06 15:14:43', 'Tambah data Standar Biaya');
INSERT INTO `log_aktifitas` VALUES (740, 'biaya', 'Superadmin UNTAG', 'Superadmin', '2023-03-06 15:15:11', 'Tambah data Standar Biaya');
INSERT INTO `log_aktifitas` VALUES (741, 'biaya', 'Superadmin UNTAG', 'Superadmin', '2023-03-06 15:37:09', 'Tambah data Standar Biaya');
INSERT INTO `log_aktifitas` VALUES (742, 'biaya', 'Superadmin UNTAG', 'Superadmin', '2023-03-06 15:38:52', 'Tambah data Standar Biaya');
INSERT INTO `log_aktifitas` VALUES (743, 'biaya', 'Superadmin UNTAG', 'Superadmin', '2023-03-06 15:39:57', 'Tambah data Standar Biaya');
INSERT INTO `log_aktifitas` VALUES (744, 'biaya', 'Superadmin UNTAG', 'Superadmin', '2023-03-06 15:40:28', 'Tambah data Standar Biaya');
INSERT INTO `log_aktifitas` VALUES (745, 'biaya', 'Superadmin UNTAG', 'Superadmin', '2023-03-06 15:41:01', 'Tambah data Standar Biaya');
INSERT INTO `log_aktifitas` VALUES (746, 'biaya', 'Superadmin UNTAG', 'Superadmin', '2023-03-06 15:42:06', 'Tambah data Standar Biaya');
INSERT INTO `log_aktifitas` VALUES (747, 'biaya', 'Superadmin UNTAG', 'Superadmin', '2023-03-06 15:43:05', 'Tambah data Standar Biaya');
INSERT INTO `log_aktifitas` VALUES (748, 'biaya', 'Superadmin UNTAG', 'Superadmin', '2023-03-06 15:43:30', 'Tambah data Standar Biaya');
INSERT INTO `log_aktifitas` VALUES (749, 'biaya', 'Superadmin UNTAG', 'Superadmin', '2023-03-06 15:44:08', 'Tambah data Standar Biaya');
INSERT INTO `log_aktifitas` VALUES (750, 'biaya', 'Superadmin UNTAG', 'Superadmin', '2023-03-06 15:46:18', 'Tambah data Standar Biaya');
INSERT INTO `log_aktifitas` VALUES (751, 'biaya', 'Superadmin UNTAG', 'Superadmin', '2023-03-06 15:47:30', 'Tambah data Standar Biaya');
INSERT INTO `log_aktifitas` VALUES (752, 'biaya', 'Superadmin UNTAG', 'Superadmin', '2023-03-06 15:47:55', 'Tambah data Standar Biaya');
INSERT INTO `log_aktifitas` VALUES (753, 'biaya', 'Superadmin UNTAG', 'Superadmin', '2023-03-06 15:48:43', 'Tambah data Standar Biaya');
INSERT INTO `log_aktifitas` VALUES (754, 'biaya', 'Superadmin UNTAG', 'Superadmin', '2023-03-06 15:48:52', 'Tambah data Standar Biaya');
INSERT INTO `log_aktifitas` VALUES (755, 'biaya', 'Superadmin UNTAG', 'Superadmin', '2023-03-06 15:52:32', 'Tambah data Standar Biaya');
INSERT INTO `log_aktifitas` VALUES (756, 'biaya', 'Superadmin UNTAG', 'Superadmin', '2023-03-06 15:55:28', 'Tambah data Standar Biaya');
INSERT INTO `log_aktifitas` VALUES (757, 'biaya', 'Superadmin UNTAG', 'Superadmin', '2023-03-06 15:56:16', 'Tambah data Standar Biaya');
INSERT INTO `log_aktifitas` VALUES (758, 'biaya', 'Superadmin UNTAG', 'Superadmin', '2023-03-06 16:03:01', 'Tambah data Standar Biaya');
INSERT INTO `log_aktifitas` VALUES (759, 'biaya', 'Superadmin UNTAG', 'Superadmin', '2023-03-06 16:03:15', 'Tambah data Standar Biaya');
INSERT INTO `log_aktifitas` VALUES (760, 'biaya', 'Superadmin UNTAG', 'Superadmin', '2023-03-06 16:03:26', 'Tambah data Standar Biaya');
INSERT INTO `log_aktifitas` VALUES (761, 'biaya', 'Superadmin UNTAG', 'Superadmin', '2023-03-06 16:03:45', 'Tambah data Standar Biaya');
INSERT INTO `log_aktifitas` VALUES (762, 'biaya', 'Superadmin UNTAG', 'Superadmin', '2023-03-06 16:18:00', 'Tambah data Standar Biaya');
INSERT INTO `log_aktifitas` VALUES (763, 'biaya', 'Superadmin UNTAG', 'Superadmin', '2023-03-06 16:18:25', 'Tambah data Standar Biaya');
INSERT INTO `log_aktifitas` VALUES (764, 'biaya', 'Superadmin UNTAG', 'Superadmin', '2023-03-06 16:24:23', 'Tambah data Standar Biaya');
INSERT INTO `log_aktifitas` VALUES (765, 'biaya', 'Superadmin UNTAG', 'Superadmin', '2023-03-06 16:25:35', 'Tambah data Standar Biaya');
INSERT INTO `log_aktifitas` VALUES (766, 'biaya', 'Superadmin UNTAG', 'Superadmin', '2023-03-06 16:25:54', 'Tambah data Standar Biaya');
INSERT INTO `log_aktifitas` VALUES (767, 'biaya', 'Superadmin UNTAG', 'Superadmin', '2023-03-06 16:26:00', 'Tambah data Standar Biaya');
INSERT INTO `log_aktifitas` VALUES (768, 'biaya', 'Superadmin UNTAG', 'Superadmin', '2023-03-06 16:26:12', 'Tambah data Standar Biaya');
INSERT INTO `log_aktifitas` VALUES (769, 'anggaran', 'Superadmin UNTAG', 'Superadmin', '2023-03-06 16:42:45', 'Hapus data Tahun Anggaran');
INSERT INTO `log_aktifitas` VALUES (770, 'anggaran', 'Superadmin UNTAG', 'Superadmin', '2023-03-06 16:47:08', 'Tambah data Tahun Anggaran');
INSERT INTO `log_aktifitas` VALUES (771, 'anggaran', 'Superadmin UNTAG', 'Superadmin', '2023-03-06 16:48:02', 'Tambah data Tahun Anggaran');
INSERT INTO `log_aktifitas` VALUES (772, 'anggaran', 'Superadmin UNTAG', 'Superadmin', '2023-03-06 16:51:30', 'Update data Tahun Anggaran');
INSERT INTO `log_aktifitas` VALUES (773, 'anggaran', 'Superadmin UNTAG', 'Superadmin', '2023-03-06 16:55:28', 'Update data Tahun Anggaran');
INSERT INTO `log_aktifitas` VALUES (774, 'anggaran', 'Superadmin UNTAG', 'Superadmin', '2023-03-06 16:56:09', 'Update data Tahun Anggaran');
INSERT INTO `log_aktifitas` VALUES (775, 'anggaran', 'Superadmin UNTAG', 'Superadmin', '2023-03-06 16:56:35', 'Update data Tahun Anggaran');
INSERT INTO `log_aktifitas` VALUES (776, 'anggaran', 'Superadmin UNTAG', 'Superadmin', '2023-03-06 16:58:54', 'Update data Tahun Anggaran');
INSERT INTO `log_aktifitas` VALUES (777, 'anggaran', 'Superadmin UNTAG', 'Superadmin', '2023-03-06 17:00:10', 'Update data Tahun Anggaran');
INSERT INTO `log_aktifitas` VALUES (778, 'anggaran', 'Superadmin UNTAG', 'Superadmin', '2023-03-06 17:00:26', 'Update data Tahun Anggaran');
INSERT INTO `log_aktifitas` VALUES (779, 'anggaran', 'Superadmin UNTAG', 'Superadmin', '2023-03-06 17:02:17', 'Update data Tahun Anggaran');
INSERT INTO `log_aktifitas` VALUES (780, 'pendapatan', 'Superadmin UNTAG', 'Superadmin', '2023-03-06 17:04:11', 'Update data Pendapatan');
INSERT INTO `log_aktifitas` VALUES (781, 'pendapatan', 'Superadmin UNTAG', 'Superadmin', '2023-03-06 17:07:41', 'Tambah data Pendapatan');
INSERT INTO `log_aktifitas` VALUES (782, 'pendapatan', 'Superadmin UNTAG', 'Superadmin', '2023-03-06 17:07:49', 'Update data Pendapatan');
INSERT INTO `log_aktifitas` VALUES (783, 'biaya', 'Superadmin UNTAG', 'Superadmin', '2023-03-06 17:14:32', 'Tambah data Standar Biaya');
INSERT INTO `log_aktifitas` VALUES (784, 'biaya', 'Superadmin UNTAG', 'Superadmin', '2023-03-06 17:16:00', 'Tambah data Standar Biaya');
INSERT INTO `log_aktifitas` VALUES (785, 'biaya', 'Superadmin UNTAG', 'Superadmin', '2023-03-06 17:16:44', 'Update data Standar Biaya');
INSERT INTO `log_aktifitas` VALUES (786, 'belanja', 'Superadmin UNTAG', 'Superadmin', '2023-03-06 17:17:20', 'Tambah data Rincian Belanja');
INSERT INTO `log_aktifitas` VALUES (787, 'anggaran', 'Superadmin UNTAG', 'Superadmin', '2023-03-06 17:20:34', 'Update data Tahun Anggaran');
INSERT INTO `log_aktifitas` VALUES (788, 'anggaran', 'Superadmin UNTAG', 'Superadmin', '2023-03-06 17:21:20', 'Update data Tahun Anggaran');
INSERT INTO `log_aktifitas` VALUES (789, 'anggaran', 'Superadmin UNTAG', 'Superadmin', '2023-03-06 17:21:35', 'Update data Tahun Anggaran');
INSERT INTO `log_aktifitas` VALUES (790, 'anggaran', 'Superadmin UNTAG', 'Superadmin', '2023-03-06 17:22:10', 'Update data Tahun Anggaran');
INSERT INTO `log_aktifitas` VALUES (791, 'anggaran', 'Superadmin UNTAG', 'Superadmin', '2023-03-06 17:22:35', 'Update data Tahun Anggaran');
INSERT INTO `log_aktifitas` VALUES (792, 'anggaran', 'Superadmin UNTAG', 'Superadmin', '2023-03-06 17:25:18', 'Update data Tahun Anggaran');
INSERT INTO `log_aktifitas` VALUES (793, 'biaya', 'Superadmin UNTAG', 'Superadmin', '2023-03-06 17:36:20', 'Tambah data Standar Biaya');
INSERT INTO `log_aktifitas` VALUES (794, 'biaya', 'Superadmin UNTAG', 'Superadmin', '2023-03-06 17:37:08', 'Tambah data Standar Biaya');
INSERT INTO `log_aktifitas` VALUES (795, 'biaya', 'Superadmin UNTAG', 'Superadmin', '2023-03-06 17:37:24', 'Tambah data Standar Biaya');
INSERT INTO `log_aktifitas` VALUES (796, 'biaya', 'Superadmin UNTAG', 'Superadmin', '2023-03-06 17:38:25', 'Tambah data Standar Biaya');
INSERT INTO `log_aktifitas` VALUES (797, 'biaya', 'Superadmin UNTAG', 'Superadmin', '2023-03-06 17:38:58', 'Tambah data Standar Biaya');
INSERT INTO `log_aktifitas` VALUES (798, 'biaya', 'Superadmin UNTAG', 'Superadmin', '2023-03-06 17:41:13', 'Tambah data Standar Biaya');
INSERT INTO `log_aktifitas` VALUES (799, 'biaya', 'Superadmin UNTAG', 'Superadmin', '2023-03-06 17:41:47', 'Tambah data Standar Biaya');
INSERT INTO `log_aktifitas` VALUES (800, 'belanja', 'Superadmin UNTAG', 'Superadmin', '2023-03-08 15:01:52', 'Tambah data Rincian Belanja');
INSERT INTO `log_aktifitas` VALUES (801, 'belanja', 'Superadmin UNTAG', 'Superadmin', '2023-03-08 15:01:55', 'Tambah data Rincian Belanja');
INSERT INTO `log_aktifitas` VALUES (802, 'belanja', 'Superadmin UNTAG', 'Superadmin', '2023-03-08 15:01:59', 'Tambah data Rincian Belanja');
INSERT INTO `log_aktifitas` VALUES (803, 'belanja', 'Superadmin UNTAG', 'Superadmin', '2023-03-08 15:02:27', 'Tambah data Rincian Belanja');
INSERT INTO `log_aktifitas` VALUES (804, 'belanja', 'Superadmin UNTAG', 'Superadmin', '2023-03-08 15:02:39', 'Tambah data Rincian Belanja');
INSERT INTO `log_aktifitas` VALUES (805, 'belanja', 'Superadmin UNTAG', 'Superadmin', '2023-03-08 15:04:00', 'Tambah data Rincian Belanja');
INSERT INTO `log_aktifitas` VALUES (806, 'belanja', 'Superadmin UNTAG', 'Superadmin', '2023-03-08 15:06:18', 'Tambah data Rincian Belanja');
INSERT INTO `log_aktifitas` VALUES (807, 'belanja', 'Superadmin UNTAG', 'Superadmin', '2023-03-08 15:06:23', 'Tambah data Rincian Belanja');
INSERT INTO `log_aktifitas` VALUES (808, 'belanja', 'Superadmin UNTAG', 'Superadmin', '2023-03-08 15:06:25', 'Tambah data Rincian Belanja');
INSERT INTO `log_aktifitas` VALUES (809, 'belanja', 'Superadmin UNTAG', 'Superadmin', '2023-03-08 15:06:33', 'Tambah data Rincian Belanja');
INSERT INTO `log_aktifitas` VALUES (810, 'belanja', 'Superadmin UNTAG', 'Superadmin', '2023-03-08 15:06:37', 'Tambah data Rincian Belanja');
INSERT INTO `log_aktifitas` VALUES (811, 'belanja', 'Superadmin UNTAG', 'Superadmin', '2023-03-08 15:06:51', 'Tambah data Rincian Belanja');
INSERT INTO `log_aktifitas` VALUES (812, 'belanja', 'Superadmin UNTAG', 'Superadmin', '2023-03-08 15:08:12', 'Tambah data Rincian Belanja');
INSERT INTO `log_aktifitas` VALUES (813, 'belanja', 'Superadmin UNTAG', 'Superadmin', '2023-03-08 15:10:32', 'Tambah data Rincian Belanja');
INSERT INTO `log_aktifitas` VALUES (814, 'belanja', 'Superadmin UNTAG', 'Superadmin', '2023-03-08 15:10:36', 'Tambah data Rincian Belanja');
INSERT INTO `log_aktifitas` VALUES (815, 'belanja', 'Superadmin UNTAG', 'Superadmin', '2023-03-08 15:11:46', 'Tambah data Rincian Belanja');
INSERT INTO `log_aktifitas` VALUES (816, 'belanja', 'Superadmin UNTAG', 'Superadmin', '2023-03-08 15:11:50', 'Tambah data Rincian Belanja');
INSERT INTO `log_aktifitas` VALUES (817, 'belanja', 'Superadmin UNTAG', 'Superadmin', '2023-03-08 15:11:53', 'Tambah data Rincian Belanja');
INSERT INTO `log_aktifitas` VALUES (818, 'belanja', 'Superadmin UNTAG', 'Superadmin', '2023-03-08 15:11:56', 'Tambah data Rincian Belanja');
INSERT INTO `log_aktifitas` VALUES (819, 'belanja', 'Superadmin UNTAG', 'Superadmin', '2023-03-08 15:12:56', 'Tambah data Rincian Belanja');
INSERT INTO `log_aktifitas` VALUES (820, 'belanja', 'Superadmin UNTAG', 'Superadmin', '2023-03-08 15:13:21', 'Tambah data Rincian Belanja');
INSERT INTO `log_aktifitas` VALUES (821, 'belanja', 'Superadmin UNTAG', 'Superadmin', '2023-03-08 15:14:39', 'Tambah data Rincian Belanja');
INSERT INTO `log_aktifitas` VALUES (822, 'belanja', 'Superadmin UNTAG', 'Superadmin', '2023-03-08 15:15:27', 'Tambah data Rincian Belanja');
INSERT INTO `log_aktifitas` VALUES (823, 'belanja', 'Superadmin UNTAG', 'Superadmin', '2023-03-08 15:15:31', 'Tambah data Rincian Belanja');
INSERT INTO `log_aktifitas` VALUES (824, 'belanja', 'Superadmin UNTAG', 'Superadmin', '2023-03-08 15:15:35', 'Tambah data Rincian Belanja');
INSERT INTO `log_aktifitas` VALUES (825, 'biaya', 'Superadmin UNTAG', 'Superadmin', '2023-03-08 15:24:04', 'Tambah data Standar Biaya');
INSERT INTO `log_aktifitas` VALUES (826, 'biaya', 'Superadmin UNTAG', 'Superadmin', '2023-03-08 15:35:42', 'Tambah data Standar Biaya');
INSERT INTO `log_aktifitas` VALUES (827, 'biaya', 'Superadmin UNTAG', 'Superadmin', '2023-03-08 15:38:55', 'Tambah data Standar Biaya');
INSERT INTO `log_aktifitas` VALUES (828, 'biaya', 'Superadmin UNTAG', 'Superadmin', '2023-03-08 15:39:30', 'Tambah data Standar Biaya');
INSERT INTO `log_aktifitas` VALUES (829, 'biaya', 'Superadmin UNTAG', 'Superadmin', '2023-03-08 15:39:41', 'Tambah data Standar Biaya');
INSERT INTO `log_aktifitas` VALUES (830, 'biaya', 'Superadmin UNTAG', 'Superadmin', '2023-03-08 15:41:02', 'Tambah data Standar Biaya');
INSERT INTO `log_aktifitas` VALUES (831, 'biaya', 'Superadmin UNTAG', 'Superadmin', '2023-03-08 15:41:44', 'Tambah data Standar Biaya');
INSERT INTO `log_aktifitas` VALUES (832, 'biaya', 'Superadmin UNTAG', 'Superadmin', '2023-03-08 15:42:16', 'Tambah data Standar Biaya');
INSERT INTO `log_aktifitas` VALUES (833, 'biaya', 'Superadmin UNTAG', 'Superadmin', '2023-03-08 15:43:10', 'Tambah data Standar Biaya');
INSERT INTO `log_aktifitas` VALUES (834, 'biaya', 'Superadmin UNTAG', 'Superadmin', '2023-03-08 15:44:01', 'Update data Standar Biaya');
INSERT INTO `log_aktifitas` VALUES (835, 'biaya', 'Superadmin UNTAG', 'Superadmin', '2023-03-08 16:02:49', 'Tambah data Standar Biaya');
INSERT INTO `log_aktifitas` VALUES (836, 'biaya', 'Superadmin UNTAG', 'Superadmin', '2023-03-08 16:05:46', 'Tambah data Standar Biaya');
INSERT INTO `log_aktifitas` VALUES (837, 'biaya', 'Superadmin UNTAG', 'Superadmin', '2023-03-08 16:06:09', 'Tambah data Standar Biaya');
INSERT INTO `log_aktifitas` VALUES (838, 'biaya', 'Superadmin UNTAG', 'Superadmin', '2023-03-08 16:08:43', 'Tambah data Standar Biaya');
INSERT INTO `log_aktifitas` VALUES (839, 'biaya', 'Superadmin UNTAG', 'Superadmin', '2023-03-08 16:12:26', 'Tambah data Standar Biaya');
INSERT INTO `log_aktifitas` VALUES (840, 'belanja', 'Superadmin UNTAG', 'Superadmin', '2023-03-08 16:12:50', 'Tambah data Rincian Belanja');
INSERT INTO `log_aktifitas` VALUES (841, 'belanja', 'Superadmin UNTAG', 'Superadmin', '2023-03-08 16:12:54', 'Tambah data Rincian Belanja');
INSERT INTO `log_aktifitas` VALUES (842, 'belanja', 'Superadmin UNTAG', 'Superadmin', '2023-03-08 16:13:06', 'Tambah data Rincian Belanja');
INSERT INTO `log_aktifitas` VALUES (843, 'belanja', 'Superadmin UNTAG', 'Superadmin', '2023-03-08 16:13:09', 'Tambah data Rincian Belanja');
INSERT INTO `log_aktifitas` VALUES (844, 'belanja', 'Superadmin UNTAG', 'Superadmin', '2023-03-08 16:13:12', 'Tambah data Rincian Belanja');
INSERT INTO `log_aktifitas` VALUES (845, 'belanja', 'Superadmin UNTAG', 'Superadmin', '2023-03-08 16:13:15', 'Tambah data Rincian Belanja');
INSERT INTO `log_aktifitas` VALUES (846, 'belanja', 'Superadmin UNTAG', 'Superadmin', '2023-03-08 16:13:48', 'Tambah data Rincian Belanja');
INSERT INTO `log_aktifitas` VALUES (847, 'belanja', 'Superadmin UNTAG', 'Superadmin', '2023-03-08 16:17:19', 'Tambah data Rincian Belanja');
INSERT INTO `log_aktifitas` VALUES (848, 'belanja', 'Superadmin UNTAG', 'Superadmin', '2023-03-08 16:17:33', 'Tambah data Rincian Belanja');
INSERT INTO `log_aktifitas` VALUES (849, 'belanja', 'Superadmin UNTAG', 'Superadmin', '2023-03-08 16:17:41', 'Tambah data Rincian Belanja');
INSERT INTO `log_aktifitas` VALUES (850, 'belanja', 'Superadmin UNTAG', 'Superadmin', '2023-03-08 16:19:57', 'Tambah data Rincian Belanja');
INSERT INTO `log_aktifitas` VALUES (851, 'belanja', 'Superadmin UNTAG', 'Superadmin', '2023-03-08 16:20:31', 'Tambah data Rincian Belanja');
INSERT INTO `log_aktifitas` VALUES (852, 'belanja', 'Superadmin UNTAG', 'Superadmin', '2023-03-08 16:20:38', 'Tambah data Rincian Belanja');
INSERT INTO `log_aktifitas` VALUES (853, 'belanja', 'Superadmin UNTAG', 'Superadmin', '2023-03-08 16:21:16', 'Tambah data Rincian Belanja');
INSERT INTO `log_aktifitas` VALUES (854, 'belanja', 'Superadmin UNTAG', 'Superadmin', '2023-03-08 16:21:19', 'Tambah data Rincian Belanja');
INSERT INTO `log_aktifitas` VALUES (855, 'belanja', 'Superadmin UNTAG', 'Superadmin', '2023-03-08 16:21:21', 'Tambah data Rincian Belanja');
INSERT INTO `log_aktifitas` VALUES (856, 'belanja', 'Superadmin UNTAG', 'Superadmin', '2023-03-08 16:22:00', 'Tambah data Rincian Belanja');
INSERT INTO `log_aktifitas` VALUES (857, 'belanja', 'Superadmin UNTAG', 'Superadmin', '2023-03-08 16:22:03', 'Tambah data Rincian Belanja');
INSERT INTO `log_aktifitas` VALUES (858, 'belanja', 'Superadmin UNTAG', 'Superadmin', '2023-03-08 16:22:11', 'Tambah data Rincian Belanja');
INSERT INTO `log_aktifitas` VALUES (859, 'belanja', 'Superadmin UNTAG', 'Superadmin', '2023-03-08 16:22:22', 'Tambah data Rincian Belanja');
INSERT INTO `log_aktifitas` VALUES (860, 'belanja', 'Superadmin UNTAG', 'Superadmin', '2023-03-08 16:24:42', 'Tambah data Rincian Belanja');
INSERT INTO `log_aktifitas` VALUES (861, 'belanja', 'Superadmin UNTAG', 'Superadmin', '2023-03-08 16:24:50', 'Tambah data Rincian Belanja');
INSERT INTO `log_aktifitas` VALUES (862, 'belanja', 'Superadmin UNTAG', 'Superadmin', '2023-03-08 16:25:05', 'Tambah data Rincian Belanja');
INSERT INTO `log_aktifitas` VALUES (863, 'belanja', 'Superadmin UNTAG', 'Superadmin', '2023-03-08 16:25:09', 'Tambah data Rincian Belanja');
INSERT INTO `log_aktifitas` VALUES (864, 'belanja', 'Superadmin UNTAG', 'Superadmin', '2023-03-08 16:25:12', 'Tambah data Rincian Belanja');
INSERT INTO `log_aktifitas` VALUES (865, 'belanja', 'Superadmin UNTAG', 'Superadmin', '2023-03-08 16:25:15', 'Tambah data Rincian Belanja');
INSERT INTO `log_aktifitas` VALUES (866, 'belanja', 'Superadmin UNTAG', 'Superadmin', '2023-03-08 16:25:18', 'Tambah data Rincian Belanja');
INSERT INTO `log_aktifitas` VALUES (867, 'belanja', 'Superadmin UNTAG', 'Superadmin', '2023-03-08 16:25:21', 'Tambah data Rincian Belanja');
INSERT INTO `log_aktifitas` VALUES (868, 'belanja', 'Superadmin UNTAG', 'Superadmin', '2023-03-08 16:25:26', 'Tambah data Rincian Belanja');
INSERT INTO `log_aktifitas` VALUES (869, 'biaya', 'Superadmin UNTAG', 'Superadmin', '2023-03-09 16:12:24', 'Tambah data Standar Biaya');

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
) ENGINE = InnoDB AUTO_INCREMENT = 13 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of mst_kegiatan
-- ----------------------------
INSERT INTO `mst_kegiatan` VALUES (1, '65f8fad3-b910-11ed-b7d6-5c60ba3647e7', '   Belanja Kepegawaian', '1', '', NULL, '1');
INSERT INTO `mst_kegiatan` VALUES (2, '72003dfa-b910-11ed-b7d6-5c60ba3647e7', '   Gaji Dosen S1', '1.1', '65f8fad3-b910-11ed-b7d6-5c60ba3647e7', NULL, '1');
INSERT INTO `mst_kegiatan` VALUES (3, 'e670c63b-b910-11ed-b7d6-5c60ba3647e7', ' Staff Kepegawaian', '1.2', '65f8fad3-b910-11ed-b7d6-5c60ba3647e7', NULL, '1');
INSERT INTO `mst_kegiatan` VALUES (4, '0632c7c7-b91b-11ed-b7d6-5c60ba3647e7', ' Belanja Alat Kantor', '2', '', NULL, '1');
INSERT INTO `mst_kegiatan` VALUES (5, '117a1017-b91b-11ed-b7d6-5c60ba3647e7', ' Pulpen Hitam', '2.1', '0632c7c7-b91b-11ed-b7d6-5c60ba3647e7', NULL, '1');
INSERT INTO `mst_kegiatan` VALUES (6, 'd7196828-b9e0-11ed-afd4-5c60ba3647e7', ' KEGIATAN PENUNJANG ADMINISTRASI UMUM', '3', '', NULL, '1');
INSERT INTO `mst_kegiatan` VALUES (7, 'e2d808e3-b9e0-11ed-afd4-5c60ba3647e7', ' Kegiatan Peneguhan, Pelantikan, dan Ceremonial', '3.1', 'd7196828-b9e0-11ed-afd4-5c60ba3647e7', NULL, '1');
INSERT INTO `mst_kegiatan` VALUES (8, 'fe553d57-b9e0-11ed-afd4-5c60ba3647e7', ' Kegiatan Penerimaan Mahasiswa Baru', '3.2', 'd7196828-b9e0-11ed-afd4-5c60ba3647e7', NULL, '1');
INSERT INTO `mst_kegiatan` VALUES (9, '0b0bf47d-b9e1-11ed-afd4-5c60ba3647e7', ' Kegiatan Administrasi Umum & Rumah Tangga', '3.3', 'd7196828-b9e0-11ed-afd4-5c60ba3647e7', NULL, '1');
INSERT INTO `mst_kegiatan` VALUES (10, '15777219-b9e1-11ed-afd4-5c60ba3647e7', ' Kegiatan Kepustakaan', '3.4', '', NULL, '1');
INSERT INTO `mst_kegiatan` VALUES (11, '254e94b0-b9e1-11ed-afd4-5c60ba3647e7', ' KEGIATAN PENGEMBANGAN KAPASITAS', '4', '', NULL, '1');
INSERT INTO `mst_kegiatan` VALUES (12, '397f3ae0-b9e1-11ed-afd4-5c60ba3647e7', 'Kegiatan Pelaksanaan dan Pengujian Teori', '4.1', '254e94b0-b9e1-11ed-afd4-5c60ba3647e7', NULL, '1');

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
) ENGINE = InnoDB AUTO_INCREMENT = 35 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of mst_pendapatan
-- ----------------------------
INSERT INTO `mst_pendapatan` VALUES (6, 'ccb301b0-b1b6-11ed-a156-5c60ba3647e7', 'ASET BERSIH TIDAK TERIKAT', NULL, '4.1', '2023', '1', 1);
INSERT INTO `mst_pendapatan` VALUES (7, 'd553d245-b1b6-11ed-a156-5c60ba3647e7', 'PENDAPATAN AKADEMIK', NULL, '4.1.1', '2023', '1', 1);
INSERT INTO `mst_pendapatan` VALUES (8, 'e498a5f5-b1b6-11ed-a156-5c60ba3647e7', 'PENDAPATAN SUMBANGAN MASYARAKAT (SUMAS)', NULL, '4.1.1.1', '2023', '1', 1);
INSERT INTO `mst_pendapatan` VALUES (9, 'bd474aef-b1b7-11ed-a156-5c60ba3647e7', 'Pendapatan SPP Program Sarjana', '350000000', '4.1.1.1.1', '2023', NULL, 1);
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
INSERT INTO `mst_pendapatan` VALUES (34, '058c9fc1-bc39-11ed-8eb8-5c60ba3647e7', 'Pendapatan Kuliah Kerja Nyata Dua', '10500000', '4.1.1.1.6', '2023', NULL, 0);

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
) ENGINE = InnoDB AUTO_INCREMENT = 15 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of mst_satuan
-- ----------------------------
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
INSERT INTO `mst_satuan` VALUES (13, '8d69e63c-b5b6-11ed-ac46-5c60ba3647e7', 'Kotak', '1');
INSERT INTO `mst_satuan` VALUES (14, '0086136f-b5ed-11ed-ac46-5c60ba3647e7', 'Box', '1');

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
  `satuan_harga` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  PRIMARY KEY (`id_standar_biaya`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 36 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of mst_standar_biaya
-- ----------------------------
INSERT INTO `mst_standar_biaya` VALUES (8, 'fcaad192-b1c7-11ed-a156-5c60ba3647e7', 'BEBAN', NULL, '5.1', '2023', '1', '1', '4c36c924-ae18-11ed-8f55-5c60ba3647e7');
INSERT INTO `mst_standar_biaya` VALUES (9, '0793d0bb-b1c8-11ed-a156-5c60ba3647e7', 'BEBAN AKADEMIK', NULL, '5.1.0', '2023', '1', '1', NULL);
INSERT INTO `mst_standar_biaya` VALUES (10, '12f8e6e9-b1c8-11ed-a156-5c60ba3647e7', 'BEBAN PENDIDIKAN DAN PENGAJARAN', NULL, '5.1.0.1', '2023', '1', '1', NULL);
INSERT INTO `mst_standar_biaya` VALUES (11, '20a9a266-b1c8-11ed-a156-5c60ba3647e7', 'BEBAN GAJI DOSEN', NULL, '5.1.0.1.1', '2023', '1', '1', NULL);
INSERT INTO `mst_standar_biaya` VALUES (12, '382fe42a-b1c8-11ed-a156-5c60ba3647e7', 'Gaji Pokok Karyawan dan Dosen Tetap Yayasan (SMA/D1 - 0-4 Tahun)', '975000', '5.1.0.1.1.001', '2023', NULL, '1', '4c36c924-ae18-11ed-8f55-5c60ba3647e7');
INSERT INTO `mst_standar_biaya` VALUES (13, '5825a01e-b1c8-11ed-a156-5c60ba3647e7', 'Gaji Pokok Karyawan dan Dosen Tetap Yayasan (D2/D3 - 0-4 Tahun)', '967000', '5.1.0.1.1.002', '2023', NULL, '1', '4c36c924-ae18-11ed-8f55-5c60ba3647e7');
INSERT INTO `mst_standar_biaya` VALUES (14, '6ced82fb-b1c8-11ed-a156-5c60ba3647e7', 'Gaji Pokok Karyawan dan Dosen Tetap Yayasan (S1/D4 - 0-4 Tahun)', '1127000', '5.1.0.1.1.003', '2023', NULL, '1', '4c36c924-ae18-11ed-8f55-5c60ba3647e7');
INSERT INTO `mst_standar_biaya` VALUES (15, '7b30efdd-b1c8-11ed-a156-5c60ba3647e7', 'Gaji Pokok Karyawan dan Dosen Tetap Yayasan (S2 - 0-4 Tahun)', '1288000', '5.1.0.1.1.004', '2023', NULL, '1', '8d69e63c-b5b6-11ed-ac46-5c60ba3647e7');
INSERT INTO `mst_standar_biaya` VALUES (16, '89e211ad-b1c8-11ed-a156-5c60ba3647e7', 'Gaji Pokok Karyawan dan Dosen Tetap Yayasan (S3 - 0-4 Tahun)', '1449000', '5.1.0.1.1.005', '2023', NULL, '1', '4c36c924-ae18-11ed-8f55-5c60ba3647e7');
INSERT INTO `mst_standar_biaya` VALUES (18, 'aca06ac0-b1c8-11ed-a156-5c60ba3647e7', 'Gaji Pokok Karyawan dan Dosen Tetap Yayasan (D2/D3 - 5-9 Tahun)', '1127000', '5.1.0.1.1.007', '2023', NULL, '1', '4c36c924-ae18-11ed-8f55-5c60ba3647e7');
INSERT INTO `mst_standar_biaya` VALUES (19, 'e193ffb3-b1c8-11ed-a156-5c60ba3647e7', 'Gaji Pokok Karyawan dan Dosen Tetap Yayasan (S1/D4 - 5-9 Tahun)', '1288000', '5.1.0.1.1.008', '2023', NULL, '1', '8d69e63c-b5b6-11ed-ac46-5c60ba3647e7');
INSERT INTO `mst_standar_biaya` VALUES (20, 'f048b17b-b1c8-11ed-a156-5c60ba3647e7', 'Gaji Pokok Karyawan dan Dosen Tetap Yayasan (S2 - 5-9 Tahun)', '1449000', '5.1.0.1.1.009', '2023', NULL, '1', '4c36c924-ae18-11ed-8f55-5c60ba3647e7');
INSERT INTO `mst_standar_biaya` VALUES (21, '0426a2fe-b1c9-11ed-a156-5c60ba3647e7', 'Gaji Pokok Karyawan dan Dosen Tetap Yayasan (S3 - 5-9 Tahun)', '1610000', '5.1.0.1.1.010', '2023', NULL, '1', '4c36c924-ae18-11ed-8f55-5c60ba3647e7');
INSERT INTO `mst_standar_biaya` VALUES (22, '13afe660-b1c9-11ed-a156-5c60ba3647e7', 'Gaji Pokok Karyawan dan Dosen Tetap Yayasan (SMA/D1 - 10-14 Tahun)', '127000', '5.1.0.1.1.011', '2023', NULL, '1', '8d69e63c-b5b6-11ed-ac46-5c60ba3647e7');
INSERT INTO `mst_standar_biaya` VALUES (24, '09a83c0c-b5a1-11ed-ac46-5c60ba3647e7', 'Gaji Utama', '1600000', '5.1.0.1.1.012', '2023', NULL, '1', '4c36c924-ae18-11ed-8f55-5c60ba3647e7');
INSERT INTO `mst_standar_biaya` VALUES (26, '84cda719-b5b7-11ed-ac46-5c60ba3647e7', 'Belanja Peralatan kantor', NULL, '7', '2023', '1', '1', '4c36c924-ae18-11ed-8f55-5c60ba3647e7');
INSERT INTO `mst_standar_biaya` VALUES (27, '9f45dda0-b5b7-11ed-ac46-5c60ba3647e7', 'Batterai Alkaline Kotak 9 Volt', '15000', '7.001', '2023', NULL, '1', '8d69e63c-b5b6-11ed-ac46-5c60ba3647e7');
INSERT INTO `mst_standar_biaya` VALUES (28, '505b13be-b91b-11ed-b7d6-5c60ba3647e7', 'Pulpen Hitam', '12000', '7.002', '2023', NULL, '1', '8c2b6f81-b1cc-11ed-a156-5c60ba3647e7');
INSERT INTO `mst_standar_biaya` VALUES (29, '2f3204fc-bc3a-11ed-8eb8-5c60ba3647e7', 'Beban harga', '12550', '5.1.0.1.1.015', '2023', NULL, '1', '6e02160c-b1cc-11ed-a156-5c60ba3647e7');
INSERT INTO `mst_standar_biaya` VALUES (34, '3b9a2ef0-b79c-4e2f-857a-4a9fb8a7a723', 'Penggaris 30 Cm', '60000', '7003', NULL, NULL, '1', '8d69e63c-b5b6-11ed-ac46-5c60ba3647e7');
INSERT INTO `mst_standar_biaya` VALUES (35, '28087ed7-9b7f-476b-8ef7-7d6cae873f85', 'Buku Tulis Putih', '4500', '7004', NULL, NULL, '1', '8c2b6f81-b1cc-11ed-a156-5c60ba3647e7');

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
  `anggaran_prodi` text CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL,
  `akhir_input_anggaran` varchar(20) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  PRIMARY KEY (`id_tahun_anggaran`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 22 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of mst_tahun_anggaran
-- ----------------------------
INSERT INTO `mst_tahun_anggaran` VALUES (1, '33ce9356-ae07-11ed-8f55-5c60ba3647e9', '2022', '1500000000', '0', NULL, NULL);
INSERT INTO `mst_tahun_anggaran` VALUES (2, '33ce9356-ae07-11ed-8f55-5c60ba3647e8', '2023', '250000000', '1', '[{\"admin\":\"budget_6be904b9-ac71-11ed-ae87-5c60ba3647e7\",\"budget\":\"50000000\"},{\"admin\":\"budget_ebd1956c-b507-11ed-b206-5c60ba3647e7\",\"budget\":\"50000000\"},{\"admin\":\"budget_faa4df41-b507-11ed-b206-5c60ba3647e7\",\"budget\":\"50000000\"},{\"admin\":\"budget_76e7fd92-b771-11ed-bfe5-5c60ba3647e7\",\"budget\":\"50000000\"}]', '2023-03-09');
INSERT INTO `mst_tahun_anggaran` VALUES (9, 'd555f7a8-ae10-11ed-8f55-5c60ba3647e7', '2024', '250000000', '1', '[{\"admin\":\"budget_admin_prodi_fakultas_2\",\"budget\":\"50000000\"},{\"admin\":\"budget_admin_prodi_2\",\"budget\":\"50000000\"},{\"admin\":\"budget_admin_prodi_3\",\"budget\":\"150000000\"}]', NULL);
INSERT INTO `mst_tahun_anggaran` VALUES (11, 'e8a54273-b1ca-11ed-a156-5c60ba3647e7', '2016', '250000000', '0', NULL, NULL);
INSERT INTO `mst_tahun_anggaran` VALUES (12, 'f06b3888-b1ca-11ed-a156-5c60ba3647e7', '2018', '12000000', '0', NULL, NULL);
INSERT INTO `mst_tahun_anggaran` VALUES (13, 'f7c3a9a8-b1ca-11ed-a156-5c60ba3647e7', '2017', '450000000', '0', NULL, NULL);
INSERT INTO `mst_tahun_anggaran` VALUES (14, '10dd4870-b1cb-11ed-a156-5c60ba3647e7', '2019', '345000000', '0', NULL, NULL);
INSERT INTO `mst_tahun_anggaran` VALUES (15, '1e434ca7-b1cb-11ed-a156-5c60ba3647e7', '2020', '20000000', '0', NULL, NULL);
INSERT INTO `mst_tahun_anggaran` VALUES (16, '583e4b67-b1cb-11ed-a156-5c60ba3647e7', '2021', '245000000', '0', NULL, NULL);
INSERT INTO `mst_tahun_anggaran` VALUES (21, '46cd158b-bc36-11ed-8eb8-5c60ba3647e7', '2015', '2000000000', '0', '[{\"admin\":\"budget_6be904b9-ac71-11ed-ae87-5c60ba3647e7\",\"budget\":\"250000000\"},{\"admin\":\"budget_ebd1956c-b507-11ed-b206-5c60ba3647e7\",\"budget\":\"250000000\"},{\"admin\":\"budget_faa4df41-b507-11ed-b206-5c60ba3647e7\",\"budget\":\"250000000\"},{\"admin\":\"budget_76e7fd92-b771-11ed-bfe5-5c60ba3647e7\",\"budget\":\"250000000\"}]', '2023-03-10');

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
) ENGINE = InnoDB AUTO_INCREMENT = 12 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of mst_users
-- ----------------------------
INSERT INTO `mst_users` VALUES (3, 'dca74e86-abb7-11ed-8468-5c60ba3647e9', 'Superadmin UNTAG', '', 'superadmin', '$2y$10$8B1aUDiwyNgVuEjHM0978uXJPV0q5YZGmc/HilyiT8MZXGQsLYGti', '1', 'Superadmin', '1');
INSERT INTO `mst_users` VALUES (6, '6be904b9-ac71-11ed-ae87-5c60ba3647e7', 'Admin Prodi Fakultas 2', '', 'adminprodi', '$2y$10$qjNnQ9AM0rIokbS1EmSbUeB5b5C9ph2xpzqMkLw1xin62BYOjHO8m', '2', 'Admin Prodi', '0');
INSERT INTO `mst_users` VALUES (9, 'ebd1956c-b507-11ed-b206-5c60ba3647e7', 'Admin Prodi 2', '', 'prodi2', '$2y$10$mGyA.H4aNAxRrSc0.hHIoey24eiHmBy24Z66nTRWEFpsxp3raWxHq', '2', 'Admin Prodi', '1');
INSERT INTO `mst_users` VALUES (10, 'faa4df41-b507-11ed-b206-5c60ba3647e7', 'Admin Prodi 3 ', '', 'prodi3', '$2y$10$mGyA.H4aNAxRrSc0.hHIoey24eiHmBy24Z66nTRWEFpsxp3raWxHq', '2', 'Admin Prodi', '1');
INSERT INTO `mst_users` VALUES (11, '76e7fd92-b771-11ed-bfe5-5c60ba3647e7', 'admin fakultas Kesenian', '', 'adminprodikesenian', '$2y$10$mGyA.H4aNAxRrSc0.hHIoey24eiHmBy24Z66nTRWEFpsxp3raWxHq', '2', 'Admin Prodi', '1');

-- ----------------------------
-- Table structure for rincian_belanja
-- ----------------------------
DROP TABLE IF EXISTS `rincian_belanja`;
CREATE TABLE `rincian_belanja`  (
  `id_belanja` int NOT NULL AUTO_INCREMENT,
  `uuid_belanja` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `tanggal_belanja` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `uuid_kegiatan` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `uuid_standar_biaya` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `koefisien_1` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `volume_1` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `koefisien_2` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `volume_2` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `pajak` int NULL DEFAULT NULL,
  `keterangan` text CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL,
  `uuid_user` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `edited` varchar(2) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `total_belanja` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `tahun_anggaran` varchar(10) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `detail_belanja_history` text CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL,
  PRIMARY KEY (`id_belanja`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 192 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of rincian_belanja
-- ----------------------------
INSERT INTO `rincian_belanja` VALUES (13, 'e7e2b917-b913-11ed-b7d6-5c60ba3647e7', '2023-03-01', '72003dfa-b910-11ed-b7d6-5c60ba3647e7', '382fe42a-b1c8-11ed-a156-5c60ba3647e7', '1', '8696356114656036477', '', '32', 0, 'Gaji Bulan Februari', 'dca74e86-abb7-11ed-8468-5c60ba3647e9', '0', '31200000', '2023', NULL);
INSERT INTO `rincian_belanja` VALUES (14, '7d8e06a4-b916-11ed-b7d6-5c60ba3647e7', '2023-03-01', 'e670c63b-b910-11ed-b7d6-5c60ba3647e7', '382fe42a-b1c8-11ed-a156-5c60ba3647e7', '1', '8c2b6f81-b1cc-11ed-a156-5c60ba3647e7', NULL, '72', 1, 'Gaji Pegawai', '76e7fd92-b771-11ed-bfe5-5c60ba3647e7', '0', '64335600', '2023', NULL);
INSERT INTO `rincian_belanja` VALUES (15, '6e387830-b91b-11ed-b7d6-5c60ba3647e7', '2023-03-01', '117a1017-b91b-11ed-b7d6-5c60ba3647e7', '505b13be-b91b-11ed-b7d6-5c60ba3647e7', '210', '8d69e63c-b5b6-11ed-ac46-5c60ba3647e7', NULL, '5', 1, '', '76e7fd92-b771-11ed-bfe5-5c60ba3647e7', '0', '13986000', '2023', NULL);
INSERT INTO `rincian_belanja` VALUES (16, 'd3f78827-b9ec-11ed-afd4-5c60ba3647e7', '2023-03-01', '72003dfa-b910-11ed-b7d6-5c60ba3647e7', '89e211ad-b1c8-11ed-a156-5c60ba3647e7', '1', '8c2b6f81-b1cc-11ed-a156-5c60ba3647e7', NULL, '60', 1, '', 'faa4df41-b507-11ed-b206-5c60ba3647e7', '0', '96503400', '2023', NULL);
INSERT INTO `rincian_belanja` VALUES (18, '59b510e0-ba90-11ed-8287-5c60ba3647e7', '2023-03-01', 'e2d808e3-b9e0-11ed-afd4-5c60ba3647e7', '5825a01e-b1c8-11ed-a156-5c60ba3647e7', '2', '8d69e63c-b5b6-11ed-ac46-5c60ba3647e7', NULL, '6', 1, '', 'faa4df41-b507-11ed-b206-5c60ba3647e7', '1', '12867120', '2023', NULL);
INSERT INTO `rincian_belanja` VALUES (19, 'ac824710-ba90-11ed-8287-5c60ba3647e7', '2023-03-01', '72003dfa-b910-11ed-b7d6-5c60ba3647e7', '6ced82fb-b1c8-11ed-a156-5c60ba3647e7', '1', '8c2b6f81-b1cc-11ed-a156-5c60ba3647e7', NULL, '36', 1, '', 'ebd1956c-b507-11ed-b206-5c60ba3647e7', '1', '45034920', '2023', '{\"uuid_belanja\":\"ac824710-ba90-11ed-8287-5c60ba3647e7\",\"tanggal_belanja\":\"2023-03-01\",\"uuid_kegiatan\":\"72003dfa-b910-11ed-b7d6-5c60ba3647e7\",\"uuid_standar_biaya\":\"6ced82fb-b1c8-11ed-a156-5c60ba3647e7\",\"koefisien_1\":\"1\",\"volume_1\":\"8c2b6f81-b1cc-11ed-a156-5c60ba3647e7\",\"volume_2\":\"36\",\"pajak\":\"1\",\"keterangan\":\"\",\"uuid_user\":\"ebd1956c-b507-11ed-b206-5c60ba3647e7\",\"edited\":\"0\",\"total_belanja\":\"45034920\",\"detail_belanja_history\":null,\"nama_kegiatan\":\"   Gaji Dosen S1\",\"nama_standar_biaya\":\"Gaji Pokok Karyawan dan Dosen Tetap Yayasan (S1\\/D4 - 0-4 Tahun)\",\"jumlah_standar_biaya\":\"1,127,000\",\"nama_satuan\":\"unit\",\"satuan_belanja\":null}');
INSERT INTO `rincian_belanja` VALUES (20, '4a2541f3-ba92-11ed-8287-5c60ba3647e7', '2023-03-01', 'e2d808e3-b9e0-11ed-afd4-5c60ba3647e7', 'aca06ac0-b1c8-11ed-a156-5c60ba3647e7', '12', '86257db4-b1cc-11ed-a156-5c60ba3647e7', NULL, '3', 1, '', 'ebd1956c-b507-11ed-b206-5c60ba3647e7', '0', '45034920', '2023', NULL);

-- ----------------------------
-- Table structure for rincian_belanja_history
-- ----------------------------
DROP TABLE IF EXISTS `rincian_belanja_history`;
CREATE TABLE `rincian_belanja_history`  (
  `id_belanja` int NOT NULL AUTO_INCREMENT,
  `uuid_belanja_history` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `uuid_belanja` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `tanggal_belanja` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `uuid_kegiatan` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `uuid_standar_biaya` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `koefisien_1` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `volume_1` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `koefisien_2` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `volume_2` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `pajak` int NULL DEFAULT NULL,
  `keterangan` text CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL,
  `uuid_user` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `edited` varchar(2) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `total_belanja` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `tahun_anggaran` varchar(10) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `detail_belanja_history` text CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL,
  PRIMARY KEY (`id_belanja`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 21 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of rincian_belanja_history
-- ----------------------------
INSERT INTO `rincian_belanja_history` VALUES (13, 'c8e1d1e9-bdb9-11ed-9f94-5c60ba3647e7', 'e7e2b917-b913-11ed-b7d6-5c60ba3647e7', '2023-03-01', '72003dfa-b910-11ed-b7d6-5c60ba3647e7', '382fe42a-b1c8-11ed-a156-5c60ba3647e7', '1', '8696356114656036477', '', '32', 1, 'Gaji Bulan Februari', 'dca74e86-abb7-11ed-8468-5c60ba3647e9', '0', '34632000', '2023', NULL);
INSERT INTO `rincian_belanja_history` VALUES (18, '4fe95672-baad-11ed-8287-5c60ba3647e7', '59b510e0-ba90-11ed-8287-5c60ba3647e7', '2023-03-01', 'e2d808e3-b9e0-11ed-afd4-5c60ba3647e7', '5825a01e-b1c8-11ed-a156-5c60ba3647e7', '3', '8d69e63c-b5b6-11ed-ac46-5c60ba3647e7', NULL, '6', 1, '', 'faa4df41-b507-11ed-b206-5c60ba3647e7', '0', '19300680', '2023', NULL);
INSERT INTO `rincian_belanja_history` VALUES (19, 'd8a8d01b-baa8-11ed-8287-5c60ba3647e7', 'ac824710-ba90-11ed-8287-5c60ba3647e7', '2023-03-01', '72003dfa-b910-11ed-b7d6-5c60ba3647e7', '6ced82fb-b1c8-11ed-a156-5c60ba3647e7', '2', '8c2b6f81-b1cc-11ed-a156-5c60ba3647e7', NULL, '36', 1, '', 'ebd1956c-b507-11ed-b206-5c60ba3647e7', '0', '90069840', '2023', '{\"uuid_belanja\":\"ac824710-ba90-11ed-8287-5c60ba3647e7\",\"tanggal_belanja\":\"2023-03-01\",\"uuid_kegiatan\":\"72003dfa-b910-11ed-b7d6-5c60ba3647e7\",\"uuid_standar_biaya\":\"6ced82fb-b1c8-11ed-a156-5c60ba3647e7\",\"koefisien_1\":\"1\",\"volume_1\":\"8c2b6f81-b1cc-11ed-a156-5c60ba3647e7\",\"volume_2\":\"36\",\"pajak\":\"1\",\"keterangan\":\"\",\"uuid_user\":\"ebd1956c-b507-11ed-b206-5c60ba3647e7\",\"edited\":\"0\",\"total_belanja\":\"45034920\",\"detail_belanja_history\":null,\"nama_kegiatan\":\"   Gaji Dosen S1\",\"nama_standar_biaya\":\"Gaji Pokok Karyawan dan Dosen Tetap Yayasan (S1\\/D4 - 0-4 Tahun)\",\"jumlah_standar_biaya\":\"1,127,000\",\"nama_satuan\":\"unit\",\"satuan_belanja\":null}');

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

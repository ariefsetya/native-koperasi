/*
Navicat MySQL Data Transfer

Source Server         : local
Source Server Version : 50505
Source Host           : localhost:3306
Source Database       : koperasi

Target Server Type    : MYSQL
Target Server Version : 50505
File Encoding         : 65001

Date: 2016-04-26 18:40:56
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for anggota
-- ----------------------------
DROP TABLE IF EXISTS `anggota`;
CREATE TABLE `anggota` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `no_anggota` varchar(255) DEFAULT NULL,
  `nama` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `no_hp` varchar(255) DEFAULT NULL,
  `jk` varchar(255) DEFAULT NULL,
  `alamat` varchar(255) DEFAULT NULL,
  `rtrw` varchar(255) DEFAULT NULL,
  `kel` varchar(255) DEFAULT NULL,
  `kec` varchar(255) DEFAULT NULL,
  `kab` varchar(255) DEFAULT NULL,
  `prov` varchar(255) DEFAULT NULL,
  `kodepos` varchar(255) DEFAULT NULL,
  `negara` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of anggota
-- ----------------------------
INSERT INTO `anggota` VALUES ('1', 'A2394839', 'Arief Setya', 'ariefsetya@live.com', '083870002220', 'L', 'Jalan raya', '04/04', 'Balekambang', 'Kramat Jati', 'Jakarta Timur', 'DKI Jakarta', '13530', 'Indonesia');

-- ----------------------------
-- Table structure for transaksi
-- ----------------------------
DROP TABLE IF EXISTS `transaksi`;
CREATE TABLE `transaksi` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_anggota` varchar(255) DEFAULT NULL,
  `id_induk` varchar(255) DEFAULT NULL,
  `jumlah_asli` decimal(65,2) DEFAULT NULL,
  `jumlah_bunga` decimal(65,2) DEFAULT NULL,
  `biaya_admin` decimal(65,2) DEFAULT NULL,
  `biaya_materai` decimal(65,2) DEFAULT NULL,
  `biaya_asuransi` decimal(65,2) DEFAULT NULL,
  `total_peminjaman` decimal(65,2) DEFAULT NULL,
  `angsuran` decimal(65,2) DEFAULT NULL,
  `jumlah_total` decimal(65,2) DEFAULT NULL,
  `info_ke` varchar(255) DEFAULT NULL,
  `bunga` varchar(255) DEFAULT NULL,
  `status` varchar(255) DEFAULT NULL,
  `jenis_transaksi` varchar(255) DEFAULT NULL,
  `keterangan` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of transaksi
-- ----------------------------
INSERT INTO `transaksi` VALUES ('1', '1', '0', '100000.00', '2000.00', '2000.00', '2000.00', '2000.00', '94000.00', '10333.33', '124000.00', '12', '2', 'Belum Lunas', 'Pinjaman', 'gud');
INSERT INTO `transaksi` VALUES ('2', '1', '1', '10333.33', '166.67', null, null, null, null, null, '10333.33', '1', null, 'Belum Lunas', 'Angsuran', null);
INSERT INTO `transaksi` VALUES ('3', '1', '1', '10333.33', '166.67', null, null, null, null, null, '10333.33', '2', null, 'Belum Lunas', 'Angsuran', null);
INSERT INTO `transaksi` VALUES ('4', '1', '1', '10333.33', '166.67', null, null, null, null, null, '10333.33', '3', null, 'Belum Lunas', 'Angsuran', null);
INSERT INTO `transaksi` VALUES ('5', '1', '1', '10333.33', '166.67', null, null, null, null, null, '10333.33', '4', null, 'Belum Lunas', 'Angsuran', null);
INSERT INTO `transaksi` VALUES ('6', '1', '1', '10333.33', '166.67', null, null, null, null, null, '10333.33', '5', null, 'Belum Lunas', 'Angsuran', null);
INSERT INTO `transaksi` VALUES ('7', '1', '1', '10333.33', '166.67', null, null, null, null, null, '10333.33', '6', null, 'Belum Lunas', 'Angsuran', null);
INSERT INTO `transaksi` VALUES ('8', '1', '1', '10333.33', '166.67', null, null, null, null, null, '10333.33', '7', null, 'Belum Lunas', 'Angsuran', null);
INSERT INTO `transaksi` VALUES ('9', '1', '1', '10333.33', '166.67', null, null, null, null, null, '10333.33', '8', null, 'Belum Lunas', 'Angsuran', null);
INSERT INTO `transaksi` VALUES ('10', '1', '1', '10333.33', '166.67', null, null, null, null, null, '10333.33', '9', null, 'Belum Lunas', 'Angsuran', null);
INSERT INTO `transaksi` VALUES ('11', '1', '1', '10333.33', '166.67', null, null, null, null, null, '10333.33', '10', null, 'Belum Lunas', 'Angsuran', null);
INSERT INTO `transaksi` VALUES ('12', '1', '1', '10333.33', '166.67', null, null, null, null, null, '10333.33', '11', null, 'Belum Lunas', 'Angsuran', null);
INSERT INTO `transaksi` VALUES ('13', '1', '1', '10333.33', '166.67', null, null, null, null, null, '10333.33', '12', null, 'Belum Lunas', 'Angsuran', null);

-- ----------------------------
-- Table structure for user
-- ----------------------------
DROP TABLE IF EXISTS `user`;
CREATE TABLE `user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nama` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of user
-- ----------------------------

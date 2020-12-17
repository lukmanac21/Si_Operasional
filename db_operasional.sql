<<<<<<< HEAD
-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 11, 2020 at 04:58 AM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.10
=======
/*
SQLyog Community v13.1.7 (64 bit)
MySQL - 10.4.14-MariaDB : Database - db_operasional
*********************************************************************
*/
>>>>>>> ba9419c (-)

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`db_operasional` /*!40100 DEFAULT CHARACTER SET utf8mb4 */;

USE `db_operasional`;

/*Table structure for table `tbl_anggaran` */

DROP TABLE IF EXISTS `tbl_anggaran`;

CREATE TABLE `tbl_anggaran` (
  `id_anggaran` int(11) NOT NULL AUTO_INCREMENT,
  `id_periode` int(11) NOT NULL,
  `id_sub_rek` int(11) NOT NULL,
  `anggaran` int(11) NOT NULL,
  PRIMARY KEY (`id_anggaran`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

/*Data for the table `tbl_anggaran` */

insert  into `tbl_anggaran`(`id_anggaran`,`id_periode`,`id_sub_rek`,`anggaran`) values 
(1,1,1,400000),
(2,1,2,5000001),
(3,2,1,9000001);

/*Table structure for table `tbl_barang` */

DROP TABLE IF EXISTS `tbl_barang`;

CREATE TABLE `tbl_barang` (
  `id_barang` int(11) NOT NULL AUTO_INCREMENT,
  `id_jenis` int(11) NOT NULL,
  `id_kegiatan` int(11) NOT NULL,
  `id_satuan` int(11) NOT NULL,
  `tgl_barang` date NOT NULL,
  `nama_barang` varchar(100) NOT NULL,
  `model_barang` varchar(100) NOT NULL,
  `fcc_barang` varchar(200) NOT NULL,
  `upc_barang` varchar(100) NOT NULL,
  `hwversi_barang` varchar(100) NOT NULL,
  `cmiit_barang` varchar(100) NOT NULL,
  `kg_barang` varchar(100) NOT NULL,
  `produk_barang` varchar(100) NOT NULL,
  `type_barang` varchar(100) NOT NULL,
  `plug_barang` varchar(100) NOT NULL,
  `mac_barang` varchar(60) NOT NULL,
  `seri_barang` varchar(50) NOT NULL,
  `power_barang` varchar(20) NOT NULL,
  `frek_barang` varchar(50) NOT NULL,
  `stok_barang` int(11) NOT NULL,
  `harga_barang` varchar(20) NOT NULL,
<<<<<<< HEAD
  `img_barang` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_barang`
--

INSERT INTO `tbl_barang` (`id_barang`, `id_jenis`, `id_kegiatan`, `id_satuan`, `tgl_barang`, `nama_barang`, `model_barang`, `fcc_barang`, `upc_barang`, `hwversi_barang`, `cmiit_barang`, `kg_barang`, `produk_barang`, `type_barang`, `plug_barang`, `mac_barang`, `seri_barang`, `power_barang`, `frek_barang`, `stok_barang`, `harga_barang`, `img_barang`) VALUES
(54, 6, 3, 1, '2019-08-14', 'Laptop Lenovo', '81HM', '', '1931247540', '', '', '', '', '', '', '', 'MP1G82NJ / MO. MPNXB8C2909T', '', '', 1, 'Rp. 3.500.000', 'IMG_20190814_0852265.jpg'),
(56, 6, 3, 1, '2019-08-14', 'Laptop Lenovo', '81HM', '', '193124797540', '', '', '', '', '', '', '', 'MP1G6RP / MO. MPNXB8C2909T', '', '', 1, 'Rp. 3.500.000', 'IMG_20190814_0852267.jpg'),
(57, 10, 3, 1, '2019-08-14', 'BIO FINGER', '', '', '', '', '', '', '', 'AF-460', '', '', 'AF6E175260153', '', '', 1, 'Rp. 2.150.000', 'image2.jpg'),
(58, 4, 1, 1, '2019-05-21', 'Pofung Dual -Band Transceiver', 'UV-6R', '', '', '', '2017FP0432', '', '', '', '', '', '18UV6R04099', '7W', '136174400520', 1, '', 'IMG_20190521_083707.jpg'),
(59, 4, 1, 1, '2019-05-21', 'Pofung Dual -Band Transceiver	', 'UV-6R', '', '', '', '2017FP0433', '', '', '', '', '', '18UV6R04106', '7W', '136174400520', 1, '', 'IMG_20190521_083716.jpg'),
(60, 1, 4, 1, '2019-04-18', 'RB951Ui -2HnD', '', 'TV7RB951U-2HND', '', '', '', '', '', 'INTL', 'EU', 'C:C2:DE:00:33:F7:2/:CC:2D:E0:03:3F:77', '80F108BC6748/737/r2', '', '', 1, '', 'IMG_20190418_0902052.jpg'),
(61, 1, 4, 1, '2019-04-18', 'RB951Ui -2HnD', '', 'TV7RB951U-2HND', '', '', '', '', '', 'INTL', 'EU', 'C:C2:DE:00:33:E3:4/:CC:2D:E0:03:3E:39', '80F108C34593/737/r2', '', '', 1, '', 'IMG_20190418_0902281.jpg'),
(62, 1, 4, 1, '2019-04-18', 'RB951Ui -2HnD', '', 'TV7RB951U-2HND', '', '', '', '', '', 'INTL', 'EU', 'C:C2:DE:00:34:43:A/:CC:2D:E0:03:44:3F', '80F108214F95/737/r2', '', '', 1, '', 'IMG_20190418_0902431.jpg'),
(63, 1, 4, 1, '2019-04-18', 'RB951Ui -2HnD', '', 'TV7RB951U-2HND', '', '', '', '', '', 'INTL', 'EU', 'C:C2:DE:00:33:EB:8/:CC:2D:E0:03:3E:BD', '80F1085B875E/737/r2', '', '', 1, '', 'IMG_20190418_0902491.jpg'),
(64, 1, 4, 1, '2019-04-18', 'RB951Ui -2HnD', '', 'TV7RB951U-2HND', '', '', '', '', '', 'INTL', 'EU', 'C:C2:DE:00:34:10:A/:CC:2D:E0:03:41:0F', '80F1087D8E92/737/r2', '', '', 1, '', 'IMG_20190418_0902582.jpg'),
(65, 1, 4, 1, '2019-04-18', 'RB951Ui -2HnD', '', 'TV7RB951U-2HND', '', '', '', '', '', 'INTL', 'EU', 'C:C2:DE:00:33:F2:4 :/ :CC:2D:E0:03:3F:29', '80F108918215/737/r2', '', '', 1, '', 'IMG_20190418_0903051.jpg'),
(66, 1, 4, 1, '2019-04-18', 'RB951Ui -2HnD', '', 'TV7RB951U-2HND', '', '', '', '', '', 'INTL', 'EU', 'C:C2:DE:00:34:44:6 :/ :CC:2D:E0:03:44:4B', '80F108363025/737/r2', '', '', 1, '', 'IMG_20190418_090312.jpg'),
(67, 1, 4, 1, '2019-04-18', 'RB951Ui -2HnD', '', 'TV7RB951U-2HND', '', '', '', '', '', 'INTL', 'EU', 'C:C2:DE:00:34:2F:0 :/ :CC:2D:E0:03:42:F5', '80F108BF6583/737/r2', '', '', 1, '', 'IMG_20190418_090322.jpg'),
(68, 1, 4, 1, '2019-04-18', 'RB951Ui -2HnD', '', 'TV7RB951U-2HND', '', '', '', '', '', 'INTL', 'EU', 'C:C2:DE:00:34:22:4 :/ :CC:2D:E0:03:42:29', '80F1084271B7/737/r2', '', '', 1, '', 'IMG_20190418_0903052.jpg'),
(69, 1, 4, 1, '2019-04-18', 'RB951Ui -2HnD', '', 'TV7RB951U-2HND', '', '', '', '', '', 'INTL', 'EU', 'C:C2:DE:00:33:FD:8 :/ :CC:2D:E0:03:3F:DD', '80F1080EDC7B/737/r2', '', '', 1, '', 'IMG_20190418_090336.jpg'),
(70, 1, 4, 1, '2019-04-18', 'RB951Ui -2HnD', '', 'TV7RB951U-2HND', '', '', '', '', '', 'INTL', 'EU', 'C:C2:DE:00:34:63:8 :/ :CC:2D:E0:03:46:3D', '80F1081F1869/737/r2', '', '', 1, '', 'IMG_20190418_090346.jpg'),
(71, 1, 4, 1, '2019-04-18', 'RB951Ui -2HnD', '', 'TV7RB951U-2HND', '', '', '', '', '', 'INTL', 'EU', 'C:C2:DE:00:34:47:6 :/ :CC:2D:E0:03:44:7B', '80F10875BC69/737/r2', '', '', 1, '', 'IMG_20190418_090353.jpg'),
(72, 1, 4, 1, '2019-04-18', 'RB951Ui -2HnD', '', 'TV7RB951U-2HND', '', '', '', '', '', 'INTL', 'EU', 'C:C2:DE:00:34:55:4 :/ :CC:2D:E0:03:45:59', '80F1083C2724/737/r2', '', '', 1, '', 'IMG_20190418_090403.jpg'),
(73, 1, 4, 1, '2019-04-18', 'RB951Ui -2HnD', '', 'TV7RB951U-2HND', '', '', '', '', '', 'INTL', 'EU', 'C:C2:DE:00:33:FA:8 :/ :CC:2D:E0:03:3F:AD', '80F1080940D8/737/r2', '', '', 1, '', 'IMG_20190418_090412.jpg'),
(74, 1, 4, 1, '2019-04-18', 'RB951Ui -2HnD', '', 'TV7RB951U-2HND', '', '', '', '', '', 'INTL', 'EU', 'C:C2:DE:00:34:02:C/:CC:2D:E0:03:40:31', '80F10885B4D1/737/r2', '', '', 1, '', 'IMG_20190418_090419.jpg'),
(75, 1, 4, 1, '2019-04-18', 'RB951Ui -2HnD', '', 'TV7RB951U-2HND', '', '', '', '', '', 'INTL', 'EU', 'C:C2:DE:00:33:5B:E/:CC:2D:E0:03:35:C3', '80F1085E2FFC/737/r2', '', '', 1, '', 'IMG_20190418_090602.jpg'),
(76, 1, 4, 1, '2019-04-18', 'RB951Ui -2HnD', '', 'TV7RB951U-2HND', '', '', '', '', '', 'INTL', 'EU', 'C:C2:DE:00:34:06:E :/ :CC:2D:E0:03:40:73', '80F108997489/737/r2', '', '', 1, '', 'IMG_20190418_090433.jpg'),
(77, 1, 4, 1, '2019-04-18', 'RB951Ui -2HnD', '', 'TV7RB951U-2HND', '', '', '', '', '', 'INTL', 'EU', 'C:C2:DE:00:33:51:6 :/ :CC:2D:E0:03:35:1B', '80F108B44448/737/r2', '', '', 1, '', 'IMG_20190418_090440.jpg'),
(78, 1, 4, 1, '2019-04-18', 'RB951Ui -2HnD', '', 'TV7RB951U-2HND', '', '', '', '', '', 'INTL', 'EU', 'C:C2:DE:00:34:35:C :/ :CC:2D:E0:03:43:61', '80F10836ECB4/737/r2', '', '', 1, '', 'IMG_20190418_090447.jpg'),
(79, 1, 4, 1, '2019-04-18', 'RB951Ui -2HnD', '', 'TV7RB951U-2HND', '', '', '', '', '', 'INTL', 'EU', 'C:C2:DE:00:34:15:8 :/ :CC:2D:E0:03:41:5D', '80F108E1CAC1/737/r2', '', '', 1, '', 'IMG_20190418_090455.jpg'),
(80, 1, 4, 1, '2019-04-18', 'RB951Ui -2HnD', '', 'TV7RB951U-2HND', '', '', '', '', '', 'INTL', 'EU', 'C:C2:DE:00:34:29:6 :/ :CC:2D:E0:03:42:9B', '80F108D10CA2/737/r2', '', '', 1, '', 'IMG_20190418_090501.jpg'),
(81, 1, 4, 1, '2019-04-18', 'RB951Ui -2HnD', '', 'TV7RB951U-2HND', '', '', '', '', '', 'INTL', 'EU', 'C:C2:DE:00:33:F9:6 :/ :CC:2D:E0:03:3F:9B', '80F10802FF00/737/r2', '', '', 1, '', 'IMG_20190418_0905011.jpg'),
(82, 1, 4, 1, '2019-04-18', 'RB951Ui -2HnD', '', 'TV7RB951U-2HND', '', '', '', '', '', 'INTL', 'EU', 'C:C2:DE:00:33:F9:6 :/ :CC:2D:E0:03:3F:9B', '80F10802FF00/737/r2', '', '', 1, '', 'IMG_20190418_090509.jpg'),
(83, 1, 4, 1, '2019-04-18', 'RB951Ui -2HnD', '', 'TV7RB951U-2HND', '', '', '', '', '', 'INTL', 'EU', 'C:C2:DE:00:33:F4:2 :/ :CC:2D:E0:03:3F:47', '80F108FFEB04/737/r2', '', '', 1, '', 'IMG_20190418_090517.jpg'),
(84, 1, 4, 1, '2019-04-18', 'RB951Ui -2HnD', '', 'TV7RB951U-2HND', '', '', '', '', '', 'INTL', 'EU', 'C:C2:DE:00:33:EC:4 :/ :CC:2D:E0:03:3E:C9', '80F1084CF8EE/737/r2', '', '', 1, '', 'IMG_20190418_090526.jpg'),
(85, 1, 4, 1, '2019-04-18', 'RB951Ui -2HnD', '', 'TV7RB951U-2HND', '', '', '', '', '', 'INTL', 'EU', 'C:C2:DE:00:34:48:E/:CC:2D:E0:03:44:93', '80F1085B4309/737/r2', '', '', 1, '', 'IMG_20190418_0906021.jpg'),
(86, 1, 4, 1, '2019-04-18', 'RB951Ui -2HnD', '', 'TV7RB951U-2HND', '', '', '', '', '', 'INTL', 'EU', 'C:C2:DE:00:34:18:2 :/ :CC:2D:E0:03:41:87', '80F10854ED51/737/r2', '', '', 1, '', 'IMG_20190418_090614.jpg'),
(87, 1, 4, 1, '2019-04-18', 'RB951Ui -2HnD', '', 'TV7RB951U-2HND', '', '', '', '', '', 'INTL', 'EU', 'C:C2:DE:00:33:7F:E :/ :CC:2D:E0:03:38:03', '80F1087CB868/737/r2', '', '', 1, '', 'IMG_20190418_090619.jpg'),
(88, 1, 4, 1, '2019-04-18', 'RB951Ui -2HnD', '', 'TV7RB951U-2HND', '', '', '', '', '', 'INTL', 'EU', 'C:C2:DE:00:33:81:C :/ :CC:2D:E0:03:38:21', '80F1080A8674/737/r2', '', '', 1, '', 'IMG_20190418_090625.jpg'),
(89, 1, 1, 1, '2019-04-18', 'RB951Ui -2HnD', '', 'TV7RB951U-2HND', '', '', '', '', '', 'INTL', 'EU', 'C:C2:DE:00:33:E1:6 :/ :CC:2D:E0:03:3E:1B', '80F108589D63/737/r2', '', '', 1, '', 'IMG_20190418_090636.jpg'),
(90, 1, 4, 1, '2019-04-18', 'RB951Ui -2HnD', '', 'TV7RB951U-2HND', '', '', '', '', '', 'INTL', 'EU', 'C:C2:DE:00:34:17:0/:CC:2D:E0:03:41:75', '80F1088380AB/737/r2', '', '', 1, '', 'IMG_20190418_090641.jpg'),
(91, 1, 4, 1, '2019-04-18', 'RB951Ui -2HnD', '', 'TV7RB951U-2HND', '', '', '', '', '', 'INTL', 'EU', 'C:C2:DE:00:34:34:4 :/ :CC:2D:E0:03:43:49', '80F108172A92/737/r2', '', '', 1, '', 'IMG_20190418_090647.jpg'),
(92, 1, 4, 1, '2019-04-18', 'RB951Ui -2HnD', '', 'TV7RB951U-2HND', '', '', '', '', '', 'INTL', 'EU', 'C:C2:DE:00:34:18:E/:CC:2D:E0:03:41:93', '80F108440E42/737/r2', '', '', 1, '', 'IMG_20190418_090654.jpg'),
(93, 1, 4, 1, '2019-04-18', 'RB951Ui -2HnD', '', 'TV7RB951U-2HND', '', '', '', '', '', 'INTL', 'EU', 'C:C2:DE:00:34:1F:A :/ :CC:2D:E0:03:41:FF', '80F108F233EF/737/r2', '', '', 1, '', 'IMG_20190418_090703.jpg'),
(94, 1, 4, 1, '2019-04-18', 'RB951Ui -2HnD', '', 'TV7RB951U-2HND', '', '', '', '', '', 'INTL', 'EU', 'C:C2:DE:00:33:A1:A :/ :CC:2D:E0:03:3A:1F', '80F108857086/737/r2', '', '', 1, '', 'IMG_20190418_090749.jpg'),
(95, 1, 4, 1, '2019-04-18', 'RB951Ui -2HnD', '', 'TV7RB951U-2HND', '', '', '', '', '', 'INTL', 'EU', 'C:C2:DE:00:33:9B:A/:CC:2D:E0:03:39:BF', '80F1087A9DE9/737/r2', '', '', 1, '', 'IMG_20190418_090841.jpg'),
(96, 1, 4, 1, '2019-04-18', 'RB951Ui -2HnD', '', 'TV7RB951U-2HND', '', '', '', '', '', 'INTL', 'EU', 'C:C2:DE:00:33:BE:E/:CC:2D:E0:03:3B:F3', '80F108692F48/737/r2', '', '', 1, '', 'IMG_20190418_090854.jpg'),
(97, 1, 4, 1, '2019-04-18', 'RB951Ui -2HnD', '', 'TV7RB951U-2HND', '', '', '', '', '', 'INTL', 'EU', 'C:C2:DE:00:33:B1:0 :/ :CC:2D:E0:03:3B:15', '80F108AEA1A1/737/r2', '', '', 1, '', 'IMG_20190418_090906.jpg'),
(98, 1, 4, 1, '2019-04-18', 'RB951Ui -2HnD', '', 'TV7RB951U-2HND', '', '', '', '', '', 'INTL', 'EU', 'C:C2:DE:00:33:B7:0/:CC:2D:E0:03:3B:75', '80F10829B939/737/r2', '', '', 1, '', 'IMG_20190418_090915.jpg'),
(99, 1, 4, 1, '2019-04-18', 'RB951Ui -2HnD', '', 'TV7RB951U-2HND', '', '', '', '', '', 'INTL', 'EU', 'C:C2:DE:00:33:B2:E :/ :CC:2D:E0:03:3B:33', '80F108A51E79/737/r2', '', '', 1, '', 'IMG_20190418_090921.jpg'),
(100, 1, 4, 1, '2019-04-18', 'RB951Ui -2HnD', '', 'TV7RB951U-2HND', '', '', '', '', '', 'INTL', 'EU', 'C:C2:DE:00:33:9C:0 :/ :CC:2D:E0:03:39:C5', '80F1088493D0/737/r2', '', '', 1, '', 'IMG_20190418_090939.jpg'),
(101, 1, 4, 1, '2019-04-18', 'RB951Ui -2HnD', '', 'TV7RB951U-2HND', '', '', '', '', '', 'INTL', 'EU', 'C:C2:DE:00:33:AD:4/:CC:2D:E0:03:3A:D9', '80F108017223/737/r2', '', '', 1, '', 'IMG_20190418_090943.jpg'),
(102, 1, 4, 1, '2019-04-18', 'RB951Ui -2HnD', '', 'TV7RB951U-2HND', '', '', '', '', '', 'INTL', 'EU', 'C:C2:DE:00:33:8A:6/:CC:2D:E0:03:38:AB', '80F10838B97C/737/r2', '', '', 1, '', 'IMG_20190418_090950.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_detail_rka`
--

CREATE TABLE `tbl_detail_rka` (
  `id` int(11) NOT NULL,
  `id_rka` int(11) NOT NULL,
  `id_rekening` int(11) NOT NULL,
  `sub_total_detail` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_detail_rka`
--

INSERT INTO `tbl_detail_rka` (`id`, `id_rka`, `id_rekening`, `sub_total_detail`) VALUES
(8, 1, 1, 0);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_detail_sub_rka`
--

CREATE TABLE `tbl_detail_sub_rka` (
  `id` int(11) NOT NULL,
  `id_detail` int(11) NOT NULL,
  `id_sub_rek` int(11) NOT NULL,
  `qty` int(11) NOT NULL,
  `sub_total` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_jenis`
--
=======
  `img_barang` varchar(200) NOT NULL,
  PRIMARY KEY (`id_barang`)
) ENGINE=InnoDB AUTO_INCREMENT=103 DEFAULT CHARSET=latin1;

/*Data for the table `tbl_barang` */

insert  into `tbl_barang`(`id_barang`,`id_jenis`,`id_kegiatan`,`id_satuan`,`tgl_barang`,`nama_barang`,`model_barang`,`fcc_barang`,`upc_barang`,`hwversi_barang`,`cmiit_barang`,`kg_barang`,`produk_barang`,`type_barang`,`plug_barang`,`mac_barang`,`seri_barang`,`power_barang`,`frek_barang`,`stok_barang`,`harga_barang`,`img_barang`) values 
(54,6,3,1,'2019-08-14','Laptop Lenovo','81HM','','1931247540','','','','','','','','MP1G82NJ / MO. MPNXB8C2909T','','',1,'Rp. 3.500.000','IMG_20190814_0852265.jpg'),
(56,6,3,1,'2019-08-14','Laptop Lenovo','81HM','','193124797540','','','','','','','','MP1G6RP / MO. MPNXB8C2909T','','',1,'Rp. 3.500.000','IMG_20190814_0852267.jpg'),
(57,10,3,1,'2019-08-14','BIO FINGER','','','','','','','','AF-460','','','AF6E175260153','','',1,'Rp. 2.150.000','image2.jpg'),
(58,4,1,1,'2019-05-21','Pofung Dual -Band Transceiver','UV-6R','','','','2017FP0432','','','','','','18UV6R04099','7W','136174400520',1,'','IMG_20190521_083707.jpg'),
(59,4,1,1,'2019-05-21','Pofung Dual -Band Transceiver	','UV-6R','','','','2017FP0433','','','','','','18UV6R04106','7W','136174400520',1,'','IMG_20190521_083716.jpg'),
(60,1,4,1,'2019-04-18','RB951Ui -2HnD','','TV7RB951U-2HND','','','','','','INTL','EU','C:C2:DE:00:33:F7:2/:CC:2D:E0:03:3F:77','80F108BC6748/737/r2','','',1,'','IMG_20190418_0902052.jpg'),
(61,1,4,1,'2019-04-18','RB951Ui -2HnD','','TV7RB951U-2HND','','','','','','INTL','EU','C:C2:DE:00:33:E3:4/:CC:2D:E0:03:3E:39','80F108C34593/737/r2','','',1,'','IMG_20190418_0902281.jpg'),
(62,1,4,1,'2019-04-18','RB951Ui -2HnD','','TV7RB951U-2HND','','','','','','INTL','EU','C:C2:DE:00:34:43:A/:CC:2D:E0:03:44:3F','80F108214F95/737/r2','','',1,'','IMG_20190418_0902431.jpg'),
(63,1,4,1,'2019-04-18','RB951Ui -2HnD','','TV7RB951U-2HND','','','','','','INTL','EU','C:C2:DE:00:33:EB:8/:CC:2D:E0:03:3E:BD','80F1085B875E/737/r2','','',1,'','IMG_20190418_0902491.jpg'),
(64,1,4,1,'2019-04-18','RB951Ui -2HnD','','TV7RB951U-2HND','','','','','','INTL','EU','C:C2:DE:00:34:10:A/:CC:2D:E0:03:41:0F','80F1087D8E92/737/r2','','',1,'','IMG_20190418_0902582.jpg'),
(65,1,4,1,'2019-04-18','RB951Ui -2HnD','','TV7RB951U-2HND','','','','','','INTL','EU','C:C2:DE:00:33:F2:4 :/ :CC:2D:E0:03:3F:29','80F108918215/737/r2','','',1,'','IMG_20190418_0903051.jpg'),
(66,1,4,1,'2019-04-18','RB951Ui -2HnD','','TV7RB951U-2HND','','','','','','INTL','EU','C:C2:DE:00:34:44:6 :/ :CC:2D:E0:03:44:4B','80F108363025/737/r2','','',1,'','IMG_20190418_090312.jpg'),
(67,1,4,1,'2019-04-18','RB951Ui -2HnD','','TV7RB951U-2HND','','','','','','INTL','EU','C:C2:DE:00:34:2F:0 :/ :CC:2D:E0:03:42:F5','80F108BF6583/737/r2','','',1,'','IMG_20190418_090322.jpg'),
(68,1,4,1,'2019-04-18','RB951Ui -2HnD','','TV7RB951U-2HND','','','','','','INTL','EU','C:C2:DE:00:34:22:4 :/ :CC:2D:E0:03:42:29','80F1084271B7/737/r2','','',1,'','IMG_20190418_0903052.jpg'),
(69,1,4,1,'2019-04-18','RB951Ui -2HnD','','TV7RB951U-2HND','','','','','','INTL','EU','C:C2:DE:00:33:FD:8 :/ :CC:2D:E0:03:3F:DD','80F1080EDC7B/737/r2','','',1,'','IMG_20190418_090336.jpg'),
(70,1,4,1,'2019-04-18','RB951Ui -2HnD','','TV7RB951U-2HND','','','','','','INTL','EU','C:C2:DE:00:34:63:8 :/ :CC:2D:E0:03:46:3D','80F1081F1869/737/r2','','',1,'','IMG_20190418_090346.jpg'),
(71,1,4,1,'2019-04-18','RB951Ui -2HnD','','TV7RB951U-2HND','','','','','','INTL','EU','C:C2:DE:00:34:47:6 :/ :CC:2D:E0:03:44:7B','80F10875BC69/737/r2','','',1,'','IMG_20190418_090353.jpg'),
(72,1,4,1,'2019-04-18','RB951Ui -2HnD','','TV7RB951U-2HND','','','','','','INTL','EU','C:C2:DE:00:34:55:4 :/ :CC:2D:E0:03:45:59','80F1083C2724/737/r2','','',1,'','IMG_20190418_090403.jpg'),
(73,1,4,1,'2019-04-18','RB951Ui -2HnD','','TV7RB951U-2HND','','','','','','INTL','EU','C:C2:DE:00:33:FA:8 :/ :CC:2D:E0:03:3F:AD','80F1080940D8/737/r2','','',1,'','IMG_20190418_090412.jpg'),
(74,1,4,1,'2019-04-18','RB951Ui -2HnD','','TV7RB951U-2HND','','','','','','INTL','EU','C:C2:DE:00:34:02:C/:CC:2D:E0:03:40:31','80F10885B4D1/737/r2','','',1,'','IMG_20190418_090419.jpg'),
(75,1,4,1,'2019-04-18','RB951Ui -2HnD','','TV7RB951U-2HND','','','','','','INTL','EU','C:C2:DE:00:33:5B:E/:CC:2D:E0:03:35:C3','80F1085E2FFC/737/r2','','',1,'','IMG_20190418_090602.jpg'),
(76,1,4,1,'2019-04-18','RB951Ui -2HnD','','TV7RB951U-2HND','','','','','','INTL','EU','C:C2:DE:00:34:06:E :/ :CC:2D:E0:03:40:73','80F108997489/737/r2','','',1,'','IMG_20190418_090433.jpg'),
(77,1,4,1,'2019-04-18','RB951Ui -2HnD','','TV7RB951U-2HND','','','','','','INTL','EU','C:C2:DE:00:33:51:6 :/ :CC:2D:E0:03:35:1B','80F108B44448/737/r2','','',1,'','IMG_20190418_090440.jpg'),
(78,1,4,1,'2019-04-18','RB951Ui -2HnD','','TV7RB951U-2HND','','','','','','INTL','EU','C:C2:DE:00:34:35:C :/ :CC:2D:E0:03:43:61','80F10836ECB4/737/r2','','',1,'','IMG_20190418_090447.jpg'),
(79,1,4,1,'2019-04-18','RB951Ui -2HnD','','TV7RB951U-2HND','','','','','','INTL','EU','C:C2:DE:00:34:15:8 :/ :CC:2D:E0:03:41:5D','80F108E1CAC1/737/r2','','',1,'','IMG_20190418_090455.jpg'),
(80,1,4,1,'2019-04-18','RB951Ui -2HnD','','TV7RB951U-2HND','','','','','','INTL','EU','C:C2:DE:00:34:29:6 :/ :CC:2D:E0:03:42:9B','80F108D10CA2/737/r2','','',1,'','IMG_20190418_090501.jpg'),
(81,1,4,1,'2019-04-18','RB951Ui -2HnD','','TV7RB951U-2HND','','','','','','INTL','EU','C:C2:DE:00:33:F9:6 :/ :CC:2D:E0:03:3F:9B','80F10802FF00/737/r2','','',1,'','IMG_20190418_0905011.jpg'),
(82,1,4,1,'2019-04-18','RB951Ui -2HnD','','TV7RB951U-2HND','','','','','','INTL','EU','C:C2:DE:00:33:F9:6 :/ :CC:2D:E0:03:3F:9B','80F10802FF00/737/r2','','',1,'','IMG_20190418_090509.jpg'),
(83,1,4,1,'2019-04-18','RB951Ui -2HnD','','TV7RB951U-2HND','','','','','','INTL','EU','C:C2:DE:00:33:F4:2 :/ :CC:2D:E0:03:3F:47','80F108FFEB04/737/r2','','',1,'','IMG_20190418_090517.jpg'),
(84,1,4,1,'2019-04-18','RB951Ui -2HnD','','TV7RB951U-2HND','','','','','','INTL','EU','C:C2:DE:00:33:EC:4 :/ :CC:2D:E0:03:3E:C9','80F1084CF8EE/737/r2','','',1,'','IMG_20190418_090526.jpg'),
(85,1,4,1,'2019-04-18','RB951Ui -2HnD','','TV7RB951U-2HND','','','','','','INTL','EU','C:C2:DE:00:34:48:E/:CC:2D:E0:03:44:93','80F1085B4309/737/r2','','',1,'','IMG_20190418_0906021.jpg'),
(86,1,4,1,'2019-04-18','RB951Ui -2HnD','','TV7RB951U-2HND','','','','','','INTL','EU','C:C2:DE:00:34:18:2 :/ :CC:2D:E0:03:41:87','80F10854ED51/737/r2','','',1,'','IMG_20190418_090614.jpg'),
(87,1,4,1,'2019-04-18','RB951Ui -2HnD','','TV7RB951U-2HND','','','','','','INTL','EU','C:C2:DE:00:33:7F:E :/ :CC:2D:E0:03:38:03','80F1087CB868/737/r2','','',1,'','IMG_20190418_090619.jpg'),
(88,1,4,1,'2019-04-18','RB951Ui -2HnD','','TV7RB951U-2HND','','','','','','INTL','EU','C:C2:DE:00:33:81:C :/ :CC:2D:E0:03:38:21','80F1080A8674/737/r2','','',1,'','IMG_20190418_090625.jpg'),
(89,1,1,1,'2019-04-18','RB951Ui -2HnD','','TV7RB951U-2HND','','','','','','INTL','EU','C:C2:DE:00:33:E1:6 :/ :CC:2D:E0:03:3E:1B','80F108589D63/737/r2','','',1,'','IMG_20190418_090636.jpg'),
(90,1,4,1,'2019-04-18','RB951Ui -2HnD','','TV7RB951U-2HND','','','','','','INTL','EU','C:C2:DE:00:34:17:0/:CC:2D:E0:03:41:75','80F1088380AB/737/r2','','',1,'','IMG_20190418_090641.jpg'),
(91,1,4,1,'2019-04-18','RB951Ui -2HnD','','TV7RB951U-2HND','','','','','','INTL','EU','C:C2:DE:00:34:34:4 :/ :CC:2D:E0:03:43:49','80F108172A92/737/r2','','',1,'','IMG_20190418_090647.jpg'),
(92,1,4,1,'2019-04-18','RB951Ui -2HnD','','TV7RB951U-2HND','','','','','','INTL','EU','C:C2:DE:00:34:18:E/:CC:2D:E0:03:41:93','80F108440E42/737/r2','','',1,'','IMG_20190418_090654.jpg'),
(93,1,4,1,'2019-04-18','RB951Ui -2HnD','','TV7RB951U-2HND','','','','','','INTL','EU','C:C2:DE:00:34:1F:A :/ :CC:2D:E0:03:41:FF','80F108F233EF/737/r2','','',1,'','IMG_20190418_090703.jpg'),
(94,1,4,1,'2019-04-18','RB951Ui -2HnD','','TV7RB951U-2HND','','','','','','INTL','EU','C:C2:DE:00:33:A1:A :/ :CC:2D:E0:03:3A:1F','80F108857086/737/r2','','',1,'','IMG_20190418_090749.jpg'),
(95,1,4,1,'2019-04-18','RB951Ui -2HnD','','TV7RB951U-2HND','','','','','','INTL','EU','C:C2:DE:00:33:9B:A/:CC:2D:E0:03:39:BF','80F1087A9DE9/737/r2','','',1,'','IMG_20190418_090841.jpg'),
(96,1,4,1,'2019-04-18','RB951Ui -2HnD','','TV7RB951U-2HND','','','','','','INTL','EU','C:C2:DE:00:33:BE:E/:CC:2D:E0:03:3B:F3','80F108692F48/737/r2','','',1,'','IMG_20190418_090854.jpg'),
(97,1,4,1,'2019-04-18','RB951Ui -2HnD','','TV7RB951U-2HND','','','','','','INTL','EU','C:C2:DE:00:33:B1:0 :/ :CC:2D:E0:03:3B:15','80F108AEA1A1/737/r2','','',1,'','IMG_20190418_090906.jpg'),
(98,1,4,1,'2019-04-18','RB951Ui -2HnD','','TV7RB951U-2HND','','','','','','INTL','EU','C:C2:DE:00:33:B7:0/:CC:2D:E0:03:3B:75','80F10829B939/737/r2','','',1,'','IMG_20190418_090915.jpg'),
(99,1,4,1,'2019-04-18','RB951Ui -2HnD','','TV7RB951U-2HND','','','','','','INTL','EU','C:C2:DE:00:33:B2:E :/ :CC:2D:E0:03:3B:33','80F108A51E79/737/r2','','',1,'','IMG_20190418_090921.jpg'),
(100,1,4,1,'2019-04-18','RB951Ui -2HnD','','TV7RB951U-2HND','','','','','','INTL','EU','C:C2:DE:00:33:9C:0 :/ :CC:2D:E0:03:39:C5','80F1088493D0/737/r2','','',1,'','IMG_20190418_090939.jpg'),
(101,1,4,1,'2019-04-18','RB951Ui -2HnD','','TV7RB951U-2HND','','','','','','INTL','EU','C:C2:DE:00:33:AD:4/:CC:2D:E0:03:3A:D9','80F108017223/737/r2','','',1,'','IMG_20190418_090943.jpg'),
(102,1,4,1,'2019-04-18','RB951Ui -2HnD','','TV7RB951U-2HND','','','','','','INTL','EU','C:C2:DE:00:33:8A:6/:CC:2D:E0:03:38:AB','80F10838B97C/737/r2','','',1,'','IMG_20190418_090950.jpg');

/*Table structure for table `tbl_detail_rka` */

DROP TABLE IF EXISTS `tbl_detail_rka`;

CREATE TABLE `tbl_detail_rka` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_rka` int(11) NOT NULL,
  `id_rekening` int(11) NOT NULL,
  `id_satuan` int(11) NOT NULL,
  `keterangan` text NOT NULL,
  `jumlah` int(11) NOT NULL,
  `harga` int(11) NOT NULL,
  `sub_total_detail` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb4;

/*Data for the table `tbl_detail_rka` */

insert  into `tbl_detail_rka`(`id`,`id_rka`,`id_rekening`,`id_satuan`,`keterangan`,`jumlah`,`harga`,`sub_total_detail`) values 
(7,1,1,1,'Beli Jajan',3,50000,150000);

/*Table structure for table `tbl_jenis` */

DROP TABLE IF EXISTS `tbl_jenis`;
>>>>>>> ba9419c (-)

CREATE TABLE `tbl_jenis` (
  `id_jenis` int(11) NOT NULL AUTO_INCREMENT,
  `nama_jenis` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id_jenis`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8;

/*Data for the table `tbl_jenis` */

insert  into `tbl_jenis`(`id_jenis`,`nama_jenis`) values 
(1,'Router'),
(2,'Switch'),
(3,'Ubiquiti 19'),
(4,'HT'),
(5,'Headphone'),
(6,'Laptop'),
(7,'MM'),
(8,'Finger');

/*Table structure for table `tbl_kegiatan` */

DROP TABLE IF EXISTS `tbl_kegiatan`;

CREATE TABLE `tbl_kegiatan` (
  `id_kegiatan` int(11) NOT NULL AUTO_INCREMENT,
  `kode_kegiatan` varchar(20) NOT NULL,
  `nama_kegiatan` varchar(200) NOT NULL,
  PRIMARY KEY (`id_kegiatan`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

/*Data for the table `tbl_kegiatan` */

insert  into `tbl_kegiatan`(`id_kegiatan`,`kode_kegiatan`,`nama_kegiatan`) values 
(3,'24.02','Pengembangan Sistem Informasi Pemerintah'),
(4,'26.02','Layanan website lembaga, Pelayanan publik dan kegiatan pemerintah daerah');

/*Table structure for table `tbl_menu` */

DROP TABLE IF EXISTS `tbl_menu`;

CREATE TABLE `tbl_menu` (
  `id_menu` int(11) NOT NULL AUTO_INCREMENT,
  `nama_menu` varchar(50) NOT NULL,
  `icon_menu` varchar(50) NOT NULL,
  PRIMARY KEY (`id_menu`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

/*Data for the table `tbl_menu` */

insert  into `tbl_menu`(`id_menu`,`nama_menu`,`icon_menu`) values 
(2,'Data Master','nav-icon fas fa-th'),
(8,'Operasional','nav-icon fas fa-book');

/*Table structure for table `tbl_npd` */

DROP TABLE IF EXISTS `tbl_npd`;

CREATE TABLE `tbl_npd` (
  `id_npd` int(11) NOT NULL AUTO_INCREMENT,
  `id_periode` int(11) NOT NULL,
  `tgl_npd` date NOT NULL,
  `judul_npd` varchar(200) NOT NULL,
  `nosurat_npd` varchar(100) NOT NULL,
  `dari_npd` varchar(400) NOT NULL,
  `kepada_npd` varchar(400) NOT NULL,
  `perihal_npd` varchar(200) NOT NULL,
  PRIMARY KEY (`id_npd`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

/*Data for the table `tbl_npd` */

insert  into `tbl_npd`(`id_npd`,`id_periode`,`tgl_npd`,`judul_npd`,`nosurat_npd`,`dari_npd`,`kepada_npd`,`perihal_npd`) values 
(1,1,'2020-08-01','NOTA PENCAIRAN DANA (NPD)','2.10.01.1/0143/24.01/2019 ','Pengguna Anggaran Dinas Komunikasi dan Informatika Kabupaten Bondowoso','PPTK Kegiatan Perencanaan dan Pengembangan Kebijakan Komunikasi dan Informasi','Permohonan Panjar Kegiatan Perencanaan dan Pengembangan Kebijakan Komunikasi dan Informasi'),
(2,2,'2020-09-30','Nota Pencairan Dana','127/0/0/1','Dinas Kominfo','PPTK','Pencairan dana');

/*Table structure for table `tbl_npd_detail` */

DROP TABLE IF EXISTS `tbl_npd_detail`;

CREATE TABLE `tbl_npd_detail` (
  `id_npd_detail` int(11) NOT NULL AUTO_INCREMENT,
  `id_npd` int(11) NOT NULL,
  `id_rekening` int(11) NOT NULL,
  `anggaran` int(11) NOT NULL,
  `realisasi_seb` int(11) NOT NULL,
  `sisa_anggaran` int(11) NOT NULL,
  `panjar_ygdmt` int(11) NOT NULL,
  PRIMARY KEY (`id_npd_detail`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=latin1;

/*Data for the table `tbl_npd_detail` */

insert  into `tbl_npd_detail`(`id_npd_detail`,`id_npd`,`id_rekening`,`anggaran`,`realisasi_seb`,`sisa_anggaran`,`panjar_ygdmt`) values 
(6,1,1,5400001,0,0,170000),
(7,2,1,-9000001,0,0,-100000),
(10,1,2,0,0,0,0),
(11,1,3,0,0,0,0);

/*Table structure for table `tbl_npd_detail_sub` */

DROP TABLE IF EXISTS `tbl_npd_detail_sub`;

CREATE TABLE `tbl_npd_detail_sub` (
  `id_npd_detail_sub` int(11) NOT NULL AUTO_INCREMENT,
  `id_npd_detail` int(11) NOT NULL,
  `id_sub_rek` int(11) NOT NULL,
  `anggaran` int(11) NOT NULL,
  `realisasi_seb` int(11) NOT NULL,
  `sisa_anggaran` int(11) NOT NULL,
  `panjar_ygdmt` int(11) NOT NULL,
  PRIMARY KEY (`id_npd_detail_sub`)
) ENGINE=InnoDB AUTO_INCREMENT=24 DEFAULT CHARSET=latin1;

/*Data for the table `tbl_npd_detail_sub` */

insert  into `tbl_npd_detail_sub`(`id_npd_detail_sub`,`id_npd_detail`,`id_sub_rek`,`anggaran`,`realisasi_seb`,`sisa_anggaran`,`panjar_ygdmt`) values 
(21,6,2,5000001,0,0,100000),
(23,6,1,400000,0,0,70000);

/*Table structure for table `tbl_periode` */

DROP TABLE IF EXISTS `tbl_periode`;

CREATE TABLE `tbl_periode` (
  `id_periode` int(11) NOT NULL AUTO_INCREMENT,
  `tgl_mulai` date NOT NULL,
  `tgl_akhir` date NOT NULL,
  PRIMARY KEY (`id_periode`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

/*Data for the table `tbl_periode` */

insert  into `tbl_periode`(`id_periode`,`tgl_mulai`,`tgl_akhir`) values 
(1,'2020-01-01','2020-06-30'),
(2,'2020-07-01','2020-12-31');

/*Table structure for table `tbl_rekening` */

DROP TABLE IF EXISTS `tbl_rekening`;

CREATE TABLE `tbl_rekening` (
  `id_rekening` int(11) NOT NULL AUTO_INCREMENT,
  `kode_rekening` varchar(50) NOT NULL,
<<<<<<< HEAD
  `uraian_rekening` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_rekening`
--

INSERT INTO `tbl_rekening` (`id_rekening`, `kode_rekening`, `uraian_rekening`) VALUES
(1, '5.2.1.01.01', 'Honorarium Panitia Pelaksana Kegiatan'),
(2, '5.2.2.01.01', 'Belanja Alat Tulis Kantor'),
(3, '5.2.2.01.04', 'Belanja Perangko, Materai dan Benda Pos Lainnya'),
(4, '5.2.2.01.06', 'Belanja Bahan Bakar Minyak / Gas'),
(5, '5.2.2.03.03', 'Belanja Listrik'),
(6, '5.2.2.03.05', 'Belanja Surat Kabar / Majalah'),
(7, '5.2.2.06.01', 'Belanja Cetak'),
(8, '5.2.2.06.02', 'Belanja Pengadaan'),
(9, '5.2.2.11.02', 'Belanja Makanan dan Minuman Rapat'),
(10, '5.2.2.15.02', 'Belanja Peralatan Dinas Luas Daerah'),
(12, '5.2.2.20.06', 'Belanja Pemeliharan Aset Tetap Lainnya'),
(13, '5.2.2.33.02', 'Belanja Dekorasi'),
(14, '5.2.2.33.03', 'Belanja Tenaga Kerja Non Pegawai'),
(15, '5.2.2.37.01', 'Belanja Tenaga Ahli / Instruktur / Narasumber'),
(16, '5.2.3.29.06', 'Belanja Modal Peralatan dan Mesin - Pengadaan Peralatan Jaringan'),
(17, '5.2.2.08.01', 'Belanja Sewa Sarana Mobilitas Darat'),
(18, '5.2.2.15.01', 'Belanja Perjalanan Dinas Dalam Daerah'),
(19, '5.2.2.03.06', 'Belanja Kawat / Faksimili / Internet / Intranet / TV Kabel / TV Satelit'),
(20, '5.2.3.90.02', 'Belanja Modal Aset Lainnya - Pengadaan Website');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_rka`
--

CREATE TABLE `tbl_rka` (
  `id_rka` int(11) NOT NULL,
  `nama_rka` varchar(255) NOT NULL,
  `pagu` int(11) NOT NULL,
  `total` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_rka`
--

INSERT INTO `tbl_rka` (`id_rka`, `nama_rka`, `pagu`, `total`) VALUES
(1, 'Pengolahan data e-gov', 1000000, 800000);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_role`
--
=======
  `uraian_rekening` varchar(200) NOT NULL,
  PRIMARY KEY (`id_rekening`)
) ENGINE=InnoDB AUTO_INCREMENT=21 DEFAULT CHARSET=latin1;

/*Data for the table `tbl_rekening` */

insert  into `tbl_rekening`(`id_rekening`,`kode_rekening`,`uraian_rekening`) values 
(1,'5.2.1.01.01','Honorarium Panitia Pelaksana Kegiatan'),
(2,'5.2.2.01.01','Belanja Alat Tulis Kantor'),
(3,'5.2.2.01.04','Belanja Perangko, Materai dan Benda Pos Lainnya'),
(4,'5.2.2.01.06','Belanja Bahan Bakar Minyak / Gas'),
(5,'5.2.2.03.03','Belanja Listrik'),
(6,'5.2.2.03.05','Belanja Surat Kabar / Majalah'),
(7,'5.2.2.06.01','Belanja Cetak'),
(8,'5.2.2.06.02','Belanja Pengadaan'),
(9,'5.2.2.11.02','Belanja Makanan dan Minuman Rapat'),
(10,'5.2.2.15.02','Belanja Peralatan Dinas Luas Daerah'),
(12,'5.2.2.20.06','Belanja Pemeliharan Aset Tetap Lainnya'),
(13,'5.2.2.33.02','Belanja Dekorasi'),
(14,'5.2.2.33.03','Belanja Tenaga Kerja Non Pegawai'),
(15,'5.2.2.37.01','Belanja Tenaga Ahli / Instruktur / Narasumber'),
(16,'5.2.3.29.06','Belanja Modal Peralatan dan Mesin - Pengadaan Peralatan Jaringan'),
(17,'5.2.2.08.01','Belanja Sewa Sarana Mobilitas Darat'),
(18,'5.2.2.15.01','Belanja Perjalanan Dinas Dalam Daerah'),
(19,'5.2.2.03.06','Belanja Kawat / Faksimili / Internet / Intranet / TV Kabel / TV Satelit'),
(20,'5.2.3.90.02','Belanja Modal Aset Lainnya - Pengadaan Website');

/*Table structure for table `tbl_rka` */

DROP TABLE IF EXISTS `tbl_rka`;

CREATE TABLE `tbl_rka` (
  `id_rka` int(11) NOT NULL AUTO_INCREMENT,
  `nama_rka` varchar(255) NOT NULL,
  `pagu` int(11) NOT NULL,
  `total` int(11) NOT NULL,
  PRIMARY KEY (`id_rka`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4;

/*Data for the table `tbl_rka` */

insert  into `tbl_rka`(`id_rka`,`nama_rka`,`pagu`,`total`) values 
(1,'Pengolahan data e-gov',1000000,800000);

/*Table structure for table `tbl_role` */

DROP TABLE IF EXISTS `tbl_role`;
>>>>>>> ba9419c (-)

CREATE TABLE `tbl_role` (
  `id_role` int(11) NOT NULL AUTO_INCREMENT,
  `id_dinas` int(11) NOT NULL,
  `nama_role` varchar(50) NOT NULL,
  PRIMARY KEY (`id_role`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

/*Data for the table `tbl_role` */

insert  into `tbl_role`(`id_role`,`id_dinas`,`nama_role`) values 
(1,1,'Superadmin'),
(2,1,'Admin');

/*Table structure for table `tbl_satuan` */

DROP TABLE IF EXISTS `tbl_satuan`;

CREATE TABLE `tbl_satuan` (
  `id_satuan` int(11) NOT NULL AUTO_INCREMENT,
  `nama_satuan` varchar(255) NOT NULL,
  PRIMARY KEY (`id_satuan`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4;

/*Data for the table `tbl_satuan` */

insert  into `tbl_satuan`(`id_satuan`,`nama_satuan`) values 
(1,'paket');

/*Table structure for table `tbl_sub_menu` */

DROP TABLE IF EXISTS `tbl_sub_menu`;

CREATE TABLE `tbl_sub_menu` (
  `id_sub_menu` int(11) NOT NULL AUTO_INCREMENT,
  `id_menu` int(11) NOT NULL,
  `nama_sub_menu` varchar(30) NOT NULL,
<<<<<<< HEAD
  `link_sub_menu` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_sub_menu`
--

INSERT INTO `tbl_sub_menu` (`id_sub_menu`, `id_menu`, `nama_sub_menu`, `link_sub_menu`) VALUES
(3, 2, 'Master Menu', 'Menu/index'),
(4, 2, 'Master Role', 'Role/index'),
(7, 2, 'Master Menu Sub', 'Submenu/index'),
(14, 2, 'Master User', 'User/index'),
(18, 2, 'Master Kegiatan', 'Kegiatan/index'),
(19, 8, 'Nota Pencairan Dana', 'Pencairandana/index'),
(21, 2, 'Master Rekening', 'Rekening/index'),
(22, 2, 'Master Rekening Sub', 'Rekeningsub/index'),
(23, 2, 'Master Periode', 'Periode/index'),
(24, 2, 'Master Anggaran', 'Anggaran/index'),
(25, 8, 'Pencatatan Barang', 'Barang/index'),
(26, 8, 'Surat Keluar', 'Suratkeluar/index'),
(27, 2, 'Master Jenis', 'Jenis/index'),
(28, 8, 'Pencatatan RKA', 'RKA/index');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_sub_rek`
--
=======
  `link_sub_menu` varchar(50) NOT NULL,
  PRIMARY KEY (`id_sub_menu`)
) ENGINE=InnoDB AUTO_INCREMENT=29 DEFAULT CHARSET=latin1;

/*Data for the table `tbl_sub_menu` */

insert  into `tbl_sub_menu`(`id_sub_menu`,`id_menu`,`nama_sub_menu`,`link_sub_menu`) values 
(3,2,'Master Menu','Menu/index'),
(4,2,'Master Role','Role/index'),
(7,2,'Master Menu Sub','Submenu/index'),
(14,2,'Master User','User/index'),
(18,2,'Master Kegiatan','Kegiatan/index'),
(19,8,'Nota Pencairan Dana','Pencairandana/index'),
(21,2,'Master Rekening','Rekening/index'),
(22,2,'Master Rekening Sub','Rekeningsub/index'),
(23,2,'Master Periode','Periode/index'),
(24,2,'Master Anggaran','Anggaran/index'),
(25,8,'Pencatatan Barang','Barang/index'),
(26,8,'Surat Keluar','Suratkeluar/index'),
(27,2,'Master Jenis','Jenis/index'),
(28,8,'Pencatatan RKA','RKA/index');

/*Table structure for table `tbl_sub_rek` */

DROP TABLE IF EXISTS `tbl_sub_rek`;
>>>>>>> ba9419c (-)

CREATE TABLE `tbl_sub_rek` (
  `id_sub_rek` int(11) NOT NULL AUTO_INCREMENT,
  `id_rekening` int(11) NOT NULL,
  `uraian_sub_rek` varchar(120) NOT NULL,
  PRIMARY KEY (`id_sub_rek`)
) ENGINE=InnoDB AUTO_INCREMENT=23 DEFAULT CHARSET=latin1;

/*Data for the table `tbl_sub_rek` */

insert  into `tbl_sub_rek`(`id_sub_rek`,`id_rekening`,`uraian_sub_rek`) values 
(1,1,'Pengarah 1'),
(2,1,'Pengarah 2'),
(3,1,'Pengarah 3'),
(4,1,'Penanggung Jawab'),
(5,1,'Ketua'),
(6,1,'PPTK'),
(7,1,'Staff Admin'),
(8,2,'Kertas HVS'),
(9,2,'Refill Tinta Printer'),
(10,2,'Catridge Hitam'),
(11,2,'Catridge Warna'),
(12,2,'Spidol Boardmarker'),
(13,2,'Ordner'),
(14,2,'Map Kertas'),
(15,2,'Paper Clip'),
(16,2,'Stapler'),
(17,2,'Isi Stapler'),
(18,2,'Lem Kertas'),
(19,2,'Cutter'),
(20,2,'Gunting'),
(21,3,'Materai 3000'),
(22,3,'Materai 7000');

/*Table structure for table `tbl_user` */

DROP TABLE IF EXISTS `tbl_user`;

CREATE TABLE `tbl_user` (
  `id_user` int(11) NOT NULL AUTO_INCREMENT,
  `id_role` int(11) NOT NULL,
  `nama_user` varchar(50) NOT NULL,
  `email_user` varchar(50) NOT NULL,
  `password_user` varchar(200) NOT NULL,
  PRIMARY KEY (`id_user`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

/*Data for the table `tbl_user` */

insert  into `tbl_user`(`id_user`,`id_role`,`nama_user`,`email_user`,`password_user`) values 
(1,1,'Lukman Arief Cahyono','lukman@devplus.com','d033e22ae348aeb5660fc2140aec35850c4da997'),
(5,2,'Miftahul Huda','huda@devplus.com','d033e22ae348aeb5660fc2140aec35850c4da997');

/*Table structure for table `tbl_user_access` */

DROP TABLE IF EXISTS `tbl_user_access`;

CREATE TABLE `tbl_user_access` (
  `id_user_access` int(11) NOT NULL AUTO_INCREMENT,
  `id_role` int(11) NOT NULL,
<<<<<<< HEAD
  `id_sub_menu` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_user_access`
--

INSERT INTO `tbl_user_access` (`id_user_access`, `id_role`, `id_sub_menu`) VALUES
(4, 2, 12),
(5, 2, 11),
(6, 2, 10),
(7, 2, 9),
(8, 2, 6),
(10, 1, 12),
(11, 1, 11),
(12, 1, 10),
(13, 1, 9),
(14, 1, 2),
(15, 1, 3),
(16, 1, 8),
(17, 1, 4),
(18, 1, 7),
(19, 1, 14),
(20, 1, 6),
(21, 1, 5),
(22, 1, 15),
(23, 1, 16),
(24, 1, 17),
(25, 2, 5),
(26, 1, 18),
(27, 1, 19),
(28, 1, 20),
(29, 1, 21),
(30, 1, 22),
(31, 1, 23),
(32, 1, 24),
(33, 2, 24),
(34, 2, 18),
(36, 2, 23),
(37, 2, 21),
(38, 2, 22),
(39, 2, 19),
(40, 1, 25),
(41, 1, 26),
(42, 1, 27),
(43, 1, 28);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_anggaran`
--
ALTER TABLE `tbl_anggaran`
  ADD PRIMARY KEY (`id_anggaran`);

--
-- Indexes for table `tbl_barang`
--
ALTER TABLE `tbl_barang`
  ADD PRIMARY KEY (`id_barang`);

--
-- Indexes for table `tbl_detail_rka`
--
ALTER TABLE `tbl_detail_rka`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_detail_sub_rka`
--
ALTER TABLE `tbl_detail_sub_rka`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_jenis`
--
ALTER TABLE `tbl_jenis`
  ADD PRIMARY KEY (`id_jenis`);

--
-- Indexes for table `tbl_kegiatan`
--
ALTER TABLE `tbl_kegiatan`
  ADD PRIMARY KEY (`id_kegiatan`);

--
-- Indexes for table `tbl_menu`
--
ALTER TABLE `tbl_menu`
  ADD PRIMARY KEY (`id_menu`);

--
-- Indexes for table `tbl_npd`
--
ALTER TABLE `tbl_npd`
  ADD PRIMARY KEY (`id_npd`);

--
-- Indexes for table `tbl_npd_detail`
--
ALTER TABLE `tbl_npd_detail`
  ADD PRIMARY KEY (`id_npd_detail`);

--
-- Indexes for table `tbl_npd_detail_sub`
--
ALTER TABLE `tbl_npd_detail_sub`
  ADD PRIMARY KEY (`id_npd_detail_sub`);

--
-- Indexes for table `tbl_periode`
--
ALTER TABLE `tbl_periode`
  ADD PRIMARY KEY (`id_periode`);

--
-- Indexes for table `tbl_rekening`
--
ALTER TABLE `tbl_rekening`
  ADD PRIMARY KEY (`id_rekening`);

--
-- Indexes for table `tbl_rka`
--
ALTER TABLE `tbl_rka`
  ADD PRIMARY KEY (`id_rka`);

--
-- Indexes for table `tbl_role`
--
ALTER TABLE `tbl_role`
  ADD PRIMARY KEY (`id_role`);

--
-- Indexes for table `tbl_satuan`
--
ALTER TABLE `tbl_satuan`
  ADD PRIMARY KEY (`id_satuan`);

--
-- Indexes for table `tbl_sub_menu`
--
ALTER TABLE `tbl_sub_menu`
  ADD PRIMARY KEY (`id_sub_menu`);

--
-- Indexes for table `tbl_sub_rek`
--
ALTER TABLE `tbl_sub_rek`
  ADD PRIMARY KEY (`id_sub_rek`);

--
-- Indexes for table `tbl_user`
--
ALTER TABLE `tbl_user`
  ADD PRIMARY KEY (`id_user`);

--
-- Indexes for table `tbl_user_access`
--
ALTER TABLE `tbl_user_access`
  ADD PRIMARY KEY (`id_user_access`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_anggaran`
--
ALTER TABLE `tbl_anggaran`
  MODIFY `id_anggaran` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tbl_barang`
--
ALTER TABLE `tbl_barang`
  MODIFY `id_barang` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=103;

--
-- AUTO_INCREMENT for table `tbl_detail_rka`
--
ALTER TABLE `tbl_detail_rka`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `tbl_detail_sub_rka`
--
ALTER TABLE `tbl_detail_sub_rka`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_jenis`
--
ALTER TABLE `tbl_jenis`
  MODIFY `id_jenis` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `tbl_kegiatan`
--
ALTER TABLE `tbl_kegiatan`
  MODIFY `id_kegiatan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `tbl_menu`
--
ALTER TABLE `tbl_menu`
  MODIFY `id_menu` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `tbl_npd`
--
ALTER TABLE `tbl_npd`
  MODIFY `id_npd` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tbl_npd_detail`
--
ALTER TABLE `tbl_npd_detail`
  MODIFY `id_npd_detail` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `tbl_npd_detail_sub`
--
ALTER TABLE `tbl_npd_detail_sub`
  MODIFY `id_npd_detail_sub` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `tbl_periode`
--
ALTER TABLE `tbl_periode`
  MODIFY `id_periode` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tbl_rekening`
--
ALTER TABLE `tbl_rekening`
  MODIFY `id_rekening` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `tbl_rka`
--
ALTER TABLE `tbl_rka`
  MODIFY `id_rka` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tbl_role`
--
ALTER TABLE `tbl_role`
  MODIFY `id_role` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `tbl_satuan`
--
ALTER TABLE `tbl_satuan`
  MODIFY `id_satuan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tbl_sub_menu`
--
ALTER TABLE `tbl_sub_menu`
  MODIFY `id_sub_menu` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `tbl_sub_rek`
--
ALTER TABLE `tbl_sub_rek`
  MODIFY `id_sub_rek` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `tbl_user`
--
ALTER TABLE `tbl_user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `tbl_user_access`
--
ALTER TABLE `tbl_user_access`
  MODIFY `id_user_access` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=44;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
=======
  `id_sub_menu` int(11) NOT NULL,
  PRIMARY KEY (`id_user_access`)
) ENGINE=InnoDB AUTO_INCREMENT=44 DEFAULT CHARSET=latin1;

/*Data for the table `tbl_user_access` */

insert  into `tbl_user_access`(`id_user_access`,`id_role`,`id_sub_menu`) values 
(4,2,12),
(5,2,11),
(6,2,10),
(7,2,9),
(8,2,6),
(10,1,12),
(11,1,11),
(12,1,10),
(13,1,9),
(14,1,2),
(15,1,3),
(16,1,8),
(17,1,4),
(18,1,7),
(19,1,14),
(20,1,6),
(21,1,5),
(22,1,15),
(23,1,16),
(24,1,17),
(25,2,5),
(26,1,18),
(27,1,19),
(28,1,20),
(29,1,21),
(30,1,22),
(31,1,23),
(32,1,24),
(33,2,24),
(34,2,18),
(36,2,23),
(37,2,21),
(38,2,22),
(39,2,19),
(40,1,25),
(41,1,26),
(42,1,27),
(43,1,28);

/* Trigger structure for table `tbl_npd_detail_sub` */

DELIMITER $$

/*!50003 DROP TRIGGER*//*!50032 IF EXISTS */ /*!50003 `tmbh_detail_panjar` */$$

/*!50003 CREATE */ /*!50017 DEFINER = 'root'@'localhost' */ /*!50003 TRIGGER `tmbh_detail_panjar` AFTER INSERT ON `tbl_npd_detail_sub` FOR EACH ROW BEGIN
UPDATE tbl_npd_detail
set tbl_npd_detail.anggaran = tbl_npd_detail.anggaran + new.anggaran, tbl_npd_detail.realisasi_seb = tbl_npd_detail.realisasi_seb + new.realisasi_seb,tbl_npd_detail.sisa_anggaran = tbl_npd_detail.sisa_anggaran + new.sisa_anggaran,tbl_npd_detail.panjar_ygdmt = tbl_npd_detail.panjar_ygdmt + new.panjar_ygdmt
WHERE tbl_npd_detail.id_npd_detail = new.id_npd_detail;
END */$$


DELIMITER ;

/* Trigger structure for table `tbl_npd_detail_sub` */

DELIMITER $$

/*!50003 DROP TRIGGER*//*!50032 IF EXISTS */ /*!50003 `krg_detail_panjar` */$$

/*!50003 CREATE */ /*!50017 DEFINER = 'root'@'localhost' */ /*!50003 TRIGGER `krg_detail_panjar` AFTER DELETE ON `tbl_npd_detail_sub` FOR EACH ROW BEGIN
UPDATE tbl_npd_detail
set tbl_npd_detail.anggaran = tbl_npd_detail.anggaran - old.anggaran,tbl_npd_detail.realisasi_seb = tbl_npd_detail.realisasi_seb - old.realisasi_seb,tbl_npd_detail.sisa_anggaran = tbl_npd_detail.sisa_anggaran - old.sisa_anggaran,tbl_npd_detail.panjar_ygdmt = tbl_npd_detail.panjar_ygdmt - old.panjar_ygdmt
WHERE tbl_npd_detail.id_npd_detail = old.id_npd_detail;
END */$$


DELIMITER ;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
>>>>>>> ba9419c (-)

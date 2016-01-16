-- phpMyAdmin SQL Dump
-- version 2.6.1
-- http://www.phpmyadmin.net
-- 
-- Host: localhost
-- Generation Time: Aug 29, 2007 at 08:45 PM
-- Server version: 4.1.9
-- PHP Version: 4.3.10
-- 
-- Database: `bs_students`
-- 
CREATE DATABASE `bs_students` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE bs_students;

-- --------------------------------------------------------

-- 
-- Table structure for table `tb_access`
-- 

CREATE TABLE `tb_access` (
  `num` int(11) NOT NULL auto_increment,
  `account` varchar(50) NOT NULL default '',
  `dt` date NOT NULL default '0000-00-00',
  `tm` time NOT NULL default '00:00:00',
  KEY `num` (`num`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

-- 
-- Dumping data for table `tb_access`
-- 

INSERT INTO `tb_access` VALUES (1, 'benbac', '2007-08-29', '20:43:36');

-- --------------------------------------------------------

-- 
-- Table structure for table `tb_bac`
-- 

CREATE TABLE `tb_bac` (
  `num_bac` int(11) NOT NULL auto_increment,
  `specialty` int(2) NOT NULL default '0',
  `session` int(1) NOT NULL default '0',
  `_year` int(4) NOT NULL default '0',
  `average` float NOT NULL default '0',
  `nb` int(1) NOT NULL default '0',
  `_school` int(11) NOT NULL default '0',
  `student` int(11) NOT NULL default '0',
  KEY `num_bac` (`num_bac`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- 
-- Dumping data for table `tb_bac`
-- 


-- --------------------------------------------------------

-- 
-- Table structure for table `tb_bac_branches`
-- 

CREATE TABLE `tb_bac_branches` (
  `num` int(11) NOT NULL auto_increment,
  `title` varchar(50) NOT NULL default '',
  KEY `num` (`num`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

-- 
-- Dumping data for table `tb_bac_branches`
-- 

INSERT INTO `tb_bac_branches` VALUES (1, 'åäÏÓÉ ãíßÇäíßíÉ');
INSERT INTO `tb_bac_branches` VALUES (3, 'åäÏÓÉ ãÏäíÉ');
INSERT INTO `tb_bac_branches` VALUES (6, 'Úáæã ÏÞíÞÉ');
INSERT INTO `tb_bac_branches` VALUES (5, 'åäÏÓÉ ßåÑÈÇÆíÉ');
INSERT INTO `tb_bac_branches` VALUES (7, 'Úáæã ØÈíÚíÉ æ ÍíÇÉ');

-- --------------------------------------------------------

-- 
-- Table structure for table `tb_branches`
-- 

CREATE TABLE `tb_branches` (
  `num` int(11) NOT NULL auto_increment,
  `code` varchar(50) NOT NULL default '',
  `title` varchar(50) NOT NULL default '',
  KEY `num` (`num`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

-- 
-- Dumping data for table `tb_branches`
-- 

INSERT INTO `tb_branches` VALUES (4, '', 'ÅÚáÇã Âáí');
INSERT INTO `tb_branches` VALUES (3, '102', 'INELEC');

-- --------------------------------------------------------

-- 
-- Table structure for table `tb_cities`
-- 

CREATE TABLE `tb_cities` (
  `num` int(11) NOT NULL auto_increment,
  `name` varchar(50) NOT NULL default '',
  `adresse` varchar(250) NOT NULL default '',
  `wilaya` int(11) NOT NULL default '0',
  KEY `num` (`num`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

-- 
-- Dumping data for table `tb_cities`
-- 

INSERT INTO `tb_cities` VALUES (1, 'ÈæÔÑíØ áÔÎã', '', 3);
INSERT INTO `tb_cities` VALUES (2, 'ÈáíÏÉ ÑÞã 1', 'ÇáÕæãÚÉ', 9);
INSERT INTO `tb_cities` VALUES (3, 'INIM', 'ÈæãÑÏÇÓ', 35);

-- --------------------------------------------------------

-- 
-- Table structure for table `tb_city`
-- 

CREATE TABLE `tb_city` (
  `num_city` int(11) NOT NULL auto_increment,
  `room` varchar(10) NOT NULL default '',
  `suite` varchar(10) NOT NULL default '',
  `complex` varchar(10) NOT NULL default '',
  `nbr` int(1) NOT NULL default '0',
  `intern` int(11) NOT NULL default '0',
  `numcity` int(11) NOT NULL default '0',
  KEY `num_city` (`num_city`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

-- 
-- Dumping data for table `tb_city`
-- 

INSERT INTO `tb_city` VALUES (5, '14', 'b', '9', 2, 2, 2);
INSERT INTO `tb_city` VALUES (6, '23-4', '2', '', 4, 2, 3);
INSERT INTO `tb_city` VALUES (7, '36', '8', '', 2, 2, 1);
INSERT INTO `tb_city` VALUES (8, '36', '8', '', 2, 2, 1);

-- --------------------------------------------------------

-- 
-- Table structure for table `tb_contacts`
-- 

CREATE TABLE `tb_contacts` (
  `num` int(11) NOT NULL auto_increment,
  `name` varchar(50) NOT NULL default '',
  `email` varchar(50) NOT NULL default '',
  `comments` text NOT NULL,
  `dt` datetime NOT NULL default '0000-00-00 00:00:00',
  KEY `num` (`num`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- 
-- Dumping data for table `tb_contacts`
-- 


-- --------------------------------------------------------

-- 
-- Table structure for table `tb_schools`
-- 

CREATE TABLE `tb_schools` (
  `num` int(11) NOT NULL auto_increment,
  `name` varchar(50) NOT NULL default '',
  `secondarysh` char(1) NOT NULL default '',
  `adresse` varchar(250) NOT NULL default '',
  `wilaya` int(11) NOT NULL default '0',
  KEY `num` (`num`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

-- 
-- Dumping data for table `tb_schools`
-- 

INSERT INTO `tb_schools` VALUES (2, 'ÚÈÏ ÇáÑÍãÇä Èßáí', 'T', '', 47);
INSERT INTO `tb_schools` VALUES (3, 'ËÇäæíÉ ÈÑíÇä', 'L', 'Íí ÇáãÌÇåÏíä', 47);

-- --------------------------------------------------------

-- 
-- Table structure for table `tb_students`
-- 

CREATE TABLE `tb_students` (
  `num` int(11) NOT NULL auto_increment,
  `firstName` varchar(50) NOT NULL default '',
  `lastName` varchar(50) NOT NULL default '',
  `sexe` char(1) NOT NULL default '',
  `dtBearth` date NOT NULL default '0000-00-00',
  `plBearth` varchar(50) NOT NULL default '',
  `nmFather` varchar(50) NOT NULL default '',
  `adresse` varchar(250) NOT NULL default '',
  `phone` varchar(15) NOT NULL default '',
  `mobile` varchar(15) NOT NULL default '',
  `email` varchar(50) NOT NULL default '',
  `blade` char(3) NOT NULL default '',
  `posteAccount` varchar(20) NOT NULL default '',
  `observations` varchar(250) NOT NULL default '',
  `ville` varchar(50) NOT NULL default '',
  `postalCode` varchar(5) NOT NULL default '',
  `wilaya` int(11) NOT NULL default '0',
  `certificates` text NOT NULL,
  `hobbies` text NOT NULL,
  KEY `nu` (`num`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=41 ;

-- 
-- Dumping data for table `tb_students`
-- 

INSERT INTO `tb_students` VALUES (38, 'ÈÔíÑ', 'Èä íÇãí', 'M', '1982-01-01', 'ÈÑíÇä', '', '', '029-84-', '', '', 'B+', '', '', 'ÈÑíÇä', '47100', 47, 'DEUA', '');

-- --------------------------------------------------------

-- 
-- Table structure for table `tb_troubles`
-- 

CREATE TABLE `tb_troubles` (
  `num` int(11) NOT NULL auto_increment,
  `page` varchar(50) NOT NULL default '',
  `link` varchar(100) NOT NULL default '',
  `comments` text NOT NULL,
  `dt` datetime NOT NULL default '0000-00-00 00:00:00',
  KEY `num` (`num`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- 
-- Dumping data for table `tb_troubles`
-- 


-- --------------------------------------------------------

-- 
-- Table structure for table `tb_univ_levels`
-- 

CREATE TABLE `tb_univ_levels` (
  `num` int(11) NOT NULL auto_increment,
  `code` varchar(50) NOT NULL default '',
  `title` varchar(70) NOT NULL default '',
  KEY `num` (`num`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=14 ;

-- 
-- Dumping data for table `tb_univ_levels`
-- 

INSERT INTO `tb_univ_levels` VALUES (1, '1er DEUA', 'ÓäÉ Ãæáì ÞÕíÑ ÇáãÏì');
INSERT INTO `tb_univ_levels` VALUES (2, '2eme DEUA', 'ÓäÉ ËÇäíÉ ÞÕíÑ ÇáãÏì');
INSERT INTO `tb_univ_levels` VALUES (3, '3eme DEUA', 'ÓäÉ ËÇáËÉ ÞÕíÑ ÇáãÏì');
INSERT INTO `tb_univ_levels` VALUES (4, '1er Licence', 'ÓäÉ Ãæáì ãÊæÓØ ÇáãÏì');
INSERT INTO `tb_univ_levels` VALUES (6, '2eme Licence', 'ÓäÉ ËÇäíÉ ãÊæÓØ ÇáãÏì');
INSERT INTO `tb_univ_levels` VALUES (7, '3eme Licence', 'ÓäÉ ËÇáËÉ ãÊæÓØ ÇáãÏì');
INSERT INTO `tb_univ_levels` VALUES (8, '4eme Licence', 'ÓäÉ ÑÇÈÚÉ ãÊæÓØ ÇáãÏì');
INSERT INTO `tb_univ_levels` VALUES (9, '1er Ingénieur', 'ÓäÉ Ãæáì Øæíá ÇáãÏì');
INSERT INTO `tb_univ_levels` VALUES (10, '2eme Ingénieur', 'ÓäÉ ËÇäíÉ Øæíá ÇáãÏì');
INSERT INTO `tb_univ_levels` VALUES (11, '3eme Ingénieur', 'ÓäÉ ËÇáËÉ Øæíá ÇáãÏì');
INSERT INTO `tb_univ_levels` VALUES (12, '4eme Ingénieur', 'ÓäÉ ÑÇÈÚÉ Øæíá ÇáãÏì');
INSERT INTO `tb_univ_levels` VALUES (13, '5eme Ingénieur', 'ÓäÉ ÎÇãÓÉ Øæíá ÇáãÏì');

-- --------------------------------------------------------

-- 
-- Table structure for table `tb_univ_year`
-- 

CREATE TABLE `tb_univ_year` (
  `student` int(11) NOT NULL default '0',
  `info_city` int(11) NOT NULL default '0',
  `info_univ` int(11) NOT NULL default '0',
  `oldyear` year(4) NOT NULL default '0000',
  `year` year(4) NOT NULL default '0000',
  KEY `year` (`year`),
  KEY `oldYear` (`oldyear`),
  KEY `student` (`student`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- 
-- Dumping data for table `tb_univ_year`
-- 

INSERT INTO `tb_univ_year` VALUES (39, 5, 4, 2003, 2004);
INSERT INTO `tb_univ_year` VALUES (40, 6, 5, 2005, 2006);

-- --------------------------------------------------------

-- 
-- Table structure for table `tb_universities`
-- 

CREATE TABLE `tb_universities` (
  `num` int(11) NOT NULL auto_increment,
  `name` varchar(50) NOT NULL default '',
  `adresse` varchar(250) NOT NULL default '',
  `tel` varchar(15) NOT NULL default '',
  `fax` varchar(15) NOT NULL default '',
  `website` varchar(50) NOT NULL default '',
  `wilaya` int(11) NOT NULL default '0',
  KEY `num` (`num`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

-- 
-- Dumping data for table `tb_universities`
-- 

INSERT INTO `tb_universities` VALUES (2, 'ÌÇãÚÉ ÚãÇÑ ËáíÌí', 'ØÑíÞ ÛÑÏÇíÉ', '', '', 'http://', 3);
INSERT INTO `tb_universities` VALUES (3, 'ÌÇãÚÉ ÓÚÏ ÏÍáÈ', 'ÇáÕæãÚÉ', '', '', 'http://', 9);
INSERT INTO `tb_universities` VALUES (4, 'ãÍãÏ ÈæÞÑÉ', 'ÈæãÑÏÇÓ', '', '', 'http://', 35);

-- --------------------------------------------------------

-- 
-- Table structure for table `tb_university`
-- 

CREATE TABLE `tb_university` (
  `num_univ` int(11) NOT NULL auto_increment,
  `inscrit_num` varchar(50) NOT NULL default '',
  `speciality` varchar(50) NOT NULL default '',
  `bronche` int(11) NOT NULL default '0',
  `level` int(11) NOT NULL default '0',
  `obs` text NOT NULL,
  `numuniv` int(11) NOT NULL default '0',
  KEY `num_univ` (`num_univ`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

-- 
-- Dumping data for table `tb_university`
-- 

INSERT INTO `tb_university` VALUES (5, 'B020005', 'ÇáÅáßÊÑæäíß ÇáÑÞãíÉ', 3, 3, '', 4);
INSERT INTO `tb_university` VALUES (6, '', 'äÙÇã ÇáãÚáæãÇÊ', 2, 3, '', 2);
INSERT INTO `tb_university` VALUES (7, '', '', 2, 2, '', 2);

-- --------------------------------------------------------

-- 
-- Table structure for table `tb_users`
-- 

CREATE TABLE `tb_users` (
  `account` varchar(50) NOT NULL default '',
  `password` varchar(50) NOT NULL default '',
  `first_name` varchar(50) NOT NULL default '',
  `last_name` varchar(50) NOT NULL default '',
  `email` varchar(50) NOT NULL default '',
  `mobile` varchar(15) NOT NULL default '',
  `level` int(1) NOT NULL default '0',
  KEY `account` (`account`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- 
-- Dumping data for table `tb_users`
-- 

INSERT INTO `tb_users` VALUES ('benbac', 'linus', 'ÈÔíÑ', 'Èä íÇãí', 'benbac20@gmail.com', '064-13-32-17', 1);

-- --------------------------------------------------------

-- 
-- Table structure for table `tb_visitors`
-- 

CREATE TABLE `tb_visitors` (
  `num` int(11) NOT NULL auto_increment,
  `page` varchar(100) NOT NULL default '',
  `link` varchar(100) NOT NULL default '',
  `lang` varchar(20) NOT NULL default '',
  `Ip_Adresse` varchar(20) NOT NULL default '',
  `browser` varchar(20) NOT NULL default '',
  `os` varchar(100) NOT NULL default '',
  `dt` datetime NOT NULL default '0000-00-00 00:00:00',
  KEY `num` (`num`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=28 ;

-- 
-- Dumping data for table `tb_visitors`
-- 

INSERT INTO `tb_visitors` VALUES (25, '/etubergan/admin/stats.php', 'Unknoun', 'Unknoun', '127.0.0.1', 'Netscape', 'Windows', '2007-08-29 13:04:29');
INSERT INTO `tb_visitors` VALUES (26, '/etubergan/admin/', 'Unknoun', 'Unknoun', '127.0.0.1', 'MSIE', 'Windows', '2007-08-29 17:54:18');
INSERT INTO `tb_visitors` VALUES (27, '/etubergan/admin/univ.php', 'Unknoun', 'Unknoun', '127.0.0.1', 'MSIE', 'Windows', '2007-08-29 19:54:55');

-- --------------------------------------------------------

-- 
-- Table structure for table `tb_wilayas`
-- 

CREATE TABLE `tb_wilayas` (
  `code` int(11) NOT NULL default '0',
  `title` varchar(50) NOT NULL default '',
  KEY `nu` (`code`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- 
-- Dumping data for table `tb_wilayas`
-- 

INSERT INTO `tb_wilayas` VALUES (1, 'Adrar');
INSERT INTO `tb_wilayas` VALUES (2, 'Chlef');
INSERT INTO `tb_wilayas` VALUES (3, 'Laghouat');
INSERT INTO `tb_wilayas` VALUES (4, 'Oum El-Bouaghi');
INSERT INTO `tb_wilayas` VALUES (5, 'Batna');
INSERT INTO `tb_wilayas` VALUES (6, 'Béjaia');
INSERT INTO `tb_wilayas` VALUES (7, 'Biskra');
INSERT INTO `tb_wilayas` VALUES (8, 'Béchar');
INSERT INTO `tb_wilayas` VALUES (9, 'Blida');
INSERT INTO `tb_wilayas` VALUES (10, 'Bouira');
INSERT INTO `tb_wilayas` VALUES (11, 'Tamanrasset');
INSERT INTO `tb_wilayas` VALUES (12, 'Tébessa');
INSERT INTO `tb_wilayas` VALUES (13, 'Tlemcen');
INSERT INTO `tb_wilayas` VALUES (14, 'Tiaret');
INSERT INTO `tb_wilayas` VALUES (15, 'Tizi-Ouzou');
INSERT INTO `tb_wilayas` VALUES (16, 'Alger');
INSERT INTO `tb_wilayas` VALUES (17, 'Djelfa');
INSERT INTO `tb_wilayas` VALUES (18, 'Jijel');
INSERT INTO `tb_wilayas` VALUES (19, 'Sétif');
INSERT INTO `tb_wilayas` VALUES (20, 'Saida');
INSERT INTO `tb_wilayas` VALUES (21, 'Skidka');
INSERT INTO `tb_wilayas` VALUES (22, 'Sidi Bel-Abbés');
INSERT INTO `tb_wilayas` VALUES (23, 'Annaba');
INSERT INTO `tb_wilayas` VALUES (24, 'Guelma');
INSERT INTO `tb_wilayas` VALUES (25, 'Constantine');
INSERT INTO `tb_wilayas` VALUES (26, 'Médéa');
INSERT INTO `tb_wilayas` VALUES (27, 'Mostaganem');
INSERT INTO `tb_wilayas` VALUES (28, 'M''sila');
INSERT INTO `tb_wilayas` VALUES (29, 'Mascara');
INSERT INTO `tb_wilayas` VALUES (30, 'Ouargla');
INSERT INTO `tb_wilayas` VALUES (31, 'Oran');
INSERT INTO `tb_wilayas` VALUES (32, 'El-Bayaah');
INSERT INTO `tb_wilayas` VALUES (33, 'Illizi');
INSERT INTO `tb_wilayas` VALUES (34, 'Borj Bou-Arréridj');
INSERT INTO `tb_wilayas` VALUES (35, 'Boumerdés');
INSERT INTO `tb_wilayas` VALUES (36, 'El-Tarf');
INSERT INTO `tb_wilayas` VALUES (37, 'Tindouf');
INSERT INTO `tb_wilayas` VALUES (38, 'Tissemsilt');
INSERT INTO `tb_wilayas` VALUES (39, 'El-Oued');
INSERT INTO `tb_wilayas` VALUES (40, 'Khenchela');
INSERT INTO `tb_wilayas` VALUES (41, 'Souk-Ahras');
INSERT INTO `tb_wilayas` VALUES (42, 'Tipasa');
INSERT INTO `tb_wilayas` VALUES (43, 'Mila');
INSERT INTO `tb_wilayas` VALUES (44, 'Ain Defla');
INSERT INTO `tb_wilayas` VALUES (45, 'Naéma');
INSERT INTO `tb_wilayas` VALUES (46, 'Ain Témouchent');
INSERT INTO `tb_wilayas` VALUES (47, 'Ghardaia');
INSERT INTO `tb_wilayas` VALUES (48, 'Relizane');

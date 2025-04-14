/*
Navicat MySQL Data Transfer

Source Server         : webdbserver
Source Server Version : 50723
Source Host           : 108.167.188.73:3306
Source Database       : webdbs73_vovo

Target Server Type    : MYSQL
Target Server Version : 50723
File Encoding         : 65001

Date: 2025-02-23 15:39:52
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for admins
-- ----------------------------
DROP TABLE IF EXISTS `admins`;
CREATE TABLE `admins` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(255) DEFAULT NULL,
  `login` varchar(255) DEFAULT NULL,
  `senha` varchar(255) DEFAULT NULL,
  `ultimo_login` datetime NOT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

-- ----------------------------
-- Records of admins
-- ----------------------------
INSERT INTO `admins` VALUES ('1', 'vovo', 'vovoolmira', 'b4dbaa0f746a88e6c8964391a7d99f6a', '2024-04-02 08:23:44');
INSERT INTO `admins` VALUES ('2', 'Webdb', 'webdb', '0f4c43cbfcda598b1eac1a63b9bc36e7', '2022-12-01 10:51:15');
INSERT INTO `admins` VALUES ('4', 'Aline', 'aline', '4088f79371d28c1b575f5d582a9c7be6', '2024-05-13 10:58:44');

-- ----------------------------
-- Table structure for aprendizagens
-- ----------------------------
DROP TABLE IF EXISTS `aprendizagens`;
CREATE TABLE `aprendizagens` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `conviver` text NOT NULL,
  `brincar` text NOT NULL,
  `participar` text NOT NULL,
  `explorar` text NOT NULL,
  `expressar` text NOT NULL,
  `conhecer` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4;

-- ----------------------------
-- Records of aprendizagens
-- ----------------------------
INSERT INTO `aprendizagens` VALUES ('1', '<p>Com outras crian&ccedil;as e adultos, em pequenos e grandes grupos, utilizando diferentes linguagens, ampliando o conhecimento de si e do outro, o respeito em rela&ccedil;&atilde;o &agrave; cultura e &agrave;s diferen&ccedil;as entre as pessoas.</p>\r\n', '<p>Cotidianamente de diversas formas, em diferentes espa&ccedil;os e tempos, com diferentes parceiros (crian&ccedil;as e adultos), ampliando e diversificando seu acesso a produ&ccedil;&otilde;es culturais, seus conhecimentos, sua imagina&ccedil;&atilde;o, sua criatividade, suas experi&ecirc;ncias emocionais, corporais, sensoriais, expressivas, cognitivas, sociais e relacionais.</p>\r\n', '<p>Ativamente, com adultos e outras crian&ccedil;as, tanto do planejamento da gest&atilde;o da escola e das atividades propostas pelo educador quanto da realiza&ccedil;&atilde;o das atividades da vida cotidiana, tais como a escolha das brincadeiras, dos materiais e dos ambientes, desenvolvendo diferentes linguagens e elaborando conhecimentos, decidindo e se posicionando.</p>\r\n', '<p>Movimentos, gestos, sons, formas, texturas, cores, palavras, emo&ccedil;&otilde;es, transforma&ccedil;&otilde;es, relacionamentos, hist&oacute;rias, objetos, elementos da natureza, na escola e fora dela, ampliando seus saberes sobre a cultura, em suas diversas modalidades: as artes, a escrita, a ci&ecirc;ncia e a tecnologia.</p>\r\n', '<p>Como sujeito dial&oacute;gico, criativo e sens&iacute;vel, suas necessidades, emo&ccedil;&otilde;es, sentimentos, d&uacute;vidas, hip&oacute;teses, descobertas, opini&otilde;es, questionamentos, por meio de diferentes linguagens.</p>\r\n', '<p>E construir sua identidade pessoal, social e cultural, constituindo uma imagem positiva de si e de seus grupos de pertencimento, nas diversas experi&ecirc;ncias de cuidados, intera&ccedil;&otilde;es, brincadeiras e linguagens vivenciadas na institui&ccedil;&atilde;o escolar e em seu contexto familiar e comunit&aacute;rios.</p>\r\n');

-- ----------------------------
-- Table structure for banners
-- ----------------------------
DROP TABLE IF EXISTS `banners`;
CREATE TABLE `banners` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `imagem` varchar(255) DEFAULT NULL,
  `titulo` longtext,
  `status` varchar(1) NOT NULL,
  `ordem` int(11) NOT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

-- ----------------------------
-- Records of banners
-- ----------------------------
INSERT INTO `banners` VALUES ('1', '', 'Berçário 1', 'N', '0');
INSERT INTO `banners` VALUES ('2', null, 'Berçário 2', 'N', '1');
INSERT INTO `banners` VALUES ('3', '', 'Jardim A e B', 'N', '2');
INSERT INTO `banners` VALUES ('4', null, 'Maternal 1 e 2', 'N', '3');

-- ----------------------------
-- Table structure for capa
-- ----------------------------
DROP TABLE IF EXISTS `capa`;
CREATE TABLE `capa` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `titulo` varchar(100) NOT NULL,
  `imagem` varchar(255) NOT NULL,
  `imagem2` varchar(100) DEFAULT NULL,
  `imagem3` varchar(100) DEFAULT NULL,
  `imagem4` varchar(100) DEFAULT NULL,
  `imagem5` varchar(100) DEFAULT NULL,
  `status` char(1) NOT NULL,
  `status2` char(1) DEFAULT NULL,
  `status3` char(1) DEFAULT NULL,
  `status4` char(1) DEFAULT NULL,
  `status5` char(1) DEFAULT NULL,
  `data_cadastro` date DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=33 DEFAULT CHARSET=utf8mb4;

-- ----------------------------
-- Records of capa
-- ----------------------------
INSERT INTO `capa` VALUES ('20', '', '663a58a3435dc8.72389453.', '663a25081af4d4.60957815.jpg', '2.jpg', '5.jpeg', '3.jpg', 'E', null, null, null, null, '2024-05-07');
INSERT INTO `capa` VALUES ('21', '', '663a5705679bf0.53745398.', null, null, null, null, 'E', null, null, null, null, '2024-05-07');
INSERT INTO `capa` VALUES ('22', '', '663a545e791685.80784790.', null, null, null, null, 'E', null, null, null, null, '2024-05-07');
INSERT INTO `capa` VALUES ('23', '', '663a5455e4f404.41339859.', null, null, null, null, 'E', null, null, null, null, '2024-05-07');
INSERT INTO `capa` VALUES ('24', '', '663a36b370cfc8.89724329.jpg', null, null, null, null, 'E', null, null, null, null, null);
INSERT INTO `capa` VALUES ('25', '', '663a5598537f16.69714269.jpg', null, null, null, null, 'E', null, null, null, null, '2024-05-07');
INSERT INTO `capa` VALUES ('26', '', '663a61def389e3.76452780.jpeg', null, null, null, null, 'E', null, null, null, null, '2024-05-07');
INSERT INTO `capa` VALUES ('27', '', '663a615e19baa3.27680973.jpeg', null, null, null, null, 'E', null, null, null, null, '2024-05-07');
INSERT INTO `capa` VALUES ('28', '', '663a6175e54c35.54560436.jpeg', null, null, null, null, 'E', null, null, null, null, '2024-05-07');
INSERT INTO `capa` VALUES ('29', '', '663a642095f513.98220116.jpeg', null, null, null, null, 'S', null, null, null, null, '2024-05-07');
INSERT INTO `capa` VALUES ('30', '', '663a6428e865c4.63389182.jpeg', null, null, null, null, 'S', null, null, null, null, '2024-05-07');
INSERT INTO `capa` VALUES ('31', '', '663b6b1588fcb5.13372179.jpeg', null, null, null, null, 'E', null, null, null, null, '2024-05-08');
INSERT INTO `capa` VALUES ('32', '', '663b6b40d03c96.37240479.jpeg', null, null, null, null, 'E', null, null, null, null, '2024-05-08');

-- ----------------------------
-- Table structure for estrutura
-- ----------------------------
DROP TABLE IF EXISTS `estrutura`;
CREATE TABLE `estrutura` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `categoria` varchar(50) NOT NULL,
  `imagem` varchar(100) NOT NULL,
  `status` char(1) NOT NULL,
  `principal` char(1) DEFAULT NULL,
  `data_cadastro` date NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=130 DEFAULT CHARSET=utf8mb4;

-- ----------------------------
-- Records of estrutura
-- ----------------------------
INSERT INTO `estrutura` VALUES ('29', 'bercario1', '663ba275320726.68357647.jpg', 'S', 'N', '2024-05-08');
INSERT INTO `estrutura` VALUES ('30', 'bercario1', '663ba2b9e77c74.42209253.jpg', 'S', 'N', '2024-05-08');
INSERT INTO `estrutura` VALUES ('31', 'bercario1', '663ba2c13cb434.27955787.jpg', 'S', 'N', '2024-05-08');
INSERT INTO `estrutura` VALUES ('32', 'bercario1', '663ba2c76c99b7.58521622.jpg', 'S', 'N', '2024-05-08');
INSERT INTO `estrutura` VALUES ('33', 'bercario1', '663ba2cd88d755.77177504.jpg', 'S', 'N', '2024-05-08');
INSERT INTO `estrutura` VALUES ('34', 'bercario1', '663ba2d249e912.27067694.jpg', 'S', 'N', '2024-05-08');
INSERT INTO `estrutura` VALUES ('35', 'bercario1', '663ba2d9608b38.61404749.jpg', 'S', 'N', '2024-05-08');
INSERT INTO `estrutura` VALUES ('36', 'bercario1', '663ba2dec68b74.41117620.jpg', 'S', 'N', '2024-05-08');
INSERT INTO `estrutura` VALUES ('37', 'bercario1', '663ba2f8448c09.42552821.jpg', 'S', 'N', '2024-05-08');
INSERT INTO `estrutura` VALUES ('38', 'bercario1', '663ba3001c3253.03216454.jpg', 'S', 'N', '2024-05-08');
INSERT INTO `estrutura` VALUES ('39', 'bercario1', '663ba306c48f81.62826020.jpg', 'S', 'N', '2024-05-08');
INSERT INTO `estrutura` VALUES ('40', 'bercario1', '663ba30f28ac63.68733497.jpg', 'S', 'N', '2024-05-08');
INSERT INTO `estrutura` VALUES ('41', 'bercario1', '663ba326466b70.50354348.jpg', 'S', 'N', '2024-05-08');
INSERT INTO `estrutura` VALUES ('42', 'bercario1', '663ba32d28b251.73623213.jpg', 'S', 'N', '2024-05-08');
INSERT INTO `estrutura` VALUES ('43', 'bercario1', '663ba332309c33.97161433.jpg', 'S', 'N', '2024-05-08');
INSERT INTO `estrutura` VALUES ('44', 'bercario1', '663ba336ddd5c2.82699385.jpg', 'S', 'N', '2024-05-08');
INSERT INTO `estrutura` VALUES ('45', 'bercario1', '663ba33bd32790.43714905.jpg', 'S', 'N', '2024-05-08');
INSERT INTO `estrutura` VALUES ('46', 'bercario2', '663ba37f267730.97083879.jpg', 'S', 'S', '2024-05-08');
INSERT INTO `estrutura` VALUES ('47', 'bercario2', '663ba3a2a431d1.94870105.jpg', 'S', 'N', '2024-05-08');
INSERT INTO `estrutura` VALUES ('48', 'bercario2', '663ba3a8dba032.59633272.jpg', 'S', 'N', '2024-05-08');
INSERT INTO `estrutura` VALUES ('49', 'bercario2', '663ba3ae9ecf14.90517893.jpg', 'S', 'N', '2024-05-08');
INSERT INTO `estrutura` VALUES ('50', 'bercario2', '663ba3b50f2854.42929620.jpg', 'S', 'N', '2024-05-08');
INSERT INTO `estrutura` VALUES ('51', 'bercario2', '663ba3bae3ab78.40032040.jpg', 'S', 'N', '2024-05-08');
INSERT INTO `estrutura` VALUES ('52', 'bercario2', '663ba3c0385150.24286911.jpg', 'S', 'N', '2024-05-08');
INSERT INTO `estrutura` VALUES ('53', 'bercario2', '663ba3c5589155.40306692.jpg', 'S', 'N', '2024-05-08');
INSERT INTO `estrutura` VALUES ('54', 'bercario2', '663ba3cad7ea84.94262065.jpg', 'S', 'N', '2024-05-08');
INSERT INTO `estrutura` VALUES ('55', 'bercario2', '663ba3d1a24f64.05119244.jpg', 'S', 'N', '2024-05-08');
INSERT INTO `estrutura` VALUES ('56', 'bercario2', '663ba3d754cfa3.04295269.jpg', 'S', 'N', '2024-05-08');
INSERT INTO `estrutura` VALUES ('57', 'bercario2', '663ba3dd905686.25880522.jpg', 'S', 'N', '2024-05-08');
INSERT INTO `estrutura` VALUES ('58', 'bercario2', '663ba3e3c67f36.83812961.jpg', 'S', 'N', '2024-05-08');
INSERT INTO `estrutura` VALUES ('59', 'bercario2', '663ba3f09191c8.73442288.jpg', 'S', 'N', '2024-05-08');
INSERT INTO `estrutura` VALUES ('60', 'bercario2', '663ba3f7197192.92242215.jpg', 'S', 'N', '2024-05-08');
INSERT INTO `estrutura` VALUES ('61', 'bercario2', '663ba3fcf33a69.02536156.jpg', 'S', 'N', '2024-05-08');
INSERT INTO `estrutura` VALUES ('62', 'bercario2', '663ba402ecaab4.65567924.jpg', 'S', 'N', '2024-05-08');
INSERT INTO `estrutura` VALUES ('63', 'bercario1', '663ba427b906e4.39593414.jpg', 'S', 'S', '2024-05-08');
INSERT INTO `estrutura` VALUES ('64', 'maternal1', '663ba475b06c87.78562818.jpg', 'S', 'S', '2024-05-08');
INSERT INTO `estrutura` VALUES ('65', 'maternal1', '663ba4a21efa45.24937602.jpg', 'S', 'N', '2024-05-08');
INSERT INTO `estrutura` VALUES ('66', 'maternal1', '663ba4a897b838.59187338.jpg', 'S', 'N', '2024-05-08');
INSERT INTO `estrutura` VALUES ('67', 'maternal1', '663ba4adaf0ee4.56861243.jpg', 'S', 'N', '2024-05-08');
INSERT INTO `estrutura` VALUES ('68', 'maternal1', '663ba4b47ea2f5.21828232.jpg', 'S', 'N', '2024-05-08');
INSERT INTO `estrutura` VALUES ('69', 'maternal1', '663ba4bb34abe0.84178642.jpg', 'S', 'N', '2024-05-08');
INSERT INTO `estrutura` VALUES ('70', 'maternal1', '663ba4c7de3d95.53505590.jpg', 'S', 'N', '2024-05-08');
INSERT INTO `estrutura` VALUES ('71', 'maternal1', '663ba4cf7a5660.12130709.jpg', 'S', 'N', '2024-05-08');
INSERT INTO `estrutura` VALUES ('72', 'maternal1', '663ba4d63b2a21.96385108.jpg', 'S', 'N', '2024-05-08');
INSERT INTO `estrutura` VALUES ('73', 'maternal1', '663ba4dbcba520.13829140.jpg', 'S', 'N', '2024-05-08');
INSERT INTO `estrutura` VALUES ('74', 'maternal1', '663ba4e6972310.58495230.jpg', 'S', 'N', '2024-05-08');
INSERT INTO `estrutura` VALUES ('75', 'maternal1', '663ba4ec1d9fc2.22545044.jpg', 'S', 'N', '2024-05-08');
INSERT INTO `estrutura` VALUES ('76', 'maternal1', '663ba4f8926015.09694873.jpg', 'S', 'N', '2024-05-08');
INSERT INTO `estrutura` VALUES ('77', 'maternal1', '663ba5024948e5.84201977.jpg', 'S', 'N', '2024-05-08');
INSERT INTO `estrutura` VALUES ('78', 'maternal1', '663ba508c0b892.54673689.jpg', 'S', 'N', '2024-05-08');
INSERT INTO `estrutura` VALUES ('79', 'maternal1', '663ba51d39ae38.19133191.jpg', 'S', 'N', '2024-05-08');
INSERT INTO `estrutura` VALUES ('80', 'maternal1', '663ba523e63286.55774281.jpg', 'S', 'N', '2024-05-08');
INSERT INTO `estrutura` VALUES ('81', 'maternal1', '663ba529b9e056.10401072.jpg', 'S', 'N', '2024-05-08');
INSERT INTO `estrutura` VALUES ('82', 'maternal2', '663ba53ececc69.72744843.jpg', 'S', 'S', '2024-05-08');
INSERT INTO `estrutura` VALUES ('83', 'maternal2', '663ba563401e57.59531870.jpg', 'S', 'N', '2024-05-08');
INSERT INTO `estrutura` VALUES ('84', 'maternal2', '663ba57b4fa701.15051158.jpg', 'S', 'N', '2024-05-08');
INSERT INTO `estrutura` VALUES ('85', 'maternal2', '663ba583ab77f0.36561948.jpg', 'S', 'N', '2024-05-08');
INSERT INTO `estrutura` VALUES ('86', 'maternal2', '663ba5bced6688.93180762.jpg', 'S', 'N', '2024-05-08');
INSERT INTO `estrutura` VALUES ('87', 'maternal2', '663ba5c29d77a3.35142319.jpg', 'S', 'N', '2024-05-08');
INSERT INTO `estrutura` VALUES ('88', 'maternal2', '663ba5c73a8059.48969694.jpg', 'S', 'N', '2024-05-08');
INSERT INTO `estrutura` VALUES ('89', 'maternal2', '663ba5cd7c6ba7.66730867.jpg', 'S', 'N', '2024-05-08');
INSERT INTO `estrutura` VALUES ('90', 'maternal2', '663ba5d2533800.79658387.jpg', 'S', 'N', '2024-05-08');
INSERT INTO `estrutura` VALUES ('91', 'maternal2', '663ba5d8ad7531.52412906.jpg', 'S', 'N', '2024-05-08');
INSERT INTO `estrutura` VALUES ('92', 'maternal2', '663ba5e9d8a3b3.53375771.jpg', 'S', 'N', '2024-05-08');
INSERT INTO `estrutura` VALUES ('93', 'maternal2', '663ba5ef801479.45250262.jpg', 'S', 'N', '2024-05-08');
INSERT INTO `estrutura` VALUES ('94', 'maternal2', '663ba5f4bd0328.15350614.jpg', 'S', 'N', '2024-05-08');
INSERT INTO `estrutura` VALUES ('95', 'maternal2', '663ba5fc9c0244.56846923.jpg', 'S', 'N', '2024-05-08');
INSERT INTO `estrutura` VALUES ('96', 'maternal2', '663ba60798dd10.12392738.jpg', 'S', 'N', '2024-05-08');
INSERT INTO `estrutura` VALUES ('97', 'maternal2', '663ba60f42cf35.48866688.jpg', 'S', 'N', '2024-05-08');
INSERT INTO `estrutura` VALUES ('98', 'maternal2', '663ba614608aa2.15707477.jpg', 'S', 'N', '2024-05-08');
INSERT INTO `estrutura` VALUES ('99', 'maternal2', '663ba61a31b666.03322036.jpg', 'S', 'N', '2024-05-08');
INSERT INTO `estrutura` VALUES ('100', 'maternal2', '663ba61f100c09.51595181.jpg', 'S', 'N', '2024-05-08');
INSERT INTO `estrutura` VALUES ('101', 'maternal2', '663ba62496a9b8.36419620.jpg', 'S', 'N', '2024-05-08');
INSERT INTO `estrutura` VALUES ('102', 'maternal2', '663ba62a9ac1d5.33764828.jpg', 'S', 'N', '2024-05-08');
INSERT INTO `estrutura` VALUES ('103', 'maternal2', '663ba62eefec08.05530440.jpg', 'S', 'N', '2024-05-08');
INSERT INTO `estrutura` VALUES ('104', 'maternal2', '663ba635532bb8.79540051.jpg', 'S', 'N', '2024-05-08');
INSERT INTO `estrutura` VALUES ('105', 'jardim1', '663ba67e478163.12186671.jpg', 'S', 'S', '2024-05-08');
INSERT INTO `estrutura` VALUES ('106', 'jardim1', '663ba68ae4fcc1.44870496.jpg', 'S', 'N', '2024-05-08');
INSERT INTO `estrutura` VALUES ('107', 'jardim1', '663ba68f7f40f6.46774798.jpg', 'S', 'N', '2024-05-08');
INSERT INTO `estrutura` VALUES ('108', 'jardim1', '663ba69321f348.99792211.jpg', 'S', 'N', '2024-05-08');
INSERT INTO `estrutura` VALUES ('109', 'jardim1', '663ba696e90019.30135927.jpg', 'S', 'N', '2024-05-08');
INSERT INTO `estrutura` VALUES ('110', 'jardim1', '663ba69a1704b7.39707702.jpg', 'S', 'N', '2024-05-08');
INSERT INTO `estrutura` VALUES ('111', 'jardim1', '663ba69e230147.92704896.jpg', 'S', 'N', '2024-05-08');
INSERT INTO `estrutura` VALUES ('112', 'jardim1', '663ba6a1b408d9.77938829.jpg', 'S', 'N', '2024-05-08');
INSERT INTO `estrutura` VALUES ('113', 'jardim1', '663ba6a4f23401.03259570.jpg', 'S', 'N', '2024-05-08');
INSERT INTO `estrutura` VALUES ('114', 'jardim1', '663ba6a9240cd0.27535302.jpg', 'S', 'N', '2024-05-08');
INSERT INTO `estrutura` VALUES ('115', 'jardim2', '663ba6c9e17e03.26272071.jpg', 'S', 'S', '2024-05-08');
INSERT INTO `estrutura` VALUES ('116', 'jardim2', '663ba6d9a4a026.92809151.jpg', 'S', 'N', '2024-05-08');
INSERT INTO `estrutura` VALUES ('117', 'jardim2', '663ba6dd6dd634.78963551.jpg', 'S', 'N', '2024-05-08');
INSERT INTO `estrutura` VALUES ('118', 'jardim2', '663ba6e09aaa27.32479065.jpg', 'S', 'N', '2024-05-08');
INSERT INTO `estrutura` VALUES ('119', 'jardim2', '663ba6e4becd09.36811546.jpg', 'S', 'N', '2024-05-08');
INSERT INTO `estrutura` VALUES ('120', 'jardim2', '663ba6e86e4b30.88536656.jpg', 'S', 'N', '2024-05-08');
INSERT INTO `estrutura` VALUES ('121', 'jardim2', '663ba6ec56c988.76092338.jpg', 'S', 'N', '2024-05-08');
INSERT INTO `estrutura` VALUES ('122', 'jardim2', '663ba6efc28c47.58092353.jpg', 'S', 'N', '2024-05-08');
INSERT INTO `estrutura` VALUES ('123', 'jardim2', '663ba6f32a1d18.52948760.jpg', 'S', 'N', '2024-05-08');
INSERT INTO `estrutura` VALUES ('124', 'jardim2', '663ba6f7f2f245.07770870.jpg', 'S', 'N', '2024-05-08');
INSERT INTO `estrutura` VALUES ('125', 'bercario1', '663cf3dd250fd4.10474345.jpeg', 'E', 'N', '2024-05-09');
INSERT INTO `estrutura` VALUES ('126', 'jardim2', '663cf40b5a7602.20376952.jpeg', 'E', 'N', '2024-05-09');
INSERT INTO `estrutura` VALUES ('127', 'bercario1', '663cf5254d81d5.75388981.png', 'E', 'N', '2024-05-09');
INSERT INTO `estrutura` VALUES ('128', 'bercario1', '663cf72b638182.19669279.jpeg', 'E', 'N', '2024-05-09');
INSERT INTO `estrutura` VALUES ('129', 'bercario1', '663cf791418203.67093424.jpeg', 'E', 'N', '2024-05-09');

-- ----------------------------
-- Table structure for galeria
-- ----------------------------
DROP TABLE IF EXISTS `galeria`;
CREATE TABLE `galeria` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `imagem` varchar(100) NOT NULL,
  `data_cadastro` date DEFAULT NULL,
  `status` char(1) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=25 DEFAULT CHARSET=utf8mb4;

-- ----------------------------
-- Records of galeria
-- ----------------------------
INSERT INTO `galeria` VALUES ('1', '663a4031e68938.17719217.jpg', '2024-05-07', 'E');
INSERT INTO `galeria` VALUES ('2', '663a4254acbc47.99187412.jpeg', '2024-05-07', 'E');
INSERT INTO `galeria` VALUES ('3', '663a425c2d68d7.27903370.jpg', '2024-05-07', 'E');
INSERT INTO `galeria` VALUES ('4', '663a5ea4abcde3.08438430.jpeg', '2024-05-07', 'E');
INSERT INTO `galeria` VALUES ('5', '663a6a46ad2382.27202993.jpeg', '2024-05-07', 'S');
INSERT INTO `galeria` VALUES ('6', '663a700a233c44.65153716.jpg', '2024-05-07', 'S');
INSERT INTO `galeria` VALUES ('7', '663a6b1468ff09.14473876.jpg', '2024-05-07', 'S');
INSERT INTO `galeria` VALUES ('8', '663a6b36d5bba1.37646672.jpg', '2024-05-07', 'S');
INSERT INTO `galeria` VALUES ('9', '663a6b432df4d3.88719180.jpg', '2024-05-07', 'S');
INSERT INTO `galeria` VALUES ('10', '663a6b50eff8f3.36653187.jpeg', '2024-05-07', 'S');
INSERT INTO `galeria` VALUES ('11', '663a6b6f818647.90036174.jpeg', '2024-05-07', 'S');
INSERT INTO `galeria` VALUES ('12', '663a6b7e23fb20.68080597.jpg', '2024-05-07', 'S');
INSERT INTO `galeria` VALUES ('13', '663a6baa3fd9e0.85928147.jpg', '2024-05-07', 'S');
INSERT INTO `galeria` VALUES ('14', '663a6bc184a620.24527494.jpg', '2024-05-07', 'S');
INSERT INTO `galeria` VALUES ('15', '663a6bd5938ed1.24074496.jpg', '2024-05-07', 'S');
INSERT INTO `galeria` VALUES ('16', '663a6be9ca0166.44412760.jpg', '2024-05-07', 'S');
INSERT INTO `galeria` VALUES ('17', '663a6c0cedab09.76835622.jpg', '2024-05-07', 'S');
INSERT INTO `galeria` VALUES ('18', '663a6c1eadef52.30336833.jpg', '2024-05-07', 'S');
INSERT INTO `galeria` VALUES ('19', '663a6c2c847e82.98733726.jpg', '2024-05-07', 'S');
INSERT INTO `galeria` VALUES ('20', '663a6c3d1c1833.98525477.jpg', '2024-05-07', 'S');
INSERT INTO `galeria` VALUES ('21', '663a6c4aadb001.63285703.jpg', '2024-05-07', 'S');
INSERT INTO `galeria` VALUES ('22', '663a6c57c3b014.40261780.jpg', '2024-05-07', 'S');
INSERT INTO `galeria` VALUES ('23', '663a6c79ca6f64.58722614.jpg', '2024-05-07', 'S');
INSERT INTO `galeria` VALUES ('24', '663a6c876bba33.20840922.jpg', '2024-05-07', 'S');

-- ----------------------------
-- Table structure for identidade
-- ----------------------------
DROP TABLE IF EXISTS `identidade`;
CREATE TABLE `identidade` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `missao` text NOT NULL,
  `visao` text NOT NULL,
  `valores` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4;

-- ----------------------------
-- Records of identidade
-- ----------------------------
INSERT INTO `identidade` VALUES ('2', '<p>Nossa proposta &eacute; garantir um ambiente propicio para o desenvolvimento integral da crian&ccedil;a, com naturalidade, despertando a curiosidade e proporcionando tranquilidade. Respeitando a inf&acirc;ncia, as necessidades e individualidades de cada crian&ccedil;a.</p>\r\n', '<p>Uma escola que busca se aperfei&ccedil;oar a cada ano, sendo reconhecida por ser acolhedora, afetiva e confi&aacute;vel. Com uma a&ccedil;&atilde;o educativa, visando o protagonismo de cada crian&ccedil;a na constru&ccedil;&atilde;o do seu pr&oacute;prio conhecimento, atrav&eacute;s do brincar, das experi&ecirc;ncias e viv&ecirc;ncias pedag&oacute;gicas de car&aacute;ter l&uacute;dico.</p>\r\n', '<p>&bull; Respeito a inf&acirc;ncia&#39;<br />\r\n&bull; Intera&ccedil;&otilde;es e brincadeiras<br />\r\n&bull; A crian&ccedil;a como protagonista<br />\r\n&bull; &Eacute;tica, responsabilidade e transpar&ecirc;ncia<br />\r\n&bull; Afeto e cuidado<br />\r\n&bull; Todas as professoras com forma&ccedil;&atilde;o em Pedagogia</p>\r\n');

-- ----------------------------
-- Table structure for instagram
-- ----------------------------
DROP TABLE IF EXISTS `instagram`;
CREATE TABLE `instagram` (
  `id` int(1) NOT NULL AUTO_INCREMENT,
  `token` varchar(255) DEFAULT NULL,
  `instaToggle` varchar(1) DEFAULT NULL,
  `mail` varchar(1) DEFAULT NULL,
  `ultima_renovacao` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of instagram
-- ----------------------------
INSERT INTO `instagram` VALUES ('1', 'IGAAGo9CE1t75BZAFBndHBaQklSTmxHTy1lQkRVNWpTSXg4d1ozSF9YTEVGdE9MYWJyRGlNbW9YNXJzbzloVnNDVG42c2NPTWdzb0s3b2V4b1RKLW9RUkxJUDFzZAGFmVXptek9jb1NpN0VzNkJPQlVLeldB', 'S', 'N', null);

-- ----------------------------
-- Table structure for textos
-- ----------------------------
DROP TABLE IF EXISTS `textos`;
CREATE TABLE `textos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `categoria` varchar(100) DEFAULT NULL,
  `texto` text,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4;

-- ----------------------------
-- Records of textos
-- ----------------------------
INSERT INTO `textos` VALUES ('2', 'estrutura', '<p>Pr&eacute;dio com 450m&sup2; projetado para ser uma escola, com sete salas amplas e todas climatizadas.A equipe da Escola Infantil Vov&oacute; Olmira &eacute; composta por:<br />\r\n<br />\r\n&bull; Diretora e Gerente Administrativo;<br />\r\n&bull; Professoras do Ber&ccedil;&aacute;rio (1 e 2), Maternais (1 e 2) e Jardins de Inf&acirc;ncia (1 e 2) e, al&eacute;m disso, educadoras assistentes em cada uma das turmas.</p>\r\n');

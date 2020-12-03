/*
 Navicat Premium Data Transfer

 Source Server         : Database
 Source Server Type    : MySQL
 Source Server Version : 50732
 Source Host           : 192.168.2.4:3306
 Source Schema         : celke

 Target Server Type    : MySQL
 Target Server Version : 50732
 File Encoding         : 65001

 Date: 03/12/2020 17:25:58
*/

SET NAMES utf8mb4;
SET FOREIGN_KEY_CHECKS = 0;

-- ----------------------------
-- Table structure for users
-- ----------------------------
DROP TABLE IF EXISTS `users`;
CREATE TABLE `users`  (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `email` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `username` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `password` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `imagem` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `created` datetime(0) NULL DEFAULT NULL,
  `modified` datetime(0) NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 15 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci;

-- ----------------------------
-- Records of users
-- ----------------------------
BEGIN;
INSERT INTO `users` VALUES (1, 'Sidnei Monteiro', 'sidnei@gmail.com', 'sidnei', '$2y$10$gqiX46/9fUx2b/HDXDCyX.Um5O8YmJdxGhOGTN3ZssxNEiCNmWDF6', 'person001.png', '2020-12-02 16:38:19', '2020-12-03 19:30:40'), (2, 'Karen', 'kk@gmail.com', 'karen@gmail.com', '$2y$10$/EU3yd16xArBEXGMKgHdruQij85PWDDrJCS5ahXw/1Gludt/r5j4O', NULL, '2020-12-02 16:43:45', '2020-12-03 17:29:09'), (5, 'jacson', 'jacson@ig.com.br', 'jacson@ig.com.br', '$2y$10$9H0hT3VHa7LVNJS6zTil/ebRymQGFFsBuPeDn4SqihaIBJJoZEMlS', NULL, '2020-12-03 13:07:46', '2020-12-03 13:07:46'), (9, 'Meire', 'meire@ig.com.br', 'meire@ig.com.br', '$2y$10$bL./BnJDG/S9zUmhE0ey9uY3283Akv6j5kXwizqUGRyHkq.tjyVQq', NULL, '2020-12-03 14:18:24', '2020-12-03 14:18:24'), (12, 'maykon', 'sidnei1@gmail.com', 'sidne1i@gmail.com', '$2y$10$ZaIC/lu3ufQL1oFHmW5iUu1TJsnHSIbHh9BH6K7UAFJYMF/4IBV4.', NULL, '2020-12-03 14:22:45', '2020-12-03 14:22:45'), (13, 'Kelly', 'k@ig.com.br', 'k@ig.com.br', '$2y$10$qRRDgyGfqH6reqPJPebU6uhcrmlxh5VJ56GzkWxdBgkhq/AiR67PW', NULL, '2020-12-03 14:37:16', '2020-12-03 14:37:16'), (14, 'Rosa', 'rosa@gmail.com', 'rosa@gmail.com', '$2y$10$xDM/NxBw0ifU35eDERRQ/ezQIbtg4EZaRRWRPzPPXKcMGGXFHJT9m', NULL, '2020-12-03 14:51:46', '2020-12-03 14:51:46');
COMMIT;

SET FOREIGN_KEY_CHECKS = 1;

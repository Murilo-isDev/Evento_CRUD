CREATE SCHEMA IF NOT EXISTS `LP3_atv_2` DEFAULT CHARACTER SET utf8 ;
USE `LP3_atv_2` ;

-- ----------------------------
-- Table structure for `atividades`
-- ----------------------------
DROP TABLE IF EXISTS `atividades`;
CREATE TABLE `atividades` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(250) NOT NULL,
  `descricao` text DEFAULT NULL,
  `numero_participantes` int(11) DEFAULT NULL,
  `data` date DEFAULT NULL,
  `hora_inicio` time DEFAULT NULL,
  `hora_final` time DEFAULT NULL,
  `sala` varchar(10) NOT NULL,
  `turno` varchar(15) NOT NULL,
  `palestrante` text DEFAULT NULL,
  `obs` text DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=1 DEFAULT CHARSET=utf8;
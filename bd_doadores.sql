-- --------------------------------------------------------
-- Servidor:                     127.0.0.1
-- Versão do servidor:           10.4.17-MariaDB - mariadb.org binary distribution
-- OS do Servidor:               Win64
-- HeidiSQL Versão:              11.2.0.6213
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


-- Copiando estrutura do banco de dados para bd_doadores
CREATE DATABASE IF NOT EXISTS `bd_doadores` /*!40100 DEFAULT CHARACTER SET utf8mb4 */;
USE `bd_doadores`;

-- Copiando estrutura para tabela bd_doadores.tb_doadores
CREATE TABLE IF NOT EXISTS `tb_doadores` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(100) NOT NULL,
  `cpf` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `telefone` varchar(100) NOT NULL,
  `dt_nasc` varchar(50) NOT NULL DEFAULT '',
  `intervalo` varchar(100) DEFAULT NULL,
  `cep` varchar(100) NOT NULL,
  `logradouro` varchar(100) NOT NULL,
  `num` varchar(50) DEFAULT NULL,
  `bairro` varchar(100) NOT NULL,
  `cidade` varchar(100) NOT NULL,
  `uf` varchar(100) NOT NULL,
  `complemento` varchar(50) DEFAULT NULL,
  `valor` varchar(100) NOT NULL,
  `pagamento` varchar(100) NOT NULL,
  `create` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=61 DEFAULT CHARSET=utf8mb4;

-- Copiando dados para a tabela bd_doadores.tb_doadores: ~2 rows (aproximadamente)
/*!40000 ALTER TABLE `tb_doadores` DISABLE KEYS */;
INSERT INTO `tb_doadores` (`id`, `nome`, `cpf`, `email`, `telefone`, `dt_nasc`, `intervalo`, `cep`, `logradouro`, `num`, `bairro`, `cidade`, `uf`, `complemento`, `valor`, `pagamento`, `create`) VALUES
	(59, 'Bruce Wayne', '468.903.228-94', 'bruce.wayne@gmail.com', '(11) 92332-4324', '09/07/1975', 'bimestral', '06093-006', 'Rua Antônio Agu', '65', 'Centro', 'Osasco', 'SP', 'Gotham', '5.000.000,00', 'debito', '2021-02-13 12:53:12'),
	(60, 'Clark Kent', '468.903.228-94', 'clarkao.superman@gmail.com', '(11) 98763-3454', '05/02/1971', 'anual', '06454-005', 'Praça Alphaville', '216', 'Alphaville Centro Industrial e Empresarial/Alphaville.', 'Barueri', 'SP', 'Kansas - Planeta Diário', '100,00', 'credito', '2021-02-13 12:54:10');
/*!40000 ALTER TABLE `tb_doadores` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;

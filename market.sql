-- --------------------------------------------------------
-- Хост:                         127.0.0.1
-- Версия сервера:               10.4.13-MariaDB - mariadb.org binary distribution
-- Операционная система:         Win64
-- HeidiSQL Версия:              9.5.0.5196
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;


-- Дамп структуры базы данных products
CREATE DATABASE IF NOT EXISTS `products` /*!40100 DEFAULT CHARACTER SET utf8mb4 */;
USE `products`;

-- Дамп структуры для таблица products.products
CREATE TABLE IF NOT EXISTS `products` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(50) DEFAULT NULL,
  `code` varchar(50) DEFAULT NULL,
  `description` varchar(50) DEFAULT NULL,
  `img` varchar(50) DEFAULT NULL,
  `price` int(11) NOT NULL DEFAULT 0,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8mb4;

-- Дамп данных таблицы products.products: ~0 rows (приблизительно)
/*!40000 ALTER TABLE `products` DISABLE KEYS */;
INSERT INTO `products` (`id`, `title`, `code`, `description`, `img`, `price`) VALUES
	(1, 'Oma', 'BM-153', 'Новий товар', 'goods-img.png', 24),
	(2, 'Oma2', 'BM-154', 'Новий товар2', 'goods-img.png', 30),
	(3, 'Oma3', 'BM-155', 'Новий товар3', 'goods-img.png', 35),
	(4, 'Oma4', 'BM-156', 'Новий товар4', 'goods-img.png', 40),
	(5, 'Oma5', 'BM-157', 'Новий товар5', 'goods-img.png', 45),
	(6, 'Oma6', 'BM-158', 'Новий товар6', 'goods-img.png', 50),
	(7, 'Oma7', 'BM-159', 'Новий товар7', 'goods-img.png', 55),
	(8, 'Oma8', 'BM-160', 'Новий товар8', 'goods-img.png', 60),
	(9, 'Oma9', 'BM-161', 'Новий товар9', 'goods-img.png', 65),
	(10, 'Oma10', 'BM-162', 'Новий товар10', 'goods-img.png', 70),
	(11, 'Oma11', 'BM-163', 'Новий товар11', 'goods-img.png', 75),
	(12, 'Oma12', 'BM-164', 'Новий товар12', 'goods-img.png', 80);
/*!40000 ALTER TABLE `products` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;

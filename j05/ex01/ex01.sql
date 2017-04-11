USE `db_aridolfi`;
DROP TABLE IF EXISTS `ft_table`;
CREATE TABLE IF NOT EXISTS `ft_table` (
	`id` INT UNSIGNED NOT NULL AUTO_INCREMENT PRIMARY KEY,
	`login` VARCHAR(8) NOT NULL DEFAULT 'toto',
	`groupe` ENUM('staff','student','other') NOT NULL,
 	`date_de_creation` DATE NOT NULL);

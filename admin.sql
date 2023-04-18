CREATE TABLE `users` (`id` INT(11) NOT NULL AUTO_INCREMENT , `username` VARCHAR(30) NOT NULL , `password` VARCHAR(30) NOT NULL , PRIMARY KEY (`id`)) ENGINE = InnoDB;
ALTER TABLE `users` ADD UNIQUE(`username`);

INSERT INTO `users` (`id`, `username`, `password`) VALUES (NULL, 'amdmin', 'test');

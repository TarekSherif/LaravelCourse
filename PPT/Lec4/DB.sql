CREATE TABLE `CarGallary`.`Cars` ( `id` INT NOT NULL AUTO_INCREMENT , 
`Cname` VARCHAR(255) NOT NULL , `Image` INT(255) NOT NULL , `DCar` LONGTEXT NOT NULL , `Type` INT NOT NULL , `Catag` VARCHAR(100) NOT NULL , `price` FLOAT NOT NULL , `Guarantee` VARCHAR(50) NOT NULL , PRIMARY KEY (`id`)) ENGINE = InnoDB;
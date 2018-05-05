CREATE TABLE `php-mvc`.`news` ( `id` INT(11) NOT NULL AUTO_INCREMENT ,
                                `title` VARCHAR(255) NOT NULL ,
                                `date` TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP ,
                                `short_content` TEXT NOT NULL ,
                                `content` TEXT NOT NULL ,
                                `author_name` VARCHAR(255) NOT NULL ,
                                `preview` VARCHAR(255) NOT NULL ,
                                `type` VARCHAR(50) NULL , PRIMARY KEY (`id`)) ENGINE = InnoDB;

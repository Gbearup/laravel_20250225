CREATE TABLE `db99`.`students` (
    `id` INT UNSIGNED NOT NULL AUTO_INCREMENT , 
    `name` VARCHAR(255) NOT NULL , 
    `mobile` VARCHAR(255) NOT NULL , 
    PRIMARY KEY (`id`)
    ) ENGINE = InnoDB CHARSET=utf8mb4 COLLATE utf8mb4_unicode_ci;

    CREATE TABLE `db99`.`cats` (
    `id` INT UNSIGNED NOT NULL AUTO_INCREMENT , 
    `name` VARCHAR(50) NOT NULL , 
    `mobile` VARCHAR(20) NOT NULL , 
    PRIMARY KEY (`id`)
    ) ENGINE = InnoDB CHARSET=utf8mb4 COLLATE utf8mb4_unicode_ci;

    CREATE TABLE `db99`.`dogs` (
    `id` INT UNSIGNED NOT NULL AUTO_INCREMENT , 
    `name` VARCHAR(50) NOT NULL , 
    `mobile` VARCHAR(20) NOT NULL , 
    PRIMARY KEY (`id`)
    ) ENGINE = InnoDB CHARSET=utf8mb4 COLLATE utf8mb4_unicode_ci;
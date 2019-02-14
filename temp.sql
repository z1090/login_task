CREATE TABLE `users` (
    `id` INT(11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
    `first_name` VARCHAR(50) NOT NULL,
    `last_name` VARCHAR(50) NOT NULL,
    `email` VARCHAR(100) NOT NULL,
    `date_created` TIMESTAMP DEFAULT NOW() ON UPDATE CURRENT_TIMESTAMP,
    UNIQUE KEY unique_email (`email`)
);
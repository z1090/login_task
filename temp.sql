CREATE TABLE `users` (
    `id` INT(11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
    `first_name` VARCHAR(50) NOT NULL,
    `last_name` VARCHAR(50) NOT NULL,
    `email` VARCHAR(100) NOT NULL,
    `password` VARCHAR(255) NOT NULL,
    `date_created` TIMESTAMP DEFAULT NOW(),
    `last_login` TIMESTAMP DEFAULT NOW() ON UPDATE CURRENT_TIMESTAMP,
    `verified` BOOLEAN DEFAULT 0,
    UNIQUE KEY unique_email (`email`)
)

INSERT INTO `users` (`first_name`, `last_name`, `email`, `password`) VALUES
("Ian", "Wildsmith", "ian.wildsmith@gmail.com", "123456"),
("Billy", "Bagpipes", "billy@bagpipes.com", "pipes"),
("Sally", "Salad", "sally@salad.com", "salad")
;





ALTER TABLE `users` ADD COLUMN `Email_Valid_Str` CHAR(32);
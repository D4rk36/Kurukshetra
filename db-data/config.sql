CREATE DATABASE IF NOT EXISTS xss;
CREATE TABLE IF NOT EXISTS `xss`.`comments` (id INT NOT NULL AUTO_INCREMENT, data VARCHAR(300), PRIMARY KEY(id));
INSERT INTO `xss`.`comments` (id, data) VALUES
  (1, 'Test Comment')

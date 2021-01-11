create database admin_database;
 
use admin_database;
 
CREATE TABLE `news` (
   `id` int(11) NOT NULL AUTO_INCREMENT,
   `title` varchar(100),
   `topic` varchar(100),
   `date` varchar(100),
   PRIMARY KEY (`id`)
);

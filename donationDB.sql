create database donate_db;
 
use donate_db;
 
CREATE TABLE `donations` (
   `id` int(11) NOT NULL AUTO_INCREMENT,
   `cardname` varchar(100),
   `cardnumber` varchar(100),
   `expmonth` varchar(100),
   `expyear` varchar(100),
   `cvv` varchar(100),
   `amount` int(100),
   PRIMARY KEY (`id`)
);
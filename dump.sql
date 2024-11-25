SET NAMES utf8;

CREATE DATABASE `shopcart` /*!40100 DEFAULT CHARACTER SET utf8 */;
USE `shopcart`;

CREATE TABLE `products` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(255) NOT NULL,
  `slug` varchar(255) NOT NULL,
  `content` text NOT NULL,
  `img` varchar(255) DEFAULT NULL,
  `price` double unsigned NOT NULL DEFAULT '0',
  `old_price` double unsigned NOT NULL DEFAULT '0',
  `hit` tinyint(3) unsigned NOT NULL DEFAULT '0',
  `sale` tinyint(3) unsigned NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB;

INSERT INTO `products` (`id`, `title`, `slug`, `content`, `img`, `price`, `old_price`, `hit`, `sale`) VALUES
(1, 'CORT AD810M Acoustic guitar', 'cort-ad810m-akusticeskaya-gitara', 'Description of the guitar CORT AD810M Acoustic guitar', '1.jpg', 2799, 3142, 1, 1),
(2, 'Crafter D6/N Acoustic guitar', 'crafter-d6n-akusticeskaya-gitara', 'Description of the guitar Crafter D6/N Acoustic guitar', '2.jpg', 12626, 0, 1, 0),
(3, 'Crafter D7/N Acoustic guitar', 'crafter-d7n-akusticeskaya-gitara', 'Description of the guitar Crafter D7/N Acoustic guitar', '3.jpg', 13338, 0, 1, 0),
(4, 'Crafter D8/N Acoustic guitar', 'crafter-d8n-akusticeskaya-gitara', 'Description of the guitar Crafter D8/N Acoustic guitar', '4.jpg', 13794, 0, 0, 0),
(5, 'Crafter D8/TS Acoustic guitar', 'crafter-d8ts-akusticeskaya-gitara', 'Description of the guitar Crafter D8/TS Acoustic guitar', '5.jpg', 14165, 0, 0, 0),
(6, 'Crafter GA30/N Acoustic guitar', 'crafter-ga30n-akusticeskaya-gitara', 'Description of the guitar Crafter GA30/N Acoustic guitar', '6.jpg', 22059, 0, 0, 0),
(7, 'Crafter GA45/N Acoustic guitar', 'crafter-ga45n-akusticeskaya-gitara', 'Description of the guitar', '7.jpg', 27075, 0, 0, 0),
(8, 'CRAFTER GA6/N Acoustic guitar', 'crafter-ga6n-akusticeskaya-gitara', 'Description of the guitar CRAFTER GA6/N Acoustic guitar', '8.jpg', 12654, 0, 0, 0),
(9, 'CRAFTER GA7/N Acoustic guitar', 'crafter-ga7n-akusticeskaya-gitara', 'Description of the guitar CRAFTER GA7/N Acoustic guitar', '9.jpg', 13367, 0, 0, 0),
(10, 'CRAFTER GA8/BK Acoustic guitar', 'crafter-ga8bk-akusticeskaya-gitara', 'Description of the guitar CRAFTER GA8/BK Acoustic guitar', '10.jpg', 13794, 0, 0, 0),
(11, 'CRAFTER GA8/N Acoustic guitar', 'crafter-ga8n-akusticeskaya-gitara', 'Description of the guitar CRAFTER GA8/N Acoustic guitar', '11.jpg', 13794, 0, 0, 0),
(12, 'Crafter HiLITE-T CD/N Acoustic guitar', 'crafter-hilite-t-cdn-akusticeskaya-gitara', 'Description of the guitar Crafter HiLITE-T CD/N Acoustic guitar', '12.jpg', 10175, 0, 0, 0),
(13, 'Crafter J15/N Acoustic guitar', 'crafter-j15n-akusticeskaya-gitara', 'Description of the guitar Crafter J15/N Acoustic guitar', '13.jpg', 16743, 0, 0, 0),
(14, 'CRAFTER J18/N Acoustic guitar. dzambo', 'crafter-j18n-akusticeskaya-gitara-dzambo', 'Description of the guitar CRAFTER J18/N Acoustic guitar', '14.jpg', 17271, 0, 0, 0),
(15, 'Crafter LITE-D SP/N Acoustic guitar', 'crafter-lite-d-spn-akusticeskaya-gitara', 'Description of the guitar Crafter LITE-D SP/N Acoustic guitar', '15.jpg', 10545, 0, 0, 0),
(16, 'Crafter MD-42/TR Acoustic guitar', 'crafter-md-42tr-akusticeskaya-gitara', 'Description of the guitar Crafter MD-42/TR Acoustic guitar', '16.jpg', 9006, 0, 0, 0),
(17, 'CRAFTER TA070/Light Amber Acoustic guitar', 'crafter-ta070light-amber-akusticeskaya-gitara', 'Description of the guitar CRAFTER TA070/Light Amber Acoustic guitar', 'no-image.png', 20378, 0, 0, 0);
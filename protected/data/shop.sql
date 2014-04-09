/*
SQLyog Enterprise - MySQL GUI v8.12 
MySQL - 5.5.16 : Database - shop
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;

CREATE DATABASE /*!32312 IF NOT EXISTS*/`shop` /*!40100 DEFAULT CHARACTER SET latin1 */;

USE `shop`;

/*Table structure for table `shop_address` */

DROP TABLE IF EXISTS `shop_address`;

CREATE TABLE `shop_address` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `firstname` varchar(255) CHARACTER SET utf8 NOT NULL,
  `lastname` varchar(255) CHARACTER SET utf8 NOT NULL,
  `street` varchar(255) CHARACTER SET utf8 NOT NULL,
  `zipcode` varchar(255) CHARACTER SET utf8 NOT NULL,
  `city` varchar(255) CHARACTER SET utf8 NOT NULL,
  `country` varchar(255) CHARACTER SET utf8 NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=54 DEFAULT CHARSET=latin1;

/*Data for the table `shop_address` */

insert  into `shop_address`(`id`,`firstname`,`lastname`,`street`,`zipcode`,`city`,`country`) values (8,'Nguyễn','Hạo Nam','123 Huynh Văn Bánh,Tân Bình','10000','Hồ Chí Minh','Việt Nam'),(9,'Nguyễn','Hạo Nam','123 Huynh Văn Bánh,Tân Bình','10000','Hồ Chí Minh','Việt Nam'),(10,'Nguyễn','Hạo Nam','123 Huynh Văn Bánh,Tân Bình','10000','Hồ Chí Minh','Việt Nam'),(11,'Nguyễn','Hạo Nam','123 Huynh Văn Bánh,Tân Bình','10000','Hồ Chí Minh','Việt Nam'),(12,'Nguyễn','Hạo Nam','123 Huynh Văn Bánh,Tân Bình','10000','Hồ Chí Minh','Việt Nam'),(13,'Nguyễn','Quốc Tuấn','216,Bạch Đằng,Bình Thạnh','74000','Hồ Chí Minh','Việt Nam'),(14,'Nguyễn','Quốc Tuấn','216,Bạch Đằng,Bình Thạnh','74000','Hồ Chí Minh','Việt Nam'),(15,'Nguyễn','Quốc Tuấn','216,Bạch Đằng,Bình Thạnh','74000','Hồ Chí Minh','Việt Nam'),(16,'Nguyễn','Thị Tuyết Mai','558/19/4 Lê Quang Định,Gò Vấp','10000','Hồ Chí Minh','Việt Nam'),(17,'Nguyễn','Thị Tuyết Mai','558/19/4 Lê Quang Định,Gò Vấp','10000','Hồ Chí Minh','Việt Nam'),(18,'Nguyễn','Thị Tuyết Mai','558/19/4 Lê Quang Định,Gò Vấp','10000','Hồ Chí Minh','Việt Nam'),(19,'Nguyễn','Thị Tuyết Mai','558/19/4 Lê Quang Định,Gò Vấp','10000','Hồ Chí Minh','Việt Nam'),(20,'Nguyễn','Thị Tuyết Mai','558/19/4 Lê Quang Định,Gò Vấp','10000','Hồ Chí Minh','Việt Nam'),(21,'Nguyễn','Thị Minh Thương','123 Huynh Văn Bánh,Tân Bình','10000','Hồ Chí Minh','Việt Nam'),(22,'Nguyễn','Thị Minh Thương','123 Huynh Văn Bánh,Tân Bình','10000','Hồ Chí Minh','Việt Nam'),(23,'Nguyễn','Thị Minh Thương','123 Huynh Văn Bánh,Tân Bình','10000','Hồ Chí Minh','Việt Nam'),(24,'Nguyễn','Thị Tuyết Mai','558/19/4 Lê Quang Định,Gò Vấp','10000','Hồ Chí Minh','Việt Nam'),(25,'Nguyễn','Thị Tuyết Mai','558/19/4 Lê Quang Định,Gò Vấp','10000','Hồ Chí Minh','Việt Nam'),(26,'Nguyễn','Kim Phượng','558/19/4 Lê Quang Định,Gò Vấp','10000','Hồ Chí Minh','Việt Nam'),(27,'Nguyễn','Kim Phượng','558/19/4 Lê Quang Định,Gò Vấp','10000','Hồ Chí Minh','Việt Nam'),(28,'Nguyễn','Kim Phượng','558/19/4 Lê Quang Định,Gò Vấp','10000','Hồ Chí Minh','Việt Nam'),(29,'Nguyễn','Thị Tuyết Mai','558/19/4 Lê Quang Định,Gò Vấp','10000','Hồ Chí Minh','Việt Nam'),(30,'Nguyễn','Thị Tuyết Mai','558/19/4 Lê Quang Định,Gò Vấp','10000','Hồ Chí Minh','Việt Nam'),(31,'Trần','Minh Hy','558/19/4 Lê Quang Định,Gò Vấp','10000','Hồ Chí Minh','Việt Nam'),(32,'Trần','Minh Hy','558/19/4 Lê Quang Định,Gò Vấp','10000','Hồ Chí Minh','Việt Nam'),(33,'Trần','Minh Hy','558/19/4 Lê Quang Định,Gò Vấp','10000','Hồ Chí Minh','Việt Nam'),(34,'Trần','Minh Hy','558/19/4 Lê Quang Định,Gò Vấp','10000','Hồ Chí Minh','Việt Nam'),(35,'Trần','Minh Hy','558/19/4 Lê Quang Định,Gò Vấp','10000','Hồ Chí Minh','Việt Nam'),(36,'Trần','Minh Hy','558/19/4 Lê Quang Định,Gò Vấp','10000','Hồ Chí Minh','Việt Nam'),(37,'Trần','Minh Hy','558/19/4 Lê Quang Định,Gò Vấp','10000','Hồ Chí Minh','Việt Nam'),(38,'Nguyễn','Thị Tuyết Mai','558/19/4 Lê Quang Định,Gò Vấp','10000','Hồ Chí Minh','Việt Nam'),(39,'Nguyễn','Thị Tuyết Mai','558/19/4 Lê Quang Định,Gò Vấp','10000','Hồ Chí Minh','Việt Nam'),(40,'Nguyễn','Lai Minh Tuấn','558/19/4 Lê Quang Định,Gò Vấp','10000','Hồ Chí Minh','Việt Nam'),(41,'Nguyễn','Lai Minh Tuấn','558/19/4 Lê Quang Định,Gò Vấp','10000','Hồ Chí Minh','Việt Nam'),(42,'Nguyễn','Lai Minh Tuấn','558/19/4 Lê Quang Định,Gò Vấp','10000','Hồ Chí Minh','Việt Nam'),(43,'Nguyễn','Lai Minh Tuấn','558/19/4 Lê Quang Định,Gò Vấp','10000','Hồ Chí Minh','Việt Nam'),(44,'Nguyễn','Lai Minh Tuấn','558/19/4 Lê Quang Định,Gò Vấp','10000','Hồ Chí Minh','Việt Nam'),(45,'Nguyễn','Thị Tuyết Mai','558/19/4 Lê Quang Định,Gò Vấp','10000','Hồ Chí Minh','Việt Nam'),(46,'Nguyễn','Thị Tuyết Mai','558/19/4 Lê Quang Định,Gò Vấp','10000','Hồ Chí Minh','Việt Nam'),(47,'Nguyễn','Quốc Huy','558/19/4 Lê Quang Định,Gò Vấp','10000','Hồ Chí Minh','Việt Nam'),(48,'Nguyễn','Quốc Huy','558/19/4 Lê Quang Định,Gò Vấp','10000','Hồ Chí Minh','Việt Nam'),(49,'Nguyễn','Quốc Huy','558/19/4 Lê Quang Định,Gò Vấp','10000','Hồ Chí Minh','Việt Nam'),(50,'Nguyễn','Quốc Huy','558/19/4 Lê Quang Định,Gò Vấp','10000','Hồ Chí Minh','Việt Nam'),(51,'Nguyễn','Quốc Huy','558/19/4 Lê Quang Định,Gò Vấp','10000','Hồ Chí Minh','Việt Nam'),(52,'Nguyễn','Thị Tuyết Mai','558/19/4 Lê Quang Định,Gò Vấp','10000','Hồ Chí Minh','Việt Nam'),(53,'Nguyễn','Thị Tuyết Mai','558/19/4 Lê Quang Định,Gò Vấp','10000','Hồ Chí Minh','Việt Nam');

/*Table structure for table `shop_category` */

DROP TABLE IF EXISTS `shop_category`;

CREATE TABLE `shop_category` (
  `category_id` int(11) NOT NULL AUTO_INCREMENT,
  `parent_id` int(11) DEFAULT NULL,
  `title` varchar(45) NOT NULL,
  `description` text,
  `language` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`category_id`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8;

/*Data for the table `shop_category` */

insert  into `shop_category`(`category_id`,`parent_id`,`title`,`description`,`language`) values (1,0,'Áo khoác & Áo','',''),(2,0,'Hoodies & Sweatshirts','',''),(3,0,'Áo Thun','',''),(4,0,'Áo Sơ Mi','',''),(5,0,'Áo Len','',''),(6,0,'Suit & Blazers','',''),(7,0,'Quần & Quần Soóc','',''),(8,0,'Jean','',''),(9,0,'Áo Kiểu','',''),(10,0,'Áo khoác','',''),(11,0,'Váy Đầm','','');

/*Table structure for table `shop_customer` */

DROP TABLE IF EXISTS `shop_customer`;

CREATE TABLE `shop_customer` (
  `customer_id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) DEFAULT NULL,
  `address_id` int(11) NOT NULL,
  `delivery_address_id` int(11) NOT NULL,
  `billing_address_id` int(11) NOT NULL,
  `email` varchar(45) NOT NULL,
  PRIMARY KEY (`customer_id`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8;

/*Data for the table `shop_customer` */

insert  into `shop_customer`(`customer_id`,`user_id`,`address_id`,`delivery_address_id`,`billing_address_id`,`email`) values (4,1,8,0,0,'hao_nam@gmail.com'),(5,0,13,0,0,'tuan_handsome@gmail.com'),(6,4,16,0,0,'mai@gmail.com'),(7,0,21,0,0,'thuong_seven@gmail.com'),(8,0,26,0,0,'phuong@gmail.com'),(9,0,31,0,0,'hy@gmail.com'),(10,0,40,0,0,'minhtuan@gmail.com'),(11,0,47,0,0,'huy@gmail.com');

/*Table structure for table `shop_image` */

DROP TABLE IF EXISTS `shop_image`;

CREATE TABLE `shop_image` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(45) NOT NULL,
  `filename` varchar(250) NOT NULL,
  `product_id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_Image_Products` (`product_id`),
  CONSTRAINT `fk_Image_Products` FOREIGN KEY (`product_id`) REFERENCES `shop_products` (`product_id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=117 DEFAULT CHARSET=utf8;

/*Data for the table `shop_image` */

insert  into `shop_image`(`id`,`title`,`filename`,`product_id`) values (1,'Áo Len 501','400.jpg',1),(2,'Áo Len 502','401.jpg',2),(3,'Áo Len 503','402.jpg',3),(4,'Áo Len 504','403.jpg',4),(5,'Áo Len 505','404.jpg',5),(6,'Áo Len 506','405.jpg',6),(7,'Áo Len 507','406.jpg',7),(8,'Áo Len 508','407.jpg',8),(9,'Áo Len 509','408.jpg',9),(10,'Áo Len 510','409.jpg',10),(11,'Suit & Blazers 601 ','501.JPG',11),(12,'Suit & Blazers 602 ','502.jpg',12),(13,'Suit & Blazers 603 ','503.jpg',13),(14,'Suit & Blazers 604','504.jpg',14),(15,'Suit & Blazers 605 ','505.jpg',15),(16,'Suit & Blazers 606 ','506.jpg',16),(17,'Suit & Blazers 607','507.jpg',17),(18,'Suit & Blazers 608','508.jpg',18),(19,'Suit & Blazers 609','509.jpg',19),(20,'Suit & Blazers 610','510.JPG',20),(21,'Jean 701','701.jpg',21),(22,'Jean 702','702.jpg',22),(23,'Jean 703','703.jpg',23),(24,'Jean 704','704.jpg',24),(25,'Jean 705','705.jpg',25),(26,'Jean 706','706.jpg',26),(27,'Jean 707','707.jpg',27),(28,'Jean 708','708.jpg',28),(29,'Jean 709','709.jpg',29),(30,'Jean 710','710.jpg',30),(31,'Quần & Quần Soóc 801','801.jpg',31),(32,'Quần & Quần Soóc 802','802.jpg',32),(33,'Quần & Quần Soóc 803','803.jpg',33),(34,'Quần & Quần Soóc 804','804.jpg',34),(35,'Quần & Quần Soóc 805','805.jpg',35),(36,'Quần & Quần Soóc 806','806.jpg',36),(37,'Quần & Quần Soóc 807','807.jpg',37),(38,'Quần & Quần Soóc 808','808.jpg',38),(39,'Quần & Quần Soóc 809','809.jpg',39),(40,'Quần & Quần Soóc 810','810.jpg',40),(41,'Áo Sơ Mi 201','401.jpg',41),(42,'Áo Sơ Mi 202 ','402.jpg',42),(43,'Áo Sơ Mi 203 ','403.jpg',43),(44,'Áo Sơ Mi 204','404.jpg',44),(45,'Áo Sơ Mi 205 ','405.jpg',45),(46,'Áo Sơ Mi 206 ','406.jpg',46),(47,'Áo Sơ Mi 207 ','407.jpg',47),(48,'Áo Sơ Mi 208 ','408.jpg',48),(49,'Áo Sơ Mi 209','409.jpg',49),(50,'Áo Sơ Mi 210 ','410.jpg',50),(51,'Áo Thun 301 ','301.jpg',51),(52,'Áo Thun 302 ','302.jpg',52),(53,'Áo Thun 303 ','303.jpg',53),(54,'Áo Thun 304 ','304.jpg',54),(55,'Áo Thun 305 ','305.jpg',55),(56,'Áo Thun 306 ','306.jpg',56),(57,'Áo Thun 307 ','307.jpg',57),(58,'Áo Thun 308 ','308.jpg',58),(59,'Áo Thun 309','309.jpg',59),(60,'Áo Thun 310 ','310.jpg',60),(61,'Hoodies & Sweatshirt 201 ','201.JPG',61),(62,'Hoodies & Sweatshirt 202 ','202.jpg',62),(63,'Hoodies & Sweatshirt 203','203.jpg',63),(64,'Hoodies & Sweatshirt 204 ','204.jpg',64),(65,'Hoodies & Sweatshirt 205','205.jpg',65),(66,'Hoodies & Sweatshirt 206','206.jpg',66),(67,'Hoodies & Sweatshirt 207 ','207.jpg',67),(68,'Hoodies & Sweatshirt 208','208.jpg',68),(69,'Hoodies & Sweatshirt 209','209.jpg',69),(70,'Hoodies & Sweatshirt 210','210.jpg',70),(71,'Áo khoác & Áo 001','101.jpg',71),(72,'Áo khoác & Áo 002 ','102.jpg',72),(73,'Áo khoác & Áo 003 ','103.jpg',73),(74,'Áo khoác & Áo 004 ','104.jpg',74),(75,'Áo khoác & Áo 005 ','105.jpg',75),(76,'Áo khoác & Áo 006 ','106.jpg',76),(77,'Áo khoác & Áo 007 ','107.jpg',77),(78,'Áo khoác & Áo 008 ','108.jpg',78),(79,'Áo khoác & Áo 009 ','109.jpg',79),(80,'Áo khoác & Áo 010 ','110.jpg',80),(81,'Áo kiểu MT440','440.jpg',94),(82,'Áo kiểu MT441','441.jpg',95),(83,'Áo kiểu MT442','442.jpg',96),(84,'Áo kiểu MT443','443.jpg',97),(85,'Áo kiểu MT444','444.jpg',98),(86,'Áo kiểu MT445','445.jpg',99),(87,'Áo kiểu MT446','446.jpg',100),(88,'Áo kiểu MT447','447.jpg',101),(89,'Áo kiểu MT448','448.jpg',102),(90,'Áo kiểu MT449','449.jpg',103),(91,'Áo kiểu MT450','450.jpg',104),(92,'Áo kiểu MT451','451.jpg',105),(93,'Áo khoác MT900','900.jpg',106),(94,'Áo khoác MT901','901.jpg',107),(95,'Áo khoác MT902','902.jpg',108),(96,'Áo khoác MT903','903.jpg',109),(97,'Áo khoác MT905','904.jpg',111),(98,'Áo khoác MT904 ','905.jpg',110),(99,'Áo khoác MT906','906.jpg',112),(100,'Áo khoác MT907','907.jpg',113),(101,'Áo khoác MT908','908.jpg',114),(102,'Áo khoác MT909','909.jpg',115),(103,'Áo khoác MT910','910.jpg',116),(104,'Áo khoác MT911','911.jpg',117),(105,'Váy liền MT454','540.jpg',118),(106,'Váy liền MT451','541.jpg',119),(107,'Váy liền MT450','542.jpg',120),(108,'Váy liền MT449','543.jpg',121),(109,'Váy liền MT447','544.jpg',122),(110,'Váy liền MT418','545.jpg',123),(111,'Váy liền MT383','546.jpg',124),(112,'Váy liền MT379 ','547.jpg',125),(113,'Váy liền MT377','548.jpg',126),(114,'Váy liền MT376','549.jpg',127),(115,'Váy liền MT372','550.jpg',128),(116,'Váy liền MT370','551.jpg',129);

/*Table structure for table `shop_order` */

DROP TABLE IF EXISTS `shop_order`;

CREATE TABLE `shop_order` (
  `order_id` int(11) NOT NULL AUTO_INCREMENT,
  `customer_id` int(11) NOT NULL,
  `delivery_address_id` int(11) NOT NULL,
  `billing_address_id` int(11) NOT NULL,
  `ordering_date` int(11) NOT NULL,
  `ordering_done` tinyint(1) DEFAULT NULL,
  `ordering_confirmed` tinyint(1) DEFAULT NULL,
  `payment_method` int(11) NOT NULL,
  `shipping_method` int(11) NOT NULL,
  `comment` text,
  PRIMARY KEY (`order_id`),
  KEY `fk_order_customer` (`customer_id`),
  CONSTRAINT `fk_order_customer1` FOREIGN KEY (`customer_id`) REFERENCES `shop_customer` (`customer_id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=22 DEFAULT CHARSET=utf8;

/*Data for the table `shop_order` */

insert  into `shop_order`(`order_id`,`customer_id`,`delivery_address_id`,`billing_address_id`,`ordering_date`,`ordering_done`,`ordering_confirmed`,`payment_method`,`shipping_method`,`comment`) values (3,4,9,10,1385023309,NULL,NULL,1,1,''),(4,4,11,12,1385024059,NULL,NULL,1,1,''),(5,5,14,15,1385033882,NULL,NULL,3,1,''),(6,6,17,18,1385044994,NULL,NULL,1,1,''),(7,6,19,20,1385253979,NULL,NULL,2,1,''),(8,7,22,23,1385254157,NULL,NULL,4,1,''),(9,6,24,25,1385254482,NULL,NULL,3,1,''),(10,8,27,28,1385284267,NULL,NULL,3,1,''),(11,6,29,30,1385778260,NULL,NULL,2,1,''),(12,9,32,33,1385778754,NULL,NULL,3,1,''),(13,9,34,35,1385778817,NULL,NULL,2,1,''),(14,9,36,37,1385778902,NULL,NULL,4,1,''),(15,6,38,39,1385779417,NULL,NULL,2,1,''),(16,10,41,42,1385987195,NULL,NULL,2,1,''),(17,10,43,44,1385987239,NULL,NULL,5,1,''),(18,6,45,46,1385987305,NULL,NULL,1,1,''),(19,11,48,49,1387288199,NULL,NULL,6,1,''),(20,11,50,51,1387290367,NULL,NULL,4,1,''),(21,6,52,53,1387291696,NULL,NULL,4,2,'');

/*Table structure for table `shop_order_position` */

DROP TABLE IF EXISTS `shop_order_position`;

CREATE TABLE `shop_order_position` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `order_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `amount` int(11) NOT NULL,
  `specifications` text CHARACTER SET utf8 NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=22 DEFAULT CHARSET=latin1;

/*Data for the table `shop_order_position` */

insert  into `shop_order_position`(`id`,`order_id`,`product_id`,`amount`,`specifications`) values (3,3,4,2,'null'),(4,4,118,2,'null'),(5,5,7,2,'null'),(6,6,119,2,'null'),(7,7,4,2,'null'),(8,8,120,2,'null'),(9,9,123,1,'null'),(10,10,123,1,'null'),(11,11,4,1,'null'),(12,12,7,3,'null'),(13,13,56,2,'null'),(14,14,126,2,'null'),(15,15,95,1,'null'),(16,16,4,2,'null'),(17,17,10,1,'null'),(18,18,123,2,'null'),(19,19,76,1,'null'),(20,20,72,2,'null'),(21,21,107,1,'null');

/*Table structure for table `shop_payment_method` */

DROP TABLE IF EXISTS `shop_payment_method`;

CREATE TABLE `shop_payment_method` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(255) CHARACTER SET utf8 NOT NULL,
  `description` text CHARACTER SET utf8,
  `tax_id` int(11) NOT NULL,
  `price` double NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

/*Data for the table `shop_payment_method` */

insert  into `shop_payment_method`(`id`,`title`,`description`,`tax_id`,`price`) values (1,'Trả tiền mặt khi giao hàng','Đây vẫn là hình thức thanh toán chủ yếu khi mua hàng qua các trang web vì đảm bảo độ an toàn, khách hàng nhận đúng hàng đã đặt mua thì mới trả tiền. ',1,0),(2,'Chuyển khoản ngân hàng','Thông qua ATM hoặc giao dịch trực tiếp tại ngân hàng, chủ tài khoản chuyển khoản sang tài khoản của người bán một số tiền trước khi nhận hàng. ',1,0),(3,'Gửi tiền qua bưu điện hoặc hệ thống chuyển tiền quốc tế','trong trường hợp người mua hoặc người bán ở cách xa, lại không có tài khoản ngân hàng thì có thể dùng cách này. Tuy nhiên sẽ tốn một khoản phí chuyển tiền; tùy dịch vụ của từng ngân hàng, mức phí có thể là vài chục nghìn đồng.',1,0),(4,'Thanh toán bằng ví điện tử','Sở hữu ví điện tử của Mobivi, Payoo, VnMart, khách hàng có thể thanh toán trực tuyến trên một số website đã chấp nhận ví điện tử này.',1,0),(5,'Thanh toán trực tuyến','Một số website tại Việt Nam đã có hình thức thanh toán trực tuyến giúp cho việc mua hàng và thanh toán đơn giản, tiện lợi.',1,0),(6,'Thanh toán bằng thẻ',' Thanh toán bằng thẻ tín dụng hoặc ghi nợ quốc tế: khách hàng sở hữu các loại thẻ mang thương hiệu Visa, Master, American Express, JCB có thể thanh toán hơn 60 website đã kết nối với cổng thanh toán OnePay.\r\n\r\n-       Thanh toán bằng thẻ ghi nợ nội địa: Các chủ thẻ đa năng Đông Á và chủ thẻ Connect 24 của Vietcombank đã có thể thực hiện thanh toán trực tuyến tại các website đã kết nối với ngân hàng Đông Á và công thanh toán OnePay.',1,0);

/*Table structure for table `shop_product_specification` */

DROP TABLE IF EXISTS `shop_product_specification`;

CREATE TABLE `shop_product_specification` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) CHARACTER SET utf8 NOT NULL,
  `is_user_input` tinyint(1) DEFAULT NULL,
  `required` tinyint(1) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

/*Data for the table `shop_product_specification` */

insert  into `shop_product_specification`(`id`,`title`,`is_user_input`,`required`) values (1,'Size',0,1),(2,'Color',0,0),(3,'Some random attribute',0,0),(4,'Material',0,1),(5,'Specific number',1,1);

/*Table structure for table `shop_product_variation` */

DROP TABLE IF EXISTS `shop_product_variation`;

CREATE TABLE `shop_product_variation` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `product_id` int(11) NOT NULL,
  `specification_id` int(11) NOT NULL,
  `position` int(11) NOT NULL,
  `title` varchar(255) CHARACTER SET utf8 NOT NULL,
  `price_adjustion` float NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

/*Data for the table `shop_product_variation` */

insert  into `shop_product_variation`(`id`,`product_id`,`specification_id`,`position`,`title`,`price_adjustion`) values (1,1,1,2,'variation1',3),(2,1,1,3,'variation2',6),(3,1,2,4,'variation3',9),(4,1,5,1,'please enter a number here',0);

/*Table structure for table `shop_products` */

DROP TABLE IF EXISTS `shop_products`;

CREATE TABLE `shop_products` (
  `product_id` int(11) NOT NULL AUTO_INCREMENT,
  `category_id` int(11) NOT NULL,
  `tax_id` int(11) NOT NULL,
  `title` varchar(45) NOT NULL,
  `description` text,
  `price` varchar(45) DEFAULT NULL,
  `language` varchar(45) DEFAULT NULL,
  `specifications` text,
  PRIMARY KEY (`product_id`),
  KEY `fk_products_category` (`category_id`),
  CONSTRAINT `fk_products_category` FOREIGN KEY (`category_id`) REFERENCES `shop_category` (`category_id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=130 DEFAULT CHARSET=utf8;

/*Data for the table `shop_products` */

insert  into `shop_products`(`product_id`,`category_id`,`tax_id`,`title`,`description`,`price`,`language`,`specifications`) values (1,5,0,'Áo Len 501','Fashion Men\'s Fawn Round Collar Sweater Pullover ','18.98',NULL,'{\"Size\":\"\",\"Color\":\"\",\"Some random attribute\":\"\",\"Material\":\"\",\"Specific number\":\"\"}'),(2,5,0,'Áo Len 502','Men\'s Slim Thick Long-sleeved Cardigan ','11.50',NULL,'{\"Size\":\"\",\"Color\":\"\",\"Some random attribute\":\"\",\"Material\":\"\",\"Specific number\":\"\"}'),(3,5,0,'Áo Len 503','Men\'s Retro Asymmetric Access Design Slim Casual','12.98',NULL,'{\"Size\":\"\",\"Color\":\"\",\"Some random attribute\":\"\",\"Material\":\"\",\"Specific number\":\"\"}'),(4,5,0,'Áo Len 504','Men\'s Fashion Slim Fit Patch Pocket V-neck Cardigan ','17.20',NULL,'{\"Size\":\"\",\"Color\":\"\",\"Some random attribute\":\"\",\"Material\":\"\",\"Specific number\":\"\"}'),(5,5,0,'Áo Len 505','Men\'s Fashion Casual Slim Lapel Two Button Solid ','11.95',NULL,'{\"Size\":\"\",\"Color\":\"\",\"Some random attribute\":\"\",\"Material\":\"\",\"Specific number\":\"\"}'),(6,5,0,'Áo Len 506','Men\'s Slim Mixed Colors Cardigan Long Sleeve ','14.50',NULL,'{\"Size\":\"\",\"Color\":\"\",\"Some random attribute\":\"\",\"Material\":\"\",\"Specific number\":\"\"}'),(7,5,0,'Áo Len 507','Men\'s Fashion Contrast Color Patch Pocket Long ','12.98',NULL,'{\"Size\":\"\",\"Color\":\"\",\"Some random attribute\":\"\",\"Material\":\"\",\"Specific number\":\"\"}'),(8,5,0,'Áo Len 508','Men\'s Fashion Casual Metal Button V-neck Knit ','16.93',NULL,'{\"Size\":\"\",\"Color\":\"\",\"Some random attribute\":\"\",\"Material\":\"\",\"Specific number\":\"\"}'),(9,5,0,'Áo Len 509','Men\'s Fashion Splicing Color Slim Fit V-neck ','14.88',NULL,'{\"Size\":\"\",\"Color\":\"\",\"Some random attribute\":\"\",\"Material\":\"\",\"Specific number\":\"\"}'),(10,5,0,'Áo Len 510','Men\'s Fashion Stripe Color Knitted Cardigan','14.86',NULL,'{\"Size\":\"\",\"Color\":\"\",\"Some random attribute\":\"\",\"Material\":\"\",\"Specific number\":\"\"}'),(11,6,0,'Suit & Blazers 601','Mens Long Sleeve V-Neck Single Button Blazer Suit Business Jacket','13.99',NULL,'{\"Size\":\"\",\"Color\":\"\",\"Some random attribute\":\"\",\"Material\":\"\",\"Specific number\":\"\"}'),(12,6,0,'Suit & Blazers 602','Casual Business Men\'s Long Sleeve V Neck One Button Suit','16.58',NULL,'{\"Size\":\"\",\"Color\":\"\",\"Some random attribute\":\"\",\"Material\":\"\",\"Specific number\":\"\"}'),(13,6,0,'Suit & Blazers 603','Men\'s Fashion Personality Casual Slim Fit Suits Black Gray Navy Blue','48.79',NULL,'{\"Size\":\"\",\"Color\":\"\",\"Some random attribute\":\"\",\"Material\":\"\",\"Specific number\":\"\"}'),(14,6,0,'Suit & Blazers 604','Fashion Korean Version Suiting Sportsman Slim V-neck Vest','14.45',NULL,'{\"Size\":\"\",\"Color\":\"\",\"Some random attribute\":\"\",\"Material\":\"\",\"Specific number\":\"\"}'),(15,6,0,'Suit & Blazers 605','Men\'s Fashion Casual Solid Color Stand Collar Suit','15.49',NULL,'{\"Size\":\"\",\"Color\":\"\",\"Some random attribute\":\"\",\"Material\":\"\",\"Specific number\":\"\"}'),(16,6,0,'Suit & Blazers 606','Men\'s Fashion Korean Business Multicolor Suit','18.98',NULL,'{\"Size\":\"\",\"Color\":\"\",\"Some random attribute\":\"\",\"Material\":\"\",\"Specific number\":\"\"}'),(17,6,0,'Suit & Blazers 607','Men\'s Fashion Leather Label Slim Fit Suit Casual Knitted Blazer','18.50',NULL,'{\"Size\":\"\",\"Color\":\"\",\"Some random attribute\":\"\",\"Material\":\"\",\"Specific number\":\"\"}'),(18,6,0,'Suit & Blazers 608','Men\'s British Style Casual Slim Double-breasted Coat Suit','26.99',NULL,'{\"Size\":\"\",\"Color\":\"\",\"Some random attribute\":\"\",\"Material\":\"\",\"Specific number\":\"\"}'),(19,6,0,'Suit & Blazers 609','Men\'s Turn-down Collar Slim Double-breasted Casual Suit','25.99',NULL,'{\"Size\":\"\",\"Color\":\"\",\"Some random attribute\":\"\",\"Material\":\"\",\"Specific number\":\"\"}'),(20,6,0,'Suit & Blazers 610','Men\'s Fashion Casual Ultra Collection Slim Fit Suit Blazer','32.39',NULL,'{\"Size\":\"\",\"Color\":\"\",\"Some random attribute\":\"\",\"Material\":\"\",\"Specific number\":\"\"}'),(21,8,0,'Jean 701','Jeans Fashion Men Cotton Faded Blue Grey Straight','20.69',NULL,'{\"Size\":\"\",\"Color\":\"\",\"Some random attribute\":\"\",\"Material\":\"\",\"Specific number\":\"\"}'),(22,8,0,'Jean 702','Worn Out Jeans Mens Blue Straight Jeans Red ','23.99',NULL,'{\"Size\":\"\",\"Color\":\"\",\"Some random attribute\":\"\",\"Material\":\"\",\"Specific number\":\"\"}'),(23,8,0,'Jean 703','Skinny Fashion Jeans Men Bleached Springy Jeans','37.50',NULL,'{\"Size\":\"\",\"Color\":\"\",\"Some random attribute\":\"\",\"Material\":\"\",\"Specific number\":\"\"}'),(24,8,0,'Jean 704','Straight Jeans For Men Dark Blue Cotton Fade ','22.99',NULL,'{\"Size\":\"\",\"Color\":\"\",\"Some random attribute\":\"\",\"Material\":\"\",\"Specific number\":\"\"}'),(25,8,0,'Jean 705','Men Cotton Jeans Fashion Denim Jeans Casual ','22.68',NULL,'{\"Size\":\"\",\"Color\":\"\",\"Some random attribute\":\"\",\"Material\":\"\",\"Specific number\":\"\"}'),(26,8,0,'Jean 706','Men\'s Straight Jeans Blue Faded Jeans Waterstreak ','22.59',NULL,'{\"Size\":\"\",\"Color\":\"\",\"Some random attribute\":\"\",\"Material\":\"\",\"Specific number\":\"\"}'),(27,8,0,'Jean 707','Jeans Fashion Men Springy Skinny Dot Bleached Jeans','18.98',NULL,'{\"Size\":\"\",\"Color\":\"\",\"Some random attribute\":\"\",\"Material\":\"\",\"Specific number\":\"\"}'),(28,8,0,'Jean 708','Men\'s Fashion Blue Skinny Pencil Jeans pants Denim','19.46',NULL,'{\"Size\":\"\",\"Color\":\"\",\"Some random attribute\":\"\",\"Material\":\"\",\"Specific number\":\"\"}'),(29,8,0,'Jean 709','Mens Fashion Casual Slim Straight Trousers Jeans ','16.98',NULL,'{\"Size\":\"\",\"Color\":\"\",\"Some random attribute\":\"\",\"Material\":\"\",\"Specific number\":\"\"}'),(30,8,0,'Jean 710','Black Jeans Mens Straight Casual Jeans Slim Fit Pants','18.99',NULL,'{\"Size\":\"\",\"Color\":\"\",\"Some random attribute\":\"\",\"Material\":\"\",\"Specific number\":\"\"}'),(31,7,0,'Quần & Quần Soóc 801','Casual Men\'s Designed Straight Slim Fit Long Pants','11.99',NULL,'{\"Size\":\"\",\"Color\":\"\",\"Some random attribute\":\"\",\"Material\":\"\",\"Specific number\":\"\"}'),(32,7,0,'Quần & Quần Soóc 802','Men Casual Plaid Pleated Pockets Cropped Zip Pants ','12.99',NULL,'{\"Size\":\"\",\"Color\":\"\",\"Some random attribute\":\"\",\"Material\":\"\",\"Specific number\":\"\"}'),(33,7,0,'Quần & Quần Soóc 803','Multi-pocket Military Cargo Army Work Combat Pants Trousers','24.99',NULL,'{\"Size\":\"\",\"Color\":\"\",\"Some random attribute\":\"\",\"Material\":\"\",\"Specific number\":\"\"}'),(34,7,0,'Quần & Quần Soóc 804','Fashion Men Business Straight Slim Cotton Suit Pants','15.99',NULL,'{\"Size\":\"\",\"Color\":\"\",\"Some random attribute\":\"\",\"Material\":\"\",\"Specific number\":\"\"}'),(35,7,0,'Quần & Quần Soóc 805','Fashion Casual Skinny Taper Slacks Harem Pants 2 Color','13.38',NULL,'{\"Size\":\"\",\"Color\":\"\",\"Some random attribute\":\"\",\"Material\":\"\",\"Specific number\":\"\"}'),(36,7,0,'Quần & Quần Soóc 806','Pencil Jeans Candy 12 Colors Skinny Pants ','17.25',NULL,'{\"Size\":\"\",\"Color\":\"\",\"Some random attribute\":\"\",\"Material\":\"\",\"Specific number\":\"\"}'),(37,7,0,'Quần & Quần Soóc 807','Men\'s Double Zipper Slim Straight Casual Trousers Pants ','12.68',NULL,'{\"Size\":\"\",\"Color\":\"\",\"Some random attribute\":\"\",\"Material\":\"\",\"Specific number\":\"\"}'),(38,7,0,'Quần & Quần Soóc 808','Casual Zipper Pocket Decoration Slacks Men Slim Sports Pants','15.22',NULL,'{\"Size\":\"\",\"Color\":\"\",\"Some random attribute\":\"\",\"Material\":\"\",\"Specific number\":\"\"}'),(39,7,0,'Quần & Quần Soóc 809','Dance Sports Trousers Baggy Jogging Harem Pants','14.55',NULL,'{\"Size\":\"\",\"Color\":\"\",\"Some random attribute\":\"\",\"Material\":\"\",\"Specific number\":\"\"}'),(40,7,0,'Quần & Quần Soóc 810','Korean Fashion Slim Plaid Cuff Pants Trousers','12.98',NULL,'{\"Size\":\"\",\"Color\":\"\",\"Some random attribute\":\"\",\"Material\":\"\",\"Specific number\":\"\"}'),(41,4,0,'Áo Sơ Mi 201','Casual Slim Fit Stylish Long Sleeve Dress Shirts','12.98',NULL,'{\"Size\":\"\",\"Color\":\"\",\"Some random attribute\":\"\",\"Material\":\"\",\"Specific number\":\"\"}'),(42,4,0,'Áo Sơ Mi 202','Fashion Unique Neckline Men Slim Long Sleeve Dress Shirt','19.85',NULL,'{\"Size\":\"\",\"Color\":\"\",\"Some random attribute\":\"\",\"Material\":\"\",\"Specific number\":\"\"}'),(43,4,0,'Áo Sơ Mi 203','Korean Solid Color Bag Buckle Simple Shirt','10.98',NULL,'{\"Size\":\"\",\"Color\":\"\",\"Some random attribute\":\"\",\"Material\":\"\",\"Specific number\":\"\"}'),(44,4,0,'Áo Sơ Mi 204','Hot Stylish Men Casual Slim Fitted Dress Shirt','11.50',NULL,'{\"Size\":\"\",\"Color\":\"\",\"Some random attribute\":\"\",\"Material\":\"\",\"Specific number\":\"\"}'),(45,4,0,'Áo Sơ Mi 205','Long Sleeve Fashion Mens Solid Color Slim Casual Dress Shirt','15.60',NULL,'{\"Size\":\"\",\"Color\":\"\",\"Some random attribute\":\"\",\"Material\":\"\",\"Specific number\":\"\"}'),(46,4,0,'Áo Sơ Mi 206','Pocket Badges Metal Button Men Jean Slim Long-sleeved Shirt','12.28',NULL,'{\"Size\":\"\",\"Color\":\"\",\"Some random attribute\":\"\",\"Material\":\"\",\"Specific number\":\"\"}'),(47,4,0,'Áo Sơ Mi 207','Multi-Color Stand Collar Men Short-sleeve Shirt','8.99',NULL,'{\"Size\":\"\",\"Color\":\"\",\"Some random attribute\":\"\",\"Material\":\"\",\"Specific number\":\"\"}'),(48,4,0,'Áo Sơ Mi 208','Solid Color Ribbon Decoration Men Long Sleeve Dress Shirt','12.98',NULL,'{\"Size\":\"\",\"Color\":\"\",\"Some random attribute\":\"\",\"Material\":\"\",\"Specific number\":\"\"}'),(49,4,0,'Áo Sơ Mi 209','Solid Color Baseball Jersey Minimalist Collar Cuff Shirts','16.56',NULL,'{\"Size\":\"\",\"Color\":\"\",\"Some random attribute\":\"\",\"Material\":\"\",\"Specific number\":\"\"}'),(50,4,0,'Áo Sơ Mi 210','Men\'s Fashion Casual Slim Splicing Shirts Black','11.57',NULL,'{\"Size\":\"\",\"Color\":\"\",\"Some random attribute\":\"\",\"Material\":\"\",\"Specific number\":\"\"}'),(51,3,0,'Áo Thun 301','Dragon Pattern Round Neck Long Sleeve Slim T-Shirt','10.89',NULL,'{\"Size\":\"\",\"Color\":\"\",\"Some random attribute\":\"\",\"Material\":\"\",\"Specific number\":\"\"}'),(52,3,0,'Áo Thun 302','Fashion Round Neck Raglan Long Sleeve T-shirt','9.98',NULL,'{\"Size\":\"\",\"Color\":\"\",\"Some random attribute\":\"\",\"Material\":\"\",\"Specific number\":\"\"}'),(53,3,0,'Áo Thun 303','Hand Printed Unisex Fashion Round Neck Short Sleeve T-shirts','7.99',NULL,'{\"Size\":\"\",\"Color\":\"\",\"Some random attribute\":\"\",\"Material\":\"\",\"Specific number\":\"\"}'),(54,3,0,'Áo Thun 304','Mixed Colors Round Neck Long Sleeve Bottoming T-shirt','10.69',NULL,'{\"Size\":\"\",\"Color\":\"\",\"Some random attribute\":\"\",\"Material\":\"\",\"Specific number\":\"\"}'),(55,3,0,'Áo Thun 305','Slim Fit Tee V-Neck Long Sleeve Casual Cotton T-Shirt','10.99',NULL,'{\"Size\":\"\",\"Color\":\"\",\"Some random attribute\":\"\",\"Material\":\"\",\"Specific number\":\"\"}'),(56,3,0,'Áo Thun 306','Slim Crew Neck Solid Cotton Blend Short Sleeve Tee T-shirt','4.99',NULL,'{\"Size\":\"\",\"Color\":\"\",\"Some random attribute\":\"\",\"Material\":\"\",\"Specific number\":\"\"}'),(57,3,0,'Áo Thun 307','Fashion Casual Splicing Short Sleeve Polo Shirts','8.99',NULL,'{\"Size\":\"\",\"Color\":\"\",\"Some random attribute\":\"\",\"Material\":\"\",\"Specific number\":\"\"}'),(58,3,0,'Áo Thun 308','Fashion Deer Pattern Slim Fit Short Sleeve T-Shirt Polo Shirt','14.90',NULL,'{\"Size\":\"\",\"Color\":\"\",\"Some random attribute\":\"\",\"Material\":\"\",\"Specific number\":\"\"}'),(59,3,0,'Áo Thun 309','Men\'s Stylish Casual Formal Slim Fit Short Sleeve T-Shirts','11.55',NULL,'{\"Size\":\"\",\"Color\":\"\",\"Some random attribute\":\"\",\"Material\":\"\",\"Specific number\":\"\"}'),(60,3,0,'Áo Thun 310','Casual Slim Long-Sleeved Hoodie T-Shirt','14.80',NULL,'{\"Size\":\"\",\"Color\":\"\",\"Some random attribute\":\"\",\"Material\":\"\",\"Specific number\":\"\"}'),(61,2,0,'Hoodies & Sweatshirt 201','Men\'s Fashion Slim Fit Jackets Hoodie Sweatshirt Coat W14','13.98',NULL,'{\"Size\":\"\",\"Color\":\"\",\"Some random attribute\":\"\",\"Material\":\"\",\"Specific number\":\"\"}'),(62,2,0,'Hoodies & Sweatshirt 202','Mens Short Hoodies Jackets Tops Casual Zip Jumper Coats','13.98',NULL,'{\"Size\":\"\",\"Color\":\"\",\"Some random attribute\":\"\",\"Material\":\"\",\"Specific number\":\"\"}'),(63,2,0,'Hoodies & Sweatshirt 203','New Fashion Solid Color Slim Fit Zipper Cardigan Hoodies Coat','16.86',NULL,'{\"Size\":\"\",\"Color\":\"\",\"Some random attribute\":\"\",\"Material\":\"\",\"Specific number\":\"\"}'),(64,2,0,'Hoodies & Sweatshirt 204','Men\'s Slim Mixed Colors Jackets Sweatshirts','17.78',NULL,'{\"Size\":\"\",\"Color\":\"\",\"Some random attribute\":\"\",\"Material\":\"\",\"Specific number\":\"\"}'),(65,2,0,'Hoodies & Sweatshirt 205','Men\'s Fashion Splicing Long-sleeved Hoodies','17.50',NULL,'{\"Size\":\"\",\"Color\":\"\",\"Some random attribute\":\"\",\"Material\":\"\",\"Specific number\":\"\"}'),(66,2,0,'Hoodies & Sweatshirt 206','New Fashion Solid Color Slim Fit Zipper Cardigan Hoodies Coat','16.98',NULL,'{\"Size\":\"\",\"Color\":\"\",\"Some random attribute\":\"\",\"Material\":\"\",\"Specific number\":\"\"}'),(67,2,0,'Hoodies & Sweatshirt 207','Fashion Slim Fit Hooded Zipper Button Front Outwear Jacket','16.20',NULL,'{\"Size\":\"\",\"Color\":\"\",\"Some random attribute\":\"\",\"Material\":\"\",\"Specific number\":\"\"}'),(68,2,0,'Hoodies & Sweatshirt 208','Fashion Slim Sweatshirt Hoodies 5 Colors Sweater','12.98',NULL,'{\"Size\":\"\",\"Color\":\"\",\"Some random attribute\":\"\",\"Material\":\"\",\"Specific number\":\"\"}'),(69,2,0,'Hoodies & Sweatshirt 209','Slim Fit Hoodies Coats Jackets SweatShirts','13.99',NULL,'{\"Size\":\"\",\"Color\":\"\",\"Some random attribute\":\"\",\"Material\":\"\",\"Specific number\":\"\"}'),(70,2,0,'Hoodies & Sweatshirt 210','Zipper Cardigan Jacket Red Edging Thick Fleece Sweater','15.97',NULL,'{\"Size\":\"\",\"Color\":\"\",\"Some random attribute\":\"\",\"Material\":\"\",\"Specific number\":\"\"}'),(71,1,0,'Áo khoác & Áo 001','Mens Short Hoodies Jackets Tops Casual Zip Jumper Coats','13.98',NULL,'{\"Size\":\"\",\"Color\":\"\",\"Some random attribute\":\"\",\"Material\":\"\",\"Specific number\":\"\"}'),(72,1,0,'Áo khoác & Áo 002','Double Breasted Overcoat Men Long Trench Winter Coat','29.99',NULL,'{\"Size\":\"\",\"Color\":\"\",\"Some random attribute\":\"\",\"Material\":\"\",\"Specific number\":\"\"}'),(73,1,0,'Áo khoác & Áo 003','Fashion Solid Color Slim Fit Zipper Cardigan Hoodies Coat','16.86',NULL,'{\"Size\":\"\",\"Color\":\"\",\"Some random attribute\":\"\",\"Material\":\"\",\"Specific number\":\"\"}'),(74,1,0,'Áo khoác & Áo 004','Fashion Slim Casual Faux Leather Zipper Motorcycle Jacket','32.20',NULL,'{\"Size\":\"\",\"Color\":\"\",\"Some random attribute\":\"\",\"Material\":\"\",\"Specific number\":\"\"}'),(75,1,0,'Áo khoác & Áo 005','Fashion Stand Collar PU Leather Motorcycle Jackets ','32.60',NULL,'{\"Size\":\"\",\"Color\":\"\",\"Some random attribute\":\"\",\"Material\":\"\",\"Specific number\":\"\"}'),(76,1,0,'Áo khoác & Áo 006','Casual Trench Double Breasted Slim Fit Long winter Coats','32.68',NULL,'{\"Size\":\"\",\"Color\":\"\",\"Some random attribute\":\"\",\"Material\":\"\",\"Specific number\":\"\"}'),(77,1,0,'Áo khoác & Áo 007','Double Breasted Horn Button Trench Coat Long Jacket','40.96',NULL,'{\"Size\":\"\",\"Color\":\"\",\"Some random attribute\":\"\",\"Material\":\"\",\"Specific number\":\"\"}'),(78,1,0,'Áo khoác & Áo 008','Slim Fit Single Breasted Long Jacket Coat','32.39',NULL,'{\"Size\":\"\",\"Color\":\"\",\"Some random attribute\":\"\",\"Material\":\"\",\"Specific number\":\"\"}'),(79,1,0,'Áo khoác & Áo 009','Multi-pocket Zipper Stand Collar Men\'s Slim Cotton Jacket','26.99',NULL,'{\"Size\":\"\",\"Color\":\"\",\"Some random attribute\":\"\",\"Material\":\"\",\"Specific number\":\"\"}'),(80,1,0,'Áo khoác & Áo 010','Slim Personalized Multi Zipper Lapel Short Leather Coats','34.69',NULL,'{\"Size\":\"\",\"Color\":\"\",\"Some random attribute\":\"\",\"Material\":\"\",\"Specific number\":\"\"}'),(94,9,0,'Áo kiểu MT440','Áo thun phối 2 màu có nón đáng yêu','10.5',NULL,'{\"Size\":\"Freesize\",\"Color\":\"Xanh, \\u0110\\u1ecf\",\"Some random attribute\":\"\",\"Material\":\"\",\"Specific number\":\"\"}'),(95,9,0,'Áo kiểu MT441','Áo ren lưới dễ thương và đáng yêu','12.5',NULL,'{\"Size\":\"Freesize\",\"Color\":\"M\\u1eb7c \\u0111\\u1ecbnh nh\\u01b0 h\\u00ecnh\",\"Some random attribute\":\"\",\"Material\":\"\",\"Specific number\":\"\"}'),(96,9,0,'Áo kiểu MT442','Áo thun dáng dài hình hổ xinh đẹp.','10.5',NULL,'{\"Size\":\"Freesize\",\"Color\":\"\\u0110en, Xanh \\u0111en, H\\u1ed3ng\",\"Some random attribute\":\"\",\"Material\":\"\",\"Specific number\":\"\"}'),(97,9,0,'Áo kiểu MT443','Áo thun dài tay hình hươu đáng yêu','10.5',NULL,'{\"Size\":\"Freesize\",\"Color\":\"M\\u1eb7c \\u0111\\u1ecbnh nh\\u01b0 h\\u00ecnh\",\"Some random attribute\":\"\",\"Material\":\"\",\"Specific number\":\"\"}'),(98,9,0,'Áo kiểu MT444','Áo thun phối sọc kẻ cá tính, xinh đẹp.','10.5',NULL,'{\"Size\":\"Freesize\",\"Color\":\"Xanh, \\u0110en\",\"Some random attribute\":\"\",\"Material\":\"\",\"Specific number\":\"\"}'),(99,9,0,'Áo kiểu MT445','Áo sơ mi chấm bi cổ sen đáng yêu','10.75',NULL,'{\"Size\":\"Freesize\",\"Color\":\"Xanh \\u0111en, \\u0110\\u1ecf, Xanh l\\u00e1\",\"Some random attribute\":\"\",\"Material\":\"\",\"Specific number\":\"\"}'),(100,9,0,'Áo kiểu MT446','Áo thun sọc kẻ Hàn Quốc xinh đẹp.','12.5',NULL,'{\"Size\":\"Freesize\",\"Color\":\"M\\u1eb7c \\u0111\\u1ecbnh nh\\u01b0 h\\u00ecnh\",\"Some random attribute\":\"\",\"Material\":\"\",\"Specific number\":\"\"}'),(101,9,0,'Áo kiểu MT447','Áo len dài tay hình hươu dễ thương.','10.75',NULL,'{\"Size\":\"Freesize\",\"Color\":\"\\u0110en, \\u0110\\u1ecf\",\"Some random attribute\":\"\",\"Material\":\"\",\"Specific number\":\"\"}'),(102,9,0,'Áo kiểu MT448','Áo thun crop top phong cách Korea','10.5',NULL,'{\"Size\":\"Freesize\",\"Color\":\"M\\u1eb7c \\u0111\\u1ecbnh nh\\u01b0 h\\u00ecnh\",\"Some random attribute\":\"\",\"Material\":\"\",\"Specific number\":\"\"}'),(103,9,0,'Áo kiểu MT449','Áo thun dài tay xì teen túi 3 màu.','11',NULL,'{\"Size\":\"Freesize\",\"Color\":\"M\\u1eb7c \\u0111\\u1ecbnh nh\\u01b0 h\\u00ecnh\",\"Some random attribute\":\"\",\"Material\":\"\",\"Specific number\":\"\"}'),(104,9,0,'Áo kiểu MT450','Áo sơ mi sọc kẻ cổ peter pan phối ren','12',NULL,'{\"Size\":\"Freesize\",\"Color\":\"M\\u1eb7c \\u0111\\u1ecbnh nh\\u01b0 h\\u00ecnh\",\"Some random attribute\":\"\",\"Material\":\"\",\"Specific number\":\"\"}'),(105,9,0,'Áo kiểu MT451','Áo sơ mi phối bèo ren hoa cúc','11',NULL,'{\"Size\":\"Freesize\",\"Color\":\"M\\u1eb7c \\u0111\\u1ecbnh nh\\u01b0 h\\u00ecnh\",\"Some random attribute\":\"\",\"Material\":\"\",\"Specific number\":\"\"}'),(106,10,0,'Áo khoác MT900','Áo khoác len cổ tim đơn giản','12.5',NULL,'{\"Size\":\"Freesize\",\"Color\":\"Xanh \\u0111en, Da\",\"Some random attribute\":\"\",\"Material\":\"\",\"Specific number\":\"\"}'),(107,10,0,'Áo khoác MT901','Áo khoác 2 hàng nút phong cách.','13.5',NULL,'{\"Size\":\"Freesize\",\"Color\":\"\\u0110en, V\\u00e0ng, Xanh lam, Xanh Ng\\u1ecdc\",\"Some random attribute\":\"\",\"Material\":\"\",\"Specific number\":\"\"}'),(108,10,0,'Áo khoác MT902','Áo khoác vest phối da beo cách điệu','18',NULL,'{\"Size\":\"Freesize\",\"Color\":\"H\\u1ed3ng da, \\u0110en\",\"Some random attribute\":\"\",\"Material\":\"\",\"Specific number\":\"\"}'),(109,10,0,'Áo khoác MT903','Áo khoác Jean phối ren viền cổ','16.5',NULL,'{\"Size\":\"M, L\",\"Color\":\"M\\u1eb7c \\u0111\\u1ecbnh nh\\u01b0 h\\u00ecnh\",\"Some random attribute\":\"\",\"Material\":\"\",\"Specific number\":\"\"}'),(110,10,0,'Áo khoác MT904','Áo khoác sọc kẻ Hàn Quốc','14.25',NULL,'{\"Size\":\"Freesize\",\"Color\":\"Tr\\u1eafng, \\u0110en\",\"Some random attribute\":\"\",\"Material\":\"\",\"Specific number\":\"\"}'),(111,10,0,'Áo khoác MT905','Áo khoác len sọc kẻ cá tính, xinh đẹp.','12.5',NULL,'{\"Size\":\"Freesize\",\"Color\":\"\\u0110en, Ghi\",\"Some random attribute\":\"\",\"Material\":\"\",\"Specific number\":\"\"}'),(112,10,0,'Áo khoác MT906','Áo khoác nỉ đáng yêu','14.25',NULL,'{\"Size\":\"Freesize\",\"Color\":\"H\\u1ed3ng, \\u0110en\",\"Some random attribute\":\"\",\"Material\":\"\",\"Specific number\":\"\"}'),(113,10,0,'Áo khoác MT907','Áo khoác da khóa thẳng phong cách','14.25',NULL,'{\"Size\":\"Freesize\",\"Color\":\"N\\u00e2u, \\u0110en\",\"Some random attribute\":\"\",\"Material\":\"\",\"Specific number\":\"\"}'),(114,10,0,'Áo khoác MT908','Áo khoác vest công sở thanh lịch','16.25',NULL,'{\"Size\":\"Freesize\",\"Color\":\" Tr\\u1eafng, \\u0110en, Cam\",\"Some random attribute\":\"\",\"Material\":\"\",\"Specific number\":\"\"}'),(115,10,0,'Áo khoác MT909','Áo khoác da beo tay chiffon cá tính','12',NULL,'{\"Size\":\"Freesize\",\"Color\":\"M\\u1eb7c \\u0111\\u1ecbnh nh\\u01b0 h\\u00ecnh\",\"Some random attribute\":\"\",\"Material\":\"\",\"Specific number\":\"\"}'),(116,10,0,'Áo khoác MT910','Áo khoác nỉ phối chấm bi dễ thương.','14.25',NULL,'{\"Size\":\"Freesize\",\"Color\":\"Xanh \\u0111en, Ghi, Tr\\u1eafng\",\"Some random attribute\":\"\",\"Material\":\"\",\"Specific number\":\"\"}'),(117,10,0,'Áo khoác MT911','Áo khoác da vai áo phối len trẻ trung.','17.25',NULL,'{\"Size\":\"Freesize\",\"Color\":\"\\u0110en, H\\u1ed3ng, Cam\",\"Some random attribute\":\"\",\"Material\":\"\",\"Specific number\":\"\"}'),(118,11,0,'Váy liền MT454','Set váy sọc kẻ + áo thun dài tay','15.5',NULL,'{\"Size\":\"Freesize\",\"Color\":\"\\u0110\\u1ecf, Xanh \\u0111en\",\"Some random attribute\":\"\",\"Material\":\"\",\"Specific number\":\"\"}'),(119,11,0,'Váy liền MT451','Váy liền dài tay đính nút trước ngực','17.25',NULL,'{\"Size\":\"Freesize\",\"Color\":\"H\\u1ed3ng, \\u0110en, Kem\",\"Some random attribute\":\"\",\"Material\":\"\",\"Specific number\":\"\"}'),(120,11,0,'Váy liền MT450','Váy liền dài tay sọc kẻ, thắt nơ eo','23.25',NULL,'{\"Size\":\"Freesize\",\"Color\":\"M\\u1eb7c \\u0111\\u1ecbnh nh\\u01b0 h\\u00ecnh\",\"Some random attribute\":\"\",\"Material\":\"\",\"Specific number\":\"\"}'),(121,11,0,'Váy liền MT449','Váy dạ xòe cổ sen đáng yêu','21.25',NULL,'{\"Size\":\"Freesize\",\"Color\":\"Xah \\u0111en, \\u0110\\u1ecf\",\"Some random attribute\":\"\",\"Material\":\"\",\"Specific number\":\"\"}'),(122,11,0,'Váy liền MT447','Váy chấm bi chiffon  thanh lịch','17.5',NULL,'{\"Size\":\"Freesize\",\"Color\":\"M\\u1eb7c \\u0111\\u1ecbnh nh\\u01b0 h\\u00ecnh\",\"Some random attribute\":\"\",\"Material\":\"\",\"Specific number\":\"\"}'),(123,11,0,'Váy liền MT418','Váy liền xòe cổ cao  xinh đẹp.','16',NULL,'{\"Size\":\"Freesize\",\"Color\":\"M\\u1eb7c \\u0111\\u1ecbnh nh\\u01b0 h\\u00ecnh\",\"Some random attribute\":\"\",\"Material\":\"\",\"Specific number\":\"\"}'),(124,11,0,'Váy liền MT383','Váy liền dài tay công sở  tay ren','18.25',NULL,'{\"Size\":\"Freesize(M)\",\"Color\":\"H\\u1ed3ng, Xanh \\u0111en, \\u0110en\",\"Some random attribute\":\"\",\"Material\":\"\",\"Specific number\":\"\"}'),(125,11,0,'Váy liền MT379 ','Váy ren Hàn Quốc dài tay cổ thuyền','14.75',NULL,'{\"Size\":\"Freesize\",\"Color\":\"M\\u1eb7c \\u0111\\u1ecbnh nh\\u01b0 h\\u00ecnh\",\"Some random attribute\":\"\",\"Material\":\"\",\"Specific number\":\"\"}'),(126,11,0,'Váy liền MT377','Váy liền cotton dài tay 2 màu.','18.5',NULL,'{\"Size\":\"Freesize\",\"Color\":\" \\u0110en, Xanh\",\"Some random attribute\":\"\",\"Material\":\"\",\"Specific number\":\"\"}'),(127,11,0,'Váy liền MT376','Váy liền cổ chữ V dài tay','12.75',NULL,'{\"Size\":\"Freesize\",\"Color\":\"n\\u00e2u, \\u0111en\",\"Some random attribute\":\"\",\"Material\":\"\",\"Specific number\":\"\"}'),(128,11,0,'Váy liền MT372 ','Váy liền dài tay thể thao','13.25',NULL,'{\"Size\":\"Freesize\",\"Color\":\" c\\u00e0 r\\u1ed1t\",\"Some random attribute\":\"\",\"Material\":\"\",\"Specific number\":\"\"}'),(129,11,0,'Váy liền  MT370','Váy liền dài tay cổ sen','17.5',NULL,'{\"Size\":\"Freesize\",\"Color\":\"M\\u1eb7c \\u0111\\u1ecbnh nh\\u01b0 h\\u00ecnh\",\"Some random attribute\":\"\",\"Material\":\"\",\"Specific number\":\"\"}');

/*Table structure for table `shop_shipping_method` */

DROP TABLE IF EXISTS `shop_shipping_method`;

CREATE TABLE `shop_shipping_method` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(255) CHARACTER SET utf8 DEFAULT NULL,
  `description` text CHARACTER SET utf8,
  `tax_id` int(11) NOT NULL,
  `price` double NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

/*Data for the table `shop_shipping_method` */

insert  into `shop_shipping_method`(`id`,`title`,`description`,`tax_id`,`price`) values (1,'Q1, Q3, Q4, Q5, Q8, Q10, Q11, Tân Bình, Phú Nhuận, Gò Vấp, Bình Thạnh, Tân Phú','Miễn phí giao hàng tại các quận nội thành',1,0),(2,'Q9, Hóc Môn, Q2, Thủ Ðức ','Thu thêm phí 2.5$ đối với các quận',1,2.5),(3,'Bình Tân, Q7, Q12.','Thu thêm phí 1.5$ đối với các quận',1,1.5);

/*Table structure for table `shop_tax` */

DROP TABLE IF EXISTS `shop_tax`;

CREATE TABLE `shop_tax` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) CHARACTER SET utf8 NOT NULL,
  `percent` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

/*Data for the table `shop_tax` */

insert  into `shop_tax`(`id`,`title`,`percent`) values (1,'19%',19),(2,'7%',7);

/*Table structure for table `tbl_comment` */

DROP TABLE IF EXISTS `tbl_comment`;

CREATE TABLE `tbl_comment` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `content` text COLLATE utf8_unicode_ci NOT NULL,
  `status` int(11) NOT NULL,
  `create_time` int(11) DEFAULT NULL,
  `author` varchar(128) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(128) COLLATE utf8_unicode_ci NOT NULL,
  `url` varchar(128) COLLATE utf8_unicode_ci DEFAULT NULL,
  `post_id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `FK_comment_post` (`post_id`),
  CONSTRAINT `FK_comment_post` FOREIGN KEY (`post_id`) REFERENCES `tbl_post` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

/*Data for the table `tbl_comment` */

insert  into `tbl_comment`(`id`,`content`,`status`,`create_time`,`author`,`email`,`url`,`post_id`) values (8,'Ấn tượng',2,1385698926,'Nhok Harry','harry@gmail.com','',3),(9,'Quá tuyệt...',2,1385699186,'Nguyen Cuong','cuongseven@gmail.com','',3),(10,'Ấn tượng....',2,1385717600,'Nguyen Cuong','cuongseven@gmail.com','',8);

/*Table structure for table `tbl_lookup` */

DROP TABLE IF EXISTS `tbl_lookup`;

CREATE TABLE `tbl_lookup` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(128) COLLATE utf8_unicode_ci NOT NULL,
  `code` int(11) NOT NULL,
  `type` varchar(128) COLLATE utf8_unicode_ci NOT NULL,
  `position` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

/*Data for the table `tbl_lookup` */

insert  into `tbl_lookup`(`id`,`name`,`code`,`type`,`position`) values (1,'Draft',1,'PostStatus',1),(2,'Published',2,'PostStatus',2),(3,'Archived',3,'PostStatus',3),(4,'Pending Approval',1,'CommentStatus',1),(5,'Approved',2,'CommentStatus',2);

/*Table structure for table `tbl_migration` */

DROP TABLE IF EXISTS `tbl_migration`;

CREATE TABLE `tbl_migration` (
  `version` varchar(255) NOT NULL,
  `apply_time` int(11) DEFAULT NULL,
  PRIMARY KEY (`version`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

/*Data for the table `tbl_migration` */

insert  into `tbl_migration`(`version`,`apply_time`) values ('m000000_000000_base',1351477147),('m110805_153437_installYiiUser',1351477205),('m110810_162301_userTimestampFix',1351477205);

/*Table structure for table `tbl_post` */

DROP TABLE IF EXISTS `tbl_post`;

CREATE TABLE `tbl_post` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(128) COLLATE utf8_unicode_ci NOT NULL,
  `content` text COLLATE utf8_unicode_ci NOT NULL,
  `tags` text COLLATE utf8_unicode_ci,
  `status` int(11) NOT NULL,
  `create_time` int(11) DEFAULT NULL,
  `update_time` int(11) DEFAULT NULL,
  `author_id` int(11) NOT NULL,
  `image` varchar(250) CHARACTER SET utf8 DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `FK_post_author` (`author_id`),
  CONSTRAINT `FK_post_author` FOREIGN KEY (`author_id`) REFERENCES `tbl_user` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

/*Data for the table `tbl_post` */

insert  into `tbl_post`(`id`,`title`,`content`,`tags`,`status`,`create_time`,`update_time`,`author_id`,`image`) values (1,'10 bộ sưu tập tuyệt đẹp ở Milan Fashion Week','Cả phong cách sang trọng, kiêu kỳ lẫn mạnh mẽ, cá tính đều được nhiều nhà mốt ưu ái, đem tới nhiều trải nghiệm thú vị.\r\n\r\nVẫn giữ phong cách thiết kế thời thượng, đẳng cấp dành cho những quý cô đài các, bộ sưu tập xuân 2014 của Dolce & Gabbana sử dụng chất liệu mềm mại với những hình in điện tử mang hơi thở của thời kỳ Phục hưng, khéo léo pha trộn nét yêu kiều, gợi cảm bằng chất liệu ren xuyên thấu và dùng phụ kiện ánh kim nổi bật để nhấn nhá vẻ hiện đại, mạnh mẽ. Ngắm bộ sưu tập tại đây\r\n\r\nSàn diễn của thương hiệu Gucci ngay lập tức cuốn hút khán giả bởi gam đen mạnh mẽ và đường nét thiết kế cá tính xuyên suốt bộ sưu tập. Những hoa văn bắt sáng thời thượng và chất liệu voan đen phủ ngoài tinh tế cũng khiến các mẫu váy áo thêm nổi bật, lạ mắt. Ngắm bộ sưu tập tại đây\r\n\r\nHọa tiết nhiệt đới bắt mắt và những gam pastel tươi sáng cùng phong cách trẻ trung pha chút sexy là \"vũ khí\" giúp Just Cavalli chinh phục giới mộ điệu. Cách kết hợp crop-top với quần skinny cùng các mẫu áo khoác đa dạng được nhà thiết kế khai thác triệt để và đem tới những sáng tạo sinh động, lôi cuốn. Ngắm bộ sưu tập tại đây\r\n\r\nHọa tiết độc đáo đóng vai trò điểm nhấn thu hút nhất trong bộ sưu tập xuân 2014 của Emilio Pucci. Kết hợp với gam đen và chất liệu da mạnh mẽ, những mẫu váy áo hiện đại khiến tất cả những cô nàng yêu thích phong cách cá tính không thể không ngất ngây ngắm nhìn. Ngắm bộ sưu tập tại đây\r\n\r\nƯu ái gam đen trắng nhưng cũng không bỏ qua màu đỏ rực rỡ, thương hiệuFendi táo bạo pha trộn chất liệu mang style đối lập như da và voan xuyên thấu mềm mại, đồng thời lăng-xê xu hướng xếp tầng các lớp vải màu sắc đậm nhạt bắt mắt. Ngắm bộ sưu tập tại đây\r\n\r\nKiêu kỳ, thanh lịch và hiện đại là cảm hứng chính cho bộ sưu tập củaBlumarine. Giới thiệu nhiều kiểu váy áo đa dạng như blazer, quần baggy(đũng thấp, đùi rộng, ống dưới bó) vải cứng cáp, váy bút chì chất liệu da, đầm dài với vạt trong suốt…, Blumarine có thể chiều lòng hàng loạt yêu cầu phong cách khác nhau của phái đẹp. Ngắm bộ sưu tập tại đây\r\n\r\nRoberto Cavalli thể hiện sự sáng tạo linh hoạt khi áp dụng họa tiết da rắn trên nhiều chất liệu khác nhau như da, voan, ren xuyên thấu… với màu sắc chủ đạo là đen, ánh bạc và các gam pastel nhẹ nhàng. Ngắm bộ sưu tập tại đây\r\n\r\nNét cá tính của bộ sưu tập Versace toát lên từ phong cách thiết kế táo bạo, mix chất liệu da, denim khỏe khoắn với vải xuyên thấu, lụa mềm mại, đồng thời nhấn nhá họa tiết chìm tinh xảo. Cả những mẫu đầm dài dáng ôm sang trọng cũng trở nên khêu gợi, lôi cuốn hơn nhờ phụ kiện thời thượng như chuỗi xích body (body chain) bản lớn nổi bật trên các khoảng hở sexy. Ngắm bộ sưu tập tại đây\r\n\r\nQuần lửng ôm sát là kiểu trang phục \"đinh\" trong bộ sưu tập xuân 2014 củaMcQ, được mix layer với áo khoác pha da, áo dài trùm hông hay áo \"lồng chim\" lạ mắt, thể hiện vẻ mạnh mẽ mà kiêu kỳ. Ngắm bộ sưu tập tại đây\r\n\r\nNữ tính và sinh động, váy áo Alberta Ferretti với họa tiết hoa xinh xắn cùng những đường kẻ ngang vui mắt trở thành thỏi nam châm trên sàn diễn. Xu hướng sơ mi dáng lửng kết hợp chân váy xòe cạp cao hứa hẹn sẽ tiếp tục chinh phục các tín đồ thời trang yêu thích phong cách ngọt ngào mà gợi cảm. Ngắm bộ sưu tập .\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n',' xu hướng thời trang ',2,1383920268,1383920268,1,'4090-1.jpg'),(2,'9 xu hướng hot xuân hè 2014 cho nam','Kẻ ngang bản lớn màu sắc, họa tiết hoa, rằn ri, áo dáng dài, chất liệu da… được dự đoán \'gây bão\' đầu năm sau.\r\n\r\nMàu trắng\r\n\r\nĐối với thời trang dành cho phái đẹp, xu hướng cây trắng đã \"làm mưa làm gió\" trong một thời gian khá dài, và sẽ tiếp tục \"tấn công\" các chàng vào mùa xuân hè 2014. Trên sàn runway, gam trắng từ đầu tới chân được áp dụng cho những bộ vest lịch lãm, hoặc nhấn nhá nét bụi bặm, phóng khoáng khi mix cùng áo dáng dài bên trong thay vì sơ mi truyền thống.\r\n\r\n\r\nMàu xám nhạt\r\n\r\nĐậm hơn màu trắng một chút, gam xám nhạt được các thương hiệu Emporio Armani hay Paul Smith sử dụng để thể hiện hình ảnh các quý ông bảnh bao, cuốn hút một cách nhẹ nhàng chứ không biến thành \"bạch mã hoàng tử\" như với màu trắng tinh khôi.\r\n\r\nKẻ ngang bản lớn màu sắc\r\n\r\nTừ trái qua: Thiết kế của Valentino, Miharayasuhiro, Moschino, Wooyoungmi/\r\n\r\nDù đối với thời trang nam hay nữ, những đường kẻ sọc luôn là kiểu họa tiết không bao giờ lỗi mốt và biến hóa liên tục theo từng mùa. Đặc biệt, đầu năm sau, xu hướng này được nhiều nhà thiết kế áp dụng đầy sáng tạo trên các mẫu áo vest hay sơ mi chỉn chu, đôi khi pha trộn họa tiết bắt mắt để bổ sung nét trẻ trung, sinh động cho vẻ ngoài.\r\n\r\nHọa tiết hoa\r\n\r\nTừ trái qua: Thiết kế của Gucci, Burberry Prorsum, Dries van Noten, Prada.\r\n\r\nHọa tiết hoa đã thực sự \"gây bão\" trong năm nay và sẽ tiếp tục trở thành xu hướng nổi bật dành cho phái mạnh. Không chỉ khiến những chiếc áo sơ mi, áo len hay quần dài trở nên thu hút hơn, chúng còn được thương hiệu Gucci \"mạnh tay\" áp dụng trên thiết kế áo vest chất liệu vải bóng ấn tượng.\r\n\r\nMàu hồng\r\n\r\nTừ trái qua: Thiết kế của Paul Smith, Lanvin, Richard James, Tom Ford.\r\n\r\nThời gian trước, màu hồng – vốn được coi là nữ tính – thường chỉ xuất hiện một cách nhẹ nhàng trong thời trang nam trên những chiếc áo thun hay sơ mi với tông nhạt. Tuy nhiên, sàn diễn xuân hè 2014 đã chứng kiến sự lên ngôi đầy ấn tượng của gam tươi trẻ này, tràn ngập trên đủ loại trang phục như quần âu, áo vest, áo khoác… và không còn sự tiết chế về độ mạnh của tông màu như trước.\r\n\r\n\r\nRằn ri\r\n\r\nBên cạnh các xu hướng có phần nữ tính như họa tiết hoa và màu hồng, họa tiết rằn ri mạnh mẽ vẫn khẳng định được chỗ đứng vững chắc trong mùa thời trang tới. Đặc biệt, thương hiệu Ami còn áp dụng kiểu hoa văn bắt nguồn từ quân đội này trên cả phụ kiện như mũ lưỡi trai và túi xách.\r\n\r\n\r\nÁo dáng dài\r\n\r\nTừ trái qua: Thiết kế của Z Zegna, E Tautz, Vivienne Westwood, Spencer Hart.\r\n\r\nDành cho những chàng trai yêu thích phong cách phóng khoáng và không ngại thử nghiệm sự mới mẻ, áo dáng dài là sự lựa chọn hiệu quả để ngay lập tức khiến vẻ ngoài trở nên nổi bật.\r\n\r\n\r\nÁo choàng dài\r\n\r\nTừ trái qua: Thiết kế của Dries van Noten, Ermenegildo Zegna, Fendi, Z Zegna.\r\n\r\nThiết kế dài tới khoảng đầu gối cũng được áp dụng trên các mẫu áo khoác của Dries van Noten hay Fendi. Chất liệu và màu sắc cũng khá đa dạng, từ vải thô khỏe khoắn với màu sáng trẻ trung tới chất vải bóng mỏng nhẹ bắt mắt…\r\n\r\nChất liệu da\r\n\r\nCũng là một trào lưu chiếm được sự quan tâm đặc biệt của phái đẹp trong năm nay, chất liệu da sẽ trở nên phổ biến hơn đối với nam giới trong mùa xuân hè 2014. Các nhà thiết kế áp dụng chủ yếu loại vải mỏng, mềm mại để tạo sự thoải mái trong di chuyển và linh hoạt với thời tiết.\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n','phong cách',2,1383921204,1383921204,1,'4772-2.jpg'),(3,'5 cách mix áo crop len chuẩn miễn chê ','Tiếp tục xu hướng mùa hè, những chiếc áo len crop (áo ngắn để hở phần eo) được dự đoán ‘làm mưa làm gió’ cuối thu, đầu đông.\r\n\r\nPhối với quần cạp cao\r\n\r\n Đây là cách phối đơn giản mà vẫn giữ ấm được trong tiết trời cuối thu, đầu đông se lạnh. Quần denim hoặc quần da với cạp cao vừa độ, đủ để hở một phần eo thon là cách phối hoàn hảo, tạo nên vẻ đẹp năng động, có chút phá cách cho nàng.\r\n\r\nNếu bạn vẫn lo bị lạnh, chỉ việc kết hợp thêm khoác denim hoặc blazer bên ngoài. \r\n\r\n Phối với váy tulle, chiffon\r\n\r\nChiếc áo crop len phối với váy tulle dáng midi hoặc dài thướt tha cũng là lựa chọn khá tạo bạo cho mùa thu, đông. Chân váy bằng vải tulle, chiffon hay các chất liệu mỏng, nhẹ, tung bay trong gió là sự đối lập ấn tượng với áo crop có phần phá cách bên trên. Đây là lựa chọn của khá nhiều “sao”, trong đó có Jessica Alba. \r\n\r\nPhối với chân váy bút chì\r\n\r\nVới chân váy bút chì thanh lịch, bạn vẫn hoàn toàn có thể mix áo len crop nếu biết kết hợp màu sắc và chất liệu. Khi lựa chọn chân váy bút chì, nên chọn áo len crop ôm sát thay vì dáng rộng để tránh sự luộm thuộm. Cách kết hợp này tạo cảm giác đôi chân của bạn dài ra trông thấy. \r\n\r\nPhối với chân váy xòe\r\n\r\n Lựa chọn mix áo len crop với chân váy xòe dành cho những cô nàng nữ tính mà vẫn muốn thể hiện chút nổi loạn. Chân váy xòe nhẹ nhàng, đặc biệt là chân váy midi (độ dài quá gối) kiểu cổ điển đang rất thịnh hành năm nay sẽ mang lại cho nàng vẻ đẹp dịu dàng, quyến rũ. \r\n\r\nCó nhiều cách mix màu sắc cho phong cách này nhưng đẹp nhất vẫn là mix hai màu nhẹ nhàng, màu pastel… Nếu muốn nổi bật hơn, bạn có thể mix áo crop len với chân váy xòe màu neon bắt mắt. \r\n\r\nPhối với áo sơ mi/áo phông\r\n\r\nCách mix kiểu layer (tầng tầng lớp lớp) này dành cho những cô nàng thích mặc len crop nhưng vẫn cực kỳ ấm áp trong mùa đông lạnh. Kết hợp áo len crop ngắn màu trơn bên ngoài với sơ mi hoặc áo phông dài tay kẻ bên trong là lựa chọn hoàn hảo cho một mùa đông ấm và ấn tượng. \r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n','trang phục',2,1383922118,1383922118,1,'7067-3.jpg'),(4,'Sao Việt cá tính muôn màu cùng áo khoác denim ',' Các người đẹp với nhiều cá tính thời trang khác nhau đã mang đến những \'làn gió\' rất tươi mới cho kiểu áo \'cũ\' này.\r\n\r\nGiữa sự xuất hiện của nhiều mẫu áo khoác mới mẻ hiện đại như áo khoác oversize, áo blazer dáng thụng hay áo khoác dáng dài, đầy màu sắc thì chiếc áo khoác denim xưa cũ vẫn chiếm được cảm tình của rất chiều cô gái trẻ trong mùa lạnh năm nay. Xuất hiện đã khá lâu trong làng thời trang nhưng chiếc áo khoác denim với vẻ đẹp cá tính, bụi bặm vẫn chinh phục các tín đồ qua từng mùa thu đông. Chúng giúp những cô nàng hiện đại khẳng định cá tính, sự trẻ trung, năng động trong cuộc sống thường này.\r\n\r\nCác ngôi sao trong làng giải trí – những người đẹp được xem là \'bắt mốt\' nhanh chóng nhất cũng không quên sắm cho mình một chiếc áo khoác denim cho mùa lạnh này. Áo khoác denim lửng dài tay và kiểu áo trần tay là 2 mốt áo đã và đang được săn lùng nhiều nhất. Họ với nhiều cá tính thời trang khác nhau đã mang đến những \'làn gió\' rất tươi mới cho kiểu áo \'cũ\' này.\r\n\r\n','trang phục',2,1383922927,1383922927,1,'3161-4.jpg'),(5,'Đã mắt với street style cực chất của fashionista xứ Hàn ',' Không quá lung linh, đậm chất cá tính và gần với xu hướng chung là những yếu tố khiến giới trẻ vô cùng yêu thích street style tại Tuần lễ thời trang Seoul.\r\n\r\nDiễn ra tại thành phố Soul – thủ đô của Hàn Quốc và được tổ chức bởi Innocean Worldwide, Tuần lễ thời trang Xuân/Hè 2014 là một sự kiện thời trang được đặc biệt quan tâm không chỉ trong phạm vi xứ sở kim chi mà còn được các tín đồ thời trang tại châu Á vô cùng thích thú. Vốn được nhận định là một trong những quốc gia có nền công nghiệp thời trang phát triển hàng đầu tại châu Á, Tuần lễ thời trang Seoul còn là dịp để các nhà thiết kế trẻ thể hiện tài năng của mình cũng như góp phần quảng bá thời trang Hàn Quốc.\r\n\r\nKhông chỉ thu hút bởi sự góp mặt của hàng loạt những tên tuổi đình đám trong giới nghệ sĩ Hàn Quốctrong vai trò khách mời, Tuần lễ thời trang Seoul còn là dịp để chúng ta được chiêm ngưỡng phong cách street style đa dạng của các bạn trẻ nơi đây. Vốn là một quốc gia ảnh hưởng mạnh mẽ đến trào lưu ăn mặc tại các nước cận kề, biết đâu chúng ta sẽ cập nhật được những xu hướng, công thức mix đồ thú vị đang được các bạn trẻ Seoul ưa thích để áp dụng cho đời sống hàng ngày?\r\n\r\nĐiểm nổi bật nhất tại phong cách ăn mặc của giới trẻ Seoul chính là áo khoác denim. Item này tràn ngập trên đường phố Seoul với những kiểu dáng, màu sắc đa dạng và được phối theo nhiều style khác nhau; như áo denim jacket dáng lửng phối ăn ý cùng crop-top kẻ sọc và quần jeans.\r\n\r\nCông thức điển hình nhất là denim đi cùng họa tiết hoa. Cô bạn này mix một chiếc biker jacket chất denim khá lạ mắt với họa tiết hoa mang đậm hơi thở Á Đông.\r\n\r\nMột chiếc denim jacket mài theo xu hướng vintage lại được phối ăn ý cùng váy chiffon họa tiết hoa nhí vô cùng nữ tính. Chính sự đối lập giữa cá tính và nữ tính tạo nên sức hấp dẫn cho trang phục.\r\n\r\nCô bạn này lại khoác hờ denim jacket trên áo T-shirt và quần shorts họa tiết hoa hướng dương rực rỡ.\r\n\r\nTrẻ trung, hiện đại với váy bodycon họa tiết nhiều màu sắc và áo khoác denim tối màu.\r\n\r\n\"Patchwork\" – những mảng màu khác biệt chính là yếu tố tạo nên sự mới mẻ cho denim jacket mùa Thu/Đông này.\r\n\r\nVà hẳn không thể bỏ qua họa tiết. Chính những họa tiết in trên nền vải denim dày dặn tạo nên sự tươi mới cho chất liệu quen thuộc.\r\n\r\nTrang phục yếm như váy yếm…\r\n\r\n… với các chất liệu cá tính như denim, da cũng chiếm được cảm tình từ các tín đồ thời trang nơi đây. Để hợp tiết trời thu, chúng được phối với áo pull hoặc sơmi dài tay.\r\n\r\nSắc xanh dương cũng lên ngôi tại sự kiện thời trang này. Trong đó thì xanh navy và xanh cobalt là hai đại diện tiêu biểu nhất. \r\n\r\nChúng thường được mix với các sắc trung tính như trắng và đen.\r\n\r\nƯa chuộng hơn cả là những chiếc áo khoác màu xanh, được phối theo nhiều style ngẫu hứng như đi kèm với váy dáng dài và giày thể thao…\r\n\r\n… hay áo họa tiết và quần lửng.\r\n\r\nMột điểm chung không thể bỏ qua của các fashionista Hàn là mũ snapback.\r\n\r\nT-shirt/áo pull – áo jacket – mũ snapback là công thức được áp dụng nhiều nhất tại đây.\r\n\r\nNhững chiếc mũ snapback in hình ngộ nghĩnh là điểm nhấn đặc biệt cho trang phục casual.\r\n\r\n Họa tiết, hình in hoạt hình ngộ nghĩnh cũng hứa hẹn tạo nên trào lưu lớn trong mùa Thu/Đông này.\r\n\r\nCùng chiêm ngưỡng thêm một số hình ảnh cá tính tại Tuần lễ thời trang Seoul mùa Xuân/Hè 2014:\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n','tuần lễ thời trang',2,1383923472,1383923472,1,'268-5.jpg'),(6,'Khám phá 4 ‘gia vị’ thời trang của các Fashion Week ',' Nếu ví những tuần lễ thời trang tại New york, London, Milan, và Paris như những cô gái xinh đẹp và sành điệu thì cả 4 cô đều đẹp và điệu theo những cách rất riêng biệt.\r\n\r\nBức tranh toàn cảnh của thời trang Xuân- Hè thế giới 2014 đã hoàn thiện sau khi Paris fashion week chính thức kết thúc. Hãy cùng nhìn lại những sáng tạo nổi bật nhất mà cơn gió thời trang cao cấp đã thổi qua 4 thành phố New York, London, Milan, và Paris.\r\n\r\nCó chung cảm hứng là sự sôi nổi, rực rỡ của mùa Xuân- Hè nên không khó hiểu khi khá nhiều những xu hướng của 4 tuần lễ thời trang trùng lặp ý tưởng, chất liệu hay màu sắc.\r\n\r\n Nhưng Dù có trùng lặp về ý tưởng, xu hướng mốt nhưng cách triển khai của 4 tuần lễ thời trang lại mang 4 sắc thái khác biệt rõ ràng.\r\n\r\nNew York fashion week – Cô gái hiện đại, thực tế\r\n\r\nTuần lễ thời trang New York hay bây giờ còn được gọi Tuần lễ thời trang Mercedes-Benz, dường như đã thương mại hóa hầu hết các chương trình thời trang lớn. Vì vậy các thiết kế  trang phục của tuần lễ này thường rất thiết thực và có tính ứng dụng cao cho đời sống hàng ngày. Phong cách và thiết kế luôn dễ diện, ứng dụng cao là dấu hiện nhận biết dễ dàng các nhà mốt đặc trưng của tuần lễ thời trang New York như: Oscar De La Renta, Micheal Kors, Ralph Lauren, DKNY, Alexander Wang, Victoria Beckham…\r\n\r\nXuân- Hè 2014, các nhà mốt tại New York fashion week vẫn dễ diện dù đa dạng hơn với: một chút táo bạo, một chút duyên dáng, một chút khỏe khoắn, một chút hoang dã.\r\n\r\n London fashion week- Thiếu nữ đương đại\r\n\r\nNhững sáng tạo bất ngờ nhất, độc đáo nhất của mùa thời trang Xuân- Hè 2014 có lẽ được khơi dậy từ thành phố London. Tuần lễ thời trang London ít thương mại hóa hơn New York và không quá chạy theo xu hướng. Các nhà mốt London thường giới thiệu những nét đặc trưng, độc đáo của mình mà vẫn đảm bảo được tính thương mại cho bộ sưu tập của mình. London cũng là nơi để các tài năng mới lên ngôi, là nơi để thử nghiệm và chấp nhận những sáng tạo mới nhất, táo bạo nhất. Cô gái London vì lẽ đó, tươi mới và đương đại hơn bao giờ hết.\r\n\r\n Milan- Tiểu thư quyến rũ, ngọt ngào\r\n\r\nSau Lodon, Tuần lễ thời trang Milan được diễn ra với những nhà mốt mang đậm phong cách vùng Địa Trung Hải: nóng bỏng quyến rũ mà vô cùng ngọt ngào, lãng mạn. Đây là tuần lễ đã đem đến nhiều thiết kế quyến rũ, ngọt ngào hấp dẫn nhất với các thiết kế tinh mỹ, đường cắt may sắc xảo, cầu kì nhờ những chi tiết trang trí thủ công đến từ các nhà mốt nổi danh: Valentino, Gucci, Giorgio Armani, Dolce&Gabbana, Alberta Ferretti…\r\n\r\n Paris – Quý cô xa hoa\r\n\r\nParis được biết đến là thủ đô thời trang của thế giới, và giữ vị trí tập cuối trong tour diễn show thời trang. Trước đây những nhà mốt của Paris thường đậm chất cổ điển tinh tế và thanh lịch nhưng với sự toàn cầu hóa, phong cách và thiết kế của tuần lễ này ngày càng đa dạng hơn về sắc thái, có thêm những sự phá trộn mạnh mẽ mang tính ứng dụng cao của New York hay sự mới lạ nổi loạn của London, quyến rũ ngọt ngào của Milan.\r\n\r\nTuy nhiên Tuần lễ thời trang Paris vẫn giữ nền tảng cổ điển thanh lịch của mình dù có pha trộng nổi loạn thế nào và luôn xa hoa nhất với những cái tên \"kinh điển\" của thế giới thời trang: Christian Dior, Coco Chanel, Louis Vuitton, Elisab và cùng với nhiều nhà thiết kế tài năng tuyệt vời khác…\r\n\r\nNếu ví những tuần lễ thời trang tại New york, London, Milan, và Paris như những cô gái xinh đẹp và sành điệu thì cả 4 cô đều đẹp và điệu theo những cách rất riêng biệt: New York là cô gái hiện đại với trang phục thực tiễn, London là cô gái cá tính, cảm đảm thử những gì mới mẻ nhất, Milan lại là cô nàng quyến rũ, gợi cảm trong những váy áo tinh mỹ, cầu kỳ còn Paris là nàng thơ mơ mộng, xa hoa nhất. Và là người hâm mộ thời trang thì tuần lễ nào cũng đều sẽ khiến bạn yêu thích với mỗi sắc thái riêng độc đáo của nó.\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n','tuần lễ thời trang',2,1383923989,1383923989,1,'3507-6.jpg'),(7,'Điểm mặt những xu hướng nổi bật mùa thu đông năm nay ',' Các tuần lễ thời trang diễn ra đã đem đến thật nhiều xu hướng mới dự đoán gây bão nửa cuối 2013.\r\n\r\nMùa thu luôn được coi là mùa đẹp nhất trong năm với thời tiết dễ chịu, ánh nắng nhẹ nhàng kèm theo chút gió se lạnh trong những ngày chuyển mùa. Chính vì vậy, các bạn trẻ yêu thời trang có thể thỏa sức sáng tạo và khoe gout thời trang đa dạng. Thậm chí khi đi ngoài đường bạn dễ dàng bắt gặp một người mặc trang phục mùa hè đi cạnh một người mặc có phần “kín gió” mà hoàn toàn không coi đó là lập dị.\r\n\r\nCác tuần lễ thời trang diễn ra đã đem đến thật nhiều xu hướng mới dự đoán gây bão nửa cuối 2013. Tuy nhiên chúng ta vẫn dễ dàng nhận thấy một vài xu hướng được chào đón hơn cả trong mùa thu đông này. Một vài trong số đó được kế thừa từ mùa trước nhưng đã biến tấu đi ít nhiều để phù hợp hơn trong những ngày gió về.\r\n\r\nTrang sức cổ\r\n\r\nTừ khóa về thời trang được thấy nhiều nhất trong vài năm trở lại đây chính là cổ điển, và nó sẽ tiếp tục thống trị xu hướng thời trang thu đông 2013. Không chỉ quần áo mà cả phụ kiện trang sức đều mang hơi hướng hoài cổ. Đó có thể là chiếc vòng tay, đôi khuyên tai màu vàng đồng xưa cũ, hay chiếc vòng cổ được kết đá tỉ mỉ, sang trọng. Họa tiết thường thấy là hình ảnh chú cú mèo, chiếc lồng chim, lông vũ nhỏ nhắn, dễ thương. Các họa tiết được thấy nhiều nhất là cú mèo, lồng chim, lông vũ, chìa khóa… nhỏ nhắn và vô cùng dễ thương.\r\n\r\n Vàng mustard kết hợp xanh navy\r\n\r\nNếu phải trả lời sắc màu của mùa thu là gì thì đó hẳn phải là vàng mustard. Đó màu của ánh nắng vàng ươm nhưng không còn quá rực rỡ, chói chang như mùa hè. Đó là màu của lớp lá đang dần thay màu trong những ngày chuyển mùa. Đó cũng là màu của sự lãng mạn, bâng khuân đến xao lòng của trời thu.\r\n\r\nHơn hết, màu vàng mustard còn dễ dàng lột tả cái chất “vintage”, phong cách thời trang mặc đẹp hơn bao giờ hết vào mùa thu. Và nó sẽ càng tuyệt vời hơn nữa khi kết hợp cùng với xanh navy, một bộ đôi vintage hoàn hảo.\r\n\r\n Motorcycle jacket\r\n\r\nMotorcycle jacket luôn được nằm trong danh sách những chiếc áo khoác cần có, đặc biệt là đối với phái mạnh. Một chiếc motorcycle jacket cơ bản với màu đen, chất liệu da được coi là chuẩn mực và không bao giờ lỗi mode. Nó gợi vẻ đẹp lãng tử nhưng mạnh mẽ của một chàng trai trên chiếc phân khối lớn. Tuy vậy, các bạn nữ cũng yên tâm vì không bởi thế mà sự nữ tính trong bạn biến mất. Ngược lại, nó còn giúp bạn tăng thêm vẻ cá tính, mạnh mẽ và vô cùng quyến rũ.\r\n\r\nChiếc motocycle jacket cơ bản tuyệt nhất khi kết hợp cùng áo phông đơn giản hoặc ba lỗ ôm sát, quần skinny jeans và boots gót nhọn, màu sắc đương nhiên vẫn là đen trắng. Tuy nhiên, hiện nay có rất nhiều thiết kế mới để đảm bảo phù hợp với đa dạng đối tượng thời trang, do đó cách mix đồ cũng có phần phóng khoáng hơn rất nhiều. Và đương nhiên cũng chẳng vấn đề gì nếu bạn muốn kết hợp nó với chân váy xòe hay maxy.\r\n\r\n Kẻ ô vuông\r\n\r\nHọa tiết kẻ được đánh giá là xu hướng dẫn đầu xuân hè 2013 và nó sẽ tiếp tục khuấy động làng thời trang trong mùa thu đông này. Tuy nhiên, nếu nửa đầu năm các tín đồ bị mê mẩn bởi đường kẻ sọc to bản thời thượng thì đến mùa thời trang này sẽ là sự lên ngôi của các loại kẻ caro như tartan, gingham hay kẻ ô vuông đơn giản.\r\n\r\nSafari shirtdress (váy sơ mi phong cách du mục)\r\n\r\nNói đến mùa thu lãng mạn, bên cạnh vintage thì không gì bằng là phong cách thời trang du mục. Item điển hình là những chiếc váy chất liệu mỏng nhẹ, có hoặc không họa tiết thổ dân. Cụ thể trong mùa thu đông năm nay sẽ là safari shirtdress (váy sơ mi phong cách du mục).\r\n\r\nLời khuyên tốt nhất để kết hợp với safari shirtdress nói riêng và phong cách thời trang du mục nói chung đó là một đôi boots cao cổ màu nâu đế bệt theo lối truyền thống. Ngoài ra bạn cũng có thể sử dụng thắt lưng, tốt nhất là thắt lưng tết để làm điểm nhấn. Và cuối cùng hãy hoàn thiện tất cả với một vòng hoa nhỏ bé trên đầu hay chiếc mũ gaucho đang rất thịnh hành.\r\n\r\n\r\n\r\n\r\n\r\n\r\n','tuần lễ thời trang',2,1383924926,1384358737,1,'5414-7.jpg'),(8,'Johnny Trí Nguyễn bảnh bao làm người mẫu ','Thời trang công sở dành cho nam giới tưởng chừng như nhàm chán với phom dáng quen thuộc và gam màu đơn điệu. Nhưng với nhiều người chính nét thân quen với các món đồ thời trang lại là điểm mấu chốt để giúp họ tạo dựng nên phong cách.\r\n\r\nHơn nữa theo quan niệm của nhiều người “đơn giản nhất vẫn là đẹp nhất”, bởi trong nhiều tình huống chính nét giản dị ở phom dáng và màu sắc trang phục lại giúp bạn có được dáng vẻ ưa nhìn và thu hút hơn.\r\n\r\nĐặc biệt đối với thời trang công sở dành cho phái mạnh, lược giảm các yếu tố rườm rà về bố cục, lòe loẹt về màu sắc họa tiết sẽ giúp các chàng tránh được lỗi “hóa thân tắc kè hoa” tại văn phòng làm việc. Thay vào đó là nét thanh lịch và giản đơn từ sơ mi, quần âu trên tông màu trắng và đen.','thời trang',2,1385696097,1385696097,1,'7903-9.jpg');

/*Table structure for table `tbl_profiles` */

DROP TABLE IF EXISTS `tbl_profiles`;

CREATE TABLE `tbl_profiles` (
  `user_id` int(11) NOT NULL AUTO_INCREMENT,
  `first_name` varchar(255) DEFAULT NULL,
  `last_name` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`user_id`),
  CONSTRAINT `user_profile_id` FOREIGN KEY (`user_id`) REFERENCES `tbl_users` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

/*Data for the table `tbl_profiles` */

insert  into `tbl_profiles`(`user_id`,`first_name`,`last_name`) values (1,'Administrator','Admin'),(4,'Nguyễn','Thị Tuyết Mai');

/*Table structure for table `tbl_profiles_fields` */

DROP TABLE IF EXISTS `tbl_profiles_fields`;

CREATE TABLE `tbl_profiles_fields` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `varname` varchar(50) NOT NULL DEFAULT '',
  `title` varchar(255) NOT NULL DEFAULT '',
  `field_type` varchar(50) NOT NULL DEFAULT '',
  `field_size` int(3) NOT NULL DEFAULT '0',
  `field_size_min` int(3) NOT NULL DEFAULT '0',
  `required` int(1) NOT NULL DEFAULT '0',
  `match` varchar(255) NOT NULL DEFAULT '',
  `range` varchar(255) NOT NULL DEFAULT '',
  `error_message` varchar(255) NOT NULL DEFAULT '',
  `other_validator` text,
  `default` varchar(255) NOT NULL DEFAULT '',
  `widget` varchar(255) NOT NULL DEFAULT '',
  `widgetparams` text,
  `position` int(3) NOT NULL DEFAULT '0',
  `visible` int(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

/*Data for the table `tbl_profiles_fields` */

insert  into `tbl_profiles_fields`(`id`,`varname`,`title`,`field_type`,`field_size`,`field_size_min`,`required`,`match`,`range`,`error_message`,`other_validator`,`default`,`widget`,`widgetparams`,`position`,`visible`) values (1,'first_name','Họ','VARCHAR',255,3,2,'','','Incorrect First Name (length between 3 and 50 characters).','','','','',1,3),(2,'last_name','Tên','VARCHAR',255,3,2,'','','Incorrect Last Name (length between 3 and 50 characters).','','','','',2,3);

/*Table structure for table `tbl_review` */

DROP TABLE IF EXISTS `tbl_review`;

CREATE TABLE `tbl_review` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(150) CHARACTER SET utf8 NOT NULL,
  `review` text CHARACTER SET utf8 NOT NULL,
  `email` varchar(255) CHARACTER SET utf8 NOT NULL,
  `image` varchar(255) CHARACTER SET utf8 DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  `create_time` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

/*Data for the table `tbl_review` */

insert  into `tbl_review`(`id`,`name`,`review`,`email`,`image`,`modified`,`create_time`) values (1,'kylanuoc','Tôi muốn được tư vấn vài bộ quần áo nam co mùa xuân hè 2014','langtupieudieu@gmail.com','9072-image12.jpg','2013-11-30 19:53:59','2013-11-30 19:53:59');

/*Table structure for table `tbl_tag` */

DROP TABLE IF EXISTS `tbl_tag`;

CREATE TABLE `tbl_tag` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(128) COLLATE utf8_unicode_ci NOT NULL,
  `frequency` int(11) DEFAULT '1',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

/*Data for the table `tbl_tag` */

insert  into `tbl_tag`(`id`,`name`,`frequency`) values (1,'xu hướng thời trang',1),(2,'phong cách',4),(3,'trang phục',3),(4,'tuần lễ thời trang',5),(5,'Văn hóa giải trí',7),(6,'thời trang',3);

/*Table structure for table `tbl_user` */

DROP TABLE IF EXISTS `tbl_user`;

CREATE TABLE `tbl_user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(128) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(128) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(128) COLLATE utf8_unicode_ci NOT NULL,
  `profile` text COLLATE utf8_unicode_ci,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

/*Data for the table `tbl_user` */

insert  into `tbl_user`(`id`,`username`,`password`,`email`,`profile`) values (1,'demo','$2a$10$JTJf6/XqC94rrOtzuF397OHa4mbmZrVTBOQCmYD9U.obZRUut4BoC','webmaster@example.com',NULL);

/*Table structure for table `tbl_users` */

DROP TABLE IF EXISTS `tbl_users`;

CREATE TABLE `tbl_users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(20) NOT NULL DEFAULT '',
  `password` varchar(128) NOT NULL DEFAULT '',
  `email` varchar(128) NOT NULL DEFAULT '',
  `activkey` varchar(128) NOT NULL DEFAULT '',
  `superuser` int(1) NOT NULL DEFAULT '0',
  `status` int(1) NOT NULL DEFAULT '0',
  `create_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `lastvisit_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`),
  UNIQUE KEY `user_username` (`username`),
  UNIQUE KEY `user_email` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

/*Data for the table `tbl_users` */

insert  into `tbl_users`(`id`,`username`,`password`,`email`,`activkey`,`superuser`,`status`,`create_at`,`lastvisit_at`) values (1,'Admin','21232f297a57a5a743894a0e4a801fc3','webmaster@example.com','143c8dbb0d7330e644baf22b7bce1e0c',1,1,'2012-10-29 09:20:05','2013-12-06 15:25:38'),(4,'Dunglamemdau','7085e6b4fb5bf71436221f6ccd1af40c','mai@gmail.com','66e84eae435cfa27c6f535b7b96ed398',0,1,'2013-11-21 18:20:09','2013-12-17 15:27:07');

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;

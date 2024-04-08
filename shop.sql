-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Apr 10, 2021 at 08:00 PM
-- Server version: 5.7.31
-- PHP Version: 7.3.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `shop`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

DROP TABLE IF EXISTS `admin`;
CREATE TABLE IF NOT EXISTS `admin` (
  `admin_id` int(10) NOT NULL AUTO_INCREMENT,
  `username` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL,
  PRIMARY KEY (`admin_id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`admin_id`, `username`, `password`) VALUES
(1, 'admin', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `contact_data`
--

DROP TABLE IF EXISTS `contact_data`;
CREATE TABLE IF NOT EXISTS `contact_data` (
  `msg_id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  `subject` varchar(100) NOT NULL,
  `msg` varchar(2000) NOT NULL,
  PRIMARY KEY (`msg_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `faq_store`
--

DROP TABLE IF EXISTS `faq_store`;
CREATE TABLE IF NOT EXISTS `faq_store` (
  `No` int(11) NOT NULL AUTO_INCREMENT,
  `Title` text NOT NULL,
  `Description` text NOT NULL,
  PRIMARY KEY (`No`)
) ENGINE=MyISAM AUTO_INCREMENT=13 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `faq_store`
--

INSERT INTO `faq_store` (`No`, `Title`, `Description`) VALUES
(1, 'WHEN WILL YOU RECEIVE MY RETURN PACKAGE?', 'After you drop off your return package at the local drop off point, it can take 2 to 5 business days for the package to get to our warehouse. Unfortunately, we cannot control how long it will take for your returned products to be delivered back to us.'),
(2, 'WHAT IF I CAN\'T FIND THE PRODUCT(S) I\'M LOOKING FOR?', 'Our online shop offers the latest and greatest gear, however, we do not carry every product that the company makes. If you can\'t find a product, or we are out of a size, you have a few options:\r\n1. Feel free to call our online shop customer service team. If we are not getting more, we\'ll do our absolute best to find a similar product for you. \r\n2. You can also use our store finder on our website to find an adidas store or supplier in your local area. You can then contact them directly to see if they have the product you are looking for.'),
(3, 'CAN I EXCHANGE MY PRODUCT(S)?', 'We are unable to exchange the products you ordered online and had delivered to your preferred delivery address. However, you can return unwanted products for a refund, and then place a new order. If you choose to pick it up at a store, you may return the product upon collection and purchase something else that we have in stock in store. You may also place a new Click and Collect reservation for your desired products.'),
(4, 'PUBLIC HOLIDAYS AND DISTRIBUTION CENTRE CLOSURES?', 'Please note our distribution center(s) are closed on public holidays in Malaysia. For orders placed on, or the day before one of these dates, processing time will be extended by 1 to 2 working days.\r\nSpecial Notice: Slower delivery may be expected during these periods due to the closure of the distribution center and high demand.'),
(5, 'WHAT DO I DO IF MY QUESTION ISN\'T COVERED HERE?', 'If you cannot find the answer to your question here, we recommend you to contact our live support team here and let the advisor know the details of your order and about your open question. Our advisors are happy to assist you.'),
(6, 'WHAT ARE THE SHIPPING OPTIONS?', 'During checkout, Members and guests can choose their preferred shipping option—we’ll provide an estimated delivery date for every item in your bag based on your shipping selection, the delivery address, and where the item(s) ship from. We offer the following shipping options: Standard, Expedited, Express and Store Pickup.'),
(7, 'HOW DO I GET FREE SHIPPING?', 'Members get free standard shipping on every order. Every time. If you\'re not already a Member, join today for free. Sign in to your Member profile and we\'ll automatically apply free standard shipping at checkout on every order (no promo code required).'),
(8, 'HOW DO I TRACK MY ORDER STATUS?', 'You can use the Check Your Order Status button below to track your order. If you’re not already signed in to your Member profile, or if you purchased as a guest, you’ll need to enter your order number (from your order confirmation email) along with the email address you used to place the order.'),
(9, 'CAN I CANCEL OR CHANGE MY ORDER?', 'Yes, if you act fast you can cancel or change an order within 60 minutes of placing it. To cancel an order, first go to your orders page. If you’re not signed in, you’ll need to enter your order number from your order confirmation email, along with your email address. Select the order, then tap the “Cancel” button and follow the prompts.'),
(10, 'WHERE IS MY REFUND?', 'Once we receive your items, we’ll process your return and issue a refund to your original form of payment, usually within two business days. We’ll send you an email to let you know we’ve issued the refund—it may take up to 10 additional days for the funds to show in your account. And if you paid with a gift card or product voucher, you can usually access your refund within 24 hours after we issue it (you can check your balance online).'),
(11, 'DO SHOES HAVE A WARRANTY?', 'We stand behind all of our shoes and gear. If your shoes or apparel develop a material or workmanship flaw within two years of the manufacture date, we want to get you back in the game. If you believe your item is flawed, and it’s within 60 days of your purchase, you can simply return it to us for a full refund. Please see our return instructions (and if you want to try to exchange the item, you’ll need to give us a call). For store purchases, you’ll want to take your item back to the store you bought it from.'),
(12, 'HOW DO I CLEAN MY SHOES?', 'To ensure peak performance of your shoes over time, we recommend proper care and maintenance, including cleaning. You can keep your sneakers fresh with a few easy cleaning steps:\r\n\r\nDry brush. Remove dirt from the outsole, midsole, and uppers using a dry, soft-bristled shoe brush. No shoe brush? No problem—an older toothbrush will work just fine.\r\nMake a mild cleaning solution. Mix warm water with a small amount of mild laundry detergent.\r\nWash laces. Remove the laces and apply a small amount of the mild cleaning solution. Massage the laces, rinse, then dry with a soft cloth.\r\nWash soles. Apply the mild solution to a soft-bristled brush and brush the outsole and midsole. Dry with a soft cloth.\r\nWash and blot. Use the mild solution and a soft-bristled brush or a soft cloth to clean the uppers. Then use a dry microfiber towel or soft cloth to blot and lift as much soapy moisture and dirt as possible. Repeat if necessary.\r\nAir dry. Air dry at room temperature.\r\nWe don’t recommend putting your shoes in a washing machine or dryer or using harsh cleaning products (like bleach). And for best results, clean your sneakers as soon as they get dirty. Then lace up and get back out there.');

-- --------------------------------------------------------

--
-- Table structure for table `faq_top_store`
--

DROP TABLE IF EXISTS `faq_top_store`;
CREATE TABLE IF NOT EXISTS `faq_top_store` (
  `No` int(11) NOT NULL AUTO_INCREMENT,
  `Title` text NOT NULL,
  `Description` text NOT NULL,
  PRIMARY KEY (`No`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `faq_top_store`
--

INSERT INTO `faq_top_store` (`No`, `Title`, `Description`) VALUES
(1, 'HOW DO I TRACK MY ORDER STATUS?', 'You can use the Check Your Order Status button below to track your order. If you\'re not already signed in to your Member profile, or if you purchased as a guest, you\'ll need to enter your order number (from your order confirmation email) along with the email address you used to place the order.'),
(3, 'WHEN WILL YOU RECEIVE MY RETURN PACKAGE?', 'After you drop off your return package at the local drop off point, it can take 2 to 5 business days for the package to get to our warehouse. Unfortunately, we cannot control how long it will take for your returned products to be delivered back to us.'),
(4, 'HOW DO I GET FREE SHIPPING?', 'Members get free standard shipping on every order. Every time. If you\'re not already a Member, join today for free. Sign in to your Member profile and we\'ll automatically apply free standard shipping at checkout on every order (no promo code required).');

-- --------------------------------------------------------

--
-- Table structure for table `items`
--

DROP TABLE IF EXISTS `items`;
CREATE TABLE IF NOT EXISTS `items` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  `price` double NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=13 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `items`
--

INSERT INTO `items` (`id`, `name`, `price`) VALUES
(1, 'Anum Slingback Heel Sandals', 229),
(2, 'Edgy Open Toe Heels', 119),
(3, 'Basic Mazy Mid Slip On Sandals', 65.55),
(4, 'Superga 2750 - White', 219.9),
(5, 'Slip-On Comfort Sandal', 29),
(6, 'Right Angle Sandal', 59),
(7, 'Fipper Trekker Non-Rubber', 53),
(8, 'Fashion Breathable Mesh N-shoes', 60),
(9, 'Non Slip Soft Soled Baby\'s Sandals', 23.8),
(10, 'Bear Slippers', 18.5),
(11, 'baby sandals cartoon Sesame Street', 22),
(12, 'Dinosaur Children\'s Light Sandals', 12.5);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `contact` varchar(255) NOT NULL,
  `city` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `contact`, `city`, `address`) VALUES
(8, 'abcd', 'abcd@gmail.com', '0369d98a00ba1ca13f51239278d7c2ce', '12345', 'abcd', 'abcd'),
(9, 'david', 'david@gmail.com', '14e1b600b1fd579f47433b88e8d85291', '123456', '123456', '123456'),
(10, 'abcdef', 'abcdef@gmail.com', '0962e1aed115aeec2ecc398ba3df40b9', '1234567', '1234567', '1234567');

-- --------------------------------------------------------

--
-- Table structure for table `users_items`
--

DROP TABLE IF EXISTS `users_items`;
CREATE TABLE IF NOT EXISTS `users_items` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `item_id` int(11) NOT NULL,
  `status` enum('Added to cart','Confirmed') NOT NULL,
  PRIMARY KEY (`id`),
  KEY `user_id` (`user_id`,`item_id`),
  KEY `item_id` (`item_id`)
) ENGINE=InnoDB AUTO_INCREMENT=32 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users_items`
--

INSERT INTO `users_items` (`id`, `user_id`, `item_id`, `status`) VALUES
(7, 3, 3, 'Added to cart'),
(8, 3, 4, 'Added to cart'),
(9, 3, 5, 'Added to cart'),
(10, 3, 11, 'Added to cart'),
(11, 1, 9, 'Added to cart'),
(12, 1, 2, 'Added to cart'),
(13, 1, 8, 'Added to cart'),
(14, 4, 2, 'Confirmed'),
(18, 5, 11, 'Added to cart'),
(20, 5, 5, 'Added to cart'),
(23, 6, 3, 'Added to cart'),
(24, 6, 1, 'Added to cart'),
(25, 6, 2, 'Added to cart'),
(26, 6, 4, 'Added to cart'),
(28, 10, 7, 'Confirmed'),
(29, 10, 1, 'Confirmed'),
(30, 10, 2, 'Confirmed'),
(31, 10, 6, 'Confirmed');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

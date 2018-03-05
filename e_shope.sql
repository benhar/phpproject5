-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Mar 03, 2018 at 02:17 PM
-- Server version: 10.1.9-MariaDB
-- PHP Version: 5.6.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `e_shope`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `u_id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(55) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`u_id`, `username`, `password`) VALUES
(1, 'arrazu', '123456'),
(11, 'rashed', '123456'),
(14, 'hypertag', '12345'),
(15, 'Zobayer', '123456'),
(16, 'admin', 'admin'),
(18, 'Rohim', '123456ss');

-- --------------------------------------------------------

--
-- Table structure for table `blog`
--

CREATE TABLE `blog` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `desc` text NOT NULL,
  `image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `blog`
--

INSERT INTO `blog` (`id`, `title`, `desc`, `image`) VALUES
(20, 'Are you a proud geek looking for a T-Shirt blog', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Soluta voluptates perferendis consequatur quos amet laborum natus deleniti quidem ipsam obcaecati quibusdam ipsa itaque, quam dolorem asperiores accusantium distinctio velit blanditiis enim modi mollitia ad eaque recusandae. Est eius animi aliquid facere laboriosam, impedit, dignissimos corrupti suscipit necessitatibus ex mollitia, quisquam?', 'product/blog.png');

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `id` int(11) NOT NULL,
  `category` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`id`, `category`) VALUES
(1, 'T-Shirte'),
(2, 'Cool T-Shirt'),
(4, 'Men'),
(5, 'Women'),
(7, 'Special T-Shirts');

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `id` int(11) NOT NULL,
  `category` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `price` int(11) NOT NULL,
  `desc` text NOT NULL,
  `avail` tinyint(1) NOT NULL,
  `image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`id`, `category`, `title`, `price`, `desc`, `avail`, `image`) VALUES
(25, 1, 'Hiking Men', 245, 'Hiking is the preferred term, in Canada and the United States, for a long, vigorous walk, usually on trails (footpaths), in the countryside, while the word walking is used for shorter, particularly urban walks. On the other hand, in the United Kingdom, and the Republic of Ireland, the word "walking" is acceptable to describe all forms of walking, whether it is a walk in the park or backpacking in the Alps. The word hiking is also often used in the UK, along with rambling (a slightly old-fashioned term), hillwalking, and fell walking (a term mostly used for hillwalking in northern England). The term "bushwalking" is endemic to Australia, having been adopted by the Sydney Bush Walkers club in 1927. In New Zealand a long, vigorous walk or hike is called tramping. It is a popular activity with numerous hiking organizations worldwide, and studies suggest that all forms of walking have health benefits', 1, 'product/a1.jpg'),
(26, 1, 'FORECAST HIKING', 214, 'Only available for a LIMITED TIME, so get yours TODAY! Printed right here in the U.S.A. \r\n*Satisfaction Guaranteed + Safe and Secure \r\nCheckout via PayPal/Visa/Mastercard*\r\nClick the Green Button below and select your size and style from the drop-down menu and reserve yours before we sell out!', 1, 'product/a3.jpg'),
(28, 1, 'Adventure Awaits', 145, 'NOT SOLD IN STORES!\r\n\r\n*HOW TO ORDER?\r\n1. Select style and color\r\n2. Click "Buy it Now"\r\n3. Select size and quantity\r\n4. Enter shipping and billing information\r\n5. Done! Simple as that!\r\n\r\nTIP: SHARE it with your friends, order together and save on shipping.', 1, 'product/a2.jpg'),
(29, 1, 'FOTOMEN2', 152, 'Only available for a LIMITED TIME, so get yours TODAY! Printed right here in the U.S.A. \r\n\r\n*Satisfaction Guaranteed + Safe and Secure \r\nCheckout via PayPal/Visa/Mastercard*\r\n\r\nClick the Green Button below and select your size and style from the drop-down menu and reserve yours before we sell out!', 1, 'product/a5.jpg'),
(30, 1, 'Ranch Vs. Cool Ranch', 142, 'Only available for a LIMITED TIME, so get yours TODAY! Printed right here in the U.S.A. \r\n\r\n*Satisfaction Guaranteed + Safe and Secure \r\nCheckout via PayPal/Visa/Mastercard*\r\n\r\nClick the Green Button below and select your size and style from the drop-down menu and reserve yours before we sell out!', 1, 'product/a4.jpg'),
(31, 2, 'PhysicalLiteracy: Live Every Adventure', 214, 'PhysicalLiteracy: Live Every Adventure\r\n\r\nfrom The #PhysEd Shop\r\nLife is a series of incredible opportunities. Physical literacy is the key that will allow you to live every adventure. Develop your competence, grow your confidence, buy the ticket and take the ride!', 1, 'product/b1.jpg'),
(32, 2, 'SUPER COOL MUM', 320, 'Available in many different colors and styles, choose your favorite one from the products menu.\r\nNOT SOLD IN STORES, AVAILABLE HERE FOR A LIMITED TIME ONLY. . .\r\n\r\nGET YOURS NOW!!!\r\n\r\n*HOW TO ORDER?\r\n1. Select style and color\r\n2. Click "Buy it Now"\r\n3. Select size and quantity\r\n4. Enter shipping and billing information\r\n5. Done! Simple as that!', 1, 'product/b4.jpg'),
(33, 2, 'Super Cool YAYA is Killing It', 125, 'Super Cool YAYA is Killing It!\r\nHiking is the preferred term, in Canada and the United States, for a long, vigorous walk, usually on trails (footpaths), in the countryside, while the word walking is used for shorter, particularly urban walks. On the other hand, in the United Kingdom, and the Republic of Ireland, the word "walking" is acceptable to describe all forms of walking, whether it is a walk in the park or backpacking in the Alps. The word hiking is also often used in the UK, along with rambling (a slightly old-fashioned term), hillwalking, and fell walking (a term mostly used for hillwalking in northern England).', 1, 'product/bb3.jpg'),
(34, 2, 'Super Cool Aunt', 445, 'Super Cool Aunt\r\nOrders are printed and shipped when the time expires or earlier.\r\nYou can expect your package to arrive 10 - 13 business days after the product prints.\r\nExpedited or Rush shipping may be available depending upon the product(s) selected and the destination country.\r\nShipping costs start at:\r\n$3.99 for the first apparel item and $2.00 for each additional apparel item.\r\nProducts are fulfilled in the US', 1, 'product/bb4.jpg'),
(35, 4, 'OLD MAN WITH A MOUNTAIN BIKE', 145, 'Orders are printed and shipped when the time expires or earlier.\r\nYou can expect your package to arrive 7 - 12 business days after the product prints.\r\nExpedited or Rush shipping may be available depending upon the product(s) selected and the destination country.\r\nShipping costs start at:\r\n$4.49 for the first apparel item and $1.50 for each additional apparel item.\r\n$5.85 for the first mug and $5.25 for each additional mug.\r\nProducts are fulfilled in the EU/UK', 1, 'product/c1.jpg'),
(36, 4, '[LIMITED EDITION] FISHING MAN', 244, 'Order 2 or more and SAVE on shipping! \r\nWe ship to 178 countries\r\nGuaranteed safe and secure checkout via: \r\nPaypal | VISA | MASTERCARD\r\n\r\nHOW TO ORDER: \r\n1. Select the style and color you want\r\n2. Click "BUY NOW" or "RESERVE NOW"    \r\n3. Select size and quantity  \r\n4. Enter shipping and billing information  \r\n5. Done! Simple as that! ', 1, 'product/c4.jpg'),
(37, 4, 'Never push a man to violence', 258, 'Order 2 or more and SAVE on shipping! \r\nWe ship to 178 countries\r\nGuaranteed safe and secure checkout via: \r\nPaypal | VISA | MASTERCARD\r\n\r\nHOW TO ORDER: \r\n1. Select the style and color you want\r\n2. Click "BUY NOW" or "RESERVE NOW"    \r\n3. Select size and quantity  \r\n4. Enter shipping and billing information  \r\n5. Done! Simple as that! ', 1, 'product/c6.jpg'),
(38, 4, 'Old Man With A Bow', 350, 'Guaranteed safe and secure checkout via: \r\nPaypal | VISA | MASTERCARD\r\n\r\nHOW TO ORDER: \r\n1. Select the style and color you want\r\n2. Click "BUY NOW" or "RESERVE NOW"    \r\n3. Select size and quantity  \r\n4. Enter shipping and billing information  \r\n5. Done! Simple as that! ', 1, 'product/c7.jpg'),
(39, 1, 'T shirt Adventure Lethal', 540, 'Order 2 or more and SAVE on shipping! \r\nWe ship to 178 countries\r\nGuaranteed safe and secure checkout via: \r\nPaypal | VISA | MASTERCARD\r\n\r\nHOW TO ORDER: \r\n1. Select the style and color you want\r\n2. Click "BUY NOW" or "RESERVE NOW"    \r\n3. Select size and quantity  \r\n4. Enter shipping and billing information  \r\n5. Done! Simple as that! ', 1, 'product/a8.jpg'),
(42, 5, 'Single Women T Shirt', 254, 'The shirts will be printed with no minimum order! Not sold in stores. \r\nGuaranteed safe and secure checkout via PayPal/VISA/MASTERCARD. \r\n\r\n100% Printed in the USA.\r\n100% Satisfaction guaranteed!\r\n\r\nThe shirts will be printed with no minimum order! Not sold in stores. \r\nGuaranteed safe and secure checkout via PayPal/VISA/MASTERCARD. \r\n\r\n100% Printed in the USA.\r\n100% Satisfaction guaranteed!', 1, 'product/w2.jpg'),
(43, 5, 'REAL WOMEN RIDE THEIR OWN', 652, '100% Printed in the U.S.A - Ship Worldwide\r\n*HOW TO ORDER?\r\n1. Select style and color\r\n2. Click "Buy it Now"\r\n3. Select size and quantity\r\n4. Enter shipping and billing information\r\n5. Done! Simple as that!', 1, 'product/w4.jpg'),
(44, 5, 'Woman With Scouting Skills', 430, 'Buy with a friend. Order 2 or more and SAVE on shipping.\r\nSecure Checkout: PAYPAL | VISA | MASTERCARD\r\n#MothersDay2017\r\n100% Printed in the U.S.A - Ship Worldwide\r\n*HOW TO ORDER?\r\n1. Select style and color\r\n2. Click "Buy it Now"\r\n3. Select size and quantity\r\n4. Enter shipping and billing information\r\n5. Done! Simple as that!', 1, 'product/w5.jpg'),
(45, 5, 'Well Behaved Women', 256, 'Buy with a friend. Order 2 or more and SAVE on shipping.\r\nSecure Checkout: PAYPAL | VISA | MASTERCARD\r\n#MothersDay2017100% Printed in the U.S.A - Ship Worldwide\r\n*HOW TO ORDER?\r\n1. Select style and color\r\n2. Click "Buy it Now"\r\n3. Select size and quantity\r\n4. Enter shipping and billing information\r\n5. Done! Simple as that!', 1, 'product/w3.jpg'),
(47, 7, 'Lucky to be a SPECIAL EDUCATION TEACHER', 255, 'Lucky to be a SPECIAL EDUCATION TEACHER\r\nGuaranteed safe and secure checkout via PayPal/VISA/MASTERCARD.\r\nClick the BIG GREEN BUTTON to pick your size/color and order.#BoostedPillowGuaranteed safe and secure checkout via PayPal/VISA/MASTERCARD.\r\nClick the BIG GREEN BUTTON to pick your size/color and order.#BoostedPillow', 1, 'product/sp1.jpg'),
(49, 7, 'Bulldog Tricks Special Edition', 365, 'Orders are printed and shipped when the time expires or earlier.\r\nYou can expect your package to arrive 10 - 13 business days after the product prints.\r\nExpedited or Rush shipping may be available depending upon the product(s) selected and the destination country.\r\nShipping costs start at:\r\n$3.99 for the first apparel item and $2.00 for each additional apparel item.\r\n$3.99 for the first mug and $2.99 for each additional mug.\r\nProducts are fulfilled in the US', 1, 'product/sp2.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `registration`
--

CREATE TABLE `registration` (
  `id` int(11) NOT NULL,
  `fullname` varchar(55) NOT NULL,
  `email` varchar(55) NOT NULL,
  `address` text NOT NULL,
  `contact` varchar(255) NOT NULL,
  `password` varchar(55) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `registration`
--

INSERT INTO `registration` (`id`, `fullname`, `email`, `address`, `contact`, `password`) VALUES
(15, 'Joy', 'joy@gmail.com', 'Rangpur,bangladash', '01847753466', 'e10adc3949ba59abbe56e057f20f883e'),
(16, 'Roky', 'aee@gmail.com', 'rangpur', '125465544', '8d70d8ab2768f232ebe874175065ead3');

-- --------------------------------------------------------

--
-- Table structure for table `slider`
--

CREATE TABLE `slider` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `slider`
--

INSERT INTO `slider` (`id`, `title`, `image`) VALUES
(2, 'slider-1', 'product/slider/slide-1.jpg'),
(3, 'slider-2', 'product/slider/slide-2.jpg'),
(4, 'slider-3', 'product/slider/slide-3.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`u_id`),
  ADD UNIQUE KEY `user_name` (`username`);

--
-- Indexes for table `blog`
--
ALTER TABLE `blog`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `registration`
--
ALTER TABLE `registration`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `slider`
--
ALTER TABLE `slider`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `u_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
--
-- AUTO_INCREMENT for table `blog`
--
ALTER TABLE `blog`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;
--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=50;
--
-- AUTO_INCREMENT for table `registration`
--
ALTER TABLE `registration`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
--
-- AUTO_INCREMENT for table `slider`
--
ALTER TABLE `slider`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

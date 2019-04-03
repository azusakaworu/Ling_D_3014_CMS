-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Mar 29, 2019 at 07:46 PM
-- Server version: 5.7.21
-- PHP Version: 5.6.35

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_sportcheck`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_categories`
--

DROP TABLE IF EXISTS `tbl_categories`;
CREATE TABLE IF NOT EXISTS `tbl_categories` (
  `cate_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `cate_name` varchar(20) NOT NULL,
  PRIMARY KEY (`cate_id`)
) ENGINE=MyISAM AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_categories`
--

INSERT INTO `tbl_categories` (`cate_id`, `cate_name`) VALUES
(1, 'School Shoes'),
(2, 'Clothing'),
(3, 'Skate Shoes'),
(4, 'Running'),
(5, 'Garmin'),
(6, 'GoPro Cameras'),
(7, 'Fitbit Smartwatches');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_products`
--

DROP TABLE IF EXISTS `tbl_products`;
CREATE TABLE IF NOT EXISTS `tbl_products` (
  `products_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `products_name` varchar(100) NOT NULL,
  `products_img` varchar(200) NOT NULL,
  `products_desc` text NOT NULL,
  `products_price` float NOT NULL,
  PRIMARY KEY (`products_id`)
) ENGINE=MyISAM AUTO_INCREMENT=40 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_products`
--

INSERT INTO `tbl_products` (`products_id`, `products_name`, `products_img`, `products_desc`, `products_price`) VALUES
(1, 'Garmin vívomove HR Sport Smartwatch - White/Rose Gold', 'garmin1.webp', 'Fashionably fit is just a tap away with the Garmin vívomove HR. This stylish hybrid smartwatch features a touchscreen with a discreet display. You get the best of both worlds when physical, ticking watch hands meet a touchscreen and a discreet display. The smart display only appears when you quickly turn your wrist to glance at your watch. The watch hands even dynamically move out of the way when you interact with the touchscreen, then move back to the correct time when you are done.', 194.97),
(2, 'Garmin Forerunner 35 GPS Running Watch - Frost Blue', 'garmin2.jpg', 'Forerunner 35 is slim and lightweight — perfect for daily runs, training and racing. It features built-in wrist-based heart rate as well as GPS that tracks your distance, pace, intervals and more. And since all these stats are captured by the watch, your watch is all you need — no phone, no chest strap. Just put on Forerunner 35 and go.', 199.99),
(3, 'Garmin Forerunner 735XT GPS Running Watch - Midnight Blue', 'garmin3.jpg', 'Be a better athlete today than you were yesterday with Forerunner 735XT. This GPS running watch with multisport features is for athletes who want dialed-in data for training and a lighter load on race day. A smaller form factor and comfortable band make 735XT the ideal watch to get you from workout through workday. Connected features like automatic uploads to Garmin Connect, the free online fitness community, lets you share your stats and triumphs through social media.', 449.99),
(4, 'Garmin Forerunner 35 GPS Running Watch - White', 'garmin4.jpg', 'Forerunner 35 is slim and lightweight — perfect for daily runs, training and racing. It features built-in wrist-based heart rate as well as GPS that tracks your distance, pace, intervals and more. And since all these stats are captured by the watch, your watch is all you need — no phone, no chest strap. Just put on Forerunner 35 and go.', 199.99),
(5, 'Garmin vívosport Smart Activity Tracker - Slate Small/Medium', 'garmin5.webp', 'You pack a lot into your day — the same way the vívosport activity tracker packs a lot of useful features into its slim, lightweight band. With built-in GPS to accurately track your walks, runs and bike rides, it lets you take your activities on the go. Or if you prefer, work out indoors with cardio and strength training activities. Wrist-based heart rate allows you to tap into fitness monitoring and all-day stress tracking while connected features such as smart notifications and LiveTrack help you keep up with your busy life. ', 175.97),
(6, 'GoPro HERO7 White Edition Action Camera', 'camera1.webp', 'Say hello to New GoPro HERO 7 White, the perfect partner on any adventure. It’s tough, tiny and totally waterproof so it can go wherever you do. An intuitive touch screen makes it simple to get great shots. Just swipe and tap. Use the photo timer to grab a sweet selfie. You can even shoot vertically then add your photos and videos right to your Instagram Story. Your shots move to the GoPro app automatically to share on the spot. From awesome moments to everyday experiences, capture the fun in creative new ways with GoPro HERO 7 White edition.', 269.99),
(7, 'GoPro HERO7 Silver Edition Action Camera', 'camera2.webp', 'Meet the New GoPro HERO 7 Silver, the perfect camera for adventures big and small. It’s built tough and totally waterproof—just grab it and go for it. Smooth 4K video and vibrant WDR photos make every moment look amazing. GPS lets you track how fast, high and far you went. With an intuitive touch screen, it’s simple to jump right in and get great shots. Plus, your photos and videos move right to the GoPro app for easy sharing. From beach days, bike rides, ski vacays to good times with the family—capture your life in a fresh new way with GoPro HERO 7 Silver edition.', 399.99),
(8, 'GoPro HERO7 Black Edition Action Camera', 'camera3.webp', 'Freakishly smooth footage. Smart-capture superpowers. Battle-tested and waterproof without a housing. This is HERO 7 Black, the most advanced GoPro ever. With HyperSmooth stabilization, you’ll get gimbal-like video—without the gimbal. A new intelligent photo mode delivers the best, most brilliant images automatically. And now with live streaming and the GoPro app, you can share every amazing moment as you live it. HERO 7 Black takes GoPro performance—and your photos and videos—to a whole new level.', 529.99),
(9, 'GoPro Fusion Action Camera', 'camera4.jpg', 'The GoPro Fusion Action Camera captures spherical video and photos, recording everything so you can find the best shots later. Play it back in VR or use OverCapture to create traditional videos and photos you can share right on your phone. With ultra smooth stabilization and 5.2K video, the Fusion is like having a professional film crew with you wherever you go. ', 799.99),
(10, 'GoPro HERO6 Black HD Action Camera', 'camera5.webp', 'The GoPro HERO6 Black action camera transforms your adventures into incredible QuikStories right on your phone. With its all-new GP1 chip, next-level video stabilization and 2x the performance, looking good has never been so easy. Add voice control and a durable waterproof design, and the HERO6 Black is the ultimate GoPro for sharing life as you live it. Image quality has improved with a greater dynamic range, richer colours and improved ability to handle low-light conditions. ', 459.99),
(11, 'Heely\'s Kids\' GR8 Shoes - Print Grey Camo', 'skate1.webp', 'Heelys are about exploring your freedom, unleashing the fun and empowering you to be fearless. This single wheel design has in mind the older child for starting out on their first pair of Heelys or graduating up from the 2 wheel beginner model.', 99.99),
(12, 'Heely\'s Kids\' Motion Plus Skate Shoes - Black/Royal/Red', 'skate2.jpg', 'Heelys are about exploring your freedom, unleashing the fun and empowering you to be fearless. This single wheel design has in mind the older child for starting out on their first pair of Heelys or graduating up from the 2 wheel beginner model.', 84.97),
(13, 'Heely\'s Kids\' Vopel Grade School Shoes - Navy/Bright Yellow', 'skate3.jpg', 'Heelys are about exploring your freedom, unleashing the fun and empowering you to be fearless. This single wheel design has in mind the older child for starting out on their first pair of Heelys or graduating up from the 2 wheel beginner model.', 99.99),
(14, 'Heely\'s Kids\' GR8 Pro Shoes - Black/White/Red', 'skate4.webp', 'The Heely’s Kids’ GR8 Pro Shoes - Black/White/Red feature a stylish classic construction with low profile wheels.', 99.99),
(15, 'Vans Kids\' Authentic Marvel Avengers Preschool Shoes - Multi', 'skate5.jpg', 'Vans and Marvel join forces to celebrate the iconic “Off The Wall” superheroes of the Marvel Universe with an epic collaboration across a range of footwear, apparel, and accessories. Featuring an allover print showcasing the characters of the Marvel Universe, the Vans x Marvel Multi Authentic combines the original and now iconic Vans low top style with sturdy canvas uppers, metal eyelets, signature rubber waffle outsoles, and custom collaboration labeling. ', 40.97),
(16, 'Nike Boys\' Spotlight Short Sleeve Hood', 'cloth1.webp', 'Nike Spotlight Boys\' Short-Sleeve Basketball Top\r\nSPOTLIGHT ON STYLE.\r\nThe Nike Spotlight Top features Dri-FIT technology to help keep you cool when your game heats up. Its hooded design provides lightweight coverage that carries you on and off the court.', 48),
(17, 'Nike Boys\' Sportswear Just Do It Long Sleeve Crew Advance', 'cloth2.webp', 'Nike Sportswear Advance 15 Boys\' Crew\r\nSTREET-READY COMFORT.\r\nThe Nike Sportswear Advance 15 Crew keeps it casual with a classic ribbed-neck design. Its soft, lightweight fabric helps you stay comfortable for a full day of having fun.', 42),
(18, 'Ripzone Boys\' Liam Henley 3 Quarter Length T Shirt', 'cloth3.webp', 'This Ripzone Liam Henley Top pairs well with any of our pants and shorts for everyday use.', 9.88),
(19, 'Ripzone Men\'s Plateau Hooded Flannel - Red', 'cloth4.webp', 'The versatile Ripzone men’s Plateau Hooded Long Sleeve Flannel is the perfect all-around shirt that lets you go from morning coffee on the porch, to stacking on the hearth, to relaxing with your feet up by the fire.  Easily layer this flannel for cooler days and colder nights, and pull the hood up to ward off the wind with this three-season shirt.', 26.97),
(20, 'DC Men\'s Runnels Long Sleeve Hooded Flannel - Raw Umber Brown', 'cloth5.jpg', 'This extra soft, warm, men’s flannel shirt combines the style of a shirt with the comfort of a hoodie. Wear it as a light jacket in warmer weather or layer it in the cold, the DC Runnels Flannel Shirt is the perfect addition to any cool weather adventure.', 36.88),
(21, 'adidas Kids\' Superstar Foundation Grade School Shoes - White/Black', 'shoes1.webp', 'Have your little one looking Old School cool in the adidas Kids\' Superstar Foundation Grade School Casual Shoes - White/Black, a grade school kids\' sized version of the legendary basketball shoe from the 1970s. Full-grain leather uppers provide flexibility and a luxurious fit, while a rubber shell toe limits wear for lasting durability.', 84.99),
(22, 'adidas Kids’ Baseline Grade School Shoes – White/Black/White', 'shoes2.webp', 'The adidas Kids’ Baseline Grade School Shoes – White/Black/White are perfect for everyday use. Featuring a classic adidas stylish design.', 69.99),
(23, 'adidas Girls\' Superstar Grade School Casual Shoes - White/Pink', 'shoes3.webp', 'Inspired by the original Superstar from the 1970s but reinvented in a modern colourway that appeals to grade school girls’ tastes, the adidas Girls’ Superstar Grade School Casual Shoes - White/Pink has a retro design she’ll love to show off. And because the toes of the full-grain leather sneakers are protected with rubber shells, she’ll be able to step out and make an Old School style statement again and again.', 62.97),
(24, 'adidas Originals Kids\' Stan Smith Preschool Shoes - White/Green', 'shoes4.webp', 'Created for the tennis court in the early ’70s, the Stan Smith has been adopted by the streets for its clean and casual style. This kids-size shoe preserves the iconic look of the original with a smooth leather upper and perforated 3-Stripes.', 69.99),
(25, 'adidas Boys\' VS Advantage Clean Pre-School Shoes - White/Green', 'shoes5.webp', 'Tennis looks for kids. Perforated 3-Stripes deliver sleek, sporty style. Hook-and-loop straps make for a comfortable and secure fit.', 59.99),
(26, 'Reebok Women\'s Sole Fury SE Running Shoes - White/Black/Yellow', 'run1.jpg', 'Go from your lunch run to your afternoon hustle without missing a beat. The Reebok Women\'s Sole Fury SE Running Shoes have a breathable mesh upper for ventilated comfort with each step. An asymmetrical lacing system gives you a snug fit and a standout look all through your run and beyond.', 129.99),
(27, 'Under Amour Women\'s SpeedForm Intake 2 Running Shoes - Blue', 'run2.jpg', 'The Under Amour Women\'s SpeedForm Intake 2 Running Shoes is built with innovative UA SpeedForm® construction molds to the foot for a precision fit, eliminating all distraction. The super lightweight mesh upper adds enhanced fit & increased ventilation while the external heel counter provides extra support and locks in the back of your foot. ', 119.99),
(28, 'Nike Women\'s Air Zoom Winflo 5 - Gray/Pink/White', 'run3.jpg', 'The Nike Air Zoom Winflo 5 Women\'s Running Shoe provides a responsive ride and durable, multi-surface traction underfoot. Up top, engineered mesh delivers strategic support and breathability, while a partial bootie offers seamless comfort as you hit your stride.', 119.99),
(29, 'Nike Women\'s Zoom Winflo 4 Running Shoes - Black/Pink', 'run4.jpg', 'Women’s Nike Air Zoom Winflo 4 Running Shoe blends the responsive ride you love with an updated upper that includes engineered mesh and exposed Flywire technology for a custom fit.', 119.99),
(30, 'Nike Women\'s Air Zoom Structure 22 Running Shoes - Black/Vast Grey', 'run5.webp', 'The Nike Air Zoom Structure 22 Women’s Running Shoe looks fast and feels secure. Engineered mesh, a heel overlay and dynamic support throughout the midfoot all work together to provide a smooth, stable ride.', 164.99),
(31, 'Fitbit Versa Lite Smart Watch - White', 'fitbit1.webp', 'Open a world of possibilities with Fitbit Versa™ Lite Edition, the versatile, everyday smartwatch. With all the core fitness and smart features, vibrant colors and an easy one-button design, this watch will inspire you to live boldly and make your goals reality.', 199.95),
(32, 'Fitbit Versa Lite Smart Watch - Lilac', 'fitbit2.webp', 'Open a world of possibilities with Fitbit Versa™ Lite Edition, the versatile, everyday smartwatch. With all the core fitness and smart features, vibrant colors and an easy one-button design, this watch will inspire you to live boldly and make your goals reality.', 199.95),
(33, 'Fitbit Inspire HR Fitness Tracker - Black', 'fitbit3.webp', 'Fitbit Inspire HR™ is a friendly heart rate & fitness tracker for every day that helps you build healthy habits. This encouraging companion motivates you to reach your weight and fitness goals and even enjoy the journey with 24/7 heart rate, workout features, calorie burn tracking, goal celebrations, sleep stages and up to 5 days of battery life. ', 129.95),
(34, 'Fitbit Inspire HR Fitness Tracker - White/Black', 'fitbit4.webp', 'Fitbit Inspire HR™ is a friendly heart rate & fitness tracker for every day that helps you build healthy habits. This encouraging companion motivates you to reach your weight and fitness goals and even enjoy the journey with 24/7 heart rate, workout features, calorie burn tracking, goal celebrations, sleep stages and up to 5 days of battery life. ', 129.95),
(35, 'Fitbit Inspire Fitness Tracker - Sangria', 'fitbit5.webp', 'Fitbit Inspire™ is a friendly fitness tracker for every day that helps you build healthy habits. This encouraging companion motivates you to reach your weight and fitness goals and even enjoy the journey with calorie burn tracking, goal celebrations, sleep tracking & guidance, Reminders to Move and up to 5 days of battery life.', 99.95);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_prod_cate`
--

DROP TABLE IF EXISTS `tbl_prod_cate`;
CREATE TABLE IF NOT EXISTS `tbl_prod_cate` (
  `prod_cate_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `products_id` int(11) NOT NULL,
  `cate_id` int(11) NOT NULL,
  PRIMARY KEY (`prod_cate_id`)
) ENGINE=MyISAM AUTO_INCREMENT=42 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_prod_cate`
--

INSERT INTO `tbl_prod_cate` (`prod_cate_id`, `products_id`, `cate_id`) VALUES
(1, 1, 5),
(2, 2, 5),
(3, 3, 5),
(4, 4, 5),
(5, 5, 5),
(6, 6, 6),
(7, 7, 6),
(8, 8, 6),
(9, 9, 6),
(10, 10, 6),
(11, 11, 3),
(12, 12, 3),
(13, 13, 3),
(14, 14, 3),
(15, 15, 3),
(16, 16, 2),
(17, 17, 2),
(18, 18, 2),
(19, 19, 2),
(20, 20, 2),
(21, 21, 1),
(22, 22, 1),
(23, 23, 1),
(24, 24, 1),
(25, 25, 1),
(26, 26, 4),
(27, 27, 4),
(28, 28, 4),
(29, 29, 4),
(30, 30, 4),
(31, 31, 7),
(32, 32, 7),
(33, 33, 7),
(34, 34, 7),
(35, 35, 7);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_user`
--

DROP TABLE IF EXISTS `tbl_user`;
CREATE TABLE IF NOT EXISTS `tbl_user` (
  `user_id` mediumint(8) UNSIGNED NOT NULL AUTO_INCREMENT,
  `user_fname` varchar(250) NOT NULL,
  `user_name` varchar(250) NOT NULL,
  `user_pass` varchar(250) NOT NULL,
  `user_email` varchar(250) NOT NULL,
  `user_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `user_ip` varchar(50) NOT NULL DEFAULT 'no',
  PRIMARY KEY (`user_id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_user`
--

INSERT INTO `tbl_user` (`user_id`, `user_fname`, `user_name`, `user_pass`, `user_email`, `user_date`, `user_ip`) VALUES
(1, '000', 'ling', '123', '123@12.com', '2019-03-15 01:57:00', '::1'),
(2, 'Ling', '1', '333', 'azusakaworu@gmail.com', '2019-03-28 15:38:06', 'no');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

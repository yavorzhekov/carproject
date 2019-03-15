-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 15, 2019 at 06:13 PM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 7.1.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cars`
--

-- --------------------------------------------------------

--
-- Table structure for table `newcar`
--

CREATE TABLE `newcar` (
  `car_id` int(11) NOT NULL,
  `car_manif` varchar(255) NOT NULL,
  `car_model` varchar(255) NOT NULL,
  `car_pic` varchar(2550) NOT NULL,
  `car_fuel` varchar(255) NOT NULL,
  `car_engine_vol` double NOT NULL,
  `car_VIN` varchar(255) NOT NULL,
  `car_gearbox` varchar(255) NOT NULL,
  `fuel_consumpt` varchar(255) NOT NULL,
  `car_pass_cap` int(11) NOT NULL,
  `car_price` int(11) NOT NULL,
  `car_class` varchar(255) NOT NULL,
  `car_features` varchar(255) NOT NULL,
  `car_mileage` int(11) NOT NULL,
  `car_doors` int(11) NOT NULL,
  `car_max_luggage` int(11) NOT NULL,
  `car_tires` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `newcar`
--

INSERT INTO `newcar` (`car_id`, `car_manif`, `car_model`, `car_pic`, `car_fuel`, `car_engine_vol`, `car_VIN`, `car_gearbox`, `fuel_consumpt`, `car_pass_cap`, `car_price`, `car_class`, `car_features`, `car_mileage`, `car_doors`, `car_max_luggage`, `car_tires`) VALUES
(1, 'Mazda', '6', 'https://s.productreview.com.au/products/images/122012_55559a0f6e3ad143467905.png, https://i.pinimg.com/originals/df/49/e0/df49e01fe0809918bdc793b2fd186cd6.jpg,https://pictures.dealer.com/j/jackgiambalvomazda/0215/8fb7e0f9a6303dd0dc11a778bacff192x.jpg', 'Benzin', 1.8, '9000009899989', 'Automatic', '6/100', 5, 5000, 'Sedan', 'ESP, Second, ABS, ASP, A/C, Climatronic, Air Bag, Central Locking', 1209900, 4, 3000, '5'),
(2, 'Toyota', 'Avensis', 'https://www.cstatic-images.com/car-pictures/xl/USC70MAC141C021001.png,https://cache4.pakwheels.com/ad_pictures/685/toyota-corolla-xli-2009-6854005.png,https://i.pinimg.com/originals/e3/36/62/e33662dfb4978807b89d306ab4cd4eeb.jpg', 'Petrol', 2, '190347239848123', 'Automatic', '9', 5, 14000, 'Sedan', 'ESP, Second, ABS, ASP, A/C, Climatronic, Air Bag, traffic GPS', 133000, 5, 1500, '185/65/14'),
(3, 'Honda', 'Civic', 'https://www.brewsterhonda.com/assets/stock/colormatched_02/white/640/cc_2015hon006e_02_640/cc_2015hon006e_02_640_wh.jpg, https://pictures.dealer.com/d/dchhondaoftemecula/0499/e6dd5f6be012b40e05caa3cd228dc9a0x.jpg,https://www.picclickimg.com/d/l400/pict/292079046245_', 'Petrol', 1800, '845213285146', 'Manual', '8l/100', 5, 10000, 'Sedan', 'ABS, Air Condition, Radio, ESP, ASP, Climatronic, Parktronic', 500000, 5, 1600, '195/75/15'),
(4, 'Opel', 'Corsa 1.6', 'http://croatia-dream-apartments.com/wp-content/uploads/rentacar/opel-corsa-chevrolet-aveo-sim-2/coras.jpg,https://www.picclickimg.com/d/l400/pict/262562795818_/Blue-Flexible-Cold-Line-Universal-Car-Interior-Decoration.jpg,https://www.testproductreview.com/wp-content/uploads/2017/12/vectra-c-hatchback-400x400.jpg', 'Benzin', 1.6, '113313331asdffshhshsq2526', 'Automatic', '8/100', 5, 3500, 'Sedan', 'Fog lights, ABS, Air Condition, Radio, ESP, ASP, Climatronic', 135000, 4, 2000, '195/75/15'),
(5, 'INFINITI ', ' QX70', 'https://www.infiniti-cdn.net/content/dam/Infiniti/2017/Q60/Vehicle-Profile-Images/41009_INF_1112x624_Q60_Sport_Red.jpg.ximg.l_12_m.smart.jpg,http://chrisglass.com/photos/2006/autoshow/img/infiniti-interior2.jpg,https://media-dmg.assets-cdk.com/websites/content/38378eae5440481ab5a91e8b98dbead5.jpg', 'Diesel', 2, 'kol90w0020qwer', 'Manual', '6l/100', 4, 90000, 'Sedan', 'ABS, Air Condition, Radio, ESP, ASP, Climatronic', 20000, 4, 3500, '195/75/15');

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE `news` (
  `news_id` int(11) NOT NULL,
  `news_heading` varchar(255) NOT NULL,
  `news_date` varchar(255) NOT NULL,
  `news_author` varchar(255) NOT NULL,
  `news_pic` varchar(255) NOT NULL,
  `news_text` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 ROW_FORMAT=COMPACT;

--
-- Dumping data for table `news`
--

INSERT INTO `news` (`news_id`, `news_heading`, `news_date`, `news_author`, `news_pic`, `news_text`) VALUES
(1, 'Honda Civic 2018 long-term review', '16 April 2018', 'Ivan Ivanov', 'https://icdn9.digitaltrends.com/image/2018-honda-civic-si-coupe-02-640x427-c.jpg', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent convallis interdum fermentum. Phasellus dignissim hendrerit lorem, eu lobortis sapien. Integer eget nunc quis neque vehicula ultrices. Maecenas lobortis sit amet nisl sed ullamcorper. Quisque pretium felis in gravida laoreet. Praesent at mauris quis justo tincidunt scelerisque. Etiam rutrum nulla vel massa mattis lobortis ullamcorper ac nisl. In in ligula vestibulum, fermentum nisl ac, efficitur massa. Etiam ipsum mauris, consequat sed lorem non, facilisis lobortis ligula. Proin congue sapien nec leo euismod lobortis.\n\nPraesent sit amet dolor in augue imperdiet vehicula. Nulla dictum nunc et mauris mollis dapibus. Cras ultrices leo eget metus molestie, et efficitur nisl ultricies. Integer semper massa sit amet ex cursus semper. Proin tempus elit in sapien placerat tristique. Nunc eu sem vehicula, sagittis mauris maximus, feugiat odio. Vivamus venenatis semper sapien vel consectetur. In nec leo lorem. Integer elementum maximus imperdiet. Maecenas lectus velit, ultrices quis nisi scelerisque, lobortis fermentum purus. Fusce congue suscipit mauris. Donec eget augue at nunc tempor malesuada malesuada dapibus libero. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos.\n\nDonec lectus odio, faucibus id cursus sed, placerat in arcu. Nam porttitor quam id risus efficitur condimentum. Vestibulum eleifend velit magna, eu lacinia velit tristique vitae. Sed pharetra sit amet leo vel vestibulum. Praesent velit tortor, consequat ac orci eu, egestas fermentum odio. Pellentesque congue velit id augue faucibus, tempus gravida neque commodo. Morbi id porttitor tortor, vitae ullamcorper urna. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec facilisis lorem at quam vehicula, nec eleifend est auctor. Phasellus interdum placerat neque, eget convallis neque aliquam vitae. Donec ac consectetur dui, sit amet convallis elit. Vestibulum et malesuada massa, a lacinia orci. Maecenas nulla metus, ornare eget augue et, ultricies gravida massa. Sed enim tellus, sodales vitae sapien nec, sollicitudin rutrum sapien.'),
(2, 'American Honda Reports April Sales Results', '16 April 2018', 'Ivan Kashukeev', 'https://icdn2.digitaltrends.com/image/2018-honda-accord-hybrid-5-640x427-c.jpg', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent convallis interdum fermentum. Phasellus dignissim hendrerit lorem, eu lobortis sapien. Integer eget nunc quis neque vehicula ultrices. Maecenas lobortis sit amet nisl sed ullamcorper. Quisque pretium felis in gravida laoreet. Praesent at mauris quis justo tincidunt scelerisque. Etiam rutrum nulla vel massa mattis lobortis ullamcorper ac nisl. In in ligula vestibulum, fermentum nisl ac, efficitur massa. Etiam ipsum mauris, consequat sed lorem non, facilisis lobortis ligula. Proin congue sapien nec leo euismod lobortis.\n\nPraesent sit amet dolor in augue imperdiet vehicula. Nulla dictum nunc et mauris mollis dapibus. Cras ultrices leo eget metus molestie, et efficitur nisl ultricies. Integer semper massa sit amet ex cursus semper. Proin tempus elit in sapien placerat tristique. Nunc eu sem vehicula, sagittis mauris maximus, feugiat odio. Vivamus venenatis semper sapien vel consectetur. In nec leo lorem. Integer elementum maximus imperdiet. Maecenas lectus velit, ultrices quis nisi scelerisque, lobortis fermentum purus. Fusce congue suscipit mauris. Donec eget augue at nunc tempor malesuada malesuada dapibus libero. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos.\n\nDonec lectus odio, faucibus id cursus sed, placerat in arcu. Nam porttitor quam id risus efficitur condimentum. Vestibulum eleifend velit magna, eu lacinia velit tristique vitae. Sed pharetra sit amet leo vel vestibulum. Praesent velit tortor, consequat ac orci eu, egestas fermentum odio. Pellentesque congue velit id augue faucibus, tempus gravida neque commodo. Morbi id porttitor tortor, vitae ullamcorper urna. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec facilisis lorem at quam vehicula, nec eleifend est auctor. Phasellus interdum placerat neque, eget convallis neque aliquam vitae. Donec ac consectetur dui, sit amet convallis elit. Vestibulum et malesuada massa, a lacinia orci. Maecenas nulla metus, ornare eget augue et, ultricies gravida massa. Sed enim tellus, sodales vitae sapien nec, sollicitudin rutrum sapien.'),
(3, 'Honda Passport to Return as Two Row', '18 April 2018', 'Miroslav Zhekov', 'https://images.hgmsites.net/med/honda-fit_100609578_m.jpg', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent convallis interdum fermentum. Phasellus dignissim hendrerit lorem, eu lobortis sapien. Integer eget nunc quis neque vehicula ultrices. Maecenas lobortis sit amet nisl sed ullamcorper. Quisque pretium felis in gravida laoreet. Praesent at mauris quis justo tincidunt scelerisque. Etiam rutrum nulla vel massa mattis lobortis ullamcorper ac nisl. In in ligula vestibulum, fermentum nisl ac, efficitur massa. Etiam ipsum mauris, consequat sed lorem non, facilisis lobortis ligula. Proin congue sapien nec leo euismod lobortis.\n\nPraesent sit amet dolor in augue imperdiet vehicula. Nulla dictum nunc et mauris mollis dapibus. Cras ultrices leo eget metus molestie, et efficitur nisl ultricies. Integer semper massa sit amet ex cursus semper. Proin tempus elit in sapien placerat tristique. Nunc eu sem vehicula, sagittis mauris maximus, feugiat odio. Vivamus venenatis semper sapien vel consectetur. In nec leo lorem. Integer elementum maximus imperdiet. Maecenas lectus velit, ultrices quis nisi scelerisque, lobortis fermentum purus. Fusce congue suscipit mauris. Donec eget augue at nunc tempor malesuada malesuada dapibus libero. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos.\n\nDonec lectus odio, faucibus id cursus sed, placerat in arcu. Nam porttitor quam id risus efficitur condimentum. Vestibulum eleifend velit magna, eu lacinia velit tristique vitae. Sed pharetra sit amet leo vel vestibulum. Praesent velit tortor, consequat ac orci eu, egestas fermentum odio. Pellentesque congue velit id augue faucibus, tempus gravida neque commodo. Morbi id porttitor tortor, vitae ullamcorper urna. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec facilisis lorem at quam vehicula, nec eleifend est auctor. Phasellus interdum placerat neque, eget convallis neque aliquam vitae. Donec ac consectetur dui, sit amet convallis elit. Vestibulum et malesuada massa, a lacinia orci. Maecenas nulla metus, ornare eget augue et, ultricies gravida massa. Sed enim tellus, sodales vitae sapien nec, sollicitudin rutrum sapien.'),
(4, '2013 Honda Crosstour Concept: Goldie Locks Size?', '26 April 2018', 'Yavor Zhekov', 'https://images.hgmsites.net/med/honda-fit_100609578_m.jpg', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent convallis interdum fermentum. Phasellus dignissim hendrerit lorem, eu lobortis sapien. Integer eget nunc quis neque vehicula ultrices. Maecenas lobortis sit amet nisl sed ullamcorper. Quisque pretium felis in gravida laoreet. Praesent at mauris quis justo tincidunt scelerisque. Etiam rutrum nulla vel massa mattis lobortis ullamcorper ac nisl. In in ligula vestibulum, fermentum nisl ac, efficitur massa. Etiam ipsum mauris, consequat sed lorem non, facilisis lobortis ligula. Proin congue sapien nec leo euismod lobortis.\n\nPraesent sit amet dolor in augue imperdiet vehicula. Nulla dictum nunc et mauris mollis dapibus. Cras ultrices leo eget metus molestie, et efficitur nisl ultricies. Integer semper massa sit amet ex cursus semper. Proin tempus elit in sapien placerat tristique. Nunc eu sem vehicula, sagittis mauris maximus, feugiat odio. Vivamus venenatis semper sapien vel consectetur. In nec leo lorem. Integer elementum maximus imperdiet. Maecenas lectus velit, ultrices quis nisi scelerisque, lobortis fermentum purus. Fusce congue suscipit mauris. Donec eget augue at nunc tempor malesuada malesuada dapibus libero. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos.\n\nDonec lectus odio, faucibus id cursus sed, placerat in arcu. Nam porttitor quam id risus efficitur condimentum. Vestibulum eleifend velit magna, eu lacinia velit tristique vitae. Sed pharetra sit amet leo vel vestibulum. Praesent velit tortor, consequat ac orci eu, egestas fermentum odio. Pellentesque congue velit id augue faucibus, tempus gravida neque commodo. Morbi id porttitor tortor, vitae ullamcorper urna. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec facilisis lorem at quam vehicula, nec eleifend est auctor. Phasellus interdum placerat neque, eget convallis neque aliquam vitae. Donec ac consectetur dui, sit amet convallis elit. Vestibulum et malesuada massa, a lacinia orci. Maecenas nulla metus, ornare eget augue et, ultricies gravida massa. Sed enim tellus, sodales vitae sapien nec, sollicitudin rutrum sapien.');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `order_id` int(11) NOT NULL,
  `order_nc_id` int(11) NOT NULL,
  `order_u_id` int(11) NOT NULL,
  `order_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`order_id`, `order_nc_id`, `order_u_id`, `order_date`) VALUES
(1, 5, 24, '2019-03-14 23:26:37'),
(2, 4, 24, '2019-03-14 23:27:02'),
(3, 3, 24, '2019-03-14 23:36:01'),
(4, 1, 23, '2019-03-14 23:38:58'),
(5, 5, 23, '2019-03-14 23:39:46');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL,
  `user_fname` varchar(255) NOT NULL,
  `user_lname` varchar(255) NOT NULL,
  `user_email` varchar(255) NOT NULL,
  `user_password` varchar(255) NOT NULL,
  `user_address` varchar(255) NOT NULL,
  `user_phone` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `user_fname`, `user_lname`, `user_email`, `user_password`, `user_address`, `user_phone`) VALUES
(17, 'Miroslav', 'Zhekov', 'mitpis11@gmail.com', 'bece9f335676d720809c62ada299f1bd', 'Fransis de presanse', '0888888877'),
(18, 'Miroslav', 'Zhekov', 'mitpis10@gmail.com', '7815696ecbf1c96e6894b779456d330e', 'asd', 'asd'),
(19, 'asd', 'asd', 'mitpissy@abv.bg', '7815696ecbf1c96e6894b779456d330e', '', ''),
(20, 'Miroslav', 'Ilich', 'lenin@abv.bg', '7815696ecbf1c96e6894b779456d330e', 'asd', '088777777777'),
(21, 'Rosen', 'Petrov', 'rp@roskata.bg', 'e10adc3949ba59abbe56e057f20f883e', 'Fransis de presanse', '0888888888'),
(22, 'Qwerty', 'sushtoto', 'qwert@asd.s', 'd8578edf8458ce06fbc5bb76a58c5ca4', 'asdasdasda', '08882099398'),
(23, 'yavor', 'zhekov', 'yavor_zhekov@abv.bg', 'e10adc3949ba59abbe56e057f20f883e', 'ososos', '000000998999'),
(24, 'Pesho', 'Ivanov', 'pesho_zhekov@abv.bg', '3fbb3a1262bad56b5e6f2a76392e2269', 'Sofia, Oborishte', '09999999'),
(25, 'Ivan', 'Ivanov', 'ivan_zhekov@abv.bg', 'cc57018e0cd61542cac0bc84ed44fa38', 'Oborishte', '123456'),
(26, 'Ivan', 'Petrov', 'Ivan_Petrov@abv.bg', 'b0baee9d279d34fa1dfd71aadb908c3f', 'Sofia, Oborishte', '09999999'),
(27, 'Rosen', 'Ivanov', 'rosen_ivanov@abv.bg', '827ccb0eea8a706c4c34a16891f84e7b', 'Sofia, Oborishte', '0889343619'),
(28, 'Ivan', 'Georgiev', 'ivan_georgiev@abv.bg', '827ccb0eea8a706c4c34a16891f84e7b', 'sofia', '12345678'),
(29, 'pesho', 'petrov', 'my-admin@abv.bg', 'e10adc3949ba59abbe56e057f20f883e', 'sofia', '0888456');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `newcar`
--
ALTER TABLE `newcar`
  ADD PRIMARY KEY (`car_id`);

--
-- Indexes for table `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`news_id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`order_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `newcar`
--
ALTER TABLE `newcar`
  MODIFY `car_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `news`
--
ALTER TABLE `news`
  MODIFY `news_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `order_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

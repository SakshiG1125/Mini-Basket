-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 13, 2024 at 05:24 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `online`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `email` varchar(40) NOT NULL,
  `password` varchar(12) NOT NULL,
  `profile` text NOT NULL,
  `delete_status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `email`, `password`, `profile`, `delete_status`) VALUES
(1, 'admin@gmail.com', 'admin', 'Penguins.jpg', 0);

-- --------------------------------------------------------

--
-- Table structure for table `cart_item`
--

CREATE TABLE `cart_item` (
  `id` int(11) NOT NULL,
  `rid` int(11) NOT NULL,
  `pid` int(11) NOT NULL,
  `quantity` int(11) NOT NULL,
  `prize` float NOT NULL,
  `total` text NOT NULL,
  `delete_status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `id` int(11) NOT NULL,
  `name` varchar(20) NOT NULL,
  `qty` text NOT NULL,
  `delete_status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`id`, `name`, `qty`, `delete_status`) VALUES
(1, 'Vegetables', '17', 0),
(2, 'Fruits', '13', 0),
(3, 'Dry Fruits', '4', 0),
(4, 'Milk Product', '4', 0),
(5, 'Bakery product', '2', 0),
(6, 'Flowers', '6', 0);

-- --------------------------------------------------------

--
-- Table structure for table `order`
--

CREATE TABLE `order` (
  `id` int(11) NOT NULL,
  `uid` int(11) NOT NULL,
  `country` varchar(20) NOT NULL,
  `fname` varchar(20) NOT NULL,
  `lname` varchar(20) NOT NULL,
  `date` date NOT NULL,
  `address` text NOT NULL,
  `address2` text NOT NULL,
  `pcode` int(11) NOT NULL,
  `state` text NOT NULL,
  `email` varchar(40) NOT NULL,
  `mobile` text NOT NULL,
  `payment_method` text NOT NULL,
  `status` int(11) NOT NULL,
  `subtotal` float(10,2) NOT NULL,
  `grandtotal` float(10,2) NOT NULL,
  `delete_status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `order`
--

INSERT INTO `order` (`id`, `uid`, `country`, `fname`, `lname`, `date`, `address`, `address2`, `pcode`, `state`, `email`, `mobile`, `payment_method`, `status`, `subtotal`, `grandtotal`, `delete_status`) VALUES
(1, 1, '', 'Prerana', 'Jadhav', '2024-04-13', 'xcdxfgfh', 'gfghrtyg', 422003, 'Maharashtra', 'peru1607@gmail.com', '9762516223', 'cash', 0, 0.00, 0.00, 0);

-- --------------------------------------------------------

--
-- Table structure for table `order_item`
--

CREATE TABLE `order_item` (
  `id` int(11) NOT NULL,
  `pid` int(11) NOT NULL,
  `rid` int(11) NOT NULL,
  `quantity` int(11) NOT NULL,
  `prize` float NOT NULL,
  `total` text NOT NULL,
  `o_id` int(11) NOT NULL,
  `delete_status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `order_item`
--

INSERT INTO `order_item` (`id`, `pid`, `rid`, `quantity`, `prize`, `total`, `o_id`, `delete_status`) VALUES
(1, 22, 1, 2, 40, '40', 2, 0),
(2, 23, 1, 3, 20, '20', 1, 0);

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `id` int(11) NOT NULL,
  `pname` varchar(30) NOT NULL,
  `prize` float(10,2) NOT NULL,
  `unit` varchar(100) NOT NULL,
  `description` varchar(100) NOT NULL,
  `profile` text NOT NULL,
  `catid` int(11) NOT NULL,
  `status` int(11) NOT NULL,
  `delete_status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`id`, `pname`, `prize`, `unit`, `description`, `profile`, `catid`, `status`, `delete_status`) VALUES
(1, 'Banana', 40.00, 'pcs', '​Bananas are one of the best fruit sources of vitamin B6​\r\nVitamin B6 from bananas is easily absorbe', 'banana.jpg', 2, 0, 0),
(2, 'Mango', 40.00, 'pcs', '​Mango are one of the best fruit sources of vitamin B6​\r\nVitamin B6 from bananas is easily absorbe', 'manago.jpg', 2, 0, 0),
(3, 'Apple', 80.00, 'gm', '\r\nApples contain fiber, vitamin C, antioxidants, and potassium. A medium sized apple provides the fo', 'apple.jpg', 2, 0, 0),
(4, 'Pomogranet', 50.00, 'gm', '1. Protects us from free radicals\r\nPomegranate is rich in anti-oxidants and thus protects our body f', 'pomegranate.jpg', 2, 0, 0),
(5, 'Grapes', 150.00, 'kg', 't has been shown to protect against cancer by reducing inflammation, acting as an antioxidant and bl', 'grapes.jpg', 2, 0, 0),
(6, 'Maize', 10.00, '', '1. Reduces the risk of Anemia\r\nCorn is rich is in Vitamin B12, folic acid and iron which helps in th', 'corn.jpg', 2, 0, 0),
(7, 'Papaya', 60.00, 'kg', 'Papaya is rich in fibre, Vitamin C and antioxidants which prevent cholesterol build up in your arter', 'papaya.jpg', 2, 0, 0),
(8, 'Watermelon', 60.00, 'kg', 'Vitamin C: 21% of the Reference Daily Intake (RDI)\r\nVitamin A: 18% of the RDI\r\nPotassium: 5% of the ', 'watermelan.jpg', 2, 0, 0),
(9, 'Orange', 80.00, 'gm', 'As an excellent source of the antioxidant vitamin C, oranges may help combat the formation of free r', 'oranges.jpg', 2, 0, 0),
(10, 'Muskmelon', 60.00, 'kg', 'Good For Eyesight. ...\r\nNutrient Dense. ...\r\nImproves Skin Health. ...\r\nGood For Immunity. ...\r\nHydr', 'muskmelon.jpg', 2, 0, 0),
(11, 'CustardApple', 60.00, 'kg', 'Custardapples contain anti-oxidants like Vitamin C, which helps to fight free radicalsin our body. I', 'cluster.png', 2, 0, 0),
(12, 'Gooseberry', 30.00, 'kg', 'Highly nutritious. Gooseberries are low in calories and fat, yet packed with nutrients. ...\r\nHigh in', 'gooseberry.jpg', 2, 0, 0),
(13, 'Pineapple', 40.00, 'Pcs', 'Loaded With Nutrients. ...\r\nContains Disease-Fighting Antioxidants. ...\r\nIts Enzymes Can Ease Digest', 'pineapple.jpg', 2, 0, 0),
(15, 'Sapota', 30.00, 'gm', 'We all know that fiber-rich foods help in digestion and aid in proper bowel movement and Sapota has ', 'sapota.png', 2, 0, 0),
(16, 'Kivi', 142.00, 'Pcs', 'Helps treat asthma.\r\nAids digestion.\r\nBoosts immune system.\r\nHelps prevent sickness.\r\nManages blood ', 'kiwi.png', 2, 0, 0),
(17, 'Almonds', 360.00, 'gm', 'Almonds contain lots of healthy fats, fiber, protein, magnesium and vitamin E. The health benefits o', 'almonds.png', 3, 0, 0),
(18, 'Cashew', 670.00, 'gm', 'Heart Health. ...\r\nPrevents Blood Disease. ...\r\nProtects the Eye. ...\r\nGood for the Skin. ...\r\nWeigh', 'cashe.png', 3, 0, 0),
(19, 'Black date', 108.00, 'gm', 'Black dates contain a high percentage of carbohydrates, protein, vitamins and dietary fibre. They co', 'black-date.png', 3, 0, 0),
(20, 'Raisin', 231.00, 'gm', 'Despite their small size, raisins are packed with energy and rich in fiber, vitamins, and minerals. ', 'raisins.png', 3, 0, 0),
(21, 'Onion', 17.00, 'kg', 'Country of Origin: Made in India\r\n\r\nQuality Available: A Grade\r\n\r\nStorage Tips: Cold Storage\r\n\r\nUsag', 'onion.png', 1, 0, 0),
(22, 'Potato', 40.00, 'kg', '', 'potato.png', 1, 0, 0),
(23, 'Okra', 20.00, 'kg', '', 'bhendi.png', 1, 0, 0),
(24, 'chilli', 40.00, 'kg', 'May Help Treat Skin Infections. Green chillies are loaded with anti-bacterial properties. ...\r\nGood ', 'green chilli.png', 1, 0, 0),
(25, 'brinjal', 20.00, 'kg', 'A GREAT SOURCE OF VITAMINS & MINERALS. The vitamin & mineral content of eggplants is quite extensive', 'wangi.jpg', 1, 0, 0),
(26, 'paneer', 340.00, 'kg', 'Rich In Protein. ...\r\nCottage Cheese Strengthen Bones And Teeth. ...\r\nMaintains Blood Sugar Levels. ', 'paneer.jpg', 4, 0, 0),
(27, 'Tomato', 80.00, 'kg', 'Tomatoes are the major dietary source of the antioxidant lycopene, which has been linked to many hea', 'tomato.jpg', 1, 0, 0),
(28, 'Dahi', 15.00, 'gm', 'It makes your teeth and bones stronger. ...\r\nIt improves immunity. ...\r\nIt is used as home remedy to', 'dahi.png', 4, 0, 0),
(29, 'Milk', 55.00, 'Ltr', 'Milk is an excellent source of the nutrients your body relies on to properly absorb calcium, includi', 'milk1.jpg', 4, 0, 0),
(30, 'cabbage', 25.00, 'kg', 'Prevents Cancer: Sulforaphane is a substance found in cabbage that increases anti-cancer effects in ', 'kobi.jpg', 1, 0, 0),
(31, 'Drumsticks', 10.00, 'pcs', 'Great for diabetes. ...\r\nFights pimple. ...\r\nGood for hair and skin. ...\r\nPrevents the outburst of c', 'drumsticks.png', 1, 0, 0),
(32, 'Bittergourd', 60.00, 'kg', 'Helps in maintaining blood sugar levels. ...\r\nLowers bad cholesterol levels. ...\r\nFor glowing skin a', 'bittergourd.png', 1, 0, 0),
(33, 'snackgourd', 20.00, 'kg', 'Because of its high-water content, snake gourd acts as a natural coolant for the body and is fat-fre', 'snackgourd.png', 1, 0, 0),
(34, 'Bottlegourd', 25.00, 'kg', 'Cools your body. ...\r\nHelps in weight loss. ...\r\nTreats urinary tract infections. ...\r\nCures tummy t', '', 1, 0, 0),
(35, 'Peanuts', 399.00, 'kg', 'Peanuts are as popular as they are healthy. They\'re an excellent plant-based source of protein and h', 'peanuts.png', 1, 0, 0),
(36, 'Zuccini', 30.00, 'kg', 'Rich in Many Nutrients. Zucchini is rich in several vitamins, minerals, and other beneficial plant c', 'zuccini.png', 1, 0, 0),
(37, 'spongegourd', 40.00, 'kg', 'The Sponge gourd functions to reduce blockage issues in the arteries and may even be used to cure ma', 'spongeguard.png', 1, 0, 0),
(38, 'Beet', 55.00, 'kg', 'Beetroot. Rs 15/ KgGet Latest Price. ...\r\nFresh Beetroot. Rs 10/ KilogramGet Latest Price. ...\r\nFres', 'beet.png', 1, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `supplier`
--

CREATE TABLE `supplier` (
  `id` int(11) NOT NULL,
  `fname` varchar(20) NOT NULL,
  `lname` varchar(20) NOT NULL,
  `address` varchar(20) NOT NULL,
  `mobile` text NOT NULL,
  `email` varchar(40) NOT NULL,
  `password` varchar(12) NOT NULL,
  `catid` int(11) NOT NULL,
  `profile` text NOT NULL,
  `delete_status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `supplier`
--

INSERT INTO `supplier` (`id`, `fname`, `lname`, `address`, `mobile`, `email`, `password`, `catid`, `profile`, `delete_status`) VALUES
(1, 'Shubhangi', 'Khalkar', 'Nashik', '9087654321', 'khalkarshubhangi1595@gmail.com', '', 23, '841937.jpg', 1),
(2, 'Sham', 'Patil', '', '8976543210', 'ram123@gmail.com', '1233', 26, '123.jpg', 1),
(3, 'Shubhangi', 'Khalkar', 'Nashik', '9087654321', 'khalkarshubhangi1595@gmail.com', '3224', 23, '841937.jpg', 1),
(4, 'Shubhangi', 'Khalkar', 'Nashik', '9087654321', 'khalkarshubhangi1595@gmail.com', '3224', 23, '841937.jpg', 1),
(5, 'Shubhangi', 'Khalkar', 'Nashik', '9087654321', 'khalkarshubhangi1595@gmail.com', '3224', 0, '841937.jpg', 1),
(6, 'Shubhangi', 'Khalkar', 'Nashik', '9087654321', 'khalkarshubhangi1595@gmail.com', '3224', 0, '841937.jpg', 1),
(7, 'Ashwini', 'Mahale', 'Pimpalgaon', '9146877755', 'mahaleashwini14@gmail.com', '12345', 24, 'background-theme-download-3.jpg', 1),
(8, 'Ashwini', 'Mahale', 'Pimpalgaon', '9146877755', 'mahaleashwini14@gmail.com', '12345', 24, 'background-theme-download-3.jpg', 1),
(9, 'Shubhangi', 'Khalkar', 'Nashik', '9087654321', 'khalkarshubhangi1595@gmail.com', '3224', 0, '841937.jpg', 1),
(10, 'Rajesh', 'Nikam', 'Shivaji Nagar', '9087654321', 'rajeshvnikam@gmail.com', '12345', 24, '138.png', 0),
(11, 'Aditya', 'Shinde', 'Pimpalgaon', '7083987281', 'vishalbidve1997@gmail.com', '12345', 26, '123.jpg', 0),
(12, 'Ashwini', 'Mahale', 'Pimpalgaon', '9146877755', 'mahaleashwini14@gmail.com', '123', 26, '1023.jpg', 0),
(13, 'Aditya', 'Shinde', 'Pimpalgaon', '7083987281', 'vishalbidve1999@gmail.com', '1234', 27, '123.jpg', 0),
(14, 'Shubhangi', 'More', 'Nashik', '9087654321', 'khalkarshubhangi1595@gmail.com', '2345', 23, 'computer-icons.jpg', 0),
(15, 'Mahesh', 'Nikam', '', '9087654321', 'rajeshvnikam@gmail.com', '6789', 23, '', 1),
(16, 'Madhuri', 'Ghangale', 'Pimpalgaon', '9146877755', 'madhurighangale55@gmail.com', '234', 29, '', 1),
(17, 'Shubhangi', 'Khalkar', '', '9087654321', 'khalkarshubhangi1595@gmail.com', '', 27, '1234.png', 1),
(18, 'Ram', 'Patil', '', '8976543210', 'ram123@gmail.com', '1234', 23, '138.png', 1),
(19, 'Ram', 'Patil', '', '8976543210', 'ram123@gmail.com', '1234', 27, '123.jpg', 1),
(20, 'Shubhangi', 'More', 'pune', '9087654321', 'khalkarshubhangi1595@gmail.com', '12345', 28, '1234.png', 1),
(21, 'Ram', 'Patil', 'Shivaji Nagar', '8976543210', 'ram123@gmail.com', '12345', 33, '138.png', 0),
(22, 'Madhuri', 'Ghangale', 'Pimpalgaon', '9146877755', 'madhurighangale55@gmail.com', '12345', 31, '1234.png', 0),
(23, 'Aditya', 'Shinde', 'Pimpalgaon', '7083987281', 'vishalbidve1999@gmail.com', '12345', 25, '', 1),
(24, 'Shubhangi', 'Khalkar', 'Nashik', '9087654321', 'khalkarshubhangi1595@gmail.com', '12345', 23, '', 1),
(25, 'Ram', 'Patil', 'Shivaji Nagar', '8976543210', 'ram123@gmail.com', '23456', 23, '1023.jpg', 0),
(26, 'Ashwini', 'Mahale', 'Pimpalgaon', '9146877755', 'mahaleashwini14@gmail.com', '1234', 23, '1', 1),
(27, 'Ram', 'Patil', 'Shivaji Nagar', '8976543210', 'ram123@gmail.com', '12345', 23, '', 1),
(28, 'Ram', 'Patil', 'Shivaji Nagar', '8976543210', 'ram123@gmail.com', '12345', 31, '1234.png', 0),
(29, 'Aditya', 'Shinde', 'Pimpalgaon', '7083987281', 'vishalbidve1999@gmail.com', '12345', 26, '1234.png', 0),
(30, 'Ram', 'Patil', 'Shivaji Nagar', '8976543210', 'ram123@gmail.com', '12345', 33, '', 1),
(31, 'Rajesh', 'Nikam', 'Shivaji Nagar', '9087654321', 'rajeshvnikam@gmail.com', '123456', 25, '1234.png', 0),
(32, 'Aditya', 'Shinde', 'Pimpalgaon', '7083987281', 'vishalbidve1999@gmail.com', '12345', 26, '', 1),
(33, 'Aditya', 'Shinde', 'Pimpalgaon', '7083987281', 'vishalbidve1999@gmail.com', '12345', 26, '123.jpg', 0),
(34, 'Rajesh', 'Nikam', 'Shivaji Nagar', '9087654321', 'rajeshvnikam@gmail.com', '23456', 34, 'login3.jpg', 0),
(35, 'Manisha', 'Sonawane', 'sai Nagar', '9087654321', 'manisha', '1234', 25, 'Home.jpg', 1),
(36, 'Manisha', 'Sonawane', 'sai Nagar', '9087654321', 'manisha', '12345', 23, 'laptop4.jpg', 1),
(37, 'Ram', 'Patil', 'Shivaji Nagar', '8976543210', 'ram123@gmail.com', '1234', 23, 'laptop4.jpg', 0),
(38, 'Prerana', 'Jadhav', 'Chandwad', '9158720629', 'peru1607@gmail.com', '12345678', 36, 'Penguins.jpg', 0);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `fname` varchar(20) NOT NULL,
  `lname` varchar(20) NOT NULL,
  `email` varchar(40) NOT NULL,
  `mobile` bigint(10) NOT NULL,
  `profile` text NOT NULL,
  `password` varchar(12) NOT NULL,
  `address` varchar(50) NOT NULL,
  `address2` varchar(50) NOT NULL,
  `date` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `fname`, `lname`, `email`, `mobile`, `profile`, `password`, `address`, `address2`, `date`) VALUES
(1, 'Prerana', 'Jadhav', 'peru1607@gmail.com', 9762516223, '', '12345', '1', '0', '2024-04-11'),
(2, 'Rahul', '09021220868', 'rahhowale1234@gmail.com', 9021220868, '', '12345', 'Tulsi anand apartment, durga nagar', 'Jai bhavani road,nashik road', '2024-04-11');

-- --------------------------------------------------------

--
-- Table structure for table `wishlist`
--

CREATE TABLE `wishlist` (
  `id` int(11) NOT NULL,
  `rid` int(11) NOT NULL,
  `pid` int(11) NOT NULL,
  `price` float(10,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `wishlist`
--

INSERT INTO `wishlist` (`id`, `rid`, `pid`, `price`) VALUES
(1, 2, 17, 360.00),
(3, 1, 15, 30.00);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cart_item`
--
ALTER TABLE `cart_item`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `order`
--
ALTER TABLE `order`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `order_item`
--
ALTER TABLE `order_item`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `supplier`
--
ALTER TABLE `supplier`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `wishlist`
--
ALTER TABLE `wishlist`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `cart_item`
--
ALTER TABLE `cart_item`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `order`
--
ALTER TABLE `order`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `order_item`
--
ALTER TABLE `order_item`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;

--
-- AUTO_INCREMENT for table `supplier`
--
ALTER TABLE `supplier`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `wishlist`
--
ALTER TABLE `wishlist`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

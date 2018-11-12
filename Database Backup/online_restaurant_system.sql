-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 04, 2018 at 05:27 PM
-- Server version: 10.1.34-MariaDB
-- PHP Version: 7.2.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `online_restaurant_system`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_table`
--

CREATE TABLE `admin_table` (
  `aid` int(11) NOT NULL,
  `name` varchar(155) NOT NULL,
  `username` varchar(155) NOT NULL,
  `password` varchar(155) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin_table`
--

INSERT INTO `admin_table` (`aid`, `name`, `username`, `password`) VALUES
(1, 'Mayuraksha Sikdar', 'mayurakshasikdar@gmail.com', 'admin001'),
(2, 'Subha Prasad Dey', 'antudey.2014.ad@gmail.com', 'admin002'),
(3, 'Utsav Dey', 'utsavdey449@gmail.com', 'admin003'),
(4, 'Debajyoti Ghosh', 'debu.dg57@gmail.com', 'admin004'),
(5, 'Indrani Bardhan', 'indranibardhan1997@gmail.com', 'admin005');

-- --------------------------------------------------------

--
-- Table structure for table `area_table`
--

CREATE TABLE `area_table` (
  `area_id` int(11) NOT NULL,
  `area_name` varchar(155) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `area_table`
--

INSERT INTO `area_table` (`area_id`, `area_name`) VALUES
(123479, 'New Barrackpur'),
(123480, 'Madhyamgram'),
(123482, 'Sealdah'),
(123483, 'Phoolbagan');

-- --------------------------------------------------------

--
-- Table structure for table `cart_table`
--

CREATE TABLE `cart_table` (
  `cart_id` int(11) NOT NULL,
  `id` int(11) NOT NULL,
  `items_id` int(11) NOT NULL,
  `qty` varchar(2) NOT NULL,
  `cart_date` varchar(10) NOT NULL,
  `status` enum('0','1') NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cart_table`
--

INSERT INTO `cart_table` (`cart_id`, `id`, `items_id`, `qty`, `cart_date`, `status`) VALUES
(14, 19, 5, '2', '29-10-2018', '1'),
(18, 19, 1, '2', '30-10-2018', '1'),
(19, 19, 10, '2', '03-11-2018', '1'),
(20, 19, 13, '2', '03-11-2018', '1'),
(21, 19, 8, '1', '03-11-2018', '1'),
(22, 19, 1, '1', '03-11-2018', '1'),
(23, 19, 37, '1', '04-11-2018', '1'),
(24, 19, 13, '1', '04-11-2018', '0'),
(25, 19, 4, '1', '04-11-2018', '0');

-- --------------------------------------------------------

--
-- Table structure for table `customer_table`
--

CREATE TABLE `customer_table` (
  `id` int(11) NOT NULL,
  `c_name` varchar(150) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(155) NOT NULL,
  `Contact_no` varchar(10) NOT NULL,
  `Address` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customer_table`
--

INSERT INTO `customer_table` (`id`, `c_name`, `email`, `password`, `Contact_no`, `Address`) VALUES
(19, 'Mayuraksha Sikdar', 'mayurakshasikdar@gmail.com', '12345', '8100132483', '41/1, Bagha Jatin Road, New Barrackpur'),
(20, 'Mayuraksha Sikdar', 'asf@gmail', '12345', '123456', 'Sodepur');

-- --------------------------------------------------------

--
-- Table structure for table `items_table`
--

CREATE TABLE `items_table` (
  `items_id` int(11) NOT NULL,
  `name` varchar(155) NOT NULL,
  `spicy` varchar(155) NOT NULL,
  `price` varchar(10) NOT NULL,
  `fpath` varchar(255) NOT NULL,
  `type_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `items_table`
--

INSERT INTO `items_table` (`items_id`, `name`, `spicy`, `price`, `fpath`, `type_id`) VALUES
(1, 'Kakori Kebabs [6pcs]', 'Low', '110', 'item_image/14678387starters_kakori-kebab-recipes.jpg', 7),
(2, 'Stir Fried Chilli Chicken', 'Medium', '120', 'item_image/18634816starters_Stir_Fried_Chilli_Chicken_4.jpg', 7),
(4, 'Chicken Satay [6pcs]', 'Low', '150', 'item_image/1198410starters_chicken-satay-41436947101.jpg', 7),
(5, 'Chicken Wings [6pcs]', 'Low', '120', 'item_image/51326126starters_ChickenWings_16030.jpg', 7),
(6, 'Tangri Kebabs [4pcs]', 'Low', '140', 'item_image/4032185starters_Tangri Kebab_175072062_center.jpg', 7),
(7, 'Fried Chicken [6pcs]', 'Low', '150', 'item_image/16931490starters_fried-chicken_41436947175.jpg', 7),
(8, 'Malai Tikka', 'Low', '150', 'item_image/42021170starters_CHICKEN-MALAI-TIKKA.jpg', 7),
(9, 'Reshmi Tikka [6pcs]', 'Low', '160', 'item_image/55310094starters_chicken-reshmi-kebab1.jpg', 7),
(10, 'Mutton Seekh Kabbab', 'Low', '40', 'item_image/30189008starters_mutton-seekh.jpg', 7),
(11, 'Chiken Seekh Kabbab', 'Low', '40', 'item_image/34437117starters_Chicken-Seekh-Kabab.jpg', 7),
(12, 'Chicken Cutlet [1pc]', 'Low', '30', 'item_image/97336980starters_chicken-cutlet.jpg', 7),
(13, 'Chicken Fingers [6pcs]', 'Low', '100', 'item_image/61937967starters_chicken-fingers.jpeg', 7),
(14, 'Chicken Butter Masala', 'Medium', '200', 'item_image/38412792maincourse_nonveg_chickenbuttermasala.jpeg', 8),
(15, 'Chicken Do Pyaza', 'Medium', '185', 'item_image/58516444maincourse_nonveg_chickendopyaza.jpeg', 8),
(16, 'Chicken Kasha', 'Medium', '190', 'item_image/60879731maincourse_nonveg_chickenkasha.jpeg', 8),
(17, 'Chicken Tikka Masala', 'Medium', '210', 'item_image/35633217maincourse_nonveg_chickentikkamasala.jpeg', 8),
(18, 'Hyderabadi Chicken', 'High', '210', 'item_image/7591623maincourse_nonveg_hyderabadichicken.jpeg', 8),
(19, 'Murgh Musallam', 'High', '280', 'item_image/93411813maincourse_nonveg_murghmusallam.jpeg', 8),
(20, 'Mutton Chaap', 'Medium', '250', 'item_image/94857818maincourse_nonveg_muttonchap.jpeg', 8),
(21, 'Mutton Do Pyaza', 'High', '290', 'item_image/26512401maincourse_nonveg_muttondopyaza.jpeg', 8),
(22, 'Mutton Handi', 'Medium', '240', 'item_image/99576282maincourse_nonveg_muttonhandi.jpeg', 8),
(23, 'Mutton Kasha', 'High', '230', 'item_image/77241053maincourse_nonveg_muttonkasha.jpeg', 8),
(24, 'Mutton Reshmi Butter Masala', 'High', '280', 'item_image/71725412maincourse_nonveg_muttonreshmibuttermasala.jpeg', 8),
(25, 'Mutton Tawa Masala', 'High', '250', 'item_image/58076133maincourse_nonveg_muttontawamasala.jpeg', 8),
(26, 'Capsicum Rice', 'Low', '80', 'item_image/33403111Rice_Capsicumrice.jpg', 9),
(27, 'Jeera Rice', 'Low', '100', 'item_image/4746340Rice_Jeerarice.jpg', 9),
(28, 'Mixed Fried Rice', 'Low', '140', 'item_image/99577136Rice_Mixedfriedrice.jpg', 9),
(29, 'Pulao', 'Low', '80', 'item_image/19038651Rice_Pulao.jpg', 9),
(30, 'Akki Roti', 'Low', '15', 'item_image/68964883Roti_Akkiroti.jpg', 9),
(31, 'Chapati', 'Low', '10', 'item_image/38334016Roti_Chapati.jpg', 9),
(32, 'Laccha Paratha', 'Low', '20', 'item_image/20431846Roti_lachha_paratha.jpg', 9),
(33, 'Plain Roti', 'Low', '10', 'item_image/33824102roti_plainroti.jpg', 9),
(34, 'Roomali Roti', 'Low', '20', 'item_image/29842801Roti_Roomaliroti.jpg', 9),
(35, 'Tandoori', 'Low', '25', 'item_image/16532304Roti_Tandoori.jpg', 9),
(36, 'Lemon Rice', 'Low', '120', 'item_image/77590269Rice_Lemonrice.jpg', 9),
(37, 'Cherry Lite', 'Low', '50', 'item_image/71017947dessert_cherrylite.jpg', 11),
(38, 'Choco Glass', 'Low', '60', 'item_image/18808260dessert_chocoglass.jpg', 11),
(39, 'Choco Glue', 'Low', '50', 'item_image/72318335dessert_chocoglue.jpg', 11),
(40, 'Cowch', 'Low', '80', 'item_image/94142975dessert_Cowch.jpg', 11),
(41, 'Cream Cake', 'Low', '70', 'item_image/97395209dessert_creamcake.jpg', 11),
(42, 'Croquant al Ananas', 'Low', '60', 'item_image/70905436dessert_croquant-a-l-ananas-caramelise-a-la-vanille-et-sorbet-coco.jpg', 11),
(43, 'Egg Cake', 'Low', '60', 'item_image/14521396dessert_eggcake.jpg', 11),
(44, 'Full Cream', 'Low', '60', 'item_image/78833744dessert_fullcream.jpg', 11),
(45, 'Lemon Curd Mousse', 'Low', '60', 'item_image/45889814dessert_Lemon-Curd-Mousse.jpg', 11),
(46, 'Piggy', 'Low', '70', 'item_image/27033436dessert_piggy.jpg', 11),
(47, 'Straw Bake', 'Low', '60', 'item_image/214489dessert_strawbake.jpg', 11),
(48, 'Sweet Esteem', 'Low', '60', 'item_image/36083151dessert_sweetesteem.jpg', 11),
(49, 'Celadon Bryan Esposito', 'Low', '60', 'item_image/60755238desserts-celadon-bryan-esposito-restaurant-hotel-westminster-paris.JPG', 11),
(50, 'Plain Rice', 'Low', '70', 'item_image/75139545Rice_plainrice.jpg', 9),
(51, 'Veg Fried Rice', 'Low', '100', 'item_image/86531218Rice_Vegfriedrice.jpg', 9),
(52, 'Butter Naan', 'Low', '30', 'item_image/63693284Roti_butternaan.jpg', 9),
(53, 'Plain Kulcha', 'Low', '25', 'item_image/55125790Roti_plainkulcha.jpeg', 9),
(54, 'Plain Naan', 'Low', '20', 'item_image/86063230Roti_plain-naan.jpg', 9),
(55, 'Aloo Biriyani', 'Medium', '120', 'item_image/62535243Rice_aloobiryani.jpg', 9),
(56, 'Chicken Biriyani', 'High', '175', 'item_image/81934539Rice_Chickenbiriyani.jpg', 9),
(57, 'Mutton Biriyani', 'High', '190', 'item_image/94698390Rice_Muttonbiryani.jpg', 9),
(58, 'Chicken Fried Rice', 'Medium', '110', 'item_image/75665419Rice_Chicken-Fried-rice.jpg', 9),
(59, 'Egg Biriyani', 'High', '140', 'item_image/7318748Rice_Egg-biriyani.jpg', 9),
(60, 'Egg Chicken Fried Rice', 'Medium', '120', 'item_image/46997243Rice_egg-chicken-fried.jpg', 9),
(61, 'Paneer Fried Rice', 'Low', '105', 'item_image/16710660Rice_paneer-fried-rice-recipe.jpg', 9),
(62, 'Pea Rice', 'Low', '90', 'item_image/12630433Rice_pea-rice.jpg', 9),
(63, 'Prawn Rice', 'Low', '110', 'item_image/4079933rice_prawnrice.jpg', 9),
(64, 'Reshmi Paneer', 'Medium', '120', 'item_image/72538529mainveg_reshmi-paneer.jpg', 10),
(65, 'Paneer Butter Masala', 'Medium', '135', 'item_image/91023447mainveg_paneer_butter-masala.jpg', 10),
(66, 'Kashmiri Dum Aloo', 'Medium', '100', 'item_image/55771617mainveg_kashmiri-dum-aloo.jpg', 10),
(67, 'Chana Masala', 'Medium', '105', 'item_image/26941519mainveg_chana-masala.jpg', 10),
(68, 'Chilli Paneer', 'Medium', '135', 'item_image/74721388mainveg_chili-paneer.jpg', 10),
(69, 'Malai Kofta', 'Low', '115', 'item_image/94990843mainveg_malai-kofta.jpg', 10),
(70, 'Matar Paneer', 'Medium', '135', 'item_image/47639658mainveg_matar-paneer.jpg', 10),
(71, 'Palak Paneer', 'Low', '125', 'item_image/18915603mainveg_palak-paneer.jpg', 10),
(72, 'Paneer Manchurian', 'Low', '135', 'item_image/21794864mainveg_paneer-manchurian.jpg', 10),
(73, 'Paneer Parcha Sabzi', 'Low', '130', 'item_image/66599785mainveg_Paneer-Parcha-Sabzi.jpg', 10),
(74, 'Kadai Paneer', 'Low', '130', 'item_image/13714575mainveg_kadai-paneer.jpg', 10),
(76, 'Spiced Potatoes-Peas', 'Low', '110', 'item_image/70908126mainveg_spiced-potatoes-and-peas.jpg', 10),
(77, 'Roasted Cauliflower Dhal', 'Low', '100', 'item_image/87289899mainveg_roasted-cauliflower-dhal.jpg', 10),
(78, 'Baigan Ka Bharta', 'Low', '85', 'item_image/11769364mainveg_baigan-ka-bharta.jpg', 10),
(79, 'Enchiladas', 'Low', '135', 'item_image/70348186mainveg_enchiladas.jpg', 10),
(80, 'Veg Thali', 'Low', '150', 'item_image/61534336mainveg_thali.jpg', 10);

-- --------------------------------------------------------

--
-- Table structure for table `order_table`
--

CREATE TABLE `order_table` (
  `order_id` int(11) NOT NULL,
  `quantity` int(5) NOT NULL,
  `items_id` int(11) NOT NULL,
  `id` int(11) NOT NULL,
  `sub_id` int(11) NOT NULL,
  `contact_no` varchar(10) NOT NULL,
  `delivery_address` varchar(255) NOT NULL,
  `order_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `order_table`
--

INSERT INTO `order_table` (`order_id`, `quantity`, `items_id`, `id`, `sub_id`, `contact_no`, `delivery_address`, `order_date`) VALUES
(1244, 2, 13, 19, 19, '8100132482', 'Station Road, Madhyamgram', '2018-11-03'),
(1245, 1, 8, 19, 1, '8100132482', 'Station Road, Madhyamgram', '2018-11-03'),
(1246, 1, 1, 19, 1, '8100132483', '41/1, Bagha Jatin Road, New Barrackpur', '2018-11-04'),
(1247, 1, 37, 19, 1, '8100132483', '41/1, Bagha Jatin Road, New Barrackpur', '2018-11-04');

-- --------------------------------------------------------

--
-- Table structure for table `sub_area_table`
--

CREATE TABLE `sub_area_table` (
  `sub_id` int(11) NOT NULL,
  `area_id` int(11) NOT NULL,
  `sub_name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sub_area_table`
--

INSERT INTO `sub_area_table` (`sub_id`, `area_id`, `sub_name`) VALUES
(1, 123479, 'Station'),
(2, 123479, 'Boys School'),
(3, 123479, 'Police Station'),
(4, 123480, 'Bridge'),
(5, 123480, 'Chowmatha'),
(6, 123480, 'Station'),
(7, 123480, 'Capital Electronics'),
(8, 123482, 'Station'),
(9, 123482, 'BR Singh'),
(10, 123482, 'DRM Building'),
(11, 123482, 'Court'),
(12, 123482, 'Taxi Stand'),
(13, 123482, 'Big Bazar'),
(14, 123483, 'Metropolitan'),
(15, 123483, 'Alochaya'),
(16, 123483, 'CIT More'),
(17, 123480, 'Choumatha'),
(18, 123480, 'City Life'),
(19, 123480, 'Bosunagar'),
(20, 123479, 'Municipality'),
(21, 123482, 'NRS Hospital'),
(22, 123482, 'Maulali'),
(23, 123482, 'Prachi Cinema Hall');

-- --------------------------------------------------------

--
-- Table structure for table `type_table`
--

CREATE TABLE `type_table` (
  `type_id` int(11) NOT NULL,
  `type_name` varchar(155) NOT NULL,
  `category` varchar(155) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `type_table`
--

INSERT INTO `type_table` (`type_id`, `type_name`, `category`) VALUES
(7, 'Non-Veg', 'Starters'),
(8, 'Non-Veg', 'Main Course'),
(9, 'Veg', 'Rice-Roti'),
(10, 'Veg', 'Main Course'),
(11, 'Veg', 'Dessert');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin_table`
--
ALTER TABLE `admin_table`
  ADD PRIMARY KEY (`aid`);

--
-- Indexes for table `area_table`
--
ALTER TABLE `area_table`
  ADD PRIMARY KEY (`area_id`);

--
-- Indexes for table `cart_table`
--
ALTER TABLE `cart_table`
  ADD PRIMARY KEY (`cart_id`),
  ADD KEY `id` (`id`),
  ADD KEY `items_id` (`items_id`);

--
-- Indexes for table `customer_table`
--
ALTER TABLE `customer_table`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `items_table`
--
ALTER TABLE `items_table`
  ADD PRIMARY KEY (`items_id`),
  ADD KEY `type_id` (`type_id`);

--
-- Indexes for table `order_table`
--
ALTER TABLE `order_table`
  ADD PRIMARY KEY (`order_id`),
  ADD KEY `items_id` (`items_id`,`id`,`sub_id`),
  ADD KEY `id` (`id`),
  ADD KEY `sub_id` (`sub_id`);

--
-- Indexes for table `sub_area_table`
--
ALTER TABLE `sub_area_table`
  ADD PRIMARY KEY (`sub_id`),
  ADD KEY `area_id` (`area_id`);

--
-- Indexes for table `type_table`
--
ALTER TABLE `type_table`
  ADD PRIMARY KEY (`type_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin_table`
--
ALTER TABLE `admin_table`
  MODIFY `aid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `area_table`
--
ALTER TABLE `area_table`
  MODIFY `area_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=123484;

--
-- AUTO_INCREMENT for table `cart_table`
--
ALTER TABLE `cart_table`
  MODIFY `cart_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `customer_table`
--
ALTER TABLE `customer_table`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `items_table`
--
ALTER TABLE `items_table`
  MODIFY `items_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=81;

--
-- AUTO_INCREMENT for table `order_table`
--
ALTER TABLE `order_table`
  MODIFY `order_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1248;

--
-- AUTO_INCREMENT for table `sub_area_table`
--
ALTER TABLE `sub_area_table`
  MODIFY `sub_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `type_table`
--
ALTER TABLE `type_table`
  MODIFY `type_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `cart_table`
--
ALTER TABLE `cart_table`
  ADD CONSTRAINT `cart_table_ibfk_1` FOREIGN KEY (`id`) REFERENCES `customer_table` (`id`),
  ADD CONSTRAINT `cart_table_ibfk_2` FOREIGN KEY (`items_id`) REFERENCES `items_table` (`items_id`);

--
-- Constraints for table `items_table`
--
ALTER TABLE `items_table`
  ADD CONSTRAINT `items_table_ibfk_1` FOREIGN KEY (`type_id`) REFERENCES `type_table` (`type_id`);

--
-- Constraints for table `sub_area_table`
--
ALTER TABLE `sub_area_table`
  ADD CONSTRAINT `sub_area_table_ibfk_1` FOREIGN KEY (`area_id`) REFERENCES `area_table` (`area_id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

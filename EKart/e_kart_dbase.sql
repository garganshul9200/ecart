--
Table structure for table `admin_details`
--

CREATE TABLE `admin_details` (
`id` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;


-- 
Dumping data for table `admin_details`
--

INSERT INTO `admin_details` (`id`, `username`, `password`) VALUES
(1, 'admin', 'admin1234');

-- --------------------------------------------------------

--
-- 

Table structure for table `placed_order`
--

CREATE TABLE `placed_order` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `phone` varchar(100) NOT NULL,
  `address1` varchar(100) NOT NULL,
  `address2` varchar(100) NOT NULL,
  `city` varchar(100) NOT NULL,
  `state` varchar(100) NOT NULL,
  `product_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- 
Dumping data for table `placed_order`
--

INSERT INTO `placed_order` (`id`, `name`, `phone`, `address1`, `address2`, `city`, `state`, `product_id`) VALUES
(2, 'ayush', '9997863298', 'E-14', 'sector 55', 'noida', 'uttarakhand', 20),
(3, 'ayush', '9997863298', 'E-14', 'sector 55', 'noida', 'uttarakhand', 20),
(4, 'ayush sachdev', '9997863298', 'sachdeva ready made center, NDT market opp. govind vallabh school', 's', 'ssss', 'ssddds', 20),
(5, 'ayush sachdev', '9997863298', 'sachdeva ready made center, NDT market opp. govind vallabh school', 's', 'ssss', 'ssddds', 20),
(6, 'asach', '9720588990', 'NSEZ phase 2', 'proprofs.com', 'Noida', 'UP', 21);

-- --------------------------------------------------------

--
-- 

Table structure for table `product_catalogue`
--

CREATE TABLE `product_catalogue` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `slug` varchar(100) NOT NULL,
  `price` varchar(100) NOT NULL,
  `category` int(11) NOT NULL,
  `image` varchar(100) NOT NULL,
  `type` varchar(100) NOT NULL,
  `quantity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- 
Dumping data for table `product_catalogue`
--

INSERT INTO `product_catalogue` (`id`, `name`, `slug`, `price`, `category`, `image`, `type`, `quantity`) VALUES
(20, 'roadster shirt', 'roadster_shirt', '1200', 10, 'shirts.jpg', 'men', 4),
(21, 'round neck tshirt ', 'roadster_shirt1', '799', 11, 'tshirt.jpg', 'men', 5);

-- --------------------------------------------------------

--
-- 

Table structure for table `product_category`
--

CREATE TABLE `product_category` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `slug` varchar(100) NOT NULL,
  `cat_image` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- 
Dumping data for table `product_category`
--

INSERT INTO `product_category` (`id`, `name`, `slug`, `cat_image`) VALUES
(10, 'shirts', 'shirts', 'shirts.jpg'),
(11, 't-shirts', 't_shirts', 'tshirt.jpg');

--
-- Indexes for dumped tables
--

--
-- 

Indexes for table `admin_details`
--
ALTER TABLE `admin_details`
  ADD PRIMARY KEY (`id`);

--
-- 
Indexes for table `placed_order`
--
ALTER TABLE `placed_order`
  ADD PRIMARY KEY (`id`);

--
-- 
Indexes for table `product_catalogue`
--
ALTER TABLE `product_catalogue`
  ADD PRIMARY KEY (`id`);

--
-- 
Indexes for table `product_category`
--
ALTER TABLE `product_category`
  ADD PRIMARY KEY (`id`);

--
-- 

AUTO_INCREMENT for dumped tables
--

--
-- 
AUTO_INCREMENT for table `admin_details`
--


ALTER TABLE `admin_details`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;


AUTO_INCREMENT for table `placed_order`
--


ALTER TABLE `placed_order`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

AUTO_INCREMENT for table `product_catalogue`
-

ALTER TABLE `product_catalogue`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;


AUTO_INCREMENT for table `product_category`

ALTER TABLE `product_category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

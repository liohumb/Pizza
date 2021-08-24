--
-- Table structure for table `tblproduct`
--

CREATE TABLE `tblproduct` (
                              `id` int(8) NOT NULL,
                              `name` varchar(255) NOT NULL,
                              `code` varchar(255) NOT NULL,
                              `image` text NOT NULL,
                              `price` double(10,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblproduct`
--

INSERT INTO `tblproduct` (`id`, `name`, `code`, `image`, `price`) VALUES
                                                                      (1, 'FinePix Pro2 3D Camera', '3DcAM01', 'assets/img/pizza1.jpg', 1500.00),
                                                                      (2, 'EXP Portable Hard Drive', 'USB02', 'assets/img/pizza2.jpg', 800.00),
                                                                      (3, 'Luxury Ultra thin Wrist Watch', 'wristWear03', 'assets/img/pizza3.jpg', 300.00),
                                                                      (4, 'XP 1155 Intel Core Laptop', 'LPN45', 'assets/img/pizza4.jpg', 800.00);

--
-- Indexes for table `tblproduct`
--
ALTER TABLE `tblproduct`
    ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `product_code` (`code`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tblproduct`
--
ALTER TABLE `tblproduct`
    MODIFY `id` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;
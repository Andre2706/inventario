CREATE TABLE IF NOT EXISTS `user_details` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  `mobile` bigint(10) NOT NULL,
  `country` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
);

--
-- Dumping data for table `user_details`
--

INSERT INTO `user_details` (`id`, `name`, `mobile`, `country`) VALUES
(1, 'Aritra Samanta', 9999999991, 'India'),
(2, 'Rina Saha', 9999999992, 'Australia'),
(3, 'Anil Das', 9999999993, 'London'),
(4, 'Akash Samanta', 9999999994, 'America'),
(5, 'Niharika Roy', 9999999995, 'Bulgeria');

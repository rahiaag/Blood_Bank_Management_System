-- Table structure for table `admin`

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `uname` varchar(20) NOT NULL,
  `pass` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `uname`, `pass`) VALUES
(1, 'hospital', 'hospital');

-- --------------------------------------------------------

--
-- Table structure for table `blood`
--

CREATE TABLE `request_blood` (
  `id` int(11) NOT NULL,
  `fname` text NOT NULL,
  `lname` text NOT NULL,
  `address` varchar(30) NOT NULL,
  `contact` varchar(20) NOT NULL,
  `gender` text NOT NULL,
  `blood_group` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `request_blood`
--

INSERT INTO `request_blood` (`id`, `fname`, `lname`, `address`, `contact`, `gender`, `blood_group`) VALUES
(1, 'Rahi', 'Agarwal', 'Mumbai', '123456789', 'Male', 'A+');

-- --------------------------------------------------------

--
-- Table structure for table `available_blood`
--

CREATE TABLE `available_blood` (
  `id` int(11) NOT NULL,
  `fname` text NOT NULL,
  `lname` text NOT NULL,
  `address` varchar(30) NOT NULL,
  `contact` varchar(20) NOT NULL,
  `gender` text NOT NULL,
  `blood_group` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `available_blood`
--

INSERT INTO `available_blood` (`id`, `fname`, `lname`, `address`, `contact`, `gender`, `blood_group`)VALUES
(1, 'Nitin', 'Kumar', 'Noida', '987654321', 'Male', 'B+');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `u_name` varchar(20) NOT NULL,
  `u_pass` varchar(20) NOT NULL,
  `u_blood` varchar(20) NOT NULL
  
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `u_name`, `u_pass`)VALUES
(1, 'rahi', '12345678');


--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `request_blood`
--
ALTER TABLE `request_blood`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `request_blood`
--
ALTER TABLE `request_blood`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;


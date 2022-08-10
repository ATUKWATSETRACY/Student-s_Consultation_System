
CREATE TABLE `announcements` (
  `id` int(11) NOT NULL,
  `title` varchar(45) DEFAULT NULL,
  `body` varchar(45) DEFAULT NULL,
  `users_id` int(11) NOT NULL
);

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `id` int(11) NOT NULL,
  `post-comments` varchar(100) DEFAULT NULL,
  `posts_id` int(11) NOT NULL,
  `users_id` int(11) NOT NULL
);

-- --------------------------------------------------------

--
-- Table structure for table `complaints`
--

CREATE TABLE `complaints` (
  `id` int(11) NOT NULL,
  `title` varchar(45) DEFAULT NULL,
  `body` varchar(45) DEFAULT NULL,
  `recipient` varchar(45) DEFAULT NULL,
  `users_id` int(11) NOT NULL
);

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `id` int(11) NOT NULL,
  `feedback-body` varchar(100) DEFAULT NULL,
  `feedback-title` varchar(100) DEFAULT NULL,
  `complaints_id` int(11) NOT NULL
);

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `id` int(11) NOT NULL,
  `email` varchar(100) DEFAULT NULL,
  `password` varchar(100) DEFAULT NULL,
  `users_id` int(11) NOT NULL
);

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`id`, `email`, `password`, `users_id`) VALUES
(1, '2018bit020@std.must.ac.ug', 'll', 4),
(2, 'sir@must.ac.ug', 'd41d8cd98f00b204e9800998ecf8427e', 5);

-- --------------------------------------------------------

--
-- Table structure for table `login_logs`
--

CREATE TABLE `login_logs` (
  `id` int(11) NOT NULL,
  `names` varchar(256) NOT NULL,
  `uni` varchar(256) NOT NULL,
  `whenn` varchar(100) NOT NULL
);

--
-- Dumping data for table `login_logs`
--

INSERT INTO `login_logs` (`id`, `names`, `uni`, `whenn`) VALUES
(1, 'code maestro', '2018bit020@std.must.ac.ug', 'Sat-Nov-2021 1636223329'),
(2, 'code maestro', '2018bit020@std.must.ac.ug', 'Sun-Nov-2021 1636266074'),
(3, 'code maestro', '2018bit020@std.must.ac.ug', 'Sun-Nov-2021 1636266249'),
(4, 'code maestro', '2018bit020@std.must.ac.ug', '2021-11-07 08:04:59'),
(5, 'code maestro', '2018bit020@std.must.ac.ug', '2021-11-07 08:05:29'),
(6, 'code maestro', '2018bit020@std.must.ac.ug', '2021-11-07 10:22:46'),
(7, 'code maestro', '2018bit020@std.must.ac.ug', '2021-11-07 10:50:09');

-- --------------------------------------------------------

--
-- Table structure for table `notifications`
--

CREATE TABLE `notifications` (
  `id` int(11) NOT NULL,
  `users_id` int(11) NOT NULL,
  `type` varchar(100) NOT NULL
);

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `id` int(11) NOT NULL,
  `body` varchar(45) DEFAULT NULL,
  `image_url` varchar(45) DEFAULT NULL,
  `users_id` int(11) NOT NULL
);

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`id`, `body`, `image_url`, `users_id`) VALUES
(1, 'asdasd', 'redbull.jpg', 0);

-- --------------------------------------------------------

--
-- Table structure for table `role`
--

CREATE TABLE `role` (
  `id` int(11) NOT NULL,
  `role` int(11) DEFAULT NULL,
  `users_id` int(11) NOT NULL
);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `fname` varchar(45) DEFAULT NULL,
  `lname` varchar(45) DEFAULT NULL
);

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `fname`, `lname`) VALUES
(4, 'code', 'maestro'),
(5, '', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `announcements`
--
ALTER TABLE `announcements`
  ADD PRIMARY KEY (`id`,`users_id`);

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`id`,`posts_id`,`users_id`);

--
-- Indexes for table `complaints`
--
ALTER TABLE `complaints`
  ADD PRIMARY KEY (`id`,`users_id`);

--
-- Indexes for table `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`id`,`complaints_id`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`id`,`users_id`);

--
-- Indexes for table `login_logs`
--
ALTER TABLE `login_logs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `notifications`
--
ALTER TABLE `notifications`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`,`users_id`);

--
-- Indexes for table `role`
--
ALTER TABLE `role`
  ADD PRIMARY KEY (`id`,`users_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `announcements`
--
ALTER TABLE `announcements`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `complaints`
--
ALTER TABLE `complaints`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `feedback`
--
ALTER TABLE `feedback`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `login_logs`
--
ALTER TABLE `login_logs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `notifications`
--
ALTER TABLE `notifications`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `role`
--
ALTER TABLE `role`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

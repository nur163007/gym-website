-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 18, 2021 at 01:17 PM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 7.4.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mygym`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `admin_id` int(10) NOT NULL,
  `full_name` varchar(100) NOT NULL,
  `admin_email` varchar(30) NOT NULL,
  `admin_pass` varchar(20) NOT NULL,
  `admin_type` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`admin_id`, `full_name`, `admin_email`, `admin_pass`, `admin_type`) VALUES
(2, 'Mehedi', 'mehedihr1990@gmail.com', '1234', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` int(11) NOT NULL,
  `order_id` int(15) NOT NULL,
  `user_id` tinyint(6) NOT NULL,
  `shop_id` tinyint(6) NOT NULL,
  `quantity` int(10) NOT NULL,
  `total_amount` double(50,2) NOT NULL,
  `status` varchar(30) COLLATE utf8mb4_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_bin;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `order_id`, `user_id`, `shop_id`, `quantity`, `total_amount`, `status`) VALUES
(10, 887949, 10, 2, 1, 30000.00, 'Confirm'),
(11, 887949, 10, 4, 1, 55000.00, 'Confirm'),
(12, 887949, 10, 5, 1, 65000.00, 'Confirm');

-- --------------------------------------------------------

--
-- Table structure for table `package`
--

CREATE TABLE `package` (
  `package_id` int(11) NOT NULL,
  `package_name` varchar(100) COLLATE utf8mb4_bin NOT NULL,
  `package_image` varchar(170) COLLATE utf8mb4_bin NOT NULL,
  `package_details` varchar(2000) COLLATE utf8mb4_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_bin;

--
-- Dumping data for table `package`
--

INSERT INTO `package` (`package_id`, `package_name`, `package_image`, `package_details`) VALUES
(3, 'muscle building training', 'class2.png', 'it is so easy workout'),
(4, 'body building training', 'class1.jpg', 'hi'),
(5, 'fat loss training', '5123967968_a7f2fe29cb_b.jpg.crdownload.jpg', 'ssonsood'),
(6, 'fat loss training', 'active-aerobics-beautiful-903171.jpg', 'ssososd'),
(7, 'fat loss training', 'compress-gettyimages-962529334-2048x2048.jpg', 'sjfdfjoied'),
(8, 'fat loss training', 'compress-photo-1546483875-ad9014c88eba.jpg', 'sosdjodnsd'),
(9, 'body building training', '177-1772734_fitness-wallpaper-hd-1-facebook-fitness-cover-photo.jpg', 'ssdfsd'),
(10, 'body building training', 'thumb-350-805233.jpg', 'ssdgs'),
(11, 'body building training', 'compress-photo-1561214078-f3247647fc5e.jpg', 'sgfgds'),
(12, 'muscle building training', 'Eaasy Fitness Inter.jpg', 'gsfsd'),
(13, 'muscle building training', 'Free-HD-Fitness-Wallpapers-For-Desktop.jpg', 'dgsfa'),
(14, 'muscle building training', 'fitness-working-out-facebook-cover.jpg', 'ssfsae'),
(15, 'fat loss training', 'hero-800x506.jpg', 'dgdfgrfvdgdfvdxzdxefdbgcffdbdf'),
(16, 'body building training', 'Best Training.jpg', 'gfdsgdsxcsdgrfdsgref');

-- --------------------------------------------------------

--
-- Table structure for table `program`
--

CREATE TABLE `program` (
  `program_id` int(11) NOT NULL,
  `program_name` varchar(200) COLLATE utf8mb4_bin NOT NULL,
  `short_description` text COLLATE utf8mb4_bin NOT NULL,
  `long_description` longtext COLLATE utf8mb4_bin NOT NULL,
  `image` varchar(150) COLLATE utf8mb4_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_bin;

--
-- Dumping data for table `program`
--

INSERT INTO `program` (`program_id`, `program_name`, `short_description`, `long_description`, `image`) VALUES
(1, 'Corporate Membership Program', 'A Sedentary Lifestyle And Elevated Stress Levels Are Not Uncommon In Corporate Executives. \r\nInsufficient Physical Activity leads......', 'Why Physical Fitness Matters\r\n\r\nA Sedentary Lifestyle And Elevated Stress Levels Are Not Uncommon In Corporate Executives. \r\nInsufficient Physical Activity Leads To A Decline In Energy, Stamina And Health, Which Adversely Affects Productivity And Performance. \r\n\r\nAside From Reducing The Risk Of Heart Disease, High Blood Pressure, High Cholesterol, Stroke, \r\nType 2 Diabetes And Certain Types Of Cancer, Regular Exercise Keeps You Energised And Helps You\r\nCarry Out Your Daily Activities More Efficiently. \r\n\r\nWhy Corporate Wellness Programs\r\n\r\nCorporate Wellness Programs Not Only Serve To Improve Output, But Also To Enhance Employee Loyalty.\r\n They Help Strengthen Team Spirit, Boost Confidence And Workforce Morale.\r\n\r\nWe Understand Both The Toll Corporate Lifestyle Can Take On Health, And \r\nThe Benefits Of Establishing A Personal Fitness Regime. With The Ultimate Goal Of Spreading Fitness Through Well-Rounded Organisations, \r\nWe Have Developed A Range Of Solutions And Services To Meet The Fitness Requirements Of Corporate Employees.\r\n', 'corporate membership.jpg'),
(2, 'Personal Training Program ', 'The Eaasy Fitness Institute EFI is Bangladesh first International Fitness Management Institute.\r\n It offers certificate courses in Fitness Management, Personal Training.....', 'PERSONAL TRAINING PROGRAM\r\nThe Eaasy Fitness Institute EFI is Bangladesh first International Fitness Management Institute.\r\n It offers certificate courses in Fitness Management, Personal Training and Spinning Instructing. \r\nIt covers a range of subjects to comprehensively address and ensure the best international brand practices in Bangladesh. \r\nThe 3 month courses are monitored by qualified personnel of Eaasy Fitness Gym, and also hosts guest lectures by the biggest names\r\n in the international fitness industry with guaranteed internships and a firsthand opportunity to experience fitness training \r\nfrom the world leaders in it. The EFI offers the most exciting and up-to-date education pathway to gain industry leading qualifications as\r\n well as ongoing training in all aspects of the fitness industry.\r\n\r\nBENEFITS\r\nYou can earn anything between BDT 8000 – BDT 50000 depending on what you are doing.\r\nThe job is flexible. You can work in the gym or freelance outside the gym.\r\nThe pros of working within a gym is you have immediate access to hundreds of potential clients,\r\n access to top of the range equipment and, gym dependant, you will have the support of advertising.\r\nIf you are working outside the gym, you are not restricted to one location, it can be extremely convenient \r\nfor your client to train in the comfort of their own home and the hours you work are entirely yours to decide.\r\nAnd mainly you get Job satisfaction You can have a positive impact on people’s lives. You can help them increase strength, \r\nimprove appearance or become a healthier person, whatever it may be you are there to help.\r\n', 'personal traineing.jpg'),
(3, 'Quick Results Program', 'It Involves Mainly Weight Bearing Activities Targeted At Core Muscles Of The Abdomen And Lower Back.\r\nFunctional Training Attempts To Adapt.....', 'Quick Result Programme\r\nIt Involves Mainly Weight Bearing Activities Targeted At Core Muscles Of The Abdomen And Lower Back.\r\nFunctional Training Attempts To Adapt Or Develop Exercises Which Allow Individuals To Perform \r\nThe Activities Of Daily Life More Easily And Without Injuries\r\n\r\nFeatures Of Quick Result Program Are:\r\n\r\nFunctional Training: It involves mainly weight bearing activities targeted at core muscles of the abdomen and lower back. \r\nFunctional training attempts to adapt or develop exercises which allow individuals to perform the activities of daily life more easily and \r\nwithout injuries\r\nBenefits of Functional Training\r\n\r\nProlongs life\r\nImproves mood\r\nAchieves metabolic balance\r\nPromotes sustainable weight loss\r\nStrengthens heart and blood vessels\r\nIncreases bone density\r\nDecreases risk for chronic conditions\r\nCardiovascular Training: The Aerobics exercise may include Spinning / Aerobics / Swimming / Pilates/ Rock climbing / Kick boxing as per \r\nthe requirement with the guidance of functional trainer.\r\nAerobic Exercises Are Performed As A Group. A Qualified Instructor Who Will Lead You Through A Variety Of Structured Movements \r\nThat Will Raise Your Heart Rate And Get Blood And Oxygen Flowing More Quickly Around Your Body. The Important Idea Behind Aerobic Exercise \r\nToday, Is To Get Up And Get Moving!! A Good Aerobics Class Will Benefit Your Body In Many Ways. While The Workout Will Help You Burn Calories \r\nAnd Reduce Your Body Fat.\r\n\r\n3. Nutrition support: The Food You Eat Becomes The Blood Running Through Your Veins. \r\nA Balanced Low Calorie Diet Is Essential To Get The Results Fast. The In-House Dietician Will Prescribe A Diet Plan As Per \r\nThe Lifestyle And Eating Pattern. The In-House Dietician Keeps A Count Of Calories Consumed And Interacts With The Members On Regular Basis.\r\n It’s A Complete Assistance Even When Traveling.\r\n\r\nBlood Test:\r\nComplete Blood Count\r\nFasting Blood Sugar\r\nThyroid Function Test\r\nLipid Profile\r\nIn Body Assessment: The test is repeated every 15 days. Since body weight alone is not a clear indicator of good health, \r\nit provides a break up of your body weight in terms of fat, muscle and hydration status. Thus it becomes easy to identify areas for \r\nimprovement.\r\nPhysiotherapist: Available on appointment basis.\r\n', 'quick result.jpg'),
(5, 'Wellness Program', 'Eaasy Fitness Gym has been the authority in fitness since 1965 dating back to the original Eaasy Fitness Gym in Venice, California. \r\nIt was the place for serious fitness.Opened long before the modern day health club existed, the original Eaasy Fitness.....', 'Eaasy Fitness GYM INTERNATIONAL\r\n\r\nEaasy Fitness Gym has been the authority in fitness since 1965 dating back to the original Eaasy Fitness Gym in Venice, California. \r\nIt was the place for serious fitness.Opened long before the modern day health club existed, the original Eaasy Fitness Gym featured \r\nhomemade equipment and a dedication to getting results. It was an instant hit. Eaasy Fitness quickly became known as \r\n“The Mecca of Bodybuilding.” In 1977, Eaasy Fitness Gym received international attention when it was featured in the movie Pumping Iron that \r\nstarred Arnold Schwarzenegger and Lou Ferrigno.From that first gym in Venice,Eaasy Fitness Gym has become the largest co-ed gym chain in \r\nthe world with over 701+ facilities in 30 countries.\r\n\r\nToday, Eaasy Fitness Gym has expanded its fitness profile to offer all of the latest equipment and services, including group exercise, \r\npersonal training, cardiovascular equipment, spinning, and yoga, while maintaining its core weight lifting tradition.Eaasy Fitness Gym has become \r\nthe preferred gym of celebrities, athletes, bodybuilders, the military and fitness enthusiasts all over the world. Most importantly, \r\nEaasy Fitness Gym continues to change lives by helping people achieve their individual potential..\r\n\r\nEaasy Fitness In Bangladesh\r\n\r\nNow completing 67 years. We Keep Getting Stronger\r\n\r\nThe Bangladesh chapter of Eaasy Fitness  Gym started in 2019, when the first Eaasy Fitness  Gym Bangladesh branch was set up in Dhaka. \r\nWith over 450+ Facilities across 30 countries. It has cut out for itself 102 gyms in Bangladesh with another 5 under construction and \r\nready to start in this year. With multiple awards for excellence under its belt including 2 awards from the Lions Club for the \r\n“Best Fitness Chain”, an award from the Images Beauty & Wellness for the Most admired fitness chain of the year”, an award from Franchise Bangladesh, \r\n8 awards from Eaasy Fitness  Gym International, making it avery eventful 12 years in the growth of the business.\r\n Eaasy Fitness  Gym Bangladesh has bagged the most prestigious Economic Times ET award for ‘Excellence in Marketing 2019’ & ‘Excellence in Customer Service 2020’.\r\nEaasy Fitness Gym Bangladesh is acknowledged for its unrivalled success in providing the finest equipment and fitness knowledge available to help \r\nits members achieve their individual potential. It follows a globally proven fitness training module with state-of-the-art infrastructure \r\nand delivery methodology and continuous up gradation through training programs. With certified trainers and nutritional counseling, \r\nEaasy Fitness Gym provides a comprehensive approach to the health and well-being of its member. Catering to famous celebrities including film & \r\ntelevision personalities, sports persons & Corporate honchos, Eaasy Fitness  Gym lives up to its reputation to give results. Whether your goal is \r\nto burn fat, tone or add muscle, build strength, increase flexibility or improve your cardiovascular health, only Eaasy Fitness  Gym has the \r\natmosphere and experience you need.\r\n\r\nEaasy Fitness GYM –WELLNESS PROGRAM\r\n\r\nA PROVEN MANAGEMENT TOOL TO IMPROVE EMPLOYEE MOTIVATION, DEDICATION AND PRODUCTIVITY. EMPLOYEES ARE THE KEY TO AN ORGANIZATION’S SUCCESS.\r\n STUDIES INDICATE, ORGANISATIONS AROUND THE WORLD GRAPPLE TO DEAL WITH PERFORMANCE LOWS BROUGHT ON BY EMPLOYEE’S DROP IN PERFORMANCE.\r\n OF THE FACTORS IDENTIFIED FOR THESE PERFORMANCE DROPS, LACK OF WELLNESS HAS BEEN IDENTIFIED AS THE LEADING CAUSATIVE FACTOR. \r\nLETHARGIC EMPLOYEES, UNWELL EMPLOYEES, ABSENT EMPLOYEES – WHAT EVERY ORGANIZATION AROUND THE WORLD WOULD DREAD TO BEGIN ITS DAY WITH. \r\nWE’RE ALL TOO FAMILIAR WITH EMPLOYEES WHO WALK IN WITH COMMON COLD AFFLICTIONS, BACK PAIN OR JUST THE LACK OF ENERGY EVEN AT THE BEGINNING \r\nOF THE DAY. ALTERNATIVELY, CONSIDER THE EXECUTIVES WHO LOOK AT YOU WITH A BLANK EXPRESSION IN AN ALL IMPORTANT MEETING. WELLNESS IS AN OPTIMAL\r\n STATE OF THREE ELEMENTS: MIND, BODY AND SPIRIT. IN THIS STATE, AN INDIVIDUAL IS PRIMED TO GIVE HIS OR HER BEST IN EVERY SPHERE OF LIFE.\r\n\r\nEMPLOYER’S BENEFIT\r\nFeeling good or having a good wellness quotient is indicative of better performance at work.\r\nExercise has a positive influence on the feeling of employees’ wellness.\r\nExercise reduces lethargy, bad health and absenteeism in employees.\r\nExercise increases energy levels, thereby performance at work and motivation of employees. Healthy and positive employees provide a healthy \r\nand competitive environment at work thereby ensuring superior performance.\r\n\r\nWHY Eaasy Fitness GYM\r\n\r\nMecca of Bodybuilding that laid the foundation of the modern fitness revolution.\r\nWorld’s leading chain of Health Centers with 450+ outlets across 30 countries.\r\nState of the art equipment, knowledge of training techniques and nutritional concepts that are unrivaled in the industry.\r\nCertified trainers that ensure that the fitness goal is achieved in a scientific and correct manner. If required, even by \r\nproviding personalized training.\r\nRight atmosphere to train and excel in the quest to achieve the fitness goal.\r\nTravel Card provides training convenience to those employees that are constantly moving between major metros.\r\n\r\nTHE PROGRAM\r\nCardiovascular Training.\r\nStrength and Circuit Training.\r\nFree Weight Training.\r\nMassage and Steam.\r\nNutritional Counseling (Weight Loss / Weight Gain).\r\nGroup Training (Aerobics, Kick Boxing, Power Yoga and Swimming, etc.).\r\nOnsite and Offsite Programs.\r\n\r\nWE HAVE AMAZING PROMOS EVERY MONTH. IF YOU ARE INTERESTED IN TO KNOW WHAT THIS MONTH’S PROMO IS FILL UP YOUR DETAILS OVER HERE.\r\nJOIN NOW', 'welness prog.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `service`
--

CREATE TABLE `service` (
  `service_id` int(11) NOT NULL,
  `service_name` varchar(255) COLLATE utf8mb4_bin NOT NULL,
  `short_description` text COLLATE utf8mb4_bin NOT NULL,
  `equipment` varchar(255) COLLATE utf8mb4_bin NOT NULL,
  `image` varchar(200) COLLATE utf8mb4_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_bin;

--
-- Dumping data for table `service`
--

INSERT INTO `service` (`service_id`, `service_name`, `short_description`, `equipment`, `image`) VALUES
(1, 'Cardiovascular Equipment', 'Many different cardio machines available, it can also be difficult to understand which ones are best for shedding those holiday pounds— especially as a beginner. Here’s a breakdown of some of the most effective cardio machines for burning calories. ', 'Treadmill. The staple of many gym routines', 'treadmil.jpg'),
(2, 'Cardiovascular Equipment', 'Many different cardio machines available, it can also be difficult to understand which ones are best for shedding those holiday pounds— especially as a beginner. Here’s a breakdown of some of the most effective cardio machines for burning calories. ', 'Rowing machine. MORE ON HEALTH & FITNESS', 'Rowing mechine.jpg'),
(3, 'Cardiovascular Equipment', 'Many different cardio machines available, it can also be difficult to understand which ones are best for shedding those holiday pounds— especially as a beginner. Here’s a breakdown of some of the most effective cardio machines for burning calories. ', 'Indoor cycling', 'Pooboo-Indoor-Exercise-Bike.jpg'),
(4, 'Cardiovascular Equipment', 'Many different cardio machines available, it can also be difficult to understand which ones are best for shedding those holiday pounds— especially as a beginner. Here’s a breakdown of some of the most effective cardio machines for burning calories. ', 'Stair climber', 'Stair climber.jpg'),
(6, 'Strength Training Equipment', 'Many different Strength Training Equipment machines available, it can also be difficult to understand which ones are best for shedding those holiday pounds— especially as a beginner. Here’s a breakdown of some of the most effective Strength Training Equipment machines.', 'abdominal Bench', 'abdominal-Bench.jpg'),
(7, 'Strength Training Equipment', 'Many different Strength Training Equipment machines available, it can also be difficult to understand which ones are best for shedding those holiday pounds— especially as a beginner. Here’s a breakdown of some of the most effective Strength Training Equipment machines.', 'Barbells rods', 'Barbells-rods.jpg'),
(8, 'Group Fitness Class', 'Yoga is our most commonly requested group fitness class, and most people are already familiar with the concept of what Yoga is about.', 'Yoga', 'Yoga-size.jpg'),
(9, 'Group Fitness Class', 'Yoga is our most commonly requested group fitness class, and most people are already familiar with the concept of what Yoga is about.', 'Full Body Fusion', 'Full Body Fusion.jpg'),
(10, 'Group Fitness Class', 'Yoga is our most commonly requested group fitness class, and most people are already familiar with the concept of what Yoga is about.', 'Aerobic', 'Aerobic.jpg'),
(11, 'Other Services', 'So many different kind of services are available here, like locker service , steam bath , sauna bath, free consultation etc.', 'locker service', 'Lockers-500x367.jpg'),
(12, 'Other Services', 'So many different kind of services are available here, like locker service , steam bath , sauna bath, free consultation etc.', 'steam bath', 'steam-bath-fitness-services-500x500.png'),
(13, 'Other Services', 'So many different kind of services are available here, like locker service , steam bath , sauna bath, free consultation etc.', 'sauna bath', 'sauna room0.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `shop`
--

CREATE TABLE `shop` (
  `shop_id` int(11) NOT NULL,
  `name` varchar(300) COLLATE utf8mb4_bin NOT NULL,
  `price` double(15,2) NOT NULL,
  `stock` varchar(150) COLLATE utf8mb4_bin NOT NULL,
  `image` varchar(200) COLLATE utf8mb4_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_bin;

--
-- Dumping data for table `shop`
--

INSERT INTO `shop` (`shop_id`, `name`, `price`, `stock`, `image`) VALUES
(1, 'Treadmils', 45000.00, '0', 'treadmil.jpg'),
(2, 'Rowing machine', 30000.00, '3', 'Rowing mechine.jpg'),
(3, 'Stair climber', 15000.00, '-1', 'Stair climber.jpg'),
(4, 'abdominal Bench', 25000.00, '2', 'abdominal-Bench.jpg'),
(5, 'Barbells rods', 10000.00, '2', 'Barbells-rods.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(10) NOT NULL,
  `full_name` varchar(100) NOT NULL,
  `user_email` varchar(30) NOT NULL,
  `user_phone` varchar(20) NOT NULL,
  `user_address` varchar(300) NOT NULL,
  `user_pass` varchar(50) NOT NULL,
  `date_of_birth` varchar(50) NOT NULL,
  `user_age` int(5) NOT NULL,
  `user_height` varchar(30) NOT NULL,
  `user_weight` varchar(30) NOT NULL,
  `gender` varchar(30) NOT NULL,
  `designation` varchar(100) NOT NULL,
  `bio` varchar(3000) NOT NULL,
  `packages` varchar(200) NOT NULL,
  `price` double(10,2) NOT NULL,
  `status` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `full_name`, `user_email`, `user_phone`, `user_address`, `user_pass`, `date_of_birth`, `user_age`, `user_height`, `user_weight`, `gender`, `designation`, `bio`, `packages`, `price`, `status`) VALUES
(10, 'mehedi hasan', 'mehedihr1990@gmail.com', '01641137048', 'dhaka', '1234', '1995-11-15', 26, '6.2', '80', 'male', 'student', 'hi i am mehedi from dhaka.', 'body building training', 10000.00, 'Confirm'),
(11, 'tanisa', 'tanisa@gmail.com', '01679560934', 'dhaka', '123', '1996-04-10', 25, '5.2', '60', 'female', 'student', 'hi', 'fat loss training', 15000.00, 'Confirm');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`admin_id`),
  ADD UNIQUE KEY `admin_email` (`admin_email`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `package`
--
ALTER TABLE `package`
  ADD PRIMARY KEY (`package_id`);

--
-- Indexes for table `program`
--
ALTER TABLE `program`
  ADD PRIMARY KEY (`program_id`);

--
-- Indexes for table `service`
--
ALTER TABLE `service`
  ADD PRIMARY KEY (`service_id`);

--
-- Indexes for table `shop`
--
ALTER TABLE `shop`
  ADD PRIMARY KEY (`shop_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`),
  ADD UNIQUE KEY `user_email` (`user_email`),
  ADD UNIQUE KEY `user_phone` (`user_phone`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `admin_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `package`
--
ALTER TABLE `package`
  MODIFY `package_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `program`
--
ALTER TABLE `program`
  MODIFY `program_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `service`
--
ALTER TABLE `service`
  MODIFY `service_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `shop`
--
ALTER TABLE `shop`
  MODIFY `shop_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

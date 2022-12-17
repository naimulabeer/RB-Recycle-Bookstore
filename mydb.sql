CREATE TABLE `cart` (
	`Customer` varchar(40) NOT NULL '',
	`Product` varchar(40) NOT NULL '',
  	`Quantity` int(5) NOT NULL
)

ALTER TABLE `cart`
  ADD PRIMARY KEY (`Customer`,`Product`),
  ADD KEY `Product` (`Product`);


CREATE TABLE `products` (
  `PID` varchar(25) NOT NULL,
  `Title` varchar(255) NOT NULL,
  `Author` varchar(255) NOT NULL,
  `MRP` float NOT NULL,
  `Price` float NOT NULL,
  `Discount` int(11) DEFAULT NULL,
  `Available` int(11) NOT NULL,
  `Description` text,
  `Category` varchar(255) DEFAULT NULL,
);

INSERT INTO `products` (`PID`, `Title`, `Author`, `MRP`, `Price`, `Discount`, `Available`, `Category`, `Description`) VALUES
('LIT-1', 'Torn', 'J K Rowling', 399, 296, 26, 31, 'Literature', 'Acknowledging that she was different from everyone else wasn\'t difficult for Wendy Everly she\'d always felt like an outsider. But a new world and new family is a hard for any girl to accept easily. Leaving behind the mysterious country of her birth, she is determined to fit back into normal life. But the world she\'s left behind won\'t let her go that easily. Kidnapped and imprisoned by her true family\'s enemies, Wendy soon learns that the lines between good and evil aren\'t as defined as she thought. And those things she\'d taken for granted may have been lies all along. With the help of the dangerously attractive Loki, she escapes back to the safety of F rening only to be confronted by a new threat. It\'s time to make a choice can she put aside her personal feelings for the sake of her country? Torn between duty and love she must make a choice that could destroy her one chance at true happiness.Generated an excitement not felt in the industry since Stephenie Meyer or perhaps even J. K. Rowling\' New York Times,A fast paced romance addictive\' Guardian on Switched , \'Drew me in and kept me hooked...cracking pace\' Sunday Express on Switched'),
('LIT-2', 'Harry Potter and the Half-Blood Prince', 'J K Rowling', 699, 454, 35, 32, 'Literature', NULL),
('LIT-3', 'Harry Potter And The Goblet Of Fire', 'J k Rowling', 699, 510, 27, 13, 'Literature', NULL),
('ACA-1','Calculus: Early Transcendentals, 10th Edition', 'Howard Anton', '550', '275', '50', '50', 'Academic', 'Calculus: Early Transcendentals, 10th Edition continues to evolve to fulfill the needs of a changing market by providing flexible solutions to teaching and learning needs of all kinds. Calculus: Early Transcendentals, 10th Edition excels in increasing student comprehension and conceptual understanding of the mathematics.  The new edition retains the strengths of earlier editions: e.g., Anton\'s trademark clarity of exposition; sound mathematics; excellent exercises and examples; and appropriate level, while incorporating more skill and drill problems within WileyPLUS');

ALTER TABLE `products`
  ADD PRIMARY KEY (`PID`);

CREATE TABLE `userinfo` (
  `firstname` varchar(30) NOT NULL,
  `lastname` varchar(30) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(20) NOT NULL,
  `age` int(3) NOT NULL,
  `pnumber` varchar(10) NOT NULL,
  `address` varchar(80) NOT NULL
);

INSERT INTO `userinfo` (`firstname`, `lastname`, `email`, `password`, `age`, `pnumber`, `address`) VALUES
('Naimul', 'Abeer', 'naimul9940@gmail.com', '12345678', 25, '01775474284', 'Dhaka Uddyan');

ALTER TABLE `userinfo`
  ADD PRIMARY KEY (`email`);


CREATE TABLE `subscriber` (
  `firstname` varchar(30) NOT NULL,
  `lastname` varchar(30) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(20) NOT NULL,
  `age` int(3) NOT NULL,
  `number` varchar(10) NOT NULL,
  `deliveryaddress` varchar(80) NOT NULL
);

ALTER TABLE `subscriber`
  ADD PRIMARY KEY (`email`);


CREATE TABLE admin(
    `username` varchar(50) NOT NULL,
  	`email` varchar(50) NOT NULL,
  	`password` varchar(20) NOT NULL,
  	`number` varchar(10) NOT NULL
);

INSERT INTO `admin`(`username`,`email`,`password`,`number`) VALUES 
('admin','nabeer@bscse.uiu.ac.bd','admin','01775474284');

ALTER TABLE `admin`
  ADD PRIMARY KEY (`email`);



CREATE TABLE admin (
  id int NOT NULL PRIMARY KEY,
  username varchar(30) NOT NULL,
  password varchar(30) NOT NULL
  
);





 CREATE TABLE customer(
  id int NOT NULL PRIMARY KEY,
  fname varchar(30) NOT NULL,
  lname varchar(30) NOT NULL,
  contact varchar(20) NOT NULL,
  address varchar(300) NOT NULL,
  bus varchar(30) NOT NULL,
  transactionum varchar(10) NOT NULL,
  payable varchar(11) NOT NULL,
  setnumber varchar(100) NOT NULL
 );


--
-- Dumping data for table `customer`
--


-- --------------------------------------------------------

--
-- Table structure for table `reserve`
--

CREATE TABLE reserve(
  id int NOT NULL PRIMARY KEY,
  date varchar(11) NOT NULL,
  bus varchar(11) NOT NULL,
  seat_reserve varchar(11) NOT NULL,
  transactionnum varchar(10) NOT NULL,
  seat varchar(100) NOT NULL
  
);





-- --------------------------------------------------------

--
-- Table structure for table `route`
--

CREATE TABLE route(
  id int NOT NULL PRIMARY KEY,
  Origin varchar(300) NOT NULL,
  Destination varchar(200) NOT NULL,
  price varchar(30) NOT NULL,
  numseats int(30) NOT NULL,
  type varchar(300) NOT NULL,
  time varchar(100) NOT NULL
 );





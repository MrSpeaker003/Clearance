CREATE TABLE IF NOT EXISTS `admin` (
  `sn` varchar(11) DEFAULT NULL,
  `name` varchar(200) DEFAULT NULL,
  `department` varchar(200) DEFAULT NULL,
  `regno` varchar(200) DEFAULT NULL,
  `clearance` varchar(200) DEFAULT NULL
);

CREATE TABLE IF NOT EXISTS `department` (
  `sn` varchar(11) DEFAULT NULL,
  `name` varchar(200) DEFAULT NULL,
  `department` varchar(200) DEFAULT NULL,
  `regno` varchar(200) DEFAULT NULL,
  `clearance` varchar(200) DEFAULT NULL
);

CREATE TABLE IF NOT EXISTS `examrecord` (
  `sn` varchar(11) DEFAULT NULL,
  `name` varchar(200) DEFAULT NULL,
  `department` varchar(200) DEFAULT NULL,
  `regno` varchar(200) DEFAULT NULL,
  `clearance` varchar(200) DEFAULT NULL
);

CREATE TABLE IF NOT EXISTS `hostel` (
  `sn` varchar(11) DEFAULT NULL,
  `name` varchar(200) DEFAULT NULL,
  `department` varchar(200) DEFAULT NULL,
  `regno` varchar(200) DEFAULT NULL,
  `clearance` varchar(200) DEFAULT NULL
);

CREATE TABLE IF NOT EXISTS `library` (
  `sn` varchar(11) DEFAULT NULL,
  `name` varchar(200) DEFAULT NULL,
  `department` varchar(200) DEFAULT NULL,
  `regno` varchar(200) DEFAULT NULL,
  `clearance` varchar(200) DEFAULT NULL
);

CREATE TABLE IF NOT EXISTS `securitydiv` (
  `sn` varchar(11) DEFAULT NULL,
  `name` varchar(200) DEFAULT NULL,
  `department` varchar(200) DEFAULT NULL,
  `regno` varchar(200) DEFAULT NULL,
  `clearance` varchar(200) DEFAULT NULL
);


CREATE TABLE IF NOT EXISTS `students` (
  `sn` varchar(11) DEFAULT NULL,
  `name` varchar(200) DEFAULT NULL,
  `gender` varchar(200) DEFAULT NULL,
  `department` varchar(200) DEFAULT NULL,
  `email` varchar(200) DEFAULT NULL,
  `regno` varchar(200) DEFAULT NULL,
  `password` varchar(200) DEFAULT NULL
);

INSERT INTO `students` (`sn`, `name`, `gender`, `department`, `email`, `regno`, `password`) VALUES
('1', 'Hassan Salisu', 'Male', 'Computer science', 'hassan@gmail.com', 'u/cs/20/001', '00000');

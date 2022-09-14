

CREATE TABLE `borrow_list` (
  `id` int(50) NOT NULL AUTO_INCREMENT,
  `id_number` varchar(50) DEFAULT NULL,
  `name` varchar(100) DEFAULT NULL,
  `borrowed_date` varchar(20) DEFAULT NULL,
  `time_from` varchar(20) DEFAULT NULL,
  `time_to` varchar(20) DEFAULT NULL,
  `returned_date` varchar(20) DEFAULT NULL,
  `returned_time` varchar(255) DEFAULT NULL,
  `facility` varchar(255) DEFAULT NULL,
  `purpose` varchar(255) DEFAULT NULL,
  `borrowing_code` varchar(50) DEFAULT NULL,
  `status` varchar(20) DEFAULT 'Pending',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4;

INSERT INTO `borrow_list` VALUES("1","requester","jj","2022-09-08","11:48","11:50","2022-09-08","11:48","sample","asd","BC:22090811303","Approved");
INSERT INTO `borrow_list` VALUES("2","try","try","2022-09-08","15:38","15:40","2022-09-08","15:43","sample","sample","BC:22090841610","Dis-Approved");
INSERT INTO `borrow_list` VALUES("3","try","try","2022-09-08","16:28","16:30","2022-09-08","16:28","sample2","sample3","BC:22090848641","Returned");
INSERT INTO `borrow_list` VALUES("4","requester","jj","2022-09-10","07:11","09:14","2022-09-09","10:16","sample2","training","BC:22090937158","Pending");
INSERT INTO `borrow_list` VALUES("5","0000","test","2022-09-12","12:52","15:55","2022-09-15","13:54","sample2","training","BC:22091238317","Pending");





CREATE TABLE `borrowed_equipments` (
  `id` int(50) NOT NULL AUTO_INCREMENT,
  `equipment` varchar(255) DEFAULT NULL,
  `quantity` varchar(10) DEFAULT NULL,
  `id_number` varchar(50) DEFAULT NULL,
  `borrowed_date` varchar(20) DEFAULT NULL,
  `time_from` varchar(20) DEFAULT NULL,
  `time_to` varchar(20) DEFAULT NULL,
  `facility` varchar(20) DEFAULT NULL,
  `purpose` varchar(255) DEFAULT NULL,
  `borrow_code` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=utf8mb4;

INSERT INTO `borrowed_equipments` VALUES("1","sample","1","requester","2022-09-08","11:48","11:50","sample","asd","BC:22090811303");
INSERT INTO `borrowed_equipments` VALUES("2","sample","1","requester","2022-09-08","11:48","11:50","sample","asd","BC:22090811303");
INSERT INTO `borrowed_equipments` VALUES("3","sample2","1","requester","2022-09-08","11:48","11:50","sample","asd","BC:22090811303");
INSERT INTO `borrowed_equipments` VALUES("4","sample2","1","requester","2022-09-08","11:48","11:50","sample","asd","BC:22090811303");
INSERT INTO `borrowed_equipments` VALUES("5","sample","1","try","2022-09-08","15:38","15:40","sample","sample","BC:22090841610");
INSERT INTO `borrowed_equipments` VALUES("6","sample","1","try","2022-09-08","15:38","15:40","sample","sample","BC:22090841610");
INSERT INTO `borrowed_equipments` VALUES("7","sample","1","try","2022-09-08","15:38","15:40","sample","sample","BC:22090841610");
INSERT INTO `borrowed_equipments` VALUES("8","sample","1","try","2022-09-08","16:28","16:30","sample2","sample3","BC:22090848641");
INSERT INTO `borrowed_equipments` VALUES("9","sample","1","try","2022-09-08","16:28","16:30","sample2","sample3","BC:22090848641");
INSERT INTO `borrowed_equipments` VALUES("10","volleyball net","1","requester","2022-09-10","07:11","09:14","sample2","training","BC:22090937158");
INSERT INTO `borrowed_equipments` VALUES("11","volleyball net","1","requester","2022-09-10","07:11","09:14","sample2","training","BC:22090937158");
INSERT INTO `borrowed_equipments` VALUES("12","d","1","requester","2022-09-10","07:11","09:14","sample2","training","BC:22090937158");
INSERT INTO `borrowed_equipments` VALUES("13","volleyball net","1","0000","2022-09-12","12:52","15:55","sample2","training","BC:22091238317");





CREATE TABLE `equipments` (
  `id` int(50) NOT NULL AUTO_INCREMENT,
  `equipment_name` varchar(100) DEFAULT NULL,
  `quantity` varchar(10) DEFAULT NULL,
  `status` varchar(20) DEFAULT NULL,
  `date_created` varchar(20) DEFAULT NULL,
  `date_updated` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8mb4;

INSERT INTO `equipments` VALUES("1","volleyball net","20","Available","2022-09-09","2022-09-12");
INSERT INTO `equipments` VALUES("2","b","2","Available","2022-09-09","");
INSERT INTO `equipments` VALUES("3","c","3","Available","2022-09-09","");
INSERT INTO `equipments` VALUES("4","d","4","Available","2022-09-09","");
INSERT INTO `equipments` VALUES("5","e","5","Available","2022-09-09","");
INSERT INTO `equipments` VALUES("6","f","6","Available","2022-09-09","");
INSERT INTO `equipments` VALUES("7","g","7","Available","2022-09-09","");
INSERT INTO `equipments` VALUES("8","h","8","Available","2022-09-09","");
INSERT INTO `equipments` VALUES("9","i","9","Available","2022-09-09","");
INSERT INTO `equipments` VALUES("10","j","10","Available","2022-09-09","");
INSERT INTO `equipments` VALUES("11","k","11","Available","2022-09-09","");





CREATE TABLE `facilities` (
  `id` int(50) NOT NULL AUTO_INCREMENT,
  `facility` varchar(100) DEFAULT NULL,
  `status` varchar(20) DEFAULT NULL,
  `date_created` varchar(20) DEFAULT NULL,
  `date_updated` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4;

INSERT INTO `facilities` VALUES("1","sample","Not_Available","2022-09-06","2022-09-08");
INSERT INTO `facilities` VALUES("2","sample2","Available","2022-09-06","");





CREATE TABLE `prospect_player_records` (
  `id` int(50) NOT NULL AUTO_INCREMENT,
  `id_number` varchar(50) DEFAULT NULL,
  `age` varchar(5) DEFAULT NULL,
  `weight` varchar(10) DEFAULT NULL,
  `gender` varchar(15) NOT NULL,
  `height` varchar(10) DEFAULT NULL,
  `sports_playing` varchar(255) DEFAULT NULL,
  `position` varchar(50) NOT NULL,
  `medical_conditions` varchar(255) DEFAULT NULL,
  `injury` varchar(255) DEFAULT NULL,
  `contact_no` varchar(20) DEFAULT NULL,
  `address` varchar(255) DEFAULT NULL,
  `contact_person_name` varchar(100) DEFAULT NULL,
  `contact_person_contact_no` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4;

INSERT INTO `prospect_player_records` VALUES("1","21-07087","25","60","Male","5,7","basketball","point guard","n/a","n/a","09999999999","sample","sample","09999999999");
INSERT INTO `prospect_player_records` VALUES("2","21-07088","21","1","Male","1","a","a","a","a","12312312312","as","asdasd","12312312312");





CREATE TABLE `user_accounts` (
  `id` int(50) NOT NULL AUTO_INCREMENT,
  `Name` varchar(50) DEFAULT NULL,
  `course` varchar(255) DEFAULT NULL,
  `yr_section` varchar(50) DEFAULT NULL,
  `id_number` varchar(50) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `password` varchar(50) DEFAULT NULL,
  `role` varchar(20) DEFAULT NULL,
  `permission` int(1) NOT NULL COMMENT '1=authorized 0=unauthorized',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8mb4;

INSERT INTO `user_accounts` VALUES("1","jj","bsit","4th","21-07087","admin@mail.com","admin","admin","1");
INSERT INTO `user_accounts` VALUES("2","jj","bsit","4th","requester","req@mail.com","admin","requester","1");
INSERT INTO `user_accounts` VALUES("4","try","try","try","try","try@mail.com","admin","requester","0");
INSERT INTO `user_accounts` VALUES("5","a","a","a","as","a","a","requester","0");
INSERT INTO `user_accounts` VALUES("10","test","BSIT","4th","0000","sample@mail.com","sample","requester","1");
INSERT INTO `user_accounts` VALUES("12","keanu","BSIT","4-A","0000","keanu.aldrin23@gmail.com","0000","requester","1");




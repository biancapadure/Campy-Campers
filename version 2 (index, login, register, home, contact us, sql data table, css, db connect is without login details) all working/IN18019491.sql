/* Database export results for db IN18019491 */

/* Preserve session variables */
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS;
SET FOREIGN_KEY_CHECKS=0;

/* Export data */

/* Table structure for CampyCampersUsers */
CREATE TABLE `CampyCampersUsers` (
  `user_id` int(11) NOT NULL AUTO_INCREMENT,
  `Email` varchar(50) NOT NULL,
  `Password` varchar(50) NOT NULL,
  `Address` varchar(50) NOT NULL,
  `Name` varchar(50) NOT NULL,
  `Surname` varchar(50) NOT NULL,
  PRIMARY KEY (`user_id`),
  UNIQUE KEY `Email` (`Email`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

/* data for Table CampyCampersUsers */
INSERT INTO `CampyCampersUsers` VALUES (1,"EMAIL","password","address","name","surname");
INSERT INTO `CampyCampersUsers` VALUES (2,"vaida@email.com","vaidapassword","vaida address 55","myNameVaida","mySurnameRubyte");

/* Restore session variables to original values */
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;

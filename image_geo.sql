DROP DATABASE `image_geo`;
CREATE DATABASE `image_geo`;
DROP TABLE `image_geo`.`geo_user`;

CREATE TABLE  `image_geo`.`geo_user` (
`id` INT( 255 ) NOT NULL AUTO_INCREMENT PRIMARY KEY ,
`f_name` VARCHAR( 50 ) NOT NULL ,
`l_name` VARCHAR( 50 ) NOT NULL ,
`u_name` VARCHAR( 10 ) NOT NULL ,
`password` VARCHAR( 20 ) NOT NULL ,
`email` VARCHAR( 50 ) NOT NULL ,
`reg_date` DATE NOT NULL
) ENGINE = MYISAM ;


DROP TABLE `image_geo`.`geo_image`;

CREATE TABLE  `image_geo`.`geo_image` (
`id` INT( 255 ) NOT NULL AUTO_INCREMENT PRIMARY KEY ,
`org_name` VARCHAR( 100 ) NOT NULL ,
`con_name` VARCHAR( 100 ) NOT NULL ,
`u_id` INT( 255 ) NOT NULL ,
`image_data` BLOB NOT NULL ,
`timestamp` TIMESTAMP NOT NULL
) ENGINE = MYISAM ;

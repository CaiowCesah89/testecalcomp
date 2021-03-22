CREATE DATABASE IF NOT EXISTS TesteCalComp
DEFAULT CHARACTER SET latin1
COLLATE latin1_general_ci;

USE TESTECALCOMP;

CREATE TABLE IF NOT EXISTS DQCMODEL(
ID INT AUTO_INCREMENT,
MODEL VARCHAR(10) NOT NULL,
PRIMARY KEY(ID));

CREATE TABLE IF NOT EXISTS DQC84(
ID INT AUTO_INCREMENT,
MODEL INT NOT NULL,
FAT_PART_NO VARCHAR(15) UNIQUE NOT NULL,
TOTAL_LOCATION INT NOT NULL,
UPDATE_DT DATETIME NOT NULL,
CREATE_DT DATETIME NOT NULL,
INDEX (FAT_PART_NO),
FOREIGN KEY (MODEL) REFERENCES DQCMODEL(ID),
PRIMARY KEY (ID));

CREATE TABLE IF NOT EXISTS DQC841(
ID INT AUTO_INCREMENT,
FAT_PART_NO INT NOT NULL,
PARTS_NO VARCHAR(15) NOT NULL,
UNT_USG INT NOT NULL,
DESCRIPTION LONGTEXT NOT NULL,
REF_DESIGNATOR LONGTEXT,
UPDATE_DT DATETIME NOT NULL,
CREATE_DT DATETIME NOT NULL,
INDEX (FAT_PART_NO, PARTS_NO),
FOREIGN KEY (FAT_PART_NO) REFERENCES DQC84(ID),
PRIMARY KEY (ID));

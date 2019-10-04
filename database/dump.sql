CREATE DATABASE IF NOT EXISTS company;

USE company;

DROP TABLE IF EXISTS `employees`;

CREATE TABLE employees (
ID int,
first_name varchar(25),
last_name  varchar(25),
department varchar(15),
email  varchar(50)
);

ALTER TABLE `employees`
    ADD PRIMARY KEY (`ID`);
ALTER TABLE `employees`
    MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

INSERT INTO employees (first_name, last_name, department, email) 
VALUES ('Lorenz', 'Vanthillo', 'IT', 'lvthillo@mail.com');
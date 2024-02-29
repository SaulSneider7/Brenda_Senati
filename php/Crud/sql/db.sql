CREATE DATABASE pdo_test;
USE pdo_test;
CREATE TABLE usuarios (
    id INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
    nombre VARCHAR(50),
    apellido VARCHAR(100),
    edad INT
);

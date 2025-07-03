CREATE DATABASE IF NOT EXISTS narmadasales;
USE narmadasales;

CREATE TABLE properties (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(100),
    price VARCHAR(50),
    city VARCHAR(50),
    bhk VARCHAR(10)
);

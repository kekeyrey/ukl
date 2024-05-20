<?php
CREATE DATABASE user_pendonasi;

USE user_pendonasi;

CREATE TABLE transaksi (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(100) NOT NULL,
    email VARCHAR(100) NOT NULL,
    amount DECIMAL(10, 2) NOT NULL,
    type VARCHAR(10) NOT NULL,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);
?>
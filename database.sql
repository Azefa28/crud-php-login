CREATE DATABASE db_kampus;
USE db_kampus;

CREATE TABLE user (
    id INT AUTO_INCREMENT PRIMARY KEY,
    username VARCHAR(50),
    password VARCHAR(50)
);

INSERT INTO user VALUES
(NULL, 'admin', '12345');

CREATE TABLE matakuliah (
    id INT AUTO_INCREMENT PRIMARY KEY,
    kode_mk VARCHAR(10),
    nama_mk VARCHAR(100),
    sks INT
);

INSERT INTO matakuliah VALUES
(NULL, 'IF101', 'Algoritma dan Pemrograman', 3),
(NULL, 'IF102', 'Basis Data', 3),
(NULL, 'IF103', 'Pemrograman Web', 3);

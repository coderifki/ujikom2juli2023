-- /* Create Database and Table */
-- create database ujikom2juli;
 
-- use ujikom2juli;
 
-- CREATE TABLE `tbl_user` (
--   `id_user` int(11) NOT NULL auto_increment,
--   `username` varchar(15),
--   `password` varchar(10),
--   PRIMARY KEY  (`id_user`)
-- );

-- CREATE TABLE `tbl_pengaduan`(
--   `id_pengaduan` int(11) NOT NULL auto_increment,
--   `id_kategori` int(11) NOT NULL,
--   FOREIGN KEY (`id_kategori`) REFERENCES tbl_kategori(`id_kategori`) ON DELETE CASCADE ON UPDATE NO ACTION
--   `tgl_pengaduan` date,
--   `nm_pengadu` varchar(18),
--   `jenis_kelamin` varchar(8),
--   `no_ktp` int(10),
--   `alamat_pengadu` int(100),
--   `pengaduan` varchar(100),
--   `id_user` int(11) NOT NULL,
--   FOREIGN KEY (`id_user`) REFERENCES tbl_user(`id_user`) 
--   PRIMARY KEY  (`id_pengaduan`)
-- );

-- CREATE TABLE `tbl_kategori` (
--   `id_kategori` int(11) NOT NULL auto_increment,
--   `jenis_pengaduan` varchar(18),
--   PRIMARY KEY  (`id_kategori`)
-- );

/* Create Database */
CREATE DATABASE ujikom2juli;

/* Use Database */
USE ujikom2juli;

/* Create tbl_user Table */
CREATE TABLE tbl_user (
  id_user INT(11) NOT NULL AUTO_INCREMENT,
  username VARCHAR(15),
  password VARCHAR(10),
  PRIMARY KEY (id_user)
);

/* Create tbl_kategori Table */
CREATE TABLE tbl_kategori (
  id_kategori INT(11) NOT NULL AUTO_INCREMENT,
  jenis_pengaduan VARCHAR(18),
  PRIMARY KEY (id_kategori)
);

/* Create tbl_pengaduan Table */
CREATE TABLE tbl_pengaduan (
  id_pengaduan INT(11) NOT NULL AUTO_INCREMENT,
  id_kategori INT(11) NOT NULL,
  tgl_pengaduan DATE,
  nm_pengadu VARCHAR(18),
  jenis_kelamin VARCHAR(20),
  no_ktp INT(10),
  alamat_pengadu VARCHAR(100),
  pengaduan VARCHAR(100),
  PRIMARY KEY (id_pengaduan),
  FOREIGN KEY (id_kategori) REFERENCES tbl_kategori(id_kategori) ON DELETE CASCADE ON UPDATE NO ACTION
);

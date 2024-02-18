
/* Create Database */
CREATE DATABASE ujikom35_010823_mohammad_rifki_ramadhan_arsjad;

/* Use Database */
USE ujikom35_010823_mohammad_rifki_ramadhan_arsjad;

/* Create level Table */
CREATE TABLE tbl_level_mohammad_rifki_ramadhan_arsjad (
  id_level INT(11) NOT NULL AUTO_INCREMENT,
  level VARCHAR(255),
  PRIMARY KEY (id_level)
);

/* Create petugas Table */
CREATE TABLE tbl_petugas_mohammad_rifki_ramadhan_arsjad (
  id_user INT(11) NOT NULL AUTO_INCREMENT,
  nama_user VARCHAR(50),
  username VARCHAR(15),
  password VARCHAR(10),
  id_level INT(11),
  PRIMARY KEY (id_user),
  FOREIGN KEY (id_level) REFERENCES tbl_level_mohammad_rifki_ramadhan_arsjad(id_level)
);

/* Create manager Table */
CREATE TABLE tbl_manager_mohammad_rifki_ramadhan_arsjad (
  id_user INT(11) NOT NULL AUTO_INCREMENT,
  nama_user VARCHAR(50),
  username VARCHAR(15),
  password VARCHAR(10),
  id_level INT(11),
  PRIMARY KEY (id_user),
  FOREIGN KEY (id_level) REFERENCES tbl_level_mohammad_rifki_ramadhan_arsjad(id_level)
);

/* Create tbl_user Table */
CREATE TABLE tbl_user (
  id_user INT(11) NOT NULL AUTO_INCREMENT,
  username VARCHAR(15),
  password VARCHAR(10),
  PRIMARY KEY (id_user)
);

/* Create tbl_customer Table */
CREATE TABLE tbl_customer_mohammad_rifki_ramadhan_arsjad (
  id_customer INT(11) NOT NULL AUTO_INCREMENT,
  nama_customer VARCHAR(255),
  alamat VARCHAR(255),
  telp VARCHAR(18),
  fax VARCHAR(18),
  email VARCHAR(255),
  PRIMARY KEY (id_customer)
);

/* Create tbl_sales Table */
CREATE TABLE tbl_sales_mohammad_rifki_ramadhan_arsjad (
  id_sales INT(11) NOT NULL AUTO_INCREMENT,
  id_customer INT(11) NOT NULL,
  tgl_sales DATE,
  do_customer VARCHAR(18),
  status VARCHAR(18),
  PRIMARY KEY (id_sales),
  FOREIGN KEY (id_customer) REFERENCES tbl_customer_mohammad_rifki_ramadhan_arsjad(id_customer) ON DELETE CASCADE ON UPDATE NO ACTION
);

/* Create tbl_item_mohammad_rifki_ramadhan_arsjad Table */
CREATE TABLE tbl_item_mohammad_rifki_ramadhan_arsjad (
  id_item INT(11) NOT NULL AUTO_INCREMENT,
  nama_item VARCHAR(18),
  harga_beli INT(255),
  harga_jual INT(255),
  PRIMARY KEY (id_item)
);

/* Create tbl_transaction_mohammad_rifki_ramadhan_arsjad Table */
CREATE TABLE tbl_transaction_mohammad_rifki_ramadhan_arsjad (
  id_transaction INT(11) NOT NULL AUTO_INCREMENT,
  id_item INT(11) NOT NULL,
  quantity INT(255) NOT NULL,
  price INT(255),
  ammount INT(255),
  PRIMARY KEY (id_transaction),
  FOREIGN KEY (id_item) REFERENCES tbl_item_mohammad_rifki_ramadhan_arsjad(id_item) ON DELETE CASCADE ON UPDATE NO ACTION
);

CREATE TABLE tbl_detail_transaction_mohamammad_rifki_ramadhan_arsjad(
 id_detail_transaction INT(11) NOT NULL AUTO_INCREMENT,
  id_transaction INT(11) NOT NULL,
  created_at DATE,
  updated_at DATE,
  PRIMARY KEY (id_detail_transaction),
  FOREIGN KEY (id_transaction) REFERENCES tbl_transaction_mohammad_rifki_ramadhan_arsjad(id_transaction) ON DELETE CASCADE ON UPDATE NO ACTION
);
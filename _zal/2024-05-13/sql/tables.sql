CREATE TABLE items (
itm_id INT NOT NULL AUTO_INCREMENT,
itm_nazev VARCHAR(255) NOT NULL,
itm_vyrobce INT NOT NULL,
itm_kod VARCHAR(255) NOT NULL,
itm_average DOUBLE(8,2) NOT NULL,
PRIMARY KEY(itm_id),
KEY itm_kod (itm_kod)
) DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_czech_ci;

CREATE TABLE storage (
sto_id INT NOT NULL AUTO_INCREMENT,
sto_insert_dt DATE NOT NULL,
sto_item INT NOT NULL,
sto_price DECIMAL(8,2) NOT NULL,
sto_count INT NOT NULL,
sto_supplier INT NOT NULL,
PRIMARY KEY(sto_id),
KEY sto_item (sto_item),
KEY sto_supplier (sto_supplier)
) DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_czech_ci;

CREATE TABLE storage_items (
sti_id INT NOT NULL AUTO_INCREMENT,
sti_item INT NOT NULL,
sti_storage INT NOT NULL,
sti_available ENUM('Y', 'N') DEFAULT 'Y' NOT NULL,
sti_bill INT NOT NULL,
PRIMARY KEY(sti_id),
KEY sti_item (sti_item),
KEY sti_storage (sti_storage),
KEY sti_bill (sti_bill)
) DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_czech_ci;

CREATE TABLE bills (
bil_id INT NOT NULL AUTO_INCREMENT,
bil_insert_dt DATETIME NOT NULL,
bil_date DATE NOT NULL,
bil_due DATE NOT NULL,
bil_customer INT NOT NULL,
bil_locked ENUM('Y', 'N') DEFAULT 'N' NOT NULL,
bil_type ENUM('P', 'F') DEFAULT 'P' NOT NULL,
bil_paid DATE NOT NULL,
bil_payment_form ENUM('H', 'P') DEFAULT 'P' NOT NULL,
PRIMARY KEY(bil_id),
KEY bil_type (bil_type),
KEY bil_paid (bil_paid)
) DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_czech_ci;

CREATE TABLE customers (
cus_id INT NOT NULL AUTO_INCREMENT,
cus_nazev VARCHAR(255) NOT NULL,
cus_ico VARCHAR(20) NOT NULL,
cus_dic VARCHAR(20) NOT NULL,
cus_obec VARCHAR(100) NOT NULL,
cus_ulice VARCHAR(100) NOT NULL,
cus_psc VARCHAR(10) NOT NULL,
cus_cp VARCHAR(255) NOT NULL,
cus_telefon VARCHAR(20) NOT NULL,
cus_email VARCHAR(100) NOT NULL,
PRIMARY KEY(cus_id),
KEY cus_telefon (cus_telefon),
KEY cus_email (cus_email),
KEY cus_ico (cus_ico),
KEY cus_nazev (cus_nazev)
) DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_czech_ci;

CREATE TABLE bill_items (
bii_id INT NOT NULL AUTO_INCREMENT,
bii_bill INT NOT NULL,
bii_item INT NOT NULL,
bii_count INT NOT NULL,
bii_price DECIMAL(8,2) NOT NULL,
bii_tax DOUBLE(8,4) NOT NULL,
PRIMARY KEY(bii_id),
KEY bii_item (bii_item)
) DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_czech_ci;

CREATE TABLE account (
acc_id INT NOT NULL AUTO_INCREMENT,
acc_nazev VARCHAR(255) NOT NULL,
acc_ico VARCHAR(20) NOT NULL,
acc_dic VARCHAR(20) NOT NULL,
acc_obec VARCHAR(100) NOT NULL,
acc_ulice VARCHAR(100) NOT NULL,
acc_psc VARCHAR(10) NOT NULL,
acc_cp VARCHAR(255) NOT NULL,
acc_telefon VARCHAR(20) NOT NULL,
acc_email VARCHAR(100) NOT NULL,
acc_bank_number VARCHAR(100) NOT NULL,
PRIMARY KEY(acc_id)
) DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_czech_ci;

INSERT INTO account SET acc_id = 1;

CREATE TABLE suppliers (
sup_id INT NOT NULL AUTO_INCREMENT,
sup_nazev VARCHAR(255) NOT NULL,
sup_ico VARCHAR(20) NOT NULL,
sup_dic VARCHAR(20) NOT NULL,
sup_obec VARCHAR(100) NOT NULL,
sup_ulice VARCHAR(100) NOT NULL,
sup_psc VARCHAR(10) NOT NULL,
sup_cp VARCHAR(255) NOT NULL,
sup_telefon VARCHAR(20) NOT NULL,
sup_email VARCHAR(100) NOT NULL,
PRIMARY KEY(sup_id),
KEY sup_nazev (sup_nazev),
KEY sup_ico (sup_ico)
) DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_czech_ci;
CREATE DATABASE digitalforge_db;

USE digitalforge_db;

CREATE TABLE IF NOT EXISTS utenti (
	
	email_user VARCHAR(50) PRIMARY KEY,
	nome VARCHAR(40) NOT NULL,
	cognome VARCHAR(40) NOT NULL,
	password VARCHAR(20) NOT NULL


);

CREATE TABLE IF NOT EXISTS utenti_ads (
	
	email_ads VARCHAR(50) PRIMARY KEY,
	nome VARCHAR(40) NOT NULL,
	cognome VARCHAR(40) NOT NULL,
	password VARCHAR(20) NOT NULL


);

CREATE TABLE IF NOT EXISTS pagamenti (
	
	numero_carta CHAR(16) PRIMARY KEY,
	CVC CHAR(3) NOT NULL,
	intestatario VARCHAR(50) NOT NULL,
	data_scadenza CHAR(5) NOT NULL,
	stato VARCHAR(30) NOT NULL,
	email_user_pay VARCHAR(40) NOT NULL,
	FOREIGN KEY (email_user) REFERENCES utenti(email_user)
		ON UPDATE CASCADE
		ON DELETE CASCADE


);


CREATE TABLE IF NOT EXISTS prodotti (

	id_prodotto INT PRIMARY KEY AUTO_INCREMENT,
	nominativo VARCHAR(30) NOT NULL,
	prezzo DECIMAL(10,2) NOT NULL,
	descrizione TEXT NOT NULL,
	link_sito_app VARCHAR(255) NOT NULL,
	link_img1 VARCHAR(255) NOT NULL,
	link_img2 VARCHAR(255),
	link_img3 VARCHAR(255),
	email_ads_add VARCHAR(50) NOT NULL,
	FOREIGN KEY (email_ads_add) REFERENCES utenti_ads(email_ads)
		ON UPDATE CASCADE
		ON DELETE CASCADE 
 
);


CREATE TABLE IF NOT EXISTS preferiti (

	id_preferito INT PRIMARY KEY AUTO_INCREMENT,
	id_prodotto_pre INT NOT NULL,
	email_user_pre VARCHAR(50) NOT NULL,
	FOREIGN KEY(id_prodotto_pre) REFERENCES prodotti(id_prodotto)
		ON UPDATE CASCADE
		ON DELETE CASCADE,
FOREIGN KEY(email_user_pre) REFERENCES utenti(email_user)
		ON UPDATE CASCADE
		ON DELETE CASCADE,
	UNIQUE(email_user_pre,id_prodotto_pre)

);



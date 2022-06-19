CREATE DATABASE `rent_car` DEFAULT CHARACTER SET utf8 COLLATE 
utf8_turkish_ci; 

USE `rent_car`;


CREATE TABLE `admin` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `kullaniciadi` varchar(255) NOT NULL,
  `sifre` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
);


INSERT INTO `admin` (`id`, `kullaniciadi`, `sifre`) VALUES
(1, 'admin', '0135236e5f37d6ba810a6822f0c4602a4d784bd75c36b61fb770d874f419bc55');


CREATE TABLE `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `kullanici_adi` varchar(255) NOT NULL,
  `ad` varchar(255) NOT NULL,
  `soyad` varchar(255) NOT NULL,
  `sifre` varchar(255) NOT NULL,
  `tel` varchar(15) NOT NULL,
  `email` varchar(255) NOT NULL,
  `dogum_tarihi` date NOT NULL,
  `uyelik_tarihi` datetime NOT NULL,
  `ehliyet_turu` varchar(255) NOT NULL,
  `ehliyet_tarihi` date NOT NULL,
  PRIMARY KEY (`id`)
);

CREATE TABLE `rezervasyonlar` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `kullanici_id` varchar(255) NOT NULL,
  `kullanici_adi` varchar(255) NOT NULL,
  `ad` varchar(255) NOT NULL,
  `soyad` varchar(255) NOT NULL,
  `tel` varchar(15) NOT NULL,
  `ehliyet_turu` varchar(255) NOT NULL,
  `rezervasyon_tarihi` datetime NOT NULL,
  `arac_turu` varchar(255) NOT NULL,
  `arac_model` varchar(255) NOT NULL,
  `alma_tarihi` datetime NOT NULL,
  `teslim_tarihi` datetime NOT NULL,
  PRIMARY KEY (`id`)
);
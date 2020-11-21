-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Anamakine: 127.0.0.1
-- Üretim Zamanı: 17 Kas 2020, 20:37:38
-- Sunucu sürümü: 10.4.11-MariaDB
-- PHP Sürümü: 7.4.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Veritabanı: `turkishsnack`
--

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `3_aylik`
--

CREATE TABLE `3_aylik` (
  `3aylik_id` int(50) NOT NULL,
  `kullanici_id` int(50) NOT NULL,
  `baslangic_tarih` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `6_aylik`
--

CREATE TABLE `6_aylik` (
  `6aylik_id` int(50) NOT NULL,
  `kullanici_id` int(50) NOT NULL,
  `baslangic_tarih` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `adres`
--

CREATE TABLE `adres` (
  `id` int(50) NOT NULL,
  `kullanici_id` int(50) NOT NULL,
  `adres_türü` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `sehir` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `ilce` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `semt` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `acik_adres` varchar(100) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `aylik`
--

CREATE TABLE `aylik` (
  `aylik_id` int(50) NOT NULL,
  `kullanici_id` int(50) NOT NULL,
  `tarih` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `kullanici`
--

CREATE TABLE `kullanici` (
  `kullanici_id` int(50) NOT NULL,
  `ad` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `soyad` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `kullanici_adi` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `kullanici_sifre` varchar(15) COLLATE utf8_unicode_ci NOT NULL,
  `kullanici_eposta` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `kullanici_adres` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `kullanici_telefonNo` int(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `siparis`
--

CREATE TABLE `siparis` (
  `siparis_id` int(50) NOT NULL,
  `kullanici_id` int(50) NOT NULL,
  `urunSiparis_id` int(50) NOT NULL,
  `adres_id` int(50) NOT NULL,
  `tarih` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `urunler`
--

CREATE TABLE `urunler` (
  `urun_id` int(50) NOT NULL,
  `urun_adi` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `urun_adedi` int(30) NOT NULL,
  `urun_fiyati` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `urunsiparis`
--

CREATE TABLE `urunsiparis` (
  `urunSiparis_id` int(50) NOT NULL,
  `urun_id` int(30) NOT NULL,
  `kullanici_id` int(50) NOT NULL,
  `adet` int(11) NOT NULL,
  `fiyat` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `yillik`
--

CREATE TABLE `yillik` (
  `yillik_id` int(50) NOT NULL,
  `kullanici_id` int(50) NOT NULL,
  `baslangic_tarih` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `yonetici`
--

CREATE TABLE `yonetici` (
  `yonetici_id` int(50) NOT NULL,
  `yonetici_adi` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `yonetici_sifre` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `yonetici_eposta` varchar(30) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dökümü yapılmış tablolar için indeksler
--

--
-- Tablo için indeksler `3_aylik`
--
ALTER TABLE `3_aylik`
  ADD PRIMARY KEY (`3aylik_id`),
  ADD KEY `kullanici_3fk` (`kullanici_id`);

--
-- Tablo için indeksler `6_aylik`
--
ALTER TABLE `6_aylik`
  ADD PRIMARY KEY (`6aylik_id`),
  ADD KEY `kullanici_6fk` (`kullanici_id`);

--
-- Tablo için indeksler `adres`
--
ALTER TABLE `adres`
  ADD PRIMARY KEY (`id`),
  ADD KEY `kullanici_idfk` (`kullanici_id`);

--
-- Tablo için indeksler `aylik`
--
ALTER TABLE `aylik`
  ADD PRIMARY KEY (`aylik_id`),
  ADD KEY `kullanici_fk` (`kullanici_id`);

--
-- Tablo için indeksler `kullanici`
--
ALTER TABLE `kullanici`
  ADD PRIMARY KEY (`kullanici_id`);

--
-- Tablo için indeksler `siparis`
--
ALTER TABLE `siparis`
  ADD PRIMARY KEY (`siparis_id`),
  ADD KEY `kullanici_siparisfk` (`kullanici_id`),
  ADD KEY `urunsiparis_idfk` (`urunSiparis_id`),
  ADD KEY `adres_idfk` (`adres_id`);

--
-- Tablo için indeksler `urunler`
--
ALTER TABLE `urunler`
  ADD PRIMARY KEY (`urun_id`);

--
-- Tablo için indeksler `urunsiparis`
--
ALTER TABLE `urunsiparis`
  ADD PRIMARY KEY (`urunSiparis_id`),
  ADD KEY `urun_idUrunfk` (`urun_id`);

--
-- Tablo için indeksler `yillik`
--
ALTER TABLE `yillik`
  ADD PRIMARY KEY (`yillik_id`),
  ADD KEY `kullanici_12fk` (`kullanici_id`);

--
-- Tablo için indeksler `yonetici`
--
ALTER TABLE `yonetici`
  ADD PRIMARY KEY (`yonetici_id`);

--
-- Dökümü yapılmış tablolar için AUTO_INCREMENT değeri
--

--
-- Tablo için AUTO_INCREMENT değeri `adres`
--
ALTER TABLE `adres`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT;

--
-- Tablo için AUTO_INCREMENT değeri `kullanici`
--
ALTER TABLE `kullanici`
  MODIFY `kullanici_id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Tablo için AUTO_INCREMENT değeri `siparis`
--
ALTER TABLE `siparis`
  MODIFY `siparis_id` int(50) NOT NULL AUTO_INCREMENT;

--
-- Tablo için AUTO_INCREMENT değeri `urunler`
--
ALTER TABLE `urunler`
  MODIFY `urun_id` int(50) NOT NULL AUTO_INCREMENT;

--
-- Tablo için AUTO_INCREMENT değeri `urunsiparis`
--
ALTER TABLE `urunsiparis`
  MODIFY `urunSiparis_id` int(50) NOT NULL AUTO_INCREMENT;

--
-- Tablo için AUTO_INCREMENT değeri `yonetici`
--
ALTER TABLE `yonetici`
  MODIFY `yonetici_id` int(50) NOT NULL AUTO_INCREMENT;

--
-- Dökümü yapılmış tablolar için kısıtlamalar
--

--
-- Tablo kısıtlamaları `3_aylik`
--
ALTER TABLE `3_aylik`
  ADD CONSTRAINT `kullanici_3fk` FOREIGN KEY (`kullanici_id`) REFERENCES `kullanici` (`kullanici_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Tablo kısıtlamaları `6_aylik`
--
ALTER TABLE `6_aylik`
  ADD CONSTRAINT `kullanici_6fk` FOREIGN KEY (`kullanici_id`) REFERENCES `kullanici` (`kullanici_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Tablo kısıtlamaları `adres`
--
ALTER TABLE `adres`
  ADD CONSTRAINT `kullanici_idfk` FOREIGN KEY (`kullanici_id`) REFERENCES `kullanici` (`kullanici_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Tablo kısıtlamaları `aylik`
--
ALTER TABLE `aylik`
  ADD CONSTRAINT `kullanici_fk` FOREIGN KEY (`kullanici_id`) REFERENCES `kullanici` (`kullanici_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Tablo kısıtlamaları `siparis`
--
ALTER TABLE `siparis`
  ADD CONSTRAINT `adres_idfk` FOREIGN KEY (`adres_id`) REFERENCES `adres` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `kullanici_siparisfk` FOREIGN KEY (`kullanici_id`) REFERENCES `kullanici` (`kullanici_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `urunsiparis_idfk` FOREIGN KEY (`urunSiparis_id`) REFERENCES `urunsiparis` (`urunSiparis_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Tablo kısıtlamaları `urunsiparis`
--
ALTER TABLE `urunsiparis`
  ADD CONSTRAINT `urun_idUrunfk` FOREIGN KEY (`urun_id`) REFERENCES `urunler` (`urun_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Tablo kısıtlamaları `yillik`
--
ALTER TABLE `yillik`
  ADD CONSTRAINT `kullanici_12fk` FOREIGN KEY (`kullanici_id`) REFERENCES `kullanici` (`kullanici_id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

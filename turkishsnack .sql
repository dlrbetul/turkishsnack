-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Anamakine: 127.0.0.1
-- Üretim Zamanı: 12 Tem 2021, 12:19:39
-- Sunucu sürümü: 10.4.19-MariaDB
-- PHP Sürümü: 8.0.6

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
-- Tablo için tablo yapısı `adres`
--

CREATE TABLE `adres` (
  `id` int(255) NOT NULL,
  `kullanici_id` int(255) NOT NULL,
  `adres_ad` varchar(50) COLLATE utf8_turkish_ci NOT NULL,
  `adres_soyad` varchar(255) COLLATE utf8_turkish_ci NOT NULL,
  `adres_tel` bigint(13) NOT NULL,
  `a_il` varchar(255) COLLATE utf8_turkish_ci NOT NULL,
  `a_ilce` varchar(255) COLLATE utf8_turkish_ci NOT NULL,
  `baslik` varchar(255) COLLATE utf8_turkish_ci NOT NULL,
  `adres` varchar(255) COLLATE utf8_turkish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `adres`
--

INSERT INTO `adres` (`id`, `kullanici_id`, `adres_ad`, `adres_soyad`, `adres_tel`, `a_il`, `a_ilce`, `baslik`, `adres`) VALUES
(24, 29, 'ahmet', 'kayı', 44444444444, 'Kayseri', 'Kızılcık', 'Yurt', 'yorulmaz mahallesi no:55/A'),
(34, 29, 'Dilara', 'Işık', 555555555555, 'Balıkesir', 'Altıeylül', 'haru ev', 'Dinkçiler Mahallesi soma caddesi no:22-26'),
(40, 33, 'ali', 'dasdsad', 88888888888, 'Balıkesir', 'Altıeylül', 'iş', 'Dinkçiler Mahallesi soma caddesi no:22-26');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `aylik`
--

CREATE TABLE `aylik` (
  `aylik_id` int(255) NOT NULL,
  `aylik_k_adi` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `aylik_k_fiyat` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Tablo döküm verisi `aylik`
--

INSERT INTO `aylik` (`aylik_id`, `aylik_k_adi`, `aylik_k_fiyat`) VALUES
(3, 'Ay', 20);

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `aylik_3`
--

CREATE TABLE `aylik_3` (
  `aylik_id` int(255) NOT NULL,
  `aylik_k_adi` varchar(255) NOT NULL,
  `aylik_k_fiyat` float(10,0) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Tablo döküm verisi `aylik_3`
--

INSERT INTO `aylik_3` (`aylik_id`, `aylik_k_adi`, `aylik_k_fiyat`) VALUES
(1, '3Ay', 55);

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `aylik_6`
--

CREATE TABLE `aylik_6` (
  `aylik_id` int(255) NOT NULL,
  `aylik_k_adi` varchar(255) NOT NULL,
  `aylik_k_fiyat` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Tablo döküm verisi `aylik_6`
--

INSERT INTO `aylik_6` (`aylik_id`, `aylik_k_adi`, `aylik_k_fiyat`) VALUES
(1, '6Ay', 100);

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `chat`
--

CREATE TABLE `chat` (
  `id` int(20) NOT NULL,
  `k_id` int(20) NOT NULL,
  `y_id` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Tablo döküm verisi `chat`
--

INSERT INTO `chat` (`id`, `k_id`, `y_id`) VALUES
(1, 33, 1),
(2, 33, 1),
(3, 1, 33),
(4, 1, 33),
(5, 1, 33),
(6, 33, 1),
(7, 1, 33),
(8, 29, 1),
(9, 29, 1),
(10, 29, 1),
(11, 29, 1),
(12, 29, 1),
(13, 1, 29),
(14, 1, 29),
(15, 1, 29),
(16, 1, 29),
(17, 29, 1),
(18, 1, 29),
(19, 1, 29),
(20, 1, 29),
(21, 1, 29),
(22, 1, 29),
(23, 1, 29),
(24, 1, 29),
(25, 1, 29),
(26, 29, 1),
(27, 1, 29),
(28, 29, 1),
(29, 1, 29),
(30, 29, 1),
(31, 29, 1),
(32, 0, 0),
(33, 0, 0);

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `chatbot`
--

CREATE TABLE `chatbot` (
  `id` int(20) NOT NULL,
  `sorgular` varchar(300) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cevaplar` varchar(300) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Tablo döküm verisi `chatbot`
--

INSERT INTO `chatbot` (`id`, `sorgular`, `cevaplar`) VALUES
(1, 'adın ne?|adın ne', 'adım chatbot.'),
(2, 'bay|iyi günler|hoşçakalın', 'Görüşürüz!!İyi günler'),
(3, 'ETİ Çikolata Hediye Kutunuz ne zaman gelecek?|ürünün stokları güncellenecek mi?|ürünün stokları güncellenecek mi', 'Ürün en kısa zamanda güncellenerek siteye eklenecektir efendim.'),
(4, 'bir ürün hakkında bilgi almak istiyorum.|ürün stokları hakkında bilgi almak istiyorum|', 'Hangi ürün hakkında bilgi almak istiyorsunuz?'),
(5, 'Yetkiliye nasıl ulaşabilirim|Yetkiliye nasıl ulaşabilirim?', 'sağ üst köşede adınızın bulunduğu sekmede mesaj bölümünden mesaj atabilirsiniz efendim.'),
(6, 'Kargoya verilme süresi kaç gün?|Kargoya verilme süresi kaç gün|ürün ne zman elime ulaşır?|ürün ne zaman elime ulaşır', 'Ürünlerimiz kargoya siparişten sonra 3 gün içerisinde kargoya verilmektedir.'),
(7, 'yeni kutularınız gelecek mi|yeni kutularınız gelecek mi?', 'En kısa zaman yeni kutularımız sayfamızda olacaktır efendim.');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `chat_detay`
--

CREATE TABLE `chat_detay` (
  `id` int(20) NOT NULL,
  `chat_id` int(20) NOT NULL,
  `msg` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Tablo döküm verisi `chat_detay`
--

INSERT INTO `chat_detay` (`id`, `chat_id`, `msg`, `date`) VALUES
(1, 1, 'selam', '2021-06-01 10:38:41'),
(2, 2, 'aaaaaaa', '2021-06-01 10:43:05'),
(3, 3, 'selamm', '2021-06-01 23:44:05'),
(4, 4, 'selam', '2021-06-01 10:46:50'),
(5, 5, 'asdfghd', '2021-06-01 10:48:26'),
(6, 6, 'nö', '2021-06-01 10:55:46'),
(7, 7, 'ggggg', '2021-06-01 10:56:26'),
(8, 8, 'selam', '2021-06-08 07:07:02'),
(9, 9, 'selam', '2021-06-08 07:07:03'),
(10, 10, 'selam', '2021-06-08 07:07:04'),
(11, 11, 'selam', '2021-06-08 07:07:06'),
(12, 12, 'aburcubur', '2021-06-08 07:11:38'),
(13, 13, 'selam', '2021-06-08 07:23:17'),
(14, 14, 'aburcubur', '2021-06-08 07:23:26'),
(15, 15, 'selam', '2021-06-08 07:27:34'),
(16, 16, 'selam', '2021-06-08 07:27:35'),
(17, 17, 'selam', '2021-06-08 07:27:54'),
(18, 18, 'aburcubur', '2021-06-08 07:29:16'),
(19, 19, 'aburcubur', '2021-06-08 07:29:19'),
(20, 20, 'aburcubur', '2021-06-08 07:29:19'),
(21, 21, 'aburcubur', '2021-06-08 07:29:20'),
(22, 22, 'aburcubur', '2021-06-08 07:29:20'),
(23, 23, 'abur cubur', '2021-06-08 07:30:20'),
(24, 24, 'selam', '2021-06-08 07:33:22'),
(25, 25, 'merhaba', '2021-06-08 07:35:15'),
(26, 26, 'aburcubur', '2021-06-08 07:37:45'),
(27, 27, 'selam', '2021-06-15 09:58:39'),
(28, 28, 'selam', '2021-06-15 09:58:58'),
(29, 29, 'abur cubur', '2021-06-15 09:59:14'),
(30, 30, 'aburcubur', '2021-06-15 10:45:26'),
(31, 31, 'aburcubur', '2021-06-16 12:25:05'),
(32, 32, '', '2021-07-12 12:10:48'),
(33, 33, '', '2021-07-12 12:10:55');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `eski_kutular`
--

CREATE TABLE `eski_kutular` (
  `icerik_id` int(11) NOT NULL,
  `ay` date NOT NULL,
  `urun1_id` int(20) NOT NULL,
  `urun2_id` int(20) NOT NULL,
  `urun3_id` int(20) NOT NULL,
  `urun4_id` int(20) NOT NULL,
  `urun5_id` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Tablo döküm verisi `eski_kutular`
--

INSERT INTO `eski_kutular` (`icerik_id`, `ay`, `urun1_id`, `urun2_id`, `urun3_id`, `urun4_id`, `urun5_id`) VALUES
(6, '2020-11-30', 3, 15, 34, 7, 20),
(7, '2020-12-31', 32, 11, 31, 36, 12),
(8, '2021-01-13', 24, 4, 1, 33, 9);

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `gelen_msg`
--

CREATE TABLE `gelen_msg` (
  `id` int(20) NOT NULL,
  `yonetici` int(250) NOT NULL,
  `kullanici` int(250) NOT NULL,
  `msg` varchar(1000) COLLATE utf8_unicode_ci NOT NULL,
  `date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Tablo döküm verisi `gelen_msg`
--

INSERT INTO `gelen_msg` (`id`, `yonetici`, `kullanici`, `msg`, `date`) VALUES
(1, 1, 33, 'merhabalar ', '2021-05-24 02:12:03');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `giden_msg`
--

CREATE TABLE `giden_msg` (
  `id` int(20) NOT NULL,
  `k_id` int(250) NOT NULL,
  `y_id` int(250) NOT NULL,
  `msg` varchar(1000) COLLATE utf8_unicode_ci NOT NULL,
  `date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Tablo döküm verisi `giden_msg`
--

INSERT INTO `giden_msg` (`id`, `k_id`, `y_id`, `msg`, `date`) VALUES
(1, 33, 1, 'merhaba yy', '2021-05-24 02:09:42');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `hediyekutu`
--

CREATE TABLE `hediyekutu` (
  `id` int(255) NOT NULL,
  `hd_adi` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `hd_detay` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `hd_genel` varchar(255) NOT NULL,
  `hd_fiyat` double NOT NULL,
  `img_url` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `detay1` varchar(255) NOT NULL,
  `detay2` varchar(255) NOT NULL,
  `detay3` varchar(255) NOT NULL,
  `detay4` varchar(255) NOT NULL,
  `detay5` varchar(255) NOT NULL,
  `detay6` varchar(255) NOT NULL,
  `detay7` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Tablo döküm verisi `hediyekutu`
--

INSERT INTO `hediyekutu` (`id`, `hd_adi`, `hd_detay`, `hd_genel`, `hd_fiyat`, `img_url`, `detay1`, `detay2`, `detay3`, `detay4`, `detay5`, `detay6`, `detay7`) VALUES
(2, 'ETİ Çikolata Hediye Kutumuz', 'ETİ Markasının Oldukça Lezzetli Çikolataları İle Sevdiklerinizi Mutlu Edin', 'ETİ Markasının Birbirinden Lezzetli Çikolatalarla Dolu Kutumuz Sevdiklerinize Harika Bir Hediye.\r\n <br>Çikolata da ETİ\'den vazgeçemeyenlere..', 110.5, 'hkutu1.png', 'ETİ KARAM BİTTER ÇİKOLATA', 'ETİ AHENK SÜTLÜ ÇİKOLATA', 'ETİ ÇİFTE KAVRULMUŞ FINDIKLI ÇİKOLATA', 'ETİ SÜTLÜ ÇİKOLATA', 'ETİ KARAM BADEMLİ PORTAKALLI ÇİKOLATA', '', ''),
(3, 'Karışık Çikolatalı Hediye Kutumuz', '4 Farklı Markanın Oldukça Lezzetli Çikolataları İle Sevdiklerinizi Mutlu Edin', 'Birbirinden Kaliteli Markaların Lezzetli Çikolataları İle Çikolata Tutkunu Sevdikleriniz İçin Vazgeçilmez Süpriz..', 120, 'hkutu2.png', 'ÜLKER ANTEP FISTIKLI BEYAZ ÇİKOLATA', 'VİNCE SÜTLÜ ÇİKOLATA', 'TORLU SÜTLÜ ÇİKOLATA', 'ÜLKER KIŞ SERİSİ ÇİKOLATA', 'ETİ SÜTLÜ ÇİKOLATA', 'ÜLKER BEYAZ ÇİKOLATA', ''),
(4, 'Türk Kahveli Hediye Kutumuz', 'Türk Kahvesi İle Sevdiklerinizde 40 Yıl Hatırınız Olsun', 'Türk Kahvesi Tutkunları Sevdiklerinizde Hediyeniz İle 40 Yıl Hatırınız Kalsın.\r\nKahvesi Sizden Sohbeti Sevdiklerinizden..', 125, 'hkutu3.png', 'KURU KAHVECİ MEHMET EFENDİ TÜRK KAHVESİ', 'TORKU ANTEP FISTIKLI LOKUM', 'KEYFE DAMLA SAKIZLI TÜRK KAHVESİ', 'ÜLKER KAN PORTAKALLI & FINDIKLI ÇİKOLATA', 'ÜLKER TUZLU KARAMEL & BADEMLİ ÇİKOLATA', '', ''),
(5, 'ÜLKER Çikolata Kutumuz', 'ÜLKER Markasının Oldukça Lezzetli Çikolataları İle Sevdiklerinizi Mutlu Edin', 'ÜLKER Markasının Birbirinden Lezzetli Çikolatalarla Dolu Kutumuz Sevdiklerinize Harika Bir Hediye.\r\n <br>Çikolata da ÜLKER\'den vazgeçemeyenlere..', 122.5, 'hkutu4.png', 'ÜLKER ANTEP FISTIKLI BEYAZ ÇİKOLATA', 'ÜLKER SÜTLÜ ÇİKOLATA', 'ÜLKER ANTEP FISTIKLI  ÇİKOLATA', 'ÜLKER ÜZÜMLÜ & FINDIKLI ÇİKOLATA', 'ÜLKER STİCK FINDIKLI ÇİKOLATA', 'ÜLKER STİCK SÜTLÜ ÇİKOLATA', 'ÜLKER STİCK ANTEP FISTIKLI ÇİKOLATA'),
(6, 'Ayıcıklı Kuvertür Çikolata Kutumuz', '3 Farklı Çeşit Kuvertür Çikolata Ve Sevimli Ayıcıkla Değerli Hissettirin.', 'Sevgilinizi/Arkadaşınızı Hem Büyük Boy Çikolata İle Mutlu Edin Hem de Ayıcık İle Daima Hatırlanın..', 200, 'hkutu5.png', 'ÜLKER BİTTER KUVERTÜR ÇİKOLATA', 'ÜLKER FİLDİŞİ KUVERTÜR ÇİKOLATA', 'ÜLKER SÜTLÜ KUVERTÜR ÇİKOLATA', 'PELUŞ AYICIK', '', '', '');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `indirim`
--

CREATE TABLE `indirim` (
  `id` int(255) NOT NULL,
  `indirim_adi` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Tablo döküm verisi `indirim`
--

INSERT INTO `indirim` (`id`, `indirim_adi`) VALUES
(1, 'KUTU10'),
(2, 'KUTU20'),
(3, 'KUTU15'),
(4, 'KUTU5');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `kategori`
--

CREATE TABLE `kategori` (
  `ktg_id` int(255) NOT NULL,
  `ktg_adi` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Tablo döküm verisi `kategori`
--

INSERT INTO `kategori` (`ktg_id`, `ktg_adi`) VALUES
(11, 'Çikolata'),
(12, 'Bisküvi'),
(13, 'Kraker'),
(14, 'Kek'),
(15, 'Cips');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `kullanici`
--

CREATE TABLE `kullanici` (
  `kullanici_id` int(20) NOT NULL,
  `ad` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `soyad` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `kullanici_adi` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `kullanici_sifre` varchar(15) COLLATE utf8_unicode_ci NOT NULL,
  `kullanici_eposta` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `k_il` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `k_ilce` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `kullanici_adres` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `kullanici_telefonNo` bigint(13) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Tablo döküm verisi `kullanici`
--

INSERT INTO `kullanici` (`kullanici_id`, `ad`, `soyad`, `kullanici_adi`, `kullanici_sifre`, `kullanici_eposta`, `k_il`, `k_ilce`, `kullanici_adres`, `kullanici_telefonNo`) VALUES
(29, 'dilara', 'sevinç', 'dilarasevinc', '123456789', 'ds@gmail.com', 'Tekirdağ', 'Şarköy', 'HOŞKÖY MAHALLESİ', 5246987452),
(32, 'haru', 'ışık', 'harubey', '123456789', 'haru@gmail.com', 'balıkesir', 'altıeylül', 'sdgsfghhngmjlkşijhglfabdjgvdfdjlfkşdlgfb', 12345678923),
(33, 'Dilara', 'Işık', 'uyuyanzombi', 'uyuyanzombi', 'dlr@gmail.com', 'Balıkesir', 'Altıeylül', 'Dinkçiler Mahallesi soma caddesi no:22-26', 5546504842),
(34, 'ali', 'veli', 'ali', 'ali123456', 'ali@gmail.com', 'sadfghgdfsdas', 'sadsdfgfsdas', 'sddfgghlşlkhgjhcchvbngyyhdbfakdf', 55555555555);

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `kullanilan_kupon`
--

CREATE TABLE `kullanilan_kupon` (
  `id` int(50) NOT NULL,
  `kullanici_id` int(20) NOT NULL,
  `kupon_id` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Tablo döküm verisi `kullanilan_kupon`
--

INSERT INTO `kullanilan_kupon` (`id`, `kullanici_id`, `kupon_id`) VALUES
(1, 33, 1),
(5, 29, 1);

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `kupon`
--

CREATE TABLE `kupon` (
  `id` int(10) NOT NULL,
  `kupon_adi` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `deger` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Tablo döküm verisi `kupon`
--

INSERT INTO `kupon` (`id`, `kupon_adi`, `deger`) VALUES
(1, 'TRSNCK', 10);

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `kutu_sdetay`
--

CREATE TABLE `kutu_sdetay` (
  `siparis_id` int(11) NOT NULL,
  `order_id` int(11) NOT NULL,
  `kutu_ad` varchar(20) NOT NULL,
  `kutu_fiyat` float NOT NULL,
  `kutu_adet` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Tablo döküm verisi `kutu_sdetay`
--

INSERT INTO `kutu_sdetay` (`siparis_id`, `order_id`, `kutu_ad`, `kutu_fiyat`, `kutu_adet`) VALUES
(4, 6, 'Yıllık', 190, 1),
(5, 12, '3Ay', 55, 1),
(6, 13, '3Ay', 55, 1),
(7, 15, 'Ay', 20, 1),
(8, 16, '6Ay', 100, 1);

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `kutu_siparis`
--

CREATE TABLE `kutu_siparis` (
  `order_id` int(11) NOT NULL,
  `kullanici_id` int(11) NOT NULL,
  `alici_adisoyadi` varchar(255) NOT NULL,
  `telefon` bigint(11) NOT NULL,
  `adres_baslik` varchar(255) NOT NULL,
  `adres` varchar(255) NOT NULL,
  `tarih` date NOT NULL DEFAULT current_timestamp(),
  `toplam` float NOT NULL,
  `odeme_tipi` varchar(15) NOT NULL,
  `durum` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Tablo döküm verisi `kutu_siparis`
--

INSERT INTO `kutu_siparis` (`order_id`, `kullanici_id`, `alici_adisoyadi`, `telefon`, `adres_baslik`, `adres`, `tarih`, `toplam`, `odeme_tipi`, `durum`) VALUES
(6, 29, 'dilara sevinç', 5246987452, 'yurt', 'HOŞKÖY MAHALLESİ', '2021-01-18', 0.19, 'kredi kart', '6.ay teslim edildi'),
(12, 33, 'Dilara Işık', 5546504842, 'Dinkçiler Mahallesi soma caddesi no:22-26', 'Dinkçiler Mahallesi soma caddesi no:22-26', '2021-01-18', 0.55, 'kredi kart', '1.ay teslim edildi'),
(13, 32, 'haru', 66666666666, 'ev', 'asdtfygufdhıojkvclnkeksbehsbcehsfjhjd', '2021-01-18', 0.55, 'kredi kart', 'teslim edildi'),
(15, 33, 'Dilara Işık', 5546504842, 'haru ev', 'Dinkçiler Mahallesi soma caddesi no:22-26\r\nkat:2 daire:18 iç kapı no:208', '2021-01-20', 20, 'kredi kart', 'siparişiniz alındı'),
(16, 33, 'Dilara Işık', 5546504842, 'asdsadsadsfassaffafafsafa', 'Dinkçiler Mahallesi soma caddesi no:22-26\r\nkat:2 daire:18 iç kapı no:208', '2021-01-20', 100, 'kredi kart', 'siparişiniz alındı');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `rastgelekutu`
--

CREATE TABLE `rastgelekutu` (
  `id` int(255) NOT NULL,
  `rs_kutu_adi` varchar(20) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `kullanici_id` int(11) NOT NULL,
  `img_url` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `detay` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `rs_fiyat` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Tablo döküm verisi `rastgelekutu`
--

INSERT INTO `rastgelekutu` (`id`, `rs_kutu_adi`, `kullanici_id`, `img_url`, `detay`, `rs_fiyat`) VALUES
(2, 'Standart Kutu', 26, 'kutu2.jpg', 'Ücretsizdir Logomuz Kapak Üzerinde Yer Almaktadır.\r\n ', 6),
(3, 'Yılbaşı Kutu', 9, 'kutu4.jpg', 'En Güzel Yeni Yıl Hediyesini Siz Verin.', 6),
(4, 'Kişiye Özel Kutu', 27, 'kutu1.jpg', 'Kişiye Özel Kutu İle Değerli Hissettirin.', 6),
(5, 'Doğum Günü Kutu', 28, 'kutu3.jpg', 'En Güzel Doğum Günü Hediyesini Siz Verin.', 6);

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `siparis`
--

CREATE TABLE `siparis` (
  `order_id` int(20) NOT NULL,
  `kullanici_id` int(20) NOT NULL,
  `alici_adisoyadi` varchar(20) NOT NULL,
  `telefon` bigint(11) NOT NULL,
  `adres_baslik` varchar(10) NOT NULL,
  `adres` varchar(50) NOT NULL,
  `tarih` date NOT NULL DEFAULT current_timestamp(),
  `toplam` float NOT NULL,
  `odeme_tipi` varchar(15) NOT NULL,
  `durum` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Tablo döküm verisi `siparis`
--

INSERT INTO `siparis` (`order_id`, `kullanici_id`, `alici_adisoyadi`, `telefon`, `adres_baslik`, `adres`, `tarih`, `toplam`, `odeme_tipi`, `durum`) VALUES
(5, 33, 'Dilara Işık', 5546504842, 'Dinkçiler ', 'Dinkçiler Mahallesi soma caddesi no:22-26\r\nkat:2 d', '2021-01-20', 6.75, 'kredi kart', 'teslim edildi'),
(7, 33, 'Dilara Işık', 5546504842, 'SZFDZFDSFD', 'Dinkçiler Mahallesi soma caddesi no:22-26\r\nkat:2 d', '2021-01-20', 7.75, 'kredi kart', 'teslim edildi'),
(8, 33, 'Dilara Işık', 5546504842, 'blabla', 'Dinkçiler Mahallesi soma caddesi no:22-26\r\nkat:2 d', '2021-01-20', 5.25, 'kredi kart', 'kargoya verildi'),
(10, 33, 'qwertyyuıoott', 5546504842, 'Dinkçiler ', 'kat:2 daire:18 iç kapı no:208', '2021-03-28', 8.75, 'kredi kart', 'kargoya verildi'),
(11, 33, 'qwertyyuıoott', 5546504842, 'Dinkçiler ', 'kat:2 daire:18 iç kapı no:208', '2021-03-28', 8.75, 'kredi kart', 'siparişiniz alındı'),
(12, 33, 'ali dasdsad', 44444444444, 'Dinkçiler ', '566666666663', '2021-03-28', 6.75, 'kredi kart', 'siparişiniz alındı'),
(15, 33, 'Dilara Işık', 5546504842, 'srdtfyguhı', 'Dinkçiler Mahallesi soma caddesi no:22-26\r\nkat:2 d', '2021-03-28', 3.75, 'kredi kart', 'kargoya verildi'),
(16, 29, 'Dilara Işık', 5546504842, 'asdfghuıkl', 'Dinkçiler Mahallesi soma caddesi no:22-26\r\nkat:2 d', '2021-03-29', 2, 'kredi kart', 'kargoya verildi'),
(17, 29, 'Dilara Işık', 5546504842, 'wdwd', 'Dinkçiler Mahallesi soma caddesi no:22-26\r\nkat:2 d', '2021-03-29', 2, 'kredi kart', 'kargoya verildi'),
(18, 29, 'ali dasdsad', 65989545896, '56666', 'Dinkçiler Mahallesi soma caddesi no:22-26', '2021-03-29', 6.5, 'kredi kart', 'siparişiniz alındı'),
(21, 29, 'ahmet', 44444444444, 'Yurt', 'yorulmaz mahallesi no:55/A', '2021-03-29', 4.5, 'kredi kart', 'siparişiniz alındı'),
(22, 29, 'Dilara', 555555555555, 'haru', 'Dinkçiler Mahallesi soma caddesi no:22-26', '2021-03-29', 2.5, 'kredi kart', 'siparişiniz alındı'),
(23, 33, 'ali', 88888888888, 'iş', 'Dinkçiler Mahallesi soma caddesi no:22-26', '2021-03-31', 7.25, 'kredi kart', 'siparişiniz alındıaaaa'),
(27, 33, 'Dinkçiler Mahallesi ', 5546504842, 'assdf', 'Dinkçiler Mahallesi soma caddesi no:22-26', '2021-03-31', 3, 'kredi kart', 'siparişiniz alındı'),
(28, 33, 'ali', 88888888888, 'iş', 'Dinkçiler Mahallesi soma caddesi no:22-26', '2021-03-31', 2, 'kredi kart', 'siparişiniz alındı'),
(29, 33, 'Dinkçiler Mahallesi ', 5546504842, 'haru ev', 'Dinkçiler Mahallesi soma caddesi no:22-26', '2021-03-31', 5, 'kredi kart', 'siparişiniz alındı'),
(30, 33, 'dsadasdasdas', 5546504842, 'asdsadsad', 'Dinkçiler Mahallesi soma caddesi no:22-26', '2021-03-31', 2, 'kredi kart', 'teslim edildi'),
(34, 29, 'ahmet', 44444444444, 'Yurt', 'yorulmaz mahallesi no:55/A', '2021-04-05', 3.75, 'kredi kart', 'siparişiniz alındı'),
(36, 29, 'ahmet', 44444444444, 'Yurt', 'yorulmaz mahallesi no:55/A', '2021-04-05', 3.75, 'kredi kart', 'siparişiniz alındı'),
(40, 29, 'Dilara', 555555555555, 'haru', 'Dinkçiler Mahallesi soma caddesi no:22-26', '2021-04-05', -8, 'kredi kart', 'siparişiniz alındı'),
(41, 29, 'Dilara', 555555555555, 'haru', 'Dinkçiler Mahallesi soma caddesi no:22-26', '2021-04-05', -7, 'kredi kart', 'siparişiniz alındı'),
(45, 29, 'ahmet', 44444444444, 'Yurt', 'yorulmaz mahallesi no:55/A', '2021-04-05', -8, 'kredi kart', 'siparişiniz alındı'),
(46, 29, 'ahmet', 44444444444, 'Yurt', 'yorulmaz mahallesi no:55/A', '2021-04-05', 2.5, 'kredi kart', 'siparişiniz alındı'),
(51, 29, 'ahmet', 44444444444, 'Yurt', 'yorulmaz mahallesi no:55/A', '2021-04-05', -6.25, 'kredi kart', 'siparişiniz alındı'),
(53, 29, 'ahmet', 44444444444, 'Yurt', 'yorulmaz mahallesi no:55/A', '2021-04-05', -8, 'kredi kart', 'siparişiniz alındı'),
(54, 29, 'ahmet', 44444444444, 'Yurt', 'yorulmaz mahallesi no:55/A', '2021-04-05', -8, 'kredi kart', 'siparişiniz alındı'),
(55, 29, 'Dilara', 555555555555, 'haru', 'Dinkçiler Mahallesi soma caddesi no:22-26', '2021-04-05', -7, 'kredi kart', 'siparişiniz alındı'),
(58, 29, 'Dilara', 555555555555, 'haru', 'Dinkçiler Mahallesi soma caddesi no:22-26', '2021-04-05', -6.25, 'kredi kart', 'siparişiniz alındı'),
(59, 29, 'ahmet', 44444444444, 'Yurt', 'yorulmaz mahallesi no:55/A', '2021-04-14', -5, 'kredi kart', 'siparişiniz alındı'),
(60, 33, 'ali', 88888888888, 'iş', 'Dinkçiler Mahallesi soma caddesi no:22-26', '2021-04-29', 9, 'kredi kart', 'siparişiniz alındı');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `siparis_detay`
--

CREATE TABLE `siparis_detay` (
  `siparis_id` int(50) NOT NULL,
  `order_id` int(20) NOT NULL,
  `urun_id` int(10) NOT NULL,
  `urun_fiyati` float NOT NULL,
  `urun_adedi` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Tablo döküm verisi `siparis_detay`
--

INSERT INTO `siparis_detay` (`siparis_id`, `order_id`, `urun_id`, `urun_fiyati`, `urun_adedi`) VALUES
(10, 5, 3, 3, 1),
(11, 5, 7, 3.75, 1),
(12, 7, 2, 2, 1),
(13, 7, 3, 3, 1),
(14, 7, 8, 2.75, 1),
(15, 8, 3, 3, 1),
(16, 8, 24, 0.75, 1),
(17, 8, 36, 0.75, 1),
(18, 8, 31, 0.75, 1),
(20, 10, 3, 3, 1),
(21, 10, 1, 2, 1),
(22, 10, 7, 3.75, 1),
(23, 11, 3, 3, 1),
(24, 11, 1, 2, 1),
(25, 11, 7, 3.75, 1),
(26, 12, 3, 3, 1),
(27, 12, 7, 3.75, 1),
(30, 15, 7, 3.75, 1),
(31, 16, 2, 2, 1),
(32, 17, 2, 2, 1),
(33, 18, 2, 2, 1),
(34, 18, 4, 2.5, 1),
(35, 18, 6, 2, 1),
(38, 21, 2, 2, 1),
(39, 21, 4, 2.5, 1),
(40, 22, 4, 2.5, 1),
(41, 23, 10, 3.5, 1),
(42, 23, 7, 3.75, 1),
(47, 27, 3, 3, 1),
(48, 28, 2, 2, 1),
(49, 29, 3, 3, 1),
(50, 29, 2, 2, 1),
(51, 30, 2, 2, 1),
(55, 34, 7, 3.75, 1),
(57, 36, 7, 3.75, 1),
(61, 40, 2, 2, 1),
(62, 41, 3, 3, 1),
(66, 45, 2, 2, 1),
(67, 46, 4, 2.5, 1),
(72, 51, 7, 3.75, 1),
(74, 53, 6, 2, 1),
(75, 54, 2, 2, 1),
(76, 55, 3, 3, 1),
(79, 58, 7, 3.75, 1),
(80, 59, 2, 2, 1),
(81, 59, 3, 3, 1),
(82, 60, 1, 6, 1),
(83, 60, 5, 3, 1);

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `urunleri`
--

CREATE TABLE `urunleri` (
  `id` int(20) NOT NULL,
  `ktg_id` int(255) NOT NULL,
  `urun_adi` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `img_url` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `urun_adedi` int(20) NOT NULL,
  `urun_fiyat` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Tablo döküm verisi `urunleri`
--

INSERT INTO `urunleri` (`id`, `ktg_id`, `urun_adi`, `img_url`, `urun_adedi`, `urun_fiyat`) VALUES
(1, 12, 'Biskrem Double Keyif', 'bisküvi2.jpg', 20, 6),
(2, 12, 'Biskrem Ekstra', 'bisküvi3.jpg', 20, 6),
(3, 12, 'Biskrem Mini', 'bisküvi4.jpg', 40, 3),
(4, 12, 'Ülker Kakaolu Bisküvi', 'bisküvi5.jpg', 15, 2.5),
(5, 12, 'Ülker İkram', 'bisküvi6.jpg', 30, 3),
(6, 12, 'Ülker Hanımeller', 'bisküvi7.jpg', 35, 2),
(7, 12, 'Ülker 9 Kat Tat', 'bisküvi8.jpg', 30, 3.75),
(8, 11, 'Eti Karam', 'cikolata1.jpg', 20, 2.75),
(9, 11, 'Eti Wanted', 'cikolata2.jpg', 60, 3),
(10, 11, 'Ülker Caramio', 'cikolata4.jpg', 50, 3.5),
(11, 11, 'Eti Fındıklı Kare Çikolata', 'cikolata5.jpg', 45, 6.5),
(12, 11, 'Torku Çokofest', 'cikolata6.jpg', 30, 5.5),
(15, 15, 'Cipso Ketçaplı', 'cips1.jpg', 40, 4),
(20, 15, 'Patos Acılı', 'cips2.jpg', 60, 4),
(23, 13, 'eti balık kraker', 'eti_balik_kraker.png', 48, 1.5),
(24, 12, 'Eti Puf Çilekli', 'puf2.jpg', 63, 0.75),
(30, 14, 'Ülker 8 Kek', 'kek3.jpg', 30, 1),
(31, 14, 'Ülker Kekstra', 'kek4.jpg', 40, 0.75),
(32, 14, 'Dankek Pöti', 'kek5.jpg', 30, 1),
(33, 13, 'Eti Crax', 'kraker2.jpg', 50, 1),
(34, 13, 'Ülker Krispi Tırtıklı', 'kraker4.jpg', 40, 1.5),
(35, 13, 'Eti Crax Acılı', 'kraker6.jpg', 40, 1.5),
(36, 12, 'eti puf kakaolu', 'puf3.jpg', 30, 0.75),
(37, 14, 'Torku Hep Kek', 'kek8.jpg', 20, 3),
(38, 14, 'Torku Enjoy Çoko', 'kek9.jpg', 20, 3),
(39, 14, 'Ülkek Olala', 'kek10.jpg', 20, 3.5),
(40, 14, 'Eti Topkek', 'kek11.jpg', 20, 1.25),
(41, 14, 'Eti Sosbom', 'kek12.jpg', 20, 2),
(42, 14, 'Torku Gala', 'kek13.jpg', 20, 2.5),
(43, 15, 'Chips Master Klasik', 'cips3.jpg', 20, 5),
(44, 15, 'Cipso Deniz Tuzlu', 'cips4.jpg', 20, 5),
(45, 15, 'Patos Baharatlı', 'cips5.jpg', 20, 5),
(46, 15, 'Cipso Atom', 'cips6.jpg', 20, 5),
(47, 13, 'Eti Balık Kraker', 'kraker1.jpg', 20, 2.5),
(48, 11, 'Eti Wanted Hindistan Cevizli', 'cikolata3.jpg', 25, 2),
(49, 11, 'Eti Karam Antep Fıstıklı', 'cikolata7.jpg', 25, 7),
(50, 11, 'Eti Fındıklı Çikolata', 'cikolata9.jpg', 20, 5);

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `yillik`
--

CREATE TABLE `yillik` (
  `yillik_id` int(255) NOT NULL,
  `yillik_k_adi` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `yillik_k_fiyat` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Tablo döküm verisi `yillik`
--

INSERT INTO `yillik` (`yillik_id`, `yillik_k_adi`, `yillik_k_fiyat`) VALUES
(1, 'Yıllık', 190);

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
-- Tablo döküm verisi `yonetici`
--

INSERT INTO `yonetici` (`yonetici_id`, `yonetici_adi`, `yonetici_sifre`, `yonetici_eposta`) VALUES
(1, 'dilara', '123698745', 'ds@gmail.com'),
(2, 'haru ', 'haru123', 'harubey@gmail.com');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `yorumlar`
--

CREATE TABLE `yorumlar` (
  `id` int(11) NOT NULL,
  `kutu_id` int(11) NOT NULL,
  `k_adi` varchar(255) NOT NULL,
  `kullanici_id` int(11) NOT NULL,
  `kt_adi` varchar(255) NOT NULL,
  `k_yorum` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `tarih` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Tablo döküm verisi `yorumlar`
--

INSERT INTO `yorumlar` (`id`, `kutu_id`, `k_adi`, `kullanici_id`, `kt_adi`, `k_yorum`, `tarih`) VALUES
(37, 3, 'dilarasevinc', 29, 'Karışık Çikolatalı Hediye Kutumuz', 'ürün harika elime hızlı ulaştı', '2021-04-13'),
(38, 3, 'harubey', 32, 'Karışık Çikolatalı Hediye Kutumuz', 'asdfghjkjhgfds', '2021-04-13'),
(39, 3, 'dilarasevinc', 29, 'Karışık Çikolatalı Hediye Kutumuz', 'heeey', '2021-04-14'),
(45, 3, 'dilarasevinc', 29, 'Karışık Çikolatalı Hediye Kutumuz', 'heeey', '2021-04-14');

--
-- Dökümü yapılmış tablolar için indeksler
--

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
  ADD PRIMARY KEY (`aylik_id`);

--
-- Tablo için indeksler `aylik_3`
--
ALTER TABLE `aylik_3`
  ADD PRIMARY KEY (`aylik_id`);

--
-- Tablo için indeksler `aylik_6`
--
ALTER TABLE `aylik_6`
  ADD PRIMARY KEY (`aylik_id`);

--
-- Tablo için indeksler `chat`
--
ALTER TABLE `chat`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `chatbot`
--
ALTER TABLE `chatbot`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `chat_detay`
--
ALTER TABLE `chat_detay`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id` (`id`),
  ADD KEY `chat_fk` (`chat_id`);

--
-- Tablo için indeksler `eski_kutular`
--
ALTER TABLE `eski_kutular`
  ADD PRIMARY KEY (`icerik_id`),
  ADD KEY `urunid1_icerikfk` (`urun1_id`),
  ADD KEY `urunid2_icerikfk` (`urun2_id`),
  ADD KEY `urunid3_icerikfk` (`urun3_id`),
  ADD KEY `urunid4_icerikfk` (`urun4_id`),
  ADD KEY `urunid5_icerikfk` (`urun5_id`);

--
-- Tablo için indeksler `gelen_msg`
--
ALTER TABLE `gelen_msg`
  ADD PRIMARY KEY (`id`),
  ADD KEY `yoneticiye_gelen_id` (`kullanici`),
  ADD KEY `yonetici_id` (`yonetici`);

--
-- Tablo için indeksler `giden_msg`
--
ALTER TABLE `giden_msg`
  ADD PRIMARY KEY (`id`),
  ADD KEY `gönderen_kullanici` (`k_id`),
  ADD KEY `gönderilen_yonetici` (`y_id`);

--
-- Tablo için indeksler `hediyekutu`
--
ALTER TABLE `hediyekutu`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `indirim`
--
ALTER TABLE `indirim`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `kategori`
--
ALTER TABLE `kategori`
  ADD PRIMARY KEY (`ktg_id`);

--
-- Tablo için indeksler `kullanici`
--
ALTER TABLE `kullanici`
  ADD PRIMARY KEY (`kullanici_id`);

--
-- Tablo için indeksler `kullanilan_kupon`
--
ALTER TABLE `kullanilan_kupon`
  ADD PRIMARY KEY (`id`),
  ADD KEY `kupon_kullanicifk` (`kullanici_id`),
  ADD KEY `kuponfk` (`kupon_id`);

--
-- Tablo için indeksler `kupon`
--
ALTER TABLE `kupon`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id` (`id`);

--
-- Tablo için indeksler `kutu_sdetay`
--
ALTER TABLE `kutu_sdetay`
  ADD PRIMARY KEY (`siparis_id`),
  ADD UNIQUE KEY `siparis_id` (`siparis_id`),
  ADD KEY `siparis_idfk` (`order_id`);

--
-- Tablo için indeksler `kutu_siparis`
--
ALTER TABLE `kutu_siparis`
  ADD PRIMARY KEY (`order_id`),
  ADD KEY `kullanici_idf` (`kullanici_id`);

--
-- Tablo için indeksler `rastgelekutu`
--
ALTER TABLE `rastgelekutu`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `siparis`
--
ALTER TABLE `siparis`
  ADD PRIMARY KEY (`order_id`),
  ADD KEY `kullanicifk` (`kullanici_id`);

--
-- Tablo için indeksler `siparis_detay`
--
ALTER TABLE `siparis_detay`
  ADD PRIMARY KEY (`siparis_id`),
  ADD UNIQUE KEY `siparis_id` (`siparis_id`),
  ADD KEY `orderfk` (`urun_id`),
  ADD KEY `order2fk` (`order_id`);

--
-- Tablo için indeksler `urunleri`
--
ALTER TABLE `urunleri`
  ADD PRIMARY KEY (`id`),
  ADD KEY `ktgfk` (`ktg_id`);

--
-- Tablo için indeksler `yillik`
--
ALTER TABLE `yillik`
  ADD PRIMARY KEY (`yillik_id`);

--
-- Tablo için indeksler `yonetici`
--
ALTER TABLE `yonetici`
  ADD PRIMARY KEY (`yonetici_id`);

--
-- Tablo için indeksler `yorumlar`
--
ALTER TABLE `yorumlar`
  ADD PRIMARY KEY (`id`);

--
-- Dökümü yapılmış tablolar için AUTO_INCREMENT değeri
--

--
-- Tablo için AUTO_INCREMENT değeri `adres`
--
ALTER TABLE `adres`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;

--
-- Tablo için AUTO_INCREMENT değeri `aylik`
--
ALTER TABLE `aylik`
  MODIFY `aylik_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Tablo için AUTO_INCREMENT değeri `aylik_3`
--
ALTER TABLE `aylik_3`
  MODIFY `aylik_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Tablo için AUTO_INCREMENT değeri `aylik_6`
--
ALTER TABLE `aylik_6`
  MODIFY `aylik_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Tablo için AUTO_INCREMENT değeri `chat`
--
ALTER TABLE `chat`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- Tablo için AUTO_INCREMENT değeri `chatbot`
--
ALTER TABLE `chatbot`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- Tablo için AUTO_INCREMENT değeri `chat_detay`
--
ALTER TABLE `chat_detay`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- Tablo için AUTO_INCREMENT değeri `eski_kutular`
--
ALTER TABLE `eski_kutular`
  MODIFY `icerik_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- Tablo için AUTO_INCREMENT değeri `giden_msg`
--
ALTER TABLE `giden_msg`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Tablo için AUTO_INCREMENT değeri `hediyekutu`
--
ALTER TABLE `hediyekutu`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- Tablo için AUTO_INCREMENT değeri `indirim`
--
ALTER TABLE `indirim`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Tablo için AUTO_INCREMENT değeri `kategori`
--
ALTER TABLE `kategori`
  MODIFY `ktg_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- Tablo için AUTO_INCREMENT değeri `kullanici`
--
ALTER TABLE `kullanici`
  MODIFY `kullanici_id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- Tablo için AUTO_INCREMENT değeri `kullanilan_kupon`
--
ALTER TABLE `kullanilan_kupon`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Tablo için AUTO_INCREMENT değeri `kutu_sdetay`
--
ALTER TABLE `kutu_sdetay`
  MODIFY `siparis_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- Tablo için AUTO_INCREMENT değeri `kutu_siparis`
--
ALTER TABLE `kutu_siparis`
  MODIFY `order_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- Tablo için AUTO_INCREMENT değeri `rastgelekutu`
--
ALTER TABLE `rastgelekutu`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Tablo için AUTO_INCREMENT değeri `siparis`
--
ALTER TABLE `siparis`
  MODIFY `order_id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=61;

--
-- Tablo için AUTO_INCREMENT değeri `siparis_detay`
--
ALTER TABLE `siparis_detay`
  MODIFY `siparis_id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=84;

--
-- Tablo için AUTO_INCREMENT değeri `urunleri`
--
ALTER TABLE `urunleri`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;

--
-- Tablo için AUTO_INCREMENT değeri `yillik`
--
ALTER TABLE `yillik`
  MODIFY `yillik_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Tablo için AUTO_INCREMENT değeri `yonetici`
--
ALTER TABLE `yonetici`
  MODIFY `yonetici_id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Tablo için AUTO_INCREMENT değeri `yorumlar`
--
ALTER TABLE `yorumlar`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=46;

--
-- Dökümü yapılmış tablolar için kısıtlamalar
--

--
-- Tablo kısıtlamaları `adres`
--
ALTER TABLE `adres`
  ADD CONSTRAINT `kullanici_idfk` FOREIGN KEY (`kullanici_id`) REFERENCES `kullanici` (`kullanici_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Tablo kısıtlamaları `chat_detay`
--
ALTER TABLE `chat_detay`
  ADD CONSTRAINT `chat_fk` FOREIGN KEY (`chat_id`) REFERENCES `chat` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Tablo kısıtlamaları `eski_kutular`
--
ALTER TABLE `eski_kutular`
  ADD CONSTRAINT `urunid1_icerikfk` FOREIGN KEY (`urun1_id`) REFERENCES `urunleri` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `urunid2_icerikfk` FOREIGN KEY (`urun2_id`) REFERENCES `urunleri` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `urunid3_icerikfk` FOREIGN KEY (`urun3_id`) REFERENCES `urunleri` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `urunid4_icerikfk` FOREIGN KEY (`urun4_id`) REFERENCES `urunleri` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `urunid5_icerikfk` FOREIGN KEY (`urun5_id`) REFERENCES `urunleri` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Tablo kısıtlamaları `gelen_msg`
--
ALTER TABLE `gelen_msg`
  ADD CONSTRAINT `yonetici_id` FOREIGN KEY (`yonetici`) REFERENCES `yonetici` (`yonetici_id`),
  ADD CONSTRAINT `yoneticiye_gelen_id` FOREIGN KEY (`kullanici`) REFERENCES `kullanici` (`kullanici_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Tablo kısıtlamaları `giden_msg`
--
ALTER TABLE `giden_msg`
  ADD CONSTRAINT `gönderen_kullanici` FOREIGN KEY (`k_id`) REFERENCES `kullanici` (`kullanici_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `gönderilen_yonetici` FOREIGN KEY (`y_id`) REFERENCES `yonetici` (`yonetici_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Tablo kısıtlamaları `kullanilan_kupon`
--
ALTER TABLE `kullanilan_kupon`
  ADD CONSTRAINT `kupon_kullanicifk` FOREIGN KEY (`kullanici_id`) REFERENCES `kullanici` (`kullanici_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `kuponfk` FOREIGN KEY (`kupon_id`) REFERENCES `kupon` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Tablo kısıtlamaları `kutu_sdetay`
--
ALTER TABLE `kutu_sdetay`
  ADD CONSTRAINT `siparis_idfk` FOREIGN KEY (`order_id`) REFERENCES `kutu_siparis` (`order_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Tablo kısıtlamaları `kutu_siparis`
--
ALTER TABLE `kutu_siparis`
  ADD CONSTRAINT `kullanici_idf` FOREIGN KEY (`kullanici_id`) REFERENCES `kullanici` (`kullanici_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Tablo kısıtlamaları `siparis`
--
ALTER TABLE `siparis`
  ADD CONSTRAINT `kullanicifk` FOREIGN KEY (`kullanici_id`) REFERENCES `kullanici` (`kullanici_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Tablo kısıtlamaları `siparis_detay`
--
ALTER TABLE `siparis_detay`
  ADD CONSTRAINT `order2fk` FOREIGN KEY (`order_id`) REFERENCES `siparis` (`order_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `orderfk` FOREIGN KEY (`urun_id`) REFERENCES `urunleri` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Tablo kısıtlamaları `urunleri`
--
ALTER TABLE `urunleri`
  ADD CONSTRAINT `ktgfk` FOREIGN KEY (`ktg_id`) REFERENCES `kategori` (`ktg_id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

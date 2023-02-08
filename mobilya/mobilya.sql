-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Anamakine: 127.0.0.1
-- Üretim Zamanı: 30 Ara 2022, 14:13:18
-- Sunucu sürümü: 10.4.25-MariaDB
-- PHP Sürümü: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Veritabanı: `mobilya`
--

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `anasayfa`
--

CREATE TABLE `anasayfa` (
  `anasayfaID` int(11) NOT NULL,
  `anasayfaTitle` varchar(255) NOT NULL,
  `anasayfaBaslik` varchar(255) NOT NULL,
  `anasayfaYazi` varchar(255) NOT NULL,
  `anasayfaFirmaAd` varchar(255) NOT NULL,
  `anasayfaArkaPlan` varchar(255) NOT NULL,
  `memnunYazi` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Tablo döküm verisi `anasayfa`
--

INSERT INTO `anasayfa` (`anasayfaID`, `anasayfaTitle`, `anasayfaBaslik`, `anasayfaYazi`, `anasayfaFirmaAd`, `anasayfaArkaPlan`, `memnunYazi`) VALUES
(1, 'Mia Koltuk', 'FİRMA TANITIMIMIZ', 'Firmamız 2000 yılında kurulmuş olup Türkiyenin bir çok şehrinden menuniyet ile karşılanmaktadır.Sizde hemen beğendiğiniz tasarıma sahip olmak istiyorsanız hemen Mia Koltuk\'a gelin!', 'MİA KOLTUK', 'arkaplan.png', 'Dünden bugüne kadar vermiş olduğumuz hizmetler bulunmaktadır');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `hakkimizda`
--

CREATE TABLE `hakkimizda` (
  `hakkimizdaID` int(11) NOT NULL,
  `hakkimizdaYazi` varchar(255) NOT NULL,
  `hakkimizdaFirmaYazi` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Tablo döküm verisi `hakkimizda`
--

INSERT INTO `hakkimizda` (`hakkimizdaID`, `hakkimizdaYazi`, `hakkimizdaFirmaYazi`) VALUES
(1, '2000 yılında kurulan ve günümüze kadar geln kaliteli işçiliği ve kaliteli malzeme kullanımı sonucunda evlerinize renk katmaya devam ediyor', 'Türkiye genelinde olduğu gibi tüm dünyaya da memnun etmek için çalışyor ve uğraşıyoruz.');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `iletisim`
--

CREATE TABLE `iletisim` (
  `iletisimID` int(11) NOT NULL,
  `iletisimAdres` varchar(255) NOT NULL,
  `iletisimTel` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Tablo döküm verisi `iletisim`
--

INSERT INTO `iletisim` (`iletisimID`, `iletisimAdres`, `iletisimTel`) VALUES
(1, 'Yeniceköy, İnegöl Bursa Karayolu 6.km, 16400 İnegöl/Bursa', '0538 861 18 35');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `iletisimform`
--

CREATE TABLE `iletisimform` (
  `iletisimFormID` int(11) NOT NULL,
  `iletisimFormAd` varchar(255) NOT NULL,
  `iletisimFormMail` varchar(255) NOT NULL,
  `iletisimFormMesaj` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Tablo döküm verisi `iletisimform`
--

INSERT INTO `iletisimform` (`iletisimFormID`, `iletisimFormAd`, `iletisimFormMail`, `iletisimFormMesaj`) VALUES
(5, 'asa', 'dsad@ds.sad', 'sdadasffdasfdafsd\r\n'),
(7, 'yusuf', 'balaban@gmail.com', 'sen bu kalbe iyi gelidn bendne hiç gitmesen bu kalbe iyi gelidn bendne hiç gitmesen bu kalbe iyi gelidn bendne hiç gitmesen bu kalbe iyi gelidn bendne hiç gitmesen bu kalbe iyi gelidn bendne hiç gitmesen bu kalbe iyi gelidn bendne hiç gitmesen bu kalbe iy');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `memnun`
--

CREATE TABLE `memnun` (
  `memnunID` int(11) NOT NULL,
  `memnunFoto` varchar(255) NOT NULL,
  `memnunUrl` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Tablo döküm verisi `memnun`
--

INSERT INTO `memnun` (`memnunID`, `memnunFoto`, `memnunUrl`) VALUES
(9, 'client-2.png', 'https://elvanajans.com/');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `urunler`
--

CREATE TABLE `urunler` (
  `urunID` int(11) NOT NULL,
  `urunFoto` varchar(255) NOT NULL,
  `urunAd` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Tablo döküm verisi `urunler`
--

INSERT INTO `urunler` (`urunID`, `urunFoto`, `urunAd`) VALUES
(1, '1.png', 'Dora'),
(2, '2.png', 'Aden'),
(6, 'IMG_2846.JPG', 'Modern ');

--
-- Dökümü yapılmış tablolar için indeksler
--

--
-- Tablo için indeksler `anasayfa`
--
ALTER TABLE `anasayfa`
  ADD PRIMARY KEY (`anasayfaID`);

--
-- Tablo için indeksler `hakkimizda`
--
ALTER TABLE `hakkimizda`
  ADD PRIMARY KEY (`hakkimizdaID`);

--
-- Tablo için indeksler `iletisim`
--
ALTER TABLE `iletisim`
  ADD PRIMARY KEY (`iletisimID`);

--
-- Tablo için indeksler `iletisimform`
--
ALTER TABLE `iletisimform`
  ADD PRIMARY KEY (`iletisimFormID`);

--
-- Tablo için indeksler `memnun`
--
ALTER TABLE `memnun`
  ADD PRIMARY KEY (`memnunID`);

--
-- Tablo için indeksler `urunler`
--
ALTER TABLE `urunler`
  ADD PRIMARY KEY (`urunID`);

--
-- Dökümü yapılmış tablolar için AUTO_INCREMENT değeri
--

--
-- Tablo için AUTO_INCREMENT değeri `anasayfa`
--
ALTER TABLE `anasayfa`
  MODIFY `anasayfaID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Tablo için AUTO_INCREMENT değeri `hakkimizda`
--
ALTER TABLE `hakkimizda`
  MODIFY `hakkimizdaID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Tablo için AUTO_INCREMENT değeri `iletisim`
--
ALTER TABLE `iletisim`
  MODIFY `iletisimID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Tablo için AUTO_INCREMENT değeri `iletisimform`
--
ALTER TABLE `iletisimform`
  MODIFY `iletisimFormID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- Tablo için AUTO_INCREMENT değeri `memnun`
--
ALTER TABLE `memnun`
  MODIFY `memnunID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- Tablo için AUTO_INCREMENT değeri `urunler`
--
ALTER TABLE `urunler`
  MODIFY `urunID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

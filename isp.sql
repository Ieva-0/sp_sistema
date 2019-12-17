-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 14, 2019 at 12:53 AM
-- Server version: 10.4.8-MariaDB
-- PHP Version: 7.1.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `isp`
--

-- --------------------------------------------------------

--
-- Table structure for table `auditorija`
--

CREATE TABLE `auditorija` (
  `kabineto_Nr` varchar(255) NOT NULL,
  `adresas` varchar(255) NOT NULL,
  `vietu_skaicius` int(11) NOT NULL,
  `id_Auditorija` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `auditorija`
--

INSERT INTO `auditorija` (`kabineto_Nr`, `adresas`, `vietu_skaicius`, `id_Auditorija`) VALUES
('', 'Stud gatve', 100, 0);

-- --------------------------------------------------------

--
-- Table structure for table `darbuotojas`
--

CREATE TABLE `darbuotojas` (
  `id` int(11) NOT NULL,
  `vardas` varchar(255) NOT NULL,
  `pavarde` varchar(255) NOT NULL,
  `pareigos` varchar(255) NOT NULL,
  `fk_Imoneid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `darbuotojas`
--

INSERT INTO `darbuotojas` (`id`, `vardas`, `pavarde`, `pareigos`, `fk_Imoneid`) VALUES
(1, 'Ignas', 'Ignas', 'Informatikas', 4);

-- --------------------------------------------------------

--
-- Table structure for table `destytojas`
--

CREATE TABLE `destytojas` (
  `tabelio_nr` int(11) NOT NULL,
  `vardas` varchar(255) DEFAULT NULL,
  `pavarde` varchar(255) DEFAULT NULL,
  `prisijungimo_vardas` varchar(255) NOT NULL,
  `slaptazodis` varchar(255) NOT NULL,
  `el_pastas` varchar(255) NOT NULL,
  `laisvas_karjeros_mentorius` tinyint(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `erasmus_dalyvio_tipas`
--

CREATE TABLE `erasmus_dalyvio_tipas` (
  `id_Erasmus_dalyvio_tipas` int(11) NOT NULL,
  `name` char(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `erasmus_dalyvio_tipas`
--

INSERT INTO `erasmus_dalyvio_tipas` (`id_Erasmus_dalyvio_tipas`, `name`) VALUES
(1, 'Studentas'),
(2, 'Destytojas');

-- --------------------------------------------------------

--
-- Table structure for table `erasmus_destytojai`
--

CREATE TABLE `erasmus_destytojai` (
  `id_Erasmus_destytojai` int(11) NOT NULL,
  `fk_Erasmus_Projektaiid_Erasmus_Projektai` int(11) NOT NULL,
  `fk_Destytojastabelio_nr` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `erasmus_prasymas`
--

CREATE TABLE `erasmus_prasymas` (
  `motyvacinis_tekstas` varchar(255) NOT NULL,
  `data` date NOT NULL,
  `id_Erasmus_prasymas` int(11) NOT NULL,
  `fk_Erasmus_Projektaiid_Erasmus_Projektai` int(11) NOT NULL,
  `fk_Studentasid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `erasmus_projektai`
--

CREATE TABLE `erasmus_projektai` (
  `salis` varchar(255) NOT NULL,
  `pradzios_data` date DEFAULT NULL,
  `pabaigos_data` date DEFAULT NULL,
  `mokymo_istaiga` varchar(255) DEFAULT NULL,
  `dalyviu_skaicius` int(11) DEFAULT NULL,
  `metai` varchar(255) DEFAULT NULL,
  `dalyvio_tipas` int(11) DEFAULT NULL,
  `semestras` int(11) DEFAULT NULL,
  `id_Erasmus_Projektai` int(11) NOT NULL,
  `fk_Studiju_Centrasid_Studiju_Centras` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `erasmus_studentai`
--

CREATE TABLE `erasmus_studentai` (
  `id_Erasmus_studentai` int(11) NOT NULL,
  `fk_Studentasid` int(11) NOT NULL,
  `fk_Erasmus_Projektaiid_Erasmus_Projektai` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `gretutines_studijos`
--

CREATE TABLE `gretutines_studijos` (
  `id_Gretutines_studijos` int(11) NOT NULL,
  `name` char(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `gretutines_studijos`
--

INSERT INTO `gretutines_studijos` (`id_Gretutines_studijos`, `name`) VALUES
(1, 'Ekonomika'),
(2, 'Matematika'),
(3, 'Elektronika'),
(4, 'Architektura');

-- --------------------------------------------------------

--
-- Table structure for table `imones`
--

CREATE TABLE `imones` (
  `id` int(11) NOT NULL,
  `pavadinimas` varchar(255) NOT NULL,
  `sritis` varchar(255) NOT NULL,
  `prisijungimo_vardas` varchar(255) NOT NULL,
  `slaptazodis` varchar(255) NOT NULL,
  `el_pastas` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `imones`
--

INSERT INTO `imones` (`id`, `pavadinimas`, `sritis`, `prisijungimo_vardas`, `slaptazodis`, `el_pastas`) VALUES
(4, 'teltonika', 'Inzinerija', 'ignas', 'ignas', 'ignas406@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `ivertinimas`
--

CREATE TABLE `ivertinimas` (
  `Modulio_id` int(11) DEFAULT NULL,
  `ivertinimas` int(11) NOT NULL,
  `id_Ivertinimas` int(11) NOT NULL,
  `fk_Studentasid` int(11) NOT NULL,
  `fk_Moduliskodas` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `mentorystes_prasymas`
--

CREATE TABLE `mentorystes_prasymas` (
  `motyvacinis_tekstas` varchar(255) DEFAULT NULL,
  `data` date DEFAULT NULL,
  `id_Mentorystes_prasymas` int(11) NOT NULL,
  `fk_Studentasid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2019_12_13_234033_create_imones_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `modulio_uzsiemimas`
--

CREATE TABLE `modulio_uzsiemimas` (
  `vieta` varchar(255) DEFAULT NULL,
  `destytojas` varchar(255) DEFAULT NULL,
  `laikas` int(11) DEFAULT NULL,
  `tipas` int(11) DEFAULT NULL,
  `id_Modulio_uzsiemimas` int(11) NOT NULL,
  `fk_Destytojastabelio_nr` int(11) NOT NULL,
  `fk_Auditorijaid_Auditorija` int(11) NOT NULL,
  `fk_Moduliskodas` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `modulis`
--

CREATE TABLE `modulis` (
  `kodas` int(11) NOT NULL,
  `Pavadinimas` varchar(255) DEFAULT NULL,
  `Koordinuojantis_destytojas` varchar(255) DEFAULT NULL,
  `Kursas` int(11) DEFAULT NULL,
  `Fakultetas` varchar(255) DEFAULT NULL,
  `mokymo_kalba` int(11) DEFAULT NULL,
  `gretutines_studijos` int(11) DEFAULT NULL,
  `fk_Destytojastabelio_nr` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `mokslo_grupe`
--

CREATE TABLE `mokslo_grupe` (
  `Pavadinimas` varchar(255) NOT NULL,
  `Nariu_kiekis` int(11) NOT NULL,
  `Laisvos_vietos` int(11) NOT NULL,
  `Fakultetas` varchar(255) NOT NULL,
  `Aprasymas` varchar(255) DEFAULT NULL,
  `id_Mokslo_grupe` int(11) NOT NULL,
  `fk_Destytojastabelio_nr` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `mokymo_kalbos`
--

CREATE TABLE `mokymo_kalbos` (
  `id_Mokymo_kalbos` int(11) NOT NULL,
  `name` char(8) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `mokymo_kalbos`
--

INSERT INTO `mokymo_kalbos` (`id_Mokymo_kalbos`, `name`) VALUES
(1, 'Lietuviu'),
(2, 'Anglu');

-- --------------------------------------------------------

--
-- Table structure for table `paskaita`
--

CREATE TABLE `paskaita` (
  `id` int(11) NOT NULL,
  `data` date NOT NULL,
  `trukme` time NOT NULL,
  `vieta` varchar(255) NOT NULL,
  `tema` varchar(255) DEFAULT NULL,
  `papildoma_informacija` varchar(255) DEFAULT NULL,
  `lektorius` varchar(255) DEFAULT NULL,
  `laikas` int(11) NOT NULL,
  `mokymo_kalba` int(11) NOT NULL,
  `fk_Darbuotojasid` int(11) NOT NULL,
  `fk_Auditorijaid_Auditorija` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `paskaita`
--

INSERT INTO `paskaita` (`id`, `data`, `trukme`, `vieta`, `tema`, `papildoma_informacija`, `lektorius`, `laikas`, `mokymo_kalba`, `fk_Darbuotojasid`, `fk_Auditorijaid_Auditorija`) VALUES
(3, '2019-12-14', '02:00:00', 'asas', 'asas', 'asas', 'asas', 1, 2, 1, 0);

-- --------------------------------------------------------

--
-- Table structure for table `paskaitos_laikai`
--

CREATE TABLE `paskaitos_laikai` (
  `id_Paskaitos_laikai` int(11) NOT NULL,
  `name` char(13) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `paskaitos_laikai`
--

INSERT INTO `paskaitos_laikai` (`id_Paskaitos_laikai`, `name`) VALUES
(1, '09:00_-_10:30'),
(2, '11:00_-_12:30'),
(3, '13:30_-_15:00'),
(4, '15:30_-_17:00'),
(5, '17:30_-_19:00'),
(6, '19:15_-_20:45');

-- --------------------------------------------------------

--
-- Table structure for table `praktikos`
--

CREATE TABLE `praktikos` (
  `id` int(11) NOT NULL,
  `trukme` time NOT NULL,
  `dalyviu_Skaicius` int(11) NOT NULL,
  `projekto_Tema` varchar(255) NOT NULL,
  `laikas` int(11) NOT NULL,
  `fk_Imoneid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `pranesimas`
--

CREATE TABLE `pranesimas` (
  `data` date DEFAULT NULL,
  `laikas` time DEFAULT NULL,
  `tekstas` varchar(255) DEFAULT NULL,
  `tema` varchar(255) DEFAULT NULL,
  `id_Pranesimas` int(11) NOT NULL,
  `fk_Destytojastabelio_nr` int(11) DEFAULT NULL,
  `fk_Imoneid` int(11) DEFAULT NULL,
  `fk_Studiju_Centrasid_Studiju_Centras` int(11) DEFAULT NULL,
  `fk_Destytojastabelio_nr1` int(11) DEFAULT NULL,
  `fk_Studiju_Centrasid_Studiju_Centras1` int(11) DEFAULT NULL,
  `fk_Imoneid1` int(11) DEFAULT NULL,
  `gavejas` int(11) NOT NULL,
  `siuntejas` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `semestro_tipai`
--

CREATE TABLE `semestro_tipai` (
  `id_Semestro_tipai` int(11) NOT NULL,
  `name` char(9) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `semestro_tipai`
--

INSERT INTO `semestro_tipai` (`id_Semestro_tipai`, `name`) VALUES
(1, 'Pavasario'),
(2, 'Rudens');

-- --------------------------------------------------------

--
-- Table structure for table `studentai_moduliai`
--

CREATE TABLE `studentai_moduliai` (
  `id_Studentai_moduliai` int(11) NOT NULL,
  `fk_Studentasid` int(11) NOT NULL,
  `fk_Moduliskodas` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `studentas`
--

CREATE TABLE `studentas` (
  `id` int(11) NOT NULL,
  `Vardas` varchar(255) DEFAULT NULL,
  `Pavarde` varchar(255) DEFAULT NULL,
  `Prisijungimo_vardas` varchar(255) NOT NULL,
  `Slaptazodis` varchar(255) NOT NULL,
  `El_Pastas` varchar(255) NOT NULL,
  `Akademine_grupe` varchar(255) DEFAULT NULL,
  `Stojimo_metai` int(11) DEFAULT NULL,
  `Kursas` int(11) DEFAULT NULL,
  `Studiju_programa` varchar(255) DEFAULT NULL,
  `Gimimo_data` date DEFAULT NULL,
  `gretutines_studijos` int(11) DEFAULT NULL,
  `fk_stringid_string` int(11) NOT NULL,
  `fk_Praktikaid` int(11) DEFAULT NULL,
  `fk_Destytojastabelio_nr` int(11) DEFAULT NULL,
  `fk_Mokslo_grupeid_Mokslo_grupe` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `studentu_paskaitos`
--

CREATE TABLE `studentu_paskaitos` (
  `id_Studentu_paskaitos` int(11) NOT NULL,
  `fk_Paskaitaid` int(11) NOT NULL,
  `fk_Studentasid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `studiju_centras`
--

CREATE TABLE `studiju_centras` (
  `prisijungimo_vardas` varchar(255) NOT NULL,
  `slaptazodis` varchar(255) NOT NULL,
  `el_pastas` varchar(255) NOT NULL,
  `id_Studiju_Centras` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `uzsiemimo_tipas`
--

CREATE TABLE `uzsiemimo_tipas` (
  `id_Uzsiemimo_tipas` int(11) NOT NULL,
  `name` char(21) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `uzsiemimo_tipas`
--

INSERT INTO `uzsiemimo_tipas` (`id_Uzsiemimo_tipas`, `name`) VALUES
(1, 'Laboratoriniai_darbai'),
(2, 'Teorine_paskaita'),
(3, 'Praktinis_uzsiemimas');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `auditorija`
--
ALTER TABLE `auditorija`
  ADD PRIMARY KEY (`id_Auditorija`);

--
-- Indexes for table `darbuotojas`
--
ALTER TABLE `darbuotojas`
  ADD PRIMARY KEY (`id`),
  ADD KEY `dirba` (`fk_Imoneid`);

--
-- Indexes for table `destytojas`
--
ALTER TABLE `destytojas`
  ADD PRIMARY KEY (`tabelio_nr`);

--
-- Indexes for table `erasmus_dalyvio_tipas`
--
ALTER TABLE `erasmus_dalyvio_tipas`
  ADD PRIMARY KEY (`id_Erasmus_dalyvio_tipas`);

--
-- Indexes for table `erasmus_destytojai`
--
ALTER TABLE `erasmus_destytojai`
  ADD PRIMARY KEY (`id_Erasmus_destytojai`),
  ADD KEY `turi` (`fk_Erasmus_Projektaiid_Erasmus_Projektai`),
  ADD KEY `priklauso` (`fk_Destytojastabelio_nr`);

--
-- Indexes for table `erasmus_prasymas`
--
ALTER TABLE `erasmus_prasymas`
  ADD PRIMARY KEY (`id_Erasmus_prasymas`),
  ADD KEY `fk_priklauso` (`fk_Erasmus_Projektaiid_Erasmus_Projektai`),
  ADD KEY `fk_teikia` (`fk_Studentasid`);

--
-- Indexes for table `erasmus_projektai`
--
ALTER TABLE `erasmus_projektai`
  ADD PRIMARY KEY (`id_Erasmus_Projektai`),
  ADD KEY `semestras` (`semestras`),
  ADD KEY `dalyvio_tipas` (`dalyvio_tipas`),
  ADD KEY `Rengia` (`fk_Studiju_Centrasid_Studiju_Centras`);

--
-- Indexes for table `erasmus_studentai`
--
ALTER TABLE `erasmus_studentai`
  ADD PRIMARY KEY (`id_Erasmus_studentai`),
  ADD KEY `fkk_priklauso` (`fk_Studentasid`),
  ADD KEY `fk_turi` (`fk_Erasmus_Projektaiid_Erasmus_Projektai`);

--
-- Indexes for table `gretutines_studijos`
--
ALTER TABLE `gretutines_studijos`
  ADD PRIMARY KEY (`id_Gretutines_studijos`);

--
-- Indexes for table `imones`
--
ALTER TABLE `imones`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ivertinimas`
--
ALTER TABLE `ivertinimas`
  ADD PRIMARY KEY (`id_Ivertinimas`),
  ADD KEY `fk_Pateikia` (`fk_Studentasid`),
  ADD KEY `fk_t_turi` (`fk_Moduliskodas`);

--
-- Indexes for table `mentorystes_prasymas`
--
ALTER TABLE `mentorystes_prasymas`
  ADD PRIMARY KEY (`id_Mentorystes_prasymas`),
  ADD UNIQUE KEY `fk_Studentasid` (`fk_Studentasid`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `modulio_uzsiemimas`
--
ALTER TABLE `modulio_uzsiemimas`
  ADD PRIMARY KEY (`id_Modulio_uzsiemimas`),
  ADD KEY `laikas` (`laikas`),
  ADD KEY `tipas` (`tipas`),
  ADD KEY `desto` (`fk_Destytojastabelio_nr`),
  ADD KEY `Vyksta` (`fk_Auditorijaid_Auditorija`),
  ADD KEY `sudaro` (`fk_Moduliskodas`);

--
-- Indexes for table `modulis`
--
ALTER TABLE `modulis`
  ADD PRIMARY KEY (`kodas`),
  ADD KEY `mokymo_kalba` (`mokymo_kalba`),
  ADD KEY `gretutines_studijos` (`gretutines_studijos`),
  ADD KEY `Koordinuoja` (`fk_Destytojastabelio_nr`);

--
-- Indexes for table `mokslo_grupe`
--
ALTER TABLE `mokslo_grupe`
  ADD PRIMARY KEY (`id_Mokslo_grupe`),
  ADD UNIQUE KEY `fk_Destytojastabelio_nr` (`fk_Destytojastabelio_nr`);

--
-- Indexes for table `mokymo_kalbos`
--
ALTER TABLE `mokymo_kalbos`
  ADD PRIMARY KEY (`id_Mokymo_kalbos`);

--
-- Indexes for table `paskaita`
--
ALTER TABLE `paskaita`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_veda` (`fk_Darbuotojasid`),
  ADD KEY `fk_vyksta` (`fk_Auditorijaid_Auditorija`),
  ADD KEY `paskaita_ibfk_1` (`laikas`),
  ADD KEY `paskaita_ibfk_2` (`mokymo_kalba`);

--
-- Indexes for table `paskaitos_laikai`
--
ALTER TABLE `paskaitos_laikai`
  ADD PRIMARY KEY (`id_Paskaitos_laikai`);

--
-- Indexes for table `praktikos`
--
ALTER TABLE `praktikos`
  ADD PRIMARY KEY (`id`),
  ADD KEY `Suteikia` (`fk_Imoneid`),
  ADD KEY `praktikos_ibfk_1` (`laikas`);

--
-- Indexes for table `pranesimas`
--
ALTER TABLE `pranesimas`
  ADD PRIMARY KEY (`id_Pranesimas`),
  ADD KEY `gauna` (`fk_Destytojastabelio_nr`),
  ADD KEY `siuncia` (`fk_Studiju_Centrasid_Studiju_Centras`),
  ADD KEY `gauna_imone` (`gavejas`),
  ADD KEY `siuncia_imone_studentui` (`fk_Imoneid1`),
  ADD KEY `siuncia_studentas_imonei` (`fk_Imoneid`);

--
-- Indexes for table `semestro_tipai`
--
ALTER TABLE `semestro_tipai`
  ADD PRIMARY KEY (`id_Semestro_tipai`);

--
-- Indexes for table `studentai_moduliai`
--
ALTER TABLE `studentai_moduliai`
  ADD PRIMARY KEY (`id_Studentai_moduliai`),
  ADD KEY `fk_fk_turi` (`fk_Studentasid`);

--
-- Indexes for table `studentas`
--
ALTER TABLE `studentas`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `fk_stringid_string` (`fk_stringid_string`),
  ADD UNIQUE KEY `fk_Destytojastabelio_nr` (`fk_Destytojastabelio_nr`),
  ADD KEY `dalyvauja` (`fk_Praktikaid`);

--
-- Indexes for table `studentu_paskaitos`
--
ALTER TABLE `studentu_paskaitos`
  ADD PRIMARY KEY (`id_Studentu_paskaitos`),
  ADD KEY `turi_fk` (`fk_Paskaitaid`);

--
-- Indexes for table `studiju_centras`
--
ALTER TABLE `studiju_centras`
  ADD PRIMARY KEY (`id_Studiju_Centras`);

--
-- Indexes for table `uzsiemimo_tipas`
--
ALTER TABLE `uzsiemimo_tipas`
  ADD PRIMARY KEY (`id_Uzsiemimo_tipas`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `darbuotojas`
--
ALTER TABLE `darbuotojas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `imones`
--
ALTER TABLE `imones`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `paskaita`
--
ALTER TABLE `paskaita`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `praktikos`
--
ALTER TABLE `praktikos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `pranesimas`
--
ALTER TABLE `pranesimas`
  MODIFY `id_Pranesimas` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `studentu_paskaitos`
--
ALTER TABLE `studentu_paskaitos`
  MODIFY `id_Studentu_paskaitos` int(11) NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `darbuotojas`
--
ALTER TABLE `darbuotojas`
  ADD CONSTRAINT `dirba` FOREIGN KEY (`fk_Imoneid`) REFERENCES `imones` (`id`);

--
-- Constraints for table `erasmus_destytojai`
--
ALTER TABLE `erasmus_destytojai`
  ADD CONSTRAINT `priklauso` FOREIGN KEY (`fk_Destytojastabelio_nr`) REFERENCES `destytojas` (`tabelio_nr`),
  ADD CONSTRAINT `turi` FOREIGN KEY (`fk_Erasmus_Projektaiid_Erasmus_Projektai`) REFERENCES `erasmus_projektai` (`id_Erasmus_Projektai`);

--
-- Constraints for table `erasmus_prasymas`
--
ALTER TABLE `erasmus_prasymas`
  ADD CONSTRAINT `fk_priklauso` FOREIGN KEY (`fk_Erasmus_Projektaiid_Erasmus_Projektai`) REFERENCES `erasmus_projektai` (`id_Erasmus_Projektai`),
  ADD CONSTRAINT `fk_teikia` FOREIGN KEY (`fk_Studentasid`) REFERENCES `studentas` (`id`);

--
-- Constraints for table `erasmus_projektai`
--
ALTER TABLE `erasmus_projektai`
  ADD CONSTRAINT `Rengia` FOREIGN KEY (`fk_Studiju_Centrasid_Studiju_Centras`) REFERENCES `studiju_centras` (`id_Studiju_Centras`),
  ADD CONSTRAINT `erasmus_projektai_ibfk_1` FOREIGN KEY (`semestras`) REFERENCES `semestro_tipai` (`id_Semestro_tipai`),
  ADD CONSTRAINT `erasmus_projektai_ibfk_2` FOREIGN KEY (`dalyvio_tipas`) REFERENCES `erasmus_dalyvio_tipas` (`id_Erasmus_dalyvio_tipas`);

--
-- Constraints for table `erasmus_studentai`
--
ALTER TABLE `erasmus_studentai`
  ADD CONSTRAINT `fk_turi` FOREIGN KEY (`fk_Erasmus_Projektaiid_Erasmus_Projektai`) REFERENCES `erasmus_projektai` (`id_Erasmus_Projektai`),
  ADD CONSTRAINT `fkk_priklauso` FOREIGN KEY (`fk_Studentasid`) REFERENCES `studentas` (`id`);

--
-- Constraints for table `ivertinimas`
--
ALTER TABLE `ivertinimas`
  ADD CONSTRAINT `fk_Pateikia` FOREIGN KEY (`fk_Studentasid`) REFERENCES `studentas` (`id`),
  ADD CONSTRAINT `fk_t_turi` FOREIGN KEY (`fk_Moduliskodas`) REFERENCES `modulis` (`kodas`);

--
-- Constraints for table `mentorystes_prasymas`
--
ALTER TABLE `mentorystes_prasymas`
  ADD CONSTRAINT `teikia` FOREIGN KEY (`fk_Studentasid`) REFERENCES `studentas` (`id`);

--
-- Constraints for table `modulio_uzsiemimas`
--
ALTER TABLE `modulio_uzsiemimas`
  ADD CONSTRAINT `Vyksta` FOREIGN KEY (`fk_Auditorijaid_Auditorija`) REFERENCES `auditorija` (`id_Auditorija`),
  ADD CONSTRAINT `desto` FOREIGN KEY (`fk_Destytojastabelio_nr`) REFERENCES `destytojas` (`tabelio_nr`),
  ADD CONSTRAINT `modulio_uzsiemimas_ibfk_1` FOREIGN KEY (`laikas`) REFERENCES `paskaitos_laikai` (`id_Paskaitos_laikai`),
  ADD CONSTRAINT `modulio_uzsiemimas_ibfk_2` FOREIGN KEY (`tipas`) REFERENCES `uzsiemimo_tipas` (`id_Uzsiemimo_tipas`),
  ADD CONSTRAINT `sudaro` FOREIGN KEY (`fk_Moduliskodas`) REFERENCES `modulis` (`kodas`);

--
-- Constraints for table `modulis`
--
ALTER TABLE `modulis`
  ADD CONSTRAINT `Koordinuoja` FOREIGN KEY (`fk_Destytojastabelio_nr`) REFERENCES `destytojas` (`tabelio_nr`),
  ADD CONSTRAINT `modulis_ibfk_1` FOREIGN KEY (`mokymo_kalba`) REFERENCES `mokymo_kalbos` (`id_Mokymo_kalbos`),
  ADD CONSTRAINT `modulis_ibfk_2` FOREIGN KEY (`gretutines_studijos`) REFERENCES `gretutines_studijos` (`id_Gretutines_studijos`);

--
-- Constraints for table `mokslo_grupe`
--
ALTER TABLE `mokslo_grupe`
  ADD CONSTRAINT `vadovauja` FOREIGN KEY (`fk_Destytojastabelio_nr`) REFERENCES `destytojas` (`tabelio_nr`);

--
-- Constraints for table `paskaita`
--
ALTER TABLE `paskaita`
  ADD CONSTRAINT `fk_veda` FOREIGN KEY (`fk_Darbuotojasid`) REFERENCES `darbuotojas` (`id`),
  ADD CONSTRAINT `fk_vyksta` FOREIGN KEY (`fk_Auditorijaid_Auditorija`) REFERENCES `auditorija` (`id_Auditorija`),
  ADD CONSTRAINT `paskaita_ibfk_1` FOREIGN KEY (`laikas`) REFERENCES `paskaitos_laikai` (`id_Paskaitos_laikai`),
  ADD CONSTRAINT `paskaita_ibfk_2` FOREIGN KEY (`mokymo_kalba`) REFERENCES `mokymo_kalbos` (`id_Mokymo_kalbos`);

--
-- Constraints for table `praktikos`
--
ALTER TABLE `praktikos`
  ADD CONSTRAINT `Suteikia` FOREIGN KEY (`fk_Imoneid`) REFERENCES `imones` (`id`),
  ADD CONSTRAINT `praktikos_ibfk_1` FOREIGN KEY (`laikas`) REFERENCES `paskaitos_laikai` (`id_Paskaitos_laikai`);

--
-- Constraints for table `pranesimas`
--
ALTER TABLE `pranesimas`
  ADD CONSTRAINT `siuncia_imone_studentui` FOREIGN KEY (`fk_Imoneid1`) REFERENCES `studentas` (`id`),
  ADD CONSTRAINT `siuncia_studentas_imonei` FOREIGN KEY (`fk_Imoneid`) REFERENCES `imones` (`id`);

--
-- Constraints for table `studentai_moduliai`
--
ALTER TABLE `studentai_moduliai`
  ADD CONSTRAINT `fk_fk_turi` FOREIGN KEY (`fk_Studentasid`) REFERENCES `studentas` (`id`);

--
-- Constraints for table `studentas`
--
ALTER TABLE `studentas`
  ADD CONSTRAINT `dalyvauja` FOREIGN KEY (`fk_Praktikaid`) REFERENCES `praktikos` (`id`),
  ADD CONSTRAINT `mentoriauja` FOREIGN KEY (`fk_Destytojastabelio_nr`) REFERENCES `destytojas` (`tabelio_nr`);

--
-- Constraints for table `studentu_paskaitos`
--
ALTER TABLE `studentu_paskaitos`
  ADD CONSTRAINT `turi_fk` FOREIGN KEY (`fk_Paskaitaid`) REFERENCES `paskaita` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

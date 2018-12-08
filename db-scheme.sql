-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Erstellungszeit: 08. Dez 2018 um 16:48
-- Server-Version: 10.1.37-MariaDB
-- PHP-Version: 7.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+01:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Datenbank: `elegia-web`
--
CREATE DATABASE IF NOT EXISTS `elegia-web` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `elegia-web`;

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `basket`
--

CREATE TABLE `basket` (
  `basketID` int(11) NOT NULL,
  `customerID` int(11) NOT NULL,
  `created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `basket_has_deliverystatus`
--

CREATE TABLE `basket_has_deliverystatus` (
  `basketID` int(11) NOT NULL,
  `statusID` int(11) NOT NULL,
  `added` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `basket_has_product`
--

CREATE TABLE `basket_has_product` (
  `basketID` int(11) NOT NULL,
  `productID` int(11) NOT NULL,
  `count` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `basktet_paid_product`
--

CREATE TABLE `basktet_paid_product` (
  `basketID` int(11) NOT NULL,
  `productID` int(11) NOT NULL,
  `price` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `basktet_paymentmethod`
--

CREATE TABLE `basktet_paymentmethod` (
  `basketID` int(11) NOT NULL,
  `paymentID` int(11) NOT NULL,
  `status` enum('waiting','success','error','') NOT NULL DEFAULT 'waiting'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `category`
--

CREATE TABLE `category` (
  `categoryID` int(11) NOT NULL,
  `name` varchar(96) NOT NULL,
  `description` varchar(256) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `customer`
--

CREATE TABLE `customer` (
  `customerID` int(11) NOT NULL,
  `name` varchar(96) NOT NULL,
  `city` varchar(96) NOT NULL,
  `street` varchar(96) NOT NULL,
  `house_nr` varchar(96) NOT NULL,
  `description` varchar(256) NOT NULL,
  `image` varchar(96) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `customer_eval_supplier`
--

CREATE TABLE `customer_eval_supplier` (
  `customerID` int(11) NOT NULL,
  `supplierID` int(11) NOT NULL,
  `raiting` int(11) NOT NULL,
  `description` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `deliverystatus`
--

CREATE TABLE `deliverystatus` (
  `statusID` int(11) NOT NULL,
  `status` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `paymentmethod`
--

CREATE TABLE `paymentmethod` (
  `paymentID` int(11) NOT NULL,
  `name` varchar(96) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `product`
--

CREATE TABLE `product` (
  `productID` int(11) NOT NULL,
  `categoryID` int(11) NOT NULL,
  `supplierID` int(11) NOT NULL,
  `price` float NOT NULL,
  `stock` int(11) NOT NULL,
  `name` varchar(96) NOT NULL,
  `description` varchar(256) NOT NULL,
  `image` varchar(96) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `supplier`
--

CREATE TABLE `supplier` (
  `supplierID` int(11) NOT NULL,
  `name` varchar(96) NOT NULL,
  `city` varchar(96) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `user`
--

CREATE TABLE `user` (
  `userID` int(11) NOT NULL,
  `pwd_hash` varchar(96) NOT NULL,
  `email` varchar(96) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Daten für Tabelle `user`
--

INSERT INTO `user` (`userID`, `pwd_hash`, `email`) VALUES
(1, 'sdfsdfjhg32biuhsdfsdf', 'mischa@foliage.com'),
(3, 'sdfsdfjsdfhg32biuhsdfsdf', 'ksusha@foliage.com');

--
-- Indizes der exportierten Tabellen
--

--
-- Indizes für die Tabelle `basket`
--
ALTER TABLE `basket`
  ADD PRIMARY KEY (`basketID`) USING BTREE,
  ADD KEY `customerID` (`customerID`);

--
-- Indizes für die Tabelle `basket_has_deliverystatus`
--
ALTER TABLE `basket_has_deliverystatus`
  ADD KEY `basketID` (`basketID`),
  ADD KEY `statusID` (`statusID`);

--
-- Indizes für die Tabelle `basket_has_product`
--
ALTER TABLE `basket_has_product`
  ADD KEY `basketID` (`basketID`),
  ADD KEY `productID` (`productID`);

--
-- Indizes für die Tabelle `basktet_paid_product`
--
ALTER TABLE `basktet_paid_product`
  ADD KEY `basketID` (`basketID`),
  ADD KEY `productID` (`productID`);

--
-- Indizes für die Tabelle `basktet_paymentmethod`
--
ALTER TABLE `basktet_paymentmethod`
  ADD KEY `basketID` (`basketID`),
  ADD KEY `paymentID` (`paymentID`);

--
-- Indizes für die Tabelle `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`categoryID`);

--
-- Indizes für die Tabelle `customer`
--
ALTER TABLE `customer`
  ADD UNIQUE KEY `customerID` (`customerID`);

--
-- Indizes für die Tabelle `customer_eval_supplier`
--
ALTER TABLE `customer_eval_supplier`
  ADD KEY `customerID` (`customerID`),
  ADD KEY `supplierID` (`supplierID`);

--
-- Indizes für die Tabelle `deliverystatus`
--
ALTER TABLE `deliverystatus`
  ADD PRIMARY KEY (`statusID`),
  ADD UNIQUE KEY `status` (`status`);

--
-- Indizes für die Tabelle `paymentmethod`
--
ALTER TABLE `paymentmethod`
  ADD PRIMARY KEY (`paymentID`);

--
-- Indizes für die Tabelle `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`productID`),
  ADD KEY `categoryID` (`categoryID`),
  ADD KEY `supplierID` (`supplierID`);

--
-- Indizes für die Tabelle `supplier`
--
ALTER TABLE `supplier`
  ADD UNIQUE KEY `supplierID` (`supplierID`);

--
-- Indizes für die Tabelle `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`userID`) USING BTREE,
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT für exportierte Tabellen
--

--
-- AUTO_INCREMENT für Tabelle `basket`
--
ALTER TABLE `basket`
  MODIFY `basketID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT für Tabelle `category`
--
ALTER TABLE `category`
  MODIFY `categoryID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT für Tabelle `deliverystatus`
--
ALTER TABLE `deliverystatus`
  MODIFY `statusID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT für Tabelle `paymentmethod`
--
ALTER TABLE `paymentmethod`
  MODIFY `paymentID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT für Tabelle `product`
--
ALTER TABLE `product`
  MODIFY `productID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT für Tabelle `user`
--
ALTER TABLE `user`
  MODIFY `userID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1;

--
-- Constraints der exportierten Tabellen
--

--
-- Constraints der Tabelle `basket`
--
ALTER TABLE `basket`
  ADD CONSTRAINT `basket_ibfk_1` FOREIGN KEY (`customerID`) REFERENCES `customer` (`customerID`);

--
-- Constraints der Tabelle `basket_has_deliverystatus`
--
ALTER TABLE `basket_has_deliverystatus`
  ADD CONSTRAINT `basket_has_deliverystatus_ibfk_1` FOREIGN KEY (`basketID`) REFERENCES `basket` (`basketID`),
  ADD CONSTRAINT `basket_has_deliverystatus_ibfk_2` FOREIGN KEY (`statusID`) REFERENCES `deliverystatus` (`statusID`);

--
-- Constraints der Tabelle `basket_has_product`
--
ALTER TABLE `basket_has_product`
  ADD CONSTRAINT `basket_has_product_ibfk_1` FOREIGN KEY (`basketID`) REFERENCES `basket` (`basketID`),
  ADD CONSTRAINT `basket_has_product_ibfk_2` FOREIGN KEY (`productID`) REFERENCES `product` (`productID`);

--
-- Constraints der Tabelle `basktet_paid_product`
--
ALTER TABLE `basktet_paid_product`
  ADD CONSTRAINT `basktet_paid_product_ibfk_1` FOREIGN KEY (`basketID`) REFERENCES `basket` (`basketID`),
  ADD CONSTRAINT `basktet_paid_product_ibfk_2` FOREIGN KEY (`productID`) REFERENCES `product` (`productID`);

--
-- Constraints der Tabelle `basktet_paymentmethod`
--
ALTER TABLE `basktet_paymentmethod`
  ADD CONSTRAINT `basktet_paymentmethod_ibfk_1` FOREIGN KEY (`basketID`) REFERENCES `basket` (`basketID`),
  ADD CONSTRAINT `basktet_paymentmethod_ibfk_2` FOREIGN KEY (`paymentID`) REFERENCES `paymentmethod` (`paymentID`);

--
-- Constraints der Tabelle `customer`
--
ALTER TABLE `customer`
  ADD CONSTRAINT `customer_ibfk_1` FOREIGN KEY (`customerID`) REFERENCES `user` (`userID`);

--
-- Constraints der Tabelle `customer_eval_supplier`
--
ALTER TABLE `customer_eval_supplier`
  ADD CONSTRAINT `customer_eval_supplier_ibfk_1` FOREIGN KEY (`customerID`) REFERENCES `customer` (`customerID`),
  ADD CONSTRAINT `customer_eval_supplier_ibfk_2` FOREIGN KEY (`supplierID`) REFERENCES `supplier` (`supplierID`);

--
-- Constraints der Tabelle `product`
--
ALTER TABLE `product`
  ADD CONSTRAINT `product_ibfk_1` FOREIGN KEY (`categoryID`) REFERENCES `category` (`categoryID`),
  ADD CONSTRAINT `product_ibfk_2` FOREIGN KEY (`supplierID`) REFERENCES `supplier` (`supplierID`);

--
-- Constraints der Tabelle `supplier`
--
ALTER TABLE `supplier`
  ADD CONSTRAINT `supplier_ibfk_1` FOREIGN KEY (`supplierID`) REFERENCES `user` (`userID`);
--
-- Datenbank: `phpmyadmin`
--
CREATE DATABASE IF NOT EXISTS `phpmyadmin` DEFAULT CHARACTER SET utf8 COLLATE utf8_bin;
USE `phpmyadmin`;

-- --------------------------------------------------------

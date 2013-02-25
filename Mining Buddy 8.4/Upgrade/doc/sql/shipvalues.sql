-- phpMyAdmin SQL Dump
-- version 3.3.9
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Feb 24, 2011 at 08:04 AM
-- Server version: 5.0.91
-- PHP Version: 5.2.9

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `revdawn_MB82`
--

-- --------------------------------------------------------

--
-- Table structure for table `shipvalues`
--

CREATE TABLE IF NOT EXISTS `shipvalues` (
  `id` int(5) NOT NULL auto_increment,
  `modifier` int(5) NOT NULL,
  `time` int(15) NOT NULL,
  `AssaultShipValue` decimal(4,3) NOT NULL default '0.999',
  `BattlecruiserValue` decimal(4,3) NOT NULL default '0.999',
  `BattleshipValue` decimal(4,3) NOT NULL default '0.999',
  `CarrierValue` decimal(4,3) NOT NULL default '0.999',
  `CommandShipValue` decimal(4,3) NOT NULL default '0.999',
  `CovertOpsValue` decimal(4,3) NOT NULL default '0.999',
  `CruiserValue` decimal(4,3) NOT NULL default '0.999',
  `DestroyerValue` decimal(4,3) NOT NULL default '0.999',
  `DreadnoughtValue` decimal(4,3) NOT NULL default '0.999',
  `ExhumerValue` decimal(4,3) NOT NULL default '0.999',
  `FreighterValue` decimal(4,3) NOT NULL default '0.999',
  `FrigateValue` decimal(4,3) NOT NULL default '0.999',
  `HeavyAssaultShipValue` decimal(4,3) NOT NULL default '0.999',
  `IndustrialShipValue` decimal(4,3) NOT NULL default '0.999',
  `InterceptorValue` decimal(4,3) NOT NULL default '0.999',
  `InterdictorValue` decimal(4,3) NOT NULL default '0.999',
  `LogisticsShipValue` decimal(4,3) NOT NULL default '0.999',
  `MiningBargeValue` decimal(4,3) NOT NULL default '0.999',
  `ReconShipValue` decimal(4,3) NOT NULL default '0.999',
  `ShuttleValue` decimal(4,3) NOT NULL default '0.999',
  `TransportShipValue` decimal(4,3) NOT NULL default '0.999',
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `shipvalues`
--

INSERT INTO `shipvalues` (`id`, `modifier`, `time`, `AssaultShipValue`, `BattlecruiserValue`, `BattleshipValue`, `CarrierValue`, `CommandShipValue`, `CovertOpsValue`, `CruiserValue`, `DestroyerValue`, `DreadnoughtValue`, `ExhumerValue`, `FreighterValue`, `FrigateValue`, `HeavyAssaultShipValue`, `IndustrialShipValue`, `InterceptorValue`, `InterdictorValue`, `LogisticsShipValue`, `MiningBargeValue`, `ReconShipValue`, `ShuttleValue`, `TransportShipValue`) VALUES
(1, -1, 0, 1.000, 1.000, 1.000, 1.000, 1.000, 1.000, 1.000, 1.000, 1.000, 1.000, 1.000, 1.000, 1.000, 1.000, 1.000, 1.000, 1.000, 1.000, 1.000, 1.000, 1.000);

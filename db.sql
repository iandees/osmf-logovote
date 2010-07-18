-- phpMyAdmin SQL Dump
-- version 2.11.9.4
-- http://www.phpmyadmin.net
--
-- Host: db.yellowbkpk.com
-- Generation Time: Jul 18, 2010 at 11:16 AM
-- Server version: 5.1.39
-- PHP Version: 5.2.13

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";

--
-- Database: `burlington`
--

-- --------------------------------------------------------

--
-- Table structure for table `osmf_emails`
--

CREATE TABLE IF NOT EXISTS `osmf_emails` (
  `email` varchar(80) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `osmf_votes`
--

CREATE TABLE IF NOT EXISTS `osmf_votes` (
  `email` varchar(80) NOT NULL,
  `time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `voteA` varchar(2) NOT NULL,
  `voteB` varchar(2) NOT NULL,
  `voteC` varchar(2) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;


-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Mar 12, 2018 at 07:21 PM
-- Server version: 10.0.34-MariaDB
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mbpbdcom_mcqbox`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(100) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `email`, `password`, `created_at`, `updated_at`) VALUES
(1, 'sinharuma11@gmail.com', 'n8862g527l', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `biology1`
--

CREATE TABLE `biology1` (
  `id` int(100) NOT NULL,
  `second_id` int(100) NOT NULL,
  `third_id` int(100) NOT NULL,
  `forth_id` int(100) NOT NULL,
  `fifth_id` int(100) NOT NULL,
  `six_id` int(100) NOT NULL,
  `question` varchar(255) CHARACTER SET utf8 NOT NULL,
  `option1` varchar(255) CHARACTER SET utf8 NOT NULL,
  `option2` varchar(255) CHARACTER SET utf8 NOT NULL,
  `option3` varchar(255) CHARACTER SET utf8 NOT NULL,
  `option4` varchar(255) CHARACTER SET utf8 NOT NULL,
  `ans` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `biology1`
--

INSERT INTO `biology1` (`id`, `second_id`, `third_id`, `forth_id`, `fifth_id`, `six_id`, `question`, `option1`, `option2`, `option3`, `option4`, `ans`) VALUES
(1, 1, 1, 1, 1, 1, ' কোষঝিল্লীর শুষ্ক ওজনের কত ভাগ লিপিড থাকে?', '৭৫', '১০-২০', '৯০।', '৫০-৮০', 'A'),
(2, 2, 2, 2, 2, 2, 'হায়াললাপ্লাজম হচ্ছে-', 'সাইটোপ্লাজম', 'সাইটোপ্লাজমিক মাতৃকা', 'এক্টোপ্লাজম ', 'এন্ডােপ্লাজম ', 'B'),
(3, 3, 3, 3, 3, 3, 'নিচের কোনটি আদিকোষের উদাহরণ? ', 'টেরিডােফাইট', 'শৈবাল। ', 'নীলাভ সবুজ শৈবাল', 'ছত্রাক ', 'C'),
(4, 4, 4, 4, 4, 4, 'কোষপ্রাচীর আবিষ্কৃত হয়-', '১৬৬৫', '১৮৩১ ', '১৬৭৫', '১৯৬৫ ', 'A'),
(5, 5, 5, 5, 5, 5, ' কোথায় সেকেন্ডারী প্রাচীর তৈরি হয় না?', 'ভাজক কোষ', 'অধিক মাত্রায় বিপাকীয় কোষ', 'উভয়ই ', 'স্থায়ী কোষ', 'C'),
(6, 6, 6, 6, 6, 6, 'কোষপ্রাচীরের ক্ষুদ্রতম গাঠনিক একককে বলা হয়-', 'মাইক্রোফাইবিল। ', 'ম্যাক্রোফাইলি', 'মাইসেন্সি', 'কোনটিই নয়', 'C'),
(7, 7, 7, 7, 7, 7, 'প্রতিটি সেলুলােজ চেইনে সেলুলােজ অণুর সংখ্যা কত?', '১০০০-৩০০০টি', '১০০০-৪০০০টি', '১০০-৭০০টি', ' ৫০০-৮০০টি', 'A'),
(8, 8, 8, 8, 8, 8, 'একটি মাইক্রোফাইলি গঠিত হয় কতগুলি ক্রিস্টালাইন মাইসেলি নিয়ে ?', 'পঁচিশটি ', 'বিশটি', 'দশটি', 'পনেরটি ', 'B'),
(9, 9, 9, 9, 9, 9, 'একটি ম্যাকোফাইবিল কতটি মাইক্রোফাইলি নিয়ে গঠিত হয় ?', '২৭০টি ', '২৫০টি ', '২৬০টি', '২৪০টি ', 'B'),
(10, 10, 10, 10, 10, 10, 'নিম্নের কোনটি সত্য নয় ?', 'Danielli এবং Davson (1935)- দ্বিস্তর বিশিষ্ট মডেল', 'Robertson (1959)- একক পৰ্দা হাইপােথেসিস', 'Hiller ও Hoffman (1953)- কুইড মােজাইক মতেল', 'Vanderkoff ও Green (1970) প্রােটিন ক্রিস্টাল মডেল', 'C');

-- --------------------------------------------------------

--
-- Table structure for table `biology2model`
--

CREATE TABLE `biology2model` (
  `id` int(100) NOT NULL,
  `second_id` int(100) NOT NULL,
  `third_id` int(100) NOT NULL,
  `forth_id` int(100) NOT NULL,
  `fifth_id` int(100) NOT NULL,
  `six_id` int(100) NOT NULL,
  `question` varchar(255) CHARACTER SET utf8 NOT NULL,
  `option1` varchar(255) CHARACTER SET utf8 NOT NULL,
  `option2` varchar(255) CHARACTER SET utf8 NOT NULL,
  `option3` varchar(255) CHARACTER SET utf8 NOT NULL,
  `option4` varchar(255) CHARACTER SET utf8 NOT NULL,
  `ans` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `biology2model`
--

INSERT INTO `biology2model` (`id`, `second_id`, `third_id`, `forth_id`, `fifth_id`, `six_id`, `question`, `option1`, `option2`, `option3`, `option4`, `ans`) VALUES
(1, 1, 1, 1, 1, 1, 'ক্রোমােসােম গঠনের মৌলিক উপাদান সমৃদ্ধ হলাে', 'সাইটোপ্লাজম', 'নিউক্লিয়ােপ্লজম ', 'নিউক্লিয়ােলাস', 'নিউক্লিয়ার রেটিকুলাম', 2),
(2, 2, 2, 2, 2, 2, ' নিচের কোনটি সেন্ট্রিওলের অংশ নয়?', 'প্রাচীর বা সিলিন্ডার ওয়াল', 'ত্রয়ী অনুনালিকা বা ট্রিপলেটস', 'যােজক বা লিংকার', ' কোনটিই নয়।', 4),
(3, 3, 3, 3, 3, 3, ' “কোষ হলাে জীবের গঠনগত ও কার্যগত ক্ষুদ্র একক যা স্বনিয়ন্ত্রিত স্বপ্রজননে সক্ষম”- এটি কার মতবাদ?\r\n', 'De Robertis\r\n', 'Hickman ', 'Robert Hooke', 'De Duve', 2),
(4, 4, 4, 4, 4, 4, ' ক্রোমোসােম সমূহের চাটকে বলা হয়।\r\n', 'অটোসো্ম', 'জিনােম  ', 'ইডিওগ্্রাম', 'ক্যারিওটাইপ  ', 3),
(5, 5, 5, 5, 5, 5, 'কোষীয় RNA এর কত ভাগ rRNA?', '৫০ ভাগ', '৭০ ভাগ', '৬০ ভাগ', '৮০ ভাগ', 4),
(6, 6, 6, 6, 6, 6, '১৯৪৫ খ্রিষ্টাব্দে কোন বিজ্ঞানী সর্বপ্রথম যকৃত কোষে এন্ডােপ্লাজমিক রেটিকুলাম আবিষ্কর করেন?\r\n', 'ডেনিয়েলি ও ডেভসন', 'রবার্টসন ', 'কে. আর. পাের্টার', 'কলিকার ', 3),
(7, 7, 7, 7, 7, 7, ' সকল কোষে থাকে', 'প্রাথমিক কোষপ্রাচীর\r\n', 'মধ্যপর্দা ', 'উভয়ই', 'সেকেন্ডারী কোষপ্রাচীর', 2),
(8, 8, 8, 8, 8, 8, 'গ্লাইকোলিপিড ও গ্লাইকোপ্রােটিনকে একত্রে কি বলে?', 'গ্লাইকোহ্যালিক্স ', 'গ্লাইকোক্যালিক্স', 'প্রান্তীয় প্রােটিন', 'লিপােপ্রােটিন ', 2);

-- --------------------------------------------------------

--
-- Table structure for table `chemistry1`
--

CREATE TABLE `chemistry1` (
  `id` int(100) NOT NULL,
  `second_id` int(100) NOT NULL,
  `third_id` int(100) NOT NULL,
  `forth_id` int(100) NOT NULL,
  `fifth_id` int(100) NOT NULL,
  `question` varchar(255) CHARACTER SET utf8 NOT NULL,
  `option1` varchar(255) CHARACTER SET utf8 NOT NULL,
  `option2` varchar(255) CHARACTER SET utf8 NOT NULL,
  `option3` varchar(255) CHARACTER SET utf8 NOT NULL,
  `option4` varchar(255) CHARACTER SET utf8 NOT NULL,
  `ans` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `chemistry1`
--

INSERT INTO `chemistry1` (`id`, `second_id`, `third_id`, `forth_id`, `fifth_id`, `question`, `option1`, `option2`, `option3`, `option4`, `ans`) VALUES
(1, 1, 1, 1, 1, ' কোনটি বিষাক্ত ৰাসায়নিক যৌগ?', 'টলুইন', 'ক্যালসিয়াম ক্লো্রাইড', 'পটাসিয়াম কাৰ্বনেট', 'কার্বন টেট্টা ', 'D'),
(2, 2, 2, 2, 2, 'গায়ের চামড়ার উপর ক্ষয় পড়লে নিম্নের কোনটি ব্যবহার করা হয়?  ', 'বোরিক এসিড', 'সোডা অ্যাশ', 'বেকিং সোডা', 'কস্টিক এসিড', 'A'),
(3, 3, 3, 3, 3, ' নিম্নের কোনটি ভয়ংকর তথা প্রাণঘাতী বর্জ্য?\r\n', 'জিংক ডাস্ট', 'ইথানল ', 'টলুইন', 'সায়ানাইড ', 'D'),
(4, 4, 4, 4, 4, 'নিচের কোন কার্যকরী মূলক যৌগে বিদ্যমান থেকে বিস্ফোরণ ঘটায়?', '-CHO', '-OH', '--N = o', '-O-', 'c'),
(5, 5, 5, 5, 5, 'x চিহ্ন দ্বারা কোনটি বােঝানাে হয়?', 'ক্ষতিকর', 'হ্ময়কারী', 'উত্তেজক ', 'বিষাক্ত', 'A'),
(6, 6, 6, 6, 6, 'কোনটি উদ্বায়ী?', 'C6H6  ', 'NaCl', 'PBCl2 ', 'MgCl2', 'A'),
(7, 7, 7, 7, 7, 'বিষাক্ত CHCl3 এর বিকল্প উপাদান কোনটি?\r\n', 'C6H6', 'C6H14', 'K2CO3', ' CCl4', 'B'),
(8, 8, 8, 8, 8, 'এসিড বৃষ্টির জন্য দায়ী কোনটি?', 'NH3', ' CH4 ', 'SO2', ' CO', 'C'),
(9, 9, 9, 9, 9, ' নিম্নের কোন রাসায়নিক উপাদানটি ক্যান্সার সৃষ্টির জন্য দায়ী।', ' SO2  গ্যাস', 'নাইট্রোগ্লিসারিন ', 'অ্যাসবেস্টস', 'লেড', 'D'),
(10, 10, 10, 10, 10, ' নিম্নের কোনটি হাঁপানী সৃষ্টি করে?\r\n', 'KOH ', 'NaOH ', 'NH4OH', 'AL(OH)3', 'C');

-- --------------------------------------------------------

--
-- Table structure for table `chemistry1short`
--

CREATE TABLE `chemistry1short` (
  `id` int(100) NOT NULL,
  `help1` varchar(255) CHARACTER SET utf8 NOT NULL,
  `help2` varchar(255) CHARACTER SET utf8 NOT NULL,
  `help3` varchar(255) CHARACTER SET utf8 NOT NULL,
  `help4` varchar(255) CHARACTER SET utf8 NOT NULL,
  `help5` varchar(255) CHARACTER SET utf8 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `chemistry1short`
--

INSERT INTO `chemistry1short` (`id`, `help1`, `help2`, `help3`, `help4`, `help5`) VALUES
(5, '', '4', '4', '4', '4');

-- --------------------------------------------------------

--
-- Table structure for table `chemistry1test`
--

CREATE TABLE `chemistry1test` (
  `id` int(100) NOT NULL,
  `second_id` int(100) NOT NULL,
  `third_id` int(100) NOT NULL,
  `forth_id` int(100) NOT NULL,
  `fifth_id` int(100) NOT NULL,
  `question` varchar(255) CHARACTER SET utf8 NOT NULL,
  `option1` varchar(255) CHARACTER SET utf8 NOT NULL,
  `option2` varchar(255) CHARACTER SET utf8 NOT NULL,
  `option3` varchar(255) CHARACTER SET utf8 NOT NULL,
  `option4` varchar(255) CHARACTER SET utf8 NOT NULL,
  `ans` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `chemistry1test`
--

INSERT INTO `chemistry1test` (`id`, `second_id`, `third_id`, `forth_id`, `fifth_id`, `question`, `option1`, `option2`, `option3`, `option4`, `ans`) VALUES
(1, 1, 1, 1, 1, 'নিম্নের কোন রাসায়নিক দ্রব্য জন্ডিস/লিভার সিরােসিসের জন্য দায়ী।', 'NaOH/KOH', 'HCl/H2SO4', 'হ্যালােজেনযুক্ত যৌগ\r\n', 'Na/NaH', 3),
(2, 2, 2, 2, 2, 'নিচের কোন পদার্থকে বুনসেন দীপ শিখায় সরাসরি তাপ দেয়া যায় না?', 'বেনজিন', 'পানি ', 'ইথানল', 'ক্লোরােফরমা।', 3),
(3, 3, 3, 3, 3, 'NaCO3 এর একটি প্রমাণ দ্রবণ প্রস্তুতির জন্য নিচের কোনটি লাগবে না?', 'ব্যালেন্স।', 'ফানেল ', 'মাপন সিলিন্ডার', 'আয়তনিক ফ্লাক্স', 3),
(4, 4, 4, 4, 4, 'কোন প্লাষ্টিকের গ্লাভস স্বাস্থ্যসম্মত?\r\n', 'ল্যাটেক্স', 'নাইট্রাইল ', 'ভিনাইল', 'টেফলন', 2),
(5, 5, 5, 5, 5, 'ল্যাবরেটরিতে অপােলার জৈব পদার্থ পরিষ্কার করতে কোনটি ব্যবহৃত হয়?', 'অ্যালকোহল', 'বেনজিন ', 'পানি\r\n\r\n', ' মিথানল', 2),
(6, 6, 6, 6, 6, 'পাের্সেলিন বাটিতে সর্বোচ্চ কত ডিগ্রি সেলসিয়াস তাপমাত্ৰা তােলা যায়?\r\n', '1700°C', '1500°C', '1000°C', '500°C', 2),
(7, 7, 7, 7, 7, 'বায়ু দূষণ রােধ করতে গবেষণাগারে H S এর পরিবর্তে কোন যৌগ ও ব্যবহৃত হয়?\r\n', 'থায়ােইউরিয়া', 'থায়ে অ্যাসিটোমাইড', 'অ্যামােনিয়া ', 'ফসফিন ', 2),
(8, 8, 8, 8, 8, 'কোন গ্যাসটি মানুষের মৃত্যু ঘটাতে সক্ষম?', 'O2', ' N2', 'C2H5OH', 'HCN', 4);

-- --------------------------------------------------------

--
-- Table structure for table `math1`
--

CREATE TABLE `math1` (
  `id` int(100) NOT NULL,
  `second_id` int(100) NOT NULL,
  `third_id` int(100) NOT NULL,
  `forth_id` int(100) NOT NULL,
  `fifth_id` int(100) NOT NULL,
  `question` varchar(255) CHARACTER SET utf8 NOT NULL,
  `option1` varchar(255) CHARACTER SET utf8 NOT NULL,
  `option2` varchar(255) CHARACTER SET utf8 NOT NULL,
  `option3` varchar(255) CHARACTER SET utf8 NOT NULL,
  `option4` varchar(255) CHARACTER SET utf8 NOT NULL,
  `ans` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `math1`
--

INSERT INTO `math1` (`id`, `second_id`, `third_id`, `forth_id`, `fifth_id`, `question`, `option1`, `option2`, `option3`, `option4`, `ans`) VALUES
(1, 1, 1, 1, 1, ' বর্গ Matrix এর ক্লাম সং্খ্যা 3 হলে সারি সং্খ্যা ক্ত?', '2', '3', 'অনির্দিষ্ট', 'তথ্য অপর্যাপ্ত', 'B'),
(2, 2, 2, 2, 2, ' ক্লাম Matrix এর সারি সংখ্যা ক্ত?', '১', '০', 'অনির্দিষ্ট', '৫', 'C'),
(3, 3, 3, 3, 3, 'মুখ্য কর্ণে\', 5টি ভুক্তি থাকলে Matrix এর মাত্রা কত?\r\n', '5 * 5', '5 * 1', '1 * 5', 'অনির্দিষ্ট', 'A'),
(4, 4, 4, 4, 4, '\r\n\r\nx\r\ny\r\nz\r\n1\r\n2\r\n3\r\n5\r\n7\r\n9\r\n=\r\n3\r\n5\r\n8\r\n1\r\n2\r\n3\r\n5\r\n7\r\n9\r\nহলে \'x + y + z = ()\' উক্তিটি', 'সত্য নয়', 'সত্য ', 'তথ্য অপর্যাপ্ত', 'None ', 'A');

-- --------------------------------------------------------

--
-- Table structure for table `modeTest`
--

CREATE TABLE `modeTest` (
  `id` int(100) NOT NULL,
  `question` varchar(255) CHARACTER SET utf8 NOT NULL,
  `option1` varchar(255) CHARACTER SET utf8 NOT NULL,
  `option2` varchar(255) CHARACTER SET utf8 NOT NULL,
  `option3` varchar(255) CHARACTER SET utf8 NOT NULL,
  `option4` varchar(255) CHARACTER SET utf8 NOT NULL,
  `ans` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `modeTest`
--

INSERT INTO `modeTest` (`id`, `question`, `option1`, `option2`, `option3`, `option4`, `ans`) VALUES
(3, ' তত্ত্ব কী বিষয়ের উপর ভিত্তি করে গড়ে ওঠে?', ' নীতি', ' অনুকল্প', ' অনুমতি', ' পদ্ধতি', 2),
(4, ' কোনটি পদার্থবিজ্ঞানের ভাষায় “নীতি”?', 'ভরবেগের নিত্যতা ', 'বােরের এটম মডেল', 'শক্তির সংরক্ষণশীলতা', 'গ্যালিলিওর পড়ন্ত বস্তুর সূত্রাবলী', 2),
(5, '1 মাইল ও 1 কিলােমিটার দূরত্বের পার্থক্য মিটারে কত হবে?', '0.609m', ' 6.09m', '60.9m', ' 609m', 4),
(6, 'কোন কিছু সম্পর্কে সার্বিক উপলদ্ধি বা বােধগম্যতাকে কী বলে?', 'ধারণা', 'সূত্র', 'নীতি', 'তত্ত্ব', 1),
(7, 'পরমাণুর সমস্ত ধনাত্মক আধান এবং ভর এর কেন্দ্রে অবস্থিত-এই তত্ত্ব কে উপস্থাপন করেন? \r\n', 'রাদারফোর্ড', 'গ্যালিলিও ', 'আইনস্টাইন', 'ম্যাক্স প্ল্যাঙ্ক', 1),
(8, 'বােরের পরমাণু মডেলে কয়টি স্বীকার্য ছিল?', '1', '2', '3', '4', 2),
(9, 'তড়িৎ চুম্বকীয় তরঙ্গ তত্ত্ব আবিষ্কার করেন', 'রাদারফোর্ড', 'নিউটন ', 'ম্যাক্সওয়েল', 'আইনস্টাইন।', 3),
(10, 'কোনটি মৌলিক রাশি?', 'চার্জ।', 'তড়িৎপ্রবাহ', 'বিভব', 'রোধ', 2),
(11, ' ভর ও শক্তি সমতুল্য- কোন বিজ্ঞানীর অভিমত?', 'নিউটন', 'গ্যলিলিও ', 'আইনস্টাইন।', 'ফ্যারাডে', 3);

-- --------------------------------------------------------

--
-- Table structure for table `phy1modeltest`
--

CREATE TABLE `phy1modeltest` (
  `id` int(100) NOT NULL,
  `second_id` int(100) NOT NULL,
  `third_id` int(100) NOT NULL,
  `forth_id` int(100) NOT NULL,
  `fifth_id` int(100) NOT NULL,
  `six_id` int(100) NOT NULL,
  `seven_id` int(100) NOT NULL,
  `nine_id` int(100) NOT NULL,
  `ten_id` int(100) NOT NULL,
  `question` varchar(255) CHARACTER SET utf8 NOT NULL,
  `option1` varchar(255) CHARACTER SET utf8 NOT NULL,
  `option2` varchar(255) CHARACTER SET utf8 NOT NULL,
  `option3` varchar(255) CHARACTER SET utf8 NOT NULL,
  `option4` varchar(255) CHARACTER SET utf8 NOT NULL,
  `ans` int(100) NOT NULL,
  `eight_id` int(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `phy1modeltest`
--

INSERT INTO `phy1modeltest` (`id`, `second_id`, `third_id`, `forth_id`, `fifth_id`, `six_id`, `seven_id`, `nine_id`, `ten_id`, `question`, `option1`, `option2`, `option3`, `option4`, `ans`, `eight_id`) VALUES
(2, 2, 2, 2, 2, 2, 2, 2, 2, 'পরমানুর ধারণা সর্বপ্রথম কে প্রদান করেন?', ' নিউটন', 'ডাল্টন', 'ডেমােক্রিটাস', 'আর্কিমিডিস', 3, 2),
(3, 3, 3, 3, 3, 3, 3, 3, 3, 'আলাে সম্পর্কিত সর্বশেষ মতবাদ কোনটি?\r\n', 'কণা', 'তরঙ্গ', 'কোয়ান্টাম', 'তাড়িত চৌম্বক', 3, 3),
(4, 4, 4, 4, 4, 4, 4, 4, 4, 'নিচের বিষয়গুলাের মধ্যে কোনটি সবচেয়ে বেশি পদার্থবিদ্যা দ্বারা প্রভাবিত।', 'সাহিত্য', 'প্রানিবিদ্যা', 'দর্শন', 'রসায়ন', 4, 4),
(5, 5, 5, 5, 5, 5, 5, 5, 5, '‘Second’ কি ধরনের একক।', 'কম্পিত', 'সরল', 'লব্ধ।', 'মৌলিক', 4, 5),
(6, 6, 6, 6, 6, 6, 6, 6, 6, 'আমাদের পঞ্চ ইন্দ্ৰিয় পারিপার্শ্বিক পর্যবেক্ষন ও উপলব্ধির অনুভষে মস্তিষ্কে যে সত্যের কাল্পনিক ছাঁচ আঁচ করে তাকে কি বলে?\r\n\r\n', 'ধারণা', 'স্বীকার্য।', 'নীতি', 'সূত্র।', 1, 6),
(7, 7, 7, 7, 7, 7, 7, 7, 7, 'একজন ছাত্র 760 minHg চাপে ফুটন্ত পানিতে একটি পারদ\r\nথার্মোমিটারের পারদ প্রান্ত ডুবিয়ে দেখল যে তাপমাত্রা 95.5°C । প্ৰাপ্ত। পাঠের শতকরা একটি নির্ণয় কর । \r\n', '0.25%', '- 0.25%', '0.5%', '- 0.5%', 4, 7),
(8, 8, 8, 8, 8, 8, 8, 8, 8, 'নিচের কোনটি 1 GHz ও 1MHz এর অনুপাতের সমান?', '10^9', '10^6', '10^3', '10^-3', 3, 8),
(9, 9, 9, 9, 9, 9, 9, 9, 9, 'এক আলােক বর্ষ হলাে-', '9.4 x 10^12 km', '9.4 x 10^15 km', ' 9.4 x 10^18 km', '9.4 x 10^21 km', 1, 9),
(10, 10, 10, 10, 10, 10, 10, 10, 10, 'ফেরােমিটারের বৃত্তাকার স্কেলের মােট ভাগ সংখ্যা 50। স্কেলটকে এক পাক ঘুরালে রৈখিক স্কেলে সরণ হয় 0.5 mm। লঘিষ্ঠ গণন কত? ', '0.01 mm', '0.01 cm', '0.25 mm', '0.50 mm', 1, 10),
(11, 11, 11, 11, 11, 11, 11, 11, 11, 'আলােকবর্ষ কিসের একক?', 'সময়', 'দূরত্ব', 'অরণ', 'বেগ', 2, 11);

-- --------------------------------------------------------

--
-- Table structure for table `phy1shortcut`
--

CREATE TABLE `phy1shortcut` (
  `id` int(100) NOT NULL,
  `second_id` int(100) NOT NULL,
  `third_id` int(100) NOT NULL,
  `forth_id` int(100) NOT NULL,
  `fifth_id` int(100) NOT NULL,
  `six_id` int(100) NOT NULL,
  `seven_id` int(100) NOT NULL,
  `eight_id` int(100) NOT NULL,
  `nine_id` int(100) NOT NULL,
  `ten_id` int(100) NOT NULL,
  `help` varchar(255) CHARACTER SET utf8 NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `phy1shortcut`
--

INSERT INTO `phy1shortcut` (`id`, `second_id`, `third_id`, `forth_id`, `fifth_id`, `six_id`, `seven_id`, `eight_id`, `nine_id`, `ten_id`, `help`) VALUES
(1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 'শতকরা ক্ৰটি=3∆R/R*100=3*0.2/2.5*100=24%'),
(2, 2, 2, 2, 2, 2, 2, 2, 2, 2, '1GHz/1MHz=1*109 Hz/1*106 hz=103');

-- --------------------------------------------------------

--
-- Table structure for table `phy2chapter1`
--

CREATE TABLE `phy2chapter1` (
  `id` int(100) NOT NULL,
  `second_id` int(100) NOT NULL,
  `third_id` int(100) NOT NULL,
  `forth_id` int(100) NOT NULL,
  `fifth_id` int(100) NOT NULL,
  `question` varchar(255) CHARACTER SET utf8 NOT NULL,
  `option1` varchar(255) CHARACTER SET utf8 NOT NULL,
  `option2` varchar(255) CHARACTER SET utf8 NOT NULL,
  `option3` varchar(255) CHARACTER SET utf8 NOT NULL,
  `option4` varchar(255) CHARACTER SET utf8 NOT NULL,
  `ans` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `phy2chapter6`
--

CREATE TABLE `phy2chapter6` (
  `id` int(100) NOT NULL,
  `second_id` int(100) NOT NULL,
  `third_id` int(100) NOT NULL,
  `forth_id` int(100) NOT NULL,
  `fifth_id` int(100) NOT NULL,
  `six_id` int(100) NOT NULL,
  `question` varchar(255) CHARACTER SET utf8 NOT NULL,
  `option1` varchar(255) CHARACTER SET utf8 NOT NULL,
  `option2` varchar(255) CHARACTER SET utf8 NOT NULL,
  `option3` varchar(255) CHARACTER SET utf8 NOT NULL,
  `option4` varchar(255) CHARACTER SET utf8 NOT NULL,
  `ans` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `phy2shortcut`
--

CREATE TABLE `phy2shortcut` (
  `id` int(100) NOT NULL,
  `second_id` int(100) NOT NULL,
  `third_id` int(100) NOT NULL,
  `forth_id` int(100) NOT NULL,
  `fifth_id` int(100) NOT NULL,
  `six_id` int(100) NOT NULL,
  `seven_id` int(100) NOT NULL,
  `eight_id` int(100) NOT NULL,
  `nine_id` int(100) NOT NULL,
  `ten_id` int(100) NOT NULL,
  `eleven_id` int(100) NOT NULL,
  `help` varchar(255) CHARACTER SET utf8 NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `phychapter1`
--

CREATE TABLE `phychapter1` (
  `id` int(100) NOT NULL,
  `second_id` int(100) NOT NULL,
  `third_id` int(100) NOT NULL,
  `question` varchar(255) CHARACTER SET utf8 NOT NULL,
  `option1` varchar(255) CHARACTER SET utf8 NOT NULL,
  `option2` varchar(255) CHARACTER SET utf8 NOT NULL,
  `option3` varchar(255) CHARACTER SET utf8 NOT NULL,
  `option4` varchar(255) CHARACTER SET utf8 NOT NULL,
  `ans` varchar(255) NOT NULL,
  `help` varchar(255) CHARACTER SET utf8 NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `phychapter1`
--

INSERT INTO `phychapter1` (`id`, `second_id`, `third_id`, `question`, `option1`, `option2`, `option3`, `option4`, `ans`, `help`) VALUES
(4, 1, 1, ' কোনটি পদার্থবিজ্ঞানের ভাষায় “নীতি”?', 'ভরবেগের নিত্যতা ', 'বােরের এটম মডেল', 'শক্তির সংরক্ষণশীলতা', 'গ্যালিলিওর পড়ন্ত বস্তুর সূত্রাবলী', 'B', ''),
(5, 3, 3, '1 মাইল ও 1 কিলােমিটার দূরত্বের পার্থক্য মিটারে কত হবে?', '0.609m', ' 6.09m', '60.9m', ' 609m', 'D', ''),
(6, 4, 4, 'কোন কিছু সম্পর্কে সার্বিক উপলদ্ধি বা বােধগম্যতাকে কী বলে?', 'ধারণা', 'সূত্র', 'নীতি', 'তত্ত্ব', 'A', ''),
(7, 5, 5, 'পরমাণুর সমস্ত ধনাত্মক আধান এবং ভর এর কেন্দ্রে অবস্থিত-এই তত্ত্ব কে উপস্থাপন করেন? \r\n', 'রাদারফোর্ড', 'গ্যালিলিও ', 'আইনস্টাইন', 'ম্যাক্স প্ল্যাঙ্ক', 'A', ''),
(8, 6, 6, 'বােরের পরমাণু মডেলে কয়টি স্বীকার্য ছিল?', '1', '2', '3', '4', 'B', ''),
(9, 7, 7, 'তড়িৎ চুম্বকীয় তরঙ্গ তত্ত্ব আবিষ্কার করেন', 'রাদারফোর্ড', 'নিউটন ', 'ম্যাক্সওয়েল', 'আইনস্টাইন।', 'C', ''),
(10, 8, 8, 'কোনটি মৌলিক রাশি?', 'চার্জ।', 'তড়িৎপ্রবাহ', 'বিভব', 'রোধ', 'B', ''),
(11, 9, 9, ' ভর ও শক্তি সমতুল্য- কোন বিজ্ঞানীর অভিমত?', 'নিউটন', 'গ্যলিলিও ', 'আইনস্টাইন।', 'ফ্যারাডে', 'C', ''),
(12, 10, 10, ' তত্ত্ব কী বিষয়ের উপর ভিত্তি করে গড়ে ওঠে?', ' নীতি', ' অনুকল্প', ' অনুমতি', ' পদ্ধতি', 'B', '');

-- --------------------------------------------------------

--
-- Table structure for table `phychapter4`
--

CREATE TABLE `phychapter4` (
  `id` int(100) NOT NULL,
  `second_id` int(100) NOT NULL,
  `third_id` int(100) NOT NULL,
  `question` varchar(255) CHARACTER SET utf8 NOT NULL,
  `option1` varchar(255) CHARACTER SET utf8 NOT NULL,
  `option2` varchar(255) CHARACTER SET utf8 NOT NULL,
  `option3` varchar(255) CHARACTER SET utf8 NOT NULL,
  `option4` varchar(255) CHARACTER SET utf8 NOT NULL,
  `ans` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `phychapter4`
--

INSERT INTO `phychapter4` (`id`, `second_id`, `third_id`, `question`, `option1`, `option2`, `option3`, `option4`, `ans`) VALUES
(1, 1, 1, 'কোনটি কৌণিক ভরবেগের সংরক্ষণ সূত্র?', 'L = ধ্রুবক', ' P = ধ্রুবক', '1 = ধ্রুবক', '. F = ধ্রুবক', 'A'),
(2, 2, 2, 'কোনটি সমান্তরাল অক্ষ উপপাদ্য?', 'L=lx+ly', 'I = IG + MK ', 'I = FG + Mh2', 'IG = I + MK2', 'C'),
(3, 3, 3, 'স্থির অবস্থান থেকে 100kg ভরের একটি গাড়ি অনুভূমিকের সাথে 30° কোণে 20 m দূরত্বের একটি আনত তল বেয়ে নামছে। গাড়িটির বেগ কত?\r\n', '9.8 ms-¹', '14 ms-¹', '98 ms-¹', '196 ms-¹', 'B'),
(4, 4, 4, 'নিচের কোনটি মৌলিক বল নয়?', 'ঘর্ষণ বল', 'তাড়িতচৌম্বক বল', 'সবল নিউক্লিয় বল', 'মহাকর্ষ বল', 'A'),
(5, 5, 5, 'নিচের কোনটিতে ভরের ভূমিকা রয়েছে?', 'চলন গতিতে', 'ঘূর্ণন গতিতে ', 'রৈখিক গতিতে', 'টর্কে', 'D'),
(6, 6, 6, 'নিচের কোন বলটি বিপরীত বর্গীয় সূত্র মেনে চলে না?', 'মহাকর্ষ বল', 'তড়িৎ বল', 'চৌম্বক বল', 'সংশক্তি বল', 'D'),
(7, 7, 7, 'একটি ঘড়ির সেকেন্ড, মিনিট ও ঘন্টার কাঁটার কৌণিক বেগের অনুপাত কত?\r\n', '720:60:1', '1:60:720', '1:12:720', '720:12:1', 'A'),
(8, 8, 8, 'কোনাে নির্দিষ্ট সময়ে গ্রাফটির ঢাল গাড়ীটির কি নির্দেশ করে?', 'বেগ\r\n', 'গতিশক্তি', 'প্রযুক্ত বল', 'গতিশক্তি পরিবর্তনের হার', 'C'),
(9, 9, 9, 'বৃত্তাকার পথে ঘূর্ণনরত বস্তুর রৈখিক দ্রুতি, v এবং আবর্তনকাল, T এর মধ্যকার সম্পর্ক কোনটি?\r\n', 'V=πr/T', 'V= 2πr/T', 'V=T/2πr', 'V=T/πr', 'B'),
(10, 10, 10, 'হাতঘড়ির মিনিটের কাঁটার কম্পাংক —', '2.78 Hz', '2.78 × 10-¹ Hz', '2.78 x 10-² Hz', ' 2.78 X 10-4 Hz', 'D');

-- --------------------------------------------------------

--
-- Table structure for table `phychapter7`
--

CREATE TABLE `phychapter7` (
  `id` int(100) NOT NULL,
  `second_id` int(100) NOT NULL,
  `third_id` int(100) NOT NULL,
  `forth_id` int(11) NOT NULL,
  `question` varchar(255) CHARACTER SET utf8 NOT NULL,
  `option1` varchar(255) CHARACTER SET utf8 NOT NULL,
  `option2` varchar(255) CHARACTER SET utf8 NOT NULL,
  `option3` varchar(255) CHARACTER SET utf8 NOT NULL,
  `option4` varchar(255) CHARACTER SET utf8 NOT NULL,
  `ans` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `physics1`
--

CREATE TABLE `physics1` (
  `id` int(100) NOT NULL,
  `question` varchar(255) NOT NULL,
  `option1` varchar(255) NOT NULL,
  `option2` varchar(255) NOT NULL,
  `option3` varchar(255) NOT NULL,
  `option4` varchar(255) NOT NULL,
  `ans` varchar(255) NOT NULL,
  `help` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `register`
--

CREATE TABLE `register` (
  `id` int(10) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(100) NOT NULL,
  `fullname` varchar(255) NOT NULL,
  `phone` varchar(100) NOT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `register`
--

INSERT INTO `register` (`id`, `username`, `password`, `fullname`, `phone`, `updated_at`, `created_at`) VALUES
(1, 'ruma', '$2y$10$c8Nia62z0PcH6eQEAB/dWecH6WHkAYtdNKm6BL9jl5MRQ7YPkT4Mq', 'ruma sinha', '0171234567', '2018-01-10 07:37:08', '2018-01-10 07:37:08');

-- --------------------------------------------------------

--
-- Table structure for table `shortcut`
--

CREATE TABLE `shortcut` (
  `id` int(100) NOT NULL,
  `help` varchar(255) CHARACTER SET utf8 NOT NULL,
  `help1` varchar(255) CHARACTER SET utf8 NOT NULL,
  `help2` varchar(255) CHARACTER SET utf8 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `test1`
--

CREATE TABLE `test1` (
  `id` int(100) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(100) NOT NULL,
  `c_password` varchar(100) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `test1`
--

INSERT INTO `test1` (`id`, `name`, `email`, `password`, `c_password`, `created_at`, `updated_at`) VALUES
(14, 'Ruma', 'ruma@gmail.com', '123456', '123456', '2018-01-16 12:28:23', '2018-01-16 12:28:23'),
(15, 'ruuu', 'ruma@gmail.com', '123456', '123456', '2018-01-16 12:38:13', '2018-01-16 12:38:13'),
(16, 'rrr', 'tt@gmail.com', '23456789', '23456789', '2018-01-16 12:46:44', '2018-01-16 12:46:44'),
(17, 'ru', 'ru@gmail.com', '12345678', '12345678', '2018-01-16 13:10:28', '2018-01-16 13:10:28'),
(18, 'juma', 'juma@gmail.com', '12345678', '12345678', '2018-01-16 13:16:56', '2018-01-16 13:16:56'),
(19, 'sumi', 'sumi@gmail.com', '12345678', '12345678', '2018-01-16 13:20:10', '2018-01-16 13:20:10');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `biology1`
--
ALTER TABLE `biology1`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `biology2model`
--
ALTER TABLE `biology2model`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `chemistry1`
--
ALTER TABLE `chemistry1`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `chemistry1short`
--
ALTER TABLE `chemistry1short`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `chemistry1test`
--
ALTER TABLE `chemistry1test`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `math1`
--
ALTER TABLE `math1`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `modeTest`
--
ALTER TABLE `modeTest`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `phy1modeltest`
--
ALTER TABLE `phy1modeltest`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `phy1shortcut`
--
ALTER TABLE `phy1shortcut`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `phy2chapter1`
--
ALTER TABLE `phy2chapter1`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `phy2shortcut`
--
ALTER TABLE `phy2shortcut`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `phychapter1`
--
ALTER TABLE `phychapter1`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `phychapter4`
--
ALTER TABLE `phychapter4`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `phychapter7`
--
ALTER TABLE `phychapter7`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `physics1`
--
ALTER TABLE `physics1`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `register`
--
ALTER TABLE `register`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `shortcut`
--
ALTER TABLE `shortcut`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `test1`
--
ALTER TABLE `test1`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `biology1`
--
ALTER TABLE `biology1`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `biology2model`
--
ALTER TABLE `biology2model`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `chemistry1`
--
ALTER TABLE `chemistry1`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `chemistry1short`
--
ALTER TABLE `chemistry1short`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `chemistry1test`
--
ALTER TABLE `chemistry1test`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `math1`
--
ALTER TABLE `math1`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `modeTest`
--
ALTER TABLE `modeTest`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `phy1modeltest`
--
ALTER TABLE `phy1modeltest`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `phy1shortcut`
--
ALTER TABLE `phy1shortcut`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `phy2chapter1`
--
ALTER TABLE `phy2chapter1`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `phy2shortcut`
--
ALTER TABLE `phy2shortcut`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `phychapter1`
--
ALTER TABLE `phychapter1`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `phychapter4`
--
ALTER TABLE `phychapter4`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `phychapter7`
--
ALTER TABLE `phychapter7`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `physics1`
--
ALTER TABLE `physics1`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `register`
--
ALTER TABLE `register`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `shortcut`
--
ALTER TABLE `shortcut`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `test1`
--
ALTER TABLE `test1`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

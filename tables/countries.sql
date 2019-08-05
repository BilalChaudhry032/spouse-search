-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 27, 2018 at 12:59 PM
-- Server version: 10.1.29-MariaDB
-- PHP Version: 7.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `spouse`
--

-- --------------------------------------------------------

--
-- Table structure for table `countries`
--


--
-- Dumping data for table `countries`
--

INSERT INTO `countries` (`id`, `country_name`, `code`, `created_at`, `updated_at`) VALUES
(1, 'Afghanistan', '93', NULL, NULL),
(2, 'Albania', '355', NULL, NULL),
(3, 'Algeria', '213', NULL, NULL),
(4, 'American Samoa', '1684', NULL, NULL),
(5, 'Andorra', '376', NULL, NULL),
(6, 'Angola', '244', NULL, NULL),
(7, 'Anguilla', '1264', NULL, NULL),
(8, 'Antarctica', '0', NULL, NULL),
(9, 'Antigua And Barbuda', '1268', NULL, NULL),
(10, 'Argentina', '54', NULL, NULL),
(11, 'Armenia', '374', NULL, NULL),
(12, 'Aruba', '297', NULL, NULL),
(13, 'Australia', '61', NULL, NULL),
(14, 'Austria', '43', NULL, NULL),
(15, 'Azerbaijan', '994', NULL, NULL),
(16, 'Bahamas The', '1242', NULL, NULL),
(17, 'Bahrain', '973', NULL, NULL),
(18, 'Bangladesh', '880', NULL, NULL),
(19, 'Barbados', '1246', NULL, NULL),
(20, 'Belarus', '375', NULL, NULL),
(21, 'Belgium', '32', NULL, NULL),
(22, 'Belize', '501', NULL, NULL),
(23, 'Benin', '229', NULL, NULL),
(24, 'Bermuda', '1441', NULL, NULL),
(25, 'Bhutan', '975', NULL, NULL),
(26, 'Bolivia', '591', NULL, NULL),
(27, 'Bosnia and Herzegovina', '387', NULL, NULL),
(28, 'Botswana', '267', NULL, NULL),
(29, 'Bouvet Island', '0', NULL, NULL),
(30, 'Brazil', '55', NULL, NULL),
(31, 'British Indian Ocean Territory', '246', NULL, NULL),
(32, 'Brunei', '673', NULL, NULL),
(33, 'Bulgaria', '359', NULL, NULL),
(34, 'Burkina Faso', '226', NULL, NULL),
(35, 'Burundi', '257', NULL, NULL),
(36, 'Cambodia', '855', NULL, NULL),
(37, 'Cameroon', '237', NULL, NULL),
(38, 'Canada', '1', NULL, NULL),
(39, 'Cape Verde', '238', NULL, NULL),
(40, 'Cayman Islands', '1345', NULL, NULL),
(41, 'Central African Republic', '236', NULL, NULL),
(42, 'Chad', '235', NULL, NULL),
(43, 'Chile', '56', NULL, NULL),
(44, 'China', '86', NULL, NULL),
(45, 'Christmas Island', '61', NULL, NULL),
(46, 'Cocos (Keeling) Islands', '672', NULL, NULL),
(47, 'Colombia', '57', NULL, NULL),
(48, 'Comoros', '269', NULL, NULL),
(49, 'Republic Of The Congo', '242', NULL, NULL),
(50, 'Democratic Republic Of The Congo', '242', NULL, NULL),
(51, 'Cook Islands', '682', NULL, NULL),
(52, 'Costa Rica', '506', NULL, NULL),
(53, 'Cote D\'Ivoire (Ivory Coast)', '225', NULL, NULL),
(54, 'Croatia (Hrvatska)', '385', NULL, NULL),
(55, 'Cuba', '53', NULL, NULL),
(56, 'Cyprus', '357', NULL, NULL),
(57, 'Czech Republic', '420', NULL, NULL),
(58, 'Denmark', '45', NULL, NULL),
(59, 'Djibouti', '253', NULL, NULL),
(60, 'Dominica', '1767', NULL, NULL),
(61, 'Dominican Republic', '1809', NULL, NULL),
(62, 'East Timor', '670', NULL, NULL),
(63, 'Ecuador', '593', NULL, NULL),
(64, 'Egypt', '20', NULL, NULL),
(65, 'El Salvador', '503', NULL, NULL),
(66, 'Equatorial Guinea', '240', NULL, NULL),
(67, 'Eritrea', '291', NULL, NULL),
(68, 'Estonia', '372', NULL, NULL),
(69, 'Ethiopia', '251', NULL, NULL),
(70, 'External Territories of Australia', '61', NULL, NULL),
(71, 'Falkland Islands', '500', NULL, NULL),
(72, 'Faroe Islands', '298', NULL, NULL),
(73, 'Fiji Islands', '679', NULL, NULL),
(74, 'Finland', '358', NULL, NULL),
(75, 'France', '33', NULL, NULL),
(76, 'French Guiana', '594', NULL, NULL),
(77, 'French Polynesia', '689', NULL, NULL),
(78, 'French Southern Territories', '0', NULL, NULL),
(79, 'Gabon', '241', NULL, NULL),
(80, 'Gambia The', '220', NULL, NULL),
(81, 'Georgia', '995', NULL, NULL),
(82, 'Germany', '49', NULL, NULL),
(83, 'Ghana', '233', NULL, NULL),
(84, 'Gibraltar', '350', NULL, NULL),
(85, 'Greece', '30', NULL, NULL),
(86, 'Greenland', '299', NULL, NULL),
(87, 'Grenada', '1473', NULL, NULL),
(88, 'Guadeloupe', '590', NULL, NULL),
(89, 'Guam', '1671', NULL, NULL),
(90, 'Guatemala', '502', NULL, NULL),
(91, 'Guernsey and Alderney', '44', NULL, NULL),
(92, 'Guinea', '224', NULL, NULL),
(93, 'Guinea-Bissau', '245', NULL, NULL),
(94, 'Guyana', '592', NULL, NULL),
(95, 'Haiti', '509', NULL, NULL),
(96, 'Heard and McDonald Islands', '0', NULL, NULL),
(97, 'Honduras', '504', NULL, NULL),
(98, 'Hong Kong S.A.R.', '852', NULL, NULL),
(99, 'Hungary', '36', NULL, NULL),
(100, 'Iceland', '354', NULL, NULL),
(101, 'India', '91', NULL, NULL),
(102, 'Indonesia', '62', NULL, NULL),
(103, 'Iran', '98', NULL, NULL),
(104, 'Iraq', '964', NULL, NULL),
(105, 'Ireland', '353', NULL, NULL),
(106, 'Israel', '972', NULL, NULL),
(107, 'Italy', '39', NULL, NULL),
(108, 'Jamaica', '1876', NULL, NULL),
(109, 'Japan', '81', NULL, NULL),
(110, 'Jersey', '44', NULL, NULL),
(111, 'Jordan', '962', NULL, NULL),
(112, 'Kazakhstan', '7', NULL, NULL),
(113, 'Kenya', '254', NULL, NULL),
(114, 'Kiribati', '686', NULL, NULL),
(115, 'Korea North', '850', NULL, NULL),
(116, 'Korea South', '82', NULL, NULL),
(117, 'Kuwait', '965', NULL, NULL),
(118, 'Kyrgyzstan', '996', NULL, NULL),
(119, 'Laos', '856', NULL, NULL),
(120, 'Latvia', '371', NULL, NULL),
(121, 'Lebanon', '961', NULL, NULL),
(122, 'Lesotho', '266', NULL, NULL),
(123, 'Liberia', '231', NULL, NULL),
(124, 'Libya', '218', NULL, NULL),
(125, 'Liechtenstein', '423', NULL, NULL),
(126, 'Lithuania', '370', NULL, NULL),
(127, 'Luxembourg', '352', NULL, NULL),
(128, 'Macau S.A.R.', '853', NULL, NULL),
(129, 'Macedonia', '389', NULL, NULL),
(130, 'Madagascar', '261', NULL, NULL),
(131, 'Malawi', '265', NULL, NULL),
(132, 'Malaysia', '60', NULL, NULL),
(133, 'Maldives', '960', NULL, NULL),
(134, 'Mali', '223', NULL, NULL),
(135, 'Malta', '356', NULL, NULL),
(136, 'Man (Isle of)', '44', NULL, NULL),
(137, 'Marshall Islands', '692', NULL, NULL),
(138, 'Martinique', '596', NULL, NULL),
(139, 'Mauritania', '222', NULL, NULL),
(140, 'Mauritius', '230', NULL, NULL),
(141, 'Mayotte', '269', NULL, NULL),
(142, 'Mexico', '52', NULL, NULL),
(143, 'Micronesia', '691', NULL, NULL),
(144, 'Moldova', '373', NULL, NULL),
(145, 'Monaco', '377', NULL, NULL),
(146, 'Mongolia', '976', NULL, NULL),
(147, 'Montserrat', '1664', NULL, NULL),
(148, 'Morocco', '212', NULL, NULL),
(149, 'Mozambique', '258', NULL, NULL),
(150, 'Myanmar', '95', NULL, NULL),
(151, 'Namibia', '264', NULL, NULL),
(152, 'Nauru', '674', NULL, NULL),
(153, 'Nepal', '977', NULL, NULL),
(154, 'Netherlands Antilles', '599', NULL, NULL),
(155, 'Netherlands The', '31', NULL, NULL),
(156, 'New Caledonia', '687', NULL, NULL),
(157, 'New Zealand', '64', NULL, NULL),
(158, 'Nicaragua', '505', NULL, NULL),
(159, 'Niger', '227', NULL, NULL),
(160, 'Nigeria', '234', NULL, NULL),
(161, 'Niue', '683', NULL, NULL),
(162, 'Norfolk Island', '672', NULL, NULL),
(163, 'Northern Mariana Islands', '1670', NULL, NULL),
(164, 'Norway', '47', NULL, NULL),
(165, 'Oman', '968', NULL, NULL),
(166, 'Pakistan', '92', NULL, NULL),
(167, 'Palau', '680', NULL, NULL),
(168, 'Palestinian Territory Occupied', '970', NULL, NULL),
(169, 'Panama', '507', NULL, NULL),
(170, 'Papua new Guinea', '675', NULL, NULL),
(171, 'Paraguay', '595', NULL, NULL),
(172, 'Peru', '51', NULL, NULL),
(173, 'Philippines', '63', NULL, NULL),
(174, 'Pitcairn Island', '0', NULL, NULL),
(175, 'Poland', '48', NULL, NULL),
(176, 'Portugal', '351', NULL, NULL),
(177, 'Puerto Rico', '1787', NULL, NULL),
(178, 'Qatar', '974', NULL, NULL),
(179, 'Reunion', '262', NULL, NULL),
(180, 'Romania', '40', NULL, NULL),
(181, 'Russia', '70', NULL, NULL),
(182, 'Rwanda', '250', NULL, NULL),
(183, 'Saint Helena', '290', NULL, NULL),
(184, 'Saint Kitts And Nevis', '1869', NULL, NULL),
(185, 'Saint Lucia', '1758', NULL, NULL),
(186, 'Saint Pierre and Miquelon', '508', NULL, NULL),
(187, 'Saint Vincent And The Grenadines', '1784', NULL, NULL),
(188, 'Samoa', '684', NULL, NULL),
(189, 'San Marino', '378', NULL, NULL),
(190, 'Sao Tome and Principe', '239', NULL, NULL),
(191, 'Saudi Arabia', '966', NULL, NULL),
(192, 'Senegal', '221', NULL, NULL),
(193, 'Serbia', '381', NULL, NULL),
(194, 'Seychelles', '248', NULL, NULL),
(195, 'Sierra Leone', '232', NULL, NULL),
(196, 'Singapore', '65', NULL, NULL),
(197, 'Slovakia', '421', NULL, NULL),
(198, 'Slovenia', '386', NULL, NULL),
(199, 'Smaller Territories of the UK', '44', NULL, NULL),
(200, 'Solomon Islands', '677', NULL, NULL),
(201, 'Somalia', '252', NULL, NULL),
(202, 'South Africa', '27', NULL, NULL),
(203, 'South Georgia', '0', NULL, NULL),
(204, 'South Sudan', '211', NULL, NULL),
(205, 'Spain', '34', NULL, NULL),
(206, 'Sri Lanka', '94', NULL, NULL),
(207, 'Sudan', '249', NULL, NULL),
(208, 'Suriname', '597', NULL, NULL),
(209, 'Svalbard And Jan Mayen Islands', '47', NULL, NULL),
(210, 'Swaziland', '268', NULL, NULL),
(211, 'Sweden', '46', NULL, NULL),
(212, 'Switzerland', '41', NULL, NULL),
(213, 'Syria', '963', NULL, NULL),
(214, 'Taiwan', '886', NULL, NULL),
(215, 'Tajikistan', '992', NULL, NULL),
(216, 'Tanzania', '255', NULL, NULL),
(217, 'Thailand', '66', NULL, NULL),
(218, 'Togo', '228', NULL, NULL),
(219, 'Tokelau', '690', NULL, NULL),
(220, 'Tonga', '676', NULL, NULL),
(221, 'Trinidad And Tobago', '1868', NULL, NULL),
(222, 'Tunisia', '216', NULL, NULL),
(223, 'Turkey', '90', NULL, NULL),
(224, 'Turkmenistan', '7370', NULL, NULL),
(225, 'Turks And Caicos Islands', '1649', NULL, NULL),
(226, 'Tuvalu', '688', NULL, NULL),
(227, 'Uganda', '256', NULL, NULL),
(228, 'Ukraine', '380', NULL, NULL),
(229, 'United Arab Emirates', '971', NULL, NULL),
(230, 'United Kingdom', '44', NULL, NULL),
(231, 'United States', '1', NULL, NULL),
(232, 'United States Minor Outlying Islands', '1', NULL, NULL),
(233, 'Uruguay', '598', NULL, NULL),
(234, 'Uzbekistan', '998', NULL, NULL),
(235, 'Vanuatu', '678', NULL, NULL),
(236, 'Vatican City State (Holy See)', '39', NULL, NULL),
(237, 'Venezuela', '58', NULL, NULL),
(238, 'Vietnam', '84', NULL, NULL),
(239, 'Virgin Islands (British)', '1284', NULL, NULL),
(240, 'Virgin Islands (US)', '1340', NULL, NULL),
(241, 'Wallis And Futuna Islands', '681', NULL, NULL),
(242, 'Western Sahara', '212', NULL, NULL),
(243, 'Yemen', '967', NULL, NULL),
(244, 'Yugoslavia', '38', NULL, NULL),
(245, 'Zambia', '260', NULL, NULL),
(246, 'Zimbabwe', '263', NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `countries`
--
ALTER TABLE `countries`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `countries`
--
ALTER TABLE `countries`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=247;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

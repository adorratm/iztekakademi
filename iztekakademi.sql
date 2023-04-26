-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Apr 26, 2023 at 01:35 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `iztekakademi`
--

-- --------------------------------------------------------

--
-- Table structure for table `blogs`
--

CREATE TABLE `blogs` (
  `id` int(11) NOT NULL,
  `title` longtext DEFAULT NULL,
  `img_url` longtext DEFAULT NULL,
  `content` longtext DEFAULT NULL,
  `category_id` int(11) DEFAULT NULL,
  `lang` char(2) DEFAULT 'tr',
  `rank` bigint(20) DEFAULT 1,
  `isActive` tinyint(1) DEFAULT 1,
  `seo_url` longtext DEFAULT NULL,
  `createdAt` timestamp NULL DEFAULT current_timestamp(),
  `updatedAt` timestamp NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `sharedAt` timestamp NULL DEFAULT NULL,
  `gallery_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `blog_categories`
--

CREATE TABLE `blog_categories` (
  `id` int(11) NOT NULL,
  `title` longtext DEFAULT NULL,
  `seo_url` longtext DEFAULT NULL,
  `img_url` longtext DEFAULT NULL,
  `lang` char(2) DEFAULT 'tr',
  `rank` bigint(20) DEFAULT 1,
  `isActive` tinyint(1) DEFAULT 1,
  `createdAt` timestamp NULL DEFAULT current_timestamp(),
  `updatedAt` timestamp NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `countries`
--

CREATE TABLE `countries` (
  `ID` int(11) NOT NULL,
  `code` varchar(3) DEFAULT NULL,
  `name` varchar(150) DEFAULT NULL,
  `dial_code` int(11) DEFAULT NULL,
  `currency_name` varchar(20) DEFAULT NULL,
  `currency_symbol` varchar(20) DEFAULT NULL,
  `currency_code` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `countries`
--

INSERT INTO `countries` (`ID`, `code`, `name`, `dial_code`, `currency_name`, `currency_symbol`, `currency_code`) VALUES
(1, 'AF', 'Afghanistan', 93, 'Afghan afghani', 'Ø‹', 'AFN'),
(2, 'AL', 'Albania', 355, 'Albanian lek', 'L', 'ALL'),
(3, 'DZ', 'Algeria', 213, 'Algerian dinar', 'Ø¯.Ø¬', 'DZD'),
(4, 'AS', 'American Samoa', 1684, '', '', ''),
(5, 'AD', 'Andorra', 376, 'Euro', 'â‚¬', 'EUR'),
(6, 'AO', 'Angola', 244, 'Angolan kwanza', 'Kz', 'AOA'),
(7, 'AI', 'Anguilla', 1264, 'East Caribbean dolla', '$', 'XCD'),
(8, 'AQ', 'Antarctica', 0, '', '', ''),
(9, 'AG', 'Antigua And Barbuda', 1268, 'East Caribbean dolla', '$', 'XCD'),
(10, 'AR', 'Argentina', 54, 'Argentine peso', '$', 'ARS'),
(11, 'AM', 'Armenia', 374, 'Armenian dram', '', 'AMD'),
(12, 'AW', 'Aruba', 297, 'Aruban florin', 'Æ’', 'AWG'),
(13, 'AU', 'Australia', 61, 'Australian dollar', '$', 'AUD'),
(14, 'AT', 'Austria', 43, 'Euro', 'â‚¬', 'EUR'),
(15, 'AZ', 'Azerbaijan', 994, 'Azerbaijani manat', '', 'AZN'),
(16, 'BS', 'Bahamas The', 1242, '', '', ''),
(17, 'BH', 'Bahrain', 973, 'Bahraini dinar', '.Ø¯.Ø¨', 'BHD'),
(18, 'BD', 'Bangladesh', 880, 'Bangladeshi taka', 'à§³', 'BDT'),
(19, 'BB', 'Barbados', 1246, 'Barbadian dollar', '$', 'BBD'),
(20, 'BY', 'Belarus', 375, 'Belarusian ruble', 'Br', 'BYR'),
(21, 'BE', 'Belgium', 32, 'Euro', 'â‚¬', 'EUR'),
(22, 'BZ', 'Belize', 501, 'Belize dollar', '$', 'BZD'),
(23, 'BJ', 'Benin', 229, 'West African CFA fra', 'Fr', 'XOF'),
(24, 'BM', 'Bermuda', 1441, 'Bermudian dollar', '$', 'BMD'),
(25, 'BT', 'Bhutan', 975, 'Bhutanese ngultrum', 'Nu.', 'BTN'),
(26, 'BO', 'Bolivia', 591, 'Bolivian boliviano', 'Bs.', 'BOB'),
(27, 'BA', 'Bosnia and Herzegovina', 387, 'Bosnia and Herzegovi', 'KM or ÐšÐœ', 'BAM'),
(28, 'BW', 'Botswana', 267, 'Botswana pula', 'P', 'BWP'),
(29, 'BV', 'Bouvet Island', 0, '', '', ''),
(30, 'BR', 'Brazil', 55, 'Brazilian real', 'R$', 'BRL'),
(31, 'IO', 'British Indian Ocean Territory', 246, 'United States dollar', '$', 'USD'),
(32, 'BN', 'Brunei', 673, 'Brunei dollar', '$', 'BND'),
(33, 'BG', 'Bulgaria', 359, 'Bulgarian lev', 'Ð»Ð²', 'BGN'),
(34, 'BF', 'Burkina Faso', 226, 'West African CFA fra', 'Fr', 'XOF'),
(35, 'BI', 'Burundi', 257, 'Burundian franc', 'Fr', 'BIF'),
(36, 'KH', 'Cambodia', 855, 'Cambodian riel', 'áŸ›', 'KHR'),
(37, 'CM', 'Cameroon', 237, 'Central African CFA ', 'Fr', 'XAF'),
(38, 'CA', 'Canada', 1, 'Canadian dollar', '$', 'CAD'),
(39, 'CV', 'Cape Verde', 238, 'Cape Verdean escudo', 'Esc or $', 'CVE'),
(40, 'KY', 'Cayman Islands', 1345, 'Cayman Islands dolla', '$', 'KYD'),
(41, 'CF', 'Central African Republic', 236, 'Central African CFA ', 'Fr', 'XAF'),
(42, 'TD', 'Chad', 235, 'Central African CFA ', 'Fr', 'XAF'),
(43, 'CL', 'Chile', 56, 'Chilean peso', '$', 'CLP'),
(44, 'CN', 'China', 86, 'Chinese yuan', 'Â¥ or å…ƒ', 'CNY'),
(45, 'CX', 'Christmas Island', 61, '', '', ''),
(46, 'CC', 'Cocos (Keeling) Islands', 672, 'Australian dollar', '$', 'AUD'),
(47, 'CO', 'Colombia', 57, 'Colombian peso', '$', 'COP'),
(48, 'KM', 'Comoros', 269, 'Comorian franc', 'Fr', 'KMF'),
(49, 'CG', 'Congo', 242, '', '', ''),
(50, 'CD', 'Congo The Democratic Republic Of The', 242, '', '', ''),
(51, 'CK', 'Cook Islands', 682, 'New Zealand dollar', '$', 'NZD'),
(52, 'CR', 'Costa Rica', 506, 'Costa Rican colÃ³n', 'â‚¡', 'CRC'),
(53, 'CI', 'Cote D\'Ivoire (Ivory Coast)', 225, '', '', ''),
(54, 'HR', 'Croatia (Hrvatska)', 385, '', '', ''),
(55, 'CU', 'Cuba', 53, 'Cuban convertible pe', '$', 'CUC'),
(56, 'CY', 'Cyprus', 357, 'Euro', 'â‚¬', 'EUR'),
(57, 'CZ', 'Czech Republic', 420, 'Czech koruna', 'KÄ', 'CZK'),
(58, 'DK', 'Denmark', 45, 'Danish krone', 'kr', 'DKK'),
(59, 'DJ', 'Djibouti', 253, 'Djiboutian franc', 'Fr', 'DJF'),
(60, 'DM', 'Dominica', 1767, 'East Caribbean dolla', '$', 'XCD'),
(61, 'DO', 'Dominican Republic', 1809, 'Dominican peso', '$', 'DOP'),
(62, 'TP', 'East Timor', 670, 'United States dollar', '$', 'USD'),
(63, 'EC', 'Ecuador', 593, 'United States dollar', '$', 'USD'),
(64, 'EG', 'Egypt', 20, 'Egyptian pound', 'Â£ or Ø¬.Ù…', 'EGP'),
(65, 'SV', 'El Salvador', 503, 'United States dollar', '$', 'USD'),
(66, 'GQ', 'Equatorial Guinea', 240, 'Central African CFA ', 'Fr', 'XAF'),
(67, 'ER', 'Eritrea', 291, 'Eritrean nakfa', 'Nfk', 'ERN'),
(68, 'EE', 'Estonia', 372, 'Euro', 'â‚¬', 'EUR'),
(69, 'ET', 'Ethiopia', 251, 'Ethiopian birr', 'Br', 'ETB'),
(70, 'XA', 'External Territories of Australia', 61, '', '', ''),
(71, 'FK', 'Falkland Islands', 500, 'Falkland Islands pou', 'Â£', 'FKP'),
(72, 'FO', 'Faroe Islands', 298, 'Danish krone', 'kr', 'DKK'),
(73, 'FJ', 'Fiji Islands', 679, '', '', ''),
(74, 'FI', 'Finland', 358, 'Euro', 'â‚¬', 'EUR'),
(75, 'FR', 'France', 33, 'Euro', 'â‚¬', 'EUR'),
(76, 'GF', 'French Guiana', 594, '', '', ''),
(77, 'PF', 'French Polynesia', 689, 'CFP franc', 'Fr', 'XPF'),
(78, 'TF', 'French Southern Territories', 0, '', '', ''),
(79, 'GA', 'Gabon', 241, 'Central African CFA ', 'Fr', 'XAF'),
(80, 'GM', 'Gambia The', 220, '', '', ''),
(81, 'GE', 'Georgia', 995, 'Georgian lari', 'áƒš', 'GEL'),
(82, 'DE', 'Germany', 49, 'Euro', 'â‚¬', 'EUR'),
(83, 'GH', 'Ghana', 233, 'Ghana cedi', 'â‚µ', 'GHS'),
(84, 'GI', 'Gibraltar', 350, 'Gibraltar pound', 'Â£', 'GIP'),
(85, 'GR', 'Greece', 30, 'Euro', 'â‚¬', 'EUR'),
(86, 'GL', 'Greenland', 299, '', '', ''),
(87, 'GD', 'Grenada', 1473, 'East Caribbean dolla', '$', 'XCD'),
(88, 'GP', 'Guadeloupe', 590, '', '', ''),
(89, 'GU', 'Guam', 1671, '', '', ''),
(90, 'GT', 'Guatemala', 502, 'Guatemalan quetzal', 'Q', 'GTQ'),
(91, 'XU', 'Guernsey and Alderney', 44, '', '', ''),
(92, 'GN', 'Guinea', 224, 'Guinean franc', 'Fr', 'GNF'),
(93, 'GW', 'Guinea-Bissau', 245, 'West African CFA fra', 'Fr', 'XOF'),
(94, 'GY', 'Guyana', 592, 'Guyanese dollar', '$', 'GYD'),
(95, 'HT', 'Haiti', 509, 'Haitian gourde', 'G', 'HTG'),
(96, 'HM', 'Heard and McDonald Islands', 0, '', '', ''),
(97, 'HN', 'Honduras', 504, 'Honduran lempira', 'L', 'HNL'),
(98, 'HK', 'Hong Kong S.A.R.', 852, '', '', ''),
(99, 'HU', 'Hungary', 36, 'Hungarian forint', 'Ft', 'HUF'),
(100, 'IS', 'Iceland', 354, 'Icelandic krÃ³na', 'kr', 'ISK'),
(101, 'IN', 'India', 91, 'Indian rupee', 'â‚¹', 'INR'),
(102, 'ID', 'Indonesia', 62, 'Indonesian rupiah', 'Rp', 'IDR'),
(103, 'IR', 'Iran', 98, 'Iranian rial', 'ï·¼', 'IRR'),
(104, 'IQ', 'Iraq', 964, 'Iraqi dinar', 'Ø¹.Ø¯', 'IQD'),
(105, 'IE', 'Ireland', 353, 'Euro', 'â‚¬', 'EUR'),
(106, 'IL', 'Israel', 972, 'Israeli new shekel', 'â‚ª', 'ILS'),
(107, 'IT', 'Italy', 39, 'Euro', 'â‚¬', 'EUR'),
(108, 'JM', 'Jamaica', 1876, 'Jamaican dollar', '$', 'JMD'),
(109, 'JP', 'Japan', 81, 'Japanese yen', 'Â¥', 'JPY'),
(110, 'XJ', 'Jersey', 44, 'British pound', 'Â£', 'GBP'),
(111, 'JO', 'Jordan', 962, 'Jordanian dinar', 'Ø¯.Ø§', 'JOD'),
(112, 'KZ', 'Kazakhstan', 7, 'Kazakhstani tenge', '', 'KZT'),
(113, 'KE', 'Kenya', 254, 'Kenyan shilling', 'Sh', 'KES'),
(114, 'KI', 'Kiribati', 686, 'Australian dollar', '$', 'AUD'),
(115, 'KP', 'Korea North', 850, '', '', ''),
(116, 'KR', 'Korea South', 82, '', '', ''),
(117, 'KW', 'Kuwait', 965, 'Kuwaiti dinar', 'Ø¯.Ùƒ', 'KWD'),
(118, 'KG', 'Kyrgyzstan', 996, 'Kyrgyzstani som', 'Ð»Ð²', 'KGS'),
(119, 'LA', 'Laos', 856, 'Lao kip', 'â‚­', 'LAK'),
(120, 'LV', 'Latvia', 371, 'Euro', 'â‚¬', 'EUR'),
(121, 'LB', 'Lebanon', 961, 'Lebanese pound', 'Ù„.Ù„', 'LBP'),
(122, 'LS', 'Lesotho', 266, 'Lesotho loti', 'L', 'LSL'),
(123, 'LR', 'Liberia', 231, 'Liberian dollar', '$', 'LRD'),
(124, 'LY', 'Libya', 218, 'Libyan dinar', 'Ù„.Ø¯', 'LYD'),
(125, 'LI', 'Liechtenstein', 423, 'Swiss franc', 'Fr', 'CHF'),
(126, 'LT', 'Lithuania', 370, 'Euro', 'â‚¬', 'EUR'),
(127, 'LU', 'Luxembourg', 352, 'Euro', 'â‚¬', 'EUR'),
(128, 'MO', 'Macau S.A.R.', 853, '', '', ''),
(129, 'MK', 'Macedonia', 389, '', '', ''),
(130, 'MG', 'Madagascar', 261, 'Malagasy ariary', 'Ar', 'MGA'),
(131, 'MW', 'Malawi', 265, 'Malawian kwacha', 'MK', 'MWK'),
(132, 'MY', 'Malaysia', 60, 'Malaysian ringgit', 'RM', 'MYR'),
(133, 'MV', 'Maldives', 960, 'Maldivian rufiyaa', '.Þƒ', 'MVR'),
(134, 'ML', 'Mali', 223, 'West African CFA fra', 'Fr', 'XOF'),
(135, 'MT', 'Malta', 356, 'Euro', 'â‚¬', 'EUR'),
(136, 'XM', 'Man (Isle of)', 44, '', '', ''),
(137, 'MH', 'Marshall Islands', 692, 'United States dollar', '$', 'USD'),
(138, 'MQ', 'Martinique', 596, '', '', ''),
(139, 'MR', 'Mauritania', 222, 'Mauritanian ouguiya', 'UM', 'MRO'),
(140, 'MU', 'Mauritius', 230, 'Mauritian rupee', 'â‚¨', 'MUR'),
(141, 'YT', 'Mayotte', 269, '', '', ''),
(142, 'MX', 'Mexico', 52, 'Mexican peso', '$', 'MXN'),
(143, 'FM', 'Micronesia', 691, 'Micronesian dollar', '$', ''),
(144, 'MD', 'Moldova', 373, 'Moldovan leu', 'L', 'MDL'),
(145, 'MC', 'Monaco', 377, 'Euro', 'â‚¬', 'EUR'),
(146, 'MN', 'Mongolia', 976, 'Mongolian tÃ¶grÃ¶g', 'â‚®', 'MNT'),
(147, 'MS', 'Montserrat', 1664, 'East Caribbean dolla', '$', 'XCD'),
(148, 'MA', 'Morocco', 212, 'Moroccan dirham', 'Ø¯.Ù….', 'MAD'),
(149, 'MZ', 'Mozambique', 258, 'Mozambican metical', 'MT', 'MZN'),
(150, 'MM', 'Myanmar', 95, 'Burmese kyat', 'Ks', 'MMK'),
(151, 'NA', 'Namibia', 264, 'Namibian dollar', '$', 'NAD'),
(152, 'NR', 'Nauru', 674, 'Australian dollar', '$', 'AUD'),
(153, 'NP', 'Nepal', 977, 'Nepalese rupee', 'â‚¨', 'NPR'),
(154, 'AN', 'Netherlands Antilles', 599, '', '', ''),
(155, 'NL', 'Netherlands The', 31, '', '', ''),
(156, 'NC', 'New Caledonia', 687, 'CFP franc', 'Fr', 'XPF'),
(157, 'NZ', 'New Zealand', 64, 'New Zealand dollar', '$', 'NZD'),
(158, 'NI', 'Nicaragua', 505, 'Nicaraguan cÃ³rdoba', 'C$', 'NIO'),
(159, 'NE', 'Niger', 227, 'West African CFA fra', 'Fr', 'XOF'),
(160, 'NG', 'Nigeria', 234, 'Nigerian naira', 'â‚¦', 'NGN'),
(161, 'NU', 'Niue', 683, 'New Zealand dollar', '$', 'NZD'),
(162, 'NF', 'Norfolk Island', 672, '', '', ''),
(163, 'MP', 'Northern Mariana Islands', 1670, '', '', ''),
(164, 'NO', 'Norway', 47, 'Norwegian krone', 'kr', 'NOK'),
(165, 'OM', 'Oman', 968, 'Omani rial', 'Ø±.Ø¹.', 'OMR'),
(166, 'PK', 'Pakistan', 92, 'Pakistani rupee', 'â‚¨', 'PKR'),
(167, 'PW', 'Palau', 680, 'Palauan dollar', '$', ''),
(168, 'PS', 'Palestinian Territory Occupied', 970, '', '', ''),
(169, 'PA', 'Panama', 507, 'Panamanian balboa', 'B/.', 'PAB'),
(170, 'PG', 'Papua new Guinea', 675, 'Papua New Guinean ki', 'K', 'PGK'),
(171, 'PY', 'Paraguay', 595, 'Paraguayan guaranÃ­', 'â‚²', 'PYG'),
(172, 'PE', 'Peru', 51, 'Peruvian nuevo sol', 'S/.', 'PEN'),
(173, 'PH', 'Philippines', 63, 'Philippine peso', 'â‚±', 'PHP'),
(174, 'PN', 'Pitcairn Island', 0, '', '', ''),
(175, 'PL', 'Poland', 48, 'Polish zÅ‚oty', 'zÅ‚', 'PLN'),
(176, 'PT', 'Portugal', 351, 'Euro', 'â‚¬', 'EUR'),
(177, 'PR', 'Puerto Rico', 1787, '', '', ''),
(178, 'QA', 'Qatar', 974, 'Qatari riyal', 'Ø±.Ù‚', 'QAR'),
(179, 'RE', 'Reunion', 262, '', '', ''),
(180, 'RO', 'Romania', 40, 'Romanian leu', 'lei', 'RON'),
(181, 'RU', 'Russia', 70, 'Russian ruble', '', 'RUB'),
(182, 'RW', 'Rwanda', 250, 'Rwandan franc', 'Fr', 'RWF'),
(183, 'SH', 'Saint Helena', 290, 'Saint Helena pound', 'Â£', 'SHP'),
(184, 'KN', 'Saint Kitts And Nevis', 1869, 'East Caribbean dolla', '$', 'XCD'),
(185, 'LC', 'Saint Lucia', 1758, 'East Caribbean dolla', '$', 'XCD'),
(186, 'PM', 'Saint Pierre and Miquelon', 508, '', '', ''),
(187, 'VC', 'Saint Vincent And The Grenadines', 1784, 'East Caribbean dolla', '$', 'XCD'),
(188, 'WS', 'Samoa', 684, 'Samoan tÄlÄ', 'T', 'WST'),
(189, 'SM', 'San Marino', 378, 'Euro', 'â‚¬', 'EUR'),
(190, 'ST', 'Sao Tome and Principe', 239, 'SÃ£o TomÃ© and PrÃ­n', 'Db', 'STD'),
(191, 'SA', 'Saudi Arabia', 966, 'Saudi riyal', 'Ø±.Ø³', 'SAR'),
(192, 'SN', 'Senegal', 221, 'West African CFA fra', 'Fr', 'XOF'),
(193, 'RS', 'Serbia', 381, 'Serbian dinar', 'Ð´Ð¸Ð½. or din.', 'RSD'),
(194, 'SC', 'Seychelles', 248, 'Seychellois rupee', 'â‚¨', 'SCR'),
(195, 'SL', 'Sierra Leone', 232, 'Sierra Leonean leone', 'Le', 'SLL'),
(196, 'SG', 'Singapore', 65, 'Brunei dollar', '$', 'BND'),
(197, 'SK', 'Slovakia', 421, 'Euro', 'â‚¬', 'EUR'),
(198, 'SI', 'Slovenia', 386, 'Euro', 'â‚¬', 'EUR'),
(199, 'XG', 'Smaller Territories of the UK', 44, '', '', ''),
(200, 'SB', 'Solomon Islands', 677, 'Solomon Islands doll', '$', 'SBD'),
(201, 'SO', 'Somalia', 252, 'Somali shilling', 'Sh', 'SOS'),
(202, 'ZA', 'South Africa', 27, 'South African rand', 'R', 'ZAR'),
(203, 'GS', 'South Georgia', 0, '', '', ''),
(204, 'SS', 'South Sudan', 211, 'South Sudanese pound', 'Â£', 'SSP'),
(205, 'ES', 'Spain', 34, 'Euro', 'â‚¬', 'EUR'),
(206, 'LK', 'Sri Lanka', 94, 'Sri Lankan rupee', 'Rs or à¶»à·”', 'LKR'),
(207, 'SD', 'Sudan', 249, 'Sudanese pound', 'Ø¬.Ø³.', 'SDG'),
(208, 'SR', 'Suriname', 597, 'Surinamese dollar', '$', 'SRD'),
(209, 'SJ', 'Svalbard And Jan Mayen Islands', 47, '', '', ''),
(210, 'SZ', 'Swaziland', 268, 'Swazi lilangeni', 'L', 'SZL'),
(211, 'SE', 'Sweden', 46, 'Swedish krona', 'kr', 'SEK'),
(212, 'CH', 'Switzerland', 41, 'Swiss franc', 'Fr', 'CHF'),
(213, 'SY', 'Syria', 963, 'Syrian pound', 'Â£ or Ù„.Ø³', 'SYP'),
(214, 'TW', 'Taiwan', 886, 'New Taiwan dollar', '$', 'TWD'),
(215, 'TJ', 'Tajikistan', 992, 'Tajikistani somoni', 'Ð…Ðœ', 'TJS'),
(216, 'TZ', 'Tanzania', 255, 'Tanzanian shilling', 'Sh', 'TZS'),
(217, 'TH', 'Thailand', 66, 'Thai baht', 'à¸¿', 'THB'),
(218, 'TG', 'Togo', 228, 'West African CFA fra', 'Fr', 'XOF'),
(219, 'TK', 'Tokelau', 690, '', '', ''),
(220, 'TO', 'Tonga', 676, 'Tongan paÊ»anga', 'T$', 'TOP'),
(221, 'TT', 'Trinidad And Tobago', 1868, 'Trinidad and Tobago ', '$', 'TTD'),
(222, 'TN', 'Tunisia', 216, 'Tunisian dinar', 'Ø¯.Øª', 'TND'),
(223, 'TR', 'Turkey', 90, 'Turkish lira', '', 'TRY'),
(224, 'TM', 'Turkmenistan', 7370, 'Turkmenistan manat', 'm', 'TMT'),
(225, 'TC', 'Turks And Caicos Islands', 1649, 'United States dollar', '$', 'USD'),
(226, 'TV', 'Tuvalu', 688, 'Australian dollar', '$', 'AUD'),
(227, 'UG', 'Uganda', 256, 'Ugandan shilling', 'Sh', 'UGX'),
(228, 'UA', 'Ukraine', 380, 'Ukrainian hryvnia', 'â‚´', 'UAH'),
(229, 'AE', 'United Arab Emirates', 971, 'United Arab Emirates', 'Ø¯.Ø¥', 'AED'),
(230, 'GB', 'United Kingdom', 44, 'British pound', 'Â£', 'GBP'),
(231, 'US', 'United States', 1, 'United States dollar', '$', 'USD'),
(232, 'UM', 'United States Minor Outlying Islands', 1, '', '', ''),
(233, 'UY', 'Uruguay', 598, 'Uruguayan peso', '$', 'UYU'),
(234, 'UZ', 'Uzbekistan', 998, 'Uzbekistani som', '', 'UZS'),
(235, 'VU', 'Vanuatu', 678, 'Vanuatu vatu', 'Vt', 'VUV'),
(236, 'VA', 'Vatican City State (Holy See)', 39, '', '', ''),
(237, 'VE', 'Venezuela', 58, 'Venezuelan bolÃ­var', 'Bs F', 'VEF'),
(238, 'VN', 'Vietnam', 84, 'Vietnamese Ä‘á»“ng', 'â‚«', 'VND'),
(239, 'VG', 'Virgin Islands (British)', 1284, '', '', ''),
(240, 'VI', 'Virgin Islands (US)', 1340, '', '', ''),
(241, 'WF', 'Wallis And Futuna Islands', 681, '', '', ''),
(242, 'EH', 'Western Sahara', 212, '', '', ''),
(243, 'YE', 'Yemen', 967, 'Yemeni rial', 'ï·¼', 'YER'),
(244, 'YU', 'Yugoslavia', 38, '', '', ''),
(245, 'ZM', 'Zambia', 260, 'Zambian kwacha', 'ZK', 'ZMW'),
(246, 'ZW', 'Zimbabwe', 263, 'Botswana pula', 'P', 'BWP');

-- --------------------------------------------------------

--
-- Table structure for table `email_settings`
--

CREATE TABLE `email_settings` (
  `id` int(11) NOT NULL,
  `protocol` varchar(255) DEFAULT NULL,
  `host` varchar(255) DEFAULT NULL,
  `port` int(11) DEFAULT NULL,
  `user` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `from` varchar(255) DEFAULT NULL,
  `to` varchar(255) DEFAULT NULL,
  `user_name` varchar(255) DEFAULT NULL,
  `lang` char(2) DEFAULT 'tr',
  `isActive` tinyint(1) DEFAULT 1,
  `rank` bigint(20) DEFAULT 1,
  `createdAt` timestamp NULL DEFAULT current_timestamp(),
  `updatedAt` timestamp NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `email_settings`
--

INSERT INTO `email_settings` (`id`, `protocol`, `host`, `port`, `user`, `password`, `from`, `to`, `user_name`, `lang`, `isActive`, `rank`, `createdAt`, `updatedAt`) VALUES
(1, 'ssl', 'smtp.yandex.com.tr', 465, 'site@mutfakyapim.com', 'My124578', 'site@mutfakyapim.com', 'iletisim@mutfakyapim.com', 'Site İletişim Formu Mesajı | Mutfak Yapım', 'tr', 1, 1, '2021-01-08 00:08:59', '2023-03-20 10:55:05');

-- --------------------------------------------------------

--
-- Table structure for table `files`
--

CREATE TABLE `files` (
  `id` int(11) NOT NULL,
  `gallery_id` int(11) DEFAULT NULL,
  `title` longtext DEFAULT NULL,
  `description` longtext DEFAULT NULL,
  `url` longtext DEFAULT NULL,
  `img_url` longtext DEFAULT NULL,
  `lang` char(2) DEFAULT 'tr',
  `rank` bigint(20) DEFAULT 1,
  `isActive` tinyint(1) DEFAULT 1,
  `createdAt` timestamp NULL DEFAULT current_timestamp(),
  `updatedAt` timestamp NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `sharedAt` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `galleries`
--

CREATE TABLE `galleries` (
  `id` int(11) NOT NULL,
  `url` longtext DEFAULT NULL,
  `img_url` longtext DEFAULT NULL,
  `title` longtext DEFAULT NULL,
  `gallery_type` varchar(50) DEFAULT NULL,
  `folder_name` longtext DEFAULT NULL,
  `content` longtext DEFAULT NULL,
  `lang` char(2) DEFAULT 'tr',
  `isActive` tinyint(1) DEFAULT 1,
  `isCover` tinyint(1) DEFAULT 0,
  `rank` bigint(20) DEFAULT 1,
  `createdAt` timestamp NULL DEFAULT current_timestamp(),
  `updatedAt` timestamp NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `sharedAt` timestamp NULL DEFAULT NULL,
  `width` int(11) DEFAULT 1000,
  `height` int(11) DEFAULT 1000
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `galleries`
--

INSERT INTO `galleries` (`id`, `url`, `img_url`, `title`, `gallery_type`, `folder_name`, `content`, `lang`, `isActive`, `isCover`, `rank`, `createdAt`, `updatedAt`, `sharedAt`, `width`, `height`) VALUES
(1, 'fotograflar', 'b66dc121aa2556cdd395776315ed98d4.webp', 'Fotoğraflar', 'images', 'fotograflar', NULL, 'tr', 1, 0, 1, '2022-11-23 08:57:12', '2023-04-10 11:49:50', '2022-11-23 08:57:01', 1920, 1280),
(2, 'videolar', 'c8bc50294405da6a3760d657bea1138f.webp', 'Videolar', 'video_urls', 'videolar', NULL, 'tr', 1, 0, 2, '2022-11-23 09:14:36', '2023-04-10 11:22:10', '2022-11-23 09:14:23', 1000, 1000);

-- --------------------------------------------------------

--
-- Table structure for table `home_items`
--

CREATE TABLE `home_items` (
  `id` int(11) NOT NULL,
  `title` longtext DEFAULT NULL,
  `content` longtext DEFAULT NULL,
  `img_url` longtext DEFAULT NULL,
  `lang` char(2) DEFAULT 'tr',
  `rank` bigint(1) DEFAULT 1,
  `isActive` tinyint(1) DEFAULT NULL,
  `createdAt` timestamp NULL DEFAULT current_timestamp(),
  `updatedAt` timestamp NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `sharedAt` timestamp NULL DEFAULT NULL,
  `type` int(11) DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `images`
--

CREATE TABLE `images` (
  `id` int(11) NOT NULL,
  `gallery_id` int(11) DEFAULT NULL,
  `url` longtext DEFAULT NULL,
  `img_url` longtext DEFAULT NULL,
  `title` longtext DEFAULT NULL,
  `description` longtext DEFAULT NULL,
  `lang` char(2) DEFAULT 'tr',
  `rank` bigint(20) DEFAULT 1,
  `isActive` tinyint(1) DEFAULT 1,
  `createdAt` timestamp NULL DEFAULT current_timestamp(),
  `updatedAt` timestamp NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `sharedAt` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `instagram_posts`
--

CREATE TABLE `instagram_posts` (
  `id` int(11) NOT NULL,
  `img_url` varchar(255) DEFAULT NULL,
  `link` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `languages`
--

CREATE TABLE `languages` (
  `id` int(10) NOT NULL,
  `name` char(49) DEFAULT NULL,
  `code` char(2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `languages`
--

INSERT INTO `languages` (`id`, `name`, `code`) VALUES
(1, 'English', 'en'),
(2, 'Afar', 'aa'),
(3, 'Abkhazian', 'ab'),
(4, 'Afrikaans', 'af'),
(5, 'Amharic', 'am'),
(6, 'Arabic', 'ar'),
(7, 'Assamese', 'as'),
(8, 'Aymara', 'ay'),
(9, 'Azerbaijani', 'az'),
(10, 'Bashkir', 'ba'),
(11, 'Belarusian', 'be'),
(12, 'Bulgarian', 'bg'),
(13, 'Bihari', 'bh'),
(14, 'Bislama', 'bi'),
(15, 'Bengali/Bangla', 'bn'),
(16, 'Tibetan', 'bo'),
(17, 'Breton', 'br'),
(18, 'Catalan', 'ca'),
(19, 'Corsican', 'co'),
(20, 'Czech', 'cs'),
(21, 'Welsh', 'cy'),
(22, 'Danish', 'da'),
(23, 'German', 'de'),
(24, 'Bhutani', 'dz'),
(25, 'Greek', 'el'),
(26, 'Esperanto', 'eo'),
(27, 'Spanish', 'es'),
(28, 'Estonian', 'et'),
(29, 'Basque', 'eu'),
(30, 'Persian', 'fa'),
(31, 'Finnish', 'fi'),
(32, 'Fiji', 'fj'),
(33, 'Faeroese', 'fo'),
(34, 'French', 'fr'),
(35, 'Frisian', 'fy'),
(36, 'Irish', 'ga'),
(37, 'Scots/Gaelic', 'gd'),
(38, 'Galician', 'gl'),
(39, 'Guarani', 'gn'),
(40, 'Gujarati', 'gu'),
(41, 'Hausa', 'ha'),
(42, 'Hindi', 'hi'),
(43, 'Croatian', 'hr'),
(44, 'Hungarian', 'hu'),
(45, 'Armenian', 'hy'),
(46, 'Interlingua', 'ia'),
(47, 'Interlingue', 'ie'),
(48, 'Inupiak', 'ik'),
(49, 'Indonesian', 'in'),
(50, 'Icelandic', 'is'),
(51, 'Italian', 'it'),
(52, 'Hebrew', 'iw'),
(53, 'Japanese', 'ja'),
(54, 'Yiddish', 'ji'),
(55, 'Javanese', 'jw'),
(56, 'Georgian', 'ka'),
(57, 'Kazakh', 'kk'),
(58, 'Greenlandic', 'kl'),
(59, 'Cambodian', 'km'),
(60, 'Kannada', 'kn'),
(61, 'Korean', 'ko'),
(62, 'Kashmiri', 'ks'),
(63, 'Kurdish', 'ku'),
(64, 'Kirghiz', 'ky'),
(65, 'Latin', 'la'),
(66, 'Lingala', 'ln'),
(67, 'Laothian', 'lo'),
(68, 'Lithuanian', 'lt'),
(69, 'Latvian/Lettish', 'lv'),
(70, 'Malagasy', 'mg'),
(71, 'Maori', 'mi'),
(72, 'Macedonian', 'mk'),
(73, 'Malayalam', 'ml'),
(74, 'Mongolian', 'mn'),
(75, 'Moldavian', 'mo'),
(76, 'Marathi', 'mr'),
(77, 'Malay', 'ms'),
(78, 'Maltese', 'mt'),
(79, 'Burmese', 'my'),
(80, 'Nauru', 'na'),
(81, 'Nepali', 'ne'),
(82, 'Dutch', 'nl'),
(83, 'Norwegian', 'no'),
(84, 'Occitan', 'oc'),
(85, '(Afan)/Oromoor/Oriya', 'om'),
(86, 'Punjabi', 'pa'),
(87, 'Polish', 'pl'),
(88, 'Pashto/Pushto', 'ps'),
(89, 'Portuguese', 'pt'),
(90, 'Quechua', 'qu'),
(91, 'Rhaeto-Romance', 'rm'),
(92, 'Kirundi', 'rn'),
(93, 'Romanian', 'ro'),
(94, 'Russian', 'ru'),
(95, 'Kinyarwanda', 'rw'),
(96, 'Sanskrit', 'sa'),
(97, 'Sindhi', 'sd'),
(98, 'Sangro', 'sg'),
(99, 'Serbo-Croatian', 'sh'),
(100, 'Singhalese', 'si'),
(101, 'Slovak', 'sk'),
(102, 'Slovenian', 'sl'),
(103, 'Samoan', 'sm'),
(104, 'Shona', 'sn'),
(105, 'Somali', 'so'),
(106, 'Albanian', 'sq'),
(107, 'Serbian', 'sr'),
(108, 'Siswati', 'ss'),
(109, 'Sesotho', 'st'),
(110, 'Sundanese', 'su'),
(111, 'Swedish', 'sv'),
(112, 'Swahili', 'sw'),
(113, 'Tamil', 'ta'),
(114, 'Telugu', 'te'),
(115, 'Tajik', 'tg'),
(116, 'Thai', 'th'),
(117, 'Tigrinya', 'ti'),
(118, 'Turkmen', 'tk'),
(119, 'Tagalog', 'tl'),
(120, 'Setswana', 'tn'),
(121, 'Tonga', 'to'),
(122, 'Turkish', 'tr'),
(123, 'Tsonga', 'ts'),
(124, 'Tatar', 'tt'),
(125, 'Twi', 'tw'),
(126, 'Ukrainian', 'uk'),
(127, 'Urdu', 'ur'),
(128, 'Uzbek', 'uz'),
(129, 'Vietnamese', 'vi'),
(130, 'Volapuk', 'vo'),
(131, 'Wolof', 'wo'),
(132, 'Xhosa', 'xh'),
(133, 'Yoruba', 'yo'),
(134, 'Chinese', 'zh'),
(135, 'Zulu', 'zu');

-- --------------------------------------------------------

--
-- Table structure for table `linguo_languages`
--

CREATE TABLE `linguo_languages` (
  `language_id` int(11) UNSIGNED NOT NULL,
  `name` varchar(125) NOT NULL,
  `description` varchar(255) NOT NULL,
  `folder` varchar(255) NOT NULL,
  `is_master` tinyint(1) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `linguo_language_files`
--

CREATE TABLE `linguo_language_files` (
  `file_id` int(11) UNSIGNED NOT NULL,
  `language_id` int(11) NOT NULL,
  `name` varchar(125) NOT NULL,
  `description` varchar(255) NOT NULL,
  `folder` varchar(255) NOT NULL,
  `path` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `linguo_language_strings`
--

CREATE TABLE `linguo_language_strings` (
  `string_id` int(11) UNSIGNED NOT NULL,
  `file_id` int(11) NOT NULL,
  `key` varchar(255) NOT NULL,
  `value` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `menus`
--

CREATE TABLE `menus` (
  `id` int(11) NOT NULL,
  `page_id` int(11) NOT NULL DEFAULT 0,
  `blog_category_id` int(11) NOT NULL DEFAULT 0,
  `blog_id` int(11) NOT NULL DEFAULT 0,
  `top_id` int(11) NOT NULL DEFAULT 0,
  `position` enum('HEADER','HEADER_RIGHT','MOBILE','FOOTER','FOOTER2','FOOTER3') DEFAULT 'HEADER',
  `target` enum('_blank','_self','_parent','_top') DEFAULT '_self',
  `title` longtext DEFAULT NULL,
  `url` longtext DEFAULT NULL,
  `lang` char(2) DEFAULT 'tr',
  `rank` bigint(20) DEFAULT 1,
  `isActive` tinyint(1) DEFAULT 1,
  `createdAt` timestamp NULL DEFAULT current_timestamp(),
  `updatedAt` timestamp NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `showCategories` tinyint(4) DEFAULT 0,
  `showSectors` tinyint(4) DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `menus`
--

INSERT INTO `menus` (`id`, `page_id`, `blog_category_id`, `blog_id`, `top_id`, `position`, `target`, `title`, `url`, `lang`, `rank`, `isActive`, `createdAt`, `updatedAt`, `showCategories`, `showSectors`) VALUES
(1, 0, 0, 0, 0, 'HEADER', '_self', 'Anasayfa', '/', 'tr', 1, 1, '2021-12-28 14:17:07', '2021-12-28 14:51:47', 0, 0),
(2, 1, 0, 0, 0, 'HEADER', '_self', 'Kurumsal', NULL, 'tr', 2, 1, '2022-01-14 12:40:58', '2023-04-03 08:17:56', 0, 0),
(3, 1, 0, 0, 2, 'HEADER', '_self', 'Hakkımızda', NULL, 'tr', 3, 1, '2023-04-03 08:18:20', '2023-04-26 09:21:22', 0, 0),
(4, 0, 0, 0, 0, 'HEADER', '_self', 'Hizmetlerimiz', '/hizmetlerimiz', 'tr', 4, 1, '2023-04-03 09:42:51', '2023-04-26 10:46:02', 1, 0),
(5, 0, 0, 0, 0, 'HEADER', '_self', 'İletişim', '/iletisim', 'tr', 5, 1, '2022-01-03 07:52:56', '2023-04-26 10:46:03', 0, 0),
(6, 1, 0, 0, 0, 'FOOTER', '_self', 'Hakkımızda', NULL, 'tr', 6, 1, '2023-04-03 08:18:20', '2023-04-26 10:46:06', 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `pages`
--

CREATE TABLE `pages` (
  `id` int(11) NOT NULL,
  `url` longtext DEFAULT NULL,
  `title` longtext DEFAULT NULL,
  `content` longtext DEFAULT NULL,
  `img_url` longtext DEFAULT NULL,
  `banner_url` longtext DEFAULT NULL,
  `pdf_url` varchar(255) DEFAULT NULL,
  `lang` char(2) DEFAULT 'tr',
  `rank` bigint(20) DEFAULT 1,
  `isActive` tinyint(1) DEFAULT 1,
  `createdAt` timestamp NULL DEFAULT current_timestamp(),
  `updatedAt` timestamp NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `sharedAt` timestamp NULL DEFAULT NULL,
  `type` enum('SIMPLE','CAREER','ABOUT','KVKK','CONTENT') DEFAULT 'SIMPLE',
  `gallery_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `pages`
--

INSERT INTO `pages` (`id`, `url`, `title`, `content`, `img_url`, `banner_url`, `pdf_url`, `lang`, `rank`, `isActive`, `createdAt`, `updatedAt`, `sharedAt`, `type`, `gallery_id`) VALUES
(1, 'hakkimizda', 'Hakkımızda', '<p class=\"MsoNormal\">İstek Akademi bünyesinde yer alan Ustalık Telafi Programı, çalışanların mesleki tecrübesini artıran ve program sonucunda ustalık belgesini almasını sağlayan süreli bir programdır.</p>\r\n<p class=\"MsoNormal\">Bu program ülkemizdeki ara eleman açığını kapatmak ve nitelikli işgücüne katkı sağlamak için işletmelerdeki çalışanların yaptıkları iş konusunda belge sahibi olması ve Avrupa normlarına uyum sağlamalarını destekler.</p>\r\n<p class=\"MsoNormal\">Yürütücü ve sorumlu kurum Millî Eğitim Bakanlığı’dır ve amacı, iş yerindeki pratik öğrenmenin pekiştirilmesi ve akabinde yapılacak sınavda başarılı olanlara ustalık belgesi verilmesidir.</p>\r\n<p class=\"MsoNormal\">Siz de Ustalık Telafi Programından faydalanarak üretim kalitenizi artırabilir; nitelikli personel istihdamı sağlayabilirsiniz.</p>', 'f23a1b637c3207c421c04e63a33478bb.webp', '6a83a8092d57ba0be3069538d891e8ae.webp', NULL, 'tr', 1, 1, '2022-02-23 06:24:54', '2023-04-26 11:30:31', '2022-02-23 06:24:26', 'SIMPLE', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `services`
--

CREATE TABLE `services` (
  `id` int(11) NOT NULL,
  `title` varchar(255) DEFAULT NULL,
  `description` longtext DEFAULT NULL,
  `seo_url` varchar(255) DEFAULT NULL,
  `category_id` int(11) DEFAULT NULL,
  `lang` char(2) NOT NULL DEFAULT 'tr',
  `rank` bigint(20) NOT NULL DEFAULT 1,
  `isActive` tinyint(1) NOT NULL DEFAULT 1,
  `createdAt` timestamp NULL DEFAULT current_timestamp(),
  `updatedAt` timestamp NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `services`
--

INSERT INTO `services` (`id`, `title`, `description`, `seo_url`, `category_id`, `lang`, `rank`, `isActive`, `createdAt`, `updatedAt`) VALUES
(1, 'Ustalık Telafi Programı', NULL, 'ustalik-telafi-programi', 1, 'tr', 1, 1, '2023-03-19 21:47:07', '2023-04-26 10:29:25');

-- --------------------------------------------------------

--
-- Table structure for table `service_categories`
--

CREATE TABLE `service_categories` (
  `id` int(11) NOT NULL,
  `title` longtext DEFAULT NULL,
  `seo_url` longtext DEFAULT NULL,
  `img_url` longtext DEFAULT NULL,
  `home_url` longtext DEFAULT NULL,
  `banner_url` longtext DEFAULT NULL,
  `lang` char(2) DEFAULT 'tr',
  `rank` bigint(20) DEFAULT 1,
  `isActive` tinyint(1) DEFAULT 1,
  `createdAt` timestamp NULL DEFAULT current_timestamp(),
  `updatedAt` timestamp NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `service_categories`
--

INSERT INTO `service_categories` (`id`, `title`, `seo_url`, `img_url`, `home_url`, `banner_url`, `lang`, `rank`, `isActive`, `createdAt`, `updatedAt`) VALUES
(1, 'Hizmetlerimiz', 'hizmetlerimiz', 'f1108fef6f968075664f717c0dd29c67.webp', NULL, 'ef40a9cc6a3cf01472aab27640f8c9d9.webp', 'tr', 1, 1, '2023-02-23 14:46:08', '2023-04-26 11:31:02');

-- --------------------------------------------------------

--
-- Table structure for table `service_images`
--

CREATE TABLE `service_images` (
  `id` int(11) NOT NULL,
  `service_id` int(11) DEFAULT NULL,
  `url` longtext DEFAULT NULL,
  `img_url` longtext DEFAULT NULL,
  `title` longtext DEFAULT NULL,
  `description` longtext DEFAULT NULL,
  `lang` char(2) DEFAULT 'tr',
  `rank` bigint(20) DEFAULT 1,
  `isActive` tinyint(1) DEFAULT 1,
  `isCover` tinyint(4) DEFAULT 0,
  `createdAt` timestamp NULL DEFAULT current_timestamp(),
  `updatedAt` timestamp NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `service_images`
--

INSERT INTO `service_images` (`id`, `service_id`, `url`, `img_url`, `title`, `description`, `lang`, `rank`, `isActive`, `isCover`, `createdAt`, `updatedAt`) VALUES
(1, 1, '948d1adbf539f5bf75406a89b0b9e233.webp', NULL, NULL, NULL, 'tr', 1, 1, 1, '2023-04-26 11:12:58', '2023-04-26 11:13:02'),
(2, 1, '624331bb059100e252600abd68a735dc.webp', NULL, NULL, NULL, 'tr', 2, 1, 0, '2023-04-26 11:13:00', '2023-04-26 11:13:00'),
(3, 1, '5a3460aaefec080ae510f35243a16617.webp', NULL, NULL, NULL, 'tr', 3, 1, 0, '2023-04-26 11:13:04', '2023-04-26 11:13:04'),
(4, 1, '247442258b32a25ba4432b13742971d0.webp', NULL, NULL, NULL, 'tr', 4, 1, 0, '2023-04-26 11:13:07', '2023-04-26 11:13:07'),
(5, 1, '4549de613a16a06dda8d210b2c306bc1.webp', NULL, NULL, NULL, 'tr', 5, 1, 0, '2023-04-26 11:13:09', '2023-04-26 11:13:09'),
(6, 1, 'd0973f12468d1bf9216d6303ca5afe6d.webp', NULL, NULL, NULL, 'tr', 6, 1, 0, '2023-04-26 11:13:11', '2023-04-26 11:13:11'),
(7, 1, '5bfd37a441285523bd7cb619719d4d36.webp', NULL, NULL, NULL, 'tr', 7, 1, 0, '2023-04-26 11:13:13', '2023-04-26 11:13:13'),
(8, 1, '130e043c8dedcee805e20fd1a612be80.webp', NULL, NULL, NULL, 'tr', 8, 1, 0, '2023-04-26 11:13:17', '2023-04-26 11:13:17'),
(9, 1, '263337cb91003083df8a4caba1b36251.webp', NULL, NULL, NULL, 'tr', 9, 1, 0, '2023-04-26 11:13:22', '2023-04-26 11:13:22'),
(10, 1, '6bc8639a3c719f3a4c72eb2c1a278e0c.webp', NULL, NULL, NULL, 'tr', 10, 1, 0, '2023-04-26 11:13:24', '2023-04-26 11:13:24');

-- --------------------------------------------------------

--
-- Table structure for table `settings`
--

CREATE TABLE `settings` (
  `id` int(11) NOT NULL,
  `company_name` varchar(255) DEFAULT NULL,
  `slogan` varchar(255) DEFAULT NULL,
  `address` longtext DEFAULT NULL,
  `address_title` longtext DEFAULT NULL,
  `map` longtext DEFAULT NULL,
  `logo` varchar(255) DEFAULT NULL,
  `mobile_logo` varchar(255) DEFAULT NULL,
  `favicon` varchar(255) DEFAULT NULL,
  `mobile_logo_2` varchar(255) DEFAULT NULL,
  `blog_logo` varchar(255) DEFAULT NULL,
  `about_logo` varchar(255) DEFAULT NULL,
  `gallery_logo` varchar(255) DEFAULT NULL,
  `contact_logo` varchar(255) DEFAULT NULL,
  `service_logo` varchar(255) DEFAULT NULL,
  `service_detail_logo` varchar(255) DEFAULT NULL,
  `category_logo` varchar(255) DEFAULT NULL,
  `catalog` varchar(255) DEFAULT NULL,
  `sector_logo` varchar(255) DEFAULT NULL,
  `phone` longtext DEFAULT NULL,
  `fax` longtext DEFAULT NULL,
  `whatsapp` longtext DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `facebook` varchar(255) DEFAULT NULL,
  `twitter` varchar(255) DEFAULT NULL,
  `instagram` varchar(255) DEFAULT NULL,
  `linkedin` varchar(255) DEFAULT NULL,
  `youtube` varchar(255) DEFAULT NULL,
  `medium` varchar(255) DEFAULT NULL,
  `pinterest` varchar(255) DEFAULT NULL,
  `meta_description` varchar(1000) DEFAULT NULL,
  `analytics` longtext DEFAULT NULL,
  `metrica` longtext DEFAULT NULL,
  `rank` int(11) DEFAULT 1,
  `createdAt` timestamp NULL DEFAULT current_timestamp(),
  `updatedAt` timestamp NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `isActive` tinyint(1) DEFAULT 1,
  `lang` char(2) DEFAULT 'tr',
  `crawler_email` varchar(255) DEFAULT NULL,
  `crawler_password` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `settings`
--

INSERT INTO `settings` (`id`, `company_name`, `slogan`, `address`, `address_title`, `map`, `logo`, `mobile_logo`, `favicon`, `mobile_logo_2`, `blog_logo`, `about_logo`, `gallery_logo`, `contact_logo`, `service_logo`, `service_detail_logo`, `category_logo`, `catalog`, `sector_logo`, `phone`, `fax`, `whatsapp`, `email`, `facebook`, `twitter`, `instagram`, `linkedin`, `youtube`, `medium`, `pinterest`, `meta_description`, `analytics`, `metrica`, `rank`, `createdAt`, `updatedAt`, `isActive`, `lang`, `crawler_email`, `crawler_password`) VALUES
(1, 'İztek Akademi', 'İztek Akademi', '[\"BEGOS  BUCA OSB MAHALLES\\u0130 2\\/21 SOKAK NO:9 BUCA\\u00a0\\/\\u0130ZM\\u0130R\"]', '[\"Merkez\"]', '[\"&lt;iframe src=&quot;https:\\/\\/www.google.com\\/maps\\/embed?pb=!1m18!1m12!1m3!1d6254.334394392741!2d27.192970247734017!3d38.391383000000005!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x14b9623e7cb92393%3A0x28395b297e67e06!2zQlVDQSBFR0UgT1JHQU7EsFpFIFNBTkFZxLAgQsOWTEdFU8Sw!5e0!3m2!1sen!2str!4v1682508875035!5m2!1sen!2str&quot; width=&quot;100%&quot; height=&quot;450&quot; style=&quot;border:0;&quot; allowfullscreen=&quot;&quot; loading=&quot;lazy&quot; referrerpolicy=&quot;no-referrer-when-downgrade&quot;&gt;&lt;\\/iframe&gt;\"]', 'd030eb695caeea4efc67a41210fb48e1.webp', '0e974073eebe072c3d5becda0ee3a08c.webp', 'b067f8fe47e74e922e9ce1b3c91c07ef.webp', '348b0ac8a13263c08aa4b42b5503e16c.webp', '9f68c3f3f774fc197e822f8690bb2be9.webp', '6aa5b4adb55e9caa9513f7702dcf00da.webp', '55f818d6d0ada47fecc15c2f809d7cd4.webp', '9ac4c99ffa7cbc1c9ca5e715ba76eaee.webp', 'a524950bfa2e380b43332a1904538a41.webp', 'bbf9c312780d78a48e2a746b85a2c18b.webp', '8e8eebab611d5998ddbcd80f4003aa21.webp', '2ba528197b3ca10368b015fcd8e572c2.pdf', 'f37a81c3f57f3d8c339afa51f711627e.webp', '[\"+90 553 026 75 90\"]', '[\"\"]', '[\"+90 553 026 75 90\"]', 'info@iztekakademi.com.tr', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'İstek Akademi bünyesinde yer alan Ustalık Telafi Programı, çalışanların mesleki tecrübesini artıran ve program sonucunda ustalık belgesini almasını sağlayan süreli bir programdır.', '', '', 1, '2020-07-22 20:57:22', '2023-04-26 11:34:52', 1, 'tr', 'emrekilic@mutfakyapim.com', 'MutfakYapim35?');

-- --------------------------------------------------------

--
-- Table structure for table `slides`
--

CREATE TABLE `slides` (
  `id` int(11) NOT NULL,
  `title` longtext DEFAULT NULL,
  `description` longtext DEFAULT NULL,
  `img_url` longtext DEFAULT NULL,
  `mobile_url` varchar(255) DEFAULT NULL,
  `allowButton` tinyint(4) DEFAULT 0,
  `button_url` longtext DEFAULT NULL,
  `target` enum('_self','_blank','_top','_parent') DEFAULT '_self',
  `button_caption` longtext DEFAULT NULL,
  `video_url` longtext DEFAULT NULL,
  `video_caption` longtext DEFAULT NULL,
  `page_id` int(11) DEFAULT NULL,
  `collection_id` int(11) DEFAULT NULL,
  `product_id` int(11) DEFAULT NULL,
  `service_id` int(11) DEFAULT NULL,
  `sector_id` int(11) DEFAULT NULL,
  `lang` char(2) DEFAULT 'tr',
  `rank` bigint(20) DEFAULT 1,
  `isActive` tinyint(1) DEFAULT 1,
  `createdAt` timestamp NULL DEFAULT current_timestamp(),
  `updatedAt` timestamp NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `sharedAt` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `slides`
--

INSERT INTO `slides` (`id`, `title`, `description`, `img_url`, `mobile_url`, `allowButton`, `button_url`, `target`, `button_caption`, `video_url`, `video_caption`, `page_id`, `collection_id`, `product_id`, `service_id`, `sector_id`, `lang`, `rank`, `isActive`, `createdAt`, `updatedAt`, `sharedAt`) VALUES
(1, 'İztek Akademi', '<p>İztek Akademi</p>', '926c6258d84b93daeb1f03a41d5592a7.webp', '37abadd3a90a933277020c96d3df96de.webp', 0, '#', '_self', '#', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'tr', 2, 1, '2023-04-13 10:40:04', '2023-04-26 11:16:32', '2023-04-13 10:39:17'),
(2, 'İztek Akademi', '<p>İztek Akademi</p>', '0d348e7b282f17bdef4b6e54f5d5dc64.webp', '1ea298b1b4039ebed5ba87c3de8f5226.webp', 0, '#', '_self', '#', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'tr', 1, 1, '2023-04-13 10:41:00', '2023-04-26 11:16:22', '2023-04-13 10:40:46');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `first_name` varchar(50) DEFAULT NULL,
  `last_name` varchar(50) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `phone` varchar(20) DEFAULT NULL,
  `company_name` varchar(255) DEFAULT NULL,
  `tax_number` varchar(11) DEFAULT NULL,
  `tax_administration` varchar(255) DEFAULT NULL,
  `address` longtext DEFAULT NULL,
  `codes` longtext DEFAULT NULL,
  `password` varchar(32) DEFAULT NULL,
  `role_id` int(11) NOT NULL DEFAULT 2,
  `isActive` tinyint(4) DEFAULT 0,
  `createdAt` timestamp NULL DEFAULT current_timestamp(),
  `updatedAt` timestamp NULL DEFAULT NULL ON UPDATE current_timestamp(),
  `token` varchar(255) DEFAULT NULL,
  `lang` char(2) DEFAULT 'tr'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `first_name`, `last_name`, `email`, `phone`, `company_name`, `tax_number`, `tax_administration`, `address`, `codes`, `password`, `role_id`, `isActive`, `createdAt`, `updatedAt`, `token`, `lang`) VALUES
(1, 'Mutfak', 'Yapım', 'info@mutfakyapim.com', '05494410121', NULL, NULL, NULL, NULL, NULL, '0a7483867a2442352e2b86d4b4910826', 1, 1, '2021-01-13 05:30:08', '2023-02-22 08:02:07', 'jxFRs9CRUfkyFgqZcegvAH1iyNOEBEU2BqFVJCvQmK04EuPmocO8wo3xFtvs67kZlP8A7RbUYlZqY2GS4jPLbppdH8zloYlmCEuDf5N234KacVkMtJq8PThypV5O6m2Ht0kXJGTsS578WwCDc1zApKbaQxI4Cpu9wyOlN0tV53SzdBGw5qWMGU1GxLW7VTn1eLdaEXXMwHofDesIW6fLainDjRiQIvLKhBYoex79eiIjgQdg1ghtN3IAnzYDrz9', 'tr'),
(2, 'Emre', 'KILIÇ', 'emrekilic@mutfakyapim.com', '05494410120', NULL, NULL, NULL, NULL, NULL, '0a7483867a2442352e2b86d4b4910826', 1, 1, '2021-01-13 05:30:08', '2023-02-23 06:36:59', 'VVro3leUNW68oNqcubiS3K1GWPQDt50HyGaFEWq4OiUJwZzzJsKqHrZHvRM9gkj6gHElstOpc2ym0Akwems8Ac8Rz7BpdR62nI4WXMkQXgyx8CIlLerOKY9Un4GLa3dcCj1TfEJELFTiIld2qQiVDix2oP0k9A5vFPdwwXxJuMaR4Z5SBL5YZogNyOB7CGpv96h11JjQKI4aZhYhdefu5n127bU38EoVxTMlxUBwftB6fem3YWqhjvPSTGrFsNt', 'tr');

-- --------------------------------------------------------

--
-- Table structure for table `user_role`
--

CREATE TABLE `user_role` (
  `id` int(11) NOT NULL,
  `title` varchar(50) DEFAULT NULL,
  `permissions` mediumtext DEFAULT NULL,
  `isActive` int(11) DEFAULT 0,
  `isCover` tinyint(4) DEFAULT 0,
  `rank` int(11) DEFAULT 1,
  `createdAt` timestamp NULL DEFAULT current_timestamp(),
  `updatedAt` timestamp NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user_role`
--

INSERT INTO `user_role` (`id`, `title`, `permissions`, `isActive`, `isCover`, `rank`, `createdAt`, `updatedAt`) VALUES
(1, 'Admin', '{\"blogs\":{\"read\":\"on\",\"write\":\"on\",\"update\":\"on\",\"delete\":\"on\"},\"blog_categories\":{\"read\":\"on\",\"write\":\"on\",\"update\":\"on\",\"delete\":\"on\"},\"dashboard\":{\"read\":\"on\",\"write\":\"on\",\"update\":\"on\",\"delete\":\"on\"},\"emailsettings\":{\"read\":\"on\",\"write\":\"on\",\"update\":\"on\",\"delete\":\"on\"},\"galleries\":{\"read\":\"on\",\"write\":\"on\",\"update\":\"on\",\"delete\":\"on\"},\"menus\":{\"read\":\"on\",\"write\":\"on\",\"update\":\"on\",\"delete\":\"on\"},\"pages\":{\"read\":\"on\",\"write\":\"on\",\"update\":\"on\",\"delete\":\"on\"},\"services\":{\"read\":\"on\",\"write\":\"on\",\"update\":\"on\",\"delete\":\"on\"},\"service_categories\":{\"read\":\"on\",\"write\":\"on\",\"update\":\"on\",\"delete\":\"on\"},\"settings\":{\"read\":\"on\",\"write\":\"on\",\"update\":\"on\",\"delete\":\"on\"},\"slides\":{\"read\":\"on\",\"write\":\"on\",\"update\":\"on\",\"delete\":\"on\"},\"userop\":{\"read\":\"on\",\"write\":\"on\",\"update\":\"on\",\"delete\":\"on\"},\"users\":{\"read\":\"on\",\"write\":\"on\",\"update\":\"on\",\"delete\":\"on\"},\"user_role\":{\"read\":\"on\",\"write\":\"on\",\"update\":\"on\",\"delete\":\"on\"}}', 1, 1, 1, '2020-07-22 20:58:34', '2023-04-11 13:16:15');

-- --------------------------------------------------------

--
-- Table structure for table `videos`
--

CREATE TABLE `videos` (
  `id` int(11) NOT NULL,
  `gallery_id` int(11) NOT NULL,
  `title` longtext DEFAULT NULL,
  `description` longtext DEFAULT NULL,
  `url` longtext DEFAULT NULL,
  `img_url` longtext DEFAULT NULL,
  `lang` char(2) DEFAULT 'tr',
  `rank` bigint(20) DEFAULT 1,
  `isActive` tinyint(1) DEFAULT 1,
  `createdAt` timestamp NULL DEFAULT current_timestamp(),
  `updatedAt` timestamp NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `sharedAt` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `video_urls`
--

CREATE TABLE `video_urls` (
  `id` int(11) NOT NULL,
  `gallery_id` int(11) NOT NULL,
  `title` longtext DEFAULT NULL,
  `description` longtext DEFAULT NULL,
  `url` longtext DEFAULT NULL,
  `img_url` longtext DEFAULT NULL,
  `lang` char(2) DEFAULT 'tr',
  `rank` bigint(20) DEFAULT 1,
  `isActive` tinyint(1) DEFAULT 1,
  `createdAt` timestamp NULL DEFAULT current_timestamp(),
  `updatedAt` timestamp NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `sharedAt` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci ROW_FORMAT=DYNAMIC;

--
-- Dumping data for table `video_urls`
--

INSERT INTO `video_urls` (`id`, `gallery_id`, `title`, `description`, `url`, `img_url`, `lang`, `rank`, `isActive`, `createdAt`, `updatedAt`, `sharedAt`) VALUES
(1, 2, NULL, NULL, '&lt;iframe loading=&quot;lazy&quot; class=&quot;lazyload&quot; width=&quot;100%&quot; height=&quot;450&quot; data-src=&quot;https://www.youtube.com/embed/LrUds57j7eM&quot; title=&quot;YouTube video player&quot; frameborder=&quot;0&quot; allow=&quot;accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share&quot; allowfullscreen&gt;&lt;/iframe&gt;', NULL, 'tr', 1, 1, '2023-04-10 13:52:37', '2023-04-10 13:52:46', NULL),
(2, 2, NULL, NULL, '&lt;iframe loading=&quot;lazy&quot; class=&quot;lazyload&quot; width=&quot;100%&quot; height=&quot;450&quot; data-src=&quot;https://www.youtube.com/embed/Z_FQLZbGK4U&quot; title=&quot;YouTube video player&quot; frameborder=&quot;0&quot; allow=&quot;accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share&quot; allowfullscreen&gt;&lt;/iframe&gt;', NULL, 'tr', 2, 1, '2023-04-10 13:53:29', '2023-04-10 13:53:29', NULL),
(3, 2, NULL, NULL, '&lt;iframe loading=&quot;lazy&quot; class=&quot;lazyload&quot; width=&quot;100%&quot; height=&quot;450&quot; data-src=&quot;https://www.youtube.com/embed/3e_FBcY-nrw&quot; title=&quot;YouTube video player&quot; frameborder=&quot;0&quot; allow=&quot;accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share&quot; allowfullscreen&gt;&lt;/iframe&gt;', NULL, 'tr', 3, 1, '2023-04-10 13:54:08', '2023-04-10 13:54:08', NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `blogs`
--
ALTER TABLE `blogs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `blog_categories`
--
ALTER TABLE `blog_categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `countries`
--
ALTER TABLE `countries`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `email_settings`
--
ALTER TABLE `email_settings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `files`
--
ALTER TABLE `files`
  ADD PRIMARY KEY (`id`),
  ADD KEY `FK_FILEGALLERY` (`gallery_id`);

--
-- Indexes for table `galleries`
--
ALTER TABLE `galleries`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `home_items`
--
ALTER TABLE `home_items`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `images`
--
ALTER TABLE `images`
  ADD PRIMARY KEY (`id`),
  ADD KEY `FK_IMAGEGALLERY` (`gallery_id`);

--
-- Indexes for table `instagram_posts`
--
ALTER TABLE `instagram_posts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `languages`
--
ALTER TABLE `languages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `linguo_languages`
--
ALTER TABLE `linguo_languages`
  ADD PRIMARY KEY (`language_id`);

--
-- Indexes for table `linguo_language_files`
--
ALTER TABLE `linguo_language_files`
  ADD PRIMARY KEY (`file_id`);

--
-- Indexes for table `linguo_language_strings`
--
ALTER TABLE `linguo_language_strings`
  ADD PRIMARY KEY (`string_id`);

--
-- Indexes for table `menus`
--
ALTER TABLE `menus`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pages`
--
ALTER TABLE `pages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `services`
--
ALTER TABLE `services`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `service_categories`
--
ALTER TABLE `service_categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `service_images`
--
ALTER TABLE `service_images`
  ADD PRIMARY KEY (`id`),
  ADD KEY `INDEX_SERVICE_ID` (`service_id`) USING BTREE;

--
-- Indexes for table `settings`
--
ALTER TABLE `settings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `slides`
--
ALTER TABLE `slides`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`) USING BTREE,
  ADD KEY `FK_ROLEID` (`role_id`);

--
-- Indexes for table `user_role`
--
ALTER TABLE `user_role`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `videos`
--
ALTER TABLE `videos`
  ADD PRIMARY KEY (`id`),
  ADD KEY `FK_VIDEOGALLERY` (`gallery_id`);

--
-- Indexes for table `video_urls`
--
ALTER TABLE `video_urls`
  ADD PRIMARY KEY (`id`),
  ADD KEY `FK_VIDEOURLGALLERY` (`gallery_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `blogs`
--
ALTER TABLE `blogs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `blog_categories`
--
ALTER TABLE `blog_categories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `countries`
--
ALTER TABLE `countries`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=247;

--
-- AUTO_INCREMENT for table `email_settings`
--
ALTER TABLE `email_settings`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `files`
--
ALTER TABLE `files`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `galleries`
--
ALTER TABLE `galleries`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `home_items`
--
ALTER TABLE `home_items`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `images`
--
ALTER TABLE `images`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `instagram_posts`
--
ALTER TABLE `instagram_posts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `languages`
--
ALTER TABLE `languages`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=136;

--
-- AUTO_INCREMENT for table `linguo_languages`
--
ALTER TABLE `linguo_languages`
  MODIFY `language_id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `linguo_language_files`
--
ALTER TABLE `linguo_language_files`
  MODIFY `file_id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `linguo_language_strings`
--
ALTER TABLE `linguo_language_strings`
  MODIFY `string_id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `menus`
--
ALTER TABLE `menus`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `pages`
--
ALTER TABLE `pages`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `services`
--
ALTER TABLE `services`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `service_categories`
--
ALTER TABLE `service_categories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `service_images`
--
ALTER TABLE `service_images`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `settings`
--
ALTER TABLE `settings`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `slides`
--
ALTER TABLE `slides`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `user_role`
--
ALTER TABLE `user_role`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `videos`
--
ALTER TABLE `videos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `video_urls`
--
ALTER TABLE `video_urls`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `files`
--
ALTER TABLE `files`
  ADD CONSTRAINT `FK_FILEGALLERY` FOREIGN KEY (`gallery_id`) REFERENCES `galleries` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `images`
--
ALTER TABLE `images`
  ADD CONSTRAINT `FK_IMAGEGALLERY` FOREIGN KEY (`gallery_id`) REFERENCES `galleries` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `FK_ROLEID` FOREIGN KEY (`role_id`) REFERENCES `user_role` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `videos`
--
ALTER TABLE `videos`
  ADD CONSTRAINT `FK_VIDEOGALLERY` FOREIGN KEY (`gallery_id`) REFERENCES `galleries` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `video_urls`
--
ALTER TABLE `video_urls`
  ADD CONSTRAINT `FK_VIDEOURLGALLERY` FOREIGN KEY (`gallery_id`) REFERENCES `galleries` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

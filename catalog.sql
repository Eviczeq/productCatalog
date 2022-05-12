-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 28, 2022 at 12:57 AM
-- Server version: 10.4.18-MariaDB
-- PHP Version: 8.0.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `catalog`
--

-- --------------------------------------------------------

--
-- Table structure for table `client`
--

CREATE TABLE `client` (
  `id` int(255) NOT NULL,
  `clientId` int(11) NOT NULL,
  `personName` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `companyName` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `companyAddress` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `companyPhone` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `companyEmail` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `companyBilans` int(255) NOT NULL,
  `margin` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `client`
--

INSERT INTO `client` (`id`, `clientId`, `personName`, `companyName`, `companyAddress`, `companyPhone`, `companyEmail`, `companyBilans`, `margin`) VALUES
(1, 1001, 'Trevor Ferrao', 'Tsukiji food express', '704/804Little Sunflower C.H.S Ltd.,Behind Corporation Bank, Lourdes Colony,Orlem,Malad(West),Mumbai-400 064', '+91 983311-3598', 'trevorferrao@yahoo.co.in', -1305011, 15),
(2, 1002, 'Kunal Singh', 'Taj Hotels', 'MANDLIK HOUSE, MANDLIK ROAD, MUMBAI - 400001 Branch Code:30 THE TAJ MAHAL PALACE AND TOWER, APOLLO BUNDER, MUMBAI, MAHARASHTRA - 400001', '+91 22 6665 3366', 'kunal.singh@tajhotels.com', 10, 10),
(3, 1003, 'Sandeep1', 'TestSandeep1', 'TestSandeep1', '07008801', 'Test@sandeep1', 111, 25),
(4, 1004, 'Satou', 'Sing co lts', 'asttee name', '8888888', 'sato@gmail.com', 0, 35);

-- --------------------------------------------------------

--
-- Table structure for table `placeholder`
--

CREATE TABLE `placeholder` (
  `Number` int(255) NOT NULL,
  `Name` varchar(255) DEFAULT NULL,
  `Brand` varchar(255) DEFAULT NULL,
  `Packing standard` varchar(255) DEFAULT NULL,
  `MOQ` varchar(255) DEFAULT NULL,
  `Price` int(255) DEFAULT NULL,
  `Price per` varchar(255) DEFAULT NULL,
  `Weight` varchar(255) DEFAULT NULL,
  `Shelf life` varchar(255) DEFAULT NULL,
  `Ingredients` varchar(255) DEFAULT NULL,
  `Nutritions` varchar(255) DEFAULT NULL,
  `Manufacturer` varchar(255) DEFAULT NULL,
  `Type` varchar(255) DEFAULT NULL,
  `Supplier` varchar(255) DEFAULT NULL,
  `Category` varchar(255) NOT NULL,
  `Supplier Price` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `placeholder`
--

INSERT INTO `placeholder` (`Number`, `Name`, `Brand`, `Packing standard`, `MOQ`, `Price`, `Price per`, `Weight`, `Shelf life`, `Ingredients`, `Nutritions`, `Manufacturer`, `Type`, `Supplier`, `Category`, `Supplier Price`) VALUES
(1, 'Preserved Miso Saikyo 1kg', 'Ishino', '1kg x 10', '1', 660, 'pkt', '1', '3 months', 'Rice, soybean, salt,', 'Protein8.7g Fat4.1g Carb39.5g Salt 5.3g Sodium 2.08mg', 'ISHINOMISO, 546, Ishiizutsucho that authority of Aburakouji, Shimogyo-ku, Kyoto-shi', 'chilled', '1', 'Miso', 3300),
(2, 'Preserved Miso Saikyo 2kg', 'Ishino', '2kg x 12', '1', 3000, 'pkt', '2', '3 months', 'Rice, soybean, salt,', 'Protein8.7g Fat4.1g Carb39.5g Salt 5.3g Sodium 2.08mg', 'ISHINOMISO, 546, Ishiizutsucho that authority of Aburakouji, Shimogyo-ku, Kyoto-shi', 'chilled', '1', 'Miso', 0),
(3, 'Preserved Miso Saikyo 500g', 'Ishino', '500g x 20', '1', 350, 'pkt', '0.5', '3 months', 'Rice, soybean, salt,', 'Protein8.7g Fat4.1g Carb39.5g Salt 5.3g Sodium 2.08mg', 'ISHINOMISO, 546, Ishiizutsucho that authority of Aburakouji, Shimogyo-ku, Kyoto-shi', 'chilled', '1', 'Miso', 0),
(4, 'Mikochan Miso browm', 'Mikochan', '1kgx10', '1', 250, 'pkt', '1', '6 months', 'Soybean, rice, salt', 'Protein10.9g Fat6.8g Carb19.3g Salt 12.2g', 'MIYASAKAJOZO、2-4-4, Nogata, Nakano-ku, Tokyo', 'ambient', '3', 'Miso', 0),
(5, 'Red miso ', 'Hanamaruki', '1kgx10', '1', 170, 'pkt', '1', '6 months', 'Soybean, rice, salt', 'Protein10.9g Fat6.8g Carb19.3g Salt 12.2g', '2701 Nishiminowa, Ina City, Nagano Prefecture 399-4501', 'ambient', '2', 'Miso', 0),
(6, 'Mikochan Miso white', 'Mikochan', '1kgx10', '1', 250, 'pkt', '1', '6 months', 'Soybean, rice, salt', 'Protein10.7g Fat6.6g Carb20.5g Salt 12.2g', 'MIYASAKAJOZO、2-4-5, Nogata, Nakano-ku, Tokyo', 'ambient', '3', 'Miso', 0),
(7, 'White miso', 'Hanamaruki', '1kgx10', '1', 170, 'pkt', '1', '6 months', 'Soybean, rice, salt', 'Protein10.7g Fat6.6g Carb20.5g Salt 12.2g', '2701 Nishiminowa, Ina City, Nagano Prefecture 399-4501', 'ambient', '2', 'Miso', 0),
(8, 'Mirin', 'manjou kikkoman', 'H ﾎﾟﾄﾙ 1.8L X 6', '1', 635, 'btl', '1.8', '18 moths', 'Glutinous rice , rice, rice koji , brewing alcohol, sugar', 'Protein0g Fat0g Carb9.3g Salt 0g', '250 Noda, Noda City, Chiba Prefecture 278-8601', 'ambient', '2', 'Beverage', 0),
(9, 'Wasabi Powder', 'Kinjirushi', '1KG X 10', '1', 800, 'pkt', '1', '18 motns', 'Horseradish, mustard, sugar', 'protein15.9g Lipid3.8g carbohydrate72.2g Salt0.1g', '2-61Yahatahontori, Nakagawa-ku,Nagoya', 'ambient', '2', 'Wasabi', 0),
(10, 'Wasabi Powder G-118', 'Kinjirushi', '1KG X 10', '1', 2700, 'pkt', '1', '18 moths', 'Horseradish, mustard, sugar', 'protein15.9g Lipid3.8g carbohydrate72.2g Salt0.1g', '2-61Yahatahontori, Nakagawa-ku,Nagoya', 'ambient', '1', 'Wasabi', 0),
(11, 'Wasabi Powder V-26', 'Kinjirushi', '1KG X 10', '1', 800, 'pkt', '1', '18 moths', 'Horseradish, mustard, sugar', 'protein15.9g Lipid3.8g carbohydrate72.2g Salt0.1g', '2-61Yahatahontori, Nakagawa-ku,Nagoya', 'ambient', '1', 'Wasabi', 0),
(12, 'Wasabi Powder 350g', 'Koeki', '350gx40', '1', 505, 'pkt', '0.35', '18 moths', 'Horseradish, mustard, sugar', 'kcal 344kcal protein15.9g Lipid3.8g carbohydrate72.2g Salt0.1g', '〒233-0007 1-5-18 Okubo, Konan-ku, Yokohama-shi, Kanagawa', 'ambient', '2', 'Wasabi', 0),
(13, 'Pickled white ginger', 'Endo Foods', '1x10', '1', 350, 'pkt', '1', '18 moths', 'Ginger, pickled vegetables , sweetener, acidity, seasoning , vegetable color, mustard extract, hop extract', 'Protein: 1.1g, Fat: 0.3g, Carbohydrate: 6.9g, Salt equivalent: 2.6g', '9-5 Nihonbashikobunacho, Chuo City, Tokyo 103-0024', 'ambient', '2', 'Pickle', 0),
(14, 'Ajipon', 'mizkan', 'H ﾎﾟﾄﾙ 1.8L X 6', '1', 715, 'bot', '1.8', '12 months', 'soy sauce, citrus juice, brewed vinegar, salt ', 'Protein4.2g Fat0.0g Carb12.0g Salt8.3g Sodium 3280mg', 'Mizkan 2436 Otsukamachi, Tochigi City, Tochigi Prefecture 328-0007', 'ambient', '2', 'Beverage', 0),
(15, 'S&B carry can', 'S&B', '440gx20', '1', 1050, 'pkt', '0.44', '36months', 'Turmeric, coriander, cumin, fenegreek, pepper, red pepper, chinquapin, spices', 'protein&12.7g Lipid 13.2gcarbohydrate&61.5g Salt 0.2g sodium 65mg', 'S & B Foods Co., Ltd. 88-17 Shingo, Higashimatsuyama City, Saitama Prefecture', 'ambient', '2', 'Seasoning', 0),
(16, 'Rice vinegar', 'mizkan', 'H ﾎﾟﾄﾙ 1.8x6', '1', 470, 'btl', '1.8', '24 motnhs', 'Rice, alcohol', 'Protein0.2g Fat0.0g Carb11.2g Salt0g Sodium 5mg', 'Mizkan 2436 Otsukamachi, Tochigi City, Tochigi Prefecture 328-0007', 'ambient', '2', 'Beverage', 0),
(17, 'Sushi vinegar', 'mizkan', 'H ﾎﾟﾄﾙ 1.8L X 6', '1', 660, 'btl', '1.8', '4 moths', 'Sugar , vinegar, salt, seasoning ', 'Protein0.2g Fat0.0g Carb39.4g Salt10.4g Sodium 4090mg', 'Mizkan 2436 Otsukamachi, Tochigi City, Tochigi Prefecture 328-0007', 'ambient', '1', 'Beverage', 0),
(18, 'Konbu leaf 500g', 'yamafuku', '0.5kgX10', '1', 1650, 'pkt', '0.5', '12 months', 'seaweed', 'Protein 8.2g Fat 1.2g Carb 61.5g Salt 7.1g Sodium2800mg', 'yamafuku 4181-1 Kitamata, Aya-cho, Higashimorokata-gun, Miyazak', 'ambient', '1', 'Seaweed', 0),
(19, 'Konbu leaf 500g', '', '0.5kgX15', '1', 1350, 'pkt', '0.5', '12 months', 'seaweed', 'Protein 8.2g Fat 1.2g Carb 61.5g Salt 7.1g Sodium2800mg', 'yamafuku 4181-1 Kitamata, Aya-cho, Higashimorokata-gun, Miyazak', 'ambient', '2', 'Seaweed', 0),
(20, 'Konbu leaf 1kg', 'yamafuku', '1KG X 10', '1', 1800, 'pkt', '1', '12 months', 'seaweed', 'Protein 8.2g Fat 1.2g Carb 61.5g Salt 7.1g Sodium2800mg', 'yamafuku 4181-1 Kitamata, Aya-cho, Higashimorokata-gun, Miyazak', 'ambient', '1', 'Seaweed', 0),
(21, 'Yuzu juice carton', 'yamaguchi shoukuhin', '1.8LX6', '1', 4000, 'btl', '1.8', '６ months', 'citrus juice', 'Protein0.1g Fat0g Carb.11.8g Salt 0g ', 'Kawasaki Maruuo', 'ambient', '3', 'Beverage', 0),
(22, 'Yuzu juice bin', 'ponzuya', '1.8LX6', '1', 2600, 'btl', '1.8', '６ months', 'citrus juice', 'Protein0.1g Fat0g Carb.11.8g Salt 0g ', '〒107-0062 Tokyo, Minato City, Minamiaoyama, 2 Chome−4−4', 'ambient', '2', 'Beverage', 0),
(23, 'Yuzu vinegar', 'Nabeya ', '1.8LX6', '1', 3500, 'btl', '1.8', '12 months', 'Yuzu juice 100%', 'Protein 0.4g\nFat 0g\nCarbohydrate 8g\nSalt equivalent 0g', '1159-9 Chinto\n, Hagi City, Yamaguchi Prefecture, 758-0011', 'ambient', '1', 'Beverage', 0),
(24, 'Broad Bean Chilli Paste-Tobanjan 500g', 'youki', '0.5kgX12', '1', 430, 'btl', '0.5', '24 month', 'Salted pepper, broad bean processed product, dried pepper, salt , alcohol', 'protein 2.3g, fat 2.6g, carb 9.1g Salt 13.5g Sodium 5357mg', 'youki 11400-1008 Tamagawa, Chino, Nagano 391-0012 Japan', 'chilled', '1', 'Seasoning', 0),
(25, 'Broad Bean Chilli Paste-Tobanjan 1kg', 'youki', '1kgX12', '1', 850, 'btl', '1', '24 month', 'Salted pepper, broad bean processed product, dried pepper, salt , alcohol', 'protein 2.3g, fat 2.6g, carb 9.1g Salt 13.5g Sodium 5357mg', 'youki 11400-1008 Tamagawa, Chino, Nagano 391-0012 Japan', 'chilled', '3', 'Seasoning', 0),
(26, 'Broad Bean Chilli Paste-Tobanjan 1kg', 'to foods', '1kx15', '1', 575, 'btl', '1', '24 month', 'Salted pepper, broad bean processed product, dried pepper, salt , alcohol', 'protein 2.3g, fat 2.6g, carb 9.1g Salt 13.5g Sodium 5357mg', '3-18-15 Minato-cho, Hakodate-shi, Hokkaido 041-8610 ', 'chilled', '2', 'Seasoning', 0),
(27, 'Broad Bean Chilli Paste-Tobanjan 1kg', 'lee kum kee', '1kx12', '1', 580, 'btl', '1', '24 month', 'Salted pepper, broad bean processed product, dried pepper, salt , alcohol', 'protein 2.3g, fat 2.6g, carb 9.1g Salt 13.5g Sodium 5357mg', '3 Chome-9 Kanda Jinbocho, Chiyoda City, Tokyo 101-0051', 'chilled', '2', 'Seasoning', 0),
(28, 'Sweet Bean Paste - Tenmenjan 1kg', 'youki', '1kgX12', '1', 980, 'btl', '1', '12 months', 'Soybean miso, sugar, sesame paste, soy sauce', 'Protein 8.80g Lipid 8.40g Carb 38.20g Salt 5.5g Sodium 2200mg', 'youki 11400-1008 Tamagawa, Chino, Nagano 391-0011 Japan', 'chilled', '1', 'Seasoning', 0),
(29, 'Sweet Bean Paste - Tenmenjan 1kg', 'to foods', '1kgX12', '1', 815, 'btl', '1', '12 months', 'Soybean miso, sugar, sesame paste, soy sauce', 'Protein 8.80g Lipid 8.40g Carb 38.20g Salt 5.5g Sodium 2200mg', 'youki 11400-1008 Tamagawa, Chino, Nagano 391-0011 Japan', 'chilled', '2', 'Seasoning', 0),
(30, 'Rayu oil', 'youki', '920ml*6', '1', 1000, 'btl', '0.92', '24months', 'Edible soybean oil (made in Japan), dried chili pepper, green onion, ginger, cinnamon bark, staranise', 'protein 0g, fat 100g, carb 0g Salt 0g', 'Tamagawa, Chino, Nagano 391-0012 Japan', 'ambient', '1', 'Beverage', 0),
(31, 'Rayu oil', 'kuki', '1.65L x 6', '1', 1550, 'btl', '1.65', '24months', 'Edible soybean oil (made in Japan), dried chili pepper, green onion, ginger, cinnamon bark, staranise', 'protein 0g, fat 100g, carb 0g Salt 0g', '11 Onoe-cho, Yokkaichi-shi, Mie 510-0059', 'ambient', '2', 'Beverage', 0),
(32, 'Yuzu kosho red 500g', 'shirouzu', '500G X 12入', '1', 1400, 'btl', '0.5', '12 months', 'Chili, Yuzu (Miyazaki), Salt (Domestic)', 'Protein 1.5g Lipid 0.4g Carb 9.3g Salt 20.3g', 'Shiramizu Food Industry Co., Ltd.\n　　　　　　697-17 Chikushi, Chikushino City, Fukuoka Prefecture', 'ambient', '1', 'Seasoning', 0),
(33, 'Yuzu kosho red 50g', 'Takeshita ', '50ｇ瓶×10本×3ＢＬ', '1', 320, 'btl', '0.05', '12 months', 'Chili pepper (from Kyushu), salt, yuzu', 'protein 2.4g, fat 1.6g, carb 11.3g Salt 21.1g ', 'Takeshita 2957-4 Hiramatsu, Aira City, Kagoshima Prefecture', 'ambient', '3', 'Seasoning', 0),
(34, 'Yuzu kosho red 50g', 'Fundokin', '50gx10', '1', 290, 'btl', '0.05', '12 months', 'Chili pepper (from Kyushu), salt, yuzu', 'protein 2.4g, fat 1.6g, carb 11.3g Salt 21.1g ', '501 Usuki, Usuki City, Oita Prefecture 875-8612', 'ambient', '2', 'Seasoning', 0),
(35, 'Yuzu kosho green 150g', 'shirouzu', '150gX48', '1', 500, 'btl', '0.15', '12 months', 'Chili, Yuzu (Miyazaki), Salt (Domestic)', 'Protein 1.5g Lipid 0.4g Carb 9.3g Salt 20.3g', 'Shiramizu Food Industry Co., Ltd.\n　　　　　　697-17 Chikushi, Chikushino City, Fukuoka Prefecture', 'ambient', '1', 'Seasoning', 0),
(36, 'Yuzu kosho green 50g', 'Takeshita ', '50ｇ瓶×10本×3ＢＬ', '1', 320, 'btl', '0.05', '12 months', 'Chili pepper (from Kyushu), salt, yuzu', 'protein 2.4g, fat 1.6g, carb 11.3g Salt 21.1g ', 'Takeshita 2957-4 Hiramatsu, Aira City, Kagoshima Prefecture', 'ambient', '3', 'Seasoning', 0),
(37, 'Yuzu kosho green 500g', 'kagura', '500gx16', '1', 1150, 'btl', '0.5', '12 months', 'Chili, Yuzu (Miyazaki), Salt (Domestic)', 'Protein 1.5g Lipid 0.4g Carb 9.3g Salt 20.3g', '490 Oaza Shiromi , Saito City, Miyazaki Prefecture 881-1232', 'ambient', '2', 'Seasoning', 0),
(38, 'Adzuki beans 900g', 'investigating', '0.9KG X 10', '1', 820, 'pkt', '0.9', '36 months', 'adzuki beans', 'protein&20.3g Lipid 2.2g carbohydrate 58.7g, Salt0g, Sodium 5 mg', 'yamafuku 4181-1 Kitamata, Aya-cho, Higashimorokat a-gun, Miyazak', 'ambient', '2', 'Beans', 0),
(39, 'Hojicha 1kg', 'Sankoen	', '1kx6', '1', 1250, 'pkt', '1', '', '', '', '', 'ambient', '2', 'Tea', 0),
(40, 'Menma', 'marumatsu', '1kgx10', '1', 550, 'pkt', '1', '12 months', 'Menma, soy sauce, salt, sugar, seasoning , acidifier, antioxidant , sweetener.', '	\nprotein	1.0g\nLipid	0.5g\ncarbohydrates 3.6g	\nSalt equivalent 0.9g', 'Marumatsu Building, 1-47-1 Daita, Setagaya-ku, Tokyo 155-0033', 'ambient', '1', 'Pickle', 0),
(41, 'White Shoyu', 'kinoene', '1.8LX6', '1', 730, 'btl', '1.8', '7 motnhs', 'Wheat, salt, defatted  soybeans, alcohol', 'protein2.7g Lipid0g carbohydrate23.1gSalt17.7g', '157 Nakanodai, Noda City, Chiba Prefecture 278-8691', 'ambient', '2', 'Beverage', 0),
(42, 'Hana Katsuo', '', '500G/12', '1', 1150, 'pkt', '0.5', '12motnhs', 'Skipjack tuna', 'protein 75.7g Lipid 3.2g carbohydrate0.4g Salt equivalent 1.2g ', 'yamafuku 4181-1 Kitamata, Aya-cho, Higashimorokat a-gun, Miyazak', 'ambient', '2', 'Seasoning', 0),
(43, 'Shio Memma', 'marumatsu', '1.5KG X 10', '1', 1450, 'pkt', '1.5', '12 months', 'Menma, soy sauce, salt, sugar, seasoning , acidifier, antioxidant , sweetener.', '	\nprotein	1.0g\nLipid	0.5g\ncarbohydrates 3.6g	\nSalt equivalent 0.9g', 'Marumatsu Building, 1-47-1 Daita, Setagaya-ku, Tokyo 155-0033', 'ambient', '1', 'Pickle', 0),
(44, 'Shio Memma', 'fuji', '1kx12', '1', 620, 'pkt', '1', '', 'Menma, soy sauce, salt, sugar, seasoning , acidifier, antioxidant , sweetener.', '	\nprotein	1.0g\nLipid	0.5g\ncarbohydrates 3.6g	\nSalt equivalent 0.9g', 'Kamichi Building 8F, 3-37-9 Higashiueno, Taito-ku, Tokyo', 'ambient', '2', 'Pickle', 0),
(45, 'Narutomaki', 'sugiyo', '150g/20×5', '1', 200, 'pkt', '0.15', '10 months', 'Fish meat, starch, sugar, salt/processed starch , seasoning , trehalose, Ca carbonate, tartaric acid, pH adjuster, color (red 3, red 105)', 'protein 14.7g, fat 0.8g, carbohydrate 24.6g, salt equivalent 3.4g', '4-1 Nishimikaimachi, Nanao City, Ishikawa Prefecture 926-0835', 'frozen', '1', 'Processed food', 0),
(46, 'Narutomaki', 'sugiyo', '160gx100', '1', 130, 'pkt', '0.16', '10 months', 'Fish meat, starch, sugar, salt/processed starch , seasoning , trehalose, Ca carbonate, tartaric acid, pH adjuster, color (red 3, red 105)', 'protein 14.7g, fat 0.8g, carbohydrate 24.6g, salt equivalent 3.4g', '4-1 Nishimikaimachi, Nanao City, Ishikawa Prefecture 926-0835', 'frozen', '2', 'Processed food', 0),
(47, 'Tempura flour', 'Nisshin ', '1kgx10', '1', 420, 'pkt', '1', '12months', 'Wheat flour , egg yolk flour, salt , baking powder, seasonings', 'protein9.8g Lipid2.0g carbohydrate74.3g Salt equivalent0.83g', 'Nisshin Foods Inc. 1-25 Kanda Nishikicho, Chiyoda-ku,Tokyo', 'ambient', '2', 'Powder', 0),
(48, 'Edamame', '', '500gX20', '1', 260, 'pkt', '0.5', '6 months', 'green soy beans, salt', 'Protein: 12.90g Fat: 7.50g  Carbohydrate: 10.50g', '3-3-5 Akasaka, Minato-ku, Tokyo', 'frozen', '2', 'Beans', 0),
(49, 'soy paper sesame', 'ryushobo', '30枚ｘ２０', '1', 900, 'pkt', '0.065', '12 monhs', 'Powdered soy protein (manufactured in Japan) (non-genetically modified), potato starch, reduced syrup, ground sesame, soybean oil, pea starch / glycerin, tartaric acid, emulsifier (derived from soybeans)', 'protein 22.2g, fat 17.9g, carbohydrate 42.2g, salt  0.8g', 'J-Oil Mills Co., Ltd. 8-1 Akashicho, Chuo-ku, Tokyo', 'ambient', '1', 'Processed food', 0),
(50, 'Soy paper yellow', 'ryushobo', '30枚ｘ２０', '1', 900, 'pkt', '0.065', '12 monhs', 'Powdered soy protein (manufactured in Japan) (non-genetically modified), potato starch, reducing syrup, soybean oil, pea starch/glycerin, tartaric acid, emulsifier (from soybeans), colorant (yellow 4)', 'protein 22.6g, fat 9.2g, carbohydrate 51.2g, salt  0.9g', 'J-Oil Mills Co., Ltd. 8-1 Akashicho, Chuo-ku, Tokyo', 'ambient', '1', 'Processed food', 0),
(51, 'Soy paper red', 'ryushobo', '30枚ｘ２０', '1', 900, 'pkt', '0.065', '12 monhs', 'Powdered soy protein (manufactured in Japan) (non-genetically modified), potato starch, reducing syrup, soybean oil, pea starch/glycerin, tartaric acid, emulsifier (from soybeans), colorant (red 40)', 'protein 21.7g, fat 9.6g, carbohydrate51.7g, salt  0.9g', 'J-Oil Mills Co., Ltd. 8-1 Akashicho, Chuo-ku, Tokyo', 'ambient', '1', 'Processed food', 0),
(52, 'Soy paper plain', 'ryushobo', '30枚ｘ２０', '1', 900, 'pkt', '0.065', '12 monhs', 'Powdered soy protein (manufactured in Japan) (non-genetically modified), potato starch, reducing syrup, soybean oil, pea starch/glycerin, tartaric acid, emulsifier (derived from soybeans)', 'protein 22.6g, fat 10.7g, carbohydrate 50.0g, salt  0.8g', 'J-Oil Mills Co., Ltd. 8-1 Akashicho, Chuo-ku, Tokyo', 'ambient', '1', 'Processed food', 0),
(53, 'Soy paper green', 'ryushobo', '30枚ｘ２０', '1', 900, 'pkt', '0.065', '12 monhs', 'Powdered soy protein (manufactured in Japan) (non-genetically modified), potato starch, reducing syrup, soybean oil, pea starch/glycerin, tartaric acid, emulsifier (from soybeans), colorant (yellow 4, blue 1)', 'protein 21.8g, fat 9.8g, carbohydrate 51.7g, salt  0.9g', 'J-Oil Mills Co., Ltd. 8-1 Akashicho, Chuo-ku, Tokyo', 'ambient', '1', 'Processed food', 0),
(54, 'Plum umbeshi paste red　300g', 'Nakura', '300G X 24', '1', 440, 'btl', '0.3', '36 months', 'Plum (Wakayama Prefecture), Salt / Colorant (Red 102)', 'Protein 0.5g\nFat 0.4g\nCarbohydrate 5.4g\nSalt equivalent 22.9g', '213 Shinmachi, Hannan City, Osaka Prefecture', 'ambient', '1', 'Pickle', 0),
(55, 'Plum umbeshi paste red with shizo 1.1kg', 'kaneku', '1.1kgx8', '1', 1400, 'btl', '1.1', '36 months', 'Ume paste (plum pulp, salt), apple, red shiso, sugar mixed with glucose fructose, peach, reduced sugar syrup, acidity, seasoning (amino acid), alcohol, flavoring, polysaccharide thickener', 'Protein 1.1g\nFat 0.5g\nCarbohydrate 15.4g\nSalt equivalent 21.1g', 'Kaneku\n3-866 Hinata Wada, Ome City, Tokyo 198-0046, Japan', 'ambient', '2', 'Pickle', 0),
(56, 'Plum umbeshi paste red without shizo 1.1kg', 'kaneku', '1.1kgx8', '1', 1400, 'btl', '1.1', '36 months', 'Ume paste (plum pulp, salt), apple, red shiso, sugar mixed with glucose fructose, peach, reduced sugar syrup, acidity, seasoning (amino acid), alcohol, flavoring, polysaccharide thickener', 'Protein 1.1g\nFat 0.5g\nCarbohydrate 15.4g\nSalt equivalent 21.1g', 'Kaneku\n3-866 Hinata Wada, Ome City, Tokyo 198-0046, Japan', 'ambient', '2', 'Pickle', 0),
(57, 'Plum umbeshi paste red 300g', 'Odashi', '300gx30', '1', 650, 'btl', '0.3', '36 months', 'Ume paste (plum pulp, salt), apple, red shiso, sugar mixed with glucose fructose, peach, reduced sugar syrup, acidity, seasoning (amino acid), alcohol, flavoring, polysaccharide thickener', 'Protein 1.1g\nFat 0.5g\nCarbohydrate 15.4g\nSalt equivalent 21.1g', '〒332-0034 Saitama, Kawaguchi, Namiki, 3 Chome-17-20 Avera Namiki 1F', 'ambient', '2', 'Pickle', 0),
(58, 'Plum umbeshi paste white', 'Nakura', '300G X 24', '1', 440, 'btl', '0.3', '36 months', 'Plum (Wakayama Prefecture), Salt ', 'Protein 0.5g\nFat 0.4g\nCarbohydrate 5.4g\nSalt equivalent 22.10g', '213 Shinmachi, Hannan City, Osaka Prefecture', 'ambient', '1', 'Pickle', 0),
(59, 'Yuzu peel', 'yamafuku', '500G X 20', '1', 720, 'pkt', '0.5', '12 months', 'yuzu', 'protein 0.4g, fat 0.0g, carbohydrate 87.3g, salt equivalent 0.0g ', 'yamafuku 4181-1 Kitamata, Aya-cho, Higashimorokata-gun, Miyazak', 'frozen', '1 ', 'Seasoning', 0),
(60, 'Black fungus', 'yamafuku', '1KG X 10', '1', 1400, 'kg', '1', '12 months', 'seaweed', 'Protein 8.2g Fat 1.2g Carb 61.5g', 'yamafuku 4181-1 Kitamata, Aya-cho, Higashimorokata-gun, Miyazak', 'ambient', '1', 'Mushroom', 0),
(61, 'Black fungus', 'yamafuku', '200G X 50', '1', 390, 'pkt', '0.2', '12 months', 'seaweed', 'Protein 8.2g Fat 1.2g Carb 61.5g', 'yamafuku 4181-1 Kitamata, Aya-cho, Higashimorokata-gun, Miyazak', 'ambient', '1', 'Mushroom', 0),
(62, 'Wasabi tube 800g', 'yamafuku', '800G X 15 新', '1', 750, 'pkt', '0.8', '7 motnhs', 'Wasabi, horseradish, reduced syrup, salt, vegetable oil and fat', 'Protein 3.9g\nFat 1.2g\nCarbohydrates 27.4g\nSalt equivalent 3.8g', 'yamafuku 4181-1 Kitamata, Aya-cho, Higashimorokata-gun, Miyazak', 'frozen', '1', 'Wasabi', 0),
(63, 'Matcha powder 80g', 'yamafuku', '80G X 20入', '1', 850, 'can', '0.08', '8 months', 'tencha', 'protein30.6g　Lipid5.3g　carbohydrate38.5g', 'yamafuku 4181-1 Kitamata, Aya-cho, Higashimorokata-gun, Miyazak', 'chilled', '1', 'Tea', 0),
(64, 'Eggplant Pickle wasabi flavour', 'yamafuku', '500G X 10 X2合', '1', 850, 'pkt', '0.5', '', 'Eggplant, Pickling ingredients, seasoning , cyclic oligosaccharide, antioxidant (vitamin C), preservative (K sorbate), acidulant, flavoring, spices', '', 'yamafuku 4181-1 Kitamata, Aya-cho, Higashimorokata-gun, Miyazak', 'frozen', '1', 'Pickle', 0),
(65, 'Beni shoga', 'gs food', '1KG X 12', '1', 400, 'pkt', '1', '12 months', 'Ginger, salt, vinegar, seasoning, color (red 102)', 'Ginger, salt, vinegar, seasoning, color (red 102)', '578-0977 Osaka, Higashiosaka, Kōnoiketokuanchō, 7−49', 'ambient', '2', 'Pickle', 0),
(66, 'Wakame', 'kawamuro', '1KG X 10', '1', 900, 'kg', '1', '12 months', 'seaweed', 'Protein 18.0g\nLipid\n4.0g Carbohydrate 41.8g\nSalt equivalent 24.1g', '125 Takaishihama, Karakuwa-cho, Kesennuma City, Miyagi Prefecture', 'frozen', '1', 'Seaweed', 0),
(67, 'Hijiki', 'gs food', '1KG X 10', '1', 1100, 'pkt', '1', '12 moths', 'hijiki (dark edible seaweed )', 'protein 9.2g, fat 3.2g, carbohydrate 58.4g, salt equivalent 4.7g', '578-0977 Osaka, Higashiosaka, Kōnoiketokuanchō, 7−49', 'ambient', '2', 'Seaweed', 0),
(68, 'Dry niboshi', 'fujisawa', '1KG×8', '1', 1270, 'pkt', '1', '6 moths', 'Sardines (domestic), salt, antioxidant (vitamin E)', 'Protein: 64.5kcal / Fat: 6.2g / Carbohydrate: 0.3g / Salt equivalent: 4.3g', '2-5-5 Tonyacho , Kumagaya City, Saitama Prefecture 360-0024', 'ambient', '1', 'Snack', 0),
(69, 'Dry niboshi', 'bp', '1KG×10', '1', 980, 'pkt', '1', '6 moths', 'Sardines (domestic), salt, antioxidant (vitamin E)', 'Protein: 64.5kcal / Fat: 6.2g / Carbohydrate: 0.3g / Salt equivalent: 4.3g', '2-5-5 Tonyacho , Kumagaya City, Saitama Prefecture 360-0024', 'ambient', '2', 'Snack', 0),
(70, 'Karashi tube 43g', 'S&B', '43G/10 X 10', '1', 130, 'btl', '0.043', '12 months', 'Mustard, starch, salt, dextrin, corn oil/sorbit, acidity, flavor, thickener (xanthan), antioxidant (vitamin C)', 'Protein 0.8g\nFat 1.3g\nCarbohydrates 3.4g\nSalt equivalent 0.9g', 'S & B Foods Co., Ltd. 88-17 Shingo, Higashimatsuyama City, Saitama Prefecture', 'ambient', '1', 'Seasoning', 0),
(71, 'Somen noodles', 'yamafuku', '300G X 30', '1', 210, 'pkt', '0.3', '6 moths', 'Flour, salt, edible vegetable oil', 'Protein: 12.6g\nFat: 2.0g\nCarbohydrates : 93.0g\nSalt equivalent: 7.8g', 'yamafuku 4181-1 Kitamata, Aya-cho, Higashimorokata-gun, Miyazak', 'ambient', '1', 'Noodle', 0),
(72, 'Somen noodles', 'Showa', '1kx12', '1', 390, 'pkt', '1', '6 moths', 'Flour, salt, edible vegetable oil', 'Protein: 12.6g\nFat: 2.0g\nCarbohydrates : 93.0g\nSalt equivalent: 7.8g', '2 Chome-2-1 Uchikanda, Chiyoda City, Tokyo 101-0047', 'ambient', '2', 'Noodle', 0),
(73, 'Somen noodles', 'akagi', '200gX20', '1', 80, 'pkt', '0.2', '6 moths', 'Flour, salt, edible vegetable oil', 'Protein: 12.6g\nFat: 2.0g\nCarbohydrates : 93.0g\nSalt equivalent: 7.8g', '1115 Dainogo-cho, Ota City, Gunma Prefecture 373-0801', 'ambient', '2', 'Noodle', 0),
(74, 'Soba noodles', 'Ikeshima Foods ', '400G X 30袋', '1', 290, 'pkt', '0.4', '12 mohts', 'Wheat flour, buckwheat flour, wheat protein, salt, egg white', 'Protein 11.6g\nFat 1.4g\nCarbohydrates 64.8g\nSalt equivalent 1.7g', '434-0035 2351 Terajima, Hamamatsu-shi, Shizuoka', 'ambient', '1', 'Noodle', 0),
(75, 'Kanpyo', 'marudai', '1KG X 20入', '1', 2750, 'pkt', '1', '12 months', 'kanpyo preservative (sulfur dioxide)', 'Protein 7.1g, Fat 0.2g, Carbohydrate 67.9g, Salt 0g Sodium 3.0mg', 'marudai   16-4 Chuo-cho, Mibu- cho, Shimotsuga -gun, Tochigi Prefecture', 'chilled', '1', 'Dry food', 0),
(76, 'Mochi flour', 'tokuyama', '1KG X 15', '1', 600, 'pkt', '1', '6 months', 'glutinous rice', 'Protein 7.0g, Fat 1.3g, Carbohydrate 79.1g, Sodium 2.0mg', '3-3-9 Shinimazato, Ikuno-ku, Osaka', 'ambient', '2', 'Powder', 0),
(77, 'Kabayaki sauce 1.8l', 'kinoene', '1.8L X 6', '1', 900, 'btl', '1.8', '12 monhs', 'Sugar , soy sauce , rice fermentation seasoning, sugar, salt, eel extract, alcohol, caramel color, thickener, seasoning , vitamin B₁', 'Protein 2.4g\nFat 0g\nCarbohydrates 32.6g\nSalt equivalent 6.9g', 'Kinoene,Nakanodai, Noda City, Chiba Prefecture 278-869', 'ambient', '1', 'Beverage', 0),
(78, 'Kabayaki sauce 1.8l', 'yamasa', '1.8L X 6', '1', 880, 'btl', '1.8', '12 monhs', 'Sugar , soy sauce , rice fermentation seasoning, sugar, salt, eel extract, alcohol, caramel color, thickener, seasoning , vitamin B₁', 'Protein 2.4g\nFat 0g\nCarbohydrates 32.6g\nSalt equivalent 6.9g', 'Kinoene,Nakanodai, Noda City, Chiba Prefecture 278-869', 'ambient', '2', 'Beverage', 0),
(79, 'Wasabi tube 505 750g', 'kaneku', '750G/8X2', '1', 1000, 'pkt', '0.75', '7 motnhs', 'Wasabi, horseradish, reduced syrup, salt, vegetable oil and fat', 'Protein 3.9g\nFat 1.2g\nCarbohydrates 27.4g\nSalt equivalent 3.8g', 'Kaneku\n3-866 Hinata Wada, Ome City, Tokyo 198-0046, Japan', 'frozen', '1', 'Wasabi', 0),
(80, 'Kimche', 'sansho foods', '1KG X 8', '1', 380, 'kg', '1', '2moths', 'Chinese cabbage, Japanese radish, pickled vegetables [rice flour, salt, pepper, fructose, garlic, chives, bonito extract, salted sardines, kelp extract, green onion, salted Okiami] / seasoning , sweetener ', 'Protein 3.4g\nFat 1.2g\nCarbohydrates 9.4g\nSalt equivalent 3.3g', '5-1-16 Johoku, Oyama City, Tochigi Prefecture', 'chilled', '2', 'Pickle', 0),
(81, 'Hajikame 50 pieces about 220 G', 'yamafuku', '50ﾎﾝ(~220g)/袋X24', '1', 400, 'pkt', '0.22', '6 motnhs', 'Ginger, acetic acid, salt, colorant (red 105)', 'Protein 0.5g\nFat 0.2g\nCarbohydrate 3.4g\nSalt equivalent 5.8g', 'yamafuku 4181-1 Kitamata, Aya-cho, Higashimorokata-gun, Miyazak', 'ambient', '1', 'Pickle', 0),
(82, 'Yuzu peel dry', 'GABAN', '15G X 12', '1', 300, 'pkt', '0.015', '6 moths', 'yuzu', 'protein 5.6g, fat 2.6g, carbohydrate 82.5 g, salt equivalent 0.0g', '1400 Obuchi, Kakegawa-shi, Shizuoka', 'ambient', '2', 'Seasoning', 0),
(83, 'Kimchi base sauce', 'Momoya', '1.2KG X 15', '1', 1100, 'btl', '1.2', '12 months', 'Vegetables and fruits (garlic, apples, oranges, ginger), salt, sugar mixed with glucose and fructose, vinegar, chili pepper, seafood extract , fermented vegetables, bonito flakes, kelp, seasoning, acidity, stabilizer, paprika color', 'Protein 5.8g\nFat 1.2g\nCarbohydrate 15.1g\nSodium 5.5g\nSalt equivalent 14.0g', '2-16-2 Nihonbashi Kakigaracho, Chuo-ku, Tokyo', 'ambient', '1', 'Beverage', 0),
(84, 'OFU Lightly Salted Lemon 25G', 'Itofu', '25G/12)X10BL', '1', 80, 'pkt', '0.025', '6 moths', 'Peanuts, wheat flour, wheat protein, vegetable oil (rice), salt, sugar\nvegetable oil (rice), salt, sugar\nKombu powder, lemon juice powder (ricePeanuts, wheat flour, wheat protein, vegetable oil, salt, sugar, kombu powder, lemon juice powder, lemon, yuzu j', 'Protein 20.8g Lipid 42.8g  Carbohydrate 29.6g Salt equivalent 0.44g', 'Itofu Co., Ltd. 56-8, Kanshuji Nishikurisunocho, Yamashina-ku, Kyoto', 'ambient', '1', 'Snack', 0),
(85, 'OFU Cheese 25G', 'Itofu', '25G/12)X10BL', '1', 80, 'pkt', '0.025', '6 moths', 'peanuts fried egg fu wheat flour wheat protein vegetable oil rice cheese flavor IF16-1 sugar salt lactose cheese powder onion powder white pepper powder garlic powder seasoning amino acid flavoring', 'Protein 18.8g Lipid 51.9g Carbohydrate 25.1g Salt equivalent 1.7g ', 'Itofu Co., Ltd. 56-8, Kanshuji Nishikurisunocho, Yamashina-ku, Kyoto', 'ambient', '1', 'Snack', 0),
(86, 'OFU Barbecue 25G', 'Itofu', '25G/12)X10BL', '1', 80, 'pkt', '0.025', '6 moths', 'Peanuts, flour, wheat protein, vegetable oil, salt, powdered soy sauce, bacon-flavored seasonings, sugar, tomato powder, beef powder, spice mix seasoning, dried garlic, processed Oils and fats, lemon juice powder, dried onions / trehalose, seasonings, spi', 'Protein 18.4g Lipid 54.4g  Carbohydrate 22.8g Salt equivalent 1.92g  ', 'Itofu Co., Ltd. 56-8, Kanshuji Nishikurisunocho, Yamashina-ku, Kyoto', 'ambient', '1', 'Snack', 0),
(87, 'OFU Deep Roasted Shichimi 25G', 'Itofu', '25G/12)X10BL', '1', 80, 'pkt', '0.025', '6 moths', 'Peanuts, wheat flour, wheat protein, vegetable oil, salt, sugar, kelp powder, black sesame, red pepper, green paste, sansho, hemp seeds, keshi nuts, ', 'Protein 19.6g Lipid 45.6g  Carbohydrate 29.6g Salt equivalent 0.44g ', 'Itofu Co., Ltd. 56-8, Kanshuji Nishikurisunocho, Yamashina-ku, Kyoto', 'ambient', '1', 'Snack', 0),
(88, 'OFU Black pepper', 'Itofu', '25G/12)X10BL', '1', 80, 'pkt', '0.025', '6 moths', 'Peanuts, flour, wheat protein, vegetable oil,black pepper, salt, tomato extract, sugar,  cabbage extract, pork gelatin, yeast extract, onion extract , Onion, carrot extract, spices / processed starch', 'Protein 11.6g Lipid 54.4g  Carbohydrate 22.8g Salt equivalent 1.92g ', 'Itofu Co., Ltd. 56-8, Kanshuji Nishikurisunocho, Yamashina-ku, Kyoto', 'ambient', '1', 'Snack', 0),
(89, 'OFU Vegetable', 'Itofu', '25G/12)X10BL', '1', 80, 'pkt', '0.025', '6 moths', 'Peanuts, flour, wheat protein, vegetable oil, salt, tomato extract, sugar, white vegetable extract, seasonings, cabbage extract, pork gelatin, yeast extract, onion extract , Onion, carrot extract, spices / processed starch', 'Protein 16.8g Lipid 46.0g  Carbohydrate 31.9g Salt equivalent 0.83g ', 'Itofu Co., Ltd. 56-8, Kanshuji Nishikurisunocho, Yamashina-ku, Kyoto', 'ambient', '1', 'Snack', 0),
(90, 'White nori - Sushi rolled konbu', 'yamato', '10枚×20ｐｃ', '1', 320, 'pkt', '0.03', '10 months', 'Hokkaido kelp, brewed vinegar, gelatin', 'Protein: 3.6g Fat: 1.3g Carbohydrate: 65.5g Salt equivalent: 4.9g', 'Tsuruga City, Fukui Prefecture \"Yamato Takahashi Co., Ltd.\"', 'chilled', '2', 'Seaweed', 0),
(91, 'Miinari furikake salmon', 'minari', '85gx30本', '1', 420, 'btl', '0.085', '12 months', 'Green laver flavored granules , arare, sesame seeds, cod roe flavored granules, dried salmon flakes, bonito flavored granules, salmon flavored granules, nori, dried wakame seaweed, salt, sugar/seasoning, colorant (annatto, red yeast, caramel), seaweed', 'Protein: 17.2g Fat: 7.0g Carbohydrate: 41.1g Salt equivalent: 28.7g', 'Minari Co., Ltd.\n636\nShimogouchi, Kouchi-cho, Higashi-Hiroshima City, Hiroshima Prefecture ', 'ambient', '3', 'Seasoning', 0),
(92, 'Bonito powder', 'bestplanet', '1kgx10', '1', 2300, 'pkt', '1', '6 months', 'Bonito kare fushi', 'Protein 71.3 g\nFat 8.1 g\nCarbohydrates 1.4 g\nSodium 315 mg\nSalt equivalent 0.8 g', '1-44-1 Shiroshidai, Fuchu-shi, Tokyo 183-0011, Japan', 'ambient', '3', 'Powder', 0),
(93, 'Sencha', 'Sankoen	', '1kgx10', '1', 1000, 'pkt', '1', '12 months', 'Sencha', '\nProtein 24.5 g\nFat 4.7 g\nCarbohydrate 47.7 g\nSalt 0g', '685-1 Kamishinden, Yaizu, Shizuoka 421-0206', 'ambient', '2', 'Tea', 0),
(94, 'Chili threads', 'S&B', '100gx10', '1', 1560, 'pkt', '0.1', '18 months', 'Red chili peppers', 'Protein 12.2 g\nFat 4.5 g\nCarbohydrates 62.5 g\nSalt equivalent 38.8 g', 'S & B Foods Co., Ltd. 88-17 Shingo, Higashimatsuyama City, Saitama Prefecture', 'ambient', '3', 'Seasoning', 0),
(95, 'Chili threads', 'koeki', '100gx20', '1', 515, 'pkt', '0.1', '18 months', 'Red chili peppers', 'Protein 12.2 g\nFat 4.5 g\nCarbohydrates 62.5 g\nSalt equivalent 38.8 g', '233-0007 1-5-18 Okubo, Konan-ku, Yokohama-shi, Kanagawa', 'ambient', '2', 'Seasoning', 0),
(96, 'Rice cooker', 'zokirushi', '6 kg', '1', 33000, 'device', '6', 'ー', 'ー', 'ー', '1-3-21 Fukumachi, Nishiyodogawa-ku,Osaka-shi, Osaka', 'ambient', '11', 'Device', 0),
(97, 'Kansui powder', 'Oriental Yeast Industry Co.', '12㎏×1袋', '1', 4900, 'pkt', '12', '12 months', 'Potassium carbonate 60.0%\nSodium carbonate 40.0%', 'Protein 0g \nFat 0g \nCarbohydrate 0g \nSalt equivalent 33.7g', '3-6-10, Azusawa, Itabashi-ku, Tokyo', 'ambient', '1', 'Powder', 0),
(98, 'Salmon flake', 'donan', '145gx30', '1', 500, 'btl', '0.145', '8 moths', 'Salmon , vegetable oil , salt, seasoning, color (yellow 5, red 102)', 'Protein: 19.0g, Fat: 10.1g, Carbohydrates: 0.6g, Salt equivalent: 4.6g', '049-0101	3-5-13 Oiwake, Hokuto-shi, Hokkaido', 'ambient', '3', 'Processed food', 0),
(99, 'Konbu dashi', 'shimaya', '1 kgx12', '1', 1280, 'pkt', '1', '18moths', 'Salt , sugar, kelp powder, kelp extract, dextrin', 'Protein  20g\nFat 0g\nCarbohydrates  34g\nSalt Equivalent  48g', '7-1 Shinchi-machi, Shunan City, Yamaguchi Prefecture', 'ambient', '3', 'Seasoning', 0),
(100, 'Otona furikake wasabi taste', 'nagatanien', '１３，５ｇx10', '1', 500, 'pkt', '0.00135', '12 months', 'Seasoning granules, dried seaweed, seasoned dried bonito shavings, flakes, sesame seasoning, caramel color, gardenia color, flavoring, flavonoid color, antioxidant (vitamin E), carotenoid color, acidity, sweetener (sucralose), (contains wheat, sesame, and', 'Energy 10kcal\nProtein 25.9g\nFat 5.8g\nCarbohydrate 48.1g\nSalt equivalent 14.8g', '2-36-1 Nishi-Shimbashi, Minato-ku, Tokyo ', 'ambient', '3', 'Seasoning', 0),
(101, 'Nori senbei', 'shimamura', '170g', '1', 890, 'pkt', '0.17', '6 moths', 'Glutinous rice, soy sauce, seaweed, sugar, mirin, potato starch, seasoning ', 'Protein 7.1g, Fat 0.3g, Carbohydrate 84.3g, Salt equivalent 1.96g ', '4777 Magame, Kujukuri, Sambu District, Chiba 283-0114', 'ambient', '3', 'Snack', 0),
(102, 'Shoyu bottle', 'bright kitchen', '120ml', '1', 110, 'pkt', '0.17', '-', '-', '-', 'Zona industrial da Gandra, Lote 5\n4805-014 Barco, Guimarães', 'ambient', '12', 'Device', 0),
(103, 'Boiled adzuki beans ', 'sanyo', '2号缶x12', '1', 710, 'can', '1', '36 months', 'Sugar (manufactured in Japan), red beans, starch, salt', 'Protein: 4.4g, Fat: 0.1g, Carbohydrate: 51.5g, Salt equivalent: 0.09g', '1-5-14 Kinshito, Sumida-ku, Tokyo', 'ambient', '3', 'Beans', 0),
(104, 'Boiled adzuki beans ', 'Tanio Matsuin', '2号缶x12', '1', 430, 'can', '1', '36 months', 'Sugar (manufactured in Japan), red beans, starch, salt', 'Protein: 4.4g, Fat: 0.1g, Carbohydrate: 51.5g, Salt equivalent: 0.09g', '814 Wake, Wake-cho, Wake-gun, Okayama 709-0451', 'ambient', '2', 'Beans', 0),
(105, 'Ponzu', 'mizkan', '1.8l', '1', 780, 'btl', '1.8', '8 months', 'Citrus juice ,vinegar / acidulant, flavoring', 'Carbohydrate 6.5g\nProtein 0.0g\nSodium 2mg\nFat 0.0g\nSalt equivalent 0.0g', 'Mizkan 2436 Otsukamachi, Tochigi City, Tochigi Prefecture 328-0007', 'ambient', '2', 'Beverage', 0),
(106, 'Temari gluten free shoyu', 'ichibiki', '500ml', '1', 380, 'btl', '0.5', '18 months', 'Soybeans (non-genetically modified), salt/alcohol', 'Protein 11.3g\nFat 0g\nCarbohydrate 10g\nSalt equivalent 17.3g', '28-8, Chuo 8-chome, Ota-ku, Tokyo 143-0024, Japan', 'ambient', '3', 'Beverage', 0),
(107, 'hondashi', 'ajinomoto', '1KG X 20入', '1', 1400, 'pkt', '1', '18 moths', 'Salt (manufactured in Japan), sugar (sugar, lactose), flavor ingredients (bonito powder, bonito extract), yeast extract, seasoning (amino acids, etc.), (includes some milk ingredients)', 'Protein 25.1ｇ	\nFat 0.7g\nCarbohydrates 30.0g	\nSalt equivalent 44.0	g', 'Ajinomoto Co.\n15-1, Kyobashi 1-chome, Chuo-ku, Tokyo', 'ambient', '2', 'Seasoning', 0),
(108, 'Karashi tube 320g', 'to foods', '320gX15', '1', 420, 'btl', '0.32', '12 months', 'Mustard, starch, salt, dextrin, corn oil/sorbit, acidity, flavor, thickener (xanthan), antioxidant (vitamin C)', 'Protein 8.2g\nFat 13.5g\nCarbohydrate 20.7g\nSodium 1200mg\nSalt equivalent 3.0g', '1-2-4 Minami-Nagasaki, Toshima-ku, Tokyo 171-0052, Japan', 'ambient', '2', 'Seasoning', 0),
(109, 'Kanpyo ', 'kaneku', '1KG X 12入', '1', 1050, 'pkt', '1', '12 months', 'kanpyo preservative (sulfur dioxide)', 'Protein 7.1g, Fat 0.2g, Carbohydrate 67.9g, Salt 0g Sodium 3.0mg', 'Kaneku\n3-866 Hinata Wada, Ome City, Tokyo 198-0046, Japan', 'chilled', '2', 'Processed food', 0),
(110, 'Dry miso powder', 'shinsuichi', '6 btl x 5 blocs', '1', 185, 'btl', '0.12', '12 months', 'Soybean, rice, salt', 'Protein 20.6g\nFat 11.6g\nCarbohydrate 41.8g\nSalt equivalent 22.4g', 'MIYASAKAJOZO、2-4-4, Nogata, Nakano-ku, Tokyo', 'ambient', '2', 'Miso', 0),
(111, 'Bonito dashi powder', 'shimaya', '1ｋｇ×12', '1', 1000, 'pt', '1', '18 months', 'Salt (manufactured in Japan), sugar (sugar, lactose), flavor ingredients (bonito powder, bonito extract), yeast extract, seasoning (amino acids, etc.), (includes some milk ingredients)', 'Protein 25.1g	\nFat 0.7g	\nCarbohydrates 30.0g	\nSalt equivalent 44.0g', '7-1 Shinchi-machi, Shunan City, Yamaguchi Prefecture', 'ambient', '3', 'Seasoning', 0),
(112, 'Bubuarare', '‎Yayoi Good food', '300ｇ×20pc', '1', 690, 'pkt', '0.3', '6 months', 'mochi rice', 'Protein 7.3g	\nFat 0.5g	\nCarbohydrates 91.3g	\nSalt equivalent 0.1g', 'Shiba-Daimon Center Building 6F, 1-10-11 Shiba-Daimon, Minato-ku, Tokyo 105-0012, Japan', 'ambient', '3', 'Processed food', 0),
(113, 'Kizami yuzu', 'mikoshokuhin', '100ｇ×24pc', '1', 580, 'pkt', '0.1', '12 months', 'Yuzu , vinegar, salt, sorbit, tartaric acid, flavor, antioxidant (vitamin C), thickener , acidity', 'Protein 1.0g\nFat 0.3g\nCarbohydrate 12.5g\nSalt equivalent 0g', '1-172-3 Imai, Aome-shi, Tokyo', 'frozen', '3', 'Seasoning', 0),
(114, 'Wasabi oil', 'keizu', '100ｇ×10本', '1', 950, 'btl', '0.1', '12 months', 'Edible vegetable oils and fats, horseradish flavoring, horseradish flavoring ', 'Protein: 0g　\nFat: 100g　\nCarbohydrate: 0g　\nSalt equivalent: 0g', 'Keihanshin Toranomon Building 11F, 1-7-14 Nishi-Shinbashi, Minato-ku, Tokyo 105-0003, Japan', 'ambient', '3', 'Beverage', 0),
(115, 'Grape seed oil', 'kikkoman', '９１８ｇ×12本', '1', 730, 'btl', '0.918', '24 months', 'edible grape oil', 'Protein: 0g　\nFat: 100g　\nCarbohydrate: 0g　\nSalt equivalent: 0g', '250 Noda, Noda City, Chiba 278-8601, Japan', 'ambient', '2', 'Beverage', 0),
(116, 'White sesame seed', 'mitake', '1kgx12', '1', 510, 'pkt', '1', '', '', '', '', 'ambient', '2', 'Seasoning', 0),
(117, 'Ginnan', '‎Yayoi Good food', '7can×24', '1', 195, 'can', '0.29', '36 months', 'Ginkgo nuts, glucose, salt, pH adjuster', 'Protein 2.6g\nFat 0.8g\nCarbohydrate 26.5g\nSalt equivalent 0.9g', 'Shiba-Daimon Center Building 6F, 1-10-11 Shiba-Daimon, Minato-ku, Tokyo 105-0012, Japan', 'ambient', '2', 'Processed food', 0),
(118, 'Barlay miso', 'fundokin', '1ｋｇ×10', '1', 410, 'pkt', '1', '6 months', 'Barley, soybeans (non-genetically modified), salt/alcohol', 'Protein: 8.1g　\nFat: 3.0g　\nCarbohydrates: 33.9g　\nSodium: 4.1g　\nSalt equivalent: 10.4g', '501 Oaza Usuki, Usuki City, Oita Prefecture, 875-8612 Japan', 'ambient', '2', 'Miso', 0),
(119, 'Mochi sheet(20 pieces)', 'investigating', '360ｇ（20枚）×30pc', '1', 490, 'pkt', '0.36', '12 months', 'Flour (domestic) Mochi flour, mannan flour, etc.', 'Protein 4.3g\nLipids 0.5g\nCarbon hydrate 51.3g\nSalt equivalent 1.7g', 'investigating', 'frozen', '3', 'Processed food', 0),
(120, 'Sansho', 'Fukutoku', '300ｇ×30本', '1', 1390, 'pkt', '0.3', '8 moths', 'Jizansho, soy sauce, sugar, sorbit, seasoning, coloring, dashi kombu', 'Protein 4.6g\nLipids 0.7g\nCarbon hydrate 26.3g\nSalt equivalent 11.7g', '1-1-13, Release Nishi, Joto-ku, Osaka City, Osaka Prefecture 536-0011, Japan', 'ambient', '3', 'Seasoning', 0),
(121, 'Sesame grinder', 'Slick-N', '1x25', '1', 255, 'pkt', '0.17', '-', '-', '-', '2-11\n, Tsubame City, Niigata Prefecture, 959-1277', 'ambient', '4', 'Device', 0),
(122, 'Bluefin tuna wild akami', 'Tohrey', '10kg', '2', 5200, 'kg', '1', '24 moths', 'Tuna', 'Protein26.8g\nLipids .2g \nCarb0.2g', 'investigating', 'frozen', '5', 'Tuna', 0),
(123, 'Bluefin tuna farmed akami', 'Tohrey', '10kg', '2', 5000, 'kg', '1', '24 moths', 'Tuna', 'Protein26.8g\nLipids .2g \nCarb0.2g', 'investigating', 'frozen', '5', 'Tuna', 0),
(124, 'Bluefin tuna farmed chuutoro', 'Tohrey', '10kg', '2', 5500, 'kg', '1', '24 moths', 'Tuna', 'Protein30.8g \nLipids 6.2g\nCarb0.2g', 'investigating', 'frozen', '5', 'Tuna', 0),
(125, 'Bluefin tuna farmed fatty', 'Tohrey', '10kg', '2', 5500, 'kg', '1', '24 moths', 'Tuna', 'Protein20.8g \nLipids26.2g \nCarb0.2g', 'investigating', 'frozen', '5', 'Tuna', 0),
(126, 'Bigeye Tuna', 'Tohrey', '10kg', '2', 2977, 'kg', '1', '24 moths', 'Tuna', 'Protein22.8g \nFat1.2g \nCarb0.2g', 'investigating', 'frozen', '6', 'Tuna', 0),
(127, 'Amber Jack filet', 'Kyushu ', '(1.1-1.8)kg/10kg', '3', 1980, 'kg', '1.5', '24 moths', 'Amberjack', 'Protein21.8g \nFat4.2g \nCarb0.2g', 'investigating', 'frozen', '6', 'Fish', 0),
(128, 'Yellowtail loin', 'Kyushu ', '600gup/10kg', '3', 2640, 'kg', '0.6', '24 moths', 'Yellowtail', 'Protein19.8g \nFat18.2g \nCarb0.3g', 'investigating', 'frozen', '6', 'Fish', 0),
(129, 'Yellowtail filet', 'Kyushu ', '1.7-2.0/10kg', '3', 2240, 'kg', '1.8', '24 moths', 'Yellowtail', 'Protein19.8g \nFat18.2g \nCarb0.3g', 'investigating', 'frozen', '6', 'Fish', 0),
(130, 'Halibut semidress', 'Kyushu ', '0.7-1/12kg', '3', 2620, 'kg', '0.9', '24 moths', 'Halibut', 'Protein21 .1g \nFat 3.7g \nCarb0.1g', 'investigating', 'frozen', '6', 'Fish', 0),
(131, 'Scallop M', 'TSK', '1kg*10', '1', 4500, 'kg', '1', '24 moths', 'Scallop', 'Protein13.5g \nFat0.9g \nCarb1.5g', 'investigating', 'frozen', '7', 'Scallop', 0),
(132, 'Scallop S', 'TSK', '1kg*10', '1', 4000, 'kg', '1', '24 moths', 'Scallop', 'Protein13.5g \nFat0.9g \nCarb1.5g', 'investigating', 'frozen', '7', 'Scallop', 0),
(133, 'tobiko orange', 'Daiei foods', '0.5*12', '1', 1700, 'pkt', '0.5', '24 moths', 'flying fish roe, sugar,salt, ', 'Protein15.5g \nFat2.9g \nCarb9.3g', 'investigating', 'frozen', '8', 'Fish roe', 0),
(134, 'tobiko green', 'Daiei foods', '0.5*12', '1', 1800, 'pkt', '0.5', '24 moths', 'flying fish roe, sugar,salt, colorant yellow4 blue 1', 'Protein15.5g \nFat2.9g \nCarb9.3g', 'investigating', 'frozen', '8', 'Fish roe', 0),
(135, 'tobiko black', 'Daiei foods', '0.5*12', '1', 1900, 'pkt', '0.5', '24 moths', 'flying fish roe, sugar,salt, colorant yellow4 blue 1 red40', 'Protein15.5g \nFat2.9g \nCarb9.3g', 'investigating', 'frozen', '8', 'Fish roe', 0),
(136, 'tobiko red', 'Daiei foods', '0.5*12', '1', 1700, 'pkt', '0.5', '24 moths', 'flying fish roe, sugar,salt, colorant red40', 'Protein15.5g \nFat2.9g \nCarb9.3g', 'investigating', 'frozen', '8', 'Fish roe', 0),
(137, 'shime saba', 'Yamayo', '160gx20', '1', 210, 'pkt', '0.16', '24 moths', 'Mackrel Vinegar', 'Protein18.6g \nFat26.9g \nCarb1.3g', 'investigating', 'frozen', '9', 'Fish', 0),
(138, 'Crab stick', 'Osaki', '500gx20', '1', 671, 'pkt', '0.5', '', 'Fish meat, egg white, starch, crab extract, salt, fermented seasoning, shrimp extract, seasoning', 'Protein12.1g \nFat 0.5g \nCarb9.3g', 'investigating', 'frozen', '9', 'Processed food', 0),
(139, 'Boiled octopus', 'Kanari', '6EA /cs (10kg)', '1', 2750, 'kg', '1.5', '24 moths', 'Octopus', 'Protein16.4g \nFat 0.7g \nCarb0.1g', 'investigating', 'frozen', '9', 'Seafood', 0),
(140, 'Sweet shrimp', 'Shokuryu', '80G X 20入', '1', 250, 'pkt', '0.08', '24 moths', 'Sweet Shrimp', 'Protein19.8g \nFat 0.3g \nCarb0.1g', 'investigating', 'frozen', '9', 'Seafood', 0),
(141, 'Ikura', 'Maruhiko', '(250gx2)x20pkt', '1', 9950, 'kg', '0.25', '24 moths', 'Salmon Roe', 'Protein32.6 g\nFat 15.6g \nCarb0.1g', 'investigating', 'frozen', '9', 'Fish roe', 0),
(142, 'Unagi kabayaki', 'Sakari', '200gX50', '1', 2380, 'kg', '0.2', '24 moths', 'Unagi, kabayaki sauce', 'Protein23.1g\nFat 21g \nCarb3.1g', 'investigating', 'frozen', '9', 'Processed food', 0),
(143, 'smoked salmon', 'sanyo', '0.5kgx10', '1', 1280, 'pkt', '0.5', '24 moths', 'Salmon', 'Protein25.7g\nFat 5.5g \nCarb0.1g', 'investigating', 'frozen', '9', 'Fish', 0),
(144, 'salmon loin', 'Aguas Claras', '3kg/case', '1', 2588, 'kg', '0.8', '24 moths', 'Salmon', 'Protein22.5g\nFat 4.5g \nCarb0.1g', 'investigating', 'frozen', '9', 'Fish', 0),
(145, 'Salmon filet', 'Aguas Claras', '10kg/case', '1', 1480, 'kg', '1', '24 moths', 'Salmon', 'Protein22.5g\nFat 4.5g \nCarb0.1g', 'investigating', 'frozen', '9', 'Fish', 0),
(146, 'Botan Ebi', 'Katsurei', '1kgx12', '1', 3850, 'kg', '1', '24 moths', 'Botan Ebi', 'Protein21.7g\nFat0.3g \nCarb0.1g', 'investigating', 'frozen', '9', 'Seafood', 0),
(147, 'Soft shell crabb', 'Celeb', '70-100gx10', '1', 2550, 'pkt', '0.1', '24 moths', 'Soft shell crab', 'Protein16.4g \nFat 0.7g \nCarb0.1g', 'investigating', 'frozen', '9', 'Seafood', 0),
(148, 'Asari', 'Nousui', '250gx40', '1', 155, 'pkt', '0.25', '24 moths', 'Asari', 'Protein6.4g \nFat 0.7g \nCarb0.1g', 'investigating', 'frozen', '9', 'Seafood', 0),
(149, 'Angel shrimp', 'Gotaku', '1k(31-40)x10', '1', 2695, 'kg', '1', '24 moths', 'Angel shrimp', 'Protein21.7g\nFat0.3g \nCarb0.1g', 'investigating', 'frozen', '9', 'Seafood', 0),
(150, 'King Crab 8L', 'Kanisho', '1.8kgx6', '1', 12500, '0', '1.8', '24 moths', 'King Crab', 'Protein13.7gFat0.3g Carb0.1g', 'investigating', 'frozen', '10', 'Crab', 0),
(151, 'snow crab sticks', 'Kanisho', '300gx40', '1', 3300, 'kg', '0.3', '24 moths', 'Snow Crab', 'Protein13.9g\nFat0.4g \nCarb0.1g', 'investigating', 'frozen', '10', 'Crab', 0),
(152, 'Crab claw ', 'Kanisho', '1kg(41/50)x12', '1', 4250, 'kg', '1', '24 moths', 'Snow Crab', 'Protein13.9g\nFat0.4g \nCarb0.1g', 'investigating', 'frozen', '10', 'Crab', 0),
(153, 'Gindara', 'Suisan', '1 case /22.68kg', '1', 0, '-', '1', '24 mmoths', 'Black cod', 'Investigating', 'Investigating', 'Frozen', '11', 'Seafood', 0);

-- --------------------------------------------------------

--
-- Table structure for table `supplier`
--

CREATE TABLE `supplier` (
  `id` int(255) NOT NULL,
  `companyName` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `contactName` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `contactEmail` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `supplier`
--

INSERT INTO `supplier` (`id`, `companyName`, `contactName`, `contactEmail`) VALUES
(1, '山福', '藤井 ', 'cf509ya@yamafuku-net.co.jp'),
(2, '協和', '柳', 'yanagi@kyowa-bussan.com'),
(3, '三駒', '河村', 'kawamura@sankoma.co.jp'),
(4, '本', '京橋白木', '03-5636-9882　FAX'),
(5, '東冷', '澤入', 'sawairi@toyoreizo.co.jp'),
(6, '海神九州', '連尾', 'tsureo@kaijin.co.jp'),
(7, 'TSK', '葛西 ', 'tsk-kasai@trade.gmobb.jp'),
(8, '大栄フーズ', '渡邊', 'daieifoods-mobile03@docomo.ne.jp'),
(9, '共同水産', '三好', 'miyoshi@kyousui.jp'),
(10, '築地蟹商', '小澤', ' ozawa@kanisho.co.jp'),
(11, 'インターネット', 'Amazon, Rakuten itp', 'check master excel'),
(12, '店（外）', 'Daiso, Local martet itp', 'check master excel');

-- --------------------------------------------------------

--
-- Table structure for table `usermaster`
--

CREATE TABLE `usermaster` (
  `id` int(255) NOT NULL,
  `clientId` int(11) NOT NULL,
  `username` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `companyDetails` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `usermaster`
--

INSERT INTO `usermaster` (`id`, `clientId`, `username`, `password`, `companyDetails`, `email`) VALUES
(1, 0, 'Admin', '$2y$10$EiTV2Ak8wXNeVt4tzJ.5mO35vGcDsmmOh3.5LyoRvCVZiuuNxiluS', '-', ''),
(2, 1001, 'Trevor', '$2y$10$bBT64vGnmyMhl9MiS.D0FOAq4kr8HlA4ZVeIEFZYgBbhevzhDcTGu', '704/804Little Sunflower C.H.S Ltd.,Behind Corporation Bank, Lourdes Colony,Orlem,Malad(West),Mumbai-400 064', 'Test@gamil'),
(3, 1002, 'Taj Hotel', '$2y$10$g..nht6wnZVvuC8p8Rraq.q3YkzgKeQD2KxO87LFNXJlKr/plypP2', 'MANDLIK HOUSE, MANDLIK ROAD, MUMBAI - 400001 Branch Code:30 THE TAJ MAHAL PALACE AND TOWER, APOLLO BUNDER, MUMBAI, MAHARASHTRA - 400001\r\n', ''),
(4, 1003, 'Sandeep123', '$2y$10$PxIUBjE.33zhvq/pI33xL.h.cz/OqJRM/RX2OJSImKswjzMZAJsbe', 'testSandeep1', 'Sandeep@gmail.com'),
(5, 1004, 'Satooooo', '$2y$10$Hl9UbYmRQhozcmBRkqPkyOTUPUyKa66HbIPRdjdIrl8Aanx/YYew6', 'Singapur company name1hgvhg', 'kamil@kaijin.co.jp'),
(6, 123, 'Admin123', '$2y$10$6FSnNoO.fFVeTqKWr1FXGeLggbn1bxWxZwKZfNtc9B0zV4DyzHGFW', '123', '123');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `client`
--
ALTER TABLE `client`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `clientId` (`clientId`);

--
-- Indexes for table `placeholder`
--
ALTER TABLE `placeholder`
  ADD PRIMARY KEY (`Number`);

--
-- Indexes for table `supplier`
--
ALTER TABLE `supplier`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `usermaster`
--
ALTER TABLE `usermaster`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `clientId` (`clientId`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `client`
--
ALTER TABLE `client`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `placeholder`
--
ALTER TABLE `placeholder`
  MODIFY `Number` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=310;

--
-- AUTO_INCREMENT for table `supplier`
--
ALTER TABLE `supplier`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `usermaster`
--
ALTER TABLE `usermaster`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

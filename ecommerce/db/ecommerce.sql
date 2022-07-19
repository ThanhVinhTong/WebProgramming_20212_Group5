-- phpMyAdmin SQL Dump
-- version 8.0.27
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: July 09, 2023 at 06:23 AM
-- Server version: 10.4.16-MariaDB
-- PHP Version: 7.3.24

ALTER USER 'root'@'localhost' IDENTIFIED WITH mysql_native_password BY '';

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ecommerce`
--

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `Id` int(11) NOT NULL,
  `Name` varchar(250) DEFAULT NULL,
  `Alias` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`Id`, `Name`, `Alias`) VALUES
(1, 'BOTTOM', 'bottom'),
(2, 'TOP', 'top'),
(3, 'SHOES', 'shoes');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `Id` int(11) NOT NULL,
  `Uid` int(11) NOT NULL,
  `Address` varchar(200) NOT NULL,
  `Phone` varchar(20) NOT NULL,
  `Cart_total` float NOT NULL,
  `Description` varchar(500) NOT NULL,
  `Created_at` datetime DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `order_detail`
--

CREATE TABLE `order_detail` (
  `Id` int(11) NOT NULL,
  `OrderId` int(11) NOT NULL,
  `ProductId` int(11) NOT NULL,
  `Quantity` int(11) NOT NULL,
  `Price` float NOT NULL,
  `Size` varchar(5) NOT NULL,
  `Color` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `Id` int(11) NOT NULL,
  `Name` varchar(550) DEFAULT NULL,
  `CategoryId` int(11) DEFAULT NULL,
  `SubCategoryId` int(11) DEFAULT NULL,
  `Description` longtext DEFAULT NULL,
  `Price` int(11) NOT NULL,
  `Color` varchar(250) DEFAULT NULL,
  `Material` varchar(250) DEFAULT NULL,
  `Size` varchar(20) NOT NULL,
  `Createdate` date DEFAULT NULL,
  `EditDate` date DEFAULT NULL,
  `isSaleOff` tinyint(1) DEFAULT NULL,
  `Percent_off` int(11) NOT NULL,
  `Image1` varchar(250) DEFAULT NULL,
  `Image2` varchar(250) DEFAULT NULL,
  `Image3` varchar(260) NOT NULL,
  `Image4` varchar(260) NOT NULL,
  `Alias` varchar(200) NOT NULL,
  `Quantity` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`Id`, `Name`, `CategoryId`, `SubCategoryId`, `Description`, `Price`, `Color`, `Material`, `Size`, `Createdate`, `EditDate`, `isSaleOff`, `Percent_off`, `Image1`, `Image2`, `Image3`, `Image4`, `Alias`, `Quantity`) VALUES
(1, 'GRECA LONG PUFFER COAT', 2, 3, 'This warm, padded puffer coat is embellished with the tonal Greca print and a flattering logo buckle belt cinching the waist. The practical design features a detachable hood for the rain or windy days.', 750000, 'Black', '100% Polyamide', 'M, L', '2022-07-18', '2022-07-18', 1, 40, 'greca1.png', 'greca2.png', 'greca3.png', 'greca4.png', 'greca-long-puffer-coat', '[{ \"color\": \"Black\", \"size\": \"M\", \"qty\": \"150\" }, { \"color\": \"Black\", \"size\": \"L\", \"qty\": \"150\" } ]'),
(2, 'SILVER BAROQUE PUFFER JACKET', 2, 3, 'Filled with warm goose down, this padded puffer is accented by the Silver Baroque print and logo at the sleeve. A versatile design, the high-neck style features a removable drawstring hood and ribbed cuffs for extra warmth.', 690000, 'Black', '100% Polyamide', 'M, L', '2022-07-18', '2022-07-18', 1, 40, 'silver1.png', 'silver2.png', 'silver3.png', 'silver4.png', 'silver-baroque-puffer-jacket', '[{\"color\":\"Black\",\"size\":\"M\",\"qty\":\"150\"},{\"color\":\"Black\",\"size\":\"L\",\"qty\":\"150\"}]'),
(3, 'MEDUSA PUFFER JACKET', 2, 3, 'A classic design that adds a luxe touch to off-duty looks, this padded jacket features a streamlined silhouette and subtle Medusa embellishment.', 650000, 'Black', '78% Polyester, 16% Lyocell, 6% Spandex', 'M, L', '2022-07-18', '2022-07-18', 1, 40, 'medusa1.png', 'medusa2.png', 'medusa3.png', 'medusa4.png', 'medusa-puffer-jacket', '[{ \"color\": \"Black\", \"size\": \"M\", \"qty\": \"150\" }, { \"color\": \"Black\", \"size\": \"L\", \"qty\": \"150\" } ]'),
(4, 'LUNAR NEW YEAR TIGER JACKET', 2, 3, 'An elevated staple, this light windbreaker is specially designed for the 2022 Lunar New Year and features the La Greca print. A tiger motif is embroidered on the back.', 455000, 'Black', '78% Polyester, 16% Lyocell, 6% Spandex', 'M, L', '2022-07-18', '2022-07-18', 1, 40, 'tiger1.png', 'tiger2.png', 'tiger3.png', 'tiger4.png', 'lunar-new-year-tiger-jacket', '[{ \"color\": \"Black\", \"size\": \"M\", \"qty\": \"150\" }, { \"color\": \"Black\", \"size\": \"L\", \"qty\": \"150\" } ]'),
(5, 'SUN FLOWER GARLAND SHIRT', 2, 1, 'Crafted in pure viscose, this button-up shirt features the Sun Flower Garland print.', 1450000, 'Black', '78% Polyester, 16% Lyocell, 6% Spandex', 'M, L', '2022-07-18', '2022-07-18', 1, 40, 'sun1.png', 'sun1.png', 'sun1.png', 'sun1.png', 'sun-flower-garland-shirt', '[{ \"color\": \"Black\", \"size\": \"M\", \"qty\": \"150\" }, { \"color\": \"Black\", \"size\": \"L\", \"qty\": \"150\" } ]'),
(6, 'SPACE COUTURE LONG-SLEEVED SHIRT', 2, 1, 'Made from cotton, this long-sleeved shirt has an all-over Space Couture print and buttoned front.', 650000, 'Black', '78% Polyester, 16% Lyocell, 6% Spandex', 'M, L', '2022-07-18', '2022-07-18', 0, 0, 'space1.png', 'space2.png', 'space3.png', 'space4.png', 'space-couture-long-sleeved-shirt', '[{ \"color\": \"Black\", \"size\": \"M\", \"qty\": \"150\" }, { \"color\": \"Black\", \"size\": \"L\", \"qty\": \"150\" } ]'),
(7, 'LA GRECA TURTLE NECK SHIRT', 2, 1, 'Luxurious and oh-so-Versace, this slim fit jumper is crafted from knit silk. The mock neck design features the La Greca pattern - a dynamic and immersive 3D maze that feels like you can step right into it. The new brand code features the Greek Key along with the Versace logo in various sizes and colour combinations.', 450000, 'Pink', '78% Polyester, 16% Lyocell, 6% Spandex', 'M, L', '2022-07-18', '2022-07-18', 1, 40, 'neck1.png', 'neck2.png', 'neck3.png', 'neck4.png', 'la-greca-turtle-neck-shirt', '[{ \"color\": \"Pink\", \"size\": \"M\", \"qty\": \"150\" }, { \"color\": \"Pink\", \"size\": \"L\", \"qty\": \"150\" } ]'),
(8, 'BAROCCO GODDESS SILK SHIRT', 2, 1, 'Quintessentially Versace, this long-sleeved shirt is crafted from pure silk in the Barocco Goddess print featuring a signature Medusa button.', 490000, 'Yellow', '100% Silk', 'M, L', '2022-07-18', '2022-07-18', 0, 0, 'god1.png', 'god2.png', 'god3.png', 'god4.png', 'barocco-goddess-silk-shirt', '[{ \"color\": \"Yellow\", \"size\": \"M\", \"qty\": \"150\" }, { \"color\": \"Yellow\", \"size\": \"L\", \"qty\": \"150\" } ]'),
(9, 'GRECA COLLAR POLO SHIRT', 2, 2, 'Instantly recognizable, this cotton piqué polo shirt features a metallic Greca pattern on the collar. The slim fit style is embellished with a subtle Medusa accent embroidered in gold-tone thread.', 750000, 'Black, White', '78% Polyester, 16% Lyocell, 6% Spandex', 'M, L', '2022-07-18', '2022-07-18', 1, 40, 'col1.png', 'col2.png', 'col3.png', 'col4.png', 'greca-collar-polo-shirt', '[ { \"color\": \"White\", \"size\": \"L\", \"qty\": \"100\" }, { \"color\": \"Black\", \"size\": \"M\", \"qty\": \"150\" }, { \"color\": \"Black\", \"size\": \"L\", \"qty\": \"150\" } ]'),
(10, 'BAROCCO SILK SHIRT', 2, 2, 'Crafted from pure silk this short sleeved button-down shirt features the heritage Barocco print - a beloved house code featuring stylized acanthus leaves on a black background.', 450000, 'Yellow', '100% Silk', 'M, L', '2022-07-18', '2022-07-18', 0, 0, 'baro1.png', 'baro2.png', 'baro3.png', 'baro4.png', 'barocco-silk-shirt', '[{ \"color\": \"Yellow\", \"size\": \"M\", \"qty\": \"150\" }, { \"color\": \"Yellow\", \"size\": \"L\", \"qty\": \"150\" } ]'),
(13, 'V-EMBLEM SHORT-SLEEVED POLO SHIRT', 2, 2, 'Made from cotton piqué, this short-sleeved polo shirt features a point collar, a buttoned placket and a V-Emblem logo at the chest.', 550000, 'Black, White', '78% Polyester, 16% Lyocell, 6% Spandex', 'M, L', '2022-07-18', '2022-07-18', 1, 40, 'v1.png', 'v2.png', 'v3.png', 'v4.png', 'v-emblem-short-sleeved-polo-shirt', '[ { \"color\": \"White\", \"size\": \"L\", \"qty\": \"100\" }, { \"color\": \"Black\", \"size\": \"M\", \"qty\": \"150\" }, { \"color\": \"Black\", \"size\": \"L\", \"qty\": \"150\" } ]'),
(14, 'LOGO SHORT-SLEEVED POLO SHIRT', 2, 2, 'Made from cotton piqué, this short-sleeved polo shirt features a point collar, a buttoned placket and an all-over velvet logo motif.', 700000, 'Black', '78% Polyester, 16% Lyocell, 6% Spandex', 'M, L', '2022-07-18', '2022-07-18', 0, 0, 'polo1.png', 'polo2.png', 'polo3.png', 'polo4.png', 'logo-short-sleeved-polo-shirt', '[{ \"color\": \"Black\", \"size\": \"M\", \"qty\": \"150\" }, { \"color\": \"Black\", \"size\": \"L\", \"qty\": \"150\" } ]'),
(15, 'LOGO SHIRT', 2, 2, 'This cotton blend shirt features logo print accents with wide front pockets. The classic printed style transitions easily from AM to PM.', 450000, 'White', '78% Polyester, 16% Lyocell, 6% Spandex', 'M, L', '2022-07-18', '2022-07-18', 1, 40, 'logo1.png', 'logo2.png', 'logo3.png', 'logo4.png', 'logo-shirt', '[{ \"color\": \"White\", \"size\": \"M\", \"qty\": \"100\" }, { \"color\": \"White\", \"size\": \"L\", \"qty\": \"150\" } ]'),
(16, 'BOOTCUT CARGO PANTS', 1, 4, 'the Bootcut Cargo Pants are designed with our new B fit, which is slim through the thigh and features a slight flare at the leg opening and is constructed from washed camo twill, with a vintage wash and paint splatter, and finished with a contrasting camo panelling', 1450000, 'Camo', '100% Cotton', '28, 29, 30, 31, 32, 33, 34, 36, 38, 40, 42', '2021-05-25', '2021-05-26', 0, 0, 'bootcutcargopants(1).jpg', 'bootcutcargopants(2).jpg', 'bootcutcargopants(3).jpg', 'bootcutcargopants(4).jpg', 'bootcut-cargo-pants', '[{\"color\":\"Camo\",\"size\":\"28\",\"qty\":\"100\"},{\"color\":\"Camo\",\"size\":\"29\",\"qty\":\"149\"},{\"color\":\"Camo\",\"size\":\"30\",\"qty\":\"150\"},{\"color\":\"Camo\",\"size\":\"31\",\"qty\":\"149\"},{\"color\":\"Camo\",\"size\":\"32\",\"qty\":\"100\"},{\"color\":\"Camo\",\"size\":\"33\",\"qty\":\"50\"}],{\"color\":\"Camo\",\"size\":\"34\",\"qty\":\"10\"},{\"color\":\"Camo\",\"size\":\"36\",\"qty\":\"200\"},{\"color\":\"Camo\",\"size\":\"38\",\"qty\":\"79\"},{\"color\":\"Camo\",\"size\":\"40\",\"qty\":\"46\"},{\"color\":\"Camo\",\"size\":\"42\",\"qty\":\"220\"}'),
(17, 'CONSTRAST BOOTCUT SWEATPANTS', 1, 4, 'the Contrast Bootcut Sweatpants are designed with a relaxed fit throughout, featuring an elasticized self waist and leg opening, multi-colored paint splatter throughout, and finished with denim and contrasting panels at the inseam and outseam to provide a flare at the leg opening', 1550000, 'Black', '55% cotton, 45% polyester', 'S, M, L, XL', '2021-05-25', '2021-05-26', 1, 40, 'contrastbootcutsweatpants(1).jpg', 'contrastbootcutsweatpants(2).jpg', 'contrastbootcutsweatpants(3).jpg', 'contrastbootcutsweatpants(4).jpg', 'contrast-bootcut-sweatpants', '[ { \"color\": \"Black\", \"size\": \"S\", \"qty\": \"100\" }, { \"color\": \"Black\", \"size\": \"M\", \"qty\": \"150\" }, { \"color\": \"Black\", \"size\": \"L\", \"qty\": \"150\" }, { \"color\": \"Black\", \"size\": \"XL\", \"qty\": \"160\" } ]'),
(18, 'SNAP II CARGO PANTS', 1, 4, 'the Snap II Cargo Pants are designed with an updated fit that is relaxed throughout the leg, with cargo pockets located on the front thigh and side seam, an elastic waistband, yellow elastic drawcord, and finishing off with a snap enclosure on the outer seam', 1300000, 'Black, Olive, Camo', '100% Cotton', 'S, M, L, XL', '2021-05-25', '2021-05-26', 0, 0, 'snap2cargopants.jpg', 'snap2cargopants(2).jpg', 'snap2cargopants(3).jpg','snap2cargopants(4).jpg', 'snap-2-cargo-pants', '[ { \"color\": \"Black\", \"size\": \"S\", \"qty\": \"100\" }, { \"color\": \"Black\", \"size\": \"XL\", \"qty\": \"150\" }, { \"color\": \"Olive\", \"size\": \"L\", \"qty\": \"150\" }, { \"color\": \"Olive\", \"size\": \"XL\", \"qty\": \"150\" }, { \"color\": \"Camo\", \"size\": \"S\", \"qty\": \"150\" } ]'),
(19, 'SKELETON SWEATPANTS', 1, 4, 'the Skeleton Sweatpants are designed with a relaxed fit throughout, featuring an elasticized self waist and leg opening, tonal cotton drawstrings, and finished with chain stitch embroidery at the outseam', 770000, 'Black, Grey', '100% Cotton', 'S, M, L, XL', '2021-05-25', '2021-05-26', 1, 40, 'skeletonsweatpants(1).jpg', 'skeletonsweatpants(2).jpg', 'skeletonsweatpants(3).jpg', 'skeletonsweatpants(4).jpg', 'skeleton-sweatpants', '[{\"color\":\"Black\",\"size\":\"L\",\"qty\":\"96\"},{\"color\":\"Black\",\"size\":\"M\",\"qty\":\"150\"},{\"color\":\"Grey\",\"size\":\"S\",\"qty\":\"150\"},{\"color\":\"Grey\",\"size\":\"XL\",\"qty\":\"150\"}]'),
(20, 'RELAXED CARGO SWEATPANTS', 1, 4, 'the Relaxed Cargo Sweatpants are designed with a relaxed fit throughout, with an elasticized self-fabric waist, cargo pockets with velcro closures, and finished with a standard hem at the leg-opening', 670000, 'Grey', '100% Cotton', 'S, M, L, XL', '2021-05-25', '2021-05-26', 0, 0, 'RelaxedCargoSweatpants(1).jpg', 'RelaxedCargoSweatpants(2).jpg', 'RelaxedCargoSweatpants(3).jpg', 'RelaxedCargoSweatpants(4).jpg', 'relaxed-cargo-pants', '[ { \"color\": \"Grey\", \"size\": \"S\", \"qty\": \"100\" }, { \"color\": \"Grey\", \"size\": \"M\", \"qty\": \"150\" }, { \"color\": \"Grey\", \"size\": \"L\", \"qty\": \"150\" }, { \"color\": \"Grey\", \"size\": \"XL\", \"qty\": \"150\" } ]'),
(21, 'TRACK PANTS', 1, 4, 'the track pants are designed with a custom-developed, two-layer tricot fabric, featuring a coated polyester layer on the outside and cotton wicking layer on the inside, as well as a contrast panel down the side, specially developed matching ribbing, and a 10 zipper at the inseam', 650000, 'Black', '55% Polyester, 45% Cotton', 'S, M, L, XL', '2021-05-25', '2021-05-26', 1, 40, 'trackpants(1).jpg', 'trackpants(2).jpg', 'trackpants(3).jpg', 'trackpants(4).jpg', 'track-pants', '[ { \"color\": \"Black\", \"size\": \"S\", \"qty\": \"100\" }, { \"color\": \"Black\", \"size\": \"M\", \"qty\": \"150\" }, { \"color\": \"Black\", \"size\": \"L\", \"qty\": \"150\" }, { \"color\": \"Black\", \"size\": \"XL\", \"qty\": \"50\" } ]'),
(22, 'EVERYDAY MESH SHORTS', 1, 5, 'the Everyday Mesh Shorts are constructed with a custom-knit mesh fabric in a relaxed fit. The short feature an elasticized waist in self fabric, welt pockets at the outseam, and a tonal cotton drawstring', 992000, 'Black, Off-white', '100% Polyester', 'M, L, XL', '2021-05-25', '2021-05-26', 0, 0, 'everydaymeshshorts(1).jpg', 'everydaymeshshorts(2).jpg', 'everydaymeshshorts(3).jpg', 'everydaymeshshorts(4).jpg', 'everyday-mesh-shorts', '[ { \"color\": \"Off-white\", \"size\": \"L\", \"qty\": \"100\" }, { \"color\": \"Black\", \"size\": \"M\", \"qty\": \"150\" }, { \"color\": \"Black\", \"size\": \"L\", \"qty\": \"150\" } ]'),
(23, 'POLY COTTON WALKING SHORTS', 1, 5, 'the Poly Cotton Walking Shorts are constructed with a polyester fabric in a relaxed fit. The shorts combine classic basketball short details like an elasticized waistband with drawstring and contrasting taping at the hem with modern features such as zipper pockets at the front and welt pockets in the back', 943000, 'Black', '100% Polyester', 'S, M, L, XL', '2021-05-25', '2021-05-26', 1, 40, 'polycottonwalkingshorts(1).jpg', 'polycottonwalkingshorts(2).jpg', 'polycottonwalkingshorts(3).jpg', 'polycottonwalkingshorts(4).jpg', 'poly-cotton-walking-shorts', '[ { \"color\": \"Black\", \"size\": \"S\", \"qty\": \"100\" }, { \"color\": \"Black\", \"size\": \"M\", \"qty\": \"150\" }, { \"color\": \"Black\", \"size\": \"L\", \"qty\": \"150\" }, { \"color\": \"Black\", \"size\": \"XL\", \"qty\": \"200\" } ]'),
(24, 'SNAP WESTERN PANTS', 1, 4, 'the Snap Western Pants are designed with a relaxed fit throughout, self-fabric paneling on the front with rivets, snap closures on the outseam with a 10" zipper underneath, and finished with a built in belt made of self material', 1400000, 'Black, Pale tan, Pink', '100% Cotton', '28, 29, 30, 31, 32, 33, 34, 36, 38, 40, 42', '2021-05-25', '2021-05-26', 0, 0, 'snapwesternpants(1).jpg', 'snapwesternpants(2).jpg', 'snapwesternpants(3).jpg', 'snapwesternpants(4).jpg', 'snap-western-pants', '[ { \"color\": \"Black\", \"size\": \"28\", \"qty\": \"100\" }, { \"color\": \"Black\", \"size\": \"32\", \"qty\": \"150\" }, { \"color\": \"Black\", \"size\": \"42\", \"qty\": \"150\" }, { \"color\": \"Pale tan\", \"size\": \"33\", \"qty\": \"50\" }, { \"color\": \"Pale tan\", \"size\": \"36\", \"qty\": \"150\" }, { \"color\": \"Pale tan\", \"size\": \"40\", \"qty\": \"150\" }, { \"color\": \"Pink\", \"size\": \"29\", \"qty\": \"100\" }, { \"color\": \"Pink\", \"size\": \"38\", \"qty\": \"79\" }, { \"color\": \"Pink\", \"size\": \"42\", \"qty\": \"150\" } ]'),
(25, 'M1 DENIM', 1, 4, 'developed in los angeles, the original blue m1 denim is designed with a relaxed fit through the thigh that tapers from the knee to the ankle, featuring distress details at the knee and thigh, finishing off with a 10 concealed zipper on the inseam for a carefully optimized fit', 1020000, 'Black, Blue', '100% Cotton', '28, 29, 30, 31, 32, 33, 34, 36, 38, 40', '2021-05-25', '2021-05-26', 1, 40, 'm1denim(1).jpg', 'm1denim(2).jpg', 'm1denim(3).jpg', 'm1denim(4).jpg', 'm1-denim', '[ { \"color\": \"Black\", \"size\": \"30", \"qty\": \"100\" }, { \"color\": \"Black\", \"size\": \"38\", \"qty\": \"150\" }, { \"color\": \"Black\", \"size\": \"40\", \"qty\": \"150\" }, { \"color\": \"Blue\", \"size\": \"28\", \"qty\": \"150\" }, { \"color\": \"Blue\", \"size\": \"31\", \"qty\": \"150\" }, { \"color\": \"Blue\", \"size\": \"32\", \"qty\": \"150\" }, { \"color\": \"Blue\", \"size\": \"34\", \"qty\": \"150\" }, { \"color\": \"Blue\", \"size\": \"40\", \"qty\": \"150\" } ]'),
(26, 'Cloudfoam Pure 2.0', 3, 6, 'Step into these shoes for crisp, clean style and comfort. Thanks to their heritage adidas vibes, these running-inspired trainers make it easy to look calm, cool and collected. Whether you are hanging out with friends or trying not to get frazzled as you tick off your weekend to-do list, stay comfortable through it all.</br></br>This product is made with Primegreen, a series of high-performance recycled materials.', 1250000, 'Cloud White, Cloud White, Core Black', 'Primegreen, Textile upper, Cloudfoam midsole', '39, 40, 41, 42', '2022-06-27', '2022-06-28', 0, 0, 'Cloudfoam_Pure_20_1.png', 'Cloudfoam_Pure_20_2.png', 'Cloudfoam_Pure_20_3.png', 'Cloudfoam_Pure_20_4.png', 'cloudfoam-pure-20', '[{\"color\":\"White\",\"size\":\"39\",\"qty\":\"72\"},{\"color\":\"White\",\"size\":\"40\",\"qty\":\"46\"},{\"color\":\"White\",\"size\":\"41\",\"qty\":\"211\"}, {\"color\":\"White\",\"size\":\"42\",\"qty\":\"193\"}]'),
(27, 'Fluidflow 2.0', 3, 6, 'Maintain your balance, from stride to stride and one week to the next. These running shoes are designed to keep you moving towards your goals. The breathable knit upper and flexible Bounce cushioning combine for a lightweight and breezy feel. 3-Stripes signal your adidas pride.</br></br>Made in part with recycled content generated from production waste, e.g. cutting scraps, and post-consumer household waste to avoid the larger environmental impact of producing virgin content.', 960000, 'Core Black / Core Black / Solar Yellow', 'Knit textile upper, Breathable feel, Bounce midsole', '38, 39, 40, 41, 42', '2022-06-21', '2022-06-22', 1, 5, 'Fluidflow_20_1.png', 'Fluidflow_20_2.png', 'Fluidflow_20_3.png', 'Fluidflow_20_4.png', 'fluidflow-20', '[ { \"color\": \"Black\", \"size\": \"38\", \"qty\": \"137\" }, { \"color\": \"Black\", \"size\": \"39\", \"qty\": \"7\" }, { \"color\": \"Black\", \"size\": \"40\", \"qty\": \"22\" }, { \"color\": \"Black\", \"size\": \"41\", \"qty\": \"23\" }, { \"color\": \"Black\", \"size\": \"42\", \"qty\": \"2\" } ]'),
(35, 'Rich Mnisi NMD_R1', 3, 6, 'Romance is a beautiful thing, and it is blooming across your adidas NMD shoes. Pop-art roses from renowned South African designer Rich Mnisi stand out on the iconic silhouette in a vibrant celebration of love. And if that has not already stolen your heart, the comfortable feel is sure to seal the deal. BOOST in the midsole makes every step feel good.</br></br>The upper of this shoe is made with a high-performance yarn which contains at least 50% Parley Ocean Plastic —  reimagined plastic waste, intercepted on remote islands, beaches, coastal communities and shorelines, preventing it from polluting our ocean. The other 50% of the yarn is recycled polyester.', 2100000, 'Cloud White, Supplier Colour, Clear Pink', '50% Parley Ocean Plastic, 50% recycled polyester, BOOST midsole', '38, 39, 40', '2022-04-09', '2022-04-10', 0, 0, 'Rich_Mnisi_NMD_R1_1.png', 'Rich_Mnisi_NMD_R1_2.png', 'Rich_Mnisi_NMD_R1_3.png', 'Rich_Mnisi_NMD_R1_4.png', 'rich-mnisi-nmdr1', '[{\"color\":\"White\",\"size\":\"38\",\"qty\":\"56\"},{\"color\":\"White\",\"size\":\"39\",\"qty\":\"101\"},{\"color\":\"White\",\"size\":\"40\",\"qty\":\"9\"}]'),
(36, 'Ultraboost 5.0 DNA', 3, 6, 'When it comes to comfort, nothing beats the Ultraboost. While the design got its start on the track, these adidas running shoes have stepped firmly into the style realm with polka dots on the adidas PRIMEKNIT upper. Ride through your day on a responsive BOOST midsole that keeps you confident in every jump, turn and stride.</br></br>The upper of this shoe is made with a high-performance yarn which contains at least 50% Parley Ocean Plastic — reimagined plastic waste, intercepted on remote islands, beaches, coastal communities and shorelines, preventing it from polluting our ocean. The other 50% of the yarn is recycled polyester.', 3860000, 'Black, White', '50% Parley Ocean Plastic, 50% recycled polyester, BOOST midsole', '39, 40, 41, 42, 43', '2022-07-15', '2022-07-16', 0, 0, 'Ultraboost_50_DNA1.png', 'Ultraboost_50_DNA2.png', 'Ultraboost_50_DNA3.png', 'Ultraboost_50_DNA4.png', 'ultraboost-50-dna', '[ { \"color\": \"White\", \"size\": \"39\", \"qty\": \"123\" },{ \"color\": \"White\", \"size\": \"40\", \"qty\": \"111\" }, { \"color\": \"Black\", \"size\": \"39\", \"qty\": \"88\" }, { \"color\": \"Black\", \"size\": \"41\", \"qty\": \"5\" } ]'),
(37, 'Ozelia', 3, 6, 'The 90s served up some serious looks, and we have infused some of the best of them into these adidas Ozelia Shoes. We have also added modern comforts, like Adiprene cushioning that makes sure every step you take is greeted with plush goodness, and a snug fit that hugs the foot.', 1440000, 'Black, White', '25% of the components used to make the upper are made with a minimum of 50% recycled content', '38, 41, 42, 43', '2022-07-15', '2022-07-16', 0, 0, 'Ozelia_1.png', 'Ozelia_2.png', 'Ozelia_3.png', 'Ozelia_4.png', 'ozelia', '[ { \"color\": \"White\", \"size\": \"41\", \"qty\": \"14\" },{ \"color\": \"White\", \"size\": \"42\", \"qty\": \"99\" }, { \"color\": \"Black\", \"size\": \"43\", \"qty\": \"13\" } ]'),
(38, 'X9000L4 HEAT.RDY', 3, 6, 'Stay on pace through the warmest part of the day. These adidas HEAT.RDY running shoes have a mesh upper that welcomes cooling airflow on short- and middle-distance runs. BOOST delivers incredible energy return and instant comfort to keep you going. The adidas PRIMEKNIT upper wraps the foot with a supportive fit that enhances movement.</br></br>Made with a series of recycled materials, this upper features at least 50% recycled content. This product represents just one of our solutions to help end plastic waste.', 1700000, 'White', 'Adidas PRIMEKNIT textile upper, upper contains a minimum of 50% recycled content', '37, 42, 43, 45, 46', '2021-11-19', '2021-11-20', 1, 40, 'X9000L4_1.png', 'X9000L4_2.png', 'X9000L4_3.png', 'X9000L4_4.png', 'x9000l4-heatrdy', '[ { \"color\": \"White\", \"size\": \"37\", \"qty\": \"44\" },{ \"color\": \"White\", \"size\": \"43\", \"qty\": \"133\" }, { \"color\": \"White\", \"size\": \"45\", \"qty\": \"87\" } ]'),
(39, 'Nike Air Force 1 07', 3, 6, 'The radiance lives on in the Nike Air Force 1 07, the b-ball OG that puts a fresh spin on what you know best: durably stitched overlays, clean finishes and the perfect amount of flash to make you shine.', 2649000, 'White', 'Foam midsole, Perforations on the toe, Rubber sole', '38, 39, 40, 41', '2021-11-20', '2021-11-21', 0, 0, 'airforce1_1.png', 'airforce1_2.png', 'airforce1_3.png', 'airforce1_4.png', 'nike-air-force-1-07', '[ { \"color\": \"White\", \"size\": \"38\", \"qty\": \"21\" },{ \"color\": \"White\", \"size\": \"39\", \"qty\": \"11\" }]'),
(40, 'Air Jordan 1 Retro High OG', 3, 6, 'Familiar but always fresh, the iconic Air Jordan 1 is remastered for today sneakerhead culture. This Retro High OG version goes all in with premium leather, comfortable cushioning and classic design details.', 4999000, 'Gold,White', 'Perforated toe, Rubber traction, Foam sole', '38, 39, 40, 41', '2021-11-20', '2021-11-21', 0, 0, 'jordan_retro_1.png', 'jordan_retro_2.png', 'jordan_retro_3.png', 'jordan_retro_4.png', 'air-jordan-1-retro-high-og', '[ { \"color\": \"White\", \"size\": \"40\", \"qty\": \"71\" },{ \"color\": \"Gold\", \"size\": \"40\", \"qty\": \"93\" }, { \"color\": \"Gold\", \"size\": \"41\", \"qty\": \"137\" }]'),
(41, 'Air Jordan XXXVI Low', 3, 6, 'From the perimeter to the hoop, take the court with confidence. This is one of the lightest Air Jordan game shoes to date, with a minimal but durable leno-weave upper reinforced with tough plastic details. Meanwhile, Zoom Air cushioning delivers energy return and elite responsiveness. The game asks for everything—now you have the shoe to match.', 5129000, 'White', 'See-through leno-weave upper, Wraparound ribbon of plastic', '38, 39, 40, 41', '2021-11-20', '2021-11-21', 0, 0, 'xxxvi_1.png', 'xxxvi_2.png', 'xxxvi_3.png', 'xxxvi_4.png', 'air-jordan-xxxvi-low', '[ { \"color\": \"White\", \"size\": \"38\", \"qty\": \"15\" },{ \"color\": \"White\", \"size\": \"39\", \"qty\": \"11\" }, { \"color\": \"Gold\", \"size\": \"41\", \"qty\": \"21\" }]'),
(42, 'Nike Air Max Flyknit Racer', 3, 6, 'Paying homage to both heritage and innovation, we have blended 2 icons (old and new) to go beyond what is expected in the Nike Air Max Flyknit Racer. Incredibly light and airy Flyknit is paired with oh-so-comfy Air Max cushioning. Lace up and let your feet do the talking.', 4699000, 'Pink', 'Soft synthetic suede detailing, Foam midsole', '38, 39, 40, 41', '2021-11-20', '2021-11-21', 0, 0, 'racer_1.png', 'racer_2.png', 'racer_3.png', 'racer_4.png', 'nike-air-max-flyknit-racer', '[ { \"color\": \"Pink\", \"size\": \"39\", \"qty\": \"18\" },{ \"color\": \"Pink\", \"size\": \"41\", \"qty\": \"33\" }]');
-- --------------------------------------------------------

--
-- Table structure for table `subcategory`
--

CREATE TABLE `subcategory` (
  `Id` int(11) NOT NULL,
  `Name` varchar(250) DEFAULT NULL,
  `CategoryId` int(11) DEFAULT NULL,
  `Alias` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `subcategory`
--

INSERT INTO `subcategory` (`Id`, `Name`, `CategoryId`, `Alias`) VALUES
(1, 'Shirt', 2, 'shirt'),
(2, 'T-Shirt', 2, 't-shirt'),
(3, 'Coat', 2, 'coat'),
(4, 'Jeans', 1, 'jeans'),
(5, 'Short', 1, 'short'),
(6, 'Shoes', 3, 'shoes');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `Id` int(11) NOT NULL,
  `Username` varchar(50) DEFAULT NULL,
  `Password` varchar(50) DEFAULT NULL,
  `is_admin` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`Id`, `Username`, `Password`, `is_admin`) VALUES
(27, 'vinhtt', 'bef0aee9aab89ef9fe4074922c6dc77d', 1),
(28, 'huypv', 'a78ae904c4a34aa262ea2951e2e8a8d9', 1),
(29, 'hieupt', '489745b64cc67bb609852f25b03aedcc', 0),
(32, 'huynt', '0b221b8c2afbacad8dfad50afec2e515', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`Id`),
  ADD KEY `user_orders` (`Uid`);

--
-- Indexes for table `order_detail`
--
ALTER TABLE `order_detail`
  ADD PRIMARY KEY (`Id`),
  ADD KEY `FK_order_detail_od1` (`OrderId`),
  ADD KEY `FK_order_detail_od2` (`ProductId`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`Id`),
  ADD KEY `FK_Product_Categories` (`CategoryId`),
  ADD KEY `FK_Product_Subcategory` (`SubCategoryId`);

--
-- Indexes for table `subcategory`
--
ALTER TABLE `subcategory`
  ADD PRIMARY KEY (`Id`),
  ADD KEY `FK_Id_Category1` (`CategoryId`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`Id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `order_detail`
--
ALTER TABLE `order_detail`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=44;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT for table `subcategory`
--
ALTER TABLE `subcategory`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- Constraints for table `orders`
--
ALTER TABLE `orders`
  ADD CONSTRAINT `user_orders` FOREIGN KEY (`Uid`) REFERENCES `user` (`Id`);

--
-- Constraints for table `order_detail`
--
ALTER TABLE `order_detail`
  ADD CONSTRAINT `FK_order_detail_od1` FOREIGN KEY (`OrderId`) REFERENCES `orders` (`Id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `FK_order_detail_od2` FOREIGN KEY (`ProductId`) REFERENCES `product` (`Id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `product`
--
ALTER TABLE `product`
  ADD CONSTRAINT `FK_Product_Categories` FOREIGN KEY (`CategoryId`) REFERENCES `categories` (`Id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `FK_Product_Subcategory` FOREIGN KEY (`SubCategoryId`) REFERENCES `subcategory` (`Id`);

--
-- Constraints for table `subcategory`
--
ALTER TABLE `subcategory`
  ADD CONSTRAINT `FK_Id_Category1` FOREIGN KEY (`CategoryId`) REFERENCES `categories` (`Id`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

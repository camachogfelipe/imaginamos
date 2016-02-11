-- phpMyAdmin SQL Dump
-- version 2.6.1
-- http://www.phpmyadmin.net
-- 
-- Servidor: localhost
-- Tiempo de generación: 16-09-2013 a las 09:29:41
-- Versión del servidor: 5.5.27
-- Versión de PHP: 5.3.17

SET FOREIGN_KEY_CHECKS=0;
-- 
-- Base de datos: `gruponorth`
-- 

-- --------------------------------------------------------

-- 
-- Estructura de tabla para la tabla `Country`
-- 
-- Creación: 13-09-2013 a las 17:00:38
-- Última actualización: 13-09-2013 a las 17:00:38
-- 

DROP TABLE IF EXISTS `Country`;
CREATE TABLE IF NOT EXISTS `Country` (
  `Code` char(3) NOT NULL DEFAULT '',
  `Name` char(52) NOT NULL DEFAULT '',
  `Continent` enum('Asia','Europe','North America','Africa','Oceania','Antarctica','South America') NOT NULL DEFAULT 'Asia',
  `Region` char(26) NOT NULL DEFAULT '',
  `SurfaceArea` float(10,2) NOT NULL DEFAULT '0.00',
  `IndepYear` smallint(6) DEFAULT NULL,
  `Population` int(11) NOT NULL DEFAULT '0',
  `LifeExpectancy` float(3,1) DEFAULT NULL,
  `GNP` float(10,2) DEFAULT NULL,
  `GNPOld` float(10,2) DEFAULT NULL,
  `LocalName` char(45) NOT NULL DEFAULT '',
  `GovernmentForm` char(45) NOT NULL DEFAULT '',
  `HeadOfState` char(60) DEFAULT NULL,
  `Capital` int(11) DEFAULT NULL,
  `Code2` char(2) NOT NULL DEFAULT '',
  PRIMARY KEY (`Code`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- 
-- Volcar la base de datos para la tabla `Country`
-- 

INSERT INTO `Country` VALUES ('ABW', 'Aruba', 'North America', 'Caribbean', 193.00, 0, 103000, 78.4, 828.00, 793.00, 'Aruba', 'Nonmetropolitan Territory of The Netherlands', 'Beatrix', 129, 'AW');
INSERT INTO `Country` VALUES ('AFG', 'Afghanistan', 'Asia', 'Southern and Central Asia', 652090.00, 1919, 22720000, 45.9, 5976.00, 0.00, 'Afganistan/Afqanestan', 'Islamic Emirate', 'Mohammad Omar', 1, 'AF');
INSERT INTO `Country` VALUES ('AGO', 'Angola', 'Africa', 'Central Africa', 1246700.00, 1975, 12878000, 38.3, 6648.00, 7984.00, 'Angola', 'Republic', 'José Eduardo dos Santos', 56, 'AO');
INSERT INTO `Country` VALUES ('AIA', 'Anguilla', 'North America', 'Caribbean', 96.00, 0, 8000, 76.1, 63.20, 0.00, 'Anguilla', 'Dependent Territory of the UK', 'Elisabeth II', 62, 'AI');
INSERT INTO `Country` VALUES ('ALB', 'Albania', 'Europe', 'Southern Europe', 28748.00, 1912, 3401200, 71.6, 3205.00, 2500.00, 'Shqipëria', 'Republic', 'Rexhep Mejdani', 34, 'AL');
INSERT INTO `Country` VALUES ('AND', 'Andorra', 'Europe', 'Southern Europe', 468.00, 1278, 78000, 83.5, 1630.00, 0.00, 'Andorra', 'Parliamentary Coprincipality', '', 55, 'AD');
INSERT INTO `Country` VALUES ('ANT', 'Netherlands Antilles', 'North America', 'Caribbean', 800.00, 0, 217000, 74.7, 1941.00, 0.00, 'Nederlandse Antillen', 'Nonmetropolitan Territory of The Netherlands', 'Beatrix', 33, 'AN');
INSERT INTO `Country` VALUES ('ARE', 'United Arab Emirates', 'Asia', 'Middle East', 83600.00, 1971, 2441000, 74.1, 37966.00, 36846.00, 'Al-Imarat al-´Arabiya al-Muttahida', 'Emirate Federation', 'Zayid bin Sultan al-Nahayan', 65, 'AE');
INSERT INTO `Country` VALUES ('ARG', 'Argentina', 'South America', 'South America', 2780400.00, 1816, 37032000, 75.1, 340238.00, 323310.00, 'Argentina', 'Federal Republic', 'Fernando de la Rúa', 69, 'AR');
INSERT INTO `Country` VALUES ('ARM', 'Armenia', 'Asia', 'Middle East', 29800.00, 1991, 3520000, 66.4, 1813.00, 1627.00, 'Hajastan', 'Republic', 'Robert Kotšarjan', 126, 'AM');
INSERT INTO `Country` VALUES ('ASM', 'American Samoa', 'Oceania', 'Polynesia', 199.00, 0, 68000, 75.1, 334.00, 0.00, 'Amerika Samoa', 'US Territory', 'George W. Bush', 54, 'AS');
INSERT INTO `Country` VALUES ('ATA', 'Antarctica', 'Antarctica', 'Antarctica', 13120000.00, 0, 0, 0.0, 0.00, 0.00, '–', 'Co-administrated', '', 0, 'AQ');
INSERT INTO `Country` VALUES ('ATF', 'French Southern territories', 'Antarctica', 'Antarctica', 7780.00, 0, 0, 0.0, 0.00, 0.00, 'Terres australes françaises', 'Nonmetropolitan Territory of France', 'Jacques Chirac', 0, 'TF');
INSERT INTO `Country` VALUES ('ATG', 'Antigua and Barbuda', 'North America', 'Caribbean', 442.00, 1981, 68000, 70.5, 612.00, 584.00, 'Antigua and Barbuda', 'Constitutional Monarchy', 'Elisabeth II', 63, 'AG');
INSERT INTO `Country` VALUES ('AUS', 'Australia', 'Oceania', 'Australia and New Zealand', 7741220.00, 1901, 18886000, 79.8, 351182.00, 392911.00, 'Australia', 'Constitutional Monarchy, Federation', 'Elisabeth II', 135, 'AU');
INSERT INTO `Country` VALUES ('AUT', 'Austria', 'Europe', 'Western Europe', 83859.00, 1918, 8091800, 77.7, 211860.00, 206025.00, 'Österreich', 'Federal Republic', 'Thomas Klestil', 1523, 'AT');
INSERT INTO `Country` VALUES ('AZE', 'Azerbaijan', 'Asia', 'Middle East', 86600.00, 1991, 7734000, 62.9, 4127.00, 4100.00, 'Azärbaycan', 'Federal Republic', 'Heydär Äliyev', 144, 'AZ');
INSERT INTO `Country` VALUES ('BDI', 'Burundi', 'Africa', 'Eastern Africa', 27834.00, 1962, 6695000, 46.2, 903.00, 982.00, 'Burundi/Uburundi', 'Republic', 'Pierre Buyoya', 552, 'BI');
INSERT INTO `Country` VALUES ('BEL', 'Belgium', 'Europe', 'Western Europe', 30518.00, 1830, 10239000, 77.8, 249704.00, 243948.00, 'België/Belgique', 'Constitutional Monarchy, Federation', 'Albert II', 179, 'BE');
INSERT INTO `Country` VALUES ('BEN', 'Benin', 'Africa', 'Western Africa', 112622.00, 1960, 6097000, 50.2, 2357.00, 2141.00, 'Bénin', 'Republic', 'Mathieu Kérékou', 187, 'BJ');
INSERT INTO `Country` VALUES ('BFA', 'Burkina Faso', 'Africa', 'Western Africa', 274000.00, 1960, 11937000, 46.7, 2425.00, 2201.00, 'Burkina Faso', 'Republic', 'Blaise Compaoré', 549, 'BF');
INSERT INTO `Country` VALUES ('BGD', 'Bangladesh', 'Asia', 'Southern and Central Asia', 143998.00, 1971, 129155000, 60.2, 32852.00, 31966.00, 'Bangladesh', 'Republic', 'Shahabuddin Ahmad', 150, 'BD');
INSERT INTO `Country` VALUES ('BGR', 'Bulgaria', 'Europe', 'Eastern Europe', 110994.00, 1908, 8190900, 70.9, 12178.00, 10169.00, 'Balgarija', 'Republic', 'Petar Stojanov', 539, 'BG');
INSERT INTO `Country` VALUES ('BHR', 'Bahrain', 'Asia', 'Middle East', 694.00, 1971, 617000, 73.0, 6366.00, 6097.00, 'Al-Bahrayn', 'Monarchy (Emirate)', 'Hamad ibn Isa al-Khalifa', 149, 'BH');
INSERT INTO `Country` VALUES ('BHS', 'Bahamas', 'North America', 'Caribbean', 13878.00, 1973, 307000, 71.1, 3527.00, 3347.00, 'The Bahamas', 'Constitutional Monarchy', 'Elisabeth II', 148, 'BS');
INSERT INTO `Country` VALUES ('BIH', 'Bosnia and Herzegovina', 'Europe', 'Southern Europe', 51197.00, 1992, 3972000, 71.5, 2841.00, 0.00, 'Bosna i Hercegovina', 'Federal Republic', 'Ante Jelavic', 201, 'BA');
INSERT INTO `Country` VALUES ('BLR', 'Belarus', 'Europe', 'Eastern Europe', 207600.00, 1991, 10236000, 68.0, 13714.00, 0.00, 'Belarus', 'Republic', 'Aljaksandr Lukašenka', 3520, 'BY');
INSERT INTO `Country` VALUES ('BLZ', 'Belize', 'North America', 'Central America', 22696.00, 1981, 241000, 70.9, 630.00, 616.00, 'Belize', 'Constitutional Monarchy', 'Elisabeth II', 185, 'BZ');
INSERT INTO `Country` VALUES ('BMU', 'Bermuda', 'North America', 'North America', 53.00, 0, 65000, 76.9, 2328.00, 2190.00, 'Bermuda', 'Dependent Territory of the UK', 'Elisabeth II', 191, 'BM');
INSERT INTO `Country` VALUES ('BOL', 'Bolivia', 'South America', 'South America', 1098581.00, 1825, 8329000, 63.7, 8571.00, 7967.00, 'Bolivia', 'Republic', 'Hugo Bánzer Suárez', 194, 'BO');
INSERT INTO `Country` VALUES ('BRA', 'Brazil', 'South America', 'South America', 8547403.00, 1822, 170115000, 62.9, 776739.00, 804108.00, 'Brasil', 'Federal Republic', 'Fernando Henrique Cardoso', 211, 'BR');
INSERT INTO `Country` VALUES ('BRB', 'Barbados', 'North America', 'Caribbean', 430.00, 1966, 270000, 73.0, 2223.00, 2186.00, 'Barbados', 'Constitutional Monarchy', 'Elisabeth II', 174, 'BB');
INSERT INTO `Country` VALUES ('BRN', 'Brunei', 'Asia', 'Southeast Asia', 5765.00, 1984, 328000, 73.6, 11705.00, 12460.00, 'Brunei Darussalam', 'Monarchy (Sultanate)', 'Haji Hassan al-Bolkiah', 538, 'BN');
INSERT INTO `Country` VALUES ('BTN', 'Bhutan', 'Asia', 'Southern and Central Asia', 47000.00, 1910, 2124000, 52.4, 372.00, 383.00, 'Druk-Yul', 'Monarchy', 'Jigme Singye Wangchuk', 192, 'BT');
INSERT INTO `Country` VALUES ('BVT', 'Bouvet Island', 'Antarctica', 'Antarctica', 59.00, 0, 0, 0.0, 0.00, 0.00, 'Bouvetøya', 'Dependent Territory of Norway', 'Harald V', 0, 'BV');
INSERT INTO `Country` VALUES ('BWA', 'Botswana', 'Africa', 'Southern Africa', 581730.00, 1966, 1622000, 39.3, 4834.00, 4935.00, 'Botswana', 'Republic', 'Festus G. Mogae', 204, 'BW');
INSERT INTO `Country` VALUES ('CAF', 'Central African Republic', 'Africa', 'Central Africa', 622984.00, 1960, 3615000, 44.0, 1054.00, 993.00, 'Centrafrique/Bê-Afrîka', 'Republic', 'Ange-Félix Patassé', 1889, 'CF');
INSERT INTO `Country` VALUES ('CAN', 'Canada', 'North America', 'North America', 9970610.00, 1867, 31147000, 79.4, 598862.00, 625626.00, 'Canada', 'Constitutional Monarchy, Federation', 'Elisabeth II', 1822, 'CA');
INSERT INTO `Country` VALUES ('CCK', 'Cocos (Keeling) Islands', 'Oceania', 'Australia and New Zealand', 14.00, 0, 600, 0.0, 0.00, 0.00, 'Cocos (Keeling) Islands', 'Territory of Australia', 'Elisabeth II', 2317, 'CC');
INSERT INTO `Country` VALUES ('CHE', 'Switzerland', 'Europe', 'Western Europe', 41284.00, 1499, 7160400, 79.6, 264478.00, 256092.00, 'Schweiz/Suisse/Svizzera/Svizra', 'Federation', 'Adolf Ogi', 3248, 'CH');
INSERT INTO `Country` VALUES ('CHL', 'Chile', 'South America', 'South America', 756626.00, 1810, 15211000, 75.7, 72949.00, 75780.00, 'Chile', 'Republic', 'Ricardo Lagos Escobar', 554, 'CL');
INSERT INTO `Country` VALUES ('CHN', 'China', 'Asia', 'Eastern Asia', 9572900.00, -1523, 1277558000, 71.4, 982268.00, 917719.00, 'Zhongquo', 'People''sRepublic', 'Jiang Zemin', 1891, 'CN');
INSERT INTO `Country` VALUES ('CIV', 'Côte d’Ivoire', 'Africa', 'Western Africa', 322463.00, 1960, 14786000, 45.2, 11345.00, 10285.00, 'Côte d’Ivoire', 'Republic', 'Laurent Gbagbo', 2814, 'CI');
INSERT INTO `Country` VALUES ('CMR', 'Cameroon', 'Africa', 'Central Africa', 475442.00, 1960, 15085000, 54.8, 9174.00, 8596.00, 'Cameroun/Cameroon', 'Republic', 'Paul Biya', 1804, 'CM');
INSERT INTO `Country` VALUES ('COD', 'Congo, The Democratic Republic of the', 'Africa', 'Central Africa', 2344858.00, 1960, 51654000, 48.8, 6964.00, 2474.00, 'République Démocratique du Congo', 'Republic', 'Joseph Kabila', 2298, 'CD');
INSERT INTO `Country` VALUES ('COG', 'Congo', 'Africa', 'Central Africa', 342000.00, 1960, 2943000, 47.4, 2108.00, 2287.00, 'Congo', 'Republic', 'Denis Sassou-Nguesso', 2296, 'CG');
INSERT INTO `Country` VALUES ('COK', 'Cook Islands', 'Oceania', 'Polynesia', 236.00, 0, 20000, 71.1, 100.00, 0.00, 'The Cook Islands', 'Nonmetropolitan Territory of New Zealand', 'Elisabeth II', 583, 'CK');
INSERT INTO `Country` VALUES ('COL', 'Colombia', 'South America', 'South America', 1138914.00, 1810, 42321000, 70.3, 102896.00, 105116.00, 'Colombia', 'Republic', 'Andrés Pastrana Arango', 2257, 'CO');
INSERT INTO `Country` VALUES ('COM', 'Comoros', 'Africa', 'Eastern Africa', 1862.00, 1975, 578000, 60.0, 4401.00, 4361.00, 'Komori/Comores', 'Republic', 'Azali Assoumani', 2295, 'KM');
INSERT INTO `Country` VALUES ('CPV', 'Cape Verde', 'Africa', 'Western Africa', 4033.00, 1975, 428000, 68.9, 435.00, 420.00, 'Cabo Verde', 'Republic', 'António Mascarenhas Monteiro', 1859, 'CV');
INSERT INTO `Country` VALUES ('CRI', 'Costa Rica', 'North America', 'Central America', 51100.00, 1821, 4023000, 75.8, 10226.00, 9757.00, 'Costa Rica', 'Republic', 'Miguel Ángel Rodríguez Echeverría', 584, 'CR');
INSERT INTO `Country` VALUES ('CUB', 'Cuba', 'North America', 'Caribbean', 110861.00, 1902, 11201000, 76.2, 17843.00, 18862.00, 'Cuba', 'Socialistic Republic', 'Fidel Castro Ruz', 2413, 'CU');
INSERT INTO `Country` VALUES ('CXR', 'Christmas Island', 'Oceania', 'Australia and New Zealand', 135.00, 0, 2500, 0.0, 0.00, 0.00, 'Christmas Island', 'Territory of Australia', 'Elisabeth II', 1791, 'CX');
INSERT INTO `Country` VALUES ('CYM', 'Cayman Islands', 'North America', 'Caribbean', 264.00, 0, 38000, 78.9, 1263.00, 1186.00, 'Cayman Islands', 'Dependent Territory of the UK', 'Elisabeth II', 553, 'KY');
INSERT INTO `Country` VALUES ('CYP', 'Cyprus', 'Asia', 'Middle East', 9251.00, 1960, 754700, 76.7, 9333.00, 8246.00, 'Kýpros/Kibris', 'Republic', 'Glafkos Klerides', 2430, 'CY');
INSERT INTO `Country` VALUES ('CZE', 'Czech Republic', 'Europe', 'Eastern Europe', 78866.00, 1993, 10278100, 74.5, 55017.00, 52037.00, '¸esko', 'Republic', 'Václav Havel', 3339, 'CZ');
INSERT INTO `Country` VALUES ('DEU', 'Germany', 'Europe', 'Western Europe', 357022.00, 1955, 82164700, 77.4, 2133367.00, 2102826.00, 'Deutschland', 'Federal Republic', 'Johannes Rau', 3068, 'DE');
INSERT INTO `Country` VALUES ('DJI', 'Djibouti', 'Africa', 'Eastern Africa', 23200.00, 1977, 638000, 50.8, 382.00, 373.00, 'Djibouti/Jibuti', 'Republic', 'Ismail Omar Guelleh', 585, 'DJ');
INSERT INTO `Country` VALUES ('DMA', 'Dominica', 'North America', 'Caribbean', 751.00, 1978, 71000, 73.4, 256.00, 243.00, 'Dominica', 'Republic', 'Vernon Shaw', 586, 'DM');
INSERT INTO `Country` VALUES ('DNK', 'Denmark', 'Europe', 'Nordic Countries', 43094.00, 800, 5330000, 76.5, 174099.00, 169264.00, 'Danmark', 'Constitutional Monarchy', 'Margrethe II', 3315, 'DK');
INSERT INTO `Country` VALUES ('DOM', 'Dominican Republic', 'North America', 'Caribbean', 48511.00, 1844, 8495000, 73.2, 15846.00, 15076.00, 'República Dominicana', 'Republic', 'Hipólito Mejía Domínguez', 587, 'DO');
INSERT INTO `Country` VALUES ('DZA', 'Algeria', 'Africa', 'Northern Africa', 2381741.00, 1962, 31471000, 69.7, 49982.00, 46966.00, 'Al-Jaza’ir/Algérie', 'Republic', 'Abdelaziz Bouteflika', 35, 'DZ');
INSERT INTO `Country` VALUES ('ECU', 'Ecuador', 'South America', 'South America', 283561.00, 1822, 12646000, 71.1, 19770.00, 19769.00, 'Ecuador', 'Republic', 'Gustavo Noboa Bejarano', 594, 'EC');
INSERT INTO `Country` VALUES ('EGY', 'Egypt', 'Africa', 'Northern Africa', 1001449.00, 1922, 68470000, 63.3, 82710.00, 75617.00, 'Misr', 'Republic', 'Hosni Mubarak', 608, 'EG');
INSERT INTO `Country` VALUES ('ERI', 'Eritrea', 'Africa', 'Eastern Africa', 117600.00, 1993, 3850000, 55.8, 650.00, 755.00, 'Ertra', 'Republic', 'Isayas Afewerki [Isaias Afwerki]', 652, 'ER');
INSERT INTO `Country` VALUES ('ESH', 'Western Sahara', 'Africa', 'Northern Africa', 266000.00, 0, 293000, 49.8, 60.00, 0.00, 'As-Sahrawiya', 'Occupied by Marocco', 'Mohammed Abdel Aziz', 2453, 'EH');
INSERT INTO `Country` VALUES ('ESP', 'Spain', 'Europe', 'Southern Europe', 505992.00, 1492, 39441700, 78.8, 553233.00, 532031.00, 'España', 'Constitutional Monarchy', 'Juan Carlos I', 653, 'ES');
INSERT INTO `Country` VALUES ('EST', 'Estonia', 'Europe', 'Baltic Countries', 45227.00, 1991, 1439200, 69.5, 5328.00, 3371.00, 'Eesti', 'Republic', 'Lennart Meri', 3791, 'EE');
INSERT INTO `Country` VALUES ('ETH', 'Ethiopia', 'Africa', 'Eastern Africa', 1104300.00, -1000, 62565000, 45.2, 6353.00, 6180.00, 'YeItyop´iya', 'Republic', 'Negasso Gidada', 756, 'ET');
INSERT INTO `Country` VALUES ('FIN', 'Finland', 'Europe', 'Nordic Countries', 338145.00, 1917, 5171300, 77.4, 121914.00, 119833.00, 'Suomi', 'Republic', 'Tarja Halonen', 3236, 'FI');
INSERT INTO `Country` VALUES ('FJI', 'Fiji Islands', 'Oceania', 'Melanesia', 18274.00, 1970, 817000, 67.9, 1536.00, 2149.00, 'Fiji Islands', 'Republic', 'Josefa Iloilo', 764, 'FJ');
INSERT INTO `Country` VALUES ('FLK', 'Falkland Islands', 'South America', 'South America', 12173.00, 0, 2000, 0.0, 0.00, 0.00, 'Falkland Islands', 'Dependent Territory of the UK', 'Elisabeth II', 763, 'FK');
INSERT INTO `Country` VALUES ('FRA', 'France', 'Europe', 'Western Europe', 551500.00, 843, 59225700, 78.8, 1424285.00, 1392448.00, 'France', 'Republic', 'Jacques Chirac', 2974, 'FR');
INSERT INTO `Country` VALUES ('FRO', 'Faroe Islands', 'Europe', 'Nordic Countries', 1399.00, 0, 43000, 78.4, 0.00, 0.00, 'Føroyar', 'Part of Denmark', 'Margrethe II', 901, 'FO');
INSERT INTO `Country` VALUES ('FSM', 'Micronesia, Federated States of', 'Oceania', 'Micronesia', 702.00, 1990, 119000, 68.6, 212.00, 0.00, 'Micronesia', 'Federal Republic', 'Leo A. Falcam', 2689, 'FM');
INSERT INTO `Country` VALUES ('GAB', 'Gabon', 'Africa', 'Central Africa', 267668.00, 1960, 1226000, 50.1, 5493.00, 5279.00, 'Le Gabon', 'Republic', 'Omar Bongo', 902, 'GA');
INSERT INTO `Country` VALUES ('GBR', 'United Kingdom', 'Europe', 'British Islands', 242900.00, 1066, 59623400, 77.7, 1378330.00, 1296830.00, 'United Kingdom', 'Constitutional Monarchy', 'Elisabeth II', 456, 'GB');
INSERT INTO `Country` VALUES ('GEO', 'Georgia', 'Asia', 'Middle East', 69700.00, 1991, 4968000, 64.5, 6064.00, 5924.00, 'Sakartvelo', 'Republic', 'Eduard Ševardnadze', 905, 'GE');
INSERT INTO `Country` VALUES ('GHA', 'Ghana', 'Africa', 'Western Africa', 238533.00, 1957, 20212000, 57.4, 7137.00, 6884.00, 'Ghana', 'Republic', 'John Kufuor', 910, 'GH');
INSERT INTO `Country` VALUES ('GIB', 'Gibraltar', 'Europe', 'Southern Europe', 6.00, 0, 25000, 79.0, 258.00, 0.00, 'Gibraltar', 'Dependent Territory of the UK', 'Elisabeth II', 915, 'GI');
INSERT INTO `Country` VALUES ('GIN', 'Guinea', 'Africa', 'Western Africa', 245857.00, 1958, 7430000, 45.6, 2352.00, 2383.00, 'Guinée', 'Republic', 'Lansana Conté', 926, 'GN');
INSERT INTO `Country` VALUES ('GLP', 'Guadeloupe', 'North America', 'Caribbean', 1705.00, 0, 456000, 77.0, 3501.00, 0.00, 'Guadeloupe', 'Overseas Department of France', 'Jacques Chirac', 919, 'GP');
INSERT INTO `Country` VALUES ('GMB', 'Gambia', 'Africa', 'Western Africa', 11295.00, 1965, 1305000, 53.2, 320.00, 325.00, 'The Gambia', 'Republic', 'Yahya Jammeh', 904, 'GM');
INSERT INTO `Country` VALUES ('GNB', 'Guinea-Bissau', 'Africa', 'Western Africa', 36125.00, 1974, 1213000, 49.0, 293.00, 272.00, 'Guiné-Bissau', 'Republic', 'Kumba Ialá', 927, 'GW');
INSERT INTO `Country` VALUES ('GNQ', 'Equatorial Guinea', 'Africa', 'Central Africa', 28051.00, 1968, 453000, 53.6, 283.00, 542.00, 'Guinea Ecuatorial', 'Republic', 'Teodoro Obiang Nguema Mbasogo', 2972, 'GQ');
INSERT INTO `Country` VALUES ('GRC', 'Greece', 'Europe', 'Southern Europe', 131626.00, 1830, 10545700, 78.4, 120724.00, 119946.00, 'Elláda', 'Republic', 'Kostis Stefanopoulos', 2401, 'GR');
INSERT INTO `Country` VALUES ('GRD', 'Grenada', 'North America', 'Caribbean', 344.00, 1974, 94000, 64.5, 318.00, 0.00, 'Grenada', 'Constitutional Monarchy', 'Elisabeth II', 916, 'GD');
INSERT INTO `Country` VALUES ('GRL', 'Greenland', 'North America', 'North America', 2166090.00, 0, 56000, 68.1, 0.00, 0.00, 'Kalaallit Nunaat/Grønland', 'Part of Denmark', 'Margrethe II', 917, 'GL');
INSERT INTO `Country` VALUES ('GTM', 'Guatemala', 'North America', 'Central America', 108889.00, 1821, 11385000, 66.2, 19008.00, 17797.00, 'Guatemala', 'Republic', 'Alfonso Portillo Cabrera', 922, 'GT');
INSERT INTO `Country` VALUES ('GUF', 'French Guiana', 'South America', 'South America', 90000.00, 0, 181000, 76.1, 681.00, 0.00, 'Guyane française', 'Overseas Department of France', 'Jacques Chirac', 3014, 'GF');
INSERT INTO `Country` VALUES ('GUM', 'Guam', 'Oceania', 'Micronesia', 549.00, 0, 168000, 77.8, 1197.00, 1136.00, 'Guam', 'US Territory', 'George W. Bush', 921, 'GU');
INSERT INTO `Country` VALUES ('GUY', 'Guyana', 'South America', 'South America', 214969.00, 1966, 861000, 64.0, 722.00, 743.00, 'Guyana', 'Republic', 'Bharrat Jagdeo', 928, 'GY');
INSERT INTO `Country` VALUES ('HKG', 'Hong Kong', 'Asia', 'Eastern Asia', 1075.00, 0, 6782000, 79.5, 166448.00, 173610.00, 'Xianggang/Hong Kong', 'Special Administrative Region of China', 'Jiang Zemin', 937, 'HK');
INSERT INTO `Country` VALUES ('HMD', 'Heard Island and McDonald Islands', 'Antarctica', 'Antarctica', 359.00, 0, 0, 0.0, 0.00, 0.00, 'Heard and McDonald Islands', 'Territory of Australia', 'Elisabeth II', 0, 'HM');
INSERT INTO `Country` VALUES ('HND', 'Honduras', 'North America', 'Central America', 112088.00, 1838, 6485000, 69.9, 5333.00, 4697.00, 'Honduras', 'Republic', 'Carlos Roberto Flores Facussé', 933, 'HN');
INSERT INTO `Country` VALUES ('HRV', 'Croatia', 'Europe', 'Southern Europe', 56538.00, 1991, 4473000, 73.7, 20208.00, 19300.00, 'Hrvatska', 'Republic', 'Štipe Mesic', 2409, 'HR');
INSERT INTO `Country` VALUES ('HTI', 'Haiti', 'North America', 'Caribbean', 27750.00, 1804, 8222000, 49.2, 3459.00, 3107.00, 'Haïti/Dayti', 'Republic', 'Jean-Bertrand Aristide', 929, 'HT');
INSERT INTO `Country` VALUES ('HUN', 'Hungary', 'Europe', 'Eastern Europe', 93030.00, 1918, 10043200, 71.4, 48267.00, 45914.00, 'Magyarország', 'Republic', 'Ferenc Mádl', 3483, 'HU');
INSERT INTO `Country` VALUES ('IDN', 'Indonesia', 'Asia', 'Southeast Asia', 1904569.00, 1945, 212107000, 68.0, 84982.00, 215002.00, 'Indonesia', 'Republic', 'Abdurrahman Wahid', 939, 'ID');
INSERT INTO `Country` VALUES ('IND', 'India', 'Asia', 'Southern and Central Asia', 3287263.00, 1947, 1013662000, 62.5, 447114.00, 430572.00, 'Bharat/India', 'Federal Republic', 'Kocheril Raman Narayanan', 1109, 'IN');
INSERT INTO `Country` VALUES ('IOT', 'British Indian Ocean Territory', 'Africa', 'Eastern Africa', 78.00, 0, 0, 0.0, 0.00, 0.00, 'British Indian Ocean Territory', 'Dependent Territory of the UK', 'Elisabeth II', 0, 'IO');
INSERT INTO `Country` VALUES ('IRL', 'Ireland', 'Europe', 'British Islands', 70273.00, 1921, 3775100, 76.8, 75921.00, 73132.00, 'Ireland/Éire', 'Republic', 'Mary McAleese', 1447, 'IE');
INSERT INTO `Country` VALUES ('IRN', 'Iran', 'Asia', 'Southern and Central Asia', 1648195.00, 1906, 67702000, 69.7, 195746.00, 160151.00, 'Iran', 'Islamic Republic', 'Ali Mohammad Khatami-Ardakani', 1380, 'IR');
INSERT INTO `Country` VALUES ('IRQ', 'Iraq', 'Asia', 'Middle East', 438317.00, 1932, 23115000, 66.5, 11500.00, 0.00, 'Al-´Iraq', 'Republic', 'Saddam Hussein al-Takriti', 1365, 'IQ');
INSERT INTO `Country` VALUES ('ISL', 'Iceland', 'Europe', 'Nordic Countries', 103000.00, 1944, 279000, 79.4, 8255.00, 7474.00, 'Ísland', 'Republic', 'Ólafur Ragnar Grímsson', 1449, 'IS');
INSERT INTO `Country` VALUES ('ISR', 'Israel', 'Asia', 'Middle East', 21056.00, 1948, 6217000, 78.6, 97477.00, 98577.00, 'Yisra’el/Isra’il', 'Republic', 'Moshe Katzav', 1450, 'IL');
INSERT INTO `Country` VALUES ('ITA', 'Italy', 'Europe', 'Southern Europe', 301316.00, 1861, 57680000, 79.0, 1161755.00, 1145372.00, 'Italia', 'Republic', 'Carlo Azeglio Ciampi', 1464, 'IT');
INSERT INTO `Country` VALUES ('JAM', 'Jamaica', 'North America', 'Caribbean', 10990.00, 1962, 2583000, 75.2, 6871.00, 6722.00, 'Jamaica', 'Constitutional Monarchy', 'Elisabeth II', 1530, 'JM');
INSERT INTO `Country` VALUES ('JOR', 'Jordan', 'Asia', 'Middle East', 88946.00, 1946, 5083000, 77.4, 7526.00, 7051.00, 'Al-Urdunn', 'Constitutional Monarchy', 'Abdullah II', 1786, 'JO');
INSERT INTO `Country` VALUES ('JPN', 'Japan', 'Asia', 'Eastern Asia', 377829.00, -660, 126714000, 80.7, 3787042.00, 4192638.00, 'Nihon/Nippon', 'Constitutional Monarchy', 'Akihito', 1532, 'JP');
INSERT INTO `Country` VALUES ('KAZ', 'Kazakstan', 'Asia', 'Southern and Central Asia', 2724900.00, 1991, 16223000, 63.2, 24375.00, 23383.00, 'Qazaqstan', 'Republic', 'Nursultan Nazarbajev', 1864, 'KZ');
INSERT INTO `Country` VALUES ('KEN', 'Kenya', 'Africa', 'Eastern Africa', 580367.00, 1963, 30080000, 48.0, 9217.00, 10241.00, 'Kenya', 'Republic', 'Daniel arap Moi', 1881, 'KE');
INSERT INTO `Country` VALUES ('KGZ', 'Kyrgyzstan', 'Asia', 'Southern and Central Asia', 199900.00, 1991, 4699000, 63.4, 1626.00, 1767.00, 'Kyrgyzstan', 'Republic', 'Askar Akajev', 2253, 'KG');
INSERT INTO `Country` VALUES ('KHM', 'Cambodia', 'Asia', 'Southeast Asia', 181035.00, 1953, 11168000, 56.5, 5121.00, 5670.00, 'Kâmpuchéa', 'Constitutional Monarchy', 'Norodom Sihanouk', 1800, 'KH');
INSERT INTO `Country` VALUES ('KIR', 'Kiribati', 'Oceania', 'Micronesia', 726.00, 1979, 83000, 59.8, 40.70, 0.00, 'Kiribati', 'Republic', 'Teburoro Tito', 2256, 'KI');
INSERT INTO `Country` VALUES ('KNA', 'Saint Kitts and Nevis', 'North America', 'Caribbean', 261.00, 1983, 38000, 70.7, 299.00, 0.00, 'Saint Kitts and Nevis', 'Constitutional Monarchy', 'Elisabeth II', 3064, 'KN');
INSERT INTO `Country` VALUES ('KOR', 'South Korea', 'Asia', 'Eastern Asia', 99434.00, 1948, 46844000, 74.4, 320749.00, 442544.00, 'Taehan Min’guk (Namhan)', 'Republic', 'Kim Dae-jung', 2331, 'KR');
INSERT INTO `Country` VALUES ('KWT', 'Kuwait', 'Asia', 'Middle East', 17818.00, 1961, 1972000, 76.1, 27037.00, 30373.00, 'Al-Kuwayt', 'Constitutional Monarchy (Emirate)', 'Jabir al-Ahmad al-Jabir al-Sabah', 2429, 'KW');
INSERT INTO `Country` VALUES ('LAO', 'Laos', 'Asia', 'Southeast Asia', 236800.00, 1953, 5433000, 53.1, 1292.00, 1746.00, 'Lao', 'Republic', 'Khamtay Siphandone', 2432, 'LA');
INSERT INTO `Country` VALUES ('LBN', 'Lebanon', 'Asia', 'Middle East', 10400.00, 1941, 3282000, 71.3, 17121.00, 15129.00, 'Lubnan', 'Republic', 'Émile Lahoud', 2438, 'LB');
INSERT INTO `Country` VALUES ('LBR', 'Liberia', 'Africa', 'Western Africa', 111369.00, 1847, 3154000, 51.0, 2012.00, 0.00, 'Liberia', 'Republic', 'Charles Taylor', 2440, 'LR');
INSERT INTO `Country` VALUES ('LBY', 'Libyan Arab Jamahiriya', 'Africa', 'Northern Africa', 1759540.00, 1951, 5605000, 75.5, 44806.00, 40562.00, 'Libiya', 'Socialistic State', 'Muammar al-Qadhafi', 2441, 'LY');
INSERT INTO `Country` VALUES ('LCA', 'Saint Lucia', 'North America', 'Caribbean', 622.00, 1979, 154000, 72.3, 571.00, 0.00, 'Saint Lucia', 'Constitutional Monarchy', 'Elisabeth II', 3065, 'LC');
INSERT INTO `Country` VALUES ('LIE', 'Liechtenstein', 'Europe', 'Western Europe', 160.00, 1806, 32300, 78.8, 1119.00, 1084.00, 'Liechtenstein', 'Constitutional Monarchy', 'Hans-Adam II', 2446, 'LI');
INSERT INTO `Country` VALUES ('LKA', 'Sri Lanka', 'Asia', 'Southern and Central Asia', 65610.00, 1948, 18827000, 71.8, 15706.00, 15091.00, 'Sri Lanka/Ilankai', 'Republic', 'Chandrika Kumaratunga', 3217, 'LK');
INSERT INTO `Country` VALUES ('LSO', 'Lesotho', 'Africa', 'Southern Africa', 30355.00, 1966, 2153000, 50.8, 1061.00, 1161.00, 'Lesotho', 'Constitutional Monarchy', 'Letsie III', 2437, 'LS');
INSERT INTO `Country` VALUES ('LTU', 'Lithuania', 'Europe', 'Baltic Countries', 65301.00, 1991, 3698500, 69.1, 10692.00, 9585.00, 'Lietuva', 'Republic', 'Valdas Adamkus', 2447, 'LT');
INSERT INTO `Country` VALUES ('LUX', 'Luxembourg', 'Europe', 'Western Europe', 2586.00, 1867, 435700, 77.1, 16321.00, 15519.00, 'Luxembourg/Lëtzebuerg', 'Constitutional Monarchy', 'Henri', 2452, 'LU');
INSERT INTO `Country` VALUES ('LVA', 'Latvia', 'Europe', 'Baltic Countries', 64589.00, 1991, 2424200, 68.4, 6398.00, 5639.00, 'Latvija', 'Republic', 'Vaira Vike-Freiberga', 2434, 'LV');
INSERT INTO `Country` VALUES ('MAC', 'Macao', 'Asia', 'Eastern Asia', 18.00, 0, 473000, 81.6, 5749.00, 5940.00, 'Macau/Aomen', 'Special Administrative Region of China', 'Jiang Zemin', 2454, 'MO');
INSERT INTO `Country` VALUES ('MAR', 'Morocco', 'Africa', 'Northern Africa', 446550.00, 1956, 28351000, 69.1, 36124.00, 33514.00, 'Al-Maghrib', 'Constitutional Monarchy', 'Mohammed VI', 2486, 'MA');
INSERT INTO `Country` VALUES ('MCO', 'Monaco', 'Europe', 'Western Europe', 1.50, 1861, 34000, 78.8, 776.00, 0.00, 'Monaco', 'Constitutional Monarchy', 'Rainier III', 2695, 'MC');
INSERT INTO `Country` VALUES ('MDA', 'Moldova', 'Europe', 'Eastern Europe', 33851.00, 1991, 4380000, 64.5, 1579.00, 1872.00, 'Moldova', 'Republic', 'Vladimir Voronin', 2690, 'MD');
INSERT INTO `Country` VALUES ('MDG', 'Madagascar', 'Africa', 'Eastern Africa', 587041.00, 1960, 15942000, 55.0, 3750.00, 3545.00, 'Madagasikara/Madagascar', 'Federal Republic', 'Didier Ratsiraka', 2455, 'MG');
INSERT INTO `Country` VALUES ('MDV', 'Maldives', 'Asia', 'Southern and Central Asia', 298.00, 1965, 286000, 62.2, 199.00, 0.00, 'Dhivehi Raajje/Maldives', 'Republic', 'Maumoon Abdul Gayoom', 2463, 'MV');
INSERT INTO `Country` VALUES ('MEX', 'Mexico', 'North America', 'Central America', 1958201.00, 1810, 98881000, 71.5, 414972.00, 401461.00, 'México', 'Federal Republic', 'Vicente Fox Quesada', 2515, 'MX');
INSERT INTO `Country` VALUES ('MHL', 'Marshall Islands', 'Oceania', 'Micronesia', 181.00, 1990, 64000, 65.5, 97.00, 0.00, 'Marshall Islands/Majol', 'Republic', 'Kessai Note', 2507, 'MH');
INSERT INTO `Country` VALUES ('MKD', 'Macedonia', 'Europe', 'Southern Europe', 25713.00, 1991, 2024000, 73.8, 1694.00, 1915.00, 'Makedonija', 'Republic', 'Boris Trajkovski', 2460, 'MK');
INSERT INTO `Country` VALUES ('MLI', 'Mali', 'Africa', 'Western Africa', 1240192.00, 1960, 11234000, 46.7, 2642.00, 2453.00, 'Mali', 'Republic', 'Alpha Oumar Konaré', 2482, 'ML');
INSERT INTO `Country` VALUES ('MLT', 'Malta', 'Europe', 'Southern Europe', 316.00, 1964, 380200, 77.9, 3512.00, 3338.00, 'Malta', 'Republic', 'Guido de Marco', 2484, 'MT');
INSERT INTO `Country` VALUES ('MMR', 'Myanmar', 'Asia', 'Southeast Asia', 676578.00, 1948, 45611000, 54.9, 180375.00, 171028.00, 'Myanma Pye', 'Republic', 'kenraali Than Shwe', 2710, 'MM');
INSERT INTO `Country` VALUES ('MNG', 'Mongolia', 'Asia', 'Eastern Asia', 1566500.00, 1921, 2662000, 67.3, 1043.00, 933.00, 'Mongol Uls', 'Republic', 'Natsagiin Bagabandi', 2696, 'MN');
INSERT INTO `Country` VALUES ('MNP', 'Northern Mariana Islands', 'Oceania', 'Micronesia', 464.00, 0, 78000, 75.5, 0.00, 0.00, 'Northern Mariana Islands', 'Commonwealth of the US', 'George W. Bush', 2913, 'MP');
INSERT INTO `Country` VALUES ('MOZ', 'Mozambique', 'Africa', 'Eastern Africa', 801590.00, 1975, 19680000, 37.5, 2891.00, 2711.00, 'Moçambique', 'Republic', 'Joaquím A. Chissano', 2698, 'MZ');
INSERT INTO `Country` VALUES ('MRT', 'Mauritania', 'Africa', 'Western Africa', 1025520.00, 1960, 2670000, 50.8, 998.00, 1081.00, 'Muritaniya/Mauritanie', 'Republic', 'Maaouiya Ould Sid´Ahmad Taya', 2509, 'MR');
INSERT INTO `Country` VALUES ('MSR', 'Montserrat', 'North America', 'Caribbean', 102.00, 0, 11000, 78.0, 109.00, 0.00, 'Montserrat', 'Dependent Territory of the UK', 'Elisabeth II', 2697, 'MS');
INSERT INTO `Country` VALUES ('MTQ', 'Martinique', 'North America', 'Caribbean', 1102.00, 0, 395000, 78.3, 2731.00, 2559.00, 'Martinique', 'Overseas Department of France', 'Jacques Chirac', 2508, 'MQ');
INSERT INTO `Country` VALUES ('MUS', 'Mauritius', 'Africa', 'Eastern Africa', 2040.00, 1968, 1158000, 71.0, 4251.00, 4186.00, 'Mauritius', 'Republic', 'Cassam Uteem', 2511, 'MU');
INSERT INTO `Country` VALUES ('MWI', 'Malawi', 'Africa', 'Eastern Africa', 118484.00, 1964, 10925000, 37.6, 1687.00, 2527.00, 'Malawi', 'Republic', 'Bakili Muluzi', 2462, 'MW');
INSERT INTO `Country` VALUES ('MYS', 'Malaysia', 'Asia', 'Southeast Asia', 329758.00, 1957, 22244000, 70.8, 69213.00, 97884.00, 'Malaysia', 'Constitutional Monarchy, Federation', 'Salahuddin Abdul Aziz Shah Alhaj', 2464, 'MY');
INSERT INTO `Country` VALUES ('MYT', 'Mayotte', 'Africa', 'Eastern Africa', 373.00, 0, 149000, 59.5, 0.00, 0.00, 'Mayotte', 'Territorial Collectivity of France', 'Jacques Chirac', 2514, 'YT');
INSERT INTO `Country` VALUES ('NAM', 'Namibia', 'Africa', 'Southern Africa', 824292.00, 1990, 1726000, 42.5, 3101.00, 3384.00, 'Namibia', 'Republic', 'Sam Nujoma', 2726, 'NA');
INSERT INTO `Country` VALUES ('NCL', 'New Caledonia', 'Oceania', 'Melanesia', 18575.00, 0, 214000, 72.8, 3563.00, 0.00, 'Nouvelle-Calédonie', 'Nonmetropolitan Territory of France', 'Jacques Chirac', 3493, 'NC');
INSERT INTO `Country` VALUES ('NER', 'Niger', 'Africa', 'Western Africa', 1267000.00, 1960, 10730000, 41.3, 1706.00, 1580.00, 'Niger', 'Republic', 'Mamadou Tandja', 2738, 'NE');
INSERT INTO `Country` VALUES ('NFK', 'Norfolk Island', 'Oceania', 'Australia and New Zealand', 36.00, 0, 2000, 0.0, 0.00, 0.00, 'Norfolk Island', 'Territory of Australia', 'Elisabeth II', 2806, 'NF');
INSERT INTO `Country` VALUES ('NGA', 'Nigeria', 'Africa', 'Western Africa', 923768.00, 1960, 111506000, 51.6, 65707.00, 58623.00, 'Nigeria', 'Federal Republic', 'Olusegun Obasanjo', 2754, 'NG');
INSERT INTO `Country` VALUES ('NIC', 'Nicaragua', 'North America', 'Central America', 130000.00, 1838, 5074000, 68.7, 1988.00, 2023.00, 'Nicaragua', 'Republic', 'Arnoldo Alemán Lacayo', 2734, 'NI');
INSERT INTO `Country` VALUES ('NIU', 'Niue', 'Oceania', 'Polynesia', 260.00, 0, 2000, 0.0, 0.00, 0.00, 'Niue', 'Nonmetropolitan Territory of New Zealand', 'Elisabeth II', 2805, 'NU');
INSERT INTO `Country` VALUES ('NLD', 'Netherlands', 'Europe', 'Western Europe', 41526.00, 1581, 15864000, 78.3, 371362.00, 360478.00, 'Nederland', 'Constitutional Monarchy', 'Beatrix', 5, 'NL');
INSERT INTO `Country` VALUES ('NOR', 'Norway', 'Europe', 'Nordic Countries', 323877.00, 1905, 4478500, 78.7, 145895.00, 153370.00, 'Norge', 'Constitutional Monarchy', 'Harald V', 2807, 'NO');
INSERT INTO `Country` VALUES ('NPL', 'Nepal', 'Asia', 'Southern and Central Asia', 147181.00, 1769, 23930000, 57.8, 4768.00, 4837.00, 'Nepal', 'Constitutional Monarchy', 'Gyanendra Bir Bikram', 2729, 'NP');
INSERT INTO `Country` VALUES ('NRU', 'Nauru', 'Oceania', 'Micronesia', 21.00, 1968, 12000, 60.8, 197.00, 0.00, 'Naoero/Nauru', 'Republic', 'Bernard Dowiyogo', 2728, 'NR');
INSERT INTO `Country` VALUES ('NZL', 'New Zealand', 'Oceania', 'Australia and New Zealand', 270534.00, 1907, 3862000, 77.8, 54669.00, 64960.00, 'New Zealand/Aotearoa', 'Constitutional Monarchy', 'Elisabeth II', 3499, 'NZ');
INSERT INTO `Country` VALUES ('OMN', 'Oman', 'Asia', 'Middle East', 309500.00, 1951, 2542000, 71.8, 16904.00, 16153.00, '´Uman', 'Monarchy (Sultanate)', 'Qabus ibn Sa´id', 2821, 'OM');
INSERT INTO `Country` VALUES ('PAK', 'Pakistan', 'Asia', 'Southern and Central Asia', 796095.00, 1947, 156483000, 61.1, 61289.00, 58549.00, 'Pakistan', 'Republic', 'Mohammad Rafiq Tarar', 2831, 'PK');
INSERT INTO `Country` VALUES ('PAN', 'Panama', 'North America', 'Central America', 75517.00, 1903, 2856000, 75.5, 9131.00, 8700.00, 'Panamá', 'Republic', 'Mireya Elisa Moscoso Rodríguez', 2882, 'PA');
INSERT INTO `Country` VALUES ('PCN', 'Pitcairn', 'Oceania', 'Polynesia', 49.00, 0, 50, 0.0, 0.00, 0.00, 'Pitcairn', 'Dependent Territory of the UK', 'Elisabeth II', 2912, 'PN');
INSERT INTO `Country` VALUES ('PER', 'Peru', 'South America', 'South America', 1285216.00, 1821, 25662000, 70.0, 64140.00, 65186.00, 'Perú/Piruw', 'Republic', 'Valentin Paniagua Corazao', 2890, 'PE');
INSERT INTO `Country` VALUES ('PHL', 'Philippines', 'Asia', 'Southeast Asia', 300000.00, 1946, 75967000, 67.5, 65107.00, 82239.00, 'Pilipinas', 'Republic', 'Gloria Macapagal-Arroyo', 766, 'PH');
INSERT INTO `Country` VALUES ('PLW', 'Palau', 'Oceania', 'Micronesia', 459.00, 1994, 19000, 68.6, 105.00, 0.00, 'Belau/Palau', 'Republic', 'Kuniwo Nakamura', 2881, 'PW');
INSERT INTO `Country` VALUES ('PNG', 'Papua New Guinea', 'Oceania', 'Melanesia', 462840.00, 1975, 4807000, 63.1, 4988.00, 6328.00, 'Papua New Guinea/Papua Niugini', 'Constitutional Monarchy', 'Elisabeth II', 2884, 'PG');
INSERT INTO `Country` VALUES ('POL', 'Poland', 'Europe', 'Eastern Europe', 323250.00, 1918, 38653600, 73.2, 151697.00, 135636.00, 'Polska', 'Republic', 'Aleksander Kwasniewski', 2928, 'PL');
INSERT INTO `Country` VALUES ('PRI', 'Puerto Rico', 'North America', 'Caribbean', 8875.00, 0, 3869000, 75.6, 34100.00, 32100.00, 'Puerto Rico', 'Commonwealth of the US', 'George W. Bush', 2919, 'PR');
INSERT INTO `Country` VALUES ('PRK', 'North Korea', 'Asia', 'Eastern Asia', 120538.00, 1948, 24039000, 70.7, 5332.00, 0.00, 'Choson Minjujuui In´min Konghwaguk (Bukhan)', 'Socialistic Republic', 'Kim Jong-il', 2318, 'KP');
INSERT INTO `Country` VALUES ('PRT', 'Portugal', 'Europe', 'Southern Europe', 91982.00, 1143, 9997600, 75.8, 105954.00, 102133.00, 'Portugal', 'Republic', 'Jorge Sampãio', 2914, 'PT');
INSERT INTO `Country` VALUES ('PRY', 'Paraguay', 'South America', 'South America', 406752.00, 1811, 5496000, 73.7, 8444.00, 9555.00, 'Paraguay', 'Republic', 'Luis Ángel González Macchi', 2885, 'PY');
INSERT INTO `Country` VALUES ('PSE', 'Palestine', 'Asia', 'Middle East', 6257.00, 0, 3101000, 71.4, 4173.00, 0.00, 'Filastin', 'Autonomous Area', 'Yasser (Yasir) Arafat', 4074, 'PS');
INSERT INTO `Country` VALUES ('PYF', 'French Polynesia', 'Oceania', 'Polynesia', 4000.00, 0, 235000, 74.8, 818.00, 781.00, 'Polynésie française', 'Nonmetropolitan Territory of France', 'Jacques Chirac', 3016, 'PF');
INSERT INTO `Country` VALUES ('QAT', 'Qatar', 'Asia', 'Middle East', 11000.00, 1971, 599000, 72.4, 9472.00, 8920.00, 'Qatar', 'Monarchy', 'Hamad ibn Khalifa al-Thani', 2973, 'QA');
INSERT INTO `Country` VALUES ('REU', 'Réunion', 'Africa', 'Eastern Africa', 2510.00, 0, 699000, 72.7, 8287.00, 7988.00, 'Réunion', 'Overseas Department of France', 'Jacques Chirac', 3017, 'RE');
INSERT INTO `Country` VALUES ('ROM', 'Romania', 'Europe', 'Eastern Europe', 238391.00, 1878, 22455500, 69.9, 38158.00, 34843.00, 'România', 'Republic', 'Ion Iliescu', 3018, 'RO');
INSERT INTO `Country` VALUES ('RUS', 'Russian Federation', 'Europe', 'Eastern Europe', 17075400.00, 1991, 146934000, 67.2, 276608.00, 442989.00, 'Rossija', 'Federal Republic', 'Vladimir Putin', 3580, 'RU');
INSERT INTO `Country` VALUES ('RWA', 'Rwanda', 'Africa', 'Eastern Africa', 26338.00, 1962, 7733000, 39.3, 2036.00, 1863.00, 'Rwanda/Urwanda', 'Republic', 'Paul Kagame', 3047, 'RW');
INSERT INTO `Country` VALUES ('SAU', 'Saudi Arabia', 'Asia', 'Middle East', 2149690.00, 1932, 21607000, 67.8, 137635.00, 146171.00, 'Al-´Arabiya as-Sa´udiya', 'Monarchy', 'Fahd ibn Abdul-Aziz al-Sa´ud', 3173, 'SA');
INSERT INTO `Country` VALUES ('SDN', 'Sudan', 'Africa', 'Northern Africa', 2505813.00, 1956, 29490000, 56.6, 10162.00, 0.00, 'As-Sudan', 'Islamic Republic', 'Omar Hassan Ahmad al-Bashir', 3225, 'SD');
INSERT INTO `Country` VALUES ('SEN', 'Senegal', 'Africa', 'Western Africa', 196722.00, 1960, 9481000, 62.2, 4787.00, 4542.00, 'Sénégal/Sounougal', 'Republic', 'Abdoulaye Wade', 3198, 'SN');
INSERT INTO `Country` VALUES ('SGP', 'Singapore', 'Asia', 'Southeast Asia', 618.00, 1965, 3567000, 80.1, 86503.00, 96318.00, 'Singapore/Singapura/Xinjiapo/Singapur', 'Republic', 'Sellapan Rama Nathan', 3208, 'SG');
INSERT INTO `Country` VALUES ('SGS', 'South Georgia and the South Sandwich Islands', 'Antarctica', 'Antarctica', 3903.00, 0, 0, 0.0, 0.00, 0.00, 'South Georgia and the South Sandwich Islands', 'Dependent Territory of the UK', 'Elisabeth II', 0, 'GS');
INSERT INTO `Country` VALUES ('SHN', 'Saint Helena', 'Africa', 'Western Africa', 314.00, 0, 6000, 76.8, 0.00, 0.00, 'Saint Helena', 'Dependent Territory of the UK', 'Elisabeth II', 3063, 'SH');
INSERT INTO `Country` VALUES ('SJM', 'Svalbard and Jan Mayen', 'Europe', 'Nordic Countries', 62422.00, 0, 3200, 0.0, 0.00, 0.00, 'Svalbard og Jan Mayen', 'Dependent Territory of Norway', 'Harald V', 938, 'SJ');
INSERT INTO `Country` VALUES ('SLB', 'Solomon Islands', 'Oceania', 'Melanesia', 28896.00, 1978, 444000, 71.3, 182.00, 220.00, 'Solomon Islands', 'Constitutional Monarchy', 'Elisabeth II', 3161, 'SB');
INSERT INTO `Country` VALUES ('SLE', 'Sierra Leone', 'Africa', 'Western Africa', 71740.00, 1961, 4854000, 45.3, 746.00, 858.00, 'Sierra Leone', 'Republic', 'Ahmed Tejan Kabbah', 3207, 'SL');
INSERT INTO `Country` VALUES ('SLV', 'El Salvador', 'North America', 'Central America', 21041.00, 1841, 6276000, 69.7, 11863.00, 11203.00, 'El Salvador', 'Republic', 'Francisco Guillermo Flores Pérez', 645, 'SV');
INSERT INTO `Country` VALUES ('SMR', 'San Marino', 'Europe', 'Southern Europe', 61.00, 885, 27000, 81.1, 510.00, 0.00, 'San Marino', 'Republic', '', 3171, 'SM');
INSERT INTO `Country` VALUES ('SOM', 'Somalia', 'Africa', 'Eastern Africa', 637657.00, 1960, 10097000, 46.2, 935.00, 0.00, 'Soomaaliya', 'Republic', 'Abdiqassim Salad Hassan', 3214, 'SO');
INSERT INTO `Country` VALUES ('SPM', 'Saint Pierre and Miquelon', 'North America', 'North America', 242.00, 0, 7000, 77.6, 0.00, 0.00, 'Saint-Pierre-et-Miquelon', 'Territorial Collectivity of France', 'Jacques Chirac', 3067, 'PM');
INSERT INTO `Country` VALUES ('STP', 'Sao Tome and Principe', 'Africa', 'Central Africa', 964.00, 1975, 147000, 65.3, 6.00, 0.00, 'São Tomé e Príncipe', 'Republic', 'Miguel Trovoada', 3172, 'ST');
INSERT INTO `Country` VALUES ('SUR', 'Suriname', 'South America', 'South America', 163265.00, 1975, 417000, 71.4, 870.00, 706.00, 'Suriname', 'Republic', 'Ronald Venetiaan', 3243, 'SR');
INSERT INTO `Country` VALUES ('SVK', 'Slovakia', 'Europe', 'Eastern Europe', 49012.00, 1993, 5398700, 73.7, 20594.00, 19452.00, 'Slovensko', 'Republic', 'Rudolf Schuster', 3209, 'SK');
INSERT INTO `Country` VALUES ('SVN', 'Slovenia', 'Europe', 'Southern Europe', 20256.00, 1991, 1987800, 74.9, 19756.00, 18202.00, 'Slovenija', 'Republic', 'Milan Kucan', 3212, 'SI');
INSERT INTO `Country` VALUES ('SWE', 'Sweden', 'Europe', 'Nordic Countries', 449964.00, 836, 8861400, 79.6, 226492.00, 227757.00, 'Sverige', 'Constitutional Monarchy', 'Carl XVI Gustaf', 3048, 'SE');
INSERT INTO `Country` VALUES ('SWZ', 'Swaziland', 'Africa', 'Southern Africa', 17364.00, 1968, 1008000, 40.4, 1206.00, 1312.00, 'kaNgwane', 'Monarchy', 'Mswati III', 3244, 'SZ');
INSERT INTO `Country` VALUES ('SYC', 'Seychelles', 'Africa', 'Eastern Africa', 455.00, 1976, 77000, 70.4, 536.00, 539.00, 'Sesel/Seychelles', 'Republic', 'France-Albert René', 3206, 'SC');
INSERT INTO `Country` VALUES ('SYR', 'Syria', 'Asia', 'Middle East', 185180.00, 1941, 16125000, 68.5, 65984.00, 64926.00, 'Suriya', 'Republic', 'Bashar al-Assad', 3250, 'SY');
INSERT INTO `Country` VALUES ('TCA', 'Turks and Caicos Islands', 'North America', 'Caribbean', 430.00, 0, 17000, 73.3, 96.00, 0.00, 'The Turks and Caicos Islands', 'Dependent Territory of the UK', 'Elisabeth II', 3423, 'TC');
INSERT INTO `Country` VALUES ('TCD', 'Chad', 'Africa', 'Central Africa', 1284000.00, 1960, 7651000, 50.5, 1208.00, 1102.00, 'Tchad/Tshad', 'Republic', 'Idriss Déby', 3337, 'TD');
INSERT INTO `Country` VALUES ('TGO', 'Togo', 'Africa', 'Western Africa', 56785.00, 1960, 4629000, 54.7, 1449.00, 1400.00, 'Togo', 'Republic', 'Gnassingbé Eyadéma', 3332, 'TG');
INSERT INTO `Country` VALUES ('THA', 'Thailand', 'Asia', 'Southeast Asia', 513115.00, 1350, 61399000, 68.6, 116416.00, 153907.00, 'Prathet Thai', 'Constitutional Monarchy', 'Bhumibol Adulyadej', 3320, 'TH');
INSERT INTO `Country` VALUES ('TJK', 'Tajikistan', 'Asia', 'Southern and Central Asia', 143100.00, 1991, 6188000, 64.1, 1990.00, 1056.00, 'Toçikiston', 'Republic', 'Emomali Rahmonov', 3261, 'TJ');
INSERT INTO `Country` VALUES ('TKL', 'Tokelau', 'Oceania', 'Polynesia', 12.00, 0, 2000, 0.0, 0.00, 0.00, 'Tokelau', 'Nonmetropolitan Territory of New Zealand', 'Elisabeth II', 3333, 'TK');
INSERT INTO `Country` VALUES ('TKM', 'Turkmenistan', 'Asia', 'Southern and Central Asia', 488100.00, 1991, 4459000, 60.9, 4397.00, 2000.00, 'Türkmenostan', 'Republic', 'Saparmurad Nijazov', 3419, 'TM');
INSERT INTO `Country` VALUES ('TMP', 'East Timor', 'Asia', 'Southeast Asia', 14874.00, 0, 885000, 46.0, 0.00, 0.00, 'Timor Timur', 'Administrated by the UN', 'José Alexandre Gusmão', 1522, 'TP');
INSERT INTO `Country` VALUES ('TON', 'Tonga', 'Oceania', 'Polynesia', 650.00, 1970, 99000, 67.9, 146.00, 170.00, 'Tonga', 'Monarchy', 'Taufa''ahau Tupou IV', 3334, 'TO');
INSERT INTO `Country` VALUES ('TTO', 'Trinidad and Tobago', 'North America', 'Caribbean', 5130.00, 1962, 1295000, 68.0, 6232.00, 5867.00, 'Trinidad and Tobago', 'Republic', 'Arthur N. R. Robinson', 3336, 'TT');
INSERT INTO `Country` VALUES ('TUN', 'Tunisia', 'Africa', 'Northern Africa', 163610.00, 1956, 9586000, 73.7, 20026.00, 18898.00, 'Tunis/Tunisie', 'Republic', 'Zine al-Abidine Ben Ali', 3349, 'TN');
INSERT INTO `Country` VALUES ('TUR', 'Turkey', 'Asia', 'Middle East', 774815.00, 1923, 66591000, 71.0, 210721.00, 189122.00, 'Türkiye', 'Republic', 'Ahmet Necdet Sezer', 3358, 'TR');
INSERT INTO `Country` VALUES ('TUV', 'Tuvalu', 'Oceania', 'Polynesia', 26.00, 1978, 12000, 66.3, 6.00, 0.00, 'Tuvalu', 'Constitutional Monarchy', 'Elisabeth II', 3424, 'TV');
INSERT INTO `Country` VALUES ('TWN', 'Taiwan', 'Asia', 'Eastern Asia', 36188.00, 1945, 22256000, 76.4, 256254.00, 263451.00, 'T’ai-wan', 'Republic', 'Chen Shui-bian', 3263, 'TW');
INSERT INTO `Country` VALUES ('TZA', 'Tanzania', 'Africa', 'Eastern Africa', 883749.00, 1961, 33517000, 52.3, 8005.00, 7388.00, 'Tanzania', 'Republic', 'Benjamin William Mkapa', 3306, 'TZ');
INSERT INTO `Country` VALUES ('UGA', 'Uganda', 'Africa', 'Eastern Africa', 241038.00, 1962, 21778000, 42.9, 6313.00, 6887.00, 'Uganda', 'Republic', 'Yoweri Museveni', 3425, 'UG');
INSERT INTO `Country` VALUES ('UKR', 'Ukraine', 'Europe', 'Eastern Europe', 603700.00, 1991, 50456000, 66.0, 42168.00, 49677.00, 'Ukrajina', 'Republic', 'Leonid Kutšma', 3426, 'UA');
INSERT INTO `Country` VALUES ('UMI', 'United States Minor Outlying Islands', 'Oceania', 'Micronesia/Caribbean', 16.00, 0, 0, 0.0, 0.00, 0.00, 'United States Minor Outlying Islands', 'Dependent Territory of the US', 'George W. Bush', 0, 'UM');
INSERT INTO `Country` VALUES ('URY', 'Uruguay', 'South America', 'South America', 175016.00, 1828, 3337000, 75.2, 20831.00, 19967.00, 'Uruguay', 'Republic', 'Jorge Batlle Ibáñez', 3492, 'UY');
INSERT INTO `Country` VALUES ('USA', 'United States', 'North America', 'North America', 9363520.00, 1776, 278357000, 77.1, 8510700.00, 8110900.00, 'United States', 'Federal Republic', 'George W. Bush', 3813, 'US');
INSERT INTO `Country` VALUES ('UZB', 'Uzbekistan', 'Asia', 'Southern and Central Asia', 447400.00, 1991, 24318000, 63.7, 14194.00, 21300.00, 'Uzbekiston', 'Republic', 'Islam Karimov', 3503, 'UZ');
INSERT INTO `Country` VALUES ('VAT', 'Holy See (Vatican City State)', 'Europe', 'Southern Europe', 0.40, 1929, 1000, 0.0, 9.00, 0.00, 'Santa Sede/Città del Vaticano', 'Independent Church State', 'Johannes Paavali II', 3538, 'VA');
INSERT INTO `Country` VALUES ('VCT', 'Saint Vincent and the Grenadines', 'North America', 'Caribbean', 388.00, 1979, 114000, 72.3, 285.00, 0.00, 'Saint Vincent and the Grenadines', 'Constitutional Monarchy', 'Elisabeth II', 3066, 'VC');
INSERT INTO `Country` VALUES ('VEN', 'Venezuela', 'South America', 'South America', 912050.00, 1811, 24170000, 73.1, 95023.00, 88434.00, 'Venezuela', 'Federal Republic', 'Hugo Chávez Frías', 3539, 'VE');
INSERT INTO `Country` VALUES ('VGB', 'Virgin Islands, British', 'North America', 'Caribbean', 151.00, 0, 21000, 75.4, 612.00, 573.00, 'British Virgin Islands', 'Dependent Territory of the UK', 'Elisabeth II', 537, 'VG');
INSERT INTO `Country` VALUES ('VIR', 'Virgin Islands, U.S.', 'North America', 'Caribbean', 347.00, 0, 93000, 78.1, 0.00, 0.00, 'Virgin Islands of the United States', 'US Territory', 'George W. Bush', 4067, 'VI');
INSERT INTO `Country` VALUES ('VNM', 'Vietnam', 'Asia', 'Southeast Asia', 331689.00, 1945, 79832000, 69.3, 21929.00, 22834.00, 'Viêt Nam', 'Socialistic Republic', 'Trân Duc Luong', 3770, 'VN');
INSERT INTO `Country` VALUES ('VUT', 'Vanuatu', 'Oceania', 'Melanesia', 12189.00, 1980, 190000, 60.6, 261.00, 246.00, 'Vanuatu', 'Republic', 'John Bani', 3537, 'VU');
INSERT INTO `Country` VALUES ('WLF', 'Wallis and Futuna', 'Oceania', 'Polynesia', 200.00, 0, 15000, 0.0, 0.00, 0.00, 'Wallis-et-Futuna', 'Nonmetropolitan Territory of France', 'Jacques Chirac', 3536, 'WF');
INSERT INTO `Country` VALUES ('WSM', 'Samoa', 'Oceania', 'Polynesia', 2831.00, 1962, 180000, 69.2, 141.00, 157.00, 'Samoa', 'Parlementary Monarchy', 'Malietoa Tanumafili II', 3169, 'WS');
INSERT INTO `Country` VALUES ('YEM', 'Yemen', 'Asia', 'Middle East', 527968.00, 1918, 18112000, 59.8, 6041.00, 5729.00, 'Al-Yaman', 'Republic', 'Ali Abdallah Salih', 1780, 'YE');
INSERT INTO `Country` VALUES ('YUG', 'Yugoslavia', 'Europe', 'Southern Europe', 102173.00, 1918, 10640000, 72.4, 17000.00, 0.00, 'Jugoslavija', 'Federal Republic', 'Vojislav Koštunica', 1792, 'YU');
INSERT INTO `Country` VALUES ('ZAF', 'South Africa', 'Africa', 'Southern Africa', 1221037.00, 1910, 40377000, 51.1, 116729.00, 129092.00, 'South Africa', 'Republic', 'Thabo Mbeki', 716, 'ZA');
INSERT INTO `Country` VALUES ('ZMB', 'Zambia', 'Africa', 'Eastern Africa', 752618.00, 1964, 9169000, 37.2, 3377.00, 3922.00, 'Zambia', 'Republic', 'Frederick Chiluba', 3162, 'ZM');
INSERT INTO `Country` VALUES ('ZWE', 'Zimbabwe', 'Africa', 'Eastern Africa', 390757.00, 1980, 11669000, 37.8, 5951.00, 8670.00, 'Zimbabwe', 'Republic', 'Robert G. Mugabe', 4068, 'ZW');

-- --------------------------------------------------------

-- 
-- Estructura de tabla para la tabla `CountryLanguage`
-- 
-- Creación: 13-09-2013 a las 17:00:38
-- Última actualización: 13-09-2013 a las 17:00:38
-- 

DROP TABLE IF EXISTS `CountryLanguage`;
CREATE TABLE IF NOT EXISTS `CountryLanguage` (
  `CountryCode` char(3) NOT NULL DEFAULT '',
  `Language` char(30) NOT NULL DEFAULT '',
  `IsOfficial` enum('T','F') NOT NULL DEFAULT 'F',
  `Percentage` float(4,1) NOT NULL DEFAULT '0.0',
  PRIMARY KEY (`CountryCode`,`Language`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- 
-- Volcar la base de datos para la tabla `CountryLanguage`
-- 

INSERT INTO `CountryLanguage` VALUES ('ABW', 'Dutch', 'T', 5.3);
INSERT INTO `CountryLanguage` VALUES ('ABW', 'English', 'F', 9.5);
INSERT INTO `CountryLanguage` VALUES ('ABW', 'Papiamento', 'F', 76.7);
INSERT INTO `CountryLanguage` VALUES ('ABW', 'Spanish', 'F', 7.4);
INSERT INTO `CountryLanguage` VALUES ('AFG', 'Balochi', 'F', 0.9);
INSERT INTO `CountryLanguage` VALUES ('AFG', 'Dari', 'T', 32.1);
INSERT INTO `CountryLanguage` VALUES ('AFG', 'Pashto', 'T', 52.4);
INSERT INTO `CountryLanguage` VALUES ('AFG', 'Turkmenian', 'F', 1.9);
INSERT INTO `CountryLanguage` VALUES ('AFG', 'Uzbek', 'F', 8.8);
INSERT INTO `CountryLanguage` VALUES ('AGO', 'Ambo', 'F', 2.4);
INSERT INTO `CountryLanguage` VALUES ('AGO', 'Chokwe', 'F', 4.2);
INSERT INTO `CountryLanguage` VALUES ('AGO', 'Kongo', 'F', 13.2);
INSERT INTO `CountryLanguage` VALUES ('AGO', 'Luchazi', 'F', 2.4);
INSERT INTO `CountryLanguage` VALUES ('AGO', 'Luimbe-nganguela', 'F', 5.4);
INSERT INTO `CountryLanguage` VALUES ('AGO', 'Luvale', 'F', 3.6);
INSERT INTO `CountryLanguage` VALUES ('AGO', 'Mbundu', 'F', 21.6);
INSERT INTO `CountryLanguage` VALUES ('AGO', 'Nyaneka-nkhumbi', 'F', 5.4);
INSERT INTO `CountryLanguage` VALUES ('AGO', 'Ovimbundu', 'F', 37.2);
INSERT INTO `CountryLanguage` VALUES ('AIA', 'English', 'T', 0.0);
INSERT INTO `CountryLanguage` VALUES ('ALB', 'Albaniana', 'T', 97.9);
INSERT INTO `CountryLanguage` VALUES ('ALB', 'Greek', 'F', 1.8);
INSERT INTO `CountryLanguage` VALUES ('ALB', 'Macedonian', 'F', 0.1);
INSERT INTO `CountryLanguage` VALUES ('AND', 'Catalan', 'T', 32.3);
INSERT INTO `CountryLanguage` VALUES ('AND', 'French', 'F', 6.2);
INSERT INTO `CountryLanguage` VALUES ('AND', 'Portuguese', 'F', 10.8);
INSERT INTO `CountryLanguage` VALUES ('AND', 'Spanish', 'F', 44.6);
INSERT INTO `CountryLanguage` VALUES ('ANT', 'Dutch', 'T', 0.0);
INSERT INTO `CountryLanguage` VALUES ('ANT', 'English', 'F', 7.8);
INSERT INTO `CountryLanguage` VALUES ('ANT', 'Papiamento', 'T', 86.2);
INSERT INTO `CountryLanguage` VALUES ('ARE', 'Arabic', 'T', 42.0);
INSERT INTO `CountryLanguage` VALUES ('ARE', 'Hindi', 'F', 0.0);
INSERT INTO `CountryLanguage` VALUES ('ARG', 'Indian Languages', 'F', 0.3);
INSERT INTO `CountryLanguage` VALUES ('ARG', 'Italian', 'F', 1.7);
INSERT INTO `CountryLanguage` VALUES ('ARG', 'Spanish', 'T', 96.8);
INSERT INTO `CountryLanguage` VALUES ('ARM', 'Armenian', 'T', 93.4);
INSERT INTO `CountryLanguage` VALUES ('ARM', 'Azerbaijani', 'F', 2.6);
INSERT INTO `CountryLanguage` VALUES ('ASM', 'English', 'T', 3.1);
INSERT INTO `CountryLanguage` VALUES ('ASM', 'Samoan', 'T', 90.6);
INSERT INTO `CountryLanguage` VALUES ('ASM', 'Tongan', 'F', 3.1);
INSERT INTO `CountryLanguage` VALUES ('ATG', 'Creole English', 'F', 95.7);
INSERT INTO `CountryLanguage` VALUES ('ATG', 'English', 'T', 0.0);
INSERT INTO `CountryLanguage` VALUES ('AUS', 'Arabic', 'F', 1.0);
INSERT INTO `CountryLanguage` VALUES ('AUS', 'Canton Chinese', 'F', 1.1);
INSERT INTO `CountryLanguage` VALUES ('AUS', 'English', 'T', 81.2);
INSERT INTO `CountryLanguage` VALUES ('AUS', 'German', 'F', 0.6);
INSERT INTO `CountryLanguage` VALUES ('AUS', 'Greek', 'F', 1.6);
INSERT INTO `CountryLanguage` VALUES ('AUS', 'Italian', 'F', 2.2);
INSERT INTO `CountryLanguage` VALUES ('AUS', 'Serbo-Croatian', 'F', 0.6);
INSERT INTO `CountryLanguage` VALUES ('AUS', 'Vietnamese', 'F', 0.8);
INSERT INTO `CountryLanguage` VALUES ('AUT', 'Czech', 'F', 0.2);
INSERT INTO `CountryLanguage` VALUES ('AUT', 'German', 'T', 92.0);
INSERT INTO `CountryLanguage` VALUES ('AUT', 'Hungarian', 'F', 0.4);
INSERT INTO `CountryLanguage` VALUES ('AUT', 'Polish', 'F', 0.2);
INSERT INTO `CountryLanguage` VALUES ('AUT', 'Romanian', 'F', 0.2);
INSERT INTO `CountryLanguage` VALUES ('AUT', 'Serbo-Croatian', 'F', 2.2);
INSERT INTO `CountryLanguage` VALUES ('AUT', 'Slovene', 'F', 0.4);
INSERT INTO `CountryLanguage` VALUES ('AUT', 'Turkish', 'F', 1.5);
INSERT INTO `CountryLanguage` VALUES ('AZE', 'Armenian', 'F', 2.0);
INSERT INTO `CountryLanguage` VALUES ('AZE', 'Azerbaijani', 'T', 89.0);
INSERT INTO `CountryLanguage` VALUES ('AZE', 'Lezgian', 'F', 2.3);
INSERT INTO `CountryLanguage` VALUES ('AZE', 'Russian', 'F', 3.0);
INSERT INTO `CountryLanguage` VALUES ('BDI', 'French', 'T', 0.0);
INSERT INTO `CountryLanguage` VALUES ('BDI', 'Kirundi', 'T', 98.1);
INSERT INTO `CountryLanguage` VALUES ('BDI', 'Swahili', 'F', 0.0);
INSERT INTO `CountryLanguage` VALUES ('BEL', 'Arabic', 'F', 1.6);
INSERT INTO `CountryLanguage` VALUES ('BEL', 'Dutch', 'T', 59.2);
INSERT INTO `CountryLanguage` VALUES ('BEL', 'French', 'T', 32.6);
INSERT INTO `CountryLanguage` VALUES ('BEL', 'German', 'T', 1.0);
INSERT INTO `CountryLanguage` VALUES ('BEL', 'Italian', 'F', 2.4);
INSERT INTO `CountryLanguage` VALUES ('BEL', 'Turkish', 'F', 0.9);
INSERT INTO `CountryLanguage` VALUES ('BEN', 'Adja', 'F', 11.1);
INSERT INTO `CountryLanguage` VALUES ('BEN', 'Aizo', 'F', 8.7);
INSERT INTO `CountryLanguage` VALUES ('BEN', 'Bariba', 'F', 8.7);
INSERT INTO `CountryLanguage` VALUES ('BEN', 'Fon', 'F', 39.8);
INSERT INTO `CountryLanguage` VALUES ('BEN', 'Ful', 'F', 5.6);
INSERT INTO `CountryLanguage` VALUES ('BEN', 'Joruba', 'F', 12.2);
INSERT INTO `CountryLanguage` VALUES ('BEN', 'Somba', 'F', 6.7);
INSERT INTO `CountryLanguage` VALUES ('BFA', 'Busansi', 'F', 3.5);
INSERT INTO `CountryLanguage` VALUES ('BFA', 'Dagara', 'F', 3.1);
INSERT INTO `CountryLanguage` VALUES ('BFA', 'Dyula', 'F', 2.6);
INSERT INTO `CountryLanguage` VALUES ('BFA', 'Ful', 'F', 9.7);
INSERT INTO `CountryLanguage` VALUES ('BFA', 'Gurma', 'F', 5.7);
INSERT INTO `CountryLanguage` VALUES ('BFA', 'Mossi', 'F', 50.2);
INSERT INTO `CountryLanguage` VALUES ('BGD', 'Bengali', 'T', 97.7);
INSERT INTO `CountryLanguage` VALUES ('BGD', 'Chakma', 'F', 0.4);
INSERT INTO `CountryLanguage` VALUES ('BGD', 'Garo', 'F', 0.1);
INSERT INTO `CountryLanguage` VALUES ('BGD', 'Khasi', 'F', 0.1);
INSERT INTO `CountryLanguage` VALUES ('BGD', 'Marma', 'F', 0.2);
INSERT INTO `CountryLanguage` VALUES ('BGD', 'Santhali', 'F', 0.1);
INSERT INTO `CountryLanguage` VALUES ('BGD', 'Tripuri', 'F', 0.1);
INSERT INTO `CountryLanguage` VALUES ('BGR', 'Bulgariana', 'T', 83.2);
INSERT INTO `CountryLanguage` VALUES ('BGR', 'Macedonian', 'F', 2.6);
INSERT INTO `CountryLanguage` VALUES ('BGR', 'Romani', 'F', 3.7);
INSERT INTO `CountryLanguage` VALUES ('BGR', 'Turkish', 'F', 9.4);
INSERT INTO `CountryLanguage` VALUES ('BHR', 'Arabic', 'T', 67.7);
INSERT INTO `CountryLanguage` VALUES ('BHR', 'English', 'F', 0.0);
INSERT INTO `CountryLanguage` VALUES ('BHS', 'Creole English', 'F', 89.7);
INSERT INTO `CountryLanguage` VALUES ('BHS', 'Creole French', 'F', 10.3);
INSERT INTO `CountryLanguage` VALUES ('BIH', 'Serbo-Croatian', 'T', 99.2);
INSERT INTO `CountryLanguage` VALUES ('BLR', 'Belorussian', 'T', 65.6);
INSERT INTO `CountryLanguage` VALUES ('BLR', 'Polish', 'F', 0.6);
INSERT INTO `CountryLanguage` VALUES ('BLR', 'Russian', 'T', 32.0);
INSERT INTO `CountryLanguage` VALUES ('BLR', 'Ukrainian', 'F', 1.3);
INSERT INTO `CountryLanguage` VALUES ('BLZ', 'English', 'T', 50.8);
INSERT INTO `CountryLanguage` VALUES ('BLZ', 'Garifuna', 'F', 6.8);
INSERT INTO `CountryLanguage` VALUES ('BLZ', 'Maya Languages', 'F', 9.6);
INSERT INTO `CountryLanguage` VALUES ('BLZ', 'Spanish', 'F', 31.6);
INSERT INTO `CountryLanguage` VALUES ('BMU', 'English', 'T', 100.0);
INSERT INTO `CountryLanguage` VALUES ('BOL', 'Aimará', 'T', 3.2);
INSERT INTO `CountryLanguage` VALUES ('BOL', 'Guaraní', 'F', 0.1);
INSERT INTO `CountryLanguage` VALUES ('BOL', 'Ketšua', 'T', 8.1);
INSERT INTO `CountryLanguage` VALUES ('BOL', 'Spanish', 'T', 87.7);
INSERT INTO `CountryLanguage` VALUES ('BRA', 'German', 'F', 0.5);
INSERT INTO `CountryLanguage` VALUES ('BRA', 'Indian Languages', 'F', 0.2);
INSERT INTO `CountryLanguage` VALUES ('BRA', 'Italian', 'F', 0.4);
INSERT INTO `CountryLanguage` VALUES ('BRA', 'Japanese', 'F', 0.4);
INSERT INTO `CountryLanguage` VALUES ('BRA', 'Portuguese', 'T', 97.5);
INSERT INTO `CountryLanguage` VALUES ('BRB', 'Bajan', 'F', 95.1);
INSERT INTO `CountryLanguage` VALUES ('BRB', 'English', 'T', 0.0);
INSERT INTO `CountryLanguage` VALUES ('BRN', 'Chinese', 'F', 9.3);
INSERT INTO `CountryLanguage` VALUES ('BRN', 'English', 'F', 3.1);
INSERT INTO `CountryLanguage` VALUES ('BRN', 'Malay', 'T', 45.5);
INSERT INTO `CountryLanguage` VALUES ('BRN', 'Malay-English', 'F', 28.8);
INSERT INTO `CountryLanguage` VALUES ('BTN', 'Asami', 'F', 15.2);
INSERT INTO `CountryLanguage` VALUES ('BTN', 'Dzongkha', 'T', 50.0);
INSERT INTO `CountryLanguage` VALUES ('BTN', 'Nepali', 'F', 34.8);
INSERT INTO `CountryLanguage` VALUES ('BWA', 'Khoekhoe', 'F', 2.5);
INSERT INTO `CountryLanguage` VALUES ('BWA', 'Ndebele', 'F', 1.3);
INSERT INTO `CountryLanguage` VALUES ('BWA', 'San', 'F', 3.5);
INSERT INTO `CountryLanguage` VALUES ('BWA', 'Shona', 'F', 12.3);
INSERT INTO `CountryLanguage` VALUES ('BWA', 'Tswana', 'F', 75.5);
INSERT INTO `CountryLanguage` VALUES ('CAF', 'Banda', 'F', 23.5);
INSERT INTO `CountryLanguage` VALUES ('CAF', 'Gbaya', 'F', 23.8);
INSERT INTO `CountryLanguage` VALUES ('CAF', 'Mandjia', 'F', 14.8);
INSERT INTO `CountryLanguage` VALUES ('CAF', 'Mbum', 'F', 6.4);
INSERT INTO `CountryLanguage` VALUES ('CAF', 'Ngbaka', 'F', 7.5);
INSERT INTO `CountryLanguage` VALUES ('CAF', 'Sara', 'F', 6.4);
INSERT INTO `CountryLanguage` VALUES ('CAN', 'Chinese', 'F', 2.5);
INSERT INTO `CountryLanguage` VALUES ('CAN', 'Dutch', 'F', 0.5);
INSERT INTO `CountryLanguage` VALUES ('CAN', 'English', 'T', 60.4);
INSERT INTO `CountryLanguage` VALUES ('CAN', 'Eskimo Languages', 'F', 0.1);
INSERT INTO `CountryLanguage` VALUES ('CAN', 'French', 'T', 23.4);
INSERT INTO `CountryLanguage` VALUES ('CAN', 'German', 'F', 1.6);
INSERT INTO `CountryLanguage` VALUES ('CAN', 'Italian', 'F', 1.7);
INSERT INTO `CountryLanguage` VALUES ('CAN', 'Polish', 'F', 0.7);
INSERT INTO `CountryLanguage` VALUES ('CAN', 'Portuguese', 'F', 0.7);
INSERT INTO `CountryLanguage` VALUES ('CAN', 'Punjabi', 'F', 0.7);
INSERT INTO `CountryLanguage` VALUES ('CAN', 'Spanish', 'F', 0.7);
INSERT INTO `CountryLanguage` VALUES ('CAN', 'Ukrainian', 'F', 0.6);
INSERT INTO `CountryLanguage` VALUES ('CCK', 'English', 'T', 0.0);
INSERT INTO `CountryLanguage` VALUES ('CCK', 'Malay', 'F', 0.0);
INSERT INTO `CountryLanguage` VALUES ('CHE', 'French', 'T', 19.2);
INSERT INTO `CountryLanguage` VALUES ('CHE', 'German', 'T', 63.6);
INSERT INTO `CountryLanguage` VALUES ('CHE', 'Italian', 'T', 7.7);
INSERT INTO `CountryLanguage` VALUES ('CHE', 'Romansh', 'T', 0.6);
INSERT INTO `CountryLanguage` VALUES ('CHL', 'Aimará', 'F', 0.5);
INSERT INTO `CountryLanguage` VALUES ('CHL', 'Araucan', 'F', 9.6);
INSERT INTO `CountryLanguage` VALUES ('CHL', 'Rapa nui', 'F', 0.2);
INSERT INTO `CountryLanguage` VALUES ('CHL', 'Spanish', 'T', 89.7);
INSERT INTO `CountryLanguage` VALUES ('CHN', 'Chinese', 'T', 92.0);
INSERT INTO `CountryLanguage` VALUES ('CHN', 'Dong', 'F', 0.2);
INSERT INTO `CountryLanguage` VALUES ('CHN', 'Hui', 'F', 0.8);
INSERT INTO `CountryLanguage` VALUES ('CHN', 'Mantšu', 'F', 0.9);
INSERT INTO `CountryLanguage` VALUES ('CHN', 'Miao', 'F', 0.7);
INSERT INTO `CountryLanguage` VALUES ('CHN', 'Mongolian', 'F', 0.4);
INSERT INTO `CountryLanguage` VALUES ('CHN', 'Puyi', 'F', 0.2);
INSERT INTO `CountryLanguage` VALUES ('CHN', 'Tibetan', 'F', 0.4);
INSERT INTO `CountryLanguage` VALUES ('CHN', 'Tujia', 'F', 0.5);
INSERT INTO `CountryLanguage` VALUES ('CHN', 'Uighur', 'F', 0.6);
INSERT INTO `CountryLanguage` VALUES ('CHN', 'Yi', 'F', 0.6);
INSERT INTO `CountryLanguage` VALUES ('CHN', 'Zhuang', 'F', 1.4);
INSERT INTO `CountryLanguage` VALUES ('CIV', 'Akan', 'F', 30.0);
INSERT INTO `CountryLanguage` VALUES ('CIV', 'Gur', 'F', 11.7);
INSERT INTO `CountryLanguage` VALUES ('CIV', 'Kru', 'F', 10.5);
INSERT INTO `CountryLanguage` VALUES ('CIV', 'Malinke', 'F', 11.4);
INSERT INTO `CountryLanguage` VALUES ('CIV', '[South]Mande', 'F', 7.7);
INSERT INTO `CountryLanguage` VALUES ('CMR', 'Bamileke-bamum', 'F', 18.6);
INSERT INTO `CountryLanguage` VALUES ('CMR', 'Duala', 'F', 10.9);
INSERT INTO `CountryLanguage` VALUES ('CMR', 'Fang', 'F', 19.7);
INSERT INTO `CountryLanguage` VALUES ('CMR', 'Ful', 'F', 9.6);
INSERT INTO `CountryLanguage` VALUES ('CMR', 'Maka', 'F', 4.9);
INSERT INTO `CountryLanguage` VALUES ('CMR', 'Mandara', 'F', 5.7);
INSERT INTO `CountryLanguage` VALUES ('CMR', 'Masana', 'F', 3.9);
INSERT INTO `CountryLanguage` VALUES ('CMR', 'Tikar', 'F', 7.4);
INSERT INTO `CountryLanguage` VALUES ('COD', 'Boa', 'F', 2.3);
INSERT INTO `CountryLanguage` VALUES ('COD', 'Chokwe', 'F', 1.8);
INSERT INTO `CountryLanguage` VALUES ('COD', 'Kongo', 'F', 16.0);
INSERT INTO `CountryLanguage` VALUES ('COD', 'Luba', 'F', 18.0);
INSERT INTO `CountryLanguage` VALUES ('COD', 'Mongo', 'F', 13.5);
INSERT INTO `CountryLanguage` VALUES ('COD', 'Ngala and Bangi', 'F', 5.8);
INSERT INTO `CountryLanguage` VALUES ('COD', 'Rundi', 'F', 3.8);
INSERT INTO `CountryLanguage` VALUES ('COD', 'Rwanda', 'F', 10.3);
INSERT INTO `CountryLanguage` VALUES ('COD', 'Teke', 'F', 2.7);
INSERT INTO `CountryLanguage` VALUES ('COD', 'Zande', 'F', 6.1);
INSERT INTO `CountryLanguage` VALUES ('COG', 'Kongo', 'F', 51.5);
INSERT INTO `CountryLanguage` VALUES ('COG', 'Mbete', 'F', 4.8);
INSERT INTO `CountryLanguage` VALUES ('COG', 'Mboshi', 'F', 11.4);
INSERT INTO `CountryLanguage` VALUES ('COG', 'Punu', 'F', 2.9);
INSERT INTO `CountryLanguage` VALUES ('COG', 'Sango', 'F', 2.6);
INSERT INTO `CountryLanguage` VALUES ('COG', 'Teke', 'F', 17.3);
INSERT INTO `CountryLanguage` VALUES ('COK', 'English', 'F', 0.0);
INSERT INTO `CountryLanguage` VALUES ('COK', 'Maori', 'T', 0.0);
INSERT INTO `CountryLanguage` VALUES ('COL', 'Arawakan', 'F', 0.1);
INSERT INTO `CountryLanguage` VALUES ('COL', 'Caribbean', 'F', 0.1);
INSERT INTO `CountryLanguage` VALUES ('COL', 'Chibcha', 'F', 0.4);
INSERT INTO `CountryLanguage` VALUES ('COL', 'Creole English', 'F', 0.1);
INSERT INTO `CountryLanguage` VALUES ('COL', 'Spanish', 'T', 99.0);
INSERT INTO `CountryLanguage` VALUES ('COM', 'Comorian', 'T', 75.0);
INSERT INTO `CountryLanguage` VALUES ('COM', 'Comorian-Arabic', 'F', 1.6);
INSERT INTO `CountryLanguage` VALUES ('COM', 'Comorian-French', 'F', 12.9);
INSERT INTO `CountryLanguage` VALUES ('COM', 'Comorian-madagassi', 'F', 5.5);
INSERT INTO `CountryLanguage` VALUES ('COM', 'Comorian-Swahili', 'F', 0.5);
INSERT INTO `CountryLanguage` VALUES ('CPV', 'Crioulo', 'F', 100.0);
INSERT INTO `CountryLanguage` VALUES ('CPV', 'Portuguese', 'T', 0.0);
INSERT INTO `CountryLanguage` VALUES ('CRI', 'Chibcha', 'F', 0.3);
INSERT INTO `CountryLanguage` VALUES ('CRI', 'Chinese', 'F', 0.2);
INSERT INTO `CountryLanguage` VALUES ('CRI', 'Creole English', 'F', 2.0);
INSERT INTO `CountryLanguage` VALUES ('CRI', 'Spanish', 'T', 97.5);
INSERT INTO `CountryLanguage` VALUES ('CUB', 'Spanish', 'T', 100.0);
INSERT INTO `CountryLanguage` VALUES ('CXR', 'Chinese', 'F', 0.0);
INSERT INTO `CountryLanguage` VALUES ('CXR', 'English', 'T', 0.0);
INSERT INTO `CountryLanguage` VALUES ('CYM', 'English', 'T', 0.0);
INSERT INTO `CountryLanguage` VALUES ('CYP', 'Greek', 'T', 74.1);
INSERT INTO `CountryLanguage` VALUES ('CYP', 'Turkish', 'T', 22.4);
INSERT INTO `CountryLanguage` VALUES ('CZE', 'Czech', 'T', 81.2);
INSERT INTO `CountryLanguage` VALUES ('CZE', 'German', 'F', 0.5);
INSERT INTO `CountryLanguage` VALUES ('CZE', 'Hungarian', 'F', 0.2);
INSERT INTO `CountryLanguage` VALUES ('CZE', 'Moravian', 'F', 12.9);
INSERT INTO `CountryLanguage` VALUES ('CZE', 'Polish', 'F', 0.6);
INSERT INTO `CountryLanguage` VALUES ('CZE', 'Romani', 'F', 0.3);
INSERT INTO `CountryLanguage` VALUES ('CZE', 'Silesiana', 'F', 0.4);
INSERT INTO `CountryLanguage` VALUES ('CZE', 'Slovak', 'F', 3.1);
INSERT INTO `CountryLanguage` VALUES ('DEU', 'German', 'T', 91.3);
INSERT INTO `CountryLanguage` VALUES ('DEU', 'Greek', 'F', 0.4);
INSERT INTO `CountryLanguage` VALUES ('DEU', 'Italian', 'F', 0.7);
INSERT INTO `CountryLanguage` VALUES ('DEU', 'Polish', 'F', 0.3);
INSERT INTO `CountryLanguage` VALUES ('DEU', 'Southern Slavic Languages', 'F', 1.4);
INSERT INTO `CountryLanguage` VALUES ('DEU', 'Turkish', 'F', 2.6);
INSERT INTO `CountryLanguage` VALUES ('DJI', 'Afar', 'F', 34.8);
INSERT INTO `CountryLanguage` VALUES ('DJI', 'Arabic', 'T', 10.6);
INSERT INTO `CountryLanguage` VALUES ('DJI', 'Somali', 'F', 43.9);
INSERT INTO `CountryLanguage` VALUES ('DMA', 'Creole English', 'F', 100.0);
INSERT INTO `CountryLanguage` VALUES ('DMA', 'Creole French', 'F', 0.0);
INSERT INTO `CountryLanguage` VALUES ('DNK', 'Arabic', 'F', 0.7);
INSERT INTO `CountryLanguage` VALUES ('DNK', 'Danish', 'T', 93.5);
INSERT INTO `CountryLanguage` VALUES ('DNK', 'English', 'F', 0.3);
INSERT INTO `CountryLanguage` VALUES ('DNK', 'German', 'F', 0.5);
INSERT INTO `CountryLanguage` VALUES ('DNK', 'Norwegian', 'F', 0.3);
INSERT INTO `CountryLanguage` VALUES ('DNK', 'Swedish', 'F', 0.3);
INSERT INTO `CountryLanguage` VALUES ('DNK', 'Turkish', 'F', 0.8);
INSERT INTO `CountryLanguage` VALUES ('DOM', 'Creole French', 'F', 2.0);
INSERT INTO `CountryLanguage` VALUES ('DOM', 'Spanish', 'T', 98.0);
INSERT INTO `CountryLanguage` VALUES ('DZA', 'Arabic', 'T', 86.0);
INSERT INTO `CountryLanguage` VALUES ('DZA', 'Berberi', 'F', 14.0);
INSERT INTO `CountryLanguage` VALUES ('ECU', 'Ketšua', 'F', 7.0);
INSERT INTO `CountryLanguage` VALUES ('ECU', 'Spanish', 'T', 93.0);
INSERT INTO `CountryLanguage` VALUES ('EGY', 'Arabic', 'T', 98.8);
INSERT INTO `CountryLanguage` VALUES ('EGY', 'Sinaberberi', 'F', 0.0);
INSERT INTO `CountryLanguage` VALUES ('ERI', 'Afar', 'F', 4.3);
INSERT INTO `CountryLanguage` VALUES ('ERI', 'Bilin', 'F', 3.0);
INSERT INTO `CountryLanguage` VALUES ('ERI', 'Hadareb', 'F', 3.8);
INSERT INTO `CountryLanguage` VALUES ('ERI', 'Saho', 'F', 3.0);
INSERT INTO `CountryLanguage` VALUES ('ERI', 'Tigre', 'F', 31.7);
INSERT INTO `CountryLanguage` VALUES ('ERI', 'Tigrinja', 'T', 49.1);
INSERT INTO `CountryLanguage` VALUES ('ESH', 'Arabic', 'T', 100.0);
INSERT INTO `CountryLanguage` VALUES ('ESP', 'Basque', 'F', 1.6);
INSERT INTO `CountryLanguage` VALUES ('ESP', 'Catalan', 'F', 16.9);
INSERT INTO `CountryLanguage` VALUES ('ESP', 'Galecian', 'F', 6.4);
INSERT INTO `CountryLanguage` VALUES ('ESP', 'Spanish', 'T', 74.4);
INSERT INTO `CountryLanguage` VALUES ('EST', 'Belorussian', 'F', 1.4);
INSERT INTO `CountryLanguage` VALUES ('EST', 'Estonian', 'T', 65.3);
INSERT INTO `CountryLanguage` VALUES ('EST', 'Finnish', 'F', 0.7);
INSERT INTO `CountryLanguage` VALUES ('EST', 'Russian', 'F', 27.8);
INSERT INTO `CountryLanguage` VALUES ('EST', 'Ukrainian', 'F', 2.8);
INSERT INTO `CountryLanguage` VALUES ('ETH', 'Amhara', 'F', 30.0);
INSERT INTO `CountryLanguage` VALUES ('ETH', 'Gurage', 'F', 4.7);
INSERT INTO `CountryLanguage` VALUES ('ETH', 'Oromo', 'F', 31.0);
INSERT INTO `CountryLanguage` VALUES ('ETH', 'Sidamo', 'F', 3.2);
INSERT INTO `CountryLanguage` VALUES ('ETH', 'Somali', 'F', 4.1);
INSERT INTO `CountryLanguage` VALUES ('ETH', 'Tigrinja', 'F', 7.2);
INSERT INTO `CountryLanguage` VALUES ('ETH', 'Walaita', 'F', 2.8);
INSERT INTO `CountryLanguage` VALUES ('FIN', 'Estonian', 'F', 0.2);
INSERT INTO `CountryLanguage` VALUES ('FIN', 'Finnish', 'T', 92.7);
INSERT INTO `CountryLanguage` VALUES ('FIN', 'Russian', 'F', 0.4);
INSERT INTO `CountryLanguage` VALUES ('FIN', 'Saame', 'F', 0.0);
INSERT INTO `CountryLanguage` VALUES ('FIN', 'Swedish', 'T', 5.7);
INSERT INTO `CountryLanguage` VALUES ('FJI', 'Fijian', 'T', 50.8);
INSERT INTO `CountryLanguage` VALUES ('FJI', 'Hindi', 'F', 43.7);
INSERT INTO `CountryLanguage` VALUES ('FLK', 'English', 'T', 0.0);
INSERT INTO `CountryLanguage` VALUES ('FRA', 'Arabic', 'F', 2.5);
INSERT INTO `CountryLanguage` VALUES ('FRA', 'French', 'T', 93.6);
INSERT INTO `CountryLanguage` VALUES ('FRA', 'Italian', 'F', 0.4);
INSERT INTO `CountryLanguage` VALUES ('FRA', 'Portuguese', 'F', 1.2);
INSERT INTO `CountryLanguage` VALUES ('FRA', 'Spanish', 'F', 0.4);
INSERT INTO `CountryLanguage` VALUES ('FRA', 'Turkish', 'F', 0.4);
INSERT INTO `CountryLanguage` VALUES ('FRO', 'Danish', 'T', 0.0);
INSERT INTO `CountryLanguage` VALUES ('FRO', 'Faroese', 'T', 100.0);
INSERT INTO `CountryLanguage` VALUES ('FSM', 'Kosrean', 'F', 7.3);
INSERT INTO `CountryLanguage` VALUES ('FSM', 'Mortlock', 'F', 7.6);
INSERT INTO `CountryLanguage` VALUES ('FSM', 'Pohnpei', 'F', 23.8);
INSERT INTO `CountryLanguage` VALUES ('FSM', 'Trukese', 'F', 41.6);
INSERT INTO `CountryLanguage` VALUES ('FSM', 'Wolea', 'F', 3.7);
INSERT INTO `CountryLanguage` VALUES ('FSM', 'Yap', 'F', 5.8);
INSERT INTO `CountryLanguage` VALUES ('GAB', 'Fang', 'F', 35.8);
INSERT INTO `CountryLanguage` VALUES ('GAB', 'Mbete', 'F', 13.8);
INSERT INTO `CountryLanguage` VALUES ('GAB', 'Mpongwe', 'F', 14.6);
INSERT INTO `CountryLanguage` VALUES ('GAB', 'Punu-sira-nzebi', 'F', 17.1);
INSERT INTO `CountryLanguage` VALUES ('GBR', 'English', 'T', 97.3);
INSERT INTO `CountryLanguage` VALUES ('GBR', 'Gaeli', 'F', 0.1);
INSERT INTO `CountryLanguage` VALUES ('GBR', 'Kymri', 'F', 0.9);
INSERT INTO `CountryLanguage` VALUES ('GEO', 'Abhyasi', 'F', 1.7);
INSERT INTO `CountryLanguage` VALUES ('GEO', 'Armenian', 'F', 6.8);
INSERT INTO `CountryLanguage` VALUES ('GEO', 'Azerbaijani', 'F', 5.5);
INSERT INTO `CountryLanguage` VALUES ('GEO', 'Georgiana', 'T', 71.7);
INSERT INTO `CountryLanguage` VALUES ('GEO', 'Osseetti', 'F', 2.4);
INSERT INTO `CountryLanguage` VALUES ('GEO', 'Russian', 'F', 8.8);
INSERT INTO `CountryLanguage` VALUES ('GHA', 'Akan', 'F', 52.4);
INSERT INTO `CountryLanguage` VALUES ('GHA', 'Ewe', 'F', 11.9);
INSERT INTO `CountryLanguage` VALUES ('GHA', 'Ga-adangme', 'F', 7.8);
INSERT INTO `CountryLanguage` VALUES ('GHA', 'Gurma', 'F', 3.3);
INSERT INTO `CountryLanguage` VALUES ('GHA', 'Joruba', 'F', 1.3);
INSERT INTO `CountryLanguage` VALUES ('GHA', 'Mossi', 'F', 15.8);
INSERT INTO `CountryLanguage` VALUES ('GIB', 'Arabic', 'F', 7.4);
INSERT INTO `CountryLanguage` VALUES ('GIB', 'English', 'T', 88.9);
INSERT INTO `CountryLanguage` VALUES ('GIN', 'Ful', 'F', 38.6);
INSERT INTO `CountryLanguage` VALUES ('GIN', 'Kissi', 'F', 6.0);
INSERT INTO `CountryLanguage` VALUES ('GIN', 'Kpelle', 'F', 4.6);
INSERT INTO `CountryLanguage` VALUES ('GIN', 'Loma', 'F', 2.3);
INSERT INTO `CountryLanguage` VALUES ('GIN', 'Malinke', 'F', 23.2);
INSERT INTO `CountryLanguage` VALUES ('GIN', 'Susu', 'F', 11.0);
INSERT INTO `CountryLanguage` VALUES ('GIN', 'Yalunka', 'F', 2.9);
INSERT INTO `CountryLanguage` VALUES ('GLP', 'Creole French', 'F', 95.0);
INSERT INTO `CountryLanguage` VALUES ('GLP', 'French', 'T', 0.0);
INSERT INTO `CountryLanguage` VALUES ('GMB', 'Diola', 'F', 9.2);
INSERT INTO `CountryLanguage` VALUES ('GMB', 'Ful', 'F', 16.2);
INSERT INTO `CountryLanguage` VALUES ('GMB', 'Malinke', 'F', 34.1);
INSERT INTO `CountryLanguage` VALUES ('GMB', 'Soninke', 'F', 7.6);
INSERT INTO `CountryLanguage` VALUES ('GMB', 'Wolof', 'F', 12.6);
INSERT INTO `CountryLanguage` VALUES ('GNB', 'Balante', 'F', 14.6);
INSERT INTO `CountryLanguage` VALUES ('GNB', 'Crioulo', 'F', 36.4);
INSERT INTO `CountryLanguage` VALUES ('GNB', 'Ful', 'F', 16.6);
INSERT INTO `CountryLanguage` VALUES ('GNB', 'Malinke', 'F', 6.9);
INSERT INTO `CountryLanguage` VALUES ('GNB', 'Mandyako', 'F', 4.9);
INSERT INTO `CountryLanguage` VALUES ('GNB', 'Portuguese', 'T', 8.1);
INSERT INTO `CountryLanguage` VALUES ('GNQ', 'Bubi', 'F', 8.7);
INSERT INTO `CountryLanguage` VALUES ('GNQ', 'Fang', 'F', 84.8);
INSERT INTO `CountryLanguage` VALUES ('GRC', 'Greek', 'T', 98.5);
INSERT INTO `CountryLanguage` VALUES ('GRC', 'Turkish', 'F', 0.9);
INSERT INTO `CountryLanguage` VALUES ('GRD', 'Creole English', 'F', 100.0);
INSERT INTO `CountryLanguage` VALUES ('GRL', 'Danish', 'T', 12.5);
INSERT INTO `CountryLanguage` VALUES ('GRL', 'Greenlandic', 'T', 87.5);
INSERT INTO `CountryLanguage` VALUES ('GTM', 'Cakchiquel', 'F', 8.9);
INSERT INTO `CountryLanguage` VALUES ('GTM', 'Kekchí', 'F', 4.9);
INSERT INTO `CountryLanguage` VALUES ('GTM', 'Mam', 'F', 2.7);
INSERT INTO `CountryLanguage` VALUES ('GTM', 'Quiché', 'F', 10.1);
INSERT INTO `CountryLanguage` VALUES ('GTM', 'Spanish', 'T', 64.7);
INSERT INTO `CountryLanguage` VALUES ('GUF', 'Creole French', 'F', 94.3);
INSERT INTO `CountryLanguage` VALUES ('GUF', 'Indian Languages', 'F', 1.9);
INSERT INTO `CountryLanguage` VALUES ('GUM', 'Chamorro', 'T', 29.6);
INSERT INTO `CountryLanguage` VALUES ('GUM', 'English', 'T', 37.5);
INSERT INTO `CountryLanguage` VALUES ('GUM', 'Japanese', 'F', 2.0);
INSERT INTO `CountryLanguage` VALUES ('GUM', 'Korean', 'F', 3.3);
INSERT INTO `CountryLanguage` VALUES ('GUM', 'Philippene Languages', 'F', 19.7);
INSERT INTO `CountryLanguage` VALUES ('GUY', 'Arawakan', 'F', 1.4);
INSERT INTO `CountryLanguage` VALUES ('GUY', 'Caribbean', 'F', 2.2);
INSERT INTO `CountryLanguage` VALUES ('GUY', 'Creole English', 'F', 96.4);
INSERT INTO `CountryLanguage` VALUES ('HKG', 'Canton Chinese', 'F', 88.7);
INSERT INTO `CountryLanguage` VALUES ('HKG', 'Chiu chau', 'F', 1.4);
INSERT INTO `CountryLanguage` VALUES ('HKG', 'English', 'T', 2.2);
INSERT INTO `CountryLanguage` VALUES ('HKG', 'Fukien', 'F', 1.9);
INSERT INTO `CountryLanguage` VALUES ('HKG', 'Hakka', 'F', 1.6);
INSERT INTO `CountryLanguage` VALUES ('HND', 'Creole English', 'F', 0.2);
INSERT INTO `CountryLanguage` VALUES ('HND', 'Garifuna', 'F', 1.3);
INSERT INTO `CountryLanguage` VALUES ('HND', 'Miskito', 'F', 0.2);
INSERT INTO `CountryLanguage` VALUES ('HND', 'Spanish', 'T', 97.2);
INSERT INTO `CountryLanguage` VALUES ('HRV', 'Serbo-Croatian', 'T', 95.9);
INSERT INTO `CountryLanguage` VALUES ('HRV', 'Slovene', 'F', 0.0);
INSERT INTO `CountryLanguage` VALUES ('HTI', 'French', 'T', 0.0);
INSERT INTO `CountryLanguage` VALUES ('HTI', 'Haiti Creole', 'F', 100.0);
INSERT INTO `CountryLanguage` VALUES ('HUN', 'German', 'F', 0.4);
INSERT INTO `CountryLanguage` VALUES ('HUN', 'Hungarian', 'T', 98.5);
INSERT INTO `CountryLanguage` VALUES ('HUN', 'Romani', 'F', 0.5);
INSERT INTO `CountryLanguage` VALUES ('HUN', 'Romanian', 'F', 0.1);
INSERT INTO `CountryLanguage` VALUES ('HUN', 'Serbo-Croatian', 'F', 0.2);
INSERT INTO `CountryLanguage` VALUES ('HUN', 'Slovak', 'F', 0.1);
INSERT INTO `CountryLanguage` VALUES ('IDN', 'Bali', 'F', 1.7);
INSERT INTO `CountryLanguage` VALUES ('IDN', 'Banja', 'F', 1.8);
INSERT INTO `CountryLanguage` VALUES ('IDN', 'Batakki', 'F', 2.2);
INSERT INTO `CountryLanguage` VALUES ('IDN', 'Bugi', 'F', 2.2);
INSERT INTO `CountryLanguage` VALUES ('IDN', 'Javanese', 'F', 39.4);
INSERT INTO `CountryLanguage` VALUES ('IDN', 'Madura', 'F', 4.3);
INSERT INTO `CountryLanguage` VALUES ('IDN', 'Malay', 'T', 12.1);
INSERT INTO `CountryLanguage` VALUES ('IDN', 'Minangkabau', 'F', 2.4);
INSERT INTO `CountryLanguage` VALUES ('IDN', 'Sunda', 'F', 15.8);
INSERT INTO `CountryLanguage` VALUES ('IND', 'Asami', 'F', 1.5);
INSERT INTO `CountryLanguage` VALUES ('IND', 'Bengali', 'F', 8.2);
INSERT INTO `CountryLanguage` VALUES ('IND', 'Gujarati', 'F', 4.8);
INSERT INTO `CountryLanguage` VALUES ('IND', 'Hindi', 'T', 39.9);
INSERT INTO `CountryLanguage` VALUES ('IND', 'Kannada', 'F', 3.9);
INSERT INTO `CountryLanguage` VALUES ('IND', 'Malajalam', 'F', 3.6);
INSERT INTO `CountryLanguage` VALUES ('IND', 'Marathi', 'F', 7.4);
INSERT INTO `CountryLanguage` VALUES ('IND', 'Orija', 'F', 3.3);
INSERT INTO `CountryLanguage` VALUES ('IND', 'Punjabi', 'F', 2.8);
INSERT INTO `CountryLanguage` VALUES ('IND', 'Tamil', 'F', 6.3);
INSERT INTO `CountryLanguage` VALUES ('IND', 'Telugu', 'F', 7.8);
INSERT INTO `CountryLanguage` VALUES ('IND', 'Urdu', 'F', 5.1);
INSERT INTO `CountryLanguage` VALUES ('IRL', 'English', 'T', 98.4);
INSERT INTO `CountryLanguage` VALUES ('IRL', 'Irish', 'T', 1.6);
INSERT INTO `CountryLanguage` VALUES ('IRN', 'Arabic', 'F', 2.2);
INSERT INTO `CountryLanguage` VALUES ('IRN', 'Azerbaijani', 'F', 16.8);
INSERT INTO `CountryLanguage` VALUES ('IRN', 'Bakhtyari', 'F', 1.7);
INSERT INTO `CountryLanguage` VALUES ('IRN', 'Balochi', 'F', 2.3);
INSERT INTO `CountryLanguage` VALUES ('IRN', 'Gilaki', 'F', 5.3);
INSERT INTO `CountryLanguage` VALUES ('IRN', 'Kurdish', 'F', 9.1);
INSERT INTO `CountryLanguage` VALUES ('IRN', 'Luri', 'F', 4.3);
INSERT INTO `CountryLanguage` VALUES ('IRN', 'Mazandarani', 'F', 3.6);
INSERT INTO `CountryLanguage` VALUES ('IRN', 'Persian', 'T', 45.7);
INSERT INTO `CountryLanguage` VALUES ('IRN', 'Turkmenian', 'F', 1.6);
INSERT INTO `CountryLanguage` VALUES ('IRQ', 'Arabic', 'T', 77.2);
INSERT INTO `CountryLanguage` VALUES ('IRQ', 'Assyrian', 'F', 0.8);
INSERT INTO `CountryLanguage` VALUES ('IRQ', 'Azerbaijani', 'F', 1.7);
INSERT INTO `CountryLanguage` VALUES ('IRQ', 'Kurdish', 'F', 19.0);
INSERT INTO `CountryLanguage` VALUES ('IRQ', 'Persian', 'F', 0.8);
INSERT INTO `CountryLanguage` VALUES ('ISL', 'English', 'F', 0.0);
INSERT INTO `CountryLanguage` VALUES ('ISL', 'Icelandic', 'T', 95.7);
INSERT INTO `CountryLanguage` VALUES ('ISR', 'Arabic', 'T', 18.0);
INSERT INTO `CountryLanguage` VALUES ('ISR', 'Hebrew', 'T', 63.1);
INSERT INTO `CountryLanguage` VALUES ('ISR', 'Russian', 'F', 8.9);
INSERT INTO `CountryLanguage` VALUES ('ITA', 'Albaniana', 'F', 0.2);
INSERT INTO `CountryLanguage` VALUES ('ITA', 'French', 'F', 0.5);
INSERT INTO `CountryLanguage` VALUES ('ITA', 'Friuli', 'F', 1.2);
INSERT INTO `CountryLanguage` VALUES ('ITA', 'German', 'F', 0.5);
INSERT INTO `CountryLanguage` VALUES ('ITA', 'Italian', 'T', 94.1);
INSERT INTO `CountryLanguage` VALUES ('ITA', 'Romani', 'F', 0.2);
INSERT INTO `CountryLanguage` VALUES ('ITA', 'Sardinian', 'F', 2.7);
INSERT INTO `CountryLanguage` VALUES ('ITA', 'Slovene', 'F', 0.2);
INSERT INTO `CountryLanguage` VALUES ('JAM', 'Creole English', 'F', 94.2);
INSERT INTO `CountryLanguage` VALUES ('JAM', 'Hindi', 'F', 1.9);
INSERT INTO `CountryLanguage` VALUES ('JOR', 'Arabic', 'T', 97.9);
INSERT INTO `CountryLanguage` VALUES ('JOR', 'Armenian', 'F', 1.0);
INSERT INTO `CountryLanguage` VALUES ('JOR', 'Circassian', 'F', 1.0);
INSERT INTO `CountryLanguage` VALUES ('JPN', 'Ainu', 'F', 0.0);
INSERT INTO `CountryLanguage` VALUES ('JPN', 'Chinese', 'F', 0.2);
INSERT INTO `CountryLanguage` VALUES ('JPN', 'English', 'F', 0.1);
INSERT INTO `CountryLanguage` VALUES ('JPN', 'Japanese', 'T', 99.1);
INSERT INTO `CountryLanguage` VALUES ('JPN', 'Korean', 'F', 0.5);
INSERT INTO `CountryLanguage` VALUES ('JPN', 'Philippene Languages', 'F', 0.1);
INSERT INTO `CountryLanguage` VALUES ('KAZ', 'German', 'F', 3.1);
INSERT INTO `CountryLanguage` VALUES ('KAZ', 'Kazakh', 'T', 46.0);
INSERT INTO `CountryLanguage` VALUES ('KAZ', 'Russian', 'F', 34.7);
INSERT INTO `CountryLanguage` VALUES ('KAZ', 'Tatar', 'F', 2.0);
INSERT INTO `CountryLanguage` VALUES ('KAZ', 'Ukrainian', 'F', 5.0);
INSERT INTO `CountryLanguage` VALUES ('KAZ', 'Uzbek', 'F', 2.3);
INSERT INTO `CountryLanguage` VALUES ('KEN', 'Gusii', 'F', 6.1);
INSERT INTO `CountryLanguage` VALUES ('KEN', 'Kalenjin', 'F', 10.8);
INSERT INTO `CountryLanguage` VALUES ('KEN', 'Kamba', 'F', 11.2);
INSERT INTO `CountryLanguage` VALUES ('KEN', 'Kikuyu', 'F', 20.9);
INSERT INTO `CountryLanguage` VALUES ('KEN', 'Luhya', 'F', 13.8);
INSERT INTO `CountryLanguage` VALUES ('KEN', 'Luo', 'F', 12.8);
INSERT INTO `CountryLanguage` VALUES ('KEN', 'Masai', 'F', 1.6);
INSERT INTO `CountryLanguage` VALUES ('KEN', 'Meru', 'F', 5.5);
INSERT INTO `CountryLanguage` VALUES ('KEN', 'Nyika', 'F', 4.8);
INSERT INTO `CountryLanguage` VALUES ('KEN', 'Turkana', 'F', 1.4);
INSERT INTO `CountryLanguage` VALUES ('KGZ', 'Kazakh', 'F', 0.8);
INSERT INTO `CountryLanguage` VALUES ('KGZ', 'Kirgiz', 'T', 59.7);
INSERT INTO `CountryLanguage` VALUES ('KGZ', 'Russian', 'T', 16.2);
INSERT INTO `CountryLanguage` VALUES ('KGZ', 'Tadzhik', 'F', 0.8);
INSERT INTO `CountryLanguage` VALUES ('KGZ', 'Tatar', 'F', 1.3);
INSERT INTO `CountryLanguage` VALUES ('KGZ', 'Ukrainian', 'F', 1.7);
INSERT INTO `CountryLanguage` VALUES ('KGZ', 'Uzbek', 'F', 14.1);
INSERT INTO `CountryLanguage` VALUES ('KHM', 'Chinese', 'F', 3.1);
INSERT INTO `CountryLanguage` VALUES ('KHM', 'Khmer', 'T', 88.6);
INSERT INTO `CountryLanguage` VALUES ('KHM', 'Tšam', 'F', 2.4);
INSERT INTO `CountryLanguage` VALUES ('KHM', 'Vietnamese', 'F', 5.5);
INSERT INTO `CountryLanguage` VALUES ('KIR', 'Kiribati', 'T', 98.9);
INSERT INTO `CountryLanguage` VALUES ('KIR', 'Tuvalu', 'F', 0.5);
INSERT INTO `CountryLanguage` VALUES ('KNA', 'Creole English', 'F', 100.0);
INSERT INTO `CountryLanguage` VALUES ('KNA', 'English', 'T', 0.0);
INSERT INTO `CountryLanguage` VALUES ('KOR', 'Chinese', 'F', 0.1);
INSERT INTO `CountryLanguage` VALUES ('KOR', 'Korean', 'T', 99.9);
INSERT INTO `CountryLanguage` VALUES ('KWT', 'Arabic', 'T', 78.1);
INSERT INTO `CountryLanguage` VALUES ('KWT', 'English', 'F', 0.0);
INSERT INTO `CountryLanguage` VALUES ('LAO', 'Lao', 'T', 67.2);
INSERT INTO `CountryLanguage` VALUES ('LAO', 'Lao-Soung', 'F', 5.2);
INSERT INTO `CountryLanguage` VALUES ('LAO', 'Mon-khmer', 'F', 16.5);
INSERT INTO `CountryLanguage` VALUES ('LAO', 'Thai', 'F', 7.8);
INSERT INTO `CountryLanguage` VALUES ('LBN', 'Arabic', 'T', 93.0);
INSERT INTO `CountryLanguage` VALUES ('LBN', 'Armenian', 'F', 5.9);
INSERT INTO `CountryLanguage` VALUES ('LBN', 'French', 'F', 0.0);
INSERT INTO `CountryLanguage` VALUES ('LBR', 'Bassa', 'F', 13.7);
INSERT INTO `CountryLanguage` VALUES ('LBR', 'Gio', 'F', 7.9);
INSERT INTO `CountryLanguage` VALUES ('LBR', 'Grebo', 'F', 8.9);
INSERT INTO `CountryLanguage` VALUES ('LBR', 'Kpelle', 'F', 19.5);
INSERT INTO `CountryLanguage` VALUES ('LBR', 'Kru', 'F', 7.2);
INSERT INTO `CountryLanguage` VALUES ('LBR', 'Loma', 'F', 5.8);
INSERT INTO `CountryLanguage` VALUES ('LBR', 'Malinke', 'F', 5.1);
INSERT INTO `CountryLanguage` VALUES ('LBR', 'Mano', 'F', 7.2);
INSERT INTO `CountryLanguage` VALUES ('LBY', 'Arabic', 'T', 96.0);
INSERT INTO `CountryLanguage` VALUES ('LBY', 'Berberi', 'F', 1.0);
INSERT INTO `CountryLanguage` VALUES ('LCA', 'Creole French', 'F', 80.0);
INSERT INTO `CountryLanguage` VALUES ('LCA', 'English', 'T', 20.0);
INSERT INTO `CountryLanguage` VALUES ('LIE', 'German', 'T', 89.0);
INSERT INTO `CountryLanguage` VALUES ('LIE', 'Italian', 'F', 2.5);
INSERT INTO `CountryLanguage` VALUES ('LIE', 'Turkish', 'F', 2.5);
INSERT INTO `CountryLanguage` VALUES ('LKA', 'Mixed Languages', 'F', 19.6);
INSERT INTO `CountryLanguage` VALUES ('LKA', 'Singali', 'T', 60.3);
INSERT INTO `CountryLanguage` VALUES ('LKA', 'Tamil', 'T', 19.6);
INSERT INTO `CountryLanguage` VALUES ('LSO', 'English', 'T', 0.0);
INSERT INTO `CountryLanguage` VALUES ('LSO', 'Sotho', 'T', 85.0);
INSERT INTO `CountryLanguage` VALUES ('LSO', 'Zulu', 'F', 15.0);
INSERT INTO `CountryLanguage` VALUES ('LTU', 'Belorussian', 'F', 1.4);
INSERT INTO `CountryLanguage` VALUES ('LTU', 'Lithuanian', 'T', 81.6);
INSERT INTO `CountryLanguage` VALUES ('LTU', 'Polish', 'F', 7.0);
INSERT INTO `CountryLanguage` VALUES ('LTU', 'Russian', 'F', 8.1);
INSERT INTO `CountryLanguage` VALUES ('LTU', 'Ukrainian', 'F', 1.1);
INSERT INTO `CountryLanguage` VALUES ('LUX', 'French', 'T', 4.2);
INSERT INTO `CountryLanguage` VALUES ('LUX', 'German', 'T', 2.3);
INSERT INTO `CountryLanguage` VALUES ('LUX', 'Italian', 'F', 4.6);
INSERT INTO `CountryLanguage` VALUES ('LUX', 'Luxembourgish', 'T', 64.4);
INSERT INTO `CountryLanguage` VALUES ('LUX', 'Portuguese', 'F', 13.0);
INSERT INTO `CountryLanguage` VALUES ('LVA', 'Belorussian', 'F', 4.1);
INSERT INTO `CountryLanguage` VALUES ('LVA', 'Latvian', 'T', 55.1);
INSERT INTO `CountryLanguage` VALUES ('LVA', 'Lithuanian', 'F', 1.2);
INSERT INTO `CountryLanguage` VALUES ('LVA', 'Polish', 'F', 2.1);
INSERT INTO `CountryLanguage` VALUES ('LVA', 'Russian', 'F', 32.5);
INSERT INTO `CountryLanguage` VALUES ('LVA', 'Ukrainian', 'F', 2.9);
INSERT INTO `CountryLanguage` VALUES ('MAC', 'Canton Chinese', 'F', 85.6);
INSERT INTO `CountryLanguage` VALUES ('MAC', 'English', 'F', 0.5);
INSERT INTO `CountryLanguage` VALUES ('MAC', 'Mandarin Chinese', 'F', 1.2);
INSERT INTO `CountryLanguage` VALUES ('MAC', 'Portuguese', 'T', 2.3);
INSERT INTO `CountryLanguage` VALUES ('MAR', 'Arabic', 'T', 65.0);
INSERT INTO `CountryLanguage` VALUES ('MAR', 'Berberi', 'F', 33.0);
INSERT INTO `CountryLanguage` VALUES ('MCO', 'English', 'F', 6.5);
INSERT INTO `CountryLanguage` VALUES ('MCO', 'French', 'T', 41.9);
INSERT INTO `CountryLanguage` VALUES ('MCO', 'Italian', 'F', 16.1);
INSERT INTO `CountryLanguage` VALUES ('MCO', 'Monegasque', 'F', 16.1);
INSERT INTO `CountryLanguage` VALUES ('MDA', 'Bulgariana', 'F', 1.6);
INSERT INTO `CountryLanguage` VALUES ('MDA', 'Gagauzi', 'F', 3.2);
INSERT INTO `CountryLanguage` VALUES ('MDA', 'Romanian', 'T', 61.9);
INSERT INTO `CountryLanguage` VALUES ('MDA', 'Russian', 'F', 23.2);
INSERT INTO `CountryLanguage` VALUES ('MDA', 'Ukrainian', 'F', 8.6);
INSERT INTO `CountryLanguage` VALUES ('MDG', 'French', 'T', 0.0);
INSERT INTO `CountryLanguage` VALUES ('MDG', 'Malagasy', 'T', 98.9);
INSERT INTO `CountryLanguage` VALUES ('MDV', 'Dhivehi', 'T', 100.0);
INSERT INTO `CountryLanguage` VALUES ('MDV', 'English', 'F', 0.0);
INSERT INTO `CountryLanguage` VALUES ('MEX', 'Mixtec', 'F', 0.6);
INSERT INTO `CountryLanguage` VALUES ('MEX', 'Náhuatl', 'F', 1.8);
INSERT INTO `CountryLanguage` VALUES ('MEX', 'Otomí', 'F', 0.4);
INSERT INTO `CountryLanguage` VALUES ('MEX', 'Spanish', 'T', 92.1);
INSERT INTO `CountryLanguage` VALUES ('MEX', 'Yucatec', 'F', 1.1);
INSERT INTO `CountryLanguage` VALUES ('MEX', 'Zapotec', 'F', 0.6);
INSERT INTO `CountryLanguage` VALUES ('MHL', 'English', 'T', 0.0);
INSERT INTO `CountryLanguage` VALUES ('MHL', 'Marshallese', 'T', 96.8);
INSERT INTO `CountryLanguage` VALUES ('MKD', 'Albaniana', 'F', 22.9);
INSERT INTO `CountryLanguage` VALUES ('MKD', 'Macedonian', 'T', 66.5);
INSERT INTO `CountryLanguage` VALUES ('MKD', 'Romani', 'F', 2.3);
INSERT INTO `CountryLanguage` VALUES ('MKD', 'Serbo-Croatian', 'F', 2.0);
INSERT INTO `CountryLanguage` VALUES ('MKD', 'Turkish', 'F', 4.0);
INSERT INTO `CountryLanguage` VALUES ('MLI', 'Bambara', 'F', 31.8);
INSERT INTO `CountryLanguage` VALUES ('MLI', 'Ful', 'F', 13.9);
INSERT INTO `CountryLanguage` VALUES ('MLI', 'Senufo and Minianka', 'F', 12.0);
INSERT INTO `CountryLanguage` VALUES ('MLI', 'Songhai', 'F', 6.9);
INSERT INTO `CountryLanguage` VALUES ('MLI', 'Soninke', 'F', 8.7);
INSERT INTO `CountryLanguage` VALUES ('MLI', 'Tamashek', 'F', 7.3);
INSERT INTO `CountryLanguage` VALUES ('MLT', 'English', 'T', 2.1);
INSERT INTO `CountryLanguage` VALUES ('MLT', 'Maltese', 'T', 95.8);
INSERT INTO `CountryLanguage` VALUES ('MMR', 'Burmese', 'T', 69.0);
INSERT INTO `CountryLanguage` VALUES ('MMR', 'Chin', 'F', 2.2);
INSERT INTO `CountryLanguage` VALUES ('MMR', 'Kachin', 'F', 1.4);
INSERT INTO `CountryLanguage` VALUES ('MMR', 'Karen', 'F', 6.2);
INSERT INTO `CountryLanguage` VALUES ('MMR', 'Kayah', 'F', 0.4);
INSERT INTO `CountryLanguage` VALUES ('MMR', 'Mon', 'F', 2.4);
INSERT INTO `CountryLanguage` VALUES ('MMR', 'Rakhine', 'F', 4.5);
INSERT INTO `CountryLanguage` VALUES ('MMR', 'Shan', 'F', 8.5);
INSERT INTO `CountryLanguage` VALUES ('MNG', 'Bajad', 'F', 1.9);
INSERT INTO `CountryLanguage` VALUES ('MNG', 'Buryat', 'F', 1.7);
INSERT INTO `CountryLanguage` VALUES ('MNG', 'Dariganga', 'F', 1.4);
INSERT INTO `CountryLanguage` VALUES ('MNG', 'Dorbet', 'F', 2.7);
INSERT INTO `CountryLanguage` VALUES ('MNG', 'Kazakh', 'F', 5.9);
INSERT INTO `CountryLanguage` VALUES ('MNG', 'Mongolian', 'T', 78.8);
INSERT INTO `CountryLanguage` VALUES ('MNP', 'Carolinian', 'F', 4.8);
INSERT INTO `CountryLanguage` VALUES ('MNP', 'Chamorro', 'F', 30.0);
INSERT INTO `CountryLanguage` VALUES ('MNP', 'Chinese', 'F', 7.1);
INSERT INTO `CountryLanguage` VALUES ('MNP', 'English', 'T', 4.8);
INSERT INTO `CountryLanguage` VALUES ('MNP', 'Korean', 'F', 6.5);
INSERT INTO `CountryLanguage` VALUES ('MNP', 'Philippene Languages', 'F', 34.1);
INSERT INTO `CountryLanguage` VALUES ('MOZ', 'Chuabo', 'F', 5.7);
INSERT INTO `CountryLanguage` VALUES ('MOZ', 'Lomwe', 'F', 7.8);
INSERT INTO `CountryLanguage` VALUES ('MOZ', 'Makua', 'F', 27.8);
INSERT INTO `CountryLanguage` VALUES ('MOZ', 'Marendje', 'F', 3.5);
INSERT INTO `CountryLanguage` VALUES ('MOZ', 'Nyanja', 'F', 3.3);
INSERT INTO `CountryLanguage` VALUES ('MOZ', 'Ronga', 'F', 3.7);
INSERT INTO `CountryLanguage` VALUES ('MOZ', 'Sena', 'F', 9.4);
INSERT INTO `CountryLanguage` VALUES ('MOZ', 'Shona', 'F', 6.5);
INSERT INTO `CountryLanguage` VALUES ('MOZ', 'Tsonga', 'F', 12.4);
INSERT INTO `CountryLanguage` VALUES ('MOZ', 'Tswa', 'F', 6.0);
INSERT INTO `CountryLanguage` VALUES ('MRT', 'Ful', 'F', 1.2);
INSERT INTO `CountryLanguage` VALUES ('MRT', 'Hassaniya', 'F', 81.7);
INSERT INTO `CountryLanguage` VALUES ('MRT', 'Soninke', 'F', 2.7);
INSERT INTO `CountryLanguage` VALUES ('MRT', 'Tukulor', 'F', 5.4);
INSERT INTO `CountryLanguage` VALUES ('MRT', 'Wolof', 'F', 6.6);
INSERT INTO `CountryLanguage` VALUES ('MRT', 'Zenaga', 'F', 1.2);
INSERT INTO `CountryLanguage` VALUES ('MSR', 'English', 'T', 0.0);
INSERT INTO `CountryLanguage` VALUES ('MTQ', 'Creole French', 'F', 96.6);
INSERT INTO `CountryLanguage` VALUES ('MTQ', 'French', 'T', 0.0);
INSERT INTO `CountryLanguage` VALUES ('MUS', 'Bhojpuri', 'F', 21.1);
INSERT INTO `CountryLanguage` VALUES ('MUS', 'Creole French', 'F', 70.6);
INSERT INTO `CountryLanguage` VALUES ('MUS', 'French', 'F', 3.4);
INSERT INTO `CountryLanguage` VALUES ('MUS', 'Hindi', 'F', 1.2);
INSERT INTO `CountryLanguage` VALUES ('MUS', 'Marathi', 'F', 0.7);
INSERT INTO `CountryLanguage` VALUES ('MUS', 'Tamil', 'F', 0.8);
INSERT INTO `CountryLanguage` VALUES ('MWI', 'Chichewa', 'T', 58.3);
INSERT INTO `CountryLanguage` VALUES ('MWI', 'Lomwe', 'F', 18.4);
INSERT INTO `CountryLanguage` VALUES ('MWI', 'Ngoni', 'F', 6.7);
INSERT INTO `CountryLanguage` VALUES ('MWI', 'Yao', 'F', 13.2);
INSERT INTO `CountryLanguage` VALUES ('MYS', 'Chinese', 'F', 9.0);
INSERT INTO `CountryLanguage` VALUES ('MYS', 'Dusun', 'F', 1.1);
INSERT INTO `CountryLanguage` VALUES ('MYS', 'English', 'F', 1.6);
INSERT INTO `CountryLanguage` VALUES ('MYS', 'Iban', 'F', 2.8);
INSERT INTO `CountryLanguage` VALUES ('MYS', 'Malay', 'T', 58.4);
INSERT INTO `CountryLanguage` VALUES ('MYS', 'Tamil', 'F', 3.9);
INSERT INTO `CountryLanguage` VALUES ('MYT', 'French', 'T', 20.3);
INSERT INTO `CountryLanguage` VALUES ('MYT', 'Mahoré', 'F', 41.9);
INSERT INTO `CountryLanguage` VALUES ('MYT', 'Malagasy', 'F', 16.1);
INSERT INTO `CountryLanguage` VALUES ('NAM', 'Afrikaans', 'F', 9.5);
INSERT INTO `CountryLanguage` VALUES ('NAM', 'Caprivi', 'F', 4.7);
INSERT INTO `CountryLanguage` VALUES ('NAM', 'German', 'F', 0.9);
INSERT INTO `CountryLanguage` VALUES ('NAM', 'Herero', 'F', 8.0);
INSERT INTO `CountryLanguage` VALUES ('NAM', 'Kavango', 'F', 9.7);
INSERT INTO `CountryLanguage` VALUES ('NAM', 'Nama', 'F', 12.4);
INSERT INTO `CountryLanguage` VALUES ('NAM', 'Ovambo', 'F', 50.7);
INSERT INTO `CountryLanguage` VALUES ('NAM', 'San', 'F', 1.9);
INSERT INTO `CountryLanguage` VALUES ('NCL', 'French', 'T', 34.3);
INSERT INTO `CountryLanguage` VALUES ('NCL', 'Malenasian Languages', 'F', 45.4);
INSERT INTO `CountryLanguage` VALUES ('NCL', 'Polynesian Languages', 'F', 11.6);
INSERT INTO `CountryLanguage` VALUES ('NER', 'Ful', 'F', 9.7);
INSERT INTO `CountryLanguage` VALUES ('NER', 'Hausa', 'F', 53.1);
INSERT INTO `CountryLanguage` VALUES ('NER', 'Kanuri', 'F', 4.4);
INSERT INTO `CountryLanguage` VALUES ('NER', 'Songhai-zerma', 'F', 21.2);
INSERT INTO `CountryLanguage` VALUES ('NER', 'Tamashek', 'F', 10.4);
INSERT INTO `CountryLanguage` VALUES ('NFK', 'English', 'T', 0.0);
INSERT INTO `CountryLanguage` VALUES ('NGA', 'Bura', 'F', 1.6);
INSERT INTO `CountryLanguage` VALUES ('NGA', 'Edo', 'F', 3.3);
INSERT INTO `CountryLanguage` VALUES ('NGA', 'Ful', 'F', 11.3);
INSERT INTO `CountryLanguage` VALUES ('NGA', 'Hausa', 'F', 21.1);
INSERT INTO `CountryLanguage` VALUES ('NGA', 'Ibibio', 'F', 5.6);
INSERT INTO `CountryLanguage` VALUES ('NGA', 'Ibo', 'F', 18.1);
INSERT INTO `CountryLanguage` VALUES ('NGA', 'Ijo', 'F', 1.8);
INSERT INTO `CountryLanguage` VALUES ('NGA', 'Joruba', 'F', 21.4);
INSERT INTO `CountryLanguage` VALUES ('NGA', 'Kanuri', 'F', 4.1);
INSERT INTO `CountryLanguage` VALUES ('NGA', 'Tiv', 'F', 2.3);
INSERT INTO `CountryLanguage` VALUES ('NIC', 'Creole English', 'F', 0.5);
INSERT INTO `CountryLanguage` VALUES ('NIC', 'Miskito', 'F', 1.6);
INSERT INTO `CountryLanguage` VALUES ('NIC', 'Spanish', 'T', 97.6);
INSERT INTO `CountryLanguage` VALUES ('NIC', 'Sumo', 'F', 0.2);
INSERT INTO `CountryLanguage` VALUES ('NIU', 'English', 'T', 0.0);
INSERT INTO `CountryLanguage` VALUES ('NIU', 'Niue', 'F', 0.0);
INSERT INTO `CountryLanguage` VALUES ('NLD', 'Arabic', 'F', 0.9);
INSERT INTO `CountryLanguage` VALUES ('NLD', 'Dutch', 'T', 95.6);
INSERT INTO `CountryLanguage` VALUES ('NLD', 'Fries', 'F', 3.7);
INSERT INTO `CountryLanguage` VALUES ('NLD', 'Turkish', 'F', 0.8);
INSERT INTO `CountryLanguage` VALUES ('NOR', 'Danish', 'F', 0.4);
INSERT INTO `CountryLanguage` VALUES ('NOR', 'English', 'F', 0.5);
INSERT INTO `CountryLanguage` VALUES ('NOR', 'Norwegian', 'T', 96.6);
INSERT INTO `CountryLanguage` VALUES ('NOR', 'Saame', 'F', 0.0);
INSERT INTO `CountryLanguage` VALUES ('NOR', 'Swedish', 'F', 0.3);
INSERT INTO `CountryLanguage` VALUES ('NPL', 'Bhojpuri', 'F', 7.5);
INSERT INTO `CountryLanguage` VALUES ('NPL', 'Hindi', 'F', 3.0);
INSERT INTO `CountryLanguage` VALUES ('NPL', 'Maithili', 'F', 11.9);
INSERT INTO `CountryLanguage` VALUES ('NPL', 'Nepali', 'T', 50.4);
INSERT INTO `CountryLanguage` VALUES ('NPL', 'Newari', 'F', 3.7);
INSERT INTO `CountryLanguage` VALUES ('NPL', 'Tamang', 'F', 4.9);
INSERT INTO `CountryLanguage` VALUES ('NPL', 'Tharu', 'F', 5.4);
INSERT INTO `CountryLanguage` VALUES ('NRU', 'Chinese', 'F', 8.5);
INSERT INTO `CountryLanguage` VALUES ('NRU', 'English', 'T', 7.5);
INSERT INTO `CountryLanguage` VALUES ('NRU', 'Kiribati', 'F', 17.9);
INSERT INTO `CountryLanguage` VALUES ('NRU', 'Nauru', 'T', 57.5);
INSERT INTO `CountryLanguage` VALUES ('NRU', 'Tuvalu', 'F', 8.5);
INSERT INTO `CountryLanguage` VALUES ('NZL', 'English', 'T', 87.0);
INSERT INTO `CountryLanguage` VALUES ('NZL', 'Maori', 'F', 4.3);
INSERT INTO `CountryLanguage` VALUES ('OMN', 'Arabic', 'T', 76.7);
INSERT INTO `CountryLanguage` VALUES ('OMN', 'Balochi', 'F', 0.0);
INSERT INTO `CountryLanguage` VALUES ('PAK', 'Balochi', 'F', 3.0);
INSERT INTO `CountryLanguage` VALUES ('PAK', 'Brahui', 'F', 1.2);
INSERT INTO `CountryLanguage` VALUES ('PAK', 'Hindko', 'F', 2.4);
INSERT INTO `CountryLanguage` VALUES ('PAK', 'Pashto', 'F', 13.1);
INSERT INTO `CountryLanguage` VALUES ('PAK', 'Punjabi', 'F', 48.2);
INSERT INTO `CountryLanguage` VALUES ('PAK', 'Saraiki', 'F', 9.8);
INSERT INTO `CountryLanguage` VALUES ('PAK', 'Sindhi', 'F', 11.8);
INSERT INTO `CountryLanguage` VALUES ('PAK', 'Urdu', 'T', 7.6);
INSERT INTO `CountryLanguage` VALUES ('PAN', 'Arabic', 'F', 0.6);
INSERT INTO `CountryLanguage` VALUES ('PAN', 'Creole English', 'F', 14.0);
INSERT INTO `CountryLanguage` VALUES ('PAN', 'Cuna', 'F', 2.0);
INSERT INTO `CountryLanguage` VALUES ('PAN', 'Embera', 'F', 0.6);
INSERT INTO `CountryLanguage` VALUES ('PAN', 'Guaymí', 'F', 5.3);
INSERT INTO `CountryLanguage` VALUES ('PAN', 'Spanish', 'T', 76.8);
INSERT INTO `CountryLanguage` VALUES ('PCN', 'Pitcairnese', 'F', 0.0);
INSERT INTO `CountryLanguage` VALUES ('PER', 'Aimará', 'T', 2.3);
INSERT INTO `CountryLanguage` VALUES ('PER', 'Ketšua', 'T', 16.4);
INSERT INTO `CountryLanguage` VALUES ('PER', 'Spanish', 'T', 79.8);
INSERT INTO `CountryLanguage` VALUES ('PHL', 'Bicol', 'F', 5.7);
INSERT INTO `CountryLanguage` VALUES ('PHL', 'Cebuano', 'F', 23.3);
INSERT INTO `CountryLanguage` VALUES ('PHL', 'Hiligaynon', 'F', 9.1);
INSERT INTO `CountryLanguage` VALUES ('PHL', 'Ilocano', 'F', 9.3);
INSERT INTO `CountryLanguage` VALUES ('PHL', 'Maguindanao', 'F', 1.4);
INSERT INTO `CountryLanguage` VALUES ('PHL', 'Maranao', 'F', 1.3);
INSERT INTO `CountryLanguage` VALUES ('PHL', 'Pampango', 'F', 3.0);
INSERT INTO `CountryLanguage` VALUES ('PHL', 'Pangasinan', 'F', 1.8);
INSERT INTO `CountryLanguage` VALUES ('PHL', 'Pilipino', 'T', 29.3);
INSERT INTO `CountryLanguage` VALUES ('PHL', 'Waray-waray', 'F', 3.8);
INSERT INTO `CountryLanguage` VALUES ('PLW', 'Chinese', 'F', 1.6);
INSERT INTO `CountryLanguage` VALUES ('PLW', 'English', 'T', 3.2);
INSERT INTO `CountryLanguage` VALUES ('PLW', 'Palau', 'T', 82.2);
INSERT INTO `CountryLanguage` VALUES ('PLW', 'Philippene Languages', 'F', 9.2);
INSERT INTO `CountryLanguage` VALUES ('PNG', 'Malenasian Languages', 'F', 20.0);
INSERT INTO `CountryLanguage` VALUES ('PNG', 'Papuan Languages', 'F', 78.1);
INSERT INTO `CountryLanguage` VALUES ('POL', 'Belorussian', 'F', 0.5);
INSERT INTO `CountryLanguage` VALUES ('POL', 'German', 'F', 1.3);
INSERT INTO `CountryLanguage` VALUES ('POL', 'Polish', 'T', 97.6);
INSERT INTO `CountryLanguage` VALUES ('POL', 'Ukrainian', 'F', 0.6);
INSERT INTO `CountryLanguage` VALUES ('PRI', 'English', 'F', 47.4);
INSERT INTO `CountryLanguage` VALUES ('PRI', 'Spanish', 'T', 51.3);
INSERT INTO `CountryLanguage` VALUES ('PRK', 'Chinese', 'F', 0.1);
INSERT INTO `CountryLanguage` VALUES ('PRK', 'Korean', 'T', 99.9);
INSERT INTO `CountryLanguage` VALUES ('PRT', 'Portuguese', 'T', 99.0);
INSERT INTO `CountryLanguage` VALUES ('PRY', 'German', 'F', 0.9);
INSERT INTO `CountryLanguage` VALUES ('PRY', 'Guaraní', 'T', 40.1);
INSERT INTO `CountryLanguage` VALUES ('PRY', 'Portuguese', 'F', 3.2);
INSERT INTO `CountryLanguage` VALUES ('PRY', 'Spanish', 'T', 55.1);
INSERT INTO `CountryLanguage` VALUES ('PSE', 'Arabic', 'F', 95.9);
INSERT INTO `CountryLanguage` VALUES ('PSE', 'Hebrew', 'F', 4.1);
INSERT INTO `CountryLanguage` VALUES ('PYF', 'Chinese', 'F', 2.9);
INSERT INTO `CountryLanguage` VALUES ('PYF', 'French', 'T', 40.8);
INSERT INTO `CountryLanguage` VALUES ('PYF', 'Tahitian', 'F', 46.4);
INSERT INTO `CountryLanguage` VALUES ('QAT', 'Arabic', 'T', 40.7);
INSERT INTO `CountryLanguage` VALUES ('QAT', 'Urdu', 'F', 0.0);
INSERT INTO `CountryLanguage` VALUES ('REU', 'Chinese', 'F', 2.8);
INSERT INTO `CountryLanguage` VALUES ('REU', 'Comorian', 'F', 2.8);
INSERT INTO `CountryLanguage` VALUES ('REU', 'Creole French', 'F', 91.5);
INSERT INTO `CountryLanguage` VALUES ('REU', 'Malagasy', 'F', 1.4);
INSERT INTO `CountryLanguage` VALUES ('REU', 'Tamil', 'F', 0.0);
INSERT INTO `CountryLanguage` VALUES ('ROM', 'German', 'F', 0.4);
INSERT INTO `CountryLanguage` VALUES ('ROM', 'Hungarian', 'F', 7.2);
INSERT INTO `CountryLanguage` VALUES ('ROM', 'Romani', 'T', 0.7);
INSERT INTO `CountryLanguage` VALUES ('ROM', 'Romanian', 'T', 90.7);
INSERT INTO `CountryLanguage` VALUES ('ROM', 'Serbo-Croatian', 'F', 0.1);
INSERT INTO `CountryLanguage` VALUES ('ROM', 'Ukrainian', 'F', 0.3);
INSERT INTO `CountryLanguage` VALUES ('RUS', 'Avarian', 'F', 0.4);
INSERT INTO `CountryLanguage` VALUES ('RUS', 'Bashkir', 'F', 0.7);
INSERT INTO `CountryLanguage` VALUES ('RUS', 'Belorussian', 'F', 0.3);
INSERT INTO `CountryLanguage` VALUES ('RUS', 'Chechen', 'F', 0.6);
INSERT INTO `CountryLanguage` VALUES ('RUS', 'Chuvash', 'F', 0.9);
INSERT INTO `CountryLanguage` VALUES ('RUS', 'Kazakh', 'F', 0.4);
INSERT INTO `CountryLanguage` VALUES ('RUS', 'Mari', 'F', 0.4);
INSERT INTO `CountryLanguage` VALUES ('RUS', 'Mordva', 'F', 0.5);
INSERT INTO `CountryLanguage` VALUES ('RUS', 'Russian', 'T', 86.6);
INSERT INTO `CountryLanguage` VALUES ('RUS', 'Tatar', 'F', 3.2);
INSERT INTO `CountryLanguage` VALUES ('RUS', 'Udmur', 'F', 0.3);
INSERT INTO `CountryLanguage` VALUES ('RUS', 'Ukrainian', 'F', 1.3);
INSERT INTO `CountryLanguage` VALUES ('RWA', 'French', 'T', 0.0);
INSERT INTO `CountryLanguage` VALUES ('RWA', 'Rwanda', 'T', 100.0);
INSERT INTO `CountryLanguage` VALUES ('SAU', 'Arabic', 'T', 95.0);
INSERT INTO `CountryLanguage` VALUES ('SDN', 'Arabic', 'T', 49.4);
INSERT INTO `CountryLanguage` VALUES ('SDN', 'Bari', 'F', 2.5);
INSERT INTO `CountryLanguage` VALUES ('SDN', 'Beja', 'F', 6.4);
INSERT INTO `CountryLanguage` VALUES ('SDN', 'Chilluk', 'F', 1.7);
INSERT INTO `CountryLanguage` VALUES ('SDN', 'Dinka', 'F', 11.5);
INSERT INTO `CountryLanguage` VALUES ('SDN', 'Fur', 'F', 2.1);
INSERT INTO `CountryLanguage` VALUES ('SDN', 'Lotuko', 'F', 1.5);
INSERT INTO `CountryLanguage` VALUES ('SDN', 'Nubian Languages', 'F', 8.1);
INSERT INTO `CountryLanguage` VALUES ('SDN', 'Nuer', 'F', 4.9);
INSERT INTO `CountryLanguage` VALUES ('SDN', 'Zande', 'F', 2.7);
INSERT INTO `CountryLanguage` VALUES ('SEN', 'Diola', 'F', 5.0);
INSERT INTO `CountryLanguage` VALUES ('SEN', 'Ful', 'F', 21.7);
INSERT INTO `CountryLanguage` VALUES ('SEN', 'Malinke', 'F', 3.8);
INSERT INTO `CountryLanguage` VALUES ('SEN', 'Serer', 'F', 12.5);
INSERT INTO `CountryLanguage` VALUES ('SEN', 'Soninke', 'F', 1.3);
INSERT INTO `CountryLanguage` VALUES ('SEN', 'Wolof', 'T', 48.1);
INSERT INTO `CountryLanguage` VALUES ('SGP', 'Chinese', 'T', 77.1);
INSERT INTO `CountryLanguage` VALUES ('SGP', 'Malay', 'T', 14.1);
INSERT INTO `CountryLanguage` VALUES ('SGP', 'Tamil', 'T', 7.4);
INSERT INTO `CountryLanguage` VALUES ('SHN', 'English', 'T', 0.0);
INSERT INTO `CountryLanguage` VALUES ('SJM', 'Norwegian', 'T', 0.0);
INSERT INTO `CountryLanguage` VALUES ('SJM', 'Russian', 'F', 0.0);
INSERT INTO `CountryLanguage` VALUES ('SLB', 'Malenasian Languages', 'F', 85.6);
INSERT INTO `CountryLanguage` VALUES ('SLB', 'Papuan Languages', 'F', 8.6);
INSERT INTO `CountryLanguage` VALUES ('SLB', 'Polynesian Languages', 'F', 3.8);
INSERT INTO `CountryLanguage` VALUES ('SLE', 'Bullom-sherbro', 'F', 3.8);
INSERT INTO `CountryLanguage` VALUES ('SLE', 'Ful', 'F', 3.8);
INSERT INTO `CountryLanguage` VALUES ('SLE', 'Kono-vai', 'F', 5.1);
INSERT INTO `CountryLanguage` VALUES ('SLE', 'Kuranko', 'F', 3.4);
INSERT INTO `CountryLanguage` VALUES ('SLE', 'Limba', 'F', 8.3);
INSERT INTO `CountryLanguage` VALUES ('SLE', 'Mende', 'F', 34.8);
INSERT INTO `CountryLanguage` VALUES ('SLE', 'Temne', 'F', 31.8);
INSERT INTO `CountryLanguage` VALUES ('SLE', 'Yalunka', 'F', 3.4);
INSERT INTO `CountryLanguage` VALUES ('SLV', 'Nahua', 'F', 0.0);
INSERT INTO `CountryLanguage` VALUES ('SLV', 'Spanish', 'T', 100.0);
INSERT INTO `CountryLanguage` VALUES ('SMR', 'Italian', 'T', 100.0);
INSERT INTO `CountryLanguage` VALUES ('SOM', 'Arabic', 'T', 0.0);
INSERT INTO `CountryLanguage` VALUES ('SOM', 'Somali', 'T', 98.3);
INSERT INTO `CountryLanguage` VALUES ('SPM', 'French', 'T', 0.0);
INSERT INTO `CountryLanguage` VALUES ('STP', 'Crioulo', 'F', 86.3);
INSERT INTO `CountryLanguage` VALUES ('STP', 'French', 'F', 0.7);
INSERT INTO `CountryLanguage` VALUES ('SUR', 'Hindi', 'F', 0.0);
INSERT INTO `CountryLanguage` VALUES ('SUR', 'Sranantonga', 'F', 81.0);
INSERT INTO `CountryLanguage` VALUES ('SVK', 'Czech and Moravian', 'F', 1.1);
INSERT INTO `CountryLanguage` VALUES ('SVK', 'Hungarian', 'F', 10.5);
INSERT INTO `CountryLanguage` VALUES ('SVK', 'Romani', 'F', 1.7);
INSERT INTO `CountryLanguage` VALUES ('SVK', 'Slovak', 'T', 85.6);
INSERT INTO `CountryLanguage` VALUES ('SVK', 'Ukrainian and Russian', 'F', 0.6);
INSERT INTO `CountryLanguage` VALUES ('SVN', 'Hungarian', 'F', 0.5);
INSERT INTO `CountryLanguage` VALUES ('SVN', 'Serbo-Croatian', 'F', 7.9);
INSERT INTO `CountryLanguage` VALUES ('SVN', 'Slovene', 'T', 87.9);
INSERT INTO `CountryLanguage` VALUES ('SWE', 'Arabic', 'F', 0.8);
INSERT INTO `CountryLanguage` VALUES ('SWE', 'Finnish', 'F', 2.4);
INSERT INTO `CountryLanguage` VALUES ('SWE', 'Norwegian', 'F', 0.5);
INSERT INTO `CountryLanguage` VALUES ('SWE', 'Southern Slavic Languages', 'F', 1.3);
INSERT INTO `CountryLanguage` VALUES ('SWE', 'Spanish', 'F', 0.6);
INSERT INTO `CountryLanguage` VALUES ('SWE', 'Swedish', 'T', 89.5);
INSERT INTO `CountryLanguage` VALUES ('SWZ', 'Swazi', 'T', 89.9);
INSERT INTO `CountryLanguage` VALUES ('SWZ', 'Zulu', 'F', 2.0);
INSERT INTO `CountryLanguage` VALUES ('SYC', 'English', 'T', 3.8);
INSERT INTO `CountryLanguage` VALUES ('SYC', 'French', 'T', 1.3);
INSERT INTO `CountryLanguage` VALUES ('SYC', 'Seselwa', 'F', 91.3);
INSERT INTO `CountryLanguage` VALUES ('SYR', 'Arabic', 'T', 90.0);
INSERT INTO `CountryLanguage` VALUES ('SYR', 'Kurdish', 'F', 9.0);
INSERT INTO `CountryLanguage` VALUES ('TCA', 'English', 'T', 0.0);
INSERT INTO `CountryLanguage` VALUES ('TCD', 'Arabic', 'T', 12.3);
INSERT INTO `CountryLanguage` VALUES ('TCD', 'Gorane', 'F', 6.2);
INSERT INTO `CountryLanguage` VALUES ('TCD', 'Hadjarai', 'F', 6.7);
INSERT INTO `CountryLanguage` VALUES ('TCD', 'Kanem-bornu', 'F', 9.0);
INSERT INTO `CountryLanguage` VALUES ('TCD', 'Mayo-kebbi', 'F', 11.5);
INSERT INTO `CountryLanguage` VALUES ('TCD', 'Ouaddai', 'F', 8.7);
INSERT INTO `CountryLanguage` VALUES ('TCD', 'Sara', 'F', 27.7);
INSERT INTO `CountryLanguage` VALUES ('TCD', 'Tandjile', 'F', 6.5);
INSERT INTO `CountryLanguage` VALUES ('TGO', 'Ane', 'F', 5.7);
INSERT INTO `CountryLanguage` VALUES ('TGO', 'Ewe', 'T', 23.2);
INSERT INTO `CountryLanguage` VALUES ('TGO', 'Gurma', 'F', 3.4);
INSERT INTO `CountryLanguage` VALUES ('TGO', 'Kabyé', 'T', 13.8);
INSERT INTO `CountryLanguage` VALUES ('TGO', 'Kotokoli', 'F', 5.7);
INSERT INTO `CountryLanguage` VALUES ('TGO', 'Moba', 'F', 5.4);
INSERT INTO `CountryLanguage` VALUES ('TGO', 'Naudemba', 'F', 4.1);
INSERT INTO `CountryLanguage` VALUES ('TGO', 'Watyi', 'F', 10.3);
INSERT INTO `CountryLanguage` VALUES ('THA', 'Chinese', 'F', 12.1);
INSERT INTO `CountryLanguage` VALUES ('THA', 'Khmer', 'F', 1.3);
INSERT INTO `CountryLanguage` VALUES ('THA', 'Kuy', 'F', 1.1);
INSERT INTO `CountryLanguage` VALUES ('THA', 'Lao', 'F', 26.9);
INSERT INTO `CountryLanguage` VALUES ('THA', 'Malay', 'F', 3.6);
INSERT INTO `CountryLanguage` VALUES ('THA', 'Thai', 'T', 52.6);
INSERT INTO `CountryLanguage` VALUES ('TJK', 'Russian', 'F', 9.7);
INSERT INTO `CountryLanguage` VALUES ('TJK', 'Tadzhik', 'T', 62.2);
INSERT INTO `CountryLanguage` VALUES ('TJK', 'Uzbek', 'F', 23.2);
INSERT INTO `CountryLanguage` VALUES ('TKL', 'English', 'T', 0.0);
INSERT INTO `CountryLanguage` VALUES ('TKL', 'Tokelau', 'F', 0.0);
INSERT INTO `CountryLanguage` VALUES ('TKM', 'Kazakh', 'F', 2.0);
INSERT INTO `CountryLanguage` VALUES ('TKM', 'Russian', 'F', 6.7);
INSERT INTO `CountryLanguage` VALUES ('TKM', 'Turkmenian', 'T', 76.7);
INSERT INTO `CountryLanguage` VALUES ('TKM', 'Uzbek', 'F', 9.2);
INSERT INTO `CountryLanguage` VALUES ('TMP', 'Portuguese', 'T', 0.0);
INSERT INTO `CountryLanguage` VALUES ('TMP', 'Sunda', 'F', 0.0);
INSERT INTO `CountryLanguage` VALUES ('TON', 'English', 'T', 0.0);
INSERT INTO `CountryLanguage` VALUES ('TON', 'Tongan', 'T', 98.3);
INSERT INTO `CountryLanguage` VALUES ('TTO', 'Creole English', 'F', 2.9);
INSERT INTO `CountryLanguage` VALUES ('TTO', 'English', 'F', 93.5);
INSERT INTO `CountryLanguage` VALUES ('TTO', 'Hindi', 'F', 3.4);
INSERT INTO `CountryLanguage` VALUES ('TUN', 'Arabic', 'T', 69.9);
INSERT INTO `CountryLanguage` VALUES ('TUN', 'Arabic-French', 'F', 26.3);
INSERT INTO `CountryLanguage` VALUES ('TUN', 'Arabic-French-English', 'F', 3.2);
INSERT INTO `CountryLanguage` VALUES ('TUR', 'Arabic', 'F', 1.4);
INSERT INTO `CountryLanguage` VALUES ('TUR', 'Kurdish', 'F', 10.6);
INSERT INTO `CountryLanguage` VALUES ('TUR', 'Turkish', 'T', 87.6);
INSERT INTO `CountryLanguage` VALUES ('TUV', 'English', 'T', 0.0);
INSERT INTO `CountryLanguage` VALUES ('TUV', 'Kiribati', 'F', 7.5);
INSERT INTO `CountryLanguage` VALUES ('TUV', 'Tuvalu', 'T', 92.5);
INSERT INTO `CountryLanguage` VALUES ('TWN', 'Ami', 'F', 0.6);
INSERT INTO `CountryLanguage` VALUES ('TWN', 'Atayal', 'F', 0.4);
INSERT INTO `CountryLanguage` VALUES ('TWN', 'Hakka', 'F', 11.0);
INSERT INTO `CountryLanguage` VALUES ('TWN', 'Mandarin Chinese', 'T', 20.1);
INSERT INTO `CountryLanguage` VALUES ('TWN', 'Min', 'F', 66.7);
INSERT INTO `CountryLanguage` VALUES ('TWN', 'Paiwan', 'F', 0.3);
INSERT INTO `CountryLanguage` VALUES ('TZA', 'Chaga and Pare', 'F', 4.9);
INSERT INTO `CountryLanguage` VALUES ('TZA', 'Gogo', 'F', 3.9);
INSERT INTO `CountryLanguage` VALUES ('TZA', 'Ha', 'F', 3.5);
INSERT INTO `CountryLanguage` VALUES ('TZA', 'Haya', 'F', 5.9);
INSERT INTO `CountryLanguage` VALUES ('TZA', 'Hehet', 'F', 6.9);
INSERT INTO `CountryLanguage` VALUES ('TZA', 'Luguru', 'F', 4.9);
INSERT INTO `CountryLanguage` VALUES ('TZA', 'Makonde', 'F', 5.9);
INSERT INTO `CountryLanguage` VALUES ('TZA', 'Nyakusa', 'F', 5.4);
INSERT INTO `CountryLanguage` VALUES ('TZA', 'Nyamwesi', 'F', 21.1);
INSERT INTO `CountryLanguage` VALUES ('TZA', 'Shambala', 'F', 4.3);
INSERT INTO `CountryLanguage` VALUES ('TZA', 'Swahili', 'T', 8.8);
INSERT INTO `CountryLanguage` VALUES ('UGA', 'Acholi', 'F', 4.4);
INSERT INTO `CountryLanguage` VALUES ('UGA', 'Ganda', 'F', 18.1);
INSERT INTO `CountryLanguage` VALUES ('UGA', 'Gisu', 'F', 4.5);
INSERT INTO `CountryLanguage` VALUES ('UGA', 'Kiga', 'F', 8.3);
INSERT INTO `CountryLanguage` VALUES ('UGA', 'Lango', 'F', 5.9);
INSERT INTO `CountryLanguage` VALUES ('UGA', 'Lugbara', 'F', 4.7);
INSERT INTO `CountryLanguage` VALUES ('UGA', 'Nkole', 'F', 10.7);
INSERT INTO `CountryLanguage` VALUES ('UGA', 'Rwanda', 'F', 3.2);
INSERT INTO `CountryLanguage` VALUES ('UGA', 'Soga', 'F', 8.2);
INSERT INTO `CountryLanguage` VALUES ('UGA', 'Teso', 'F', 6.0);
INSERT INTO `CountryLanguage` VALUES ('UKR', 'Belorussian', 'F', 0.3);
INSERT INTO `CountryLanguage` VALUES ('UKR', 'Bulgariana', 'F', 0.3);
INSERT INTO `CountryLanguage` VALUES ('UKR', 'Hungarian', 'F', 0.3);
INSERT INTO `CountryLanguage` VALUES ('UKR', 'Polish', 'F', 0.1);
INSERT INTO `CountryLanguage` VALUES ('UKR', 'Romanian', 'F', 0.7);
INSERT INTO `CountryLanguage` VALUES ('UKR', 'Russian', 'F', 32.9);
INSERT INTO `CountryLanguage` VALUES ('UKR', 'Ukrainian', 'T', 64.7);
INSERT INTO `CountryLanguage` VALUES ('UMI', 'English', 'T', 0.0);
INSERT INTO `CountryLanguage` VALUES ('URY', 'Spanish', 'T', 95.7);
INSERT INTO `CountryLanguage` VALUES ('USA', 'Chinese', 'F', 0.6);
INSERT INTO `CountryLanguage` VALUES ('USA', 'English', 'T', 86.2);
INSERT INTO `CountryLanguage` VALUES ('USA', 'French', 'F', 0.7);
INSERT INTO `CountryLanguage` VALUES ('USA', 'German', 'F', 0.7);
INSERT INTO `CountryLanguage` VALUES ('USA', 'Italian', 'F', 0.6);
INSERT INTO `CountryLanguage` VALUES ('USA', 'Japanese', 'F', 0.2);
INSERT INTO `CountryLanguage` VALUES ('USA', 'Korean', 'F', 0.3);
INSERT INTO `CountryLanguage` VALUES ('USA', 'Polish', 'F', 0.3);
INSERT INTO `CountryLanguage` VALUES ('USA', 'Portuguese', 'F', 0.2);
INSERT INTO `CountryLanguage` VALUES ('USA', 'Spanish', 'F', 7.5);
INSERT INTO `CountryLanguage` VALUES ('USA', 'Tagalog', 'F', 0.4);
INSERT INTO `CountryLanguage` VALUES ('USA', 'Vietnamese', 'F', 0.2);
INSERT INTO `CountryLanguage` VALUES ('UZB', 'Karakalpak', 'F', 2.0);
INSERT INTO `CountryLanguage` VALUES ('UZB', 'Kazakh', 'F', 3.8);
INSERT INTO `CountryLanguage` VALUES ('UZB', 'Russian', 'F', 10.9);
INSERT INTO `CountryLanguage` VALUES ('UZB', 'Tadzhik', 'F', 4.4);
INSERT INTO `CountryLanguage` VALUES ('UZB', 'Tatar', 'F', 1.8);
INSERT INTO `CountryLanguage` VALUES ('UZB', 'Uzbek', 'T', 72.6);
INSERT INTO `CountryLanguage` VALUES ('VAT', 'Italian', 'T', 0.0);
INSERT INTO `CountryLanguage` VALUES ('VCT', 'Creole English', 'F', 99.1);
INSERT INTO `CountryLanguage` VALUES ('VCT', 'English', 'T', 0.0);
INSERT INTO `CountryLanguage` VALUES ('VEN', 'Goajiro', 'F', 0.4);
INSERT INTO `CountryLanguage` VALUES ('VEN', 'Spanish', 'T', 96.9);
INSERT INTO `CountryLanguage` VALUES ('VEN', 'Warrau', 'F', 0.1);
INSERT INTO `CountryLanguage` VALUES ('VGB', 'English', 'T', 0.0);
INSERT INTO `CountryLanguage` VALUES ('VIR', 'English', 'T', 81.7);
INSERT INTO `CountryLanguage` VALUES ('VIR', 'French', 'F', 2.5);
INSERT INTO `CountryLanguage` VALUES ('VIR', 'Spanish', 'F', 13.3);
INSERT INTO `CountryLanguage` VALUES ('VNM', 'Chinese', 'F', 1.4);
INSERT INTO `CountryLanguage` VALUES ('VNM', 'Khmer', 'F', 1.4);
INSERT INTO `CountryLanguage` VALUES ('VNM', 'Man', 'F', 0.7);
INSERT INTO `CountryLanguage` VALUES ('VNM', 'Miao', 'F', 0.9);
INSERT INTO `CountryLanguage` VALUES ('VNM', 'Muong', 'F', 1.5);
INSERT INTO `CountryLanguage` VALUES ('VNM', 'Nung', 'F', 1.1);
INSERT INTO `CountryLanguage` VALUES ('VNM', 'Thai', 'F', 1.6);
INSERT INTO `CountryLanguage` VALUES ('VNM', 'Tho', 'F', 1.8);
INSERT INTO `CountryLanguage` VALUES ('VNM', 'Vietnamese', 'T', 86.8);
INSERT INTO `CountryLanguage` VALUES ('VUT', 'Bislama', 'T', 56.6);
INSERT INTO `CountryLanguage` VALUES ('VUT', 'English', 'T', 28.3);
INSERT INTO `CountryLanguage` VALUES ('VUT', 'French', 'T', 14.2);
INSERT INTO `CountryLanguage` VALUES ('WLF', 'Futuna', 'F', 0.0);
INSERT INTO `CountryLanguage` VALUES ('WLF', 'Wallis', 'F', 0.0);
INSERT INTO `CountryLanguage` VALUES ('WSM', 'English', 'T', 0.6);
INSERT INTO `CountryLanguage` VALUES ('WSM', 'Samoan', 'T', 47.5);
INSERT INTO `CountryLanguage` VALUES ('WSM', 'Samoan-English', 'F', 52.0);
INSERT INTO `CountryLanguage` VALUES ('YEM', 'Arabic', 'T', 99.6);
INSERT INTO `CountryLanguage` VALUES ('YEM', 'Soqutri', 'F', 0.0);
INSERT INTO `CountryLanguage` VALUES ('YUG', 'Albaniana', 'F', 16.5);
INSERT INTO `CountryLanguage` VALUES ('YUG', 'Hungarian', 'F', 3.4);
INSERT INTO `CountryLanguage` VALUES ('YUG', 'Macedonian', 'F', 0.5);
INSERT INTO `CountryLanguage` VALUES ('YUG', 'Romani', 'F', 1.4);
INSERT INTO `CountryLanguage` VALUES ('YUG', 'Serbo-Croatian', 'T', 75.2);
INSERT INTO `CountryLanguage` VALUES ('YUG', 'Slovak', 'F', 0.7);
INSERT INTO `CountryLanguage` VALUES ('ZAF', 'Afrikaans', 'T', 14.3);
INSERT INTO `CountryLanguage` VALUES ('ZAF', 'English', 'T', 8.5);
INSERT INTO `CountryLanguage` VALUES ('ZAF', 'Ndebele', 'F', 1.5);
INSERT INTO `CountryLanguage` VALUES ('ZAF', 'Northsotho', 'F', 9.1);
INSERT INTO `CountryLanguage` VALUES ('ZAF', 'Southsotho', 'F', 7.6);
INSERT INTO `CountryLanguage` VALUES ('ZAF', 'Swazi', 'F', 2.5);
INSERT INTO `CountryLanguage` VALUES ('ZAF', 'Tsonga', 'F', 4.3);
INSERT INTO `CountryLanguage` VALUES ('ZAF', 'Tswana', 'F', 8.1);
INSERT INTO `CountryLanguage` VALUES ('ZAF', 'Venda', 'F', 2.2);
INSERT INTO `CountryLanguage` VALUES ('ZAF', 'Xhosa', 'T', 17.7);
INSERT INTO `CountryLanguage` VALUES ('ZAF', 'Zulu', 'T', 22.7);
INSERT INTO `CountryLanguage` VALUES ('ZMB', 'Bemba', 'F', 29.7);
INSERT INTO `CountryLanguage` VALUES ('ZMB', 'Chewa', 'F', 5.7);
INSERT INTO `CountryLanguage` VALUES ('ZMB', 'Lozi', 'F', 6.4);
INSERT INTO `CountryLanguage` VALUES ('ZMB', 'Nsenga', 'F', 4.3);
INSERT INTO `CountryLanguage` VALUES ('ZMB', 'Nyanja', 'F', 7.8);
INSERT INTO `CountryLanguage` VALUES ('ZMB', 'Tongan', 'F', 11.0);
INSERT INTO `CountryLanguage` VALUES ('ZWE', 'English', 'T', 2.2);
INSERT INTO `CountryLanguage` VALUES ('ZWE', 'Ndebele', 'F', 16.2);
INSERT INTO `CountryLanguage` VALUES ('ZWE', 'Nyanja', 'F', 2.2);
INSERT INTO `CountryLanguage` VALUES ('ZWE', 'Shona', 'F', 72.1);

-- --------------------------------------------------------

-- 
-- Estructura de tabla para la tabla `actividades`
-- 
-- Creación: 16-09-2013 a las 08:47:10
-- 

DROP TABLE IF EXISTS `actividades`;
CREATE TABLE IF NOT EXISTS `actividades` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `titulo` varchar(45) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `descripcion` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `link` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `descripcion2` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `link2` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `descripcion3` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `link3` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

-- 
-- Volcar la base de datos para la tabla `actividades`
-- 

INSERT INTO `actividades` VALUES (1, 'Especiales!!!', 'Oferta Especial!!! Nueva linea de antiadherente de colores. Dale color a tu cocina con MUNAL.', 'http://repositorio.imaginamos.com.co/HF/north_prog/index.php?base&seccion=actividades', 'Tips para el cuidado de los Antiadherentes MUNAL.', 'http://repositorio.imaginamos.com.co/HF/north_prog/index.php?base&seccion=actividades', 'Consejos útiles para cuidar tus productos de Aluminio Natural MUNAL.', 'http://repositorio.imaginamos.com.co/HF/north_prog/index.php?base&seccion=actividades');

-- --------------------------------------------------------

-- 
-- Estructura de tabla para la tabla `actividades_internas`
-- 
-- Creación: 16-09-2013 a las 08:49:07
-- 

DROP TABLE IF EXISTS `actividades_internas`;
CREATE TABLE IF NOT EXISTS `actividades_internas` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `titulo` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `fecha` date DEFAULT NULL,
  `texto` text CHARACTER SET utf8 COLLATE utf8_unicode_ci,
  `imagen` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8 AUTO_INCREMENT=13 ;

-- 
-- Volcar la base de datos para la tabla `actividades_internas`
-- 

INSERT INTO `actividades_internas` VALUES (6, 'Peltre', '2013-09-01', '<p style="line-height:15.6pt"><span style="font-family: Arial, sans-serif;">Resiste altas temperaturas.<o:p></o:p></span></p>\r\n\r\n<p style="line-height: 15.6pt;"><span style="font-family: Arial, sans-serif;">Ecol&oacute;gico: est&aacute; elaborado a partir de elemento minerales naturales.<o:p></o:p></span></p>\r\n\r\n<p style="line-height: 15.6pt;"><span style="font-family: Arial, sans-serif;">Higi&eacute;nico: No retiene bacterias. No transmite olores ni sabores a la comida.<o:p></o:p></span></p>\r\n\r\n<p style="line-height: 15.6pt;"><span style="font-family: Arial, sans-serif;">F&aacute;cil Limpieza: No se adhieren los alimentos.<o:p></o:p></span></p>\r\n\r\n<p style="line-height: 15.6pt;"><span style="font-family: Arial, sans-serif;">Ideal para hervir los teteros de tu bebe.<o:p></o:p></span></p>\r\n', 'original_6.png');
INSERT INTO `actividades_internas` VALUES (7, 'Antiadherentes!', '2013-08-01', '<p>Para cuidar de sus productos sigue estos &uacute;tiles consejos:</p>\r\n\r\n<p>Antes del Primer uso, remueva todas las etiquetas y lave el producto con detergente y agua tibia, para eliminar cualquier residuo de fabricaci&oacute;n.</p>\r\n\r\n<p>Posteriormente, utilice una toalla de papel para pasarle un poco de aceite a la capa interna antiadherente y ll&eacute;velo a fuego bajo por un minuto. Dejelo enfriar, lavelo y sequelo de nuevo.Despues de lavar, seque perfectamente para evitar manchas.</p>\r\n\r\n<p>&nbsp;</p>\r\n', 'original_7.png');
INSERT INTO `actividades_internas` VALUES (9, 'Oferta Especial', '2013-09-01', '<p>Dale vida a tu cocina con MUNAL.</p>\r\n<p><span style="line-height: 1.6em;">Por la compra de un producto de nuestra nueva linea antiadherente reclama un utensilio </span><span style="line-height: 1.6em;">de cocina. &nbsp;</span></p>\r\n<p>Encuentra nuestra nueva linea antiadherentes de Colores en todos los almacenes de cadenas y distribuidores autorizados.&nbsp;</p>\r\n\r\n\r\n\r\n<p>&nbsp;</p>\r\n', 'original_9.gif');
INSERT INTO `actividades_internas` VALUES (12, 'Alumino Natural', '2013-09-01', '<p style="line-height:15.6pt"><span style="font-family: Arial, sans-serif;">Para cuidar su caldero y prolongar su brillo por mucho m&aacute;s tiempo te tenemos un tip:<o:p></o:p></span></p>\r\n\r\n<p style="line-height: 15.6pt;"><span style="font-family: Arial, sans-serif;">Antes de ponerlo al fuego, aplica sobre toda la superficie exterior un capa delgada de crema lavaplatos, en seco, esto evitar&aacute; que se ponga negro tu caldero.<o:p></o:p></span></p>\r\n', 'original_12.png');

-- --------------------------------------------------------

-- 
-- Estructura de tabla para la tabla `banner`
-- 
-- Creación: 16-09-2013 a las 08:51:54
-- 

DROP TABLE IF EXISTS `banner`;
CREATE TABLE IF NOT EXISTS `banner` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `titulo1` varchar(45) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `titulo2` varchar(45) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `texto` text CHARACTER SET utf8 COLLATE utf8_unicode_ci,
  `imagen` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=utf8 AUTO_INCREMENT=14 ;

-- 
-- Volcar la base de datos para la tabla `banner`
-- 

INSERT INTO `banner` VALUES (2, 'L&iacute;nea', 'Infantil ', 'Tradición, higiene y econom&iacute;a. Todo para el cuidado de tu bebe.  ', 'original_2.png');
INSERT INTO `banner` VALUES (11, 'Cubiertos ', 'Tayrona ', 'Dale estilo a tu mesa. Disfruta todas nuestras l&iacute;neas de cuberter&iacute;a.', 'original_11.png');
INSERT INTO `banner` VALUES (13, 'L&iacute;nea ', 'de Colores', 'Dale vida a tu cocina con MUNAL. Nueva L&iacute;nea de Antiadherentes.', 'original_13.png');

-- --------------------------------------------------------

-- 
-- Estructura de tabla para la tabla `categorias`
-- 
-- Creación: 13-09-2013 a las 17:00:39
-- 

DROP TABLE IF EXISTS `categorias`;
CREATE TABLE IF NOT EXISTS `categorias` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `lineas_id` int(10) unsigned NOT NULL,
  `titulo` varchar(255) CHARACTER SET latin1 DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `categorias_FKIndex1` (`lineas_id`)
) ENGINE=InnoDB AUTO_INCREMENT=18 DEFAULT CHARSET=utf8 AUTO_INCREMENT=18 ;

-- 
-- Volcar la base de datos para la tabla `categorias`
-- 

INSERT INTO `categorias` VALUES (1, 1, 'Al Vapor');
INSERT INTO `categorias` VALUES (3, 1, 'Para Freir');
INSERT INTO `categorias` VALUES (4, 1, 'Al horno');
INSERT INTO `categorias` VALUES (8, 2, 'Cubiertos');
INSERT INTO `categorias` VALUES (14, 3, 'Lavaplatos');
INSERT INTO `categorias` VALUES (17, 2, 'Utensilios');

-- --------------------------------------------------------

-- 
-- Estructura de tabla para la tabla `cms_configuration`
-- 
-- Creación: 13-09-2013 a las 17:00:39
-- Última actualización: 13-09-2013 a las 17:59:32
-- 

DROP TABLE IF EXISTS `cms_configuration`;
CREATE TABLE IF NOT EXISTS `cms_configuration` (
  `config_id` int(11) unsigned NOT NULL AUTO_INCREMENT COMMENT 'id unico',
  `config_date` datetime DEFAULT NULL COMMENT 'Fecha y hora de instalacion',
  `config_path` varchar(256) DEFAULT NULL COMMENT 'Path general de instalacion',
  `config_web` varchar(120) DEFAULT NULL COMMENT 'Path general de instalacion',
  `config_mail_remitent` varchar(120) DEFAULT NULL COMMENT 'Email remitente de los correos que envia el CMS',
  `config_company` varchar(120) DEFAULT NULL COMMENT 'Nombre que se presenta como empresa que envia el email',
  PRIMARY KEY (`config_id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

-- 
-- Volcar la base de datos para la tabla `cms_configuration`
-- 

INSERT INTO `cms_configuration` VALUES (1, '2012-07-25 12:10:42', 'http://gruponorth.com/cms/', 'http://gruponorth.com/', 'cms@imaginamos.com', 'imaginamos.com');

-- --------------------------------------------------------

-- 
-- Estructura de tabla para la tabla `cms_menu`
-- 
-- Creación: 13-09-2013 a las 17:00:39
-- Última actualización: 13-09-2013 a las 17:00:39
-- 

DROP TABLE IF EXISTS `cms_menu`;
CREATE TABLE IF NOT EXISTS `cms_menu` (
  `menu_id` int(11) NOT NULL AUTO_INCREMENT,
  `menu_title` varchar(40) DEFAULT NULL,
  `menu_url` varchar(80) DEFAULT NULL,
  `menu_icon` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`menu_id`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=utf8 AUTO_INCREMENT=7 ;

-- 
-- Volcar la base de datos para la tabla `cms_menu`
-- 

INSERT INTO `cms_menu` VALUES (1, 'Home', 'modules/banner/view', 'home');
INSERT INTO `cms_menu` VALUES (2, 'Sedes', 'modules/ubicacion/view', 'point');
INSERT INTO `cms_menu` VALUES (3, 'Soluciones', 'modules/categorias/view', 'world');
INSERT INTO `cms_menu` VALUES (4, 'Recetas', 'modules/recetas_internas/view', 'clipboard');
INSERT INTO `cms_menu` VALUES (5, 'Actividades', 'modules/actividades_internas/view', 'calendar');
INSERT INTO `cms_menu` VALUES (6, 'Almacenes', 'modules/almacenes/view', 'world');

-- --------------------------------------------------------

-- 
-- Estructura de tabla para la tabla `cms_user`
-- 
-- Creación: 13-09-2013 a las 17:00:39
-- 

DROP TABLE IF EXISTS `cms_user`;
CREATE TABLE IF NOT EXISTS `cms_user` (
  `id_user` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `username_user` varchar(60) DEFAULT NULL,
  `password_user` varchar(100) DEFAULT NULL,
  `email_user` varchar(50) DEFAULT NULL,
  `rol_user` varchar(11) DEFAULT NULL,
  PRIMARY KEY (`id_user`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

-- 
-- Volcar la base de datos para la tabla `cms_user`
-- 

INSERT INTO `cms_user` VALUES (1, 'administrador', '475266560c6d9f03f9ec80340218fa4c', 'cms@imaginamos.com', 'admin');

-- --------------------------------------------------------

-- 
-- Estructura de tabla para la tabla `destacados`
-- 
-- Creación: 13-09-2013 a las 17:00:39
-- 

DROP TABLE IF EXISTS `destacados`;
CREATE TABLE IF NOT EXISTS `destacados` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `titulo1` varchar(20) DEFAULT NULL,
  `titulo2` varchar(20) DEFAULT NULL,
  `imagen` varchar(255) DEFAULT NULL,
  `imagen1` varchar(255) DEFAULT NULL,
  `imagen2` varchar(255) DEFAULT NULL,
  `imagen3` varchar(255) DEFAULT NULL,
  `link` varchar(255) DEFAULT NULL,
  `link_2` varchar(255) DEFAULT NULL,
  `link_3` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

-- 
-- Volcar la base de datos para la tabla `destacados`
-- 

INSERT INTO `destacados` VALUES (1, 'Nuestras', 'Soluciones', 'original_1.jpg', 'original1_1.png', 'original2_1.png', 'original3_1.png', 'http://repositorio.imaginamos.com.co/HF/north_prog/index.php?base&seccion=soluciones-1&idsol=1', 'http://repositorio.imaginamos.com.co/HF/north_prog/index.php?base&seccion=soluciones-1&idsol=3', 'http://repositorio.imaginamos.com.co/HF/north_prog/index.php?base&seccion=soluciones-1&idsol=2');

-- --------------------------------------------------------

-- 
-- Estructura de tabla para la tabla `items_productos`
-- 
-- Creación: 13-09-2013 a las 17:00:39
-- 

DROP TABLE IF EXISTS `items_productos`;
CREATE TABLE IF NOT EXISTS `items_productos` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `productos_id` int(10) unsigned NOT NULL,
  `titulo` varchar(255) CHARACTER SET latin1 DEFAULT NULL,
  `texto_contenido` text CHARACTER SET latin1,
  PRIMARY KEY (`id`),
  KEY `items_productos_FKIndex1` (`productos_id`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8 AUTO_INCREMENT=10 ;

-- 
-- Volcar la base de datos para la tabla `items_productos`
-- 

INSERT INTO `items_productos` VALUES (1, 1, 'especificación1:', 'Lorem ipsun dolor sit amet lorem ipsun dolor sit amet loren ipsun dolor sit amet loren ipsun dolor sit amet...sdf');
INSERT INTO `items_productos` VALUES (2, 2, 'Prueba', 'lorem ipsum dolor lorem ipsum dolor lorem ipsum dolor lorem ipsum dolor lorem ipsum dolor lorem ipsum dolor lorem ipsum dolor lorem ipsum dolor lorem ipsum dolor lorem ipsum dolor lorem ipsum dolor lorem ipsum dolor lorem ipsum dolor lorem ipsum dolor lorem ipsum dolor lorem ipsum dolor lorem ipsum dolor lorem ipsum dolor lorem ipsum dolor lorem ipsum dolor lorem ipsum dolor lorem ipsum dolor lorem ipsum dolor lorem ipsum dolor lorem ipsum dolor lorem ipsum dolor lorem ipsum dolor lorem ipsum dolor lorem ipsum dolor lorem ipsum dolor lorem ipsum dolor lorem ipsum dolor lorem ipsum dolor lorem ipsum dolor lorem ipsum dolor lorem ipsum dolor lorem ipsum dolor lorem ipsum dolor lorem ipsum dolor lorem ipsum dolor ');
INSERT INTO `items_productos` VALUES (3, 2, 'lorem ipsum dolor lorem ipsum dolor ', 'lorem ipsum dolor lorem ipsum dolor lorem ipsum dolor lorem ipsum dolor lorem ipsum dolor lorem ipsum dolor lorem ipsum dolor lorem ipsum dolor lorem ipsum dolor lorem ipsum dolor lorem ipsum dolor lorem ipsum dolor lorem ipsum dolor lorem ipsum dolor lorem ipsum dolor lorem ipsum dolor ');
INSERT INTO `items_productos` VALUES (4, 3, 'lorem ipsum dolor ', 'lorem ipsum dolor lorem ipsum dolor lorem ipsum dolor lorem ipsum dolor lorem ipsum dolor lorem ipsum dolor lorem ipsum dolor lorem ipsum dolor lorem ipsum dolor lorem ipsum dolor lorem ipsum dolor lorem ipsum dolor lorem ipsum dolor lorem ipsum dolor lorem ipsum dolor lorem ipsum dolor lorem ipsum dolor ');
INSERT INTO `items_productos` VALUES (5, 5, 'esp1', 'jkhkjh');
INSERT INTO `items_productos` VALUES (6, 7, 'bhbkhjbj', 'nbhjbkhjbhjbkhj');
INSERT INTO `items_productos` VALUES (7, 7, 'dftfghjkldxcfvbnjmk', 'dsgfhghcfgjcfjhbhxfgkj vgbvjbvjbvghjk');
INSERT INTO `items_productos` VALUES (8, 7, 'materia prueba', 'ok');
INSERT INTO `items_productos` VALUES (9, 20, 'Lavar bien las verduras', 'ok');

-- --------------------------------------------------------

-- 
-- Estructura de tabla para la tabla `items_ubicacion`
-- 
-- Creación: 13-09-2013 a las 17:00:39
-- 

DROP TABLE IF EXISTS `items_ubicacion`;
CREATE TABLE IF NOT EXISTS `items_ubicacion` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `ubicacion_id` int(10) unsigned NOT NULL,
  `item` varchar(255) CHARACTER SET latin1 DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `items_ubicacion_FKIndex1` (`ubicacion_id`)
) ENGINE=InnoDB AUTO_INCREMENT=36 DEFAULT CHARSET=utf8 AUTO_INCREMENT=36 ;

-- 
-- Volcar la base de datos para la tabla `items_ubicacion`
-- 

INSERT INTO `items_ubicacion` VALUES (1, 3, 'Lorem Ipsum is simply dummy text');
INSERT INTO `items_ubicacion` VALUES (2, 5, 'ejemplo1');
INSERT INTO `items_ubicacion` VALUES (3, 5, 'ejemplo2');
INSERT INTO `items_ubicacion` VALUES (4, 3, 'Infinite lorem ipsun dolor sit a met consectrur set lorem ipsun dolor sit amet consectur lorem ipsun dolor sit amet consectur');
INSERT INTO `items_ubicacion` VALUES (9, 122, 'ALMACENES LA 13: Calle 13 # 8-52   PBX: (572) 889 3333   FAX: (572) 884 2635 / Tambien en el LIMONAR Y ALAMEDA. ');
INSERT INTO `items_ubicacion` VALUES (10, 124, 'pruebra item dirección');
INSERT INTO `items_ubicacion` VALUES (11, 126, 'DISTRIBUIDORA KIRAMAR: Avenida 33 # 51 - 04 Teléfono: (57) (4) 4833000 ');
INSERT INTO `items_ubicacion` VALUES (13, 127, 'DISTRIBUCIONES EL MAYORISTA: Calle 17 # 65 B - 31 Teléfono: (57) (1) 4200909 ');
INSERT INTO `items_ubicacion` VALUES (15, 129, 'CRISTALERIA LA PAZ: Calle33 # 15- 53  Teléfono: (57) (7) 6421782');
INSERT INTO `items_ubicacion` VALUES (16, 130, 'ROJAS HERMANOS: Calle 26 c # 36 - 58 Telefono: (57) (8) 6705020 ');
INSERT INTO `items_ubicacion` VALUES (17, 130, 'ALMACEN Y CRISTALERIA LA MEJOR: CAlle 37a # 28 - 44  Teléfono: (57) (8) 6625964 ');
INSERT INTO `items_ubicacion` VALUES (18, 122, 'DISTRIBUIDORA CRISTALERIA LA MEJOR: Calle 13 # 8 - 85 Telefono: 8842745');
INSERT INTO `items_ubicacion` VALUES (19, 122, 'ALMACEN TODO: Calle 13 # 7 - 54 Telefono: 8801821');
INSERT INTO `items_ubicacion` VALUES (20, 126, 'CACHARRERIA Y VARIEDADES MILENIO: Carrera 53 # 46 - 96 Telefono: 5143638');
INSERT INTO `items_ubicacion` VALUES (21, 126, 'CACHARRERIA LOS MARINILLOS: Carrera 53 A # 45 - 122 Telefono: 2310422');
INSERT INTO `items_ubicacion` VALUES (22, 127, 'INVERSIONES ARANDA PINILLA E HIJOS S.A: Carrera 14 # 10- 80 Telefono: 2813982');
INSERT INTO `items_ubicacion` VALUES (23, 127, 'REPRESENTACIONES Y DISTRIBUCIONES NOSOTROS LTDA: Carrera 12 # 17A - 80 FUNZA	Telefono: 8260928');
INSERT INTO `items_ubicacion` VALUES (24, 128, 'ALMACEN DISTRIBEL: Calle 32 # 41 - 47	Telefono: 3510906');
INSERT INTO `items_ubicacion` VALUES (25, 128, 'DISTRIBUCIONES SUPER CAMPESINO: Carrera 42 # 32 - 60 Telefono: 3703985');
INSERT INTO `items_ubicacion` VALUES (26, 128, 'ALMACEN EL NUEVO CAMPESINO: Carrera 42 # 30 - 35 Telefono: 3519322');
INSERT INTO `items_ubicacion` VALUES (27, 129, 'BRILLO DE COLOMBIA S.A: Calle 18 # 17 - 29 Telefono: 6718823');
INSERT INTO `items_ubicacion` VALUES (28, 129, 'CACHARRERIA LOS MARINILLOS LTDA: Carrera 15 # 34 - 35 Telefono: 6526707');
INSERT INTO `items_ubicacion` VALUES (29, 130, 'ALMACEN Y CRISTALERIA LA REBAJA: Calle 37A # 28 - 57 Telefono: 3105627807');
INSERT INTO `items_ubicacion` VALUES (30, 131, 'DISTRIBUIDORA EL GIGANTE DEL HOGAR: Avenida PEDRO HEREDIA # 27A - 23 Telefono: 6720975');
INSERT INTO `items_ubicacion` VALUES (31, 131, 'DISTRIBUCIONES CALDAS LTDA: Avenida PEDRO HEREDIA # 62 - 110 Telefono: 6630602');
INSERT INTO `items_ubicacion` VALUES (32, 131, 'CRISTALERIA EL NUEVO CAMPESINO: MERCADO BAZURTO GALERIA CRISTAL	Telefono: 6743974');
INSERT INTO `items_ubicacion` VALUES (33, 132, 'TEXCOL COMPAÑÍA LTDA: Carrera 21 # 19 - 48 Telefono: 7215558');
INSERT INTO `items_ubicacion` VALUES (34, 132, 'FERRETERIA ARGENTINA: Carrera 20 # 19 - 95 Telefono: 7214383');
INSERT INTO `items_ubicacion` VALUES (35, 132, 'ALMACEN GERARDO ORTIZ SUC LTDA: Carrera 21B # 18 - 01 Telefono: 7209880');

-- --------------------------------------------------------

-- 
-- Estructura de tabla para la tabla `lineas`
-- 
-- Creación: 13-09-2013 a las 17:00:39
-- 

DROP TABLE IF EXISTS `lineas`;
CREATE TABLE IF NOT EXISTS `lineas` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `titulo` varchar(45) CHARACTER SET latin1 DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8 AUTO_INCREMENT=4 ;

-- 
-- Volcar la base de datos para la tabla `lineas`
-- 

INSERT INTO `lineas` VALUES (1, 'Cocción');
INSERT INTO `lineas` VALUES (2, 'Mesa y servicio ');
INSERT INTO `lineas` VALUES (3, 'cocina y construcción');

-- --------------------------------------------------------

-- 
-- Estructura de tabla para la tabla `productos`
-- 
-- Creación: 13-09-2013 a las 17:00:39
-- 

DROP TABLE IF EXISTS `productos`;
CREATE TABLE IF NOT EXISTS `productos` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `subcategorias_id` int(10) unsigned NOT NULL,
  `nombre` varchar(255) DEFAULT NULL,
  `precio` varchar(255) DEFAULT NULL,
  `referencia` varchar(255) DEFAULT NULL,
  `texto_descripcion` text,
  `texto_descripcion2` text,
  `imagen1` varchar(255) DEFAULT NULL,
  `imagen2` varchar(255) DEFAULT NULL,
  `imagen3` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `productos_FKIndex1` (`subcategorias_id`)
) ENGINE=InnoDB AUTO_INCREMENT=202 DEFAULT CHARSET=utf8 AUTO_INCREMENT=202 ;

-- 
-- Volcar la base de datos para la tabla `productos`
-- 

INSERT INTO `productos` VALUES (2, 9, 'para Mesa y servicio', '99.999.999', 'REF: qwerty', 'lorem ipsum dolor lorem ipsum dolor lorem ipsum dolor lorem ipsum dolor lorem ipsum dolor lorem ipsum dolor lorem ipsum dolor lorem ipsum dolor lorem ipsum dolor lorem ipsum dolor lorem ipsum dolor lorem ipsum dolor lorem ipsum dolor lorem ipsum dolor lorem ipsum dolor lorem ipsum dolor lorem ipsum dolor lorem ipsum dolor lorem ipsum dolor lorem ipsum dolor lorem ipsum dolor lorem ipsum dolor lorem ipsum dolor lorem ipsum dolor lorem ipsum dolor lorem ipsum dolor lorem ipsum dolor lorem ipsum dolor lorem ipsum dolor lorem ipsum dolor ', 'lorem ipsum dolor lorem ipsum dolor lorem ipsum dolor lorem ipsum dolor lorem ipsum dolor lorem ipsum dolor lorem ipsum dolor lorem ipsum dolor lorem ipsum dolor lorem ipsum dolor lorem ipsum dolor lorem ipsum dolor lorem ipsum dolor lorem ipsum dolor lorem ipsum dolor lorem ipsum dolor lorem ipsum dolor lorem ipsum dolor lorem ipsum dolor lorem ipsum dolor lorem ipsum dolor lorem ipsum dolor lorem ipsum dolor lorem ipsum dolor lorem ipsum dolor lorem ipsum dolor lorem ipsum dolor lorem ipsum dolor lorem ipsum dolor lorem ipsum dolor lorem ipsum dolor lorem ipsum dolor ', 'original1_2.jpg', 'original2_2.jpg', 'original3_2.jpg');
INSERT INTO `productos` VALUES (3, 9, 'prueba', '638.999', 'Ref: TEST', 'lorem ipsum dolor lorem ipsum dolor lorem ipsum dolor lorem ipsum dolor lorem ipsum dolor lorem ipsum dolor lorem ipsum dolor lorem ipsum dolor lorem ipsum dolor lorem ipsum dolor lorem ipsum dolor lorem ipsum dolor lorem ipsum dolor lorem ipsum dolor lorem ipsum dolor lorem ipsum dolor lorem ipsum dolor lorem ipsum dolor lorem ipsum dolor lorem ipsum dolor lorem ipsum dolor lorem ipsum dolor lorem ipsum dolor lorem ipsum dolor lorem ipsum dolor lorem ipsum dolor lorem ipsum dolor lorem ipsum dolor lorem ipsum dolor lorem ipsum dolor lorem ipsum dolor lorem ipsum dolor lorem ipsum dolor lorem ipsum dolor lorem ipsum dolor ', 'lorem ipsum dolor lorem ipsum dolor lorem ipsum dolor lorem ipsum dolor lorem ipsum dolor lorem ipsum dolor lorem ipsum dolor lorem ipsum dolor lorem ipsum dolor lorem ipsum dolor lorem ipsum dolor lorem ipsum dolor lorem ipsum dolor lorem ipsum dolor lorem ipsum dolor lorem ipsum dolor lorem ipsum dolor lorem ipsum dolor lorem ipsum dolor lorem ipsum dolor lorem ipsum dolor lorem ipsum dolor lorem ipsum dolor lorem ipsum dolor lorem ipsum dolor lorem ipsum dolor lorem ipsum dolor lorem ipsum dolor ', 'original1_3.jpg', 'original2_3.jpg', 'original3_3.jpg');
INSERT INTO `productos` VALUES (4, 11, 'lorem ipsum dolor ', '12342345', 'lorem ipsum dolor ', 'lorem ipsum dolor lorem ipsum dolor lorem ipsum dolor lorem ipsum dolor lorem ipsum dolor lorem ipsum dolor lorem ipsum dolor lorem ipsum dolor lorem ipsum dolor lorem ipsum dolor lorem ipsum dolor lorem ipsum dolor lorem ipsum dolor lorem ipsum dolor lorem ipsum dolor lorem ipsum dolor lorem ipsum dolor lorem ipsum dolor lorem ipsum dolor lorem ipsum dolor lorem ipsum dolor lorem ipsum dolor lorem ipsum dolor lorem ipsum dolor ', 'lorem ipsum dolor lorem ipsum dolor lorem ipsum dolor lorem ipsum dolor lorem ipsum dolor lorem ipsum dolor lorem ipsum dolor lorem ipsum dolor lorem ipsum dolor lorem ipsum dolor lorem ipsum dolor lorem ipsum dolor lorem ipsum dolor lorem ipsum dolor lorem ipsum dolor lorem ipsum dolor lorem ipsum dolor lorem ipsum dolor lorem ipsum dolor lorem ipsum dolor lorem ipsum dolor lorem ipsum dolor lorem ipsum dolor lorem ipsum dolor ', 'original1_4.jpg', 'original2_4.jpg', 'original3_4.jpg');
INSERT INTO `productos` VALUES (5, 15, 'Producto1', '100', '12', 'sadsad', 'Especificaciones\r\n\n1\r\n\n2\r\n\n3', 'original1_5.jpg', 'original2_5.jpg', 'original3_5.jpg');
INSERT INTO `productos` VALUES (7, 17, 'luis mejia prueba', '50000000', '5678689', 'hjiohjiuohjbnkjlkbjk', 'bgjfbhjbhjrttrjehiotrbjb\r\n\n\r\n\ngrhgjghefgjkefhgjfkfñ\r\n\n\r\n\nhfrgerhgergigler', 'original1_7.jpg', 'original2_7.jpg', 'original3_7.jpg');
INSERT INTO `productos` VALUES (8, 17, 'xxxxxxxxxxxxxxxxxx', '900000000', '45y7587743593', 'xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx', 'xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx', 'original1_8.jpg', 'original2_8.jpg', 'original3_8.jpg');
INSERT INTO `productos` VALUES (9, 17, 'vvvvvvvvvvvvvvvvvvv', '7000000000000', '2534642624', 'vvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvv', 'vvvvvvvvvvvvvvvv vvvvvvvvvvvvvvvvvv vvvvvvvvvvvvvvvv', 'original1_9.jpg', 'original2_9.jpg', 'original3_9.jpg');
INSERT INTO `productos` VALUES (10, 17, 'ddddddddddddddddddddd', '40000000000', '654673645', 'dddddddddddddddddddddddddddddddddddddddddddddddddddddddddddd', 'dddddddddddddddddddddddddddddd dddddddddddddd  d  ddddddddddddd', 'original1_10.jpg', 'original2_10.jpg', 'original3_10.jpg');
INSERT INTO `productos` VALUES (11, 17, 'gggggggggggggggggggg', '600000000000000', '66234634646772', 'gggggggggggggggggggggggggggggggggggggggggggggggg', 'ggggggggggggggggggggggg gggggggg gggggggggggggg ggggggggggggggggggggg  g ggggggggggggggg g g gggggg', 'original1_11.jpg', 'original2_11.jpg', 'original3_11.jpg');
INSERT INTO `productos` VALUES (12, 17, 'hhhhhhhhhhhhhhhhhhh', '300000000000000', '458676579896', 'hhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhh', 'hhhhhhhhh h hhhhhhhhh  hhhh  hhhhhhhhhhhhhhhhhhhh hhh hhhhhhhhhhhh', 'original1_12.jpg', 'original2_12.jpg', 'original3_12.jpg');
INSERT INTO `productos` VALUES (13, 17, 'lllllllllllllllllllllllllllllllllllllll', '100000000000000', '5854646575656787', 'llllllllllllllllllllllllllllllllllllllllllllllllllllllllllllllllllllllllllllllllllllllllllllllllllllllllllllllllllllllll', 'lllllllllllllllllllllll lllllllllllllllllllllllllllllllll lll lllllllllllllllll llllllllllll llll llllllllllllllllllll llllllllllll', 'original1_13.jpg', 'original2_13.jpg', 'original3_13.jpg');
INSERT INTO `productos` VALUES (14, 17, 'aaaaaaaaaaaaaaaaaaaaaaa', '800000000000000', '785638677737', 'aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa', 'aaaaaaaaaaaaaaa aaaaaaaaaaaaa aaaa aaaaaaaaaaa aaaaaaa aaaaaaaaaaaaaaaaaaa ', 'original1_14.jpg', 'original2_14.jpg', 'original3_14.jpg');
INSERT INTO `productos` VALUES (15, 17, 'zzzzzzzzzzzzzzzzzzzzzzzzzzzz', '200000000000000', '54969564343945380', 'zzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzz', 'zzzzzzzzzz zzzzzzzzz zzzzz zzzzzzzzzzzzzzzzzz zzzzzz zzzzzzz', 'original1_15.jpg', 'original2_15.jpg', 'original3_15.jpg');
INSERT INTO `productos` VALUES (16, 17, 'ñññññññññññññññññññññññññññññññññññ', '600000000000000', '3868368683856527886554', 'ñññññññññññññññññññññññññññññññññññññññññññññññññññ', 'ññññññññññññññ ñññññññ ñññññ ññññññññññññññññ ññññññ ññññññññññ', 'original1_16.jpg', 'original2_16.jpg', 'original3_16.jpg');
INSERT INTO `productos` VALUES (17, 17, 'oooooooooooooooooooooooooooooo', '400000000000000', '5489469048609326', 'oooooooooooooooooooooooooooooooooooooo', 'ooooooooooo oooo ooooooooooooooo oooooo oooooooooooooo ooooooooooo ', 'original1_17.jpg', 'original2_17.jpg', 'original3_17.jpg');
INSERT INTO `productos` VALUES (18, 17, 'kkkkkkkkkkkk', '535000000000000', '34768868798406252', 'kkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkk', 'kkkkkkkkk kkkk kkkkkkkkkkkkkkkkk kkkk kkkkkkkkkkkkkk kkkkkkkkkkk', 'original1_18.jpg', 'original2_18.jpg', 'original3_18.jpg');
INSERT INTO `productos` VALUES (19, 17, 'jjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjj', '773000000000000', '525752743175134', 'jjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjj', 'jjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjj jjjjjjjjjj jjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjj jjjjjjjj jjjjjjjjjj jjjjjj jjjjjjjjjjjjjjjjjjjj  jjjjjjjjjjj', 'original1_19.jpg', 'original2_19.jpg', 'original3_19.jpg');
INSERT INTO `productos` VALUES (20, 20, 'Prod1', '100', 'FRP', 'Es una prueba', 'Es una prueba de especificaciones', 'original1_20.jpg', 'original2_20.jpg', 'original3_20.jpg');
INSERT INTO `productos` VALUES (35, 1, 'Mi Aguita Hervida ', '-', '1178 ', 'Olla Oreja Cuzqueña Mi Agüita Hervida 18 c/t', 'Línea Infantil - Acero Porcelanizado.\r\n\n\r\n\n- Atractivo decorado infantil.\r\n\n- Asas de acero esmaltado.\r\n\n- Tapa de acero esmaltado con perilla de baquelita .\r\n\n- No retiene bacterias.\r\n\n- Total permanencia de color y matiz.', 'original1_35.png', 'original2_35.png', 'original3_35.png');
INSERT INTO `productos` VALUES (36, 1, 'Mi Coladita', '-', '1904', 'Olla Oreja Infantil Mi Coladita 18 c/t - 3.3L', 'Línea Infantil - Acero Porcelanizado.\r\n\n\r\n\n- Atractivo decorado infantil.\r\n\n- Asas de acero esmaltado.\r\n\n- Tapa de acero esmaltado con perilla de baquelita .\r\n\n- No retiene bacterias.\r\n\n- Total permanencia de color y matiz.', 'original1_36.png', 'original2_36.png', 'original3_36.png');
INSERT INTO `productos` VALUES (37, 1, 'Mi Jarrito ', '-', '1104', '1104- Jarro 14 c/t Decorado Mi jarrito 3.2L\r\n\n1092- Jarro 10 c/t Decorado Mi jarrito 1.7L', 'Línea Infantil - Acero Porcelanizado.\r\n\n\r\n\n- Atractivo decorado infantil.\r\n\n- Mango de acero esmaltado.\r\n\n- Tapa de acero esmaltado con perilla de baquelita .\r\n\n- No retiene bacterias.\r\n\n- Total permanencia de color y matiz.', 'original1_37.png', 'original2_37.png', 'original3_37.png');
INSERT INTO `productos` VALUES (38, 1, 'Olla Infantil Sopita', '-', '1903', 'Olla Oreja Infantil Sopita 18 c/t 4.5L', 'Línea Infantil - Acero Porcelanizado. \r\n\n \r\n\n- Atractivo decorado infantil.\r\n\n- Asas de acero esmaltado.\r\n\n- Tapa de acero esmaltado con perilla de baquelita .\r\n\n- No retiene bacterias.\r\n\n- Total permanencia de color y matiz.', 'original1_38.png', 'original2_38.png', 'original3_38.png');
INSERT INTO `productos` VALUES (39, 1, 'Olla Infantil Teteros', '-', '1900', '1900 - Olla Oreja Infantil Teteros 16 c/t 3.1L\r\n\n1901 - Olla Oreja Infantil Teteros 20 c/t 5.5L\r\n\n1906 - Olla Oreja Infantil Teteros 22 c/t 5.8L\r\n\n1902 - Olla Oreja Infantil Teteros 24 c/t 6.3L ', 'Línea Infantil - Acero Porcelanizado. \r\n\n\r\n\n- Atractivo decorado infantil.\r\n\n- Asas de acero esmaltado.\r\n\n- Tapa de acero esmaltado con perilla de baquelita .\r\n\n- No retiene bacterias.\r\n\n- Total permanencia de color y matiz.\r\n\n', 'original1_39.png', 'original2_39.png', 'original3_39.png');
INSERT INTO `productos` VALUES (40, 1, 'Minijarra Infantil', '-', '1103', 'Minijarra Infantil Jugo 12 c/t 1.5L ', 'Línea Infantil - Acero Porcelanizado. \r\n\n\r\n\n- Atractivo decorado infantil.\r\n\n- Mango de acero esmaltado.\r\n\n- Tapa de acero esmaltado con perilla de baquelita .\r\n\n- No retiene bacterias.\r\n\n- Total permanencia de color y matiz.', 'original1_40.png', 'original2_40.png', 'original3_40.png');
INSERT INTO `productos` VALUES (48, 1, 'Jarro Recto', '-', '1120', 'Jarro Recto Infantil Jugo 14 c/t Decorado 1.5L', 'Línea Infantil - Acero Porcelanizado. \r\n\n\r\n\n- Atractivo decorado infantil.\r\n\n- Mango de acero esmaltado.\r\n\n- Tapa de acero esmaltado con perilla de baquelita .\r\n\n- No retiene bacterias.\r\n\n- Total permanencia de color y matiz.', 'original1_48.png', 'original2_48.png', 'original3_48.png');
INSERT INTO `productos` VALUES (49, 1, 'Olla Stopck Pot', '-', '1152', 'Olla Oreja Stopck Pot 22 c/t Decorada 7L', 'Línea Tradicional - Acero Porcelanizado. \r\n\n\r\n\n- Atractivo decorado.\r\n\n- Mango de acero esmaltado.\r\n\n- Tapa de acero esmaltado con perilla de baquelita .\r\n\n- No retiene bacterias.\r\n\n- Total permanencia de color y matiz.\r\n\n', 'original1_49.png', 'original2_49.png', 'original3_49.png');
INSERT INTO `productos` VALUES (50, 1, 'Olla Cuzqueña', '-', '1170', '1170- Olla Oreja Cuzqueña 12 Dec. c/t 1.5L\r\n\n1124- Olla Oreja Cuzqueña 14 Dec. c/t 2.0L\r\n\n1140- Olla Oreja Cuzqueña 16 Dec. c/t 3.1L\r\n\n1125- Olla Oreja Cuzqueña 18 Dec. c/t 3.3L\r\n\n1167- Olla Oreja Cuzqueña 20 Dec. c/t 5.5L \r\n\n1126- Olla Oreja Cuzqueña 22 Dec. c/t 6.8L\r\n\n1128- Olla Oreja Cuzqueña 24 Dec. c/t 7.0L\r\n\n1139- Olla Oreja Cuzqueña 26 Dec. c/t 7.8L \r\n\n1169- Olla Oreja Cuzqueña 28 Dec. c/t 8.5L\r\n\n1173- Olla Oreja Cuzqueña 30 Dec. c/t 10L\r\n\n1176- Olla Oreja Cuzqueña 32 Dec. c/t 13L', 'Línea Tradicional - Acero Porcelanizado. \r\n\n\r\n\n- Atractivo decorado.\r\n\n- Mango de acero esmaltado.\r\n\n- Tapa de acero esmaltado con perilla de baquelita .\r\n\n- No retiene bacterias.\r\n\n- Total permanencia de color y matiz.', 'original1_50.png', 'original2_50.png', 'original3_50.png');
INSERT INTO `productos` VALUES (51, 1, 'Olla Andaluz', '-', '1911', '1911- Olla Oreja Andaluz 16 Dec. c/t 3.1L\r\n\n1912- Olla Oreja Andaluz 18 Dec. c/t 3.3L\r\n\n1913- Olla Oreja Andaluz 20 Dec. c/t 5.5L\r\n\n1914- Olla Oreja Andaluz 22 Dec. c/t 6.8L', 'Línea Tradicional - Acero Porcelanizado. \r\n\n\r\n\n- Atractivo decorado.\r\n\n- Mango de acero esmaltado.\r\n\n- Tapa de acero esmaltado con perilla de baquelita .\r\n\n- No retiene bacterias.\r\n\n- Total permanencia de color y matiz.', 'original1_51.png', 'original2_51.png', 'original3_51.png');
INSERT INTO `productos` VALUES (55, 1, 'Super Jarro', '-', '1057', 'Super Jarro 16 Decorado c/t 7.3L', 'Línea Tradicional - Acero Porcelanizado. \r\n\n\r\n\n- Atractivo decorado.\r\n\n- Mango de acero esmaltado.\r\n\n- Tapa de acero esmaltado con perilla de baquelita .\r\n\n- No retiene bacterias.\r\n\n- Total permanencia de color y matiz.\r\n\n', 'original1_55.png', 'original2_55.png', 'original3_55.png');
INSERT INTO `productos` VALUES (56, 1, 'MIni Jarra', '-', '1101', 'Mini Jarra 12 Decorada c/t 3.1L', 'Línea Tradicional - Acero Porcelanizado. \r\n\n\r\n\n- Atractivo decorado.\r\n\n- Mango de acero esmaltado.\r\n\n- Tapa de acero esmaltado con perilla de baquelita .\r\n\n- No retiene bacterias.\r\n\n- Total permanencia de color y matiz.\r\n\n', 'original1_56.png', 'original2_56.png', 'original3_56.png');
INSERT INTO `productos` VALUES (57, 1, 'Tetera', '-', '1095', 'Tetera 16 Decorada c/t 5.0L\r\n\n', 'Línea Tradicional - Acero Porcelanizado. \r\n\n\r\n\n- Atractivo decorado.\r\n\n- Mango de acero esmaltado.\r\n\n- Tapa de acero esmaltado con perilla de baquelita .\r\n\n- No retiene bacterias.\r\n\n- Total permanencia de color y matiz.\r\n\n', 'original1_57.png', 'original2_57.png', 'original3_57.png');
INSERT INTO `productos` VALUES (58, 1, 'Jarro Recto', '-', '1100', '1100- Jarro Recto 14 Decorado s/t 4.9L\r\n\n1099- Jarro Recto 10 Decorado s/t 1.7L', 'Línea Tradicional - Acero Porcelanizado. \r\n\n\r\n\n- Atractivo decorado.\r\n\n- Mango de acero esmaltado.\r\n\n- No retiene bacterias.\r\n\n- Total permanencia de color y matiz.\r\n\n', 'original1_58.png', 'original2_58.png', 'original3_58.png');
INSERT INTO `productos` VALUES (59, 1, 'Pocillo', '-', '1200', 'Pocillo corriente 10 Dec. s/t', 'Línea Tradicional - Acero Porcelanizado. \r\n\n\r\n\n- Atractivo decorado.\r\n\n- Mango de acero esmaltado.\r\n\n- No retiene bacterias.\r\n\n- Total permanencia de color y matiz.\r\n\n', 'original1_59.png', 'original2_59.png', 'original3_59.png');
INSERT INTO `productos` VALUES (60, 1, 'Olla Agua Hervida', '-', '1907', '1907- Olla Oreja Agua Hervida 16 c/t 3.1L\r\n\n1164- Olla Oreja Agua Hervida 32 c/t 15.0L\r\n\n', 'Línea Tradicional - Acero Porcelanizado. \r\n\n\r\n\n\r\n\n- Mango de acero esmaltado.\r\n\n- Tapa de acero esmaltado con perilla de baquelita .\r\n\n- No retiene bacterias.\r\n\n- Total permanencia de color y matiz.\r\n\n', 'original1_60.png', 'original2_60.png', 'original3_60.png');
INSERT INTO `productos` VALUES (61, 1, 'Vaso de Noche', '-', '7254', 'Vaso de noche 24 7.3L', 'Línea Tradicional - Acero Porcelanizado. \r\n\n \r\n\n- Mango de acero esmaltado.\r\n\n- No retiene bacterias.\r\n\n- Total permanencia de color y matiz.', 'original1_61.png', 'original2_61.png', 'original3_61.png');
INSERT INTO `productos` VALUES (65, 1, 'Portacomida', '-', '1211', '1211- Portacomida 14x3 Decorado c/t\r\n\n1212- Portacomida 14x4 Decorado c/t\r\n\n', 'Línea Tradicional - Acero Porcelanizado. \r\n\n\r\n\n- Atractivo decorado.\r\n\n- Mango de acero esmaltado.\r\n\n- Tapa de acero esmaltado con perilla de baquelita .\r\n\n- No retiene bacterias.\r\n\n- Total permanencia de color y matiz.\r\n\n', 'original1_65.png', 'original2_65.png', 'original3_65.png');
INSERT INTO `productos` VALUES (66, 1, 'Taza', '-', '1243', 'Taza 16 Decorada s/t 2.0L\r\n\n\r\n\n', 'Línea Tradicional - Acero Porcelanizado. \r\n\n\r\n\n - Atractivo decorado.\r\n\n - No retiene bacterias.\r\n\n - Total permanencia de color y matiz.\r\n\n', 'original1_66.png', 'original2_66.png', 'original3_66.png');
INSERT INTO `productos` VALUES (67, 5, 'Olla antiadherente Azul ', '-', '3027', '3027- Olla antiadherente azul 16cm con asas y tapa de vidrio.\r\n\n3028- Olla antiadherente azul 20cm con asas y tapa de vidrio.\r\n\n3029- Olla antiadherente azul 24cm con asas y tapa de vidrio.\r\n\n\r\n\n', 'Línea Tradicional - Aluminio Antiadherente.\r\n\n\r\n\n-Capa antiadherente interior que impide que se peguen los alimentos.\r\n\n-Anillos antiadherentes exteriores de fácil limpieza que brinda resistencia y durabilidad.\r\n\n-Con asas de baquelita remachadas con protector para flama aislante de calor. \r\n\n-Tapa de vidrio para que observes lo que preparas. \r\n\n-Aluminio de alta pureza. No contamina los alimentos.\r\n\n-Posee un fondo termo difusor que distribuye el calor para una cocción rápida y uniforme.', 'original1_67.png', 'original2_67.png', 'original3_67.png');
INSERT INTO `productos` VALUES (68, 5, 'Perol Antiadherente Azul', '-', '3007', '3007- Perol antiadherente 10cm s/t con mango.\r\n\n3016- Perol antiadherente 10cm con mango y tapa de vidrio.\r\n\n3025- Perol antiadherente 16cm s/t con mango. \r\n\n3026- Perol antiadherente 16cm con mango y tapa de vidrio. \r\n\n \r\n\n', 'Línea Tradicional - Aluminio Antiadherente.\r\n\n\r\n\n-Capa antiadherente interior que impide que se peguen los alimentos.\r\n\n-Anillos antiadherentes exteriores de fácil limpieza que brinda resistencia y durabilidad.\r\n\n-Mango remachado con protector para flama aislante de calor. \r\n\n-Tapa de vidrio para que observes lo que preparas. \r\n\n-Aluminio de alta pureza. No contamina los alimentos.\r\n\n-Posee un fondo termo difusor que distribuye el calor para una cocción rápida y uniforme.\r\n\n\r\n\n', 'original1_68.png', 'original2_68.png', 'original3_68.png');
INSERT INTO `productos` VALUES (69, 5, 'Perol Antiadherente Azul s/t', '-', '3007', '3007- Perol antiadherente 10cm s/t con mango.\r\n\n3025- Perol antiadherente 16cm s/t con mango. \r\n\n', 'Línea Tradicional - Aluminio Antiadherente.\r\n\n\r\n\n-Capa antiadherente interior que impide que se peguen los alimentos.\r\n\n-Capa antiadherente exterior de fácil limpieza que brinda resistencia y durabilidad.\r\n\n-Mango remachado con protector para flama aislante de calor. \r\n\n-Aluminio de alta pureza. No contamina los alimentos.\r\n\n-Posee un fondo termo difusor que distribuye el calor para una cocción rápida y uniforme.\r\n\n\r\n\n\r\n\n', 'original1_69.png', 'original2_69.png', 'original3_69.png');
INSERT INTO `productos` VALUES (70, 5, 'Olla Antiadherente Violeta', '-', '3527', '3527- Olla antiadherente violeta 16cm con asas y tapa de vidrio.\r\n\n3530- Olla antiadherente violeta 20cm con asas y tapa de vidrio.', 'Línea Colores - Aluminio Antiadherente.\r\n\n\r\n\n-Capa antiadherente interior que impide que se peguen los alimentos.\r\n\n-Anillos antiadherentes exteriores de fácil limpieza que brinda resistencia y durabilidad.\r\n\n-Con asas de baquelita remachadas con protector para flama aislante de calor. \r\n\n-Tapa de vidrio para que observes lo que preparas. \r\n\n-Aluminio de alta pureza. No contamina los alimentos.\r\n\n-Posee un fondo termo difusor que distribuye el calor para una cocción rápida y uniforme.\r\n\n', 'original1_70.png', 'original2_70.png', 'original3_70.png');
INSERT INTO `productos` VALUES (71, 5, 'Olla Antiadherente Naranja', '-', '3526', '3526- Olla Antiadherente Naranja 16cm con asas y tapa de vidrio.\r\n\n3529- Olla Antiadherente Naranja 20cm con asas y tapa de vidrio.\r\n\n', 'Línea Colores - Aluminio Antiadherente.\r\n\n\r\n\n-Capa antiadherente interior que impide que se peguen los alimentos.\r\n\n-Anillos antiadherentes exteriores de fácil limpieza que brinda resistencia y durabilidad.\r\n\n-Con asas de baquelita remachadas con protector para flama aislante de calor. \r\n\n-Tapa de vidrio para que observes lo que preparas. \r\n\n-Aluminio de alta pureza. No contamina los alimentos.\r\n\n-Posee un fondo termo difusor que distribuye el calor para una cocción rápida y uniforme.\r\n\n', 'original1_71.png', 'original2_71.png', 'original3_71.png');
INSERT INTO `productos` VALUES (72, 5, 'Olla Antiadherente Verde', '-', '3525', '3525- Olla antiadherente verde 16cm con asas y tapa de vidrio.\r\n\n3528- Olla antiadherente verde 20cm con asas y tapa de vidrio.\r\n\n', 'Línea Colores - Aluminio Antiadherente.\r\n\n\r\n\n-Capa antiadherente interior que impide que se peguen los alimentos.\r\n\n-Anillos antiadherentes exteriores de fácil limpieza que brinda resistencia y durabilidad.\r\n\n-Con asas de baquelita remachadas con protector para flama aislante de calor. \r\n\n-Tapa de vidrio para que observes lo que preparas. \r\n\n-Aluminio de alta pureza. No contamina los alimentos.\r\n\n-Posee un fondo termo difusor que distribuye el calor para una cocción rápida y uniforme.\r\n\n\r\n\n', 'original1_72.png', 'original2_72.png', 'original3_72.png');
INSERT INTO `productos` VALUES (73, 5, 'Perol Antiadherente Violeta', '-', '3554', '3554- Perol antiadherente violeta 16cm con tapa de vidrio.\r\n\n3524- Perol antiadherente violeta 16cm  sin tapa de vidrio.', 'Línea Colores - Aluminio Antiadherente.\r\n\n\r\n\n-Capa antiadherente interior que impide que se peguen los alimentos.\r\n\n-Anillos antiadherentes exteriores de fácil limpieza que brinda resistencia y durabilidad.\r\n\n-Mango remachado con protector para flama aislante de calor. \r\n\n-Tapa de vidrio para que observes lo que preparas. \r\n\n-Aluminio de alta pureza. No contamina los alimentos.\r\n\n-Posee un fondo termo difusor que distribuye el calor para una cocción rápida y uniforme.\r\n\n\r\n\n', 'original1_73.png', 'original2_73.png', 'original3_73.png');
INSERT INTO `productos` VALUES (74, 6, 'Olla Tapa Roja Baquelita', '-', '2430', '2430- Olla 14 Tapa Roja con asas de baquelita 1.2L\r\n\n2431- Olla 16 Tapa Roja con asas de baquelita 1.8L\r\n\n2432- Olla 18 Tapa Roja con asas de baquelita 2.5L\r\n\n2433- Olla 20 Tapa Roja con asas de baquelita 3.8L\r\n\n2434- Olla 22 Tapa Roja con asas de baquelita 5.5L\r\n\n', 'Aluminio Blanco\r\n\n\r\n\n- Aluminio de alta pureza. No contamina los alimentos.\r\n\n- Mejor Conducción.\r\n\n- Con asas de baquelita remachadas y protector para flama aislante de calor. \r\n\n- Tapa de aluminio con perilla de baquelita.', 'original1_74.png', 'original2_74.png', 'original3_74.png');
INSERT INTO `productos` VALUES (75, 6, 'Juego 3 Ollas Tapa Roja Baquelita', '-', '2440', 'Juego de 3 ollas tapa roja 16/20 con asas de baquelita.\r\n\n', 'Aluminio Natural - Blanco.\r\n\n\r\n\n- Aluminio de alta pureza. No contamina los alimentos.\r\n\n- Mejor Conducción.\r\n\n- Con asas de baquelita remachadas y protector para flama aislante de calor. \r\n\n- Tapa de aluminio con perilla de baquelita.', 'original1_75.png', 'original2_75.png', 'original3_75.png');
INSERT INTO `productos` VALUES (76, 6, 'Juego 5 Olla Tapa Roja Baquelita ', '-', '2444', 'Juego de 5 ollas tapa roja 14/20 con asas de baquelita.', 'Aluminio Natural - Blanco.\r\n\n\r\n\n- Aluminio de alta pureza. No contamina los alimentos.\r\n\n- Mejor Conducción.\r\n\n- Con asas de baquelita remachadas y protector para flama aislante de calor.\r\n\n- Tapa de aluminio con perilla de baquelita.', 'original1_76.png', 'original2_76.png', 'original3_76.png');
INSERT INTO `productos` VALUES (77, 6, 'Olla Tapa Azul ', '-', '2488', '2488- Olla tapa azul 16 con asas de aluminio 2L\r\n\n2489- Olla tapa azul 18 con asas de aluminio 3L\r\n\n2490- Olla tapa azul 20 con asas de aluminio 3.5L\r\n\n2491- Olla tapa azul 22 con asas de aluminio 5.5L\r\n\n2492- Olla tapa azul 24 con asas de aluminio 7L\r\n\n\r\n\n\r\n\n\r\n\n\r\n\n\r\n\n', 'Aluminio Natural - Blanco.\r\n\n\r\n\n- Aluminio de alta pureza. No contamina los alimentos.\r\n\n- Mejor Conducción.\r\n\n- Con asas de aluminio. \r\n\n- Tapa de aluminio con perilla de baquelita.', 'original1_77.png', 'original2_77.png', 'original3_77.png');
INSERT INTO `productos` VALUES (78, 6, 'Juego 3 Ollas Tapa Azul', '-', '2486', 'Juego de 3 ollas tapa azul 16/20 con asas de aluminio.', 'Aluminio Natural - Blanco\r\n\n\r\n\n- Aluminio de alta pureza. No contamina los alimentos.\r\n\n- Mejor Conducción.\r\n\n - Con asas de aluminio.\r\n\n- Tapa de aluminio con perilla de baquelita.', 'original1_78.png', 'original2_78.png', 'original3_78.png');
INSERT INTO `productos` VALUES (79, 6, 'Juego 5 Ollas Tapa Azul', '-', '2487', 'Juego de 5 ollas tapa azul 14/20 con asas de aluminio.\r\n\n', 'Aluminio Natural - Blanco.\r\n\n\r\n\n- Aluminio de alta pureza. No contamina los alimentos.\r\n\n- Mejor Conducción.\r\n\n- Con asas de aluminio.\r\n\n- Tapa de aluminio con perilla de baquelita.', 'original1_79.png', 'original2_79.png', 'original3_79.png');
INSERT INTO `productos` VALUES (80, 6, 'Olla Tapa Roja con asas de Aluminio', '-', '3000', '3000- Olla tapa roja 14 con asas de aluminio 1.2L\r\n\n3001- Olla tapa roja 16 con asas de aluminio 1.8L\r\n\n3002-.Olla tapa roja 18 con asas de aluminio 2.5L\r\n\n3003- Olla tapa roja 20 con asas de aluminio 3.8L\r\n\n3004- Olla tapa roja 22 con asas de aluminio 5.5L', 'Aluminio Natural - Blanco.\r\n\n\r\n\n- Aluminio de alta pureza. No contamina los alimentos.\r\n\n- Mejor Conducción.\r\n\n- Con asas de aluminio.\r\n\n- Tapa de aluminio con perilla de baquelita.', 'original1_80.png', 'original2_80.png', 'original3_80.png');
INSERT INTO `productos` VALUES (81, 6, 'Juego 3 Ollas Tapa Roja con asas de Aluminio', '-', '3005', 'Juego de 3 ollas tapa roja con asas de aluminio.', 'Aluminio Natural - Blanco.\r\n\n\r\n\n- Aluminio de alta pureza. No contamina los alimentos.\r\n\n- Mejor Conducción.\r\n\n- Con asas de aluminio.\r\n\n- Tapa de aluminio con perilla de baquelita.', 'original1_81.png', 'original2_81.png', 'original3_81.png');
INSERT INTO `productos` VALUES (82, 6, 'Juego 5 Ollas Tapa Roja con asas de Aluminio', '-', '3006', 'Juego de 5 ollas tapa roja con asas de Aluminio', 'Aluminio Natural - Blanco.\r\n\n\r\n\n- Aluminio de alta pureza. No contamina los alimentos.\r\n\n- Mejor Conducción.\r\n\n- Con asas de aluminio.\r\n\n- Tapa de aluminio con perilla de baquelita.', 'original1_82.png', 'original2_82.png', 'original3_82.png');
INSERT INTO `productos` VALUES (83, 6, 'Caldero Recortado ', '-', '2134', '2134- Caldero recortado 14 1.3L\r\n\n2135- Caldero recortado 16 1.9L\r\n\n2136- Caldero recortado 18 3.0L\r\n\n2137- Caldero recortado 20 3.9L\r\n\n2138- Caldero recortado 22 5.5L\r\n\n2139- Caldero recortado 24 7.0L\r\n\n2140- Caldero recortado 26 9.0L\r\n\n2141- Caldero recortado 28 10L\r\n\n2142- Caldero recortado 30 13L\r\n\n2107- Caldero recortado 32 15L\r\n\n2108- Caldero recortado 34 18L\r\n\n2109- Caldero recortado 36 25L\r\n\n2110- Caldero recortado 38 27L\r\n\n2111- Caldero recortado 40 34L\r\n\n', 'Aluminio Natural - Blanco.\r\n\n\r\n\n- Aluminio de alta pureza. No contamina los alimentos.\r\n\n- Mejor Conducción.\r\n\n- Con asas de aluminio.\r\n\n- Tapa de aluminio.', 'original1_83.png', 'original2_83.png', 'original3_83.png');
INSERT INTO `productos` VALUES (84, 6, 'Caldero Extrafuerte', '-', '2112', '2112- Caldero extrafuerte 40x30 38L\r\n\n2113- Caldero extrafuerte 40x40 50L\r\n\n2159- Caldero extrafuerte 50x20 39L\r\n\n2119- Caldero extrafuerte 50x30 58L\r\n\n2117- Caldero extrafuerte 50x40 79L\r\n\n2114- Caldero extrafuerte 50x50 98L\r\n\n2115- Caldero extrafuerte 50x60 117L\r\n\n2118- Caldero extrafuerte 60x40 113L\r\n\n2116- Caldero extrafuerte 60x60 169L\r\n\n\r\n\n\r\n\n\r\n\n\r\n\n\r\n\n\r\n\n', 'Aluminio Natural - Blanco.\r\n\n\r\n\n- Aluminio de alta pureza. No contamina los alimentos.\r\n\n- Mejor Conducción.\r\n\n- Con asas de aluminio.\r\n\n- Tapa de Aluminio.\r\n\n', 'original1_84.png', 'original2_84.png', 'original3_84.png');
INSERT INTO `productos` VALUES (85, 6, 'Juego 9 Calderos Recortados', '-', '2147', 'Juegos de 9 calderos recortados 14/30', 'Aluminio Natural - Blanco.\r\n\n\r\n\n- Aluminio de alta pureza. No contamina los alimentos.\r\n\n- Mejor Conducción.\r\n\n- Con asas de aluminio.\r\n\n- El juego contiene los calderos del 14 al 30.', 'original1_85.png', 'original2_85.png', 'original3_85.png');
INSERT INTO `productos` VALUES (89, 6, 'Juego 5 Calderos Recortados', '-', '2145', '2145- Juego de 5 calderos recortados 16/24\r\n\n2150- Juego de 5 calderos recortados 32/40\r\n\n', 'Aluminio Natural - Blanco.\r\n\n\r\n\n - Aluminio de alta pureza. No contamina los alimentos.\r\n\n- Mejor Conducción.\r\n\n - Con asas de aluminio.\r\n\n - Tapa de Aluminio.', 'original1_89.png', 'original2_89.png', 'original3_89.png');
INSERT INTO `productos` VALUES (90, 6, 'Jarro', '-', '2401', 'Jarro 1 Litro\r\n\n', 'Aluminio Natural - Blanco.\r\n\n\r\n\n- Aluminio de alta pureza. No contamina los alimentos.\r\n\n- Mejor Conducción.\r\n\n- Con mango de aluminio.\r\n\n', 'original1_90.png', 'original2_90.png', 'original3_90.png');
INSERT INTO `productos` VALUES (91, 6, 'Jarro Marcado', '-', '2402', 'Jarro marcado 1L', 'Aluminio Natural - Blanco.\r\n\n\r\n\n- Aluminio de alta pureza. No contamina los alimentos.\r\n\n- Mejor Conducción.\r\n\n- Con mango de aluminio.', 'original1_91.png', 'original2_91.png', 'original3_91.png');
INSERT INTO `productos` VALUES (92, 6, 'Chocolatera Recortada', '-', '2226', '2226- Chocolatera Bordeada #1 1L\r\n\n2227- Chocolatera Bordeada #2 2L\r\n\n2228- Chocolatera Bordeada #3 3L\r\n\n', 'Aluminio Natural - Blanco.\r\n\n\r\n\n- Aluminio de alta pureza. No contamina los alimentos.\r\n\n- Mejor Conducción.\r\n\n- Con mango de aluminio.', 'original1_92.png', 'original2_92.png', 'original3_92.png');
INSERT INTO `productos` VALUES (93, 6, 'Hervichoc', '-', '2340', 'Hervichoc 2L', 'Aluminio Natural - Blanco.\r\n\n\r\n\n- Aluminio de alta pureza. No contamina los alimentos.\r\n\n- Mejor Conducción.\r\n\n- Con mango de aluminio.\r\n\n- Tapa de aluminio.', 'original1_93.png', 'original2_93.png', 'original3_93.png');
INSERT INTO `productos` VALUES (99, 3, 'Caldero Fundido', '-', '1277', '1277- Caldero fundido 20 cm \r\n\n1278- Caldero fundido 24 cm \r\n\n', 'Aluminio Fundido - Antiadherente.', 'original1_99.png', 'original2_99.png', 'original3_99.png');
INSERT INTO `productos` VALUES (100, 3, 'Parrilla Fundida', '-', '1281', 'Parrilla fundida 24x24cm ', 'Aluminio Fundido - Antiadherente.\r\n\n', 'original1_100.png', 'original2_100.png', 'original3_100.png');
INSERT INTO `productos` VALUES (101, 7, 'Sartén Antiadherente Azul ', '-', '3018', '3018- Sartén antiadherente azul 18cm con mango y tapa de vidrio.\r\n\n3020- Sartén antiadherente azul 20cm con mango y tapa de vidrio. \r\n\n3022- Sartén antiadherente azul 22cm con mango y tapa de vidrio.\r\n\n3024- Sartén antiadherente azul 24cm con mango y tapa de vidrio.\r\n\n3045- Sartén antiadherente azul 30cm con mango y tapa de vidrio.', 'Línea Tradicional - Aluminio Antiadherente.\r\n\n\r\n\n- Capa antiadherente interior que impide que se peguen los alimentos.\r\n\n- Anillos antiadherentes exteriores de fácil limpieza que brinda resistencia y durabilidad.\r\n\n- Con mango de baquelita remachado y protector para flama aislante de calor. \r\n\n-Tapa de vidrio para que observes lo que preparas. \r\n\n- Aluminio de alta pureza. No contamina los alimentos.\r\n\n- Posee un fondo termo difusor que distribuye el calor para una cocción rápida y uniforme.\r\n\n', 'original1_101.png', 'original2_101.png', 'original3_101.png');
INSERT INTO `productos` VALUES (102, 7, 'Sartén Antiadherente Azul S/T', '-', '3017', '3017- Sartén antiadherente azul 18cm con mango y sin tapa de vidrio.\r\n\n3019- Sartén antiadherente azul 20cm con mango y  sin tapa de vidrio.\r\n\n3021- Sartén antiadherente azul 22cm con mango y sin tapa de vidrio.\r\n\n3023- Sartén antiadherente azul 24cm con mango y sin tapa de vidrio.\r\n\n3042- Sartén antiadherente azul 30cm con mango y sin tapa de vidrio.', 'Línea Tradicional - Aluminio Antiadherente.\r\n\n\r\n\n- Capa antiadherente interior que impide que se peguen los alimentos.\r\n\n- Anillos antiadherentes exteriores de fácil limpieza que brinda resistencia y durabilidad.\r\n\n- Con mango de baquelita remachado y protector para flama aislante de calor. \r\n\n- Aluminio de alta pureza. No contamina los alimentos.\r\n\n- Posee un fondo termo difusor que distribuye el calor para una cocción rápida y uniforme.\r\n\n\r\n\n', 'original1_102.png', 'original2_102.png', 'original3_102.png');
INSERT INTO `productos` VALUES (103, 7, 'Cacerola Azul con mango', '-', '3008', '3008- Cacerola azul 12cm con mango con tapa de vidrio.\r\n\n3009- Cacerola azul 14cm con mango con tapa de vidrio.\r\n\n3011- Cacerola azul 16cm con mango con tapa de vidrio.', 'Línea Tradicional - Aluminio Antiadherente.\r\n\n\r\n\n- Capa antiadherente interior que impide que se peguen los alimentos.\r\n\n- Anillos antiadherentes exteriores de fácil limpieza que brinda resistencia y durabilidad.\r\n\n- Con mango de baquelita remachado y protector para flama aislante de calor. \r\n\n-Tapa de vidrio para que observes lo que preparas. \r\n\n- Aluminio de alta pureza. No contamina los alimentos.\r\n\n- Posee un fondo termo difusor que distribuye el calor para una cocción rápida y uniforme.\r\n\n\r\n\n', 'original1_103.png', 'original2_103.png', 'original3_103.png');
INSERT INTO `productos` VALUES (104, 7, 'Cacerola Azun S/T', '-', '3014', '3014- Cacerola azul 12cm con mango sin tapa de vidrio.\r\n\n1285- Cacerola azul 14cm con mango sin tapa de vidrio.', 'Línea Tradicional - Aluminio Antiadherente.\r\n\n\r\n\n- Capa antiadherente interior que impide que se peguen los alimentos.\r\n\n- Anillos antiadherentes exteriores de fácil limpieza que brinda resistencia y durabilidad.\r\n\n- Con mango de baquelita remachado y protector para flama aislante de calor. \r\n\n- Aluminio de alta pureza. No contamina los alimentos.\r\n\n- Posee un fondo termo difusor que distribuye el calor para una cocción rápida y uniforme.\r\n\n\r\n\n', 'original1_104.png', 'original2_104.png', 'original3_104.png');
INSERT INTO `productos` VALUES (105, 7, 'Cacerola Antiadherente Azul con Asas', '-', '3010', '3010- Cacerola antiadherente azul 14cm con Asas y tapa de vidrio.\r\n\n3012- Cacerola antiadherente azul 16cm con Asas y tapa de vidrio.\r\n\n', 'Línea Tradicional - Aluminio Antiadherente.\r\n\n\r\n\n- Capa antiadherente interior que impide que se peguen los alimentos.\r\n\n- Anillos antiadherentes exteriores de fácil limpieza que brinda resistencia y durabilidad.\r\n\n- Con mango de baquelita remachado y protector para flama aislante de calor. \r\n\n-Tapa de vidrio para que observes lo que preparas. \r\n\n- Aluminio de alta pureza. No contamina los alimentos.\r\n\n- Posee un fondo termo difusor que distribuye el calor para una cocción rápida y uniforme.\r\n\n\r\n\n', 'original1_105.png', 'original2_105.png', 'original3_105.png');
INSERT INTO `productos` VALUES (106, 7, 'Sartén Antiadherente Violeta', '-', '3509', '3509- Sartén Antiadherente Violeta 18cm sin tapa de vidrio.\r\n\n3512- Sartén Antiadherente Violeta 20cm sin tapa de vidrio.\r\n\n3515- Sartén Antiadherente Violeta 22cm sin tapa de vidrio\r\n\n3518- Sartén Antiadherente Violeta 24cm sin tapa de vidrio.\r\n\n', 'Línea Colores - Aluminio Antiadherente.\r\n\n\r\n\n- Capa antiadherente interior que impide que se peguen los alimentos.\r\n\n- Anillos antiadherentes exteriores de fácil limpieza que brinda resistencia y durabilidad.\r\n\n- Mango remachado y  protector para flama aislante de calor. \r\n\n- Aluminio de alta pureza. No contamina los alimentos.\r\n\n- Posee un fondo termo difusor que distribuye el calor para una cocción rápida y uniforme.\r\n\n\r\n\n\r\n\n', 'original1_106.png', 'original2_106.png', 'original3_106.png');
INSERT INTO `productos` VALUES (107, 7, 'Sarten Antiadherente Naranja', '-', '3508', '3508- Sartén Antiadherente Violeta 18cm sin tapa de vidrio.\r\n\n3511- Sartén Antiadherente Violeta 20cm sin tapa de vidrio.\r\n\n3514- Sartén Antiadherente Violeta 22cm sin tapa de vidrio\r\n\n3517- Sartén Antiadherente Violeta 24cm sin tapa de vidrio.\r\n\n', 'Línea Colores - Aluminio Antiadherente.\r\n\n\r\n\n- Capa antiadherente interior que impide que se peguen los alimentos.\r\n\n- Anillos antiadherentes exteriores de fácil limpieza que brinda resistencia y durabilidad.\r\n\n- Mango remachado y protector para flama aislante de calor. \r\n\n- Aluminio de alta pureza. No contamina los alimentos.\r\n\n- Posee un fondo termo difusor que distribuye el calor para una cocción rápida y uniforme.\r\n\n\r\n\n\r\n\n\r\n\n', 'original1_107.png', 'original2_107.png', 'original3_107.png');
INSERT INTO `productos` VALUES (108, 7, 'Sartén Antiadherente Verde', '-', '3507', '3507- Sartén Antiadherente Verde 18cm sin tapa de vidrio.\r\n\n3510- Sartén Antiadherente Verde 20cm sin tapa de vidrio.\r\n\n3513- Sartén Antiadherente Verde 22cm sin tapa de vidrio.\r\n\n3516- Sartén Antiadherente Verde 24cm sin tapa de vidrio.\r\n\n', 'Línea Colores - Aluminio Antiadherente.\r\n\n\r\n\n- Capa antiadherente interior que impide que se peguen los alimentos.\r\n\n- Anillos antiadherentes exteriores de fácil limpieza que brinda resistencia y durabilidad.\r\n\n- Mango remachado y protector para flama aislante de calor. \r\n\n- Aluminio de alta pureza. No contamina los alimentos.\r\n\n- Posee un fondo termo difusor que distribuye el calor para una cocción rápida y uniforme.\r\n\n\r\n\n\r\n\n\r\n\n', 'original1_108.png', 'original2_108.png', 'original3_108.png');
INSERT INTO `productos` VALUES (124, 29, 'Molde Redondo', '-', '2360', '2360- Molde redondo para torta 1/4 Lbr.\r\n\n2361- Molde redondo para torta 1/2 Lbr.\r\n\n2362- Molde redondo para torta 1 Lbr.\r\n\n2363- Molde redondo para torta 2 Lbr.\r\n\n', 'Aluminio Natural - Blanco.\r\n\n\r\n\n- Aluminio de alta pureza. No contamina los alimentos.\r\n\n- Mejor Conducción.\r\n\n- Su capa interna sin pulir impide que se peguen los alimentos. \r\n\n- Aséptico y fácil de limpiar. ', 'original1_124.png', 'original2_124.png', 'original3_124.png');
INSERT INTO `productos` VALUES (125, 22, 'Lavaplatos Aluminio Sencillo', '-', '1329', '1329- Lavaplatos aluminio sencillo 50x35 – hueco 1 ½’’\r\n\n1325- Lavaplatos aluminio sencillo 50x35 – hueco 3 ½’’', 'Línea Económica - Aluminio. ', 'original1_125.png', 'original2_125.png', 'original3_125.png');
INSERT INTO `productos` VALUES (126, 22, 'Lavaplatos Aluminio Sencillo', '-', '1330', '130- Lavaplatos aluminio sencillo 60x40 – hueco 1 ½’’\r\n\n131- Lavaplatos aluminio sencillo 60x40 – hueco 3 ½’’', 'Línea Económica - Aluminio.', 'original1_126.png', 'original2_126.png', 'original3_126.png');
INSERT INTO `productos` VALUES (129, 21, 'Lavaplatos Acero Inox. con marco', '-', '1651', '1651- Lavaplatos acero inoxidable con marco 62x42 – hueco 1 ½´´ \r\n\n1650- Lavaplatos acero inoxidable con marco 62x42 – hueco 3 ½´´', 'Línea Clásica - Acero Inoxidable.', 'original1_129.png', 'original2_129.png', 'original3_129.png');
INSERT INTO `productos` VALUES (130, 21, 'Lavaplatos Acero Inox. Monocontrol ', '-', '1648', 'Lavaplatos acero inoxidable Monocontrol 50x40 – hueco 3 ½´´', 'Línea Clásica - Acero Inoxidable.\r\n\n', 'original1_130.png', 'original2_130.png', 'original3_130.png');
INSERT INTO `productos` VALUES (131, 21, 'Lavaplatos Acero Inox. Mezclador', '-', '1657', '1657- Lavaplatos de acero inoxidable Mezclador 50x40 – hueco 1\r\n\n ½´´\r\n\n1658- Lavaplatos de acero inoxidable Mezclador 50x40 – hueco 3\r\n\n ½´´\r\n\n', 'Línea Clásica - Acero Inoxidable.\r\n\n', 'original1_131.png', 'original2_131.png', 'original3_131.png');
INSERT INTO `productos` VALUES (132, 21, 'Lavaplatos Acero Inox. 50x35  ', '-', '1655', '1655- Lavaplatos acero inoxidable 50x35 – hueco 1 ½´´\r\n\n1656- Lavaplatos acero inoxidable 50x35 – hueco 3 ½´´', 'Línea Clásica - Acero Inoxidable.\r\n\n', 'original1_132.png', 'original2_132.png', 'original3_132.png');
INSERT INTO `productos` VALUES (133, 7, 'Cacerola Violeta ', '-', '3533', '3533- Cacerola antiadherente violeta 12cm con mango y tapa de vidrio. \r\n\n3536- Cacerola antiadherente violeta 14cm con mango y tapa de vidrio.\r\n\n	\r\n\n', 'Línea Colores - Aluminio Antiadherente.\r\n\n\r\n\n- Capa antiadherente interior que impide que se peguen los alimentos.\r\n\n- Anillos antiadherentes exteriores de fácil limpieza que brinda resistencia y durabilidad.\r\n\n- Mango remachado y protector para flama aislante de calor.\r\n\n- Tapa de vidrio para que observes lo que preparas.  \r\n\n- Aluminio de alta pureza. No contamina los alimentos.\r\n\n- Posee un fondo termo difusor que distribuye el calor para una cocción rápida y uniforme.\r\n\n', 'original1_133.png', 'original2_133.png', 'original3_133.png');
INSERT INTO `productos` VALUES (134, 7, 'Cacerola Antiadherente Naranja', '-', '3532', '3532- Cacerola antiadherente naranja 12cm con mango y tapa de vidrio.\r\n\n3535- Cacerola antiadherente naranja 14cm con mango y tapa de vidrio.\r\n\n', 'Línea Colores - Aluminio Antiadherente.\r\n\n\r\n\n- Capa antiadherente interior que impide que se peguen los alimentos.\r\n\n- Anillos antiadherentes exteriores de fácil limpieza que brinda resistencia y durabilidad.\r\n\n- Mango remachado y protector para flama aislante de calor.\r\n\n- Tapa de vidrio para que observes lo que preparas. \r\n\n- Aluminio de alta pureza. No contamina los alimentos.\r\n\n- Posee un fondo termo difusor que distribuye el calor para una cocción rápida y uniforme.\r\n\n\r\n\n', 'original1_134.png', 'original2_134.png', 'original3_134.png');
INSERT INTO `productos` VALUES (135, 7, 'Cacerola Antiadherente Verde ', '-', '3531', '3531- Cacerola antiadherente verde 12cm con mango y tapa de vidrio.\r\n\n3534- Cacerola antiadherente verde 14cm con mango y tapa de vidrio.\r\n\n', 'Línea Colores - Aluminio Antiadherente.\r\n\n\r\n\n- Capa antiadherente interior que impide que se peguen los alimentos.\r\n\n- Anillos antiadherentes exteriores de fácil limpieza que brinda resistencia y durabilidad.\r\n\n- Mango remachado y protector para flama aislante de calor.\r\n\n- Tapa de vidrio para que observes lo que preparas. \r\n\n- Aluminio de alta pureza. No contamina los alimentos.\r\n\n- Posee un fondo termo difusor que distribuye el calor para una cocción rápida y uniforme.\r\n\n\r\n\n', 'original1_135.png', 'original2_135.png', 'original3_135.png');
INSERT INTO `productos` VALUES (136, 5, 'Perol Antiadherente Naranja', '-', '3553', 'Perol antiadherente naranja 16cm con mango y tapa de vidrio.', 'Línea Colores - Aluminio Antiadherente.\r\n\n\r\n\n- Capa antiadherente interior que impide que se peguen los alimentos.\r\n\n- Anillos antiadherentes exteriores de fácil limpieza que brinda resistencia y durabilidad.\r\n\n - Mango remachado con protector para flama aislante de calor. \r\n\n- Tapa de vidrio para que observes lo que preparas. \r\n\n- Aluminio de alta pureza. No contamina los alimentos.\r\n\n- Posee un fondo termo difusor que distribuye el calor para una cocción rápida y uniforme.\r\n\n\r\n\n\r\n\n', 'original1_136.png', 'original2_136.png', 'original3_136.png');
INSERT INTO `productos` VALUES (137, 5, 'Perol Antiadherente Verde', '-', '3552', 'Perol antiadherente verde 16cm con mango y tapa de vidrio.', 'Línea Colores - Aluminio Antiadherente.\r\n\n\r\n\n-Capa antiadherente interior que impide que se peguen los alimentos.\r\n\n-Anillos antiadherentes exteriores de fácil limpieza que brinda resistencia y durabilidad.\r\n\n-Mango remachado con protector para flama aislante de calor. \r\n\n-Tapa de vidrio para que observes lo que preparas. \r\n\n-Aluminio de alta pureza. No contamina los alimentos.\r\n\n-Posee un fondo termo difusor que distribuye el calor para una cocción rápida y uniforme.\r\n\n\r\n\n\r\n\n', 'original1_137.png', 'original2_137.png', 'original3_137.png');
INSERT INTO `productos` VALUES (138, 5, 'Jarro Antiadherente Violeta ', '-', '3539', 'Jarro antiadherente violeta 12cm con mango y tapa de vidrio.', 'Línea Colores - Aluminio Antiadherente.\r\n\n\r\n\n-Capa antiadherente interior que impide que se peguen los alimentos.\r\n\n-Anillos antiadherentes exteriores de fácil limpieza que brinda resistencia y durabilidad.\r\n\n-Mango remachado con protector para flama aislante de calor. \r\n\n-Tapa de vidrio para que observes lo que preparas. \r\n\n-Aluminio de alta pureza. No contamina los alimentos.\r\n\n-Posee un fondo termo difusor que distribuye el calor para una cocción rápida y uniforme.\r\n\n\r\n\n\r\n\n', 'original1_138.png', 'original2_138.png', 'original3_138.png');
INSERT INTO `productos` VALUES (139, 5, 'Jarro Antiadherente Naranja', '-', '3537', 'Jarro antiadherente naranja 12cm con mango y tapa de vidrio.', 'Línea Colores - Aluminio Antiadherente.\r\n\n\r\n\n-Capa antiadherente interior que impide que se peguen los alimentos.\r\n\n-Anillos antiadherentes exteriores de fácil limpieza que brinda resistencia y durabilidad.\r\n\n-Mango remachado con protector para flama aislante de calor. \r\n\n-Tapa de vidrio para que observes lo que preparas. \r\n\n-Aluminio de alta pureza. No contamina los alimentos.\r\n\n-Posee un fondo termo difusor que distribuye el calor para una cocción rápida y uniforme.\r\n\n\r\n\n\r\n\n', 'original1_139.png', 'original2_139.png', 'original3_139.png');
INSERT INTO `productos` VALUES (140, 5, 'Jarro Antiadherente Verde', '-', '3537', 'Jarro antiadherente verde 12cm con mango y tapa de vidrio.', 'Línea Colores - Aluminio Antiadherente.\r\n\n\r\n\n-Capa antiadherente interior que impide que se peguen los alimentos.\r\n\n-Anillos antiadherentes exteriores de fácil limpieza que brinda resistencia y durabilidad.\r\n\n-Mango remachado con protector para flama aislante de calor. \r\n\n-Tapa de vidrio para que observes lo que preparas. \r\n\n-Aluminio de alta pureza. No contamina los alimentos.\r\n\n-Posee un fondo termo difusor que distribuye el calor para una cocción rápida y uniforme.\r\n\n\r\n\n\r\n\n', 'original1_140.png', 'original2_140.png', 'original3_140.png');
INSERT INTO `productos` VALUES (141, 5, 'Jarro Antiadherente Violeta S/T', '-', '3503', 'Jarro antiadherente violeta 12cm con mango y sin tapa de vidrio.', 'Línea Colores - Aluminio Antiadherente.\r\n\n\r\n\n -Capa antiadherente interior que impide que se peguen los alimentos.\r\n\n-Anillos antiadherentes exteriores de fácil limpieza que brinda resistencia y durabilidad.\r\n\n -Mango remachado con protector para flama aislante de calor. \r\n\n -Aluminio de alta pureza. No contamina los alimentos.\r\n\n-Posee un fondo termo difusor que distribuye el calor para una cocción rápida y uniforme.\r\n\n\r\n\n\r\n\n', 'original1_141.png', 'original2_141.png', 'original3_141.png');
INSERT INTO `productos` VALUES (142, 5, 'Jarro Antiadherente Naranja S/T', '-', '3502', 'Jarro antiadherente naranja 12cm con mango y sin tapa de vidrio.', 'Línea Colores - Aluminio Antiadherente.\r\n\n\r\n\n-Capa antiadherente interior que impide que se peguen los alimentos.\r\n\n-Anillos antiadherentes exteriores de fácil limpieza que brinda resistencia y durabilidad.\r\n\n-Mango remachado con protector para flama aislante de calor. \r\n\n-Aluminio de alta pureza. No contamina los alimentos.\r\n\n-Posee un fondo termo difusor que distribuye el calor para una cocción rápida y uniforme.\r\n\n\r\n\n\r\n\n\r\n\n', 'original1_142.png', 'original2_142.png', 'original3_142.png');
INSERT INTO `productos` VALUES (143, 5, 'Jarro Antiadherente Verde S/T', '-', '3501', 'Jarro antiadherente verde 12cm con mango y sin tapa de vidrio.', 'Línea Colores - Aluminio Antiadherente.\r\n\n\r\n\n-Capa antiadherente interior que impide que se peguen los alimentos.\r\n\n-Anillos antiadherentes exteriores de fácil limpieza que brinda resistencia y durabilidad.\r\n\n-Mango remachado con protector para flama aislante de calor. \r\n\n-Aluminio de alta pureza. No contamina los alimentos.\r\n\n-Posee un fondo termo difusor que distribuye el calor para una cocción rápida y uniforme.\r\n\n\r\n\n\r\n\n\r\n\n', 'original1_143.png', 'original2_143.png', 'original3_143.png');
INSERT INTO `productos` VALUES (144, 8, 'Paila Bordeada', '-', '2554', '2554- Paila bordeada 24cm sin tapa 2L\r\n\n2558- Paila bordeada 32cm sin tapa 6L\r\n\n2559- Paila bordeada 35cm sin tapa 8L\r\n\n2560- Paila bordeada 40cm sin tapa 11L\r\n\n2561- Paila bordeada 45cm sin tapa 16L\r\n\n2567- Paila bordeada 50cm sin tapa 23L\r\n\n\r\n\n\r\n\n\r\n\n', 'Aluminio Natural - Blanco.\r\n\n\r\n\n- Aluminio de alta pureza. No contamina los alimentos.\r\n\n- Mejor Conducción.\r\n\n- Con asas de aluminio.\r\n\n', 'original1_144.png', 'original2_144.png', 'original3_144.png');
INSERT INTO `productos` VALUES (145, 8, 'Cacerola Bordeada', '-', '2101', 'Cacerola bordeada 14cm sin tapa', 'Aluminio Natural - Blanco.\r\n\n\r\n\n- Aluminio de alta pureza. No contamina los alimentos.\r\n\n- Mejor Conducción.\r\n\n- Con asas de aluminio.\r\n\n\r\n\n', 'original1_145.png', 'original2_145.png', 'original3_145.png');
INSERT INTO `productos` VALUES (146, 33, 'Cantina Lechera ', '-', '2120', '2120- Cantina Lechera con tapa 1L\r\n\n2121- Cantina Lechera con tapa 2L\r\n\n2122- Cantina Lechera con tapa 3L\r\n\n2123- Cantina Lechera con tapa 5L\r\n\n2124- Cantina Lechera con tapa 7L\r\n\n2125- Cantina Lechera con tapa 10L\r\n\n2126- Cantina Lechera con tapa 15L\r\n\n', 'Aluminio Natural - Blanco.\r\n\n\r\n\n - Aluminio de alta pureza. No contamina los alimentos.\r\n\n- Mejor Conducción.\r\n\n - Con asas de aluminio.\r\n\n - Tapa de Aluminio.\r\n\n', 'original1_146.png', 'original2_146.png', 'original3_146.png');
INSERT INTO `productos` VALUES (147, 33, 'Balde', '-', '2051', '2051- Balde con aro 11L\r\n\n2052- Balde con aro 13L', 'Aluminio Natural - Blanco.\r\n\n\r\n\n-', 'original1_147.png', 'original2_147.png', 'original3_147.png');
INSERT INTO `productos` VALUES (148, 33, 'Hielera', '-', '2352', 'Hielera 16 3L', 'Aluminio Natural - Blanco.', 'original1_148.png', 'original2_148.png', 'original3_148.png');
INSERT INTO `productos` VALUES (149, 33, 'Bandeja Panda', '-', '2053', '2053- Bandeja panda 32x42\r\n\n2054- Bandeja panda 36x51\r\n\n', 'Aluminio Natural - Blanco.', 'original1_149.png', 'original2_149.png', 'original3_149.png');
INSERT INTO `productos` VALUES (150, 33, 'Charol', '-', '2201', '2201- Charol 40\r\n\n2202- Charol 50', 'Aluminio Natural - Blanco.', 'original1_150.png', 'original2_150.png', 'original3_150.png');
INSERT INTO `productos` VALUES (151, 33, 'Cernidor', '-', '2130', 'Cernidor #12', 'Aluminio Natural - Blanco.', 'original1_151.png', 'original2_151.png', 'original3_151.png');
INSERT INTO `productos` VALUES (152, 33, 'Cuchara Cocina ', '-', '2250', 'Cuchara de cocina Ref. 7.5', 'Aluminio Natural - Blanco.', 'original1_152.png', 'original2_152.png', 'original3_152.png');
INSERT INTO `productos` VALUES (153, 33, 'Cuchara Perforada', '-', '2251', 'Cuchara perforada ref. 7.5', 'Aluminio Natural - Blanco.', 'original1_153.png', 'original2_153.png', 'original3_153.png');
INSERT INTO `productos` VALUES (154, 33, 'Cucharon', '-', '2253', '2253- Cucharon #10\r\n\n2254- Cucharon #12', 'Aluminio Natural - Blanco.\r\n\n\r\n\n', 'original1_154.png', 'original2_154.png', 'original3_154.png');
INSERT INTO `productos` VALUES (155, 33, 'Espumadera', '-', '2300', 'Espumadera #10', 'Aluminio Natural - Blanco.', 'original1_155.png', 'original2_155.png', 'original3_155.png');
INSERT INTO `productos` VALUES (156, 33, 'Colador de Aceite', '-', '2133', 'Colador de aceite #10 1L', 'Aluminio Natural - Blanco.', 'original1_156.png', 'original2_156.png', 'original3_156.png');
INSERT INTO `productos` VALUES (157, 32, 'Pieza Suelta', '-', '1503', '1503- Cuchara Estándar \r\n\n1514- Tenedor Estándar \r\n\n1513- Cuchillo Estándar\r\n\n1554- Tenedor Grande\r\n\n1515- Cuchara Grande\r\n\n1550- Cuchillo Grande \r\n\n1555-Cuchara Consomé \r\n\n1548- Cuchillo Carne \r\n\n1504- Cuchara Helado\r\n\n1552- Cuchillo Pescado\r\n\n1551- Cuchara Salsera\r\n\n1553- Tenedores Postre\r\n\n1505- Mantequillera\r\n\n1502- Cuchara Postre ', 'Línea de Lujo ', 'original1_157.png', 'original2_157.png', 'original3_157.png');
INSERT INTO `productos` VALUES (158, 32, 'Cucharas Estandar', '-', '1508', '2 Cucharas estándar ', 'Skinpack - Línea de Lujo. ', 'original1_158.png', 'original2_158.png', 'original3_158.png');
INSERT INTO `productos` VALUES (159, 32, 'Tenedor Estandar', '-', '1560', '2 Tenedores estándar ', 'Skinpack - Línea de Lujo. \r\n\n', 'original1_159.png', 'original2_159.png', 'original3_159.png');
INSERT INTO `productos` VALUES (160, 32, 'Cuchillos Estándar', '-', '1521', '2 Cuchillos estándar', 'Skinpack - Línea de Lujo. \r\n\n', 'original1_160.png', 'original2_160.png', 'original3_160.png');
INSERT INTO `productos` VALUES (161, 32, 'Tenedor Grande', '-', '1506', '2 Tenedores grandes ', 'Skinpack - Línea de Lujo. \r\n\n', 'original1_161.png', 'original2_161.png', 'original3_161.png');
INSERT INTO `productos` VALUES (162, 32, 'Cuchara Grande', '-', '1559', '2 Cucharas grande', 'Skinpack - Línea de Lujo. \r\n\n', 'original1_162.png', 'original2_162.png', 'original3_162.png');
INSERT INTO `productos` VALUES (163, 32, 'Cuchillo Grande', '-', '1507', '2 Cuchillos grandes', 'Skinpack - Línea de Lujo. \r\n\n', 'original1_163.png', 'original2_163.png', 'original3_163.png');
INSERT INTO `productos` VALUES (164, 32, 'Cucharas Consomé', '-', '1518', '2 Cucharas consomé', 'Skinpack - Línea de Lujo. \r\n\n', 'original1_164.png', 'original2_164.png', 'original3_164.png');
INSERT INTO `productos` VALUES (165, 32, 'Cuchillo Carne', '-', '1516', '2 Cuchillos para carne', 'Skinpack - Línea de Lujo. \r\n\n', 'original1_165.png', 'original2_165.png', 'original3_165.png');
INSERT INTO `productos` VALUES (166, 32, 'Cucharas Helado', '-', '1540', '3 Cucharas para helado', 'Skinpack - Línea de Lujo. \r\n\n', 'original1_166.png', 'original2_166.png', 'original3_166.png');
INSERT INTO `productos` VALUES (167, 32, 'Cuchillos Pescado', '-', '1537', '2 Cuchillos para pescado', 'Skinpack - Línea de Lujo. \r\n\n', 'original1_167.png', 'original2_167.png', 'original3_167.png');
INSERT INTO `productos` VALUES (168, 32, 'Cucharas Salseras', '-', '1536', '2 Cucharas salseras', 'Skinpack - Línea de Lujo. \r\n\n', 'original1_168.png', 'original2_168.png', 'original3_168.png');
INSERT INTO `productos` VALUES (169, 32, 'Tenedor Postre', '-', '1561', '3 Tenedores para postre', 'Skinpack - Línea de Lujo. \r\n\n', 'original1_169.png', 'original2_169.png', 'original3_169.png');
INSERT INTO `productos` VALUES (170, 32, 'Mantequillera', '-', '1546', '3 Mantequilleras', 'Skinpack - Línea de Lujo. \r\n\n', 'original1_170.png', 'original2_170.png', 'original3_170.png');
INSERT INTO `productos` VALUES (171, 32, 'Cucharas Postre', '-', '1509', '3 Cucharas para postre', 'Skinpack - Línea de Lujo. \r\n\n', 'original1_171.png', 'original2_171.png', 'original3_171.png');
INSERT INTO `productos` VALUES (172, 31, 'Pieza Suelta ', '-', '1510', '1510- Cuchara sopa caribe \r\n\n1519- Tenedor \r\n\n1517- Cuchillo mesa\r\n\n1511- Cuchara dulce\r\n\n1512- Cuchara tinto ', 'Línea ', 'original1_172.png', 'original2_172.png', 'original3_172.png');
INSERT INTO `productos` VALUES (173, 31, 'Cuchara Dulce', '-', '1526', '6 Cucharas para dulce ', 'Skinpack - Línea Clásica.  \r\n\n', 'original1_173.png', 'original2_173.png', 'original3_173.png');
INSERT INTO `productos` VALUES (174, 31, 'Cuchara Tinto', '-', '1527', '6 Cucharas para tinto', 'Skinpack - Línea Clásica.  \r\n\n', 'original1_174.png', 'original2_174.png', 'original3_174.png');
INSERT INTO `productos` VALUES (175, 31, 'Cuchara Sopa', '-', '1522', '3 Cucharas para sopa ', 'Skinpack - Línea Clásica.  \r\n\n', 'original1_175.png', 'original2_175.png', 'original3_175.png');
INSERT INTO `productos` VALUES (176, 31, 'Tenedores', '-', '1523', '3 Tenedores', 'Skinpack - Línea Clásica.  \r\n\n', 'original1_176.png', 'original2_176.png', 'original3_176.png');
INSERT INTO `productos` VALUES (177, 31, 'Cuchillo', '-', '1525', '3 Cuchillos ', 'Skinpack - Línea Clásica.  \r\n\n', 'original1_177.png', 'original2_177.png', 'original3_177.png');
INSERT INTO `productos` VALUES (178, 31, 'Arbol Cubiertos 24 Piezas', '-', '1501', 'Árbol cubiertos por 24 piezas', 'Skinpack - Línea Clásica.  \r\n\n', 'original1_178.png', 'original2_178.png', 'original3_178.png');
INSERT INTO `productos` VALUES (179, 31, 'Estuche Cubiertos 30 Piezas', '-', '1500', 'Estuche de cubiertos por 30 piezas', 'Skinpack - Línea Clásica.  \r\n\n', 'original1_179.png', 'original2_179.png', 'original3_179.png');
INSERT INTO `productos` VALUES (180, 30, 'Pieza Suelta', '-', '1300', '1300- Cuchara sopa \r\n\n1301- Tenedor\r\n\n1307- Cuchillo mesa\r\n\n1302- Cuchara dulce\r\n\n1303- Cuchara tinto', 'Skinpack - Línea Económica.\r\n\n  \r\n\n- Cubiertos en Acero Inoxidable.\r\n\n- Decorado atractivo en el mango.', 'original1_180.png', 'original2_180.png', 'original3_180.png');
INSERT INTO `productos` VALUES (181, 30, 'Cuchara, Tenedor y Cuchillo', '-', '1345', '1345- 2 cucharas, 2 tenedores y 2 cuchillos\r\n\n', 'Skinpack - Línea Clásica.  \r\n\n\r\n\n- Cubiertos en Acero Inoxidable.\r\n\n- Decorado atractivo en el mango. ', 'original1_181.png', 'original2_181.png', 'original3_181.png');
INSERT INTO `productos` VALUES (182, 30, 'Cuchara, Tenedor y Cuchillo', '-', '1488', '1488- un cuchara, un tendedor y una cuchara', 'Skinpack - Línea Clásica. \r\n\n\r\n\n- Cubiertos en Acero Inoxidable.\r\n\n- Decorado atractivo en el mango. \r\n\n', 'original1_182.png', 'original2_182.png', 'original3_182.png');
INSERT INTO `productos` VALUES (183, 30, 'Cuchara Dulce', '-', '1491', '6 Cucharas para dulce', 'Skinpack - Línea Clásica. \r\n\n\r\n\n- Cubiertos en Acero Inoxidable.\r\n\n- Decorado atractivo en el mango. \r\n\n', 'original1_183.png', 'original2_183.png', 'original3_183.png');
INSERT INTO `productos` VALUES (184, 30, 'Cuchara Tinto', '-', '1493', '6 Cucharas para tinto ', 'Skinpack - Línea Clásica. \r\n\n\r\n\n- Cubiertos en Acero Inoxidable.\r\n\n- Decorado atractivo en el mango. \r\n\n', 'original1_184.png', 'original2_184.png', 'original3_184.png');
INSERT INTO `productos` VALUES (185, 30, 'Cuchara Sopa', '-', '1494', '3 Cucharas de sopa ', 'Skinpack - Línea Clásica. \r\n\n\r\n\n- Cubiertos en Acero Inoxidable.\r\n\n- Decorado atractivo en el mango. \r\n\n', 'original1_185.png', 'original2_185.png', 'original3_185.png');
INSERT INTO `productos` VALUES (186, 30, 'Tenedor', '-', '1496', '3 Tenedores ', 'Skinpack - Línea Clásica. \r\n\n\r\n\n- Cubiertos en Acero Inoxidable.\r\n\n- Decorado atractivo en el mango. \r\n\n', 'original1_186.png', 'original2_186.png', 'original3_186.png');
INSERT INTO `productos` VALUES (187, 30, 'Cuchillo', '-', '1498', '3 Cuchillos ', 'Skinpack - Línea Clásica. \r\n\n\r\n\n- Cubiertos en Acero Inoxidable.\r\n\n- Decorado atractivo en el mango. \r\n\n', 'original1_187.png', 'original2_187.png', 'original3_187.png');
INSERT INTO `productos` VALUES (188, 5, 'Bateria Antiadherente 5 Piezas ', '-', '3035', 'Bateria antiadherente de 5 piezas\r\n\n\r\n\n- Olla antiadherente 20cm con asas de baquelita y tapa de vidrio.\r\n\n- Perol antiadherente 16cm con mango y tapa de vidrio.\r\n\n- Sartén antiadherente 20cm con mango y sin tapa de vidrio.', 'Línea Tradicional - Aluminio Antiadherente.\r\n\n\r\n\n- Capa antiadherente interior que impide que se peguen los alimentos.\r\n\n- Anillos antiadherentes exteriores de fácil limpieza que brinda resistencia y durabilidad.\r\n\n- Con asas de baquelita remachadas con protector para flama aislante de calor. \r\n\n- Tapas de vidrio para que observes lo que preparas. \r\n\n- Aluminio de alta pureza. No contamina los alimentos.\r\n\n- Posee un fondo termo difusor que distribuye el calor para una cocción rápida y uniforme. ', 'original1_188.png', 'original2_188.png', 'original3_188.png');
INSERT INTO `productos` VALUES (189, 5, 'Bateria Antiadherente 7 Piezas ', '-', '3036', 'Bateria antiadherente 7 Piezas \r\n\n\r\n\n- Olla antiadherente 20cm con asas de baquelita y tapa de vidrio.\r\n\n- Perol antiadherente 16cm con mango y tapa de vidrio.\r\n\n- Sartén antiadherente 20cm con mango y  sin tapa de vidrio.\r\n\n- Jarro antiadherente 12cm con tapa de vidrio.\r\n\n\r\n\n', 'Línea Tradicional - Aluminio Antiadherente.\r\n\n\r\n\n- Capa antiadherente interior que impide que se peguen los alimentos.\r\n\n- Anillos antiadherentes exteriores de fácil limpieza que brinda resistencia y durabilidad.\r\n\n- Con asas de baquelita remachadas con protector para flama aislante de calor. \r\n\n- Tapas de vidrio para que observes lo que preparas. \r\n\n- Aluminio de alta pureza. No contamina los alimentos.\r\n\n- Posee un fondo termo difusor que distribuye el calor para una cocción rápida y uniforme', 'original1_189.png', 'original2_189.png', 'original3_189.png');
INSERT INTO `productos` VALUES (190, 23, 'Lavaplatos Acero Inox. con Escurridor', '-', '1668', '1668- Lavaplatos acero Inox. con escurridor derecho y mezclador 80x50.\r\n\n1669- Lavaplatos acero Inox. con escurridor izquierdo y mezclador 80x50.', 'Línea Selecta - Acero Inoxidable.', 'original1_190.png', 'original2_190.png', 'original3_190.png');
INSERT INTO `productos` VALUES (191, 23, 'Lavaplatos Acero Inox. doble Poceta ', '-', '1702', '1702- Lavaplatos Acero Inox. doble poceta con escurridor derecho y mezclador 120x50.\r\n\n1703- Lavaplatos Acero Inox. doble poceta con escurridor izquierdo y mezclador 120x50.', 'Línea Selecta - Acero Inoxidable.', 'original1_191.png', 'original2_191.png', 'original3_191.png');
INSERT INTO `productos` VALUES (192, 23, 'Lvaplatos Submontar Doble Poceta', '-', '1707', 'Lavaplatos submontar doble poceta 40x36', 'Línea Selecta - Acero Inoxidable.', 'original1_192.png', 'original2_192.png', 'original3_192.png');
INSERT INTO `productos` VALUES (193, 32, 'Estuche 24 Piezas', '-', '1534', 'Estuche de 24 piezas', 'Línea de Lujo.\r\n\n\r\n\n', 'original1_193.png', 'original2_193.png', 'original3_193.png');
INSERT INTO `productos` VALUES (194, 32, 'Estuche Lujo 32 Piezas', '-', '1538', 'Estuche de lujo 32 piezas ', 'Línea de Lujo.', 'original1_194.png', 'original2_194.png', 'original3_194.png');
INSERT INTO `productos` VALUES (195, 32, 'Estuche Madera Lujo', '-', '1547', 'Estuche de madera de lujo por 40 piezas ', 'Línea de Lujo.', 'original1_195.png', 'original2_195.png', 'original3_195.png');
INSERT INTO `productos` VALUES (198, 30, 'Arbol Cubiertos ', '-', '1309', 'Arbol de cubiertos por 24 piezas', 'Línea Económica.\r\n\n\r\n\n- Cubiertos en Acero Inoxidable.\r\n\n- Decorado atractivo en el mango.\r\n\n\r\n\n', 'original1_198.png', 'original2_198.png', 'original3_198.png');
INSERT INTO `productos` VALUES (199, 30, 'Estuche Cubiertos', '-', '1306', 'Estuche de cubiertos por 30 piezas', 'Línea Económica.\r\n\n\r\n\n- Cubiertos en Acero Inoxidable.\r\n\n- Decorado atractivo en el mango.', 'original1_199.png', 'original2_199.png', 'original3_199.png');
INSERT INTO `productos` VALUES (200, 23, 'Lavaplatos Acero Inox. Monocontrol y escurridor', '-', '1654', '1654- Lavaplatos Acero Inox. con escurridor derecho y monocontrol 100x50.\r\n\n1662- Lavaplatos Acero Inox. con escurridor izquierdo y monocontrol 100x50.', 'Línea Selecta - Acero Inoxidable.', 'original1_200.png', 'original2_200.png', 'original3_200.png');
INSERT INTO `productos` VALUES (201, 34, 'Bandeja Honda Inox', '-', '1003', '1003- Bandeja honda inox 29.5x58cm\r\n\n1007- Bandeja honda inox 38x58cm\r\n\n\r\n\n', 'Acero Inoxidable.\r\n\n\r\n\n- Resiste la oxidación .\r\n\n- Fácil de limpiar. \r\n\n- No retiene olores ni sabores. Higiene máxima.', 'original1_201.gif', 'original2_201.gif', 'original3_201.gif');

-- --------------------------------------------------------

-- 
-- Estructura de tabla para la tabla `recetas`
-- 
-- Creación: 13-09-2013 a las 17:00:39
-- 

DROP TABLE IF EXISTS `recetas`;
CREATE TABLE IF NOT EXISTS `recetas` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `titulo` varchar(20) CHARACTER SET latin1 DEFAULT NULL,
  `texto_descriptivo` text CHARACTER SET latin1,
  `imagen` varchar(255) CHARACTER SET latin1 DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

-- 
-- Volcar la base de datos para la tabla `recetas`
-- 

INSERT INTO `recetas` VALUES (1, 'Recetas!!!', 'Nuevos sabores para tu mesa', 'original_1.jpg');

-- --------------------------------------------------------

-- 
-- Estructura de tabla para la tabla `recetas_internas`
-- 
-- Creación: 13-09-2013 a las 17:00:39
-- 

DROP TABLE IF EXISTS `recetas_internas`;
CREATE TABLE IF NOT EXISTS `recetas_internas` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `titulo` varchar(255) CHARACTER SET latin1 DEFAULT NULL,
  `subtitulo` varchar(255) CHARACTER SET latin1 DEFAULT NULL,
  `titulo_inferior` varchar(255) CHARACTER SET latin1 DEFAULT NULL,
  `imagen` varchar(255) CHARACTER SET latin1 DEFAULT NULL,
  `ingredientes` text CHARACTER SET latin1,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8 AUTO_INCREMENT=12 ;

-- 
-- Volcar la base de datos para la tabla `recetas_internas`
-- 

INSERT INTO `recetas_internas` VALUES (8, 'Rollito Napolitano ', 'Desayuno', 'Preparación:', 'original_8.jpg', '- 2 Huevos\r\n\n- 1 Cdta de Salsa de Soya\r\n\n- 1 Cda de Oregano Fresco\r\n\n- 1 Cda de Albahaca Fresca\r\n\n- 1 Tomate en rodajas\r\n\n- Queso Mozarella Rallado\r\n\n- Queso Parmesano\r\n\n- Mantequilla\r\n\n- Sal y Pimienta al gusto\r\n\n\r\n\n');
INSERT INTO `recetas_internas` VALUES (9, 'Rollo Esparrago Suprema', 'Almuerzo para 4 personas.', 'Preparación:', 'original_9.jpg', '- 4 Pechugas fileteadas\r\n\n- 200 gr Esparragos\r\n\n- 2 Und. Zanahoria\r\n\n- 20 gr Albahaca Genovesa\r\n\n- 8 Tajadas de Jamón\r\n\n-  50 gr Queso Mozzarella \r\n\n- 15 gr de Queso Parmesano\r\n\n- Sal y Pimienta al gusto\r\n\n');
INSERT INTO `recetas_internas` VALUES (10, 'Pasta Palmitos Cherry', 'Cena para 4 personas.', 'Preparación:', 'original_10.jpg', '- 400 gr Pasta ( Fucilli )\r\n\n- 8 Und. Bastones  de Palmito de Cangrejo.\r\n\n- 140 gr Tomate Cherry Baby\r\n\n- 100 gr Tomate Cherry\r\n\n- 1 Und. Cebolla Cabezona\r\n\n- 50 gr Cebollina\r\n\n-  1 Und. Pimentón\r\n\n- 3 Cdas. Orégano Fresco.\r\n\n- 3Cdas. Albahaca Fresca.\r\n\n- 4 Cdas. Pasta de Tomate\r\n\n- 4 tajadas de jamón\r\n\n- Aceite de oliva\r\n\n- Sal y Pimienta al gusto\r\n\n');
INSERT INTO `recetas_internas` VALUES (11, 'Torta  - Galleta y Frutos Rojos.', 'Postre para 4 personas.', 'Preparación:', 'original_11.jpg', '- 1/2 taza de Harina de Trigo\r\n\n- 1 taza de galleta con chips de chocolate triturada\r\n\n- 2/3 taza de Aceite Vegetal\r\n\n- 3 Huevos\r\n\n- 1/2 taza de Azúcar\r\n\n-  1 Cdita de Canela Pulverizada\r\n\n- 1 Cdita de Polvo de Hornear\r\n\n- 1 Cdita de Bicarbonato.\r\n\n- 1/2 taza de Azúcar\r\n\n- 250 gr de Fresa\r\n\n- 70 gr de Mora\r\n\n');

-- --------------------------------------------------------

-- 
-- Estructura de tabla para la tabla `recetas_pasos`
-- 
-- Creación: 13-09-2013 a las 17:00:39
-- 

DROP TABLE IF EXISTS `recetas_pasos`;
CREATE TABLE IF NOT EXISTS `recetas_pasos` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `recetas_internas_id` int(10) unsigned NOT NULL,
  `descripcion` text CHARACTER SET latin1,
  PRIMARY KEY (`id`),
  KEY `recetas_pasos_FKIndex1` (`recetas_internas_id`)
) ENGINE=InnoDB AUTO_INCREMENT=50 DEFAULT CHARSET=utf8 AUTO_INCREMENT=50 ;

-- 
-- Volcar la base de datos para la tabla `recetas_pasos`
-- 

INSERT INTO `recetas_pasos` VALUES (1, 1, 'Lorem ipsum ligula eget dolor. sdfsd werdfg dfgsdf   ');
INSERT INTO `recetas_pasos` VALUES (2, 1, 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor.');
INSERT INTO `recetas_pasos` VALUES (3, 1, 'Lorem ipsum ligula eget dolor. sdfsd werdfg dfgsdf');
INSERT INTO `recetas_pasos` VALUES (4, 2, 'lorem ipsun dolor sit amet');
INSERT INTO `recetas_pasos` VALUES (5, 2, 'Prueba texto de prueba');
INSERT INTO `recetas_pasos` VALUES (6, 2, 'otro item de prueba');
INSERT INTO `recetas_pasos` VALUES (7, 2, 'lorem ipsun dolor sit amet');
INSERT INTO `recetas_pasos` VALUES (8, 2, 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor.');
INSERT INTO `recetas_pasos` VALUES (9, 2, 'Prueba texto de prueba');
INSERT INTO `recetas_pasos` VALUES (10, 3, 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor.');
INSERT INTO `recetas_pasos` VALUES (11, 3, 'Lorem ipsum ligula eget dolor. sdfsd werdfg dfgsdf');
INSERT INTO `recetas_pasos` VALUES (12, 3, 'Prueba texto de prueba');
INSERT INTO `recetas_pasos` VALUES (13, 3, 'Prueba texto de prueba');
INSERT INTO `recetas_pasos` VALUES (14, 3, 'lorem ipsun dolor sit amet');
INSERT INTO `recetas_pasos` VALUES (15, 3, 'otro item de prueba');
INSERT INTO `recetas_pasos` VALUES (16, 3, 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor.');
INSERT INTO `recetas_pasos` VALUES (17, 3, 'Prueba texto de prueba');
INSERT INTO `recetas_pasos` VALUES (18, 3, 'lorem ipsun dolor sit amet');
INSERT INTO `recetas_pasos` VALUES (19, 3, 'otro item de prueba');
INSERT INTO `recetas_pasos` VALUES (20, 4, 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor.');
INSERT INTO `recetas_pasos` VALUES (21, 4, 'Prueba texto de prueba');
INSERT INTO `recetas_pasos` VALUES (22, 4, 'otro item de prueba');
INSERT INTO `recetas_pasos` VALUES (23, 4, 'lorem ipsun dolor sit amet');
INSERT INTO `recetas_pasos` VALUES (24, 4, 'lorem ipsun dolor sit amet');
INSERT INTO `recetas_pasos` VALUES (25, 1, 'Hervir la leche');
INSERT INTO `recetas_pasos` VALUES (26, 5, 'Hervir la leche');
INSERT INTO `recetas_pasos` VALUES (27, 5, 'ocinar los huevos');
INSERT INTO `recetas_pasos` VALUES (28, 1, 'luis edgar mejia posada');
INSERT INTO `recetas_pasos` VALUES (31, 6, 'Step 1');
INSERT INTO `recetas_pasos` VALUES (32, 1, 'Lorem ipsum dolor sdfd sdf sdf sdf sdf sdf sdf sdf sdf sdf sdf sdf sdf sdf sdf sdf sdf sdf sdf sdf sdf sdf sdf sdf sdf sdf sdf sdf sdf sdf sdf sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor.');
INSERT INTO `recetas_pasos` VALUES (33, 8, 'Mezclar en un bowl los huevos, salsa de soya, orégano, sal y pimienta al gusto. ');
INSERT INTO `recetas_pasos` VALUES (36, 8, 'En un sartén antiadherente derretir la mantequilla, verter la mezcla anterior y realizar una tortilla. ');
INSERT INTO `recetas_pasos` VALUES (37, 8, 'Cuando esté dorada, voltearla y adicionar en el centro el tomate en rodajas, queso Mozarella y albahaca fresca.');
INSERT INTO `recetas_pasos` VALUES (38, 8, ' Para finalizar puedes decorar con queso parmesano.');
INSERT INTO `recetas_pasos` VALUES (39, 9, 'Cortar la zanahoria en bastones y ponerlos en una olla junto con los espárragos, una pizca de sal y azúcar. Calentar apenas hasta que salgan burbujas. Cortar cocción pasando por agua fría de la llave. Reservar. ');
INSERT INTO `recetas_pasos` VALUES (40, 9, 'Cortar el queso mozzarella en bastones, reservar.');
INSERT INTO `recetas_pasos` VALUES (41, 9, 'Salpimentar pechugas previamente fileteadas. Abrir la pechuga, en uno de sus extremos adicione una rodaja de jamón, tres hojas de albahaca, un bastón de queso, un esparrago, dos bastones de zanahoria adicione sal y pimienta al gusto y enrolle. ');
INSERT INTO `recetas_pasos` VALUES (42, 9, 'Al finalizar atraviese la pieza con un pincho. Realice la misma acción con las demás pechugas.');
INSERT INTO `recetas_pasos` VALUES (43, 9, 'Para que le quede dorado, esparza huevo batido con un pincel en el exterior de la pechuga. ');
INSERT INTO `recetas_pasos` VALUES (44, 9, 'Enharine el molde y lleve las pechugas al horno por 25 minutos a 180°c. Verifique la temperatura interna del rollo antes de sacarlo del horno, debe ser 70°.');
INSERT INTO `recetas_pasos` VALUES (45, 10, 'Salsa Palmitos Cherry: En una olla sofría en aceite de oliva la cebolla cabezona finamente picada. Cuando la cebolla este transparente agregue el jamón picado en cuadritos y la cebollina. Agregue el tomate cherry, pimentón picado en cuadritos y el cherry baby, déjelo a fuego lento revolviendo ocasionalmente. Licúe los tomates sin semillas, albahaca, orégano, pasta de tomate, aceite de oliva y un poquito de agua. Incorpore esta salsa en la olla y deje cocinar a fuego lento. Por último agregue los palmitos en cubitos. Agregue sal y pimienta al gusto.');
INSERT INTO `recetas_pasos` VALUES (46, 10, 'Pasta: En una olla calentar agua ( 1 Lt de agua por cada 100 gr de pasta ) con sal y aceite. Cuando el agua hierva agregue la pasta. Durante la cocción revuelva ocasionalmente y cuando llegue al punto deseado retire del fuego y corte cocción con agua de la llave. Escurra y sirva caliente con la salsa, agregue queso parmesano y decore con cebollina finamente picada.');
INSERT INTO `recetas_pasos` VALUES (47, 11, 'Mezclar harina, galleta previamente triturada, aceite, huevos, azúcar, canela, polvo de hornear, y bicarbonato hasta que la mezcla quede uniforme. ');
INSERT INTO `recetas_pasos` VALUES (48, 11, 'Enmantequillar y enharinar el molde y verter la mezcla');
INSERT INTO `recetas_pasos` VALUES (49, 11, 'Llevar al horno 45 min a 180°C. Verificar la consistencia clavando un cuchillo, debe salir limpio.');

-- --------------------------------------------------------

-- 
-- Estructura de tabla para la tabla `sedes`
-- 
-- Creación: 13-09-2013 a las 17:00:39
-- 

DROP TABLE IF EXISTS `sedes`;
CREATE TABLE IF NOT EXISTS `sedes` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(50) CHARACTER SET latin1 NOT NULL,
  `logo` varchar(50) CHARACTER SET latin1 NOT NULL,
  `link` varchar(50) CHARACTER SET latin1 NOT NULL,
  `id_ubicacion` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=14 ;

-- 
-- Volcar la base de datos para la tabla `sedes`
-- 

INSERT INTO `sedes` VALUES (1, 'Exito', 'original_1.png', 'http://www.exito.com/product/plptechnology.jsp?cid', 1);
INSERT INTO `sedes` VALUES (2, 'Jumbo', 'original_2.gif', 'http://www.tiendasjumbo.co/', 1);
INSERT INTO `sedes` VALUES (3, 'Metro', 'original_3.png', 'http://www.tiendasmetro.co/', 1);
INSERT INTO `sedes` VALUES (4, 'La 14', 'original_4.png', 'http://www.la14.com/Tiendala14/Search_2.aspx?Catal', 1);
INSERT INTO `sedes` VALUES (5, 'cafam', 'img5.png', '', 1);
INSERT INTO `sedes` VALUES (8, 'Olimpica ', 'original_8.png', 'http://www.olimpica.com.co/', 1);
INSERT INTO `sedes` VALUES (10, 'Colsubsidio ', 'original_10.png', 'http://portal-195922529.us-east-1.elb.amazonaws.co', 0);
INSERT INTO `sedes` VALUES (11, 'Makro', 'original_11.png', 'http://www.makro.com.co/site/makro/pt/home/home.as', 0);
INSERT INTO `sedes` VALUES (13, 'Comfandi', 'original_13.png', 'http://www.comfandi.com.co/', 0);

-- --------------------------------------------------------

-- 
-- Estructura de tabla para la tabla `subcategorias`
-- 
-- Creación: 13-09-2013 a las 17:00:39
-- 

DROP TABLE IF EXISTS `subcategorias`;
CREATE TABLE IF NOT EXISTS `subcategorias` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `categorias_id` int(10) unsigned NOT NULL,
  `titulo` varchar(255) CHARACTER SET latin1 DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `subcategorias_FKIndex1` (`categorias_id`)
) ENGINE=InnoDB AUTO_INCREMENT=35 DEFAULT CHARSET=utf8 AUTO_INCREMENT=35 ;

-- 
-- Volcar la base de datos para la tabla `subcategorias`
-- 

INSERT INTO `subcategorias` VALUES (1, 1, 'Peltre');
INSERT INTO `subcategorias` VALUES (3, 3, 'Alum. Fundido');
INSERT INTO `subcategorias` VALUES (5, 1, 'Antiadherente');
INSERT INTO `subcategorias` VALUES (6, 1, 'Alum. Natural');
INSERT INTO `subcategorias` VALUES (7, 3, 'Antiadherente');
INSERT INTO `subcategorias` VALUES (8, 3, 'Alum. Natural');
INSERT INTO `subcategorias` VALUES (10, 9, 'lorem ipsum dolor ');
INSERT INTO `subcategorias` VALUES (11, 9, 'lorem ipsum dolor ');
INSERT INTO `subcategorias` VALUES (12, 11, 'SubPrueba1');
INSERT INTO `subcategorias` VALUES (13, 11, 'SúnPrueba2');
INSERT INTO `subcategorias` VALUES (14, 10, 'SubPrueba1');
INSERT INTO `subcategorias` VALUES (15, 10, 'SubPrueba2');
INSERT INTO `subcategorias` VALUES (16, 10, 'SubPrueba3');
INSERT INTO `subcategorias` VALUES (17, 12, 'jkjkl');
INSERT INTO `subcategorias` VALUES (18, 12, 'hjbimoijh');
INSERT INTO `subcategorias` VALUES (19, 13, 'Cat1');
INSERT INTO `subcategorias` VALUES (20, 13, 'Cat2');
INSERT INTO `subcategorias` VALUES (21, 14, 'Linea Clásica');
INSERT INTO `subcategorias` VALUES (22, 14, 'Linea Económica');
INSERT INTO `subcategorias` VALUES (23, 14, 'Linea Selecta');
INSERT INTO `subcategorias` VALUES (27, 4, 'Acero Inoxidable');
INSERT INTO `subcategorias` VALUES (28, 4, 'Antiadherente');
INSERT INTO `subcategorias` VALUES (29, 4, 'Alum. Natural');
INSERT INTO `subcategorias` VALUES (30, 8, 'Linea Calima');
INSERT INTO `subcategorias` VALUES (31, 8, 'Linea Caribe');
INSERT INTO `subcategorias` VALUES (32, 8, 'Linea Tayrona ');
INSERT INTO `subcategorias` VALUES (33, 17, 'Alum. Natural ');
INSERT INTO `subcategorias` VALUES (34, 17, 'Acero Inoxidable');

-- --------------------------------------------------------

-- 
-- Estructura de tabla para la tabla `ubicacion`
-- 
-- Creación: 13-09-2013 a las 17:00:39
-- 

DROP TABLE IF EXISTS `ubicacion`;
CREATE TABLE IF NOT EXISTS `ubicacion` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `titulo` varchar(20) CHARACTER SET latin1 DEFAULT NULL,
  `direccion` varchar(255) CHARACTER SET latin1 DEFAULT NULL,
  `texto` text CHARACTER SET latin1,
  `coordenadas` varchar(255) CHARACTER SET latin1 DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=133 DEFAULT CHARSET=utf8 AUTO_INCREMENT=133 ;

-- 
-- Volcar la base de datos para la tabla `ubicacion`
-- 

INSERT INTO `ubicacion` VALUES (122, 'CALI', 'Colombia', 'Estamos en:', '3.448841469988605,-76.53057954266842');
INSERT INTO `ubicacion` VALUES (126, 'MEDELLIN ', 'Colombia', 'Estamos en: \r\n\n', '6.3202663,-75.5652748');
INSERT INTO `ubicacion` VALUES (127, 'BOGOTÁ', 'Colombia ', 'Estamos en: ', '4.637149,-74.1132236');
INSERT INTO `ubicacion` VALUES (128, 'BARRANQUILLA ', 'Colombia', 'Estamos en: ', '10.9361349,-74.7751444');
INSERT INTO `ubicacion` VALUES (129, 'BUCARAMANGA ', 'Colombia', 'Estamos en: ', '7.1263351,-73.1132885');
INSERT INTO `ubicacion` VALUES (130, 'VILLAVICENCIO', 'Colombia ', 'Estamos en: ', '4.1395217,-73.6354689');
INSERT INTO `ubicacion` VALUES (131, 'CARTAGENA', 'Colombia', 'Estamos en:', '10.4120016,-75.5127162');
INSERT INTO `ubicacion` VALUES (132, 'PASTO', 'Colombia', 'Estamos en:', '1.2070542,-77.2824076');

SET FOREIGN_KEY_CHECKS=1;

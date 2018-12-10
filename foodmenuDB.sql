
create database foodmenu;

USE foodmenu;


CREATE TABLE `menu` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `fName` varchar(255) NOT NULL,
  `info` varchar (255) NOT NULL,
  `price` VARCHAR (255) NOT NULL,
  PRIMARY KEY (`id`)
);

INSERT INTO `menu` (`id`, `fName`, `info`, `price`) VALUES
(1, 'Soy Nuts', 'Soy nuts are made from soybeans soaked in water, drained, and then baked or roasted. They can be used in place of nuts and are high in protein and dietary fiber.', '1'),
(2, 'Almonds', 'The almond is a species of tree native to Mediterranean climate regions of the Middle East, from Syria and Turkey to India and Pakistan.', '75c'),
(3, 'Soy Nuts', 'Soy nuts are made from soybeans soaked in water, drained, and then baked or roasted. They can be used in place of nuts and are high in protein and dietary fiber.', '60c'),
(4, 'Cashews', 'The cashew tree is a tropical evergreen tree that produces the cashew seed (nut) and the cashew apple. It can grow as high as 14 m (46 ft), but the dwarf cashew, growing up to 6 m (20 ft), has proved more profitable, with earlier maturity and higher yield', '50c'),
(5, 'Chest Nuts', 'The chestnuts are a group of eight or nine species of deciduous trees and shrubs in the genus Castanea, in the beech family Fagaceae. They are native to temperate regions of the Northern Hemisphere.', '45C'),
(6, 'Blueberries', 'Are harvested from our local farmlands to ensure the freshest quality is maintained', '95c'),
(7, 'Dried Bananas', 'Are harvested and are imported from brazil and are dried and packaged the next day to ensure maximum freshness', '85c'),
(8, 'Dried Diced Apples', 'Are carefully selected from our orchards in Dalkey, where they are dried and diced for maximum taste', '1.10c'),
(9, 'Dried Strawberries', 'Are manually picked up and examined by our workers, who make sure they are of finest quality', '1.50c');
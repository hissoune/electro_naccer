drop database Electro_naccer;
create database Electro_naccer;
use Electro_naccer;





create table User (
    UserId int PRIMARY KEY ,
   
    Passwords varchar(20) not null
   
);
describe User;
 INSERT INTO User(UserId, Passwords)
 VALUES (213221,"gggg");

 CREATE TABLE Category (
    Category_Id INT PRIMARY key,
    Category_nam varchar(20)
 );
 insert into Category 
 values (1,"adruino"),
  (2,"acsessoire et cablse"),
  (3,"phones");
 
 create table products (
    Product_Id int PRIMARY key,
    Product_name varchar(20),
    Product_img varchar(50),
    prix_unitair float,
    mini_de_stok int, 
    max_de_stok int,
    categoryy_ID int,
    foreign key(categoryy_ID) references Category(Category_Id)
 );

 insert into products (Product_Id,Product_name,Product_img,prix_unitair,mini_de_stok,max_de_stok,categoryy_ID)
   values(1, 'Arduino Uno', 'Adruinouno.jfif', 2050, 18, 12, 1),
 (2, 'Portable Bluetooth Speakers', 'PortableBluetoothSpeakers.jfif', 2380, 30, 130, 2),
(3, 'Huawei P40 Pro', 'HuaweiP40Pro.jfif', 2740, 10, 210, 3),


 (4, 'Arduino Nano', 'ArduinoNano.jfif', 1875, 10, 80, 1),

 

 (5, 'Arduino Due', 'ArduinoDue.jfif', 1580, 0, 9, 1),

 (6, 'Arduino Pro Mini', 'ArduinoProMini.jfif', 3025, 12, 20, 1),



 (7, 'Arduino Zero', 'ArduinoZero.jfif', 1790, 7, 10, 1),

 (8, 'Arduino LilyPad', 'ArduinoLilyPad.jfif', 2130, 0, 10, 1),

 (9, 'Arduino Ethernet', 'ArduinoEthernet.jfif', 1945, 20, 70, 1),

 (10, 'Wireless Mouse Keyboard', 'WirelessMouseKeyboard.jfif', 2875, 77, 180, 2),

 (11, 'USB Flash Drives', 'USBFlashDrives.jfif', 2490, 20, 100, 2),
 (12, 'Arduino Mega 2560', 'ArduinoMega.jfif', 2050, 34, 120, 1),

(13, 'Smartphone Cases Covers', 'SmartphoneCasesCovers.jfif', 1675, 2, 17, 2),
(14, 'Arduino Leonardo', 'ArduinoLeonardo.jfif', 2500, 49, 150, 1),

 (15, 'Screen Protectors', 'ScreenProtectors.jfif', 2360, 9, 150, 2),
 (16, 'Vivo X 60 Pro', 'VivoX60Pro.jfif', 2460, 2, 160, 3),
(17, 'Oppo Find X3 Pro', 'OppoFindX3Pro.jfif', 2510, 6, 11, 3),


 (18, 'Micro SD Cards', 'MicroSDCards.jfif', 2080, 7, 12,2),


(19, 'External Hard Drives', 'ExternalHardDrives.jfif', 2240, 6, 110, 2),
(20, 'Ethernet Cables', 'EthernetCables.jfif', 1890, 5, 90, 2),
(21, 'Power Banks', 'PowerBanks.jfif', 2575, 60, 16, 2),
(22, 'Webcams', 'Webcams.jfif', 1650, 80, 100, 2),
(23, 'Wireless Charging Pads', 'WirelessChargingPads.jfif', 3110, 100, 21, 2),
(24, 'Xiaomi Mi 11', 'XiaomiMi11.jfif', 1860, 21, 110, 3),
(25, 'Sony Xperia 1 III', 'SonyXperia1III.jfif', 2215, 146, 140, 3),
(26, 'Samsung Galaxy S21', 'SamsungGalaxyS21.jfif', 2025, 4, 3, 3),
(27, 'Realme GT', 'RealmeGT.jfif', 2930, 6, 190, 3),
(28, 'One Plus 9 Pro', 'OnePlus9Pro.jfif', 1750, 7, 90, 3),
(29, 'Laptop Sleeves Bags', 'LaptopSleevesBags.jfif', 2620, 5, 200, 2),

(30, 'Motorola Edge+', 'MotorolaEdge+.jfif', 2460, 4, 160, 3),
 (31, 'Arduino MKR1000', 'ArduinoMKR1000.jfif', 2260, 8, 12, 1),

(32, 'iphone 13', 'iphone13.jfif', 2190, 32, 130, 3),
(33, 'Google Pixel 6', 'GooglePixel6.jfif', 2740, 5, 210, 3),
(34, 'Huawei P40 Pro', 'HuaweiP40Pro.jfif', 2190, 13, 1, 3),
(35, 'ASUSROG Phone 5', 'ASUSROGPhone5.jfif', 2740, 22,010, 3);



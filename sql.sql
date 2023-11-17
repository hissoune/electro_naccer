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
  (3,"cable");
 
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
   values(1, 'Arduino Uno', 'Adruinouno.jfif', 20.50, 3, 120, 1),
 (2, 'Arduino Mega 2560', 'ArduinoMega.jfif', 20.50, 3, 120, 1),

 (3, 'Arduino Nano', 'ArduinoNano.jfif', 18.75, 1, 80, 1),

 (4, 'Arduino Leonardo', 'ArduinoLeonardo.jfif', 25.00, 4, 150, 1),

 (5, 'Arduino Due', 'ArduinoDue.jfif', 15.80, 2, 90, 1),

 (6, 'Arduino Pro Mini', 'ArduinoProMini.jfif', 30.25, 5, 200, 1),

 (7, 'Arduino MKR1000', 'ArduinoMKR1000.jfif', 22.60, 3, 120, 1),

 (8, 'Arduino Zero', 'ArduinoZero.jfif', 17.90, 2, 100, 1),

 (9, 'Arduino LilyPad', 'ArduinoLilyPad.jfif', 21.30, 4, 130, 1),

 (10, 'Arduino Ethernet', 'ArduinoEthernet.jfif', 19.45, 1, 70, 1),

 (11, 'Wireless Mouse Keyboard', 'WirelessMouseKeyboard.jfif', 28.75, 6, 180, 2),

 (12, 'USB Flash Drives', 'USBFlashDrives.jfif', 24.90, 3, 100, 2),

(13, 'Smartphone Cases Covers', 'SmartphoneCasesCovers.jfif', 16.75, 2, 80, 2),

 (14, 'Screen Protectors', 'ScreenProtectors.jfif', 23.60, 4, 150, 2),

 (15, 'Micro SD Cards', 'MicroSDCards.jfif', 20.80, 3, 120,2),

(16, 'Laptop Sleeves Bags', 'LaptopSleevesBags.jfif', 26.20, 5, 200, 2),

(17, 'External Hard Drives', 'ExternalHardDrives.jfif', 22.40, 2, 110, 2),
(18, 'Ethernet Cables', 'EthernetCables.jfif', 18.90, 1, 90, 2),
(19, 'Power Banks', 'PowerBanks.jfif', 25.75, 4, 160, 2),
(20, 'Webcams', 'Webcams.jfif', 16.50, 2, 100, 2),
(21, 'Wireless Charging Pads', 'WirelessChargingPads.jfif', 31.10, 5, 210, 2),
(22, 'Portable Bluetooth Speakers', 'PortableBluetoothSpeakers.jfif', 23.80, 3, 130, 2),
(23, 'vvvv', 'capteur1.jfif', 18.60, 2, 110, 2),
(24, 'wwww', 'capteur2.jfif', 22.15, 4, 140, 2),
(25, 'xxxx', 'capteur3.jfif', 20.25, 1, 80, 2),
(26, 'yyyy', 'capteur4.jfif', 29.30, 6, 190, 2),
(27, 'zzzz', 'capteur5.jfif', 25.10, 3, 110, 2),
(28, 'aaaaa', 'capteur6.jfif', 17.50, 2, 90, 2),
(29, 'bbbbb', 'capteur7.jfif', 24.60, 4, 160, 2),
(30, 'ccccc', 'capteur8.jfif', 21.90, 3, 130, 2),
(31, 'ddddd', 'capteur9.jfif', 27.40, 5, 210, 2),
(32, 'ddddd', 'capteur10.jfif', 27.40, 5, 210, 2),
(33, 'bbbbb', 'capteur11.jfif', 24.60, 4, 160, 2),
(34, 'ccccc', 'capteur12.jfif', 21.90, 3, 130, 3),
(35, 'ddddd', 'capteur13.jfif', 27.40, 5, 210, 2);



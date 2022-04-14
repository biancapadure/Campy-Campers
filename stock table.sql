/* Create table CampyCampersStock*/

CREATE TABLE CampyCampersStock (
  stockID varchar(11) NoT NULL PRIMARY KEY,
  stockDescription varchar(40) NOT NULL,
  Price DECIMAL(10,2) NOT NULL,
  quantityStock int (10) NOT NULL,
 imgLink varchar(40) NOT NULL
  )


/* Insert Data in table CampyCampersStock*/
  
INSERT INTO CampyCampersStock(stockID, stockDescription, Price, quantityStock, imgLink)
    VALUES ("hat01", "Sun protective Waterproof hat   ", 85, 30,"img/hat01.jpg");
INSERT INTO CampyCampersStock(stockID, stockDescription, Price, quantityStock, imgLink)
    VALUES ("hat02", "Waterproof flat hat   ", 80, 30,"img/hat02.jpg");
INSERT INTO CampyCampersStock(stockID, stockDescription, Price, quantityStock, imgLink)
    VALUES ("hat03", "Waterproof wax hat   ", 90, 30,"img/hat03.jpg");

    INSERT INTO CampyCampersStock(stockID, stockDescription, Price, quantityStock, imgLink)
    VALUES ("chair01", "Aluminium Camping Chair ", 35, 40,"img/chair01.jpg");
INSERT INTO CampyCampersStock(stockID, stockDescription, Price, quantityStock, imgLink)
    VALUES ("chair02", "Wooden Camping Chair ", 30, 40,"img/chair02.jpg");
INSERT INTO CampyCampersStock(stockID, stockDescription, Price, quantityStock, imgLink)
    VALUES ("chair03", "Wooden Camping Chair ", 25, 40,"img/chair03.jpg");


INSERT INTO CampyCampersStock(stockID, stockDescription, Price, quantityStock, imgLink)
    VALUES ("table01", "Foldable Aluminium Camping table ", 45, 20,"img/table01.jpg");
INSERT INTO CampyCampersStock(stockID, stockDescription, Price, quantityStock, imgLink)
    VALUES ("table02", "Foldable Wooden Camping table ", 35, 20,"img/table02.jpg");
INSERT INTO CampyCampersStock(stockID, stockDescription, Price, quantityStock, imgLink)
    VALUES ("table03", "Foldable Wooden Camping table ", 30, 20,"img/table03.jpg");

INSERT INTO CampyCampersStock(stockID, stockDescription, Price, quantityStock, imgLink)
    VALUES ("tent01", "waterproof tent for 2", 80, 60,"img/tent01.jpg");
INSERT INTO CampyCampersStock(stockID, stockDescription, Price, quantityStock, imgLink)
    VALUES ("tent02", "waterproof tent for 3", 120, 60,"img/tent02.jpg");
INSERT INTO CampyCampersStock(stockID, stockDescription, Price, quantityStock, imgLink)
    VALUES ("tent03", "waterproof tent for 4", 150, 70,"img/tent03.jpg");

    
INSERT INTO CampyCampersStock(stockID, stockDescription, Price, quantityStock, imgLink)
    VALUES ("bag01", "sleeping bag lightweight", 40, 60,"img/bag01.jpg");
INSERT INTO CampyCampersStock(stockID, stockDescription, Price, quantityStock, imgLink)
    VALUES ("bag02", "sleeping bag ultra-lightweight", 50, 60,"img/bag02.jpg");
INSERT INTO CampyCampersStock(stockID, stockDescription, Price, quantityStock, imgLink)
    VALUES ("bag03", "sleeping bag fur warm", 100, 60,"img/bag03.jpg");

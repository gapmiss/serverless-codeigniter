-- 
-- created using:
-- https://dummyjson.com/products/category/sunglasses
-- https://www.convertjson.com/json-to-sql.htm
-- 
CREATE TABLE demo(
   id                 INTEGER  NOT NULL PRIMARY KEY 
  ,title              VARCHAR(35) NOT NULL
  ,description        VARCHAR(170) NOT NULL
  ,price              INTEGER  NOT NULL
  ,discountPercentage NUMERIC(5,2) NOT NULL
  ,rating             NUMERIC(4,2) NOT NULL
  ,stock              INTEGER  NOT NULL
  ,brand              VARCHAR(20) NOT NULL
  ,category           VARCHAR(10) NOT NULL
  ,thumbnail          VARCHAR(55) NOT NULL
  ,images0            VARCHAR(47) NOT NULL
  ,images1            VARCHAR(48) NOT NULL
  ,images2            VARCHAR(55) NOT NULL
  ,images3            VARCHAR(48)
  ,images4            VARCHAR(55)
);
INSERT INTO demo(id,title,description,price,discountPercentage,rating,stock,brand,category,thumbnail,images0,images1,images2,images3,images4) VALUES (81,'Round Silver Frame Sun Glasses','A pair of sunglasses can protect your eyes from being hurt. For car driving, vacation travel, outdoor activities, social gatherings,',19,10.1,4.94,78,'Designer Sun Glasses','sunglasses','https://dummyjson.com/image/i/products/81/thumbnail.jpg','https://dummyjson.com/image/i/products/81/1.jpg','https://dummyjson.com/image/i/products/81/2.jpg','https://dummyjson.com/image/i/products/81/3.jpg','https://dummyjson.com/image/i/products/81/4.webp','https://dummyjson.com/image/i/products/81/thumbnail.jpg');
INSERT INTO demo(id,title,description,price,discountPercentage,rating,stock,brand,category,thumbnail,images0,images1,images2,images3,images4) VALUES (82,'Kabir Singh Square Sunglass','Orignal Metal Kabir Singh design 2020 Sunglasses Men Brand Designer Sun Glasses Kabir Singh Square Sunglass',50,15.6,4.62,78,'Designer Sun Glasses','sunglasses','https://dummyjson.com/image/i/products/82/thumbnail.jpg','https://dummyjson.com/image/i/products/82/1.jpg','https://dummyjson.com/image/i/products/82/2.webp','https://dummyjson.com/image/i/products/82/3.jpg','https://dummyjson.com/image/i/products/82/4.jpg','https://dummyjson.com/image/i/products/82/thumbnail.jpg');
INSERT INTO demo(id,title,description,price,discountPercentage,rating,stock,brand,category,thumbnail,images0,images1,images2,images3,images4) VALUES (83,'Wiley X Night Vision Yellow Glasses','Wiley X Night Vision Yellow Glasses for Riders - Night Vision Anti Fog Driving Glasses - Free Night Glass Cover - Shield Eyes From Dust and Virus- For Night Sport Matches',30,6.33,4.97,115,'mastar watch','sunglasses','https://dummyjson.com/image/i/products/83/thumbnail.jpg','https://dummyjson.com/image/i/products/83/1.jpg','https://dummyjson.com/image/i/products/83/2.jpg','https://dummyjson.com/image/i/products/83/3.jpg','https://dummyjson.com/image/i/products/83/4.jpg','https://dummyjson.com/image/i/products/83/thumbnail.jpg');
INSERT INTO demo(id,title,description,price,discountPercentage,rating,stock,brand,category,thumbnail,images0,images1,images2,images3,images4) VALUES (84,'Square Sunglasses','Fashion Oversized Square Sunglasses Retro Gradient Big Frame Sunglasses For Women One Piece Gafas Shade Mirror Clear Lens 17059',28,13.89,4.64,64,'mastar watch','sunglasses','https://dummyjson.com/image/i/products/84/thumbnail.jpg','https://dummyjson.com/image/i/products/84/1.jpg','https://dummyjson.com/image/i/products/84/2.jpg','https://dummyjson.com/image/i/products/84/thumbnail.jpg',NULL,NULL);
INSERT INTO demo(id,title,description,price,discountPercentage,rating,stock,brand,category,thumbnail,images0,images1,images2,images3,images4) VALUES (85,'LouisWill Men Sunglasses','LouisWill Men Sunglasses Polarized Sunglasses UV400 Sunglasses Day Night Dual Use Safety Driving Night Vision Eyewear AL-MG Frame Sun Glasses with Free Box for Drivers',50,11.27,4.98,92,'LouisWill','sunglasses','https://dummyjson.com/image/i/products/85/thumbnail.jpg','https://dummyjson.com/image/i/products/85/1.jpg','https://dummyjson.com/image/i/products/85/2.jpg','https://dummyjson.com/image/i/products/85/thumbnail.jpg',NULL,NULL);

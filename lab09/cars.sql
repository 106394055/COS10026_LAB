CREATE TABLE cars (
    car_id INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
    make VARCHAR(25) NOT NULL,
    model VARCHAR(40) NOT NULL,
    price FLOAT NOT NULL,
    yom INT NOT NULL
);

INSERT INTO cars (car_id, make, model, price, yom) VALUES
(NULL, 'Holden', 'Astra', 14000, 2009),
(NULL, 'BMW', 'X3', 35000, 2010),
(NULL, 'Ford', 'Falcon', 39000, 2013),
(NULL, 'Toyota', 'Corolla', 20000, 2012),
(NULL, 'Holden', 'Commodore', 28000, 2009);

SELECT * FROM cars;
SELECT make, model, price FROM cars ORDER BY make, model;
SELECT make, model FROM cars WHERE price >= 20000;
SELECT make, AVG(price) FROM cars GROUP BY make;
SELECT make, model FROM cars WHERE price < 15000 AND price > 10000;
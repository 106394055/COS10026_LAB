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
<!-- Retrieves all columns (car_id, make, model, price, yom) and all 5 rows from the cars table without any filtering or sorting -->

SELECT make, model, price FROM cars ORDER BY make, model;
<!-- Retrieves only the make, model, and price columns for all records, sorted alphabetically in ascending order first by make (BMW, Ford, Holden, Holden, Toyota) and then by model for ties (Holden Astra appears before Holden Commodore). -->

SELECT make, model FROM cars WHERE price >= 20000;
<!-- Filters the table to return the make and model of vehicles priced at $20,000 or higher, returning 4 cars (BMW X3, Ford Falcon, Toyota Corolla, and Holden Commodore) -->

SELECT make, AVG(price) FROM cars GROUP BY make;
<!-- Groups records by manufacturer (make) and calculates the average price (AVG(price)) for each brand: BMW (35000), Ford (39000), Holden (21000, the average of 14000 and 28000), and Toyota (20000). -->

SELECT make, model FROM cars WHERE price < 15000 AND price > 10000;
<!-- Filters records where price falls strictly between $10,000 and $15,000 (exclusive), returning 1 record: Holden Astra ($14,000). -->
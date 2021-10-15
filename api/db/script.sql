CREATE DATABASE IF NOT EXISTS felipedocker;

USE felipedocker;

CREATE TABLE IF NOT EXISTS products (
    id INT(11) AUTO_INCREMENT,
    name VARCHAR(225),
    price DECIMAL(10, 2),
    PRIMARY KEY (id)
);

INSERT INTO products VALUE(0, 'Caneca de seramica, perfeita para café', 45);
INSERT INTO products VALUE(0, 'Copo de acrilico, perfeito para agua', 29);
INSERT INTO products VALUE(0, 'Garrafa de platico com tampa, perfeito para agua', 29);
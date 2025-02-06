CREATE DATABASE blog;

USE blog;

CREATE TABLE posts( 
    id INT NOT NULL PRIMARY KEY AUTO_INCREMENT, 
    category_id INT, 
    content VARCHAR(1000));

INSERT INTO posts(content, category_id) 
VALUES 
("pirmais ieraksts"), 
("otrais ieraksts"),
("CHRISTMAS", "1");

SELECT * FROM `posts`;

CREATE TABLE categories( 
    id INT NOT NULL PRIMARY KEY AUTO_INCREMENT, 
    category_name VARCHAR(25));

INSERT INTO categories(category_name) 
VALUES 
("Svētki"), 
("Mūzika"),
("Sports");
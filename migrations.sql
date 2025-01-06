CREATE DATABASE blog;

USE blog;

CREATE TABLE posts( 
    id INT NOT NULL PRIMARY KEY AUTO_INCREMENT, 
    content VARCHAR(1000));

INSERT INTO posts(content) 
VALUES 
("pirmais ieraksts"), 
("otrais ieraksts");

SELECT * FROM `posts`;
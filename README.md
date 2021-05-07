# netit-backend-hr name admin is Admin password is 12345



CREATE DATABASE working;
use working;
CREATE TABLE tb_users(
id INT AUTO_INCREMENT PRIMARY KEY,
username VARCHAR(250),
password VARCHAR(250),
mail VARCHAR(250)
);
CREATE TABLE tb_usersemploy(
id INT AUTO_INCREMENT PRIMARY KEY,
username VARCHAR(250),
password VARCHAR(250),
mail VARCHAR(250)
);
CREATE TABLE tm_usersemploy__user_role(
		user_id INTEGER,
        role_id INTEGER,
        primary key(user_id, role_id)
);
select * from tb_users;
CREATE TABLE tm_role(
		id INTEGER AUTO_INCREMENT PRIMARY KEY,
        title varchar(256)
);

CREATE TABLE tm_users__user_role(
		user_id INTEGER,
        role_id INTEGER,
        primary key(user_id, role_id)
);


INSERT INTO tm_role(title) VALUES('ADMIN');

INSERT INTO tm_role(title) VALUES('USER');
INSERT INTO tm_role(title) VALUES('EMPLOY');
INSERT INTO tm_role(title) VALUES('EMPLOYER');
SELECT * FROM tm_role;
SELECT * FROM tm_users__user_role;
SELECT b.title 
FROM tm_users__user_role  as a, 
	 tm_role as b
WHERE a.user_id = 2 AND 
	  a.role_id = b.id;
DELETE FROM tm_role WHERE id=5;
SELECT * FROM tm_role;
CREATE TABLE tb_obiavi(
id INT AUTO_INCREMENT PRIMARY KEY,
firm VARCHAR(250),
sity VARCHAR(250),
occupation VARCHAR(250),
works VARCHAR(250),
obiava text
);
SELECT * FROM tb_obiavi;
CREATE TABLE tb_usersem(
id INT AUTO_INCREMENT PRIMARY KEY,
username VARCHAR(250),
fname VARCHAR(250),
lname VARCHAR(250),
firmname VARCHAR(800),
address VARCHAR(250),
tel VARCHAR(250),
email VARCHAR(250),
password VARCHAR(250)
);
CREATE TABLE tm_usersem__user_role(
		user_id INTEGER,
        role_id INTEGER,
        primary key(user_id, role_id)
);
SELECT * FROM tb_usersem;
SELECT * FROM tm_usersem__user_role;
CREATE TABLE tb_usersad(
id INT AUTO_INCREMENT PRIMARY KEY,
username VARCHAR(250),
email VARCHAR(250),
password VARCHAR(250)
);
SELECT * FROM tb_usersad;
CREATE TABLE tm_usersem__user_role(
		user_id INTEGER,
        role_id INTEGER,
        primary key(user_id, role_id)
);

    
WHERE a.id = b.id ;
SELECT * FROM tb_usersad;
SELECT * FROM tb_usersem;

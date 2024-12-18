CREATE DATABASE api_test;


CREATE TABLE tb_usuarios(
	id_usuario SERIAL PRIMARY KEY,
	nombre VARCHAR(255),
	email VARCHAR(255),
	password VARCHAR(255),
	image VARCHAR(255) NULL,
	estado INT,
	create_date TIMESTAMP,
	update_date TIMESTAMP
);

SELECT * FROM tb_usuarios;
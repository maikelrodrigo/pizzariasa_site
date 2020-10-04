drop database phpBanco;
create database phpBanco
DEFAULT CHARACTER SET utf8;
use phpBanco;

CREATE TABLE ingrediente 
( 
	id   INT NOT NULL auto_increment PRIMARY KEY, 
	nome VARCHAR(60), 
	tipo VARCHAR(20),
	valor VARCHAR(20),
	estoque int
); CHARACTER SET utf8 COLLATE utf8_general_ci;

CREATE TABLE pizza 
( 
	id        INT NOT NULL auto_increment PRIMARY KEY, 
	nome      VARCHAR(60), 
	tipo      VARCHAR(20), 
	valor     VARCHAR(20), 
	tamanho   VARCHAR(20), 
	foto   	  VARCHAR(50) 	
) CHARACTER SET utf8 COLLATE utf8_general_ci;

CREATE TABLE bebidas 
( 
	id     INT NOT NULL auto_increment PRIMARY KEY, 
	nome   VARCHAR(30), 
	tipo   VARCHAR(20), 
	sabor  VARCHAR(20), 
	valor  VARCHAR(5), 
	litros VARCHAR(5),
	foto   VARCHAR(50) 	
) CHARACTER SET utf8 COLLATE utf8_general_ci;

CREATE TABLE cliente 
( 
	id            INT NOT NULL auto_increment PRIMARY KEY, 
	usuario		  VARCHAR(20),
	nome_completo VARCHAR(90), 
	email         VARCHAR(90), 
	senha         VARCHAR(20), 
	sexo          VARCHAR(10), 
	cep           VARCHAR(15), 
	cpf           VARCHAR(16), 
	telefone      VARCHAR(12), 
	tipo          VARCHAR(20), 
	foto          VARCHAR(50) 
) CHARACTER SET utf8 COLLATE utf8_general_ci;

CREATE TABLE pizza_ingrediente 
( 
	id             INT NOT NULL auto_increment PRIMARY KEY, 
	id_pizza       INT, 
	id_ingrediente INT, 
	quantidade     DOUBLE,
	FOREIGN KEY(id_pizza) REFERENCES pizza(id), 
	FOREIGN KEY(id_ingrediente) REFERENCES ingrediente(id) 
) CHARACTER SET utf8 COLLATE utf8_general_ci;

INSERT INTO ingrediente(nome, tipo, valor, estoque) VALUES ("Catupiri", "SALGADO", 1.20, 1);
INSERT INTO ingrediente(nome, tipo, valor, estoque) VALUES ("Queijo parmezao", "SALGADO", 1.20, 1);
INSERT INTO ingrediente(nome, tipo, valor, estoque) VALUES ("Chocolate", "DOCE", 2.50, 1);
INSERT INTO ingrediente(nome, tipo, valor, estoque) VALUES ("Queijo Mucarela", "SALGADO", 1.20, 1);
INSERT INTO ingrediente(nome, tipo, valor, estoque) VALUES ("Calabresa", "SALGADO", 1.20, 1);
INSERT INTO ingrediente(nome, tipo, valor, estoque) VALUES ("Chocolate Branco", "DOCE", 2.50, 1);
INSERT INTO ingrediente(nome, tipo, valor, estoque) VALUES ("Carne Moida", "SALGADO", 1.20, 1);
INSERT INTO ingrediente(nome, tipo, valor, estoque) VALUES ("Frango", "SALGADO", 1.20, 1);
INSERT INTO ingrediente(nome, tipo, valor, estoque) VALUES ("Morango", "DOCE", 2.50, 1);
INSERT INTO ingrediente(nome, tipo, valor, estoque) VALUES ("Alho", "SALGADO", 1.00, 1);
INSERT INTO ingrediente(nome, tipo, valor, estoque) VALUES ("Cebola", "SALGADO", 1.00, 1);
INSERT INTO ingrediente(nome, tipo, valor, estoque) VALUES ("Banana Nevada", "DOCE", 1.20, 1);
INSERT INTO ingrediente(nome, tipo, valor, estoque) VALUES ("Milho", "SALGADO", 1.00, 1);
INSERT INTO ingrediente(nome, tipo, valor, estoque) VALUES ("Ervilha", "SALGADO", 0.90, 1);
INSERT INTO ingrediente(nome, tipo, valor, estoque) VALUES ("M&M", "DOCE", 2.75, 1);

INSERT INTO pizza(nome, tipo, valor, tamanho, foto) VALUES ("Frango Catupiry", "SALGADA", "12.50", "GRANDE", "1 - pizza.png");
INSERT INTO pizza(nome, tipo, valor, tamanho, foto) VALUES ("Calabresa", "SALGADA", "14.00", "GRANDE", "2 - pizza.png");
INSERT INTO pizza(nome, tipo, valor, tamanho, foto) VALUES ("Chocolate - Preto", "DOCE", "16.00", "MEDIA", "3 - pizza.png");
INSERT INTO pizza(nome, tipo, valor, tamanho, foto) VALUES ("Brocolis especial", "SALGADA", "12.50", "GRANDE", "4 - pizza.png");
INSERT INTO pizza(nome, tipo, valor, tamanho, foto) VALUES ("Brasileira", "SALGADA", "14.00", "GRANDE", "5 - pizza.png");
INSERT INTO pizza(nome, tipo, valor, tamanho, foto) VALUES ("Camarao", "SALGADA", "16.00", "MEDIA", "6 - pizza.png");
INSERT INTO pizza(nome, tipo, valor, tamanho, foto) VALUES ("Chester", "SALGADA", "12.50", "GRANDE", "7 - pizza.png");
INSERT INTO pizza(nome, tipo, valor, tamanho, foto) VALUES ("Salmao", "SALGADA", "14.00", "GRANDE", "8 - pizza.png");
INSERT INTO pizza(nome, tipo, valor, tamanho, foto) VALUES ("Bacon Catupiry", "SALGADA", "16.00", "MEDIA", "9 - pizza.png");
INSERT INTO pizza(nome, tipo, valor, tamanho, foto) VALUES ("Morango - Branco", "DOCE", "16.00", "MEDIA", "10 - pizza.png");
INSERT INTO pizza(nome, tipo, valor, tamanho, foto) VALUES ("Banana - Branco", "DOCE", "16.00", "MEDIA", "11 - pizza.png");

INSERT INTO bebidas(nome, tipo, sabor, valor, litros, foto) VALUES ("Coca-cola", "GASEIFICADA", "coca", "7.60", 2.5, "1 - bebida.jpg");
INSERT INTO bebidas(nome, tipo, sabor, valor, litros, foto) VALUES ("Fanta", "GASEIFICADA", "uva", "4.80", 2.5, "2 - bebida.jpg");
INSERT INTO bebidas(nome, tipo, sabor, valor, litros, foto) VALUES ("Sprite", "GASEIFICADA", "limao", "4.80", 2.5, "3 - bebida.jpg");
INSERT INTO bebidas(nome, tipo, sabor, valor, litros, foto) VALUES ("Coca-cola", "GASEIFICADA", "coca", "7.60", 2.5, "1 - bebida.jpg");
INSERT INTO bebidas(nome, tipo, sabor, valor, litros, foto) VALUES ("Fanta", "GASEIFICADA", "uva", "4.80", 2.5, "2 - bebida.jpg");
INSERT INTO bebidas(nome, tipo, sabor, valor, litros, foto) VALUES ("Sprite", "GASEIFICADA", "limao", "4.80", 2.5, "3 - bebida.jpg");
INSERT INTO bebidas(nome, tipo, sabor, valor, litros, foto) VALUES ("Coca-cola", "GASEIFICADA", "coca", "7.60", 2.5, "1 - bebida.jpg");
INSERT INTO bebidas(nome, tipo, sabor, valor, litros, foto) VALUES ("Fanta", "GASEIFICADA", "uva", "4.80", 2.5, "2 - bebida.jpg");
INSERT INTO bebidas(nome, tipo, sabor, valor, litros, foto) VALUES ("Sprite", "GASEIFICADA", "limao", "4.80", 2.5, "3 - bebida.jpg");

INSERT INTO cliente(usuario, nome_completo, email, senha, sexo, cep, cpf, telefone, tipo, foto) VALUES ("Admin", "Maikel Rodrigo Kruger", "mrodrigokruger@gmail.com", "1", "MASCULINO", "764745635", "285.245.637-12", "4799874505", "ADMIN", "1 - usuario.png");
INSERT INTO cliente(usuario, nome_completo, email, senha, sexo, cep, cpf, telefone, tipo, foto) VALUES ("Victorb", "Victor Batisda", "victorbatisda@gmail.com", "123", "MASCULINO", "874787635", "835.245.637-12", "4787543636", "ADMIN", "2 - usuario.png");
INSERT INTO cliente(usuario, nome_completo, email, senha, sexo, cep, cpf, telefone, tipo, foto) VALUES ("Helo1", "Heloisa Vinter", "helovinter@outlook.com", "123", "FEMININO", "36915635", "981.245.637-12", "4737524525", "NORMAL", "3 - usuario.png");

INSERT INTO pizza_ingrediente(id_pizza, id_ingrediente, quantidade) VALUES (1, 1, 15.0);
INSERT INTO pizza_ingrediente(id_pizza, id_ingrediente, quantidade) VALUES (1, 8, 15.0);
INSERT INTO pizza_ingrediente(id_pizza, id_ingrediente, quantidade) VALUES (1, 13, 15.0);
INSERT INTO pizza_ingrediente(id_pizza, id_ingrediente, quantidade) VALUES (1, 2, 15.0);
INSERT INTO pizza_ingrediente(id_pizza, id_ingrediente, quantidade) VALUES (1, 3, 15.0);
INSERT INTO pizza_ingrediente(id_pizza, id_ingrediente, quantidade) VALUES (2, 3, 15.0);
INSERT INTO pizza_ingrediente(id_pizza, id_ingrediente, quantidade) VALUES (3, 1, 15.0);

select ingrediente.* ,count(pizza.id) as nr_pizzas from ingrediente inner join pizza_ingrediente on ingrediente.id=pizza_ingrediente.id_ingrediente inner join pizza on pizza.id=pizza_ingrediente.id_pizza group by ingrediente.id;


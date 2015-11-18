CREATE DATABASE sadmbd;

CREATE TABLE IF NOT EXISTS Sintoma (
	codigo smallint(10) PRIMARY KEY AUTO_INCREMENT,
	nome varchar(30) NOT NULL,
	descricao varchar(140)
)

CREATE TABLE IF NOT EXISTS Categoria (
	codigo smallint(3) PRIMARY KEY AUTO_INCREMENT,
	nome varchar(30) NOT NULL,
	inicio smallint(2) NOT NULL,
	fim smallint(2) NOT NULL
)

CREATE TABLE IF NOT EXISTS Doenca (
	codigo smallint(10) PRIMARY KEY AUTO_INCREMENT,
	nome varchar (40) NOT NULL,
	sintoma_1 smallint(10) NOT NULL,
	FOREIGN KEY (sintoma_1) REFERENCES Sintoma (codigo),
	sintoma_2 smallint(10),
	FOREIGN KEY (sintoma_2) REFERENCES Sintoma (codigo),
	sintoma_3 smallint(10),
	FOREIGN KEY (sintoma_3) REFERENCES Sintoma (codigo),
	sintoma_4 smallint(10),
	FOREIGN KEY (sintoma_4) REFERENCES Sintoma (codigo),
	sintoma_5 smallint(10),
	FOREIGN KEY (sintoma_5) REFERENCES Sintoma (codigo),
	sintoma_6 smallint(10),
	FOREIGN KEY (sintoma_6) REFERENCES Sintoma (codigo),
	sintoma_7 smallint(10),
	FOREIGN KEY (sintoma_7) REFERENCES Sintoma (codigo),
	sintoma_8 smallint(10),
	FOREIGN KEY (sintoma_8) REFERENCES Sintoma (codigo),
	genero varchar (9) NOT NULL,
	categoria smallint(3),
	FOREIGN KEY (categoria) REFERENCES Categoria (codigo)
)


CREATE TABLE IF NOT EXISTS Estatistica (
	codigo smallint(10) PRIMARY KEY AUTO_INCREMENT,
	usuario varchar(40),
	idade smallint(2) NOT NULL,
	doenca smallint(10) NOT NULL,
	FOREIGN KEY (doenca) REFERENCES Doenca (codigo),
	sintoma_1 smallint(10) NOT NULL,
	FOREIGN KEY (sintoma_1) REFERENCES Sintoma (codigo),
	sintoma_2 smallint(10),
	FOREIGN KEY (sintoma_2) REFERENCES Sintoma (codigo),
	sintoma_3 smallint(10),
	FOREIGN KEY (sintoma_3) REFERENCES Sintoma (codigo),
	sintoma_4 smallint(10),
	FOREIGN KEY (sintoma_4) REFERENCES Sintoma (codigo),
	sintoma_5 smallint(10),
	FOREIGN KEY (sintoma_5) REFERENCES Sintoma (codigo),
	sintoma_6 smallint(10),
	FOREIGN KEY (sintoma_6) REFERENCES Sintoma (codigo),
	sintoma_7 smallint(10),
	FOREIGN KEY (sintoma_7) REFERENCES Sintoma (codigo),
	sintoma_8 smallint(10),
	FOREIGN KEY (sintoma_8) REFERENCES Sintoma (codigo),
	genero varchar (9) NOT NULL,
	categoria smallint(3),
	FOREIGN KEY (categoria) REFERENCES Categoria (codigo),
	local varchar(15),
	dataest date,
	hora time
)

INSERT INTO sintoma (nome, descricao) VALUES ("Febre", "Elevação da temperatura do corpo humano para cima dos limites considerados normais (36 a 37,3 °C)");
INSERT INTO sintoma (nome, descricao) VALUES ("Azia", "Sensação de ardor (queimação), que tem início na parte posterior do esterno"); 
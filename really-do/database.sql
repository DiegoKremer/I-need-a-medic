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
INSERT INTO sintoma (nome, descricao) VALUES ("Coriza", "Inflamação da mucosa nasal acompanhada eventualmente de espirros, secreção e obstrução nasal");
INSERT INTO sintoma (nome, descricao) VALUES ("Tosse", "A tosse é uma ação que o corpo toma para se livrar das substâncias (poeiras, bactérias, vírus, fungos e outras substâncias danosas) que estão irritando as passagens de ar na faringe, laringe, traquéia ou pulmões.");
INSERT INTO sintoma (nome, descricao) VALUES ("Cansaço", "Incapacidade muscular local para desenvolver um trabalho e sensação abrangente de falta de energia, corporal ou sistêmica");

INSERT INTO categoria (nome, inicio, fim) VALUES ("Criança", 5, 12);
INSERT INTO categoria (nome, inicio, fim) VALUES ("Adolescente", 13, 18);
INSERT INTO categoria (nome, inicio, fim) VALUES ("Adulto", 19, 55);
INSERT INTO categoria (nome, inicio, fim) VALUES ("Idoso", 56, 100);

INSERT INTO doenca (nome, sintoma_1, sintoma_2, sintoma_3, sintoma_4, sintoma_5, sintoma_6, sintoma_6, sintoma_7, sintoma_8, genero, categoria) VALUES ("Resfriado", 3, 4, 5, null, null, null, null, null, "Ambos", 3);
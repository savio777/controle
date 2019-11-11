CREATE DATABASE controle;

USE controle;

CREATE TABLE usuario(
    id INT PRIMARY KEY AUTO_INCREMENT,
    nome VARCHAR(100) NOT NULL,
    email VARCHAR(100) NOT NULL UNIQUE,
    tipo_user VARCHAR(30) NOT NULL,  -- root, adm, comum
    senha VARCHAR(100) NOT NULL
);

-- usuario para testes
INSERT INTO `usuario`(`nome`, `email`, `tipo_user`, `senha`) 
    VALUES ('root','iae@gmail.com','root','7110eda4d09e062aa5e4a390b0a572ac0d2c0220');

CREATE TABLE estoque(
    id INT PRIMARY KEY AUTO_INCREMENT,
    nomeProduto VARCHAR(50) NOT NULL,
    preco FLOAT NOT NULL,
    quantidade INT NOT NULL
);

CREATE TABLE tickets(
    id INT PRIMARY KEY AUTO_INCREMENT,
    titulo VARCHAR(50) NOT NULL,
    descricao VARCHAR(150),
    criado DATETIME,
    prioridade INT  -- 1, 2, 3
);

CREATE TABLE agenda(
    id INT PRIMARY KEY AUTO_INCREMENT,
    titulo VARCHAR(30) NOT NULL,
    descricao VARCHAR(150),
    cor VARCHAR(10),
    cortexto VARCHAR(10),
    comeco DATETIME NOT NULL,
    fim DATETIME
);

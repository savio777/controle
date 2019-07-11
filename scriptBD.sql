CREATE DATABASE estoque;

USE estoque;

CREATE TABLE usuario(
    id INT PRIMARY KEY AUTO_INCREMENT,
    nomeUser VARCHAR(100) NOT NULL UNIQUE,
    senha VARCHAR(100) NOT NULL,
    permissaoRoot VARCHAR(1) -- 's' ou 'n'
);

-- usado somente para testes
INSERT INTO usuario (nomeUser, senha, permissaoRoot) VALUES ('root', '1234', 's');

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

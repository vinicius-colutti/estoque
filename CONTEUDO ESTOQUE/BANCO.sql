/*
Banco de dados criado por: DAVID FRANCISCO DE SANTANA
VERSÃO ATUAL 0.0.1
FEITO PARA ARMAZENAR DADOS DO ESTOQUE DA CPA/CD ENQUANTO EU ESTIVER

*/

CREATE DATABASE estoque;

USE estoque;

CREATE TABLE compraProd (
    id int auto_increment,
    produto VARCHAR(70) NOT NULL,
    fornecedo VARCHAR(45) NOT NULL,
    marca VARCHAR(45) NOT NULL,
    modelo VARCHAR(45) NOT NULL,
    nSerie VARCHAR(60) NOT NULL,
    dataCompra DATE NOT NULL,
    valor VARCHAR(15) NOT NULL,
    quantidade INT(5) NOT NULL,
    localidade varchar(70),
primary key(id));

CREATE TABLE consertoProd(
id int auto_increment,
produto VARCHAR(70) NOT NULL,
oficina VARCHAR(45) NOT NULL,
marca VARCHAR (45) NOT NULL,
modelo VARCHAR (45) NOT NULL,
nSerie VARCHAR (60) NOT NULL,
dataConserto DATE NOT NULL,
valor VARCHAR(15) NOT NULL,
quantidade int(5) NOT NULL,
localidade varchar(70),
primary key(id));


SELECT * FROM compraprod;
SELECT * FROM consertoprod;

DELETE FROM compraprod WHERE id = 1;

-- TABELAS DO ESTOQUE VERSÃO 0.0.1  TABELA DE COMPRA E CONSERTO --


CREATE TABLE utilizadoCompra (
    produto VARCHAR(70) NOT NULL,
    fornecedo VARCHAR(45) NOT NULL,
    marca VARCHAR(45) NOT NULL,
    modelo VARCHAR(45) NOT NULL,
    nSerie VARCHAR(60) NOT NULL,
    localidade VARCHAR(70)
);


CREATE TABLE USANDO (
	id int,
    produto VARCHAR(70) NOT NULL,
    fornecedo VARCHAR(45) NOT NULL,
    marca VARCHAR(45) NOT NULL,
    modelo VARCHAR(45) NOT NULL,
    nSerie VARCHAR(60) NOT NULL,
    localidade VARCHAR(70)
);

select * from usando;

/*COMANDO PARA PASSA DADOS DA COLUNA COMPRA DE PRODUTOS PARA PRODUTOS USADO*/
INSERT INTO usando (id,produto, fornecedo, marca, modelo, nSerie, localidade) select id, produto, fornecedo, marca, modelo, nSerie,localidade from compraprod;
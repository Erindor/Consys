--Cria o database chamado Consys no Mysql
CREATE DATABASE Consys;

--Criar tabela chamada Pessoas
USE Consys;
CREATE TABLE Pessoas(
    Nome        VARCHAR(45)     NOT NULL,
    DDD         VARCHAR(5)      NOT NULL,
    Telefone    VARCHAR(45)     NOT NULL,
    CPF         VARCHAR(45)     NOT NULL,
    Sabe_Programar TINYINT      NOT NULL 
);

-- INSERIR DADOS
USE Consys;
INSERT INTO Pessoas (Nome, DDD, Telefone, CPF, Sabe_Programar) VALUES ('Jose', '27', '21239990', '11111111111', true);
INSERT INTO Pessoas (Nome, DDD, Telefone, CPF, Sabe_Programar) VALUES ('Joao', '27', '21239990', '22222222222', false);
INSERT INTO Pessoas (Nome, DDD, Telefone, CPF, Sabe_Programar) VALUES ('Maria', '27', '21239990', '22222222222', false);
INSERT INTO Pessoas (Nome, DDD, Telefone, CPF, Sabe_Programar) VALUES ('Antonio', '27', '21239990', '22222222222', false);
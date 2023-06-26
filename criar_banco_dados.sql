CREATE DATABASE meu_banco;
USE meu_banco;
CREATE TABLE jogos (
    id INTEGER AUTO_INCREMENT PRIMARY KEY
    ,nome VARCHAR(100)
    ,estudio VARCHAR(100)
    ,anoEstreia INTEGER
    ,genero VARCHAR(100)
    ,tempoDuracao VARCHAR(50)
);

INSERT INTO jogos (nome, estudio, anoEstreia, genero, tempoDuracao) VALUES (
     'The Last of Us'
    ,'Naughty Dog'
    , 2013
    ,'Ação'
    ,'entre 14 e 16 horas'
);

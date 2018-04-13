CREATE TABLE loja.categorias
(
    id int(11) PRIMARY KEY NOT NULL AUTO_INCREMENT,
    nome varchar(255) unique
);
CREATE UNIQUE INDEX categorias_nome_uindex ON loja.categorias (nome);
INSERT INTO loja.categorias (id, nome) VALUES (6, 'Domestico');
INSERT INTO loja.categorias (id, nome) VALUES (5, 'Eletronicos');
INSERT INTO loja.categorias (id, nome) VALUES (2, 'Escolar');
INSERT INTO loja.categorias (id, nome) VALUES (1, 'Esporte');
INSERT INTO loja.categorias (id, nome) VALUES (4, 'Guloseimas');
INSERT INTO loja.categorias (id, nome) VALUES (3, 'Mobilidade');
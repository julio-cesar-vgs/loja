CREATE TABLE loja.usuarios
(
    id int(11) PRIMARY KEY NOT NULL AUTO_INCREMENT,
    email varchar(255),
    senha varchar(255)
);
INSERT INTO loja.usuarios (id, email, senha) VALUES (1, 'julio.cesar@gmail.com', 'e10adc3949ba59abbe56e057f20f883e');
INSERT INTO loja.usuarios (id, email, senha) VALUES (2, 'guilherme.silveira@alura.com.br', 'e10adc3949ba59abbe56e057f20f883e');
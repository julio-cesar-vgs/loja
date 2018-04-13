CREATE TABLE loja.produtos
(
    id int(11) PRIMARY KEY NOT NULL AUTO_INCREMENT,
    nome varchar(255) NOT NULL,
    preco decimal(10,2) not null ,
    descricao text,
    categoria_id int(11),
    usado tinyint(1)
);
INSERT INTO loja.produtos (id, nome, preco, descricao, categoria_id, usado) VALUES (2, 'Batata', 5.00, 'Essa batata eh top', 5, 1);
INSERT INTO loja.produtos (id, nome, preco, descricao, categoria_id, usado) VALUES (3, '', 2.00, '123123', 1, 0);
INSERT INTO loja.produtos (id, nome, preco, descricao, categoria_id, usado) VALUES (4, '4', 2.00, 'jujuba de piracicaba, isto eh uma delicia O/ ?/°/?°', 4, 0);
INSERT INTO loja.produtos (id, nome, preco, descricao, categoria_id, usado) VALUES (5, 'Raquete de Tenis', 1.00, 'Espanador manual', 1, 0);
INSERT INTO loja.produtos (id, nome, preco, descricao, categoria_id, usado) VALUES (6, 'Raquete de Tenis', 2.00, '2', 1, 0);
INSERT INTO loja.produtos (id, nome, preco, descricao, categoria_id, usado) VALUES (7, '', 213.00, '123123123', 6, 0);
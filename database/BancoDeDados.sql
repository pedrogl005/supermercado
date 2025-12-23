drop database if exists supermercado;
create database supermercado;
use supermercado;

CREATE TABLE Cliente (
    codigo INT AUTO_INCREMENT PRIMARY KEY,
    nome VARCHAR(255),
    cpf VARCHAR(20),
    endereco VARCHAR(255),
    numero INT
);

INSERT INTO cliente (codigo, nome, cpf, endereco, numero) VALUES
(1, 'João da Silva', 12345678901, 'Rua A', 100),
(2, 'Maria Souza', 98765432109, 'Av. B', 200),
(3, 'Pedro Santos', 45678912301, 'Rua C', 300),
(4, 'Ana Pereira', 98765432100, 'Av. D', 400),
(5, 'Carlos Oliveira', 78912345609, 'Rua E', 500),
(6, 'Luiza Mendes', 65432198701, 'Av. F', 600),
(7, 'André Alves', 32198765400, 'Rua G', 700),
(8, 'Fernanda Costa', 78965432109, 'Av. H', 800),
(9, 'Roberto Silva', 12378945601, 'Rua I', 900),
(10, 'Larissa Pereira', 45632178909, 'Av. J', 1000);

CREATE TABLE Fornecedor (
    codigo INT AUTO_INCREMENT PRIMARY KEY,
    nome VARCHAR(255),
    empresa VARCHAR(255),
    contato INT,
    cidade VARCHAR(255)
);

INSERT INTO fornecedor (codigo, nome, empresa, contato, cidade) VALUES
(1, 'Maria Silva', 'ABC Corporation', 987654321, 'São Paulo'),
(2, 'João Souza', 'XYZ Industries', 876543210, 'Rio de Janeiro'),
(3, 'Rodrygo Santos', 'QRS Enterprises', 765432109, 'Belo Horizonte'),
(4, 'Ana Pereira', 'MNO Corporation', 654321098, 'Porto Alegre'),
(5, 'Carlos Oliveira', 'DEF Tech', 543210987, 'Brasília'),
(6, 'Luiza Mendes', 'TUV Solutions', 432109876, 'Recife'),
(7, 'André Alves', 'GHI Systems', 321098765, 'Fortaleza'),
(8, 'Fernanda Costa', 'JKL Services', 210987654, 'Salvador'),
(9, 'Roberto Silva', 'PQR Enterprises', 109876543, 'Curitiba'),
(10, 'Larissa Pereira', 'UVW Industries', 987654321, 'Manaus');

CREATE TABLE Produto (
    codigo INT AUTO_INCREMENT PRIMARY KEY,
    nome VARCHAR(255),
    marca VARCHAR(255),
    preco DECIMAL(10 , 2 ),
    dtVencimento DATE,
    quantidade INT,
    fornecedor INT NOT NULL,
    FOREIGN KEY (fornecedor)
        REFERENCES Fornecedor (codigo)
);

INSERT INTO produto (codigo, nome, marca, preco, dtVencimento, quantidade, fornecedor) VALUES
(1, 'Produto A', 'Marca X', 1000.00, '2023-06-30', 100, 1),
(2, 'Produto B', 'Marca Y', 500.00, '2023-07-15', 100, 2),
(3, 'Produto C', 'Marca Z', 750.00, '2023-08-20', 100, 3),
(4, 'Produto D', 'Marca X', 1200.00, '2024-07-31', 100, 4),
(5, 'Produto E', 'Marca Y', 800.00, '2024-06-25', 100, 5),
(6, 'Produto F', 'Marca Z', 900.00, '2024-08-10', 100, 6),
(7, 'Produto G', 'Marca X', 650.00, '2024-09-05', 100, 7),
(8, 'Produto H', 'Marca Y', 1100.00, '2024-07-30', 100, 8),
(9, 'Produto I', 'Marca Z', 300.00, '2024-06-15', 100, 9),
(10, 'Produto J', 'Marca X', 950.00, '2024-08-05', 100, 10);

CREATE TABLE Produtost (
    codigo INT AUTO_INCREMENT PRIMARY KEY,
    nome VARCHAR(255),
    marca VARCHAR(255),
    preco INT,
    dtVencimento DATE,
    quantidade INT,
    produto INT NOT NULL,
    FOREIGN KEY (produto)
        REFERENCES Produto (codigo)
);

INSERT INTO produtost (codigo, nome, marca, preco, dtVencimento, quantidade, produto) VALUES
(1, 'Produto A', 'Marca X', 1000, '2023-06-30', 1, 1),
(2, 'Produto B', 'Marca Y', 500, '2023-07-15', 1, 2),
(3, 'Produto C', 'Marca Z', 750, '2023-08-20', 1, 3),
(4, 'Produto D', 'Marca X', 1200, '2023-07-31', 1, 4),
(5, 'Produto E', 'Marca Y', 800, '2023-06-25', 5, 5);

CREATE TABLE venda (
    codigo INT(11) NOT NULL,
    cliente VARCHAR(256) NOT NULL,
    data TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP (),
    valor DECIMAL(65 , 2 ) NOT NULL DEFAULT 0.00,
    aberta TINYINT(1) NOT NULL DEFAULT 1
);

CREATE TABLE itemvenda (
    codigo INT NOT NULL,
    codigoVenda INT NOT NULL,
    codigoProduto INT NOT NULL,
    quantidade INT NOT NULL,
    precoVenda DECIMAL(65 , 2 ) NOT NULL DEFAULT 0.00
);

##=================================================================================================================================================================================================

## Procedures

##--------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------

## Filtrar vendas de uma determinada data

DELIMITER $$

CREATE PROCEDURE FiltrarVendasPorPeriodo(IN dataInicio DATE, IN dataFim DATE)
BEGIN
    SELECT codigo, cliente, data, valor, aberta
    FROM venda
    WHERE DATE(data) BETWEEN dataInicio AND dataFim;
END $$
DELIMITER ;

/*teste
CALL FiltrarVendasPorPeriodo('2023-08-01', '2023-08-25');
*/
##--------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------

## Calcular Total de Compras de um Cliente

DELIMITER $$
CREATE PROCEDURE ListarComprasCliente(IN nomeCliente VARCHAR(256))
BEGIN
    SELECT codigo, data, valor, aberta
    FROM venda
    WHERE cliente = nomeCliente;
END $$
DELIMITER ;

/*teste
CALL ListarComprasCliente('Atoa');
*/
##------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------

## Procedure que me diga a quantidade que foi vendida de determinado produto por nome

DELIMITER $$
CREATE PROCEDURE QuantidadeVendidaPorProduto(IN nomeProduto VARCHAR(255))
BEGIN
	
    SELECT SUM(iv.quantidade)
    FROM itemvenda iv
    JOIN Produto p ON iv.codigoProduto = p.codigo
    WHERE p.nome = nomeProduto;
END $$
DELIMITER ;

/*teste
CALL QuantidadeVendidaPorProduto('Produto A');
*/

## ---------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------

## Procedure para Listar Fornecedores e seus Produtos

DELIMITER $$
CREATE PROCEDURE ListarFornecedoresEProdutos(codigoFornecedor int)
BEGIN
    SELECT f.nome AS fornecedor, p.nome AS produto, p.marca, p.preco
    FROM Fornecedor f
    JOIN Produto p ON f.codigo = p.fornecedor
    where f.codigo = codigoFornecedor;
END $$
DELIMITER ;

/*teste
CALL ListarFornecedoresEProdutos(2);
*/

##===============================================================================================================================================================================================

## Triggers

## -------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------

-- Tabelas de backup
CREATE TABLE Cliente_Backup (
    codigo int,
    nome varchar(255),
    cpf bigint,
    endereco varchar(255),
    numero int,
    data_hora_backup timestamp default current_timestamp()
);

CREATE TABLE Fornecedor_Backup (
    codigo int,
    nome varchar(255),
    empresa varchar(255),
    contato int,
    cidade varchar(255),
    data_hora_backup timestamp default current_timestamp()
);

CREATE TABLE Produto_Backup (
    codigo int,
    nome varchar(255),
    marca varchar(255),
    preco decimal(10,2),
    dtVencimento varchar(255),
    fornecedor int,
    data_hora_backup timestamp default current_timestamp()
);
select * from venda ;
CREATE TABLE Produtost_Backup (
    codigo int,
    nome varchar(255),
    marca varchar(255),
    preco int,
    dtVencimento varchar(255),
    quantidade int,
    produto int,
    data_hora_backup timestamp default current_timestamp()
);

-- Trigger de backup para a tabela Cliente
DELIMITER $$
CREATE TRIGGER Cliente_Backup_Trigger
AFTER INSERT ON Cliente
FOR EACH ROW
BEGIN
    INSERT INTO Cliente_Backup (codigo, nome, cpf, endereco, numero)
    VALUES (NEW.codigo, NEW.nome, NEW.cpf, NEW.endereco, NEW.numero);
END;
$$
DELIMITER ;

-- Trigger de backup para a tabela Fornecedor
DELIMITER $$
CREATE TRIGGER Fornecedor_Backup_Trigger
AFTER INSERT ON Fornecedor
FOR EACH ROW
BEGIN
    INSERT INTO Fornecedor_Backup (codigo, nome, empresa, contato, cidade)
    VALUES (NEW.codigo, NEW.nome, NEW.empresa, NEW.contato, NEW.cidade);
END;
$$
DELIMITER ;

-- Trigger de backup para a tabela Produto
DELIMITER $$
CREATE TRIGGER Produto_Backup_Trigger
AFTER INSERT ON Produto
FOR EACH ROW
BEGIN
    INSERT INTO Produto_Backup (codigo, nome, marca, preco, dtVencimento, fornecedor)
    VALUES (NEW.codigo, NEW.nome, NEW.marca, NEW.preco, NEW.dtVencimento, NEW.fornecedor);
END;
$$
DELIMITER ;

-- Trigger de backup para a tabela Produtost
DELIMITER $$
CREATE TRIGGER Produtost_Backup_Trigger
AFTER INSERT ON Produtost
FOR EACH ROW
BEGIN
    INSERT INTO Produtost_Backup (codigo, nome, marca, preco, dtVencimento, quantidade, produto)
    VALUES (NEW.codigo, NEW.nome, NEW.marca, NEW.preco, NEW.dtVencimento, NEW.quantidade, NEW.produto);
END;
$$
DELIMITER ;

##-----------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------

## Trigger venda

DELIMITER $$
CREATE TRIGGER itemvendaafterinsert BEFORE INSERT ON itemvenda FOR EACH ROW BEGIN
    
    set new.precoVenda = 
        (select preco from produto where codigo = new.codigoProduto);

    update venda set valor = (valor + new.quantidade * new.precoVenda) 
        where codigo = new.codigoVenda;
        
END
$$
DELIMITER ;

## ----------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------

## Trigger para verificar a quantidade disponível de um produto antes de inserção na tabela itemvenda:

DELIMITER $$
CREATE TRIGGER VerificarQuantidadeProduto BEFORE INSERT ON itemvenda
FOR EACH ROW
BEGIN
    DECLARE estoque INT;
    SELECT quantidade INTO estoque
    FROM Produto
    WHERE codigo = NEW.codigoProduto;
    
    IF estoque < NEW.quantidade THEN
        SIGNAL SQLSTATE '45000'
        SET MESSAGE_TEXT = 'Quantidade insuficiente em estoque';
    END IF;
END $$
DELIMITER ;

## --------------------------------------------------------------------------------------------------------------

## Trigger para verificar a validade de um produto antes de inserção na tabela itemvenda

DELIMITER $$
CREATE TRIGGER VerificarValidadeProduto BEFORE INSERT ON itemvenda
FOR EACH ROW
BEGIN
    DECLARE vencimento DATE;
    SELECT dtVencimento INTO vencimento
    FROM Produto
    WHERE codigo = NEW.codigoProduto;
    
    IF vencimento < CURDATE() THEN
        SIGNAL SQLSTATE '45000'
        SET MESSAGE_TEXT = 'Produto vencido, não pode ser vendido';
    END IF;
END $$
DELIMITER ;

## ------------------------------------------------------------------------------------------------------------

## Trigger que atualiza a quantidade de produtos na tabela Produto sempre que uma venda é registrada na tabela itemvenda

DELIMITER $$
CREATE TRIGGER AtualizarQuantidadeProduto AFTER INSERT ON itemvenda
FOR EACH ROW
BEGIN
    UPDATE Produto
    SET quantidade = quantidade - NEW.quantidade
    WHERE codigo = NEW.codigoProduto;
END $$
DELIMITER ;

## ==============================================================================================================================================================================================

## Views

## --------------------------------------------------------------------------------------------------------------

## View para mostrar detalhes das vendas, incluindo informações sobre o cliente e produtos vendidos

CREATE VIEW DetalhesVendas AS
SELECT v.codigo AS codigo_venda, v.cliente, v.data, v.valor, v.aberta,
       iv.codigo AS codigo_item, p.nome AS produto, iv.quantidade, iv.precoVenda
FROM venda v
JOIN itemvenda iv ON v.codigo = iv.codigoVenda
JOIN Produto p ON iv.codigoProduto = p.codigo;

## --------------------------------------------------------------------------------------------------------------

## View para mostrar os produtos com data de vencimento próxima

CREATE VIEW ProdutosProximosVencimento AS
SELECT codigo, nome, marca, dtVencimento
FROM Produto
WHERE dtVencimento >= CURDATE() AND dtVencimento <= CURDATE() + INTERVAL 30 DAY;

## --------------------------------------------------------------------------------------------------------------

## View para mostrar os fornecedores e os produtos que eles forneceram

CREATE VIEW FornecedoresProdutos AS
SELECT f.codigo AS codigo_fornecedor, f.nome AS nome_fornecedor, f.empresa,
       p.codigo AS codigo_produto, p.nome AS nome_produto, p.marca
FROM Fornecedor f
JOIN Produto p ON f.codigo = p.fornecedor;

## --------------------------------------------------------------------------------------------------------------

## View para mostrar o total de compras de cada cliente

CREATE VIEW TotalComprasCliente AS
SELECT c.codigo AS codigo_cliente, c.nome AS nome_cliente, COUNT(*) AS total_compras
FROM Cliente c
JOIN venda v ON c.nome = v.cliente
GROUP BY c.codigo, c.nome
ORDER BY total_compras DESC;

## ==============================================================================================================

## Procedures

ALTER TABLE venda
  ADD PRIMARY KEY (codigo);

ALTER TABLE itemvenda
  ADD PRIMARY KEY (codigo),
  ADD KEY codigoVenda (codigoVenda),
  ADD KEY codigoProduto (codigoProduto);
  
  ALTER TABLE venda
  MODIFY codigo int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
  
  ALTER TABLE itemvenda
  MODIFY codigo int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=52;
  
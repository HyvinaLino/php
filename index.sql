CREATE TABLE produtos (
    id INT PRIMARY KEY AUTO_INCREMENT,
    nome VARCHAR(255) NOT NULL,
    codigoBarras VARCHAR(20) UNIQUE NOT NULL,
    preco1 DECIMAL(10,2) NOT NULL,
    preco2 DECIMAL(10,2) NOT NULL,
    descricao TEXT,
    categoria VARCHAR(50)
);
CREATE DATABASE integrador CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci;
USE integrador;

-- ========== TABELAS ==========

CREATE TABLE usuario(
    idUsuario INT PRIMARY KEY AUTO_INCREMENT,
    nome VARCHAR(100) NOT NULL,
    telefone VARCHAR(15),
    email VARCHAR(100) NOT NULL UNIQUE,
    senha VARCHAR(100) NOT NULL
);

CREATE TABLE objetos(
    idObjeto INT PRIMARY KEY AUTO_INCREMENT,
    nome VARCHAR(100) NOT NULL,
    descricao VARCHAR(255),
    categoria ENUM('Acessórios', 'Bolsas e Mochilas', 'Documentos', 'Eletrônicos', 'Roupas', 'Outros') NOT NULL,
    imagemObjeto VARCHAR(20),
    status_objeto ENUM('Encontrado', 'Perdido', 'Abandonado') NOT NULL
);

CREATE TABLE pontoColeta(
    idEndereco INT PRIMARY KEY AUTO_INCREMENT,
    logradouro VARCHAR(100) NOT NULL,
    numero INT,
    bairro VARCHAR(100),
    cidade VARCHAR(100),
    estado VARCHAR(100),
    pais VARCHAR(100)
);

CREATE TABLE retirada(
    id INT PRIMARY KEY AUTO_INCREMENT,
    nomeUsuario INT NOT NULL,
    nomeObjeto INT NOT NULL,
    localEndereco INT NOT NULL,
    descricao VARCHAR(255),
    FOREIGN KEY (nomeUsuario)   REFERENCES usuario(idUsuario),
    FOREIGN KEY (nomeObjeto)    REFERENCES objetos(idObjeto),
    FOREIGN KEY (localEndereco) REFERENCES pontoColeta(idEndereco)
);

-- ========== DADOS ==========

INSERT INTO usuario (nome, telefone, email, senha) VALUES
('Ana Souza',      '11987654321', 'ana.souza@email.com',      SHA2('ana@123', 256)),
('Bruno Lima',     '11976543210', 'bruno.lima@email.com',     SHA2('bruno@123', 256)),
('Carla Mendes',   '11965432109', 'carla.mendes@email.com',   SHA2('carla@123', 256)),
('Diego Santos',   '11954321098', 'diego.santos@email.com',   SHA2('diego@123', 256)),
('Elisa Ferreira', '11943210987', 'elisa.ferreira@email.com', SHA2('elisa@123', 256));

INSERT INTO objetos (nome, descricao, categoria, imagemObjeto, status_objeto) VALUES
('Carteira',           'Carteira de couro preta com documentos',        'Documentos',        '💳', 'Perdido'),
('Celular',            'iPhone com capa azul',                          'Eletrônicos',       '📱', 'Encontrado'),
('Chave',              'Chaveiro com 3 chaves e um pingente',           'Acessórios',        '🔑', 'Encontrado'),
('Mochila',            'Mochila cinza com notebook dentro',             'Bolsas e Mochilas', '👜', 'Perdido'),
('Guarda-chuva',       'Guarda-chuva preto automático',                 'Acessórios',        '🌂', 'Abandonado'),
('Óculos de grau',     'Óculos com armação preta e estojo azul',        'Acessórios',        '👓', 'Perdido'),
('Relógio',            'Relógio de pulso prata com pulseira de metal',  'Acessórios',        '⌚', 'Encontrado'),
('Bolsa',              'Bolsa marrom de alça longa com zíper dourado',  'Bolsas e Mochilas', '👜', 'Perdido'),
('Mochila escolar',    'Mochila azul com estojo e cadernos dentro',     'Bolsas e Mochilas', '👜', 'Encontrado'),
('Pochete',            'Pochete preta com fecho de pressão',            'Bolsas e Mochilas', '👜', 'Perdido'),
('RG',                 'RG em nome de Marcos Oliveira',                 'Documentos',        '💳', 'Encontrado'),
('CNH',                'Carteira de habilitação categoria B',           'Documentos',        '💳', 'Perdido'),
('Cartão de crédito',  'Cartão Nubank roxo',                            'Documentos',        '💳', 'Encontrado'),
('Fone de ouvido',     'Fone bluetooth branco na caixinha',             'Eletrônicos',       '🎧', 'Perdido'),
('Notebook',           'Notebook cinza de 14 polegadas com capa',       'Eletrônicos',       '💻', 'Encontrado'),
('Carregador',         'Carregador de celular branco com cabo USB-C',   'Eletrônicos',       '📱', 'Perdido'),
('Casaco',             'Casaco de moletom cinza tamanho M',             'Roupas',            '🧥', 'Abandonado'),
('Boné',               'Boné preto com aba reta',                       'Roupas',            '🧢', 'Perdido'),
('Cachecol',           'Cachecol de lã vermelho',                       'Roupas',            '🧥', 'Abandonado'),
('Garrafa térmica',    'Garrafa térmica azul de 500 ml',                'Outros',            '🥤', 'Perdido'),
('Bola de futebol',    'Bola de futebol branca e preta',                'Outros',            '⚽', 'Encontrado'),
('Patins',             'Patins rosa tamanho 36',                        'Outros',            '🛼', 'Perdido'),
('Videogame portátil', 'Videogame portátil preto com capa',             'Outros',            '🎮', 'Encontrado'),
('Ursinho de pelúcia', 'Ursinho marrom com laço vermelho',              'Outros',            '🧸', 'Perdido'),
('Caixa de chocolates','Caixa de chocolates fechada',                   'Outros',            '🍫', 'Abandonado'),
('Batom',              'Batom vermelho na necessaire',                  'Acessórios',        '💄', 'Perdido'),
('Anel',               'Anel dourado com pedra azul',                   'Acessórios',        '💍', 'Encontrado'),
('Câmera',             'Câmera digital preta com alça',                 'Eletrônicos',       '📷', 'Perdido'),
('Livro',              'Livro de capa azul com marca-página',           'Documentos',        '📚', 'Encontrado'),
('Agenda',             'Agenda preta com anotações',                    'Documentos',        '📓', 'Perdido'),
('Caneta',             'Caneta tinteiro prateada',                      'Documentos',        '🖊', 'Abandonado'),
('Martelo',            'Martelo com cabo de madeira',                   'Outros',            '🔨', 'Perdido');

INSERT INTO pontoColeta (logradouro, numero, bairro, cidade, estado, pais) VALUES
('Rua das Flores',       120, 'Centro',        'Santo André',           'São Paulo', 'Brasil'),
('Avenida Industrial',   450, 'Jardim',        'Santo André',           'São Paulo', 'Brasil'),
('Rua Marechal Deodoro',  85, 'Centro',        'São Bernardo do Campo', 'São Paulo', 'Brasil'),
('Avenida Paulista',     900, 'Bela Vista',    'São Paulo',             'São Paulo', 'Brasil'),
('Rua Sete de Setembro',  33, 'Vila Assunção', 'Santo André',           'São Paulo', 'Brasil');

-- Retiradas: só de objetos com status Encontrado (ids 2, 3, 7, 9, 11)
INSERT INTO retirada (nomeUsuario, nomeObjeto, localEndereco, descricao) VALUES
(1,  2, 2, 'Retirada do celular no setor de achados'),
(2,  3, 3, 'Retirada da chave na portaria'),
(3,  7, 1, 'Retirada do relógio na recepção'),
(4,  9, 4, 'Retirada da mochila escolar no balcão'),
(5, 11, 5, 'Retirada do RG na secretaria');

-- ========== CONFERÊNCIA ==========

SELECT status_objeto, COUNT(*) AS total FROM objetos GROUP BY status_objeto;

SELECT categoria, COUNT(*) AS total FROM objetos GROUP BY categoria;

SELECT r.id, u.nome AS usuario, o.imagemObjeto AS emoji, o.nome AS objeto, p.logradouro, r.descricao
FROM retirada r
JOIN usuario u      ON u.idUsuario  = r.nomeUsuario
JOIN objetos o      ON o.idObjeto   = r.nomeObjeto
JOIN pontoColeta p  ON p.idEndereco = r.localEndereco;
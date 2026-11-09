CREATE DATABASE integrador;
USE integrador;

-- ========== TABELAS ==========

CREATE TABLE usuarios(
    id INT PRIMARY KEY AUTO_INCREMENT,
    nome VARCHAR(100),
    telefone VARCHAR(15),
    email VARCHAR(100),
    senha VARCHAR(100)
);

CREATE TABLE objetos(
    id INT PRIMARY KEY AUTO_INCREMENT,
    nome VARCHAR(100),
    status_objeto VARCHAR(100),
    descricao VARCHAR(100),
    categoria VARCHAR(50)
);

CREATE TABLE endereco(
    id INT PRIMARY KEY AUTO_INCREMENT,
    logradouro VARCHAR(100),
    numero INT,
    bairro VARCHAR(100),
    cidade VARCHAR(100),
    estado VARCHAR(100),
    pais VARCHAR(100)
);

CREATE TABLE retirada(
    id INT PRIMARY KEY AUTO_INCREMENT,
    nome VARCHAR(100),
    descricao VARCHAR(100),
    endereco VARCHAR(100)
);

-- ========== DADOS ==========

INSERT INTO usuarios (nome, telefone, email, senha) VALUES
('Ana Souza',      '11987654321', 'ana.souza@email.com',      SHA2('ana@123', 256)),
('Bruno Lima',     '11976543210', 'bruno.lima@email.com',     SHA2('bruno@123', 256)),
('Carla Mendes',   '11965432109', 'carla.mendes@email.com',   SHA2('carla@123', 256)),
('Diego Santos',   '11954321098', 'diego.santos@email.com',   SHA2('diego@123', 256)),
('Elisa Ferreira', '11943210987', 'elisa.ferreira@email.com', SHA2('elisa@123', 256));

INSERT INTO objetos (nome, status_objeto, descricao, categoria) VALUES
('Carteira',          'Perdido',    'Carteira de couro preta com documentos',        'Documentos'),
('Celular',           'Encontrado', 'iPhone com capa azul',                          'Eletrônicos'),
('Chave',             'Encontrado', 'Chaveiro com 3 chaves e um pingente',           'Acessórios'),
('Mochila',           'Perdido',    'Mochila cinza com notebook dentro',             'Bolsas e Mochilas'),
('Guarda-chuva',      'Abandonado', 'Guarda-chuva preto automático',                 'Acessórios'),
('Óculos de grau',    'Perdido',    'Óculos com armação preta e estojo azul',        'Acessórios'),
('Relógio',           'Encontrado', 'Relógio de pulso prata com pulseira de metal',  'Acessórios'),
('Bolsa',             'Perdido',    'Bolsa marrom de alça longa com zíper dourado',  'Bolsas e Mochilas'),
('Mochila escolar',   'Encontrado', 'Mochila azul com estojo e cadernos dentro',     'Bolsas e Mochilas'),
('Pochete',           'Perdido',    'Pochete preta com fecho de pressão',            'Bolsas e Mochilas'),
('RG',                'Encontrado', 'RG em nome de Marcos Oliveira',                 'Documentos'),
('CNH',               'Perdido',    'Carteira de habilitação categoria B',           'Documentos'),
('Cartão de crédito', 'Encontrado', 'Cartão Nubank roxo',                            'Documentos'),
('Fone de ouvido',    'Perdido',    'Fone bluetooth branco na caixinha',             'Eletrônicos'),
('Notebook',          'Encontrado', 'Notebook cinza de 14 polegadas com capa',       'Eletrônicos'),
('Carregador',        'Perdido',    'Carregador de celular branco com cabo USB-C',   'Eletrônicos'),
('Casaco',            'Abandonado', 'Casaco de moletom cinza tamanho M',             'Roupas'),
('Boné',              'Perdido',    'Boné preto com aba reta',                       'Roupas'),
('Cachecol',          'Abandonado', 'Cachecol de lã vermelho',                       'Roupas');

INSERT INTO endereco (logradouro, numero, bairro, cidade, estado, pais) VALUES
('Rua das Flores',       120, 'Centro',        'Santo André',           'São Paulo', 'Brasil'),
('Avenida Industrial',   450, 'Jardim',        'Santo André',           'São Paulo', 'Brasil'),
('Rua Marechal Deodoro',  85, 'Centro',        'São Bernardo do Campo', 'São Paulo', 'Brasil'),
('Avenida Paulista',     900, 'Bela Vista',    'São Paulo',             'São Paulo', 'Brasil'),
('Rua Sete de Setembro',  33, 'Vila Assunção', 'Santo André',           'São Paulo', 'Brasil');

INSERT INTO retirada (nome, descricao, endereco) VALUES
('Ana Souza',      'Retirada de carteira na recepção',         'Rua das Flores, 120 - Centro, Santo André'),
('Bruno Lima',     'Retirada de celular no setor de achados',  'Avenida Industrial, 450 - Jardim, Santo André'),
('Carla Mendes',   'Retirada de chave na portaria',            'Rua Marechal Deodoro, 85 - Centro, São Bernardo do Campo'),
('Diego Santos',   'Retirada de mochila no balcão',            'Avenida Paulista, 900 - Bela Vista, São Paulo'),
('Elisa Ferreira', 'Retirada de guarda-chuva na secretaria',   'Rua Sete de Setembro, 33 - Vila Assunção, Santo André');


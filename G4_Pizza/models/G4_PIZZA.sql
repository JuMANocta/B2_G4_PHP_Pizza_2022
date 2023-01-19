CREATE user IF NOT EXISTS g4_pizza;
GRANT ALL PRIVILEGES ON g4_pizza.* TO 'g4_pizza'@'localhost' IDENTIFIED BY 'g4_pizza';
FLUSH PRIVILEGES;

CREATE DATABASE IF NOT EXISTS g4_pizza;

USE g4_pizza;

CREATE TABLE IF NOT EXISTS client(
    id_client INT PRIMARY KEY AUTO_INCREMENT,
    nom VARCHAR(50) NOT NULL,
    prenom VARCHAR(50) NOT NULL,
    adresse VARCHAR(100) NOT NULL,
    portable VARCHAR(10) NOT NULL,
    email VARCHAR(50) NOT NULL
);

INSERT INTO client(nom, prenom, adresse, portable, email)
VALUES
('DUPONT', 'Jean', '1 rue de la paix', '0606060606', 'es@es.cd'),
('DURAND', 'Pierre', '2 rue de la paix', '0606060606', 'dur@pie.fd'),
('EMERY', 'Paul', '3 rue de la paix', '0606060606', 'em@fd.fr');

DROP TABLE IF EXISTS pizza;
CREATE TABLE IF NOT EXISTS pizza(
    id_pizza INT PRIMARY KEY AUTO_INCREMENT,
    nom VARCHAR(50) NOT NULL,
    prix DECIMAL(5,2) NOT NULL
);

INSERT INTO pizza(nom, prix) 
VALUES
('Margherita', 8.50),
('Reine', 9.50),
('4 fromages', 10.50),
('Calzone', 11.50),
('Hawaienne', 12.50),
('Vegetarienne', 13.50);

CREATE TABLE IF NOT EXISTS livreur(
    id_livreur INT PRIMARY KEY AUTO_INCREMENT,
    nom VARCHAR(50) NOT NULL,
    prenom VARCHAR(50) NOT NULL,
    portable VARCHAR(10) NOT NULL,
    email VARCHAR(50) NOT NULL
);

INSERT INTO livreur(nom, prenom, portable, email)
VALUES
('DUPONT', 'Jean', '0606060606', 'a@a.com'),
('DURAND', 'Pierre', '0606060606', 'pierre@sd.lm'),
('EMERY', 'Paul', '0606060606', 'emery@paul.vf'),
('MAN', 'Jul', '0606060606', 'man@jul.com');

CREATE TABLE IF NOT EXISTS vehicule(
    id_vehicule INT PRIMARY KEY AUTO_INCREMENT,
    immatriculation VARCHAR(10) NOT NULL,
    marque VARCHAR(50) NOT NULL,
    modele VARCHAR(50) NOT NULL
);

INSERT INTO vehicule(immatriculation, marque, modele)
VALUES
('LB-123-MD', 'GEOT', 'Partner'),
('KC-901-CN', 'KIA', 'Rio'),
('JD-234-FF', 'RENU', 'Stamp'),
('IF-567-GT', 'FORD', 'Kuga'),
('HG-890-PO', 'CEDES', 'Mxs');

CREATE TABLE IF NOT EXISTS commande(
    id_commande INT PRIMARY KEY AUTO_INCREMENT,
    id_client INT NOT NULL,
    id_pizza INT NOT NULL,
    id_livreur INT NOT NULL,
    id_vehicule INT NOT NULL,
    date_commande DATETIME NOT NULL,
    FOREIGN KEY (id_client) REFERENCES client(id_client),
    FOREIGN KEY (id_pizza) REFERENCES pizza(id_pizza),
    FOREIGN KEY (id_livreur) REFERENCES livreur(id_livreur),
    FOREIGN KEY (id_vehicule) REFERENCES vehicule(id_vehicule)
);

CREATE TABLE IF NOT EXISTS users(
    id INT PRIMARY KEY AUTO_INCREMENT,
    login VARCHAR(50) UNIQUE NOT NULL,
    password VARCHAR(255) NOT NULL,
    email VARCHAR(50) NOT NULL,
    role VARCHAR(50) NOT NULL,
    created_at DATETIME NOT NULL,
    updated_at DATETIME NOT NULL
);

INSERT INTO users(login, password, email, role, created_at, updated_at)
VALUES
('admin', 'c7ad44cbad762a5da0a452f9e854fdc1e0e7a52a38015f23f3eab1d80b931dd472634dfac71cd34ebc35d16ab7fb8a90c81f975113d6c7538dc69dd8de9077ec', 'admin@admin.com','ADMIN', '2020-01-01 08:00:00', '2023-01-01 08:05:00'),
('secretaire', 'c9c034c7cc59a9375f30726d9cbc96cf99d336a7416ec71e3133ec95889edb8494b6c24708d0183a1bcaeeb57f614c50f84495cf066cd52743b5730e345a09ec', 'sec@sec.sec','SECRETAIRE', '2021-01-01 13:00:00', '2023-01-01 13:00:00');

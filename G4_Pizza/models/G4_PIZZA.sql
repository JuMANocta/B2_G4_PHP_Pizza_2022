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

CREATE TABLE IF NOT EXISTS vehicule(
    id_vehicule INT PRIMARY KEY AUTO_INCREMENT,
    immatriculation VARCHAR(10) NOT NULL,
    marque VARCHAR(50) NOT NULL,
    modele VARCHAR(50) NOT NULL
);

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

-- créer une table dans la base de données pour objectif de gérer les connexions au site.
-- Vous devez créer la requete sql pour le faire et me démontrer vos choix d'utilisation des colonnes et des types de données

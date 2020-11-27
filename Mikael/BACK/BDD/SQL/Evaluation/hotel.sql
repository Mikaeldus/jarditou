CREATE DATABASE HOTEL; USE HOTEL;

CREATE TABLE Client(
		cli_num INT PRIMARY KEY NOT NULL AUTO_INCREMENT,
		cli_nom VARCHAR (50) NOT NULL,
		cli_adresse VARCHAR (50) NOT NULL,
		cli_tel VARCHAR (30) NOT NULL
);

CREATE TABLE Commande(
		com_num INT PRIMARY KEY NOT NULL AUTO_INCREMENT,
		cli_num INT NOT NULL,
		com_date datetime NOT NULL,
		com_obs VARCHAR (50) NULL
);

CREATE TABLE Produit(
		pro_num INT PRIMARY KEY NOT NULL AUTO_INCREMENT,
		pro_libelle VARCHAR (50) NOT NULL,
		pro_description VARCHAR (50) NOT NULL
);

CREATE TABLE est_compose(
		com_num INT NOT NULL,
		pro_num INT NOT NULL,
		est_qte INT NULL
		,PRIMARY KEY (com_num, pro_num)
);		

ALTER TABLE Commande
ADD CONSTRAINT Commande_Client_FK FOREIGN KEY (cli_num) REFERENCES CLIENT(cli_num);

ALTER TABLE est_compose
ADD CONSTRAINT est_compose_Commande_FK FOREIGN KEY (com_num) REFERENCES Commande(com_num);

ALTER TABLE est_compose
ADD CONSTRAINT est_compose_Produit_FK FOREIGN KEY (pro_num) REFERENCES Produit(pro_num);

CREATE INDEX Mikael ON Client (cli_nom);

-- je creer mes tables, colonnes, AUTO_INCREMENT pour les clefs primary, différentes valeurs NULL pour autoriser les champs vide, NOT NULL pour ne pas autoriser les champs vide, 
-- VARCHAR pour des données de type caractère et INT pour des données de type numérique.
-- Ensuite je relie mes tables avec des clefs étrangère.
-- Et je creer l'INDEX mikael dans la table Client et part rapport à la colonne cli_nom.  
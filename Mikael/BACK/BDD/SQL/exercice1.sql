CREATE DATABASE exo1; USE exo1;
CREATE TABLE station(
		num_station INT NOT NULL,
		nom_station VARCHAR (50) NOT NULL, 
		PRIMARY KEY (num_station)
);
CREATE TABLE hotel(
		capacite_hotel VARCHAR (50) NOT NULL,
		categorie_hotel VARCHAR (50) NOT NULL,
		nom_hotel VARCHAR (50) NOT NULL,
		adresse_hotel VARCHAR (50) NOT NULL,
		num_hotel INT NOT NULL,
		num_station INT NOT NULL, 
		PRIMARY KEY (num_hotel)
);
CREATE TABLE chambre(
		capacite_chambre VARCHAR (50) NOT NULL,
		degre_confort VARCHAR (50) NOT NULL,
		exposition VARCHAR (50) NOT NULL,
		type_chambre VARCHAR (50) NOT NULL,
		num_chambre INT NOT NULL,
		num_hotel INT NOT NULL, 
		PRIMARY KEY (num_chambre) 
);
CREATE TABLE reservation(
		num_chambre INT NOT NULL,
		num_client INT NOT NULL,
		date_debut VARCHAR (50) NOT NULL,
		date_fin VARCHAR (50) NOT NULL,
		date_reservation VARCHAR (50) NOT NULL,
		montant_arrhes VARCHAR (50) NOT NULL,
		prix_total VARCHAR (50) NOT NULL, 
		PRIMARY KEY (num_chambre,num_client)
);
CREATE TABLE Client(
		adress_client VARCHAR (50) NOT NULL,
		nom_client VARCHAR (50) NOT NULL,
		prenom_client VARCHAR (50) NOT NULL,
		num_client INT NOT NULL, 
		PRIMARY KEY (num_client)
);

ALTER TABLE hotel
ADD FOREIGN KEY (num_station) REFERENCES station(num_station);

ALTER TABLE chambre
ADD FOREIGN KEY (num_hotel) REFERENCES hotel(num_hotel);

ALTER TABLE reservation
ADD FOREIGN KEY (num_chambre) REFERENCES chambre(num_chambre);

ALTER TABLE reservation
ADD FOREIGN KEY (num_client) REFERENCES client(num_client);

 

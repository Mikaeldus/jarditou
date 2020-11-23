CREATE DATABASE exo1; USE exo1;

CREATE TABLE station(
		sta_num_station INT PRIMARY KEY NOT NULL AUTO_INCREMENT,
		sta_nom_station VARCHAR (50) NOT NULL
);

CREATE TABLE hotel(
		hot_capacite_hotel VARCHAR (50) NOT NULL,
		hot_categorie_hotel VARCHAR (50) NOT NULL,
		hot_nom_hotel VARCHAR (50) NOT NULL,
		hot_adresse_hotel VARCHAR (50) NOT NULL,
		hot_num_hotel INT NOT NULL PRIMARY KEY,
		sta_num_station INT NOT NULL 
);

CREATE TABLE chambre(
		cham_capacite_chambre VARCHAR (50) NOT NULL,
		cham_degre_confort VARCHAR (50) NOT NULL,
		cham_exposition VARCHAR (50) NOT NULL,
		cham_type_chambre VARCHAR (50) NOT NULL,
		cham_num_chambre INT NOT NULL PRIMARY KEY,
		hot_num_hotel INT NOT NULL  
);

CREATE TABLE reservation(
		cham_num_chambre INT NOT NULL,
		cli_num_client INT NOT NULL,
		reser_date_debut VARCHAR (50) NOT NULL,
		reser_date_fin VARCHAR (50) NOT NULL,
		reser_date_reservation VARCHAR (50) NOT NULL,
		reser_montant_arrhes VARCHAR (50) NOT NULL,
		reser_prix_total VARCHAR (50) NOT NULL 
		,PRIMARY KEY (cham_num_chambre,cli_num_client)
);
CREATE TABLE Client(
		cli_adress_client VARCHAR (50) NOT NULL,
		cli_nom_client VARCHAR (50) NOT NULL,
		cli_prenom_client VARCHAR (50) NOT NULL,
		cli_num_client INT NOT NULL PRIMARY KEY
);

ALTER TABLE hotel
ADD CONSTRAINT hotel_station_FK FOREIGN KEY (sta_num_station) REFERENCES station(sta_num_station);

ALTER TABLE chambre
ADD CONSTRAINT chambre_hotel_FK FOREIGN KEY (hot_num_hotel) REFERENCES hotel(hot_num_hotel);

ALTER TABLE reservation
ADD CONSTRAINT reservation_chambre_FK FOREIGN KEY (cham_num_chambre) REFERENCES chambre(cham_num_chambre);

ALTER TABLE reservation
ADD CONSTRAINT reservation_client_FK FOREIGN KEY (cli_num_client) REFERENCES Client(cli_num_client);




 

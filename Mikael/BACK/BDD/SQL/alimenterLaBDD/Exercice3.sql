INSERT INTO fournis (numfou, nomfou, ruefou, posfou, vilfou, confou, satisf)
VALUES (120, 'GROBRIGAN','20 rue du papier', 92200, 'papercity', 'Georges', 8),
		 (540, 'ECLIPSE', '53 rue laisse flotter les rubans', 78250, 'Bugbugville', 'Nestor', 7),
		 (8700, 'MEDICIS', '120 rue des plantes', 75014, 'Paris', 'LIson', 0),
		 (9120, 'DISCOBOL', '11 rue des sports', 85100, 'La Roche sur Yon', 'Hercule', 8),
		 (9150, 'DEPANPAP', '26 avenue des locomotives', 59987, 'Coroncountry', 'Pollux', 5),
		 (9180, 'HURRYTAPE', '68 boulevard des octets', 4044, 'Dumpville', 'Track', 0);

INSERT INTO entcom (numcom, obscom,datcom,numfou)
VALUE (70010,'' , '2018:04:23 15:59:51', 120),
	(70011, 'Commande urgente', '2018-04-23 15:59:51', 540),
	(70020, '', '2018-04-23 15:59:51', 9120),
	(70025, 'Commande urgente', '2018-04-23 15:59:51', 9150),
	(70210, 'Commande cadencée', '2018-04-23 15:59:51', 120),
	(70250, 'Commande cadencée', '2018-04-23 15:59:51', 8700),
	(70300, '', '2018-04-23 15:59:51', 9120),
	(70620, '', '2018-04-23 15:59:51', 540),
	(70625, '', '2018-04-23 15:59:51', 120),
	(70629, '', '2018-04-23 15:59:51', 9180);

LOAD DATA LOCAL INFILE 'C:\\Users\\Mikael\\Downloads\\vente.csv'
INTO TABLE vente
FIELDS TERMINATED BY ';' 
LINES TERMINATED BY '\r\n'
IGNORE 1 LINES
(NUMFOU,CODART,DELLIV,QTE1,PRIX1,QTE2,PRIX2,QTE3,PRIX3);

INSERT INTO ligcom(numcom, numlig, codart, qtecde, priuni, qteliv, derliv)
VALUES (70010, 1, 'I100', 3000, 470, 3000, '2007:03:15'),
		 (70010, 2, 'I105', 2000, 485, 2000, '2007:07:05'),
		 (70010, 3, 'I108', 1000, 680, 1000, '2007:08:20'),
		 (70010, 4, 'D035', 200, 40, 250, '2007:02:20'),
		 (70010, 5, 'P220', 6000, 3500, 6000, '2007:03:31'),
		 (70010, 6, 'P240', 6000, 2000, 2000, '2007:03:31'),
		 (70011, 1, 'I105', 1000, 600, 1000, '2007:05:16'),
		 (70011, 2, 'P220', 10000, 3500, 10000, '2007:08:31'),
		 (70020, 1, 'B001', 200, 140, 0,'2007:12:31'),
		 (70020, 2, 'B002', 200, 140, 0, '2007:12:31'),
		 (70025, 1, 'I100', 1000, 590, 1000, '2007:05:15'),
		 (70025, 2, 'I105', 500, 590, 500, '2007:03:15'),
		 (70210, 1, 'I100', 1000, 470, 1000, '2007:03:15'),
		 (70250, 1, 'P230', 15000, 4900, 12000, '2007:12:15'),
		 (70250, 2, 'P220', 10000, 3350, 10000, '2007:11:10'),
		 (70300, 1, 'I100', 50, 790, 50, '2007:10:31'),
		 (70620, 1, 'I105', 200, 600, 200, '2007:11:01'),
		 (70625, 1, 'I100', 1000, 470, 1000, '2007:10:15'),
		 (70625, 2, 'P220', 10000, 3500, 10000, '2007:12:31'),
		 (70629, 1, 'B001', 200, 140, 0, '2007:12:31'),
		 (70629, 2, 'B002', 200, 140, 0, '2007:12:31');

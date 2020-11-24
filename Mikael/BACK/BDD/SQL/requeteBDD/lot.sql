---------------LOT1------------------

-- 1 - Afficher la liste des hôtels. Le résultat doit faire apparaître le nom de l’hôtel et la ville
SELECT hot_nom FROM hotel
-- permet de voir tous les noms des hotels de la hotel--

--Afficher la ville de résidence de Mr White Le résultat doit faire apparaître le nom, le prénom, et l'adresse du client
SELECT cli_nom, cli_prenom, cli_adresse FROM hotel.client
WHERE cli_nom LIKE 'wh%'
-- permet d'afficher la ligne avec tous les noms commançant part 'wh', dans cette exemple on rechercher 'white' -----

--3 - Afficher la liste des stations dont l’altitude < 1000 Le résultat doit faire apparaître le nom de la station et l'altitude
SELECT sta_nom, sta_altitude FROM hotel.station
WHERE sta_altitude <= 1000
-- permet d'afficher le nom et l'altitude des station inférieur ou égale à 1000 ----

--4 - Afficher la liste des chambres ayant une capacité > 1 Le résultat doit faire apparaître le numéro de la chambre ainsi que la capacité
SELECT cha_numero, cha_capacite FROM hotel.chambre
WHERE cha_capacite >1
-- permet d'afficher les chambre ayant une capacité supérieur à 1

--5 - Afficher les clients n’habitant pas à Londre Le résultat doit faire apparaître le nom du client et la ville
SELECT cli_nom, cli_ville FROM hotel.client
WHERE cli_ville NOT LIKE 'LON%'
-- permet d'afficher tous les clients avec leur ville, qui n'habite pas Londre.

--6 - Afficher la liste des hôtels située sur la ville de Bretou et possédant une catégorie>3 Le résultat doit faire apparaître le nom de l'hôtel, ville et la catégorie
SELECT hot_nom, hot_categorie, hot_ville FROM hotel.hotel
WHERE hot_categorie in (3)
-- permet d'indiquer toutes les lignes ou le champ categorie est "3"

---------------LOT2------------------

--7 - Afficher la liste des hôtels avec leur station Le résultat doit faire apparaître le nom de la station, le nom de l’hôtel, la catégorie, la ville)

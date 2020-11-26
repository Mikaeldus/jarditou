-----------LES BESOINS D’AFFICHAGE-------------*

--1.Quelles sont les commandes du fournisseur 09120?
SELECT numcom
FROM entcom
WHERE numfou = '9120'

--2.Afficher le code des fournisseurs pour lesquels des commandes ont été passées.
SELECT fournis.numfou
FROM entcom
JOIN fournis ON entcom.numfou = fournis.numfou 
GROUP BY fournis.numfou
 

--3.Afficher le nombre de commandes fournisseurs passées, et le nombre de fournisseur concernés.
SELECT fournis.numfou, COUNT(entcom.numcom)
FROM entcom
JOIN fournis ON entcom.numfou = fournis.numfou 
GROUP BY fournis.numfou

--4.Editer les produits ayant un stock inférieur ou égal au stock d'alerte et dont la quantité annuelle est inférieur est inférieure à1000 (informations à fournir : n° produit, libelléproduit, stock, stockactuel d'alerte, quantitéannuelle)
SELECT codart, libart, stkale, stkphy, qteann
FROM produit
WHERE stkphy <= stkale

--5.Quels sont les fournisseurs situés dans les départements 75 78 92 77 ? L’affichage (département, nom fournisseur) sera effectué par département décroissant, puis par ordre alphabétique
SELECT posfou,nomfou  
FROM entcom 
JOIN fournis ON entcom.numfou = fournis.numfou
WHERE fournis.posfou LIKE '75%'                                                 
OR fournis.posfou LIKE '78%'                        
OR fournis.posfou LIKE '77%' 
OR fournis.posfou LIKE '92%'
GROUP BY fournis.numfou
ORDER BY posfou DESC, nomfou ASC

--6.Quelles sont les commandes passées au mois de mars et avril?
SELECT ligcom.numcom, derliv
FROM ligcom
WHERE MONTH(derliv) BETWEEN 3 AND 4

UNION 

SELECT entcom.numcom, datcom
FROM entcom
WHERE MONTH(datcom) BETWEEN 3 AND 4
GROUP BY entcom.numcom
--Apres avoir recompter pour vérifier il manque juste une commande en 70010 ----

--7.Quelles sont les commandes du jour qui ont des observations particulières ?(Affichage numéro de commande, date de commande)
SELECT numcom, datcom, obscom 
FROM entcom
WHERE obscom LIKE 'com%' 
AND YEAR(datcom) = DAY (CURRENT_TIMESTAMP)

--8. Lister le total de chaque commande par total décroissant (Affichage numéro de commande et total)
SELECT numcom, SUM(qtecde * priuni) AS total
FROM ligcom  
GROUP BY numcom 
ORDER BY total DESC

--9. Lister les commandesdont le total est supérieur à 10000€; on exclura dans le calcul du total les articles commandés en quantité supérieure ou égale à 1000.(Affichage numéro de commande et total)
SELECT numcom, SUM(qtecde * priuni) AS total
FROM ligcom
WHERE qtecde >= 1000     
GROUP BY numcom 
HAVING SUM(qtecde * priuni) > 10000
ORDER BY total DESC

--10 Lister les commandes par nom fournisseur (Afficher le nom du fournisseur, le numéro de commande et la date)
SELECT nomfou, numcom, datcom
FROM fournis 
JOIN entcom ON entcom.numfou = fournis.numfou

--11 Sortir les produits des commandes ayant le mot "urgent' en observation?(Afficher le numéro de commande, le nom du fournisseur, le libellé du produit et le sous total= quantité commandée * Prix unitaire)
SELECT entcom.numcom, nomfou, libart, SUM(qtecde * priuni) AS soustotal
FROM entcom
JOIN fournis ON entcom.numfou = fournis.numfou
JOIN ligcom ON entcom.numcom = ligcom.numcom
JOIN produit ON produit.codart = ligcom.codart
WHERE obscom LIKE '%urgent%'     
GROUP BY entcom.numcom, nomfou, libart
ORDER BY soustotal DESC

--12 Coder de 2manières différentes la requête suivante:Lister lenom desfournisseurs susceptibles de livrer au moins un article
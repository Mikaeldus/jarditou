-----------LES BESOINS D’AFFICHAGE-------------*

--Quelles sont les commandes du fournisseur 09120?
SELECT numcom
FROM entcom
WHERE numfou = '9120'

--Afficher le code des fournisseurs pour lesquels des commandes ont été passées.
SELECT numcom 
FROM entcom, fournis
WHERE entcom.numfou = fournis.numfou

--Afficher le nombre de commandes fournisseurs passées, et le nombre de fournisseur concernés.
SELECT fournis.numfou, COUNT(entcom.numcom)
FROM entcom, fournis
WHERE entcom.numfou = fournis.numfou
GROUP BY fournis.numfou

--Editer les produits ayant un stock inférieur ou égal au stock d'alerte et dont la quantité annuelle est inférieur est inférieure à1000 (informations à fournir : n° produit, libelléproduit, stock, stockactuel d'alerte, quantitéannuelle)
SELECT codart, libart, stkale, stkphy, qteann
FROM produit
WHERE stkphy <= stkale

--Quels sont les fournisseurs situés dans les départements 75 78 92 77 ? L’affichage (département, nom fournisseur) sera effectué par département décroissant, puis par ordre alphabétique
SELECT posfou,nomfou  
FROM entcom 
JOIN fournis ON entcom.numfou = fournis.numfou
WHERE fournis.posfou LIKE '75%'                                                 
OR fournis.posfou LIKE '78%'                        
OR fournis.posfou LIKE '77%' 
OR fournis.posfou LIKE '92%'
GROUP BY fournis.numfou
ORDER BY posfou DESC, nomfou ASC

--Quelles sont les commandes passées au mois de mars et avril?
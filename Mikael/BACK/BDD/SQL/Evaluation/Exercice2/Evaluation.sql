-- 1 Liste des contacts français :
SELECT CompanyName AS Société, ContactName AS contact, ContactTitle AS Fonction, Phone AS Téléphone
FROM customers
WHERE Country = 'France'
-- je demande la socièté, l'intitulé de la personne et sa fonction et que des français.



-- 2 Produits vendus par le fournisseur "Exotic Liquids" :
SELECT ProductName AS Produit, UnitPrice AS Prix
FROM products
JOIN suppliers ON products.SupplierID = suppliers.SupplierID
WHERE suppliers.SupplierID = '1'
-- je demande les produits vendu part "Exotic Liquids" en référence avec la table suppliers, j'aurai put faire plus simple :
SELECT ProductName AS Produit, UnitPrice AS Prix
FROM products
WHERE products.SupplierID = '1'


-- 3 Nombre de produits vendus par les fournisseurs Français dans l’ordre décroissant :
SELECT suppliers.CompanyName AS Fournisseur, COUNT(products.ProductName) AS 'nbre_produits'
FROM suppliers
JOIN products ON suppliers.SupplierID = products.SupplierID
WHERE suppliers.Country = 'France'
GROUP BY suppliers.CompanyName
ORDER BY nbre_produits DESC 
-- je demande le nom des fournisseur, ensuite je compte le nombre de produit vendu part fournisseur  et avec le where je demande que les fournisseur qui sont de la France.

-- 4 Liste des clients Français ayant plus de 10 commandes :


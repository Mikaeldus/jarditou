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
SELECT orders.ShipName AS Client, COUNT(orders.CustomerID) AS nbre_commandes
FROM orders
WHERE orders.ShipCountry = 'France'
GROUP BY orders.ShipName
HAVING COUNT(orders.CustomerID) > 10 
-- Je demande le nom de client, je compte le nombre de commande part client, je trie avec un where pour que ce soit que les client qui viennent de France,
-- si le nombre de commande est inférieur à 10 je ne l'ai montre pas (avec le HAVING)


-- 5 Liste des clients ayant un chiffre d’affaires > 30.000 :
SELECT orders.ShipName AS Client, SUM(unitPrice * Quantity) AS CA, orders.ShipCountry AS Pays
FROM northwind.`order details`
JOIN orders ON orders.OrderID = northwind.`order details`.OrderID
GROUP BY orders.ShipName, orders.ShipCountry
HAVING SUM(unitPrice * Quantity) > 30000
ORDER BY CA DESC
-- j'affiche le client, le chiffre d'affaire en prenant les info de la talbe order details et le pays, 
-- le having me permet d'afficher que les client qui ont un chiffres d'affaire supérieur à 30000, et j'utilise DESC pour montrer en décroissant.


--6 Liste des pays dont les clients ont passé commande de produits fournis par « Exotic Liquids » :


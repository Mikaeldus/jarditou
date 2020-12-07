<?php
/* On defini la variable tableau */
echo ' Dans le tableau on as "a"=>"Volvo","b"=>"BMW","c"=>"Toyota" <br>'."\n";
$a=array("a"=>"Volvo","b"=>"BMW","c"=>"Toyota");
echo '<br>'."\n";
/* Modifie l'ordre d'un tableau */
echo 'Function array_reverse<br/>'."\n";
print_r(array_reverse($a));
var_dump(array_reverse($a));
?>

<?php
/* Permet de faire une recherche dans le tableau */
echo 'Function array_key_exists, Dans l exemple on recherche "a"<br>'."\n";
$a=array("a"=>"Volvo","b"=>"BMW","c"=>"Toyota");
if(array_key_exists("a", $a)) {
	echo "La Volvo existe !";
}else{
	echo "La Volvo n'existe pas !";
}
var_dump(array_key_exists("a", $a));
?>

<?php
/* permet de rajouter un champ dans un tableau */
echo 'Function array_merge<br>'."\n";
$a1=array("6" =>"new");
$a2=array("1"=>"Volvo","2"=>"BMW","3"=>"Toyota","4"=>"Picasso");
$Result = array_merge($a1, $a2);
var_dump($Result);
?>

<?php
/* Permet de trier et de voir les différence dans un tableau */
echo ' Function array_diff()<br>'."\n";
$array1 = array("Volvo", "BMW", "Citroen");
$array2 = array("Volvo", "BMW", "Toyota", "Picasso");
$result = array_diff($array2, $array1);
var_dump($result);
?>

<?php
/* Retourne un tableau contenant toutes les valeurs du tableau array dont les valeurs existent dans tous les arguments. */
echo ' Function array_intersect()<br>'."\n";
$a1 = array("a" => "vert", "rouge", "blue");
$a2 = array ("b" => "vert", "jaune", "rouge");
$result = array_intersect($a1, $a2);
print_r($result);
var_dump(array_intersect($a1, $a2));
?>

<?php
/* Retourne les valeurs d'une colonne d'un tableau d'entrée */
echo ' Function array_column()<br>'."\n";
$liste = array(
    array(
        'id' => 1,
        'Prenom' => 'John',
        'Nom' => 'Doe',
    ),
    array(
        'id' => 2,
        'Prenom' => 'Sally',
        'Nom' => 'Smith',
    ),
    array(
        'id' => 3,
        'Prenom' => 'Jane',
        'Nom' => 'Jones',
    ),
    array(
        'id' => 4,
        'Prenom' => 'Peter',
        'Nom' => 'Doe',
    )
);
 
$Prenom = array_column($liste, 'Prenom');
print_r($Prenom);
var_dump($Prenom);
?>

<?php
/*Extrait une portion de tableau */
echo ' Function array_slice()<br>'."\n";
$input = array(1 => "a", "b", "c", "d", "e");
print_r(array_slice($input, 1, 2));
var_dump(array_slice($input, 1, 2));
?>

<?php
/* Efface et remplace une portion de tableau et Retourne un tableau contenant les éléments extrait ou ajouter  */
echo 'Function array_splice()<br>'."\n";
$input = array("red", "green", "blue", "yellow");
array_splice($input, -1, 1, array("black", "maroon"));
var_dump($input);
?>

<?php
/* Calcule la somme des valeurs du tableau */
echo 'Function array_sum()<br>'."\n";
$a = array(2, 2.5, 6.5);
echo "sum(a) = " . array_sum($a) . "\n";
var_dump(array_sum($a));
?>

<?php
/* Regroupe des tableaux en enlevant les doublons  */
echo 'Function array_unique()<br>'."\n";
$a = array("a" => "vert", "rouge", "b" => "vert", "bleu", "rouge");
$a1 = array_unique($a);
print_r($a1);
var_dump($a1);
?>

<?php
/* Indique si une valeur appartient à un tableau */
echo 'Function in_array()<br>'."\n";
$a = array(array('p', 'h'), array('p', 'r'), 'o');

if (in_array(array('p', 'h'), $a)) {
    echo "'ph' a été trouvé.\n";
}

if (in_array(array('f', 'i'), $a)) {
    echo "'fi' was found.\n";
}

if (in_array('o', $a)) {
    echo "'o' a été trouvé.\n";
}
echo'<br>'."\n";
echo'<br>'."\n";
?>

<?php
/* Retourne toutes les valeurs d'un tableau */
echo 'Function array_values()<br>'."\n";
$array2 = array("Volvo", "BMW", "Toyota", "Picasso");
print_r(array_values($array2));
var_dump(array_values($array2));
?>

<?php
/* Mélange les éléments d'un tableau, cette fonction retourne TRUE en cas de succès ou FALSE si une erreur survient. */
echo'Function shuffle()<br>'."\n";
$numbers = range(1, 20);
shuffle($numbers);
foreach ($numbers as $number) {
    echo "$number ";
}
var_dump(shuffle($numbers));
?>
<?php
/* Permet d'afficher un tableau simple */
echo 'Tableaux simples<br>'."\n";
    $tableau = array("Pomme", "Poire", "Banane");
	print_r(array_values($tableau));
	var_dump(array_values($tableau));
?>

<?php
/* Permet d'afficher l'index ety le champ d'un tableau */
echo'Tableaux à plusieurs dimensions<br>'."\n";
	$tab1[] = array(1, "janvier", "2016"); 
    $tab1[] = array(2, "février", "2017"); 
    $tab1[] = array(3, "mars", "2018"); 
    $tab1[] = array(4, "avril", "2019");
	echo $tab1[2][0]." ".$tab1[2][1]." ".$tab1[2][2]."<br>"; 
	var_dump($tab1);
?>

<?php
/* Permet de determiner l'index et le champ correspondant d'un tableau */
echo'Tableaux associatifs<br>'."\n";
	$facture["Janvier"] = 500; 
    $facture["Février"] = 620;  
    $facture["Décembre"]= 300;  
	var_dump($facture);	
?>

<?php
/* Pouvoir manipuler et trier les valeurs du tableau avec Foreach  */
echo'Manipulations de tableaux<br>'."\n";
	$facture = array("Janvier"=>500, "Février"=>620, "Mars"=>300, "Avril"=>130, "Mai"=>560, "Juin"=>350); 
    $facture_sixmois=0; 

    foreach ($facture as $mois => $valeur) 
    { 
       echo "Facture du mois de $mois : $valeur Euros<br />"; 
       $facture_sixmois +=$valeur; 
    } 

    echo "Facture total de six mois : <b>$facture_sixmois Euros</b>";
	var_dump($facture, $facture_sixmois);
?>

<?php
echo' Function sort()<br>'."\n";
/* Cette fonction vous permet de trier dans l'ordre alphabétique ou numérique les données d'un tableau. */
$nom = array("franck","laurent","caroline","magali","veronique");   
    sort($nom);

    for ($nb1=0;$nb1<=count($nom)-1; $nb1++) 
    {
       echo "$nom[$nb1]<br>";
    }
	var_dump(sort($nom));
?>

<?php
echo'Function rsort(array)<br>'."\n";
/* Tri décroissant d'un tableau */
$nom = array("franck","laurent","caroline","magali","veronique");
    rsort($nom);

    for ($nb1=0;$nb1<=count($nom)-1; $nb1++) 
    {
       echo "$nom[$nb1]<br>";
    }
	var_dump(rsort($nom));
?>

<?php
echo'Function asort()<br>'."\n";
/* Tri décroissant sur un tableau associatif, l'indexation des clefs est conservée. Le tri se fait sur les valeurs, pas sur les clés  */
 $tableau = array("a" => "Lundi",
                     "b" => "Mardi",
                     "c" => "Mercredi",
                     "d" => "Jeudi",
                     "e" => "Vendredi"
                ); 
foreach($tableau as $cle => $valeur) 
    { 
       echo $cle ." : ".$valeur."<br>"; 
    }
	var_dump($tableau);
?>

<?php
echo'Function count()<br>'."\n";
/* Retourne le nombre d'éléments d'un tableau. */
$tableau = array("Lundi","Mardi","Mercredi", "Jeudi", "Vendredi"); 
    $nb = count($tableau); 
    echo"Le tableau contient ".$nb." éléments.";
	var_dump($nb);
	/* La fonction sizeof() fait strictement la même chose; il s'agit d'un alias de count() */
?>

<?php
echo'Function array_push()<br>'."\n";
/* Cette instruction permet d'ajouter un élément à la fin du tableau. */
$tableau = array("Lundi","Mardi","Mercredi","Jeudi"); 
			array_push($tableau, "Vendredi"); 
	var_dump ($tableau);
?>

<?php
echo'Function array_pop()<br>'."\n";
/* Extrait un élément de la fin du tableau : */
 $tableau = array("Lundi","Mardi","Mercredi"); 
    $jour = array_pop($tableau); 
	var_dump($tableau);
?>

<?php
echo'Function array_unshift()<br>'."\n";
/* Ajoute un élément en début de tableau */
$tableau = array("Jeudi", "Vendredi"); 
    array_unshift($tableau, "Lundi", "Mardi", "Mercredi");
	var_dump($tableau);
?>

<?php
echo'Function array_shift()<br>'."\n";
/* Dépile un élément (et un seul) en début du tableau */
$tableau = array("Jeudi", "Vendredi"); 
    $jour = array_shift($tableau);
	var_dump($tableau, $jour);
	/* Après cette opération, $tableau contient Vendredi et $jour contient Jeudi. */
?>
<?php
/* Quelle semaine a lieu la validation du groupe 19002 ? */
$a = array("19001" => array("Centre", "Centre", "Centre", "Centre", "Centre", "Centre", "", "", "Centre", "Centre", "Stage", "Stage", "Stage", "Stage", "Stage", "Stage", "Stage", "Stage", "Stage", "Stage", "Stage", "Stage", "Validation", "Validation"), 
     "19002" => array("Centre", "Centre", "Centre", "Centre", "Centre", "Centre", "Centre", "Centre", "Centre", "Centre", "Centre", "Centre", "Stage", "Stage", "Stage", "Stage", "Stage", "Stage", "Stage", "Stage", "Stage", "Stage", "Stage", "Stage", "Validation", ""), 
     "19003" => array("", "", "Centre", "Centre", "Centre", "Centre", "Centre", "Centre", "Centre", "Centre", "Centre", "Stage", "Stage", "Stage", "Stage", "Stage", "Stage", "Stage", "Stage", "Stage", "Stage", "Stage", "Stage", "", "", "Validation") 
    );
	 $i = -1;
       while ($a[19002][++$i] != "Validation"); 
	   /* i = 0 */
       $i++; 
       echo "Validation la semaine $i pour le groupe 19002<br>";
?>

<?php
/* Trouver la position de la dernière occurrence de Stage pour le groupe 19001.  */
$a = array("19001" => array("Centre", "Centre", "Centre", "Centre", "Centre", "Centre", "", "", "Centre", "Centre", "Stage", "Stage", "Stage", "Stage", "Stage", "Stage", "Stage", "Stage", "Stage", "Stage", "Stage", "Stage", "Validation", "Validation"), 
     "19002" => array("Centre", "Centre", "Centre", "Centre", "Centre", "Centre", "Centre", "Centre", "Centre", "Centre", "Centre", "Centre", "Stage", "Stage", "Stage", "Stage", "Stage", "Stage", "Stage", "Stage", "Stage", "Stage", "Stage", "Stage", "Validation", ""), 
     "19003" => array("", "", "Centre", "Centre", "Centre", "Centre", "Centre", "Centre", "Centre", "Centre", "Centre", "Stage", "Stage", "Stage", "Stage", "Stage", "Stage", "Stage", "Stage", "Stage", "Stage", "Stage", "Stage", "", "", "Validation") 
    );
	$i = -1;
	while ($a[19001][++$i] != "Stage");
	while ($a[19001][$i++] == "Stage");
	$i--;
	echo " Dernière semaine de stage n° $i pour le groupe 19001<br>";
?>

<?php
/* Extraire, dans un nouveau tableau, les codes des groupes. */
$i = 0;
$group = [];
foreach ( $a as $key => $value) {
	$group[$i] = $key;
	$i++;
}
var_dump($group);
?>

<?php
/* Combien de semaines dure le stage du groupe 19003 ? */
$i = -1;
while($a[19003][++$i] != "Stage");
$i2 = $i;
while ($a[19003][++$i] == "Stage");
$i= $i - $i2;
echo"Le stage pour le groupe 19003 est de :<br>$i semaines."
?>

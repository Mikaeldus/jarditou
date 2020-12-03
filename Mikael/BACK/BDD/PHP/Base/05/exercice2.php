<!DOCTYPE html>
<html lang=fr>
<head>
    <meta charset="utf-8">
    <title>Exercice php</title>
    <meta name="viewport" content="width=device-width, initial-scale=1" />
</head>
<body>
    <div>
    <!-- tant que $a n'est pas egale à 500 alors la boucle continu  -->
        <?php
		$a = 1;
		while($a < 500) {
		?>
		<?echo $a.?> <p> Je dois faire des sauvegardes régulières de mes fichiers. </p>	
		<?$a++;?>
		<?php
		}
        ?>
    </div>
</body>
</html>

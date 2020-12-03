<?php
    $nombre1 = 0;
    $nombre2 = 0;
?>
<!DOCTYPE html>
<html lang=fr>
<head>
    <meta charset="utf-8">
    <title>Exercice php</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<style>
	/* un peu de style  */
	caption{
		border-style:solid;
	}
	table{
		text-align:center;
		border-style:solid;
	}
	th{
		border-style:solid;
        background-color:red;
	}
	td{
		border-style:solid;
	}
	</style>
</head>
<body>
	<div>
    <table>
        <caption><strong>Table de multiplication</strong></caption>
		<!-- je determine les deux variables nombre qui font office de struture pour le tableau et à chaque champ le résultat des deux nombres -->
        <thead>
            <tr>
			<th></th>
				<?php
				for($nombre1 = 0; $nombre1 <= 12; $nombre1++){
					?>
				<th>
					<?= $nombre1 ?>
				</th>
				<?php
				}
				?>
            </tr>
        </thead>
		
        <tbody>
			<?php
				for($nombre2 =0; $nombre2 <=12; $nombre2++){
				?>
            <tr>
                <th>
				<?= $nombre2 ?>
				</th>
				<?php
				for($nombre1 = 0; $nombre1 <=12; $nombre1++){
					?>
                <td>
				<?= $nombre2 * $nombre1 ?>
				</td>
				<?php
				}
				?>
            </tr>
			<?php
				}
				?>
        </tbody>
    </table>
	</div>
</body>
</html>
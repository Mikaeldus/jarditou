<?php
    // si on a cliquer sur le bouton envoyer
    if (isset($_POST['submit'])) {
        // on définis les type de fichiers acceptés
        $aMimeTypes = array('image/gif', 'image/jpg', 'image/jpeg', 'image/pjpeg', 'image/png', 'image/x-png', 'image/tiff');
        /**
         *  On extrait le type du fichier via l'extension FILE_INFO  
         */
           // création d'une nouvelle ressource fileinfo dans laquelle nous indiquons l'info recherchée  
        $finfo = finfo_open(FILEINFO_MIME_TYPE);
        // on récupère le type MIME du fichier et on le stock dans une variable
        $mimetype = finfo_file($finfo, $_FILES['file']['tmp_name']);
     
        finfo_close($finfo);
        //si le type de fichier est correct
        if (in_array($mimetype, $aMimeTypes)) {
            // récupération de l'extension du fichier et stockage dans une variable
            $extension = pathinfo($_FILES['file']['name'], PATHINFO_EXTENSION);
        // stockage du chemin de destination dans une variable
            $upload_dir = 'assets/img/';
            // renommage du fichier
            $_FILES['file']['name'] = 1;
			$nameExt = '.'.$extension;
            // indication du chemin + nom de fichier pour le déplacement
            $upload_file = $upload_dir . $_FILES['file']['name'] .$nameExt;
               // autorisation pour l'écriture
               chmod($_FILES['file']['tmp_name'], 0750); 
               //déplacement du fichier
               move_uploaded_file($_FILES['file']['tmp_name'], $upload_file);
               // message de confirmation
               echo ' Upload valider';
?>
<?php
            } else {
            // Le fichier n'est pas valider
            echo ' Upload non valide';
             ?>
                <?php
        }
    }else {
        ?>
        <?php
    }
    ?>
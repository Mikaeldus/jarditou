<!DOCTYPE html>
<html lang="fr">
<!-- ----------HEAD--------- -->

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
  <title>PAGE ACCUEIL</title>

  <!-- Bootstrap/css -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
    integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
<!-- ------JS-------- -->



    
</head>

<!-- ---------HEAD---------- -->

<!-- --------------Body------------- -->

<body>


    <!-- --------------Formulaire------------- -->


	

    <div class="container-fluid">
      <div class="row no-gutter">
        <div class="col-12">
		
          
		<form enctype="multipart/form-data" action="./function.php" method="post">
			
		  <input type="hidden" name="MAX_FILE_SIZE" value="30000" />
	  	Envoyez ce fichier : <input name="userfile" type="file" />
			<input type="submit" value="Envoyer le fichier" />
		</form>


        </div>
      </div>
    </div>




    <!-- --------------Formulaire------------- -->
    <!-- Optional JavaScript -->
    
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"
      integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n"
      crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
      integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo"
      crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"
      integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6"
      crossorigin="anonymous"></script>
  </div>
</body>

<!-- --------------Body------------- -->

</html>
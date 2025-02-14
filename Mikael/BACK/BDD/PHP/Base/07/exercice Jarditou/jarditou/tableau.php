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

</head>

<!-- ---------HEAD---------- -->

<!-- --------------Body------------- -->

<body>
<div class="container-fluid">



  <!-- --------------header------------- -->

  <div class="row align-items-end">

    <img src="./assets/img/jarditou_logo.jpg" alt="jarditou_logo" title="jarditou_logo"
      class="col-4 d-none d-xl-block d-sm-none">

    <header class="col-8 d-none d-xl-block d-sm-none">
      <div class="col-md-8 ml-auto">
        <h1 class="text-center">Tout le jardin</h1>
      </div>
    </header>

  </div>

  <!-- --------------header------------- -->

  <!-- --------------Menu------------- -->

  <div class="row">
    <div class="col-12">

      <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="./Index.html">Jarditou.com</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02"
          aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
          <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
            <li class="nav-item active">
              <a class="nav-link" href="./Index.html">Accueil <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item active">
              <a class="nav-link" href="./tableau.php">Tableau</a>
            </li>
            <li class="nav-item active ">
              <a class="nav-link" href="./contact.html">Contact</a>
            </li>
          </ul>

          <form class="form-inline my-2 my-lg-0">
            <input class="form-control mr-sm-2" type="text" placeholder="Votre promotion">
            <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Rechercher</button>
          </form>
        </div>

      </nav>

    </div>
  </div>


  <!-- --------------Menu------------- -->

  <!-- --------------IMG------------- -->
  <div class="row">

    <img src="./assets/img/promotion.jpg" alt="promotion" title="promotion" class="col-12">

  </div>

  <!-- --------------IMG------------- -->




  <!-----------------Tableau--------------->

  <div class=row>

    <div class="container-fluid">
      <table class="table table-image table-bordered ">



        <thead>
          <tr class="table-active">
            <th scope="col">Photo</th>
            <th scope="col">ID</th>
            <th scope="col">Catégorie</th>
            <th scope="col">Libellé</th>
            <th scope="col">Prix</th>
            <th scope="col">Couleur</th>
          </tr>
        </thead>

        <tbody>
          <tr scope="row">
            <td class="w-25">
              <img src="./assets/img/7.jpg" alt="Barbecues-Aramis-100€-Brun" title="Barbecues-Aramis-100€-Brun"
                class="img-fluid img-reponsive col-sm-8">
            </td>
            <td>7</td>
            <td>Barbecues</td>
            <td>Aramis</td>
            <td>100€</td>
            <td>Brun</td>
          </tr>


          <tr scope="row" class="table-warning">
            <td>
              <img src="./assets/img/8.jpg" alt="Barbecues-Athos-249.99€-Noir" title="Barbecues-Athos-249.99€-Noir"
                class="img-fluid img-reponsive col-sm-8">
            </td>
            <td>8</td>
            <td>Barbecues</td>
            <td>Athos</td>
            <td>249.99€</td>
            <td>Noir</td>
          </tr>


          <tr scope="row">
            <td>
              <img src="./assets/img/11.jpg" alt="Barbecues-Clatronic-135.90€-Chrome"
                title="Barbecues-Clatronic-135.90€-Chrome" class="img-fluid img-reponsive col-sm-8">
            </td>
            <td>11</td>
            <td>Barbecues</td>
            <td>Clatronic</td>
            <td>135.90€</td>
            <td>Chrome</td>
          </tr>


          <tr scope="row" class="table-warning">
            <td>
              <img src="./assets/img/12.jpg" alt="Barbecues-Camping-88.00€-Noir" title="Barbecues-Camping-88.00€-Noir"
                class="img-fluid img-reponsive col-sm-8">
            </td>
            <td>12</td>
            <td>Barbecues</td>
            <td>Camping</td>
            <td>88.00€</td>
            <td>Noir</td>
          </tr>


          <tr scope="row">
            <td>
              <img src="./assets/img/13.jpg" alt="Barbecues-Green-49.99€-Verte" title="Barbecues-Green-49.99€-Verte"
                class="img-fluid img-reponsive col-sm-10">
            </td>
            <td>13</td>
            <td>Barbecues</td>
            <td>Green</td>
            <td>49.99€</td>
            <td>Verte</td>
          </tr>
        </tbody>
      </table>
    </div>
  </div>
  <div class= "row">
  <div class = "col-12">
        <form action="./upload.php" method="POST" enctype="multipart/form-data">
            <fieldset>
                <div>
                    <input type="file" name="file" class="btn btn-primary" id="file" placeholder="Sélectionnez ...">
                    <input type="submit" class="btn btn-primary" name="submit" id="submit" value="Ajouter">
                </div>
            </fieldset>
        </form>
	</div>
	</div>

  <!-- --------------Footer------------- -->
  <!-- en attente d'id !!! -->

  <div class="row bottom">
    <div class="col-12 d-none d-xl-block d-sm-none">

      <footer class="navbar navbar-light bg-dark">
        <ul class="nav justify-content-center">
          <li><a class="navbar-brand" href="#" title="Mention légales">Mention légales</a></li>
          <li><a class="navbar-brand" href="#" title="Horaires">Horaires</a></li>
          <li><a class="navbar-brand" href="#" title="Plan du site">Plan du site</a></li>
        </ul>
      </footer>

    </div>
  </div>

  <!-- en attente d'id !!! -->
  <!-- --------------Footer------------- -->



  <!-- --------------Body------------- -->


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
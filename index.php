

<?php
   session_start();
   if($_SESSION["autoriser"]!="oui"){
      header("location:login.php");
      exit();
   }
   if(date("H")<18)
      $bienvenue="Bonjour  ".
      $_SESSION["prenomNom"];
    
   else
      $bienvenue="Bonsoir ".
      $_SESSION["prenomNom"];
      
?>



<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Walid SAAD">
    <meta name="generator" content="Hugo 0.88.1">
    <title>SCO-ENICAR</title>
    <!-- Bootstrap core CSS -->
<link href="./assets/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Bootstrap core JS-JQUERY -->
<script src="./assets/dist/js/jquery.min.js"></script>
<script src="./assets/dist/js/bootstrap.bundle.min.js"></script>

    <!-- Custom styles for this template -->
    <link href="./assets/jumbotron.css" rel="stylesheet">
    <style>
      .jumbotron {
         background-image: url("etudiant.webp") ;
        font-family: sans-serif;
        font-weight: 200;
      }
    

      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        -ms-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
    </style>

  </head>
  <body>
 <?php 
 include"inc\header.php";
 ?>   

<main role="main">

  <!-- Main jumbotron for a primary marketing message or call to action -->
  <div class="jumbotron">
    <div class="container">
    <h1 class="display-3" style="color:	#C0C0C0" ><?php echo $bienvenue?></h1>
      <p  style="color:	#FFFFFF" > vous êtes les bienvenus , SCO-Enicar vous permet  d’informatiser  les donneés d'un etudiant dans tous ses détails !</p>
      <p><a class="btn btn-primary btn-lg" href=""  role="button">Mes Groupes &raquo;</a></p>
    </div>
  </div>

  <div class="container">
    <div class="row justify-content-center" mt-4>
  <div class="col-4">
          <div class="card" style="width: 18rem;">
            <img src="info1.jpg" class="card-img-top" alt="..." width="200" height="200">
            <div class="card-body">
            <h5 class="card-title" >INFO 1</h5>
              <p class="card-text" >Cliquer ci dessous pour voir le groupe info 1 .</p>
              <a href=""  class="btn btn-primary">voir les groupes</a>
            </div>
          </div>
         </div>
          
        <div class="col-4">
          <div class="card" style="width: 18rem;">
            <img src="info 2.jpg" class="card-img-top" alt="..." width="200" height="200">
            <div class="card-body">
              <h5 class="card-title" >INFO 2</h5>
              <p class="card-text" >Cliquer ci dessous pour voir le groupe info 2 .</p>
              <a href=""  class="btn btn-primary">voir les groupes</a>
            </div>
          </div>
         </div>

        <div class="col-4">
          <div class="card" style="width: 18rem;">
            <img src="info3.jpg" class="card-img-top" alt="..." width="200" height="200">
            <div class="card-body">
              <h5 class="card-title" >INFO 3</h5>
              <p class="card-text" *>Cliquer ci dessous pour voir le groupe info 3 .</p>
              <a href="" class="btn btn-primary">voir les groupes</a>
            </div>
          </div>
         </div>


     </div>
  </div> <!-- /container -->

</main>


<footer class="container">
  <p>&copy; ENICAR 2021-2022</p>
</footer>
     
  </body>
</html>
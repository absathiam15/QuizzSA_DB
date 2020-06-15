<?php
session_start();
?>

<!doctype html>
<html lang="en">
  <head> 
	<title>Title</title>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="public/css/bootstrap.min.css">
    <link rel="stylesheet" href="public/css/Style.css">
    </head>
    <body>    
        <div class="container-fluid d-flex align-items-center justify-content-center zone-texte">Le Plaisir de Jouer</div>
		<div class="d-flex justify-content-center zone-connexion bg-transparent">
			
        <?php 
        if(isset($_GET['lien'])){
          if($_GET['lien'] === 'admin'){
            require_once('./pages/admin.php');
          }
          elseif($_GET['lien'] === 'joueur'){
            require_once('./pages/Joueur.php');
          }
          elseif($_GET['lien'] === 'inscription'){
            require_once('./pages/inscriptionJoueur.php');
          }
        }else{
          require_once ('./pages/connexion.php');
        }
    
        
      require_once ('./traitements/fonction.php');
      require_once ('./data/connexion_db.php');
      require_once ('./data/inscription_db.php');
    
      
            ?>
        </div>
    </body>
</html>

<!-- Optional JavaScript -->
	<!-- jQuery first, then Popper.js, then Bootstrap JS -->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://code.iconify.design/1/1.0.6/iconify.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.js" integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc=" crossorigin="anonymous"></script>
    <script src="public/js/script.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

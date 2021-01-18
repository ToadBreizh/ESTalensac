<?php
// <-- Ici c'est la fonction pour l'entête de la page -->
function EnteteTitrePage(){
?>

	<!DOCTYPE html>
<html lang="fr">
	<head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="description" content="">
        <link href=" CSS_OLIVIERO_Mael.css" rel="stylesheet" type="text/css">
        <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
        <meta name="generator" content="Jekyll v4.1.1">
		<title>Espoir Sportif de Talensac</title>
		<link rel="stylesheet"
        href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css"
        integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2"
        crossorigin="anonymous">   
    </head>
        <body>
            <nav class="navbar navbar-expand-sm navbar-dark bg-dark">
                <a class="navbar-brand" href="#">Espoir Sportif de Talensac 
                  <img src="medias/Logo.jpg" WIDTH=100 HEIGHT=80 alt="Logo"/></a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExample03" aria-controls="navbarsExample03" aria-expanded="false" aria-label="Toggle navigation">
                  <span class="navbar-toggler-icon"></span>
                </button>
              
                <div class="collapse navbar-collapse" id="navbarsExample03">
                  <ul class="navbar-nav mr-auto">
                    <li class="nav-item active">
                      <a class="nav-link" href="index.php">Accueil <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="membre.php">Membres</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="FAQ.php" tabindex="-1" aria-disabled="true">FAQ</a>
                    </li>
                  </ul>
                </div>
              </nav>

<?php
}
// <-- Ici c'est la fonction pour le pied de page -->
function PiedDePage(){
?>
		<footer>
			<p>
				© Espoir Sportif de Talensac - BasketBall - Président : Xavier Bloch
			</p>
		</footer>

<?php
}	
// <-- Ici c'est la fonction pour afficher le tableau en PHP -->
function TableauPHP($personnes){
  echo '<div class="table-responsive">';
    echo '<table>';
		echo "\n";
		echo '<tr>';
		foreach($personnes[0] as $entete => $personne){
				echo '<th>';
				echo $entete;
				echo '</th>';
            }
			
			echo '</tr>';
			
			foreach($personnes as $personne){
				echo '<tr>';
        
        echo '<td>'; echo $personne['Nom']; echo '</td>';
        echo '<td>'; echo $personne['Prénom']; echo '</td>';
        echo '<td>'; echo $personne['Mail']; echo '</td>';
        echo "<td><img src='images/".$personne['Photo']."' width='80' height='100' alt='président' class='arrondie'/></td>";
				echo '</tr>';
				echo "\n";
      }

            echo '</table>';
      echo '</div>';
          }
      
?>
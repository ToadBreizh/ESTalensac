<?php
include 'fonctions.php';


EnteteTitrePage();

    // Ici est la définition du tableau des membres.
    $personnes = array(
        array(
            'Nom' => "BLOCH",
            'Prénom' => 'Xavier',
            'Mail' => 'Xavier.bloch@estalensac.fr',
            'Photo' => 't1.jpg'
        ),
        array(
            'Nom' => "MADIOU",
            'Prénom' => 'Anne-Marie',
            'Mail' => 'Anne-Marie.madiou@estalensac.fr',
            'Photo' => 'femme.jpg'
        ),
        array(
            'Nom' => "PARIS",
            'Prénom' => 'Patrice',
            'Mail' => 'Patrice.paris@estalensac.fr',
            'Photo' => 'homme.jpg'
        ),
        array(
            'Nom' => "LORENDEAU",
            'Prénom' => 'Damien',
            'Mail' => 'Damien.lorendeau@estalensac.fr',
            'Photo' => 'homme.jpg'
        ),
        array(
            'Nom' => "DREUSLIN",
            'Prénom' => 'Gilles',
            'Mail' => 'Gilles.dreuslin@estalensac.fr',
            'Photo' => 'homme.jpg'
        ),
        array(
            'Nom' => "BELLAY",
            'Prénom' => 'Stéphane',
            'Mail' => 'Stéphane.bellay@estalensac.fr',
            'Photo' => 't6.jpg'
        ),
    );
    // Ici c'est l'utilisation de la fonction pour afficher le tableau.
        TableauPHP($personnes);
    ?>
<!-- Ici c'est le CSS du tableau (Je n'arrive pas a faire en sorte qu'en le mettant dans la page CSS il fonctionne) -->
<style>
table{
    margin:auto;
    border-collapse : collapse ;
}
th{    
    border : 1px solid black; text-align : center;
    background-color :#D48030
}
td{
    border : 1px solid black; text-align : center;
}
tr:nth-child(even) {
     background-color : #BEA58E;
}
tr:nth-child(odd){ 
    background-color : #EBD9C8; 
}
.arrondie {
    border:2px solid black;
    -moz-border-radius:7px;
    -webkit-border-radius:7px;
    border-radius:7px;
    }
    </style>
<?php
PiedDePage();
?>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
      <script>window.jQuery || document.write('<script src="/docs/4.5/assets/js/vendor/jquery.slim.min.js"><\/script>')</script><script src="/docs/4.5/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
      </body>

      </html>
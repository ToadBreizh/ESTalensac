<?php
include 'fonctions.php';
EnteteTitrePage();
?>
<!-- Ici on défini la grille -->
	<div class="row mb-3">
    <!-- Ici est le bloc de gauche -->
    <div class="col-sm-6 col-md-7 col-lg-8 themed-grid-col">
      <!-- La on affiche la partie en haut a gauche donc ici les informations du club -->
      <div class="pb-3">
      <h2>Information sur le Club</h2>
                    <p>
                        L'Espoir Sportif de Talensac est le club de basket de Talensac, petit village situé en Ile-et-vilaine, a environ 20 km a l'ouest de Rennes.
                        Ce club possède des équipes de tous niveaux allant de U11 jusqu'à seniors que ce sois en masculin ou en féminin.
                        Les entrainements se déroule a la Salle de la Hunaudière, dirigé par 4 entraineurs différents, bénévoles ou proffesionnels selon les niveaux.
                        Pour devenir joueur dans notre club il faut prendre contact par mail et ensuite remplir l'inscription en ligne qui vous sera envoyer.
                        Le tarif du club varie selon les âges allant de 50 euros pour les babys a 140 euros pour les seniors.
                    </p>
      </div>
      <!-- La on affiche la partie en bas a gauche soit ici une vidéo youtube mais aussi une vidéo d'un pannier de basket -->
    <div class="row">
      <div class="col-sm-3 col-md-4 col-lg-5 themed-grid-col"> <h5>Vidéo d'un match d'une équipe de Talensac </h5>
          <aside id="youtube">
                      <iframe width="340" height="240" src="https://www.youtube.com/embed/ADW6aQFSB7w"> </iframe>
                    </aside>
      </div>
      <div class="col-5 themed-grid-col"> <h5>Le basket de haut niveau est quelque chose d'impressionnant !! </h5>
          <video controls="controls">
                    <source  src="medias/video.mp4"  type="video/webm" class="test">
                    Votre navigateur ne supporte pas la balise <code>video</code>.
                  </video>
      </div>
      </div>
    </div>
    <!-- Ici est le bloc de droite et notamment ici le Carousel -->
    <div class="col-sm-2 col-md-3 col-lg-4 themed-grid-col"><link href="carousel.css" rel="stylesheet">

                    <div id="myCarousel" class="carousel slide" data-ride="carousel">
                      <ol class="carousel-indicators">
                        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                        <li data-target="#myCarousel" data-slide-to="1"></li>
                        <li data-target="#myCarousel" data-slide-to="2"></li>
                      </ol>
                      <div class="carousel-inner">
                        <div class="carousel-item active">
                          <svg class="bd-placeholder-img" width="100%" height="100%" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice" focusable="false" role="img"><rect width="100%" height="100%" fill="#777"/></svg>
                          <div class="container">
                            <div class="carousel-caption text-left">
                              <h1>Association d'arbitrage</h1>
                              <p><img src="medias/Image1.jpg" WIDTH=200 HEIGHT=150 alt="Association"/></p>
                            </div>
                          </div>
                        </div>
                        <div class="carousel-item">
                          <svg class="bd-placeholder-img" width="100%" height="100%" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice" focusable="false" role="img"><rect width="100%" height="100%" fill="#777"/></svg>
                          <div class="container">
                            <div class="carousel-caption">
                              <h1>De tous les âges</h1>
                              <p><img src="medias/Image2.jpg" WIDTH=200 HEIGHT=150 alt="De tous les ages"/></p>
                            </div>
                          </div>
                        </div>
                        <div class="carousel-item">
                          <svg class="bd-placeholder-img" width="100%" height="100%" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice" focusable="false" role="img"><rect width="100%" height="100%" fill="#777"/></svg>
                          <div class="container">
                            <div class="carousel-caption text-right">
                              <h1>Emplois du temps entrainements</h1>
                              <p><img src="medias/Image3.png" WIDTH=200 HEIGHT=150 alt="EDT"/></p>
                            </div>
                          </div>
                        </div>
                      </div>
                      <a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                      </a>
                      <a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                      </a>
                    </div>
                    </div>
                    </div>
                    <!-- Ici on a la barre latéral contenant le document audio -->
  <aside id="audio" >
				<audio controls="controls" >
					<source src="medias/audio.mp3" type="audio/mp3">
					<source src="medias/audio.wav" type="audio/wav">
				</audio>
			<h6>Grâce a ce document audio, vous pouvez profiter de l'ambiance d'un match de basket même en pleine épidémie de Covid.</h6>
			</aside>
      <hr class="my-4">
<?php
PiedDePage();
?>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
      <script>window.jQuery || document.write('<script src="/docs/4.5/assets/js/vendor/jquery.slim.min.js"><\/script>')</script><script src="/docs/4.5/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>


            </body>	
            </html>
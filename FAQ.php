<?php
include 'fonctions.php';

EnteteTitrePage();
?>
<!-- Ici on affiche les questions sur lesquelles il faut appuyer pour avoir les réponses -->
<div class="accordion" id="accordionExample">
  <div class="card">
    <div class="card-header" id="headingOne">
      <h2 class="mb-0">
        <button class="btn btn-link btn-block text-left" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
          Les équipes de Talensac ont elles un bon niveau ?
        </button>
      </h2>
    </div>

    <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
      <div class="card-body">
        Les équipes de Talensac ont un niveau qui varie certaines équipes vont être en division 3 ou 4 en étant pas premier de leur poule, alors que certaines équipes vont être en régionale en ayant une bonne place dans le classement.
      </div>
    </div>
  </div>
  <div class="card">
    <div class="card-header" id="headingTwo">
      <h2 class="mb-0">
        <button class="btn btn-link btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
          L'ES Talensac prennent seulement des joueurs habitant a Talensac?
        </button>
      </h2>
    </div>
    <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
      <div class="card-body">
        Cette question arrive fréquement et comme la plupart des clubs, non, on accepte des joueurs venant de n'importe quelle ville tant que la personne est assidue aux entrainements et aux matchs. Certes, la plupart des joueurs de nos équipes habitent a Talensac mais c'est surtout parce que le Basket est en sport qui s'exerce dans la plupart des villes donc les gens vont au plus proche de chez eux pour éviter de trop long trajets.
      </div>
    </div>
  </div>
  <div class="card">
    <div class="card-header" id="headingThree">
      <h2 class="mb-0">
        <button class="btn btn-link btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
          Il y a combien d'entrainements par semaine ?
        </button>
      </h2>
    </div>
    <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
      <div class="card-body">
        Pour la plupart des équipes, il y a 2 entrainements par semaine sauf pour les babys, qui comme eux sont trop jeunes pour faire des matchs et que c'est leur année de découverte de ce sport n'ont qu'un seul entrainement par semaine. Les autres équipes ont 2 entrainements par semaine et un match de weekend la plupart du temps mais certaines équipes n'ont pas leurs 2 entrainements à la salle de talensac en sachant que certaines équipes ont des ententes avec d'autres équipes, comme par exemple les U13 garçons de l'année 2020 ont une entente avec le club de Breteil.
      </div>
    </div>
  </div>
</div>
<!-- Ici est le Tableau avec des liens vers d'autres clubs -->
    <aside>
    <h5>Venez voir par ici pour des liens vers d'autres clubs</h5>
  <div class="responsive-table-line" style="margin:0px auto;max-width:700px;">
  <table class="table table-bordered table-condensed table-body-center" >
  <thead class="thead-dark">
  <tr>
  <th>De quel lien s'agit-il ?</th>
  <th>Voici le lien !</th>
  </tr>
  </thead>
  <tbody>
<tr>
<td data-title="De quel lien s'agit-il ?">Club de Foot de Talensac</td>
<td data-title="Voici le lien !"><h6><a href="http://www.fcbreteiltalensac.fr/" target="blank">Si tu es plutôt foot c'est par ici !</a></h6></td>
</tr>
<tr>
<td data-title="De quel lien s'agit-il ?">Club de Basket de Montfort-Sur-Meu</td>
<td data-title="Voici le lien !"><h6><a href="https://www.monfortbasketclub.fr/" target="blank">Si tu veux nous faire concurrence c'est par là !</a></h6></td>
</tr>

</tbody>
</table>
</div>
</aside>
<!-- Ici est l'adresse du club de Talensac -->
    <article>
    <h5>L'adresse du club juste ici !</h5>
    <div id="wrapper-9cd199b9cc5410cd3b1ad21cab2e54d3">
		<div id="map-9cd199b9cc5410cd3b1ad21cab2e54d3"></div><script>(function () {
        var setting = {"height":450,"width":600,"zoom":17,"queryString":"35 Rue de la Hunaudière, 35160 Talensac, France","place_id":"EjAzNSBSdWUgZGUgbGEgSHVuYXVkacOocmUsIDM1MTYwIFRhbGVuc2FjLCBGcmFuY2UiMBIuChQKEgnxRLGcSfwOSBFXCurvMLYWnhAjKhQKEglxHL5cSfwOSBELgojIGnZNGQ","satellite":false,"centerCoord":[48.10939491770473,-1.932444999999996],"cid":"0xb618eea2286837cf","lang":"fr","cityUrl":"/france/rennes-924","cityAnchorText":"Carte de Rennes, Bretagne, France","id":"map-9cd199b9cc5410cd3b1ad21cab2e54d3","embed_id":"341551"};
        var d = document;
        var s = d.createElement('script');
        s.src = 'https://1map.com/js/script-for-user.js?embed_id=341551';
        s.async = true;
        s.onload = function (e) {
          window.OneMap.initMap(setting)
        };
        var to = d.getElementsByTagName('script')[0];
        to.parentNode.insertBefore(s, to);
      })();</script><a href="https://1map.com/fr/map-embed">1 Map</a></div>
</article>


<?php
PiedDePage();
?>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
      <script>window.jQuery || document.write('<script src="/docs/4.5/assets/js/vendor/jquery.slim.min.js"><\/script>')</script><script src="/docs/4.5/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
      </body>
      </html>
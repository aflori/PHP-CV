<?php
$metaTitle = "Acceuil";
$metaDescription = "Page de présentation de l'entreprise";
include 'header.php';
?>

<main class="d-flex flex-column justify-content-between">
    <section class="mt-5 d-flex flex-row justify-content-around align-items-center container-xl">
      <div class="d-flex flex-column text-center">
        <h1> Allons créer le produit digital de vos rêves ensemble </h1>
      </div>
      <div class="position-relative">
        <img src="photos/Img_ordi.png" alt="image symbolique ordinateur" class="index_image_titre_size">
        <img src="photos/Image_papillon.png" alt="Image papillon" class="index_image_titre_positionnement">
      </div>
    </section>

    <section class="d-flex flex-row flex-wrap justify-content-evenly">
      <div class="text-center bg-dark-subtle rounded-4 m-3 p-1">
        <h2 class="my-2">
          Qui sommes nous?
        </h2>
        <p class="index_max_widht">
          Développeurs dans l’âme et papillons dans une autre vie, nous savons transformer vos idées le plus
          fantastiques dans des produits digitales accessibles.
        </p>
      </div>
      <div class="text-center bg-dark-subtle rounded-4 m-3">
        <h2 class="my-2">
          Un petit peu d’histoire
        </h2>
        <p class="index_max_widht">
          Formés au Campus numérique in the Alps, à Valence, nous sommes tous les trois venus des univers très différents, de la mathématique à l’écologie. Notre diversité crée le dynamisme idéal pour délivrer des solutions adaptés à vos besoins.
        </p>
      </div>
    </section>
    <section class="mx-auto my-4">
      <a class="btn btn-success btn-lg" href="http://phpdebase.local/?page=equipe.php" role="button">Notre équipe</a>
    </section>
    <hr>
    <section>
      <h2 class="text-center my-5">Nos Créations</h2>
      <div class="d-flex flex-row flex-wrap justify-content-around">
        <div class="bg-dark-subtle rounded-4 m-3">
          <img src="photos/Img_ordi.png" alt="image symbolique ordinateur"
            class="position-relative top-0 start-50 translate-middle-x">
          <h3 class="text-center text-success m-1">Création de sites internet</h3>
         <p class="text-center index_max_widht mx-3 ">
            La première de nos activités principales consiste à créer des sites internets pour nos clients. Ces sites internets sont fait sur mesure pour correspondre aux besoins du client.
          </p>
        </div>
        <div class="bg-dark-subtle rounded-4 m-3">
          <img src="photos/Img_ordi.png" alt="image symbolique ordinateur"
            class="position-relative top-0 start-50 translate-middle-x">
          <h3 class="text-center text-success m-1">Développement de logiciel</h3>
          <p class="text-center index_max_widht mx-3 ">
            L'autre activité principale est celle du développement de logiciel. Nous créons nos logiciels pour satisfaire les besoin du client. Ces logiciels peuvent aussi permettre des dialogues avec un serveur.
          </p>
        </div>
      </div>
    </section>
    <section class="mx-auto my-4">
      <a class="btn btn-success btn-lg" href="http://phpdebase.local/?page=equipe.php" role="button">Nos prestations</a>
    </section>
  </main>

<?php
include 'footer.php';
?>
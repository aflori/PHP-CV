<?php
include 'header.php'
?>

  <main class="container-fluid mx-auto my-0 bg-white">
    <section
      class="bg-white d-flex flex-column justify-content-center align-items-center position-relative container-lg">

      <div class="d-flex align-items-center justify-content-center flex-column flex-md-row">
        <img class="rounded-pill my-2 img_cv_size mt-xl-4 " src="photos/photo_aurelien.jpg"
          alt="Photo de Aurélien Flori">
        <div class="d-flex flex-column ms-md-2 ">
          <h1 class="mb-2 text-black m-md-2">Aurélien Flori</h1>
          <h2 class="ms-2 mt-5 mb-1 mb-md-2 d-none d-xl-inline text-shadow-unable fs-3 fw-bold"> Développeur Web Back
            End</h2>
        </div>
      </div>
      <!-- position absolute (ex-class "position") -->
      <h2 class="mb-1 mb-md-2 d-xl-none d-inline text-shadow-unable fs-3 fw-bold"> Développeur Web Back End</h2>
      <p class="m-2 mx-md-auto text-center  mt-xl-4 col-12 col-md-10 col-lg-8">Un développeur Web spécialisé dans le
        développement backend, créant la partie serveur des sites web et des applications web, contribuant ainsi au
        succès global du produit.</p>
    </section>

    <!-- flew column? -->
    <section class="mt-3 bg-light container-lg rounded col-12 col-md-10 col-lg-8">
      <h3 class="mb-3 text-success text-center position-relative start-50 translate-middle-x mt-2">Expériences
        professionnelles</h3>

      <table class="table table-hover table-striped mx-auto">
        <tbody>
          <tr>
            <th scope="row">1</th>
            <td>2017-2019</td>
            <td>Licence en mathématiques fondamentales</td>
          </tr>
          <tr>
            <th scope="row">2</th>
            <td>2020-2021</td>
            <td>Formation en espace vert</td>
          </tr>
          <tr>
            <th scope="row">3</th>
            <td> 2023-2024</td>
            <td> Formation de développeur logiciel</td>
          </tr>
        </tbody>
      </table>
    </section>

    <section
      class="bg-light mt-3 d-md-flex justify-content-md-evenly mt-md-4 mb-md-3 mx-md-auto py-md-2 py-lg-3 col-md-10 col-lg-8">

      <div class="d-flex flex-column justify-content-center align-items-center">
        <h3 class="text-success mt-md-2 mb-xl-1">Compétences</h3>

        <ul class="mt-1 mb-2 d-flex flex-column">
          <li>Console unix et le bash associé</li>
          <li>Langages de programmations</li>
          <li>Outils de traitement de texte</li>
        </ul>
      </div>


      <div class="d-flex flex-column justify-content-center align-items-center">
        <h3 class="text-success mt-md-2 mb-xl-1">Loisirs</h3>

        <ul class="mt-1 mb-2 d-flex flex-column">
          <li>Sport (vélo, roller)</li>
          <li>Jardinage</li>
          <li>Faire des projet de programmation</li>
        </ul>
      </div>
    </section>
  </main>

<?php
include 'footer.php'
?>
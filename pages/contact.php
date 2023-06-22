<?php
$metaTitle = "Contact";
$metaDescription = "Formulaire de contacte la team Flory";
include 'header.php'
?>

<main>
    <form action="http://phpdebase.local/?page=contact" method="post">
        <div class="m-5">
            <div>
                <label class="input-group-text" for="civilite">civilité</label>
                <select class="form-select" id="civilite">
                <option selected>Quelle est votre civilité</option>
                <option value="M.">M.</option>
                <option value="Mme">Mme</option>
            </select>
            </div>
            <div class="mb-3">
                <label for="name1" class="form-label">Votre nom</label>
                <input type="text" class="form-control" id="name1" placeholder="Votre prénom">
            </div>
            <div class="mb-3">
                <label for="name2" class="form-label">Votre prénom</label>
                <input type="text" class="form-control" id="name2" placeholder="Votre NOM">
            </div>
            <div class="mb-3">
                <label for="Adresse email" class="form-label">Votre adresse email</label>
                <input type="email" class="form-control" id="Adesse email" placeholder="name@example.com">
            </div>
            <div class="mb-3">
                <label for="emploi" class="form-label">Le motif de la demande:</label>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="motif demande" id="emploi">
                    <label class="form-check-label" for="emploi">
                        Demande d'emploi
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="motif demande" id="informations">
                    <label class="form-check-label" for="informations">
                        Demande d'information
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="motif demande" id="prestations" checked>
                    <label class="form-check-label" for="prestations">
                        prestations
                    </label>
                </div>
            </div>
            <div class="mb-3">
                <label for="message complet" class="form-label">Message</label>
                <textarea class="form-control" id="message complet" rows="3"></textarea>
            </div>
            <button type="submit" class="btn btn-primary">Envoyer</button>

        </div>

    </form>

</main>



<?php
include 'footer.php';
?>

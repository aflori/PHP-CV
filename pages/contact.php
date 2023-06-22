<?php

$metaTitle = "Contact";
$metaDescription = "Formulaire de contacte la team Flory";
include 'header.php';

?>

<main>

    <form action="http://phpdebase.local/?page=contact" method="post">

        <div class="m-5">
            <?php

            $champCivilite = filter_input(INPUT_POST, 'civilite');
            $champNom = filter_input(INPUT_POST, 'name1');
            $champPrenom = filter_input(INPUT_POST, 'name2');
            $champemail = filter_input(INPUT_POST, 'AdesseEmail');
            $champRaison = filter_input(INPUT_POST, 'motifDemande');
            $champMessage = filter_input(INPUT_POST, 'MessageComplet');
            if ( $champCivilite !== "" and $champNom !== "" and $champPrenom !== "" and $champemail !== "" and $champRaison !== "" and $champMessage !== ""){

                //date_default_timezone_get('UTC');
                $date = new DateTime();
                $date->setTimezone(new DateTimeZone("EUROPE/PARIS"));

                file_put_contents("contact/contact_" . $date->format("Y-m-d-H-i-s") . '.txt',
                    $champCivilite . "\n" . $champNom . "\n" . $champPrenom . "\n" . $champemail . "\n" . $champRaison . "\n" . $champMessage . "\n");

                echo '<p class="text-success my-3">
                    Formulaire envoyé
                </p>';
            }
            elseif( $champCivilite !== null or $champNom !== null or $champPrenom !== null or $champemail !== null or $champRaison !== null or $champMessage !== null )
            {
                echo '<p class="text-danger my-3">
                Formulaire incorect
                </p>';
            }
            ?>


            <div>
                <label for="champ1">civilité</label>

                <select class="form-select" name="civilite" id="champ1">
                    <option selected>Quelle est votre civilité</option>
                    <option value="M.">M.</option>
                    <option value="Mme">Mme</option>
                </select>
            </div>
            <div class="mb-3">
                <label for="name1" class="form-label">Votre nom</label>
                <input type="text" class="form-control" name="name1" id="name1" placeholder="Votre prénom">
            </div>
            <div class="mb-3">
                <label for="name2" class="form-label">Votre prénom</label>
                <input type="text" class="form-control" name="name2" id="name2" placeholder="Votre NOM">
            </div>
            <div class="mb-3">
                <label for="Adresse_email" class="form-label">Votre adresse email</label>
                <input type="email" class="form-control" name="AdesseEmail" id="Adresse_email" placeholder="name@example.com">
            </div>
            <div class="mb-3">
                <label class="form-label" for="radios">Le motif de la demande:</label>
                <div class="form-check" id="radios">
                    <input class="form-check-input" type="radio" name="motifDemande" value="emploi" id="emploi">
                    <label class="form-check-label" for="emploi">
                        Demande d'emploi
                    </label>
                </div>
                <div class="form-check" id="radios">
                    <input class="form-check-input" type="radio" name="motifDemande" value="informations" id="informations">
                    <label class="form-check-label" for="informations">
                        Demande d'information
                    </label>
                </div>
                <div class="form-check" id="radios">
                    <input class="form-check-input" type="radio" name="motifDemande" value="prestations" id="prestations" checked>
                    <label class="form-check-label" for="prestations">
                        prestations
                    </label>
                </div>
            </div>
            <div class="mb-3">
                <label for="message_complet" class="form-label">Message</label>
                <textarea class="form-control" rows="3" placeholder="Message" name="MessageComplet" id="message_complet"></textarea>
            </div>
            <button type="submit" class="btn btn-primary">Envoyer</button>

        </div>

    </form>

</main>



<?php
include 'footer.php';
?>

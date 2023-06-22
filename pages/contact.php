<?php

$metaTitle = "Contact";
$metaDescription = "Formulaire de contacte la team Flory";
include 'header.php';

?>

<main>

    <form action="http://phpdebase.local/?page=contact" method="post">

        <div class="m-5">
            <?php

            $ilYAUneErreur = false;
            $champCivilite = filter_input(INPUT_POST, 'civilite');
            $champNom = filter_input(INPUT_POST, 'name1');
            $champPrenom = filter_input(INPUT_POST, 'name2');
            $champemail = filter_input(INPUT_POST, 'AdesseEmail', FILTER_VALIDATE_EMAIL);
            $champRaison = filter_input(INPUT_POST, 'motifDemande');
            $champMessage = filter_input(INPUT_POST, 'MessageComplet');

            if ($champCivilite !== "M."  and $champCivilite !== "Mme")
            {
                $champCivilite = null;
            }
            if ($champNom === "")
            {
                $champNom = null;
            }
            if ($champPrenom === "")
            {
                $champPrenom = null;
            }

            if ($champemail === false) {
                $champemail = null;
            }

            if ($champRaison !== "emploi" and $champRaison !== "informations" and $champRaison !== "prestations")
            {
                $champRaison = null;
            }

            if (strlen($champMessage) < 5)
            {
                $champMessage = null;
            }

            if ( $champCivilite !== null and $champNom !== null and $champPrenom !== null and $champemail !== null and $champRaison !== null and $champMessage !== null){

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
                $ilYAUneErreur = true;
            }
            ?>


            <div>
                <label for="champ1">civilité</label>

                <select class="form-select <?php if ($ilYAUneErreur and $champCivilite === null) { echo 'bg-danger'; } ?>" name="civilite" id="champ1">
                    <option value = "" selected><?php if ($ilYAUneErreur and $champCivilite === null) { echo 'Veuillez choisir une civilité'; } else {echo 'Quelle est votre civilité?';} ?></option>
                    <option value="M.">M.</option>
                    <option value="Mme">Mme</option>
                </select>
            </div>
            <div class="mb-3">
                <label for="name1" class="form-label"> Votre nom</label>
                <input type="text" class="form-control <?php if ($ilYAUneErreur and $champNom === null) { echo 'bg-danger'; } ?>" name="name1" id="name1" placeholder="<?php if ($ilYAUneErreur and $champCivilite === null) { echo 'Veuillez indiquer votre prénom'; } else {echo 'Votre Prénom';} ?>">
            </div>
            <div class="mb-3">
                <label for="name2" class="form-label">Votre prénom</label>
                <input type="text" class="form-control <?php if ($ilYAUneErreur and $champPrenom === null) { echo 'bg-danger'; } ?>" name="name2" id="name2" placeholder="<?php if ($ilYAUneErreur and $champPrenom === null) { echo 'Veuillez indiquer votre nom'; } else {echo 'Votre nom';} ?>">
            </div>
            <div class="mb-3">
                <label for="Adresse_email" class="form-label">Votre adresse email</label>
                <input type="email" class="form-control <?php if ($ilYAUneErreur and $champemail === null) { echo 'bg-danger'; } ?>" name="AdesseEmail" id="Adresse_email" placeholder="<?php if ($ilYAUneErreur and $champemail === null) { echo 'Veuillez indiquer votre adresse email'; } else {echo 'name@quelque_chose.fr';} ?>">
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
                <textarea class="form-control <?php if ($ilYAUneErreur and $champMessage === null) { echo 'bg-danger'; } ?>" rows="3" placeholder="<?php if ($ilYAUneErreur and $champMessage === null) { echo 'Veuillez préciser votre requette'; } else {echo 'Votre Message';} ?>" name="MessageComplet" id="message_complet"></textarea>
            </div>
            <button type="submit" class="btn btn-primary">Envoyer</button>

        </div>

    </form>

</main>



<?php
include 'footer.php';
?>

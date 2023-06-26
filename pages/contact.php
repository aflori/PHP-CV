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
            // testing if their is a post request
            if (count($_POST) !== 0) {
                $champCivilite = filter_input(INPUT_POST, 'civilite', FILTER_SANITIZE_FULL_SPECIAL_CHARS);
                $champNom = filter_input(INPUT_POST, 'name1', FILTER_SANITIZE_FULL_SPECIAL_CHARS);
                $champPrenom = filter_input(INPUT_POST, 'name2', FILTER_SANITIZE_FULL_SPECIAL_CHARS);
                $champemail = filter_input(INPUT_POST, 'AdesseEmail', FILTER_VALIDATE_EMAIL);
                $champRaison = filter_input(INPUT_POST, 'motifDemande', FILTER_SANITIZE_FULL_SPECIAL_CHARS);
                $champMessage = filter_input(INPUT_POST, 'MessageComplet', FILTER_SANITIZE_FULL_SPECIAL_CHARS);

                //function to test if there is an ' '
                function IlYAUnEspace($chaineDeCaracter)
                {
                    $ArrayChar = str_split($chaineDeCaracter);

                    foreach ($ArrayChar as $characters) {
                        if ($characters === ' ') {
                            return true;
                        }
                    }

                    return false;
                }

                $formErrors = [];
                if ($champCivilite !== "M." and $champCivilite !== "Mme") {
                    $formErrors['civilite'] = 'Veuillez choisir une civilité';
                    $champCivilite = null;
                    $ilYAUneErreur = true;
                }
                if ($champNom === "" or IlYAUnEspace($champNom)) {
                    if ($champNom === "") {
                        $formErrors['name1'] = 'Veuillez indiquer votre prénom';
                    } else {
                        $formErrors['name1'] = 'Veuillez indiquer un prénom valide';
                    }
                    $champNom = null;
                    $ilYAUneErreur = true;
                }
                if ($champPrenom === "" or IlYAUnEspace($champPrenom)) {
                    if ($champPrenom === "") {
                        $formErrors['name2'] = 'Veuillez indiquer votre nom';
                    } else {
                        $formErrors['name2'] = 'Veuillez indiquer un nom valide';
                    }
                    $champPrenom = null;
                    $ilYAUneErreur = true;
                }
                if ($champemail === false) {
                    if ($_POST['AdresseEmail'] == "") {
                        $formErrors['AdesseEmail'] = "Veuillez indiquer une adresse mail";
                    } else {
                        $formErrors['AdesseEmail'] = "Veuillez indiquer une adresse email valide";
                    }

                    $champemail = null;
                    $ilYAUneErreur = true;
                }
                if ($champRaison !== "emploi" and $champRaison !== "informations" and $champRaison !== "prestations") {
                    $formErrors['motifDemande'] = "Vous n'avez pas envoyé le formulaire depuis le site en question";
                    $champRaison = null;
                    $ilYAUneErreur = true;
                }
                if (strlen($champMessage) < 5) {
                    if ($champMessage === "") {
                        $formErrors['MessageComplet'] = 'Écrivez un message';
                    } else {
                        $formErrors['MessageComplet'] = 'Écrivez un message valide';
                    }
                    $formErrors['MessageComplet'] = $_POST['MessageComplet'];
                    $champMessage = null;
                    $ilYAUneErreur = true;
                }

                if (!$ilYAUneErreur) {

                    $date = new DateTime();
                    $date->setTimezone(new DateTimeZone("EUROPE/PARIS"));

                    file_put_contents("contact/contact_" . $date->format("Y-m-d-H-i-s") . '.txt',
                        $champCivilite . "\n" . $champNom . "\n" . $champPrenom . "\n" . $champemail . "\n" . $champRaison . "\n" . $champMessage . "\n");

                    echo '<p class="text-success my-3">
                        Formulaire envoyé
                    </p>';
                }
            }
            ?>


            <div>
                <label for="champ1">civilité</label>

                <select class="form-select <?php if ($ilYAUneErreur and $champCivilite === null) { echo 'bg-danger'; } ?>" name="civilite" id="champ1">
                    <option value = "" selected><?php if ($ilYAUneErreur and $champCivilite === null) { echo $formErrors['civilite']; } else {echo 'Quelle est votre civilité?';} ?></option>
                    <option value="M.">M.</option>
                    <option value="Mme">Mme</option>
                </select>
            </div>
            <div class="mb-3">
                <label for="name1" class="form-label"> Votre nom</label>
                <input type="text" class="form-control <?php if ($ilYAUneErreur and $champNom === null) { echo 'bg-danger'; } ?>" name="name1" id="name1" placeholder="<?php if ($ilYAUneErreur and $champNom === null) { echo $formErrors['name1']; } else {echo 'Votre Prénom';} ?>">
            </div>
            <div class="mb-3">
                <label for="name2" class="form-label">Votre prénom</label>
                <input type="text" class="form-control <?php if ($ilYAUneErreur and $champPrenom === null) { echo 'bg-danger'; } ?>" name="name2" id="name2" placeholder="<?php if ($ilYAUneErreur and $champPrenom === null) { echo $formErrors['name2']; } else {echo 'Votre nom';} ?>">
            </div>
            <div class="mb-3">
                <label for="Adresse_email" class="form-label">Votre adresse email</label>
                <input type="email" class="form-control <?php if ($ilYAUneErreur and $champemail === null) { echo 'bg-danger'; } ?>" name="AdesseEmail" id="Adresse_email" placeholder="<?php if ($ilYAUneErreur and $champemail === null) { echo $formErrors['AdesseEmail']; } else {echo 'name@quelque_chose.fr';} ?>">
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
                <textarea class="form-control <?php if ($ilYAUneErreur and $champMessage === null) { echo 'bg-danger'; } ?>" rows="3" placeholder="<?php if ($ilYAUneErreur and $champMessage === null) { echo $formErrors['MessageComplet']; } else {echo 'Votre Message';} ?>" name="MessageComplet" id="message_complet"></textarea>
            </div>
            <button type="submit" class="btn btn-primary" >Envoyer</button>

        </div>

    </form>

</main>



<?php
include 'footer.php';


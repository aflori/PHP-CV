<?php
    $nomDuLien = filter_input(INPUT_GET, "page",FILTER_SANITIZE_URL);
    if ($nomDuLien === 'index' or $nomDuLien === null)
    {
        include "pages/index.php";
    }
    elseif ($nomDuLien === 'equipe')
    {
        include "pages/equipe.php";
    }
    elseif ($nomDuLien === 'CV')
    {
        include "pages/CV.php";
    }
    elseif ($nomDuLien === 'contact')
    {
        include 'pages/contact.php';
    }
    else
    {
        include "erreur404.html";
    }
?>


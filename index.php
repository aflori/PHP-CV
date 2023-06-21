<?php
    $nomDuLien = filter_input(INPUT_GET, "page",FILTER_SANITIZE_URL);
    if ($nomDuLien === 'index.php')
    {
        include "pages/index.php";
    }
    elseif ($nomDuLien === 'equipe.php')
    {
        include "pages/equipe.php";
    }
    elseif ($nomDuLien === 'CV.php')
    {
        include "pages/CV.php";
    }
    else
    {
        include "erreur404.html";
    }
?>


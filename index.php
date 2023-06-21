<?php
    if ($_GET['page'] === 'index.php')
    {
        include "pages/index.php";
    }
    elseif ($_GET['page'] === 'equipe.php')
    {
        include "pages/equipe.php";
    }
    elseif ($_GET['page'] === 'CV.php')
    {
        include "pages/CV.php";
    }
    else
    {
        include "erreur404.html";
    }
?>


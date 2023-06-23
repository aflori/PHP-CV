<?php

    session_start();
    $id_session = session_id();
    if (!isset($_SESSION['count']))
    {
        $_SESSION['count'] = 1;

        $dateSession = new DateTime();
        $dateSession->setTimezone(new DateTimeZone("EUROPE/PARIS"));

        $_SESSION['dateFirstVisit'] = $dateSession->format("Y-m-d H:i:s");
    }
    else
    {
        $_SESSION['count'] += 1;
    }

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


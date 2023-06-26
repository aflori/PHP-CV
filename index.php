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

    $routes = [
        'index' => "pages/index.php",
        null => "pages/index.php",
        'equipe' => "pages/equipe.php",
        'CV' => "pages/CV.php",
        'contact' => 'pages/contact.php'
    ];

    $nomDuLien = filter_input(INPUT_GET, "page",FILTER_SANITIZE_URL);

    if ( isset($routes[$nomDuLien]) ):
        require $routes[$nomDuLien];
    else:
        require 'erreur404.html';
    endif;
?>


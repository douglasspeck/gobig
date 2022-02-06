<?php

/* URL Methods */

if(isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on') { $url = "https://"; }  
    else {$url = "http://"; }  
    // Append the host(domain name, ip) to the URL.   
    $url.= $_SERVER['HTTP_HOST'];   
    
    // Append the requested resource location to the URL   
    $url.= $_SERVER['REQUEST_URI'];
    
    $link = basename(__FILE__, '.php');
    if ($link = 'index') {
        $link = '';
    };
    
    $isLocal = false;
    
    if (strpos($url, 'projetogobig') !== false) {
        $link = 'https://projetogobig.com.br/' . $link;
        str_replace('.php', '', $link);
    } else if (strpos($url, 'localhost') !== false) {
        $link = 'http://localhost:3000/' . $link;
        $isLocal = true;
    }

    echo '<head>
            <title>' . $title . '</title>
            
            <!-- META TAGS -->
            <meta charset="UTF-8">
            <meta http-equiv="X-UA-Compatible" content="IE=edge">
            <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0">
            <meta http-equiv="Content-Type" content="text/html; charset=utf-8">

            <!-- SEO -->
            <meta name="author" content="Projeto Go Big">
            <meta name="description" content="Site Oficial do Projeto Go Big">
            <meta name="keywords" content="' . $keywords . '">
            <link rel="canonical" href="' . $link . '">

        <!-- Favicons -->

        <!-- Fonts -->
            <link href="//fonts.googleapis.com/css?family=Oswald:400,300,700&amp;subset=latin,latin-ext" rel="stylesheet" type="text/css">
            <link href="//fonts.googleapis.com/css?family=Montserrat:400,700&amp;subset=latin,latin-ext" rel="stylesheet" type="text/css">
            <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@300;400;500;600;700&display=swap" rel="stylesheet" type="text/css">';

        if (count($css) > 0) {echo '<!-- Stylesheets -->';};
        for($i = 0; $i < count($css); $i++) {
            echo('<link rel="stylesheet" href="/CSS/'.$css[$i].'.css" type="text/css">');
        }

        if (count($js) > 0) {echo '<!-- Scrypts -->';};
        for ($i = 0; $i < count($js); $i++) {
            echo '<script src="JS/' . $js[$i] . '.js"></script>';
        };

        echo '</head>';
    ?>
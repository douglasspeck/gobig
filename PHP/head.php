<?php

    include 'url.php';

    echo '
        <head>
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

            <!-- reCAPTCHA -->
            <script src="https://www.google.com/recaptcha/enterprise.js?render=6LcLFJYeAAAAAHdVGJoWJ43zxlT9IeLioUMzUa2T"></script>

            <!-- Resources -->';

    for($i = 0; $i < count($resources); $i++) {
        if ($resources[$i][0] == 'preload') {
            echo '
                <link rel="preload" as="' . $resources[$i][1] . '"';
            if ($resources[$i][4]) {
                echo ' href="' . $resources[$i][2] . '_' . $resources[$i][4][count($resources[$i][4]) - 1] . $resources[$i][3] . '"';
                echo ' imgsrcset="';
                for ($j = 0; $j < count($resources[$i][4]); $j++) {
                    echo $resources[$i][2].'_'.$resources[$i][4][$j].$resources[$i][3].' '.$resources[$i][4][$j].'w';
                    if ($j < count($resources[$i][4]) - 1) { echo ', '; };
                }
                echo '">';
            }
        } else if ($resources[$i][0] == 'prefetch') {
            echo '<link rel="prefetch" href="' . $resources[$i][1] . '">';
        }
    }    

    echo '
            <!-- Favicons -->

            <!-- Fonts -->
            <link href="//fonts.googleapis.com/css?family=Montserrat:100,200,300,400,500,600700&amp;subset=latin,latin-ext" rel="stylesheet" type="text/css">

            <!-- Stylesheets -->
            <link rel="preload" as="style" onload="this.rel = \'stylesheet\'; this.removeAttribute(\'as\'); this.removeAttribute(\'onload\');" href="/PHP/stylesheets.php?t=' . date('YmdHis') . '" type="text/css">
            <noscript>
                <link rel="stylesheet" href="/PHP/stylesheets.php?t=' . date('YmdHis') . '" type="text/css">
            </noscript>';

    echo '</head>';
?>
<?php

    $pages = [
        ['Home', '/', 'Página Inicial'],
        ['O Projeto', 'o-projeto', 'Informações sobre o Projeto'],
        ['Quero Participar', 'contato', 'Entre em Contato']
    ];

    $active_page = str_replace('.php', '', $_SERVER['REQUEST_URI']);
    $active_page = str_replace('/', '', $active_page);

    echo '
    <input type="checkbox" id="dark-mode" onclick="darkMode();" checked hidden>
    <input type="checkbox" id="toggle-menu" hidden>
    <label id="menu-label" for="toggle-menu">';
    
        for ($i = 0; $i < count($pages); $i++) {
            
            echo '<div class="menu';

            if ($pages[$i][1] == $active_page || $pages[$i][1] == '/' && $active_page == '') { echo ' active'; }
            
            echo '"><a href="' . $pages[$i][1];

            if ($isLocal == true && $pages[$i][1] !== '/' && $pages[$i][1] !== '') {
                echo '.php';
            }

            echo '"';

            if ($pages[$i][2] !== '') { echo ' title="' . $pages[$i][2] . '"'; }

            echo '>' . $pages[$i][0] . '</a></div>';

        };
    
    echo '<div class="menu login"><a href="/">Login</a></div>
        </label>
    <header>
        <a href="/" title="Página Inicial">';
    
    $image = 'Logo/logo';
    $sizes = [50,399];
    $alt = 'Logo do Projeto Go Big';
    $id = 'logo';
    $class = '';
    include 'image.php';

    echo '</a>
        <nav id="navbar">';

    for ($i = 0; $i < count($pages); $i++) {
        
        echo '<a href="' . $pages[$i][1];

        if ($isLocal == true && $pages[$i][1] !== '/' && $pages[$i][1] !== '') {
            echo '.php';
        }

        echo '"';

        if ($pages[$i][2] !== '') { echo ' title="' . $pages[$i][2] . '"'; }

        if ($pages[$i][1] == $active_page || $pages[$i][1] == '/' && $active_page == '') { echo ' class="active"'; }

        echo '>' . $pages[$i][0] . '</a>';

    };

    echo '    
        </nav>
        <div id="header-right"></div>
    </header>';

?>
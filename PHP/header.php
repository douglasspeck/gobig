<?php

    $active_page = str_replace('.php', '', $_SERVER['REQUEST_URI']);
    $active_page = str_replace('/', '', $active_page);

    echo '
    <input type="checkbox" id="dark-mode" hidden>
    <header>
        <img src="IMG/Logo/logo.png"></img>
        <nav id="navbar">';

    $pages = [
        ['Home', '/', 'Página Inicial'],
        ['O Projeto', 'o-projeto', 'Informações sobre o Projeto'],
        ['Quero Participar', 'contato', 'Entre em Contato']
    ];

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
        <div id="header-right">
            <label for="dark-mode"></label>
            <a href="" title="">Login</a>
        </div>
    </header>';

?>
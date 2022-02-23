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

?>
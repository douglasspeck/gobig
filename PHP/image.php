<?php

    $last_size = $sizes[count($sizes) - 1];

    echo '<img sizes="(max-width:'.$last_size.'px) 100vw, '.$last_size.'px" srcset="';
    
    for ($i = 0; $i < count($sizes); $i++) {
        echo 'IMG/'.$image.'_'.$sizes[$i].'.png '.$sizes[$i].'w';
        if ($sizes[$i] !== $last_size) { echo ', '; };
    }

    echo '" src="'.$image.'_'.$last_size.'.png"';
    
    if ($id !== '') { echo ' id="'.$id.'"';}
    if ($class !== '') { echo ' class="'.$class.'"';}

    echo ' alt="'.$alt.'"></img>';

?>
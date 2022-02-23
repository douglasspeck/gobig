<?php

include 'url.php';

$css = ['contato','fonts','footer','header','home','main'];

$mergeCSS = "";
// Loop the css Array
foreach ($css as $css_file) {
    // Load the content of the css file
    $css_file = '../CSS/' . $css_file . '.css';
    $mergeCSS.= file_get_contents($css_file);
}

if ($isLocal == false) {

    // Remove comments also applicable in javascript
    $mergeCSS= preg_replace('!/\*[^*]*\*+([^/][^*]*\*+)*/!', '', $mergeCSS);
    
    // Remove space after colons
    $mergeCSS = str_replace(': ', ':', $mergeCSS);
    
    // Remove whitespace
    $mergeCSS = str_replace(array("\n", "\t", '  ', '    ', '    '), '', $mergeCSS);
    
}

//Generate Etag
$genEtag = md5_file($_SERVER['SCRIPT_FILENAME']);

// call the browser that support gzip, deflate or none at all, if the browser doest      support compression this function will automatically return to FALSE
ob_start('ob_gzhandler');

// call the generated etag
header("Etag: ".$genEtag); 

// Same as the cache-control and this is optional
header("Pragma: public");

// Enable caching
header("Cache-Control: public ");

// Expire in one day
header('Expires: ' . gmdate('D, d M Y H:i:s', time() + 86400 ) . ' GMT');

// Set the correct MIME type, because Apache won't set it for us
header("Content-type: text/css");

// Set accept-encoding
header('Vary: Accept-Encoding');

// Write everything out
echo($mergeCSS);

?>
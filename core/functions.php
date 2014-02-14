<?php  

function remove_accents($str, $charset='utf-8') {
 
    $str = htmlentities($str, ENT_NOQUOTES, $charset);
 
    $str = preg_replace('#\&([A-za-z])(?:acute|cedil|circ|grave|ring|tilde|uml)\;#', '\1', $str);
    $str = preg_replace('#\&([A-za-z]{2})(?:lig)\;#', '\1', $str); // pour les ligatures e.g. '&oelig;'
    $str = preg_replace('#\&[^;]+\;#', '', $str); // supprime les autres caractères
 
    return $str;
}

?>
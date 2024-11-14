<?php
/*
plugin name: Filtre Post
description: Une extension qui permettra de filtrer les articles de la page web.
author: Sébastien Malo Jean
author uri: https://github.com/sebastien-malo-jean/31w_filtrePost
*/

function charger_scripts_css(){
 
    $version_css = filemtime(plugin_dir_path(__FILE__). "/style.css");
    $version_js = filemtime(plugin_dir_path(__FILE__) . "js/filtrePost.js");
 
    wp_enqueue_style(
        "filtrePost",        
        plugin_dir_url(__FILE__) . "/style.css",
        array(),
        $version_css
    ) ;  
 
    wp_enqueue_script(
        "filtrePost",      
        plugin_dir_url(__FILE__) . "/js/filtrePost.js",
        array(),
        $version_js,
        true
    )  ;
}
add_action("wp_enqueue_scripts", "charger_scripts_css");
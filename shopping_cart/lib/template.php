<?php

function get_header($version = '') {
    $path_header = "inc/header.php";
    if(!empty($version)) {
        $path_header = "inc/header-{$version}.php";
    }
    if(file_exists($path_header)) {
        require $path_header;
    }
}

function get_footer() {
    $path_footer = "inc/footer.php";
    if(file_exists($path_footer)) {
        require $path_footer;
    }
}

function get_404() {
    $path = "inc/404.php";
    if(file_exists($path)) {
        require $path;
    }
}

function get_sidebar() {
    $path = "inc/sidebar.php";
    if(file_exists($path)) {
        require $path;
    }
}

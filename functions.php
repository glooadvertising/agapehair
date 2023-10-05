<?php

function add_theme_styles_scritpts() {
    // STYLES
    wp_enqueue_style( 'style', get_stylesheet_uri() );
    wp_enqueue_style( 'aos-css', 'https://unpkg.com/aos@2.3.1/dist/aos.css', array(), '2.3.1', 'all' );
    wp_enqueue_style( 'main-css', get_template_directory_uri() . '/assets/css/style.min.css', array(), '1.1', 'all' );
    
    // SCRIPTS
    wp_enqueue_script( 'aos-js', 'https://unpkg.com/aos@2.3.1/dist/aos.js', array(), '2.3.2', false );
    wp_enqueue_script( 'main-js', get_template_directory_uri() . '/assets/js/main.js', array('jquery'), '1.1', true );
    
    // if(is_home()) {
    //     wp_enqueue_script( 'home-only', get_template_directory_uri() . '/assets/js/home-only.js', array('jquery'), '1.1', true );
    // }
}

add_action( 'wp_enqueue_scripts', 'add_theme_styles_scritpts' );



add_theme_support( 'menus' );


function profile_card ($name, $role, $bio) {
    echo "
        <article class=\"profile-card\">
            <div class=\"headshot-container\">
                <img src=\"" . get_template_directory_uri() . "/assets/images/headshots/". strtolower($name) .".jpg\" alt=\"\" class=\"headshot\">
                <div class=\"mini-bio\">
                    $bio
                </div>
            </div>
            <header>
                <h4 class=\"profile-name\">". ucfirst($name) . "</h4>
                <span>$role</span>
            </header>
        </article>
    ";
}

function services ($title = "Title", $text = "Text") {
    echo "
        <article class=\"service-card\">
            <h3>$title</h3>
            <p>$text</p>
        </article>
    ";
}

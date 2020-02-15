<?php
function render_home()
{
    $card_imgs = [
        "csl-1.jpeg",
        "csl-2.jpeg",
        "csl-1.jpeg",
        "csl-3.jpeg",
        "csl-2.jpeg",
        "csl-3.jpeg",
        "csl-2.jpeg",
        "csl-1.jpeg",
        "csl-3.jpeg",
        "csl-2.jpeg",
        "csl-1.jpeg",
        "csl-3.jpeg",
    ];
    require_once '../pages/home.php';
}

function render_about()
{
    require_once '../pages/about.php';
}

function render_contact()
{
    require_once '../pages/contact.php';
}

function render_404()
{
    require_once '../pages/404.php';
}

function get_cart_json()
{
    require_once '../api/get_cart_json.php';
}

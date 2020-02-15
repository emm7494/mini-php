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
    require '../pages/home.php';
}

function render_about()
{
    require '../pages/about.php';
}

function render_contact()
{
    require '../pages/contact.php';
}

function render_404()
{
    require '../pages/404.php';
}

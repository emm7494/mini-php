<?php
require_once '../config/configs.php';
require_once '../controller/controllers.php';

$uri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);

if (in_array($uri, array('/', '/index', '/home'))) {
    render_home();
} elseif ('/about' === $uri) {
    render_about();
} elseif ('/contact' === $uri) {
    render_contact();
} else {
    header('HTTP/1.1 404 Not Found');
    render_404();
}

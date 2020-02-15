<?php
// Init
require_once '../config/config.php';
require_once '../controller/controller.php';
require_once '../db/db.php';

$uri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);

$db = new Database();
$conn = $db->connect();
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

$conn = null;

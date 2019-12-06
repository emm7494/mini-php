<?php
require_once '../config/configs.php';
require_once '../controller/controllers.php';

$uri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);

if ('/index' === $uri) {
    render_home();
} elseif ('/about' === $uri) {
    render_about();
} elseif ('/contact' === $uri) {
    render_contact();
} else {
    render_404();
}

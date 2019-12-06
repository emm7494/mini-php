<?php
$title = 'About Us';
ob_start();
echo 'Know more...';
$content = ob_get_clean();
require '../templates/base.php';

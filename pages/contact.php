<?php
$title = 'Contact Us';
ob_start();
echo 'Just call us...';
$content = ob_get_clean();
require '../templates/base.php';
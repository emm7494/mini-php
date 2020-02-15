<?php global $conn; ?>
<?php $data['title'] = 'Contact Us'; ?>
<?php ob_start(); ?>
<?php $data['main_content'] = ob_get_clean(); ?>
<?php require '../templates/base.php'; ?>
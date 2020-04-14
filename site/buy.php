<?php require 'header.php' ?>

<?php
$page = $_GET['site'];
require implode('_', explode(' ', $page)).'.php';
?>

<?php require 'footer.php' ?>
<?php require_once '../libs/functions.php' ?>

<?php
if(!isset($_GET['id'])) redirect(getAdminUrl('index.php'));

$id = $_GET['id'];
$sql = "delete from categories where id = " . $id;
$pdo->exec($sql);

redirect(getAdminUrl('categories/index.php'));
<?php

session_start();
include_once 'mysql.php';

function getAllCategories() {
    $sql = "select * from categories";
    global $pdo;
    $query = $pdo->prepare($sql);
    $query->execute();

    return $query;
}

function deleteCategory($id) {

}

function updateCategory($id) {

}

/**
 * Helpers
 */
function increment(&$i = 1) {
    $i++;
    return $i;
}
?>
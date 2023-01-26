<?php
session_start();
require_once('config.php');
$conn = mysqli_connect(db_host, db_username, db_password, db_database);

function fetchProductData($id)
{
    global $conn;
    $search_product_query = "SELECT * FROM `info` WHERE `id` = '$id';";
    $run = mysqli_query($conn, $search_product_query);
    $data = mysqli_fetch_assoc($run);

    return $data;
}

function modifyProduct($data)
{
    $_SESSION['product_data'] = $data;
    print_r($_SESSION['product_data']);
}

function insertProduct()
{
    global $conn;
    $run_id = "SELECT MAX(ID) FROM `info`";
    $id = mysqli_query($conn, $run_id);
    $exact_id = mysqli_fetch_assoc($id);
    // print_r($exact_id);
    $next_id = $exact_id['MAX(ID)'] + 1;
    // echo $next_id;
    $product_page_link = '?product&id=' . $next_id;
    $sql = "INSERT INTO `info` (`id`, `photo`, `heading`, `content`, `header_link`) VALUES ('$next_id', '1312321', '213213', '12423', '$product_page_link');";

    $run = mysqli_query($conn, $sql);
}

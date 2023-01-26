<?php
// require_once('php/insert.php');
error_reporting(0);
require_once('php/functions.php');
include('pages/header.php');

include('pages/navbar.php');
// include('pages/home.php');
if (isset($_GET['product'])) {
    $id = $_GET['id'];
    // echo $id;
    $data = fetchProductData($id);
    // print_r($data);
    if (isset($data) && !empty($data)) {
        $_SESSION['product_data'] = $data;
        // print_r($_SESSION['product_data']);
    }


    // echo "Hi";
    include('pages/product.php');
} else {
    include('pages/home.php');
}

include('pages/footer.php');

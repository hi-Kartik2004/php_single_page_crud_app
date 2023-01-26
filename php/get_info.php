<?php
require_once('config.php');
$conn = mysqli_connect(db_host, db_username, db_password, db_database) or die("Could'nt connect with database");
$sql = "SELECT * FROM `info`;";
$run = mysqli_query($conn, $sql);
$data = mysqli_fetch_array($run);

<?php
    require 'database/connection.php';
    $getProduct = $connect->query("SELECT * FROM tblproducts WHERE productCategory='Add Ons'");
    $data = array();
    while($fetch = $getProduct->fetch_array()){
        $data[] = $fetch;
    }
    echo json_encode($data);
?>
<?php

function pr($arr){
    echo '<pre>';
    print_r($arr);
    echo '</pre>';
}

function prx($arr){
    echo '<pre>';
    print_r($arr);
    echo '</pre>';
    die();
}

function get_safe_value($con, $str){
    if($str!=''){
        $str = trim($str);
        return mysqli_real_escape_string($con, $str);
    }
}

function get_product($con, $limit = '', $cat_id = '', $product_id = ''){
    $sql = "SELECT product.*, categories.categories FROM product,categories WHERE product.status=1";
    if($cat_id != ''){
        $sql.=" AND product.categories_id = $cat_id";
    }
    if($product_id != ''){
        $sql.=" AND product.id = $product_id";
    }
    $sql.=" AND product.categories_id = categories.id";
    $sql.=" ORDER BY product.id DESC";
    if($limit != ''){
        $sql.=" LIMIT $limit";
    }
    $res = mysqli_query($con, $sql);
    $data = array();
    while($row = mysqli_fetch_assoc($res)){
        $data[] = $row;
    }
    return $data;
}
?>
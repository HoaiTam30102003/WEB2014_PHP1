<?php
if (isset($_POST['btn-add-cart'])) {
    $image = $_POST['image'];
    $name = $_POST['name'];
    $price = $_POST['price'];
    $quantity = $_POST['quantity'];
    $product_id = $_SESSION['product_id'];
    $tam = 1;

    //    kiểm tra đăng nhập
    if (isset($_SESSION['user_name'])) {
        if (!isset($_SESSION['my-cart'])) {
            $_SESSION['my-cart'] = array();
        }

        
            // chưa có SP trong giỏ hàng
            if ($tam == 1) {
                $product_array = array($product_id, $image, $name, $price, $quantity);
                array_push($_SESSION['my-cart'], $product_array);
            }

            header('location: index.php?page=view-cart');
            exit;
        

    } else {
        // nếu chưa đăng nhập
        header('location: index.php?page=login');
    }
}
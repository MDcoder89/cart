<?php
    $productName = $_POST['product-name'];
    $productID = $_POST['product-id'];
    $productQuantity = $_POST['quantity'];
    
    if($productQuantity != 1)
        $productName .= "s";
    
    $msg = "Thank you for buying " . $productQuantity . " " . $productName . " (Product ID " . $productID . ").";
    
    $msg = wordwrap($msg, 70);
    
    mail($_POST['email'], "Thank you", $msg);
    
    header('Location: index.html');
?>

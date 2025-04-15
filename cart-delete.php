<?php
session_start(); 
require 'includes/database.php';

// 商品IDを取得
$productId = $_POST['product_id'] ?? null;

// カートに商品がある場合のみ削除
if (isset($_SESSION['cart'][$productId])) {
    unset($_SESSION['cart'][$productId]); // 商品を削除
    $_SESSION['message'] = "カートから商品を削除しました。";
  }

// カートページへリダイレクト
header('Location: cart-show.php');
exit;

?>
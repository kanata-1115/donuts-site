<?php 
session_start(); 
require 'includes/database.php';


//データが送られてこなかったときにnullにする
$productId = $_POST['product_id'] ?? null;
$name = $_POST['name'] ?? null;
$price = $_POST['price'] ?? null;
$count = $_POST['count'] ?? 1; // デフォルトの値を1にする

 // カートが未定義なら空の配列をセット
  if (!isset($_SESSION['cart'])) {
    $_SESSION['cart'] = [];
  }

  if (isset($_SESSION['cart'][$productId])) {
    // すでにカートにある場合、数量を増やす
    $_SESSION['cart'][$productId]['count'] += $count;
  } else {
  // カートにない場合、新しく追加
    $_SESSION['cart'][$productId] = [
       'name' => $name,
       'price' => $price,
       'count' => $count
   ];
}

$_SESSION['message'] = "カートに商品を追加しました。";

// カートページへリダイレクト
header('Location: cart-show.php'); 
exit;

?>
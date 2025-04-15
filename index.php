  <?php 
  session_start(); 
  require 'includes/database.php';
  require 'includes/header.php';
  ?>
<?php
$donuts1 =[
  'id' => 1,
  'name' => 'CCドーナツ 当店オリジナル (5個入り)',
  'price' => 1500
];

$donuts2 =[
  'id' => 2,
  'name' => 'チョコレートデライト（5個入り）',
  'price' => 1600
];

$donuts3 =[
  'id' => 3,
  'name' => 'キャラメルクリーム（5個入り）',
  'price' => 1600
];

$donuts4 =[
  'id' => 4,
  'name' => 'プレーンクラシック（5個入り）',
  'price' => 1500
];

$donuts5 =[
  'id' => 5,
  'name' => '【新作】サマーシトラス（5個入り）',
  'price' => 1600
];

$donuts6 =[
  'id' => 6,
  'name' => 'ストロベリークラッシュ（5個入り）',
  'price' => 1800
];

$donuts7 =[
  'id' => 7,
  'name' => 'フルーツドーナツセット（12個入り）',
  'price' => 3500
];

$donuts8 =[
  'id' => 8,
  'name' => 'フルーツドーナツセット（14個入り）',
  'price' => 4000
];

$donuts9 =[
  'id' => 9,
  'name' => 'ベストセレクションボックス（4個入り）',
  'price' => 1200
];

$donuts10 =[
  'id' => 10,
  'name' => 'チョコクラッシュボックス（7個入り）',
  'price' => 2400
];

$donuts11 =[
  'id' => 11,
  'name' => 'クリームボックス（4個入り）',
  'price' => 1400
];

$donuts12 =[
  'id' => 12,
  'name' => 'クリームボックス（9個入り）',
  'price' => 2800
];


?>
<main>

<?php if(isset($_SESSION['customer'])): ?>
  <p class="guest_name_area">ようこそ&#12288; <?= htmlspecialchars($_SESSION['customer']['name']) ?> 様</p>
<?php else: ?>
  <p class="guest_name_area">ようこそ&#12288;ゲスト様</p>
<?php endif; ?>

  <img src="common/images/hero-sp.jpg" alt="main visual" class="hero_sp">
  <div class="content1">
    <div class="forseal_container">
    <a href="detail.php?id=5">
      <img src=" common/images/donuts5.jpg" class="image-content1" alt="サマーシトラスドーナツ">
      <img src="common/images/new-products-icon.png" alt="新商品のシール" class="new-products-icon">
      <p class="content_text">サマーシトラス</p></a>
    </div>
    <div class="forlife_container">
      <img src="common/images/donut-life.jpg" class="image-content2" alt="ドーナツのある生活">
      <p class="content_text2">ドーナツのある生活</p>
    </div>
  </div>
    <div class="list_container">
    <a href="product.php">
     <img src="common/images/product-list.jpg" alt="商品一覧" class="product-list">
     </a>
    </div>
  
  <div class="philosophy_container">
  <picture>
          <source srcset="common/images/philosophy-bg-pc.jpg" media="(min-width:768px)" type="image/jpg">
          <img class="philosophy" src="common/images/philosophy-bg-sp.jpg" alt="philosophy">
  </picture>


    <!-- <img src="common/images/philosophy-bg-sp.jpg" alt="philosophy" class="philosophy"> -->
    <div class="philosophy_text_container">
      <h1 class="philosophy_text1">philosophy</h1>
      <p class="philosophy_text2">私たちの信念</p>
      <p class="philosophy_text3">"Creating Connections"</p>
      <p class="philosophy_text4">ドーナツでつながる</p>
    </div>
  </div>
  <section class="">
    <h2 >人気ランキング</h2>

    <div class="container-wrapper">
      <div class="rank_container">
        <div class="rank_number1">1</div>
        <a href="detail.php?id=1">
        <img src="common/images/donuts1.jpg" alt="CCドーナツ" class="donuts_image">

        <p class="list_text">CCドーナツ 当店オリジナル（5個入り）</p></a>
        <div class="price_container">
          <p class="list_price">税込　¥1,500</p>
          <!-- <img src="common/images/favorite.png" alt="ハートマーク" class="heart-mark"> -->
          <p class="heart">♡</p>
        </div>

        <?php
          $product = [
            'id' => 1,
            'name' => 'CCドーナツ 当店オリジナル (5個入り)',
            'price' => 1500
          ];
        ?>
        <form action="cart-input.php" method="post" class="in_cart">
          <input type="hidden" name="product_id" value="<?= $product['id'] ?>">
          <!-- ENT_QUOTES → シングルクォート（'）とダブルクォート（"）もエスケープしてXSS対策 -->
          <!-- UTF-8 → 文字化けや誤動作を防ぐためにエンコーディングを明示 -->
          <input type="hidden" name="name" value="<?= htmlspecialchars($product['name'], ENT_QUOTES, 'UTF-8') ?>">
          <input type="hidden" name="price" value="<?= floatval($product['price']) ?>">
          <input type="hidden" name="count" value="1">
          <input type="submit" value="カートに入れる">
        </form>

      </div>

      <div class="rank_container2">
  <div class="rank_number2">2</div>

  <a href="detail.php?id=7">
    <img src="common/images/donuts7.jpg" alt="フルーツドーナツ(12個入り)" class="donuts_image">
    <p class="list_text">フルーツドーナツセット（12個入り）</p>
  </a>

  <div class="price_container">
    <p class="list_price">税込　¥3,500</p>
    <p class="heart">♡</p>
  </div>

  <!-- ボタンも form に変更 -->
  <form action="cart-input.php" method="post" class="in_cart">
    <input type="hidden" name="product_id" value="7">
    <input type="hidden" name="name" value="フルーツドーナツセット（12個入り）">
    <input type="hidden" name="price" value="3500">
    <input type="hidden" name="count" value="1">
    <input type="submit" value="カートに入れる">
  </form>
</div>
      <!-- </div> -->

      <!-- <div class="container-wrapper"> -->
      <div class="rank_container">
  <div class="rank_number2">3</div>

  <!-- ★画像とテキストをリンクで囲む -->
  <a href="detail.php?id=8">
    <img src="common/images/donuts8.jpg" alt="フルーツドーナツ(14個入り)" class="donuts_image">
    <p class="list_text">フルーツドーナツセット（14個入り）</p>
  </a>

  <div class="price_container">
    <p class="list_price">税込　¥4,000</p>
    <p class="heart">♡</p>
  </div>

  <!-- ★formに変更してvalueをaタグと一致させる -->
  <form action="cart-input.php" method="post" class="in_cart">
    <input type="hidden" name="product_id" value="8">
    <input type="hidden" name="name" value="フルーツドーナツセット（14個入り）">
    <input type="hidden" name="price" value="4000">
    <input type="hidden" name="count" value="1">
    <input type="submit" value="カートに入れる">
  </form>
</div>
      <!-- </div> -->

      <!-- <div class="container-wrapper"> -->
      <div class="rank_container2">
  <div class="rank_number2">4</div>

  <a href="detail.php?id=2">
    <img src="common/images/donuts2.jpg" alt="チョコレートデライト(5個入り)" class="donuts_image">
    <p class="list_text">チョコレートデライト（5個入り）</p>
  </a>

  <div class="price_container">
    <p class="list_price">税込　¥1,600</p>
    <p class="heart">♡</p>
  </div>

  <form action="cart-input.php" method="post" class="in_cart">
    <input type="hidden" name="product_id" value="2">
    <input type="hidden" name="name" value="チョコレートデライト（5個入り）">
    <input type="hidden" name="price" value="1600">
    <input type="hidden" name="count" value="1">
    <input type="submit" value="カートに入れる">
  </form>
</div>

      

        <!-- <div class="container-wrapper"> -->
        <div class="rank_container">
  <div class="rank_number2">5</div>

  <a href="detail.php?id=9">
    <img src="common/images/donuts9.jpg" alt="ベストセレクション(4個入り)" class="donuts_image">
    <p class="list_text">ベストセレクションボックス（4個入り）</p>
  </a>

  <div class="price_container">
    <p class="list_price">税込　¥1,200</p>
    <p class="heart">♡</p>
  </div>

  <div id="popup" class="popup"></div>

  <form action="cart-input.php" method="post" class="in_cart">
    <input type="hidden" name="product_id" value="9">
    <input type="hidden" name="name" value="ベストセレクションボックス（4個入り）">
    <input type="hidden" name="price" value="1200">
    <input type="hidden" name="count" value="1">
    <input type="submit" value="カートに入れる">
  </form>
</div>

<div class="rank_container2">
  <div class="rank_number2">6</div>

  <a href="detail.php?id=6">
    <img src="common/images/donuts6.jpg" alt="ストロベリークラッシュ(5個入り)" class="donuts_image">
    <p class="list_text">ストロベリークラッシュ（5個入り）</p>
  </a>

  <div class="price_container">
    <p class="list_price">税込　¥1,800</p>
    <p class="heart">♡</p>
  </div>

  <form action="cart-input.php" method="post" class="in_cart">
    <input type="hidden" name="product_id" value="6">
    <input type="hidden" name="name" value="ストロベリークラッシュ（5個入り）">
    <input type="hidden" name="price" value="1800">
    <input type="hidden" name="count" value="1">
    <input type="submit" value="カートに入れる">
  </form>
</div>

  </section>
  
</main>


<?php   require 'includes/footer.php'; ?>
<!--このファイルは、researchの子ページ(item系)のテンプレートです。
　　 include "_inc/item_template.php";で読み込ませます。-->

<main id="research" class="main">
  <div class="bg">
    <h1 class="page-title">RESEARCH</h1>
  </div>

  <!--$single, $en, $image, $detailでそれぞれのページに応じた内容を組み込む
  　　item7.phpのみ2つの画像と文章を用いる-->
  <section id="single" class="container wrapper">
    <h2 class="single-title">
      <span class="ja-title"><?php echo $single ; ?></span>
      <span class="en-title">ー<?php echo $en ; ?>ー</span></h2>
    <div class="research-item">
      <img class="inview-show fadein" src="<?php echo $image ; ?>" alt="">
      <p><?php echo $detail ; ?></p>

      <?php if($dir == "item7.php"){ ?>
        <img class="inview-show fadein" src="<?php echo $image2 ; ?>" alt="">
        <p><?php echo $detail2 ; ?></p>
      <?php } ?>
      

      <a href="research.php" class="line">BACK TO RESEARCH</a>
    </div>
  </section>
</main>

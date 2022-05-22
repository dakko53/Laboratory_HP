<!--このファイルは、head部およびheaderを一括で編集するために分割したものです。
　　 include "_inc/header.php";で各ファイルの先頭に読み込ませます。-->

<!--ファイル名を認識し、$dirに与える（ページ特有の個別処理を行うときに使用）-->
<?php 
  $dir = basename ($_SERVER['SCRIPT_NAME']);
?>
<!DOCTYPE html>
<html lang="ja">
  <head>
    <meta charset="utf-8">
    <!--各ページの変数$title、$descriptionに与えた値を出力する-->
    <title><?php echo $title ; ?></title>
    <meta name="description" content="<?php echo $description ; ?>">

    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" href="img/favicon.ico">
    <link rel="stylesheet" href="https://unpkg.com/ress/dist/ress.min.css">

    <!--indexページのカルーセルスライダー用CSSプラグイン-->
    <?php if($dir == "index.php"){ ?>
      <link rel="stylesheet" href="css/slick-theme.css">
      <link rel="stylesheet" href="css/slick.css">
    <?php } ?>

    <link rel="stylesheet" href="css/style.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="js/jquery.inview.min.js"></script>
    
    <!--indexページのカルーセルスライダー用JSプラグイン-->
    <?php if($dir == "index.php"){ ?>
      <script src="js/slick.min.js"></script>
    <?php } ?>
    <script src="js/main.js"></script>
  </head>
  
  <div id="loader">
    <div class="spinner"></div>
  </div>

  <body>
    <header id="header">
    <!--index.phpでは左上のロゴをh1にしてリンク先を同じページの先頭に、
  　　　その他のファイルでは別の場所にh1タグを置くためにdivタグを適用させ、index.phpへのリンクを貼る-->
      <?php 
        if($dir == "index.php"){
          $tag = "h1";
          $logo_link = "#";
        }
        else {
          $tag = "div" ;
          $logo_link = "index.php";
        }
      ?>

      <<?php echo $tag; ?> class="site-title">
        <a href="<?php echo $logo_link; ?>"><img src="img/logo.png" alt="Ohta-Shimojima Lab"></a>
      </<?php echo $tag; ?>>

      <!--今いるページを認識し、自ページと他ページで異なるスタイル適用させる-->
      <nav id="navi">
        <p class="navi-title">INDEX</p>
        <ul>
          <?php if($dir == "index.php"){?>
          <li>HOME</li>
          <li><a href="research.php">RESEARCH</a></li>
          <li><a href="member.php">MEMBER</a></li>
          <li><a href="publication.php">PUBLICATION</a></li>
          <li><a href="contact.php">CONTACT</a></li>
          
          <?php }else if ($dir == "research.php"){?>
          <li><a href="index.php">HOME</a></li>
          <li>RESEARCH</li>
          <li><a href="member.php">MEMBER</a></li>
          <li><a href="publication.php">PUBLICATION</a></li>
          <li><a href="contact.php">CONTACT</a></li>
          
          <?php }else if ($dir == "member.php"){?>
          <li><a href="index.php">HOME</a></li>
          <li><a href="research.php">RESEARCH</a></li>
          <li>MEMBER</li>
          <li><a href="publication.php">PUBLICATION</a></li>
          <li><a href="contact.php">CONTACT</a></li>
          
          <?php }else if ($dir == "publication.php"){?>
          <li><a href="index.php">HOME</a></li>
          <li><a href="research.php">RESEARCH</a></li>
          <li><a href="member.php">MEMBER</a></li>
          <li>PUBLICATION</li>
          <li><a href="contact.php">CONTACT</a></li>

          <?php }else if ($dir == "contact.php"){?>
          <li><a href="index.php">HOME</a></li>
          <li><a href="research.php">RESEARCH</a></li>
          <li><a href="member.php">MEMBER</a></li>
          <li><a href="publication.php">PUBLICATION</a></li>
          <li>CONTACT</li>

          <?php }else {?>
          <li><a href="index.php">HOME</a></li>
          <li><a href="research.php">RESEARCH</a></li>
          <li><a href="member.php">MEMBER</a></li>
          <li><a href="publication.php">PUBLICATION</a></li>
          <li><a href="contact.php">CONTACT</a></li>
          <?php } ?>
        </ul>
      </nav>

      <div class="hamburger">
        <span></span>
        <span></span>
        <span></span>
      </div>
      <div id="mask"></div>
    </header>
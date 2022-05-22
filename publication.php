<!--このページはpublicationのトップページです。
　　　他のpublication〇.phpとは異なるレイアウトのファイルであるため，注意してください。-->

<?php
$title = "PUBLICATION | 太田・下嶋研究室";
$description = "過去の出版実績はこちら";
include "_inc/header.php"; ?>

    <main id="publication" class="main">
      <div class="bg">
        <h1 class="page-title">PUBLICATION</h1>
      </div>
      
      <section id="pickup" class="wrapper container">
        <div class="section-title">
          <h2 class="inview-show fadein">PICKUP<span class="ja-title">ー新しい成果ー</span></h2>
          <span class="inview-slide-l slide-l"></span>
          <span class="inview-slide-r slide-r"></span>
        </div>

        <!--使用しても良い画像かどうかは、先生方や研究員の方々にお聞きください。-->
        <div class="new inview-show fadein">
          <picture><source media= "(max-width: 768px)" srcset="img/pick_sp.jpg"><img src="img/pick.png"></picture>
       
          <!--更新される度に変更するのも手間なので、publication_templateファイルと同様の処理をしても良いかもしれない-->
          <div class="text inview-show fadein">
            <p>Developing a platform for production of the oxylipin KODA in plants</p>
            <p>Ihara, Y., Wakamatsu, T., Yokoyama, M., Maezawa, D., Ohta, H., Shimojima, M.</p>
            <p>2022, Journal of Experimental Botany.</p>
            <div class="publish-link">
              <a class="researcher" href="https://pubmed.ncbi.nlm.nih.gov/34958362/" target="_blank" rel="noopener noreferrer">Pubmed</a>
              <a class="researcher" href="https://europepmc.org/article/MED/34958362" target="_blank" rel="noopener noreferrer">PMC</a>
            </div>
          </div>
        </div>

        <div class="button">
          <a href="publication1.php">OUR ARCHIVEMENT</a>
        </div>
      </section>        
    </main>


<?php
  include "_inc/footer.php";
?>

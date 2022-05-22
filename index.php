<!--トップページです。
     主な更新個所は「mainvisual」と「news」の項目になります。-->

<?php
$title = "太田・下嶋研究室";
$description = "東京工業大学　生命理工学院　太田・下嶋研究室のホームページです。
                私達の研究目的は、植物の脂質合成・代謝の分子機構やその機能、そしてそれらの進化の道筋を解明することです。
                またその成果を最大限に活用し、植物や藻類で有用脂質の生産を行う仕組みづくりも目指しています。";
include "_inc/header.php"; ?>

    <main class="main">
    <!--集合写真をはじめ使えそうな写真ができたら、その都度自由に更新してください。
        表示させる写真の数を増やす際は、ScSSファイルにてanimationの秒数等を調整してください。-->
      <div id="mainvisual">
        <ul class="fade">
          <li><img src="img/mainvisual3.JPG"></li>
          <li><img src="img/mainvisual2.JPG"></li>
          <li><img src="img/mainvisual1.JPG"></li>
        </ul>
        <div class="logo"><img src="img/logo2.png" alt="Ohta-Shimojima Lab"></div> 
      </div>
      
      <section id="about" class="container">
        <div class="wrapper">
          <div class="section-title">
            <h2 class="inview-show fadein">ABOUT US<span class="ja-title">ー私たちの研究ー</span></h2>
            <span class="inview-slide-l slide-l"></span>
            <span class="inview-slide-r slide-r"></span>
          </div>
          <div>
            <div class="about-item inview-show fadein">
              <img src="img/about-1.JPG">
              <p>植物の脂質合成・代謝の分子機構や<br>その機能、進化の道筋の解明</p>
            </div>
            <div class="about-item inview-show fadein">         
              <img src="img/about-2.jpg">
              <p>植物や藻類で<br>有用脂質の生産を行う仕組みづくり</p>
            </div>
            <div class="about-item inview-show fadein">
              <img src="img/about-3.JPG">
              <p>ガスクロマトグラフィー (GC) を用いた<br>植物の脂質全般の解析</p>
            </div>
          </div>
          <div class="button">
            <a href="research.php">READ MORE</a>
          </div>
        </div>
      </section>

      <section id="plants" class="container">
        <div class="wrapper">
          <div class="section-title">
            <h2 class="inview-show fadein">PLANTS<span class="ja-title">ー研究で用いる植物ー</span></h2>
            <span class="inview-slide-l slide-l"></span>
            <span class="inview-slide-r slide-r"></span>
          </div>
        </div>

        <!--カーソルを合わせた際に、その植物の詳細な説明が出るような仕組みがあっても良いかもしれません。-->
        <ul id="slider">
          <li><img src="img/at.jpg" alt=""></li>
          <li><img src="img/mar.png" alt=""></li>
          <li><img src="img/kn.jpg" alt=""></li>
          <li><img src="img/bt.JPG" alt=""></li>
          <li><img src="img/ks.jpg" alt=""></li>
          <li><img src="img/nan.jpg" alt=""></li>
        </ul>  
      </section>
      

      <section id="news" class="wrapper container">
        <div class="section-title">
          <h2 class="inview-show fadein">NEWS<span class="ja-title">ーお知らせー</span></h2>
          <span class="inview-slide-l slide-l"></span>
          <span class="inview-slide-r slide-r"></span>
        </div>

        <!--現在は手動での更新になってしまっているので、phpを用いてシステム化するのもありかもしれません。-->
        <dl class="news-list">
          <dt><time datetime="2022-05-01">2022.05.01</time></dt>
          <dd>当研究室のホームページがリニューアルされました。</dd>
          <dt><time datetime="2022-04-28">2022.04.28</time></dt>
          <dd>東京工業大学YouTubeチャンネルにて、下嶋美恵准教授の研究が紹介されました。</dd>
          <dt><time datetime="2022-03-22">2022.03.22</time></dt>
          <dd>第63回日本植物生理学年会が開催されました。</dd>
          <dt><time datetime="2022-03-10">2022.03.10</time></dt>
          <dd>東工大ニュースにて、太田啓之教授の取り組みが紹介されました。</dd>
          <dt><time datetime="2022-02-14">2022.02.14</time></dt>
          <dd>当研究室の研究成果が、英国科学雑誌「Journal of Experimental Botany」に掲載されました。</dd>
        </dl>
      </section>

      <!--aboutの背景-->
      <div class="fadebg"></div>
    </main>

<?php
  include "_inc/footer.php";
?>

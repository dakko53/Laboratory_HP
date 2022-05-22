<!--このファイルは、publicationの子ページのテンプレートです。
　　 include "_inc/publication_template.php";で読み込ませます。-->

<!--ラボで借りているレンタルサーバーのMySQLへの接続（MySQLへのアクセスは、WWWサーバー代行サービスの管理ページから行えます。）
　　 セキュリティの都合上、伏字とさせていただきます。（パスワードについては前年度担当者にご確認ください。）-->
<?php
  $dsn = "mysql:host=xxxxxxxx;dbname=xxxxxxxx;charset=utf8";
  $username = "xxxxxxxx";
  $password = "xxxxxxxx";
  $dbh = new PDO($dsn, $username, $password);
?>

<main id="publication" class="main">
  <div class="bg">
    <h1 class="page-title">PUBLICATION</h1>
  </div>
    
  <section id="ac" class="wrapper container">
    <div class="section-title">
      <h2 class="inview-show fadein">ARCHIVE<span class="ja-title">ー過去の出版実績ー</span></h2>
      <span class="inview-slide-l slide-l"></span>
      <span class="inview-slide-r slide-r"></span>
    </div>

    <ul id="ac-menu">
      <!--それぞれの子ページで指定した$yearの値の年から始めて、直近5年分のデータを取得-->
      <?php 
      $title = $year;
      while($title > $year - 5) {
      ?>
      <!--<li>タグの内側がアコーディオンメニューのスタイルを含めた1年分の領域、
        　<dl>タグの内側が1年分の出版物のデータとなる-->
      <li>
        <div class="label"><?php echo $title; ?></div>
        <div class="detail">
          <dl> 
            <?php
            /*年ごとの出版数が異なるため、それぞれの年ごとに表示させるデータの件数を指定
              （個別に指定せずにもう少しスマートに纏められるよう、改善の余地あり）*/
              if ($title == "1997"){
                $number = "8";
                } 
                else if ($title == "1998"){
                  $number = "7";
                } 
                else if ($title == "1999"){
                  $number = "5";
                } 
                else if ($title == "2000"){
                  $number = "16";
                } 
                else if ($title == "2001"){
                  $number = "9";
                } 
                else if ($title == "2002"){
                  $number = "6";
                } 
                else if ($title == "2003"){
                  $number = "12";
                } 
                else if ($title == "2004"){
                  $number = "4";
                } 
                else if ($title == "2005"){
                  $number = "11";
                } 
                else if ($title == "2006"){
                  $number = "5";
                } 
                else if ($title == "2007"){
                  $number = "12";
                } 
                else if ($title == "2008"){
                  $number = "6";
                } 
                else if ($title == "2009"){
                  $number = "9";
                } 
                else if ($title == "2010"){
                  $number = "4";
                } 
                else if ($title == "2011"){
                  $number = "5";
                } 
                else if ($title == "2012"){
                  $number = "7";
                } 
                else if ($title == "2013"){
                  $number = "7";
                } 
                else if ($title == "2014"){
                  $number = "13";
                } 
                else if ($title == "2015"){
                  $number = "7";
                } 
                else if ($title == "2016"){
                  $number = "7";
                } 
                else if ($title == "2017"){
                  $number = "8";
                } 
                else if ($title == "2018"){
                  $number = "7";
                } 
                else if ($title == "2019"){
                  $number = "5";
                } 
                else if ($title == "2020"){
                  $number = "2";
                } 
                else if ($title == "2021"){
                  $number = "7";
                } 

            /*上から($start + 1)件目のデータから始めて指定した件数($number)分のデータを、$title年のものとして、「降順」で取得・表示させる
          　 「xxxxxx」にはテーブル名を入力*/    
              $sql = "SELECT * from xxxxxx order by id desc LIMIT $start,$number";
              $stmt = $dbh->query($sql);
            /*$numberの回数分下の処理を繰り返す（1周で1つ分のデータ）*/ 
              while($result = $stmt->fetch(PDO::FETCH_ASSOC)){
                echo "<dt>" .$result["title"]. "</dt>
                      <dd>" .$result["author"]. "</dd>
                      <dd>" .$result["pub"]. "</dd>";
              /*link1にデータがある場合（NULLでない場合）、下の記述を適用する*/ 
                if($result["link1"] != NULL){ 
                  echo "<dd>
                        <div class=\"publish-link\">
                          <a class=\"researcher\" href=\"" .$result["link1"]. "\" target=\"_blank\" rel=\"noopener noreferrer\">" .$result["mag1"]. "</a>";                           
                          /*link2にデータがある場合（NULLでない場合）、さらに下の記述も適用する*/        
                            if($result["link2"] != NULL){ 
                              echo "<a class=\"researcher\" href=\"" .$result["link2"]. "\" target=\"_blank\" rel=\"noopener noreferrer\">" .$result["mag2"]. "</a>"
                            ;}
                       "</div>
                        </dd>"
                ;}
              ;}
              echo "</dl>";
            ?>     
        </div>
      </li>
  <!--$titleの値を一つマイナス、その値が($title - 5)より大きければ、while文が最初から繰り返される
  　　$startの値を$number分上乗せして、最後に表示した次のデータから取得できるようにする-->  
    <?php
        $title--;
        $start = $start + $number;
      } 
    ?>
    </ul>
        
    <div class="pagination">
      <ul>
      <!--$pageの値を参照し、現在いるページから前後2ページずつをページネーションとして表示する
  　　　　前後3ページ以上離れたページが存在する場合には、「...」を表示する
  　　　　「「「要改善」」」
    　　　　 このままでは、現在ページ（aタグのない数字）が常に左右中央に来るわけではないため、視覚的に少々見づらい。
            また、ページ数が増えるたびに「$max」の値を変更しなければならず面倒なので、改善求みます。
  　　-->  
        <?php
          $max ="6";
          $min ="0";

        if ($page - 3 > $min) {?>
          <li>...</li>
        <?php } 
        if ($page - 2 > $min) {?>
          <li><a href="publication<?php echo $page - 2 ; ?>.php"><?php echo $page - 2; ?></a></li>
        <?php }
        if ($page - 1 > $min) {?>
          <li><a href="publication<?php echo $page - 1 ; ?>.php"><?php echo $page - 1; ?></a></li>
        <?php }?>
          <li><?php echo $page; ?></li>
        <?php 
        if ($page + 1 < $max) {?>
          <li><a href="publication<?php echo $page + 1 ; ?>.php"><?php echo $page + 1; ?></a></li>
        <?php }
        if ($page + 2 < $max) {?>
          <li><a href="publication<?php echo $page + 2 ; ?>.php"><?php echo $page + 2; ?></a></li>
        <?php }
        if ($page + 3 < $max) {?>
          <li>...</li>
        <?php }?>
      </ul>  
    </div>   
    <div class="back">
      <a href="publication.php" class="line">BACK TO PICKUP</a> 
    </div>       
  </section>        
</main>
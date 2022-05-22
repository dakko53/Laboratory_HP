<!--このファイルは、footerを一括で編集するために分割したものです。
　　 include "_inc/footer.php";で各ファイルの先頭に読み込ませます。-->

    <footer id="footer">
      <a id="to-top" href="#"></a>

      <div class="footer-item wrapper">
        <div class="ad">
          <p>東京工業大学　生命理工学院　生命理工学系</p>
          <p class="labo">太田・下嶋研究室</p>
          <p>〒226-8501 神奈川県横浜市緑区長津田町4259<br>B2棟330室</p>
        </div>

        <!--contactページへのリンク，自ページの場合は先頭に-->
        <div class="button">
          <?php 
            if($dir == "contact.php"){
              $link = "#access";
            }
            else {
              $link = "contact.php";
            }
          ?>
          <a href="<?php echo $link; ?>">CONTACT</a>
        </div>
      </div>
      <p class="copy wrapper">&copy; Ohta-Shimojima Lab. All rights reserved.</p>
    </footer>
 
  </body>
</html>

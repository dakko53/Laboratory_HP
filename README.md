# RESUME
このREADMEは、リポジトリーに含まれるコードの説明や、ホームページのアップデートの仕方、引継ぎに必要な情報を記入するためのものです。
ホームページの更新担当者は、必要に応じてドキュメントの更新・削除を行って下さい。
本リポジトリーには個人情報が含まれているため、それに留意した取り扱いをお願いします。
# 目次
- READMEの編集方法
- Git(hub)の使いかた
- ホームページのアップデート方法
- 担当者が最低限すべきこと(毎年のルーティーン)
- ファイルについての説明
- 注意事項

# READMEの編集方法
READMEは、本レポジトリーのrootディレクトリに保存されているREADME.mdを編集することで内容を更新することができます。.md拡張子のファイルは、マークダウン記法に従ったファイルです。
詳細は下記URLを参照してください。
https://www.markdownguide.org/getting-started/  

README.mdはGithub上でも編集することが可能ですが、コンフリクトが発生する可能性があるので、なるべく個人のPC(以下ローカル環境)にフェッチしてから編集してください。

# Git(hub)の使用方法
Githubを使用するためには、ローカル環境にGitをインストールする必要があります。https://git-scm.com/  

リポジトリをローカル環境にクローンし、ブランチに変更をプッシュするためのコマンドは以下の通りです。

```
$ git clone [repogitory URL]
$ git init
$ git checkout [new branch name] 
$ git pull origin master
$ git add .
$ git commit -m "[commitment coment]"
$ git push origin [branch name]
```
詳細は前年度の担当者に確認するか、以下のURLを参照してください。
https://backlog.com/ja/git-tutorial/reference/basic/

# ホームページのアップデート方法
HTML, CSS, JS等のソースコードを編集した後、サーバーへアップロードすることでホームページを更新することができる。
wwwサーバーのアドレス等の情報はバインダーにまとめられているのでラボ内を探してみてください。  
ファイル転送ソフトはFilezilla(https://filezilla-project.org) がおすすめですが、WinSCPなどのソフトでも転送可能です。

# 担当者が最低限すべきこと(毎年のルーティーン)
1. 学生の名前、学年の変更
2. 出版物の更新
3. 研究内容の確認・更新
4. 引継ぎ

基本的に四月末までには1.~3.までを完了させておくこと。

# ファイルについての説明
- _incフォルダ<br>
header、footer、各種templateなど、共通パーツを記述したphpファイルです。他のphpファイルにincludeで埋め込みます。
- CSSフォルダ<br>
基本的にstyle.scssを編集します。style.cssファイル・style.css.mapファイルはscssの出力によって生じるファイルです。詳細はSassで検索してみてください。（どうしてもscssの使い方が分からない場合は、cssを直接変更していただいても構いません。）<br>
fontsフォルダ、ajax-loader.gif、slick.css、slick-theme.cssはカルーセルスライダーに関するjQueryプラグイン「slick」です。
編集はしないでください。
- jsフォルダ<br>
基本的にmain.jsを編集します。<br>
jquery.inview.min.jsファイル、slick.min.jsファイルはjQueryプラグインです。編集はしないでください。
- imgフォルダ<br>
ホームページで使用する画像はまとめてここに入れてください。
- htmlファイル<br>
従来使われていたhtmlファイルを、新しくphpファイルに置き換えたことにより生じる問題を解決するため遺したファイルです。
.htmlへのアクセスを、.phpへ301リダイレクトさせる仕組みとなっています。
- phpファイル<br>
ホームページ上に表示されるファイルです。htmlにphpを埋め込んだ形になっています。
- mdファイル<br>
このファイルです。


※更新が必要なファイル
- _inc/publication_template.php
- index.php
- member.php
- 各種publication〇.phpファイル

# 注意事項
## master branchは直接編集しない
基本的にはbranchを切ってから作業すること。**master branch直編集はgilty**。
ブランチの切り方、マージの方法などは前年度担当者まで。

## issueは課題・作業の進捗管理に使う
issueは課題・作業の進捗管理に使ってください。特に、やりたいこと&毎年やるルーティーンはクローズせずに引き継いでください。
また、ルーティーン作業が終了したら、終了した旨を一言書いておいてください。


# 追記：大幅アップデートについて(2022.5.11)
これまでの内容はそのままに、主にデザイン・レイアウトやUI/UX面での改善、今後の更新の簡略化を目的とした大幅な更新を行いました。
内容は以下の通りです。
- デザインの一新、コード全体の一新
- PHPを用いた共通パーツ(header,footer等)のコンポーネント化
- MySQLを用いた出版物のデータベース化
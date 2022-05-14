<!DOCTYPE html>
<html lang="ja">
  <head>
  <meta charset="UTF-8">
  <title>4eachblog 掲示板</title>
  <link rel="stylesheet" type="text/css" href="style.css">
  </head>

  <body>

    <?php 

    mb_internal_encoding("utf8");
    $pdo = new PDO("mysql:dbname=lesson01;host=localhost;","root","");
    $stmt = $pdo->query("select*from 4each_keijiban");

    ?>

    <header>
      <img src="4eachblog_logo.jpg">
      <ul class="header_box">
        <li>トップ</li>
        <li>プロフィール</li>
        <li>4eachについて</li>
        <li>登録フォーム</li>
        <li>問い合わせ</li>
        <li>その他</li>
      </ul>
    </header>

    <div class="none">
      <div class="main">
        <h1>プログラミングに役立つ掲示板</h1>
        <form method="XXX" action="POST">
          <h3>入力フォーム</h3>
          <div>
            <label>ハンドルネーム</label>
            <br>
            <input type="text" class="text" name="name">
          </div>
          <div>
            <label>タイトル</label>
            <br>
            <input type="text" class="text" name="title">
          </div>
          <div>
            <label>コメント</label>
            <br>
            <textarea class="text" rows="7" name="comments"></textarea>
          </div>
          <div>
            <input type="submit" class="submit" value="投稿する">
          </div>
        </form>

        <?php
        while ($row = $stmt->fetch()) {

          echo "<div class='box'>";
          echo "<h3>".$row['title']."</h3>";
          echo "<div class='contents'>";
          echo $row['comments'];
          echo "<div class='handlename'>posted by".$row['handlename']."</div>";
          echo "</div>";
          echo "</div>";
        }

        ?>
      </div>

      <div class="sidebar">
        <h2>人気の記事</h2>
          <ul>
            <li>PHPオススメ本</li>
            <li>PHP MyAdminの使い方</li>
            <li>いま人気のエディタTop5</li>
            <li>HTMLの基礎</li>
          </ul>
        <h2>オススメリンク</h2>
        <ul>
          <li>インターノウス株式会社</li>
          <li>XAMPPのダウンロード</li>
          <li>Eclipseのダウンロード</li>
          <li>Bracketのダウンロード</li>
        </ul>
        <h2>カテゴリ</h2>
          <ul>
            <li>HTML</li>
            <li>PHP</li>
            <li>MySQL</li>
            <li>JavaScript</li>
          </ul>
      </div>
    </div>

    <footer>
      copyright internous | 4each blog is the one which provides A to Z about programming.
    </footer>
  </body>
<html>
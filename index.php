<?php
session_start();
$namae=$_SESSION['username'];
$point=$_SESSION['point'];
$userurl=$_SESSION['user_url'];

?>
<!DOCTYPE html>
<html lang="ja">
  <head>
    <meta charset="UTF-8">
    <title>ファイル送信ページ1</title>
  </head>
  <body>
    <p>現在のポイントは<?php echo $point?>ポイントです</p>
    <form method="post" enctype="multipart/form-data" action="file1.php">
      <input type="file" name="up">
      <input type="submit" value="アップロード">
    </form>
    <p><a href="Logout.php">ログアウト</a></p>
    <?php if(isset($_SESSION['username'])){
        echo $userurl;
    }?>
  </body>
</html>
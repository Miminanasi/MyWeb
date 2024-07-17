<?php
session_start();
$up_file  = "";
$up_ok = false;
$tmp_file = isset($_FILES["up"]["tmp_name"]) ? $_FILES["up"]["tmp_name"] : "";
$org_file = isset($_FILES["up"]["name"])     ? $_FILES["up"]["name"]     : "";
$user_name=isset($_SESSION['username'])?$_SESSION['username']:"";

if( $tmp_file != "" &&
   is_uploaded_file($tmp_file) )
{
 $split = explode('.', $org_file); $ext = end($split);
 if( $ext != "" &&
     $ext != $org_file  )
 {
   $up_file = "img/".$user_name . date("Ymd_His.") . mt_rand(1000,9999) . ".$ext";
   $up_ok = move_uploaded_file( $tmp_file, $up_file);
 }
}
?>
<!DOCTYPE html>
<html lang="ja">
 <head>
   <meta charset="UTF-8">
   <title>ファイル受信ページ1</title>
   <link rel="stylesheet" href="css/style.css">
 </head>
 <body>
   <p><?php if( $up_ok ){ ?>
     アップロードされたファイルは <img src="<?= $up_file ?>"> です。
   <?php }else{ ?>
     アップロードは失敗しました。
   <?php } ?></p>
   <a href="index.php">アップロードページへ戻る</a>
 </body>
</html>
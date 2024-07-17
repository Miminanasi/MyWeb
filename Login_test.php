<?php
session_start();
$mail = $_POST['mail'];
$username = "xxx";
$password = "xxx";

//指定したハッシュがパスワードにマッチしているかチェック
    //DBのユーザー情報をセッションに保存
    $_SESSION['id'] = $member['id'];
    $_SESSION['name'] = $member['name'];
    $msg = 'ログインしました。';
    $link = '<a href="index_test.php">ホーム</a>';
?>

<h1><?php echo $msg; ?></h1>
<?php echo $link; ?>



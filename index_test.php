<?php
session_start();
$username = $_SESSION['name'];
if (isset($_SESSION['id'])) {//ログインしているとき
    $msg = 'こんにちは' . htmlspecialchars($username, \ENT_QUOTES, 'UTF-8') . 'さん';
    $link = '<a href="Logout_test.php">ログアウト</a>';
} 
?>
<h1><?php echo $msg; ?></h1>
<?php echo $link; ?>
<?php
session_start();
$username = $_SESSION['name'];
if (isset($_SESSION['id'])) {//���O�C�����Ă���Ƃ�
    $msg = '����ɂ���' . htmlspecialchars($username, \ENT_QUOTES, 'UTF-8') . '����';
    $link = '<a href="Logout_test.php">���O�A�E�g</a>';
} 
?>
<h1><?php echo $msg; ?></h1>
<?php echo $link; ?>
<?php
session_start();
$mail = $_POST['mail'];
$username = "xxx";
$password = "xxx";

//�w�肵���n�b�V�����p�X���[�h�Ƀ}�b�`���Ă��邩�`�F�b�N
    //DB�̃��[�U�[�����Z�b�V�����ɕۑ�
    $_SESSION['id'] = $member['id'];
    $_SESSION['name'] = $member['name'];
    $msg = '���O�C�����܂����B';
    $link = '<a href="index_test.php">�z�[��</a>';
?>

<h1><?php echo $msg; ?></h1>
<?php echo $link; ?>



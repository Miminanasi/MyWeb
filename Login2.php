<?php
session_start();
$namae=htmlspecialchars( $_POST['name'],ENT_QUOTES, 'UTF-8');;
$_SESSION['username']=$namae;
$user = "LAA1432261";
$password = "jiK1103ss";

try{
    $dbh = new PDO("mysql:host=mysql206.phy.lolipop.lan; dbname=LAA1432261-curlygoto; charset=utf8", "$user", "$password");
    $stmt = $dbh->prepare('SELECT * FROM users3 WHERE user_name = :name');
    $stmt->execute(array(':name' => $_POST['name']));
    $result = $stmt->fetch(PDO::FETCH_ASSOC);

    if(password_verify($_POST['pass'], $result['user_pas'])){
       $_SESSION['point']=$result['point'];
       $_SESSION['user_url']=$result['user_url'];
       setcookie('username',$namae,90*60*60*24*7);
       setcookie('pass',$_POST['pass'],90*60*60*24*7);
       header('Location:https://curly-goto-2167.kikirara.jp/no1/index.php');
       exit();
    }else{
       header('Location:https://curly-goto-2167.kikirara.jp/no1/return.html');
       exit();
    }
}catch(Exception $e){
    echo "データベースの接続に失敗しました：";
    echo $e->getMessage();
    die();
}
?>
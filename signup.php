<?php

$user = "";
$password = "";

try{

$dbh = new PDO("", "$user", "$password");

$stmt = $dbh->prepare("INSERT INTO users3 (user_name, user_pas) VALUES (:name, :password)");

if(!$stmt->execute(array(':name' => $_POST['name'],':password' => password_hash($_POST['pass'], PASSWORD_DEFAULT)))){
    $check=$_POST['name'] ;
    echo $check;
    echo "すでに使われている名前です";
    echo '<br>';
    echo '<a href="practice.html">ホーム</a>';
}else{
    echo "登録完了";
    echo '<br>';
    echo '<a href="practice.html">ホーム</a>';
}

}catch(Exception $e){
    echo "データベースの接続に失敗しました：";
    echo $e->getMessage();
    die();
}

?>


<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>ログイン</title>
    <link rel="stylesheet" href="css/style_login.css">
</head>
<body>
    <main id="main">
        <h1>ログイン</h1>
        <form action="Login2.php" method="post">
            <dl>
                <dt>名前:</dt>
                <dd><input type="text" name="name" value="<?php if(isset($_COOKIE['username'])){echo $_COOKIE['username'];} ?>"></dd>
                        
                <dt>パスワード:</dt>
                <dd><input type="password" name="pass"></dd>
            </dl>

            <input type="submit" name="submit" value="ログインする">
        </form>
    </main>
</body>
</html>
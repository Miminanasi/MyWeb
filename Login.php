<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>���O�C��</title>
    <link rel="stylesheet" href="css/style_login.css">
</head>
<body>
    <main id="main">
        <h1>���O�C��</h1>
        <form action="Login2.php" method="post">
            <dl>
                <dt>���O:</dt>
                <dd><input type="text" name="name" value="<?php if(isset($_COOKIE['username'])){echo $_COOKIE['username'];} ?>"></dd>
                        
                <dt>�p�X���[�h:</dt>
                <dd><input type="password" name="pass"></dd>
            </dl>

            <input type="submit" name="submit" value="���O�C������">
        </form>
    </main>
</body>
</html>
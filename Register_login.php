<html>
<head>
    <title></title>
    <meta charset="utf-8">
</head>
<body>
<?php
if (!isset($_POST['login']) || !isset($_POST['password'])){
        die ("Не все данные введены.<br>
                Пожалуйста, вернитесь назад и закончите ввод");
}
$login   = trim ( $_POST['login'] );
$password = trim ( $_POST['password'] );
$login  = addslashes ( $login );
$password = addslashes ( $password );
$db = "reg_okno";
$link = $GLOBALS['link'] = mysqli_connect('localhost', 'root', '', 'reg_okno');
if ( !$link ) die ("Невозможно подключение к MySQL");
$GLOBALS['link'] = mysqli_connect('localhost', 'root', '', 'reg_okno') or die ("Can't open $db");
$query = "INSERT INTO user VALUES ('"
    .$login."', '".$password."')";
$result =   mysqli_query($GLOBALS['link'],$query );
if ($result) echo "User isert in ";
mysqli_close ( $link );
?>
</body>
</html>
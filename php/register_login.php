<html>
<head>
    <title>Регистрация</title>
    <meta charset="utf-8">
</head>
<body>
<?php
	$name   = trim ( $_POST['name'] );
	$password = trim ( $_POST['password'] );
	if ($name== null || $password == null){
	    echo "<script>alert('Не все данные введены.' )</script>";
	    echo "<script>document.location.href='../register.html'</script>";
	}
	else{
		$name  = addslashes ( $name );
		$password = addslashes ( $password );
		$db = "user-accounts";
		$link = $GLOBALS['link'] = mysqli_connect('localhost', 'root', '', 'user-accounts');
		if ( !$link ) die ("Невозможно подключение к MySQL");
		$GLOBALS['link'] = mysqli_connect('localhost', 'root', '', 'user-accounts') or die ("Can't open $db");
		$query = "INSERT INTO users VALUES ('"
		    .$name."', '".$password."')";
		$result =   mysqli_query($GLOBALS['link'],$query );
		if ($result) {
			echo "<script>alert('Вы создали аккаунт' )</script>";
          	echo "<script>document.location.href='../main.html'</script>";
      	}
		
	}
?>
</body>
</html>
<!DOCTYPE html>
<html>
<head>
	<title>Удаление</title>
</head>
<body>
<?php 	
		$name =trim ( $_GET['name']);
		if ($name == null){
	    echo "<script>alert('Вы не авторизованы' )</script>";
	    echo "<script>document.location.href='../index.html'</script>";
		}
		$link = $GLOBALS['link'] = mysqli_connect('localhost', 'root', '', 'user-accounts');
		if ( !$link ) die ("Невозможно подключение к MySQL");
		if ($conn->connect_error) {
		  die("Соединение прервано " . $conn->connect_error);
		}
		$GLOBALS['link'] = mysqli_connect('localhost', 'root', '', 'user-accounts') or die ("Can't open $db");
		$name =trim ( $_GET['name']);
		$query = "DELETE FROM `users` WHERE `name` = '$name'";
		$result =   mysqli_query($GLOBALS['link'],$query );
		if ($result) {
			echo "<script>alert('Вы удалили аккаунт')</script>";
        	echo "<script>document.location.href='../index.html'</script>";
      	}
		else {
		  echo "Ошибка" . $conn->error;
		}	
?>
</body>
</html>
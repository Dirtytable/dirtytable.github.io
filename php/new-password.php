<!DOCTYPE html>
<html>
<head>
	<title>Новый пароль</title>
	<meta charset="utf-8">
</head>
<body>
	<?php
		$name =trim ( $_GET['name']);
		$password = trim ( $_POST['password'] );
		if ($name == null ){
	    echo "<script>alert('Вы не авторизованы' )</script>";
	    echo "<script>document.location.href='../index.html'</script>";
		}
		if ($password == null){
	    echo "<script>alert('Новый пароль не введен' )</script>";
	    echo "<script>document.location.href='main.php'</script>";
		}
		else{
			
			$password = addslashes ( $password );
			$db = "user-accounts";
			$link = $GLOBALS['link'] = mysqli_connect('localhost', 'root', '', 'user-accounts');
			if ( !$link ) die ("Невозможно подключение к MySQL");
			if ($conn->connect_error) {
			  die("Соединение прервано " . $conn->connect_error);
			}
			$GLOBALS['link'] = mysqli_connect('localhost', 'root', '', 'user-accounts') or die ("Can't open $db");
			
			$query = "UPDATE `users` SET `password`='$password' WHERE `name` = '$name'";
			$result =   mysqli_query($GLOBALS['link'],$query );
			if ($result) {
				echo "<script>alert('Вы успешно заменили пароль')</script>";
	        	echo "<script>document.location.href='http://localhost/denwer/web-tzi18-09r-koshkin-asset/site/php/main.php?name=$name'</script>";
	      	}
			else {
			  echo "Ошибка" . $conn->error;
			}	
			
		}

		
	
	
	?>
</body>
</html>
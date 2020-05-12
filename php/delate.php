<!DOCTYPE html>
<html>
<head>
	<title>Удаление</title>
</head>
<body>
<?php 
        $conn = new mysqli('localhost', 'root', '', 'user-accounts');
		if ($conn->connect_error) {
		  die("Соединение прервано " . $conn->connect_error);
		}
		$name = $_GET['name'];
		$sql = "DELETE FROM `users` WHERE `name` = '$name'";
		if ($conn->query($sql) === TRUE) {
		  	echo "<script>alert('Вы удалили аккаунт')</script>";
        	echo "<script>document.location.href='../index.html'</script>";
		} else {
		  echo "Ошибка" . $conn->error;
		}	
?>
</body>
</html>
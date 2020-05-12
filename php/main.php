<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8"> 
	<title>Главная страница</title>
	<link rel="stylesheet" type="text/css" href="../styles/main-style.css">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>
<body>

	<?php
		$name = $_GET ['name'];
		$db = "user-accounts";
		$link = $GLOBALS['link'] = mysqli_connect('localhost', 'root', '', 'user-accounts');
		if ( !$link ) die ("Невозможно подключение к MySQL");
		$GLOBALS['link'] = mysqli_connect('localhost', 'root', '', 'user-accounts') or die ("Can't open $db");
		$user = "SELECT * FROM `users` WHERE `name` = '$name'";
   		$quer =   mysqli_query($GLOBALS['link'], $user );
		$row = $quer -> fetch_assoc();
		
		
	?>

	<section class="menu">
		<div class="container-fluid">
		  <div class="row">
		    <div class="сol">
		      <div class="logo">
		        <img   src="../images\logo.png" onmouseout="this.src='../images/logo.png'" onmouseover="this.src='../images/logo2.png'">
		      </div>
		    </div>  
		          
		    <div class="col">
		      <div class="list">
		        <div class="row">
		          <div class="col">
		          	<p>Никнейм:
		            <?php 
		            echo $row['name'];
		            ?>
		            </p> 
		            <p>
		            Пароль:
		            <?php 
		            echo $row['password'];
		            ?>
		            </p>
		          </div>
		          <div class="col">
		          	<a href="http://localhost/denwer/web-tzi18-09r-koshkin-asset/site/php/new-password.php?name=<?php $row['name'] ?>" class="btn btn-info"> Поменять пароль</a>
		          	<a href="http://localhost/denwer/web-tzi18-09r-koshkin-asset/site/php/delate.php?name=<?php $row['name'] ?>" class="btn btn-danger"> Удалить аккаунт</a>
		          </div>
		        </div>
		      </div>
		    </div>
		  </div>
		</div>
	</section>

	<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>
</html>
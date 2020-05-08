<html>
<head>
    <title></title>
</head>
<body>

<?php
    $host = 'localhost';
    $database = 'reg_okno';
    $user = 'root';
    $password = '';
	$GLOBALS['link'] = mysqli_connect('localhost',
            'root','', 'reg_okno');
    $conn = mysqli_connect($host, $user, $password, $database)
      or die("error " . mysqli_error($conn));
      $user = "SELECT * FROM `user` WHERE `login` = '$_POST[login]'";
      $quer =   mysqli_query($GLOBALS['link'], $user );
        while($row = $quer -> fetch_assoc()){
          if($row['password'] == $_POST['password']){
            echo "<a href='index.php'>Back</a>";
            echo "<script>alert('Autorizated')</script>";
            }else{
                echo "<a href='index.php'>Back</a>";
                echo "<script>alert('Password is not correct')</script>";
        }
      }
    
  
 ?>
</body>
</html>
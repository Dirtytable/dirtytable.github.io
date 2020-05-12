<html>
<head>
    <title>Авторизация</title>
    <meta charset="utf-8">
</head>
<body>
<?php
  $host = 'localhost';
  $database = 'user-accounts';
  $user = 'root';
  $GLOBALS['link'] = mysqli_connect('localhost', 'root','', 'user-accounts');
  $conn = mysqli_connect($host, $user, '', $database) or die("error " . mysqli_error($conn));
  $res = mysqli_query($GLOBALS['link'], "SELECT `name` FROM `users` WHERE `name` = '$_POST[name]'");
  $count = mysqli_num_rows($res);

  if( $count > 0 ) {
    $user = "SELECT * FROM `users` WHERE `name` = '$_POST[name]'";
    $quer =   mysqli_query($GLOBALS['link'], $user );
      while($row = $quer -> fetch_assoc()){
        

        if($row['password'] == $_POST['password']){
          echo "<script>alert('Вы авторизованы' )</script>";
          echo "<script>document.location.href='../main.html'</script>";
        
        }
        else{
          echo "<script>alert('Пароль или Никнейм введён неправильно')</script>";
          echo "<script>document.location.href='../enter.html'</script>";
         
        }   
      }
  } else {
      echo "<script>alert('Пароль или Никнейм введён неправильно')</script>";
      echo  "<script>document.location.href='../enter.html'</script>";
  }
?>
</body>
</html>
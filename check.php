<?php
include ('db.php');
$loginn = $_POST['username'];
$parol = $_POST['parol'];

$sql = "SELECT * FROM user WHERE login = \"$loginn\" AND password =\"$parol\"";
$sorgu = $conn-> query($sql);

//login ve parol yoxlanmasi
 if (isset($loginn) && isset($parol)) {
   if (empty($loginn) || empty($parol)) {
    echo "<h1>Xanalari bos buraxmayin</h1>";
  }/*COMMENT to test pull request*/
  elseif(!empty($loginn) && !empty($parol)) {
    $user = $sorgu->fetch_assoc();
     if($user != null){
        extract($user);
        // echo $login."<br>".$password."<br>";
       if ($loginn == $login && $parol == $password) {
           //$login ve $password cedveldeki sutunun adidir
             echo "<h1>Xos gelmisiniz</h1>";
            }
        }  else {
          echo "<h1>Login ve ya parol yanlisdir</h1>";
        }
   }
 }
$conn->close();
 ?>

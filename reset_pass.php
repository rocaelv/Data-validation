<?php 
if($_GET['key'] && $_GET['reset'])
{
  $email=$_GET['key'];
  $pass=$_GET['reset'];
  mysql_connect('localhost','root','');
  mysql_select_db('sample');
  $select=mysql_query("select email,password from user where md5(email)='$email' and md5(password)='$pass'");
  if(mysql_num_rows($select)==1)
  {
    ?>
    <form method="post" action="submit_new.php">
    <input type="hidden" name="email" value="<?php echo $email;?>">
    <p>Enter New password</p>
    <input type="password" name='password'>
    <input type="submit" name="submit_password">
    </form>
    <?php
  }
}
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="post" action="send_link.php">
        <p>Enter Email Address To Send Password Link</p>
        <input type="text" name="email">
        <input type="submit" name="submit_email">
    </form>
</body>
</html>


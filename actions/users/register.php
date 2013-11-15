<?php
  include_once('../../config/init.php');
  include_once($BASE_DIR .'database/users.php');  

  $realname = $_POST['realname'];
  $username = $_POST['username'];
  $password = $_POST['password'];
  
  createUser($realname, $username, $password);
  header("Location: $BASE_URL");
?>

<?php
  include_once('../../config/init.php');
  include_once($BASE_DIR .'database/tweets.php');

  if (!isset($_GET['username'])) die('username missing');
  $username = $_GET['username'];
  
  $tweets = getUserTweets($username);  
  
  $smarty->assign('tweets', $tweets);
  $smarty->display('tweets/list.tpl');
?>

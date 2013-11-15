<?php
  $BASE_DIR = '...';
  $BASE_URL = '...';

  $conn = new PDO('pgsql:host=HOSTNAME;dbname=DATABASE', 'USER', 'PASSWORD');
  $conn->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
  
  include_once($BASE_DIR . 'lib/smarty/Smarty.class.php');
  
  $smarty = new Smarty;
  $smarty->template_dir = $BASE_DIR . 'templates/';
  $smarty->compile_dir = $BASE_DIR . 'templates_c/';
  $smarty->assign('BASE_URL', $BASE_URL);
?>

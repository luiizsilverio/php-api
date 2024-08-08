<?php

  require_once "../vendor/autoload.php";

  // api/users/1
  if ($_GET['url']) {
    $url = explode('/', $_GET['url']);

    if ($url[0] === 'api') {
      echo 'api';


    }
  }
?>

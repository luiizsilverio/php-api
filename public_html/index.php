<?php

  require_once "../vendor/autoload.php";
 
  // http://localhost/php-api/public_html/api/users/1
  if ($_GET['url']) {
    $url = explode('/', $_GET['url']);

    if ($url[0] === 'api') {
      array_shift($url); // remove o 1.o elemento do array

      if (empty($url)) 
        die("Informe o Endpoint da API");

      $controller = 'App\Controllers\\' . ucfirst($url[0]) . 'Controller';
      array_shift($url); // remove o 1.o elemento novamente
      $method = strtolower($_SERVER['REQUEST_METHOD']);

      try {
        $response = call_user_func_array(array(new $controller, $method), $url);
        echo "<pre>";
        var_dump($response);
        echo "</pre>";
      }
      catch (\Exception $e) {
        echo $e->getMessage();
      }         

    }
  }
?>

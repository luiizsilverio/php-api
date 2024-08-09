<?php

  header('Content-Type: application/json');

  require_once "../vendor/autoload.php";
 
  // http://localhost/php-api/public_html/api/users/1
  if ($_GET['url']) {
    $url = explode('/', $_GET['url']);

    if ($url[0] === 'api') 
      try {
        array_shift($url); // remove o 1.o elemento do array

        if (empty($url)) 
          throw new \Exception("Informe o Endpoint da API");

        $rota = ucfirst($url[0]);
        if ($rota !== 'User')
          throw new \Exception("Endpoint inválido");

        $controller = 'App\Controllers\\' . $rota . 'Controller';
        array_shift($url); // remove o 1.o elemento novamente
        $method = strtolower($_SERVER['REQUEST_METHOD']);

        http_response_code(200);
        $response = call_user_func_array(array(new $controller, $method), $url);
        echo json_encode(array('status' => 'success', 'data' => $response));
      }
      catch (\Exception $e) {
        http_response_code(404);
        echo json_encode(array('status' => 'error', 'data' => $e->getMessage()));
      }  
    }

?>

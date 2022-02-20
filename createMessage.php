<?php
    require 'Controller/MessagesController.php';
    $msg = new MessagesController();
    $hash = new URLT("");
    $message = new Message("");
    header("Content-type: application/json; charset=utf-8");
    if (!empty($_GET['url']) ) {
      $hash = new URLT($_GET['url']);
      $message = new Message($_POST['message']);
      if (!empty($_POST['message'])) { 
        echo json_encode($msg->createMessage($_GET['url'],$hash,$message));
      } else {
        echo json_encode($msg->messages($hash));        
      }
    } else {
      echo json_encode("Sem parâmetros");      
    }
?>
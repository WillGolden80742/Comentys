<?php
    require 'Controller/MessagesController.php';
    $msg = new MessagesController();
    header("Content-type: application/json; charset=utf-8");
    if (!empty($_POST['id']) ) {
      $msg->deleteMessage($_POST['id']);
      echo json_encode("Deletado com sucesso!");
    } else {
      echo json_encode("Sem parâmetros");      
    }
?>
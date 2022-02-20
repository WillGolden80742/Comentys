<?php
    require 'Controller/MessagesController.php';
    $msg = new MessagesController();
    $hash = new URLT("");
    if (!empty($_POST['url'])) {
      $hash = new URLT($_POST['url']);
    }
    header("Content-type: application/json; charset=utf-8");
    echo json_encode($msg->messages($hash));
?>
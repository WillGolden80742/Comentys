<?php
    ini_set('display_errors', 1);
    error_reporting(E_ALL);
    require 'Controller/MessagesController.php';
    $msg = new MessagesController();
    header("Content-type: application/json; charset=utf-8");
    echo json_encode($msg->messages());
?>
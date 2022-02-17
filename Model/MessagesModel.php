<?php 
    include 'ConnectionFactory/ConnectionFactory.php';
    include 'Controller/Message.php';
    class MessagesModel {
        private $conFactory;
        function __construct() {
            $this->conFactory = new ConnectionFactory();
        }
    }      
?>    
<?php 
    require 'ConnectionFactory/ConnectionFactory.php';
    require 'Controller/Message.php';
    require 'Controller/StringT.php';
    require 'Controller/URLT.php';
    
    class MessagesModel {
        private $conFactory;
        function __construct() {
            $this->conFactory = new ConnectionFactory();
        }

        function messages (URLT $siteHash) {
            return $this->conFactory->query("SELECT *, DATE_FORMAT(messages.date, '%H:%i') as HourMsg FROM messages WHERE siteHash = \"".$siteHash."\"");
        }

        function createMessage ($site, URLT $siteHash, Message $message) {
            $this->conFactory->query("INSERT INTO messages (siteHash,siteLink,messages) VALUES ('".$siteHash."','".$site."','".$message."')");
        }

        function deleteMessage ($id) {
            echo $this->conFactory->query("DELETE FROM messages WHERE idMessages = '".$id."'");
        }
    }      
?>    
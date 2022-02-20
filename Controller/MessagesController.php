<?php 
    require 'Model/MessagesModel.php';
    class MessagesController {
        function __construct() {
            $this->messages = new MessagesModel();
        }

        function messages (URLT $siteHash) {
            $result =  $this->messages->messages($siteHash);
            $msg= "<h3 >".substr($siteHash,0,28)."...</h3>";
            while($row = mysqli_fetch_assoc($result)) { 
              $msg.="<div class=\"msgDiv\"><div class=\"msgBox\"><h4>".$row["messages"]."</h4>".$row["HourMsg"]."</div><div class=\"deleteDiv\" id=\"".$row["idMessages"]."\" onclick='deleteMsg(".$row["idMessages"].");' >Delete</div></div><br>";
            }
            return $msg;
        }

        function createMessage ($site, URLT $siteHash, Message $message) {
            $this->messages->createMessage($site,$siteHash,$message);
            return $this->messages ($siteHash);
        }

        function deleteMessage ($id) {
           $this->messages->deleteMessage($id);
        }
    }
?>
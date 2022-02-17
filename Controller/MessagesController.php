<?php 
    require 'Model/MessagesModel.php';
    class MessagesController {
        private $conFactory;
        function __construct() {
            $this->conFactory = new ConnectionFactory();
        }

        function messages () {
            $result =  $this->conFactory->query("SELECT *, DATE_FORMAT(messages.date, '%H:%i') as HourMsg FROM messages");
            $msg = "";
            while($row = mysqli_fetch_assoc($result)) { 
              $msg.="<h4>".$row["Messages"]."</h4> ".$row["HourMsg"]."<br><br>";
            }
            return $msg;
        }


    }
?>
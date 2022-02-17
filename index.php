<?php 
    require 'global.php';    
?>
<DOCTYPE html>
<html>
<head>
<script src="assets/js/javascript.js"></script>
<script src="assets/js/jquery-3.6.0.min.js"></script>
<script src="assets/js/jquery.js"></script>
<script>
    $(document).ready(function(){
        deleteMessage();
        function deleteMessage () {
          $.ajax({
            url: 'messages.php',
            method: 'POST',
            data: {},
            dataType: 'json'
          }).done(function(result) {
              document.getElementById('messages').innerHTML=result;
          });
        }
    });
</script> 
</head>    
<body class="container">
  <?php
    if (!empty($_GET['url'])) {
      echo $_GET['url'];
    }
  ?>  
  <p id="messages"> </p>
</body>
</html>


<?php 
    require 'global.php';    
?>
<DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" href="assets/css/styles.css">  
  <script src="assets/js/jquery-3.6.0.min.js"></script>
  <script src="assets/js/javascript.js"></script>
  <script>
    var server = "http://"+"<?php echo getenv('SERVER'); ?>";
    Message();
    function Message () {
          $.ajax({
                url: server+'/Comentys/messages.php',
                method: 'POST',
                data: {url:"<?php echo $_GET['url']; ?>"},
                dataType: 'json'
          }).done(function(result) {
                document.getElementById('messages').innerHTML=result;
                document.getElementById('container').scrollTo(0,10000000000);
          });
    }
    function deleteMsg (id) {
          $.ajax({
                url: server+'/Comentys/deleteMessage.php',
                method: 'POST',
                data: {id:id},
                dataType: 'json'
          });
          Message();
    }
  </script>
</head>    
<body class="container" id="container">
    <span id="messages"></span>
</body>
</html>

<?php
  require_once 'init.php';

  $sql = "SELECT * FROM messages WHERE "


  $chatStatement = $db->prepare($sql);
  $chatStatement->execute();

  if(isset($_GET['time']))
  $chat = $chatStatement->fetchAll()  
  ?>
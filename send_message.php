<?php
  require_once 'init.php';

  if(! isset($_POST['messagetxt'])){
    echo json_decode(['error' => 'no message'])
    die();
}


$sql = "INSERT INTO `message`(`author_id`, `message`,);VALUES
(:author , :message_chat)";

$chatStatement = $db->prepare($sql);
$chatStatement->execute([
    "author" => $_SESSION ['user_id']
    "message_chat" => $_POST ['messagetxt']
]);
$chat = $chatStatement->fetchAll();

header('Location: memory.php');
<?php
  require_once 'init.php';

  if(! isset($_POST['messagetxt'])){
    echo json_decode(['error' => 'no message'])
    die();
}
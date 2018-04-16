<?php
  include_once "../data/connection.php";
  include_once '../model/user.php';

  $name = $_POST['username'];
  $phone = $_POST['telephone'];
  $password = $_POST['password'];

  $user = new User($name, $phone, $password);

  $sql = "INSERT INTO enterprise.user (username, phone, password) VALUES('$user->username', '$user->phone', '$user->password')";

  $insert = $connect->query($sql);

  $result = array('status' => 0, 'message' => '');

  if ($insert){
    $result['status'] = 1;
    $result['message'] = "Usuario agregado correctamente";
  }
  else{
    $result['message'] = "Algo salió mal";
  }

  echo json_encode($result);

 ?>

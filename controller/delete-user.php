<?php
  include_once "../data/connection.php";

  $userName = $_POST['username'];
  $result = $connect->query("SELECT * FROM enterprise.user where username = '$userName'");
  $JSONresult = array('status' => 0, 'message' => '');
  if ($result) {
    $deleteResult = $connect->query("DELETE FROM enterprise.user WHERE username = '$userName'");
    if ($deleteResult) {
      $JSONresult['status'] = 1;
      $JSONresult['message'] = "Usuario eliminado satisfactoriamente";
    }
    else{
      $JSONresult['message'] = "No se pudo eliminar el usuario, intente más tarde";
    }
  }
  else{
    $JSONresult['message'] = "Usuario no existe";
  }

  echo json_encode($JSONresult);

 ?>

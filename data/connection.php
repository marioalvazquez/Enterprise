<?php
  $host = "localhost";
  $db = "enterprise";
  $pass = "EasyPass321";
  $user = "root";

  $connect = new mysqli($host, $user, $pass, $db) or die($mysqli->error);

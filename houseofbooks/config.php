<?php

function getDbConnection(): mysqli {
  $host = "127.0.0.1";
  $dbName = "login_app";
  $dbUser = "root";
  $dbPassword = "";

  $connection = new mysqli($host, $dbUser, $dbPassword, $dbName);

  if ($connection->connect_error) {
    throw new RuntimeException("Error de conexión a la base de datos");
  }

  $connection->set_charset("utf8mb4");

  return $connection;
}
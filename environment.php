<?php
$tipo_conexao = $_SERVER['HTTP_HOST'];
if($tipo_conexao == 'localhost' or $tipo_conexao == '127.0.0.1'){
  define("ENVIRONMENT", "development");
}else{
  define("ENVIRONMENT", "production");
}
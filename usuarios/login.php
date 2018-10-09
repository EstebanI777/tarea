<?php
 session_start();
 require_once 'LIGA3/LIGA.php';
 
 BD('localhost', 'root', '', 'base');
 
 $usuarios = LIGA("select * from usuarios where id='$_POST[id]' and pass = md5('$_POST[pass]')");
 
 if ($usuarios->numReg() == 1) {
    $_SESSION['id'] = $usuarios->d('id');
    $_SESSION['pass'] = $usuarios->d('pass');
  
    echo 'Usuario válido';
 } else {

    echo 'Error Los Datos No Son Validos';
 }

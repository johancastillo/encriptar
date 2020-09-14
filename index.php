<?php
  echo "<h1>Encriptar datos con password_hash()</h1>"."<br>";
  //Dato a encriptar
  $password = "123456";

  //Encriptando mediante password_hash()
  $hash = password_hash($password, PASSWORD_DEFAULT, ['cost' => 10]);

  //Mostrando hash en pantalla
  echo $hash.'<br>';

  //Validando hash mediante password_verify()
  if (password_verify($password, $hash)) {
    echo "El password es correcto";
  }else{
    echo "El password es incorrecto";
  }

?>

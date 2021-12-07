<?php

  //criando um arquivo com php 
  // if(file_exists('file.txt')){
  //   echo 'o arquivo existe';
  // }else{
  //   $content = "meu novo arquivo criado atravez do php";
  //   file_put_contents('file.txt', $content);
  // }

  $content = file_get_contents('file.txt');

  echo $content;

?>
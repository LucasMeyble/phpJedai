<?php

  //foreach e for para arrays

  // $arr = ['guilherme', 'joao', 'lucas', 'pedro'];

  // foreach ($arr as $key => $value) {
  //   echo $key;
  //   echo '=>';
  //   echo $value;
  //   echo '<hr>';
  // }

  // $total = count($arr);

  // for($i = 0; $i < $total; $i++){
  //   echo $arr[$i];
  //   echo '<br>';
  // }

  //------------------------------------------------------------------------------------------------------------------------

  //arrays multidimensionais

  // $arr = [$arr1 = ['lucas', 'pedro'], $arr2 = [23, 25]];

  // echo $arr[1][1];

  //------------------------------------------------------------------------------------------------------------------------

  //Die e sleep

  // sleep(3);

  // echo 'ola';

  //------------------------------------------------------------------------------------------------------------------------

  //criando funções 

  // function mostrarNome($nome, $idade){
  //   echo "<h2>Meu nome é $nome</h2>";
  //   echo '<hr>';
  //   echo "<h3>E minha idade é $idade</h3>";
  // }

  // mostrarNome('lucas', 21);

  //------------------------------------------------------------------------------------------------------------------------

  //funções nativas

    //datas
    // date_default_timezone_set('America/Sao_Paulo');

    // $data = date('d/m/Y H:i:s', time() + (60*10));

    // echo $data;
  
  //------------------------------------------------------------------------------------------------------------------------

  //funções para string

  // $conteudo = 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Qui ipsa alias eius, doloremque dolores nobis cum eos esse laborum similique obcaecati nam incidunt voluptatibus magni ullam dolore atque, placeat beatae.';
  
  //recortar uma string
  // echo substr($conteudo, 0, 20);

  // $name = 'lucas meyble ramos de luna';
  //separa a string com base no primeiro parametro
  // $names = explode(' ', $name);
  // print_r($names);
  //faz o inverso
  // $names = implode(' ', $names);
  // echo $names;

  //------------------------------------------------------------------------------------------------------------------------

  //switch, continue e break

  // $name = 'Lucas';

  // switch($name){
  //   case 'Lucas': 
  //     echo 'Minha variavel é lucas';
  //     break;
  //   case 'Joao':
  //     echo 'Minha variavel é joão';
  //     break;
  // }

  //------------------------------------------------------------------------------------------------------------------------

  //funções para manipular arrays

  // $array1 = ['chave1' => 'valor1', 'chave2' => 'valor2'];
  // $array2 = ['chave3' => 'valor3', 'chave4' => 'valor4'];

  // $result = array_merge($array1, $array2);

  // print_r($result);

  //aqui eu pego todo o array e aplico uma função para cada item do array com o array_map
  // $arr = ['<p>lucas</p>', 'joao', '<h1>Fabricio</h1>'];

  // print_r(array_map('strip_tags', $arr));

  //------------------------------------------------------------------------------------------------------------------------
  // get, POST

  // if(isset($_GET['acao'])){
  //   $name = @$_GET['name'];
  //   $email = @$_GET['email'];
  
  //   echo $name;
  //   echo '<br />';
  //   echo $email;
  // }

  // if(isset($_POST['acao'])){
  //   $name = @$_POST['name'];
  //   $email = @$_POST['email'];
  
  //   echo $name;
  //   echo '<br />';
  //   echo $email;
  // }

  // if(isset($_POST['acao'])){
  //   foreach ($_POST['valor'] as $key => $value) {
  //     echo $key;
  //     echo '=>';
  //     echo $value;
  //     echo '<hr>';
  //   }
  // }

  //------------------------------------------------------------------------------------------------------------------------
  //sessões e cookies

  session_start();
  // $_SESSION['nome'] = 'lucas';
  // $_SESSION['idade'] = 21;

  //para apagar o cookie coloca-se o valor negativo do tempo
  // setcookie('nome', 'lucas', time() + (60*60*24), '/');
  setcookie('nome', 'lucas', time() - (60*60*24), '/');



  echo $_COOKIE['nome'];


?>
<!-- 
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <form method="post">

    <input type="checkbox" name="valor[]" value="10">10
    <input type="checkbox" name="valor[]" value="20">20
    <input type="checkbox" name="valor[]" value="30">30
    <input type="checkbox" name="valor[]" value="40">40

    <input type="text" name="name" />
    <input type="text" name="email" />
    <input type="submit" name="acao" value="Enviar" />
  </form>
</body>
</html> -->
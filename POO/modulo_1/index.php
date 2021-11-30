<?php 
  //aula 1
  // class Pessoa {
  //   private $name = 'lucas';
  //   private $idade = '21';
  //   private $peso = '80kg';

  //   public function crescer($nome){
  //     echo 'estou crescendo';
  //   }

  //   public function comer(){
  //     echo 'esotu comendo';
  //   }
  // }

  // $pessoa = new Pessoa;

  // $pessoa->crescer('teste');
  // ------------------------------------------------------------------------------------
  // aula 2
  // include('Exemplo.class.php');

  // $exemplo = new Exemplo();

  // $exemplo->var2 = 'lucas meyble';
  
  // echo $exemplo->var2;
  // echo '<br>';
  // $exemplo2 = new Exemplo();
  // $exemplo2->var2 = 'joao';
  // echo $exemplo2->var2;

  // echo Exemplo::$var3;
  // echo '<br>';
  // echo Exemplo::$var3 = 'teste';
  // echo '<br>';
  // Exemplo::metodoEstatico();
  // ------------------------------------------------------------------------------------
  // aula 3

  final class filha{
    public function mostrarOla(){
      echo 'ola mundo';
    }
  }

  class Pai{
    public function mostrarTchau(){
      echo 'tchau mundo';
    }
  }

  $pai = new Pai();

  $pai->mostrarTchau();

  $filha = new Filha();

  $filha->mostrarOla();
?>
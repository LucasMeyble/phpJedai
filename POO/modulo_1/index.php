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

  // final class filha{
  //   public function mostrarOla(){
  //     echo 'ola mundo';
  //   }
  // }

  // class Pai{
  //   public function mostrarTchau(){
  //     echo 'tchau mundo';
  //   }
  // }

  // $pai = new Pai();

  // $pai->mostrarTchau();

  // $filha = new Filha();

  // $filha->mostrarOla();
  // ------------------------------------------------------------------------------------
  // aula 4

  //so serve para ser erdada nao pode ser isntanciada
  // abstract class teste{
  //   abstract function func2();
  // }

  // class Principal extends teste{
  //   public function func2(){
  //     echo 'tesste de sobrescrever uma função abstrata';
  //   }
  // }

  // $teste = new Principal();

  // $teste->func2();
  // ------------------------------------------------------------------------------------
  // aula 5
  //se eu usar o interface eu tenho q obrigatoriamente reescrever a função aonde estou usando a interface.
  // interface Interface1{
  //   public function printOnScreen($par);
  // }

  // class Texto implements Interface1{
  //   public function printOnScreen($par){
  //     echo $par;
  //   }
  // }

  // $texto = new Texto;

  // $texto->printOnScreen('ola mundo');

  // ------------------------------------------------------------------------------------
  // aula 6

  class Class1{
    private $name;
    private $idade;

    public function __construct($name, $idade){
      $this->name = $name;
      $this->idade = $idade;
    }

    public function getName(){
      return $this->name;
    }

    public function getIdade(){
      return $this->idade;
    }
  }

  $class = new Class1('lucas', 21);

  echo $class->getName();
  echo $class->getIdade();


?>
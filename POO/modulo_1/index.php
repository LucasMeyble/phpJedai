<?php 

  class Pessoa {
    private $name = 'lucas';
    private $idade = '21';
    private $peso = '80kg';

    public function crescer($nome){
      echo 'estou crescendo';
    }

    public function comer(){
      echo 'esotu comendo';
    }
  }

  $pessoa = new Pessoa;

  $pessoa->crescer('teste');

?>
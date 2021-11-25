<?php
session_start();

if(isset($_SESSION['nome'])){
  unset($_SESSION['nome']);
  // session_destroy(); para apagar as sessios todas de uma vez
  // echo $_SESSION['nome'];
}
echo $_SESSION['idade'];
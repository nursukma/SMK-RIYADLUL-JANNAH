<?php
$route = (!empty($_GET['url']))?$_GET['url']:"home";
switch($route){
  case 'home':
  // include('pages/bayar-lks.php');
  break;
  case 'bayar-lks':
  include('pages/bayar-lks.php');
  break;
  case 'bayar-atribut':
  include('pages/bayar-atribut.php');
  break;
  case 'bayar-akhir':
  include('pages/bayar-akhir.php');
  break;
}
?>

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
  case 'bayar-infaq':
  include('pages/bayar-infaq.php');
  break;
  case 'bayar-ujian':
  include('pages/bayar-ujian.php');
  break;
  case 'bayar-spp':
  include('pages/bayar-spp.php');
  break;
  case 'tampil-siswa':
  include('pages/tampil-siswa.php');
  break;
  case 'tampil-manajemen-pembayaran':
  include('pages/tampil-manajemen-pembayaran.php');
  break;
  case 'tambah-siswa':
  include('pages/tambah-siswa.php');
  break;
  case 'tambah-manajemen-pembayaran':
  include('pages/tambah-manajemen-pembayaran.php');
  break;
  default:
  include('pages/index.php');
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan 1</title>
</head>
<body>
    Halo Kawan.. Yuk kita belajar web programming..!!!<br>
    Nilai 1 = <?= $nilai1; ?>
    Nilai 2 = <?= $nilai2; ?>
    ini hasil dari pemodelan dengan methode penjumlahan yaitu <?=
    $nilai1 . " + " . $nilai2 . " = " . $hasil; ?>
    </body>
</html>
<?php
class Latihan1 extends CI_Controller
{
 public function index()
 {
    echo "Selamat Datang.. selamat belajar Web Programming";
 
 }
 public function penjumlahan($n1, $n2)
 {
    
    $this->load->model('model_L1');
    $data['nilai1'] = $n1;
    $data['nilai2'] = $n2;
    $data['hasil'] = $this->modell1->jumlah($n1, $n2);
    $this->load->view('view-latihan1', $data);
    
 }
}
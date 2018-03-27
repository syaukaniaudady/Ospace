<?php
  include 'model.php';

  class controller{
    public $model;

    function construct(){
      $this->model = new model();
    }
    function insert($nama, $kategori, $tanggal, $isi, $namagambarFix){
			$hasil = $this->model->query("INSERT INTO `mainwebpost` (`nama`, `kategori`, `tanggal`, `isi`, `gambar`)
			            VALUES ('$nama', '$kategori', '$tanggal', '$isi', '$namagambarFix')");
		}
    function index(){
			include "index.php";
		}
  }
?>

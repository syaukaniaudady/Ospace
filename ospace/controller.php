<?php
  include 'model.php';

  class controller{
    public $model;

    function construct(){
      $this->model = new model();
    }
    function index(){
			include "index.php";
    }
    function daftarwebstudent(){
      
    }
  }
?>
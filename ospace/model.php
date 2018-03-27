<?php
  require 'conne.php';

  class Model extends conne{
    function executte($query){
      $mysqli_query = mysqli_query(parent::__construct(),$query);
      mysqli_close(parent::__construct());
      return $mysqli_query;
    }
    function fetch($var){
      return $var->fetch_array();
    }
    public function Insert($table, $data){
        $str = "";
        foreach ($data as $key => $value) {
          $value = mysqli_real_escape_string(parent::__construct(), $value);
          if ($str != "") {
            $str = "$str, $key='$value'";
          } else {
            $str = "$key='$value'";
          }
        }
        $query = "INSERT $table SET $str";
        return $this->execute($query);
    }
    public function Update($table, $data, $where){
            $str = "";
            $wr = "";
            foreach ($data as $key => $value) {
              $value = mysqli_real_escape_string(parent::__construct(), $value);
              if ($str != "") {
                $str = "$str, $key='$value'";
              } else {
                $str = "$key='$value'";
              }
            }
            foreach ($where as $key => $value) {
              $value = mysqli_real_escape_string(parent::__construct(), $value);
              if ($wr != "") {
                $wr = "$wr AND $key='$value'";
              } else {
                $wr = "$key='$value'";
              }
            }
            $query = "UPDATE $table SET $str WHERE $wr";
            return $this->execute($query);
    }
    public function Delete($table, $where){
        $str = "";
        foreach ($where as $key => $value) {
          $value = mysqli_real_escape_string(parent::__construct(), $value);
          if ($str != "") {
            $str = "$str AND $key='$value'";
          } else {
            $str = "$key='$value'";
          }
        }
        $query = "DELETE FROM $table WHERE $str";
        return $this->execute($query);
    }
    public function GetWhere($table, $where){
          $str = "";
          foreach ($where as $key => $value) {
            $value = mysqli_real_escape_string(parent::__construct(), $value);
            if ($str != "") {
              $str = "$str AND $key='$value'";
            } else {
              $str = "$key='$value'";
            }
          }
          $query = "SELECT * FROM $table WHERE $str;";
          return $this->execute($query);
  	}
    public function query($q){
          $query = mysqli_real_escape_string(parent::construct(), $q);
          return $this->execute($q);
    }
  }
?>

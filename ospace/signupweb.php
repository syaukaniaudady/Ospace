<?php
include "controller.php";
include "koneksi.php";
$cont = new controller;
//$query = "SELECT count(*) as total from data_tiket";
//$result=mysqli_query($conn, $query);
//$data=mysqli_fetch_assoc($result);

//Meyimpan data ke variabel
//$no_tiket       = 551 + $data['total'];
$firstname = $_POST['namestudent'];
$asal = $_POST['emailidstudent'];
$phone = $_POST['phonestudent'];
$email = $_POST['passwordstudent'];

$firstname = $_POST['organization'];
$asal = $_POST['emailidoraganization'];
$phone = $_POST['phonenoorganization'];
$email = $_POST['passwordorganization'];

//perintah menampilkan data dikerjakan
$sql = mysqli_query($conn, $tampil);
//tampilkan seluruh data yang ada pada tabel user
$yes = 0;
while($data = mysqli_fetch_array($sql)) {
    if($data['nama'] == $firstname){
        $ada = 1;
    } elseif($data['nama'] == "kosong"){
        $yes = 1;

    }
}
$sabi = 0;

if($sabi == 0) {
    echo "<script>alert('Maaf registrasi sedang ada perbaikan :)');history.go(-1);</script>";
} elseif($firstname == "" || $asal == "" || $phone == "" || $email == "") {
    echo "<script>alert('Data tidak boleh ada yang kosong!!!');history.go(-1);</script>";
}elseif($ada == 1) {
    echo "<script>alert('Anda sudah mendaftarkan diri sebelumnya !!');history.go(-1);</script>";
} else {

$tampil = "SELECT * FROM data_tiket";
$sql = mysqli_query($conn, $tampil);
while($data = mysqli_fetch_array($sql)) {
    if($data['nama'] == "kosong"){
        $no_tiket = $data['no_tiket'];
//SQL query untuk insert data
    //$query = "INSERT INTO `data_tiket` (`no_tiket`, `nama`, `asal`, `hp`, `soal`, `email` , `tanggal`) VALUES ('$no_tiket', '$firstname', '$asal', '$phone', '$soal', '$email', '$tgl')";
    $query = "UPDATE data_tiket SET nama='$firstname', asal='$asal', hp='$phone', soal='$soal', email='$email', tanggal='$tgl', status=' ' WHERE no_tiket='$no_tiket'";
    mysqli_query($conn, $query);
    break;
    }
    }
//kembali ke halaman index
    echo "<script>alert('Anda telah terdaftar, silahkan melakukan pembayaran dan konfirmasi pembayaran');window.location='index.html'</script>";


}
?>

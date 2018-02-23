    <?php
    $servername = "localhost";
    $username = "ospaceid";
    $password = "8Pp9kog2L6";
    $dbname = "ospaceid_ospace";

    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);
    // Check connection
    if ($conn->connect_error) {
        die("Koneksi Gagal: " . $conn->connect_error);
    }
    ?>
<!--  Coded By Heatcliff  -->
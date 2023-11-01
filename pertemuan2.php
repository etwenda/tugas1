<?php

mysqli_connect("localhot", "root","","database'db_kls c");
$hostname= "localhost";
$username= "noot";
$password= "";
$database= "db_kls_c";

$koneksi = mysqli_connect($hostname, $username, $password, $database);

if($koneksi){
    echo"koneksi berhasil";
}else{
    echo "koneksi gagal";
}


$query= "SELECT * FROM mahasiswa";
$result= mysqli_query($koneksi,$query);
$data = mysqli_fetch_assoc($result);
//var dump(data);

foreach ($data as $mahasiswa){
    echo " <hr> ";
    //var dump(data);
    echo $mahasiswa['id'];
}

?>


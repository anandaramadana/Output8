<?php
    $koneksi = mysqli_connect("localhost", "root", "", "db_135");

    $id = $_POST["id_ku"];
    $nama = $_POST["nama_ku"];
    $alamat = $_POST["alamat_ku"];

    $sql = "INSERT INTO tbl_ku VALUES('$id','$nama','$alamat')";
    $add = mysqli_query($koneksi, $sql);

    if($add){
        header("location: tampil_data.php");
    }
    else{
        echo "<script> alert('Gagal Menambahkan Data') </script>";
    }
?>


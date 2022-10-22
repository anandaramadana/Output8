<?php
    $koneksi = mysqli_connect("localhost", "root", "", "db_135");

    $id = $_POST['id_ku'];
    $nama = $_POST['nama_ku'];
    $alamat = $_POST['alamat_ku'];

    $sql = "UPDATE tbl_ku set nama_ku='$nama', alamat_ku='$alamat' WHERE id_ku='$id' ";
    $edit = mysqli_query($koneksi, $sql);

    if($edit){
        header("location: tampil_data.php");
    }
    else{
        echo "<script> alert('Gagal Melakukan Update Data') </script>";
    }
?>
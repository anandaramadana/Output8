<?php
    $koneksi = mysqli_connect("localhost", "root", "", "db_135");

    $id = $_GET["id_hapus"];

    $sql = "DELETE FROM tbl_ku WHERE id_ku='$id' ";
    $delete = mysqli_query($koneksi, $sql);

    if($delete){
        header("location: tampil_data.php");
    }
    else {
        echo "<script> alert('Gagal Menghapus Data') </script>";
    }
?>
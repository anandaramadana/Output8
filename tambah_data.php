<?php
    $koneksi = mysqli_connect("localhost", "root", "", "db_135");
    $sql = "SELECT * FROM tbl_ku";
    $hasil = mysqli_query($koneksi, $sql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Data</title>
</head>
<body>
    <p>Nama : Ananda Ramadana Ahmad Mulya</p>
    <p>NIM : 210411100135</p>
    <p>Kelas : IF - 3C</p>
    <hr>

    <p class="title">Data Mahasiswa</p>
    <fieldset>
    <legend><h1>Silahkan Tambah Data Mahasiswa</h1></legend>
    <form action="proses_tambah_data.php" method="post">
        <label class="id">Id Mahasiswa</label><input type="number" name="id_ku"><br>
        <label class="nama">Nama Mahasiswa</label><input type="text" name="nama_ku"><br>
        <label class="alamat">Alamat Mahasiswa</label><input type="text" name="alamat_ku"><br>

        <div class="button"><button type="submit" class="btn btn-primary btn-sm">Kirim</button></div>
    </form>
    </fieldset>
</body>
</html>

<style>
    body{
        background-color: grey;
    }
    fieldset{
        margin: auto;
        margin-top: 5vh;
        padding: 50px;
        display: grid;
        width:fit-content;
        border-radius: 20px;
        border: 2px rgb(241, 241, 190);
        background-color:rgb(241, 241, 190);
        box-shadow: 0px 0px 10px white;
    }
    label{
        font-size: 30px;
        color: rgb(24, 41, 41);
        font-family: Geneva;
        margin-right: 10px;
    }
    .title{
        text-align: center;
        font-family: Cursive;
        font-size: 30px;
        font-weight: bold;
        margin-bottom: 0px;
        color: black;
        text-shadow:1px 0px 1px  whitesmoke;
    }
    h1{
        color: rgb(255, 255, 255);
        text-shadow:2px -1px 2px  rgb(14, 34, 46);
        background-color:darkkhaki;
        border-radius: 10px;
        padding: 2px;
        padding-left: 5px;
        padding-right: 5px;
        font-size: 30px;
        font-weight:bolder;
    }
    .id::after{
        content: ":";
        margin-left: 102px;
    }
    .nama::after{
        content: ":";
        margin-left: 55px;
    }
    .alamat::after{
        content: ":";
        margin-left: 38px;
    }
    .button{
        text-align: center;
    }
    button{
        margin-top: 20px;
        color: white;
        font-weight: bolder;
        text-shadow:1px 1px 3px black;
        background-color:darkkhaki;
        border: 1px solid dimgrey;
        padding: 5px 4px;
        border-radius: 10px;
        width: 80px;
        outline: 1.9px solid darkkhaki;
        outline-offset: 2px;
    }
    input{
        border: none;
        border-bottom: 1px solid rgb(39, 69, 82);
        font-size: 25px;
        font-family: 'Geneva';
        padding: 2px 10px;
        width: 200px;
        background: transparent;
        outline: none;
    }
    input::-webkit-input-placeholder{
        color:deeppink;
    }
    input:focus{
        border-bottom: 1px cadetblue;
        outline: none;
        background: transparent;
    }
</style>
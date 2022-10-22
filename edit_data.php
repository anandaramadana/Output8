<?php
    $koneksi = mysqli_connect("localhost", "root", "", "db_135");

    $id = $_GET["id_edit"];
    $sql = "SELECT * FROM tbl_ku WHERE id_ku='$id' ";
    $hasil = mysqli_query($koneksi, $sql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Data</title>
    <style type="text/css">
            body{
                background-color: gray;
            }
            h2 {
                text-align: center;
                font-family: Cursive;
                font-size: 30px;
                font-weight: bold;
                margin-bottom: 0px;
                color: whitesmoke;
                text-shadow:1px 0px 1px  whitesmoke;
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
            label{
                font-size: 30px;
                color: rgb(24, 41, 41);
                font-family: Geneva;
                margin-right: 10px;
            }
            .id::after{
                content: ":";
                margin-left: 95px;
            }
            .nama::after{
                content: ":";
                margin-left: 50px;
            }
            .prodi::after{
                content: ":";
                margin-left: 88px;
            }
            .alamat::after{
                content: ":";
                margin-left: 32px;
            }
            input {
                margin: 4px;
                margin-right: 15px;
            }
            select {
                padding: 3px;
                width: 170px;
                margin-right: 15px;
            }
            label {
                margin:15px;
            }
            form{
                background-color: white;
                width:fit-content;
                border-radius:5px;
                border: black solid 1px;
                padding:5px;
            }
            .form {
                text-align:center;
                display: flex;
                justify-content: center;
            }
            .button {
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
            .button:hover{
                border:1px solid white;
                background-color: gray;
                color: white;
            }
            a{
                text-decoration:none;
                color:black;
            }

        </style>
</head>
<body>
    <p>Nama : Ananda Ramadana Ahmad Mulya</p>
    <p>NIM : 210411100135</p>
    <p>Kelas : IF - 3C</p>
    <hr>    
    
    <h2>Data Mahasiswa</h2>
    <fieldset>
    <legend><h1>Silahkan Hapus Data Mahasiswa</h1></legend>
    <div class="form">
        <?php
            while($baris = mysqli_fetch_assoc($hasil)){
        ?>
        <form action="proses_edit_data.php" method="post">
            <label class="id">Id Mahasiswa</label><input type="number" name="id_ku" value="<?php echo $baris['id_ku'] ?>"><br>
            <label class="nama">Nama Mahasiswa</label><input type="text" name="nama_ku" value="<?php echo $baris['nama_ku'] ?>"><br>
            <label class="alamat">Alamat Mahasiswa</label><input type="text" name="alamat_ku" value="<?php echo $baris['alamat_ku'] ?>"><br>

            <input class="button" type="submit" name="add" value="update">
                <a href="tampil_data.php" class="button">cancel</a>
        </form>
        <?php } ?>
    </div>
    </fieldset>
</body>
</html>
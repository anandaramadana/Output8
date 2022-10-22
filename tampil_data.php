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
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"></script>
    <style>
      button{
        width: 65px;
        text-align: center;
        align-items: center;
        padding: 15px;
    }
    </style>
    <title>Database</title>
</head>
<body>
    <p>Nama : Ananda Ramadana Ahmad Mulya</p>
    <p>NIM : 210411100135</p>
    <p>Kelas : IF - 3C</p>
    <hr>

    <div class="container mt-3">
        <h2>Data Mahasiswa</h2>
        <a href="tambah_data.php"><button type="button" class="btn btn-success btn-sm">Tambah</button></a>
        <br><br>
        <table class="table table-dark table-striped" style="text-align: center;">
            <thead>
                <tr>
                    <th>ID Mahasiswa</th>
                    <th>Nama Mahasiswa</th>
                    <th>Alamat Mahasiswa</th>
                    <th>Pilihan</th>
                </tr>
            </thead>
            <tbody>
                <?php
                    while($baris = mysqli_fetch_assoc($hasil)){
                ?>
                <tr class="table-success">
                    <td><?php echo $baris['id_ku'] ?></td>
                    <td><?php echo $baris['nama_ku'] ?></td>
                    <td><?php echo $baris['alamat_ku'] ?></td>
                    <td>
                        <a href="edit_data.php?id_edit=<?php echo $baris['id_ku'];?>"><button type="button" class="btn btn-primary btn-sm">Edit</button></a>
                        <a href="proses_hapus_data.php?id_hapus=<?php echo $baris['id_ku'];?>"><button type="button" class="btn btn-danger btn-sm">Delete</button></a>
                    </td>
                </tr>
                <?php } ?>
        </table>
    </div>
</body>
</html>

<style>
    body{
        background-color: grey;
    }
    h2,p{
        color: black;
        font-weight: bolder;
        text-shadow:0px 0px 2px darkkhaki;
    }
</style>
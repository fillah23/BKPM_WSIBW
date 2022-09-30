<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
    <title>acara 18</title>
</head>
<body>
    <div class="col-lg-8">
        <h2><b>Tabel DTS VSGA 2021</b></h2>
        <p>Tampil Data dari Data Base</p>
        <a href="input.php">tambah</a>
        <table class="table">
            <thead class="thead-dark">
                <tr>
                    <th>Nomor</th>
                    <th>Nama</th>
                    <th>Tanggal Lahir</th>
                    <th>Email</th>
                    <th>Nomer Telpon</th>
                    <th>Alamat</th>
                    <th>Jenis Kelamin</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php
                include 'koneksi.php';
                $sql = "SELECT * FROM diri";
                $hasil = mysqli_query($conn,$sql);
                $nomer = 1;
                while($data = mysqli_fetch_array($hasil,MYSQLI_ASSOC)){
                ?>
                <tr>
                    <td><?php echo $nomer++; ?></td>
                    <td><?php echo $data['nama']; ?></td>
                    <td><?php echo $data['lahir']; ?></td>
                    <td><?php echo $data['email']; ?></td>
                    <td><?php echo $data['telpon']; ?></td>
                    <td><?php echo $data['alamat']; ?></td>
                    <td><?php echo $data['kelamin']; ?></td>
                    <td>
                    <a class="btn btn-warning" href="edit.php?id=<?php echo $data['id'];
                    ?>">Edit</a>
                    <a class="btn btn-danger" href="hapus.php?id=<?php echo $data['id'];
                    ?>">Hapus</a>
                    </td>
                </tr>

                <?php
                }
                ?>
            </tbody>
        </table>

    </div>
    </br></br>
</body>
</html>
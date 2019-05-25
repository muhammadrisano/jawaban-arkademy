<?php
require 'function.php';

$users = query("SELECT * FROM users");

if (isset($_POST['submit'])) {
    if (tambah_user($_POST) > 0) {
        echo "
         <script>
             alert('user berhasil ditambahkan');
             document.location.href = 'index.php';
         </script>
        ";
    } else {
        echo "
        <script>
        alert('user Gagal ditambahkan');
        document.location.href = 'index.php';
         </script>
        ";
    }
}

?>


<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <title>Pengimputan User</title>
</head>

<body>
    <div class="container">
        <h2>Selamat Datang di Pengimputan Data dan Skill</h2>
        <br />
        <form action="" method="post">
            <div class="row">

                <div class="form-group col-md-4">
                    <label for="name">Input User : </label>
                    <input type="text" name="name" id="name" size="25">
                </div>
                <div col-md-2">

                    <button type="submit" class="btn btn-primary sbm" name="submit">Tambah User</button>
                </div>

            </div>
        </form>
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">No</th>
                    <th scope="col">Nama Pemrograman</th>
                    <th scope="col">Jumlah Skil</th>
                    <th scope="col">Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $no = 1;

                foreach ($users as $u) : ?>
                    <tr>
                        <th scope="row"><?= $no++; ?></th>
                        <td><?= $u['name']; ?></td>
                        <td><?= $u['jumlah_skill']; ?></td>
                        <td><a href="tambahuser.php?user=<?= $u['id']; ?>" class="btn btn-success">Tambah Skill</a></td>
                    </tr>
                <?php
            endforeach;
            ?>
            </tbody>
        </table>



    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>

</html>
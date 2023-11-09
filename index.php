<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Data Customer</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.4/css/jquery.dataTables.css">
    <script src="https://cdn.datatables.net/1.13.4/js/jquery.dataTables.js"></script>
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col">
                <?php
                include 'conn.php';
                $query = mysqli_query($conn, "SELECT * FROM customer ORDER BY first_name ASC");
                ?>
                <center>
                    <h1>DATA CUSTOMER</h1>
                </center>
                <a class="btn btn-info" style="margin-top: 20px;margin-bottom: 20px;" href="tambah.php"><b>+ Tambah Customer</b></a>
                <table class="table table-striped" id="myTable">
                    <thead>
                        <tr>
                            <th>No. </th>
                            <th>Nama Lengkap</th>
                            <th>Email</th>
                            <th>HP</th>
                            <th>Alamat</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        if (mysqli_num_rows($query) > 0) {
                            $no = 1;
                            while ($data = mysqli_fetch_array($query)) {
                        ?>
                                <tr>
                                    <td> <?php echo $no ?></td>
                                    <td> <?php echo $data["first_name"] . " " . $data["last_name"] ?> </td>
                                    <td> <?php echo $data["email"] ?> </td>
                                    <td> <?php echo $data["phone"] ?> </td>
                                    <td> <?php echo $data["address"] ?></td>
                                    <td>
                                        <a href="edit.php?id=<?php echo $data["id"] ?>" class="btn btn-warning btn-sm text-white"><i class="bi-pencil-square"></i></a>
                                        <a href="proses_hapus.php?id=<?php echo $data["id"] ?>" class="btn btn-danger btn-sm d-inline" onclick="return confirm('Data Akan Dihapus?')"><i class="bi-trash-fill"></i></a>
                                    </td>
                                </tr>
                            <?php $no++;
                            }; ?>
                        <?php } ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <script>
        $(document).ready(function() {
            $('#myTable').DataTable();
        });
    </script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>

</body>

</html>
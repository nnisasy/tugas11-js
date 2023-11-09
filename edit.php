<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit - Customer</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>

<body>
    <!-- MENU EDIT -->
    <?php
    include 'conn.php';

    $customer = mysqli_query($conn, "SELECT * FROM customer where id=$_GET[id]");

    while ($c = mysqli_fetch_array($customer)) {
        $id = $c["id"];
        $first_name = $c["first_name"];
        $last_name = $c["last_name"];
        $email = $c["email"];
        $phone = $c["phone"];
        $address = $c["address"];
    }

    ?>

    <div class="mx-auto mt-5" style="width: 800px">
        <div class="card">
            <div class="card-body">
                <h3>Form Edit Customer</h3><br>

                <!-- FROM EDIT DATA -->
                <form action="proses_edit.php?id=<?php echo $id ?>" method="post">
                    <div class="row mb-3">
                        <label class="col-sm-2 col-form-label">First Name</label>
                        <div class="col-sm-10">
                            <input type="text" name="first_name" value="<?php echo $first_name ?>" class="form-control">
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label class="col-sm-2 col-form-label">Last Name</label>
                        <div class="col-sm-10">
                            <input type="text" name="last_name" value="<?php echo $last_name ?>" class="form-control">
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label class="col-sm-2 col-form-label">Email</label>
                        <div class="col-sm-10">
                            <input type="email" name="email" value="<?php echo $email ?>" class="form-control">
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label class="col-sm-2 col-form-label">Phone</label>
                        <div class="col-sm-10">
                            <input type="text" name="phone" value="<?php echo $phone ?>" class="form-control">
                        </div>
                    </div>
                    <div class="row mb-4">
                        <label class="col-sm-2 col-form-label">Address</label>
                        <div class="col-sm-10">
                            <input type="text" name="address" value="<?php echo $address ?>" class="form-control">
                        </div>
                    </div>
                    <div style="text-align: center;">
                        <button type="submit" name="submit" class="btn btn-primary" onclick="return confirm('Data Akan Diupdate?')">Simpan</button>
                        <a href="index.php" class="btn btn-danger">Kembali</a>
                    </div>
                </form>

            </div>
        </div>
    </div>

    <script src=" https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

</body>

</html>
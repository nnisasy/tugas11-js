<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create - Customer</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-1.11.2.min.js"></script>
</head>

<body>
    <!-- MENU CREATE  -->
    <div class="mx-auto mt-5" style="width: 800px">
        <div class="card">
            <div class="card-body">
                <h3>Form Tambah Customer</h3><br>

                <!-- FORM CREATE DATA -->
                <form action="proses_tambah.php" method="post" name="form-tambah">
                    <div class="row mb-3">
                        <label class="col-sm-2 col-form-label">First Name</label>
                        <div class="col-sm-10">
                            <input type="text" id="first_name" name="first_name" onkeyup="checkform()" class="form-control">
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label class="col-sm-2 col-form-label">Last Name</label>
                        <div class="col-sm-10">
                            <input type="text" id="last_name" name="last_name" onkeyup="checkform()" class="form-control">
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label class="col-sm-2 col-form-label">Email</label>
                        <div class="col-sm-10">
                            <input type="email" id="email" name="email" onkeyup="checkform()" class="form-control">
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label class="col-sm-2 col-form-label">Phone</label>
                        <div class="col-sm-10">
                            <input type="text" id="phone" name="phone" onkeyup="checkform()" class="form-control">
                        </div>
                    </div>
                    <div class="row mb-4">
                        <label class="col-sm-2 col-form-label">Address</label>
                        <div class="col-sm-10">
                            <input type="text" id="address" name="address" onkeyup="checkform()" class="form-control">
                        </div>
                    </div>
                    <div style="text-align: center;">
                        <input type="submit" id="submit" name="submit" value="Simpan" class="btn btn-primary" disabled onclick="alert('Data Berhasil Disimpan!')">
                        <a href="index.php" class="btn btn-danger">Kembali</a>
                    </div>
                </form>

            </div>
        </div>
    </div>

    <script>
        function checkform() {
            var f = document.forms['form-tambah'].elements;
            var fieldsMustBeFilled = true;

            for (var i = 0; i < f.length; i++) {
                if (f[i].value.length == 0)
                    fieldsMustBeFilled = false;
            }

            if (fieldsMustBeFilled) {
                document.getElementById("submit").disabled = false;
            } else {
                document.getElementById("submit").disabled = true;
            }
        }
    </script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

</body>

</html>
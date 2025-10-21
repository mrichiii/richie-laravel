<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Mahasiswa</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" 
    integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
</head>
<body>
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
    <div class="container-fluid">
        <a class="navbar-brand" href="#"><img src="https://upload.wikimedia.org/wikipedia/commons/a/a0/Logo-UIN-SU-Medan-PNG-1.png" alt="" style="width: 50px;"></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item">
            <a class="nav-link" href="/">Home</a>
            </li>
            <li class="nav-item">
            <a class="nav-link" href="/about">About</a>
            </li>
            <li class="nav-item">
            <a class="nav-link" href="/pprofile">Profile</a>
            </li>
            <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="#">Mahasiswa</a>
            </li>
        </ul>
        <form class="d-flex" role="search">
            <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search"/>
            <button class="btn btn-outline-success" type="submit">Search</button>
        </form>
        </div>
    </div>
    </nav>
    <br>

    <div class="container"><h1>Ini Halaman Mahasiswa</h1></div><br>

    <div class="container">
        <div class="row">
          <div class="col-8" style="border: 1px solid black;">
              <h3>Data Mahasiswa</h2><br>
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Nama</th>
                            <th>NIM</th>
                        </tr>
                    </thead>
                    <tbody>
                    </tbody>
                </table>
          </div>
          <div class="col-4">
            <h2>Form Tambah Mahasiswa</h2>
            <br>
                <form action="">
                    <label class="form-label">Nama</label>
                    <input type="text" class="form-control" id="nama" placeholder="Nama...">
                    <br>
                    <label class="form-label">NIM</label>
                    <input type="text" class="form-control mb-4" id="nim" placeholder="NIM...">
                    <br>
                    <div class="button">
                        <button id="save" class="btn btn-success" style="width: 100%; text-align: left;">Simpan Data Mahasiswa</button>
                    </div>
                </form><div id="alert-success" class="alert alert-success d-none mt-4">Data berhasil
                </div>
          </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" 
    integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous">
    </script>

    <script>
        $(document).ready(function () {
          let no=1;

          $("#save").click(function (event) {
            event.preventDefault(); 
      
            const nim = $("#nim").val();
            const nama = $("#nama").val();
      
            if (nama === "" || nim === "") {
                alert("Nama dan NIM tidak boleh kosong!");
                return;
            }
      
            $("table tbody").append
            (`<tr>
                <td>${no}</td>
                <td>${nama}</td>
                <td>${nim}</td>
              </tr>`);
    
            no++;
            $("#alert-success").removeClass("d-none")
                .html(`Data berhasil ditambahkan!<br>Nama: <b>${nama}</b><br>NIM: <b>${nim}</b>`);

            setTimeout(() => {$("#alert-success").addClass("d-none"); }, 2000);
            
            $("#nim").val("");
            $("#nama").val("");
          });
        });
    </script>
</body>
</html>
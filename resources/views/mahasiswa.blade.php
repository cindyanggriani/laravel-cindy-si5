<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Mahasiswa</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
</head>
<body>   
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">
        <img src="/img/logo.png" style="width: 60px">
    </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Link</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Dropdown
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="#">Action</a></li>
            <li><a class="dropdown-item" href="#">Another action</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="#">Something else here</a></li>
          </ul>
        </li>
        <li class="nav-item">
          <a class="nav-link disabled" aria-disabled="true">Disabled</a>
        </li>
      </ul>
      <form class="d-flex" role="search">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search"/>
        <button class="btn btn-outline-success" type="submit">Search</button>
      </form>
    </div>
  </div>
</nav>

     <div class="container"><h1>Halaman Mahasiswa</h1></div>
     <div class="container">
        <div class="row">
            <div class="col-8">
                <h3>Data Mahasiswa</h3>
                <table class="table table-dark">
                    <thead>
                        <tr>
                            <th>Nomor</th>
                            <th>Nim</th>
                            <th>Nama</th>
                        </tr>
                    </thead>
                    <tbody>
                    </tbody>
                </table>
            </div>
            <div class="col-4">
             <h3>Form Tambah Mahasiswa</h3>   
             <form action="">
                <label for="">NIM</label>  
               <input type="text" id="nim" class="form-control">
               <label for="">Nama Mahasiswa</label>
               <input type="text" id="nama" class="form-control">
               <button class="w-100 btn btn-primary" id="simpan">Simpan</button>
             </form>
            </div>
        </div>
     </div>
    

     <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4=" crossorigin="anonymous"></script>

<script>
let no=1;
$("#simpan").click(function (event) {

    event.preventDefault();

    const nim = $ ("#nim").val();
    const nama = $ ("#nama").val();

    if (nim === "" || nama === "") {
        alert ("form tidak boleh kosong");
        return;

    }
    $("table tbody").append
    (`<tr>
        <td>${no}</td>
        <td>${nim}</td>
        <td>${nama}</td>
        </tr>`);

        no++;
        $("#alert-success").removeClass("d-none");

        setTimeout(() => { $("#alert-success").addClass("d-none"); }, 2000);

        $("#nim").val("");
        $("#nama").val("");

})
</script>
    </body>
</html>
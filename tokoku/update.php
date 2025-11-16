<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="navbar.css">
    <link rel="stylesheet" href="styl.css">
    <link rel="stylesheet" href="logregis.css">
</head>
</head>
<body>
<body style="color: white;">

<nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container-fluid">
    <a class="navbar-brand" href="index.php">TOKO<span>KU</span></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" 
            data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" 
            aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="home.php">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="produk.php">Produk</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="request.php">Request</a>
        </li>
      </ul>

      <ul class="navbar-nav ms-3">
        <li class="nav-item">
          <a class="nav-link" href="login.php"><i class="bi bi-person"></i>Login</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="register.php"><i class="bi bi-person"></i>Register</a>
        </li>
      </ul>
    </div>
  </div>
</nav>
    <h2></h2>
    <br/>
    <link rel="stylesheet" href=".css">
    <br/>
    <br/>
    

    <?php
    include 'koneksi.php';
    $idnya = $_GET['id'];
    $request = mysqli_query($koneksi, "select * from request where idnya='$idnya'");
    while($d = mysqli_fetch_array($request)){
    ?>
        <form method="post" action="ubah.php">
        <div class='tabel'>
            <table>
                <h3>Edit Request</h3>
                <tr>
                    <td>ID</td>
                    <td>
                        <input type="number" name="kode" value="<?php echo $d['idnya']; ?>">
                    </td>
                </tr>
                <tr>
                    <td>Nama</td>
                    <td><input type="text" name="nama" value="<?php echo $d['nama']; ?>"></td>
                </tr>
                <tr>
                    <td>Tipe</td>
                    <td><input type="text" name="tipe" value="<?php echo $d['tipe']; ?>"></td>
                </tr>
                <tr>
                    <td>Harga</td>
                    <td><input type="number" name="harga" value="<?php echo $d['harga']; ?>"></td>
                </tr>
                <tr>
                    <td></td>
                    <td>
                        <input type="submit" value="Submit">
                        <input type="hidden" name="idnya" value="<?php echo $d['idnya']; ?>">
                    </td>
                </tr>
            </table>
        </form></div>
    <?php
    }
    ?>
</body>
</html>

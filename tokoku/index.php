<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="navbar.css">
    <link rel="stylesheet" href="styl.css">
</head>
<body>

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
          <a class="nav-link active" aria-current="page" href="#">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Produk</a>
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

    <div class="welcome-container">
        <h1>Selamat Datang!</h1>
        <h2 class="brand">TOKO<span>KU</span></h2>
        <p style="color: white;">Mulai pengalaman belanja terbaik Anda.</p>

        <div class="btn-group">
            <a href="login.php" class="btn">Login</a>
            <a href="register.php" class="btn btn-outline">Register</a>
        </div>
    </div>
    </body>
</html>

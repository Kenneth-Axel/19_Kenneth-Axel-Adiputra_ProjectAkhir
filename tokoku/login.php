<?php
session_start();
include 'koneksi.php';

if (isset($_POST['Login'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    $query = mysqli_query($koneksi, "SELECT * FROM online WHERE username='$username' AND password='$password'");

    if (mysqli_num_rows($query) > 0) {
        $_SESSION['username'] = $username;
        header("Location: home.php");
        exit;
    } else {
        echo "<script>alert('Username atau Password salah!');</script>";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
    <link rel="stylesheet" href="navbar.css">
    <link rel="stylesheet" href="styl.css">
    <link rel="stylesheet" href="logregis.css">
    
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

<div class="conlog"> 
    <h2>Login</h2>
    <form class="form-container" method="POST">
        <table>
        <tr>
                <td>
                    <label for="username">Masukkan Username: </label>
                </td>
                <td>
                <label>:</label>
                </td>
                <td>
                    <input type="text" name="username" placeholder="Username" required><br>
                </td>
            </tr>

            <tr>
                <td>
                    <label for="password">Masukkan Password: </label>
                </td>
                <td>
                <label>:</label>
                </td>
                <td>
                    <input type="text" name="password" placeholder="Password" required><br>
                </td>
            </tr>
            <tr>
                <td colspan='3' align='center'><a href="home.php"><input type="submit" value="Login" name="Login"></a></td>
                
            </tr>
        </table>
       
         <p> Create Account | <a href="register.php">Daftar Disini</a></p>
    </form>
   
</div>
</body>
</html>
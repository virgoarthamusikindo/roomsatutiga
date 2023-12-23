<?php 
// apakah tombol submit sudah ditekan atau belum
if (isset ($_POST ["submit"])) {
// cek username dan password
if ($_POST ["username"] == "admin" && $_POST ["password"] == "123") {
// jika benar redirect kehalaman admin
header("Location: home.php");
exit; 
} else {
// Jika salah tampilkan pesan kesalahan
    $error = true ;
}
}
?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Login To RoomSatuTiga</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <style>
      body {
    height: 100%;
    
  }
  
  body {
    display: flex;
    align-items: center;
    padding-top: 40px;
    padding-bottom: 40px;
    background-color: #f0efea;
  }
  
  
  .form-signin {
    width: 100%;
    max-width: 330px;
    padding: 15px;
    margin: auto;
    background-color: rgb(255, 255, 255);
    border-radius: 10px 10px;
  }
  
  .form-signin form .ucapanlogin {
    font-size: 1.2rem;
  }
  
  .form-signin form a img {
    position: relative;
    right: -110px;
  }
  
  .form-signin .checkbox {
    font-weight: 400;
  }
  
  .form-signin .form-floating:focus-within {
    z-index: 2;
  }
  
  .form-signin input[type="username"] {
    margin-bottom: -1px;
    border-bottom-right-radius: 0;
    border-bottom-left-radius: 0;
  }
  
  .form-signin input[type="password"] {
    margin-bottom: 10px;
    border-top-left-radius: 0;
    border-top-right-radius: 0;
  }
  
  .cek1 .sign-up {
    margin-left: 100px;
    text-decoration: none;
  }
    </style>
  
  </head>
  <body>
    <main class="form-signin mt-5">
        <form method="post">
          <a href=""
            ><img class="mb-4 " src="logo.png" alt="" width="80px"
          /></a>
          <h1 class="h3 mb-3 fw-normal text-center ucapanlogin">Login to RoomSatuTiga</h1>
          <?php if (isset ($error)) : ?>
            <p style="color: red; font-style:italic;">username/password salah !</p>
          <?php endif; ?>
          <div class="form-floating">
            <input
              type="username"
              class="form-control"
              id="username"
              placeholder="name@example.com"
              name="username"
            />
            <label for="username">Username</label>
          </div>
          <div class="form-floating">
            <input
              type="password"
              class="form-control"
              id="password"
              placeholder="Password"
              name="password"
            />
            <label for="password">Password</label>
          </div>
  
          <div class="checkbox mb-3 cek1">
            <label>
              <input type="checkbox" value="remember-me" /> Remember me
            </label>
            <a target="_blank" class="sign-up" href="isiform.html">Sign Up</a>
          </div>
          <button class="w-100 btn btn-lg btn-primary" type="submit" name="submit">
            Login
          </button>
          
          <p class="mt-5 mb-3 text-dark text-center">
            &copy; 2023 RoomSatuTiga Production
          </p>
        </form>
      </main>
  
      <script
        src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
        crossorigin="anonymous"
      ></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  </body>
</html>
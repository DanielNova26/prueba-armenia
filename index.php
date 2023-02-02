<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="public/css/login.css">
    <title>Login usuario</title>
  </head>
  <body>
     <div class="container">
    <div class="row">
      <div class="col-sm-9 col-md-7 col-lg-5 mx-auto">
        <div class="card border-0 shadow rounded-3 my-5">
          <div class="card-body p-4 p-sm-5">
            <h5 class="card-title text-center mb-5 fw-light fs-5">Bookstore Login</h5>

            <form action="servidor/login/logear.php" method="post">
              <div class="form-floating mb-3">
                <input type="text" class="form-control" name="usuario" id="usuario" placeholder="usuario">
                <label for="usuario">Username</label>
              </div>
              <div class="form-floating mb-3">
                <input type="password" class="form-control" name="password"id="password" placeholder="Password">
                <label for="password">Password</label>
              </div>
              <div class="d-grid">
                <button class="btn btn-primary btn-login text-uppercase fw-bold" type="submit">Sign
                  in</button>
                  <div class="d-grid">
                <button class="btn btn-registro btn-login text-uppercase fw-bold" type="submit">
                  <a class="nuevo ususario" href="registro.php"> Register New User</a>
                </button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
  
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  </body>
</html>
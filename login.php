<!doctype html>
<html lang="en">

<head>
  <title>Login</title>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS v5.2.1 -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">

</head>

<body>
  <header>
  <?php
        $page = "login";
        include_once "nav.php";
    ?>
  </header>
  <main>
    <div class="row justify-content-center">
        <!-- login credentials -->
        <div class="col-5 my-5">
            <h1 class="text-center mb-3">Login</h1>
            <div class="form mb-3">
                <input type="email" id="loginEmail" class="form-control"/>
                <label class="form-label" for="loginEmail">Email address</label>

                <input type="password" id="loginPassword" class="form-control"/>
                <label class="form-label" for="loginPassword">Password</label>

                <div class="text-center mb-3">
                    <a href="#">Forgot Password?</a>
                </div>
            </div>
            <div class="row justify-content-center mb-3 px-3">
                <button type="button" class="btn btn-primary btn-block">Sign in</button>
            </div>
        </div>
      </div>

  </main>
  <footer>
    <!-- place footer here -->
  </footer>
  <!-- Bootstrap JavaScript Libraries -->
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
    integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous">
  </script>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js"
    integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz" crossorigin="anonymous">
  </script>
</body>

</html>
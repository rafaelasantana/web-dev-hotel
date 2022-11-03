<!doctype html>
<html lang="en">

<head>
  <title>Navigation</title>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS v5.2.1 -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">

</head>

<body>
  <header>
    <div class="navbar navbar-expand-lg bg-light">
        <div class="container-fluid" >
            <!-- click on brand image to go to homepage -->
            <a class="navbar-brand" href="index.php">Hotel</a>
            <!-- burger button when collapses -->
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
            data-bs-target="#navbar_active_register"
            aria-controls="navbar_active_register"
            aria-expanded="false">
                <span class="navbar-toggler-icon"></span>
            </button>
            <!-- navigation items -->
            <div class="collapse navbar-collapse" id="navbar_active_register">
                <div class="navbar-nav">
                    <a class="nav-link <?php if($page == "rooms") echo " active" ?>" href="rooms.php">Rooms</a>
                    <a class="nav-link <?php if($page == "registration") echo "active" ?>" href="registration.php">Register</a>
                    <a class="nav-link <?php if($page == "login") echo " active" ?>" href="login.php">Login</a>
                    <a class="nav-link <?php if($page == "help") echo " active" ?>" href="help.php">FAQ</a>
                    <a class="nav-link <?php if($page == "impressum") echo " active" ?>" href="impressum.php">Impressum</a>
                </div>
            </div>
        </div>
    </div>
  </header>
  <main>

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
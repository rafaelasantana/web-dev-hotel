<!doctype html>
<html lang="en">

<head>
  <title>Homepage</title>
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
        $page = "home";
        include_once "nav.php"
    ?>
  </header>
  <main>
    <div class="container">
        <div class="row justify-content-center my-4">
            <h1 class="text-center mb-4">Welcome to The Hotel</h1>
            <!-- carousel -->
            <div class="carousel slide" data-bs-ride="carousel" id="photos_carousel">
                <!-- buttons for carousel-->
                <div class="carousel-indicators">
                    <button type="button" data-bs-target="#photos_carousel"
                    data-bs-slide-to="0" class="active" aria-current="true">
                    </button>
                    <button type="button" data-bs-target="#photos_carousel"
                    data-bs-slide-to="1" class="active">
                    </button>
                    <button type="button" data-bs-target="#photos_carousel"
                    data-bs-slide-to="2" class="active">
                    </button>
                    <button type="button" data-bs-target="#photos_carousel"
                    data-bs-slide-to="3" class="active">
                    </button>
                    <button type="button" data-bs-target="#photos_carousel"
                    data-bs-slide-to="4" class="active">
                    </button>
                </div>
                <!-- carousel pictures -->
                <!-- TODO: put all images to the same size -->
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="images/lobby.jpg" alt="Picture of hotel Lobby" class="img-fluid"/>
                    </div>
                    <div class="carousel-item">
                        <img src="images/bed_1.jpg" alt="Picture of bedroom" class="img-fluid"/>
                    </div>
                    <div class="carousel-item">
                        <img src="images/pool.jpg" alt="Picture of swimming pool" class="img-fluid"/>
                    </div>
                    <div class="carousel-item">
                        <img src="images/bed_2.jpg" alt="Picture of bedroom" class="img-fluid"/>
                    </div>
                    <div class="carousel-item">
                        <img src="images/bed_3.jpg" alt="Picture of bedroom" class="img-fluid"/>
                    </div>
                </div>
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
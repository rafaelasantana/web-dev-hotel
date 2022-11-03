<!doctype html>
<html lang="en">

<head>
  <title>Registration</title>
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
        $page = "registration";
        include_once "nav.php";
    ?>
  </header>
  <main>
        <div class="container">
            <div class="row justify-content-center">
                <!-- Registration Form -->
                <div class="col-md-6 justify-content-center mt-3 mb-3">
                    <h1 class="text-center mb-3">Create your account</h1>
                    <!-- input first and last name -->
                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label for="inputFirstName">First name</label>
                            <input type="text" class="form-control" id="inputFirstName" placeholder="First name">
                        </div>

                        <div class="col-md-6 mb-3">
                            <label for="inputLastName">Last name</label>
                            <input type="text" class="form-control" id="inputLastName" placeholder="Last name">
                        </div>
                    </div>
                    <!-- select gender (male, female, other)-->
                    <div class="form-check-inline mb-3">
                        <input class="form-check-input" type="radio" name="radioGender" id="radioGenderMale" value="male">
                        <label class="form-check-label" for="radioGenderMale">Male</label>

                        <input class="form-check-input" type="radio" name="radioGender" id="radioGenderFemale" value="female">
                        <label class="form-check-label" for="radioGenderFemale">Female</label>

                        <input class="form-check-input" type="radio" name="radioGender" id="radioGenderOther" value="other">
                        <label class="form-check-label" for="radioGenderOther">Other</label>  
                    </div>
                    <!-- email, password, confirm password -->
                    <div class="form">
                        <label for="inputEmail">Email address</label>
                        <input type="email" class="form-control mb-3" id="inputEmail" placeholder="Enter Email">
                        <div class="row">
                            <div class="col-md-6 mb-3">
                                <label for="inputPassword">Password</label>
                                <input type="password" class='form-control' id="inputPassword" placeholder="Password">
                            </div>
                            <div class="col-md-6 mb-3">
                                <label for="inputConfirmPassword">Confirm password</label>
                                <input type="password" class='form-control' id="inputConfirmPassword" placeholder="Password">
                            </div>
                        </div>
                    </div>
                    <!-- Submit button -->
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>
                <!-- Photos carrousel -->
                <div class="col-md-6 mt-3 mb-3">
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
                        </div>
                        <!-- carousel pictures -->
                        <!-- TODO: put all images to the same size -->
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <img src="images/entrance.jpg" alt="Picture of Hotel entrance" class="img-fluid"/>
                            </div>
                            <div class="carousel-item">
                                <img src="images/bathroom.jpg" alt="Picture of bathroom" class="img-fluid"/>
                            </div>
                            <div class="carousel-item">
                                <img src="images/tables.jpg" alt="Picture of loft tables" class="img-fluid"/>
                            </div>
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
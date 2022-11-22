<?php
    $page = "registration";
    include_once "includes/nav.php";
?>

<main>
    <div class="container">
        <div class="row justify-content-center">
            <!-- Registration Form -->
            <form action="includes/registration.inc.php" method="POST" class="col-md-6 justify-content-center mt-4">
                <h1 class="text-center mb-3">Create your account</h1>
                <!-- input first and last name -->
                <div class="row">
                    <div class="col-md-6 mb-3">
                        <label for="inputFirstName">First name</label>
                        <input type="text" class="form-control" id="inputFirstName" name="inputFirstName" placeholder="First name">
                    </div>

                    <div class="col-md-6 mb-3">
                        <label for="inputLastName">Last name</label>
                        <input type="text" class="form-control" id="inputLastName" name="inputLastName" placeholder="Last name">
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
                    <input type="email" class="form-control mb-3" id="inputEmail" name="inputEmail" placeholder="Enter Email">
                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label for="inputPassword">Password</label>
                            <input type="password" class='form-control' id="inputPassword" name="inputPassword" placeholder="Password">
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="inputConfirmPassword">Confirm password</label>
                            <input type="password" class='form-control' id="inputConfirmPassword" name="inputConfirmPassword" placeholder="Password">
                        </div>
                    </div>
                </div>
                <!-- Submit button -->
                <div class="row justify-content-center mb-3 mx-1">
                    <button class="btn btn-primary" type="submit" name="submit">Register</button>
                </div>
                <!-- display errors returned in url coming from register attempt -->
                <?php
                   // see registration.inc.php and functions.inc.php for errors
                    if (isset($_GET["error"])) {
                        if ($_GET["error"] == "emptyInput") {
                            // update for bootstrap instead of raw html
                            echo "<p>Fill in all fields!<p>";
                        }
                        else if ($_GET["error"] == "invalidNameOrLastName") {
                            echo "<p>Make sure your name consists of only letters and/or numbers!<p>";
                        }
                        else if ($_GET["error"] == "invalidEmail") {
                            echo "<p>Please use a valid email!<p>";
                        }
                        else if ($_GET["error"] == "noPasswordMatch") {
                            echo "<p>Passwords do not match!<p>";
                        }
                        else if ($_GET["error"] == "userTaken") {
                            echo "<p>This email is already registered. Use a different mail or login!<p>";
                        }
                        else if ($_GET["error"] == "stmtFailed") {
                            echo "<p>Something went wrong, please try again!<p>";
                        }
                        else if ($_GET["error"] == "none") {
                            echo "<p>You have signed up!<p>";
                        }
                    }
                ?>
            </form>
            <!-- Photos carrousel -->
            <div class="col-md-6 d-flex justify-content-center">
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

<?php
  include_once "includes/bootstrap_lib.php";
?>
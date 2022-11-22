<?php
  $page = "home";
  include_once "includes/nav.php";
?>
<main>
  <div class="container">
      <div class="row justify-content-center my-4">
            <?php
                // greet user if he/she is logged in
                if (isset($_SESSION["userId"])) {
                    echo " <h1 class='text-center mb-4'>Welcome to The Hotel, " . $_SESSION["userName"] . "!</h1>";
                }
                else {
                    echo " <h1 class='text-center mb-4'>Welcome to The Hotel</h1>";
                }
            ?>
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

<?php
  include_once "includes/bootstrap_lib.php";
?>
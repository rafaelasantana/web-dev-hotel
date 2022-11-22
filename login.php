<?php
  $page = "login";
  include_once "includes/nav.php";
?>
  <main>
    <div class="row justify-content-center">
        <!-- login credentials -->
        <div class="col-5 my-5">
            <h1 class="text-center mb-3">Login</h1>
            <form method="POST" action="includes/login.inc.php" class="form mb-3">

              <input type="text" id="loginEmail" name="loginEmail" class="form-control mb-2" placeholder="Email..."/>

              <input type="password" id="loginPassword" name="loginPassword" class="form-control mb-2" placeholder="Password..."/>
              <div class="text-center mb-3">
                  <a href="#">Forgot Password?</a>
              </div>
              <div class="row justify-content-center mb-3 mx-1">
                <button class="btn btn-primary" type="submit" name="submit">Sign in</button>
              </div>
            </form>
             <!-- display errors returned in url coming from login attempt -->
             <?php
                  // see login.inc.php and functions.inc.php for errors
                  if (isset($_GET["error"])) {
                      if ($_GET["error"] == "emptyInput") {
                          // update for bootstrap instead of raw html
                          echo "<p>Fill in all fields!<p>";
                      }
                      else if ($_GET["error"] == "loginInvalid") {
                          echo "<p>Incorrect email or password<p>";
                      }
                  }
                ?>
        </div>
    </div>

  </main>

  <?php
  include_once "includes/bootstrap_lib.php";
?>
<?php
  $page = "impressum";
  include_once "includes/nav.php";
?>
<main>
  <div class="container">
      <div class="row justify-content-center my-3">
          <!-- Impressum information -->
          <div class="col-md-6 mb-3">

              <h1 class="my-3">Impressum</h1>
              <!-- Link to FAQ page -->
              <p class="text">
                  Do you have questions? Reach out to our <a href="help.php">FAQ Page</a>
              </p>
              <!-- Kontaktdaten (idR Tel, Fax, E-Mail) -->
              <p>
                  Tel: +43 123 4567 <br>
                  Fax: +43 123 4567 89 <br>
                  <div class='row justify-content-center my-3'>
                    <div class='col'>
                      <img src="images/rafaela.png" alt="Picture of Rafaela" width="200"/></br>
                      Email Rafaela: <a href="mailto:if22b114@technikum-wien.at">if22b114@technikum-wien.at</a><br>
                    </div>
                    <div class='col'>
                    <img src="images/ela.png" alt="Picture of Elaheh" width="200"/></br>
                      Email Elaheh: <a href="mailto:if22b260@technikum-wien.at">if22b260@technikum-wien.at</a><br>
                    </div>
                  </div>
                  <!-- pictures of Rafaela and Elaheh-->
                  <!--
                  <div>
                      <img src="rafaela.png" height="100"/>
                      <img src="ela.png" height="100"/>
                  </div>
                  -->
              </p>

              <strong class="text-body">This website is offered by:</strong>
              <!-- Name -->
              <p>
                  Gringas Gesellschaft m.b.H. & Co KG <br>
              </p>
                <!-- Standort der Gewerbeberechtigung bzw volle geografische Anschrift -->
                <p>
                  Höchstädtpl. 6 <br>
                  1200 Vienna <br>
                  Austria <br>
                </p>
                <p>
                  <!-- Unternehmensgegenstand -->
                  Hotel <br>
                  <!-- Berufsbezeichnung -->
                  Hotellerie, Hotelmanagement
                  <!-- Mitgliedschaften bei der Wirtschaftskammerorganisation -->
                  Wirtschaftskammer Wien <br>
                  <!-- UID-Nummer -->
                  UID-Nr: ATU12345678 <br>
                </p>
                <p>
                  <!-- Aufsichtsbehörde/Gewerbebehörde -->
                  Magistratisches Bezirksamt des 20. Bezirks <br>
                  <!-- anwendbare Rechtsvorschriften und Zugang dazu -->
                  Gewerbeordnung (GewO) aufrufbar unter
                  <a href="www.ris.bka.gv.at" >www.ris.bka.gv.at</a> <br>
                  <!-- Angaben zur Online-Streitbeilegung -->
                  Beschwerden an die Online-Streitbeilegungsplattform der EU richten unter
                  <a href="http://ec.europa.eu/odr" >http://ec.europa.eu/odr</a> <br>
                </p>
          </div>

          <!-- Gallery pictures -->
          <div class="col-md-6 mb-3">
              <img src="images/entrance.jpg" alt="Picture of Hotel entrance" class="img-fluid"/>
          </div>
                  </div>

              </div>

</main>
<?php
  include_once "includes/bootstrap_lib.php";
?>
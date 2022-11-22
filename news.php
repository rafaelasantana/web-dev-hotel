<?php
  $page = "news";
  include_once "includes/nav.php";
?>

<main>
<div class="container-fluid">
    <div class="row justify-content-center my-4">
        <div class="col-8">
            <h1 class='text-center mb-4'>News</h1>
            <!-- show upload option only if user is logged in-->
            <?php
                if (isset($_SESSION["userId"])) { ?>
                    <form action="includes/upload.inc.php" method="POST" enctype="multipart/form-data">
                        <label class="form-label" for="file">Upload your file</label>
                        <input type="file" class ="form-control mb-3" id="file" name="file">
                        <div class="row justify-content-center mb-3 mx-1">
                            <button class="btn btn-primary" type="submit" name="submit">Upload</button>
                        </div>
                    </form>
            <?php } ?>
            <!-- show uploaded images -->
            <?php
                include_once 'includes/news.inc.php'
            ?>
        </div>
    </div>
</div>

</main>
<?php
  include_once "includes/bootstrap_lib.php";
?>
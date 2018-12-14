<?php
// Start the session
session_start();
?>
<!doctype html>
<html lang="en">
  <head>
    <?php include("header.php"); ?>
    <title>Welcome To Noble Smart Academy</title>
  </head>

  <body>
    <?php include("nav.php"); ?>
    <main role="main">

      <div class="container">
        <!-- Example row of columns -->
        <div class="row">
          <div class="col-md-4">
            <h2>Courses</h2>
            <p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui. </p>
            <p><a class="btn btn-secondary" href="courses.php" role="button">View details &raquo;</a></p>
          </div>
          <div class="col-md-4">
            <h2>Students</h2>
            <p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui. </p>
            <p><a class="btn btn-secondary" href="students.php" role="button">View details &raquo;</a></p>
          </div>
          <div class="col-md-4">
            <h2>Classes</h2>
            <p>Donec sed odio dui. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Vestibulum id ligula porta felis euismod semper. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.</p>
            <p><a class="btn btn-secondary" href="classes.php" role="button">View details &raquo;</a></p>
          </div>
        </div>

      </div> <!-- /container -->

    </main>

    <?php include("footer.php"); ?>
  </body>
</html>

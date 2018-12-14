<?php
// Start the session
session_start();
require("class_lib/student.class.php");
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
        This is OO Register page
        <?php
            $bruce = new Student();
            $bruce->set_FirstName("Bruce");
            $bruce->set_LastName("Wayne");

            echo "<p>Hello ".$bruce->get_Name()."</p>";
            // $bruce->register();
        ?>

      </div> <!-- /container -->

    </main>

    <?php include("footer.php"); ?>
  </body>
</html>

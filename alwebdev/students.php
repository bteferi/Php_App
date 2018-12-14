<?php
// Start the session
session_start();
?>
<!doctype html>
<html lang="en">
  <head>
    <?php include("header.php"); ?>
    <title>Our Students</title>

  </head>

  <body>
    <?php include("nav.php"); ?>
    <main role="main">

      <div class="container">
         <?php
         $qs = $_SERVER['QUERY_STRING'];
         $method = $_SERVER['REQUEST_METHOD'];
         $arQS = $qs!='' ? explode('&', $qs) : null;
         var_dump($arQS);
         if ($method = 'GET'){
            if ($qs!=''){
              $arId = explode('=',$arQS[0]);
              $arMode = explode('=',$arQS[1]);
              echo "QS:".$qs."<br/>";
              // var_dump($id);
              // var_dump($mode);
              if ($arMode[1]=='edit') {
                editStudent($arId[1]);
              } else if ($arMode[1]=='view') {
                viewStudent($arId[1]);
              }
            } else {
                showStudents();
            }
         } else {
            saveStudent();
         }

         ?>
      </div> <!-- /container -->

    </main>

    <?php include("footer.php"); ?>
  </body>
</html>

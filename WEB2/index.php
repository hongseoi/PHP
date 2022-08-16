<!DOCTYPE html>
<html lang="kr" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <h1><a href="index.php">WEB</a></h1>
    <ol>
      <li><a href="index.php?id=HTML"> HTML</li>
      <li><a href="index.php?id=CSS"> CSS</li>
      <li><a href="index.php?id=JavaScript"> JavaScript</li>
      <li><a href="index.php?id=PHP">PHP</a></li>
    </ol>
    <h2>
      <?php
        if (isset($_GET['id'])){
          echo file_get_contents("data/".$_GET['id']);
        }
        else{
          echo "Welcome! PhP";

        }
      ?>

    </h2>
    <?php
    //data/id값에 해당하는 파일을 읽어서 파일 내용을 echo
     ?>
  </body>
</html>

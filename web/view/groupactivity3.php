<?php
    $name = htmlspecialchars($_POST["name"]);
    $email = htmlspecialchars($_POST["email"]);
    $major = htmlspecialchars($_POST["major"]);
    
    $comments = htmlspecialchars($_POST["comments"]);
?>
<!doctype html>
<html>
    <head>
    <meta charset = "utf-8">
    <title></title>

    </head>
    <body>
    <?=$name?>
    <br>
    Email: <a href="mailto:<?=$email?>"><?=$email?></a>
    <br>
    <?=$major?>
    <br>
    <?=$comments?>
    <br>
    <?php
      foreach($_POST["places"] as $selected){
          echo $selected."</br>";
      }
        ?>
    <footer></footer>
    </body>

</html>
<?php
  $people = ['Barclay', 'Ryan', 'Erin'];

for($x = 0; $x<count($people); $x++){
  echo $people[$x];
}
?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>White wine Spritzer</title>
  </head>
  <header>
    <h1>so awesome!</h1>
  </header>
  <body>
    <p>That's cool.</p>
    <p><?php foreach ($people as $key => $value) {
      echo $key,": ". $value."<br/>";
    }?></p>
  </body>
</html>

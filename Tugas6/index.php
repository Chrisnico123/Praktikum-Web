<?php
 $input = $_POST['number'];
 echo $input;
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Romawi-Count</title>
    <style>
      #input {
        width: 400px;
        height: 50px;
        font-size: large;
      }
    </style>
  </head>
  <body>
    <div class="container">
      <div class="output">
        <h1 id="hasil">Hasil : </h1>
      </div>
      <div class="input">
        <center>
          <label for=""><h1>Input Number</h1></label>
          <br />
          <form method="POST">
            <input type="number" id="number" placeholder="input" name="number"/>
            <button id="done">Done</button>
          </form>
        </center>
      </div>
    </div>
  </body>
</html>

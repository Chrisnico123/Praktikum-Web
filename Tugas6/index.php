<?php
 $input = $_POST['number'];
 $array = array(1000,900,500,400,100,90,50,40,10,9,5,4,1);
 $romawi = array("M","CM","D","CD","C","XC","L","XL","X","IX","V","IV","I");
 $result = '';
 $index = 0;
for ($j = 0; $j < count($array); $j ++) {
  if($input/$array[$j] >= 1){
    $temp = $input % $array[$j];
    $cur .= intval($input / $array[$j]);
    for ($i = 0; $i < $cur;$i ++){
      $result .= $romawi[$j];
    }
    if($temp === 0){
      break;
    }
    $input = $temp;
    $j = 0;
    $cur = 0; 
  }
}
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
        <h1 id="hasil">Hasil : <?php echo $result ?></h1>
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

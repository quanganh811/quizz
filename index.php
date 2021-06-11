<!DOCTYPE html>
<?php
session_start();
$a = rand(1, 100);
$b = rand(1, 100);


$c1 = $a + $b;
$c2 = $a - $b;
$c3 = $a * $b;
$c4 = round($a / $b, 1);

$result = array("$c1", "$c2", "$c3", "$c4");
shuffle($result);
$session["result"] = $result;

$math = array("+", "-", "*", "/");
$doMath = array_rand($math, 1);


if ($_SESSION['score'] === null) {
  $_SESSION['score'] = 0;
}

if (isset($_POST['userans']) || $_SERVER["REQUEST_METHOD"] == "POST") {
  $result1 = ($_POST['userans']);


  if ($_SESSION['compare'] == $result1) {
    $_SESSION['score'] += 1;
  } else {

    header('Location: http://localhost/BAI1/insert.php');
    die;
  }
} else {
  $_SESSION['score'] = 0;
}


switch ($math[$doMath]) {
  case "+":
    $_SESSION['compare'] = $a + $b;
    break;
  case '-':
    $_SESSION['compare'] = $a - $b;
    break;
  case '*':
    $_SESSION['compare'] = $a * $b;
    break;
  case '/':
    $_SESSION['compare'] = round($a / $b, 1);
    break;
}




?>


<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="index.css">
</head>

<body>


  <div class="game">
    <div class="top">
      <div class="score">
        Score = <?php echo $_SESSION['score'] ?>
      </div>
    </div>

    <div class="main">
      <div class="question">
        <?php
        echo $a;
        echo $math[$doMath];
        echo $b;
        ?>
      </div>
      <div class="click-on">
        Click on the correct answer
      </div>
      <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">


        <div class="answer">
          <input required type="submit" class="answer1" name="userans" value="<?php echo $result[0] ?>">
          <input required type="submit" class="answer1" name="userans" value="<?php echo $result[1] ?>">
          <input required type="submit" class="answer1" name="userans" value="<?php echo $result[2] ?>">
          <input required type="submit" class="answer1" name="userans" value="<?php echo $result[3] ?>">
      </form>
    </div>
  </div>
  <div class="bottom">
    <input class="resetGame" type="button" onclick="reLoad()" name="start" value="Reset Game">
     <div class="timeRemaining" id="countdown">Time Remaining</div> 
  </div>
  </div>
  <script src="index.js"></script>
</body>

</html>
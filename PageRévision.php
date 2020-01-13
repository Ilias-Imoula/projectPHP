
<?php
include('foot-head/header.php')
?>

<body>
  <h1>Sélectionnez les tables de multiplication que vous souhaitez étudier.</h1>
  <form class="m-5"  method="post">
    <div class="form-check form-check-inline">
      <?php $number1 = 1;
      echo "<h1> $number1 x </h1>"; ?>
      <input class="form-check-input" type="checkbox" name="cal1" id="inlineCheckbox1" value="option1">
    </div>
    <div class="form-check form-check-inline">
      <?php $number2 = 2;
      echo "<h1> $number2 x </h1>"; ?>
      <input class="form-check-input" type="checkbox" name="cal2" id="inlineCheckbox1" value="option1">
    </div>
    <div class="form-check form-check-inline">
      <?php $number3 = 3;
      echo "<h1> $number3 x </h1>"; ?>
      <input class="form-check-input" type="checkbox" name="cal3" id="inlineCheckbox1" value="option1">
    </div>
    <div class="form-check form-check-inline">
      <?php $number4 = 4;
      echo "<h1> $number4 x </h1>"; ?>
      <input class="form-check-input" type="checkbox" name="cal4" id="inlineCheckbox1" value="option1">
    </div>
    <div class="form-check form-check-inline">
      <?php $number5 = 5;
      echo "<h1> $number5 x </h1>"; ?>
      <input class="form-check-input" type="checkbox" name="cal5" id="inlineCheckbox1" value="option1">
    </div>
    <div class="form-check form-check-inline">
      <?php $number6 = 6;
      echo "<h1> $number6 x </h1>"; ?>
      <input class="form-check-input" type="checkbox" name="cal6" id="inlineCheckbox1" value="option1">
    </div>
    <div class="form-check form-check-inline">
      <?php $number7 = 7;
      echo "<h1> $number7 x </h1>"; ?>
      <input class="form-check-input" type="checkbox" name="cal7" id="inlineCheckbox1" value="option1">
    </div>
    <div class="form-check form-check-inline">
      <?php $number8 = 8;
      echo "<h1> $number8 x </h1>"; ?>
      <input class="form-check-input" type="checkbox" name="cal8" id="inlineCheckbox1" value="option1">
    </div>
    <div class="form-check form-check-inline">
      <?php $number9 = 9;
      echo "<h1> $number9 x </h1>"; ?>
      <input class="form-check-input" type="checkbox" name="cal9" id="inlineCheckbox1" value="option1">
    </div>
    <input type="submit" name="form_submit" value="go">
  </form>

<?php if (isset($_POST['cal1'])) {
  echo "<h1> <span class='badge badge-pill badge-warning'>Table de multiplication par 1 </span></h1></br>"."<h1 style='color:yellow;'>"."1 x 1 = ".($number1 * 1)."</br>1 x 2 = ".($number1 * 2)."</br>1 x 3 = ".($number1 * 3)."</br>1 x 4 = ".($number1 * 4)."</br>1 x 5 = ".($number1 * 5)."</br>1 x 6 = ".($number1 * 6)."</br>1 x 7 = ".($number1 * 7)."</br>1 x 8 = ".($number1 * 8)."</br>1 x 9 = ".($number1 * 9)."</br>1 x 10 =".($number1 * 10)."</h1>"; 
} 
if (isset($_POST['cal2'])) {
  echo "<h1><span class='badge badge-pill badge-warning'>Table de multiplication par 2</h1></br>"."<h1 style='color:yellow;'>"."2 x 1 = ".($number2 * 1)."</br>2 x 2 = ".($number2 * 2)."</br>2 x 3 = ".($number2 * 3)."</br>2 x 4 = ".($number2 * 4)."</br>2 x 5 = ".($number2 * 5)."</br>2 x 6 = ".($number2 * 6)."</br>2 x 7 = ".($number2 * 7)."</br>2 x 8 = ".($number2 * 8)."</br>2 x 9 = ".($number2 * 9)."</br>2 x 10 =".($number2 * 10)."</h1>"; 
}
if (isset($_POST['cal3'])) {
  echo "<h1><span class='badge badge-pill badge-warning'>Table de multiplication par 3</h1></br>"."<h1 style='color:yellow;'>"."3 x 1 = ".($number3 * 1)."</br>3 x 2 = ".($number3 * 2)."</br>3 x 3 = ".($number3 * 3)."</br>3 x 4 = ".($number3 * 4)."</br>3 x 5 = ".($number3 * 5)."</br>3 x 6 = ".($number3 * 6)."</br>3 x 7 = ".($number3 * 7)."</br>3 x 8 = ".($number3 * 8)."</br>3 x 9 = ".($number3 * 9)."</br>3 x 10 =".($number3 * 10)."</h1>"; 
}
if (isset($_POST['cal4'])) {
  echo "<h1><span class='badge badge-pill badge-warning'>Table de multiplication par 4</h1></br>"."<h1 style='color:yellow;'>"."4 x 1 = ".($number4 * 1)."</br>4 x 2 = ".($number4 * 2)."</br>4 x 3 = ".($number4 * 3)."</br>4 x 4 = ".($number4 * 4)."</br>4 x 5 = ".($number4 * 5)."</br>4 x 6 = ".($number4 * 6)."</br>4 x 7 = ".($number4 * 7)."</br>4 x 8 = ".($number4 * 8)."</br>4 x 9 = ".($number4 * 9)."</br>4 x 10 =".($number4 * 10)."</h1>"; 
}
if (isset($_POST['cal5'])) {
  echo "<h1><span class='badge badge-pill badge-warning'>Table de multiplication par 5</h1></br>"."<h1 style='color:yellow;'>"."5 x 1 = ".($number5 * 1)."</br>5 x 2 = ".($number5 * 2)."</br>5 x 3 = ".($number5 * 3)."</br>5 x 4 = ".($number5 * 4)."</br>5 x 5 = ".($number5 * 5)."</br>5 x 6 = ".($number5 * 6)."</br>5 x 7 = ".($number5 * 7)."</br>5 x 8 = ".($number5 * 8)."</br>9 x 9 = ".($number5 * 9)."</br>5 x 10 =".($number5 * 10)."</h1>"; 
}
if (isset($_POST['cal6'])) {
  echo "<h1><span class='badge badge-pill badge-warning'>Table de multiplication par 6</h1></br>"."<h1 style='color:yellow;'>"."6 x 1 = ".($number6 * 1)."</br>6 x 2 = ".($number6 * 2)."</br>6 x 3 = ".($number6 * 3)."</br>6 x 4 = ".($number6 * 4)."</br>6 x 5 = ".($number6 * 5)."</br>6 x 6 = ".($number6 * 6)."</br>6 x 7 = ".($number6 * 7)."</br>6 x 8 = ".($number6 * 8)."</br>6 x 9 = ".($number6 * 9)."</br>6 x 10 =".($number6 * 10)."</h1>"; 
}
if (isset($_POST['cal7'])) {
  echo "<h1><span class='badge badge-pill badge-warning'>Table de multiplication par 7</h1></br>"."<h1 style='color:yellow;'>"."7 x 1 = ".($number7 * 1)."</br>7 x 2 = ".($number7 * 2)."</br>7 x 3 = ".($number7 * 3)."</br>7 x 4 = ".($number7 * 4)."</br>7 x 5 = ".($number7 * 5)."</br>7 x 6 = ".($number7 * 6)."</br>7 x 7 = ".($number7 * 7)."</br>7 x 8 = ".($number7 * 8)."</br>7 x 9 = ".($number7 * 9)."</br>7 x 10 =".($number7 * 10)."</h1>"; 
}
if (isset($_POST['cal8'])) {
  echo "<h1><span class='badge badge-pill badge-warning'>Table de multiplication par 8</h1></br>"."<h1 style='color:yellow;'>"."8 x 1 = ".($number8 * 1)."</br>8 x 2 = ".($number8 * 2)."</br>8 x 3 = ".($number8 * 3)."</br>8 x 4 = ".($number8 * 4)."</br>8 x 5 = ".($number8 * 5)."</br>8 x 6 = ".($number8 * 6)."</br>8 x 7 = ".($number8 * 7)."</br>8 x 8 = ".($number8 * 8)."</br>8 x 9 = ".($number8 * 9)."</br>8 x 10 =".($number8 * 10)."</h1>"; 
}
if (isset($_POST['cal9'])) {
  echo "<h1><span class='badge badge-pill badge-warning'>Table de multiplication par 9</h1></br>"."<h1 style='color:yellow;'>"."9 x 1 = ".($number9 * 1)."</br>9 x 2 = ".($number9 * 2)."</br>9 x 3 = ".($number9 * 3)."</br>9 x 4 = ".($number9 * 4)."</br>9 x 5 = ".($number9 * 5)."</br>9 x 6 = ".($number9 * 6)."</br>9 x 7 = ".($number9 * 7)."</br>9 x 8 = ".($number9 * 8)."</br>9 x 9 = ".($number9 * 9)."</br>9 x 10 =".($number9 * 10)."</h1>"; 
}
?>
</body>
<?php
include('foot-head/footer.php')
?>


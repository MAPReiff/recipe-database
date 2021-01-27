<?php

  $breakfastDir     =   './breakfast';
  $lunchDir         =   './lunch';
  $dinnerDir        =   './dinner';

  $breakfastFiles   =   scandir($breakfastDir, 1);
  $lunchFiles       =   scandir($lunchDir, 1);
  $dinnerFiles      =   scandir($dinnerDir, 1);

?>

<!DOCTYPE html>
<html>
  <head>
	<link href=simple.css rel=stylesheet>
  </head>
  <body>
    <div class="container" style="margin-bottom: 20px;">
      <div class="row">
        <div class="col-xs-6">
            <h1>Recipe List</h1>
            <h2><a href="./recipeGen.html">Click Here To Add A Recipe</a></h2>
            <br>
            <h2>Breakfast</hr>
            <?php
              for ($b = 0; $b <= count($breakfastFiles); $b++){
                if($breakfastFiles[$b]==""){
                }
                else if($breakfastFiles[$b]=="."){
                }
                else if($breakfastFiles[$b]==".."){
                }
                else if($breakfastFiles[$b]==".html"){
                }
                else{
                  $mealName   =   preg_replace('/(?<!\ )[A-Z]/', ' $0', str_replace(".html", "", $breakfastFiles[$b]));
                  echo "<h3>&#8226; <a href='./breakfast/" . $breakfastFiles[$b] . "'>" . $mealName . "</a></h3>";
                }
              }
            ?>
            <br>
            <h2>Lunch</hr>
            <?php
              for ($b = 0; $b <= count($lunchFiles); $b++){
                if($lunchFiles[$b]==""){
                }
                else if($lunchFiles[$b]=="."){
                }
                else if($lunchFiles[$b]==".."){
                }
                else if($lunchFiles[$b]==".html"){
                }
                else{
                  $mealName   =   preg_replace('/(?<!\ )[A-Z]/', ' $0', str_replace(".html", "", $lunchFiles[$b]));
                  echo "<h3>&#8226; <a href='./lunch/" . $lunchFiles[$b] . "'>" . $mealName . "</a></h3>";
                }
              }
            ?>
            <br>
            <h2>Dinner</hr>
            <?php
              for ($b = 0; $b <= count($dinnerFiles); $b++){
                if($dinnerFiles[$b]==""){
                }
                else if($dinnerFiles[$b]=="."){
                }
                else if($dinnerFiles[$b]==".."){
                }
                else if($dinnerFiles[$b]==".html"){
                }
                else{
                  $mealName   =   preg_replace('/(?<!\ )[A-Z]/', ' $0', str_replace(".html", "", $dinnerFiles[$b]));
                  echo "<h3>&#8226; <a href='./dinner/" . $dinnerFiles[$b] . "'>" . $mealName . "</a></h3>";
                }
              }
            ?>
        </div>
    </div>
  </div>
  </body>
</html>
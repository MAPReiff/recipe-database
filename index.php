<?php

  $breakfastDir     =   './breakfast';
  $entreesDir         =   './entrees';
  $sidesDir        =   './sides';

  $breakfastFiles   =   scandir($breakfastDir, 1);
  $entreesFiles       =   scandir($entreesDir, 1);
  $sidesFiles      =   scandir($sidesDir, 1);

?>

<!DOCTYPE html>
<html>
  <head>
  <link href=simple.css rel=stylesheet>
  <title>Recipe List</title>
  </head>
  <body>
    <div class="container" style="margin-bottom: 20px;">
      <div class="row">
        <div class="col-xs-6">
            <h1>Recipe List</h1>
            <h2><a href="./recipeGen.html">Click Here To Add A Recipe</a></h2>
            <br>
            <details>
            <summary>Breakfast</summary>
              <figure>
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
            </figure>
            </details>
            <br>
            <details>
            <summary>Entrées</summary>
            <figure>
            <?php
              for ($b = 0; $b <= count($entreesFiles); $b++){
                if($entreesFiles[$b]==""){
                }
                else if($entreesFiles[$b]=="."){
                }
                else if($entreesFiles[$b]==".."){
                }
                else if($entreesFiles[$b]==".html"){
                }
                else{
                  $mealName   =   preg_replace('/(?<!\ )[A-Z]/', ' $0', str_replace(".html", "", $entreesFiles[$b]));
                  echo "<h3>&#8226; <a href='./entrees/" . $entreesFiles[$b] . "'>" . $mealName . "</a></h3>";
                }
              }
            ?>
            </figure>
            </details>
            <br>
            <details>
            <summary>Sides</summary>
            <figure>
            <?php
              for ($b = 0; $b <= count($sidesFiles); $b++){
                if($sidesFiles[$b]==""){
                }
                else if($sidesFiles[$b]=="."){
                }
                else if($sidesFiles[$b]==".."){
                }
                else if($sidesFiles[$b]==".html"){
                }
                else{
                  $mealName   =   preg_replace('/(?<!\ )[A-Z]/', ' $0', str_replace(".html", "", $sidesFiles[$b]));
                  echo "<h3>&#8226; <a href='./sides/" . $sidesFiles[$b] . "'>" . $mealName . "</a></h3>";
                }
              }
            ?>
            </figure>
            </details>
        </div>
    </div>
  </div>
  </body>
</html>
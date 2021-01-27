<?php
  // vars
  $recipeName           =   $_POST['recipeName'];                         // Fried Chicken
  $recipeImage          =   './assets/img' . $_POST['recipeImage'];       // http://link.website/chicken.png
  $recipeServings       =   $_POST['recipeServings'];                     // 12
  $recipePrepTime       =   $_POST['recipePrepTime'];                     // 1h 20m
  $recipeCookTime       =   $_POST['recipeCookTime'];                     // 1h 20m
  $recipeIngredients    =   $_POST['recipeIngredients'];                  // Chicken, Buttermilk
  $recipeInstructions   =   $_POST['recipeInstructions'];                 // Put chicken in stuff
  $recipeEquipment      =   $_POST['recipeEquipment'];                    // Cast iron
  $recipeTimeOfDay      =   $_POST['recipeTimeOfDay'];                    // Lunch

  if($recipeTimeOfDay=="Breakfast"){
    $recipeFileName     =   str_replace(' ', '', ucwords($recipeName));
    $recipeFile         =   './breakfast/' . $recipeFileName . '.html';   // ./breakfast/FriedChicken.html
  }
  else if($recipeTimeOfDay=="Lunch"){
    $recipeFileName     =   str_replace(' ', '', ucwords($recipeName));  // ./lunch/FriedChicken.html
    $recipeFile         =   './lunch/' . $recipeFileName . '.html';
  }
  else if($recipeTimeOfDay=="Dinner"){
    $recipeFileName     =   str_replace(' ', '', ucwords($recipeName));  // ./dinner/FriedChicken.html
    $recipeFile         =   './dinner/' . $recipeFileName . '.html';
  }

  // page template
  $strOut = '<!DOCTYPE html>' . 
            '<html>' . 
              '<Body>' . 
                'Name - ' . $recipeName . '' . 
              '</body>' . 
            '</html>';


  // write to html file
  
  $f = fopen($recipeFile, "w");
  fwrite($f, $strOut);
  fclose($f);

  // redirect to new page
  header("Location: " . $recipeFile);
  exit();


?>
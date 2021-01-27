<?php
  // vars
  $recipeName           =   ucwords($_POST['recipeName']);                                                           // Fried Chicken
  $recipeImage          =   $_POST['recipeImage'];                                                                   // http://link.website/chicken.png
  $recipeServings       =   $_POST['recipeServings'];                                                                // 12
  $recipePrepTime       =   $_POST['recipePrepTime'];                                                                // 1h 20m
  $recipeCookTime       =   $_POST['recipeCookTime'];                                                                // 1h 20m
  $recipeIngredients    =   '&#8226; ' . str_replace(PHP_EOL, '<br />&#8226; ', $_POST['recipeIngredients']);        // Chicken, Buttermilk
  $recipeInstructions   =   '&#8226; ' . str_replace(PHP_EOL, '<br />&#8226; ', $_POST['recipeInstructions']);       // Put chicken in stuff
  $recipeEquipment      =   '&#8226; ' . str_replace(PHP_EOL, '<br />&#8226; ', $_POST['recipeEquipment']);          // Cast iron
  $recipeTimeOfDay      =   $_POST['recipeTimeOfDay'];                                                               // Lunch
  $recipeOrigin         =   $_POST['recipeOrigin'];                                                                  // http://cooking.website/friedchicken

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
      '<head>' . 
        '<link href="../simple.css" rel=stylesheet>' . 
        '<title>' . $recipeName . '</title>' . 
      '</head>' . 
      '<body>' . 
        '<div class="container" style="margin-bottom: 20px;">' . 
          '<div class="row">' . 
            '<div class="col-xs-6">' . 
              '<h1>' . $recipeName . '</h1>' . 
              '<img src="' . $recipeImage . '" width="600" height="500">' . 
              '<br>' . 
              '<h2>Serves: ' . $recipeServings . '</h2>' . 
              '<h2>Prep Time: ' . $recipePrepTime . '</h2>' . 
              '<h2>Cook Time: ' . $recipeCookTime . '</h2>' . 
              '<dl>' . 
                '<dt><h2>Ingredients:</h2>' . 
                  '<dd>' . $recipeIngredients . '' . 
              '</dl>' . 
              '<dl>' . 
                '<dt><h2>Equipment:</h2>' . 
                  '<dd>' . $recipeEquipment . '' . 
              '</dl>' . 
              '<dl>' . 
                '<dt><h2>Instructions:</h2>' . 
                  '<dd>' . $recipeInstructions . '' . 
              '</dl>' . 
               '<h2><a href="' . $recipeOrigin . '">Original Web Page</a></h2>' .
            '</div>' . 
         ' </div>' . 
        '</div>' . 
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


<?
  // vars
  $recipeName           =   $_POST['recipeName'];                         // Fried Chicken
  $recipeFileName       =   str_replace(' ', '', ucwords($recipeName));   // FriedChicken
  $recipeImage          =   './assets/img' . $_POST['recipeImage'];       // link.website/chicken.png
  $recipeServings       =   $_POST['recipeServings'];                     // 12
  $recipePrepTime       =   $_POST['recipePrepTime'];                     // 1h 20m
  $recipeCookTime       =   $_POST['recipeCookTime'];                     // 1h 20m
  $recipeIngredients    =   $_POST['recipeIngredients'];                  // Chicken, Buttermilk
  $recipeInstructions   =   $_POST['recipeInstructions'];                 // Put chicken in stuff
  $recipeEquipment      =   $_POST['recipeEquipment'];                    // Cast iron

  // page template
  $strOut = '!<DOCTYPE html>'
            '<html>'
            'html code here'
            '</html>';

  // write to html file
  $f = fopen($recipeFileName . ".html");
  fwrite($f, $strOut);
  fclose($f);

?>
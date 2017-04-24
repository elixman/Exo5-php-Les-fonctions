<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <title>Exo5-php-Les-fonctions</title>
</head>
<body>

  <p>##Exercice 1</p>
  <p>
    <?php
      function myFunction($myVariable)
      {
          if ($myVariable == true)
          {
            echo "True";
          }
          else
          {
            echo "False";
          }
      }
      myFunction($myVariable = true);
    ?>
  </p>

  <p>##Exercice 2</p>
  <p>
    <?php
      function myFunction2($myVariable2)
      {
        echo $myVariable2;
      }
      myFunction2 ($myVariable2 = "Today is Earth Day!");
    ?>
  </p>

  <p>##Exercice 3</p>
  <p>
    <?php
    ini_set('display_errors',1);
ini_set('display_startup_errors',1);
error_reporting(-1);
      function myFunction3($myVariable3, $myVariable4)
      {
        echo $myVariable3, $myVariable4;
      }
      myFunction3($myVariable3 = "Today is Earth Day! ",$myVariable4 = "So let's do green stuff!");
    ?>
  </p>

  <p>##Exercice 4</p>
  <p>
    <?php
      function myFunction4($myVariable5, $myVariable6)
      {
        if ($myVariable5 == $myVariable6)
          {
          echo $myVariable5." and ".$myVariable6." are equal";
          }
        elseif ($myVariable5 < $myVariable6)
          {
          echo $myVariable5." is inferior compared to ".$myVariable6;
          }
        else
          {
          echo $myVariable5." is superior compared to ".$myVariable6;
          }
      }
      myFunction4($myVariable5 = 6, $myVariable6 = 6);
    ?>
  </p>

  <p>##Exercice 5</p>
  <p>
    <?php
      function myFunction5($myVariable7, $myVariable8)
      {
        echo $myVariable7, $myVariable8;
      }
      myFunction3($myVariable7 = "My favorit number is : ",$myVariable8 = 6);
    ?>
  </p>

  <p>##Exercice 6</p>
  <p>
    <?php
      function myFunction6($firstname1, $sirname1, $age1)
      {
        echo "Hello ",$firstname1," ", $sirname1,". You are ", $age1, " years old.";
      }
      myFunction6($firstname1 = "Sylvain",$sirname1 = "BARRIERE",$age1 = 30);
    ?>
  </p>

  <p>##Exercice 7</p>
  <p>
    <?php
    function myFunction7($age2, $gender1)
    {
      if ($gender1 == "man" AND $age2 >= 18)
        {
        echo "Hello, you're a man and you're a big boy!";
        }
      elseif ($gender1 == "woman" AND $age2 >= 18)
        {
        echo "Hello, you're a woman and you're a big girl!";
        }
      elseif ($gender1 == "man" AND $age2 < 18)
        {
        echo "Hello, you're a man and you're a minor.";
        }
      else
        {
        echo "Hello, you're a woman and you're a minor.";
        }
    }
    myFunction7($age2 = 17, $gender1 = "woman");
    ?>
  </p>

  <p>##Exercice 8</p>
  <p>
    <?php
    ini_set('display_errors',1);
    ini_set('display_startup_errors',1);
    error_reporting(-1);

      $number1 = 5;
      $number2 = 7;
      $number3 = 56;

      function myFunction8($number1, $number2, $number3)
      {
         $result = ($number1+$number2+$number3);
         echo $result;
      }
      myFunction8($number1, $number2, $number3);
    ?>
  </p>

</body> 
</html>

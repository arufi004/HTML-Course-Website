<!-- ***************************************************************************************
    Page Name  : controller2.php
    Author     : Anthony Rufin
    Course     : CGS 4854 WEB-Online Semester Summer 2023
    URL        : ocelot.aul.fiu.edu/~arufi004
    Professor  : Michael Robinson
    Program #  : Assignment 2
    Purpose    : This takes the data extracted from program2.php and converts it into statements printed to the screen using the echo command.

    Due Date   : 06/08/2023
    Certification:
    I hereby certify that this work is my own and none of it is the work of any other person.

    ..........{ Anthony Rufin }..........

  **************************************************************************************** -->
<!DOCTYPE html>
<html>
  <head>
    <title>Controller2</title>
  </head>

  <body>
    <center><H1>This is controller2.php</H1></center>
    <center><H1>Called from Program2</H1></center>
    <?php

      //extract the data from the values the User inputed
      //text fields
      $FIUPantherID = $_POST['FIUPantherID'];
      $Email = $_POST['Email'];
      $LastName = $_POST['LastName'];
      $FirstName = $_POST['FirstName'];
      $FavoriteStar = $_POST['FavoriteStar'];
      $FavoriteColor = $_POST['FavoriteColor'];
      $FavoritePlanet = $_POST['FavoritePlanet'];
      $Country = $_POST['Country'];
      $Major = $_POST['Major'];
      $Comments = $_POST['Comments'];
      $FavoriteNaturalSatellite = $_POST['FavoriteNaturalSatellite']; //dropboxes
      $FavoriteInnerPlanet = $_POST['FavoriteInnerPlanet']; //radio buttons
      $Jupiter = $_POST['Jupiter']; //checkboxes
      $Saturn = $_POST['Saturn'];
      $Uranus = $_POST['Uranus'];
      $Neptune = $_POST['Neptune'];

      //$found = $_POST['found'];
      echo "Panther ID = ";
      echo $FIUPantherID . "<br>";
      echo "Email = ";
      echo $Email . "<br>";
      echo "Last Name = "; 
      echo $LastName . "<br>";
      echo "First Name = ";
      echo $FirstName."<br>";
      echo "Favorite Star = ";
      echo $FavoriteStar."<br>";
      echo "Favorite Color = ";
      echo $FavoriteColor."<br>";
      echo "Favorite Planet = ";
      echo $FavoritePlanet."<br>";
      echo "Country= ";
      echo $Country."<br>";
      echo "Major= ";
      echo $Major."<br>";
      echo "Comments = ";
      echo $Comments."<br>";
      echo "Favorite Natural Satellite = ";
      echo $FavoriteNaturalSatellite."<br>";
      echo "Favorite Inner Planet = ";
      echo $FavoriteInnerPlanet."<br>";
      echo "Favorite Gas Giant = ";
      echo $Jupiter."<br>";
      echo "Favorite Gas Giant = ";
      echo $Saturn."<br>";
      echo "Favorite Gas Giant = ";
      echo $Uranus."<br>";
      echo "Favorite Gas Giant= ";
      echo $Neptune."<br>";

      //This handles the submit buttons.
      if( $_POST['Save'])
      {
        echo "You pressed the Save Button";
      }
      else if( $_POST['Find'])
      {
        echo "You pressed the Find Button";
      }
      else if( $_POST['Modify'])
      {
        echo "You pressed the Modify Button";
      }
      else if( $_POST['Delete'])
      {
        echo "You pressed the Delete Button";
      }
    ?>
  </body>
</html>





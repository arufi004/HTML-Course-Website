<!-- ***************************************************************************************
    Page Name  : Save.php
    Author     : Anthony Rufin
    Course     : CGS 4854 WEB-Online Semester Summer 2023
    URL        : ocelot.aul.fiu.edu/~arufi004
    Professor  : Michael Robinson
    Program #  : Assignment 3
    Purpose    : This saves the data inputted to Program 3's form.

    Due Date   : 06/27/2023
    Certification:
    I hereby certify that this work is my own and none of it is the work of any other person.

    ..........{ Anthony Rufin }..........

  **************************************************************************************** -->

<!DOCTYPE html>
<html>

  <body>
    <!--br><h3>this is save.php</h3><br-->

    <?php
/*      echo $FIUPantherID . "<br>";
      echo $Email . "<br>";
      echo $LastName . "<br>";
      echo $FirstName."<br>";
      echo $FavoriteStar."<br>";
      echo $FavoriteColor."<br>";
      echo $FavoritePlanet."<br>";
      echo $Country."<br>";
      echo $Major."<br>";
      echo $Comments."<br>";
      echo $FavoriteNaturalSatellite."<br>";
      echo $FavoriteInnerPlanet."<br>";
      echo $Jupiter."<br>";
      echo $Saturn."<br>";
      echo $Uranus."<br>";
      echo $Neptune."<br>";

      echo "Inserting records into table ".$tableName."<br>";
*/
      //If the PRIMARY KEY is a value greater than zero, put all the values inputted to the sql customers table, under that PRIMARY KEY.
      $FIUPantherID=trim($FIUPantherID);
      if(strlen($FIUPantherID)>0)
      {
        $sql="INSERT INTO customers(
          FIUPantherID,
          Email,
          LastName,
          FirstName,
          FavoriteStar,
          FavoriteColor,
          FavoritePlanet,
          Country,
          Major,
          Comments,
          FavoriteNaturalSatellite,
          FavoriteInnerPlanet,
          Jupiter,
          Saturn,
          Uranus,
          Neptune
        )
        VALUES
        (
          '$FIUPantherID',
          '$Email',
          '$LastName',
          '$FirstName',
          '$FavoriteStar',
          '$FavoriteColor',
          '$FavoritePlanet',
          '$Country',
          '$Major',
          '$Comments',
          '$FavoriteNaturalSatellite',
          '$FavoriteInnerPlanet',
          '$Jupiter',
          '$Saturn',
          '$Uranus',
          '$Neptune'
        )";

        if(mysqli_query($connection,$sql))
        {
          $message = "<span style=\"color: blue;\">RECORD $found ADDED</span><br\>";
        }
        else
        {
          $message = "<span style=\"color: red;\">RECORD $found EXISTS NOT ADDED</span><br\>";
        }
      }
      else
      {
        $message ="<span style=\"color: red;\">RECORD NOT ADDED<BR>FIUPantherID CAN NOT BE EMPTY</span><br\>";
      }

    ?>
  </body>

</html>

<!-- ***************************************************************************************
    Page Name  : Find.php
    Author     : Anthony Rufin
    Course     : CGS 4854 WEB-Online Semester Summer 2023
    URL        : ocelot.aul.fiu.edu/~arufi004
    Professor  : Michael Robinson
    Program #  : Assignment 3
    Purpose    : This searches the database for all information inputted for a specified Panther ID.

    Due Date   : 06/27/2023
    Certification:
    I hereby certify that this work is my own and none of it is the work of any other person.

    ..........{ Anthony Rufin }..........

  **************************************************************************************** -->

<!DOCTYPE html>

<html>
  <body>
    <!--h3>this is Find.php</h3-->

    <?php
      $sql="SELECT * FROM customers where FIUPantherID = '$FIUPantherID'";

      if($result=mysqli_query($connection,$sql))
      {
        $rowcount=mysqli_num_rows($result);

        while($row = mysqli_fetch_array($result))
        {
          $FIUPantherID = $row['FIUPantherID'];
          $Email = $row['Email'];
          $FirstName = $row['FirstName'];
          $LastName = $row['LastName'];
          $FavoriteStar = $row['FavoriteStar'];
          $FavoriteColor = $row['FavoriteColor'];
          $FavoritePlanet = $row['FavoritePlanet'];
          $Country = $row['Country'];
          $Major = $row['Major'];
          $Comments = $row['Comments'];
          $FavoriteNaturalSatellite = $row['FavoriteNaturalSatellite'];
          $FavoriteInnerPlanet = $row['FavoriteInnerPlanet'];
          $Jupiter = $row['Jupiter'];
          $Saturn = $row['Saturn'];
          $Uranus = $row['Uranus'];
          $Neptune = $row['Neptune'];
        }
        $FIUPantherID=trim($FIUPantherID);

        if($rowcount)
        {
          $found = $FIUPantherID;
          $message="<span style=\"color: blue;\">RECORD $found FOUND</span><br\>";
        }
        else if (strlen($FIUPantherID) == 0)
        {
          $message ="<span style=\"color: red;\">FIUPantherID CAN NOT BE EMPTY</span><br\>";

          $Email = "";
          $LastName = "";
          $FirstName = "";
          $FavoriteStar = "";
          $FavoriteColor = "";
          $FavoritePlanet = "";
          $Country = "";
          $Major = "";
          $Comments = "";
          $FavoriteNaturalSatellite = "";
          $FavoriteInnerPlanet = "";
          $Jupiter = "";
          $Saturn = "";
          $Uranus = "";
          $Neptune = "";

          $found = "";
        }
        else
        {
          $message = "<span style=\"color: red;\">RECORD $FIUPantherID NOT FOUND</span><br>";

          $Email = "";
          $LastName = "";
          $FirstName = "";
          $FavoriteStar = "";
          $FavoriteColor = "";
          $FavoritePlanet = "";
          $Country = "";
          $Major = "";
          $Comments = "";
          $FavoriteNaturalSatellite = "";
          $FavoriteInnerPlanet = "";
          $Jupiter = "";
          $Saturn = "";
          $Uranus = "";
          $Neptune = "";

          $found = "";
        }
      }

    ?>
  </body>
</html>




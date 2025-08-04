<!-- ***************************************************************************************
    Page Name  : Modify.php
    Author     : Anthony Rufin
    Course     : CGS 4854 WEB-Online Semester Summer 2023
    URL        : ocelot.aul.fiu.edu/~arufi004
    Professor  : Michael Robinson
    Program #  : Assignment 3
    Purpose    : This allows the user to modify a selected set of information from a previously submitted form.

    Due Date   : 06/27/2023
    Certification:
    I hereby certify that this work is my own and none of it is the work of any other person.

    ..........{ Anthony Rufin }..........

  **************************************************************************************** -->

<!DOCTYPE html>

<html>

  <body>
    <!--h3>this is Modify.php</h3-->

    <?php
      $found = $_POST['found'];

      if((strlen(trim($found)) > 0) && ($found == $FIUPantherID))
      {
        $query = "UPDATE customers
          SET Email = '$Email',
              LastName = '$LastName',
              FirstName = '$FirstName',
              FavoriteStar = '$FavoriteStar',
              FavoriteColor = '$FavoriteColor',
              FavoritePlanet = '$FavoritePlanet',
              Country = '$Country',
              Major = '$Major',
              Comments = '$Comments',
              FavoriteNaturalSatellite = '$FavoriteNaturalSatellite',
              FavoriteInnerPlanet = '$FavoriteInnerPlanet',
              Jupiter = '$Jupiter',
              Saturn = '$Saturn',
              Uranus = '$Uranus',
              Neptune = '$Neptune'
          WHERE FIUPantherID = '$FIUPantherID'";

        $sql = mysqli_query( $connection,$query );

        if($sql)
        {
          $message = "<span style=\"color: blue;\">RECORD $found MODIFIED</span><br\>";
        }
        else
        {
          $message ="<span style=\"color: red;\">PROBLEM UPDATING RECORD</span><br\>" ;
        }
      }
      else
      {
        $message="<span style=\"color: red;\">FIND THE RECORD BEFORE MODIFYING IT</span><br\>";
      }


    ?>
  </body>

</html>




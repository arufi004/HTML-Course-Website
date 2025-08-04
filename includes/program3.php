<!-- ***************************************************************************************
    Page Name  : program3.php
    Author     : Anthony Rufin
    Course     : CGS 4854 WEB-Online Semester Summer 2023
    URL        : ocelot.aul.fiu.edu/~arufi004
    Professor  : Michael Robinson
    Program #  : Assignment 3
    Purpose    : This handles the main page of program 3 and creates the user form that allows the user to write and save inputs. These inputs are then processed by controller3.php

    Due Date   : 06/27/2023
    Certification:
    I hereby certify that this work is my own and none of it is the work of any other person.

    ..........{ Anthony Rufin }..........

  **************************************************************************************** -->
<!DOCTYPE html>

<html>
  <head>
    <title>Rufin Anthony - Program 3</title>
  </head>
  <body link="blue" vlink="blue" alink="red">
    <?php include( 'Rufin_header.php' ); ?>
    <tr><td> &nbsp; </td></tr>
    <?php include ( 'mainMenu.php' ); ?>
    <?php
      if (strlen(trim($found)) > 0)
      {
        //echo "<br>Leave it alone it means that find.php was already executed Found = [" . $found ."]";
        //leave it alone it means that find.php was already executed
      }
      else
      {
        $found = "";
      }
    ?>

    <tr><td> &nbsp; </td></tr>
    <!-- Start of the Form section, which handles the form inputs. -->
    <form method="post" action="Controller3.php">
      <!-- Start of text input fields -->
      <table style="width: 80%; margin: 0px auto; padding-right: 20%;">
        <tr>
          <td style="width: 10%; text-align: right;">FIU Panther ID &nbsp;</td>
          <td style="width: 20%;">
            <input type="text" name="FIUPantherID" value="<?php echo $FIUPantherID ?>" style="width: 100%">
          </td>
        </tr>

        <tr>
          <td style="width: 5%; text-align: right;">Email &nbsp;</td>
          <td style="width: 20%">
            <input type="text" name="Email" value="<?php echo $Email ?>" style="width: 100%;">
        </tr>

        <tr>
          <td style="width: 5%; text-align: right;">Last Name &nbsp;</td>
          <td style="width: 20%">
            <input type="text" name="LastName" value="<?php echo $LastName ?>" style="width: 100%;">
        </tr>

        <tr>
          <td style="width: 5%; text-align: right;">First Name &nbsp;</td>
          <td style="width: 20%">
            <input type="text" name="FirstName" value="<?php echo $FirstName ?>" style="width: 100%;">
        </tr>

        <tr>
          <td style="width: 5%; text-align: right;">Favorite Star &nbsp;</td>
          <td style="width: 20%">
            <input type="text" name="FavoriteStar" value="<?php echo $FavoriteStar ?>" style="width: 100%;">
        </tr>

        <tr>
          <td style="width: 5%; text-align: right;">Favorite Color &nbsp;</td>
          <td style="width: 20%">
            <input type="text" name="FavoriteColor" value="<?php echo $FavoriteColor ?>" style="width: 100%;">
        </tr>

        <tr>
          <td style="width: 5%; text-align: right;">Favorite Planet &nbsp;</td>
          <td style="width: 20%">
            <input type="text" name="FavoritePlanet" value="<?php echo $FavoritePlanet ?>" style="width: 100%;">
        </tr>

        <tr>
          <td style="width: 5%; text-align: right;">Country &nbsp;</td>
          <td style="width: 20%">
            <input type="text" name="Country" value="<?php echo $Country ?>" style="width: 100%;">
        </tr>

        <tr>
          <td style="width: 5%; text-align: right;">Major &nbsp;</td>
          <td style="width: 20%">
            <input type="text" name="Major" value="<?php echo $Major ?>" style="width: 100%;">
        </tr>
        <!-- Text Area -->
        <tr><td> &nbsp;&nbsp;</td></td>
        <tr>
          <td style="width: 5%; text-align: right;">Comments &nbsp;</td>
          <td style="width: 10%">
            <textarea name="Comments" rows="4" cols="20">
              <?php echo $Comments;?>
            </textarea><br><br>
          </td>
        </tr>

        <tr><td> &nbsp;&nbsp;</td></tr>
        <!-- dropdown boxes -->
        <tr>
          <td style="width: 5%; text-align: right;">Favorite natural Satellite &nbsp</td>
          <td style="width: 20%; text-align: left;">
            <select name="FavoriteNaturalSatellite" style="width: 100%" size="1";>
              <option value="Ganymede"<?php if ($FavoriteNaturalSatellite == "Ganymede") echo selected ?>>Ganymede</option>
              <option value="Titan"<?php if ($FavoriteNaturalSatellite == "Titan") echo selected ?>>Titan</option>
              <option value="Callisto"<?php if ($FavoriteNaturalSatellite == "Callisto") echo selected ?>>Callisto</option>
              <option value="Io"<?php if ($FavoriteNaturalSatellite == "Io") echo selected ?>>Io</option>
              <option value="Our Moon" <?php if ($FavoriteNaturalSatellite == "Our_Moon") echo selected ?>>Our Moon</option>
              <option value="Europa"<?php if ($FavoriteNaturalSatellite == "Europa") echo selected ?>>Europa</option>
            </select>
        </tr>

        <tr><td>&nbsp;&nbsp;</td></tr>

        <!-- radio buttons -->

        <tr>
          <td style="width: 5%; text-align: right;">Favorite Inner Planet</td>
          <td style="width: 10%; text-align: left;">
            <table>
              <tr>
                <td style="width: 10%; text-align: left;"><input type="radio"<?php if ($FavoriteInnerPlanet == "Mercury") echo "checked"; ?> name="FavoriteInnerPlanet" value="Mercury">Mercury</td>
                <td style="width: 10%; text-align: left;"><input type="radio"<?php if ($FavoriteInnerPlanet == "Venus") echo "checked"; ?> name="FavoriteInnerPlanet" value="Venus">Venus</td>
                <td style="width: 10%; text-align: left;"><input type="radio"<?php if ($FavoriteInnerPlanet == "Earth") echo "checked"; ?> name="FavoriteInnerPlanet" value="Earth">Earth</td>
                <td style="width: 10%; text-align: left;"><input type="radio"<?php if ($FavoriteInnerPlanet == "Mars") echo "checked"; ?> name="FavoriteInnerPlanet" value="Mars">Mars</td>
              </tr>
            </table>
          </td>
        </tr>

        <!-- checkboxes -->
        <tr>
          <td style="width: 5%; text-align: right;">Favorite Gas Giant</td>
          <td style="width: 10%; text-align: left;">
            <table>
              <tr>
                <td style="width: 10%; text-align: left;"><input type="checkbox" name="Jupiter"<?php if($Jupiter == "Jupiter") echo checked;?> value="Jupiter">Jupiter</td>
                <td style="width: 10%; text-align: left;"><input type="checkbox" name="Saturn"<?php if($Saturn == "Saturn") echo checked;?> value="Saturn">Saturn</td>
                <td style="width: 10%; text-align: left;"><input type="checkbox" name="Uranus"<?php if($Uranus == "Uranus") echo checked;?> value="Uranus">Uranus</td>
                <td style="width: 10%; text-align: left;"><input type="checkbox" name="Neptune"<?php if($Neptune == "Neptune") echo checked;?> value="Neptune">Neptune</td>
              </tr>
            </table>
          </td>
        </tr>
      </table>

      <tr><td>&nbsp;&nbsp;</td></tr>

      <table style="width:50%; margin:0px auto; padding-right:10%;">
        <tr>
          <td style="width: 15%"></td>
          <td style="width: 20%;" align=center><?php echo $message ?></td>
        </tr>

        <tr><td> &nbsp;&nbsp; </td></tr>

        <tr>
          <td style="width: 5%;"></td>
          <td style="width: 50%;" align=center>
            <input type="submit" name="Save" value="Save">&nbsp;&nbsp;&nbsp;
            <input type="submit" name="Find" value="Find">&nbsp;&nbsp;&nbsp;
            <input type="submit" name="Modify" value="Modify">&nbsp;&nbsp;&nbsp;
            <input type="submit" name="Delete" value="Delete">&nbsp;&nbsp;&nbsp;
            <input type="submit" name="Clear" value="Clear">&nbsp;&nbsp;&nbsp;
            <input type="submit" name="Contact_Me" value="Contact_Me">
            <input type="hidden" name="found" value="<?php echo $found ?>">
          </td>
        </tr>
      </table>
    </form>
    <tr><td>&nbsp;&nbsp;</td></tr>
    <?php include( 'mainMenu.php' ); ?>
    <tr><td>&nbsp;&nbsp;</td></tr>
    <center><font face="Arial" color="4b0082" size=8>Anthony Rufin</font></center>
  </body>
</html>

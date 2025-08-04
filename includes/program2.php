<!-- ***************************************************************************************
    Page Name  : program2.php
    Author     : Anthony Rufin
    Course     : CGS 4854 WEB-Online Semester Summer 2023
    URL        : ocelot.aul.fiu.edu/~arufi004
    Professor  : Michael Robinson
    Program #  : Assignment 2
    Purpose    : This handles the main page of program 2 and creates the user form that allows the user to write and save inputs. These inputs are then processed by controller2.php 

    Due Date   : 06/08/2023
    Certification:
    I hereby certify that this work is my own and none of it is the work of any other person.

    ..........{ Anthony Rufin }..........

  **************************************************************************************** -->
<!DOCTYPE html>

<html>
  <head>
    <title>Rufin Anthony - Program 2</title>
  </head>
  <body link="blue" vlink="blue" alink="red">
    <?php include( 'Rufin_header.php' ); ?>
    <tr><td> &nbsp; </td></tr>

    <?php include( 'mainMenu.php' ); ?>
    <tr><td> &nbsp; </td></tr>
    <!-- Start of the Form section, which handles the form inputs. -->
    <form method="post" action="controller2.php">
      <!-- Start of text input fields -->
      <table style="width: 60%; margin: 0px auto; padding-right: 10%;">
        <tr>
          <td style="width: 5%; text-align: right;">FIU Panther ID &nbsp;</td>
          <td style="width: 20%;">
            <input type="text" name="FIUPantherID" value="" style="width: 100%">
          </td>
        </tr>

        <tr>
          <td style="width: 5%; text-align: right;">Email &nbsp;</td>
          <td style="width: 20%">
            <input type="text" name="Email" value="" style="width: 100%;">
        </tr>

        <tr>
          <td style="width: 5%; text-align: right;">Last Name &nbsp;</td>
          <td style="width: 20%">
            <input type="text" name="LastName" value="" style="width: 100%;">
        </tr>

        <tr>
          <td style="width: 5%; text-align: right;">First Name &nbsp;</td>
          <td style="width: 20%">
            <input type="text" name="FirstName" value="" style="width: 100%;">
        </tr>

        <tr>
          <td style="width: 5%; text-align: right;">Favorite Star &nbsp;</td>
          <td style="width: 20%">
            <input type="text" name="FavoriteStar" value="" style="width: 100%;">
        </tr>

        <tr>
          <td style="width: 5%; text-align: right;">Favorite Color &nbsp;</td>
          <td style="width: 20%">
            <input type="text" name="FavoriteColor" value="" style="width: 100%;">
        </tr>

        <tr>
          <td style="width: 5%; text-align: right;">Favorite Planet &nbsp;</td>
          <td style="width: 20%">
            <input type="text" name="FavoritePlanet" value="" style="width: 100%;">
        </tr>

        <tr>
          <td style="width: 5%; text-align: right;">Country &nbsp;</td>
          <td style="width: 20%">
            <input type="text" name="Country" value="" style="width: 100%;">
        </tr>

        <tr>
          <td style="width: 5%; text-align: right;">Major &nbsp;</td>
          <td style="width: 20%">
            <input type="text" name="Major" value="" style="width: 100%;">
        </tr>
        <!-- Text Area -->
        <tr><td> &nbsp;&nbsp;</td></td>
        <tr>
          <td style="width: 5%; text-align: right;">Comments &nbsp;</td>
          <td style="width: 10%">
            <textarea name="Comments" rows="4" cols="20"></textarea>
          </td>
        </tr>

        <tr><td> &nbsp;&nbsp;</td></tr>
        <!-- dropdown boxes -->
        <tr>
          <td style="width: 5%; text-align: right;">Favorite natural Satellite &nbsp</td>
          <td style="width: 20%; text-align: left;">
            <select name="FavoriteNaturalSatellite" style="width: 100%" size="1";>
              <option value="Ganymede">Ganymede</option>
              <option value="Titan">Titan</option>
              <option value="Callisto">Callisto</option>
              <option value="Io">Io</option>
              <option value="Our Moon" >Our Moon</option>
              <option value="Europa">Europa</option>
            </select>
        </tr>

        <tr><td>&nbsp;&nbsp;</td></tr>

        <!-- radio buttons -->
        <tr>
          <td style="width: 5%; text-align: right;">Favorite Inner Planet</td>
          <td style="width: 20%; text-align: left;">
            <table>
              <tr>
                <td style="width: 5%; text-align: left;"><input type="radio" name="FavoriteInnerPlanet" value="Mercury">Mercury</td>
                <td style="width: 5%; text-align: left;"><input type="radio" name="FavoriteInnerPlanet" value="Venus">Venus</td>
                <td style="width: 5%; text-align: left;"><input type="radio" name="FavoriteInnerPlanet" value="Earth">Earth</td>
                <td style="width: 5%; text-align: left;"><input type="radio" name="FavoriteInnerPlanet" value="Mars">Mars</td>
              </tr>
            </table>
          </td>
        </tr>

        <!-- checkboxes -->
        <tr>
          <td style="width: 5%; text-align: right;">Favorite Gas Giant</td>
          <td style="width: 20%; text-align: left;">
            <table>
              <tr>
                <td style="width: 5%; text-align: left;"><input type="checkbox" name="Jupiter" value="Jupiter">Jupiter</td>
                <td style="width: 5%; text-align: left;"><input type="checkbox" name="Saturn" value="Saturn">Saturn</td>
                <td style="width: 5%; text-align: left;"><input type="checkbox" name="Uranus" value="Uranus">Uranus</td>
                <td style="width: 5%; text-align: left;"><input type="checkbox" name="Neptune" value="Neptune">Neptune</td>
              </tr>
            </table>
          </td>
        </tr>
      </table>

      <tr><td>&nbsp;&nbsp;</td></tr>

      <table style="width:50%; margin:0px auto; padding-right:10%;">
        <tr>
          <td style="width: 15%"></td>
          <td style="width: 20%;" align=center>$message</td>
        </tr>

        <tr><td> &nbsp;&nbsp; </td></tr>

        <tr>
          <td style="width: 5%;"></td>
          <td style="width: 50%;" align=center>
            <input type="submit" name="Save" value="Save">&nbsp;&nbsp;
            <input type="submit" name="Find" value="Find">&nbsp;&nbsp;
            <input type="submit" name="Modify" value="Modify">&nbsp;&nbsp;
            <input type="submit" name="Delete" value="Delete">&nbsp;&nbsp;
            <input type="reset" name="ClearScreen" value="ClearScreen">
          </td>
        </tr>
      </table>
    </form>
    <tr><td>&nbsp;&nbsp;</td></tr>
    <?php include( 'mainMenu.php' ); ?>

  </body>
</html>

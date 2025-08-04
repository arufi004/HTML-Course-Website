<!-- ***************************************************************************************
    Page Name  : program4.php
    Author     : Anthony Rufin
    Course     : CGS 4854 WEB-Online Semester Summer 2023
    URL        : ocelot.aul.fiu.edu/~arufi004
    Professor  : Michael Robinson
    Program #  : Assignment 4
    Purpose    : This handles the main page of program 4 and creates the user form that allows the user to write and save inputs. These inputs are then processed by controller4.php

    Due Date   : 07/18/2023
    Certification:
    I hereby certify that this work is my own and none of it is the work of any other person.

    ..........{ Anthony Rufin }..........

  **************************************************************************************** -->
<!DOCTYPE html>

<html>
  <head>
    <title>Rufin Anthony - Program 4</title>
  </head>
 <!-- <body link="blue" vlink="blue" alink="red"> -->
    <?php include( 'Rufin_header.php' ); ?>

  <head>
    <!--JavaScript CurrentTime Function-->
    <script>

      function currentTime()
      {
         var today   = new Date();
         var hour    = today.getHours();
         var minutes = today.getMinutes();
         var sec     = today.getSeconds();

         minutes = checkTime(minutes);
         sec     = checkTime(sec);

         document.getElementById('txt').innerHTML = "Current Time : "+hour+":"+minutes+":"+sec;

         var t = setTimeout(function(){currentTime()},500);

      }


      function checkTime(i)
      {
         if (i<10) {i = "0" + i};
         return i;
      }

    </script>
    <!-- Localized Help Tooltips -->
    <style>
      .tooltip
      {
        position: relative;
        display: inline-block;
      }
      .tooltip .tooltiptext1
      {
        visibility: hidden;
        width: 120px;
        background-color: green;
        color: #fff;
        text-align: center;
        border-radius: 10px;
        padding: 10px 0;
        z-index: 10;
        bottom: 100%;
        position: absolute;
        margin-left: -80px;
        opacity: 0;
        transition: opacity 1s;
      }
      .tooltip .tooltiptext1::after
      {
        content: "";
        position: absolute;
        top: 100%;
        left: 50%;
        margin-left:  0px;
        border-width: 5px;
        border-style: solid;
        border-color: green transparent transparent transparent;
      }


      .tooltip:hover .tooltiptext1
      {
        visibility: visible;
        opacity: 1;
      }

    </style>
  </head>

  <body onload="currentTime()">
    <table width="100%">
      <tr>
        <td width="50%" align="left">
          <script>
            loggedInTime();
            var temp1;
            function loggedInTime( temp )
            {
              var tiempo = new Date();
              var temp2 ="Logged in at&nbsp;&nbsp;: " + tiempo;
              temp1 = temp2;
              document.write( temp2 );
            }
          </script>
        </td>

        <td width="50%" align="right">
          <script>
            currentTime();
          </script>
        <div id="txt"></div>
        </td>
      </tr>
    </table>

  </body>

    <tr><td> &nbsp; </td></tr>
    <center><H1><font face = "Arial" color="red">Program 4</font><H1></center>
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
    <form method="post" action="Controller4.php">
      <!-- Start of text input fields -->
      <table style="width: 80%; margin: 0px auto; padding-right: 20%;">
        <tr>
          <td style="width: 10%; text-align: right;">
            <div class= "tooltip">FIU Panther ID &nbsp;
              <span class="tooltiptext1">Enter your PantherID here. REQUIRED</span>
            </div>
          </td>
          <td style="width: 20%;">
            <input type="text" name="FIUPantherID" placeholder="FIUPantherID" value="<?php echo $FIUPantherID ?>" style="width: 100%">
          </td>
        </tr>

        <tr>
          <td style="width: 5%; text-align: right;">
            <div class= "tooltip">Email &nbsp;
              <span class="tooltiptext1">Enter your email here.</span>
            </div>
          </td>
          <td style="width: 20%">
            <input type="text" name="Email" placeholder="Email" value="<?php echo $Email ?>" style="width: 100%;">
        </tr>

        <tr>
          <td style="width: 5%; text-align: right;">
            <div class="tooltip">Last Name &nbsp;
              <span class="tooltiptext1">Enter your last name here.</span>
            </div>
          </td>
          <td style="width: 20%">
            <input type="text" name="LastName" placeholder="LastName" value="<?php echo $LastName ?>" style="width: 100%;">
        </tr>

        <tr>
          <td style="width: 5%; text-align: right;">
            <div class="tooltip">First Name &nbsp;
              <span class="tooltiptext1">Enter your first name here.</span>
            </div>
          </td>
          <td style="width: 20%">
            <input type="text" name="FirstName" placeholder="FirstName" value="<?php echo $FirstName ?>" style="width: 100%;">
        </tr>

        <tr>
          <td style="width: 5%; text-align: right;">
            <div class="tooltip">Favorite Star &nbsp;
              <span class="tooltiptext1">Enter the name of your favorite star here.</span>
            </div>
          </td>
          <td style="width: 20%">
            <input type="text" name="FavoriteStar" placeholder="FavoriteStar" value="<?php echo $FavoriteStar ?>" style="width: 100%;">
        </tr>

        <tr>
          <td style="width: 5%; text-align: right;">
            <div class ="tooltip">Favorite Color &nbsp;
              <span class="tooltiptext1">Enter your favorite color here.</span>
            </div>
          </td>
          <td style="width: 20%">
            <input type="text" name="FavoriteColor" placeholder="FavoriteColor" value="<?php echo $FavoriteColor ?>" style="width: 100%;">
        </tr>

        <tr>
          <td style="width: 5%; text-align: right;">
            <div class ="tooltip">Favorite Planet &nbsp;
              <span class="tooltiptext1">Enter the name of your favorite planet here.</span>
            </div>
          </td>
          <td style="width: 20%">
            <input type="text" name="FavoritePlanet" placeholder="FavoritePlanet" value="<?php echo $FavoritePlanet ?>" style="width: 100%;">
        </tr>

        <tr>
          <td style="width: 5%; text-align: right;">
            <div class ="tooltip">Country &nbsp;
              <span class="tooltiptext1">Enter your home country here.</span>
            </div>
          </td>
          <td style="width: 20%">
            <input type="text" name="Country" placeholder="Country" value="<?php echo $Country ?>" style="width: 100%;">
        </tr>

        <tr>
          <td style="width: 5%; text-align: right;">
            <div class ="tooltip">Major &nbsp;
              <span class="tooltiptext1">Enter your Current Major here.</span>
            </div>
          </td>
          <td style="width: 20%">
            <input type="text" name="Major" placeholder="Major" value="<?php echo $Major ?>" style="width: 100%;">
        </tr>
        <!-- Text Area -->
        <tr><td> &nbsp;&nbsp;</td></td>
        <tr>
          <td style="width: 5%; text-align: right;">
            <div class ="tooltip">Comments &nbsp;
              <span class="tooltiptext1">Enter any additional comments here.</span>
            </div>
          </td>
          <td style="width: 10%">
            <textarea name="Comments" placeholder="Comments" rows="4" cols="20"><?php echo $Comments;?></textarea><br><br>
          </td>
        </tr>

        <tr><td> &nbsp;&nbsp;</td></tr>
        <!-- dropdown boxes -->
        <tr>
          <td style="width: 5%; text-align: right;">
            <div class ="tooltip">Favorite Natural Satellite &nbsp;
              <span class="tooltiptext1">Select one Natural Satellite (Astronomical body that orbits another, such as the Moon).</span>
            </div>
          </td>
          <td style="width: 20%; text-align: left;">
            <select name="FavoriteNaturalSatellite" style="width: 100%" size="1";>
              <option value="Select One" disabled selected>Select One</option>
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
          <td style="width: 5%; text-align: right;">
            <div class ="tooltip">Favorite Inner Planet &nbsp;
              <span class="tooltiptext1">Select your favorite of the Four inner planets (Mercury, Venus, Earth, Mars).</span>
            </div>
          </td>
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
          <td style="width: 5%; text-align: right;">
            <div class ="tooltip">Favorite Gas Giant &nbsp;
              <span class="tooltiptext1">Select any of the Gas Giants from our solar system.</span>
            </div>
          </td>
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

      <table style="width:60%; margin:0px auto; padding-right:10%;">
        <tr>
          <td style="width: 15%"></td>
          <td style="width: 20%;" align=center><?php echo $message ?></td>
        </tr>

        <tr><td> &nbsp;&nbsp; </td></tr>

        <tr>
          <td style="width: 5%;"></td>
          <td style="width: 100%;" align=center>
            <input type="submit" name="Save" value="Save">&nbsp;&nbsp;&nbsp;
            <input type="submit" name="Find" value="Find">&nbsp;&nbsp;&nbsp;
            <input type="submit" name="Modify" value="Modify">&nbsp;&nbsp;&nbsp;
            <input type="submit" name="Delete" value="Delete">&nbsp;&nbsp;&nbsp;
            <input type="submit" name="Clear" value="Clear">&nbsp;&nbsp;&nbsp;
            <input type="submit" name="Contact_Me" value="Contact_Me">&nbsp;&nbsp;&nbsp;
            <input type="submit" name="Help" value="Help">&nbsp;&nbsp;&nbsp;
            <input type="submit" name="About" value="About">
            <input type="hidden" name="found" value="<?php echo $found ?>">
          </td>
        </tr>
      </table>
    </form>
    <tr><td>&nbsp;&nbsp;</td></tr>
    <?php include( 'mainMenu.php' ); ?>
    <tr><td>&nbsp;&nbsp;</td></tr>
    <center><font face="Arial" color="4b0082" size=8>Anthony Rufin</font></center>
  <!--</body> -->
</html>




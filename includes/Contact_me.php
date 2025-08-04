<!-- ***************************************************************************************
    Page Name  : Contact_me.php
    Author     : Anthony Rufin
    Course     : CGS 4854 WEB-Online Semester Summer 2023
    URL        : ocelot.aul.fiu.edu/~arufi004
    Professor  : Michael Robinson
    Program #  : Assignment 3
    Purpose    : This creates the form that allows the user to automattically send an email to request help in regards to the website.

    Due Date   : 06/27/2023
    Certification:
    I hereby certify that this work is my own and none of it is the work of any other person.

    ..........{ Anthony Rufin }..........

  **************************************************************************************** -->
<!DOCTYPE html>

<html>

  <head>
    <title>Contact Me</title>
  </head>

  <body link="blue" vlink="blue" alink="red">
    <?php include('Rufin_header.php');?>
    <tr><td>&nbsp;</td></tr>
    <center><b><font face="Times New Roman" color="red" size="8">CONTACT ME</font></b></center>
    <tr><td>&nbsp;</td></tr>
    <?php include('mainMenu.php')?>
  </body>

</html>

  <tr><td>&nbsp;&nbsp;</td></tr>
  <div>
    <form method="POST" action="Contact_me_Controller.php">
      <table style="width: 50%; margin: 0px auto; padding-right: 10%;">
        <tr>
          <td style="width: 5%; text-align: left;">Email &nbsp;</td>
          <td style="width: 20%">
            <input type="text" name="Email" value="<?php echo $Email ?>" style="width: 100%">
          </td>
        </tr>

        <tr>
          <td style="width: 5%; text-align: left;">First Name &nbsp;</td>
          <td style="width: 20%">
            <input type="text" name="FirstName" value="<?php echo $FirstName ?>" style="width: 100%">
          </td>
        </tr>

        <tr>
          <td style="width: 5%; text-align: left;">Last Name &nbsp;</td>
          <td style="width: 20%">
            <input type="text" name="LastName" value="<?php echo $LastName ?>" style="width: 100%">
          </td>
        </tr>

        <tr>
          <td style="width: 5%; text-align: left;">Are you an FIU Student?</td>
          <td style="width: 20%; text-align: left;">
            <table>
              <tr>
                <td style="width: 1%; text-align: left;"><input type="radio"<?php if ($Student == "Yes") echo "checked"; ?> name="Student" value="Yes">Yes</td>
                <td style="width: 1%; text-align: left;"><input type="radio"<?php if ($Student == "No") echo "checked"; ?> name="Student" value="No">No</td>
                <td style="width: 1%; text-align: left;"><input type="radio"<?php if ($Student == "NA") echo "checked"; ?> name="Student" value="NA">NA</td>
              </tr>
            </table>
          </td>
        </tr>

        <!-- checkboxes -->
        <tr>
          <td style="width: 5%; text-align: left;">Email Type</td>
          <td style="width: 20%; text-align: left;">
            <table>
              <tr>
                <td style="width: 1%; text-align: left;"><input type="checkbox" name="Gmail" <?php if($Gmail == "Gmail") echo checked;?>value="Gmail">Gmail</td>
                <!--<td style="width: 1%; text-align: left;"><input type="checkbox" name="Yahoo" <?php if($Yahoo == "Yahoo") echo checked;?> value="Yahoo">Yahoo</td>-->
                <td style="width: 1%; text-align: left;"><input type="checkbox" name="Outlook" <?php if($Outlook == "Outlook") echo checked;?>value="Outlook">Outlook</td>
                <td style="width: 1%; text-align: left;"><input type="checkbox" name="OtherType" <?php if($OtherType == "OtherType") echo checked;?> value="OtherType">Other Type</td>
              </tr>
            </table>
          </td>
        </tr>

        <tr>
          <td style="width: 5%; text-align: left;">Reason for Contacting Me &nbsp</td>
          <td style="width: 20%; text-align: left;">
            <select name="ReasonForContact" style="width: 100%" size="1";>
              <option value="FrontEndError"<?php if ($ReasonForContact = "FrontEndError") echo selected ?>>Front-End Error</option>
              <option value="DatabaseError"<?php if ($ReasonForContact == "DatabaseError") echo selected ?>>Database Error</option>
              <option value="FormError"<?php if ($ReasonForContact == "FormError") echo selected ?>>Form Error</option>
              <option value="AssistanceNeeded"<?php if ($ReasonForContact == "AssistanceNeeded") echo selected ?>>Assistance Needed to Fill out form</option>
              <option value="Other" <?php if ($ReasonForContact == "Other") echo selected ?>>Other</option>
            </select>
        </tr>

        <!-- Text Area -->
        <tr>
          <td style="width: 5%; text-align: left;">Other Comments &nbsp;</td>
          <td style="width: 10%">
            <textarea name="OtherComments" rows="4" cols="20">
              <?php echo $OtherComments;?>
            </textarea><br><br>
          </td>
        </tr>

        <tr>
          <td style="width: 5%;"></td>
          <td style="width: 30%;" align=center>
            <input type="submit" name="Submit" value="Submit">&nbsp;&nbsp;
            <input type="reset" name="Clear" value="Clear">
          </td>
        </tr>

      </table>
    </form>
  </div>
<tr><td>&nbsp;</td></tr>
  <?php include('mainMenu.php')?>

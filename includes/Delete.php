<!-- ***************************************************************************************
    Page Name  : Delete.php
    Author     : Anthony Rufin
    Course     : CGS 4854 WEB-Online Semester Summer 2023
    URL        : ocelot.aul.fiu.edu/~arufi004
    Professor  : Michael Robinson
    Program #  : Assignment 3
    Purpose    : This deletes all information for a specified field's data. 

    Due Date   : 06/27/2023
    Certification:
    I hereby certify that this work is my own and none of it is the work of any other person.

    ..........{ Anthony Rufin }..........

  **************************************************************************************** -->

<!DOCTYPE html>

<html>

  <body>
    <!--h3>this is Delete.php</h3-->

    <?php
      $record = "RECORD ". $FIUPantherID. "DELETED";

      $found = $_POST['found'];

      $sql="DELETE FROM customers WHERE FIUPantherID='$FIUPantherID'";

      $FIUPantherID=trim($FIUPantherID);

      if((strlen(trim($found)) > 0) && ($found == $FIUPantherID))
      {
        if(mysqli_query($connection, $sql))
        {
          $message = "<span style=\"color: red;\">RECORD $found DELETED </span><br\>";
          $found = "";
        }
        else
        {
          $message = "Error deleting record: " . mysqli_error($connection);
        }
      }
      else
      {
        $message ="<span style=\"color: red;\">RECORD NOT DELETED<BR>FIUPANTHERID CAN NOT BE EMPTY</span><br\>";
      }
    ?>
  </body>

</html>






 <!-- ***************************************************************************************
    Page Name  : Contact_me_Controller.php
    Author     : Anthony Rufin
    Course     : CGS 4854 WEB-Online Semester Summer 2023
    URL        : ocelot.aul.fiu.edu/~arufi004
    Professor  : Michael Robinson
    Program #  : Assignment 3
    Purpose    : This is the controller for the contact me page It handles the inputs and formats it into an email.

    Due Date   : 06/27/2023
    Certification:
    I hereby certify that this work is my own and none of it is the work of any other person.

    ..........{ Anthony Rufin }..........

  **************************************************************************************** -->
<?php

  if(isset($_POST['Submit']))
  {
    $to = "michael.robinson@cs.fiu.edu";
    $subject = "From Teaching Website - Anthony Rufin";
    $Email = $_POST['Email'];
    $FirstName = $_POST['FirstName'];
    $LastName = $_POST['LastName'];
    $Student = $_POST['Student'];
    $Gmail = $_POST['Gmail'];
    //$Yahoo = $_POST['Yahoo'];
    $Outlook = $_POST['Outlook'];
    $OtherType = $_POST['OtherType'];
    $ReasonForContact = $_POST['ReasonForContact'];
    $OtherComments = $_POST['OtherComments'];

    $body ="From:                   $FirstName $LastName\nE-Mail:                 $Email\nAre You an FIU Student? $Student\nEmail Type:             $Gmail $Outlook $OtherType \nReason For Contact:     $ReasonForContact\nOther Comments:         $OtherComments\n ";
    mail($to, $subject, $body);
   // echo $Student "<br>";
  }
include('ContactMeSend.php');

?>



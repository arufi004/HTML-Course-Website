<!-- ***************************************************************************************
    Page Name  : About.php
    Author     : Anthony Rufin
    Course     : CGS 4854 WEB-Online Semester Summer 2023
    URL        : ocelot.aul.fiu.edu/~arufi004
    Professor  : Michael Robinson
    Program #  : Assignment 4
    Purpose    : This page details the purpose of this page and gives a basic explanation of what each program does. 

    Due Date   : 07/18/2023
    Certification:
    I hereby certify that this work is my own and none of it is the work of any other person.

    ..........{ Anthony Rufin }..........

  **************************************************************************************** -->
<!DOCTYPE html>
<html>
  <head>
    <title>About</title>

    <style type="text/css">
      .HeadingsType1
      {
        font-family:Times New Roman;
        font-size: 14pt;
        style="height:8px";
        color:black;
        background-color:white;
      }
      .HeadingsType2
      {
        font-family:Times New Roman;
        font-size: 12pt;
        style="height:6px";
        color:cyan;
        background-color:black;
      }
      .HeadingsType3
      {
        font-family:Times New Roman;
        font-size: 12pt;
        style="height:6px";
        color:magenta;
        background-color:black;
      }
      .HeadingsType4
      {
        font-family:Times New Roman;
        font-size: 12pt;
        style="height:6px";
        color:yellow;
        background-color:black;
      }
      .HeadingsType5
      {
        font-family:Times New Roman;
        font-size: 12pt;
        style="height:6px";
        color:white;
        background-color:black;
      }
    </style>
  </head>

  <body style="background-color:Aquamarine">

  <?php include('Rufin_header.php')?>
  <tr><td>&nbsp;&nbsp;</td></tr>
  <?php include('mainMenu.php')?>
  <div align="center">
  <font face="Times New Roman" size="10" color="red" align="center">ABOUT</font>
  </div>
  <p><center><b><font face="Times New Roman">Greetings! Welcome to http://ocelot.aul.fiu.edu/~arufi004</font></b></center></p>
  <p><center><b><font face="Times New Roman">This page is focused on explaining the purpose of this website, along with all the programs I made this semester (Summer 2023)</font></b></center></p>
  <table width="80%" border="4"; bordercolor="red"; align="center">

    <tr>
      <td>
        <div>
          <a class="HeadingsType1"><font size="4">Purpose</a></br>
          <ul style='list-style-type:circle'>
            <li>
              <div>This website was created to:</div>
            </li>
          <ol class="c">
            <li>
              <div>Promote Astronomy and related fields</div>
            </li>
            <li>
              <div>Create a means for one to sign up for an automatic newsletter for astronomy-related news</div>
            </li>
            <li>
              <div>To ask basic questions regarding the user's favorite among various astronomical bodies.</div>
            </li>
          </ul>
        </div>
      <td>
    <tr>

    <tr>
      <td>
        <div>
          <a class="HeadingsType5"><font size="4">Program 1</a></br>
          <ul style='list-style-type:circle'>
            <li>
              <div>The first program created this semester. The purpose of this program was to learn the basics of HTML, and to be able to implement basic HTML concepts into a website<br>This page contains: Images, text, links, and a multipage menu.</div>
            </li>
          </ul>
        </div>
      <td>
    <tr>

    <tr>
      <td>
        <div>
          <a class="HeadingsType2"><font size="4">Program 2</a></br>
          <ul style='list-style-type:circle'>
            <li>
              <div>The second program consists of a basic layout of a form. The reason for this webpage to be focused on astronomy concepts is that this website was created with the idea that it could be used for a possible astronomy club, such as using it to send a newsletter or notices to those that like astronomy.</div>
            </li>
          </ul>
        </div>
      <td>
    <tr>

    <tr>
      <td>
        <div>
          <a class="HeadingsType3"><font size="4">Program 3</a></br>
          <ul style='list-style-type:circle'>
            <li>
              <div>The third program focuses on giving the form from the second program full functionality. Now the user can input data that can be saved into an mySQL database. They are also able to search for their data, delete it or modify it as well.<br></div>
            </li>
            <li>
              <div>They are also able to send an email for website help, should there be any issues.<div>
            </li>
          </ul>
        </div>
      <td>
    <tr>

    <tr>
      <td>
        <div>
          <a class="HeadingsType4"><font size="4">Program 4</a></br>
          <ul style='list-style-type:circle'>
            <li>
              <div>The fourth program cleans up and adds to the third program. This program adds a help functionallity, explaining what each field requires and what each button does.</div>
            </li>
            <li>
              <div>This program also adds in a clock that shows when the user enters the website and the current time.</div>
            </li>
          </ul>
        </div>
      <td>
    <tr>

    
  </table>

  </body>
</html>





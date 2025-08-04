<!-- **************************************************************************************
    Page Name  : mainMenu.php
    Author     : Anthony Rufin
    Course     : CGS 4854 WEB-Online Semester Summer 2023
    URL        : ocelot.aul.fiu.edu/~arufi004
    Professor  : Michael Robinson
    Program #  : Assignment 2
    Purpose    : This is the template that stores the main menu banner used in program 2.

    Due Date   : 06/08/2023
    Certification:
    I hereby certify that this work is my own and none of it is the work of any other person.

    ..........{ Anthony Rufin }..........

  **************************************************************************************** -->
<!DOCTYPE html>

<html>
  <head>
    <title>CSS Dropdown Menu SecondWebPage.html Anthony Rufin</title>
    <style type="text/css">
      nav ul ul
      {
        display: none;
      }

      nav ul li:hover > ul
      {
        display: block;
      }

      nav ul
      {
        background: #efefef;
        background: linear-gradient(top, #efefef 0%, #bbbbbb 100%);
        background: -moz-linear-gradient(top, #efefef 0%, #bbbbbb 100%);
        background: -webkit-linear-gradient(top, #efefef 05, #bbbbbb 100%)
        box-shadow: 0px 0px 9px rgba(0,0,0,0.15);
        padding 0 20px;
        border-radius: 10px;
        list-style: none;
        position: relative;
        display: inline-table;
      }


      nav ul:after
      {
        content: ""; clear: both; display: block;
      }


      nav ul li
      {
        float: left;
      }

      nav ul li:hover
      {
        background: #4b545f;
        background: linear-gradient(top, #4f5964 0%, #5f6975 40%);
        background: -moz-linear-gradient(top, #4f5964 0%, #5f6975 40%);
        background: -webkit-linear-gradient(top, #4f5964 0%, #5f6975 40%);
      }


      nav ul li:hover a
      {
        color: #ffffff;
      }

      nav ul li a
      {
        display: block; padding: 25px 40px;
        color: ;
      }


      nav ul ul
      {
        background: darkslategray;
        position: absolute; top: 100%;
      }

      nav ul ul li
      {
        float: none;
        border-top: 1px solid white;
        border-bottom: 1px solid #575f6a;
        position: relative;
      }

      nav ul ul li a
      {
        padding: 10px 40px;
        color: #fff;
      }

      nav ul ul li a:hover
      {
        background: blue;
      }

      nav ul ul ul
      {
        position: absolute; left: 100%; top:0;
      }
    </style>
  </head>

  <body>
    <nav align="center">
      <ul>
        <li><a href="../index.html">Home&nbsp;&nbsp;&nbsp;</a>
        <li><a href="pgm1.html">Program 1&nbsp;&nbsp;</a>
          <ul>
            <li><a href= "Page1.html">Page 1</a></li>
            <li><a href= "Page2.html">Page 2</a></li>
            <li><a href= "Page3.html">Page 3</a></li>
            <li><a href= "Page4.html">Page 4</a></li>
            <li><a href= "../index.html">Home</a></li>
          </ul>
        <li><a href="program2.php">Program 2&nbsp;&nbsp;</a>
        <li><a href="program3.php">Program 3&nbsp;&nbsp;</a>
        <li><a href="program4.php">Program 4&nbsp;&nbsp;</a>
      </ul>
    </nav>
  </body>
</html>


<!-- ***************************************************************************************
    Page Name  : Help.php
    Author     : Anthony Rufin
    Course     : CGS 4854 WEB-Online Semester Summer 2023
    URL        : ocelot.aul.fiu.edu/~arufi004
    Professor  : Michael Robinson
    Program #  : Assignment 4
    Purpose    : This program creates a pop-up that gives the user information about the seven buttons at the bottom of the main page.

    Due Date   : 07/18/2023
    Certification:
    I hereby certify that this work is my own and none of it is the work of any other person.

    ..........{ Anthony Rufin }..........

  **************************************************************************************** -->
<!DOCTYPE html>

<html>
  <head>
    <title>Help</title>
  </head>

  <body>
    <script>
      var myWindow = window.open("", "* Help *", "width=500, height=600, scrollbars=yes, resizable=yes, left=870, top=50");
        myWindow.document.write("<div><H1 style='color:red'>Help</H1></div>");
        myWindow.document.write("<hr>");

        myWindow.document.write("<div><H2 style='color:red'>BUTTONS PURPOSE</H2></div>");

      myWindow.document.write("<div>");
      myWindow.document.write("<ul style='list-style-type:circle'>");

        myWindow.document.write("<li>\n<H3 style='color:blue'><b>SAVE:</b></H3>");
        myWindow.document.write("<div>When you finish inputting the data in the text fields on the front end, the data will be saved to the SQL database when you press this button.</div><br></li>");

        myWindow.document.write("<li>\n<H3 style='color:green'><b>FIND:</b></H3> ");
        myWindow.document.write("<div>Press this button after you input your FIU PANTHER ID into the first box. This will automatically fill the fields with your last saved input.</div><br></li>");

        myWindow.document.write("<li>\n<H3 style='color:gray'><b>MODIFY:</b></H3>");
        myWindow.document.write("<div>Press this button to modify previously saved data. You must press the find button to be able to modify the data.</div><br></li>");

        myWindow.document.write("<li>\n<H3 style='color:purple'><b>DELETE:</b></H3> ");
        myWindow.document.write("<div>Deletes your data from the database. You must press the find button before being able to delete your data.</div><br></li>");

        myWindow.document.write("<li>\n<H3 style='color:orange'><b>CLEAR:</b></H3> ");
        myWindow.document.write("<div> Clears the screen and sets every field on the screen to a blank box.</div><br></li>");

        myWindow.document.write("<li>\n<H3 style='color:indigo'><b>HELP:</b></H3>");
        myWindow.document.write("<div>This button opens this pop-up on the screen, showing you information on each of these buttons.</div><br></li>");

        myWindow.document.write("<li>\n<H3 style='color:brown'><b>ABOUT:</b></H3> ");
        myWindow.document.write("<div> This button describes the purpose of this webpage, along with information on each page.</div><br></li>");

      myWindow.document.write("</div>");
    </script>
  </body>
</html>





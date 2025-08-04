<!-- ***************************************************************************************
    Page Name  : Controller3.php
    Author     : Anthony Rufin
    Course     : CGS 4854 WEB-Online Semester Summer 2023
    URL        : ocelot.aul.fiu.edu/~arufi004
    Professor  : Michael Robinson
    Program #  : Assignment 3
    Purpose    : This takes the data extracted from program3.php and creates an sql table of the fields entered. 

    Due Date   : 06/27/2023
    Certification:
    I hereby certify that this work is my own and none of it is the work of any other person.

    ..........{ Anthony Rufin }..........

  **************************************************************************************** -->
<!DOCTYPE html>
<html>
  <head>
    <title>Controller3</title>
  </head>

  <body>
    <?php
      //connecting to mysql
      $connection = mysqli_connect("ocelot.aul.fiu.edu", "sum23_arufi004", "6227314", "sum23_arufi004");
      if(mysqli_connect_errno())
      {
        echo "Failed to connect to MySQL: " . mysqli_connect_error();
      }
      else
      {
        //echo "<br>I have connected to mySQL<br>";
        $dbName="sum23_arufi004";
        $db_selected = mysqli_select_db( $connection, $dbName);
        if(!$db_selected)
        {
          die( $dbName . 'does not exist, can\'t use it' . mysqli_error());
        }
        else
        {
          $tableName = "customers";
          $query = mysqli_query( $connection, "SELECT * FROM $tableName");

          if(!$query)
          {
            echo "The " .$tableName." does not exists<br>";
            echo "<br>Creating Table:" .$tableName."<br>";

            $sql = "CREATE TABLE ".$tableName."(
                    FIUPantherID VARCHAR(7) NOT NULL,
                    PRIMARY KEY(FIUPantherID),
                    Email VARCHAR(30),
                    LastName VARCHAR(30),
                    FirstName VARCHAR(30),
                    FavoriteStar VARCHAR(30),
                    FavoriteColor VARCHAR(30),
                    FavoritePlanet VARCHAR(30),
                    Country VARCHAR(30),
                    Major VARCHAR(50),
                    Comments VARCHAR(200),
                    FavoriteNaturalSatellite VARCHAR(20),
                    FavoriteInnerPlanet VARCHAR(20),
                    Jupiter VARCHAR(7),
                    Saturn VARCHAR(6),
                    Uranus VARCHAR(7),
                    Neptune VARCHAR(7)
                    )";
            $result = mysqli_query( $connection, $sql );

            if ($result)
            {
              echo "table ". $tableName." created<br>";
            }
            else
            {
              die ("Can\'t create ". $tableName." " . mysqli_error());
            }
          }
        }
      }
      //extract the data from the values the User inputed
      //text fields
      $FIUPantherID = $_POST['FIUPantherID'];
      $Email = $_POST['Email'];
      $LastName = $_POST['LastName'];
      $FirstName = $_POST['FirstName'];
      $FavoriteStar = $_POST['FavoriteStar'];
      $FavoriteColor = $_POST['FavoriteColor'];
      $FavoritePlanet = $_POST['FavoritePlanet'];
      $Country = $_POST['Country'];
      $Major = $_POST['Major'];
      $Comments = $_POST['Comments'];
      $FavoriteNaturalSatellite = $_POST['FavoriteNaturalSatellite']; //dropboxes
      $FavoriteInnerPlanet = $_POST['FavoriteInnerPlanet']; //radio buttons
      $Jupiter = $_POST['Jupiter']; //checkboxes
      $Saturn = $_POST['Saturn'];
      $Uranus = $_POST['Uranus'];
      $Neptune = $_POST['Neptune'];

      $found = $_POST['found'];
      //Remember to comment the next set of echo statements out

      //This handles the submit buttons.
      if( $_POST['Save'])
      {
        include('Save.php');
        include('program3.php');
      }
      else if( $_POST['Find'])
      {
        include('Find.php');
        include('program3.php');
      }
      else if( $_POST['Modify'])
      {
        include('Modify.php');
        include('program3.php');
      }
      else if( $_POST['Delete'])
      {
        include('Delete.php');
        include('program3.php');
      }
      else if($_POST['Clear'])
      {
        include('Clear.php');
        include('program3.php');
      }
      else if ($_POST['Contact_Me'])
      {
        include('Contact_me.php');
      }
      else
      {
        echo "<br><h1> You pressed UNKNOWN button</h1>";
        include('program3.php');
      }

      mysqli_close($connection);


    ?>
  </body>
</html>





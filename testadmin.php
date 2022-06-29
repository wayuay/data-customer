<?php
session_start();

$hostname_surachet = "localhost";
$database_surachet = "surache1_room2g4";
$username_surachet = "surache1_room2g4";
$password_surachet = "room2g4";
$surachet = mysql_pconnect($hostname_surachet, $username_surachet, $password_surachet) or trigger_error(mysql_error(),E_USER_ERROR);
mysql_select_db($database_surachet, $surachet);

$strSQL = "SELECT tbl_admin.* FROM tbl_admin
                            WHERE id = '".mysql_real_escape_string($_POST['Username'])."' and pass = '".mysql_real_escape_string($_POST['Password'])."' ";
$objQuery = mysql_query($strSQL);
$objResult = mysql_fetch_array($objQuery);
if(!$objResult)
{
    echo "";
}
else
{

  $_SESSION['id'] = $objResult['id'];
  $_SESSION['pass'] = $objResult['pass'];

  session_write_close();

      header("location:admin.php");
    }

 ?>
 <!DOCTYPE html>
<html lang="en" dir="ltr">
    <head><body style="background-color:#FFFFFF;">

    <meta charset="utf-8">
    <title>Login admin</title>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css%22%3E">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0" />
    <link href="https://fonts.googleapis.com/css2?family=Prompt:wght@100&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

  </head>
  <body><center>

  <form action="" class="" method="POST"  name="">
  <br></br>
  <br></br>
  <br></br>
  <img src="dhipaya.jpg" al= width="250" height="250">
  <br></br>
  <br></br>
  <fieldset><legend><font color="#FF3300"><b>login admin</b></font></legend>
    <table width="60%" border="0" cellpadding="5" cellspacing="0">



        <p><span class="material-symbols-outlined">account_circle</span>
        <input type="text" name="Username" size="50" maxlength="50" placeholder="User"></p>


       <p><span class="material-symbols-outlined">key</span>
       <input type="Password" name="Password" size="50" maxlength="50" placeholder="Password"></p>



      <tr>
        <td colspan = "2" align="center">
            <input type="hidden" name="InsertNewStudent" value="Yes">
            <input type="submit" name="submit" value ="Sigin">
            <br></br>
        <a class="btn btn-primary"  style="background-color:#FFFFFF; border-color:white; color:Red" href="loginmem.php">For get password?</a>
            <br></br>

      </tr>
    </table>
  </fieldset></form>
  </center>
  </body>
</html>

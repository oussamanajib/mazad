<html>
     <head>
    <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
    <center><title>Password Change</title>
     </head>
    <body>
	
    <h1>Change Password</h1>
   <form method="POST" action="password_change.php">
    <table width="600" height="700" border="10" cellspacing="1" cellpadding="2" bgcolor="red">
    <tr>
   <td>Enter your UserName</td>
    <td><input type="username" size="10" name="username"></td>
    </tr>
    <tr>
    <td>Enter your existing password:</td>
    <td><input type="password" size="10" name="password"></td>
    </tr>
  <tr>
    <td>Enter your new password:</td>
    <td><input type="password" size="10" name="newpassword"></td>
    </tr>
    <tr>
   <td>Re-enter your new password:</td>
   <td><input type="password" size="10" name="confirmnewpassword"></td>
    </tr>
    </table>
    <p><input type="submit" value="Update Password">
    </form>
   <p><a href="Logout.php"><b><u><font color="red">Logout</u></b></a></center>
   </body>
    </html>  
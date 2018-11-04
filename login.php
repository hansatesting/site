<?php   
 session_start();
 include("connection.php"); //include the config
?>
<?php
//create database connection
$db=new mysqli("$dbhost","$dbuser","$dbpass");
$db->select_db("$dbname");
?>



<html>
<head>
<meta http-equiv=Content-Type content="text/html; charset=windows-1252">
<link href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.bundle.min.js" integrity="sha384-pjaaA8dDz/5BgdFUPX6M/9SUZv4d12SUPF0axWc+VRZkx5xU3daN+lYb49+Ax+Tl" crossorigin="anonymous"></script>

</head>

<body lang=EN-US>

<div class=WordSection1>

<div align=center>


<!-- Login form start -->
<form action="" method="post" 
="login">
<div class="full-bg-img" style="padding-top: 10%; background-image:url(Images/aac.png); width:100%; height:100%;>

<table class=MsoNormalTable border=0 cellpadding=0 style='mso-cellspacing:1.5pt;mso-yfti-tbllook:1184'>
<tr style='mso-yfti-irow:0;mso-yfti-firstrow:yes'>
  <td colspan=2 style='padding:.75pt .75pt .75pt .75pt'>
  <p class=MsoNormal align=center style='text-align:center'><b><span
  style='font-size:8.5pt;font-family:"Arial","sans-serif";mso-fareast-font-family:
  "Times New Roman";color:black'><a class="btn btn-danger" href="register.php">Register</a></span></b><span style='font-size:
  9.0pt;font-family:"Arial","sans-serif";mso-fareast-font-family:"Times New Roman"'><o:p></o:p></span></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:0;mso-yfti-firstrow:yes'>
  <td colspan=2 style='padding:.75pt .75pt .75pt .75pt'>
  <p class=MsoNormal align=center style='text-align:center'><b><span
  style='font-size:15pt;font-family:"Arial","sans-serif";mso-fareast-font-family:
  "Times New Roman";color:white'>Login</span></b><span style='font-size:
  9.0pt;font-family:"Arial","sans-serif";mso-fareast-font-family:"Times New Roman"'><o:p></o:p></span></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:1'>
  <td style='padding:.75pt .75pt .75pt .75pt'>
  <p class=MsoNormal><b><span style='font-size:8.5pt;font-family:"Arial","sans-serif";
  mso-fareast-font-family:"Times New Roman";color:black'>User Name</span></b><span
  style='font-size:9.0pt;font-family:"Arial","sans-serif";mso-fareast-font-family:
  "Times New Roman"'><o:p></o:p></span></p>
  </td>
  <td style='padding:.75pt .75pt .75pt .75pt'>
  <p class=MsoNormal><span style='font-size:9.0pt;font-family:"Arial","sans-serif";
  mso-fareast-font-family:"Times New Roman"'><INPUT class="form-control" style="width:20%" TYPE="text" NAME="username"><o:p></o:p></span></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:2'>
  <td style='padding:.75pt .75pt .75pt .75pt'>
  <p class=MsoNormal><b><span style='font-size:8.5pt;font-family:"Arial","sans-serif";
  mso-fareast-font-family:"Times New Roman";color:black'>Password</span></b><span
  style='font-size:9.0pt;font-family:"Arial","sans-serif";mso-fareast-font-family:
  "Times New Roman"'><o:p></o:p></span></p>
  </td>
  <td style='padding:.75pt .75pt .75pt .75pt'>
  <p class=MsoNormal><span style='font-size:9.0pt;font-family:"Arial","sans-serif";
  mso-fareast-font-family:"Times New Roman"'><INPUT class="form-control" style="width:20%" TYPE="password" NAME="password"><o:p></o:p></span></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:4;mso-yfti-lastrow:yes'>
  <td colspan=2 style='padding:.75pt .75pt .75pt .75pt'>
  <p class=MsoNormal align=center style='text-align:center'><span
  style='font-size:9.0pt;font-family:"Arial","sans-serif";mso-fareast-font-family:
  "Times New Roman"'><INPUT class="btn btn-primary" TYPE="submit" VALUE="Login" NAME="login"/><o:p></o:p></span></p>
  </td>
 </tr>
</table>
</div>
</form> <!-- Login form end-->
</div>

<p class=MsoNormal><o:p>&nbsp;</o:p></p>

</div>

</body>

</html>

<!-- php quary section -->
 <?php
 if(isset($_POST['login']))
 {
   $username =$_POST['username'];
   $password=$_POST['password'];
   $query="SELECT * FROM userr WHERE username = '$username' AND password = '$password'"; //quary
   $result=$db->query($query);
   $num_rows=$result->num_rows;
   for($i=0;$i<$num_rows;$i++)
   {   $row=$result->fetch_row();
	}
   if(($username==$row[1])&&($password==$row[6])) //checking the username and password if right
   {
     $_SESSION['username']=$username;
     $_SESSION['id']=$row[0];
     $_SESSION['role']=$row[7];
     $_SESSION['phone']=$row[8];
     $_SESSION['address']=$row[5];

     header("Location: http://localhost/site/index.php");
     exit;
	//  Header("location:index.php");
   }
   else
   {
     echo 'Username and Password not Right :P';
   }
}
@mysqli_close($con);
?>

<?php include 'connection.php'; ?>
<?php
//database connection
$db=new mysqli("$dbhost","$dbuser","$dbpass");
$db->select_db("$dbname");

?>
<html>

<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="./main/style.css">
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.bundle.min.js" integrity="sha384-pjaaA8dDz/5BgdFUPX6M/9SUZv4d12SUPF0axWc+VRZkx5xU3daN+lYb49+Ax+Tl" crossorigin="anonymous"></script>

    <link rel="stylesheet" href="./main/bootstrap.min.css">
    <title>KOTTU.LK</title>
</head>

<body lang=EN-US style='tab-interval:.5in'>





<div class=WordSection1>

<div align=center>
<!-- register form section start -->
<form action="" method="post" name="register">
<div class="full-bg-img" style="padding-top: 10%; background-image:url(Images/aac.png); width:100%; height:150%;>
<table class=MsoNormalTable border=0 cellpadding=0 style='mso-cellspacing:1.5pt;mso-yfti-tbllook:1184;mso-padding-alt:0in 0in 0in 0in'>
 <tr style='mso-yfti-irow:0;mso-yfti-firstrow:yes'>
  <td colspan=2 style='padding:.75pt .75pt .75pt .75pt'>
  <p class=MsoNormal align=center style='mso-margin-top-alt:auto;mso-margin-bottom-alt:
  auto;text-align:center'><b><span style='font-size:8.5pt;font-family:"Arial","sans-serif";
  mso-fareast-font-family:"Times New Roman";color:black'><a class="btn btn-primary" href="login.php">Login</a></span></b></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:0;mso-yfti-firstrow:yes'>
  <td colspan=2 style='padding:.75pt .75pt .75pt .75pt'>
  <p class=MsoNormal align=center style='mso-margin-top-alt:auto;mso-margin-bottom-alt:
  auto;text-align:center'><b><span style='font-size:15pt;font-family:"Arial","sans-serif";
  mso-fareast-font-family:"Times New Roman";color:white'>Registration</span></b></p>
  </td>
 </tr>
 <u1:p></u1:p>
 <tr style='mso-yfti-irow:1'>
  <td style='padding:.75pt .75pt .75pt .75pt'>
  <p class=MsoNormal style='mso-margin-top-alt:auto;mso-margin-bottom-alt:auto'><b><span
  style='font-size:8.5pt;font-family:"Arial","sans-serif";mso-fareast-font-family:
  "Times New Roman";color:black'>User Name</span></b></p>
  </td>
  <u1:p></u1:p>
  <td style='padding:.75pt .75pt .75pt .75pt'>
  <p class=MsoNormal style='mso-margin-top-alt:auto;mso-margin-bottom-alt:auto'><span
  style='font-size:9.0pt;font-family:"Arial","sans-serif";mso-fareast-font-family:
  "Times New Roman"'><INPUT class="form-control" style="width:20%" TYPE="text" NAME="username"></span></p>
  </td>
 </tr>
 <u1:p></u1:p>
 <tr style='mso-yfti-irow:2'>
  <td style='padding:.75pt .75pt .75pt .75pt'>
  <p class=MsoNormal style='mso-margin-top-alt:auto;mso-margin-bottom-alt:auto'><b><span
  style='font-size:8.5pt;font-family:"Arial","sans-serif";mso-fareast-font-family:
  "Times New Roman";color:black'>Email Adds</span></b><o:p></o:p></p>
  </td>
  <td style='padding:.75pt .75pt .75pt .75pt'>
  <p class=MsoNormal style='mso-margin-top-alt:auto;mso-margin-bottom-alt:auto'><span
  style='font-size:9.0pt;font-family:"Arial","sans-serif";mso-fareast-font-family:
  "Times New Roman"'><INPUT TYPE="text" class="form-control" style="width:20%" NAME="email"></span><o:p></o:p></p>
  </td>
 </tr>
 <u1:p></u1:p>
 <tr style='mso-yfti-irow:3'>
  <td style='padding:.75pt .75pt .75pt .75pt'>
  <p class=MsoNormal style='mso-margin-top-alt:auto;mso-margin-bottom-alt:auto'><b><span
  style='font-size:8.5pt;font-family:"Arial","sans-serif";mso-fareast-font-family:
  "Times New Roman";color:black'>First Name</span></b><o:p></o:p></p>
  </td>
  <td style='padding:.75pt .75pt .75pt .75pt'>
  <p class=MsoNormal style='mso-margin-top-alt:auto;mso-margin-bottom-alt:auto'><span
  style='font-size:9.0pt;font-family:"Arial","sans-serif";mso-fareast-font-family:
  "Times New Roman"'><INPUT TYPE="text" class="form-control" style="width:20%" NAME="fname"></span><o:p></o:p></p>
  </td>
 </tr>
 <u1:p></u1:p>
 <tr style='mso-yfti-irow:4'>
  <td style='padding:.75pt .75pt .75pt .75pt'>
  <p class=MsoNormal style='mso-margin-top-alt:auto;mso-margin-bottom-alt:auto'><b><span
  style='font-size:8.5pt;font-family:"Arial","sans-serif";mso-fareast-font-family:
  "Times New Roman";color:black'>Last Name</span></b><o:p></o:p></p>
  </td>
  <u1:p></u1:p>
  <td style='padding:.75pt .75pt .75pt .75pt'>
  <p class=MsoNormal style='mso-margin-top-alt:auto;mso-margin-bottom-alt:auto'><span
  style='font-size:9.0pt;font-family:"Arial","sans-serif";mso-fareast-font-family:
  "Times New Roman"'><INPUT TYPE="text" class="form-control" style="width:20%" NAME="lname"></span><o:p></o:p></p>
  </td>
 </tr>
 <u1:p></u1:p>
 <tr style='mso-yfti-irow:5'>
  <td style='padding:.75pt .75pt .75pt .75pt'>
  <p class=MsoNormal style='mso-margin-top-alt:auto;mso-margin-bottom-alt:auto'><b><span
  style='font-size:8.5pt;font-family:"Arial","sans-serif";mso-fareast-font-family:
  "Times New Roman";color:black'>Address</span></b><o:p></o:p></p>
  </td>
  <td style='padding:.75pt .75pt .75pt .75pt'>
  <p class=MsoNormal style='mso-margin-top-alt:auto;mso-margin-bottom-alt:auto'><span
  style='font-size:9.0pt;font-family:"Arial","sans-serif";mso-fareast-font-family:
  "Times New Roman"'><INPUT TYPE="text" class="form-control" style="width:20%" NAME="country"></span><o:p></o:p></p>
  </td>
 </tr>
 <u1:p></u1:p>


<u1:p></u1:p>
 <tr style='mso-yfti-irow:5'>
  <td style='padding:.75pt .75pt .75pt .75pt'>
  <p class=MsoNormal style='mso-margin-top-alt:auto;mso-margin-bottom-alt:auto'><b><span
  style='font-size:8.5pt;font-family:"Arial","sans-serif";mso-fareast-font-family:
  "Times New Roman";color:black'>Phone</span></b><o:p></o:p></p>
  </td>
  <td style='padding:.75pt .75pt .75pt .75pt'>
  <p class=MsoNormal style='mso-margin-top-alt:auto;mso-margin-bottom-alt:auto'><span
  style='font-size:9.0pt;font-family:"Arial","sans-serif";mso-fareast-font-family:
  "Times New Roman"'><INPUT TYPE="text" class="form-control" style="width:20%" NAME="phone"></span><o:p></o:p></p>
  </td>
 </tr>
 <u1:p></u1:p>

<u1:p></u1:p>
 <tr style='mso-yfti-irow:6'>
  <td style='padding:.75pt .75pt .75pt .75pt'>
  <p class=MsoNormal style='mso-margin-top-alt:auto;mso-margin-bottom-alt:auto'><b><span
  style='font-size:8.5pt;font-family:"Arial","sans-serif";mso-fareast-font-family:
  "Times New Roman";color:black'>Password</span></b><o:p></o:p></p>
  </td>
  <td style='padding:.75pt .75pt .75pt .75pt'>
  <p class=MsoNormal style='mso-margin-top-alt:auto;mso-margin-bottom-alt:auto'><span
  style='font-size:9.0pt;font-family:"Arial","sans-serif";mso-fareast-font-family:
  "Times New Roman"'><INPUT TYPE="password" class="form-control" style="width:20%" NAME="password"></span><o:p></o:p></p>
  </td>
 </tr>
 <u1:p></u1:p>
 <u1:p></u1:p>
 <tr style='mso-yfti-irow:8;mso-yfti-lastrow:yes'>
  <td colspan=2 style='padding:.75pt .75pt .75pt .75pt'>
  <p class=MsoNormal align=center style='mso-margin-top-alt:auto;mso-margin-bottom-alt:
  auto;text-align:center'><span style='font-size:9.0pt;font-family:"Arial","sans-serif";
  mso-fareast-font-family:"Times New Roman"'><INPUT TYPE="submit" class="btn btn-danger"  VALUE="Register" NAME="register" Onclick="return done(this.form);" /></span></p>
  </td>
 </tr>
 <u1:p></u1:p>
</table>
</div>
</form> <!-- register form section end -->
</div>

<p class=MsoNormal style='mso-margin-top-alt:auto;mso-margin-bottom-alt:auto'><u1:p>&nbsp;</u1:p></p>

</div>


<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
        crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49"
        crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy"
        crossorigin="anonymous"></script>

</body>

</html>
<!-- php quary section -->
<?php
  if(isset($_POST['register']))
  {
      if(($_POST['password'] !="") && ($_POST['password'] !="")){
        //geting the values from user input form index
   $fname=$_POST['fname'];
   $lname=$_POST['lname'];
   $email=$_POST['email'];
   $username=$_POST['username'];
   $password=$_POST['password'];
   $country=$_POST['country'];
   $phone=$_POST['phone'];
    //quary
   if ($db->query("INSERT INTO userr
    (username,email,fname,lname,country,password,phone)
    VALUES ('$username','$email','$fname','$lname','$country','$password','$phone')")){
         print "<script>document.write('Account created :)');</script>";
         
    }else {
		echo 'Error :(';
	}
      }else{
        echo 'Error :(';
      }
   
  }
 ?>
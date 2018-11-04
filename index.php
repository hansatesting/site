<?php 
echo("<script>console.log('awa');</script>");
session_start();

?>

<?php 
if(isset($_SESSION['username']))
// check session
{
	echo "Welcome ".$_SESSION['username'];
    echo "Welcome ".$_SESSION['id'];
    if($_SESSION['role']==1){
        header("Location: http://localhost/site/adminpanel.php");
        exit;
        // if he login as admin
    }else{
        header("Location: http://localhost/site/home.php");
        exit;
        // if he login as normal user
    }
    
}else
{
	header("Location: http://localhost/site/login.php");
    exit;
    // if no user redirect to login.php
}
?>

<?php
include 'connect.php';
include 'head2.php';
?>
<html>
<head>
 <link rel='stylesheet' href='index.css'>
 <style >  .table{  font-family: Montserrat, sans-serif;}
</style>
<title>M-Ticket</title>
</head>
<div><center><img src="https://img.icons8.com/bubbles/280/000000/admin-settings-male.png"/></div>
<br>
<br>
<body style="background-color: F5F1F0;">
	<h1><center><b>Admin Sign In</center></b></h1>

<?php echo "<p style='color:#FFFFFF; font-size:20px'; align='center'>
<span style='background-color:#FF0000;'>Entered captcha code does not match! 
Kindly try again.</span></p>";?>
<form method='post' action ='adminauthenticate.php'  >
<div>
<table align="center" class="table">
<tr><td><h2><b>Email id : </b></h2></td> <td><input type="email" name="email" maxlength='50'></td></tr>
<tr><td><h2><b>Password: </b></h2></td> <td><input type="password" name="password" maxlength='50'></td></td></tr>
<tr><td><p><br />
<img src="captcha.php?rand=<?php echo rand(); ?>" id='captcha_image'>
</p></td><td><p>Can't read the image?
<a href='javascript: refreshCaptcha();'>click here</a>
to refresh</p></td>
    
<tr><td><h2><b>Captcha: </b></h2></td> <td><input type="captcha" name="captcha" maxlength='50' required></td>
</td></tr>

<tr><td colspan='2'><center><button type='Submit' style="background-color:black; border-color:black" name='login_submit' ><b>Sign in </b> </button></center></td></tr></table>


</table>
</form>
<script>
//Refresh Captcha
function refreshCaptcha(){
    var img = document.images['captcha_image'];
    img.src = img.src.substring(
        0,img.src.lastIndexOf("?")
        )+"?rand="+Math.random()*1000;
}
</script>
<center><h3><a href='sindex.php' style="color: black"><b>User Sign In ?</b></a></h3></center>

</body style="background-color: F5F1F0;">
</html>
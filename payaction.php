<?php
include 'connect.php';
session_start();
if ($_SESSION['log'] == '')
{
    header("location:sindex.php");
}
$name = $_POST['name'];
$card = $_POST['cno'];
$EM  = $_POST['Em'];
$EY = $_POST['Ey'];
$Cvv = $_POST['Cvv'];
$Pin = $_POST['Pin'];

$email = $_SESSION['email'];
$source = $_SESSION['source'];
$dest = $_SESSION['dest'];
$name = $_SESSION['name'];
$type = $_SESSION['Type'];
$nopass = $_SESSION['NoOfpass'];
$final = $_SESSION['final'];
$route = $_SESSION['Route'];


echo $name;
echo $card;
echo $EM;
echo $EY;
echo $Cvv;
echo $Pin;
echo $email;
echo $source;
echo $dest;
echo $name;
echo $type;
echo $nopass;
echo $final;
echo $route;
// $c="SELECT T_No FROM transactions ORDER BY T_No DESC LIMIT 1";
// $sql_transactions="INSERT INTO transactions(email,source,dest,Name,Class,Type,NoOfpass,card_no,expmonth,expyear,cvv,pin,Amt,Route)VALUES (".$_SESSION['email']."','".$_SESSION['source']."','".$_SESSION['dest']."','" . $_SESSION['name'] . "','".$_SESSION['Class']."' ,'".$_SESSION['Type']."','".$_SESSION['NoOfpass']."','$card', '$EM', '$EY', '$Cvv', '$Pin', '".$_SESSION['final']."','".$_SESSION['Route']."')";

$query = "insert into transactions (email, source, dest, Name, Type, NoOfpass, card_no, expmonth, expyear, cvv, pin, Amt, Route) values ('$email', '$source', '$dest', '$name', '$type', $nopass, '$card', '$EM', '$EY', '$Cvv', '$Pin', '$final', '$route')";
$result = mysqli_query($connect, $query);
if($result){
    echo "<h1><center>Your Ticket has been sucessfully booked<center></h1><br>";
}
// if(mysqli_query($connect, $sql_transactions) == true)
// {
// echo "<h1><center>Your Ticket has been sucessfully booked<center></h1><br>";

// }
header("location: bookdone.php");


?>
<?php include 'footer.php';
?> 

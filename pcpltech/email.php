<?php
$con = mysql_connect("localhost","root","");
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }
mysql_select_db("pcpl", $con);
$sql="INSERT INTO contactform (name, email,comment)
VALUES ('$_POST[name]','$_POST[email]','$_POST[comment]')";
if (!mysql_query($sql,$con))
  {
  die('Error: ' . mysql_error());
  }
echo "<script>
alert('Welcome to Paramhansa Cybernetics Pvt.Ltd.');
window.location.href='index.html';
</script>";

mysql_close($con);
$to = "supriya33more@gmail.com"; 
$subject = "Contact Form"; 
$email = $_POST['email'] ; 
$message = $_POST['comment'] ; 
$headers = "From: $email"; 
$sent = mail($to, $subject, $message, $headers) ; 
if($sent) 
{echo "<script>
alert('Your mail was sent successfully');
window.location.href='index.html';
</script>";
}
else 
{
echo "<script>
alert('We encountered an error sending your mail');
window.location.href='index.html';
</script>";
 }
?>

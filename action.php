<?php
$a=$_POST['Name'];
$b=$_POST['Mail'];
$c=$_POST['Phone'];
$d=$_POST['Message'];

$conn = new mysqli("localhost","id13983954_root","4_OJL+6v(vla]7([", "id13983954_iip");
$com=mysqli_query($conn,"use id13983954_iip;");

$sql = mysqli_query($conn,"INSERT INTO userdb1 values ('$a', '$b', '$c', '$d','no');");

if (mysqli_query($conn, $sql)) 
{
	echo "<script>alert('Thank you 😊. Your message was sent successfully'); window.location.href = 'index.html';</script>";
} 

else 
{
	echo "<script>alert('Some error occured 😓. Redirecting you to contact page...'); window.location.href = 'contact.html';</script>";
}

?>

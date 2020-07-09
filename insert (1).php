<?php
$con = mysqli_connect('127.0.0.1','root','');
if(!$con)
{
    echo 'Not connected to server';
}

if(!mysqli_select_db($con,'mine'))
{
    echo 'database not selected';
}

$Firstname = $_POST['first'];
$Lastname = $_POST['last'];

$sql = "insert into my (Firstname,Lastname) values('$Firstname','$Lastname')";

if(!mysqli_query($con,$sql))
{
    echo 'NOT INSERTED';
}

else
{
    echo'INSERTED';
}

header ("refresh:2; url=hero.html");
?>
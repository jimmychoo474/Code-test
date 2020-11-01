<?php

$con = mysqli_connect("localhost","root","","charts");

$name= $_POST['name'];
$population=$_POST['population'];


$sql = "UPDATE chart SET population='$population' WHERE newcases='$name' ";



if(mysqli_query($con,$sql))
{
    echo 'Update success.....LGA population replaced, press back to go back !';
}
else{
    echo'Invalid LGA , press back to go back!';
}

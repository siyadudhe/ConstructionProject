<?php
$servername = "localhost";
$username = "root";
$password = "";
$database_name = "login_register";

$conn=mysqli_connect($servername, $username, $password, $database_name);
//check the connection
if(!$conn)
{
    
    die("Connection Failed:" . mysqli_error());
}

if(isset($_POST['submit']))
{
    $name = $_POST['name'];
	$contact = $_POST['contact'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    
    $sql_query = "INSERT INTO user_register (name, contact, email, password)
    VALUES ('$name','$contact','$email','$password')";
    
    if(mysqli_query($conn, $sql_query))
    {
        echo "Registered Successfully !";
    }
    else
    {
        echo "Error:" . $sql . "" . mysqli_error($conn);
    }
    mysqli_close($conn);
}
?>
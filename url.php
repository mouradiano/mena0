<?php

if(isset($_POST['submit'])){

$name = $_POST['name'];
$email = $_POST['email'];
$message = $_POST['message'];
$msg = "my name is $name and my email is $email my message is $message";


mail("mouradiano03@gmail.com","send info",$msg);


}

?>
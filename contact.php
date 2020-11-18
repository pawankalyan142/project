<?php

$name = $_REQUEST['name'];
$email = $_REQUEST['Email'];
$message = $_REQUEST['Message'];

if (empty($name) || empty($email)|| empty($message))
{
    echo "please fill the all fields";
}
else
{
    mail("pk4005155@gmail.com","Hotel-flash-dish",$message,"from: $name <$email>");
    echo "<script type='text/javascript'>alert('your sent successfully');
     window.history.log(-1);
    </script>";

}
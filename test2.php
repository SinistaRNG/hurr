<?php

$username = $_POST['user'];

$email = $_POST['mail'];

$experience = $_POST['exp'];



//the data

$data = "$username | $email | $experience\n";



//open the file and choose the mode

$fh = fopen("ratherbedead.me/users.txt", "a");

fwrite($fh, $data);



//close the file

fclose($fh);



print "User Submitted";



?>

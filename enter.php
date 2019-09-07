<?php
// Receive form Post data and Saving it in variables

$name = @$_POST['name'];
$email = @$_POST['email'];
$comment = @$_POST['comment'];

// Write the name of text file where data will be store
$filename = "data.txt";

// Marge all the variables with text in a single variable. 
$f_data= '
Name : '.$name.'
Email :  '.$email.'
Comments: '.$comment.'  
==============================================================================
';




echo 'Form data has been saved to '.$filename.'  <br>
<a href="'.$filename.'">Click here to read </a> ';
$file = fopen($filename, "w");
fwrite($file,$f_data);
fclose($file);
?>
<?php
/*
Author: Muhammad Abba Gana
Website: www.guidetricks.blogspot.com
*/
?>
<?php
$conn = mysqli_connect('sql12.freesqldatabase.com', 'sql12656271', 'IiwaXnzBWy');
if (!$conn){
    die("Database Connection Failed" . mysqli_error());
}
$select_db = mysqli_select_db($conn,'my_chat');
if (!$select_db){
    die("Database Selection Failed" . mysqli_error());
}
?>
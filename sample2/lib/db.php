<?php
function db_init(){
$conn = mysqli_connect("localhost", "root", "guddlf28");
mysqli_select_db($conn, 'opentutorials');
return $conn;
}
?>
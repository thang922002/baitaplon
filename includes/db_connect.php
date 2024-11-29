<?php
$servername = "fdb1028.awardspace.net"; 
$username = "4556706_news";        
$password = "Keycat123";            
$dbname = "4556706_news";   

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Kết nối thất bại: " . $conn->connect_error);
}
?>

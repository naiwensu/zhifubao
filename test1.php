<?php
$username='root';
$password='root';
$servername='localhost';
$conn = mysqli_connect($servername, $username, $password);
mysqli_select_db($conn,"pay");
$insert="INSERT INTO result(data) VALUES ('aaa')";
mysqli_query($conn,$insert);
<?php
$conn=mysqli_connect("localhost","root","","db_form");
$sql = mysqli_query($conn,"SELECT * FROM data_formulir");
?>
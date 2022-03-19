<?php
include_once("config.php");
$id = $_GET['id'];
$query = mysqli_query($conn,"UPDATE data_formulir set status='Disetujui' WHERE id='$id'");
if ($query) {
    header('location:index.php');
    }
else
    {
        echo 'Data Gagal disetujui';
    }

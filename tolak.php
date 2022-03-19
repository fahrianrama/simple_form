<?php
include_once("config.php");
$id = $_GET['id'];
$query = mysqli_query($conn,"UPDATE data_formulir set status='Ditolak' WHERE id='$id'");
if ($query) {
    header('location:index.php');
    }
else
    {
        echo 'Data Gagal disetujui';
    }

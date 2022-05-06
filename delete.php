<?php
include('connection.php');

$deleteQuery=mysqli_query($conn," DELETE  FROM crud WHERE `id`=". $_GET['id'] ."");
if($deleteQuery){
    echo "<script> alert('Deleted successfully..')</script>";
    echo"<script>window.location.href='index.php'; </script>";
    
}
else{
    echo"
    <script> alert('Failed to be delete')</script>
    ";
}
?>
<?php

  include_once "config.php";
   $s_no = $_REQUEST['id'];
   $searchQuery = "DELETE  FROM books WHERE s_no='$s_no' ";
   $res =  mysqli_query($conn , $searchQuery);
 
  
  header("location:../index.php");
?>
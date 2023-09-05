 <?php
  include "config.php";

  $name = mysqli_escape_string($conn  , $_POST['name']);
  $aName = mysqli_escape_string($conn  , $_POST['a_name']);
  $code = mysqli_escape_string($conn  , $_POST['code']);

  $searchQuery = "SELECT * FROM books WHERE code='$code' ";
  $res =  mysqli_query($conn , $searchQuery);

  if( mysqli_num_rows($res) > 0  ){
    echo "Book already have given code"; 
  } else{
    $insertQuery = "INSERT INTO books ( `name` , `a_name` , `code` ) VALUES(
      '$name' , '$aName' , '$code'
    )";
    $res =  mysqli_query($conn , $insertQuery);  
    if( $res ){
      echo "success"; 
    } else{
      echo "something went wrong";
    }
  }

?> 
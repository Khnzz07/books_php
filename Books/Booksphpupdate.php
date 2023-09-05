<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LIBRARY</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer"
    />
    <link rel="stylesheet" href="../css/style.css">
</head>

<body>

<?php 
 include "config.php";

  $s_no = $_REQUEST['id'];
  $searchQuery = "SELECT * FROM books WHERE s_no='$s_no' ";
  $res =  mysqli_query($conn , $searchQuery);
  $row = mysqli_fetch_assoc($res);
 
  if( isset( $_POST['submit']) ){
    $name = mysqli_escape_string($conn  , $_POST['name']);
    $aName = mysqli_escape_string($conn  , $_POST['a_name']);
    $code = mysqli_escape_string($conn  , $_POST['code']);
    $sno = $row['s_no'];
    $updateQuery = "UPDATE `books` SET `name`='$name',`a_name`='$aName',`code`='$code' WHERE s_no='$s_no'";
    echo $s_no;
    $res = mysqli_query($conn , $updateQuery);
    
    header("location:../index.php");
  }

 

?>

    <div class="form">
        <form action="" method="POST">
            <div class="error hide">this is error</div>
            <div class="field">
                <label for="">Book Title</label>
                <input type="text" name="name" placeholder="Book title or name" value="<?php echo $row['name']; ?>" required>
            </div>
            <div class="field">
                <label for="">Author Name</label>
                <input type="text" name="a_name" placeholder="Author Name" value="<?php echo $row['a_name']; ?> "required>
            </div>
            <div class="field">
                <label for="">Book Code</label>
                <input type="text" name="code" placeholder="Book Code" value="<?php echo $row['code']; ?>" required>
            </div>
            <div class="field">
                <input type="submit" name="submit" value="UPDATE BOOK" id="submit">
            </div>
        </form>
    </div>


  
</body>

</html>


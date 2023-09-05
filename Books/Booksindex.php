<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LIBRARY</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer"
    />
    <link rel="stylesheet" href="css/style.css">
</head>

<body>

    <main>
        <h1>BOOKS</h1>
        <div class="table">
        <table>
            <thead>
                <th>S_NO</th>
                <th>Name</th>
                <th>Author Name</th>
                <th>Code</th>
                <th colspan="2"> Update/Delete </th>
            </thead>
            <tbody>
                <?php 
                    include "php/config.php";

                    $query = "SELECT * FROM books";

                    $res = mysqli_query($conn ,$query);
                    
                    while( $row = mysqli_fetch_assoc($res) ) {
                        ?>
                            <tr>
                                <td> <?php echo $row['s_no']  ?>  </td>
                                <td> <?php echo $row['name']  ?> </td>
                                <td> <?php echo $row['a_name']  ?> </td>
                                <td> <?php echo $row['code']  ?></td>
                                <td>
                                    <a href="php/update.php?id=<?php echo $row['s_no']  ?>"><i class="fa fa-edit"></i></a>
                                </td>
                                <td>
                                    <a href="php/delete.php?id=<?php echo $row['s_no']  ?>"><i class="fa fa-trash"></i></a>
                                </td>

                            </tr>  

                        <?php
                    }
                ?>

            </tbody>
        </table>
        </div>

        <a href="insert.html" class="insertBtn">Add New Book</a>
    </main>

</body>

</html>
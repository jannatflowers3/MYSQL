<?php $db = new mysqli('localhost', 'root', '', 'wdpf51'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Student list</h1>
    <?php 
        //$sql = "SELECT * FROM students";
        $sql = "CALL GetStudents()";
        $result = $db->query($sql);
        //print_r($result);
       echo "<h2>Total record found $result->num_rows</h2>" ;
       echo "<table border='1'>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>ID</th>
                    <th>Action</th>
                </tr>" ;
       while($data = $result->fetch_object()){ 
            echo "<tr>";
                    echo "<td>$data->student_id</td>";
                    echo "<td>$data->student_name</td>";
                    echo "<td>$data->student_email</td>";
                    echo "<td>$data->student_phone</td>"; ?>
                    <td align="center">
                        <!-- Delete Button -->
                        <a href="student_delete.php?id=<?php echo $data->id ?>" onclick= "return confirm('Are you sure')"><img src="bin.png" width="30" alt=""></a>
                        <!-- Edit Button -->
                        <a href="student_edit.php?id=<?php echo $data->id ?>"><img src="pencil.png" width="20" alt=""></a>
                    </td>
           <?php
                    echo "</tr>";          
        }
        echo "</table>";
    ?>



    <a href="student_entry.php">New Entry</a>
</body>
</html>
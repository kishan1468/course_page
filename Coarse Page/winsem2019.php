<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <h1>Winter Semester 2019-2020 Details</h1>
    <table border="2px black solid">
        <tr>
            <td>subject</td>
            <td>category</td>
            <td>slot</td>
            <td>faculty</td>
        </tr>


        <?php

            include "dbConn.php"; // Using database connection file here
            $records = mysqli_query($db,"select * from winsem2019"); // fetch data from database

            while($data = mysqli_fetch_array($records))
            {
        ?>
            <tr>
                <td><?php echo $data['subject']; ?></td>
                <td><?php echo $data['category']; ?></td>
                <td><?php echo $data['slot']; ?></td>
                <td><?php echo $data['faculty']; ?></td>
            
            </tr>
            <?php
            }
            ?>


    </table>
</body>
</html>
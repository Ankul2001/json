
<?php
    $jsonfile=file_get_contents("jdata.json");
    $jsonarray=json_decode($jsonfile,true);




        ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>display data of json</title>
</head>
<style>
     body {
            font-family: Arial, sans-serif;
            background-color: #f0f0f0;
            margin: 0;
            padding: 0;
        }

        .container {
            max-width: 800px;
            margin: 50px auto;
            background-color: #fff;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
        }
        h1{
            text-align: center;
            background-image: linear-gradient(90deg, rgb(253, 53, 53), black);
            color: #ccc;
            height: 50px;
            font-size: 40px;
        }
        table{
            margin: auto;
            width: 900px;
            text-align: center;
        }

</style>
<body>
    <dic class="container">

        <h1>DATA TABLE</h1>
        <table border="2" cellpadding="10px" >
            <thead>
                <tr>
                    <th>User_Id</th>
                    <th>Photo</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Contact</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <?php
                    foreach($jsonarray as $row):

                ?>
                <tr>

                    <td><?php echo $row['userid']; ?></td>
                    <td><img src="img/<?php echo $row['photo']; ?>" height="100"></td>
                    <td><?php echo $row['name']; ?></td>
                    <td><?php echo $row['email']; ?></td>
                    <td><?php echo $row['contact']; ?></td>
                    <td><a href="code.php?removeid=<?php echo $row['userid']; ?>">Remove</a></td>
                </tr>
                <?php
    endforeach;
    ?>
            </tbody>
        </table>
    </dic>
</body>
</html>

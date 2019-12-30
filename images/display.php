<?php
    require "db.php";
    $sql = "SELECT * from image";
	$result = $db->query($sql)->fetch_all();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        body{
			background-color: #dcdcdc;
		}
		table, th, td {
			border: 1px solid black;
			border-collapse: collapse;
			margin-top: 20px;
			margin-left: 500px;
		}
		th{
			background-color: green;
			color: white;
		}
		th, td {
			padding: 5px;
			text-align: center;    
		}
    </style>
</head>
<body>
    <table >
        <tr>
            <th>ID</th>
            <th>Image</th>
		</tr>
        <?php
            for($i = 0; $i < count($result); $i++){
        ?>
            <tr>
                <td><h3> <?php echo $result[$i][0]; ?> </h3></td>
                <td><img src = "<?php echo $result[$i][1]; ?>" width="200"/> </td>
            </tr>
        <?php
            }
        ?>
    </table>
</body>
</html>
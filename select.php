<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <table border="3">
        <tr>
            <th>id</th>
            <th>name</th>
            <th>password</th>
            <th colspan="2">action</th>
        </tr>
        <?php
        include 'connection.php';
        $id=$_GET['id'];
        $select=mysqli_query($conn,"SELECT * FROM admin WHERE id = '$id'");
        while($data = mysqli_fetch_Array($select)){?>
        <tr>
            <td><?php echo$data['id']?></td>
            <td><?php echo$data['name']?></td>
            <td><?php echo$data['password']?></td>
        </tr>
<?php}?>
    </table>
</body>
</html>
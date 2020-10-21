<?php
$con=mysqli_connect('localhost','root','','CRUD');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>
    <table class="table" border="1">
    <tr>
    <th>Name</th><th>Age</th><th>Gender</th><th>E-Mail</th><th>Education</th><th>Language</th><th>Country</th><th>State</th><th>City</th><th>Tell US</th><th>Update</th><th>Delete</th>
    </tr>
        
        <?php
        $query=mysqli_query($con,"SELECT * FROM `registration`");
        while($fet=mysqli_fetch_array($query))
        {
            ?><tr>
            <td><?php echo $fet['name']; ?></td>
            <td><?php echo $fet['age']; ?></td>
            <td><?php echo $fet['gender']; ?></td>
            <td><?php echo $fet['email']; ?></td>
            <td><?php echo $fet['education']; ?></td>
            <td><?php echo $fet['language']; ?></td>
            <td><?php echo $fet['country']; ?></td>
            <td><?php echo $fet['state']; ?></td>
            <td><?php echo $fet['city']; ?></td>
            <td><?php echo $fet['tell_us_something']; ?></td>
            <td><a href="update.php?id=<?php echo $fet['id']; ?>"><button class="btn btn-primary">Update</button></a></td>
            <td><a href=""><button class="btn btn-danger">Delete</button></a></td></tr>
            <?php
        }
        ?>
            
    </table>
</body>
</html>
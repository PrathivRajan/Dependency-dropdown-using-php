<?php
$con=mysqli_connect('localhost','root','','CRUD');

if(isset($_POST['countryid']))
{
    $countryid=$_POST['countryid'];
    $query=mysqli_query($con,"SELECT * FROM `state` WHERE `country_id`='$countryid'");
    echo '<option value="">Select State Now</option>';
    while($fet=mysqli_fetch_array($query))
    {
        ?>

<option value="<?php echo $fet['id'];?>"><?php echo $state = $fet['state'];?></option>
<?php
    }
}

if(isset($_POST['stateid']))
{
    $stateid=$_POST['stateid'];
    $query=mysqli_query($con,"SELECT * FROM `city` WHERE `state_id`='$stateid'");
    echo '<option value="">Select City Now</option>';
    while($fet=mysqli_fetch_array($query))
    {
        ?>
<option value="<?php echo $fet['city_name'];?>"><?php echo $city = $fet['city_name'];?></option>
<?php
    }
}
?>
<?php
$con=mysqli_connect('localhost','root','','CRUD');

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD Operation Dynamic Dependency Form</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <script>
    $(document).ready(function()
    {
        $('#country').on('change',function(){
            var country = $(this).val();
            $.ajax({
               method:'POST',
                url:'ajax.php',
                data:{countryid:country},
                dataType:'html',
                success:function(data)
                {
                   $('#state').html(data);
                }
            });
        });
    });
        
        
    $(document).ready(function()
    {
        $('#state').on('change',function(){
            var state = $(this).val();
            $.ajax({
               method:'POST',
                url:'ajax.php',
                data:{stateid:state},
                dataType:'html',
                success:function(data)
                {
                    $('#city').html(data);
                }
            });
        });
    });
        
        
    </script>
</head>
<body>
    <?php
    if(!empty($_GET['data']))
    {
       echo $stateid = $_GET['data'];
    }
    ?>
        <h1>Registration Form</h1>
    <div class="container">
    <form method="post">
        <div class="form-group">
        <label>Name</label>
        <input type="text" class="form-control" name="nme" required>
        </div>
        
        <div class="form-group">
        <label>Age</label>
        <input type="number" class="form-control" name="age" required>
        </div>
        
        <div class="form-group">
        <label>Gender</label><br>
            <span>Male</span>
        <input type="radio" value="Male" name="gen" required>
            <span>Female</span>
        <input type="radio" value="Female" name="gen" required>
        </div>
        
        <div class="form-group">
        <label>E-Mail</label>
        <input type="email" class="form-control" name="mail" required>
        </div>
        
        <div class="form-group">
        <label>Education</label>
        <select class="form-control" name="edu" required>
            <option value="">Select Education</option>
            <option value="10th">10th</option>
            <option value="12th">12th</option>
            <option value="UG">UG</option>
            <option value="PG">PG</option>
        </select>
        </div>
       
        <div class="form-group">
        <label>Language</label><br>
        <span>Tamil</span>
            <input type="checkbox" value="English" name="lang[]">
        <span>English</span>
            <input type="checkbox" value="Tamil" name="lang[]">
        <span>Hindi</span>
            <input type="checkbox" value="Hindi" name="lang[]">
        </div>
        
        <div class="form-group">
        <label>Country</label>
        <select class="form-control" name="country" id="country">
            <option value="">Select Country</option>
            <?php
            $query=mysqli_query($con,"SELECT * FROM `country`");
    while($fet=mysqli_fetch_array($query))
    {
        ?>
<option value="<?php echo $fet['id'];?>"><?php echo $country_name=$fet['country_name'];?></option>
<?php
    }
            ?>
        </select>
        </div>
        
        
        <div class="form-group">
        <label>State</label>
        <select class="form-control" name="state" id="state">
            <option value="">Select State</option>
        </select>
        </div>
        
        <div class="form-group">
        <label>City</label>
        <select class="form-control" name="city" id="city">
            <option value="">Select City</option>
        </select>
        </div>
        
        
        <div class="form-group">
        <label>Tell us something</label>
        <textarea class="form-control" name="tell_us"></textarea>
        </div>
        
        <div class="form-group">
        <input type="submit" class="btn btn-primary" name="sb" value="Register">
        </div>
        
        
    </form>
    </div>
</body>
</html>

<?php
if(isset($_POST['sb']))
{
    $name=$_POST['nme'];
    $age=$_POST['age'];
    $gender=$_POST['gen'];
    $email=$_POST['mail'];
    $education=$_POST['edu'];
    $language=$_POST['lang'];
    $lan="";
    foreach($language as $lang)
    {
        $lan .= $lang.",";
    }
    
    /*$city=$_POST['$city'];*/
    $tellus=$_POST['tell_us'];
   /* $query=mysqli_query($con,"INSERT INTO `registration`(`name`, `age`, `gender`, `email`, `education`, `language`, `country`, `state`, `city`, `tell_us_something`) VALUES ('$name','$age','$gender','$email','$education','$lan','$country_name','$state','$city','$tellus')");*/
    
$query=mysqli_query($con,"INSERT INTO `registration`(`name`, `age`, `gender`, `email`, `education`, `language`, `country`, `state`, `tell_us_something`) VALUES ('$name','$age','$gender','$email','$education','$lan','$country_name','$stateid','$tellus')");
}
?>
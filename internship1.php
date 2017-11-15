<?php
$iid=$_GET['iid'];
include 'connect.php';
$query = mysqli_query($connection,"SELECT * FROM internship WHERE iid='$iid'");
while ($row = mysqli_fetch_array($query))
{
    $title=$row['title'];
    $description=$row['description'];
    $comp_name=$row['comp_name'];
    $stipend=$row['stipend'];
    $start=$row['start'];
    $apply=$row['apply'];
    $duration=$row['duration'];
    $skills=$row['skills'];
}
$query = mysqli_query($connection,"SELECT * FROM applicants WHERE internship='$iid'");
$applicants=mysqli_num_rows($query);

?>
<html>
<head>
    <title>
        Interning | <?php echo "$title"; ?>
    </title>
</head>
<body style="background-color: gainsboro; background-size: 100%;">
<?php
include 'nvgbar.php';
?>
<br>
<h2 style="text-align: center; color: blue;"><b><?php echo "$title"; ?></b></h2>
<br>
<div class="container">
    <div class="row">
        <div class="col-sm-7">
            <p style=" display: inline; color: black; font-size: 18px"><b>About Internship: </b></p><p style="font-size: 18px; display: inline; color: black;"><?php echo "$description"; ?></p><br><br>
            <p style=" display: inline; color: black; font-size: 18px"><b>Company: </b></p><p style="font-size: 18px; display: inline; color: black;"><?php echo "$comp_name"; ?></p><br><br>
            <p style=" display: inline; color: black; font-size: 18px"><b>Stipend: </b></p><p style="font-size: 18px; display: inline; color: black;"><?php echo "$stipend"; ?></p><br><br>
            <p style=" display: inline; color: black; font-size: 18px"><b>Start date: </b></p><p style="font-size: 18px; display: inline; color: black;"><?php echo "$start"; ?></p><br><br>
            <p style=" display: inline; color: black; font-size: 18px"><b>Apply by: </b></p><p style="font-size: 18px; display: inline; color: black;"><?php echo "$apply"; ?></p><br><br>
            <p style=" display: inline; color: black; font-size: 18px"><b>Skills Required: </b></p><p style="font-size: 18px; display: inline; color: black;"><?php echo "$skills"; ?></p><br><br>
            <p style=" display: inline; color: black; font-size: 18px"><b>No. of Applications: </b></p><p style="font-size: 18px; display: inline; color: black;"><?php echo "$applicants"; ?></p><br><br>
        </div>
        <div class="col-sm-5"></div>
    </div>
    <br><br>
    <h3 style="text-align: center; color: blue;"><b>Applicants</b></h3>
    <br>
    <?php
    $query=mysqli_query($connection,"SELECT * FROM applicants WHERE internship='$iid'" );
    while($row = mysqli_fetch_array($query))
    {
        $user=$row['user'];
        $query=mysqli_query($connection,"SELECT email FROM user WHERE id='$user'" );
        while($row = mysqli_fetch_array($query))
        {
            $email=$row['email'];
        }
        $query=mysqli_query($connection,"SELECT * FROM student WHERE email='$email'" );
        while($row = mysqli_fetch_array($query))
        {
            $name=$row['name'];
            $contact=$row['contact'];
        }
        echo "<div class=\"container\">
    <div class=\"row\">
        <div class=\"col-sm-7\">
            <p style=\" display: inline; color: black; font-size: 18px\"><b>Name: </b></p><p style=\"font-size: 18px; display: inline; color: black;\"> $name</p><br>
            <p style=\" display: inline; color: black; font-size: 18px\"><b>Contact: </b></p><p style=\"font-size: 18px; display: inline; color: black;\"> $contact</p><br>
            <p style=\" display: inline; color: black; font-size: 18px\"><b>Email: </b></p><p style=\"font-size: 18px; display: inline; color: black;\"> $email</p><br><br>
        </div>
    </div>
</div>";
    }
    ?>
</div><br><br>

<?php
include 'footer.php';
?>
</body>
</html>

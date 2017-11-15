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
    </div>
        <div class="col-sm-5"></div>
    </div>
    <br> <br>
    <div class="row">
        <div class="col-sm-4"></div>
        <div class="col-sm-4"> <a href="apply.php?iid=<?php echo "$iid"; ?>"><button type="button" class="btn btn-primary" style="margin-left: 20%; width:60%; margin-bottom: 10px" >Apply</button></a></div>
        <div class="col-sm-4"></div>
    </div>
</div><br><br>
    <?php
include 'footer.php';
?>
</body>
</html>

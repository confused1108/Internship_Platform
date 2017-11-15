<html>
<head>
    <title>
        Interning | Your Dashboard
    </title>
    <style>
        *{
            padding: 0;
            margin:0;
        }
    </style>
</head>
<body style="background-color: gainsboro; background-size: 100%;">
<?php
include 'nvgbar.php';
?>
<?php
include 'connect.php';
if($_SESSION['signed_in']!=true)
{
    header("location:slogin.php");
}
?>
<div class="container">
    <div class="row">
        <div class="col-sm-7" >
            <h3 style="text-align: center; color: blue;"><b>Internships you have applied to</b></h3><br>
            <?php
            $id=$_SESSION['id'];
            $query=mysqli_query($connection,"SELECT * FROM applicants WHERE user='$id' ORDER BY aid DESC ");
            while($row = mysqli_fetch_array($query))
            {
                $iid=$row['internship'];
                $query1=mysqli_query($connection,"SELECT * FROM internship WHERE iid='$iid' ");
                while($row = mysqli_fetch_array($query1))
                {
                    $title=$row['title'];
                    $comp_name=$row['comp_name'];
                    $stipend=$row['stipend'];
                }
                echo " <div style=\"background-color: white; width:100%; height: auto; margin-left: 5px; margin-bottom: 10px;\">
                <h1 style=\"font-size: 25px; color: blue; text-align: center; margin-top: 2px;\"><b>$title</b></h1>
                <hr  style=\"color: black; height: 2px;\">
                <p style=\"color: black; font-size: 18px; margin-left: 5px; display: inline;\"><b>Company: </b></p><p style=\"color: blue; font-size: 18px; display: inline;\">$comp_name</p>
                <br>
                <p style=\"color: black; font-size: 18px; margin-left: 5px; display: inline;\"><b>Stipend: </b></p><p style=\"color: blue; font-size: 18px; display: inline;\">$stipend</p>
                <br><br>
                <a href='internship.php?iid=$iid'><button type=\"button\" class=\"btn btn-success\" style=\"margin-left: 10px; width:100px; margin-bottom: 10px\">Details</button></a>
            </div>";
            }
            ?>
        </div>
    </div>
</div>
<br><br>
<?php
include 'footer.php';
?>

</body>
</html>
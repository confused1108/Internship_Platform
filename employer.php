<html>
<head>
    <title>
        Interning | Internships
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
<div class="container">
    <div class="row">
        <div class="col-sm-4" >
            <div style="background-color: white; width:100%; height: 400px; border-radius: 10px; border-color: black; border-style: solid; border-width: medium; ">
                <h1 style="text-align: center; font-size: 30px; color: blue">About Us</h1>
                <br>
                <p style="font-size: 20px; text-align: center; margin:3px;">
                    Interning.com is a platform for students, professionals and for companies. Hire Interns for your company and get internships that suits best to you. <br> Have a wonderful experience with us. <b>Happy Interning !!</b>
                </p>
            </div>
        </div><br>
        <div class="col-sm-1"></div>
        <div class="col-sm-7">
            <h3 style="text-align: center;">Internships you have posted</h3>
            <?php
            include 'connect.php';
            $id=$_SESSION['id'];
            $query=mysqli_query($connection,"SELECT email FROM user WHERE id=$id" );
            while($row = mysqli_fetch_array($query))
            {
                $email=$row['email'];
            }
            $query=mysqli_query($connection,"SELECT comp_name FROM company WHERE email='$email'");
            while($row = mysqli_fetch_array($query))
            {
                $comp_name=$row['comp_name'];
            }
            $query=mysqli_query($connection,"SELECT * FROM internship WHERE comp_name='$comp_name' ORDER BY iid DESC ");
            while($row = mysqli_fetch_array($query))
            {
                $title=$row['title'];
                $stipend=$row['stipend'];
                $iid=$row['iid'];
                $query1 = mysqli_query($connection,"SELECT * FROM applicants WHERE internship='$iid'");
                $applicants=mysqli_num_rows($query1);
                echo " <div style=\"background-color: white; width:100%; height: auto; margin-left: 5px; margin-bottom: 10px;\">
                <h1 style=\"font-size: 25px; color: blue; text-align: center; margin-top: 2px;\"><b>$title</b></h1>
                <hr  style=\"color: black; height: 2px;\">
               
                <p style=\"color: black; font-size: 18px; margin-left: 5px; display: inline;\"><b>Stipend: </b></p><p style=\"color: blue; font-size: 18px; display: inline;\">$stipend</p>
                <br>
                 <p style=\"color: black; font-size: 18px; margin-left: 5px; display: inline;\"><b>Applications recieved: </b></p><p style=\"color: blue; font-size: 18px; display: inline;\">$applicants</p>
                <br><br>
                <a href='internship1.php?iid=$iid'><button type=\"button\" class=\"btn btn-success\" style=\"margin-left: 10px; width:100px; margin-bottom: 10px\">Details</button></a>
            </div>";
            }
            ?>

        </div>
    </div>
</div>
<br><br><br><br><br><br><br>
<?php
include 'footer.php';
?>
</body>
</html>
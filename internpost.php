<?php
session_start();
include 'connect.php';
$title=$_POST['title'];
$description=$_POST['description'];
$stipend=$_POST['stipend'];
$start=$_POST['start'];
$apply=$_POST['apply'];
$skills=$_POST['skills'];
$duration=$_POST['duration'];
$id=$_SESSION['id'];
$query=mysqli_query($connection,"SELECT email FROM user WHERE id='$id'");
while($row = mysqli_fetch_array($query))
{
    $email=$row['email'];
}
$query=mysqli_query($connection,"SELECT comp_name FROM company WHERE email='$email'");
while($row = mysqli_fetch_array($query))
{
    $comp_name=$row['comp_name'];
}
//echo "$title $description $stipend $start $apply $skills $duration $comp_name ";
$db=new PDO("mysql:host=localhost;dbname=interning","root","");
if($db)
{
    $sql = "INSERT INTO
                    internship(title,description,stipend,start,apply,skills,duration,comp_name)
                VALUES(?,?,?,?,?,?,?,?)";
    $test=$db->prepare($sql);
    $test->bindParam(1,$title);
    $test->bindParam(2,$description);
    $test->bindParam(3,$stipend);
    $test->bindParam(4,$start);
    $test->bindParam(5,$apply);
    $test->bindParam(6,$skills);
    $test->bindParam(7,$duration);
    $test->bindParam(8,$comp_name);
    if($test->execute())
    {
        header("location:employer.php");
    }

    else
        echo 'Something went wrong while registering. Please try again later.1';
}
else
{
    echo 'Something went wrong while registering. Please try again later.2';

}

?>

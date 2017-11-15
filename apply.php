<?php
include 'connect.php';
session_start();
if(isset($_SESSION['signed_in'])!=true)
{
    header("location:slogin.php");
}
else
{
    $uid=$_SESSION['id'];
    $iid=$_GET['iid'];
    $query = mysqli_query($connection,"SELECT * FROM applicants WHERE user='$uid' AND internship='$iid'");
    $num_rows=mysqli_num_rows($query);
    if($num_rows==0)
    {
        $db=new PDO("mysql:host=localhost;dbname=interning","root","");
        if($db) {

            $sql = "INSERT INTO
                    applicants(user,internship)
                VALUES(?,?)";
            $test = $db->prepare($sql);
            $test->bindParam(1, $uid);
            $test->bindParam(2, $iid);
            if ($test->execute()) {
                echo "<br><br><p style='font-size:34px; text-align:center; font-weight:bold;'>You have successfully applied to this internship, </p>";
                echo '<br><p style="text-align:center; font-size:19px; font-weight:bold; font-decoration:none;"><a href="student.php">Browse other Internships </a></p>';
            } else {
                echo "error";
            }
        }
        else{
            echo "error";
        }
    }
    else
    {
        echo "<br><br><p style='font-size:34px; text-align:center; font-weight:bold;'>You have already applied to this internship, </p>";
        echo '<br><p style="text-align:center; font-size:19px; font-weight:bold; font-decoration:none;"><a href="student.php">Browse other Internships </a></p>';

    }

}
?>
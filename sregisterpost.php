<?php
include 'connect.php';
$name=$_POST['name'];
$gender=$_POST['gender'];
$contact=$_POST['contact'];
$email=$_POST['email'];
$institute=$_POST['institute'];
$password=sha1($_POST['password']);
$query=mysqli_query($connection," SELECT * FROM user WHERE email='$email' ");
if(mysqlI_num_rows($query)>0)
{
    echo "<br><br><p style='font-size:34px; text-align:center; font-weight:bold;'>Email you have entered is already in use.</p>";
    echo '<p style="text-align:center; font-size:19px; font-weight:bold; font-decoration:none;"><a href="slogin.php">Register again</a></p>';
}
else
{
    $db=new PDO("mysql:host=localhost;dbname=interning","root","");
    if($db)
    {
        $sql = "INSERT INTO
                    student(name,gender,contact,email,institute,password,category)
                VALUES(?,?,?,?,?,?,1)";
        $test=$db->prepare($sql);
        $test->bindParam(1,$name);
        $test->bindParam(2,$gender);
        $test->bindParam(3,$contact);
        $test->bindParam(4,$email);
        $test->bindParam(5,$institute);
        $test->bindParam(6,$password);
        if($test->execute())
        {
            $sql = "INSERT INTO
                    user(email,password,category)
                VALUES(?,?,1)";
            $test=$db->prepare($sql);
            $test->bindParam(1,$email);
            $test->bindParam(2,$password);
            if($test->execute())
            {
                $query = mysqli_query($connection,"SELECT * FROM user WHERE email='$email'");
                while ($row = mysqli_fetch_array($query)) {
                    if ($password == $row['password']) {
                        session_start();
                        $_SESSION['id'] = $row['id'];
                        $_SESSION['category'] = $row['category'];
                        $_SESSION['signed_in'] = true;
                        header("location:index.php");
                    }
                    else
                        echo 'Something went wrong while registering. Please try again later.1';
                }
            }
            else
                echo  "error";
        }
        else
            echo 'Something went wrong while registering. Please try again later.2';
    }
    else
    {
        echo 'Something went wrong while registering. Please try again later.3';

    }
}
?>
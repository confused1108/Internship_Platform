<?php
include 'connect.php';
$comp_name=$_POST['comp_name'];
$description=$_POST['description'];
$contact=$_POST['contact'];
$email=$_POST['email'];
$password=sha1($_POST['password']);
//echo "$comp_name $description $contact $email $password";
$query=mysqli_query($connection," SELECT * FROM user WHERE email='$email' ");
if(mysqlI_num_rows($query)>0)
{
    echo "<br><br><p style='font-size:34px; text-align:center; font-weight:bold;'>Email you have entered is already in use.</p>";
    echo '<p style="text-align:center; font-size:19px; font-weight:bold; font-decoration:none;"><a href="elogin.php">Register again</a></p>';
}
else
{
    $db=new PDO("mysql:host=localhost;dbname=interning","root","");
    if($db)
    {
        $sql = "INSERT INTO
                    company(comp_name,description,contact,email,password,category)
                VALUES(?,?,?,?,?,2)";
        $test=$db->prepare($sql);
        $test->bindParam(1,$comp_name);
        $test->bindParam(2,$description);
        $test->bindParam(3,$contact);
        $test->bindParam(4,$email);
        $test->bindParam(5,$password);
        if($test->execute())
        {
            $sql = "INSERT INTO
                    user(email,password,category)
                VALUES(?,?,2)";
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
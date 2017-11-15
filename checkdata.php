<?php
/**
 * Created by PhpStorm.
 * User: Hitesh
 * Date: 12-Jun-17
 * Time: 2:23 PM
 */
include 'connect.php';
if(isset($_POST['email']))
{
    $email=$_POST['email'];
    $query=mysqli_query($connection," SELECT * FROM user WHERE email='$email' ");

    if(mysqlI_num_rows($query)>0)
    {
        echo "<b>Email Already Exist</b>";
    }
    else
    {
        echo "<b>OK</b>
";
    }
    exit();
}
?>
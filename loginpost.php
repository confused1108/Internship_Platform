<?php
include 'connect.php';
session_start();
$email = $_POST['email'];
$password = sha1($_POST['password']);
//  echo "$pass";
$query = mysqli_query($connection,"SELECT * FROM user WHERE email='$email'");
$numrows = mysqli_num_rows($query);
if ($numrows!=0) {
    //while loop
    while ($row = mysqli_fetch_array($query)) {
        if ($password == $row['password']) {
            $_SESSION['id'] = $row['id'];
            $_SESSION['category'] = $row['category'];
            $_SESSION['signed_in'] = true;
            header("location:index.php");
        } else {
            echo "<br><br><p style='font-size:34px; text-align:center; font-weight:bold;'>You have supplied a wrong user/password combination. Please try again.</p>";
            echo '<p style="text-align:center; font-size:19px; font-weight:bold; font-decoration:none;"><a href="slogin.php">Sign In again</a></p>';
        }
    }
}
else {
    echo "<br><br><p style='font-size:34px; text-align:center; font-weight:bold;'>You have supplied a wrong user/password combination. Please try again.</p>";
    echo '<p style="text-align:center; font-size:19px; font-weight:bold; font-decoration:none;"><a href="slogin.php">Sign In again</a></p>';
}
?>
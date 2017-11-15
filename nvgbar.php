<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>
<nav class="navbar navbar-inverse" style="background-color: black; border-color:blue" >
    <div class="container-fluid">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="index.php" style="font-size: 30px;">Interning.com</a>
        </div>
        <div class="collapse navbar-collapse" id="myNavbar">
            <ul class="nav navbar-nav navbar-right">
                <?php
                    include 'connect.php';
                    session_start();
                if(isset($_SESSION['signed_in'])== true)
                    {
                        $id=$_SESSION['id'];
                        $query=mysqli_query($connection,"SELECT category FROM user WHERE id='$id'");
                        while($row = mysqli_fetch_array($query))
                        {
                            $category=$row['category'];
                        }
                        if($category==1)
                        {
                            echo "<li><a href=\"dashboard.php\"> Dashboard</a></li>
                                    <li><a href=\"logout.php\"> Logout</a></li>";
                        }
                        else{
                            echo "<li><a href=\"newintern.php\"> Post</a></li>
                                    <li><a href=\"logout.php\"> Logout</a></li>";
                        }

                                           }
                                           else{
                                               echo "
<li><a href=\"dashboard.php\"> Dashboard</a></li><li class=\"dropdown\">
                    <a class=\"dropdown-toggle\" data-toggle=\"dropdown\" href=\"#\" >LogIn/Register
                        <span class=\"caret\"></span></a>
                    <ul class=\"dropdown-menu\">
                        <li><a href=\"slogin.php\">Student</a></li>
                        <li><a href=\"elogin.php\">Company</a></li>
                    </ul>
                </li>";
                                           }
                ?>

            </ul>
        </div>
    </div>
</nav>
</body>
</html>

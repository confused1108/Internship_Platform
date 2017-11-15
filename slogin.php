<html>
<head>
    <title>
        Interning | Student registeration and login
    </title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script type="text/javascript">
        function checkemail()
        {
            var email=document.getElementById( "UserEmail" ).value;

            if(email)
            {
                $.ajax({
                    type: 'post',
                    url: 'checkdata.php',
                    data: {
                        email:email,
                    },
                    success: function (response) {
                        $( '#email_status' ).html(response);
                        if(response=="OK")
                        {
                            return true;
                        }
                        else
                        {
                            return false;
                        }
                    }
                });
            }
            else
            {
                $( '#email_status' ).html("");
                return false;
            }
        }

        function checkall()
        {
            var emailhtml=document.getElementById("email_status").innerHTML;

            if( emailhtml=="OK")
            {
                return true;
            }
            else
            {
                return false;
            }
        }

    </script>
</head>
<body style="background-image:url(images/workhour.jpg);background-size:100%">
<?php
include 'nvgbar.php';
?>

<div class="container">
    <div class="row">
        <div class="col-sm-6">
            <br><br><br>
            <div>
                <h3 style="text-align: center; color: white; font-size: 23px;"><b>Interning.com</b></h3><br><br>
                <p style="font-size: 20px; text-align: center; margin:3px; color: white;">
                    Interning.com is a platform for students, professionals and for companies. Hire Interns for your company and get internships that suits best to you. <br> Have a wonderful experience with us. <b>Happy Interning !!</b>
                </p>
            </div>


        </div>
        <div class="col-sm-6">
            <ul class="nav nav-pills nav-justified">
                <li class="active"><a data-toggle="pill" href="#home">LogIn</a></li>
                <li><a data-toggle="pill" href="#menu1">Register</a></li>
            </ul>

            <div class="tab-content">
                <div id="home" class="tab-pane fade in active">
                    <form name="myForm" onsubmit="return validatePost()" method="post" action="loginpost.php" style="background-color:rgb(217, 217, 217);width: 70%;margin-left: 15%; margin-top:6%; border: 1px solid grey;border-radius:5px;padding:5px">
                        <div class="form-group" style="padding-left:10px;padding-right:10px;">
                            <label for="Email">Email:</label>
                            <input type="Email" name="email" class="form-control" id="Email" placeholder="Email" required>
                        </div>
                        <div class="form-group" style="padding-left:10px;padding-right:10px;">
                            <label for="pwd">Password:</label>
                            <input type="Password" name="password" class="form-control" id="Password" placeholder="Password" required>
                        </div>
                        <button style="margin-left:10px"  type="submit" class="btn btn-default" >Submit</button>
                    </form>
                </div>
                <div id="menu1" class="tab-pane fade">
                    <form name="myForm" onsubmit="return validatePost()" method="post" action="sregisterpost.php" style="background-color:rgb(217, 217, 217);width:70%;margin-left: 15%;margin-top:6%;border: 1px solid grey;border-radius:5px;padding:5px">



                        <div class="form-group" style="padding-left:10px;padding-right:10px;" >

                            <label for="Name">Name:</label>
                            <input type="Name" name="name" class="form-control" id="Name" placeholder=" Name" required>

                        </div>
                        <div class="form-group" style="padding-left:10px;padding-right:10px;">
                            <label>
                                Gender</label><br>
                                <select name="gender">
                                    <option value="male" >Male</Option>
                                    <option value="female">Female</Option>
                                    <option value="other">Other</Option>
                                </select>

                        </div>
                        <div class="form-group" style="padding-left:10px;padding-right:10px;">

                            <label for="name">Contact:</label>
                            <input type="name" name="contact" class="form-control" id="name" placeholder="Contact" required>

                        </div>
                        <div class="form-group" style="padding-left:10px;padding-right:10px;">

                            <label for="Email">Email:</label>
                            <input type="Email" name="email" class="form-control" placeholder="Email" id="UserEmail" onkeyup="checkemail();" required>
                            <span id="email_status"></span>
                        </div>
                        <div class="form-group" style="padding-left:10px;padding-right:10px;" >

                            <label for="Name">Institute:</label>
                            <input type="Name" name="institute" class="form-control" id="Name" placeholder="Institute" required>

                        </div>
                        <div class="form-group" style="padding-left:10px;padding-right:10px;">

                            <label for="pwd">Password:</label>

                            <input type="Password" name="password" class="form-control" id="Password" placeholder="Password" required>

                        </div>
                        <button style="margin-left:10px"  type="submit" class="btn btn-default" >Submit</button>
                    </form>
                </div>
            </div></div>
    </div>
</div>
</body>
</html>
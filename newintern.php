<html>
<head>
    <title>
        Interning | Post Internship
    </title>
</head>
<body style="background-image:url(images/workhour.jpg);background-size:100%">
<?php
include 'nvgbar.php';
?>
<div class="container">
    <form name="myForm" onsubmit="return validatePost()" method="post" action="internpost.php" style="background-color:rgb(217, 217, 217);width:46%;margin-left: 28%;margin-top:3%;border: 1px solid grey;border-radius:5px;padding:5px">
        <div class="form-group" style="padding-left:10px;padding-right:10px;" >
            <label for="Name">Title:</label>
            <input type="Name" name="title" class="form-control" id="Name" placeholder=" Title" required>
        </div>
        <div class="form-group" style="padding-left:10px;padding-right:10px;" >
            <label for="Name">Description:</label>
            <input type="Name" name="description" class="form-control" id="Name" placeholder=" Description" required>
        </div>
        <div class="form-group" style="padding-left:10px;padding-right:10px;" >
            <label for="Name">Stipend:</label>
            <input type="Name" name="stipend" class="form-control" id="Name" placeholder=" Stipend" required>
        </div>
        <div class="form-group" style="padding-left:10px;padding-right:10px;" >
            <label for="Name">Start date:</label>
            <input type="Name" name="start" class="form-control" id="Name" placeholder=" Start date" required>
        </div>
        <div class="form-group" style="padding-left:10px;padding-right:10px;" >
            <label for="Name">Apply by:</label>
            <input type="Name" name="apply" class="form-control" id="Name" placeholder=" Apply by" required>
        </div>
        <div class="form-group" style="padding-left:10px;padding-right:10px;" >
            <label for="Name">Skills required:</label>
            <input type="Name" name="skills" class="form-control" id="Name" placeholder=" Skills Required" required>
        </div>
        <div class="form-group" style="padding-left:10px;padding-right:10px;" >
            <label for="Name">Duration:</label>
            <input type="Name" name="duration" class="form-control" id="Name" placeholder=" Duration" required>
        </div>
        <button style="margin-left:10px"  type="submit" class="btn btn-default" >Post</button>
    </form>
</div>
</body>
</html>

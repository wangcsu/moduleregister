<?php
require 'config.php';
?>
<html>
<head>
    <title>Register</title>
    <link rel="stylesheet" href="https://bootswatch.com/paper/bootstrap.min.css">
</head>
<body>
<nav class="navbar navbar-default">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#">Registration</a>
        </div>
        <div id="navbar" class="collapse navbar-collapse">
            <ul class="nav navbar-nav">
                <li><a href="<?php echo ROOT_URL; ?>">Student</a></li>
                <li><a href="#">Lecturer</a></li>
            </ul>
        </div><!--/.nav-collapse -->
    </div>
</nav>
<div class="container">
    <h3>Module Demonstrations - Register here for a time slot</h3>
    <div class="well">
        <h4>Register only if you know what you are doing.</h4>
        <ul>
            <li>Please enter <strong>all</strong> information and select your desired day.</li>
            <li>Please enter a correct 'SID' number.</li>
            <li>Please check the number of available slots before submitting.</li>
            <li>Register only to one slot.</li>
            <li>Any problem? Send a message to <a href="#">Administrator</a></li>
        </ul>
    </div>
    <form method="post" action="<?php $_SERVER['PHP_SELF']; ?>" class="form-horizontal">
        <fieldset>
            <div class="form-group">
                <label for="inputFirstName" class="col-lg-2 control-label">First Name</label>
                <div class="col-lg-10">
                    <input type="text" class="form-control" id="inputFirstName" placeholder="First Name">
                </div>
            </div>
            <div class="form-group">
                <label for="inputLastName" class="col-lg-2 control-label">Last Name</label>
                <div class="col-lg-10">
                    <input type="text" class="form-control" id="inputLastName" placeholder="Last Name">
                </div>
            </div>
            <div class="form-group">
                <label for="inputSID" class="col-lg-2 control-label">SID</label>
                <div class="col-lg-10">
                    <input type="text" class="form-control" id="inputSID" placeholder="SID">
                </div>
            </div>
            <div class="form-group">
                <label for="inputEmail" class="col-lg-2 control-label">Email</label>
                <div class="col-lg-10">
                    <input type="text" class="form-control" id="inputEmail" placeholder="Email">
                </div>
            </div>
            <div class="form-group">
                <label for="select" class="col-lg-2 control-label">Time Slot</label>
                <div class="col-lg-10">
                    <select class="form-control" id="select">
                        <option>1</option>
                        <option>2</option>
                        <option>3</option>
                        <option>4</option>
                    </select>
                </div>
            </div>
            <div class="form-group">
                <div class="col-lg-10 col-lg-offset-2">
                    <button type="reset" class="btn btn-default">Cancel</button>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>
            </div>
        </fieldset>
    </form>
</div>
<script src="https://code.jquery.com/jquery-1.12.4.js" integrity="sha256-Qw82+bXyGq6MydymqBxNPYTaUXXq7c8v3CwiYwLLNXU=" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</body>
</html>

<?php
    session_start();
    if(@$_session["user"]){
        header("Location:Quizwebsite/home.php");
    }
?>

<!DOCTYPE html>
<html lang="en">



<head>
    <title>Log in</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- <link rel="stylesheet" href="/home/amaan/Documents/web development/Quizwebsite/styles.css"> -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <style>
        .navbar-inverse {
            background-color: #fff;
            border-color: #ffffff;

        }

        .navbar-inverse .navbar-nav>.active>a,
        .navbar-inverse .navbar-nav>.active>a:focus,
        .navbar-inverse .navbar-nav>.active>a:hover {
            color: #060606;
            background-color: #ffffff;
        }

        .navbar-inverse .navbar-nav>li>a {
            color: #090909;
        }

        .navbar-inverse .navbar-nav>li>a:focus,
        .navbar-inverse .navbar-nav>li>a:hover {
            color: #0c4ad4;
            background-color: transparent;
        }
    </style>

</head>

<body style="background-color: #B6E388">

  <nav class="navbar navbar-inverse" style="background-color: #B6E388">
        <div class="container-fluid">
            <!-- <div class="navbar-header">
                <img src="images/logo.png" style="width: 70px;margin-top: 15px;" />
                 <a class="navbar-brand" href="#">GSY Services</a>
            </div>
            <ul class="nav navbar-nav">
                <li class="active"><a href="index.php">
                        <h2>JAIN LIBRARY</h2>
                    </a></li>

            </ul> -->
            <ul class="nav navbar-nav navbar-right">

                <li><a href="singup.html" style="margin-top: 27px;font-size: 20px"><span class="glyphicon glyphicon-user"></span>
                        Sign Up</a></li>
                <li><a href="signin.php" style="margin-top: 27px;margin-right: 100px;font-size: 20px;color: #0c4ad4"><span
                            class="glyphicon glyphicon-log-in"></span> Login</a></li>
            </ul>
        </div>
    </nav>



    <div class="container">

        <div class="row">

            <div class="col-md-4" ></div>

            <div class="col-md-4" style="text-align: center;">

                <h2>Login</h2>
                <form method="POST" action="signinHelper.php">
                    <div class="form-group row">

                        <div class="col-xs-12">

                            <input class="form-control" id="email" name="email" required type="text" placeholder="Email">
                        </div>


                    </div>

                    <div class="form-group row">

                        <div class="col-xs-12">

                            <input class="form-control" id="pass" name="pass" required  type="password" placeholder="Password">
                        </div>



                    </div>



                <button class="btn btn-info">continue</button>

                    <p style="text-align: left;">
                        <label for="ex3"><a href="editpassword.html">Update Password</a></label></p>
                </form>

               <br/>



            <p style="text-align: center;margin-top: 30px;">
                Do have an account? <span style="color: #0c4ad4;"><a href="singup.html">Register here</a></span>
                    </p>


                    <p style="text-align: center;margin-top: 30px;">
                        <span style="color: #0c4ad4;"><a href="adminlogin.html">Admin Login</a></span>
                            </p>

            </div>


            <div class="col-md-2" ></div>

        </div>


    </div>


    <!-- <div class="container">
        <div class="row">
            <div class="col-md-12">
                    <hr/>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4">

            </div>
            <div class="col-md-4" style="text-align: center;font-size: 14px;">
               Jakkasandra Post,Kanakapura Taluk<br/> Ramanagara<br/>
                <span class="glyphicon glyphicon-phone"> Call us on - Global jain campus</span>
            <br/>

            <span class="glyphicon glyphicon-envelope"> info.a@jainlibrary.ca</span>
            <br/>
            Copy Right All Rights Reserved


            </div>
            <div class="col-md-4">

            </div>
        </div>

        <div class="row">
            <div class="col-md-4">

            </div>

            <div class="col-md-4" style="text-align: center;">
                    <ul style="list-style: none;float: left;">
                        <li style="list-style: none;float: left;padding: 10px;"><a href="#" style="margin-top: 30px;font-size: 20px;">Terms</a></li>
                        <li style="list-style: none;float: left;padding: 10px;"><a href="#" style="margin-top: 30px;font-size: 20px;">Privacy</a></li>
                        <li style="list-style: none;float: left;padding: 10px;"><a href="#" style="margin-top: 30px;font-size: 20px;">Security</a></li>

                    </ul>
            </div>

            <div class="col-md-4">

            </div>

        </div>
    </div> -->



</body>

</html>

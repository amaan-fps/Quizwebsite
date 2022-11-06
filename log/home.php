<!DOCTYPE html>
<html lang="en">

<head>
    <title>JAIN LIBRARY</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
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
        
        .navbar {
    position: relative;
    min-height: 20px;
    margin-bottom: 0px;
    border: 1px solid transparent;
}

.navbar-nav>li>a {
    padding-top: 0px;
    padding-bottom: 0px;
}
.navbar-nav>li>a {
    padding-top: 10px;
    padding-bottom: 10px;
    line-height: 0px;
}

th,tr, table {
  text-align: center; 
}
    </style>

</head>

<body>
    
    <nav class="navbar navbar-inverse">
        <div class="container-fluid">
            <div class="navbar-header">
                <div class="navbar-header">
                <img src="images/logo.png" style="width: 70px;margin-top: 15px;" />
                <!-- <a class="navbar-brand" href="#">GSY Services</a> -->
            </div>
            <ul class="nav navbar-nav">
                <li class="active"><a href="index.php">
                        <h2>JAIN LIBRARY</h2>
                    </a></li>

            </ul>
                </div>
                </div>
                </div>
 </nav>
    <nav class="navbar navbar-inverse">
        <div class="container">
            
            <ul class="nav navbar-nav navbar-right">
                <li><a href="home.php" style="margin-top: 0px;font-size: 20px;color: #0c4ad4;">Home</a></li>
                <li><a href="uabout.html" style="margin-top: 0px;font-size: 20px">About</a></li>
                 <li><a href="viewevents.php" style="margin-top: 0px;font-size: 20px;">Events</a></li>
                 <li><a href="viewbooks.php" style="margin-top: 0px;font-size: 20px;">Books</a></li>

                <li><a href="viewpodcasts.php" style="margin-top: 0px;font-size: 20px">Podcasts</a></li>
                <li><a href="viewrooms.php" style="margin-top: 0px;font-size: 20px">Rooms</a></li>
       
                <li class="dropdown">
                    <a class="dropdown-toggle" style="margin-top: 0px;font-size: 20px" data-toggle="dropdown" href="#">Services
                    <span class="caret"></span></a>
                    <ul class="dropdown-menu">
                      <li><a href="member.php">Member Ship</a></li>
                      <li><a href="query.html">Queries</a></li>
                      <li><a href="ordercard.php">Order Card</a></li>
                    </ul>
                  </li>
                   <li><a href="mybookings.php" style="margin-top: 0px;font-size: 20px">My Bookings</a></li>
                <li><a href="ucontact.html" style="margin-top: 0px;font-size: 20px">Contact</a></li>
                <li><a href="logout.php" style="margin-top: 0px;font-size: 20px">Logout</a></li>
                
            </ul>
        </div>
    </nav>


    <div class="container">

       
    </div>

    <div class="container">
        <div class="row">

            <div class="col-md-12">
              
                <hr />
                <h4 style="text-align: center;margin: 30px;">LIBRARY WILL CLOSE ON EVERY FRIDAY</h4>
                
                
               
            </div>
            <div class="col-md-8">
                
                 
                     <div class="row">
                        <div class="col-md-4">
                            <a href="viewbooks.php">
                            <img src="images/books.jpeg" class="img-thumbnail" style="height:200px" alt="Cinque Terre">
                            <h4 style="text-align:center">Books</h4>
                            </a>
                        </div>
                        <div class="col-md-4">
                            <a href="viewpodcasts.php">
                            <img src="images/pod.png" class="img-thumbnail" style="height:200px" alt="Cinque Terre">
                             <h4 style="text-align:center">Podcasts</h4>
                             </a>
                        </div>
                        
                        <div class="col-md-4">
                            <a href="viewonlinebooks.php">
                            <img src="images/online.png" class="img-thumbnail" style="height:200px" alt="Cinque Terre">
                             <h4 style="text-align:center">Online Books</h4>
                             </a>
                        </div>
                    </div>
                    
                    <div class="row">
                        <hr/>
                        <h3 style="text-align:center">Events</h3>
                        
                          <div class="row">
             
              <?php
                                        
                                         include 'config.php';
                           //SELECT `bid`, `country`, `name`, `image`, `dat`, `email` FROM `blog` WHERE 1
            
                            $sql = "SELECT * FROM `events` ";
                            $result = $conn->query($sql);
            
                            if ($result->num_rows > 0) {
                                // output data of each row
                                while ($row = $result->fetch_assoc()) {
                                    echo '
                                
                              
                              
                               <div class="col-md-3">
                
                                   <a style="text-align:center" href="eventdetails.php?id='. $row['eid'] .'">
                                   <img src="' . $row["img"] . '" class="img-thumbnail"  style="width:100%;height:150px"/></a>
                                    
                                    <h4 style="text-align:center">
                                    
                                     <a style="text-align:left" href="eventdetails.php?id='. $row['eid'] .'">' . $row["name"] . '</a>
                               
                                    </h4>
                                    
                                   
                                </div>
                              
                                
                            
                                ';
                                }
                            } else {
                                echo "No Events Found";
                            }
                            $conn->close();
            
            
                                        
                                        ?>
         </div>
                    </div>
              
                
            </div>
            <div class="col-md-4" style="text-align:center">
                <h1>Opening Hours</h1>
                
                <table align="center">
<tr><th>Sunday&nbsp;</th><td>Closed</td></tr>
<tr><th>Monday&nbsp;</th><td>9am - 5pm</td></tr>
<tr><th>Tuesday&nbsp;</th><td>9am - 5pm</td></tr>
<tr><th>Wednesday&nbsp;</th><td>9am - 5pm</td></tr>
<tr><th>Thursday&nbsp;</th><td>9am - 5pm</td></tr>
</table>
            </div>
        </div>
       
    </div>



    <div class="container">
        <div class="row">
            <div class="col-md-12">
                    <hr/>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4">

            </div>
            <div class="col-md-4" style="text-align: center;font-size: 14px;">
                557 Boul Henri-Bourassa East, Montreal,<br/> Quebec, H2C 1E2<br/>
                <span class="glyphicon glyphicon-phone"> Call us on - 564516548</span>
            <br/>

            <span class="glyphicon glyphicon-envelope"> info.a@montreallibrary.ca</span>
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
    </div>




</body>

</html>
<?php 
session_start();
include('connect.php');
include('links.php');
 ?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS --><!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/styles.css">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
      <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
      <!-- Include all compiled plugins (below), or include individual files as needed -->
      <script src="js/bootstrap.js"></script>
    <title>Fine Details</title>
    <style type="text/css">
		.details{
		    margin-left: 20%;
		    font-size: 20px;

		}
    </style>
  </head>
  <body>
    <nav class="navbar navbar-default navbar-inverse navbar-fixed-top" role="navigation">
      <div class="container-fluid">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar" ">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
        
         <a class="navbar-brand" href="home.php">Public Library</a>
        </div>
        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="navbar">
          <ul class="nav navbar-nav">
            <li ><a href="home.php">Home</a></li>
            <li><a href="aboutus.php">About Us</a></li>
            <li ><a href="orderbook.php">Order Book</a></li>
            <li class="active"><a href="fine.php">Fine Details</a></li>
            <li><a href="report.php">Report</a></li>
            <li><a href="profile.php">My Profile</a></li>
            <li><a href="bookslist.php">Books List</a></li>
           
          </ul>
          <form class="navbar-form navbar-left" role="search">
            <div class="form-group">
              <input type="text" class="form-control" placeholder="Search">
            </div>
            <button type="submit" class="btn btn-info">Search</button>
          </form>
          <ul class="nav navbar-nav navbar-right">
            <li style="color: white;margin-right: 10px;margin-top: 15px;font-size: 20px;"><?php echo  $_SESSION['username'] ?></li>
            <li><a href="logout.php"><button class="btn btn-warning" style="margin-right:20px;margin-top: -7px;"  >Logout</button></a></li>
          </ul>
        </div><!-- /.navbar-collapse -->
      </div><!-- /.container-fluid -->
    </nav>

<div class="container-fluid">
  <div class="row">
    <div class="col-md-12 " style="background-color: #0D0D0D;background-size: cover;background-repeat: no-repeat;width: 100%;color: white;">

    <h1 class="text-center" style="font-size: 60px;margin-top: 100px;font-style: italic;font-family:Zapf Chancery, cursive ;">Fine Details</h1>
    <br><br><br>
      <div class="details">
      	<ul type="square" style="line-height: 40px;">
	      	<li>A billing notice for the replacement cost of the items will be sent if the items are not returned</li>
	      	<li>The books should be returned within a week after borrowing it.</li>
			<li>Damaged (including writing in work books) or
			missing components; for example, a CD-Rom.</li>
			<li>The billing notice will also include a 100Rs processing fee.<br></li><li> This fee must be paid whether the item is returned or not.</li>	      	
      	</ul>
      	<br><br>
      </div>	
    </div>
  </div>
  
</div>


    <footer class="page-footer center-on-small-only unique-color-dark pt-0" style="background-color: #1c2331;color: white;">
        <br><br>
        <div class="container mt-5 mb-4 text-center text-md-left" >
            <div class="row mt-3">
               <div class="col-md-3 col-lg-4 col-xl-3 mb-r">
                    <h5 class="title font-bold"><strong>Public Library</strong></h5>
                    <hr class="deep-purple accent-2 mb-4 mt-0 d-inline-block mx-auto" style="width: 60px;">
                    <p style="font-family: calibri;">A public library is a library that is accessible by the general public and is generally funded from public sources, such as taxes. It is operated by librarians and library paraprofessionals, who are also civil servants.</p>
                    <button type="button" class="btn btn-info">Read more</button>
                </div>
                <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mb-r">
                    <h5 class="title font-bold"><strong>Legal</strong></h5>
                    <hr class="deep-purple accent-2 mb-4 mt-0 d-inline-block mx-auto" style="width: 60px;">
                    <p><a href="#!">Terms & Conditions</a></p>
                    <p><a href="#!">Refund & Cancellation</a></p>
                    <p><a href="#!">Privacy Policy</a></p>
                    <p><a href="#!">Offer Terms</a></p>
                </div>
                <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mb-r">
                    <h5 class="title font-bold"><strong>Profile</strong></h5>
                    <hr class="deep-purple accent-2 mb-4 mt-0 d-inline-block mx-auto" style="width: 60px;">
                    <p><a href="#!">Your Account</a></p>
                    <p><a href="#!">Become an Affiliate</a></p>
                    <p><a href="#!">Shipping Rates</a></p>
                    <p><a href="#!">Help</a></p>
                </div>
                <div class="col-md-4 col-lg-3 col-xl-3">
                    <h5 class="title font-bold"><strong>Contact Us</strong></h5>
                    <hr class="deep-purple accent-2 mb-4 mt-0 d-inline-block mx-auto" style="width: 60px;">
                    <a href="#" class="fa fa-facebook-square" style="font-size: 30px;padding: 3px;"></a>
                    <a href="#" class="fa fa-twitter" style="font-size: 30px;padding: 3px;"></a>
                    <a href="#" class="fa fa-instagram" style="font-size: 30px;padding: 3px;"></a>
                    <a href="#" class="fa fa-google-plus-square" style="font-size: 30px;padding: 3px;"></a>
                    <a href="#" class="fa fa-linkedin-in" style="font-size: 30px;padding: 3px;"></a>
                    <a href="#" class="fa fa-snapchat-square" style="font-size: 30px;padding: 3px;"></a>
                    <!-- <hr class="deep-purple accent-2 mb-4 mt-0 d-inline-block mx-auto" style="width: 60px;"> -->
                    <h5 class="title font-bold"><strong>Download App</strong></h5>
                    <a href="#" target="_blank"><img src="http://www.niftybuttons.com/googleplay/googleplay-button2.png" alt="Get on Google Play (Button via NiftyButtons.com)"></a>

                </div>
            </div>
        </div><br><br><br>
    </footer>
    
</body>
</html>
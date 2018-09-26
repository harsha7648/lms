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
    <title>Home</title>
  <style type="text/css">
  table {
    font-family: arial, sans-serif;
    border-collapse: collapse;
    width: 70%;
    color: cyan;

}
table tr td{
  color: green;
  border-right: 2px  solid white;
}
td, th {
    border: 1px solid #dddddd;
    text-align:center;
    padding: 8px;
    color: cyan;
}
tr:nth-child(even) {
    background-color: #dddddd;
    color:darkblue ;
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
            <li class="active"><a href="home.php">Home</a></li>
            <li><a href="aboutus.php">About Us</a></li>
            <li ><a href="orderbook.php">Order Book</a></li>
            <li><a href="fine.php">Fine Details</a></li>
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
    <div class="container" style="height:980px;width: 100%;margin:0px;padding: 0px; ">  
        <div id="myCarousel" class="carousel slide" data-ride="carousel" data-interval="2000" >
          
          <div class="carousel-inner" style="height:980px;width: 100%; ">
            <div class="item active">
              <img src="images/1.jpg" alt="first" style=" height:980px;width:100%;">
            <div class="item">
              <img src="images/2.jpg" alt="second" style="height:980px;width:100%;">
            </div>
            <div class="item">
              <img src="images/3.jpg" alt="third" style="height:980px;width:100%;">
            </div>
          </div>
          <a class="left carousel-control" href="#myCarousel" data-slide="prev">
            <span class="glyphicon glyphicon-chevron-left"></span>
            <span class="sr-only">Previous</span>
          </a>
          <a class="right carousel-control" href="#myCarousel" data-slide="next">
            <span class="glyphicon glyphicon-chevron-right"></span>
            <span class="sr-only">Next</span>
          </a>
        </div>
    </div>
    <div class="container col-xs-12 " style="background-image:url(https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRjq5DimfXTTq8Dbip8SVNOMw95nvfeaDpl1bkOjhKySmb0Oo_R) ; background-size: cover;background-repeat: no-repeat;width: 100%;height: auto;">
      <div class="row col-md-12 col-xs-12 col-sm-12">
        <h1 class="text-center" style="color: white;font-size: 40px; padding-top:30px;font-family: 'Open Sans', sans-serif;">Order Now</h1>
      </div><br><br>
      <div class="row" style="margin-top: 100px;">
        <div class="col-md-4 col-sm-12 col-xs-12 text-center " >
            <a href="journals.php"><img class="order" src="images/5.jpg" alt="Nature" style="height: 150px;width: 230px;padding: 10px;"></a>
            <br><br><br>
            <p style="color: white;">
              <span style="font-size: 20px;margin-bottom: 30px;">Journals</span>
              <br><br>
              A written record of what you have done each day, sometimes including your private thoughts and feelings.

            </p>
          
        </div>
        <div class="col-md-4 col-sm-12 col-xs-12 text-center ">
          <a href="novels.php"><img class="order" src="images/4.jpg" alt="Nature" style="height: 150px;width: 230px;padding: 10px;"></a>
          <br><br><br>
          <p style="color: white;">
              <span style="font-size: 20px;margin-bottom: 30px;">Novels</span>
              <br><br>
             A novel is any relatively long work of narrative fiction, normally in prose, and typically published as a book.
          </p>
        </div>
        <div class="col-md-4 col-sm-12 col-xs-12 text-center ">
            <a href="magazines.php"><img class="order" src="images/6.jpg" alt="Nature" style="height: 150px;width: 230px;padding: 10px;"></a>
            <br><br><br>
            <p style="color: white;">
              <span style="font-size: 20px;margin-bottom: 30px;">Magazines</span>
              <br><br>
            Magazines are generally published on a regular schedule and contain a variety of content. 
            </p>
        </div>        
      </div>
      <br><br>
    </div>
    <div class="container" style="background-color: #202020;width: 100%;padding-bottom: 50px;">
      <div class="row col-md-12 col-xs-12 col-sm-12">
        <center>
      <button id="btn1" onclick="myFunction()" class="btn btn-info text-center btn1">PopularBooks</button>
      <button id="btn2" onclick="myFunction1()" class="btn btn-sucess text-center btn1">Trending Books</button>
      <button id="btn3" onclick="myFunction2()" class="btn btn-warning text-center btn1">Latest Books</button>
      <button id="btn4" onclick="myFunction3()" class="btn btn-danger text-center btn1">MyBooks</button>
      
      </center>
      <br><br></div>
      <div id="panel1" class="text-center">
        <center>
          <h1>Popular Books</h1>
          <br>
          <div class="col-md-3 col-sm-3 col-xs-12 text-center ">
          <a href="menu_list.html"><img class="order" src="images/b1.jpg" alt="Cake" style="height: 230px;width: 290px;padding: 15px;"></a>
          <br>
          <h4 style="color: white;">
              One Indian Girl 
              <br><br>
          </h4>
              
      </div>
      <div class="col-md-3 col-sm-3 col-xs-12 text-center ">
          <a href="menu_list.html"><img class="order" src="images/b2.jpg" alt="Cake" style="height: 230px;width: 290px;padding: 15px;"></a>
          <br>
          <h4 style="color: white;">
              2 States 
              <br><br>
          </h4>
              
      </div>
      <div class="col-md-3 col-sm-3 col-xs-12 text-center ">
          <a href="menu_list.html"><img class="order" src="images/b3.jpg" alt="Cake" style="height: 230px;width: 290px;padding: 15px;"></a>
          <br>
          <h4 style="color: white;">
              Making India Awesome 
              <br><br>
          </h4>
              
      </div>
      <div class="col-md-3 col-sm-3 col-xs-12 text-center ">
          <a href="menu_list.html"><img class="order" src="images/b4.jpg" alt="Cake" style="height: 230px;width: 290px;padding: 15px;"></a>
          <br>
          <h4 style="color: white;">
              What Young India Wants 
              <br><br>
          </h4>
              
      </div>
      <div class="col-md-3 col-sm-3 col-xs-12 text-center ">
          <a href="menu_list.html"><img class="order" src="images/b16.jpg" alt="Cake" style="height: 230px;width: 290px;padding: 15px;"></a>
          <br>
          <h4 style="color: white;">
              The Cold Now Where
              <br><br>
          </h4>
              
      </div>
      <div class="col-md-3 col-sm-3 col-xs-12 text-center ">
          <a href="menu_list.html"><img class="order" src="images/b15.jpg" alt="Cake" style="height: 230px;width: 290px;padding: 15px;"></a>
          <br>
          <h4 style="color: white;">
              Books For Living
              <br><br>
          </h4>
              
      </div>
      <div class="col-md-3 col-sm-3 col-xs-12 text-center ">
          <a href="menu_list.html"><img class="order" src="images/b14.jpg" alt="Cake" style="height: 230px;width: 290px;padding: 15px;"></a>
          <br>
          <h4 style="color: white;">
              The Fallen
              <br><br>
          </h4>
              
      </div>
      <div class="col-md-3 col-sm-3 col-xs-12 text-center ">
          <a href="menu_list.html"><img class="order" src="images/b13.jpg" alt="Cake" style="height: 230px;width: 290px;padding: 15px;"></a>
          <br>
          <h4 style="color: white;">
              Build To Last 
              <br><br>
          </h4>
              
      </div>
        </center>
      </div>  
    <div id="panel2" class="text-center">
      
        <center>
          
          <h1>Trending Books</h1>
          <br>
          <div class="col-md-3 col-sm-3 col-xs-12 text-center ">
          <a href="menu_list.html"><img class="order" src="images/b5.jpg" alt="Cake" style="height: 230px;width: 290px;padding: 15px;"></a>
          <br>
          <h4 style="color: white;">
             Revolution 2020
              <br><br>
          </h4>
              
      </div>
      <div class="col-md-3 col-sm-3 col-xs-12 text-center ">
          <a href="menu_list.html"><img class="order" src="images/b6.jpg" alt="Cake" style="height: 230px;width: 290px;padding: 15px;"></a>
          <br>
          <h4 style="color: white;">
              A Cold Death In Amsterdam
              <br><br>
          </h4>
              
      </div>
      <div class="col-md-3 col-sm-3 col-xs-12 text-center ">
          <a href="menu_list.html"><img class="order" src="images/b7.jpg" alt="Cake" style="height: 230px;width: 290px;padding: 15px;"></a>
          <br>
          <h4 style="color: white;">
             Brave
              <br><br>
          </h4>
              
      </div>
      <div class="col-md-3 col-sm-3 col-xs-12 text-center ">
          <a href="menu_list.html"><img class="order" src="images/b8.jpg" alt="Cake" style="height: 230px;width: 290px;padding: 15px;"></a>
          <br>
          <h4 style="color: white;">
              Ranger In Time
              <br><br>
          </h4>
              
      </div>
        </center>
      </div>  
    <div id="panel3" class="text-center">
        <center>
          
          <h1>Latest Books</h1>
          <br>
          <div class="col-md-3 col-sm-3 col-xs-12 text-center ">
          <a href="menu_list.html"><img class="order" src="images/b9.jpg" alt="Cake" style="height: 230px;width: 290px;padding: 15px;"></a>
          <br>
          <h4 style="color: white;">
              Big Magic
              <br><br>
          </h4>
              
      </div>
      <div class="col-md-3 col-sm-3 col-xs-12 text-center ">
          <a href="menu_list.html"><img class="order" src="images/b10.jpg" alt="Cake" style="height: 230px;width: 290px;padding: 15px;"></a>
          <br>
          <h4 style="color: white;">
              The Sunshine Sisters 
              <br><br>
          </h4>
              
      </div>
      <div class="col-md-3 col-sm-3 col-xs-12 text-center ">
          <a href="menu_list.html"><img class="order" src="images/b11.jpg" alt="Cake" style="height: 230px;width: 290px;padding: 15px;"></a>
          <br>
          <h4 style="color: white;">
              The Princess And The Pearl
              <br><br>
          </h4>
              
      </div>
      <div class="col-md-3 col-sm-3 col-xs-12 text-center ">
          <a href="menu_list.html"><img class="order" src="images/b12.jpg" alt="Cake" style="height: 230px;width: 290px;padding: 15px;"></a>
          <br>
          <h4 style="color: white;">
              Selection Day
              <br><br>
          </h4>
              
      </div>
        </center>
      </div>  
    <div id="panel4" class="text-center">
        <center>
          <table>
            <tr>
              <th>S.No</th>
              <th>Book Id</th>
              <th>Book Name</th>
              <th>Author Name</th>
              <th>Date Of Order</th>
              <th>Status</th>
        <?php 
        $name=$_SESSION['username'];
        $sql= mysqli_query($con,"SELECT * FROM orderedbooks WHERE mainname='$name'");
        while($result=mysqli_fetch_object($sql)) {
         ?>
              </tr>
            <tr>
              <td><?php  echo $result->id ;?></td>
              <td><?php  echo $result->bookid; ?></td>
              <td><?php  echo $result->bookname ;?></td>
              <td><?php  echo $result->authorname ;?></td>
              <td><?php  echo $result->timestamp ;?></td>
              <td><?php  echo $result->status ;}?></td>
            </tr>
          </table>
        </center>
      
      <br><br>
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
                    <p><a href="#">Terms & Conditions</a></p>
                    <p><a href="#">Refund & Cancellation</a></p>
                    <p><a href="#">Privacy Policy</a></p>
                    <p><a href="#">Offer Terms</a></p>
                </div>
                <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mb-r">
                    <h5 class="title font-bold"><strong>Profile</strong></h5>
                    <hr class="deep-purple accent-2 mb-4 mt-0 d-inline-block mx-auto" style="width: 60px;">
                    <p><a href="#">Your Account</a></p>
                    <p><a href="#">Become an Affiliate</a></p>
                    <p><a href="#">Shipping Rates</a></p>
                    <p><a href="#">Help</a></p>
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
    <script type="text/javascript">
    function myFunction() {
      document.getElementById("panel1").style.display = "block";
      document.getElementById("panel2").style.display = "none";
      document.getElementById("panel3").style.display = "none";
      document.getElementById("panel4").style.display = "none";
      
    }
    function myFunction1() {
      document.getElementById("panel1").style.display = "none";
      document.getElementById("panel2").style.display = "block";
      document.getElementById("panel3").style.display = "none";
      document.getElementById("panel4").style.display = "none";
    }

    function myFunction2() {
      document.getElementById("panel1").style.display = "none";
      document.getElementById("panel2").style.display = "none";
      document.getElementById("panel3").style.display = "block";
      document.getElementById("panel4").style.display = "none";
    }

    function myFunction3() {
      document.getElementById("panel1").style.display = "none";
      document.getElementById("panel2").style.display = "none";
      document.getElementById("panel3").style.display = "none";
      document.getElementById("panel4").style.display = "block";
    }
  </script>
</body>
</html>
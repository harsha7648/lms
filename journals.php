<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="jQuery Responsive Carousel - Owl Carusel">
    <meta name="author" content="Bartosz Wojciechowski">
    <link rel="shortcut icon" href="images/icon.png" />  
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400italic,400,300,600,700' rel='stylesheet' type='text/css'>
    <link href="assets/css/bootstrapTheme.css" rel="stylesheet">
    <link href="assets/css/custom.css" rel="stylesheet">
  <!-- Owl Carousel Assets -->
    <link href="owl-carousel/owl.carousel.css" rel="stylesheet">
    <link href="owl-carousel/owl.theme.css" rel="stylesheet">
   <!-- Prettify -->
    <link href="assets/js/google-code-prettify/prettify.css" rel="stylesheet">
    <!-- Le fav and touch icons -->
    <link rel="shortcut icon" href="../assets/ico/favicon.png">
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/styles.css">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="css/navbar-fixed-side.css" rel="stylesheet" />
     <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
      <!-- Include all compiled plugins (below), or include individual files as needed -->
      <script src="js/bootstrap.js"></script>                              
    <title>Journals</title>
     <script>
    $(document).ready(function() {
      $("#owl-demo").owlCarousel({

      autoPlay: 3000,

      items : 4,
      itemsDesktop : [1199,3],
      itemsDesktopSmall : [979,3]

      });

    });

    $(document).ready(function () {
    $(document).on("scroll", onScroll);
    
    //smoothscroll
    $('a[href^="#"]').on('click', function (e) {
        e.preventDefault();
        $(document).off("scroll");
        
        $('a').each(function () {
            $(this).removeClass('active');
        })
        $(this).addClass('active');
      
        var target = this.hash,
            menu = target;
        $target = $(target);
        $('html, body').stop().animate({
            'scrollTop': $target.offset().top+2
        }, 500, 'swing', function () {
            window.location.hash = target;
            $(document).on("scroll", onScroll);
        });
    });
});

$('#nav nav a').on('click', function(event) {
    $(this).parent().find('a').removeClass('active');
    $(this).addClass('active');
});

$(window).on('scroll', function() {
    $('.target').each(function() {
        if($(window).scrollTop() >= $(this).offset().top-300) {
            var id = $(this).attr('id');
            $('#nav nav a').removeClass('active');
            $('#nav nav a[href=#'+ id +']').addClass('active');
        }
    });
});
    </script>




<style>

#menu-center {
    margin: 0 auto;
}
#menu-center ul {
    margin: 15px 0 0 0;
    float: none;
}
#menu-center ul li {
    list-style: none;
    margin: 0 30px 0 0;
    display: block;

}
#menu-center .active {
    font-family:'Droid Sans', serif;
    font-size: 25px;
    color: orange;
    text-decoration: none;
    line-height: 50px;
}
#menu-center a {
    font-family:'Droid Sans', serif;
    font-size: 25px;
    color: white;
    text-decoration: none;
    line-height: 50px;
}


    #owl-demo .item{
        margin: 3px;
    }
    #owl-demo .item img{
        display: block;
        width: 100%;
        height: 250px;
    }
    .zoom:hover{
      transform:scale(1.1);
    }
    .navbar-fixed-side {
  width: 100%;
  position: fixed;
  border-radius: 0;
  height: 100%;
}
#main {
    width: 100%;
    float: right;
}

#main div.target:nth-child(even) {
    background: #eee;
}

#nav {
    width: 100%;
    height: 100%;
    position: relative;
}

#nav nav {
    position: fixed;
    width: 25%;
}

#nav a {
   
    color: #fff;
    display: block;
    padding: 15px;
    text-align: center;
    text-decoration: none;
}

#nav a:hover, #nav a.active {
    background: #666;
    color: orange;
    font-size: 24px;
}
</style>
  </head>
  <body style="background-color: #000;">
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
          <ul class="nav navbar-nav" style="margin-top: 4px;">
            <li class="active"><a href="home.php">Home</a></li>
            <li ><a href="aboutus.php">About Us</a></li>
            <li ><a href="orderbook.php">Order Book</a></li>
            <li><a href="fine.php">Fine Details</a></li>
            <li><a href="report.php">Report</a></li>
            <li><a href="profile.php">My Profile</a></li>
            <li><a href="bookslist.php">Books List</a></li>
          </ul>
          <form class="navbar-form navbar-left" role="search">
            <div class="form-group">
              <input type="text" class="form-control" style="height: 30px;margin-top: -2px;" placeholder="Search">
            </div>
            <button type="submit" class="btn btn-info" style="margin-top: -2px;">Submit</button>
          </form>
          <ul class="nav navbar-nav navbar-right">
            <!-- <li style="color: white;"><?php print_r( $name ); ?></li> -->
            <li><a href="logout.php"><button class="btn btn-warning" style="margin-right:20px;margin-top: 0px;"  >Logout</button></a></li>
          </ul>
        </div><!-- /.navbar-collapse -->
      </div><!-- /.container-fluid -->
    </nav>
    
    <div id="demo" style="margin-top: -10px;">
        <div class="container-fluid" style="width: 100%; background-color:#222222;">
          <div class="row">
            <br><br><br><br><br>
          <div class="col-md-12">
        <div id="owl-demo" class="owl-carousel owl-theme">
                <div class="item"><a  href=""><img class="zoom" src="images/pd4.jpg" alt="Image"></a></div>
                <div class="item"><a  href=""><img class="zoom" src="images/nj3.jpg" alt="Image"></a></div>
                <div class="item"><a  href=""><img class="zoom" src="images/gj6.jpg" alt="Image"></a></div>
                <div class="item"><a  href=""><img class="zoom" src="images/pd6.jpg" alt="Image"></a></div>
                <div class="item"><a  href=""><img class="zoom" src="images/pd3.jpg" alt="Image"></a></div>
                <div class="item"><a  href=""><img class="zoom" src="images/nj2.jpg" alt="Image"></a></div>
                <div class="item"><a  href=""><img class="zoom" src="images/gj4.jpg" alt="Image"></a></div>
                <div class="item"><a  href=""><img class="zoom" src="images/tj2.jpg" alt="Image"></a></div>
                <div class="item"><a  href=""><img class="zoom" src="images/nj6.jpg" alt="Image"></a></div>
                <div class="item"><a  href=""><img class="zoom" src="images/gj2.jpg" alt="Image"></a></div>
                <div class="item"><a  href=""><img class="zoom" src="images/tj3.jpg" alt="Image"></a></div>
                <div class="item"><a  href=""><img class="zoom" src="images/pd2.jpg" alt="Image"></a></div>
                <div class="item"><a  href=""><img class="zoom" src="images/gj1.jpg" alt="Image"></a></div>
                <div class="item"><a  href=""><img class="zoom" src="images/nj7.jpg" alt="Image"></a></div>
                <div class="item"><a  href=""><img class="zoom" src="images/nj1.jpg" alt="Image"></a></div>
                <div class="item"><a  href=""><img class="zoom" src="images/pd8.jpg" alt="Image"></a></div>
              </div>
            </div>
          </div>
        </div>
       </div> 


    <div class="container" style="background-color: #000;width: 100%;">
      <div class="container-fluid">
        <div class="row">
          <div class="col-sm-3 col-lg-3">
              <aside id="nav" class="navbar navbar-inverse navbar-fixed-side text-center" style="background: transparent;" >
                    <nav>
                        <a href="#1" class="active">Recommended</a>
                        <a href="#2">Gratitude Journal</a>
                        <a href="#3">Personal Development Journals </a>
                        <a href="#4">Travel Journal</a>
                        <a href="#5">Nature Journal</a>
                    </nav>
                </aside>
                             
            
          </div>
          <div class="col-sm-9 col-lg-9" style="height: auto;">
            
            <section id="main">
            
            <h1 class="text-center" style="color: white;font-size: 40px; padding-top:30px;font-family: 'Open Sans', sans-serif;">Journals</h1>
            
          <div class="row">
            <h2 class="text-center pull-left target " id="1" style="color: white; padding-top:30px;font-family: 'Open Sans', sans-serif;padding-left: 20px;">Recommended</h2><br><br><br><br><br><br>
            <div class="col-md-4 col-sm-4 col-xs-12 text-center ">
          <a href="menu_list.html"><img class="order" src="images/gj6.jpg" alt="Cake" style="height: 200px;width: 280px;padding: 20px;"></a>
          <br>
          <h4 style="color: white;">
              Buddha's Gratitude 
              <br><br>
          </h4>
              
      </div>
      <div class="col-md-4 col-sm-4 col-xs-12 text-center ">
          <a href="menu_list.html"><img class="order" src="images/pd3.jpg" alt="Cake" style="height: 200px;width: 280px;padding: 20px;"></a>
          <br>
          <h4 style="color: white;">
              Rise & Shine
              <br><br>
          </h4>
              
      </div>
      <div class="col-md-4 col-sm-4 col-xs-12 text-center ">
          <a href="menu_list.html"><img class="order" src="images/gj7.jpg" alt="Cake" style="height: 200px;width: 280px;padding: 20px;"></a>
          <br>
          <h4 style="color: white;">
              Choose Faith 
              <br><br>
          </h4>
              
      </div><div class="col-md-4 col-sm-4 col-xs-12 text-center ">
          <a href="menu_list.html"><img class="order" src="images/pd5.jpg" alt="Cake" style="height: 200px;width: 280px;padding: 20px;"></a>
          <br>
          <h4 style="color: white;">
              The Garden Journey 
              <br>
          </h4>
              
      </div>
      
          </div>
          <div class="row">
            <h2 class="text-center pull-left target" id="2" style="color: white; padding-top:30px;font-family: 'Open Sans', sans-serif;padding-left: 20px;">Gratitude Journals</h2><br><br><br><br><br><br>
             <?php 
                  include('connect.php');
                  $sql=mysqli_query($con,'SELECT * FROM bookslist WHERE category="Journals"&& sub_category="Gratitude Journal"');
                  var_dump($sql);
                  while ($row=mysqli_fetch_array($sql)) {
               ?>    
              <div class="col-md-4 col-sm-4 col-xs-12 text-center ">
                <a href="orderbookclick.php?bookid=<?php echo $row['book_id']; ?>&&bookname=<?php echo $row['bookname'];?>&&authorname=<?php echo $row['authorname']; ?>"><img class="order" src='<?php echo $row['image']; ?>' alt="<?php echo $row['bookname']; ?>" style="height: 200px;width: 280px;padding: 20px;""></a>
                <br>
                <h4 style="color: white;">
                    <?php echo $row['bookname']; ?> 
                    <br><br>
                </h4>
              </div>
                <?php } ?>

          </div>
        

          <div class="row">
            <h2 class="text-center pull-left target" id="3" style="color: white; padding-top:30px;font-family: 'Open Sans', sans-serif;padding-left: 20px;">Personal Development Journals</h2><br><br><br><br><br><br>
            <?php 
                  $sql=mysqli_query($con,'SELECT * FROM bookslist WHERE category="Journals"&& sub_category="Personal development Journals"');
                  var_dump($sql);
                  while ($row=mysqli_fetch_array($sql)) {
               ?>    
              <div class="col-md-4 col-sm-4 col-xs-12 text-center ">
                <a href="orderbookclick.php?bookid=<?php echo $row['book_id']; ?>&&bookname=<?php echo $row['bookname'];?>&&authorname=<?php echo $row['authorname']; ?>"><img class="order" src='<?php echo $row['image']; ?>' alt="<?php echo $row['bookname']; ?>" style="height: 200px;width: 280px;padding: 20px;""></a>
                <br>
                <h4 style="color: white;">
                    <?php echo $row['bookname']; ?> 
                    <br><br>
                </h4>
              </div>
                <?php } ?>            
            
          </div><br><br>
          <div class="row">
            <h2 class="text-center pull-left target" id="4" style="color: white; padding-top:30px;font-family: 'Open Sans', sans-serif;padding-left: 20px;">Travel Journal</h2><br><br><br><br><br><br>
             <?php 
                  $sql=mysqli_query($con,'SELECT * FROM bookslist WHERE category="Journals"&& sub_category="Travel Journals"');
                  var_dump($sql);
                  while ($row=mysqli_fetch_array($sql)) {
               ?>    
              <div class="col-md-4 col-sm-4 col-xs-12 text-center ">
                <a href="orderbookclick.php?bookid=<?php echo $row['book_id']; ?>&&bookname=<?php echo $row['bookname'];?>&&authorname=<?php echo $row['authorname']; ?>"><img class="order" src='<?php echo $row['image']; ?>' alt="<?php echo $row['bookname']; ?>" style="height: 200px;width: 280px;padding: 20px;""></a>
                <br>
                <h4 style="color: white;">
                    <?php echo $row['bookname']; ?> 
                    <br><br>
                </h4>
              </div>
                <?php } ?>  
           
          </div>
          <div class="row">

                <h2 class="text-center pull-left target" id="5" style="color: white; padding-top:30px;font-family: 'Open Sans', sans-serif;padding-left: 20px;">Nature Journal</h2><br><br><br><br><br><br>
                <?php 
                  $sql=mysqli_query($con,'SELECT * FROM bookslist WHERE category="Journals"&& sub_category="Nature Journal"');
                  var_dump($sql);
                  while ($row=mysqli_fetch_array($sql)) {
               ?>    
              <div class="col-md-4 col-sm-4 col-xs-12 text-center ">
                <a href="orderbookclick.php?bookid=<?php echo $row['book_id']; ?>&&bookname=<?php echo $row['bookname'];?>&&authorname=<?php echo $row['authorname']; ?>"><img class="order" src='<?php echo $row['image']; ?>' alt="<?php echo $row['bookname']; ?>" style="height: 200px;width: 280px;padding: 20px;""></a>
                <br>
                <h4 style="color: white;">
                    <?php echo $row['bookname']; ?> 
                    <br><br>
                </h4>
              </div>
                <?php } ?>  
                
              
          </div><br><br>
              
    </div>
          
</section>
        </div>
      </div>
    </div>

 </div> 
    


    <script src="assets/js/jquery-1.9.1.min.js"></script> 
    <script src="owl-carousel/owl.carousel.js"></script>
    <script src="assets/js/bootstrap-collapse.js"></script>
    <script src="assets/js/bootstrap-transition.js"></script>
    <script src="assets/js/bootstrap-tab.js"></script>

    <script src="assets/js/google-code-prettify/prettify.js"></script>
  <script src="assets/js/application.js"></script>

</body>
</html>
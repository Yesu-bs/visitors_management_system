
<?php
include("include\dbconnect.php"); 
extract($_POST);
 session_start();
 $un=$_SESSION['un'];
 if(isset($btn))
{
$reason=$_REQUEST['reason'];
$date=$_REQUEST['date'];
 $sql = "SELECT id FROM user_request order by id ASC";

 $sid=0;
  $result = $conn->query($sql);
  while($row = $result->fetch_assoc()) 
  {
       $sid=$row['id'];
  }
    $sid=$sid+1;
    
   $qrys1="insert into user_request values($sid,'$un','$reason','$date','0','0')";
  if ($conn->query($qrys1) === TRUE) {
  ?>
<script language="javascript" type="text/javascript">
alert("Request Send Successfully");
window.location.href="visitor_home.php";
</script>
<?php   
 }
 else
{
    
?>
<script language="javascript" type="text/javascript">
alert("Failed");
 
</script>
<?php 
}
$conn->close();

}
?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title></title>
    
    <link href="https://fonts.googleapis.com/css2?family=Kumbh+Sans:wght@300;400;700&display=swap" rel="stylesheet">

    <!-- Template CSS -->
    <link rel="stylesheet" href="assets/css/style-starter.css">
  </head>
  <body>
<header id="site-header" class="fixed-top">
  <section class="w3l-header-4">
      <div class="container">
          <nav class="navbar navbar-expand-lg navbar-light">
              <h1><a class="navbar-brand" href="#">
                     Visitors Management
                  </a></h1>
              <button class="navbar-toggler collapsed" type="button" data-toggle="collapse" data-target="#navbarNav"
                  aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                  <span class="fa icon-expand fa-bars"></span>
                  <span class="fa icon-close fa-times"></span>
              </button>

              <div class="collapse navbar-collapse" id="navbarNav">
                  <ul class="navbar-nav">
                     <li class="nav-item @@about__active">
                          <a class="nav-link" href="visitor_home.php">Home </a>
                    </li>
					 <li class="nav-item active ">
                          <a class="nav-link" href="visitor_request.php">Request</a>
                    </li>
                      <li class="nav-item @@about__active ">
                          <a class="nav-link" href="visitor_pass.php">Pass</a>
                      </li>
                     
					  <li class="nav-item @@services__active">
                          <a class="nav-link" href="index.php">Logout</a>
                      </li>
					  
                  </ul>
                 

                  <!-- //toggle switch for light and dark theme -->
                  <!-- search popup -->
              
                  <!-- /search popup -->
              </div>
              <!-- toggle switch for light and dark theme -->
             
          </nav>
      </div>
  </section>
</header>
<section class="w3l-about-breadcrumb">
    <div class="breadcrumb-bg breadcrumb-bg-about py-5">
        <div class="container py-lg-5 py-md-3">
           
        </div>
    </div>
</section>
<p>
  <!-- about block1 -->
  <!-- //about block1 -->
  <!-- about block -->
  <!-- //about block -->
  <!-- stats -->
  <!-- //stats -->
  <!-- footer -->
</p>
<p>&nbsp;</p>
<div class="tittle_head_w3ls">
				<h3 align="center" class="tittle three">Request</h3>
  </div>
 <form name="form1" method="post" action="">
   <table width="121" height="127" align="center">
      <tr>
        <td>Visitor </td>
        <td><?php echo $un;?></td>
      </tr>
      <tr>
        <td>Reason</td>
        <td> 
          <input name="reason" type="text" id="reason" required="">
       </td>
      </tr>
      <tr>
        <td>Date</td>
        <td><input name="date" type="date" id="date" required=""></td>
      </tr>
      <tr>
        <td>&nbsp;</td>
        <td> 
          <input name="btn" type="submit" id="btn" value="Submit">
         </td>
      </tr>
   </table>
 </form>
<!-- //footer -->
<!-- copyright -->
<div class="cpy-right text-center py-4">
  <p>All rights reserved | Design by <a href="#"> Admin.</a> </p>
</div>
<!-- //copyright -->

<!-- move top -->
<button onClick="topFunction()" id="movetop" title="Go to top">
  <span class="fa fa-level-up" aria-hidden="true"></span>
</button>
<script>
  // When the user scrolls down 20px from the top of the document, show the button
  window.onscroll = function () {
    scrollFunction()
  };

  function scrollFunction() {
    if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
      document.getElementById("movetop").style.display = "block";
    } else {
      document.getElementById("movetop").style.display = "none";
    }
  }

  // When the user clicks on the button, scroll to the top of the document
  function topFunction() {
    document.body.scrollTop = 0;
    document.documentElement.scrollTop = 0;
  }
</script>
<!-- /move top -->

<!--  javascripts file here -->
<script src="assets/js/jquery-3.3.1.min.js"></script>
<script src="assets/js/jquery-1.9.1.min.js"></script>

<script src="assets/js/theme-change.js"></script> <!-- //light and dark mode switch js -->
<!-- responsive tabs -->
<script src="assets/js/easyResponsiveTabs.js"></script>

<!--Plug-in Initialisation-->
<script type="text/javascript">
  $(document).ready(function () {
    //Horizontal Tab
    $('#parentHorizontalTab').easyResponsiveTabs({
      type: 'default', //Types: default, vertical, accordion
      width: 'auto', //auto or any width like 600px
      fit: true, // 100% fit in a container
      tabidentify: 'hor_1', // The tab groups identifier
      activate: function (event) { // Callback function if tab is switched
        var $tab = $(this);
        var $info = $('#nested-tabInfo');
        var $name = $('span', $info);
        $name.text($tab.text());
        $info.show();
      }
    });
  });
</script>
<script type="text/javascript">
  $(document).ready(function () {
    //Horizontal Tab
    $('#parentHorizontalTab1').easyResponsiveTabs({
      type: 'default', //Types: default, vertical, accordion
      width: 'auto', //auto or any width like 600px
      fit: true, // 100% fit in a container
      tabidentify: 'hor_2', // The tab groups identifier
      activate: function (event) { // Callback function if tab is switched
        var $tab = $(this);
        var $info = $('#nested-tabInfo');
        var $name = $('span', $info);
        $name.text($tab.text());
        $info.show();
      }
    });
  });
</script>

<!-- owl carousel -->
<script src="assets/js/owl.carousel.js"></script>
<!-- script for banner slider-->
<script>
  $(document).ready(function () {
    $('.owl-one').owlCarousel({
      loop: true,
      margin: 0,
      nav: false,
      responsiveClass: true,
      autoplay: true,
      autoplayTimeout: 5000,
      autoplaySpeed: 1000,
      autoplayHoverPause: false,
      responsive: {
        0: {
          items: 1
        },
        480: {
          items: 1
        },
        667: {
          items: 1
        },
        1000: {
          items: 1
        }
      }
    })
  })
</script>
<!-- //script -->
<!-- owl carousel -->
<!-- script for tesimonials carousel slider -->
<script>
  $(document).ready(function () {
    $("#owl-demo1").owlCarousel({
      loop: true,
      nav: false,
      responsiveClass: true,
      responsive: {
        0: {
          items: 1,
          nav: false
        },
        736: {
          items: 1,
          nav: false
        }
      }
    })
  })
</script>
<!-- //script for tesimonials carousel slider -->

<!-- disable body scroll which navbar is in active -->
<script>
  $(function () {
    $('.navbar-toggler').click(function () {
      $('body').toggleClass('noscroll');
    })
  });
</script>
<!-- disable body scroll which navbar is in active -->

<!--/MENU-JS-->
<script>
  $(window).on("scroll", function () {
    var scroll = $(window).scrollTop();

    if (scroll >= 80) {
      $("#site-header").addClass("nav-fixed");
    } else {
      $("#site-header").removeClass("nav-fixed");
    }
  });

  //Main navigation Active Class Add Remove
  $(".navbar-toggler").on("click", function () {
    $("header").toggleClass("active");
  });
  $(document).on("ready", function () {
    if ($(window).width() > 991) {
      $("header").removeClass("active");
    }
    $(window).on("resize", function () {
      if ($(window).width() > 991) {
        $("header").removeClass("active");
      }
    });
  });
</script>
<!--//MENU-JS-->

<script src="assets/js/bootstrap.min.js"></script><!-- //bootstrap js -->

</body>

</html>
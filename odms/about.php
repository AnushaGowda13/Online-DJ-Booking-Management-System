<?php
session_start();
error_reporting(0);

include('includes/dbconnection.php');
?>
<!DOCTYPE html>
<html>
<head>
<title>Dance music DJ/Producer-Always cracking jokes!|| About Us</title>
<link href="css/bootstrap.css" rel='stylesheet' type='text/css' />
<!-- Custom Theme files -->
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
<link rel="stylesheet" href="css/touchTouch.css" type="text/css" media="all" />
<!-- Custom Theme files -->
<script src="js/jquery.min.js"></script>
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!--webfont-->
<link href='http://fonts.googleapis.com/css?family=Monoton' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Raleway' rel='stylesheet' type='text/css'>
<!---//End-css-style-switecher----->
<script type="text/javascript" src="js/jquery.fancybox.js"></script>
		<link rel="stylesheet" type="text/css" href="css/jquery.fancybox.css" media="screen" />
	   <script type="text/javascript">
			$(document).ready(function() {
				/*
				 *  Simple image gallery. Uses default settings
				 */

				$('.fancybox').fancybox();

			});
		</script>

</head>
<body>
<!---->
<?php include_once('includes/header.php');?>
<div class="about content">
	 <div class="container"> 		 
		 <ol class="breadcrumb">
		  <li><a href="index.php">Home</a></li>
		  <li class="active">About</li>	  
		 </ol>
		 <?php
$sql="SELECT * from tblpage where PageType='aboutus'";
$query = $dbh -> prepare($sql);
$query->execute();
$results=$query->fetchAll(PDO::FETCH_OBJ);

$cnt=1;
if($query->rowCount() > 0)
{
foreach($results as $row)
{               ?>
		 <h2><?php  echo htmlentities($row->PageTitle);?></h2>
		 <div class="about-main">
			 <div class="col-md-6 abt-pic">
				 <img src="images/abt.png" class="img-responsive" alt=""/>
			 </div>
			 <div class="col-md-6 abt-pic-info">
				 
				 <p style="color:#fff"><?php  echo $row->PageDescription;?>.</p>
				
			 </div>
			 <?php $cnt=$cnt+1;}} ?>
			 <div class="clearfix"></div>
		 </div>
	
		 <div class="latest">
			 <h3>LATEST PHOTOS</h3>		
			 <div class="pic start">
				 <a class="fancybox" href="images/100.png" data-fancybox-group="gallery" title="Lorem ipsum dolor sit amet"><img src="images/4.jpg" class="img-style row6" alt=""><span> </span></a>	
				 <h4><a href="event.html">railblazer in Indian EDM: </a></h4>
				 <p>Revolutionized Indian electronic dance music by blending traditional Indian sounds with modern EDM.</p>
			 </div>
			 <div class="pic">
				 <a class="fancybox" href="images/5.jpeg" data-fancybox-group="gallery" title="Lorem ipsum dolor sit amet"><img src="images/5.jpg" class="img-style row6" alt=""><span> </span></a>	
				 <h4><a href="event.html">Award-Winning Albums</a></h4>
				 <p>Bass Rani: Gained massive popularity and established him as a household name</p>
			 </div>
			 <div class="pic">
				 <a class="fancybox" href="images/6.jpg" data-fancybox-group="gallery" title="Lorem ipsum dolor sit amet"><img src="images/6.jpg" class="img-style row6" alt=""><span> </span></a>	
				 <h4><a href="event.html">Global Recognition</a></h4>
				 <p>Played at international festivals like Glastonbury, Electric Daisy Carnival, and Sunburn.</p>
			 </div>
			 <div class="pic">
				 <a class="fancybox" href="images/7.jpg" data-fancybox-group="gallery" title="Lorem ipsum dolor sit amet"><img src="images/7.jpg" class="img-style row6" alt=""><span> </span></a>	
				 <h4><a href="event.html">Film Contributions</a></h4>
				 <p>Created soundtracks and background scores for Bollywood films, bringing his unique sound to mainstream cinema.</p>
			 </div>
			 <div class="pic">
				 <a class="fancybox" href="images/8.jpg" data-fancybox-group="gallery" title="Lorem ipsum dolor sit amet"><img src="images/8.jpg" class="img-style row6" alt=""><span> </span></a>	
				 <h4><a href="event.html">Collaborations</a></h4>
				 <p>Worked with artists across genres, including Divine, Ritviz, and Papon.</p>
			 </div>
			 <div class="clearfix"></div>
		 </div>
		<?php include_once('includes/footer.php');?>
	 </div>
</div>
<!---->

<!---->
</body>
</html>
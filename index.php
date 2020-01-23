<!DOCTYPE html>
<html lang="en"><!-- InstanceBegin template="/Templates/temp.dwt" codeOutsideHTMLIsLocked="false" -->
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="file:///E|/favicon.ico">
    <!-- InstanceBeginEditable name="doctitle" -->
    <title>Allahabad Advance Agri solutions (A3S)</title>
    <!-- InstanceEndEditable -->
    <!-- Bootstrap core CSS -->
  <link href="css/bootstrap.min.css" rel="stylesheet">
  <link href="css/mycss.css" rel="stylesheet">
<!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
    <script src="/ie-emulation-modes-warning.js"></script>
    <script src="js/jquery.min.js"></script>
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

    <!-- Custom styles for this template -->
    <!-- InstanceBeginEditable name="head" --><!-- InstanceEndEditable -->
</head>
<!-- NAVBAR
================================================== -->
  <body>
  <div class="row menu-bg">
<div class="container">
<img src="images/header.jpg" class="img-responsive">
</div>
</div>  
  <div class="row menu-bg">
<div class="container">

      <!-- Static navbar -->
    <nav class="navbar navbar-inverse">
        <div class="container-fluid">
          <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
              <span class="sr-only">Toggle navigation</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
          </div>
          <div id="navbar" class="navbar-collapse collapse">
            <ul class="nav navbar-nav">
              <li><a href="index.php">Home</a></li>
              <li><a href="about.html">About</a></li>
              <li><a href="vision.html">Vision</a></li>
              <li><a href="management.html">Management</a></li>
              <li><a href="advisory.html">Advisory Board</a></li>
              <li><a href="gallery.html">Photo Gallery</a></li>
              <!--<li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Activities <span class="caret"></span></a>
                <ul class="dropdown-menu">
                  <li><a href="#">Action</a></li>
                  <li><a href="#">Another action</a></li>
                  <li><a href="#">Something else here</a></li>
                  <li role="separator" class="divider"></li>
                  <li class="dropdown-header">Nav header</li>
                  <li><a href="#">Separated link</a></li>
                  <li><a href="#">One more separated link</a></li>
                </ul>
              </li>-->
              <li><a href="activities.html">Activities</a></li>
              <li><a href="contact.html">Contact</a></li>
            </ul>
            
          </div><!--/.nav-collapse -->
        </div><!--/.container-fluid -->
    </nav>
    </div>
    </div>
  <!-- InstanceBeginEditable name="EditRegion1" -->
  <!-- Carousel
    ================================================== -->
  <div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
    </ol>
    <div class="carousel-inner" role="listbox">
      <div class="item active"> <img class="first-slide" src="images/slider1.jpg" alt="First slide">
      </div>
      <div class="item"> <img class="second-slide" src="images/slider2.jpg" alt="Second slide">
      </div>
      <div class="item"> <img class="third-slide" src="images/slider3.jpg" alt="Third slide">
      </div>
	<div class="item"> <img class="third-slide" src="images/slider4.jpg" alt="Fourth slide">
      </div>    </div>
    <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev"> <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span> <span class="sr-only">Previous</span> </a> <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next"> <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span> <span class="sr-only">Next</span> </a> </div>
  <!-- /.carousel -->
  <!-- Marketing messaging and featurettes
    ================================================== -->
  <!-- Wrap the rest of the page in another container to center all the content. -->
  <!-- Three columns of text below the carousel -->
  <div class="row">
    <div class="container alert alert-danger" style="margin-top:10px;">
			<?php 
			$con=mysqli_connect("182.50.133.84","agri","Ezj@w722","agriweb");
			//$con=mysqli_connect("localhost","root","","agri-web");
			$cmd="select * from upload";
			$result=mysqli_query($con,$cmd);
			?>
		<marquee direction="left" scrollamount="3" scrolldelay="0" onMouseOver="stop()" onMouseOut="start()">
        <?php 
				while($row=mysqli_fetch_array($result)){
					$name=$row['name'];
					$file="admin/".$row['file'];
		?>
			<a href="<?php echo $file?>" target="new"><?=$name?></a>&nbsp;|&nbsp;
         <?php 
				}
		 ?>
		</marquee>
	</div>
  </div>
  <div class="row">
    <div class="container">
      <div class="col-lg-4"> <img class="img-circle" src="images/logo.png" alt="" >
          <h2>About(A3S)</h2>
        <p align="justify">Allahabad Advance Agri solutions (A3S) is realization of passion of technocrat and young entrepreneur to establish a commercial biotechnology firm in Uttar Pradesh with a mandate to.. </p>
        <p><a class="btn btn-default" href="about.html" role="button">Read More &raquo;</a></p>
      </div>
      <!-- /.col-lg-4 -->
      <div class="col-lg-4"> <img class="img-circle" src="images/vision.png">
          <h2>Our Vision</h2>
        <p align="justify">The main objective of A3S is to provide solutions to Indian agriculture through commercialization of upcoming modern biotechnological approaches. A3S always starve to adopt nationally and..</p>
        <p><a class="btn btn-default" href="vision.html" role="button">View details &raquo;</a></p>
      </div>
      <!-- /.col-lg-4 -->
      <div class="col-lg-4"> <img class="img-circle" src="images/activiti.png">
          <h2>Our Activities</h2>
        <p>A. Production of tissue culture raised plants of <br>
          B. Contract Production of Tissue culture plants<br>
          C.	Training<br>
          D.	Project consultancy: </p>
        <p><a class="btn btn-default" href="activities.html" role="button">View details &raquo;</a></p>
      </div>
      <!-- /.col-lg-4 -->
    </div>
    <!-- /.row -->
  </div>
  <!-- START THE FEATURETTES -->
  <hr class="featurette-divider">
  <div class="row">
    <div class="container">
      <div class="row featurette">
        <div class="col-md-7">
          <h2>About Allahabad Advance Agri solutions (A3S)</h2>
          <p align="justify">Allahabad Advance Agri solutions (A3S) is realization of passion of technocrat and young entrepreneur to establish a commercial biotechnology firm in Uttar Pradesh with a mandate to deliver technically proven superior quality tissue culture raised planting material and services farmers for nurturingagriculture sector of the region. </p>
          <p align="justify">A3S is a first plant biotechnology venture in Eastern Uttar Pradesh. The firm had been incorporated as partnership firm in the sector of biotechnologywith full-fledged operation at Allahabad. The firmis owned by a young woman entrepreneurand has production capacity of 0.5 million plantlets annum. As a matter of pride,inthe recent past A3S has become an authentic source of quality tissue culture raised planting material forfarmers in region.</p>
          <p align="justify">The Laboratory is extensively involved in the area of biotechnological research, development of commercially viable tissue culture protocol as well as production and distribution of tissue culture raised planting material of different plant species. Though firm is recently established at state-of-the-art in Allahabad, the facility has adopted the bestcommercial practices available round the globe.Currently, firmisfocusing on distribution of quality Banana and other tissue culture planting materials to the farmers of Uttar Pradesh, Bihar and Madhya Pradesh.</p>
        </div>
        <div class="col-md-5"> <img class="img-responsive img-circle" src="images/agri4.jpg"> </div>
      </div>
      <!--<hr class="featurette-divider">-->
      <!--<div class="row featurette">
        <div class="col-md-7 col-md-push-5">
          <h2 class="featurette-heading">Oh yeah, it's that good. <span class="text-muted">See for yourself.</span></h2>
          <p class="lead">Donec ullamcorper nulla non metus auctor fringilla. Vestibulum id ligula porta felis euismod semper. Praesent commodo cursus magna, vel scelerisque nisl consectetur. Fusce dapibus, tellus ac cursus commodo.</p>
        </div>
        <div class="col-md-5 col-md-pull-7">
          <img class="featurette-image img-responsive center-block" data-src="holder.js/500x500/auto" alt="Generic placeholder image">
        </div>
      </div>-->
      <!--<hr class="featurette-divider">-->
      <!--<div class="row featurette">
        <div class="col-md-7">
          <h2 class="featurette-heading">And lastly, this one. <span class="text-muted">Checkmate.</span></h2>
          <p class="lead">Donec ullamcorper nulla non metus auctor fringilla. Vestibulum id ligula porta felis euismod semper. Praesent commodo cursus magna, vel scelerisque nisl consectetur. Fusce dapibus, tellus ac cursus commodo.</p>
        </div>
        <div class="col-md-5">
          <img class="featurette-image img-responsive center-block" data-src="holder.js/500x500/auto" alt="Generic placeholder image">
        </div>
      </div>-->
      <!--<hr class="featurette-divider">-->
    </div>
  </div>
  <!-- /END THE FEATURETTES -->
  <!-- InstanceEndEditable -->
  <hr class="featurette-divider">
      <!-- FOOTER -->
      <div class="row">
      <div class="container">
      <footer>
        <p class="pull-right"><a href="httt://www.kkdtechsoft.com">Developed by : KKD Tech Soft</a></p>
        <p>&copy; 2016 Company, A3S. &middot; <a href="#">Privacy</a> &middot; <a href="#">Terms</a></p>
      </footer>
      </div>
      </div>

<!-- /.container -->


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="js/bootstrap.min.js"></script>
    <!-- Just to make our placeholder images work. Don't actually copy the next line! -->
  </body>
<!-- InstanceEnd --></html>


<html>
	<head>
		<title>D World</title>
                <link rel="shortcut icon" type="image/x-icon" href="<?php echo base_url();?>/templates/gallery/images/pageicon.png" />
                <link href="<?php echo base_url();?>/templates/gallery/css/style.css" rel="stylesheet" type="text/css"  media="all" />
		<meta name="keywords" content="Videostube iphone web template, Android web template, Smartphone web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
                <link href='<?php echo base_url();?>/templates/gallery///fonts.googleapis.com/css?family=Ropa+Sans' rel='stylesheet' type='text/css'>
								<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
<link rel="icon" href="<?=base_url()?>templates/dgrid/images/logo1.png" type="image/gif">

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
                <style>
                    #pr{
                        font-size: 20px;
                        color: #009688;

                    }
                </style>
	</head>
	<body>

	<!----start-wrap---->
	<div class="wrap">
		<!----start-Header---->
		<div class="header">
			<!----start-Logo---->
                        <!--
			<div class="logo">
				<a href="index.html"><img src="images/logo.png" title="logo" /></a>
			</div>-->
			<!----End-Logo---->
			<!----start-top-nav---->
			<!--<div class="top-nav">
				<ul>
					<li><a href="index.html">Home</a><p>My Frontpage</p></li>
					<li><a href="#">About</a><p>About this blog</p></li>
					<li><a href="categories.html">Categories</a><p>Be Ur Self</p></li>
					<li><a href="#">Economics</a><p>Human Needs</p></li>
					<li><a href="#">Health</a><p>Take A Trip</p></li>
					<li><a href="contact.html">Contact</a><p>Leave Messages</p></li>
				</ul>
			</div>
			<div class="clear"> </div>
			<!----End-top-nav---->
		</div>
		<!----End-Header---->
		<div class="clear"> </div>
		<div class="content">
			<div class="inner-page">
					</div>
					<div class="clear"> </div>
				</div>
				<div class="container">
					<div class="row">
						<div class="col-md-6">
								<br><br><br><br>

  <div id="myCarousel" class="carousel slide" data-ride="carousel" >
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner" style="height:725px;">
      <div class="item active">
				<?php
			 foreach ($single as $value) {
				?>
				<img src="<?php echo base_url();?>/uploads/<?php echo $value->dimage1;?> " alt ="<?php echo $value->dimage1;?>" width='100%' height='100%'>
			</div>
		<?php } ?>
      <div class="item">
				<?php
			 foreach ($single as $value) {
		?>
				<img src="<?php echo base_url();?>/uploads/<?php echo $value->dimage2;?> " alt ="<?php echo $value->dimage2;?>" width='100%' height='100%'>
			</div>
		<?php } ?>
      <div class="item">
				<?php
			 foreach ($single as $value) {
				?>
				<img src="<?php echo base_url();?>/uploads/<?php echo $value->dimage3;?> " alt ="<?php echo $value->dimage3;?>" width='100%' height='100%'>
			</div>
		<?php } ?>
</div>

    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>

							<div class="viwes">
								<div class="view-links">
									<!--<ul>
										<li><h4>Share on:</h4></li>
										<li><a href="#"><img src="images/f1.png" title="facebook" /></a></li>
										<li><a href="#"><img src="images/t1.png" title="Twitter" /></a></li>
										<li><a href="#"><img src="images/s1.png" title="Google+" /></a></li>
									</ul>
									<ul class="comment1">
										<li><a href="#">Comment(1)</a></li>
										<li><a href="#"><img src="images/re.png" title="report" /><span>Report</span></a></li>
									</ul>
								</div>
								<div class="views-count">
									<p><span>2,500</span> Views</p>
								</div>
								<div class="clear"> </div>-->
							</div>
							<div class="clear"> </div>
							</div>
						</div>
					<div class="col-md-6">
				<div class="title">
					<br><br><br><br>
                                    <?php
                                   foreach ($single as $value) {


                                    ?>
					<h2 style="color:black"><?php echo $value->dname;?></h2>
					<ul>
                                            <!--
						<li><h4>By:</h4></li>
						<li><a href="#">Author</a></li>
						<li><a href="#"><img src="images/sub.png" title="subscribe" />subscribe</a></li>-->
					</ul>

				</div>
				<div class="video-details">
					<ul>
						<h4><p>Uploaded on <?php echo $value->created_time;?></p></h4>

						<!--<li><span>Description: <?php //echo $row['pdesc'];?></span></li>-->
					</ul>
					<ul class="other-links">
											<h3>Description: <?php echo $value->pdesc;?></h3>

					</ul>
					<?php
				}
                                   foreach ($dress as $value) {


                                    ?>
<ul class="other-links">
											<h4>Material: <?php echo $value->material;?></h4>

					</ul>
					<ul class="other-links">
											<h4>Available Sizes: <?php echo $value->size;?></h4>

					</ul>
					<ul class="other-links">
											<h4>Actual Price: <?php echo $value->price;?></h4>

					</ul>
<?php
}
                                   foreach ($single as $value) {
$id=$value->item_id;
$pid=$value->id;

                                    ?>
					<ul class="other-links">
											<h4>Discount Price: <?php echo $value->discount;?></h4>
										</ul>
										<!--<ul class="other-links">
											<h4>Availability: <?php echo $value->stock;?></h4></ul>-->
 <a type="button" href="#" data-toggle="modal" data-target="#myModal-<?=$id?><?=$pid?>" class="btn btn-primary" style="float: right;padding: 6px;margin-right: 10px;">Update</a>

 <!-- Modal -->
<div id="myModal-<?=$id?><?=$pid?>" class="modal fade" role="dialog" aria-hidden="true" >
 <div class="modal-dialog">

   <!-- Modal content-->
   <div class="modal-content">
        <form method="post" id="post" action="<?php echo base_url('index.php/designerctrl/de_updiscount/'.$id.'/'.$pid);?>">
     <div class="modal-header">
       <button type="button" class="close" data-dismiss="modal">&times;</button>
     </div>

     <div class="modal-body col-md-offset-1">

       <div class="controls">
     <div class="row">
       <div class="col-md-12">
     <div class="form-group">
     <label for="cats" id="cats">Discount Price: </label>
     <input type="text" class="form-control" name="price" id="price" required="" />
</div>
<div class="form-group">
     <label for="cats" id="cats">Stock: </label>
     <select class="form-control" name="stock">
     	<option value="Out of Stock">Out of stock</option>
     	<option value="Available">Available</option>
     </select>
</div>
<div class="modal-footer">
<div class="btn-pst text-center">
<input type="submit" name="insert" class="btn btn-primary btn-md" id="insert"  value="Update" />
</div>
       <button type="button" class="btn btn-default btn-sm" data-dismiss="modal" style="float:right">Close</button>
      </div>
</form>
      </div>

 </div>
</div>

					</ul>
				</div>
			</div>

	</div>
				<div class="clear"> </div>
				<div class="tags">
					<ul><!--
						<li><h3>Tags:</h3></li>
						<li><a href="#">Games</a> ,</li>
						<li><a href="#">HD-Videos</a></li>-->
					</ul>
				</div>
				<div class="clear"> </div>
                                                                  <?php

  }
  ?>

                                <!--<div class="related-videos">
					<h6>Related-Videos</h6>
				<div class="grids">
					<div class="grid">
						<h3>Consectetur adipisicing elit</h3>
						<a href="#"><img src="images/g3.jpg" title="video-name"></a>
						<div class="time">
							<span>2:30</span>
						</div>
						<div class="grid-info">
							<div class="video-share">
								<ul>
									<li><a href="#"><img src="images/likes.png" title="links"></a></li>
									<li><a href="#"><img src="images/link.png" title="Link"></a></li>
									<li><a href="#"><img src="images/views.png" title="Views"></a></li>
								</ul>
							</div>
							<div class="video-watch">
								<a href="#">Watch Now</a>
							</div>
							<div class="clear"> </div>
							<div class="lables">
								<p>Labels:<a href="#">Lorem</a></p>
							</div>
						</div>
					</div>
					<div class="grid">
						<h3>Consectetur adipisicing elit</h3>
						<a href="#"><img src="images/g5.jpg" title="video-name"></a>
						<div class="time">
							<span>5:10</span>
						</div>
						<div class="grid-info">
							<div class="video-share">
								<ul>
									<li><a href="#"><img src="images/likes.png" title="links"></a></li>
									<li><a href="#"><img src="images/link.png" title="Link"></a></li>
									<li><a href="#"><img src="images/views.png" title="Views"></a></li>
								</ul>
							</div>
							<div class="video-watch">
								<a href="#">Watch Now</a>
							</div>
							<div class="clear"> </div>
							<div class="lables">
								<p>Labels:<a href="#">Lorem</a></p>
							</div>
						</div>
					</div>
					<div class="grid">
						<h3>Consectetur adipisicing elit</h3>
						<a href="#"><img src="images/g4.jpg" title="video-name"></a>
						<div class="time">
							<span>2:00</span>
						</div>
						<div class="grid-info">
							<div class="video-share">
								<ul>
									<li><a href="#"><img src="images/likes.png" title="links"></a></li>
									<li><a href="#"><img src="images/link.png" title="Link"></a></li>
									<li><a href="#"><img src="images/views.png" title="Views"></a></li>
								</ul>
							</div>
							<div class="video-watch">
								<a href="#">Watch Now</a>
							</div>
							<div class="clear"> </div>
							<div class="lables">
								<p>Labels:<a href="#">Lorem</a></p>
							</div>
						</div>
					</div>
				</div>
				</div>
				<div class="clear"> </div>
			</div>
		<div class="right-content">
			<div class="popular">
				<h3>Popular Videos</h3>
				<p><img src="images/l1.png" title="likes" /> 10,000</p>
				<div class="clear"> </div>
			</div>
			<div class="grid1">
						<h3>Consectetur adipisicing elit</h3>
						<a href="#"><img src="images/g7.jpg" title="video-name" /></a>
						<div class="time1">
							<span>2:50</span>
						</div>

						<div class="grid-info">
							<div class="video-share">
								<ul>
									<li><a href="#"><img src="images/likes.png" title="links" /></a></li>
									<li><a href="#"><img src="images/link.png" title="Link" /></a></li>
									<li><a href="#"><img src="images/views.png" title="Views" /></a></li>
								</ul>
							</div>
							<div class="video-watch">
								<a href="#">Watch Now</a>
							</div>
							<div class="clear"> </div>
							<div class="lables">
								<p>Labels:<a href="#">Lorem</a></p>
							</div>
						</div>
					</div>
					<div class="clear"> </div>
		</div>
		<div class="clear"> </div>
		</div>
	</div>
		<div class="clear"> </div>
		<div class="footer">
				<div class="wrap">
				<div class="box1">
				<h4>Ur's Account</h4>
						<ul>
							<li><a href="#">My Channel</a></li>
							<li><a href="#">Subscription</a></li>
							<li><a href="#">Locations</a></li>
							<li><a href="#">Favourites</a></li>
							<li><a href="#">Add</a></li>
							<li><a href="#">Ur-specials</a></li>
							<li><a href="#">Submission Rules</a></li>
						</ul>
				</div>
				<div class="box1">
				<h4>Policy & Terms</h4>
						<ul>
							<li><a href="#">Terms & Conditions</a></li>
							<li><a href="#">Privacy Policy</a></li>
							<li><a href="#">Submission Rules</a></li>
							<li><a href="#">Company Buzz</a></li>
							<li><a href="#">My Staff</a></li>
							<li><a href="#">Moodle Hosting</a></li>
							<li><a href="#">OpenCart Hosting</a></li>
						</ul>
				</div>
				<div class="box1">
				<h4>Community</h4>
						<ul>
							<li><a href="#">Standard Support</a></li>
							<li><a href="#">Premier Support</a></li>
							<li><a href="#">Support Center</a></li>
							<li><a href="#">Host Affiliate</a></li>
							<li><a href="#">Infographics</a></li>
							<li><a href="#">indian Hosting</a></li>
							<li><a href="#">Green Web Hosting</a></li>
						</ul>
				</div>
				<div class="box1">
					<div class="hide-box">
				<h4>About Us</h4>
						<ul>
							<li><a href="#">Contact Us</a></li>
							<li><a href="#">Terms of Service</a></li>
							<li><a href="#">Privacy Policy</a></li>
							<li><a href="#">Blog</a></li>
							<li><a href="#">Guarantee</a></li>
							<li><a href="#">Link to Us</a></li>
							<li><a href="#">We're Hiring</a></li>
						</ul>
				</div>
					</div>
				<div class="box1">
				<h4>Stay in touch on</h4>
						<ul class="social">
							<li><img src="images/facebook.png" title="facebook"><a href="#">Facebook</a></li>
							<li><img src="images/twitter.png" title="twitter"><a href="#">Twitter</a></li>
							<li><img src="images/gplus.png" title="google+"><a href="#">Google+</a></li>
						</ul>
				</div>
				<div class="clear"> </div>
			</div>
		</div>
			<div class="clear"> </div>
			<div class="copy-right">
			<p>&#169 2013 Videostube. All Rights Reserved | Design by &nbsp;<a href="http://w3layouts.com">W3Layouts</a></p>
		</div>
	</div>
	<!----End-wrap---->

	</body>
</html>

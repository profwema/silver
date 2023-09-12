<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<title>AlTAJ SILVER - home page</title>
<?php require_once("head.php");?>

</head>
<body>
	<div class="body-wrapper">
	<?php require_once("header.php");?>
	<!-- .navbar -->
		<div class="offset"></div>
		<div class="slider-wrapper">
			<div id="slider">
			<?php
				$location = "../style/img/slides/bg-en";
				$folder = opendir($location); // open folder

				if($folder)
				{
					$index = 0;
					while (false != ($image = readdir($folder))) 
					{ // read until end
						if($image != '.' && $image != '..')
						{ // remove . and ..
							$image_path = "../style/img/slides/bg-en/".$image;
							echo '<div><img src="'.$image_path.'"></div> ';   // echo image with tag
						}
					}             
				}
			?>
			</div>
			<div id="slider-direction-nav"></div>
			<div id="slider-control-nav"></div>
		</div>
		<script type="text/javascript">
		$(document).ready(function() {
			var slider = $('#slider').leanSlider({
				directionNav: '#slider-direction-nav',
				controlNav: '#slider-control-nav'
			});
		});
		</script>
		<div class="container inner">
			<div class="row">
				<div class="span12">      
					<h1 class="post-title">Clientele</h1>       
					<div class="paragraph">          
						<p class="lead">
						We cater to a mixture of electrified cliental across the region of Saudi Arabia. In
			addition,The relationship we maintain with our clients, coupled with a personalized
			approach tailored to their needs, enables us to meet all their needs in a timely and effective
			manner.</p>    
					<p class="lead">The company's commitment to keeping up with the ever-changing business needs of
			our diverse clientele is instrumental to our ability to consistently supply our clients with
			products of the highest quality on a regular basis as a means of keeping our
			commitment to meeting their needs. Therefore, we ensure that our services are tailored
			to meet the needs of our clients.

						</p>         
					</div>
				</div>      
			</div>
			<div class="row">	

			<link  href="../owlcarousel/owl.carousel.css"rel="stylesheet">
    		<link  href="../owlcarousel/owl.theme.default.css"rel="stylesheet">

    		<script src="../owlcarousel/owl.carousel.js"></script>

				<div class="large-12 columns">
					<div class="owl-carousel owl-theme">
						<div class="item">
						<img src="../style/img/clients/zatar.png" alt="" />
						</div>
						<div class="item">
						<img src="../style/img/clients/kudu.png" alt="" />
						</div>
						<div class="item">
						<img src="../style/img/clients/catering.png" alt="" />
						</div>
						<div class="item">
						<img src="../style/img/clients/hamam.png" alt="" />
						</div>
					</div>

					<script>
						$(document).ready(function() {
						var owl = $('.owl-carousel');
						owl.owlCarousel({
							items: 4,
							loop: true,
							margin: 10,
							autoplay: true,
							autoplayTimeout: 1000,
							autoplayHoverPause: true
						});
						$('.play').on('click', function() {
							owl.trigger('play.owl.autoplay', [1000])
						})
						$('.stop').on('click', function() {
							owl.trigger('stop.owl.autoplay')
						})
						})
					</script>



				</div>       
			</div>  
      	</div>
		<div class="dark-wrapper">
			<div class="container inner ">
				<div class="row">
				<h1 class="post-title"> Company Milestone</h1>      
				
				<link href="../timeline/timeline.css" rel="stylesheet">
				<div class="timeline">
          <div class="timeline__wrap">
            <div class="timeline__items">
              <div class="timeline__item">
                <div class="timeline__content">
                  <h2>2010</h2>
                  <p>ALTAJ SILVER Was Founded</p>
                </div>
              </div>
              <div class="timeline__item">
                <div class="timeline__content">
                  <h2>2015</h2>
                  <p>We started importing our branded items. We launched our cutlery packaging line. We expanded to reach all saudi cities</p>
                </div>
              </div>
              <div class="timeline__item">
                <div class="timeline__content">
                  <h2>2016</h2>
                  <p>Opening of our Northern Provence Branch</p>
                </div>
              </div>
              <div class="timeline__item">
                <div class="timeline__content">
                  <h2>2017</h2>
                  <p>Starting our own factory </p>
                </div>
              </div>
			  <div class="timeline__item">
                <div class="timeline__content">
                  <h2>2019</h2>
                  <p>ALTAJ became the authorized distributor for K-pack products </p>
                </div>
              </div>
              <div class="timeline__item">
                <div class="timeline__content">
                  <h2>2020-2022</h2>
                  <p>Growth and Expansion</p>
                </div>
              </div>
            </div>
          </div>
        </div>

  <script type="text/javascript" src="../timeline/timeline.js"></script>
  <script>
    timeline(document.querySelectorAll('.timeline'), {
      forceVerticalMode: 700,
      mode: 'horizontal',
      verticalStartPosition: 'left',
      visibleItems: 4
    });
  </script>

				</div>
			</div>
		</div>

		<?php require_once("footer.php");?>
	</div>
<!--/.body-wrapper--> 
<?php require_once("js-src.php");?>
</body>
</html>
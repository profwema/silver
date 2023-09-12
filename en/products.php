<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<title>AlTAJ SELVER - About Us </title>
<?php require_once("head.php");?>

</head>
<body>
<div class="body-wrapper">

<?php require_once("header.php");?>
  <!-- .navbar -->

  

  <div class="offset"></div>
	<div id="breadcrumb">
		<div class="container">	
			<div class="breadcrumb">							
				<li><a href="index.php"> <i class="icon-home-1"></i> Home</a></li> 
        <i class="icon-right-open-1"></i>
        <li>Products</li>			
			</div>		
		</div>	
	</div>
<section class="content">
  <div class="container inner">
    <div class="row">        
  
          <h1 class="post-title">Our Products</h1>   
                 
          <div id="showcase" class="noselect">

          <?php
            $location = "../style/img/products";
            $folder = opendir($location); // open folder

            if($folder)
            {
                $index = 0;
                while (false != ($image = readdir($folder))) 
                { // read until end
                    if($image != '.' && $image != '..')
                    { // remove . and ..
                        $image_path = "../style/img/products/".$image;
                        ?>      
                        <img class="cloud9-item" src="<?=$image_path?>">
                        <?php
                    }
                }             
            }
        ?>
    </div>
  <script src="../style/js/lib/jquery.reflection.js"></script>
  <script src="../style/js/lib/jquery.cloud9carousel.js"></script>
  <script>
    $(function() {
      var showcase = $("#showcase"), title = $('#item-title');
      var width = $("#showcase").width();
      var hight = $("#showcase").height();
      showcase.Cloud9Carousel( {
       xOrigin: width/2,
        yOrigin: hight/6,       
        xRadius: width/2.4,
        yRadius: hight/3.5,
 
        farScale:0.5,

        buttonLeft: $("#nav > .left"),
        buttonRight: $("#nav > .right"),
        autoPlay: 1,
        bringToFront: true,
        onRendered: rendered,
        onLoaded: function() {
          showcase.css( 'visibility', 'visible' )
          showcase.css( 'display', 'none' )
          showcase.fadeIn( 1500 )
        }
      } )
      function rendered( carousel ) 
      {
        // Fade in based on proximity of the item
        var c = Math.cos((carousel.floatIndex() % 1) * 2 * Math.PI)
      }
    })
  </script>
      </div>
  </div>
  <!--/.container -->
</section>




  <!-- /.full-portfolio -->
  <?php require_once("footer.php");?>

  
  <!-- /footer --> 
  
</div>
<!--/.body-wrapper--> 
<?php require_once("js-src.php");?>


</body>
</html>
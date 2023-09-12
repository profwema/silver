<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<title>AlTAJ SELVER - Contact Us</title>
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
        <li>Contact Us</li>			
			</div>		
		</div>	
	</div>
<section class="content">
  <div class="container inner">
    <div class="row">
      <div class="span8">
        <h1 class="post-title">We're eager to hear from you</h1>
        <div class="divide20"></div>
        <div class="form-container">
          <div class="response alert alert-success"></div>
          <form class="forms" action="http://themes.iki-bir.com/marble/contact/form-handler.php" method="post">
            <fieldset>
              <ol>
                <li class="form-row text-input-row name-field">
                  <input type="text" name="name" class="text-input defaultText required" placeholder="Name (Required)"/>
                </li>
                <li class="form-row text-input-row email-field">
                  <input type="email" name="email" class="text-input defaultText required email" placeholder="Email (Required)"/>
                </li>
                <li class="form-row text-input-row subject-field">
                  <input type="tel" name="mobile" class="text-input defaultText" placeholder="mobile"/>
                </li>                
                <li class="form-row text-input-row subject-field">
                  <input type="text" name="subject" class="text-input defaultText" placeholder="Subject"/>
                </li>
                <li class="form-row text-area-row">
                  <textarea name="message" class="text-area required" placeholder="Message"></textarea>
                </li>
                <li class="form-row hidden-row">
                  <input type="hidden" name="hidden" value="" />
                </li>
                <li class="button-row">
                  <input type="submit" value="Send" name="submit" class="btn btn-submit bm0" />
                </li>
              </ol>
              <input type="hidden" name="v_error" id="v-error" value="Required" />
              <input type="hidden" name="v_email" id="v-email" value="Enter a valid email" />
            </fieldset>
          </form>
        </div>
        <!-- /.form-container --> 
      </div>
      <!-- /.span8 -->
      <aside class="span4">
        <h1 class="post-title">Contact Info</h1>
        <div class="sidebox">
          <address>
          <i class="icon-location contact"></i>
          <p><strong>HQ :</strong> Office 10, King Faisal, 3658, District, Al Murabba,7053, Riyadh 12613.</p>
          <i class="icon-location contact"></i>
          <p> <strong>Warehouse :</strong> Prince Mohammed Bin Abdulrahman Bin Abdulaziz, As Sulay, Riyadh 11564</p>
          <i class="icon-location contact"></i>
          <p> <strong>Factory :</strong> Istanbul, As Sulay, Riyadh 14274</p>
          <i class="icon-phone contact"></i>
          <p> <strong>Tel : </strong> +966500179988 - +966502688621</p>

          <h3>  Visit our Social Media Platforms and Follow Us:</h3>

          <div class="social-contact pull-left">
        <a href="#"><i class="icon-mail contact"></i> </a>
        <a href="#"><i class="icon-s-instagrem contact"></i></a>
        <a href="#"><i class="icon-linkedin contact"></i></a>
        <a href="#"><i class="icon-location contact"></i></a>

          </div>



       

          </address>
          <div style="clear: left;"></div>
        </div>
        <!-- /.widget --> 
      </aside>
      <!-- /.span4 --> 
    </div>
    <!-- /.row --> 
    
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
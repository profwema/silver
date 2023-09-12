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
				<li><a href="index.php"> <i class="icon-home-1"></i> الرئيسية</a></li> 
        <i class="icon-left-open-1"></i>
        <li>تواصلوا معنا</li>			
			</div>		
		</div>	
	</div>
<section class="content">
  <div class="container inner">
    <div class="row">
      
      <div class="span8">
        <h1 class="post-title">نحن حريصون على السماع منك</h1>
        <div class="divide20"></div>
        <div class="form-container">
          <div class="response alert alert-success"></div>
          <form class="forms" action="http://themes.iki-bir.com/marble/contact/form-handler.php" method="post">
            <fieldset>
              <ol>
                <li class="form-row text-input-row name-field">
                  <input type="text" name="name" class="text-input defaultText required" 
                  placeholder="الاسم (مطلوب)"/>
                </li>
                <li class="form-row text-input-row email-field">
                  <input type="email" name="email" class="text-input defaultText required email" placeholder="البريد الألكتروني (مطلوب)"/>
                </li>
                <li class="form-row text-input-row subject-field">
                  <input type="tel" name="mobile" class="text-input defaultText" 
                  placeholder="الهاتف المحمول"/>
                </li>                
                <li class="form-row text-input-row subject-field">
                  <input type="text" name="subject" class="text-input defaultText"
                  placeholder="الموضوع"/>
                </li>
                <li class="form-row text-area-row">
                  <textarea name="message" class="text-area required" 
                  placeholder="الرسالة"></textarea>
                </li>
                <li class="form-row hidden-row">
                  <input type="hidden" name="hidden" value="" />
                </li>
                <li class="button-row">
                  <input type="submit" value="إرسال" name="submit" class="btn btn-submit bm0" />
                </li>
              </ol>
              <input type="hidden" name="v_error" id="v-error" value="مطلوب" />
              <input type="hidden" name="v_email" id="v-email" value="ادخل بريد الكتروني صحيح" />
            </fieldset>
          </form>
        </div>
        <!-- /.form-container --> 
      </div>
      <!-- /.span8 -->
      <aside class="span4">
      <h1 class="post-title">بيانات الاتصال</h1>
        <div class="sidebox">
          <address>
          <i class="icon-location contact"></i>
          <p><strong>المكتب الرئيسي :</strong>المكتب 10 , الملك فيصل , 3658 , حي المربع 7053 , الرياض 12613.</p>
          <i class="icon-location contact"></i>
          <p> <strong>المستودع :</strong> الأمير محمد بن عبد الرحمن بن عبد العزيز - السلي - الرياض 11564</p>
          <i class="icon-location contact"></i>
          <p> <strong>المصنع :</strong> اسطنبول - السلي - الرياض 14274</p>
          <i class="icon-phone contact"></i>
          <p> <strong>الهاتف : </strong> +966500179988 - +966502688621 </p>

          <h3>  زوروا منصات التواصل الاجتماعي الخاصة بنا وتابعونا </h3>

          <div class="social-contact pull-left">
        <a href="#"><i class="icon-mail contact"></i> </a>
        <a href="#"><i class="icon-s-instagrem contact"></i></a>
        <a href="#"><i class="icon-linkedin contact"></i></a>
        <a href="#"><i class="icon-location contact"></i></a>
          </div>

          </address>
          <div style="clear:right;"></div>
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
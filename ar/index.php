<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<title>AlTAJ SELVER - home page</title>
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
              $location = "../style/img/slides/bg-ar";
              $folder = opendir($location); // open folder

              if($folder)
              {
                  $index = 0;
                  while (false != ($image = readdir($folder))) 
                  { // read until end
                      if($image != '.' && $image != '..')
                      { // remove . and ..
                          $image_path = "../style/img/slides/bg-ar/".$image;
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
            <h1 class="post-title"> عملائنا</h1>              
            <div class="paragraph">          
              <p class="lead">
              نحن نلبي مزيجا من العملاء في جميع أنحاء منطقة المملكة العربية السعودية. باإلضافة إىل ذلك، فإن العلاقة التي نحافظ عليها مع عملائنا مصممة خصيًصا لتلبية احتياجاتهم، في الوقت
    المناسب وبطريقة فعالة
              </p>
              <p class="lead">التزاملنا  بمواكبة احتياجات العمل المتغيرة باستمرار لعملائنا المتنوعين هو أمر أساسي لقدرتنا
    على تزويد عملائنا باستمرار بمنتجات ذات جودة عالية على أساس منتظم كوسيلة للحفاظ
    على تلبية احتياجاتهم.
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
                rtl:true,
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


      <div class="dark-wrapper" dir="rtl">
			<div class="container inner ">
				<div class="row">
        <div class="span12">   
				<h1 class="post-title"> إنجازاتنا </h1>      
				
				<link href="../timeline/timeline-ar.css" rel="stylesheet">
				<div class="timeline ">
          <div class="timeline__wrap">
            <div class="timeline__items">
              <div class="timeline__item">
                <div class="timeline__content">
                  <h2>2010</h2>
                  <p>تأسست شركة التاج الفضية</p>
                </div>
              </div>
              <div class="timeline__item">
                <div class="timeline__content">
                  <h2>2015</h2>
                  <p> بدأنا في توريد المنتجات بالعالمات التجارية الخاصة بنا أطلقنا خط تغليف أدوات المائدة توسعنا للوصول إىل جميع المدن السعودية
               </p>
                </div>
              </div>
              <div class="timeline__item">
                <div class="timeline__content">
                  <h2>2016</h2>
                  <p> افتتاح فرع المنطقة الشمالية لدينا</p>
                </div>
              </div>
              <div class="timeline__item">
                <div class="timeline__content">
                  <h2>2017</h2>
                  <p> بدء مصنعنا الخاص </p>
                </div>
              </div>
              <div class="timeline__item">
                <div class="timeline__content">
                  <h2>2019</h2>
                  <p> أصبحت التاج الموزع المعتمد لمنتجات K-pack </p>
                </div>
              </div>
              <div class="timeline__item">
                <div class="timeline__content">
                  <h2>2020-2022</h2>
                  <p> تحقيق إنتشار و توسع للعالمة التجارية </p>
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
		</div>


    <?php require_once("footer.php");?>
  </div>
<?php require_once("js-src.php");?>
</body>
</html>
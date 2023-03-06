<!DOCTYPE html>
<html lang="en" >

<head>

  <meta charset="UTF-8">
  
 
  
  
  <link rel='stylesheet' href='https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css'> 
<link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css'>
<link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.css'>
<link rel='stylesheet' href='https://w3learnpoint.com/cdn/jquery-picZoomer.css'>
  
<style>
.bg-light {
    background-color: #070106!important;
}
 .picZoomer{display:none;}
/*=========Recent-post==========*/
.title_bx h3.title {
    font-size: 22px;
    text-transform: capitalize;
    position: relative;
    color: #fd7f34;
    font-weight: 700;
    line-height: 1.2em;
}
.title_bx h3.title:before {
    content: "";
    height: 2px;
    width: 20%;
    position: absolute;
    left: 0px;
    z-index: 1;
    top: 40px;
    background-color: #fd7f34;
}
.title_bx h3.title:after {
    content: "";
    height: 2px;
    width: 100%;
    position: absolute;
    left: 0px;
    top: 40px; 
}
.common_wd .owl-nav .owl-prev, .common_wd .owl-nav .owl-next {
    background-color: #fa0d87 !important;
    display: block;
    height: 30px;
    width: 30px;
    text-align: center;
    border-radius: 0px !important;
}
.owl-nav .owl-next {
    right:-10px;
}
.owl-nav .owl-prev, .owl-nav .owl-next {
    top:50%;
    position: absolute;
}
.common_wd .owl-nav .owl-prev i, .common_wd .owl-nav .owl-next i {
    color: #fff;
    font-size: 14px !important;
    position: relative;
    top: -1px;
}
.common_wd .owl-nav {
    position: absolute;
    top: -21%;
    right: 4px;
    width: 65px;
}
.owl-nav .owl-prev i, .owl-nav .owl-next i {
    left: 0px;
}
._p-qty .decrease_ {
    position: relative;
    right: -5px;
    top: 3px;
}

._p-qty .increase_ {
    position: relative;
    top: 3px;
    left: -5px;
}
/*========box========*/
.sq_box {
    padding-bottom: 5px;  
    text-align: center;
    
    margin-bottom: 20px; 
    
    background: rgb(255 255 255 / 8%);
    box-shadow: 0 4px 30px rgb(0 0 0 / 10%);
    backdrop-filter: blur(5px);
    -webkit-backdrop-filter: blur(5px);
    border: 1px solid rgb(255 255 255 / 18%);
    border-width: 1px;
    border-radius: 1rem;
 
}
.item .sq_box span.wishlist {
    right: 5px !important;
}
.sq_box span.wishlist {
    position: absolute;
    top: 10px;
    right: 20px;
}
.sq_box span {
    font-size: 14px;
    font-weight: 600;
    margin: 0px 10px;
}
.sq_box span.wishlist i {
    color: #adb5bd;
    font-size: 20px;
}
.sq_box h4 {
    font-size: 18px;
    text-align: center;
    font-weight: 500;
    color: #343a40;
    margin-top: 10px;
    margin-bottom: 10px !important;
}
.sq_box .price-box {
    margin-bottom: 15px !important;
}
.sq_box .btn {
    border-radius: 50px;
    padding: 5px 13px;
    font-size: 15px;
    color: #fff;
    background-color: #fd7f34;
    font-weight: 600;
}
.sq_box .price-box span.price {
    text-decoration: line-through;
    color: #6c757d;
}
.sq_box span {
    font-size: 14px;
    font-weight: 600;
    margin: 0px 10px;
}
.sq_box .price-box span.offer-price {
    color:white;
}
.sq_box img {
    object-fit: cover;
    height: 150px !important; 
   border-radius: 10px 10px 0px 0px;
}
.sq_box span.wishlist i:hover {
    color: #fd7f34;
}
</style>

  <script>
  window.console = window.console || function(t) {};
</script>

  
  
  <script>
  if (document.location.search.match(/type=embed/gi)) {
    window.parent.postMessage("resize", "*");
  }
</script>


</head>

<body translate="no" >
  <section id="services" class="services section-bg">
   <div class="container-fluid">
    
      <div class="row row-sm">
         <div class="col-md-6 _boxzoom">
       
             <div class="_product-images">
               <div class="picZoomer"> 
               </div>
            </div>
         </div>
 
      </div>
   </div>
</section>
<section class="sec bg-light">
   <div class="container">
       <!--
      <div class="row">
         <div class="col-sm-12 title_bx">
            <h3 class="title"> Recent Post   </h3>
         </div>
      </div>-->
      <div class="row">
         <div class="col-md-12 list-slider mt-4">
            <div class="owl-carousel common_wd  owl-theme" id="recent_post">
               <div class="item">
                  <div class="sq_box shadow">
                     <div class="pdis_img"> 
                       
                        <a href="#">
                        <img src="https://images.pexels.com/photos/2373201/pexels-photo-2373201.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500"> 
                        </a>
                     </div>
                     <h4 class="mb-1"> <a href="">Toronto </a> </h4>
                     <div class="price-box mb-2">
                        <!--<span class="price"> Price <i class="fa fa-inr"></i> 200 </span>-->
                        <span class="offer-price"> Total Event 120 </span>
                     </div>
              
                  </div>
               </div>
               
               
               <div class="item">
                  <div class="sq_box shadow">
                     <div class="pdis_img"> 
                       
                        <a href="#">
                        <img src="https://images.pexels.com/photos/2373201/pexels-photo-2373201.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500"> 
                        </a>
                     </div>
                     <h4 class="mb-1"> <a href="">Toronto </a> </h4>
                     <div class="price-box mb-2">
                        <!--<span class="price"> Price <i class="fa fa-inr"></i> 200 </span>-->
                        <span class="offer-price"> Total Event 120 </span>
                     </div>
              
                  </div>
               </div>
               
               <div class="item">
                  <div class="sq_box shadow">
                     <div class="pdis_img"> 
                       
                        <a href="#">
                        <img src="https://images.pexels.com/photos/2373201/pexels-photo-2373201.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500"> 
                        </a>
                     </div>
                     <h4 class="mb-1"> <a href="">Toronto </a> </h4>
                     <div class="price-box mb-2">
                        <!--<span class="price"> Price <i class="fa fa-inr"></i> 200 </span>-->
                        <span class="offer-price"> Total Event 120 </span>
                     </div>
              
                  </div>
               </div>
               
               
               <div class="item">
                  <div class="sq_box shadow">
                     <div class="pdis_img"> 
                       
                        <a href="#">
                        <img src="https://images.pexels.com/photos/2373201/pexels-photo-2373201.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500"> 
                        </a>
                     </div>
                     <h4 class="mb-1"> <a href="">Toronto </a> </h4>
                     <div class="price-box mb-2">
                        <!--<span class="price"> Price <i class="fa fa-inr"></i> 200 </span>-->
                        <span class="offer-price"> Total Event 120 </span>
                     </div>
              
                  </div>
               </div>
               
               
               <div class="item">
                  <div class="sq_box shadow">
                     <div class="pdis_img"> 
                       
                        <a href="#">
                        <img src="https://images.pexels.com/photos/2373201/pexels-photo-2373201.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500"> 
                        </a>
                     </div>
                     <h4 class="mb-1"> <a href="">Toronto </a> </h4>
                     <div class="price-box mb-2">
                        <!--<span class="price"> Price <i class="fa fa-inr"></i> 200 </span>-->
                        <span class="offer-price"> Total Event 120 </span>
                     </div>
              
                  </div>
               </div>
               <div class="item">
                  <div class="sq_box shadow">
                     <div class="pdis_img"> 
                       
                        <a href="#">
                        <img src="https://images.pexels.com/photos/2373201/pexels-photo-2373201.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500"> 
                        </a>
                     </div>
                     <h4 class="mb-1"> <a href="">Toronto </a> </h4>
                     <div class="price-box mb-2">
                        <!--<span class="price"> Price <i class="fa fa-inr"></i> 200 </span>-->
                        <span class="offer-price"> Total Event 120 </span>
                     </div>
              
                  </div>
               </div>
 
            </div>
         </div>
      </div>
   </div>
</section>
    <script src="https://cpwebassets.codepen.io/assets/common/stopExecutionOnTimeout-2c7831bb44f98c1391d6a4ffda0e1fd302503391ca806e7fcc7b9b87197aec26.js"></script>

  <script src='https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js'></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js'></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/jquery-zoom/1.7.21/jquery.zoom.min.js'></script>
      <script id="rendered-js" >
 
;(function ($) {
  $.fn.picZoomer = function (options) {
    var opts = $.extend({}, $.fn.picZoomer.defaults, options),
    $this = this,
    $picBD = $('<div class="picZoomer-pic-wp"></div>').css({ 'width': opts.picWidth + 'px', 'height': opts.picHeight + 'px' }).appendTo($this),
    $pic = $this.children('img').addClass('picZoomer-pic').appendTo($picBD),
    $cursor = $('<div class="picZoomer-cursor"><i class="f-is picZoomCursor-ico"></i></div>').appendTo($picBD),
    cursorSizeHalf = { w: $cursor.width() / 2, h: $cursor.height() / 2 },
    $zoomWP = $('<div class="picZoomer-zoom-wp"><img src="" alt="" class="picZoomer-zoom-pic"></div>').appendTo($this),
    $zoomPic = $zoomWP.find('.picZoomer-zoom-pic'),
    picBDOffset = { x: $picBD.offset().left, y: $picBD.offset().top };


    opts.zoomWidth = opts.zoomWidth || opts.picWidth;
    opts.zoomHeight = opts.zoomHeight || opts.picHeight;
    var zoomWPSizeHalf = { w: opts.zoomWidth / 2, h: opts.zoomHeight / 2 };

  
    $zoomWP.css({ 'width': opts.zoomWidth + 'px', 'height': opts.zoomHeight + 'px' });
    $zoomWP.css(opts.zoomerPosition || { top: 0, left: opts.picWidth + 30 + 'px' });
  
    $zoomPic.css({ 'width': opts.picWidth * opts.scale + 'px', 'height': opts.picHeight * opts.scale + 'px' });

 
    $picBD.on('mouseenter', function (event) {
      $cursor.show();
      $zoomWP.show();
      $zoomPic.attr('src', $pic.attr('src'));
    }).on('mouseleave', function (event) {
      $cursor.hide();
      $zoomWP.hide();
    }).on('mousemove', function (event) {
      var x = event.pageX - picBDOffset.x,
      y = event.pageY - picBDOffset.y;

      $cursor.css({ 'left': x - cursorSizeHalf.w + 'px', 'top': y - cursorSizeHalf.h + 'px' });
      $zoomPic.css({ 'left': -(x * opts.scale - zoomWPSizeHalf.w) + 'px', 'top': -(y * opts.scale - zoomWPSizeHalf.h) + 'px' });

    });
    return $this;

  };
  $.fn.picZoomer.defaults = {
    picHeight: 460,
    scale: 2.5,
    zoomerPosition: { top: '0', left: '380px' },

    zoomWidth: 400,
    zoomHeight: 460 };

})(jQuery);



$(document).ready(function () {
  $('.picZoomer').picZoomer();
  $('.piclist li').on('click', function (event) {
    var $pic = $(this).find('img');
    $('.picZoomer-pic').attr('src', $pic.attr('src'));
  });

  var owl = $('#recent_post');
  owl.owlCarousel({
    margin: 20,
    dots: false,
    nav: true,
    navText: [
    "<i class='fa fa-chevron-left'></i>",
    "<i class='fa fa-chevron-right'></i>"],

    autoplay: true,
    autoplayHoverPause: true,
    responsive: {
      0: {
        items: 2 },

      600: {
        items: 3 },

      1000: {
        items: 5 },

      1200: {
        items: 4 } } });




  $('.decrease_').click(function () {
    decreaseValue(this);
  });
  $('.increase_').click(function () {
    increaseValue(this);
  });
  function increaseValue(_this) {
    var value = parseInt($(_this).siblings('input#number').val(), 10);
    value = isNaN(value) ? 0 : value;
    value++;
    $(_this).siblings('input#number').val(value);
  }

  function decreaseValue(_this) {
    var value = parseInt($(_this).siblings('input#number').val(), 10);
    value = isNaN(value) ? 0 : value;
    value < 1 ? value = 1 : '';
    value--;
    $(_this).siblings('input#number').val(value);
  }
});
//# sourceURL=pen.js
    </script>

  

</body>

</html>
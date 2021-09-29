window.addEventListener("scroll",function(){
    var header = document.querySelector("header");
    header.classList.toggle("sticky",window.scrollY > 0);
  });

  $(document).ready(function(){
    $('.single-item').slick();
    });

  $(document).ready(function(){

    var quantitiy=0;
       $('.quantity-right-plus').click(function(e){
            
            // Stop acting like a button
            e.preventDefault();
            // Get the field name
            var quantity = parseInt($('#quantity').val());
            
            // If is not undefined
                
                $('#quantity').val(quantity + 1);
    
              
                // Increment
            
        });
    
         $('.quantity-left-minus').click(function(e){
            // Stop acting like a button
            e.preventDefault();
            // Get the field name
            var quantity = parseInt($('#quantity').val());
            
            // If is not undefined
          
                // Increment
                if(quantity>0){
                $('#quantity').val(quantity - 1);
                }
        });
        
    });

// owl slider-1
$('#home-slider').owlCarousel({
      loop:true,
      margin:0,
      nav:false,
      dots: true,
      autoplay: false,
      navText: [
          '<i class="far fa-chevron-up" aria-hidden="true"></i>',
          '<i class="far fa-chevron-down" aria-hidden="true"></i>'
      ],
        responsiveClass:true,
      responsive:{
          0:{
              items:1
          },
          600:{
              items:1
          },
          1000:{
              items:1
          }
      }
  });

    $(document).ready(function ($) {
      $('.sec-home-slider .home-slider .owl-nav').addClass('home-nav');
      $('.sec-home-slider .home-slider .home-nav .owl-prev').addClass('home-prev');
      $('.sec-home-slider .home-slider .home-nav .owl-next').addClass('home-next');
      $('.sec-home-slider .home-slider .owl-dots').addClass('home-dots');
    });


    const next1Icon = '<img src="./images/right.png" class="next">';
    const prev1Icon = '<img src="./images/left.png" class="prev">';
    $('#special-slider').owlCarousel({
        loop:true,
        margin:0,
        nav:true,
        dots: false,
        autoplay: true,
        center:true,
        navText: [
          prev1Icon,
          next1Icon
            // '<i class="fas fa-long-arrow-alt-left" aria-hidden="true"></i>',
            // '<i class="fas fa-long-arrow-alt-right" aria-hidden="true"></i>'
        ],
          responsiveClass:true,
        responsive:{
            0:{
                items:1
            },
            600:{
                items:2
            },
            1000:{
                items:5
            }
        }
    });
  
      $(document).ready(function ($) {
        $('.sec-special .special-slider .owl-nav').addClass('special-nav');
        $('.sec-special .special-slider .special-nav .owl-prev').addClass('special-prev');
        $('.sec-special .special-slider .special-nav .owl-next').addClass('special-next');
        $('.sec-special .special-slider .owl-dots').addClass('special-dots');
      });


      const nextIcon = '<img src="./images/right.png" class="next">';
      const prevIcon = '<img src="./images/left.png" class="prev">';
      $('#customer-slider').owlCarousel({
        loop:true,
        margin:0,
        nav:true,
        dots: false,
        autoplay: true,
        autoplayTimeout:3000,
        autoplayHoverPause:true,
        center:true,
        navText: [
          prevIcon,
          nextIcon
            // '<i class="fas fa-long-arrow-alt-left" aria-hidden="true"></i>',
            // '<i class="fas fa-long-arrow-alt-right" aria-hidden="true"></i>'
        ],
          responsiveClass:true,
        responsive:{
            0:{
                items:1
            },
            600:{
                items:2
            },
            1000:{
                items:5
            }
        }
    });
  
      $(document).ready(function ($) {
        $('.sec-customer .special-slider .owl-nav').addClass('special-nav');
        $('.sec-customer .special-slider .special-nav .owl-prev').addClass('special-prev');
        $('.sec-customer .special-slider .special-nav .owl-next').addClass('special-next');
        $('.sec-customer .special-slider .owl-dots').addClass('special-dots');
      });

 AOS.init();

 $(document).on('click', '.page-ul .page-li', function(){
  $(this).addClass('active-page').siblings().removeClass('active-page')
});
$(document).ready(function(){
$('.page-ul .page-li .page-a').click(function(){
$('.page-li .page-a').removeClass("active-page");
$(this).addClass("active-page");
});
});

var galleryThumbs = new Swiper('.gallery-thumbs', {
  spaceBetween: 15,
  slidesPerView: 4,
  freeMode: true,
  watchSlidesVisibility: true,
  watchSlidesProgress: true,
});
var galleryTop = new Swiper('.gallery-top', {
  spaceBetween: 10,
  navigation: {
    nextEl: '.swiper-button-next',
    prevEl: '.swiper-button-prev',
  },
  thumbs: {
    swiper: galleryThumbs
  }
});


// b js 
let menu1=document.getElementById('display_menu');
let menu2=document.getElementById('display_menu_2');

// $('#hover_menu').click(function(){
//   $(menu1).toggle();
// })
// $('#hover_menu_2').click(function(){
//   $(menu2).toggle();
// })

$("#hover_menu").click(function(){
  $(menu2).hide();
  $(menu1).show();
});
$(document).mouseup(function (e) {
  var popup = $(menu1);
  if (!$(menu1).is(e.target) && !popup.is(e.target) && popup.has(e.target).length == 0) {
      popup.hide(500);
  }
});
$("#hover_menu_2").click(function(){
  $(menu1).hide();
  $(menu2).show();
});

$(document).mouseup(function (e) {
  var popup = $(menu2);
  if (!$(menu2).is(e.target) && !popup.is(e.target) && popup.has(e.target).length == 0) {
      popup.hide(500);
  }
});

$('.center-slick').slick({
  centerMode: true,
  centerPadding: '60px',
  slidesToShow: 4,
  responsive: [
    {
      breakpoint: 768,
      settings: {
        arrows: false,
        centerMode: true,
        centerPadding: '40px',
        slidesToShow: 3
      }
    },
    {
      breakpoint: 480,
      settings: {
        arrows: false,
        centerMode: true,
        centerPadding: '40px',
        slidesToShow: 1
      }
    }
  ]
});
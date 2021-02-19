$('.slider-list').owlCarousel({
  loop:true,
  margin:15,
  nav:false,
  autoplay:true,
  dots: false,
  autoplayTimeout:3000,
  responsive:{
      0:{
          items:1
      },
      600:{
          items:2
      },
      1000:{
          items:3
      }
  }
});

$('.news__slider').owlCarousel({
    loop:true,
    margin:35,
    nav:false,
    autoplay:true,
    dots: false,
    autoplayTimeout:4000,
    responsive:{
        0:{
            items:1
        },
        600:{
            items:2
        },
        1000:{
            items:4
        }
    }
});

// scroll top start

$(window).scroll(function(){
    if($(this).scrollTop() > 600) {
        $('.scrollTop').fadeIn();
    } else {
        $('.scrollTop').fadeOut();
    }
})
$('.scrollTop').click(function(){
    $("html, body").animate({ scrollTop: 0 }, 1000);
});

// scroll top finish


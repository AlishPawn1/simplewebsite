jQuery(function ($) {

  // Back to Top Button
  var btn = $('#button');

  $(window).scroll(function () {
    if ($(window).scrollTop() > 300) {
      btn.addClass('show');
    } else {
      btn.removeClass('show');
    }
  });

  btn.on('click', function (e) {
    e.preventDefault();
    $('html, body').animate({ scrollTop: 0 }, '300');
  });

  // hamburger



  // Sticky Header
  // if ($(window).scrollTop() > 100) {
  //   $('.header').addClass("sticky");
  // }

  // $(window).scroll(function () {
  //   if ($(this).scrollTop() > 100) {
  //     $('.header').addClass("sticky");
  //   } else {
  //     $('.header').removeClass("sticky");
  //   }
  // });
  var lastScrollTop = 0;

  $(window).scroll(function () {
    var currentScrollTop = $(this).scrollTop();
  
    if (currentScrollTop > lastScrollTop) {
      // Scrolling down
      $('.header').removeClass("sticky");
    } else {
      // Scrolling up
      if (currentScrollTop > 100) {
        $('.header').addClass("sticky");
      } else {
        $('.header').removeClass("sticky");
      }
    }
  
    lastScrollTop = currentScrollTop;
  });

  $(window).scroll(function() {
    if ($(this).scrollTop() > 300){  
        $('.header').addClass("transform-sticky");
      }
      else{
        $('.header').removeClass("transform-sticky");
      }
  });
  



  // Dropdown Button

  $(document).ready(function() {
    $(".primary-menu li.menu-dropdown > a").append('<span class="dropdown-btn"><i class="fa-solid fa-chevron-right"></i></span>');
    

    $('.dropdown-btn').on('click', function(event) {
        event.preventDefault();
        event.stopPropagation();
        $(this).parent().parent().toggleClass('open').first().siblings().removeClass('open');
        $(this).parent().parent().find("ul").parent().find("ul.sub-menu").first().slideToggle();
        $(this).parent().parent().siblings().find("ul.sub-menu").slideUp().parent().removeClass('open');
        $(this).toggleClass('transform-90');
        $(this).parent().parent().siblings().find('.dropdown-btn').removeClass('transform-90');
    });
});


$('.primary-menu li').has('ul').addClass('menu-dropdown');

$(document).ready(function(){
  $('.hamburger').click( function(){
    $(this).toggleClass('active');
    $('.overlay').toggleClass('active');
    $('.primary-menu').toggleClass('active');
  });
});


//   $(document).ready(function () {
//     var minValue = 9;
//     var maxValue = 956;
//     var step = 10;

//     $("#price-range").slider({
//         range: true,
//         min: minValue,
//         max: maxValue,
//         values: [minValue, maxValue],
//         step: step,
//         slide: function (event, ui) {
//             $("#range-min").text(ui.values[0]); // Update min value
//             $("#range-max").text(ui.values[1]); // Update max value
//         }
//     });
// });


  $(document).ready(function(){
    // Handle image change on click within the 'for-change-image' container
    $('.for-change-image a').on('click', function (event) {
        event.preventDefault();
        var imageUrl = $(this).attr('href');
        $('#zoom1 img').attr('src', imageUrl);
    });

    if (document.querySelector('.zoomable-image')) {
      window.openFancybox = function (element) {
      // console.log("hello");
      var $image = $(element).closest('.image').find('.zoomable-image');
      var imageSrc = $image.attr('src');
      
      if (imageSrc) {
        console.log('Image Source:', imageSrc);
        $.fancybox.open({
          src: imageSrc,
          type: 'image',
          opts: {
            buttons: [
              "zoom",
              "fullScreen",
              "close"
            ],
            fullScreen: {
              autoStart: false,
            },
            touch: {
              vertical: true,
              momentum: true
            },
            openEffect: 'none',
            closeEffect: 'none',
          }
        });
        // console.log("hi");
      } else {
        console.error('Image source not found.');
      }
    }
  }
    
 
  

    $(document).ready(function() {
        const zoom = $('#zoom1');
        const s = 2;
    

        
        zoom.on('mousemove', function(e) {
          const x = e.pageX - $(this).offset().left - zoom.width() / 2;
          const y = e.pageY - $(this).offset().top- zoom.height() / 2;

          var xc = - x / s;
          var yc = - y / s;
    
            $('.zoomable-image').css('transform', 'translate(' + xc + 'px, ' + yc + 'px) scale(1.5)');

        });

        zoom.on('mouseleave', function () {
            $('.zoomable-image').css('transform', 'translate(0, 0) scale(1)');
        });
      });
  });
  // auto-count
  if(document.querySelector('.our-number-project')){
    $(document).ready(function(){
      var a = 0;
      $(window).scroll(function() {
        var oTop = $('.our-number-project').offset().top - window.innerHeight;
  
        if (a == 0 && $(window).scrollTop() > oTop) {
          $('.count-number').each(function() {
            var $this = $(this);
            jQuery({ Counter: 0 }).animate({ Counter: $this.attr('data-to-value') }, {
              duration: 2000,
              easing: 'swing',
              step: function () {
                $this.text(Math.ceil(this.Counter));
              }
            });
          });
          a = 1;
        }
      });
    });
  }
  if (document.querySelector('.about-progress')) {
    $(document).ready(function () {
        var b = 0;

        $(window).scroll(function () {
            var aboutTop = $('.about-progress').offset().top - window.innerHeight;

            if (b === 0 && $(window).scrollTop() > aboutTop) {
                $(".progress").each(function () {
                    var progressValue = $(this).data("value");
                    $(this).css("width", progressValue + "%");
                });
                b = 1; // Set the flag to avoid re-triggering the animation
            }
        });
    });
  }
  $(document).ready(function () {
    var x = parseInt($("#quantity").val()); 

    $("#plus").click(function () {
        $("#quantity").val(++x);
    });

    $("#minus").click(function () {
        if (x > 1) {
            $("#quantity").val(--x);
        } else {
            x = 1;
        }
    });
});
  


});

// WOW.js Initialization
new WOW().init();

// Splide Slider Initialization
if (document.querySelector('.banner-slide')) {
  var splide = new Splide('.banner-slide', {
    type: 'fade',
    rewind: true,
    perPage: 1,
    pagination: false,
    // autoplay: true,
    interval: 3000,
    breakpoints: {
      1024: {
        interval: 2000,
        arrows: false,
        pagination: true,
      },
    },
  });

  splide.on("active", function (slide) {
    console.log("Slide with index", slide.index, "is now active.");

    if (typeof $ !== 'undefined') {
      $(".wow").removeClass("animate__animated");
      $(".splide__slide.is-active .wow").addClass("animate__animated").css("animation-name", "fadeIn");
    }
  });

  splide.on("moved", function () {
    console.log("Slide has moved.");

    if (typeof $ !== 'undefined') {
      $(".wow").removeClass("animate__animated");
      $(".wow").css("animation-name", "none");
    }
  });


  splide.mount();
}

if (document.querySelector('.footer-slide')){
  var footer = new Splide('.footer-slide', {
    perPage: 1,
  });
  footer.mount();
}
if (document.querySelector('.blog-slide')){
  var blog = new Splide('.blog-slide', {
    perPage: 1,
  });
  blog.mount();
}

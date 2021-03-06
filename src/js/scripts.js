(function( root, $, undefined ) {
	"use strict";

	$(function () {
		// DOM ready, take it away

    switch(navigator.language) {
        case 'en-US': // US
            // window.location.replace("http://google.com");
            break;
        case 'en-GB': // United Kingdom
            // window.location.replace("http://google.com");
            break;
        case 'nb': // Norw
            window.location.replace("https://www.rewardstyle.com/?language=nb_NO");
            break;
        case 'sv': // Sweden
            window.location.replace("https://www.rewardstyle.com/?language=sv_SE");
            break;
        case 'ru': // Russian
            window.location.replace("https://www.rewardstyle.com/?language=ru_RU");
            break;
        case 'ja': // Japanese
            window.location.replace("https://www.rewardstyle.com/?language=ja_JP");
            break;
        case 'nl': // Dutch
            window.location.replace("https://www.rewardstyle.com/?language=nl_NL");
            break;
        case 'es': // Spanish
            window.location.replace("https://www.rewardstyle.com/?language=es_ES");
            break;
        case 'de': // German
            window.location.replace("https://www.rewardstyle.com/?language=de_DE");
            break;
        case 'fr': // France
            window.location.replace("https://www.rewardstyle.com/?language=fr_FR");
            break;
        case 'zh': // Chinese
            window.location.replace("https://www.rewardstyle.com/?language=zh_CN");
            break;
        case 'ko': // Korean
            window.location.replace("https://www.rewardstyle.com/?language=ko_KR");
            break;
        case 'pt': // Porteguese
            window.location.replace("https://www.rewardstyle.com/?language=pt_BR");
            break;
        case 'it': // Italian
            window.location.replace("https://www.rewardstyle.com/?language=it_IT");
            break;
        default:

    }


    $('.vertical-carousel .slider').slick({
      slidesToShow: 6,
      slidesToScroll: 1,
      autoplay: true,
      speed: 600,
      arrows: false,
      autoplaySpeed: 2500,
      responsive: [
        {
          breakpoint: 1023,
          settings: {
            slidesToShow: 3,
            slidesToScroll: 3,
            infinite: true,
            dots: false
          }
        },
        {
          breakpoint: 767,
          settings: {
            slidesToShow: 3,
            slidesToScroll: 3,
            infinite: true,
            dots: false
          }
        }
      ]
    });

    $('.vertical-carousel .prev').click(function(){
      $('.vertical-carousel .slider').slick('slickPrev');
    })

    $('.vertical-carousel .next').click(function(){
      $('.vertical-carousel .slider').slick('slickNext');
    })

    var callout = $('.product-callout');
    $(callout[0]).addClass('first');

    var youtube = document.querySelectorAll( ".youtube" );

    var length = $('.contents').children().length;

    $('.contents').slick({
      slidesToShow: length,
      infinite: true,
      responsive: [
        {
          breakpoint: 767,
          settings: {
            slidesToShow: 1,
            arrows: true
          }
        }
      ]
    })

    $('.graphic-slider .prev').click(function(){
      $('.contents').slick('slickPrev');
    })

    $('.graphic-slider .next').click(function(){
      $('.contents').slick('slickNext');
    })

    $('.pull-quotes .slider').slick({
      slidesToShow: 3,
      slidesToScroll: 1,
      dots: true,
      infinite: true,
      arrows: true,
      responsive: [
        {
          breakpoint: 767,
          settings: {
            slidesToShow: 1,
            slidesToScroll: 1,
            infinite: true,
            dots: true
          }
        }
      ]
    });

    $('.brand-wall .logo-slider').slick({
      slidesToShow: 6,
      slidesToScroll: 6,
      autoplay: true,
      speed: 1200,
      autoplaySpeed: 4200,
      fade: false,
      responsive: [
        {
          breakpoint: 767,
          settings: {
            slidesToShow: 3,
            slidesToScroll: 3,
            infinite: true,
            dots: false
          }
        }
      ]
    });

    $('.testimonial-slider .slider').slick({
      slidesToShow: 1,
      slidesToScroll: 1,
      autoplay: true,
      speed: 600,
      autoplaySpeed: 4200,
      fade: true,
      dots: true,
      adaptiveHeight: true,
      responsive: [
        {
          breakpoint: 767,
          settings: {
            adaptiveHeight: true,
            autoplay: false
          }
        }
      ]
    });

    $('.become-rs-influencer .slider').slick({
      slidesToShow: 1,
      slidesToScroll: 1,
      autoplay: true,
      speed: 600,
      autoplaySpeed: 4200,
      dots: true
    });

    $('.press-timeline .slider').slick({
      slidesToShow: 1,
      slidesToScroll: 1,
      autoplay: false,
      speed: 800,
      arrows: false,
      fade: true,
      // prevArrow: '.prev',
      // nextArrow: '.next',
      responsive: [
        {
          breakpoint: 1023,
          settings: {
            slidesToShow: 1,
            slidesToScroll: 1,
            infinite: true,
            adaptiveHeight: true,
            dots: true
          }
        },
        {
          breakpoint: 767,
          settings: {
            slidesToShow: 1,
            slidesToScroll: 1,
            infinite: true,
            adaptiveHeight: true,
            dots: true
          }
        }
      ]
    });

    $('.press-timeline .prev').click(function(){
      $('.press-timeline .slider').slick('slickPrev');
    })

    $('.press-timeline .next').click(function(){
      $('.press-timeline .slider').slick('slickNext');
    })

    $('.employee-spotlight .slider').slick({
      slidesToShow: 1,
      slidesToScroll: 1,
      autoplay: true,
      autoplaySpeed: 4200,
      speed: 600,
      fade: true,
      adaptiveHeight: true,
      responsive: [
        {
          breakpoint: 767,
          settings: {
            dots: true,
            arrows: false
          }
        }
      ]
    });

    $('.awards-side .slider').slick({
      slidesToShow: 5,
      autoplay: true,
      speed: 600,
      autoplaySpeed: 4200,
      responsive: [
        {
          breakpoint: 767,
          settings: {
            dots: true,
            arrows: false,
            slidesToShow: 1
          }
        }
      ]
    })

    AOS.init({
      duration: 1200,
      delay: 0,
      once: false,
      mirror: true,
      easing: 'ease-out-quad',
      offset: 120
    });

    $('.menu-toggle').click(function(){
      $('.nav').toggleClass('active');
    });

    // Initialize logos on the page

    var brandLogos = [];

    var list = $('.hidden-logos li').toArray();

    $(list).each(function(index,item){
      brandLogos.push($(item).find('img').attr('src'));
    });
    
    for (var i = 0; i < brandLogos.length; i++) {
      if (i < 6) { $('.brand-wall .logos').append('<div class="logo is--visible"><img src="' + brandLogos[i] + '"></div>'); }
    }
      
    logosLoaded();
        
    // Create the fade effect

    function logosLoaded(){
      var currentItem = 6; // currently selected item in the array of logos

      var count = 6; // Number of elements to choose from

      var sel = 0;

      window.setInterval(function(){ 

        var prevCount = count;

        // var sel = Math.floor(Math.random() * count) + 1; // Get a random number between 1 and 6

        sel++;

        if (sel > 5) {
          sel = 0;
        }

        var el = $('.logo')[sel]; // get a random element to switch out with new logo
        $(el).removeClass('is--visible'); // hide logo
        
        window.setTimeout(function(){
              $(el).find('img').attr('src',brandLogos[currentItem]);
            $(el).addClass('is--visible');
        }, 1200);
        
        if (currentItem === brandLogos.length) {
          currentItem++;
          currentItem = 0;
        } else {
          currentItem++;
        }

        
      },2700);
    }

    if (youtube.length > 0) {
      for (var i = 0; i < youtube.length; i++) {
          var source = "https://img.youtube.com/vi/"+ youtube[i].dataset.embed +"/sddefault.jpg";

           var image = new Image();
            image.src = source;
            image.addEventListener( "load", function() {
                youtube[ i ].appendChild( image );
            }( i ) );

            youtube[i].addEventListener( "click", function() {
     
            var iframe = document.createElement( "iframe" );
     
                iframe.setAttribute( "frameborder", "0" );
                iframe.setAttribute( "allowfullscreen", "" );
                iframe.setAttribute( "src", "https://www.youtube.com/embed/"+ this.dataset.embed +"?rel=0&showinfo=0&autoplay=1" );
     
                this.innerHTML = "";
                this.appendChild( iframe );
        } );
      }
    }
    // (function() {
    //   //add css file to dom so IE8 recognizes it
    //   document.write('<link href="https://rewardstyle.bamboohr.com/css/jobs-embed.css" rel="stylesheet" />');

    //   var divId="BambooHR-ATS";
    //   var el=document.getElementById(divId);
    //   if(!el) {
    //     document.write("<div id=\""+divId+"\"></div>");
    //   }

    //   var xmlhttp;
    //   var ieFlag = 0;
    //   if (('XDomainRequest' in window && window.XDomainRequest !== null) && document.documentMode < 10) {
    //     xmlhttp=new XDomainRequest();
    //     ieFlag = 1;
    //   } else if (window.XMLHttpRequest) {
    //     xmlhttp=new XMLHttpRequest();
    //   } else {
    //     xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
    //   }

    //   if (ieFlag == 1) { //needed for IE9 CORS
    //     xmlhttp.onload = loadd;
    //     xmlhttp.open("GET","https://rewardstyle.bamboohr.com/jobs/embed2.php");
    //     xmlhttp.send();

    //   } else {
    //     xmlhttp.onreadystatechange=function() {
    //       if(xmlhttp.readyState==4 && xmlhttp.status==200) {
    //         var content = xmlhttp.responseText;
    //         var footerId="BambooHR-Footer";
    //         var fel=document.getElementById(footerId);
            
    //         el=document.getElementById(divId);
            
    //         if(el && !fel) {
    //           content += "<div id=\"BambooHR-Footer\">Powered by <a href=\"http://www.bamboohr.com\" target=\"_blank\" rel=\"external\"><img src=\"https://resources.bamboohr.com/images/footer-logo.png\" alt=\"BambooHR - HR software\"/></a></div>";
    //         }
    //         if(el) el.innerHTML=content;
            
    //       }
    //     }
    //     xmlhttp.open("GET","https://rewardstyle.bamboohr.com/jobs/embed2.php",true);
    //     xmlhttp.send();
    //   }

    //   function loadd() { //needed for IE9 CORS
    //     var content = xmlhttp.responseText;
    //     var footerId="BambooHR-Footer";
    //     var fel=document.getElementById(footerId);
        
    //     el=document.getElementById(divId);
        
    //     if(el && !fel) {
    //       content += "<div id=\"BambooHR-Footer\">Powered by <a href=\"http://www.bamboohr.com\" target=\"_blank\" rel=\"external\"><img src=\"https://resources.bamboohr.com/images/footer-logo.png\" alt=\"BambooHR - HR software\"/></a></div>";
    //     }
    //     el.innerHTML=content;
    //   } 
    // }) ();

	});

} ( this, jQuery ));
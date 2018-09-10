(function( root, $, undefined ) {
	"use strict";

	$(function () {
		// DOM ready, take it away

    $('.vertical-carousel .slider').slick({
      slidesToShow: 6,
      slidesToScroll: 1,
      autoplay: true,
      speed: 600,
      arrows: false,
      autoplaySpeed: 2200,
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
      autoplaySpeed: 2000,
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
      autoplaySpeed: 2200,
      dots: true
    });

    $('.press-timeline .slider').slick({
      slidesToShow: 1,
      slidesToScroll: 1,
      autoplay: true,
      speed: 600,
      autoplaySpeed: 3000,
      fade: true,
      prevArrow: '.prev',
      nextArrow: '.next',
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

    $('.employee-spotlight .slider').slick({
      slidesToShow: 1,
      slidesToScroll: 1,
      autoplay: true,
      autoplaySpeed: 2200,
      speed: 600
    });

    $('.awards-side .slider').slick({
      slidesToShow: 3,
      autoplay: true,
      speed: 600,
      autoplaySpeed: 2200
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

    jarallax(document.querySelectorAll('.jarallax'), {
        disableParallax: function () {
            return /iPad|iPhone|iPod|Android/.test(navigator.userAgent);
        },
      disableVideo: function () {
            return /iPad|iPhone|iPod|Android/.test(navigator.userAgent);
        }
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

      window.setInterval(function(){ 

        var prevCount = count;

        var sel = Math.floor(Math.random() * count) + 1; // Get a random number between 1 and 6

        var el = $('.logo')[sel]; // get a random element to switch out with new logo
        $(el).removeClass('is--visible'); // hide logo
        
        window.setTimeout(function(){
              $(el).find('img').attr('src',brandLogos[currentItem]);
            $(el).addClass('is--visible');
        }, 1200);
        
        currentItem++;
      
        if (currentItem === brandLogos.length) {
          currentItem = 0;
        }
      },4000);
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
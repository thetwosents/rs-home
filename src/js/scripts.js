(function( root, $, undefined ) {
	"use strict";

	$(function () {
		// DOM ready, take it away

    $('.vertical-carousel .slider').slick({
      slidesToShow: 6,
      slidesToScroll: 1,
      autoplay: true,
      speed: 600,
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
      slidesToScroll: 1,
      autoplay: true,
      speed: 600,
      autoplaySpeed: 2200,
      responsive: [
        {
          breakpoint: 767,
          settings: {
            slidesToShow: 3,
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
      speed: 2000,
      autoplaySpeed: 2200,
      fade: true,
      dots: true,
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
      autoplay: false,
      speed: 600,
      fade: true,
      prevArrow: '.prev',
      nextArrow: '.next'
    });

    $('.employee-spotlight .slider').slick({
      slidesToShow: 1,
      slidesToScroll: 1,
      autoplay: true,
      speed: 600
    });

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
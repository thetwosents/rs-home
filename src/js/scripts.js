(function( root, $, undefined ) {
	"use strict";

	$(function () {
		// DOM ready, take it away

    $('.vertical-carousel .slider').slick({
      slidesToShow: 7,
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
            dots: true
          }
        }
      ]
    });

    $('.brand-wall .logo-slider').slick({
      slidesToShow: 4,
      slidesToScroll: 1,
      autoplay: true,
      speed: 600,
      autoplaySpeed: 2200
    });

    $('.testimonial-slider .slider').slick({
      slidesToShow: 1,
      slidesToScroll: 1,
      autoplay: true,
      speed: 600,
      autoplaySpeed: 2200
    });

    AOS.init({
      duration: 1200,
      delay: 0,
      once: false,
      mirror: true,
      easing: 'ease-out-quad',
      offset: 120
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
// JavaScript Document

//scroll page

$(document).ready( function() {
    $('.subMenu').smint({
    	'scrollSpeed' : 500
    });
});

$(document).ready( function() {
    $('.subMenu2').smint({
    	'scrollSpeed' : 500
    });
});

//load page
$(window).load(function(){
	  $('#dvLoading').fadeOut(1000);
	});

//nice scrolling 
$(document).ready(function() {
  
   $("body").niceScroll({touchbehavior:false,cursorcolor:"#666",cursoropacitymax:0.6,cursorwidth:8});
   });
  
//back to top
$(function() {
   $("#toTop").scrollToTop(1000);
});
   

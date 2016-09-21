// templates js
$(document).ready(function(){
 $('div#sidebar ul li').click(function(){
		  var i = $(this).index();
		  $(this).addClass("active").siblings().removeClass("active");
		  
		  $("ul#show li").eq(i).show().siblings().hide();
		  
	  });
	  
 //navbar
	   $('ul.nav li').click(function(){
		   $(this).addClass("active").siblings().removeClass("active");
	   });
	   
});
// templates js
$(document).ready(function(){
	   $('div#sidebar ul li').click(function(){
				$(this).addClass("sidebar-active").siblings().removeClass("sidebar-active");
				
			});
	  
	   $('ul.nav li').click(function(){
		   $(this).addClass("navbar-active").siblings().removeClass("navbar-active");
	   });
	   
});
function scrollNav(){$(".nav a").click(function(){$(".active").removeClass("active");$(this).closest("li").addClass("active");var e=$(this).attr("class");$("."+e).parent("li").addClass("active");$("html, body").stop().animate({scrollTop:$($(this).attr("href")).offset().top-160},400);return!1});$(".scrollTop a").scrollTop()}scrollNav();
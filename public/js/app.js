// Поиск

$(function () {
	var formsearch = $(".form-search");
	var search = $(".svgsearch");
	var liSearch = $(".search");
	var closeSearch = $(".close-search");
	$(document).mouseup(function (e) {
		if (!formsearch.is(e.target) && formsearch.has(e.target).length === 0) {
			$(formsearch).removeClass("input-search_active");
		}
		$(liSearch).on("click", function() {
			$(formsearch).toggleClass("input-search_active");
		})
		$(closeSearch).on("click", function() {
			$(formsearch).removeClass("input-search_active");
		});
	});
})

// Карусель

$(function () {
	var arrow = "<svg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 36.069 36.069'> \
  <path id='Path_5' data-name='Path 5' class='cls-1' d='M44.069,26.035A18.035,18.035,0,1,0,26.035,44.069,18.031,18.031,0,0,0,44.069,26.035ZM26.035,41.742A15.707,15.707,0,1,1,41.742,26.035,15.707,15.707,0,0,1,26.035,41.742Zm-.909-6.727-8.37-8.363a.873.873,0,0,1,0-1.236l8.37-8.363a.873.873,0,0,1,1.236,0l.5.5a.869.869,0,0,1-.015,1.244l-6.218,6H34.47a.875.875,0,0,1,.873.873V26.4a.875.875,0,0,1-.873.873H20.631l6.225,6a.876.876,0,0,1,.015,1.244l-.5.5A.882.882,0,0,1,25.126,35.015Z' transform='translate(44.069 44.069) rotate(180)'/>\
</svg>"
	$(".owl-carousel").owlCarousel({
		items: 1,
		loop: true,
		margin: 10,
	    nav: true,
	    autoplayHoverPause:true,
	    navText: [arrow,arrow],
	});
});

// Всплывающее окно

$(function () {
	var popup = $(".popup");
	var closePopup = $(".close-popup");

	popup.on("click", function (e) {
		e.preventDefault();

		$(".wrap-container, .header, .footer").css({
			filter: "blur(4px)",
		})
		$(".wrapper-popup").css({
			opacity: "1",
			zIndex: 1000
		})
	});

	closePopup.on("click", function () {
		$(".wrapper-popup").css({
			opacity: "0",
			zIndex: -1000
		})
		$(".wrap-container, .header, .footer").css({
			filter: "blur(0)",
		})
	});

});

// скролл

$(function () {
	$(window).on("scroll load", function(){
		var header = window.pageYOffset;
		if (header >= 200) {
			$(".header").addClass("scroll");
			$(".section-one__menu").addClass("scroll");
		} else {
			$(".header").removeClass("scroll");
			$(".section-one__menu").removeClass("scroll");
		}
   });
})

// ajax 

$(".input-search").on("keyup", function () {
	$(".result-search a").empty();
	$value = $(this).val();
	$.ajax({
		type : 'get',
		url : '/search',
		data:{'search':$value},
		success:function(data){
			$(".result-search a").remove();
			var result = data;
			result.forEach(function (data) {
				$(".result-search").append("<a href='/ournew/"+data['id']+"' class='flex'>"+data['title']+"</>");
			})
		}
	});
})


// $.get("search", function (data, xhr) {
// 	var result = data;
// 	result.forEach(function (data) {
// 		$(".result-search a").text(data['title']);
// 		console.log(data['title']);
// 	})
// });
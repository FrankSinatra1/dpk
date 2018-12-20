// Табы

(function($) {
	$(function() {

	  $('ul.tabs__caption li').on('click', function(e) {
		e.preventDefault();
	    $(this)
	      .addClass('active').siblings().removeClass('active')
	      .closest('div.tabs').find('section.tabs__content').removeClass('active').eq($(this).index()).addClass('active');
	  });

	});
})(jQuery);


// Имя файла

$(function () {

	
	function addFile (leafname) {		
		$(".wrap-file-add").prepend("<div class='file-added flex'><p>"+leafname+"</p></div>");
		
		if (leafname == "") {
			$(".wrap-file-add .file-added")[0].remove();
			$(".wrap-file-add .file-added")[0].remove();
			console.log($(".wrap-file-add .file-added")[0]);
		};

		console.log(leafname);
	}

	$(".tinput").on("change", function (e) {
		
		var pathname = $(this).val();
		var leafname = pathname.split('\\').pop().split('/').pop();		

		addFile(leafname);
	})
	
})

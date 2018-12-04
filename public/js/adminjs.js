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

	var cloneElem = $(".file-add").clone();
	
	function addFile (leafname, thiss) {

		$(".wrap-file-add").append(cloneElem);
		console.log(cloneElem);
		$(".labelFile").addClass("added");
		$(".labelFile").text(leafname);
	}

	console.log(cloneElem);
	$(".tinput").on("change", function (e) {
		
		var label = $(this).parent();
		var pathname = $(this).val();
		var leafname = pathname.split('\\').pop().split('/').pop();

		addFile(leafname, label);
	})
	
})

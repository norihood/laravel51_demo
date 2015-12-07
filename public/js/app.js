var App = {
	init: function(){
		App.initEvent();
	},
	initEvent: function(){
		$('#btn-login').click(function(){
			$('#inner-login').show("medium");
			$('#exposeMask').show();
			$("body").css("overflow", "hidden");
		});
		$('#close-login').click(function(){
			$('#inner-login').hide("medium");
			$('#exposeMask').hide();
			$("body").css("overflow", "auto");
		});
		$('.user-info').click(function(){
			$('#popup-infor').show("medium");
			$('#exposeMask').show();
			$("body").css("overflow", "hidden");
		});
		$('.close-user-info').click(function(){
			$('#popup-infor').hide("medium");
			$('#exposeMask').hide();
			$("body").css("overflow", "auto");
		});
		$('#news01').click(function(){
			$('#details-news01').show();
			$('#details-news02').hide();
			$('#details-news03').hide();
			$('#news01').addClass('news-title-select');
			$('#news02').removeClass('news-title-select');
			$('#news03').removeClass('news-title-select');
		});
		$('#news02').click(function(){
			$('#details-news01').hide();
			$('#details-news02').show();
			$('#details-news03').hide();
			$('#news01').removeClass('news-title-select');
			$('#news02').addClass('news-title-select');
			$('#news03').removeClass('news-title-select');
		});
		$('#news03').click(function(){
			$('#details-news01').hide();
			$('#details-news02').hide();
			$('#details-news03').show();
			$('#news01').removeClass('news-title-select');
			$('#news02').removeClass('news-title-select');
			$('#news03').addClass('news-title-select');
		});
	}
}
$(document).ready(function() {
	$('.list-product').carousel({
		itemsPerPage: 5, // number of items to show on each page
		itemsPerTransition: 5, // number of items moved with each transition
		noOfRows: 1, // number of rows (see demo)
		nextPrevLinks: true, // whether next and prev links will be included
		pagination: false, // whether pagination links will be included
		speed: 'normal', // animation speed
		easing: 'swing' // supports the jQuery easing plugin
	});
	App.init();
});

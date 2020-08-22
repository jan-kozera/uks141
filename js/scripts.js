$(document).ready(function(){
	/*$('#carouselExample').carousel({
		interval: 0
	});*/
	$('#carouselExample').on('slide.bs.carousel', function (e) {
		
		/*$('.carousel-item').removeClass('bigger');
		$('.carousel-item.active').next().next().addClass('bigger');*/
		
		var $e = $(e.relatedTarget);
		var idx = $e.index();
		var itemsPerSlide = 3;
		var totalItems = $('.carousel-item').length;

		if (idx >= totalItems-(itemsPerSlide-1)) {
			var it = itemsPerSlide - (totalItems - idx);
			for (var i=0; i<it; i++) {
				// append slides to end
				if (e.direction=="left") {
					$('.carousel-item').eq(i).appendTo('.carousel-inner');
				}
				else {
					$('.carousel-item').eq(0).appendTo('.carousel-inner');
				}
			}
		}
	});
	
	$(window).bind('scroll', function () {
		if ($(window).scrollTop() > 50) {
			$('.navbar').addClass('fixed');
		} else {
			$('.navbar').removeClass('fixed');
		}
	});
	
	$('.rodo span').click(function(){
		$('.rodo-more').show();
	});
	
	$('.x').click(function(){
		$('.rodo-more').hide();
	});
	
	scrolled();
	
	$(window).scroll(function(){
		scrolled();
	});

});

function scrolled() {
	if($(window).scrollTop() > 0) {
		$('.logo').addClass('scrolled');
	}else {
		$('.logo').removeClass('scrolled');
	}
}

function stplace() {
	var stmarker = { lat: 52.24964900, lng: 21.09024300 };
	
	map.setZoom(16);
    map.setCenter(stmarker);
}

function ndplace() {
	var ndmarker = { lat: 52.24865100, lng: 21.09512500 };
	
	map.setZoom(16);
    map.setCenter(ndmarker);
}

function rdplace() {
	var rdmarker = { lat: 52.23836200, lng: 21.09253800 };
	
	map.setZoom(16);
    map.setCenter(rdmarker);
}

function thplace() {
	var thmarker = { lat: 52.24206500, lng: 21.09159800 };
	
	map.setZoom(16);
    map.setCenter(thmarker);
}

function fthplace() {
	var fthmarker = { lat: 52.24407900, lng: 21.07243700 };
	
	map.setZoom(16);
    map.setCenter(fthmarker);
}

function sthplace() {
	var sthmarker = { lat: 52.26157800, lng: 21.15329700 };
	
	map.setZoom(16);
    map.setCenter(sthmarker);
}

function sethplace() {
	var sethmarker = { lat: 52.24337400, lng: 21.11308700 };
	
	map.setZoom(16);
    map.setCenter(sethmarker);
}


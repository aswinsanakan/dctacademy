jQuery().ready(function(){
	    $('#placeslide').jCarouselLite({ 
    	btnPrev:   '#navslideshow #butprev', 
	    btnNext:   '#navslideshow #butnext', 
		easing:'easeInOutExpo', //Animation for Images Slideshow
		auto:3500,
		speed:1000,
		visible:1
		});
		
		$('#contentslide').jCarouselLite({ 
    	btnPrev:   '#navslideshow #butprev', 
	    btnNext:   '#navslideshow #butnext', 
		easing:'easeInOutExpo', //Animation for Photo Caption
		auto:3500,
		speed:1000,
		visible:1
		});

});
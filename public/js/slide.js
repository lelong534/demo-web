$(document).ready(function() {
	$(".lightSlider").lightSlider({
		slideMargin: 32,
		responsive : [
	        {
	            breakpoint:800,
	            settings: {
	                item:2,
	                slideMargin:16
	            }
	        },
			{
	            breakpoint:600,
	            settings: {
	                item:1.2,
	                slideMargin:8
	            }
	        }
        ]
	}); 

	$(".slider2").lightSlider({
		slideMargin: 32,
		item: 2,
		responsive : [
	        {
	            breakpoint:800,
	            settings: {
	                item:2,
	                slideMargin:16
	            }
	        },
			{
	            breakpoint:600,
	            settings: {
	                item:1,
	                slideMargin:8
	            }
	        }
        ]
	}); 

	$(".lightSlider3").lightSlider({
		slideMargin: 32,
		responsive : [
			{
	            breakpoint:600,
	            settings: {
	                item:1.2,
	                slideMargin:8
	            }
	        }
        ]
	}); 

	var lightSlider4 = $(".lightSlider4").lightSlider({
        item:3,
        slideMargin:12
	}); 
	$('#turn-right').on('click', function() {
        lightSlider4.goToNextSlide();
    })
    $('#turn-left').on('click', function() {
        lightSlider4.goToPrevSlide();
    })

	$('.gallery').lightSlider({
        gallery:true,
        item:1,
        loop:true,
        thumbItem:5,
        slideMargin:0,
        enableDrag: false,
        currentPagerPosition:'left',
        responsive : [
	        {
	            breakpoint:600,
	            settings: {
	                thumbItem: 3.2
	            }
	        }
	    ],
        onSliderLoad: function(el) {
            el.lightGallery({
                selector: '.gallery .lslide'
            });
        }   
    });  
});
	
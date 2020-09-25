$(document).ready(function() {
	$("#lightSlider").lightSlider({
		responsive : [
			{
	            breakpoint:900,
	            settings: {
	                item:1,
	                slideMargin:30
	            }
	        },
            {
                breakpoint:700,
                settings: {
                    item:1,
                    slideMargin:16
                }
            },
        ]
	}); 
});
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
});
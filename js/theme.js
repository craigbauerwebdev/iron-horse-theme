jQuery(document).ready(function($) {
	var mainClass = function(settings) {
		var events = {
			init: function(){
				WAC.clickEvents();
			},
			clickEvents: function() {
				console.log('click events');
            }
        }
        return events;
    }
    WAC = new mainClass();
    WAC.init();
}(jQuery));


///////////////////////////////////////
//////////	FUNCTIONS		///////////
///////////////////////////////////////
	
	// IMPLODE()
	function implode(glue, pieces) {
		//  discuss at: http://phpjs.org/functions/implode/
		// original by: Kevin van Zonneveld (http://kevin.vanzonneveld.net)
		// improved by: Waldo Malqui Silva
		// improved by: Itsacon (http://www.itsacon.net/)
		// bugfixed by: Brett Zamir (http://brett-zamir.me)
		//   example 1: implode(' ', ['Kevin', 'van', 'Zonneveld']);
		//   returns 1: 'Kevin van Zonneveld'
		//   example 2: implode(' ', {first:'Kevin', last: 'van Zonneveld'});
		//   returns 2: 'Kevin van Zonneveld'

		var i = '',
		retVal = '',
		tGlue = '';
		
		if (arguments.length === 1) {
			pieces = glue;
			glue = '';
		}
		
		if (typeof pieces === 'object') {
			
			if (Object.prototype.toString.call(pieces) === '[object Array]') {
				return pieces.join(glue);
			}
			
			for (i in pieces) {
				retVal += tGlue + pieces[i];
				tGlue = glue;
			}
			
			return retVal;
			
		}
		
		return pieces;
		
	}


///////////////////////////////////////
//////////	END FUNCTIONS	  /////////
///////////////////////////////////////


$(document).ready(function(){
	
	var height = $(window).height();
	$("nav").css("height", (height - 50) + "px");
	
	window.onresize = function(event) {
		
		var newHeight = $(window).height();
		$("nav").css("height", (newHeight - 50) + "px");
		
	}
	
	
	
	////////////////////////////////////////
	//	FIRST CHART
	//
	$(function () { 
		$('.standardChart').highcharts({
			chart: {
				type: 'bar'
			},
			title: {
				text: 'Fruit Consumption'
			},
			xAxis: {
				categories: ['Apples', 'Bananas', 'Oranges']
			},
			yAxis: {
				title: {
					text: 'Fruit eaten'
				}
			},
			series: [{
				name: 'Jane',
				data: [1, 0, 4]
			}, {
				name: 'John',
				data: [5, 7, 3]
			}]
		});
	});
	
		
});




























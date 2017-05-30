$(document).ready(function() {
	//var items = $('.blog-box'); // for testing only
	var items = $('.node-article');
	var scrollCont = $('.fblog');
	
	function next(cont, items, isNext) {
		var i;
		var scrollLeft = cont.scrollLeft();
		
		if (isNext == undefined) {
			isNext = true;
		}
		
		if (isNext && cont[0].scrollWidth-cont.scrollLeft() <= cont.outerWidth()) {
			return $(items[0]);
		}
		
		for (i = 0; i < items.length; i++) {
			if (isNext && $(items[i]).position().left > 0) {
				return $(items[i]);
			} else if (!isNext && $(items[i]).position().left >= 0) {
				return i == 0 ? $(items[items.length-1]) : $(items[i-1]);
			}
		}
		
		return null;
	}
	
	function move(e) {
		var isNext = e.data.direction = "next";
		var item = isNext ? next(scrollCont, items, true) : next(scrollCont, items, false);
		if (item) {
			scrollCont.animate({"scrollLeft": item.position().left + scrollCont.scrollLeft()}, 400);
		}
		}
		
		$(".a-left").click({direction: "prev"}, move);
		$(".a-right").click({direction: "next"}, move);
});
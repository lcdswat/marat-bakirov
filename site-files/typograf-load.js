	var tp = new Typograf({locale: ['ru', 'en-US']});
	$(document).ready(function() {
	    $('.notes p').each(function() {
	        var elem = $(this);
	        tp.enableRule('ru/optalign/*');
	        elem.html(tp.execute(elem.html()));
	    })
	});
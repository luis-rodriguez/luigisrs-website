(function() {
	var flickerAPI = "http://api.flickr.com/services/feeds/photos_public.gne?jsoncallback=?";
	$.getJSON( flickerAPI, {
		id: "25361560@N02",
		format: "json"
	})
		.done(function( data ) {
			$.each( data.items, function( i, item ) {
				$( "<div>" ).attr("id",i).attr( "class", "large-3 small-6 columns no-padding column").appendTo("#images");
				$("<a>").attr("href",item.link).attr("id","img"+i).appendTo("#"+i);
				$( "<img>" ).attr("height",43).attr( "src", item.media.m ).appendTo("#img"+i);
				if ( i === 3 ) {
					return false;
				}
			});
		});
})();
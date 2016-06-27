// Initialize animations
$(function() {
	new WOW().init();
});

// hide loader and show content
$(window).ready(function() {
    $('#loading').hide();
    $('#content').show();
});

// Menu toggle
$( "#mobile-menu-toggle" ).click(function() {
	$( "#mobile-menu" ).toggle();
	if ($(this).find('a').text() == "Menu") {
		$(this).find('a').text("Close");
	}
	else {
		$(this).find('a').text("Menu");
	}
});

// Pull top 3 newsfeed stories from fb page
// FB user-id: 137912086409500
$(document).ready(function() {
	var url = "https://graph.facebook.com/v2.2/137912086409500/posts?access_token=671178789694012|1MpxcXmap2SfIiiJDEPtyAa9-sM&limit=3";

	$.getJSON( url, function(json) {
		var html = "<ul>";
		$.each(json.data, function(i,fb){
			if (!fb.link) {
				var link = "https://www.facebook.com/AustinsPickYourOwn";
			}
			else {
				var link = fb.link;
			}
			html += "<li>";
			if (!fb.picture) { 
				html += "<a href='" + link + "'> <img src='../images/default-feed-img.jpg'/> </a>";
			}
			else {
				html += "<a href='" + link + "'> <img src='" + fb.picture + "'/> </a>";	
			}
			var dt = new Date(fb.created_time.substring(0, 10));
			html += "<p class='date'>" + dt.toDateString().substring(4, 10) + ", " + dt.toDateString().substring(11,15) + "</p>";
			if (fb.message) {
				html += "<a href='" + link + "'> <p>" + fb.message.substring(0,100) + "</p> </a>";
			}
			html += "</li>";
		});
		html += "</ul>";
		$("#fb-news").html(html);
	});
});


// Google get directions 
var directionsDisplay;
var directionsService = new google.maps.DirectionsService();
var map;

function initialize() {
	directionsDisplay = new google.maps.DirectionsRenderer();
	var chicago = new google.maps.LatLng(41.850033, -87.6500523);
	var mapOptions = {
		zoom:9,
		center: { lat: 42.965063, lng: -80.259830},
		scrollwheel: false,
		draggable: false
	};
	map = new google.maps.Map(document.getElementById("map-canvas"), mapOptions);
	var marker = new google.maps.Marker({
		position: { lat: 42.965063, lng: -80.259830},
		map: map,
		title: "Austin's PYO"
	});
	directionsDisplay.setMap(map);
}

google.maps.event.addDomListener(window, 'load', initialize);

function calcRoute() {
	var start = document.getElementById("start").value;
	console.log(start);
	var end = "2591 Cockshutt Road, Waterford, Ontario N0E 1Y0, Canada";
	var request = {
		origin:start,
		destination:end,
		travelMode: google.maps.TravelMode.DRIVING
	};
	directionsService.route(request, function(result, status) {
		if (status == google.maps.DirectionsStatus.OK) {
	  		directionsDisplay.setDirections(result);
		}
	});
}


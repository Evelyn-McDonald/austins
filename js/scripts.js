// Pull top 3 newsfeed stories from fb page
// FB user-id: 137912086409500
$(document).ready(function() {
	var url = "https://graph.facebook.com/v2.2/137912086409500/posts?access_token=CAACEdEose0cBAF2bZBgokIPVmJH3pitNMEYLR0bNCs4je1z805k3MaXnJySSZB4gpdAZALNItLx1GlNg1bfIMkywKkH0wB8jmJcBFpziKLOEa0WPdROFzohwXPZAcsZBqX30oEP38x3aZA3j2FGO0ZBSQHGcZAYkZAN83s7bvHvF0B2WtnO2kuGjzOlUqkprIEinn9QU3UdwMXZC2YkkmkKB3T&limit=3";

	$.getJSON( url, function(json) {
		var html = "<ul>";
		$.each(json.data, function(i,fb){
			html += "<li>";
			html += "<a href='" + fb.link + "'> <img src='" + fb.picture + "'/> </a>";
			html += "<p class='date'>" + fb.created_time + "</p>";
			html += "<a href='" + fb.link + "'> <p>" + fb.message + "</p> </a>";
			html += "</li>";
		});
		html += "</ul>";
		$("#fb-news").html(html);
	});
});


// Google get directions 
// var directionsDisplay;
// //var directionsService = new google.maps.DirectionsService();
// var map;

// function initialize() {
//   directionsDisplay = new google.maps.DirectionsRenderer();
//   var chicago = new google.maps.LatLng(41.850033, -87.6500523);
//   var mapOptions = {
//     zoom:7,
//     center: chicago
//   };
//   map = new google.maps.Map(document.getElementById("map-canvas"), mapOptions);
//   directionsDisplay.setMap(map);
// }

//google.maps.event.addDomListener(window, 'load', initialize);

// function calcRoute() {
//   var start = document.getElementById("start").value;
//   var end = "2591 Cockshutt Road, Waterford, Ontario N0E 1Y0, Canada";
//   var request = {
//     origin:start,
//     destination:end,
//     travelMode: google.maps.TravelMode.DRIVING
//   };
//   directionsService.route(request, function(result, status) {
//     if (status == google.maps.DirectionsStatus.OK) {
//       directionsDisplay.setDirections(result);
//     }
//   });
// }
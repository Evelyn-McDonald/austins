// Pull top 3 newsfeed stories from fb page
// FB user-id: 137912086409500
$(document).ready(function() {
	var url = "https://graph.facebook.com/v2.2/137912086409500/posts?access_token=CAACEdEose0cBAIqgV85FeEBmw884dk2RaVc9I0rYfNV06Ojc0GTUVjhMWlayglilqc3CVf9GyoplSZAZCRmCbsPlAau6hx3H78LKshCeabCFiZCw61ZBPnWuc1mjTaZCZAQffTqNDfKyfLIYSg30g7ZCjTENhOo2Ii8tkGwoKlaZA1hbKZAWctrqT4j3WemtV931M9zFNxifIm7Ro70PaC2HQ&limit=3";

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
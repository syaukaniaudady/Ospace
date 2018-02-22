function initMap() {
	var uluru = {lat: -7.9536916, lng: 112.6146732};
	var map = new google.maps.Map(document.getElementById('map'), {
	zoom: 16,
	center: uluru
	});
	var marker = new google.maps.Marker({
	position: uluru,
	map: map
	});
}
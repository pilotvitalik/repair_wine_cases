$(document).ready(initMap(){
	let uluru = {lat: 59.914024, lng: 30.329513};
    let map = new google.maps.Map(
    document.getElementById('googleMap'), {zoom: 15, center: uluru});
    let marker = new google.maps.Marker({position: uluru, map: map});
});
$(document).ready(function(){
    initMap1();
    initMap2();
});

// Initialize and add the map
function initMap1() {
    // The location of Uluru
    var uluru = {lat: 4.5832973, lng: -74.217719};
    // The map, centered at Uluru
    var map = new google.maps.Map(
        document.getElementById('map1'), {zoom: 16, center: uluru});
    // The marker, positioned at Uluru
    var marker = new google.maps.Marker({position: uluru, map: map});
}

// Initialize and add the map
function initMap2() {
    // The location of Uluru
    var uluru = {lat: 4.6046419, lng: -74.2153217};
    // The map, centered at Uluru
    var map = new google.maps.Map(
        document.getElementById('map2'), {zoom: 16, center: uluru});
    // The marker, positioned at Uluru
    var marker = new google.maps.Marker({position: uluru, map: map});
}
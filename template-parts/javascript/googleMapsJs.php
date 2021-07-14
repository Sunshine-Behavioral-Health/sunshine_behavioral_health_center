<?php ?>

<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDVuIWR3DqMo3mruhSuZV7ltBk15G-rSIU&callback=myMap"></script>

<script type="text/javascript">
    jQuery(document).ready(function($) {
        console.log("googleMapJs running")
        if ("geolocation" in navigator) { //check geolocation available 
            //try to get user current location using getCurrentPosition() method
            navigator.geolocation.getCurrentPosition(function(position) {
                console.log("Found your location \nLat : " + position.coords.latitude + " \nLang :" + position.coords.longitude);
            });
        } else {
            console.log("Browser doesn't support geolocation!");
        }


        function myMap() {
            var mapProp = {
                center: new google.maps.LatLng(51.508742, -0.120850),
                zoom: 5,
            };
            var map = new google.maps.Map(document.getElementById("googleMap"), mapProp);
        }
    });
</script>
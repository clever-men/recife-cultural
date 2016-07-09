var map;
var directionsDisplay;
var directionsService = new google.maps.DirectionsService();

function initialize() {	
	directionsDisplay = new google.maps.DirectionsRenderer();
	var latlng = new google.maps.LatLng(-8.0710079,-34.9287891);
	
    var options = {
        zoom: 5,
		center: latlng,
		scrollwheel: false,
        mapTypeId: google.maps.MapTypeId.ROADMAP
    };

    map = new google.maps.Map(document.getElementById("mapa"), options);
	directionsDisplay.setMap(map);
	directionsDisplay.setPanel(document.getElementById("trajeto-texto"));
	
	if (navigator.geolocation) {
		navigator.geolocation.getCurrentPosition(function (position) {

			pontoPadrao = new google.maps.LatLng(position.coords.latitude, position.coords.longitude);
			map.setCenter(pontoPadrao);
			
			var geocoder = new google.maps.Geocoder();
			
			geocoder.geocode({
				"location": new google.maps.LatLng(position.coords.latitude, position.coords.longitude)
            },
            function(results, status) {
				if (status == google.maps.GeocoderStatus.OK) {
					$("#txtEnderecoPartida").val(results[0].formatted_address);
				}
            });
		});
	}
}

google.maps.event.addDomListener(window, 'load', initialize);

function passaValor(valor){
	
	alert("Sua escolha foi: " + valor);
	
	var x = document.getElementById("demo");
	
	if (navigator.geolocation) {
				navigator.geolocation.getCurrentPosition(showPosition,showError);
	} else {
		x.innerHTML = "Geolocation não é suportado por este browser.";
	}
	
	function showPosition(position) {
		
			var entrada = position.coords.latitude + "," + position.coords.longitude; 
	
			var saida = valor;	
			
			//document.getElementById('txtEnderecoPartida').value = entrada;
			
			document.getElementById('txtEnderecoChegada').value = saida;

			x.innerHTML = "Latitude: " + position.coords.latitude +
		    "<br>Longitude: " + position.coords.longitude;


			var img_url = "https://maps.googleapis.com/maps/api/staticmap?center="
				+saida+"&zoom=13&size=600x300&maptype=roadmap&markers=color:red%7Clabel:C%7C"
				+saida+"&key=AIzaSyBCAn0cec2pUCiK4DfKr_wNxcs1sHfmyKA";

		    document.getElementById("mapholder").innerHTML = "<img src='"+img_url+"'>";
	}
	
	function showError(error) {
		
			switch(error.code) {
				case error.PERMISSION_DENIED:
					x.innerHTML = "Usuário negado o pedido de Geolocalização ."
					break;
				case error.POSITION_UNAVAILABLE:
					x.innerHTML = "informações de localização não estão disponíveis."
					break;
				case error.TIMEOUT:
					x.innerHTML = "O pedido para obter a localização do usuário expirou."
					break;
				case error.UNKNOWN_ERROR:
					x.innerHTML = "Ocorreu um erro desconhecido."
					break;
			}
	}

}

$("#form-location").on('submit', function(event) {
	event.preventDefault();
	
	var enderecoPartida = $("#txtEnderecoPartida").val();
	var enderecoChegada = $("#txtEnderecoChegada").val();
	
	var request = {
		origin: enderecoPartida,
		destination: enderecoChegada,
		travelMode: google.maps.TravelMode.DRIVING
	};
	
	directionsService.route(request, function(result, status) {
		if (status == google.maps.DirectionsStatus.OK) {
			directionsDisplay.setDirections(result);
		}
	});
});
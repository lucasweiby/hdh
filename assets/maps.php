<section id="map-sec" class="map">
	<div class="row">
		<div class="col xl12 l12 m12 s12">
			<h3 class="map-title">E onde será a 3ª edição do Hana, Dul... Hallyu?</h3>
			<p class="end"><i class="material-icons">location_on</i>Theatro José de Alencar - R. Liberato Barroso, 525 - Centro, Fortaleza - CE, 60030-160</p>
		</div>
	</div>
	<div class="row">
		<div id="map" class="map-view">
			<script>
				function initMap() {
					var uluru = {lat: -3.7277855, lng: -38.5316756};
					var map = new google.maps.Map(document.getElementById('map'), {
						zoom: 15,
						center: uluru
					});
					var marker = new google.maps.Marker({
						position: uluru,
						map: map
					});
				}
			</script>
			<script async defer
			src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDDW4ts9IKkW7FZH6xC9I5bMZ1d4JHNaaA&callback=initMap">
		</script>
	</div>
</div>
</section>
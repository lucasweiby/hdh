<section id="map-sec" class="map">
	<div class="row">
		<div class="col xl12 l12 m12 s12">
			<h3 class="map-title">Onde acontecerá o Hana, Dul... Hallyu?</h3>
			<p class="end"><i class="material-icons">location_on</i>Marisol Vestuário S.A. - Rodovia CE 060 - Pavuna, Pacatuba - CE, 61800-000, Brasil</p>
		</div>
	</div>
	<div class="row">
		<div id="map" class="map-view">
			<script>
				function initMap() {
					var uluru = {lat: -3.911309, lng: -38.603777};
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
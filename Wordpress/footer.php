		<div class='footer'>
			<div class='contact'>
				<div id='googleMap'>
				</div>
				<div>
					<div id='phone'>
						<p class='contact-title contact-title-top'>Телефон</p>
						<p class='contact-discript'>8 (812) 456 78 35</p>
					</div>
					<div id='adress'>
						<p class='contact-title'>Адрес</p>
						<p class='contact-discript'>г.Москва,<br> ул.Новоизмайловская 8, <br>оф.34</p>
					</div>
					<div id='email'>
						<p class='contact-title'>E-mail</p>
						<p class='contact-discript'>info@winecooler.ru</p>
					</div>
					<div id='time'>
						<p class='contact-title'>Время работы</p>
						<p class='contact-discript'>Без выходных. С 8.00 и до последнего клиента</p>
					</div>
				</div>
			</div>
			<div class='copyright'>
				<p>Сервисный центр по ремонту сервисных шкафов</p>
				<p>Создание сайта - Trendspb</p>
			</div>
		</div>
	</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<?php wp_footer();?>
<script>
function initMap() {
  var uluru = {lat: 59.914024, lng: 30.329513};
    var map = new google.maps.Map(
      document.getElementById('googleMap'), {zoom: 15, center: uluru});
    var marker = new google.maps.Marker({position: uluru, map: map});
}
    </script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyA_YjdFtV-G7prStFpDZJ8yElJIA6X_b90&callback=initMap"
   defer></script>
</body>
</html>
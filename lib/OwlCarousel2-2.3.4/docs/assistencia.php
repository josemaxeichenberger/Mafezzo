<?php
include("painel/config.php");
$banners =  mysql_fetch_assoc(mysql_query("SELECT * FROM banners_assistencia WHERE tipo = 'topo'"));



$pegar_subcategoria_header_foto = 'banners_assistencia/' . $banners['id'] . '.jpg';
$pegar_subcategoria_header_fotoM = 'banners_assistencia/' . $banners['id'] . '.jpg';

?>
<!doctype html>
<html lang="en">

<head>
	<base href="https://csmequipamentos.com.br/">
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>CSM MÁQUINAS E EQUIPAMENTOS</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
	<script src="https://kit.fontawesome.com/3d14148b90.js" crossorigin="anonymous"></script>
	<link href="https://www.csmequipamentos.com.br/css/csm.css" rel="stylesheet" crossorigin="anonymous">
	<link href="https://www.csmequipamentos.com.br/assets2/css/style.bundle.css" rel="stylesheet" crossorigin="anonymous">
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.3/jquery.min.js" integrity="sha512-STof4xm1wgkfm7heWqFJVn58Hm3EtS31XFaagaa8VMReCXAkQnJZ+jEy8PCC/iT18dFy95WcExNHFTqLyp72eQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

	<style>
		.texto3 {
			font-size: 5em;
			color: #8F9EB1;
			line-height: 100px;
			margin-top: 25px;
		}

		.texto4 {
			font-size: 5em;
			color: #00AAFC;
			line-height: 60px;
		}

		.texto5 {
			font-size: 3em;
			color: #00AAFC;
			line-height: 50px;
			margin-top: 25px;
		}

		.desktop {
			display: block !important;
		}

		.mobile {
			display: none !important;
		}

		.texto1,
		.texto2 {

			line-height: 50px;
		}

		.texto3,
		.texto4 {

			line-height: 50px;
		}

		@media screen and (max-width: 600px) {
			.busca-model {
				position: absolute;
				z-index: 2;
				margin-top: -15px;
				width: 100%;
				height: auto;
			}

			.desktop {
				display: none !important;
			}

			.mobile {
				display: block !important;
			}
		}

		@media screen and (min-width: 1200px) {

			.texto1,
			.texto2 {
				font-size: 9em;
				line-height: 130px;
			}


			.texto3,
			.texto4 {
				font-size: 7em;
				line-height: 130px;
			}

		}

		.img-gradient {
			position: relative;
		}

		.img-gradient::after {
			content: '';
			position: absolute;
			left: 0;
			top: 0;
			width: 100%;
			height: 100%;
			border-radius: 10px;
			background: rgb(8, 114, 203);
			background: linear-gradient(0deg, rgba(8, 114, 203, 0.590095413165266) 3%, rgba(120, 120, 231, 0) 79%);
		}

		.titulo {
			line-height: 40px;
			;
		}

		.bt50 {
			background-color: #3A67AE;
			color: #fff;
			font-family: Oswald;
			font-weight: bold;
			letter-spacing: .2rem;
			font-size: 25px;

		}

		.bt50:hover {
			background-color: #3a74ad;
			color: #fff;
			font-family: Oswald;
			font-weight: bold;
			letter-spacing: .2rem;
			font-size: 25px;


		}

		.bt25 {
			background-color: #3A67AE;
			color: #fff;
			font-family: Oswald;
			font-weight: bold;
			letter-spacing: .2rem;
			font-size: 15px;
			width: 100px !important;
			height: 45px;
			margin-top: auto;
		}

		.bt25:hover {
			background-color: #3a74ad;
			color: #fff;
			font-family: Oswald;
			font-weight: bold;
			letter-spacing: .2rem;
			font-size: 15px;


		}
	</style>
	<style>
		.card-title {
			font-family: 'Titillium Web', sans-serif;
			font-weight: bold;
		}

		.card1 {
			font-family: 'Titillium Web', sans-serif;
		}

		.img-gradient {
			position: relative;
		}

		.subtitulo {
			color: #6D6D6D;
		}

		.img-gradient::after {
			content: '';
			position: absolute;
			left: 0;
			top: 0;
			width: 100%;
			height: 100%;
			border-radius: 10px;
			background: rgb(8, 114, 203);
			background: linear-gradient(0deg, rgba(8, 114, 203, 0.590095413165266) 3%, rgba(120, 120, 231, 0) 79%);
		}

		.novo-nav {
			border-top: 0px;
			border-right: 0px;
			border-left: 0px;
			border-bottom: 3px solid #fff;
		}

		.banner_interno_sub {
			padding: 200px 0 30px 0;
			background-image: url('<?php echo $pegar_subcategoria_header_foto; ?>');
			background-size: cover;
		}

		.banner_interno_sub2 {
			padding: 7px 7px 15px 0;
		}

		a {
			color: #15369F;
			border-bottom: none;
		}

		a:hover {
			border-bottom: none;
		}

		@media screen and (max-width: 600px) {
			.banner_interno_sub {
				padding: 120px 0 30px 0;
				background-image: url('<?php echo $pegar_subcategoria_header_fotoM; ?>');
				background-size: auto;
				height: 50vh !important;
				background-position: top
			}

			.chamada-categorias {
				margin-top: 50px;
			}
		}

		@media screen and (min-width: 601px) {
			.banner_interno_sub {
				padding: 120px 0 30px 0;
				background-image: url('<?php echo $pegar_subcategoria_header_fotoM; ?>');
				background-size: auto;
				height: 50vh !important;
				background-position: top
			}
		}

		@media screen and (min-width: 701px) {
			.banner_interno_sub {
				padding: 120px 0 30px 0;
				background-image: url('<?php echo $pegar_subcategoria_header_fotoM; ?>');
				background-size: auto;
				height: 50vh !important;
				background-position: top
			}
		}

		@media screen and (min-width: 801px) {
			.banner_interno_sub {
				padding: 120px 0 30px 0;
				background-image: url('<?php echo $pegar_subcategoria_header_fotoM; ?>');
				background-size: auto;
				height: 50vh !important;
				background-position: top
			}
		}


		@media screen and (min-width: 1200px) {
			.banner_interno_sub {
				padding: 100px 0 30px 0;
				background-image: url('<?php echo $pegar_subcategoria_header_foto; ?>');
				background-size: 100%;
				height: 40vh !important;


			}
		}

		@media screen and (min-width: 1400px) {
			.banner_interno_sub {
				padding: 100px 0 30px 0;
				background-image: url('<?php echo $pegar_subcategoria_header_foto; ?>');
				background-size: 100%;
				height: 40vh !important;


			}
		}

		@media screen and (min-width: 1700px) {
			.banner_interno_sub {
				padding: 100px 0 30px 0;
				background-image: url('<?php echo $pegar_subcategoria_header_foto; ?>');
				background-size: 100%;
				height: 40vh !important;


			}
		}

		@media screen and (min-width: 2000px) {
			.banner_interno_sub {
				padding: 200px 0 30px 0;
				background-image: url('<?php echo $pegar_subcategoria_header_foto; ?>');
				background-size: 100%;
				height: 30vh !important;


			}
		}

		.titulo_categorias,
		.texto1 {
			line-height: 50px;
		}

		#map {
			height: 50vh;
			width: 100%;
		}

		#floating-panel {
			position: absolute;
			top: 10px;
			left: 25%;
			z-index: 5;
			background-color: #fff;
			padding: 5px;
			border: 1px solid #999;
			text-align: center;
			font-family: "lato", "sans-serif";
			line-height: 30px;
			padding-left: 10px;
		}

		#floating-panel {
			width: 440px;
		}

		#place-id {
			width: 250px;
		}

		.lista {
			border: none;
			margin-top: 10px;
			margin-bottom: 10px;
		}

		.subtitulo {
			text-transform: uppercase;
			font-family: 'Lato', sans-serif !important;
			font-size: 16px !important;
		}
	</style>
</head>

<body>
	<?php include("topo.php"); ?>

	<div class="site">
		<div class="banner_interno_sub" style=" background-repeat: no-repeat;">
			<div class="container">
				<div class="row">
					<div class="col-md-8" style="padding-bottom: 70px;padding-top:20px">
						<span class="titulo_categorias">Assistência Técnica</span>
					</div>



				</div>

			</div>
			<div class="container" style="margin-top: 50px;">
				<div class="row my-5">
					<div class="col-4">
						<div class="form-group">
							<label for="exampleInputEmail1">CEP / Endereço: </label>
							<input type="text" class="form-control input-lg " name="local" id="local" value="" required>
							<input type="hidden" name="lat" id="lat">
							<input type="hidden" name="lng" id="lng">
							<input type="hidden" name="place_id" id="place-id">
							<input type="hidden" name="place_uf" id="place-uf">
							<input type="hidden" name="place_cidade" id="place-cidade">
							<input type="hidden" name="place_pais" id="place-pais">

						</div>
					</div>
					<button class="btn bt25 w-25  mx-5 " id="buscar">BUSCAR</button>
					<button class="btn bt25 w-25 mx-5" id="limpar">LIMPAR</button>
				</div>
				<div id="map"></div>
				<div>
					<ul class="list-group" id="lista">


					</ul>
				</div>
			</div>

			<script>
				function initMap() {
					var features = [];
					const input = document.getElementById("local");
					let lat;
					let lng;
					let partida;
					// Specify just the place data fields that you need.

					const brasil = new google.maps.LatLng(-14.2385592, -60.3383427);
					const map = new google.maps.Map(document.getElementById("map"), {
						center: brasil,
						zoom: 4,
					});
					if (navigator.geolocation) {
						navigator.geolocation.getCurrentPosition(function(position) { // callback de sucesso
								// ajusta a posição do marker para a localização do usuário
								//marker.setPosition(new google.maps.LatLng(position.coords.latitude, position.coords.longitude));
								lat = position.coords.latitude;
								lng = position.coords.longitude;
								cord = {
									lat: lat,
									lng: lng
								}
								map.setCenter(cord);
								map.setZoom(8);
								return
							},
							function(error) { // callback de erro
								alert('Erro ao obter localização!');
								console.log('Erro ao obter localização.', error);
							});
					} else {
						console.log('Navegador não suporta Geolocalização!');
					}
					const autocomplete = new google.maps.places.Autocomplete(input, {
						componentRestrictions: {
							country: ["br"]
						},
						fields: ["place_id", "geometry", "formatted_address", "name", "address_components"],
					});
					const infowindow = new google.maps.InfoWindow();
					const geocoder = new google.maps.Geocoder();

					const infowindowContent = document.getElementById("infowindow-content");
					const buscar = document.getElementById("buscar");
					infowindow.setContent(infowindowContent);

					autocomplete.addListener("place_changed", () => {
						infowindow.close();
						const place = autocomplete.getPlace();

						if (!place.geometry || !place.geometry.location) {
							return;
						}
						// infowindowContent.children.namedItem("place-name").textContent = place.name;
						// infowindowContent.children.namedItem("place-id").textContent = place.place_id;
						//infowindowContent.children.namedItem("place-address").textContent = place.formatted_address;


						$('#lat').val(place.geometry.location.lat());
						$('#lng').val(place.geometry.location.lng());
						$('#place-id').val(place.place_id);
						partida = place.formatted_address;
						for (let index = 0; index < place.address_components.length; index++) {
							console.log(place.address_components[index]['types'][0]);
							console.log(place.address_components[index]);
							var key = place.address_components[index]['types'][0];
							var value = place.address_components[index];
							switch (key) {
								case 'postal_code':
									$('#cep').val(value['long_name']);
									break;
								case 'route':
									$('#rua').val(value['long_name']);
									break;
								case 'street_number':
									$('#numero').val(value['long_name']);
									break;
								case 'sublocality_level_1':
									$('#bairro').val(value['long_name']);
									break;
								case 'administrative_area_level_2':
									$('#cidade').val(value['long_name']);
									break;
								case 'country':

									$('#place-pais').val(value['short_name']);
									break;
								case 'administrative_area_level_1':
									$('#place-uf').val(value['short_name']);
									break;
								default:
									break;
							}

						}




						enter()


					});

					document.getElementById("limpar").addEventListener("click", () => {
						const brasil = new google.maps.LatLng(-14.2385592, -60.3383427);
						const map = new google.maps.Map(document.getElementById("map"), {
							center: brasil,
							zoom: 4,
						});
						$('#lista').empty();
						$('#local').val('');
					});

					// document.getElementById("buscar").addEventListener("click", () => {
					// 	enter()
					// });
					$('#buscar').click(function() {
						var cep = $('#local').val().replace(/\D/g, '');
						
						if (cep != "") {

							//Expressão regular para validar o CEP.
							var validacep = /^[0-9]{8}$/;

							//Valida o formato do CEP.
							if (validacep.test(cep)) {


								//Consulta o webservice viacep.com.br/
								$.getJSON("https://viacep.com.br/ws/" + cep + "/json/?callback=?", function(dados) {

									if (!("erro" in dados)) {

										$('#place-uf').val(dados.uf);
										enter();
									} //end if.
									else {
										//CEP pesquisado não foi encontrado.

										alert("CEP não encontrado.");
									}
								});
							} //end if.
							else {
								//cep é inválido.

								alert("Formato de CEP inválido.");
							}
						}
					})


					$("#local").keydown(function(e) {
						if (e.keyCode == 13) {
							var cep = $(this).val().replace(/\D/g, '');
							if (cep != "") {

								//Expressão regular para validar o CEP.
								var validacep = /^[0-9]{8}$/;

								//Valida o formato do CEP.
								if (validacep.test(cep)) {


									//Consulta o webservice viacep.com.br/
									$.getJSON("https://viacep.com.br/ws/" + cep + "/json/?callback=?", function(dados) {

										if (!("erro" in dados)) {

											$('#place-uf').val(dados.uf);
											enter();
										} //end if.
										else {
											//CEP pesquisado não foi encontrado.

											alert("CEP não encontrado.");
										}
									});
								} //end if.
								else {
									//cep é inválido.

									alert("Formato de CEP inválido.");
								}
							}

						}
					});

					function enter() {
						features = [];
						var estado = $('#place-uf').val();

						//ler banco de dados
						$('#lista').html('');
						$.ajax({
								url: "https://www.csmequipamentos.com.br/buscar_assistencia.php",
								type: 'post',
								data: {
									uf: estado

								}

							})
							.done(function(data) {
								var dados = jQuery.parseJSON(data);
								for (let index = 0; index < dados.length; index++) {
									const element = dados[index];
									var lat = element[13];
									var lng = element[14];
									console.log(element);
									features.push({
										position: new google.maps.LatLng(lat, lng),
										title: element[1],
										fone: element[4]

									})
								}
								geocodeLatLng(features, geocoder, map, infowindow);
							})
							.fail(function(jqXHR, textStatus, data) {

							});

					}

					function geocodeLatLng(features, geocoder, map, infowindow) {
						for (let i = 0; i < features.length; i++) {

							geocoder
								.geocode({
									location: features[i].position,
								})
								.then((response) => {
									if (response.results[0]) {
										var bounds = new google.maps.LatLngBounds();
										bounds.extend(features[i].position);

										map.fitBounds(bounds);
										map.setZoom(7);

										const marker = new google.maps.Marker({
											position: features[i].position,
											map: map,

										});
										const contentString =
											'<div id="content">' +
											'<div id="siteNotice">' +
											"</div>" +

											'<h1 id="firstHeading" class="subtitulo">' + features[i].title + '</h1>' +
											'<div id="bodyContent">' +
											"<p><b class='cinza'>" + response.results[0].formatted_address + "</b>" +
											'<h3 id="firstHeading" class="cinza">' + features[i].fone + '</h3>' +

											" </p>" +
											'<p><a class="btn btn-primary  btn-sm w-50 mr-auto" href="https://www.google.com/maps/dir/?api=1&origin=' + partida + '&destination=' + response.results[0].formatted_address + '&travelmode=driving"><img src="img/ico_localizacao.png" width="30">' +
											"Como chegar</a> " +
											"</p>" +
											"</div>" +
											"</div>";

										infowindow.setContent(contentString);
										infowindow.open(map, marker);



										marker.addListener("click", () => {
											map.setZoom(13);

										});
										marker.addListener("click", () => {
											;
											infowindow.open(marker.get("map"), marker);
										});
										$('#lista').append('<li class="list-group-item d-flex flex-column align-items-star lista">' +

											'<h1 class="subtitulo">' + features[i].title + '</h1>' +


											'<h3 class="cinza">' + response.results[0].formatted_address + '</h3>' +
											'<h3 class="cinza">' + features[i].fone + '</h3>' +
											'<a class="btn btn-primary  btn-sm w-25 mr-auto" target="_black" href="https://www.google.com/maps/dir/?api=1&origin=' + partida + '&destination=' + response.results[0].formatted_address + '&travelmode=driving"><img src="img/ico_localizacao.png" width="30">' +
											'Como chegar</a>' +
											'</li>');


									} else {
										//window.alert("No results found");
									}
								})
							//.catch((e) => window.alert("Geocoder failed due to: " + e));

						}
					}

				}


				window.initMap = initMap;
			</script>
			<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyA4j11sMRke-K8RwycIvyre4Wku_Tu-O_M&callback=initMap&libraries=places&v=weekly" defer></script>


			<br>
			<br>
			<br>
			<br>
			<br>
			<br>
			<br>
			<br>
			<br>
			<br>
			<br>
			<br>
			<br>
			<br>
			<br>
			<br>
			<br>
			<br>
			<br>
			<br>
			<br>
			<br>
			<br>


			<?php include("footer.php"); ?>
		</div>

		<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.3/jquery.min.js" integrity="sha512-STof4xm1wgkfm7heWqFJVn58Hm3EtS31XFaagaa8VMReCXAkQnJZ+jEy8PCC/iT18dFy95WcExNHFTqLyp72eQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
		<script src='assets2/jquery.mask.js'></script>
		<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>





</body>

</html>
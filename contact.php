<?php
$page_name = 'contact';
$page_inner = '';
include 'inc/meta.php';
include 'inc/header.php';
?>
<div class="pageinner-wrapper scroll-event">
	<div class="container">
		<div class="breadCrumb">
			<ul>
				<li><a href="">Home</a></li>
				<li><span>Contact Us</span></li>
			</ul>
		</div>
		<div class="cover-image contact-us">
			<span class="hilight"></span>
			<div id="map"></div>
			<div class="cover-title">
				<h3>Contact Us</h3>
			</div>
		</div>
		<div class="contact-wrapper">
			<div class="row">
				<div class="col-sm-4">
					<div class="topic-box">
						<h3>Contact Us</h3>
					</div>
					<div class="txt-box">
						<h3>T.B.P. Publication Co.,Ltd.</h3>
						<p>
							3300/111 Elephant Tower ( Zone B) 21 Fl., Phahonyothin Rd.,
							Chompol, Jatujak, Bangkok 10900, Thailand
						</p>
						<ul>
							<li>
								<span>Tel : </span>
								<p>02-838-9999 Ext. 1177</p>
							</li>
							<li>
								<span>Fax :</span>
								<p>02-760-8880</p>
							</li>
							<li>
								<span>Website : </span>
								<a href="http://www.thailandpages.com/">www.thailandpages.com</a>
							</li>
							<li>
								<span>E-mail : </span>
								<p>pornsawatv@gmail.com</p>
							</li>
						</ul>
					</div>
					<div class="img-maps">
						<a id="single_image" href="images/tbp-map_big.jpg">
							<img src="images/tbp-map.jpg" alt="">
						</a>
					</div>
				</div>
				<div class="col-sm-8">
					<div class="topic-box">
						<h3>Contact Us</h3>
					</div>
					<form action="" class="form-theme">
						<div class="form-group">
							<div class="col-sm-12 input-control">
								<input type="text" class="form-control" id="" placeholder="Contact Topic">
							</div>
						</div>
						<div class="form-group">
							<div class="col-sm-6 input-control">
								<input type="text" class="form-control" id="" placeholder="First Name">
							</div>
							<div class="col-sm-6 input-control">
								<input type="text" class="form-control" id="" placeholder="Date of Birth">
							</div>
						</div>
						<div class="form-group">
							<div class="col-sm-6 input-control">
								<input type="text" class="form-control" id="" placeholder="Telephone">
							</div>
							<div class="col-sm-6 input-control">
								<input type="email" class="form-control" id="" placeholder="E-mail">
							</div>
						</div>
						<div class="form-group">
							<div class="col-sm-12 input-control">
								<textarea name="" id="" cols="12" rows="5" class="form-control" placeholder="Contact Details"></textarea>
							</div>
						</div>
						<div class="check-privacy checkWrapper">
							<label class="checkBox">
								<input type="checkbox" name="provacy" value="1"> <span></span>
								<p>I certify that the above statements are true.</p>
							</label>
						</div>
						<div class="button-control">
							<button class="btn-submit">SEND</button>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
</div>

<?php include 'inc/footer.php';?>

<script>

	$(document).ready(function() {
	       //Google API
	       var type_map = google.maps.MapTypeId.ROADMAP;      //.ROADMAP , .TERRAIN
	       var zoom = 16;
	       var myLatLng = new google.maps.LatLng(13.825420,100.568995);
	       var icon_marker = '';
	       var animation = google.maps.Animation.DROP;
	       // var content_info_window =
	       // '<div class="maps-captoin">'+
	       // '<img src="images/contact/thumb.jpg" alt="">'+
	       // '</div>';
	       var scrollwheel = false;

	       function initialize() {
	       	var mapCanvas = document.getElementById('map');
	       	var mapOptions = {
	       		center: myLatLng,
	       		zoom: zoom,
	       		draggable: false,
	       		mapTypeId: type_map,
	       		scrollwheel:scrollwheel
	       	};
	       	map = new google.maps.Map(document.getElementById('map'),
	       		mapOptions);


	       	// var infowindow = new google.maps.InfoWindow({content: content_info_window});

	       	var marker = new google.maps.Marker({
	       		map: map,
	       		icon: icon_marker,
	       		draggable: false,
	       		animation: google.maps.Animation.DROP,
	       		position: myLatLng,
	       	});
	       	// infowindow.open(map, marker);

	       }
	       google.maps.event.addDomListener(window, 'load', initialize);
	       // google.maps.event.addListener(marker, 'click', function(event) {
	       //     infowindow.open(map, marker);
	       // });


	       /* Popup Maps */
	       $("a#single_image").fancybox();
	   });
	</script>
	<?php include 'inc/javascript.php';?>


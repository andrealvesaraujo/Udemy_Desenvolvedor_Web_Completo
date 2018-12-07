<?php include_once("header.php"); ?>

<link rel="stylesheet" href="lib/plyr/dist/plyr.css">
		
<section>
			<div id="call-to-action">

				<div class="container">
					<div class="row text-center">

						<div class="container">
							<h2>Videos</h2>
							<hr>
						</div>

					</div>	

					<div class="row video-principal">
						

						<video poster="img/highlights.jpg" controls>
   							<source src="mp4/highlights.mp4" type="video/mp4">
   							<track kind="captions" label="Português (Brasil)" src="vtt/legendas.vtt" srclang="pt-br" default>
						</video>
						
						<input id="volume" type="range" min="0" max="1" step="0.01" value="1">

						<button type="button" id="btn-play-pause" class="btn btn-success">Play</button>

						<!-- Tb tem o atributo autoplay.N é recomendado sem autorização do dono do site. -->
						<!--<audio src="mp3/audio.mp3" style="display:none" controls=""></audio> -->
					
					</div>		
				
				</div>

			</div>

			<div id="news" class="row" style="top:0">
				<div class="container">
					<h2>Latest News</h2>
					<hr>
				</div>
				<div class="row thumbnails owl-carousel owl-theme">
					<div class="item" data-video="highlights">
						<div class="item-inner">

							<img src="img/highlights.jpg" alt="Noticia">
							<h3>Highlights</h3>
							
							
						</div>
					</div>
					
					<div class="item" data-video="Orlando_City_Foundation_2015">
						<div class="item-inner">

							<img src="img/Orlando_City_Foundation_2015.jpg" alt="Noticia">
							<h3>Orlando City Foundation 2015</h3>
							
							
						</div>
					</div>
					
					<div class="item" data-video="highlights">
						<div class="item-inner">

							<img src="img/highlights.jpg" alt="Noticia">
							<h3>Highlights</h3>
							
							
						</div>
					</div>
					
					<div class="item" data-video="Orlando_City_Foundation_2015">
						<div class="item-inner">

							<img src="img/Orlando_City_Foundation_2015.jpg" alt="Noticia">
							<h3>Orlando City Foundation 2015</h3>
							
							
						</div>
					</div>
					
					<div class="item" data-video="highlights">
						<div class="item-inner">

							<img src="img/highlights.jpg" alt="Noticia">
							<h3>Highlights</h3>
							
							
						</div>
					</div>
					
					<div class="item" data-video="Orlando_City_Foundation_2015">
						<div class="item-inner">

							<img src="img/Orlando_City_Foundation_2015.jpg" alt="Noticia">
							<h3>Orlando City Foundation 2015</h3>
								
						</div>
					</div>
				</div>	
			</div>
</section>
		
		
<?php include_once("footer.php"); ?>

<script src="lib/plyr/dist/plyr.js"></script>

<script>
$(function(){
	$(".thumbnails .item").on("click",function(){

		$("video").attr({
				"src":"mp4/"+$(this).data('video') + ".mp4",
				"poster":"img/" +$(this).data('video') + ".jpg"
		});

	});

	$("#volume").on("mousemove" , function(){
				
		$("video")[0].volume = parseFloat($(this).val());
	});

	$("#btn-play-pause").on("click",function(){

		var video=$("video")[0];

		if($(this).hasClass("btn-success")){
			$(this).text("STOP");
			video.play()
		}
		else{
			$(this).text("PLAY");
				video.pause();
			}
			$(this).toggleClass("btn-success btn-danger");
					
		});
		plyr.setup(document.querySelector('.player'));//Disparando o player PLYR 
});
</script>
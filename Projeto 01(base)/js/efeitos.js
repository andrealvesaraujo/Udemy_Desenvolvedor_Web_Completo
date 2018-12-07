$(document).ready(function(){

		$("#logotipo").on("mouseover",function(){
			console.log("Passou o mouse no logotipo");
			$("#banner h1").addClass("efeito");

		}).on("mouseout",function(){

			$("#banner h1").removeClass("efeito");


		});

		$("#input-search").on("focus", function(){

			$("li.search").addClass("ativo");

		}).on("blur",function(){
					
			$("li.search").removeClass("ativo");

		});

		$(".thumbnails").owlCarousel({
			loop:true,
			nav:true,
			margin:10,
			navText:["Anterior","Proximo"],
			responsive: {
				0: {
					items:1
				},
				480: {
					items:3
					
				},
				1000: {
					items:4
				}
			}
		});
	});
	
	
$(document).ready(function(){

	if($('.svg').css('display') == 'none'){

	}
	else{
		$('[id^=text-]').hide();
		var id = "01";
		$('[id=text-'+id+']').show();

		$('.ellipse').hover(function(){
			var id = $(this).attr("id");
			//		$(this).toggle('toggleHover');

			//		$('button').html("text-"+id);
			$('[id^=text-]').hide();
			$('[id=text-'+id+']').show();
		});
	}

});

//$(document).ready(function(){
//
//	if($('.svg').css('display') == 'none'){
//
//	}
//	else{
//		$('[id^=text-]').hide();
//		var id = "01";
//		$('[id=text-'+id+']').show();
//
////		$('.ellipse').hover(function(){
////			var id = $(this).attr("id");
////			//		$(this).toggle('toggleHover');
////
////			//		$('button').html("text-"+id);
////			$('[id^=text-]').hide();
////			$('[id=text-'+id+']').show();
////		});
//
//		$('.ellipse').mousein(function(){
//			var id = $(this).attr("id");
//			$(this).addClass('hover');
//			$('[id=titre-'+id+']').addClass('hover');
//		});
//		$('.ellipse').mouseout(function(){
//			var id = $(this).attr("id");
//			$(this).removeClass('hover');
//			$('[id=titre-'+id+']').removeClass('hover');
//		});
//	}
//
//});
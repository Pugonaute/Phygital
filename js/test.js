//$(document).ready(function(){
//
//
//	$('button').click(function(){
//
//		if($('button').hasClass('clicked')){
//			$('button').removeClass('clicked');
//
//			var grow = 'GRAND';
//			$('button').html(grow);
//
//			$('.carre').removeClass('grow');	
//		}
//
//		else{
//			$('button').addClass('clicked');
//			var grow = 'PETIT';
//			$('button').html(grow);
//
//			$('.carre').addClass('grow');
//		}
//
//	});
//
//});	
//
//$(document).ready(function(){
//	$("#myBtn").click(function(){
//		var elmId = $("#test").attr("id");
//		alert(elmId);
//	});
//});

$(document).ready(function(){

	$('[id^=text-]').hide();
	var id = "01";
	$('[id=text-'+id+']').show();
	
	$('.hover').hover(function(){
		var id = $(this).attr("id");
//		$(this).toggle('toggleHover');
		
//		$('button').html("text-"+id);
		$('[id^=text-]').hide();
		$('[id=text-'+id+']').show();
		});

	});
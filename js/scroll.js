$( document ).ready(function() {
	$('.js-scrollto').on('click', function() { // Au clic sur un élément
		var page = $(this).attr('href'); // Page cible
		var speed = 900; // Durée de l'animation
			
		$('html, body').animate( { scrollTop: $(page).offset().top }, speed ); // Go
		return false;
	
	});
});
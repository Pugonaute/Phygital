
$(document).ready(
    function(){
        
        $('#contact #formulaire .conteneur article ul:nth-child(1) li').click(
            function(){
                $(this).toggleClass('active');
                $(this).siblings().removeClass('active');
            }
        );

        $('#contact #formulaire .conteneur article ul:nth-child(2)').click(
            function(){
                $(this).toggleClass('active');
            }
        );
      


    }
);

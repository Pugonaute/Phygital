
$(document).ready(
    function(){

        $('header .menu-burger').click(
            function(){
                $('header nav').toggleClass('active')
                $('header .menu-burger').toggleClass('active')
            }
        );

    }
);

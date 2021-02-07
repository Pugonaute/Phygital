
$(document).ready(
    function(){
        var src;
        var alt;

        $('#fonctionnalité .content >div').click(
            function(){
                src = $(this).attr('data-src');
                alt = $(this).attr('data-alt');
                $('#fonctionnalité .capture-app img').attr('src',src)
                $('#fonctionnalité .capture-app img').attr('alt',alt)
                $('#fonctionnalité .content >div').removeClass('active');
                $(this).addClass('active');
            }
        );

        // setTimeout(function(){
        //     alert("Hello");
        // }, 3000);
    }
);


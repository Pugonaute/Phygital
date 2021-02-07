
$(document).ready(
    function(){
        var data;

        $('#fonctionnalité .content >div').click(
            function(){
                data = $(this).attr('data');
                $('#fonctionnalité .capture-app img').attr('src',data)
                $('#fonctionnalité .content >div').removeClass('active');
                $(this).addClass('active');
            }
        );

        // setTimeout(function(){
        //     alert("Hello");
        // }, 3000);
    }
);


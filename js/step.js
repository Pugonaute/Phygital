
$(document).ready(
    function(){

        var slidePage = $('.slide-part');

        var prevBtnFirst = $('.prev-1');
        var nextBtnFirst = $('.next-1');
        var prevBtnSec = $('.prev-2');
        var nextBtnSec = $('.next-2');
        var prevBtnThird = $('.prev-3');
        var nextBtnThird = $('.next-3');
        var prevBtnFourth = $('.prev-4');
        var nextBtnFourth = $('.next-4');

        var btnScanner = $('#progress-bar :nth-child(1)');
        var btnEvaluer = $('#progress-bar :nth-child(2)');
        var btnComparer = $('#progress-bar :nth-child(3)');
        var btnLocal = $('#progress-bar :nth-child(4)');

        prevBtnFirst.click(
            function(){
                slidePage.css('margin-left','-300%');
                $('#progress-bar >:nth-child(1) .bullet').removeClass('active');
                $('#progress-bar >:nth-child(1) .step-text').removeClass('active');
                $('.bullet').addClass('active');
                $('.step-text').addClass('active');
            }
        );

        nextBtnFirst.click(
            function(){
                slidePage.css('margin-left','-100%');
                $('#progress-bar >:nth-child(2) .bullet').addClass('active');
                $('#progress-bar >:nth-child(2) .step-text').addClass('active');
            }
        );

        prevBtnSec.click(
            function(){
                slidePage.css('margin-left','0%');
                $('#progress-bar >:nth-child(2) .bullet').removeClass('active');
                $('#progress-bar >:nth-child(2) .step-text').removeClass('active');
            }
        );

        nextBtnSec.click(
            function(){
                slidePage.css('margin-left','-200%');
                $('#progress-bar >:nth-child(3) .bullet').addClass('active');
                $('#progress-bar >:nth-child(3) .step-text').addClass('active');
            }
        );

        prevBtnThird.click(
            function(){
                slidePage.css('margin-left','-100%');
                $('#progress-bar >:nth-child(3) .bullet').removeClass('active');
                $('#progress-bar >:nth-child(3) .step-text').removeClass('active');
            }
        );

        nextBtnThird.click(
            function(){
                slidePage.css('margin-left','-300%');
                $('#progress-bar >:nth-child(4) .bullet').addClass('active');
                $('#progress-bar >:nth-child(4) .step-text').addClass('active');
            }
        );

        prevBtnFourth.click(
            function(){
                slidePage.css('margin-left','-200%');
                $('#progress-bar >:nth-child(4) .bullet').removeClass('active');
                $('#progress-bar >:nth-child(4) .step-text').removeClass('active');
            }
        );

        nextBtnFourth.click(
            function(){
                slidePage.css('margin-left','0%');
                $('.bullet').removeClass('active');
                $('.step-text').removeClass('active');
                $('#progress-bar >:nth-child(1) .bullet').addClass('active');
                $('#progress-bar >:nth-child(1) .step-text').addClass('active');
            }
        );

        btnScanner.click(
            function(){
                slidePage.css('margin-left','0%');
                $('.bullet').removeClass('active');
                $('.step-text').removeClass('active');
                $('#progress-bar >:nth-child(1) .bullet').addClass('active');
                $('#progress-bar >:nth-child(1) .step-text').addClass('active');
            }
        );

        btnEvaluer.click(
            function(){
                slidePage.css('margin-left','-100%');
                $('.bullet').removeClass('active');
                $('.step-text').removeClass('active');
                $('#progress-bar >:nth-child(1) .bullet').addClass('active');
                $('#progress-bar >:nth-child(1) .step-text').addClass('active');
                $('#progress-bar >:nth-child(2) .bullet').addClass('active');
                $('#progress-bar >:nth-child(2) .step-text').addClass('active');
            }
        );

        btnComparer.click(
            function(){
                slidePage.css('margin-left','-200%');
                $('.bullet').removeClass('active');
                $('.step-text').removeClass('active');
                $('#progress-bar >:nth-child(1) .bullet').addClass('active');
                $('#progress-bar >:nth-child(1) .step-text').addClass('active');
                $('#progress-bar >:nth-child(2) .bullet').addClass('active');
                $('#progress-bar >:nth-child(2) .step-text').addClass('active');
                $('#progress-bar >:nth-child(3) .bullet').addClass('active');
                $('#progress-bar >:nth-child(3) .step-text').addClass('active');
            }
        );

        btnLocal.click(
            function(){
                slidePage.css('margin-left','-300%');
                $('.bullet').removeClass('active');
                $('.step-text').removeClass('active');
                $('#progress-bar >:nth-child(1) .bullet').addClass('active');
                $('#progress-bar >:nth-child(1) .step-text').addClass('active');
                $('#progress-bar >:nth-child(2) .bullet').addClass('active');
                $('#progress-bar >:nth-child(2) .step-text').addClass('active');
                $('#progress-bar >:nth-child(3) .bullet').addClass('active');
                $('#progress-bar >:nth-child(3) .step-text').addClass('active');
                $('#progress-bar >:nth-child(4) .bullet').addClass('active');
                $('#progress-bar >:nth-child(4) .step-text').addClass('active');
            }
        );

    }
);


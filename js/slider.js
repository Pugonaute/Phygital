document.addEventListener( 'DOMContentLoaded', function () {
    new Splide( '#image-slider', {
        type     : 'loop',
        // autoWidth: true,
        focus    : 'center',
        trimSpace: false,
        perMove: 5,
        perPage: 5,
        arrows: 'true',
        arrowPath:'M17.1309 19.5001L0.605835 35.5661L3.39415 38.4341L22.8691 19.5001L3.39415 0.566101L0.605833 3.43408L17.1309 19.5001Z',
        // cover      : true,
        // fixedWidth : 120,
        // height     : 70,
        gap     : 80,
        breakpoints : {

            '1100': {
                focus    : 4,
                perPage: 4,
                perMove: 4,
                width: '72vw',
            },


            '800': {
                focus    : 3,
                perPage: 3,
                perMove: 3,
                width: '72vw',
            },


            '600': {
                focus    : 2,
                perPage: 2,
                perMove: 2,
                
                width: '72vw',
                gap     : 48,
            }
        },
        autoplay:'play',
        pagination:'slider',
        

    } ).mount();
} );
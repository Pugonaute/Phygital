document.addEventListener( 'DOMContentLoaded', function () {
    new Splide( '#image-slider', {
        type     : 'loop',
        // autoWidth: true,
        focus    : 'center',
        trimSpace: false,
        perPage: 4,
        perMove: 4,
        arrows: 'true',
        arrowPath:'M17.1309 19.5001L0.605835 35.5661L3.39415 38.4341L22.8691 19.5001L3.39415 0.566101L0.605833 3.43408L17.1309 19.5001Z',
        
        autoplay:'play',
        

    } ).mount();
} );
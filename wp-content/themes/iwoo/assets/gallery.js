$(document).ready(function() {
    $('.splide__listtemplate').magnificPopup({
        delegate: 'a', // child items selector, by clicking on it popup will open
        type: 'image',
        gallery: {
            enabled: true
        },
        // other options
    });
});
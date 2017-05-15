
/// ------------------------------------------------------ INITALIZING SLICK ON MOBILE

if ($(window).width() < 480) {
    $('#tile-container').slick({
        centerMode: true,
        centerPadding: '20px',
        infinite: false,
        arrows: false,
        slidesToShow: 1,
        edgeFriction: .3
    });
}

/// ------------------------------------------------------- SWITCHING BETWEEN INFORMATION

$('._funda-tile-show-more').on('click', function(e) {
    e.preventDefault();
    $(this).toggleClass('triggered');
    $(this).closest( ".funda-tile" ).toggleClass('funda-tile--triggered');
});

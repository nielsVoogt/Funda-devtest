
/// ------------------------------------------------------- SWITCHING BETWEEN INFORMATION

$('._funda-tile-show-more').on('click', function(e) {
    e.preventDefault();
    $(this).toggleClass('triggered');
    $(this).closest( ".funda-tile" ).toggleClass('funda-tile--triggered');
});

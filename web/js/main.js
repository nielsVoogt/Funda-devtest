
/// ------------------------------------------------------- SWITCHING BETWEEN INFORMATION

$('._funda-tile-show-more').on('click', function(e) {
    e.preventDefault();
    var $this = $(this);
    $this.toggleClass('triggered');
    $this.closest('.funda-tile').toggleClass('funda-tile--show-additional-content');
    if($this.hasClass('triggered')){
        $this.find('._button-content').text('Terug naar de beschrijving');
    } else {
        $this.find('._button-content').text('Bekijk de details');
    }
});

/// ------------------------------------------------------- SHOWING THE MAP

$('._funda-tile-show-location').on('click', function(e) {
    e.preventDefault();
    $(this).closest('.funda-tile').find('.funda-tile__top').toggleClass('funda-tile__top--show-map');
});

$('.sl').slick({
    autoplay: false,
    centerMode: true,
    lazyLoad: 'ondemand',
    // dots: true,
    centerPadding: '12%',
    speed: 500,
    slidesToShow: 1,
    responsive: [
        {
          breakpoint: 880,
          settings: {
            centerPadding: '0',
          }
        }
      ]
});
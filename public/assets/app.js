$(document).ready(function () {
    $('#searchInput').on('focus', function () {
        $('#suggestionBox').slideDown(200);
    });

    $(document).on('click', function (e) {
        if (!$(e.target).closest('.search-box').length) {
        $('#suggestionBox').slideUp(200);
        }
    });

    // Optional: Add functionality to the Go button
    $('.go-button').on('click', function() {
        alert('Searching for: ' + $('#searchInput').val());
        // You can replace this with actual search functionality
    });

    // Slick Carousel
    $('.model-carousel').slick({
      slidesToShow: 4,
      slidesToScroll: 1,
      arrows: true,
      // prevArrow: '<button type="button" class="slick-prev slick-arrow"><i class="fa-solid fa-arrow-left"></i></button>',
      // nextArrow: '<button type="button" class="slick-next slick-arrow"><i class="fa-solid fa-arrow-right"></i></button>',
      responsive: [
        {
          breakpoint: 992,
          settings: {
            slidesToShow: 2
          }
        },
        {
          breakpoint: 576,
          settings: {
            slidesToShow: 1
          }
        }
      ]
    });

    // View More
    $('.show-content').each(function() {
        const content = $(this);
        const toggleBtn = content.next('.show-toggle-btn');

        // Check if content height exceeds 200px
        if (content[0].scrollHeight > 200) {
            toggleBtn.show(); // Show the button if content is taller
        }

        // Toggle button click event
        toggleBtn.click(function(e) {
            e.preventDefault();
            content.toggleClass('expanded');

            if (content.hasClass('expanded')) {
                toggleBtn.text('Show Less');
            } else {
                toggleBtn.text('Show More');
            }
        });
    });

    // ********** Toggle Wishlist ********** //
    $('[data-bs-toggle="tooltip"]').tooltip();

    $('.wishlist-btn').on('click', function () {
        let button = $(this);
        let icon = button.find('i');

        button.toggleClass('active');

        let newTitle = button.hasClass('active') ? 'Remove from wishlist' : 'Add to wishlist';
        button.attr('data-bs-original-title', newTitle).tooltip('hide').tooltip('show');

        if (button.hasClass('active')) {
            icon.removeClass('fa-regular').addClass('fa-solid');
        } else {
            icon.removeClass('fa-solid').addClass('fa-regular');
        }
    });

    // ********** More Suggested Vehicles ********** //
    $('.suggested-vehicles-slide').slick({
      slidesToShow: 4,
      slidesToScroll: 1,
      arrows: true,
      infinite: false,
      responsive: [
        {
          breakpoint: 1199,
          settings: { slidesToShow: 3 }
        },
        {
          breakpoint: 992,
          arrows: false,
          settings: { slidesToShow: 2 }
        },
        {
          breakpoint: 767,
          arrows: false,
          settings: { slidesToShow: 1 }
        }
      ]
    });

    // Toggle features on mobile
    $('.mobile-features-btn').click(function() {
        $(this).closest('.service-card').find('.mobile-features').addClass('show');
        $(this).find('i').removeClass('fa-list').addClass('fa-times');
    });
    
    // Close mobile features
    $('.mobile-features-close').click(function(e) {
        e.stopPropagation();
        $(this).closest('.mobile-features').removeClass('show');
        $('.mobile-features-btn i').removeClass('fa-times').addClass('fa-list');
    });
    
    // Close when clicking outside
    $(document).click(function(e) {
        if ($(e.target).closest('.mobile-features').length === 0 && 
            $(e.target).closest('.mobile-features-btn').length === 0) {
            $('.mobile-features').removeClass('show');
            $('.mobile-features-btn i').removeClass('fa-times').addClass('fa-list');
        }
    });

    // Toggle feature list
    $('.sm-content .btn:contains("Features List")').on('click', function(e) {
    e.preventDefault();

      const $btn = $(this);
      const $featureList = $btn.closest('.sm-content').find('.feature-list');

      $featureList.slideToggle(200, function() {
        if ($featureList.is(':visible')) {
            $btn.text('Hide Features');
        } else {
            $btn.text('Features List');
        }
      });
    });
});
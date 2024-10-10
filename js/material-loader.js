$(document).ready(function () {
    $.get('material-sticker-template.html', function (template) {
      fetch('content/material/material.json')
        .then(response => response.json())
        .then(data => {
          data.stickers.forEach(sticker => {
            const row = $(template);
            row.find('#image-sticker').attr('src', sticker.image);
            console.log(row);
            $('.slider-stickers').append(row);
          });
        })
        .then(() => {
          $('.slider-stickers').slick({
            centerMode: true,
            centerPadding: '120px',
            slidesToShow: 3,
            arrows: false,
            responsive: [
              {
                breakpoint: 768,
                settings: {
                  centerMode: true,
                  centerPadding: '40px',
                  slidesToShow: 3
                }
              },
              {
                breakpoint: 480,
                settings: {
                  centerMode: true,
                  centerPadding: '40px',
                  slidesToShow: 1
                }
              }
            ]
          });
        })
        .catch(error => console.error('Error loading termine:', error));
    });
  }
);
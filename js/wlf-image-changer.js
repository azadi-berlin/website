const images = [
  'asset/images/wlf-header-1.svg',
  'asset/images/wlf-header-2.svg',
  'asset/images/wlf-header-3.svg',
  'asset/images/wlf-header-4.svg',
  'asset/images/wlf-header-5.svg',
  'asset/images/wlf-header-6.svg',
  'asset/images/wlf-header-7.svg',
  'asset/images/wlf-header-8.svg',
  'asset/images/wlf-header-9.svg',
];
let currentIndex = 0;
const headerImage = document.getElementById('wlf-header-image');
headerImage.src = images[0];

setInterval(() => {
  headerImage.style.transition = 'opacity 1s';
  headerImage.style.opacity = 0;
  setTimeout(() => {
    currentIndex = (currentIndex + 1) % images.length;
    headerImage.src = images[currentIndex];
    headerImage.style.transition = 'opacity 1s';
    headerImage.style.opacity = 1;
  }, 1000);
}, 5000);
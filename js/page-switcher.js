$(document).ready(function () {
  function switchToPage(page) {
    $('#main-container').load(`${page}.html`);
  }

  switchToPage('home');

  const pages = {
    home: $('#btn-header-home'),
    termine: $('#btn-header-termine'),
    infos: $('#btn-header-infos'),
    material: $('#btn-header-material'),
    galerie: $('#btn-header-galerie'),
    werdeAktiv: $('#btn-header-werde-aktive'),
    kontakt: $('#btn-header-kontakt'),
  }

  Object.keys(pages).forEach(page => pages[page].on('click', () => switchToPage(page)));
});



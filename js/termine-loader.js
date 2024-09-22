$(document).ready(function () {
    $.get('termine-template.html', function (template) {
      fetch('content/termine/termine.json')
        .then(response => response.json())
        .then(data => {
          data.forEach(terminInfo => {
            const row = $(template);
            row.find('#image-termine').attr('src', terminInfo.image);
            row.find('#text-termine-location').text(terminInfo.location);
            row.find('#text-termine-date').text(terminInfo.date);
            row.find('#text-termine-title').text(terminInfo.title);
            row.find('#text-termine-description').text(terminInfo.description);
            row.find('#link-termine').text( terminInfo.contact);
            row.find('#link-termine').attr('href', terminInfo.contactLink);
            $('#termine-table').append(row);
          });
        })
        .catch(error => console.error('Error loading termine:', error));
    });
  }
);
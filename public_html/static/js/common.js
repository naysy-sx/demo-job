document.addEventListener("DOMContentLoaded", function() {

  console.log('Запуск скриптов для всех страниц')

  Fancybox.bind('[data-fancybox="video-gallery"]');
  var links = document.querySelectorAll('.call-to-action-link');
  links.forEach(function(link) {
    link.addEventListener('click', function(event) {
      event.preventDefault(); // Отменяем стандартное поведение ссылки
      Fancybox.show([{
        src: '#main-modal',
        type: 'inline'
      }]);
    });
  });
});



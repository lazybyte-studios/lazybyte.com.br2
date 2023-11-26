document.addEventListener('DOMContentLoaded', function() {
    if ('serviceWorker' in navigator) {
      navigator.serviceWorker.register('_sw.js').then(function(registration) {
        console.log('Service Worker registrado com sucesso:', registration);
      }).catch(function(error) {
        console.log('Erro ao registrar Service Worker:', error);
      });
    }
});

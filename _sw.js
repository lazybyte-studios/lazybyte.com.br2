/*
Chamando pelo service worker geramos uma espécie de multithread (este é um exemplo)

Só pode haver um no app.

Deve ficar na raiz, assim pode acessar todos os arquivos

Não necessita a importação usando script dos arquivos js na index.

Como você deve saber, o JavaScript é de thread único e não permite a criação de threads. Um web worker permite executar código em um thread separado para uso geral.

Como o Web Worker possui seu próprio encadeamento, ele pode executar tarefas com muitos processos sem congelar a página.

https://womakerscode.gitbook.io/pwa-workshop/3.-precaching-e-modo-offline-basico

*/

const SW = class {

  constructor()
  {
    this.limpaSW();
    this.instalaSW();
  }

  limpaSW()
  {
    // Exclui o service worker se houver uma versão nova
    navigator.serviceWorker.getRegistrations().then(function(registrations) {
      for(let registration of registrations) {
          registration.unregister();
      } 
    });
  }

  instalaSW()
  {
    // instala o Service Worker e chama a criação do cache       
    if ('serviceWorker' in navigator) {
      navigator.serviceWorker
      .register('_cache.js')
          .then(serviceWorker => {
          console.log('Service Worker registered: ' + serviceWorker);
          })
          .catch(error => {
          console.log('Error registering the Service Worker: ' + error);
      });
    }
  }
}

export{ SW };
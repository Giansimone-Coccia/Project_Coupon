window.addEventListener('pageshow', function(event) {
  var currentPage = event.target;
  var isReloadedPage = event.persisted || (typeof window.performance != 'undefined' && window.performance.navigation.type === 2);

  if (isReloadedPage) {
    // Ricarica la pagina se è stata caricata dal cache del browser
    currentPage.location.reload();
  }
});



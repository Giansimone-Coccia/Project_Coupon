window.addEventListener('pageshow', function(event) { //Questa riga registra un gestore di eventi per l'evento 'pageshow', che viene attivato quando una pagina viene mostrata o ripristinata.
  var currentPage = event.target; //Questa riga ottiene l'elemento corrente che ha scatenato l'evento 'pageshow'. In questo caso, event.target rappresenta la pagina corrente.
  var isReloadedPage = event.persisted || (typeof window.performance != 'undefined' && window.performance.navigation.type === 2);
  //vede se la pagina è stata ricaricata dalla cache
  //typeof window.performance != 'undefined' && window.performance.navigation.type === 2 controlla se l'oggetto window.performance è definito e se il tipo di navigazione è 2 (indicando che la pagina è stata caricata tramite un'azione di ricarica).
  if (isReloadedPage) {
    currentPage.location.reload();
  }
});



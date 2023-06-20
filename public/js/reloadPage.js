window.addEventListener('pageshow', function(event) {
  var currentPage = event.target;
  var isReloadedPage = event.persisted || (typeof window.performance != 'undefined' && window.performance.navigation.type === 2);

  if (isReloadedPage) {
    currentPage.location.reload();
  }
});



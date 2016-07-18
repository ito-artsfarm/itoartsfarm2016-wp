window.addEventListener( "scroll", function() {
  var headerElement = document.getElementById( "header" ) ;
  var rect = headerElement.getBoundingClientRect() ;
  var y = rect.top + window.pageYOffset ;
  if (y > 0) {
    headerElement.classList.remove('header-inner-hidden');
  } else {
    headerElement.classList.add('header-inner-hidden');
  }
} ) ;

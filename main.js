$(document).ready(function() {
  var $window = $(window);

      // Function to handle changes to style classes based on window width
      function checkWidth() {
      if ($window.width() < 980) {
          $('#navbarSupportedContent').removeClass('collapse navbar-collapse').addClass('offcanvas offcanvas-start px-2');
          };

      if ($window.width() >= 980) {
          $('#navbarSupportedContent').removeClass('offcanvas offcanvas-start px-2').addClass('collapse navbar-collapse');
      }
  }

  // Execute on load
  checkWidth();

  // Bind event listener
  $(window).resize(checkWidth);
  
  $('#checkbox').click(function(){
    var element = document.body; 
    $('#root').addClass('bg-dark text-light');
    $('#rootnav').addClass('bg-dark text-light');
  });
});


// Set theme to the user's preferred color scheme
function updateTheme() {
  const colorMode = window.matchMedia("(prefers-color-scheme: dark)").matches ?
    "dark" :
    "light";
  document.querySelector("html").setAttribute("data-bs-theme", colorMode);
}

// Set theme on load
updateTheme()

// Update theme when the preferred scheme changes
window.matchMedia('(prefers-color-scheme: dark)').addEventListener('change', updateTheme)
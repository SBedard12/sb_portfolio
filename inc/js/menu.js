jQuery(document).ready(function ($) {
  $(".navMainBtn").click(function() {
    $(".menuPrincipale").toggleClass( "open" );
    $(".navMainBtn").toggleClass( "open" );
  });
});

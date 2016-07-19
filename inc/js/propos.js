jQuery(document).ready(function ($) {

  $(".mousemove").css({top:"0px",opacity: "1"});
  $container = $('body');
  $scope = $('.mousemove');
  container_w = $container.width();
  container_h = $container.height();

  $container.mousemove(function( event ) {
    positionSourieX = event.pageX;
    positionSourieY = event.pageY;

    numdegX = ((positionSourieX * 15 ) / container_w)-7;
    numdegY = ((positionSourieY * 15 ) / container_w)-7;

    numTranX = ((positionSourieX * 20 ) / container_w);
    numTranY = ((positionSourieY * 20 ) / container_w);

    $scope.css({transform: 'rotateX('+numdegY+'deg)'+'rotateY('+numdegX+'deg)'+'translateX(-'+numTranX+'px)'+'translateY(-'+numTranY+'px)'});

  });


  $(".clickable").click(function(e) {
    if($(".clickBlackIcone").hasClass("active")){
        $(".clickBlackIcone").removeClass("active");
        $( ".content" ).each(function() {
          $( this ).removeClass( "open" );
        });
        console.log("jai la classe");
    }
    $(".clickBlackIcone").addClass("active");
    var datapropos = $(this).data("propos");
    $("."+datapropos+"Content").addClass("open")

  });

  $(".close").click(function(e) {
      $(".clickBlackIcone").removeClass("active");
      $( ".content" ).each(function() {
        $( this ).removeClass( "open" );
      });
  });

});

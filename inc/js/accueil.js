jQuery(document).ready(function ($) {

  $container = $('body');
  $scope = $('.ScopeDesign');
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
    $scope.css('background-position-x', ''+numTranX+'%');
    $scope.css('background-position-y', ''+numTranY+'%');



});


});

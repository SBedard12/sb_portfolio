jQuery(document).ready(function ($) {

  $container = $('body');
  $scope = $('.chartCompetences');
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



  $(".chartCompetences").easyPieChart({
    barColor: '#8ec714',

    trackColor: '#e7e7e7',
    scaleColor: '#dfe0e0',
    scaleColor: false,
    lineCap: 'butt',
    lineWidth: 15,
    size: 400,
    animate: 1000,
    onStart: $.noop,
    onStop: $.noop
  });

  $(".competencesNavigation ul li").click(function(e) {

    $(".competencesNavigation ul li").each(function() {
      if($(this).hasClass("active")){
        $(this).removeClass("active");
      }
    });
    $(this).addClass("active");
     var dataValue = $(this).data("value");
     var dataName = $(this).data("name");
     $(".nameCompetence").text(dataName);
     $(".score").text(dataValue);
     $('.chartCompetences').data('easyPieChart').update(dataValue);
  });

});

jQuery(document).ready(function ($) {

  $container = $('body');
  $scope = $('.chartCompetences');
  container_w = $container.width();
  container_h = $container.height();

  $(".chartCompetences").css({top:"0px",opacity: "1"});

  $(".listePratique").css({bottom:"60px",opacity: "1"});




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


  // javascript pour le graphique de competences
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

  // javascript pour  pour changer le graphique de competences
  // selon la bonne section
  $(".competencesNavigation ul li").click(function(e) {
    $(".competencesNavigation ul li").each(function() {
      if($(this).hasClass("active")){
        $(this).removeClass("active");
      }
    });

    $(this).addClass("active");

     var dataValue = $(this).data("value");
     var dataName = $(this).data("name");

     switch(dataValue) {
       case 90:
            $(".listePratique").text("Photoshop / illustrator / indesign / experience design / axure /  UX /  Suite adobe");
           break;
       case 85:
           $(".listePratique").text("Javascript / jquery / Ajax / sass / susy / Animation css / HTML5 / boostrape / git");
           break;
       case 75:
            $(".listePratique").text("Php / as3 / twig / mysql / mvc / backbone");
           break;
     }


     $(".nameCompetence").text(dataName);
     $(".score").text(dataValue);
     $('.chartCompetences').data('easyPieChart').update(dataValue);
  });

});

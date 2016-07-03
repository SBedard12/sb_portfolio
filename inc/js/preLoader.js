jQuery(document).ready(function ($) {

   i=0;
  // set timeout
  var tid = setTimeout(mycode, 50);


  function mycode() {
    i = i + 1;
    $(".countDown").text(i);

    if(i < 100){
        tid = setTimeout(mycode, 50); // repeat myself
    }
    else{
        $(".splashScreen").fadeOut();
    }
  }

  $(".preLoaderCircle .slowCircle").css({transform: 'rotate(-360deg)'});

  $(".preLoaderCircle .fastCircle").css({transform: 'rotate(360deg)'});

});

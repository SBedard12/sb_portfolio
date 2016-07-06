jQuery(document).ready(function ($) {

  

  $(".pageChange").click(function(e) {
       var value = $(this).data("page");
       $("body").addClass("transition");
       setTimeout(function(){
          window.location.replace(value)
        }, 500);
  });


});

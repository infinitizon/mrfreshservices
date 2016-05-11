$(document).ready(function() {
   function textloop() {
     // get the item that currently has the 'show' class
     var current = $(".comment .active");
     /*
      * find the next item with some help from jQuery's ternary operator
      * the syntax for the ternary operator is 'a ? b : c'
      * in other words 'if a is true return b otherwise return c'
      */
     var next = current.next().length ? current.next() : current.parent().children(':first');
     // fade out the current item and remove the 'show' class
     current.fadeOut(500,function(){
       // fade in the next item and add the 'show' class
         next.fadeIn(500).addClass("active");
         current.removeClass("active");
     });
     // repeat by calling the textloop method again after 3 seconds
     setTimeout(textloop,6000);
   }
   // call the text loop method when the page loads
   textloop();
});